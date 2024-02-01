<template>
  <div class="q-gutter-x-sm">
    <q-item
      clickable
      v-ripple
      @click="showDialogEvent=true"
    >
      <q-item-section side>
        <q-avatar
          rounded
          size="90px"
        >
          <img :src="event.cover_url" style="height:90%"/>
        </q-avatar>
      </q-item-section>
      <q-item-section>
        <q-item-label class="text-negative">{{ formattedDate }}</q-item-label>
        <q-item-label class="text-h6">{{ event.title }}</q-item-label>
        <div class="text-h7">
          Fotografo:
          <q-chip>
            <q-avatar>
              <img src="https://cdn.quasar.dev/img/boy-avatar.png">
            </q-avatar>
            {{ photographer }}
          </q-chip>
        </div>
      </q-item-section>
    </q-item>
    <ShowEvent
      v-model:showDialogEvent="showDialogEvent"
      :qrurl="event.qr_url"
    />
  </div>
</template>

<script>
import { event } from "quasar";
import { defineComponent, ref } from "vue";
import ShowEvent from "./ShowEvent.vue";
export default defineComponent({
  name: "CardEvent",
  props: {
    event: Object,
  },
  components: {
    ShowEvent,
  },
  computed: {
    photographer(props) {
      let photographer = props.event.photographer;
      let photographerFullname = "";
      if (photographer.firstname) {
        photographerFullname = photographerFullname + photographer.firstname;
      }
      if (photographer.lastname) {
        photographerFullname =
          photographerFullname + " " + photographer.lastname;
      }
      return photographerFullname;
    },
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
    };
  },
});
</script>
