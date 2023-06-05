<template>
  <div>
    <h1>{{ message }}</h1>
    <p>{{ description }}</p>
  </div>
</template>


  <script>
  export default {
    data() {
      return {
        message: 'Hello, Vue!',
        description: 'my first success vue component!'
      };
    },
  };
  </script>
  