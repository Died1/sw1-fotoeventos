<template>
  <q-page class="row items-center justify-evenly">
    Bienvenido
  </q-page>
</template>

<script lang="ts">
import { defineComponent, ref, onMounted } from 'vue';
import { api } from 'boot/axios';
import { obtenerTokenDeUsuario } from "../helpers/firebase";
import { isAuthenticated, obtenerToken } from 'src/utils/auth';


export default defineComponent({
  name: 'IndexPage',
  setup() {
    const actualizeFCM = async () => {
      try {
        const token = await obtenerTokenDeUsuario();//FCM
        if (token) {
          console.log("actualizando token fcm", token);
          const { data, status } = await api.post('/tokenFCM', {
            "token": token,
          }, {
            headers: {
              'Accept': 'application/json',
              'Authorization': `Bearer ${obtenerToken()}`,
            },
          });
          if (status === 200) {
            console.log(data)
          }
        } else {

        }
      } catch (error) {
        console.log("error al actualizar token FCM");
      }
    }

    //actualizar token de usuario para enviarle notificacion push
    onMounted(() => {
      if (isAuthenticated()) {
        actualizeFCM();
      }
    });

    return {

    };
  }
});
</script>
