<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Import Google Icon Font-->
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    Import materialize.css -->
    <link type="text/css" rel="stylesheet" href="Public/css/materialize-icons.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="Public/css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="Public/css/estilos.css">
    <link rel="stylesheet" href="Public/css/all.min.css">
    <style>
     ul.tabs li a{
         font-size:20px!important;
         color: white;
     }
     ul.tabs li a:focus{
         font-size:28px!important;
         color: black!important;
     }

     blockquote img{
         height:320px!important;
     }
     .thanks{
         position: relative;
         top:200;
         left:50;
     }
    </style>
    <script src="Public/js/jquery-3.2.1.min.js"></script>
    <script src="Public/js/materialize.min.js"></script>
    <script>
      $(document).ready(function(){
        $('.scrollspy').scrollSpy();
    });</script>

    <title>Materialize</title>
</head>
<body>
    <div class="white" style="height: 350vh; opacity: .8;">
       
        <h1 class="center hoverable z-depth-2 purple lighten-2" style="opacity: .9; margin-top:0px;">SOCIETY IN THE U.S</h1>
        <ul class="tabs">
            <li class="tab col l3"><a href="#contenido1">Objective</a></li>
            <li class="tab col l3"><a href="#contenido2">College</a></li>
            <li class="tab col l3"><a href="#contenido3">Making friends</a></li>
            <li class="tab col l3"><a href="#contenido4">Closure</a></li>
        </ul>
        <div class="container">
        <div class="thanks">
            <h4>Thanks for your attention..</h4>
        </div>
            <div class="row">
                <div id="contenido1">
                    <h4>Objective</h4>
                    <blockquote class="col l4">
                       <img src="Public/img/1.jpg" alt="" class="responsive-img circle">
                    </blockquote>
                    <blockquote class="col l4">
                       <img src="Public/img/2.jpg" alt="" class="responsive-img circle">
                    </blockquote>
                    <blockquote class="col l4">
                       <img src="Public/img/3.jpg" alt="" class="responsive-img circle">
                    </blockquote>
                   
                </div>
                <div id="contenido2">
                    <h4>College</h4>
                    <blockquote class="col l4">
                       <img src="Public/img/4.jpg" alt="" class="responsive-img circle">
                    </blockquote>
                    <blockquote class="col l4">
                       <img src="Public/img/13.jpg" alt="" class="responsive-img circle">
                    </blockquote>
                    <blockquote class="col l4">
                       <img src="Public/img/6.jpg" alt="" class="responsive-img circle">
                    </blockquote>
                   
                </div>
                <div id="contenido3">
                    <h4>Making Friends</h4>
                    <blockquote class="col l4">
                       <img src="Public/img/7.png" alt="" class="responsive-img circle">
                    </blockquote>
                    <blockquote class="col l4">
                       <img src="Public/img/8.jpg" alt="" class="responsive-img circle">
                    </blockquote>
                    <blockquote class="col l4">
                       <img src="Public/img/9.jpg" alt="" class="responsive-img circle">
                    </blockquote>
                </div>
                <div id="contenido4">
                    <h4>Closure</h4>
                    <blockquote class="col l6">
                       <img src="Public/img/10.jpg" alt="" class="responsive-img circle">
                    </blockquote>
                    <blockquote class="col l6">
                       <img src="Public/img/11.jpg" alt="" class="responsive-img circle">
                    </blockquote>
                   
                </div>
            </div>
        </div>
        <br>
    </div>

</body>
</html>