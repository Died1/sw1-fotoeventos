<template>
  <q-page>
    <q-page-section class="row">
      <div class="col-md-3 col-xs-12 q-pa-sm">
        <div class="text-h5">
          Eventos
        </div>
        <q-toolbar class="q-pa-none">
          <q-btn @click="fixed = true" color="primary" class="full-width" label="Crear evento" />
        </q-toolbar>
        <q-separator></q-separator>
        <q-scroll-area style="height: calc(100vh - 160px);">
          <q-list>
            <q-item v-for="event in events" :key="event.id" @click="openDetails(item)" clickable>
              <div class="item-content">
                <img :src="event.cover_url" alt="Avatar" class="avatar" />
                <div class="item-details">
                  <p class="q-mb-none fecha text-negative">{{ event.date_start }}</p>
                  <p class="text-h6 titulo">{{ event.title }}</p>
                </div>
              </div>
            </q-item>
          </q-list>
        </q-scroll-area>
      </div>

      <div class="col-md-9">
        <q-scroll-area style="height: calc(100vh - 64px);">
          <q-card>
            <q-img src="https://i.imgur.com/fsyrScY.jpg" style="height: 200px;" />

            <q-card-section>

              <q-tabs inline narrow v-model="activeTab">
                <q-tab name="info" label="informacion" />
                <q-tab name="details" label="Detalles" />
              </q-tabs>
            </q-card-section>

            <q-card-section>

              <q-tab-panels v-model="activeTab">
                <q-tab-panel name="info" class="row">

                  <div class="col-md-6 col-xs-12 q-pa-sm">

                    <q-card>
                      <q-card-section>
                        <q-item>
                          <q-item-section>
                            <q-item-label class="text-h6">Titulo</q-item-label>
                            <q-item-label caption>xd</q-item-label>
                          </q-item-section>
                        </q-item>
                      </q-card-section>

                      <q-separator />

                      <q-card-section>
                        <q-item>
                          <q-item-section>
                            <q-item-label>Detales</q-item-label>
                          </q-item-section>
                        </q-item>
                      </q-card-section>
                    </q-card>
                  </div>
                  <div class="col-md-6 col-xs-12 q-pa-sm">

                    <q-card>
                      <q-img :src="qr_img">

                      </q-img>

                    </q-card>
                  </div>


                </q-tab-panel>

                <q-tab-panel name="details">
                  Detalles
                </q-tab-panel>
              </q-tab-panels>
            </q-card-section>
          </q-card>
        </q-scroll-area>
      </div>
    </q-page-section>
    <q-page-sticky v-if="selectedItem" expand position="top">
      <div style="width: 100%; height:90vh">
        hika
      </div>
    </q-page-sticky>
    <q-dialog v-model="fixed">
      <q-card>
        <q-card-section class="row items-center q-pb-none">
          <div class="text-h6 text-center">Crear evento</div>
          <q-space />
          <q-btn icon="close" flat round dense v-close-popup />
        </q-card-section>
        <q-separator />
        <q-card-section class="scroll q-pa-none">
          <q-scroll-area style="height: 70vh; width:450px">
            <q-form ref="myForm" @submit="onSubmit" @reset="onReset">
              <!-- foto de portada TODO:-->
              <q-card class="bg-grey-3">
                <input type="file" @change="onCoverPhotoChange" accept="image/*" style="display: none"
                  ref="refFotoPortada" />
                <img :src="selectedPhotoUrl" alt="Imagen" style="width: 100%; height: 200px;" />
                <q-btn @click="actualizarImagen" class="absolute-bottom-right" label="Añádir foto de portada"
                  color="primary" />
              </q-card>
              <!-- /foto de portada -->
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
                <div class="row">
                  <div class="col-6 q-pr-sm">
                    <q-input outlined v-model="dateStart" mask="date" :rules="['date']" label="Fecha de inicio">
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
                    <q-input outlined v-model="timeStart" mask="time" :rules="['time']" label="Hora de inicio">
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

                <q-input type="textarea" rows="4" outlined label="¿Cuales son los detalles?" v-model="details" />
              </div>
            </q-form>
          </q-scroll-area>

        </q-card-section>
        <q-separator />
        <q-card-section>
          <q-btn @click="submitForm" label="Crear evento" class="full-width" color="primary" v-close-popup />
        </q-card-section>
      </q-card>
    </q-dialog>
  </q-page>
