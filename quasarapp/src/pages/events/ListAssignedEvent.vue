<template>
  <div class="col-md-12 col-xs-12 q-pa-sm">
    <q-card-section class="q-pt-lg q-pb-lg text-h5">
      Eventos Asignados
    </q-card-section>
    <q-scroll-area style="height: calc(100vh - 460px);">
      <q-list
        v-for="event in items"
        :key="event.id"
      >
          <CardAssignedEvent :event="event" />
      </q-list>
    </q-scroll-area>
  </div>
</template>

<script>
import { defineComponent, ref } from 'vue';
import CardAssignedEvent from './CardAssignedEvent.vue';

export default defineComponent({
  name: "ListAssignedEvent",
  props: {
    items: Array
  },
  components: {
    CardAssignedEvent
  },

})

</script>
