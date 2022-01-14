<template> 
    <div>     

    <section>
      <div  v-for="item in answers"  v-bind:key="item.id" class="row ansv-q answer-item">
          <answer :answer="item"></answer>               
      </div>       
    </section>
        <form>
                    <p><b>Введите ваше имя:</b></p>
                    <p><textarea rows="10" cols="45" name="name"></textarea></p>
                    <p><b>Введите ваш ответ:</b></p>
                    <p><textarea rows="10" cols="45" name="text"></textarea></p>
                    <button><input class="btn btn-primary " type="submit">Отправить</button>
        </form> 
    </div>


</template>

<script>
import answers from "../components/answer.vue"

import {http} from "../main.js"

export default {
  name: "Quest",
  components: {answers},
  props: ['quest'],
  data(){
      return{
         answers: []
        }
    },
    created(){
       http.get('/answers/l/'+ this.id).then(response => this.answers = response.data)
    }
}

</script>