</template>

<script>
import { ref, onMounted } from 'vue'
import { api } from 'boot/axios'
import { useAuthStore } from 'src/stores/auth';
export default {

  setup() {
    const authStore = useAuthStore();
    const organizer = authStore.user.user;

    const activeTab = ref('informacion');
    const selectedPhotoUrl = ref('https://i.imgur.com/m2HqiWK.png');

    const details = ref('');
    const dateStart = ref('2019/02/01');
    const dateEnd = ref('2019/02/01');
    const qr_url = ref('');
    const cover_url = ref('');
    const address = ref('');
    const qr_img = ref('');
    const refFotoPortada = ref(null);


    const events = ref([]);

    const fetchEvents = async () => {
      try {
        const { data } = await api.get('/events', { headers: { AuthorizationRequired: true } });
        events.value = data;
      } catch (error) {
        console.log(error);
      }
    }

    const fetchPhotographers = async () => {
      try {
        const { data } = await api.get('/photographers', {
          headers: {
            'Accept': 'application/json',
          },
        });
        console.log('Photogra', data)
      } catch (error) {
        console.log(error);
      }
    }

    const addEvent = async () => {
      try {
        const datos = {
          title: title.value,
          detail: details.value,
          date_start: dateStart.value,
          date_end: dateEnd.value,
          qr_url: qr_url.value,
          cover_url: cover_url.value,
          address: address.value,
          cover: null
        };
        const formData = new FormData();
        Object.keys(datos).forEach(key => {
          formData.append(key, datos[key]);
        });

        // Agregar la foto de portada al FormData
        formData.append('cover', refFotoPortada.value);
        console.log(datos);
        return;

        const { data } = await api.post('/events',
          datos,
          {
            headers: {
              AuthorizationRequired: true
            }
          });
        // Agrega el nuevo evento a la lista existente
        events.value.push(data);

      } catch (error) {
        console.log(error);
      }
    }

    const title = ref('');

    const myForm = ref(null);
    const onSubmit = () => {
      addEvent();
      console.log("ONSUBMIT", title.value);
    };
    const submitForm = () => {
      if (myForm.value) {
        myForm.value.submit();
      }
    }
    const actualizarImagen = () => {
      refFotoPortada.value.click();
    }
    const onCoverPhotoChange = (event) => {

      const file = event.target.files[0];
      if (file) {
        // Obtener la URL de la foto seleccionada
        selectedPhotoUrl.value = URL.createObjectURL(file);
      }

    }

    const showEvent = async (id) => {
      try {
        const config = {
          headers: {
            'Accept': 'application/json',
            'Authorization': `Bearer ${obtenerToken()}`,

          },
        };
        const datos = {
          title: title.value,
          detail: details.value,
          date_start: dateStart.value,
          date_end: dateEnd.value,
          qr_url: qr_url.value,
          cover_url: cover_url.value,
          address: address.value
        };
        const { data } = await api.get(`/events/${id}`, config);
        console.log(data);
        qr_img.value = data.qr_url;
      } catch (error) {
        console.log(error)
      }
    };

    onMounted(() => {
      fetchEvents();
      fetchPhotographers();
    });

    return {
      organizer,
      events,
      tab: ref('mails'),
      title,
      details,
      activeTab,
      innerTab: ref('innerMails'),
      splitterModel: ref(20),
      fixed: ref(false),
      date: ref('2019/02/01'),
      time: ref('10:56'),
      dateStart,
      dateEnd,
      timeStart: ref('10:56'),
      timeEnd: ref('10:56'),
      qr_img,
      privacidad: ref(''),
      timeWithSeconds: ref('10:56:00'),
      options: [
        'Privado', 'Publico'
      ],
      myForm,
      refFotoPortada,
      selectedPhotoUrl,
      onSubmit,
      submitForm,
      showEvent,
      fetchEvents,
      actualizarImagen,
      onCoverPhotoChange
    }
  }
}
</script>


<style scoped>
.full-width {
  width: 100%;
}

.item-content {
  display: flex;
  align-items: center;
}

.avatar {
  width: 80px;
  height: 60px;
  border-radius: 5%;
  /* Para que la imagen sea redondeada como un avatar */
  margin-right: 10px;
  /* Espacio entre la imagen y el texto */
}

.item-details {
  flex: 1;
  /* Para que el contenido se expanda y ocupe el espacio restante */
}
</style>
