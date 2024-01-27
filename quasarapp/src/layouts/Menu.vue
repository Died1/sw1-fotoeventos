<template>
  <q-btn round flat>
    <q-avatar size="26px">
      <template v-if="user.avatar_url">
        <img :src="'http://localhost:8000'+user.avatar_url">
      </template>
      <template v-else>
        <img src="https://cdn.quasar.dev/img/boy-avatar.png">
      </template>
    </q-avatar>
    <q-tooltip>Account</q-tooltip>
    <q-menu anchor="top end" self="top end" style="min-width:300px">
      <q-list class="text-grey-8" style="min-width: 250px">
        <q-item>
          <q-item-section>
            <div class="text-h6">
              {{user.username}}

              <q-badge v-if="user.type" position="right">fotografo</q-badge>
            </div>
          </q-item-section>
        </q-item>
        <q-separator></q-separator>
        <q-item clickable v-close-popup aria-hidden="true"
        to="/padmin">
          <q-item-section avatar>
            <q-icon name="apps" />
          </q-item-section>
          <q-item-section>Panel principal</q-item-section>
        </q-item>
        <q-item clickable v-close-popup aria-hidden="true"
          @click="logout"
        >
          <q-item-section avatar>
            <q-icon name="logout" />
          </q-item-section>
          <q-item-section>Cerrar sesion</q-item-section>
        </q-item>
      </q-list>
    </q-menu>
  </q-btn>
</template>

<script lang="ts">
import { defineComponent } from "vue";
import { useRouter } from 'vue-router';
import { useAuthStore } from 'stores/auth';

export default defineComponent({
  setup() {
    const router = useRouter();
    const authStore = useAuthStore();
    const user = authStore.user.user;

    console.log(user)
    const logout = () =>{
      authStore.logout();
      router.push('/');
    }
    return {
      user,
      logout
    }
  }
})
</script>
