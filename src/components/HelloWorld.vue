<template>
  <div class="hello">
   
    
    <vs-navbar>
      <div>
        <vs-navbar-title>
          RDVS
        </vs-navbar-title>
      </div>

      <vs-navbar-item index="0" >
        <router-link to="/">Home</router-link>
      </vs-navbar-item>
      <vs-navbar-item index="2">
        <router-link to="/about">Admin</router-link>
  
      </vs-navbar-item>

     
    </vs-navbar>
  </div>
    
</template>

<script>
export default {
  name: 'HelloWorld',
  
   data: ()=>({
    colorx:'#1db952',
    indexActive: 0
  })
}
</script>

<style scoped>
vs-navbar{
  display: flex;
  flex-direction: row;
  background-color: rgb(0, 0, 0);
  justify-content: space-between;
  color: white;
  padding: 1%;


}

 
</style>
