<template>
  <q-layout class="bg-grey-1">
    <q-page-container>
      <q-page class="row items-center justify-center">
        <q-col  style="width: 380px;" class="q-pa-md">
          <!-- Contenido del formulario para móviles -->
          <q-form @submit="onSubmit" class="q-gutter-md">
            <q-input filled v-model="firstname" label="Your firstname *" hint="firstname" lazy-rules
              :rules="[val => val && val.length > 0 || 'Please type something']" />
            <q-input filled v-model="lastname" label="Your lastname *" hint="lastname" lazy-rules
              :rules="[val => val && val.length > 0 || 'Please type something']" />
            <q-input filled v-model="email" label="Your email *" hint="email" lazy-rules
              :rules="[val => val && val.length > 0 || 'Please type something']" />
            <q-input filled v-model="username" label="Your username *" hint="username" lazy-rules
              :rules="[val => val && val.length > 0 || 'Please type something']" />
            <q-input filled type="password" v-model="password" label="Your password *" />
            <div class="q-mt-md">
              Already have an account? <router-link to="/login">Login here</router-link>
            </div>

            <div>
              <q-btn class="full-width" label="Registrar" type="submit" color="primary" />
            </div>
            <div class="row items-center justify-center" style="min-height:100px">
              <q-spinner-cube v-if="loading" :size="'xl'" color="primary" />
            </div>
          </q-form>
        </q-col>
      </q-page>
    </q-page-container>

  </q-layout>
</template>

<script lang="ts">

import { defineComponent, ref } from 'vue';
import { useRouter } from 'vue-router';
import { api } from 'boot/axios';
import { Notify } from 'quasar';
import { obtenerToken, setToken } from '../../utils/auth';


export default defineComponent({
  name: 'RegisterPage',
  setup() {
    const router = useRouter();
    const redirectParam = router.currentRoute.value.query.redirect as string | undefined;
    const firstname = ref('');
    const username = ref('');
    const lastname = ref('');
    const email = ref('');
    const password = ref('');
    const loading = ref(false);

    async function onSubmit() {
      try {
        loading.value = true;
        const datos = {
          firstname: firstname.value,
          lastname: lastname.value,
          email: email.value,
          username: username.value,
          password: password.value
        };

        const config = {
          headers: {
            'Accept': 'application/json',
            // Puedes agregar otros encabezados según sea necesario
          },
        };
        console.log(datos)
        const { data, status } = await api.post('/auth/register', datos, config);
        if (status === 200) {
          setToken(data.token);
          // Redirigir al usuario después de un inicio de sesión exitoso
          const redirectPath = redirectParam || '/'; // Si hay un parámetro 'redirect', úsalo; de lo contrario, usa la ruta predeterminada
          router.push(redirectPath);
        }
        console.log(data)
      } catch (error) {
        Notify.create({
          type: 'negative',
          position: 'top',
          message: 'No se pudo crear su cuenta intente nuevamente',
          timeout: 1000
        })
      }
      finally{
        loading.value = false;
      }
    }

    return {
      firstname,
      lastname,
      email,
      username,
      password,

      loading,
      onSubmit
    }
  }
});
</script>
