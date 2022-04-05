<template>
    <div class="w-full max-w-sm mx-auto mt-16 overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
        <div class="px-6 py-4">
            <h2 class="text-3xl font-bold text-center text-gray-700 dark:text-white">RDVs</h2>

            <h3 class="mt-1 text-xl font-medium text-center text-gray-600 dark:text-gray-200">Welcome Back</h3>

            <p class="mt-1 text-center text-gray-500 dark:text-gray-400">Login</p>

            <form @submit.prevent="login" >
                <div   class="w-full mt-4">
                    <input  type="text" v-model.lazy.trim="email"  class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-md dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300" placeholder="Email Address"  />
                </div>

                <div class="w-full mt-4">
                    <input v-model.lazy.trim="password" class="block w-full px-4 py-2 mt-2 text-gray-700 placeholder-gray-500 bg-white border rounded-md dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring focus:ring-blue-300" type="text" placeholder="Password" aria-label="Password" />
                </div>

                <div class="flex items-center justify-between mt-4">
                    <button  class="px-4 py-2 leading-5 text-white transition-colors duration-200 transform bg-gray-700 rounded hover:bg-gray-600 focus:outline-none" type="submit">Login</button>
                </div>
            </form>

        </div>
    </div>

</template>

<script>
// import { mapActions } from 'vuex'
import sweetalert from 'sweetalert'
import { mapGetters } from 'vuex'
    export default {
       name: "LoginAdmin",
      data(){
          return {
            email: '',
            password: '',
            curentRoute: 'adminhome',
            log: '', 
          }
      },
      computed: {
        
      },
      methods: {
         async login(){
            this.$store.dispatch('login')
            await this.$store.dispatch('insertPost', this.curentRoute)
            
            console.log(this.state.log);
            // if (mapGetters(['getlog'])>0 && mapGetters(['getlog'])!=null) {
            //     this.$router.push('/adminhome')
                
            // }else{
            //     console.log(this.getlog);
            //     sweetalert ( "Oops" ,  "Something went wrong!" ,  "error" )
            // }
            
          
          
        }
      },
      watch: {
        email(){
           this.$store.dispatch("addEmail",this.email)
        console.log("here")
        },
        password(){
        this.$store.dispatch("addPassword",this.password)
        },
        
      },
      created() {
        
      }
    }
</script>

<style scoped>

</style>