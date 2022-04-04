
<template>
  <!-- <nav>
    <router-link to="/">Home</router-link> |
    <router-link to="/about">About</router-link>
   <router-link @click="changename" v-if="name == 'user'"  class=" border-2 border-red-700 py-2 px-1 mt-3 text-black" to="/LoginAdmin">Go to Login</router-link>
   <!-- <h3> check :{{name}}</h3> -->
  <router-view></router-view>
  </nav> -->
  <HelloWorld/>


 
  
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

        }
      },
    computed:{
    ...mapState(['posts']),
    ...mapGetters(['postsCount']),
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
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
 font-family: sans-serif;
}

nav {
  padding: 30px;
}

nav a {
  font-weight: bold;
  color: #2c3e50;
}
.home{
  
  padding-top: 4%;
  padding-bottom: 4%;
  border: 1px solid black;
  width: 90%;
  margin-left: 4%;
  margin-top: 1%;
  display: flex;
flex-direction: row;
justify-content: space-around;

 
  
  
}

nav a.router-link-exact-active {
  color: #42b983;
}
input{
  width: 100%;
   border: 1px solid black;
  text-align: center;
  border-radius: 2px;
}
select{
  border: 1px solid black ;
   border-radius: 2px;

}
#but{
  background-color: rgb(57, 57, 255);
  border-radius: 6%;
  color: white;
  padding: 3px;
}

.result{
 margin-top: 3%; 
 padding: 4%;
 background-color: rgb(24, 6, 102);
 color: white;
 width: 50%;
 margin-left: 25%;
 margin-bottom: 2%;
 
}


</style>
