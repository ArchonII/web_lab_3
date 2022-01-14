<template>
    <div>     
            <div class="container">
                <div v-for="item in answers"  v-bind:key="item.id" class="row ansv-q answer-item">
                  <answer :product="item"></answer>
                </div>
            </div>
    </div>     
</template>

<script>
import answer from "../components/answer.vue"
import {http} from "../main.js"
export default (
{
    name: "Answer",
    components: {answer},
    data(){
      return{
        answers: null
      }
    },
      created()
      {
          this.id = this.$route.params.id
          http.get('/answers/l/' + id)
            .then(response => this.answers = response.data)
      }    
}
)
</script>