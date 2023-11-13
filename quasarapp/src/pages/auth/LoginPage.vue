<template>
  <div class="q-pa-md flex flex-center">
    <q-card class="q-gutter-md flex flex-center">
      <q-card-section>
        <q-form>
          <q-input v-model="username" label="Username" outlined />
          <q-input v-model="password" label="Password" type="password" outlined />
          <q-btn @click="login" label="Login" color="primary" class="q-mt-md" />
        </q-form>
      </q-card-section>
    </q-card>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from 'vue';
import { useRouter } from 'vue-router';
import { setToken } from '../../utils/auth';
import { api } from 'boot/axios';


export default defineComponent({
  name: 'LoginPage',
  setup() {

    const router = useRouter();
    // Obtener el parámetro 'redirect' de la URL
    const redirectParam = router.currentRoute.value.query.redirect as string | undefined;

    const username = ref('');
    const password = ref('');



    async function login() {
      try {
        const datos = {
          username: username.value,
          password: password.value

        };
        
        const { data, status } = await api.post('/login', datos);
        if (status === 200) {
          setToken(data.token);
          // Redirigir al usuario después de un inicio de sesión exitoso
          const redirectPath = redirectParam || '/tu-ruta-de-redireccion'; // Si hay un parámetro 'redirect', úsalo; de lo contrario, usa la ruta predeterminada
          router.push(redirectPath);
        }
        console.log(data)
      } catch (error) {

      }
    }

    return {
      username,
      password,
      login
    }
  }
});
</script>
