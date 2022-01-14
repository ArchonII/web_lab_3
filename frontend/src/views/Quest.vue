<template>
    <div>     
    <section class="quest-item">
        <div class="vertical-center">
            <div class="container">
              <div class="d-flex justify-content-center name-title">                    
                <span class="author_name"> {{quest.name_at}} </span>
              </div>
              <div class="d-flex justify-content-left ">
                <h2 class="quest_name"> {{quest.name}} </h2>
              </div>                        
              
            </div>        
        <div class="deac-q">
          <p>{{quest.desc}} </p>
        </div>
      </div>
    </section>



    <section>
      <div  v-for="item in answers"  v-bind:key="item.id" class="answer-item">
          <answer :answer="item"></answer>               
      </div>       
    </section>


        <div class ="answer_form ">
                    <p><b>Введите ваше имя:</b></p>
                    <p><textarea rows="2" cols="45" name="name"></textarea></p>
                    <p><b>Введите ваш ответ:</b></p>
                    <p><textarea rows="10" cols="45" name="text"></textarea></p>
                    <button class="btn btn-primary " type="submit"  @click="addNewAnswer()">Отправить</button>
        </div> 
    </div>
</template>
<style>
.answer_form
{
  margin-left: 10%;

}
.deac
{
  border-color: aqua;
  border-width: 3px;
}
.author_name
{
  text-align: center;
  margin-bottom: 10px;
  font-size: 18px;
}
.quest_name
{
  text-align: left;
  margin-left: 5%;
  font-size: 20px;
  color: black;
}
</style>

<script>

import answers from "../components/answer.vue"

import {http} from "../main.js"
export default (
{
  name: "Quest",
  components: {"answer": answers},
  data() {
    return {
        quest: [],
        answers: []
    }
  },
  created() {
    this.id = this.$route.params.id,
    http.get('/quests/i/' + this.id).then(response => this.quest = response.data),
    http.get('/answers/l/' + this.id).then(response => this.answers = response.data)
  },
    methods: {
    addNewAnswer() {
      var $name_author = document.getElementsByName("name")[0].value;
      var $text_answer = document.getElementsByName("text")[0].value;
      http.post('/answers/a', {  id_qt: this.id, text: $text_answer, name_at: $name_author })
        .then(response => this.responseData = response.data)
    }
  }
}
)
</script>