<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="icon" class="n" href="assets/img/n.png">
    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="/assets/img/n.png" type="image/png">
      
    <!--=============== BOXICONS ===============-->

    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>


    <!--=============== SWIPER CSS ===============-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/styles.css">

    <title> NavWeb</title>
</head>

<body>
    <!--=============== HEADER ===============-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="logo nav__logo">NavWeb</a>

            <a href="/" class="lang">
                <span class="lang__type">En</span>
                <img class="li" src="assets/img/en.jpg" alt="">
            </a>


            <div class="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">
                            <i class='bx bx-home-alt'></i>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#about" class="nav__link ">
                            <i class='bx bx-user'></i>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#skills" class="nav__link">
                            <i class='bx bx-book'></i>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#work" class="nav__link">
                            <i class='bx bx-briefcase-alt-2'></i>
                        </a>
                    </li>

                    <li class="nav__item">
                        <a href="#contact" class="nav__link">
                            <i class='bx bxs-phone-call'></i>
                        </a>
                    </li>
                </ul>
            </div>

            <i class='bx bx-moon change-theme' id="theme-button"></i>
        </nav>
    </header>

    <!--=============== MAIN ===============-->
    <main class="main">
        <!--=============== HOME ===============-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__data">
                    <span class="home__greeting">Hi,  I'm </span>
                    <h1 class="home__name">Navruz</h1>
                    <h3 class="home__education">Full-stack developer</h3>

                    <div class="home__buttons">
                        <a href="#contact" class="button button--ghost">
                            CONTACT
                        </a>
                        <a href="#about" class="button"> ABOUT</a>
                    </div>
                </div>

                <div class="home__handle">
                    <img src="./assets/img/perfil.png" alt="" class="perfil home__img">
                </div>

                <div class="home__social">
                    <a href="https:/instagram.com/navrruzz" target="_blank" class="home__social-link">
                        <i class='bx bxl-instagram' target="_blank"></i>
                    </a>
                    <a href="" target="_blank" class="home__social-link">
                        <i class="bx bxl-telegram"></i>
                    </a>
                    <a href="tel:977351787" class="home__social-link">
                        <i class='bx bx-phone-call'></i>
                    </a>
                </div>

                <a href="#about" class="home__scroll">
                    <i class="bx bx-mouse home__scroll-icon"></i>
                    <span class="home__scroll-name">Scroll down
                    </span>
                </a>
            </div>
        </section>

        <!--=============== ABOUT ===============-->
        <section class="about section" id="about">
            <span class="section__subtitle">My Intro</span>
            <h2 class="section__title">About me</h2>

            <div class="about__container container grid">
               
                <div class="home__handle-2">
                    <img src="./assets/img/about.png" alt="" class="about__img">
                </div>
               
                <div class="about__data">
                    <div class="about__info">
                        <div class="about__box">
                            <i class="bx bx-award about__icon"></i>
                            <h3 class="about__title">Experience</h3>
                            <span class="about__subtitle">3 years of work</span>
                        </div>

                        <div class="about__box">
                            <i class="bx bx-briefcase-alt about__icon"></i>

                            <h3 class="about__title">Successful</h3>
                            <span class="about__subtitle">15+ projects</span>
                        </div>

                        <div class="about__box">
                            <i class="bx bx-support about__icon"></i>
                            <h3 class="about__title">Help</h3>
                            <span class="about__subtitle">Support 24/7</span>
                        </div>

                    </div>

                    <p class="about__description">
                    Full-stack developer, I create web pages with good design, I have many years of experience
                        work, and all customers are satisfied with the completed projects.
                    </p>

                    <a href="#contact" class="button">CONTACT</a>
                </div>
                <div class="home__handle-3">
                    <img src="./assets/img/about2.png" alt="" class="about2">
                </div>
            </div>
        </section>

        <!--=============== SKILLS ===============-->
        <section class="skills section" id="skills">
            <span class="section__subtitle">My experience</span>
            <h2 class="section__subtitle exp">My abilities</h2>

            <div class="skills__container container grid">
                <div class="skills__content">
                    <h3 class="skills__title">Frontend developer</h3>

                    <div class="skills__box">
                        <div class="skills__box">
                            <div class="skills__group">
                                <div class="skills__data">
                                    <i class="bx bxs-badge-check"></i>

                                    <div>
                                        <h3 class="skills__name">HTML</h3>
                                        <span class="skills__level">Advanced</span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <i class="bx bxs-badge-check"></i>

                                    <div>
                                        <h3 class="skills__name">CSS</h3>
                                        <span class="skills__level">Advanced</span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <i class="bx bxs-badge-check"></i>

                                    <div>
                                        <h3 class="skills__name">JavaScript</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>
                            </div>

                            <div class="skills__group">
                                <div class="skills__data">
                                    <i class="bx bxs-badge-check"></i>

                                    <div>
                                        <h3 class="skills__name">Bootstrap</h3>
                                        <span class="skills__level">Advanced</span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <i class="bx bxs-badge-check"></i>

                                    <div>
                                        <h3 class="skills__name">Grid</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <i class="bx bxs-badge-check"></i>

                                    <div>
                                        <h3 class="skills__name">React</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="skills__content">
                    <h3 class="skills__title">Backend developer</h3>

                    <div class="skills__box">
                        <div class="skills__box">
                            <div class="skills__group">
                                <div class="skills__data">
                                    <i class="bx bxs-badge-check"></i>

                                    <div>
                                        <h3 class="skills__name">PHP</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <i class="bx bxs-badge-check"></i>

                                    <div>
                                        <h3 class="skills__name">Node Js</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <i class="bx bxs-badge-check"></i>

                                    <div>
                                        <h3 class="skills__name">Python</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>
                            </div>

                            <div class="skills__group">
                                <div class="skills__data">
                                    <i class="bx bxs-badge-check"></i>

                                    <div>
                                        <h3 class="skills__name">MySQL</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>

                                <div class="skills__data">
                                    <i class="bx bxs-badge-check"></i>

                                    <div>
                                        <h3 class="skills__name">Word-press</h3>
                                        <span class="skills__level">Intermediate</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=============== SERVICES ===============-->
        <section class="services section">
            <span class="section__subtitle">My Services</span>
            <h2 class="section__title">What do I suggest</h2>

            <div class="services__container container grid">
                <div class="services__card">
                    <h3 class="services__title">Frontend <br> developer</h3>

                    <span class="services__button">
                        Learn more <i class="bx bx-right-arrow-alt services__icon"></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <i class="bx bx-x services__modal-close"></i>

                            <h3 class="services__modal-title">Frontend developer</h3>
                            <p class="services__modal-description">
                            Service with more than 3 years of experience. Providing quality work to clients and companies. </p>
                            <ul class="services__modal-nav__list">
                                <li class="services__modal-item">
                                    <i class="bx bx-check services__modal-icon"></i>
                                    <p class="services__modal-info">
                                    I make the FRONTEND of your website
                                    </p>
                                </li>

                                <li class="services__modal-item">
                                    <i class="bx bx-check services__modal-icon"></i>
                                    <p class="services__modal-info">
                                    Development of quality web pages
                                    </p>
                                </li>

                                <li class="services__modal-item">
                                    <i class="bx bx-check services__modal-icon"></i>
                                    <p class="services__modal-info">
                                    Creative approach to the project
                                    </p>
                                </li>

                                <li class="services__modal-item">
                                    <i class="bx bx-check services__modal-icon"></i>
                                    <p class="services__modal-info">
                                    Quality work
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="services__card">
                    <h3 class="services__title">Backend <br>developer</h3>

                    <span class="services__button">
                        Learn more <i class="bx bx-right-arrow-alt services__icon"></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <i class="bx bx-x services__modal-close"></i>

                            <h3 class="services__modal-title">Backend developer</h3>
                            <p class="services__modal-description">
                            Service with more than 3 years of experience. Providing quality work to clients and companies.

                            </p>
                            <ul class="services__modal-nav__list">
                                <li class="services__modal-item">
                                    <i class="bx bx-check services__modal-icon"></i>
                                    <p class="services__modal-info">
                                    I make the BACKEND of your site
                                    </p>
                                </li>

                                <li class="services__modal-item">
                                    <i class="bx bx-check services__modal-icon"></i>
                                    <p class="services__modal-info">
                                    Warranty work
                                    </p>
                                </li>

                                <li class="services__modal-item">
                                    <i class="bx bx-check services__modal-icon"></i>
                                    <p class="services__modal-info">
                                    Websites with a unique design
                                    </p>
                                </li>

                                <li class="services__modal-item">
                                    <i class="bx bx-check services__modal-icon"></i>
                                    <p class="services__modal-info">
                                    Support 24/7    
                                    </p>
                                </li>

                            </ul>
                        </div>
                    </div>

                </div>

                <div class="services__card">
                    <h3 class="services__title">Full-Stack <br>developer</h3>

                    <span class="services__button">
                        Learn more <i class="bx bx-right-arrow-alt services__icon"></i>
                    </span>

                    <div class="services__modal">
                        <div class="services__modal-content">
                            <i class="bx bx-x services__modal-close"></i>

                            <h3 class="services__modal-title">Full-Stack developer</h3>
                            <p class="services__modal-description">
                            Service with more than 3 years of experience. Providing quality work to clients and companies.</p>
                            <ul class="services__modal-nav__list">
                                <li class="services__modal-item">
                                    <i class="bx bx-check services__modal-icon"></i>
                                    <p class="services__modal-info">
                                    I make both the BACKEND and FRONTEND of the site
                                    </p>
                                </li>

                                <li class="services__modal-item">
                                    <i class="bx bx-check services__modal-icon"></i>
                                    <p class="services__modal-info">
                                    Websites on time
                                    </p>
                                </li>

                                <li class="services__modal-item">
                                    <i class="bx bx-check services__modal-icon"></i>
                                    <p class="services__modal-info">
                                    Help 24/7
                                    </p>
                                </li>

                                <li class="services__modal-item">
                                    <i class="bx bx-check services__modal-icon"></i>
                                    <p class="services__modal-info">
                                    Development of quality web pages</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=============== WORK ===============-->
        <section class="work section" id="work">
            <span class="section__subtitle">My portfolio</span>
            <h2 class="section__title">Latest projects</h2>

            <div class="work__filters">
                <span class="work__item active-work" data-filter="all">All</span>
                <span class="work__item" data-filter=".shop">Stores</span>
                <span class="work__item" data-filter=".creative">Creative</span>
                <span class="work__item" data-filter=".proche">Others</span>
            </div>

            <div class="work__container container grid">
                <div class="work__card mix shop">
                    <img src="./assets/img/p1.png" alt="" class="work__img">

                    <h3 class="work__title">Plants website</h3>

                    <a href="#" class="work__button">Demo <i class="bx bx-right-arrow-alt work__icon"></i></a>
                </div>

                <div class="work__card mix shop">
                    <img src="./assets/img/p2.png" alt="" class="work__img">

                    <h3 class="work__title">Car showroom website</h3>

                    <a href="#" class="work__button">Demo <i class="bx bx-right-arrow-alt work__icon"></i></a>
                </div>

                <div class="work__card mix proche">
                    <img src="./assets/img/p3.png" alt="" class="work__img">

                    <h3 class="work__title">Homes website</h3>

                    <a href="#" class="work__button">Demo <i class="bx bx-right-arrow-alt work__icon"></i></a>
                </div>

                <div class="work__card mix creative">
                    <img src="./assets/img/p4.png" alt="" class="work__img">

                    <h3 class="work__title">Creative halloween website</h3>

                    <a href="#" class="work__button">Demo <i class="bx bx-right-arrow-alt work__icon"></i></a>
                </div>

                <div class="work__card mix shop">
                    <img src="./assets/img/p5.png" alt="" class="work__img">

                    <h3 class="work__title">Delivering website</h3>

                    <a href="#" class="work__button">Demo <i class="bx bx-right-arrow-alt work__icon"></i></a>
                </div>

                <div class="work__card mix proche">
                    <img src="./assets/img/p6.png" alt="" class="work__img">

                    <h3 class="work__title">Fitness website</h3>

                    <a href="#" class="work__button">Demo <i class="bx bx-right-arrow-alt work__icon"></i></a>
                </div>

                <div class="work__card mix creative">
                    <img src="./assets/img/p7.png" alt="" class="work__img">

                    <h3 class="work__title">New Year website</h3>

                    <a href="#" class="work__button">Demo <i class="bx bx-right-arrow-alt work__icon"></i></a>
                </div>
            </div>
        </section>

        <!--=============== TESTIMONIALS ===============-->
        <section class="testimonial section" id="testimonials">
            <span class="section__subtitle">Reviews</span>
            <h2 class="section__title">My clients</h2>

            <div class="testimonial__container container swiper">
                <div class="swiper-wrapper">
                    <div class="testimonial__card swiper-slide">
                        <img src="./assets/img/t1.jpg" alt="" class="testimonial__img">

                        <h3 class="testimonial__name">Аббос</h3>
                        <p class="testimonial__description">
                        Really good job, all aspects of the project were followed step by step and with good results.</p>
                    </div>
                        
                    <div class="testimonial__card swiper-slide">
                        <img src="./assets/img/t2.jpg" alt="" class="testimonial__img">

                        <h3 class="testimonial__name">Жавлон </h3>
                        <p class="testimonial__description">
                        Professional and creative approach to the project, all the details are in place. The main thing is time.</p>
                    </div>

                    <div class="testimonial__card swiper-slide">
                        <img src="./assets/img/t3.jpg" alt="" class="testimonial__img ">

                        <h3 class="testimonial__name">Елена</h3>
                        <p class="testimonial__description">
                        Perfect job, even better than I wanted. Low price and high quality. I advise everyone.</p>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </section>


        <!--=============== CONTACT ===============-->
        <section class="contact section" id="contact">
            <span class="section__subtitle">contact</span>
            <h2 class="section__title">Contact me</h2>

            <div class="contact__container container grid">
                <div class="contact__content">
                    <h3 class="contact__title">Talk to me
                    </h3>

                    <div class="contact__info">
                        <div class="contact__card">
                            <i class="bx bx-mail-send contact__card-icon"></i>
                            <h3 class="contact__card-title">Email</h3>
                            <span class="contact__card-data">navwebuz@gmail.com</span>

                            <a href="mailto:navwebuz@gmail.com" target="_blank" class="contact__button">
                                CONTACT <i class="bx bx-right-arrow-alt contact__button-icon"></i>
                            </a>
                        </div>


                        <div class="contact__card">
                            <i class="bx bxl-whatsapp contact__card-icon"></i>
                            <h3 class="contact__card-title">Number</h3>
                            <span href="tel:977351787" class="contact__card-data" >(97) 735 17 87</span>

                            <a href="tel:977351787" class="contact__button">
                                CONTACT <i class="bx bx-right-arrow-alt contact__button-icon"></i>
                            </a>
                        </div>


                        <div class="contact__card">
                            <i class="bx bxl-telegram contact__card-icon"></i>
                            <h3 class="contact__card-title">Telegram</h3>
                            <span class="contact__card-data">navrruzz</span>

                            <a href="https://t.me/navrruzz" class="contact__button">
                                CONTACT <i class="bx bx-right-arrow-alt contact__button-icon"></i>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="contact__content">
                    <h3 class="contact__title">
                    Send me your project</h3>

                    <!-- <form action="" class="contact">
                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">Имя</label>
                            <input type="text" placeholder="Напишите своё имя" class="contact__form-input">
                        </div>

                    
                        <div class="contact__form-div">
                            <label for="" class="contact__form-tag">Email</label>
                            <input type="email" placeholder="Напишите свою почту" class="contact__form-input">
                        </div>

                        <div class="contact__form-div contact__form-area">
                            <label for="" class="contact__form-tag">Проект</label>
                            <textarea name="" id="" cols="30" rows="10" placeholder="Write your projest"
                                class="contact__form-input"></textarea>
                        </div>

                        <button class="button">Отправить</button>
                    </form> -->

                    <?php include 'contactEn.php'; ?>
                </div>
            </div>
        </section>
    </main>

    <!--=============== FOOTER ===============-->
    <footer class="footer">
        <div class="footer__container container">
            <h1 class="footer__title" href="navweb.github.io/NavWeb">NavWeb</h1>

            <ul class="footer__list">
                <li>
                    <a href="#about" class="footer__link">About me</a>
                </li>

                <li>
                    <a href="#work" class="footer__link">Projects</a>
                </li>

                <li>
                    <a href="#testimonials" class="footer__link">Reviews</a>
                </li>
            </ul>

            <ul class="footer__social">
                <a href="" target="_blank" class="footer__social-link">
                    <i class="bx bxl-telegram"></i>
                </a>

                <a href="" target="_blank" class="footer__social-link">
                    <i class="bx bxl-instagram"></i>
                </a>

                <a href="" target="_blank" class="footer__social-link">
                    <i class="bx bxl-twitter"></i>
                </a>
            </ul>
        </div>
    </footer>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="assets/js/scrollreveal.min.js"></script>

    <!--=============== SWIPER JS ===============-->
    <script src="assets/js/swiper-bundle.min.js"></script>

    <!--=============== MIXITUP FILTER ===============-->
    <script src="assets/js/mixitup.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="assets/js/main.js"></script>
</body>

</html>