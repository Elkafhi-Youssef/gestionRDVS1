
<template>
  <nav v-if="name == 'user'" >
  <HelloWorld/>
    <!-- <router-link to="/">Home</router-link> |
    <router-link to="/about">About</router-link> | -->
   <!-- <router-link @click="changename"  class=" b" to="/LoginAdmin">Go to Login</router-link> -->
   <!-- <h3> check :{{name}}</h3> -->
  </nav>
  <router-view></router-view>
<footer class="text-center text-white" style="background-color: #f1f1f1;">
  <!-- Grid container -->
  <div class="container pt-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-linkedin"></i
      ></a>
      <!-- Github -->
      <a
        class="btn btn-link btn-floating btn-lg text-dark m-1"
        href="#!"
        role="button"
        data-mdb-ripple-color="dark"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>

 
  
</template>
<script>
// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue'



export default {
  name: 'HomeView',
  components: {
    HelloWorld
    
  },
   data(){
      return{
        curentRouter:'admin',
      }
    },
     methods: {
        changename(){
          this.$store.dispatch('insertPost', this.curentRoute)

        },
        
      },
    computed:{
    
    
     name(){
      return this.$store.state.curentRouter
      },
      changename(){
        this.$store.dispatch('insertPost', this.curentRoute)
      }
    
  },
   created() {
    this.curentRoute= this.$store.state.curentRouter
    

  }
 
}
</script>

<style>

footer{
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
}


</style>
