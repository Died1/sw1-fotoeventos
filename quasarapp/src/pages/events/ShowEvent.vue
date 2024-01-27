<template>
  <div>
    <q-dialog v-model="showDialogEvent">

      <q-card>
        <q-card-section class="row items-center q-pb-none">
          <div class="text-h6 text-center">Compartir</div>
          <q-space />
          <span
            class="close"
            @click="closeDialogShowEvent"
          >&times;</span>
        </q-card-section>
        <q-separator />
        <q-card-section class="scroll q-pa-none">
          <q-scroll-area
            class="scroll-content"
            style="height: 70vh; width: 450px;"
          >
            <div class="scroll-inner">
              <img
                :src="'http://localhost:8000' + qrurl"
                alt=""
                style="max-width: 100%; max-height: 100%;"
              />
              <q-btn
                icon="share"
                label="Compartir"
                @click="compartirEvento"
              />
              <q-btn
                icon="share"
                label="descargar"
                @click="descargarQr"
              />
            </div>
          </q-scroll-area>
        </q-card-section>

      </q-card>
    </q-dialog>
  </div>
</template>

<script>
import { defineComponent, ref, onMounted } from "vue";
export default defineComponent({
  name: "ShowEvent",
  props: {
    showDialogEvent: Boolean,
    qrurl: String,
  },
  computed: {
    formattedDate() {
      const dateObj = new Date(this.event.date_start); // Supongo que tienes la propiedad 'date' en tu objeto 'event'.
      const options = {
        weekday: "long",
        month: "long",
        day: "numeric",
        hour: "numeric",
        minute: "numeric",
      };
      return dateObj.toLocaleDateString("es-ES", options);
    },
  },
  setup(props, { emit }) {
    const urldelQr = props.qrurl;
    const closeDialogShowEvent = () => {
      emit("update:showDialogEvent", false);
    };
    const compartirEvento = () => {
      const imageUrl = "http://localhost:8000" + urldelQr;
      console.log(imageUrl);
      if (navigator.share) {
        navigator
          .share({
            title: "Título del evento",
            text: "Descripción del evento",
            url: imageUrl,
          })
          .then(() => console.log("Imagen compartida con éxito"))
          .catch((error) =>
            console.error("Error al compartir la imagen:", error)
          );
      } else {
        console.warn(
          "La función de compartir no es compatible en este navegador."
        );
        // Puedes implementar un comportamiento personalizado aquí si lo deseas
      }
    };

    const descargarQr = () => {
      const imageUrl = "http://localhost:8000" + urldelQr;
      console.log(imageUrl);
      // Crear un enlace temporal para la descarga
      const enlaceDescarga = document.createElement("a");
      enlaceDescarga.href = imageUrl;
      enlaceDescarga.download = "nombre_archivo";

      // Simular un clic en el enlace para iniciar la descarga
      enlaceDescarga.click();
    };

    return {
      closeDialogShowEvent,
      compartirEvento,
      descargarQr,
    };
  },
});
</script>

<style>
.scroll-content {
  display: flex;
  align-items: center;
  justify-content: center;
  height: 100%;
}

.scroll-inner {
  text-align: center;
}
</style>
