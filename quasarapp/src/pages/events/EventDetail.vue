<template>
  <q-page>
    <q-list class="row">
      <div
        class="col-sm-3 col-xs-12 "
        v-for="(p, index) in productsImages"
        :key="index"
      >
        <q-card class="event q-ma-xs">
          <q-img :src="p ? p : 'https://cdn.quasar.dev/img/parallax2.jpg'">
            <div class="text-h5 absolute-top ">
              <item-section-label class="text-h6 text-color-primary">
                $ 25
              </item-section-label>
            </div>
            <div class="my-card text-h5 absolute-bottom ">

              <q-btn
                class="float-right"
                rounded
                dense
                icon="add_shopping_cart"
                @click="increment"
              >
              </q-btn>
            </div>
          </q-img>
        </q-card>

      </div>

    </q-list>
    <FsLightbox
      :toggler="toggler"
      :sources="productsImages"
      :sourceIndex="productIndex"
    />

  </q-page>
</template>

  <script>
import { defineComponent, ref, onMounted } from "vue";
import shoppingStore from "stores/shopping";
import FsLightbox from "fslightbox-vue/v3";

export default defineComponent({
  name: "AlbumPage",

  components: { FsLightbox },


  setup(props, { params }) {
    console.log(params)


    const shopping = ref(shoppingStore());

    const increment = () => shopping.value.increment();

    const toggler = ref(false);
    const productIndex = ref(0);
    const productsImages = ref([
      "https://i.imgur.com/fsyrScY.jpg",
      "https://i.imgur.com/jwly0W6.jpeg",
      "https://i.imgur.com/QEgHhQr.jpeg",
      "https://i.imgur.com/qxtWKzg.jpeg",
      "https://i.imgur.com/fsyrScY.jpg",
      "https://i.imgur.com/jwly0W6.jpeg",
      "https://i.imgur.com/QEgHhQr.jpeg",
      "https://i.imgur.com/qxtWKzg.jpeg",
    ]);
    const addCart = () => {
      console.log("flk");
    };
    const fetchPhotos = () =>{

    }

    onMounted(() => {


});

    return {
      shopping,
      increment,
      toggler,
      productsImages,
      productIndex,
      addCart,
    };
  },
});
</script>

<style>
.event:hover {
  cursor: pointer;
}

.event:hover .my-card {
  display: block;
}

.my-card {
  display: none;
  transition: background-color 0.3s;
  /* Agrega una transición suave al color de fondo */
  position: relative;
  /* Asegura que el contenido absoluto se coloque correctamente */
}

/* Otros estilos de .my-card aquí */
</style>

