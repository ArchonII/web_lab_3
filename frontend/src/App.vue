<template>
<div id="app">
<header class="header">      

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <router-link class="navbar-brand" :to="{name: 'Home'}"><img src="D:\programms\solutions\web_lab1\triangle\images\logo_m.png" alt=""></router-link>
              <!--<a class="navbar-brand" href="index.html"><img src="D:\programms\solutions\web_lab1\triangle\images\logo_m.png" alt=""></a>-->
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <router-link :to="{name: 'Home'}">Home</router-link>
                     <!--<a class="nav-link active" href="index.html">Home</a>-->
                  </li>
                  <li class="nav-item">
                    <router-link class="nav-link" :to="{name: 'Themes'}">Themes</router-link>
                    <!--<a class="nav-link" href="themes.html">Themes</a>-->
                  </li>
            
                </ul>
                <router-link :to="{name: 'Login'}">
                  <button type="button"  class="btn btn-outline-secondary  d-flex login">Login</button></router-link>
                <!--<a href="login-reg.html" class = "login">
                  <button type="button"  class="btn btn-outline-secondary  d-flex login">Login</button></a>-->
                <form class="d-flex">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>
    </header>
  <router-view/>

   <footer >
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="images/home/under.png" class="img-responsive inline" alt="">
                </div>

                <div class="col-md-3 col-sm-6 align-self-baseline">
                    <h2>Contacts</h2>
                     <address>
                        E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br> 
                        Phone: +1 (123) 456 7890 <br> 
                        Fax: +1 (123) 456 7891 <br> 
                    </address>
                </div>
                <div class="col-md-3 col-sm-6 align-self-end">
                    <h2>Address</h2>
                    <address>
                        BSTU  <br> 
                        Belgorod <br> 
                        Delrorod state <br> 
                        Russian Federation <br> 
                        </address>
                </div>
               
                <div class="col-sm-12   ">
                    <div class="copyright-text text-center">
                        <p>&copy; Your Company 2021. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>       
    </footer>
</div>
</template>



<style>

  body {
    background: #ffffff;
    font-weight: 300;
    font-size: 16px;
    line-height: 22px;
    font-family: 'Times new Roman', sans-serif;
  }

 
  h1{
    font-size: 32px;
    color: #007e94;
  }

  h2{
    font-size: 24px;
    color: #007e94;
  }

  h3{
    font-size: 18px;
  }

  a{
    text-decoration:none;
  }

.name-title
{
  margin-bottom: 6%;

}

.thems{
  border: medium solid red;
  border-radius: 10px;
  padding-block: 1%;
  margin: 2cm;
}
.thems:hover {
  border: medium solid green;
  border-radius: 10px;
}
.header{
  margin-bottom: 0;
  padding: 30px 0 60px 0;
}

.desc
{
  padding-block: 4px;
  margin: 0.2cm;
}

.social-icons ul li{
  padding: 0 10px;

}

.social-icons ul li:last-child{
  padding-right: 0;

}

.social-icons ul li a{
  font-size: 18px;
  color: #d3d3d3;
  padding: 0;
}

.social-icons ul li a:hover,
.social-icons ul li a:focus{
  color:#dbb075;
  background: none;
}


.header .navbar-toggle{
  margin-top: 20px;
}

.navbar{
  padding-left: 3cm;
 font-size: 0.7cm;
}


/*Dropdown menu*/

ul.sub-menu {
  display: none;
  list-style: none;
  padding: 0;
  margin: 0;
}

.login
{
  margin-right:6%;
}

.header .navbar-nav li ul.sub-menu li .active{
  background: #fef7ee;
  color: #d29948;
  position: relative;
}

.header .navbar-nav li ul.sub-menu li .active i{
  position: absolute;
  font-size: 56px;
  top: -13px;
  color: #dab074;
}
.header .navbar-nav li ul.sub-menu li .active .fa-angle-right{
  left: -3px;
}

.header .navbar-nav li ul.sub-menu li .active .fa-angle-left{
  right: -3px;
}


/*************************
*******Footer******
**************************/

footer {
  padding-bottom: 75px;
  
  background-repeat: repeat-x;
  background-position: bottom;
  background-size: contain;
}



.bottom > h2 {
  margin-top: 0;
  margin-bottom: 26px;
}

.bottom .media-body h3 {
  margin-top: 0;
  padding-left: 25px;
}

.bottom .media-body h3 a{
  color: #d99c4e;
}

.testimonial .media{
  margin-top: 0;
  margin-bottom: 25px;
}


.list-group
{
  margin: 5%;
  margin-bottom: 8%;
  margin-right: 9%;
}




.deac-q{
  margin: 5%;
  border: 4px double black; /* Параметры границы */
    background: rgba(221, 253, 255, 0); /* Цвет фона */
    padding: 10px; /* Поля вокруг текста */
}

.ansv-q{
  margin: 3%;
  border: 4px solid black; /* Параметры границы */
    background: rgba(93, 232, 241, 0.123); /* Цвет фона */
  
  
}
.nm_a{
  border-right: 1px solid rgb(47, 0, 255);
  text-align: center;
  vertical-align: bottom;
  margin-bottom: 0cm;
}

.t-ansv
{
  padding:8px;
}

.form-signin
{
  margin-left: 30%;
  margin-right: 30%;
}


.nw-q
{
  margin-left: 30%;
}
.nw-q input
{
  margin-left: 13%;
}

</style>
