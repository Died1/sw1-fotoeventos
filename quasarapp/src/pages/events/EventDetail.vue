<template>
    <q-page>
        <q-list class="row">
            <div class="col-sm-3 col-xs-12 " v-for="(p, index) in productsImages" :key="index">
                <q-card class="event q-ma-xs">
                    <q-img :src="p.url_preview ? p.url_preview : 'https://cdn.quasar.dev/img/parallax2.jpg'">
                        <div class="text-h5 absolute-top ">
                            <item-section-label class="text-h6 text-color-primary">
                                $ 25
                            </item-section-label>
                        </div>
                        <div class="my-card text-h5 absolute-bottom ">

                            <q-btn class="float-right" rounded dense icon="add_shopping_cart" @click="showModalAlternatives(p.id)">
                            </q-btn>
                        </div>
                    </q-img>
                </q-card>

            </div>

        </q-list>
        <FsLightbox :toggler="toggler" :sources="productsImages" :sourceIndex="productIndex" />

        <q-dialog
            v-model="fixed"
            persistent
            :maximized="maximizedToggle"
            transition-show="slide-up"
            transition-hide="slide-down"
          >
            <q-card class="bg-primary text-white">
              <q-bar>
                <q-space />

                <q-btn dense flat icon="minimize" @click="maximizedToggle = false" :disable="!maximizedToggle">
                  <q-tooltip v-if="maximizedToggle" class="bg-white text-primary">Minimize</q-tooltip>
                </q-btn>
                <q-btn dense flat icon="crop_square" @click="maximizedToggle = true" :disable="maximizedToggle">
                  <q-tooltip v-if="!maximizedToggle" class="bg-white text-primary">Maximize</q-tooltip>
                </q-btn>
                <q-btn dense flat icon="close" v-close-popup>
                  <q-tooltip class="bg-white text-primary">Close</q-tooltip>
                </q-btn>
              </q-bar>

              <q-card-section>
                <div class="text-h6">Alert</div>
                <div class="row">
                    <div class="col-6">
d
                    </div>
                    <div class="col-6">
                        <ul v-for="alternative in alternatives" :key="alternative.id">
                            <li>
                                {{alternative.name}}
                            </li>
                        </ul>
                        <div>
                            Opciones:
                            <ul>
                                <li>Con Marco</li>
                                <li>Sin Marco</li>
                            </ul>
                        </div>

                        <q-btn
                            label="Agegar"
                            @click="increment(1)"
                        />
                    </div>
                </div>
              </q-card-section>

            </q-card>
        </q-dialog>
    </q-page>
</template>

<script >
import { defineComponent, ref, onMounted, computed } from "vue";
import { useRoute } from 'vue-router';
import shoppingStore from "stores/shopping";
import { api } from 'boot/axios';
import FsLightbox from "fslightbox-vue/v3";



export default defineComponent({
    name: "AlbumPage",

    components: { FsLightbox },



    setup() {
        const route = useRoute();

        const fixed = ref(false);

        const alternatives = ref([])

        const shopping = ref(shoppingStore());

        const showModalAlternatives = (id)=>{
            fetchPhotosAlternatives(id)
            fixed.value = true;
        }

        const increment = (id) => {


            const product = alternatives.value.find(alternative => alternative.id === id)

            product.cant = 1;
            
            shopping.value.add(product);
        };

        const toggler = ref(false);
        const productIndex = ref(0);
        const productsImages = ref([
        ]);
        const addCart = () => {
            console.log("flk");
        };
        const fetchPhotos = async (id) => {
            const { data, status } = await api.get(`/events/${id}/photos`, {
                headers: { AuthorizationRequired: true },
            });
            console.log('result', data);
            data.map((photo) => {
                photo.url_preview = `http://localhost:8000${photo.url_preview}`
                productsImages.value.push(photo);
            })

            console.log(productsImages.value)

        }

        const fetchPhotosAlternatives = async (id) => {
            console.log(id)
            const { data, status } = await api.get(`/photo/${id}/alternatives`, {
                headers: { AuthorizationRequired: true },
            });
            alternatives.value = data;
        }

        onMounted(() => {
            fetchPhotos(route.params.id);

        });

        return {
            shopping,
            increment,
            toggler,
            productsImages,
            productIndex,
            addCart,
            showModalAlternatives,
            fixed,
            maximizedToggle: ref(true),
            alternatives
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

