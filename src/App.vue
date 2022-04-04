<template>
   <router-link @click="changename" v-if="name == 'user'"  class=" border-2 border-red-700 py-2 px-1 mt-3 text-black" to="/LoginAdmin">Go to Login</router-link>
   <!-- <h3> check :{{name}}</h3> -->
  <router-view></router-view>
</template>
<script>
// import {ref} from 'vue'
import { mapGetters, mapState } from 'vuex'
export default ({
    name: 'SidBar',
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
 
 

})



</script>

<style>

</style>
