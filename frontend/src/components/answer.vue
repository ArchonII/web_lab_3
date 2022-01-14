<template>
    <section class="answer-item row">
        <div class="col-md-2 nm_a cent">
             <p class="name_at">{{answer.name_at }} </p>
        </div>
        <div class="col-md-2 t-ansv">
            <p>{{answer.text }} </p>
        </div>

    </section>

</template> 

<style>
.answer-item
{
    border-width: 2px;
    border-style: groove;
    margin: 3px;
}
.name_at
{
    font-size: 16px;
    font-style: italic;
}


</style>



<script>
// import {http} from "../main.js"
export default( 
{
    name: "Answer",
    props: ['answer']  
}
)
</script>