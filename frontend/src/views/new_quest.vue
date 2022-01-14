<template>
     <div>
        <div class="nw-q">
            <div>
                <p><b>Введите своё имя:</b></p>
                <p><textarea rows="2" cols="45" name="name_at"></textarea></p>
                <p><b>Введите название вашего вопроса:</b></p>
                <p><textarea rows="2" cols="45" name="name_qt"></textarea></p>
                <p><b>Введите ваш вопрос:</b></p>
                <p><textarea rows="10" cols="45" name="desc_text"></textarea></p>
                <button class="btn btn-primary" type="submit" @click="addNewQuest()">Отправить</button> 
            </div>
        </div>
    </div>
</template>
<script>

import {http} from "../main.js"
export default (
{
   name: "New_Quest",  
    methods: {
    addNewQuest() {
      var $name_author = document.getElementsByName("name_at")[0].value;
      var $name_qt = document.getElementsByName("name_qt")[0].value;
      var $text_desc = document.getElementsByName("desc_text")[0].value;
      http.post('/quests/a', { name: $name_qt, name_at: $name_author, desc: $text_desc })
        .then(response => this.responseData = response.data)
    }
  }
}    
)
</script>
