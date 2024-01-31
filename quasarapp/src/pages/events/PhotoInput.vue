<template>
  <q-card class="bg-grey-3">
    <input
      type="file"
      @change="onCoverPhotoChange"
      accept="image/*"
      style="display: none"
      ref="refFotoPortada"
    />
    <img
      :src="selectedPhotoUrl"
      alt="Imagen"
      style="width: 100%; height: 250px; object-fit: cover; object-position: top left;"
    />
    <q-btn
      @click="actualizarImagen"
      class="absolute-bottom-right"
      label="Actualizar imagen"
      color="primary"
    />
  </q-card>
</template>

<script>
import { defineComponent, onMounted, ref } from 'vue';
export default defineComponent({
  name: 'PhotoInput',
  props: {
    urlimage: String
  },
  setup(props, {emit}) {
    const avatar_url = props.urlimage;
    const refFotoPortada = ref(null);
    const selectedPhotoUrl = ref('https://i.imgur.com/m2HqiWK.png');
    const actualizarImagen = () => {
      refFotoPortada.value.click();
    }
    const onCoverPhotoChange = (event) => {
      const file = event.target.files[0];
      if (file) {
        // Obtener la URL de la foto seleccionada
        selectedPhotoUrl.value = URL.createObjectURL(file);
        emit('photo-selected', file)
      }
    }
    onMounted(()=>{
      if(avatar_url){
        selectedPhotoUrl.value = avatar_url;
      }
    })
    return {
      onCoverPhotoChange,
      selectedPhotoUrl,
      actualizarImagen,
      refFotoPortada
    }
  }
})
</script>
