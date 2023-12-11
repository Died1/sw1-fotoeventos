<template>
<q-page>
      <q-list class="row q-ma-sm" >
        <q-item class="q-pa-sm col-sm-3 col-xs-6 "  v-for="(p, index) in productsImages" :key="index">
          <q-item-section>
            <q-img

                :src="p"
                :ratio="1"
              >

            <q-btn icon="shopping_cart" @click="addCart"/>

            </q-img>
          </q-item-section>
        </q-item>
      </q-list>
      <FsLightbox
        :toggler="toggler"
        :sources="productsImages"
        :sourceIndex="productIndex"
       />

  </q-page>
</template>

<script>
import { defineComponent, ref } from 'vue';
import FsLightbox from "fslightbox-vue/v3";

export default defineComponent({
  name: "AlbumPage",

  components: { FsLightbox },

  setup() {

    const toggler = ref(false);
    const productIndex = ref(0);
    const productsImages = ref(
      [
        'https://i.imgur.com/fsyrScY.jpg',
        'https://i.imgur.com/jwly0W6.jpeg',
        'https://i.imgur.com/QEgHhQr.jpeg',
        'https://i.imgur.com/qxtWKzg.jpeg'
      ]
    );
    const addCart = () => {
      console.log("flk")
    }
    return {
      toggler,
      productsImages,
      productIndex,
      addCart
    }
  }
})

</script>
