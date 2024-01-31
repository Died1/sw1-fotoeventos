<template>
  <div class="q-gutter-x-sm">
    <q-item
      clickable
      v-ripple
      @click="showDialogEvent = true"
    >
      <q-item-section side>
        <q-avatar
          rounded
          size="100px"
        >
          <img :src="event.cover_url" />
        </q-avatar>
      </q-item-section>
      <q-item-section>
        <q-item-label class="text-negative">{{ formattedDate }}</q-item-label>
        <q-item-label class="text-h6">{{ event.title }}</q-item-label>
        <q-item-label class="text-h7">Dirección:
          <a href="#">{{ event.address }}</a>
        </q-item-label>
      </q-item-section>
    </q-item>
    <ShowAssignedEvent
      v-model:showDialogEvent="showDialogEvent"
      :qrurl="event.qr_url"
      :evento="evento"
    />
  </div>
</template>

<script>
import { event } from "quasar";
import { defineComponent, ref } from "vue";
import ShowAssignedEvent from "./ShowAssignedEvent.vue";
export default defineComponent({
  name: "CardEvent",
  props: {
    event: Object,
  },
  components: {
    ShowAssignedEvent,
  },
  computed: {
    formattedDate() {
      const dateObj = new Date(this.event.date_start); // Supongo que tienes la propiedad 'date' en tu objeto 'event'.
      const options = {
        weekday: "long",
        month: "long",
        day: "numeric",
        hour: "numeric",
        minute: "numeric",
      };
      return dateObj.toLocaleDateString("es-ES", options);
    },
  },
  setup(props) {
    const evento = props.event;

    return {
      showDialogEvent: ref(false),
      evento,
    };
  },
});
</script>
