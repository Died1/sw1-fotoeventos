<template>
  <q-layout class="bg-grey-1">
    <q-page-container>
      <q-page class="row items-center justify-center">
        <q-col style="width: 380px;" class="q-pa-md">
          <!-- Contenido del formulario para móviles -->
          <q-form @submit="onSubmit" class="q-gutter-md">
            <q-input filled v-model="username" label="Your username *" hint="username o email" lazy-rules
              :rules="[val => val && val.length > 0 || 'Por favor ingrese username']" />
            <q-input filled type="password" v-model="password" label="Your password *"
            :rules="[val => val && val.length > 0 || 'Por favor ingrese su password']"/>

            <div class="q-mt-md">
              Don't have an account? <router-link to="/register">Create one here</router-link>
            </div>
            <div>
              <q-btn class="full-width" label="Ingresar" type="submit" color="primary" />
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
import { Notify } from 'quasar';
import { useRouter } from 'vue-router';
import { api } from 'boot/axios';
import { setToken } from '../../utils/auth';


export default defineComponent({
  name: 'LoginPage',
  setup() {
    const router = useRouter();
    const redirectParam = router.currentRoute.value.query.redirect as string | undefined;
    const username = ref('');
    const password = ref('');
    const loading = ref(false);

    async function onSubmit() {
      try {
        loading.value = true;
        const datos = {
          username: username.value,
          password: password.value
        };
        const { data, status } = await api.post('/auth/login', datos);
        if (status === 200) {
          setToken(data.token);
          const redirectPath = redirectParam || '/';
          router.push(redirectPath);
        }
      } catch (error) {

        Notify.create({
          type: 'negative',
          position: 'top',
          message: 'No se encontro ninguna cuenta para este username',
          timeout: 1000
        })
        console.log(error)

      }
      finally{
        loading.value = false;
      }
    }

    return {
      username,
      password,
      onSubmit,
      loading
    }
  }
});
</script>
