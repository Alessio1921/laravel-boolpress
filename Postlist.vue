<template>
  <div class="row">
      <Post v-for="(post,index) in posts" :key="index" :post="post"/>
      <div class="col-12 d-flex justify-content-between">
        <div v-if="pagination.current_page == 1"></div>
        <button class="btn btn-outline-primary" @click="getPosts(pagination.current_page - 1)" v-if="pagination.current_page > 1">prev</button>
        <h5>Pagina: {{pagination.current_page}}</h5>
        <button class="btn btn-outline-primary" @click="getPosts(pagination.current_page + 1)" v-if="pagination.current_page < pagination.last_page">next</button>
      </div>
    </div>
</template>

<script>
import Post from './Post.vue'
export default {
  name:"PostList",
  components:{
    Post
  },
  data(){
    return{
      posts:[],
      pagination:{},
    }
  },
  methods:{
    getPosts(page){
      axios.get(`http://localhost:8000/api/posts?page=${page}`)
      .then(resp => {
        this.posts = resp.data.posts.data;
        const { current_page, last_page } = resp.data.posts;
        this.pagination = {current_page : current_page, last_page : last_page};
    })
    .catch((error)=>{
      console.warn(error);
    })
    }
  },
  created(){
    this.getPosts(1);
  }
}
</script>

<style scoped>

</style>