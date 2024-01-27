<template>
   <div>
      <q-dialog v-model="showDialogEvent">
         <q-card>
            <q-card-section class="row items-center q-pb-none">
               <div class="text-h6 text-center">Imagenes</div>
               <q-space />
               <span class="close" @click="closeDialogShowEvent">&times;</span>
            </q-card-section>
            <q-separator />
            <q-card-section>
               <q-scroll-area class="scroll-content" style="height: 70vh; width: 350px;">
                  <q-card-section class="row justify-center">
                     <q-uploader :factory="factoryFn" label="Individual upload" multiple
                        style="width:300px; max-height:500px" @uploaded="handleUpload" field-name="image" />
                  </q-card-section>
               </q-scroll-area>
            </q-card-section>
         </q-card>
      </q-dialog>
   </div>
</template>

<script>
import { defineComponent, ref, onMounted } from 'vue';

export default defineComponent({
   props: {
      showDialogEvent: Boolean,
      evento: Object
   },
   computed: {
      formattedDate() {
         const dateObj = new Date(this.event.date_start); // Supongo que tienes la propiedad 'date' en tu objeto 'event'.
         const options = {
            weekday: 'long',
            month: 'long',
            day: 'numeric',
            hour: 'numeric',
            minute: 'numeric',
         };
         return dateObj.toLocaleDateString('es-ES', options);
      }
   },
   setup(props, { emit }) {
      const event = props.evento;
      const closeDialogShowEvent = () => {
         emit('update:showDialogEvent', false)

      }

      const factoryFn = (Files) => {
         const ls = JSON.parse(localStorage.getItem('authStore'));
         const token = ls.userState.token;
         return new Promise((resolve, reject) => {
            resolve({
               url: `http://localhost:8000/api/events/${event.id}/photos`,
               method: 'POST',
               headers: [
                  { name: 'Authorization', value: `Bearer ${token}` }
               ]
            })
         })
      }

      const handleUpload = (response) => {
         // Manejar la respuesta después de la carga de archivos
         console.log('Respuesta de carga de archivos:', response);
      }



      return {
         closeDialogShowEvent,
         factoryFn,
         handleUpload
      }
   }
})
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
