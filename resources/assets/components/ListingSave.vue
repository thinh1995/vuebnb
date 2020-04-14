<template>
  <div class="listing-save" @click.stop="toogleSaved()">
    <button v-if="button">
      <i :class="classes"></i>
      {{ message }}
    </button>
    <i v-else :class="classes"></i>
  </div>
</template>
<script>
export default {
  props: ['id', 'button'],
  computed: {
    isListingSaved() {
      return this.$store.state.saved.find(saved => saved === this.id);
    },
    classes() {
      let saved = this.isListingSaved;
      return {
        'fa': true,
        'fa-lg': true,
        'fa-heart': saved,
        'fa-heart-o': !saved
      }
    },
    message() {
      return this.isListingSaved ? 'Saved' : 'Save';
    }
  },
  methods: {
    toogleSaved() {
      this.$store.dispatch('toogleSaved', this.id);
    }
  }
}
</script>
<style>
  .listing-save {
    position: absolute;
    top: 20px;
    right: 20px;
    cursor: pointer;
  }

  .listing-save .fa-heart {
    color: #ff5a5f;
  }

  .listing-save .fa-heart-o {
    color: #ffffff;
  }

  .listing-save i {
    padding-right: 4px;
  }

  .listing-save button .fa-heart-o {
    color: #808080;
  }
</style>