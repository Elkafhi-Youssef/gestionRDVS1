<template>
 
  <div class="home">
        <div>
            <p>Nom: </p>
            <input v-model="text1" placeholder="Nom" />
           
            <p>Age:</p>
            <input v-model="number" maxlength="2" placeholder="Age" />
            <p>Type de travail:</p>
            <input v-model="text3" placeholder="Type de travail" />
            
            <p>Sex: </p>
            <select v-model="selected">
              <option disabled value="">Please select one</option>
              <option>Famme</option>
              <option>Homme</option>
             </select>
              
        </div>
        <div>
           <p>CIN: </p>
            <input v-model="text4" placeholder="CIN" />
             <p>NUM de Telephone: </p>
            <input v-model="text1" placeholder="NUM de tele" />
            <p>Date de rendiveau: </p>
            <input type="date" v-model="date" placeholder="NUM de tele" />
            <p>heure exacte: </p>
             <select v-model="selected1">
              <option disabled value="">Please select one</option>
              <option> 10 h à 10:30h</option>
              <option> 11 h à 11:30h</option>
               <option> 14 h à 14:30h</option>
              <option> 15 h à 15:30h</option>
               <option> 16 h à 16:30h</option>
              
             </select>
             <br>
             <button id="but">Suivant</button>
           




        </div>
        
 </div>
 <div class="result">
          <p>Nom: {{text1}}</p>
          <p>Age:{{number}}</p>
          <p>Type de travail: {{text3}}</p>
          <p>Sex: {{selected}}</p>
        </div>
 


</template>

<script>
// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue'

export default {
  name: 'HomeView',
  components: {
    HelloWorld
  }, 
  
   data() {
    return {
      selected: [],
      text1: [],
       text2: [],
        text3: [],
        number: []
    }
  }
}
</script>
