import { createStore } from 'vuex'
import { createRouter } from 'vue-router';

export default createStore
({
  state: {
    email:'',
    password:'',
    log:null,
    user:[],
    ticket:[],
    
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
    getlog: state => {
      return state.log ;
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
    },
    ADDEMAIL(state,  payload){
      state.email= payload
     
    },
    ADDEPASSWORD(state,  payload){
      state.password= payload
     
    },
    AddLog(state,  payload){
    state.log= payload
    },
    
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
        .then(result => {
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
       .then(result => {
         commit('INSERT_TICKET', result.data)})
       .catch(error => console.log('error', error));
   },
   async insertPost({commit}, payload){
    commit('INSERTROUTER', payload)
  } ,
  async addEmail({commit}, payload){
    console.log('here');
    commit('ADDEMAIL', payload)
  },
  async addPassword({commit}, payload){
    console.log('here');
    commit('ADDEPASSWORD', payload)
  },
  async login({state}){
    // const body =commit('getInfoLogin')
    //make some kind of ajax request 
    var requestOptions = {
     method: 'POST',
     body: JSON.stringify({email:state.email, password:state.password}),
   };
   console.log(state.email);
   console.log(state.password);
   const res = await fetch("http://localhost/gestionRDVS/backendAPI/Admins/login", requestOptions)
   const data = await res.json()
   this.commit('AddLog', data.data)
    console.log('finish action login');
  },
},
  modules: {
  }
 }
 )
