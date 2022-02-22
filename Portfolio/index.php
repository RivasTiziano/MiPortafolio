<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro&family=Poppins:wght@200;300;400;600;700&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Mi Portafolio</title>
</head>
<body>
    <header id="header">
        <nav class="menu_container">
            <i class="fa fa-times"></i>
            <ul class="li_container">
                <li><a class="menu_item home" href="#header">Home</a></li>
                <li><a class="menu_item about" href="#about">Habilidades</a></li>
                <li><a class="menu_item projects" href="#projects">Proyectos</a></li>
                <li><a class="menu_item contact" href="#contact">Contacto</a></li>
            </ul>   
        </nav>
        <div class="bars_container">
            <i class="fa fa-bars"></i>
        </div>
        <div class="presentation">
            <span class="name">SOY TIZIANO RIVAS</span>
            <span class="specialization">Front End Developer</span>
            <div class="skills">
                <div class="skill">
                    <div class="skill-name">HTML</div>
                    <div class="skill-bar">
                    <div class="skill-per html" style="max-width:90%"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-name">CSS</div>
                    <div class="skill-bar">
                    <div class="skill-per css" style="max-width:80%"></div>
                    </div>
                </div>
                <div class="skill">
                    <div class="skill-name">Javascript</div>
                    <div class="skill-bar">
                    <div class="skill-per " style="max-width:80%"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="about">
      
        <h1 class="habilities">Habilidades</h1>
        <hr>
        <p class="spec">Se usar herramientas como Visual Studio Code, git y github, <br>  tengo conocimientos en la administracion de base de datos MySql. <br> Actualmente sigo practicando y aprendiendo codigo en JavaScript, siendo mi plan a futuro adquirir lenguajes de Back-End <br> y ser un desarrollador Full Stack. <br></p>
        <hr>
        <div class="img_container">
          <img class="git" src="images/git.png">  
          <img class="html_css_js" src="images/html-css-js-npg.png">
          <img class="mysql" src="images/mysql.png">
        </div>
    </section>
    
    <section id="projects">
        <div class="projects_container">
            <hr class="projects_hr">
            <h1 class="projects_title">Proyectos</h1>
            <a class="pr project1" href="http://kalzaloautomotriz.ga/">
                <div>

                </div>
            </a>
        </div>
    </section>
    <section id="contact">
        <div class="contact-section">
            <h1>Contacto</h1>
            <div class="border"></div>
            <form class="contact-form" method="post">
              <input name="name" type="text" class="contact-form-text" placeholder="Nombre">
              <input name="email" type="email" class="contact-form-text" placeholder="Email">
              <input name="telephone" type="text" class="contact-form-text" placeholder="Telefono">
              <textarea name="mensaje" class="contact-form-text" placeholder="Mensaje"></textarea>
              <input name="register" type="submit" class="contact-form-btn" value="Enviar" href="#footer">
            </form>
            <?php 
                include("registrar.php");
            ?>
        </div>
    </section>
    <footer id="footer">
        <div class="footer-content">
            <div class="footer-menu">
                <ul class="f-menu">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">Habilidades</a></li>
                    <li><a href="#projects">Proyectos</a></li>
                    <li><a class="ignore_contact" href="#contact">Contacto</a></li>
                </ul>
            </div>
            <ul class="socials">
                <li><a href="https://www.facebook.com/profile.php?id=100015290168403"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.instagram.com/t1z1_ezequiel._/"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://www.youtube.com/channel/UCYNKRoIs0fcMj5NvEt-1a4w"><i class="fa fa-youtube"></i></a></li>
                <li><a href="https://www.linkedin.com/in/tiziano-ezequiel-rivas-menichelli-8a0728222/"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://github.com/RivasTiziano"><i class="fa fa-github"></i></a></li>
            </ul>
            <p>Copyright &copy; <a href="#">With &hearts; Tiziano Rivas</a>  </p>     
        </div>
    </footer>
    <a class="gotopbtn" href="#header"><i class="fas fa-arrow-up"></i></a>
<script src="js/script.js"></script>
<div class="ignore"></div>
</body>
</html>