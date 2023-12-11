<template>
  <q-page class="q-pa-none bg-black">
    <div>
      <q-parallax :speed="0.9" :height=450>
        <template v-slot:media>
          <img
            src="https://mott.pe/noticias/wp-content/uploads/2018/03/10-tips-para-saber-c%C3%B3mo-ser-un-buen-fot%C3%B3grafo-profesional-portada.jpg">
        </template>
        <div class="items-center justify-center">

          <div class="text-h2 text-white text-center">Contenidos multimedia increíbles, a un par de clics.</div>

        </div>
      </q-parallax>

      <div class="row">
        <q-card dark square class="col-md-3 col-xs-12 items-center justify-center" style="min-height:200px">
          <q-card-section class="q-pb-xs">
            <q-icon name="camera" size="40px" />
          </q-card-section>
          <q-card-section>
            <div class="text-h5">Selección inigualable</div>
          </q-card-section>
          <q-card-section>
            <div class="text-h6">
              Llevamos desde 2006 creando una biblioteca de más de 35 millones de vídeos de los cineastas más brillantes
              del
              mundo.
            </div>
          </q-card-section>
        </q-card>
        <q-card dark square class="col-md-3 col-xs-12 items-center justify-center" style="min-heigth:200px">
          <q-card-section class="q-pb-xs">
            <q-icon name="search" size="40px" />
          </q-card-section>
          <q-card-section>
            <div class="text-h6">
              <div class="text-h5">Búsquedas útiles</div>
            </div>
          </q-card-section>
          <q-card-section>
            <div class="text-h6">
              Encuentra los contenidos que necesitas con una tecnología creada específicamente para los vídeos. Obtén
              resultados precisos y relevantes.
            </div>
          </q-card-section>
        </q-card>
        <q-card dark square class="col-md-3 col-xs-12 items-center justify-center" style="min-heigth:200px">
          <q-card-section class="q-pb-xs">
            <q-icon name="support_agent" size="40px" />
          </q-card-section>
          <q-card-section>
            <div class="text-h5">Personas reales, siempre a tu disposición</div>
          </q-card-section>
          <q-card-section>
            <div class="text-h6">

              Nuestra obsesión por complacer a nuestros clientes y artistas se refleja en la calificación que tenemos en
              4.8
              Trustpilot.
            </div>
          </q-card-section>
        </q-card>
        <q-card dark square class="col-md-3 col-xs-12 items-center justify-center" style="min-heigth:200px">
          <q-card-section class="q-pb-xs">
            <q-icon name="lock" size="40px" />
          </q-card-section>
          <q-card-section>
            <div class="text-h5">Nosotros nos encargamos</div>
          </q-card-section>
          <q-card-section>
            No te preocupes por nada: aprovecha una licencia de vídeos de archivo que cubre tus necesidades y minimiza el
            riesgo.
          </q-card-section>
        </q-card>
      </div>
    </div>
  </q-page>
</template>

<script lang="ts">
import { defineComponent, ref } from 'vue';




export default defineComponent({

  name: 'IndexPage',
  props: ['search'],

  setup(props) {

    return {
      search: props.search
    };
  }
});
</script>
