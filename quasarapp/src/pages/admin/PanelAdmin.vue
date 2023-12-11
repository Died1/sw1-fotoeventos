<template>
  <q-page class="row justify-center bg-grey-2">
    <q-card class="col-md-10 col-xs-12 q-pa-md q-gutter-sm">
      <q-card-section class="q-pa-xs">
        <p class=" text-h6">Panel Principal</p>
      </q-card-section>
      <q-separator></q-separator>
      <q-card-section class="q-pa-xs">
        <q-tabs v-model="tab" inline-label class="bg-black text-white shadow-2">
          <q-tab name="profile" icon="person" label="Información" />
          <q-tab name="events" icon="event" label="Eventos" />
          <q-tab name="alarms" icon="download" label="Descargas" />

        </q-tabs>
        <q-separator />

        <q-tab-panels v-model="tab" animated>

          <q-tab-panel name="profile">
            <div class="text-h6">Tu Información</div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
          </q-tab-panel>

          <q-tab-panel name="events">
            <EventPage />
          </q-tab-panel>

          <q-tab-panel name="donwloads">
            <div class="text-h6">Descargas</div>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
          </q-tab-panel>


        </q-tab-panels>
      </q-card-section>
    </q-card>
  </q-page>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";
import EventPage from "../events/EventPage.vue";

export default defineComponent({
  components: {
    EventPage
  },
  setup() {
    const tab = ref('events')
    return {
      tab
    }
  }
})
</script>
