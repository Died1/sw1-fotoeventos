import { defineStore } from "pinia";
import { api } from 'boot/axios'
import { obtenerTokenDeUsuario } from "../helpers/firebase";

const STORAGE_KEY = "authStore";

export const useAuthStore = defineStore("auth", {
  state: () => {
    const storedState = localStorage.getItem(STORAGE_KEY);
    return storedState
      ? JSON.parse(storedState)
      : {
          isAuthenticatedState: false,
          userState: null,
        };
  },
  actions: {
    async login(user: any) {
      try {
        const token = await obtenerTokenDeUsuario();
        this.isAuthenticatedState = true;
        this.userState = user;
        this.saveState(); // Guarda el estado en localStorage después de cada cambio
        await this.actualizarTokenEnServidor(token, user.user);
      } catch (error) {
        console.error("Error al iniciar sesión:", error);
      }
    },
    async actualizarTokenEnServidor(token: string, user:any) {
      try {
        await api.post(`/tokenFCM/${user.id}`, { token },  { headers: { AuthorizationRequired: true }});
      } catch (error) {

      }
    },
    logout() {
      this.isAuthenticatedState = false;
      this.userState = null;
      this.saveState(); // Guarda el estado en localStorage después de cada cambio
    },
    saveState() {
      // Guarda el estado actual en localStorage
      localStorage.setItem(STORAGE_KEY, JSON.stringify(this.$state));
    },
  },
  getters: {
    isAuthenticated: (state) => state.isAuthenticatedState,
    user: (state) => state.userState,
  },
});
