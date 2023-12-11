<template>
  <div class="row items-center justify-center bg-grey-2 q-pa-md" style="min-height: 100vh">
    <q-card class="col-md-6 col-xs-12 q-ma-md">

      <q-card-section class="justify-center" style="min-height:300px">
        AQUI KA FOTO
      </q-card-section>

    </q-card>
    <q-card class="col-md-4 col-xs-12 q-ma-md">
      <q-separator />
      <q-card-section class="justify-center" style="min-height:300px">

        <q-item>
          <q-item-section>

            <q-item-label>Nombre</q-item-label>
          </q-item-section>
        </q-item>
        <q-item>
          <q-item-section>

            <q-item-label>Tamaño</q-item-label>
          </q-item-section>
        </q-item>
        <q-item>
          <q-item-section>

            <q-item-label>By: </q-item-label>
          </q-item-section>
        </q-item>
        <q-item>
          <q-item-section>

            <q-item-label>Precio</q-item-label>
          </q-item-section>
        </q-item>
        <q-item>
          <q-item-section>

            <q-btn class="full-width" @click="increment" color="primary" label="Agregar al carrito"></q-btn>
          </q-item-section>
        </q-item>
      </q-card-section>
      <q-separator />
    </q-card>
  </div>
</template>

<script lang="ts">
import { defineComponent, ref } from "vue";
import  shoppingStore  from 'stores/shopping';

export default defineComponent({

  setup() {

    const shopping = ref(shoppingStore());

    const increment = () => shopping.value.increment()

    return {
      shopping,
      increment
    }
  }
})
</script>
