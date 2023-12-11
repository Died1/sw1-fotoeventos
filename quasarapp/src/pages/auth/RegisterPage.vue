<template>
  <q-layout class="bg-grey-1">
    <q-page-container>
      <q-page class="row items-center justify-center">
        <q-card class="col-md-4 col-xs-11 q-ma-md">
          <q-card-section>
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
            </q-form>
          </q-card-section>
          <q-card-section>
            <div class="row items-center justify-center">
              <q-spinner-cube v-if="loading" :size="'xl'" color="primary" />
            </div>
          </q-card-section>
        </q-card>
      </q-page>
    </q-page-container>
  </q-layout>
</template>

<script lang="ts">

import { defineComponent, ref } from 'vue';
import { useRouter } from 'vue-router';
import { Notify } from 'quasar';
import { api } from 'boot/axios';
import { useAuthStore } from 'stores/auth';



export default defineComponent({
  name: 'RegisterPage',
  setup() {

    const authStore = useAuthStore(); // Importa el store de autenticación


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

        const { data, status } = await api.post('/auth/register', datos);
        if (status === 200) {
          await authStore.login({ user: data.user, token: data.token });
          const redirectPath = redirectParam || '/';
          router.push(redirectPath);
        }
      } catch (error) {
        Notify.create({
          type: 'negative',
          position: 'top',
          message: 'No se pudo crear su cuenta intente nuevamente',
          timeout: 1000
        })
      }
      finally {
        loading.value = false;
      }
    }

    return {
      firstname,
      lastname,
      email,
      username,
      password,

      loading,//spinner
      onSubmit//crear usuario
    }
  }
});
</script>
