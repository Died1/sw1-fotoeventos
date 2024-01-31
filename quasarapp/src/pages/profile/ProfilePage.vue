<template>
    <q-page class="row  justify-center">
        <q-card class="col-md-6 col-xs-12 ">
            <q-card-section class="row justify-center">
                <q-form class="q-gutter-md" style="width:380px">
                    <PhotoInput @photo-selected="handlePhotoSelected" :urlimage="profile.photo" />
                    <q-input v-model="profile.firstname" />
                    <q-input v-model="profile.lastname" />
                    <q-input v-model="profile.email" />
                </q-form>
            </q-card-section>
        </q-card>
    </q-page>
</template>

<script lang="ts">

import { defineComponent, ref } from 'vue';
import { api } from 'boot/axios';
import { useAuthStore } from 'src/stores/auth';
import Photo from './Photo.vue';
import PhotoInput from '../events/PhotoInput.vue';
import { Notify } from 'quasar'

export default defineComponent({
    components: {
        Photo,
        PhotoInput
    },

    setup() {


        const authStore = useAuthStore();
        const authUser = authStore.user.user;
        const profile = ref({
            firstname: authUser.firstname,
            lastname: authUser.lastname,
            email: authUser.email,
            address: '',
            phone: '',
            biography: '',
            photo: authUser.avatar_url
        });

        //actualizar foto de perfil 'avatar'
        const handlePhotoSelected = async (file: any) => {
            const formData = new FormData();
            formData.append('image', file);
            try {
                const { data } = await api.post('/profile', formData, {
                    headers:
                    {
                        'Content-Type': 'multipart/form-data',
                        AuthorizationRequired: true
                    }
                });
                Notify.create({
                    message: 'Se actualizo su foto de perfil',
                    color: 'positive',
                    position: 'top-right',
                    timeout: 2000
                })
            } catch (error) {
                Notify.create({
                    message: 'Error al actualizar foto de perfil, intente nuevamente',
                    color: 'negative',
                    position: 'top-right',
                    timeout: 2000
                })
            }
        }

        return {
            profile,
            handlePhotoSelected
        };
    },
});
</script>
