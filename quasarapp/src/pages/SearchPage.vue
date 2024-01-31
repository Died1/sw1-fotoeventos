<template>
  <q-page>
    <q-item-label class="text-h6">
      Resultados encontrados: {{ events.length }}
    </q-item-label>
    <q-list class="row">
      <div
        class="event col-sm-3 col-xs-12"
        v-for="event in events"
        :key="event.id"
      >
        <q-card class="q-ma-sm">
          <q-img :src="event.cover_url ? event.cover_url : 'https://cdn.quasar.dev/img/parallax2.jpg'">
            <div class="text-h5 absolute-top ">
              <item-section-label class="text-h6 text-color-primary">
                {{ event.title ? event.title : '' }}
              </item-section-label>
            </div>
            <div class="my-card text-h5 absolute-bottom ">
              <item-section-label class="text-h6">
                By: {{ event.photographer ? event.photographer.username : '' }}
              </item-section-label>
              <q-btn
                class="float-right"
                rounded
                dense
                icon="photo_library"
                :to="'/events/'+event.id+'/details'"
              >
              </q-btn>
            </div>
          </q-img>
        </q-card>
      </div>
    </q-list>
  </q-page>
</template>

<script lang="ts">
import { defineComponent, ref, onMounted, watch } from "vue";
import { api } from "boot/axios";
import CardEvent from "components/CardEvent.vue";

export default defineComponent({
  components: {
    CardEvent,
  },
  props: {
    kw: {
      type: String,
      default: "",
    },
  },
  setup(props) {
    const showInfo = ref(false);
    const events = ref([]);

    const searchEvents = async (search: string) => {
      const { data, status } = await api.get(`/events?kw=${search}`, {
        headers: { AuthorizationRequired: true },
      });
      console.log('result', data);
      events.value = data;
    };
    onMounted(() => {
      searchEvents(props.kw);
    });

    watch(
      () => props.kw,
      (newVal, oldVal) => {
        searchEvents(newVal)
        //console.log("kw ha cambiado:", newVal, oldVal);
      }
    );

    return {
      showInfo,
      events,
      props,
    };
  },
});
</script>

<style>
.event:hover {
  cursor: pointer;
}

.event:hover .my-card {
  display: block;
}

.my-card {
  display: none;
  transition: background-color 0.3s;
  /* Agrega una transición suave al color de fondo */
  position: relative;
  /* Asegura que el contenido absoluto se coloque correctamente */
}

/* Otros estilos de .my-card aquí */
</style>
