<template>
<div>
  <h1 class=" text-6xl text-red-600 mx-auto w-96 mt-11">
  home of user

  </h1>
</div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue'
import SideBar from '@/components/admin/SideBar.vue'

export default {
  name: 'HomeView',
  components: {
    HelloWorld,
    SideBar
  }
}
</script>
