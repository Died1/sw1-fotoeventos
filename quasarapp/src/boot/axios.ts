import { boot } from 'quasar/wrappers';
import axios, { AxiosInstance } from 'axios';

declare module '@vue/runtime-core' {
  interface ComponentCustomProperties {
    $axios: AxiosInstance;
    $api: AxiosInstance;
  }
}

const api = axios.create({ baseURL: 'https://sw2.campozanodevlab.com/api' });


export default boot(({ app }) => {
  app.config.globalProperties.$axios = axios;
  app.config.globalProperties.$api = api;
  api.interceptors.request.use((config) => {
    // Verifica si la solicitud necesita autorización
    const requiresAuthorization = config.headers['AuthorizationRequired'];
    if (requiresAuthorization) {
      const userLocaStorage = localStorage.getItem('authStore');
      if (userLocaStorage) {
        const bearearToken = JSON.parse(userLocaStorage).userState.token;
        config.headers['Authorization'] = `Bearer ${bearearToken}`;
      }
    }
    return config;
  });
});

api.defaults.baseURL = 'https://sw2.campozanodevlab.com/api';

export { api };
