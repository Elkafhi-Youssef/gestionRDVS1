import { createStore } from 'vuex'
import { createRouter } from 'vue-router';

export default createStore({
  state: {
    email:'',
    password:'',
    user:[],
    name:'youssef',
      posts: ['post 1', 'post 2', 'post 3', 'post 4'],
      curentRouter : 'user',
  },
  
  getters:{
 
   
    // arrow function
    Allusers: state => {
      return state.user ;
    },
    // can access other getters
    // postsCountMessage: (state, getters) => `${getters.postsCount} posts available`
  },

  mutations: {
    INSERT_USER(state,  payload){
      state.user =payload
    }
  },
  actions:{
    async getAllUser({commit}){
       //make some kind of ajax request 
       var requestOptions = {
        method: 'POST',
        redirect: 'follow'
      };
      
      fetch("http://localhost/gestionRDVS/backendAPI/clients/getAlluser", requestOptions)
        .then(response => response.json())
        .then(result => {console.log(result.data)
          commit('INSERT_USER', result.data)})
        .catch(error => console.log('error', error));
        
    },
    
  },
  modules: {
  }
})
