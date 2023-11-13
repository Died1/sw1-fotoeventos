<template>
  <div class="q-pa-md">

    <div class="q-mb-sm">
      <div class="row">
        <div class="col">

          <div class="text-h6">Albums</div>
        </div>
        <div class="col-auto q-col-gutter">

          <q-btn label="Crear Album" outline color="primary" @click="crearAlbum()" />
        </div>
      </div>
    </div>
    <q-separator />

    <div class="q-col-gutter-md row items-start q-mt-xs">
      <q-list class="col-sm-3 col-xs-6 " v-for="(p, index) in productsImages" :key="index">
        <q-item clickable v-close-popup style="padding: 0">
          <q-item-section>
            <q-img @click="productIndex = index; toggler = !toggler;" :src="p" :ratio="1">
              <div class="absolute-bottom text-subtitle1 text-center">
                Caption
              </div>
            </q-img>
          </q-item-section>
        </q-item>
      </q-list>
      <FsLightbox :toggler="toggler" :sources="productsImages" :sourceIndex="productIndex" />
    </div>

    <q-dialog v-model="modalAlbum" persistent>
      <q-card style="min-width: 350px">
        <q-card-section>

          <div class="text-h6">Título para el album</div>
        </q-card-section>

        <q-card-section class="q-pt-none">
          <q-form ref="formAlbum" @submit="onSubmit" @reset="onReset">
            <q-input dense autofocus v-model="title" />
          </q-form>
        </q-card-section>

        <q-card-actions align="right" class="text-primary">
          <q-btn flat label="Cancelar" v-close-popup />
          <q-btn @click="formSubmit" flat label="Crear album" v-close-popup />
        </q-card-actions>
      </q-card>
    </q-dialog>

  </div>
</template>


<script>
import { defineComponent, ref } from 'vue';
import FsLightbox from "fslightbox-vue/v3";

export default defineComponent({
  name: "AlbumPage",

  components: { FsLightbox },

  setup() {
    const formAlbum = ref(null);

    const formSubmit = () => {
      if (formAlbum.value) {
        formAlbum.value.submit();
      }
    };

    const onSubmit = () => {
      console.log("SUBMIT")
    };

    const onReset = () => {

    };

    const toggler = ref(false);
    const productIndex = ref(0);
    const modalAlbum = ref(false);
    const productsImages = ref(
      [
        'https://i.imgur.com/qxtWKzg.jpeg',
        'https://i.imgur.com/fsyrScY.jpg',
        'https://i.imgur.com/QEgHhQr.jpeg',
        'https://i.imgur.com/jwly0W6.jpeg',
      ]
    );

    const openLightbox = (number) => {
      toggler.value = true;
      productIndex.value = index;
    };

    const crearAlbum = () => {
      modalAlbum.value = true;
    };

    return {
      title: ref(''),
      toggler,
      productsImages,
      productIndex,
      openLightbox,
      crearAlbum,
      modalAlbum,
      formAlbum,
      formSubmit,
      onSubmit,
      onReset
    }
  }
})
</script>
