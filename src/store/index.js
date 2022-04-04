import { createStore } from 'vuex'
import { createRouter } from 'vue-router';

export default createStore({
  state: {
    email:'',
    password:'',
    user:[],
    ticket:[],
    name:'youssef',
      posts: ['post 1', 'post 2', 'post 3', 'post 4'],
      curentRouter : 'user',
  },
  
  getters:{
 
   
    // arrow function
    Allusers: state => {
      return state.user ;
    },
    Alltickets: state => {
      return state.ticket ;
    },
    // can access other getters
    // postsCountMessage: (state, getters) => `${getters.postsCount} posts available`
  },

  mutations: {
    INSERT_USER(state,  payload){
      state.user =payload
    },
    INSERT_TICKET(state,  payload){
      state.ticket =payload
    },
    INSERTROUTER(state,  payload){
      state.curentRouter =payload
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
    async getAllTicket({commit}){
      //make some kind of ajax request 
      var requestOptions = {
       method: 'POST',
       redirect: 'follow'
     };
      fetch("http://localhost/gestionRDVS/backendAPI/Tickets/getAllTickets", requestOptions)
       .then(response => response.json())
       .then(result => {console.log(result.data)
         commit('INSERT_TICKET', result.data)})
       .catch(error => console.log('error', error));
   },
   async insertPost({commit}, payload){
    commit('INSERTROUTER', payload)
  } 
  },
  modules: {
  }
})
