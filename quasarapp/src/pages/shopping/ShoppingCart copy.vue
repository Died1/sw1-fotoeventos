<!-- components/ShoppingCart.vue -->
<template>
  <div class="row items-center justify-center bg-grey-2 q-pa-md" style="min-height: 100vh">
    <q-card class="col-md-6 col-xs-12">
      <q-card-section>
        <p class="text-h4">Productos en el carrito</p>
      </q-card-section>
      <q-separator />
      <q-card-section class="justify-center" style="min-height:300px">
        <q-list>
          <q-item v-for="product in cartStore.products" :key="product.id">
            <q-item-section>
              <q-item-label>
                <q-checkbox v-model="product.selected" />
                {{ product.name }}
              </q-item-label>
            </q-item-section>

            <q-item-section side top>
              <!-- Utiliza q-text-right para alinear el precio a la derecha -->
              <q-item-label class="q-text-right">${{ product.price }}</q-item-label>
            </q-item-section>
          </q-item>
        </q-list>
      </q-card-section>
      <q-separator />
      <q-card-section>
        <q-item class="full-width">
          <q-item-section>
            <q-btn color="primary" to="/payment" >Pagar</q-btn>
          </q-item-section>
        </q-item>

      </q-card-section>
    </q-card>
  </div>
</template>

<script>
import { ref, computed } from 'vue';
import shoppingStore from 'stores/shopping'; // Ajusta la ruta según tu configuración

export default {
  setup() {
    const cartStore = ref(shoppingStore());

    const selectedPaymentMethod = ref < String > ('card debito');

    const confirmPayment = () => {
      // Lógica para confirmar el pago, puedes realizar acciones adicionales según el método de pago seleccionado
      console.log('Confirmar Pago con:');
    };

    return {
      cartStore,
      selectedPaymentMethod,
      confirmPayment,
    };
  },
};
</script>


