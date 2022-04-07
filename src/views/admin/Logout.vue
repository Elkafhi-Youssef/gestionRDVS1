<template>
    <div>

    </div>
</template>

<script>
    export default {
        name:'Logout',
        data(){
            return{
                curentRouter:'user',
            }
        },
        methods:{
           logout(){
                    localStorage.removeItem('iduser');
                    this.$router.push('/LoginAdmin')
                  }
        },
        created(){
            this.$store.dispatch("insertPost", this.curentRoute)
            this.logout()
        },
    }
</script>

<style scoped>

</style>