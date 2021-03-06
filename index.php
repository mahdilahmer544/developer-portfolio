<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">
       
        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
        <link href='https://unpkg.com/boxicons@2.0.8/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/thinline.css">
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" 
crossorigin="anonymous" /> <!--pour utiliser les icons de site fontawsome -->
        <title>Portfolio website complete</title>
        <!--Fonctions Jquery-->
        <script src="jquery-3.6.0.js"> </script>
        <script src="jquery_index.js"> </script>
    </head>
    <body>
 
        <!--===== HEADER =====-->
        <?php
        if (!empty($_GET["ajouter"])){
        if ($_GET["ajouter"]=="oui"){
            echo"<script>alert('Your message has been sent, we will contact you very soon');</script>";
        }
        elseif ($_GET["ajouter"]=="non"){
            echo"<script>alert('Your message has not been sent, try again');</script>";
        }
    }
        ?>
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Mahdi</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">Work</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Hi,<br>I'am <span class="home__title-color">Mahdi</span><br> <div class="wrapper">
            <div class="static-txt"></div>
            <ul class="dynamic-txts">
              <li><span>Web developer</span></li>
              <li><span>Designer</span></li>
              <li><span>Photographer</span></li>
              <li><span>Freelancer</span></li>
            </ul>
          </div></h1>
                    

                    <a href="#contact" class="button">Contact</a>
                </div>

                <div class="home__social">
                    <a href="" class="home__social-icon"><i class='bx bxl-linkedin'></i></a>
                    <a href="" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                </div>

                <div class="home__img">    
                    <img src="assets/img/perfil.png" alt="">
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">About</h2>
                

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/about.jpg" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">I'am Mahdi</h2>
                        <p class="about__text">Web developer, with extensive knowledge and years of experience, working in web technologies and design, delivering quality work.</p>           
                          
                        
                        <div class="about-bouttons">
                            <a  href="assets/pdf/cv_mahdi_en.pdf" class="button button-flex" target=_blank>
                       
                            My CV 
                            </a>
                            
                        </div> 
                    </div> 
                                                    
                </div>
            </section>

            <!--===== SKILLS =====-->
           <!-- <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>
                <span class="section__subtitle">My technical level</span>
                <div class="skills__container container grid">
                    <div>
                        <!--===== SKILLS 1 =====->
                        <div class="skills__content skills__open">
                            <div class="skills__header">
                                <i class="uil uil-brackets-curly skills__icon"></i>
                                <div>
                                    <h1 class="skills__title">Frontend developer</h1>
                                    <span class="skills__subtitle">More than 4 years</span>
                                </div>
                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>
                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">
                                            HTML 
                                        </h3>
                                        <span class="skills__number">90%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__html">

                                        </span>
                                    </div>


                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">
                                            CSS 
                                        </h3>
                                        <span class="skills__number">85%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__css">

                                        </span>
                                    </div>


                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">
                                            JavaScript
                                        </h3>
                                        <span class="skills__number">65%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__js">

                                        </span>
                                    </div>


                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">
                                            Jquery 
                                        </h3>
                                        <span class="skills__number">60%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__jq">

                                        </span>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <!--===== SKILLS 2 =====->
                        <div class="skills__content skills__close">
                            <div class="skills__header">
                                <i class="uil uil-server-network skills__icon"></i>
                                <div>
                                    <h1 class="skills__title">Backend developer</h1>
                                    <span class="skills__subtitle">More than 2 years</span>
                                </div>
                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>
                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">
                                            PHP 
                                        </h3>
                                        <span class="skills__number">90%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__php">

                                        </span>
                                    </div>


                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">
                                            MYSQL 
                                        </h3>
                                        <span class="skills__number">85%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__mysql">

                                        </span>
                                    </div>


                                </div>
                                
                                
                            </div>
                        </div>
                    </div> 
                    <div>
                        <!--===== SKILLS 3 =====->
                        <div class="skills__content skills__close">
                            <div class="skills__header">
                                <i class="uil uil-swatchbook skills__icon"></i>
                                <div>
                                    <h1 class="skills__title">Designer</h1>
                                    <span class="skills__subtitle">More than 6 years</span>
                                </div>
                                <i class="uil uil-angle-down skills__arrow"></i>
                            </div>
                            <div class="skills__list grid">
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">
                                            Photoshop 
                                        </h3>
                                        <span class="skills__number">90%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__photoshop">

                                        </span>
                                    </div>


                                </div>
                                <div class="skills__data">
                                    <div class="skills__titles">
                                        <h3 class="skills__name">
                                            Illustrator 
                                        </h3>
                                        <span class="skills__number">60%</span>
                                    </div>
                                    <div class="skills__bar">
                                        <span class="skills__percentage skills__illustrator">

                                        </span>
                                    </div>


                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div> 
            </section> -->
            
            <section class="skills section" id="skills">
                <h2 class="section-title">Skills</h2>

                <div class="skills__container bd-grid">          
                    <div>
                        <h2 class="skills__subtitle">Profesional Skills</h2>
                        <p class="skills__text">experience in web development and design knowledge</p>
                        <h3 class="skills__subtitle skill_1"><i class="uil uil-brackets-curly skills__icon"></i>Frontend developer</h3>
                        
                        
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <span class="skills__name">HTML5</span>
                            </div>
                            <div class="skills__bar skills__html">

                            </div>
                            <div>
                                <span class="skills__percentage">95%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-css3 skills__icon'></i>
                                <span class="skills__name">CSS3</span>
                            </div>
                            <div class="skills__bar skills__css">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-javascript skills__icon' ></i>
                                <span class="skills__name">JAVASCRIPT</span>
                            </div>
                            <div class="skills__bar skills__js">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">65%</span>
                            </div>
                        </div>
                       
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-jquery skills__icon'></i>
                                
                                <span class="skills__name">Jquery</span>
                            </div>
                            <div class="skills__bar skills__jquery">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">60%</span>
                            </div>
                        </div>
                     
                  
                     
                        <h3 class="skills__subtitle"><i class="uil uil-server-network skills__icon"></i>Backend developer</h3>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-php skills__icon'></i>
                                
                                <span class="skills__name">PHP</span>
                            </div>
                            <div class="skills__bar skills__php">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>

                           
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <div class="skills__icon"><img src="assets\img\mysql1-logo.png"/>
                                </div>
                                <span class="skills__name">MYSQL</span>
                            </div>
                            <div class="skills__bar skills__php">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">85%</span>
                            </div>
                           
                        </div>
                        <h3 class="skills__subtitle"><i class="uil uil-swatchbook skills__icon"></i>Designer</h3>
                        <div class="skills__data">
                            <div class="skills__names">
                                <div class="skills__icon"><img src="assets\img\photoshop-logo.png"/>
                                </div>
                                
                                <span class="skills__name">Photoshop</span>
                            </div>
                            <div class="skills__bar skills__photoshop">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">90%</span>
                            </div>
                           
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <div class="skills__icon"><img src="assets\img\illustrator-logo.png"/>
                                </div>
                                
                                <span class="skills__name">Illustrator</span>
                            </div>
                            <div class="skills__bar skills__illustrator">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">60%</span>
                            </div>
                           
                        </div>
                        
                      
                    </div>
                    
                    <div>              
                        <img src="assets/img/work3.jpg" alt="" class="skills__img">
                        <img src="assets/img/work5.jpg" alt="" class="skills__img">
                    </div>
                </div>
            </section> 

            <!--===== WORK =====-->
            <section class="work section" id="work">
                <h2 class="section-title">Work</h2>

                <div class="work__container bd-grid">
                    <div class="work__img">
                        <a href="https://formationendeveloppement.com/"><img src="assets/img/work1.jpg" alt=""></a>
                    </div>
                    <div class="work__img">
                        <a href="http://ecommerce.formationendeveloppement.com/"><img src="assets/img/work2.jpg" alt=""></a>
                    </div>
                    <div class="work__img">
                    <a href="http://facture.formationendeveloppement.com/"> <img src="assets/img/work3.jpg" alt=""></a>
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work4.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work5.jpg" alt="">
                    </div>
                    <div class="work__img">
                        <img src="assets/img/work6.jpg" alt="">
                    </div>
                </div>
            </section>

            <!--===== CONTACT =====-->
            
            <section class="contact section" id="contact">
                <h1 class="section-title">Contact</h1>
               
                <h1 class="section-title"><i class="fas fa-mobile-alt"></i> (+216)29508262 <br><i class="fas fa-at"></i>  mahdilahmer544@gmail.com</h1><br>
	            
               
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">Mahdi</p>
            <div class="footer__social">
                <a href="#" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="#" class="footer__icon"><i class='bx bxl-twitter' ></i></a>
            </div>
            <p>&#169; 2020 copyright all right reserved</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>