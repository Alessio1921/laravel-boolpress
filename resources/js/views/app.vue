<template>
  <div>
    <Header/>
    <Main />
  </div>
</template>

<script>
// import PostList from '../pages/Postlist';
import Header from '../components/Header.vue';
import Main from '../components/Main.vue';

export default {
  name: "App",
  components: {
    Header,
    Main
  }
}
</script>

<style>

</style>