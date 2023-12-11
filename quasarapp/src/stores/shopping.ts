import { defineStore } from 'pinia';

interface Product {
  id: string;
  name: string;
  price: string;
}

const shoppingStore = defineStore('shoppingId', {
  state: () => {
    return {
      counter: 0,
      products: [
        { id: 'prod1', name: 'Foto full HD', price: '12.5' } as Product,
        { id: 'prod2', name: 'Foto HD', price: '19.0' } as Product,

      ],

    };
  },

  getters: {
    totalAmount(state) {
      return state.products.reduce((total, product) => total + parseFloat(product.price), 0);
    },
  },
  actions: {
    increment() {
      this.counter++;
    },
  },
});

export default shoppingStore;
