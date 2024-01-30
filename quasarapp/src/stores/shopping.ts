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
      products: [] as Product[],
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
    add(product: Product){
        this.products.push(product);
        this.counter = this.products.length;

    }
  },
});

export default shoppingStore;
