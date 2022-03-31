<template>
    <div class="w-full max-w-sm mx-auto mt-16 overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="px-6 py-4">
            <h2 class="text-3xl font-bold text-center text-gray-700 dark:text-white">RDVs</h2>

            <h3 class="mt-1 text-xl font-medium text-center text-gray-600 dark:text-gray-200">Welcome Back</h3>

            <p class="mt-1 text-center text-gray-500 dark:text-gray-400">Login</p>

            <form @submit.prevent="Login">
                <div   class="w-full mt-4">
                    <input  class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-md dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300" type="text" placeholder="Email Address" aria-label="Email Address" />
                </div>

                <div class="w-full mt-4">
                    <input  class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-md dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300" type="text" placeholder="Password" aria-label="Password" />
                </div>

                <div class="flex items-center justify-between mt-4">
                    <button  class="px-4 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded hover:bg-gray-600 focus:outline-none" type="submit">Login</button>
                </div>
                <h1>{{name}}</h1>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
       name: "LoginAdmin",
      data(){
          return {
            email: '',
            password: '',
            curentRoute: 'adminhome', 
          }
      },
      computed: {
        name(){
            return this.$store.state.name
        }
      },
      methods: {
        Login(){
            this.$store.dispatch('insertPost', this.curentRoute)
          this.$router.push({name:'adminhome'})
        }
      }
    }
</script>

<style scoped>

</style>