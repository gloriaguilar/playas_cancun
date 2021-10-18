<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/modifiers.css">
    <script src="https://kit.fontawesome.com/62ea397d3a.js" crossorigin="anonymous"></script>
    <title>Playi-Landia</title>
</head>
<body>
    <header>
        <nav class="nav__container bg-white">
            <div class="nav__container__title">
                <a href=""><i class="fas fa-umbrella-beach color-red"></i> Caribeños</a>
            </div>
            <ul class=" d-flex">
                <li><a href="">Inicio</a></li>
                <li><a href="#section_beach">Playas</a></li>
                <li><a href="#section_tips">Tips</a></li>
                <li><a href="#section_around">Alrededores</a></li>
            </ul>
        </nav>
    </header>

    <div class="main__container bg-white wd-100">
        <div class="main__container__intro wd-100 d-flex-center">
            <div class="container__intro d-flex-center">
                <img src="assets/img/cancun_mirador.jpg" class="wd-100" alt="" srcset="">
                <span class="container__intro-title color-white">¡Todo lo que necesitas saber de las playas de Cancún!</span>
            </div>
        </div>
        <div class="container__section__beach color-gray flex-column wd-100 d-flex-center" id="section_beach">
            <span class="container__section__span">¡Playas populares en Cancún!</span>
            <br>
            <div class="container_section__beach__card d-flex  flex-justify-around flex-wrap" >
                <?php
                    include('back/beach_information.php');
                    foreach ($info_beach as $beach => $info){
                ?>
                <div class="card flex-column d-flex-center container__beach-information pd-20">
                    <div class="container__section__beach-img">
                        <img src='<?=$info['img']?>' alt="Casa_Maya_Cancun" class="wd-100">
                    </div>
                    <div class="container__section__beach-text">
                        <h3><?=$info['nombre']?></h3>
                        <span class="container_section__beach__card-span"><b>Ubicación: </b>  <?=$info['ubicacion']?></span>
                        <br>
                        <span class="container_section__beach__card-span"> <b>Como llegar:</b> <?=$info['transporte']?></span>
                        <br>
                        <p><?=$info['descripcion']?></p> 
                    </div>
                </div>
                <?php }?>
            </div>              
        </div>

        <div class=" d-flex-center flex-column" id="section_tips">
            <span class="container__section__span">Tips justos y necesarios</span>
            <br>
            <div class="wd-100 d-flex container__section__tips" >
                <div class="container__section__tips-list d-flex-center">
                    <i class="far fa-sun "></i>
                    <span>Procura usar bloqueador solar, estar bajo el sol por mucho tiempo,puede irritar tu piel.</span>
                </div>
                <div class="container__section__tips-list d-flex-center">
                    <i class="fas fa-bus "></i>
                    <span>Los camiones con "R-2" o "Zona Hotelera", llegan a las Playas. Es el medio más barato para llegar. </span>
                </div>
                <div class="container__section__tips-list d-flex-center">
                    <i class="far fa-smile-wink"></i>
                    <span>¡Sin miedo al éxito! Puedes preguntarle a cualquier local indicaciones y con gusto te apoyamos.</span>
                </div>
            </div>
        </div>

        <div class="flex-column wd-100 d-flex-center" id="section_around">
            <span class="container__section__span">¡Más , queremos más Playas!</span>
            <br>
            <div class="d-flex container__section__around flex-justify-around flex-wrap " >
                <?php   
                    include("back/cards_information.php");
                    foreach ($info_places as $places => $information) {
                ?>
                <div class="flex-column container__around-information d-flex-center pd-20">
                    <div class="container__section__around-img pd-r15">
                        <img src="<?=$information['img']?>" class="wd-100" alt="" srcset="">
                    </div>
                    <div class="container__section__around-text">
                        <h3><?=$information['title'];?></h3>
                        <br>
                        <p><?=$information['descripcion'];?></p>
                    </div>
                </div>
                <?php }?>  
            </div>
        </div>
        <div class="footer d-flex flex-justify-around">
            <p>Hecho por Gloria Aguilar <i class="fas fa-bug fas"></i></p>
            <br>
            <div>
                <p>Psss...psst....</p>
                <p>Me encuentras aquí: <i class="fab fa-linkedin"></i> <i class="fab fa-github"></i></p>
            </div>
        </div>
    </div>
</body>
</html>