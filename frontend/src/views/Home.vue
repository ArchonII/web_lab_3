<template>
  <div class="home">
    <section class="title">
        <div class="vertical-center">
             <div class="container">
                <div class="d-flex justify-content-center name-title">                    
                        <div>
                            <h1 >Игровой форум </h1>
                            <p> <br> Популярные темы &AMP; Основные разделы</p>
                        </div>                       
                </div>
            </div>
        </div>
   </section>

    <section >
      <div class="container">
          <div class="row">
              <div class="col-md-4 text-center ">
                  <div class="desc">
                      <a class="cont_ref" >                                               
                      <h2>вопрос 1</h2>
                      </a>
                      <p> A game is a structured form of play, usually undertaken for entertainment or fun, and sometimes used as an educational tool</p>
                  </div>
              </div>
              <div class="col-md-4 text-center">
                  <div class="desc">
                      <a class="cont_ref">
                      <h2>вопрос 2</h2>
                      </a>
                      <p>Ludwig Wittgenstein was probably the first academic philosopher to address the definition of the word game. In his Philosophical Investigations</p>
                  </div>
              </div>
              <div class="col-md-4 text-center">
                  <div class="desc">
                      <a  class="cont_ref">
                      <h2>вопрос 1 - vr</h2>
                      </a>
                      <p>Virtual reality (VR) is a simulated experience that can be similar to or completely different from the real world. Applications of virtual reality include entertainment (particularly video games), education (such as medical or military training) and business (such as virtual meetings). Other distinct types of VR-style technology include augmented reality and mixed reality, sometimes referred to as extended reality or XR.</p>
                  </div>
              </div>
          </div>
      </div>
    </section>

    <section >
        <div class="container">
                <div class="row thems">
                    <div class="col-sm-6  fadeInLeft">
                        <img src="../assets/gp.jpg" class="img-responsive  align-self-lg-center" alt="">
                    </div>
                    <div class="col-sm-5 fadeInLeft" >
                        <h2>Experienced and Enthusiastic</h2>
                        <span>Pork belly leberkas cow short ribs capicola pork loin. Doner fatback frankfurter jerky meatball pastrami bacon tail sausage. Turkey fatback ball tip, tri-tip tenderloin drumstick salami strip steak.</span>
                    </div>
                </div>
                <div class="row thems">
                    <div class="col-sm-6 col-sm-offset-1 align-right fadeInLeft">
                        <h2>Built for the Responsive Web</h2>
                        <span>Mollit eiusmod id chuck turducken laboris meatloaf pork loin tenderloin swine. Pancetta excepteur fugiat strip steak tri-tip. Swine salami eiusmod sint, ex id venison non. Fugiat ea jowl cillum meatloaf.</span>
                    </div>
                    <div class="col-sm-5 fadeInRight">
                        <img src="../assets/settings.jpg" class="img-responsive align-self-lg-center" alt="">
                    </div>
                </div>
                <div class="row thems">
                    <div class="col-sm-5 fadeInLeft">
                        <img src="../assets/vr-1911452__340.png" class="img-responsive align-self-lg-center" alt="">
                    </div>
                    <div class="col-sm-6 fadeInRight">
                        <h2>Experienced and Enthusiastic</h2>
                        <span>Ut officia cupidatat anim excepteur fugiat cillum ea occaecat rump pork chop tempor. Ut tenderloin veniam commodo. Shankle aliquip short ribs, chicken eiusmod exercitation shank landjaeger spare ribs corned beef.</span>
                    </div>
                </div>
        </div>
    </section>
  </div>
</template>


<script>

// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue'

export default {
  name: 'Home',
  components: {
    HelloWorld
  }
}
</script>
