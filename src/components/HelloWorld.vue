<template>
  <div class="hello">
   
    
    <vs-navbar v-if="name == 'user'">
      <div>
        <vs-navbar-title>
          RDVS
        </vs-navbar-title>
      </div>
<div>
      <vs-navbar-item index="0" >
        <router-link class="nav2" to="/">Home</router-link>
        <router-link class="nav2" to="/login">login</router-link>
     
        <router-link class="nav2" @click="changename"   to="/LoginAdmin">Admin</router-link>
  
      </vs-navbar-item>
      </div>

     
    </vs-navbar>
  </div>
    
</template>

<script>
export default {
  name: 'HelloWorld',
  
   data: ()=>({
    colorx:'#1db952',
    indexActive: 0
  }),
   computed:{
     name(){
      return this.$store.state.curentRouter
      },
   },
}
</script>

<style scoped>
vs-navbar{
  display: flex;
  flex-direction: row;
  background-color: rgb(0, 0, 0);
  justify-content: space-around;
  color: white;
  padding: 1%;


}
 .nav2{
   margin-left: 10%;
 }

 
</style>
