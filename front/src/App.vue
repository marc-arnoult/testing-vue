<template>
  <div id="app">
    Hello there : {{ msg }}

  </div>
</template>

<script>

import axios from 'axios'

export default {
  name: 'app',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App',
      post: null
    }
  },
  created() {
    axios.get('http://localhost:8000/articles/1').then((res) => {
      this.post = res.data
    })
  }
}
</script>

<style>

</style>
