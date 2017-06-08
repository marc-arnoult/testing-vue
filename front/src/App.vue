<template>
  <div id="app">
    Hello there : {{ msg }}
    <hr>
    <article v-for="article in articles">
      {{ article.content }}
    </article>
  </div>
</template>

<script>

import axios from 'axios'

export default {
  name: 'app',
  data () {
    return {
      author: '',
      msg: 'Welcome to Your Vue.js App',
      articles: []
    }
  },
  created() {
    axios.get('http://localhost:8000/articles').then((res) => {
      this.articles = res.data.data
    })
  },
}
</script>

<style>
  article {
    font-family: Verdana;
    box-shadow: 3px 5px 5px 1px#999;
    padding: 10px;
  }
</style>
