import { createStore } from 'vuex'
import { createRouter } from 'vue-router';

export default createStore({
  state: {
    email:'',
    password:'',
    name:'youssef',
      posts: ['post 1', 'post 2', 'post 3', 'post 4'],
      curentRouter : 'user',
  },
  
  getters:{
 
   
    // arrow function
    postsCount: state => {
      
      return state.posts.length
    },
    // can access other getters
    postsCountMessage: (state, getters) => `${getters.postsCount} posts available`
  },

  mutations: {
    INSERT_POST(state,  payload){
      state.curentRouter =payload
      console.log(state.curentRouter);
},
  },
  actions:{
    async insertPost({commit}, payload){
       //make some kind of ajax request 
        commit('INSERT_POST', payload)
    }
  },
  modules: {
  }
})
