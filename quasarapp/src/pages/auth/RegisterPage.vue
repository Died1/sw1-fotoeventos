<template>
  <div class="q-pa-md" style="max-width: 400px">
    <q-form @submit="onSubmit" class="q-gutter-md">
      <q-input filled v-model="firstname" label="Your firstname *" hint="firstname" lazy-rules
        :rules="[val => val && val.length > 0 || 'Please type something']" />
      <q-input filled v-model="lastname" label="Your lastname *" hint="lastname" lazy-rules
        :rules="[val => val && val.length > 0 || 'Please type something']" />
      <q-input filled v-model="email" label="Your email *" hint="email" lazy-rules
        :rules="[val => val && val.length > 0 || 'Please type something']" />
      <q-input filled type="password" v-model="password" label="Your password *" />
      <div>
        <q-btn class="full-width" label="Registrar" type="submit" color="primary" />
      </div>
    </q-form>

  </div>
</template>

<script lang="ts">

import { defineComponent, ref } from 'vue';
import { useRouter } from 'vue-router';
import { api } from 'boot/axios';
import { setToken } from '../../utils/auth';


export default defineComponent({
  name: 'RegisterPage',
  setup() {
    const router = useRouter();
    const redirectParam = router.currentRoute.value.query.redirect as string | undefined;
    const firstname = ref('');
    const lastname = ref('');
    const email = ref('');
    const password = ref('');

    async function onSubmit() {
      try {
        const datos = {
          firstname: firstname.value,
          lastname: lastname.value,
          email: email.value,
          username: email.value,
          password: password.value
        };

        const { data, status } = await api.post('/auth/register', datos);
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
      firstname,
      lastname,
      email,
      password,
      onSubmit
    }
  }
});
</script>
