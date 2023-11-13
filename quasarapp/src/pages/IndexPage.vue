<template>
  <q-page class="row items-center justify-evenly">
    HOLA
  </q-page>
</template>

<script lang="ts">
import { defineComponent, ref } from 'vue';
import { Todo, Meta } from 'components/models';
import { obtenerTokenDeUsuario } from "../helpers/firebase";

export default defineComponent({
  name: 'IndexPage',
  setup() {

    const init = async() => {
      const token = await obtenerTokenDeUsuario();
      if (token) {
        console.log(token)
        // Puedes realizar acciones con el token aquí
      } else {
        // Manejar errores o realizar acciones en caso de que no se obtenga el token
      }
    }

    init()

    const todos = ref<Todo[]>([
      {
        id: 1,
        content: 'ct1'
      },
      {
        id: 2,
        content: 'ct2'
      },
      {
        id: 3,
        content: 'ct3'
      },
      {
        id: 4,
        content: 'ct4'
      },
      {
        id: 5,
        content: 'ct5'
      }
    ]);
    const meta = ref<Meta>({
      totalCount: 1200
    });
    return { todos, meta };
  }
});
</script>
