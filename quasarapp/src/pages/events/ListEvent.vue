<template>
  <div class="col-md-12 col-xs-12 q-pa-sm">
    <q-card-section class="q-pt-lg q-pb-lg text-h5">
      Mis Eventos
    </q-card-section>
    <q-scroll-area style="height: calc(100vh - 360px);">
      <q-list
        v-for="event in items"
        :key="event.id"
      >
          <CardEvent :event="event" />
      </q-list>
    </q-scroll-area>
  </div>
</template>

<script>
import { defineComponent, ref } from 'vue';
import CardEvent from './CardEvent.vue';

export default defineComponent({
  name: "ListEvent",
  props: {
    items: Array
  },
  components: {
    CardEvent
  },

})

</script>
