import { defineStore } from 'pinia';

const notificationStore = defineStore('notificationId', {
  state: () => {
    return {
      counter: 0,
    };
  },
  getters: {
  },
  actions: {
    increment() {
      this.counter++;
    },
  },
});

export default notificationStore;
