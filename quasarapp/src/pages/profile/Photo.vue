<template>
  <q-card>
    <input type="file" accept="image/*" ref="filePhoto" style="display: none" @change="handleFileChange" />
    <q-img :src="selectedPhoto.url" :ratio="1" rounded style="width:200px">
    </q-img>
    <q-btn flat v-close-popup @click="abrirSelectorDeArchivos" class="absolute-bottom-right" color="primary"
      icon="edit" />
  </q-card>
</template>
<script  lang="ts">
import { defineComponent, ref, PropType, watch } from 'vue';
export default defineComponent({
  props: {
    value: {
      type: Object as PropType<{ file: File | null; url: string }>,
      required: true,
    },
  },
  emits: ['update:modelValue', 'file-selected'],
  setup(props, { emit }) {
    const filePhoto = ref<File | null>(null);

    const selectedPhoto = ref({
      file: null,
      url: "https://i.imgur.com/jwly0W6.jpeg"
    });

    const abrirSelectorDeArchivos = () => {
      // Simula el clic en el input de tipo file
      filePhoto.value.click();
    };

    const handleFileChange = () => {
      const file = filePhoto.value?.files?.[0];
      if (file) {
        emit('update:modelValue', { file, url: URL.createObjectURL(file) });
        emit('file-selected', file); // Emitir el evento con el archivo seleccionado

        selectedPhoto.value = {
          file: file,
          url: URL.createObjectURL(file), // Crea una URL para la vista previa de la imagen
        };
      }
    };
    return {

      filePhoto,
      selectedPhoto,
      abrirSelectorDeArchivos,
      handleFileChange,

    }
  }
})
</script>
