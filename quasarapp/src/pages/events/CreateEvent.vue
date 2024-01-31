<template>
    <div>
        <q-dialog v-model="showFormCreateEvent" persistent>
            <q-card>
                <q-card-section class="row items-center q-pb-none">
                    <div class="text-h6 text-center">Crear evento</div>
                    <q-space />
                    <span class="close" @click="closeFormCreateEvent">&times;</span>
                </q-card-section>
                <q-separator />
                <q-card-section class="scroll q-pa-none">
                    <q-scroll-area style="height: 70vh; width:450px">
                        <q-form ref="myForm" @submit="onSubmit" @reset="onReset">
                            <!-- foto de portada TODO:-->
                            <PhotoInput @photo-selected="handlePhotoSelected" />
                            <div class="q-gutter-md q-pa-md">
                                <q-item class="q-pa-none">
                                    <q-item-section avatar>
                                        <q-avatar>
                                            <img
                                                :src="organizer.avatar_url ? organizer.avatar_url : 'https://cdn.quasar.dev/img/boy-avatar.png'">
                                        </q-avatar>
                                    </q-item-section>
                                    <q-item-section>
                                        <q-item-label caption lines="1" class="text-bold">{{ organizer.firstname + ' ' +
                                            organizer.lastname }}</q-item-label>
                                        <q-item-label caption lines="1">Organizador - Tu perfil</q-item-label>
                                    </q-item-section>
                                </q-item>

                                <q-input outlined v-model="title" label="Nombre Del Evento" />

                                <q-select outlined v-model="assignedPhotographer" :options="photographersOptions"
                                    label="Seleccione un fotografo" />

                                <div class="row">
                                    <div class="col-6 q-pr-sm">
                                        <q-input outlined v-model="dateStart" mask="date" :rules="['date']"
                                            label="Fecha de inicio">
                                            <template v-slot:append>
                                                <q-icon name="event" class="cursor-pointer">
                                                    <q-popup-proxy cover transition-show="scale" transition-hide="scale">
                                                        <q-date v-model="dateStart" minimal>
                                                            <div class="row items-center justify-end">
                                                                <q-btn v-close-popup label="Close" color="primary" flat />
                                                            </div>
                                                        </q-date>
                                                    </q-popup-proxy>
                                                </q-icon>
                                            </template>
                                        </q-input>
                                    </div>
                                    <div class="col-6">
                                        <q-input outlined v-model="timeStart" mask="time" :rules="['time']"
                                            label="Hora de inicio">
                                            <template v-slot:append>
                                                <q-icon name="access_time" class="cursor-pointer">
                                                    <q-popup-proxy cover transition-show="scale" transition-hide="scale">
                                                        <q-time v-model="timeStart">
                                                            <div class="row items-center justify-end">
                                                                <q-btn v-close-popup label="Close" color="primary" flat />
                                                            </div>
                                                        </q-time>
                                                    </q-popup-proxy>
                                                </q-icon>
                                            </template>
                                        </q-input>
                                    </div>
                                </div>

                                <q-input outlined v-model="address" label="Dirección" />

                                <q-input type="textarea" rows="4" outlined label="¿Cuales son los detalles?"
                                    v-model="details" />
                            </div>
                        </q-form>
                    </q-scroll-area>

                </q-card-section>
                <q-separator />
                <q-card-section>
                    <q-btn @click="submitForm" label="Crear evento" class="full-width" color="primary" />
                </q-card-section>
            </q-card>
        </q-dialog>
    </div>
</template>

<script>
import { defineComponent, onMounted, ref } from 'vue';
import { api } from 'boot/axios'
import { Notify } from 'quasar'
import { useAuthStore } from 'src/stores/auth';
import PhotoInput from './PhotoInput.vue';

export default defineComponent({
    props: {
        showFormCreateEvent: Boolean,
    },
    components: {
        PhotoInput
    },
    computed: {
        photographersOptions() {
            return this.photographers.map((item) => ({
                label: `${item.firstname} ${item.lastname}`,
                value: item.id,
            }));
        },
    },
    setup(props, { emit }) {
        const authStore = useAuthStore();
        const myForm = ref(null);
        const photographers = ref([]);

        const coverFile = ref(null);
        const title = ref('');
        const organizer = authStore.user.user;
        const assignedPhotographer = ref('');
        const details = ref('');
        const dateStart = ref('2019/02/01');
        const address = ref('');
        const qr_img = ref('');

        const fetchPhotographers = async () => {
            try {
                const { data } = await api.get('/photographers', { headers: { 'Accept': 'application/json' } });
                photographers.value = data;
            } catch (error) {
                console.log(error);
            }
        }

        const handlePhotoSelected = (photoFile) => {
            coverFile.value = photoFile;
            console.log('Photo File:', photoFile);
        }

        const submitForm = () => {
            if (myForm.value) {
                myForm.value.submit();
            }
        }


        //crear evento
        const onSubmit = async () => {
            try {
                const datos = {
                    title: title.value,
                    detail: details.value,
                    date_start: dateStart.value,
                    address: address.value,
                    cover: coverFile.value,
                    photographer_id: assignedPhotographer.value.value
                };
                const formData = new FormData();
                Object.keys(datos).forEach(key => {
                    formData.append(key, datos[key]);
                });
                const { data } = await api.post('/events',
                    formData, {
                    headers:
                    {
                        'Content-Type': 'multipart/form-data',
                        AuthorizationRequired: true
                    }
                });

                Notify.create({
                    message: 'Nuevo evento agregado',
                    color: 'positive',
                    position: 'top-right',
                    timeout: 2000
                })
                closeFormCreateEvent(data);//cerrar el modal
            } catch (error) {
                Notify.create({
                    message: 'Error al crear evento. intente nuevamente',
                    color: 'negative',
                    position: 'top-right',
                    timeout: 2000
                })
                console.log(error);
            }
        };

        const closeFormCreateEvent = (event) => {
            emit('update:showFormCreateEvent', event)
        }

        const onReset = () => {

        }

        onMounted(() => {
            fetchPhotographers()
        })

        return {
            myForm,
            qr_img,
            photographers,

            organizer,
            title,
            assignedPhotographer,
            date: ref('2019/02/01'),
            time: ref('10:56'),
            dateStart,
            timeStart: ref('10:56'),
            address,
            details,

            onSubmit,
            submitForm,
            closeFormCreateEvent,
            handlePhotoSelected,
            onReset
        }
    }
})
</script>
