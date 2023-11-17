<template>
  <q-page class="row  justify-center">
    <q-card class="col-md-6 col-xs-12 ">
      <q-card-section class="row justify-center">
        <q-form @submit="updateProfile" class="q-gutter-md" style="width:380px">
          <q-item class="row justify-center">
            <Photo v-model="profile.photo" />
          </q-item>
          <!-- <q-input filled v-model="profile.firstname" label="Your username *" hint="username o email" lazy-rules
            :rules="[val => val && val.length > 0 || 'Por favor ingrese username']" />
 -->
          <div>
            <q-btn class="full-width" label="Actualizar" type="submit" color="orange" />
          </div>
          <div class="row items-center justify-center" style="min-height:100px">
            <q-spinner-cube v-if="loading" :size="'xl'" color="primary" />
          </div>
        </q-form>
      </q-card-section>
    </q-card>
  </q-page>
</template>

<script lang="ts">

import { ref, onMounted } from 'vue';
import { api } from 'boot/axios';
import Photo from './Photo.vue';
import { obtenerToken } from '../../utils/auth';
export default {
  components: {
    Photo
  },
  setup() {
    const profile = ref({
      firstname: '',
      lastname: '',
      email: '',
      address: '',
      phone: '',
      biography: '',
      photo: { file: null, url: 'https://i.imgur.com/jwly0W6.jpeg' }
    });
    const loading = ref<Boolean>(false);
    const updateProfile = async() => {
      loading.value = true;
      try {
        const {data} = await api.put('/profile',profile, {
          headers: {
            'Accept': 'application/json',
            'Authorization': `Bearer ${obtenerToken()}`,
          },
        });

        console.log(data);

      } catch (error) {
        console.log(error)
      }
      finally{
        loading.value = false;
      }
    }

    onMounted(() => {

    });

    return {
      profile,
      loading,
      updateProfile
    };
  },
};
</script>
