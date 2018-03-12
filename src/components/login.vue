<template>
  <section>
    <header/>
    <section class="login">
      <section class="container">
        <p>{{msg}}</p>
      </section>
    </section>
  </section>
</template>

<script>
import header from '@/components/header'

export default {
  name: 'Login',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  }
}
</script>

<style scoped>
h1, h2 {
  font-weight: normal;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
