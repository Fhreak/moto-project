<template>

    <div v-if="!image">
      <input type="file" name="file[]" @change="onFileChange" multiple>
    </div>
    <div v-else>
      <img class="img-pre" :src="image" />
      <button @click="removeImage">Remover imagen</button>
    </div>

</template>

<script>

export default{

  data(){
    return {
      image: ''
    }
  },

  methods: {
    onFileChange(e) {
      var files = e.target.files || e.dataTransfer.files;
      if (!files.length)
        return;
      this.createImage(files[0]);
    },
    createImage(file) {
      var image = new Image();
      var reader = new FileReader();
      var vm = this;

      reader.onload = (e) => {
        vm.image = e.target.result;
      };
      reader.readAsDataURL(file);
    },
    removeImage: function (e) {
      this.image = '';
    }
  }

}

</script>
