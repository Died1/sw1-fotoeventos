<template>
  <div class="q-pa-md">
    <div class="q-col-gutter-md row items-start">
      <q-list class="col-sm-2 col-xs-4 " v-for="(p, index) in productsImages" :key="index">
        <q-item clickable v-close-popup style="padding: 0">
          <q-item-section>
            <q-img
                @click="productIndex = index; toggler = !toggler; "
                :src="p"
                :ratio="1"
              />
          </q-item-section>
        </q-item>
      </q-list>
      <FsLightbox
        :toggler="toggler"
        :sources="productsImages"
        :sourceIndex="productIndex"
       />
    </div>
  </div>
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
    return {
      toggler,
      productsImages,
      productIndex,
    }
  }
})

</script>
