<template>
  <q-page class="row  justify-center">
    <q-card class="col-md-6 col-xs-12 ">
      <q-card-section class="row justify-center">
        <q-form @submit="updateProfile" class="q-gutter-md" style="width:380px">

          <PhotoInput
            @photo-selected="handlePhotoSelected"
            :urlimage="profile.photo"
          />

          <q-input v-model="profile.firstname" />

          <q-input v-model="profile.lastname" />
          <q-input v-model="profile.email" />

          <div>
            <q-btn class="full-width" label="Actualizar" type="submit" color="orange" />
          </div>

        </q-form>
      </q-card-section>
    </q-card>
  </q-page>
</template>

<script lang="ts">

import { ref, onMounted } from 'vue';
import { api } from 'boot/axios';
import { useAuthStore } from 'src/stores/auth';
import Photo from './Photo.vue';
import PhotoInput from '../events/PhotoInput.vue';

export default {
  components: {
    Photo,
    PhotoInput
  },
  setup() {

    const authStore = useAuthStore();
    const authUser = authStore.user.user;

    console.log(authUser);

    const profile = ref({
      firstname: authUser.firstname,
      lastname: authUser.lastname,
      email: authUser.email,
      address: '',
      phone: '',
      biography: '',
      photo: authUser.avatar_url
    });
    const loading = ref<Boolean>(false);
    const updateProfile = async () => {
      loading.value = true;
      try {
        const { data } = await api.put('/profile', profile);

        console.log(data);

      } catch (error) {
        console.log(error)
      }
      finally {
        loading.value = false;
      }
    }

    const handlePhotoSelected = async (file: any) => {

      const formData = new FormData();
      formData.append('image', file);

      const { data } = await api.post('/profile', formData, {
        headers:
        {
          'Content-Type': 'multipart/form-data',
          AuthorizationRequired: true
        }
      });


    }

    onMounted(() => {

    });

    return {
      profile,
      loading,
      updateProfile,
      handlePhotoSelected
    };
  },
};
</script>
