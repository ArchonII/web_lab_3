<template>
<div>
    <section class="title">
        <div class="vertical-center">
             <div class="container">
                <div class="d-flex justify-content-center name-title">                    
                        <div>
                            <h1 >Список тем</h1>
                        </div>                       
                </div>
            </div>
        </div>
   </section>

    <section >
    <div class="d-flex justify-content-center">
        <router-link :to="{name: 'Newquest'}">
            <button class = "btn btn-primary btn-lg">
                Новый вопрос
            </button>
        </router-link>
        <!--<a class="btn btn-primary btn-lg" href="new_quest.html" role="button">новый вопрос</a>-->
    </div>

        <div class="list-group">
            <h1>Gamming theme</h1>
            <div v-for="item in quests"  v-bind:key="item.id" class="row ansv-q answer-item">
                <router-link class="list-group-item list-group-item-action" :to="{name: 'Quest' , params: {id: item.id}}"> {{item.name}} </router-link>
            </div>                  
        </div>
    </section>
</div> 
</template>

<style>


</style>

<script>

import quests from "../components/quest.vue"
import {http} from "../main.js"

export default (
{
    name: "Themes",
    components: {quests},
    data(){
      return{
        quests: []

      }
    },
    created(){
       http.get('/quests/l/').then(response => this.quests = response.data)
    }
}



)
</script>