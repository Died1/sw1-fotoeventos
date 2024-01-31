<template>
  <q-page>

    <q-page-section class="row">

      <q-toolbar class="q-pa-none">
        <q-btn
          @click="showFormCreateEvent = true"
          color="primary"
          class="full-width"
          label="Crear evento"
        />
      </q-toolbar>

      <template v-if="authUser.type === 'photographer'">
        <!-- esta seccion es solo para fotografos -->
        <ListAssignedEvent :items="assignedEvents" />

      </template>

      <ListEvent :items="events" />

      <CreateEvent
        v-model:showFormCreateEvent="showFormCreateEvent"
        @update:showFormCreateEvent="handleUpdateShowForm"
    />

    </q-page-section>
  </q-page>
</template>

<script>
import { ref, onMounted, watch } from "vue";
import { api } from "boot/axios";
import { useAuthStore } from "src/stores/auth";
import ListEvent from "./ListEvent.vue";
import ListAssignedEvent from "./ListAssignedEvent.vue";
import CreateEvent from "./CreateEvent.vue";
import ListAssignedEventVue from "./ListAssignedEvent.vue";

export default {
  components: {
    ListEvent,
    ListAssignedEvent,
    CreateEvent,
  },

  setup() {
    const authStore = useAuthStore();
    const authUser = authStore.user.user;
    const events = ref([]);
    const assignedEvents = ref([]);
    const fetchEvents = async () => {
      try {
        const { data } = await api.get("/events/me", {
          headers: { AuthorizationRequired: true },
        });
        events.value = data;
      } catch (error) {
        console.log(error);
      }
    };

    const fetchAssignedEvents = async () => {
      try {
        const { data } = await api.get("/events-assigned", {
          headers: { AuthorizationRequired: true },
        });
        assignedEvents.value = data;
      } catch (error) {
        console.log(error);
      }
    };


    const handleUpdateShowForm = (value) => {
        //events.value.push(value)
        fetchEvents();
        fetchAssignedEvents();
    }

    onMounted(() => {
      fetchEvents();
      fetchAssignedEvents();
    });

    return {
      events,
      assignedEvents,
      authUser,
      showFormCreateEvent: ref(false),
      handleUpdateShowForm
    };
  },
};
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
