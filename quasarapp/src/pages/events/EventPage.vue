<template>
  <div class="q-pa-md">
    <div class="row">
      <div class="col-3">
        <q-card class="q-pa-xs">
          <q-card-section>
            <div class="text-h5 q-mb-md">
              Eventos
            </div>
            <q-btn @click="fixed = true" color="primary" class="full-width" label="Crear evento" />
          </q-card-section>
          <q-separator />
          <q-card-section>
            <q-scroll-area style="height: 380px;">
              <div class="row no-wrap">
                <q-list class="rounded-borders">
                  <q-card bordered class="q-mb-sm" v-for="event in events" :key="event.id">
                    <q-item clickable class="full-width" @click="showEvent(event.id)">
                      <div class="item-content">
                        <img :src="event.cover_url" alt="Avatar" class="avatar" />
                        <div class="item-details">
                          <p class="q-mb-none fecha text-negative">{{ event.date_start }}</p>
                          <p class="text-h6 titulo">{{ event.title }}</p>
                        </div>
                      </div>
                    </q-item>
                  </q-card>
                </q-list>
              </div>
            </q-scroll-area>
          </q-card-section>
        </q-card>
      </div>

      <div class="col-9">
        <q-card>
          <q-img src="https://i.imgur.com/fsyrScY.jpg" style="height: 200px;" />

          <q-card-section>
            <!-- Pestañas para "Información" y "Detalles" -->
            <q-tabs inline narrow>
              <q-tab name="info" label="Información" />
              <q-tab name="details" label="Detalles" />
            </q-tabs>
          </q-card-section>

          <q-card-section>
            <!-- Contenido de la pestaña activa (puedes usar v-if/v-else para mostrar una a la vez) -->
            <q-tab-panels v-model="activeTab">
              <q-tab-panel name="info">
                <!-- Contenido de la pestaña "Información" -->
              </q-tab-panel>

              <q-tab-panel name="details">
                <!-- Contenido de la pestaña "Detalles" -->
              </q-tab-panel>
            </q-tab-panels>
          </q-card-section>
        </q-card>
      </div>

    </div>

    <q-dialog v-model="fixed">
      <q-card>
        <q-card-section class="row items-center q-pb-none">
          <div class="text-h6 text-center">Crear evento</div>
          <q-space />
          <q-btn icon="close" flat round dense v-close-popup />
        </q-card-section>
        <q-separator />
        <q-card-section style="max-height: 70vh; width:479px" class="scroll q-pa-none">
          <q-form ref="myForm" @submit="onSubmit" @reset="onReset">
            <q-card class="bg-grey-3">
              <img src="https://i.imgur.com/jwly0W6.jpeg" alt="Imagen" style="width: 100%; height: 200px;" />

              <!-- Botón de actualización superpuesto en la esquina superior derecha -->
              <q-btn v-close-popup @click="actualizarImagen" class="absolute-bottom-right" label="Añádir foto de portada"
                color="primary" />
            </q-card>
            <div class="q-gutter-md q-pa-md">

              <q-item class="q-pa-none">
                <q-item-section avatar>
                  <q-avatar>
                    <img src="https://cdn.quasar.dev/img/boy-avatar.png">
                  </q-avatar>
                </q-item-section>

                <q-item-section>
                  <q-item-label caption lines="1" class="text-bold">Eddy Flores</q-item-label>
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

              <q-btn flat label="+ Fecha y hora de finalización" color="primary" />


              <div class="row">
                <div class="col-6 q-pr-sm">
                  <q-input outlined v-model="dateEnd" mask="date" :rules="['date']" label="Fecha de finalización">
                    <template v-slot:append>
                      <q-icon name="event" class="cursor-pointer">
                        <q-popup-proxy cover transition-show="scale" transition-hide="scale">
                          <q-date v-model="dateEnd" minimal>
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
                  <q-input outlined v-model="timeEnd" mask="time" :rules="['time']" label="Hora de finalización">
                    <template v-slot:append>
                      <q-icon name="access_time" class="cursor-pointer">
                        <q-popup-proxy cover transition-show="scale" transition-hide="scale">
                          <q-time v-model="timeEnd">
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

              <q-select outlined v-model="privacidad" :options="options" :dense="dense" :options-dense="denseOpts"
                label="¿Quién puede ver esto?">
                <template v-slot:prepend>
                  <q-icon name="lock" />
                </template>
              </q-select>
              <q-input type="textarea" rows="4" outlined label="¿Cuales son los detalles?" v-model="details" />
            </div>
          </q-form>
        </q-card-section>
        <q-separator />
        <q-card-section>
          <q-btn @click="submitForm" label="Crear evento" class="full-width" color="primary" v-close-popup />
        </q-card-section>
      </q-card>
    </q-dialog>
  </div>
</template>

<script>
import { ref, onMounted } from 'vue'
import { api } from 'boot/axios'

export default {

  setup() {
    const events = ref([]);

    const fetchEvents = async () => {
      try {
        const { data } = await api.get('/events');
        console.log(data)
        events.value = data;
      } catch (error) {
        console.log(error);
      }
    }

    const addEvent = async () => {
      try {

        const { data } = await api.post('/events', {
          "title": "Un título extremadamente largo que excede el nto, es inválido",
          "detail": "Nueva descripción del evento",
          "date_start": "2023-11-12",
          "date_end": "2023-11-12",
          "qr_url": "https://example.com/nuevo-qr",
          "cover_url": "https://example.com/nueva-portada",
          "address": "Nueva dirección del evento"
        });
        console.log(data)
        events.value = data;
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

    const showEvent = (id) => {
      console.log(id);
    };

    onMounted(() => {
      fetchEvents();
    });

    return {
      events,
      tab: ref('mails'),
      title,
      details: ref(''),
      activeTab: ref(''),
      innerTab: ref('innerMails'),
      splitterModel: ref(20),
      fixed: ref(false),
      date: ref('2019/02/01'),
      time: ref('10:56'),
      dateStart: ref('2019/02/01'),
      dateEnd: ref('2019/02/01'),
      timeStart: ref('10:56'),
      timeEnd: ref('10:56'),
      privacidad: ref(''),
      timeWithSeconds: ref('10:56:00'),
      options: [
        'Privado', 'Publico'
      ],
      myForm,
      onSubmit,
      submitForm,
      showEvent,
      fetchEvents
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
