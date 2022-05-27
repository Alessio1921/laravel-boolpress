<template>
  <div class="col-4 mb-5">
    <div class="cardcontainer my-4">
      <p class="txt m-0">{{post.user}}</p>
      <div class="photo w-75 mx-auto">
        <img class="w-100" :src="post.url">
      </div>
      <div class="content border-bottom border-2 ">
        <p>{{ post.title}}</p>
        <p>{{ post.created_at}}</p>
        <p>{{post.description}}</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name:"Post",
  components:{
  
  },
  props: ['post']
}
</script>

<style scoped>
  .cardcontainer{
    height: 400px;
  }
  .content{
    height: 220px;
  }
</style>