<template>
    <div>
      <h2>{{ message }}</h2>
      <button class="btn primary full">
        <span class="text">{{ message }}</span>
      </button>
    </div>
  </template>
  
<script>
export default {
  data() {
    
    return {
      message: 'Hello, World!'
    };
  },
};
</script>
    