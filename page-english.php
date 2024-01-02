<?php 

/*
* Template Name: English
*/


?>



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeScriptum IT outsourcing, helping your company on the internet!</title>
    <link rel="icon" type="image/jpg" href="img/icon.jpg">
    <link href="<?php echo get_bloginfo('template_directory') ?>/style.css" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/434ebfe20d.js" crossorigin="anonymous"></script>
    <meta name="description" content="Trust CodeScriptum - Does your business need professional online support? We offer comprehensive support services for companies on the Internet. Effective solutions, expert knowledge and passion for programming. Contact us today!">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>

<header class="header">
        <a href="#" class="header__logo">
            <img src="<?php echo get_bloginfo('template_directory') ?>/img/logo_1.png" alt="CodeScriptum">
        </a>
        <button class="header__hamburger">
            <span class="first"></span>
            <span class="second"></span>
            <span class="third"></span>
        </button>
        <nav class="header__nav">
            <a href="#offer" class="header__link">Offer</a>

            <a href="#pricing" class="header__link">How we work?</a>

            <a href="#about-us" class="header__link">About Us</a>

            <a href="#portfolio" class="header__link">Portfolio</a>

            <a href="#contact" class="header__link header__link--button">Contact</a>

            <div class="header__flags">
                    <a href="https://codescriptum.pl/" class="header__link">
                        PL
                    </a>
                    <a href="https://codescriptum.pl/eng/" class="header__link">
                        ENG
                    </a>
            </div>
        </nav>
</header>

<main class="main" id="main" data-aos="zoom-in">
        <h1 class="main__h1" >IT Outsourcing</h1>
        <h2 class="main__h2">External IT support, show yourself online!</h2>
        <div class="main__wrapper">
            <a href="#offer" class="main__button main__button--colored">Meet Us</a>
            <a href="#contact" class="main__button">Contact</a>
        </div>
</main>


<section class="offer" id="offer">
        <h2 class="offer__title">What do we offer?</h2>
        <p class="offer__p1">Do you need online support for your company? You don't want to hire a full-time programmer/IT specialist? Get to know our offer! We will help 😎</p>
        <div class="offer__container">
            <div class="offer__cart" data-aos="fade-right">
                <i class="fa-solid fa-code"></i>
                <h3 class="offer__cartTitle">Programming</h3>
                <p class="offer__cartDescription">We will deal with the code in your product or be part of a new project!</p>
            </div>

            <div class="offer__cart" data-aos="fade-down">
                <i class="fa-solid fa-cart-shopping"></i>
                <h3 class="offer__cartTitle">E-commerce</h3>
                <p class="offer__cartDescription">We will run your online store or create it from scratch!</p>
            </div>

            <div class="offer__cart" data-aos="fade-left">
                <i class="fa-brands fa-wordpress"></i>
                <h3 class="offer__cartTitle">Web administration</h3>
                <p class="offer__cartDescription">We will run your company on the Internet or create it from scratch!</p>
            </div>

            <div class="offer__cart" data-aos="fade-right">
                <i class="fa-brands fa-facebook"></i>
                <h3 class="offer__cartTitle">Social-Media</h3>
                <p class="offer__cartDescription">We will manage your company's social media so that it attracts attention!</p>
            </div>

            <div class="offer__cart" data-aos="fade-up">
                <i class="fa-brands fa-bitcoin"></i>
                <h3 class="offer__cartTitle">Cryptocurrency Miners</h3>
                <p class="offer__cartDescription">Construction and configuration of cryptocurrency miners based on Hive OS and NiceHash OS</p>
            </div>

            <div class="offer__cart" data-aos="fade-left">
                <i class="fa-solid fa-magnifying-glass-chart"></i>
                <h3 class="offer__cartTitle">SEO</h3>
                <p class="offer__cartDescription">We will improve the visibility of your company in popular browsers!</p>
            </div>
        </div>
</section>

<section class="pricing" id="pricing">
        <h2 class="pricing__title">How do we work?</h2>
        <p class="pricing__p1">
            Do you need constant contact with the IT team but you don't want to hire a full-time employee? <br>
            Are you planning to expand your business on the Internet or just enter it? <br>
            Do you need a team of IT specialists and programmers from time to time? <br>
            Check how we work and match your requirements to our proposed terms of cooperation! 
        </p>
        <div class="pricing__container">
            <h3 class="pricing__h3">Our packages</h3>
            <div class="pricing__prices">

                <div class="pricing__card" data-aos="flip-left">
                    <hr class="pricing__color pricing__color--basic">
                    <div class="pricing__wrapper">
                        <h4 class="pricing__name">Constant</h4>
                        <p class="pricing__description">
                            For a business where there is a lot going on 💸🚀
                        </p>
                        <h5 class="pricing__price"></h5>
                        <span class="pricing__subtitle">WHAT YOU GET:</span>
                        <div class="pricing__list">
                            <div class="pricing__listElement">
                                <i class="fa-solid fa-circle-check"></i>
                                Ready to work
                            </div>
                            <div class="pricing__listElement">
                                <i class="fa-solid fa-circle-check"></i>
                                Constant contact
                            </div>
                            <div class="pricing__listElement">
                                <i class="fa-solid fa-circle-check"></i>
                                Specialists to choose from
                            </div>
                        </div>

                        <a href="#contact" class="pricing__button">Contact</a>
                    </div>
                </div>

                <div class="pricing__card" data-aos="flip-left">
                    <hr class="pricing__color pricing__color--hourly">
                    <div class="pricing__wrapper">
                        <h4 class="pricing__name">Hourly</h4>
                        <p class="pricing__description">
                            For business where the motto is 'time is money' 🤑⌛
                        </p>
                        <h5 class="pricing__price"></h5>
                        <span class="pricing__subtitle">WHAT YOU GET:</span>
                        <div class="pricing__list">
                            <div class="pricing__listElement">
                                <i class="fa-solid fa-circle-check"></i>
                                Flexibility of orders
                            </div>
                            <div class="pricing__listElement">
                                <i class="fa-solid fa-circle-check"></i>
                                Payment only for working time
                            </div>
                            <div class="pricing__listElement">
                                <i class="fa-solid fa-circle-check"></i>
                                Specialists to choose from
                            </div>
                        </div>

                        <a href="#contact" class="pricing__button">Contact</a>
                    </div>
                </div>

                <div class="pricing__card" data-aos="flip-left">
                    <hr class="pricing__color pricing__color--job">
                    <div class="pricing__wrapper">
                        <h4 class="pricing__name">Commissioned</h4>
                        <p class="pricing__description">
                            For business where results count 💰💻
                        </p>
                        <h5 class="pricing__price"></h5>
                        <span class="pricing__subtitle">WHAT YOU GET:</span>
                        <div class="pricing__list">
                            <div class="pricing__listElement">
                                <i class="fa-solid fa-circle-check"></i>
                                Flexibility of orders
                            </div>
                            <div class="pricing__listElement">
                                <i class="fa-solid fa-circle-check"></i>
                                Payment for each order
                            </div>
                            <div class="pricing__listElement">
                                <i class="fa-solid fa-circle-check"></i>
                                Specialists to choose from
                            </div>
                        </div>

                        <a href="#contact" class="pricing__button">Contact</a>
                    </div>
                </div>


                
                <div class="pricing__card" data-aos="flip-left">
                    <hr class="pricing__color pricing__color--zlecenie">
                    <div class="pricing__wrapper">
                        <h4 class="pricing__name">Commissioned+</h4>
                        <p class="pricing__description">
                        For companies where we are rarely needed 👨‍💻🦥
                        </p>
                        <h5 class="pricing__price"></h5>
                        <span class="pricing__subtitle">WHAT YOU GET:</span>
                        <div class="pricing__list">
                            <div class="pricing__listElement">
                                <i class="fa-solid fa-circle-check"></i>
                                Ready to work
                            </div>
                            <div class="pricing__listElement">
                                <i class="fa-solid fa-circle-check"></i>
                                Payment for each order
                            </div>
                            <div class="pricing__listElement">
                                <i class="fa-solid fa-circle-check"></i>
                                Low 'waiting cost'
                            </div>
                        </div>

                        <a href="#contact" class="pricing__button">Contact</a>
                    </div>
                </div>


                <div class="pricing__card" data-aos="flip-left">
                    <hr class="pricing__color pricing__color--godzinowy">
                    <div class="pricing__wrapper">
                        <h4 class="pricing__name">Hourly+</h4>
                        <p class="pricing__description">
                            For companies that focus on flexibility ⌚🌎
                        </p>
                        <h5 class="pricing__price"></h5>
                        <span class="pricing__subtitle">WHAT YOU GET:</span>
                        <div class="pricing__list">
                            <div class="pricing__listElement">
                                <i class="fa-solid fa-circle-check"></i>
                                Ready to work
                            </div>
                            <div class="pricing__listElement">
                                <i class="fa-solid fa-circle-check"></i>
                                Pay per hour
                            </div>
                            <div class="pricing__listElement">
                                <i class="fa-solid fa-circle-check"></i>
                                Low 'waiting cost'
                            </div>
                        </div>

                        <a href="#contact" class="pricing__button">Contact</a>
                    </div>
                </div>

            </div>
        </div>

</section>


<section class="about" id="about-us">

    <div class="about__text" data-aos="fade-right">
        <h3 class="about__bigTitle">About us</h3>
        <h2 class="about__smallTitle">About us</h2>
        <p class="about__description">
             We are a polish company specializing in care and support for online businesses. Our mission is to facilitate the growth and success of your business in the online world.
            <br><br>
            We offer services in programming, website design, digital marketing, data analysis and cybersecurity. Our experienced team will help you achieve a competitive advantage and reach your target group.
            <br><br>
            We tailor services to individual needs, regardless of the size of the company. We create and develop websites, optimize them for SEO, run advertising campaigns and manage social media.
            <br><br>
            We focus on transparency and long-term relationships with clients. We are available to answer questions, propose solutions and deliver the results you expect.
            <br><br>
            Contact us and give us a chance to help you achieve online success. The CodeScriptum team is waiting for you!
        </p>
        <a href="#contact" class="about__button">Contact</a>
    </div>

    <img class="about__image" src="<?php echo get_bloginfo('template_directory') ?>/img/outsourcing-it-specjalisci-it-dla-twojej-firmy.png" alt="IT outsourcing for the company" data-aos="fade-left">

</section>



<section class="portfolio" id="portfolio">
        <h2 class="portfolio__title">Portfolio</h2>
        <p class="offer__p1">Below you will find some of our works 💸🚀</p>

        <div class="portfolio__wrapper">
            <a href="https://labratsjobs.pl/" class="portfolio__element" data-aos="zoom-out" target="_blank">
                <img class="portfolio__image" src="<?php echo get_bloginfo('template_directory') ?>/img/portfolio/labratsjobs.png">
                <div class="portfolio__background"></div>
                <h3 class="portfolio__elTitle">LabRatsJobs - Job Board</h3>
            </a>
            <a href="https://floteocars.pl/" class="portfolio__element" data-aos="zoom-out" target="_blank">
                <img class="portfolio__image" src="<?php echo get_bloginfo('template_directory') ?>/img/portfolio/floteo.png">
                <div class="portfolio__background"></div>
                <h3 class="portfolio__elTitle">Floteo - Car Leasing</h3>
            </a>
            <a href="https://ex.bcp24.io/" class="portfolio__element" data-aos="zoom-out" target="_blank">
                <img class="portfolio__image" src="<?php echo get_bloginfo('template_directory') ?>/img/portfolio/bcp24.png">
                <div class="portfolio__background"></div>
                <h3 class="portfolio__elTitle">Cryptocurrency Exchange</h3>
            </a>
            <a href="https://jsystems.pl/" class="portfolio__element" data-aos="zoom-out" target="_blank">
                <img class="portfolio__image" src="<?php echo get_bloginfo('template_directory') ?>/img/portfolio/jsystems.png">
                <div class="portfolio__background"></div>
                <h3 class="portfolio__elTitle">JSystems - training company</h3>
            </a>
            <a href="https://www.maxdent.pl/" class="portfolio__element" data-aos="zoom-out" target="_blank">
                <img class="portfolio__image" src="<?php echo get_bloginfo('template_directory') ?>/img/portfolio/maxdent.png">
                <div class="portfolio__background"></div>
                <h3 class="portfolio__elTitle">Part of the project - Dental Office</h3>
            </a>
            <a href="https://explorer.bcp24.io/" class="portfolio__element" data-aos="zoom-out" target="_blank">
                <img class="portfolio__image" src="<?php echo get_bloginfo('template_directory') ?>/img/portfolio/explorer.png">
                <div class="portfolio__background"></div>
                <h3 class="portfolio__elTitle">Cryptocurrency Explorer</h3>
            </a>
            <a href="https://lemonmobile.pl/" class="portfolio__element" data-aos="zoom-out" target="_blank">
                <img class="portfolio__image" src="<?php echo get_bloginfo('template_directory') ?>/img/portfolio/lemonmobile.png">
                <div class="portfolio__background"></div>
                <h3 class="portfolio__elTitle">Lemonmobile - Telecom</h3>
            </a>

            <a href="https://peakforce.dev/" class="portfolio__element" data-aos="zoom-out" target="_blank">
                <img class="portfolio__image" src="<?php echo get_bloginfo('template_directory') ?>/img/portfolio/peakforce.png">
                <div class="portfolio__background"></div>
                <h3 class="portfolio__elTitle">Part of the project - Company Website</h3>
            </a>

            <a href="https://gymhub.pro/pl/" class="portfolio__element" data-aos="zoom-out" target="_blank">
                <img class="portfolio__image" src="<?php echo get_bloginfo('template_directory') ?>/img/portfolio/gymhub.png">
                <div class="portfolio__background"></div>
                <h3 class="portfolio__elTitle">GYMHUB Ecommerce shop</h3>
            </a>

            <a href="https://22bit.io/" class="portfolio__element" data-aos="zoom-out" target="_blank">
                <img class="portfolio__image" src="<?php echo get_bloginfo('template_directory') ?>/img/portfolio/22bit.png">
                <div class="portfolio__background"></div>
                <h3 class="portfolio__elTitle">22bit - cryptocurrency exchange</h3>
            </a>

        </div>  
</section>



<section class="contact" id="contact">
        <div class="contact__cotainer">
            <div class="contact__left">
                <h2 class="contact__h2">Contact</h2>
                <p class="contact__p">Do you have any questions? You are interested in? Email us!</p>
                <?php echo do_shortcode('[wpforms id="5"]'); ?>
            </div>
            <div class="contact__right">
                <img src="<?php echo get_bloginfo('template_directory') ?>/img/contact.svg" class="contact__img">
    
                <div class="contact__element">
                    <i class="fa-solid fa-envelope"></i>
                    kontakt@codescriptum.pl
                </div>
    
                
                <!-- <div class="contact__element">
                    <i class="fa-solid fa-phone"></i>
                
                </div>
     -->
                
                <div class="contact__element">
                    <i class="fa-solid fa-building"></i>
                    NIP: 772332299
                </div>
    
                <div class="contact__socials">
                    <a href="#" class="social">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a href="https://www.facebook.com/codescriptum" class="social">
                        <i class="fa-brands fa-square-facebook"></i>
                    </a>
                </div>
            </div>
    </div>
</section>


<?php wp_footer(); ?>

<footer class="footer">
        <a href="#" class="footer__logo">
            <img src="<?php echo get_bloginfo('template_directory') ?>/img/logo_1.png">
        </a>
        <nav class="footer__nav">
            <a href="#main" class="footer__link">Start</a>
            <a href="#offer" class="footer__link">Offer</a>
            <a href="#pricing" class="footer__link">How do we wrok?</a>
            <a href="#about-us" class="footer__link">About us</a>
            <a href="#contact" class="footer__link">Contact</a>
        </nav>
        <span class="footer__copyright">
            © 2023 CodeScriptum. All rights reserved.
        </span>

</footer>

    


    

<script>
        const menu = document.querySelector(".header__nav");
        const hamburgerBtn = document.querySelector(".header__hamburger");
        const header = document.querySelector(".header");
        const headerLogo = document.querySelector(".header__logo img");
        var className = "header--active";

        const navLinks = document.querySelectorAll(".header__link");

        var scrollTrigger = 160;
        let wasMenuClickedOrScrolled = 1;

        hamburgerBtn.addEventListener("click", function() 
        {

            if(wasMenuClickedOrScrolled % 2 == 0) 
            {
                headerLogo.src = "https://codescriptum.pl/wp-content/themes/codescriptum/img/logo_1.png";

                menu.classList.toggle("header__nav--open");
                header.classList.remove("header--active");
                document.querySelector(".first").classList.toggle("first--open");
                document.querySelector(".second").classList.toggle("second--open");
                document.querySelector(".third").classList.toggle("third--open");

                document.querySelector(".first").classList.remove("span--active");
                document.querySelector(".second").classList.remove("span--active");
                document.querySelector(".third").classList.remove("span--active");
                

                document.querySelector("body").classList.toggle("body--open");
                document.querySelector("html").classList.toggle("body--open");


                if (window.scrollY >= scrollTrigger || window.pageYOffset >= scrollTrigger) 
                {
                    header.classList.add("header--active");
                    headerLogo.src = "https://codescriptum.pl/wp-content/themes/codescriptum/img/logo_1--black.png";
                    document.querySelector(".first").classList.add("span--active");
                    document.querySelector(".second").classList.add("span--active");
                    document.querySelector(".third").classList.add("span--active");

                    wasMenuClickedOrScrolled = 1;
                    
                }   
            }
            else 
            {
                headerLogo.src = "https://codescriptum.pl/wp-content/themes/codescriptum/img/logo_1--black.png";

                menu.classList.toggle("header__nav--open");
                header.classList.add("header--active");
                document.querySelector(".first").classList.toggle("first--open");
                document.querySelector(".second").classList.toggle("second--open");
                document.querySelector(".third").classList.toggle("third--open");

                document.querySelector(".first").classList.add("span--active");
                document.querySelector(".second").classList.add("span--active");
                document.querySelector(".third").classList.add("span--active");

                document.querySelector("body").classList.toggle("body--open");
                document.querySelector("html").classList.toggle("body--open");
            }
            wasMenuClickedOrScrolled = wasMenuClickedOrScrolled + 1;
            
        });


      

        window.onscroll = function() {
            // We add pageYOffset for compatibility with IE.
            if (window.scrollY >= scrollTrigger || window.pageYOffset >= scrollTrigger) 
            {
                header.classList.add("header--active");
                headerLogo.src = "https://codescriptum.pl/wp-content/themes/codescriptum/img/logo_1--black.png";
                document.querySelector(".first").classList.add("span--active");
                document.querySelector(".second").classList.add("span--active");
                document.querySelector(".third").classList.add("span--active");
                for(let i=0;i<navLinks.length;i++)
                {
                    navLinks[i].classList.add("header__link--active");
                }

                wasMenuClickedOrScrolled = 1;
                
            } 
            else 
            {
                header.classList.remove("header--active");
                headerLogo.src = "https://codescriptum.pl/wp-content/themes/codescriptum/img/logo_1.png";
                document.querySelector(".first").classList.remove("span--active");
                document.querySelector(".second").classList.remove("span--active");
                document.querySelector(".third").classList.remove("span--active");
                for(let i=0;i<navLinks.length;i++)
                {
                    navLinks[i].classList.remove("header__link--active");
                }

                wasMenuClickedOrScrolled = 1;

                
            }
        };





        for(let i=0;i<navLinks.length;i++)
        {
            navLinks[i].addEventListener("click",function() 
            {

                if (window.innerWidth < 1000)
                {
                    menu.classList.toggle("header__nav--open");
                    document.querySelector(".first").classList.toggle("first--open");
                    document.querySelector(".second").classList.toggle("second--open");
                    document.querySelector(".third").classList.toggle("third--open");

                    document.querySelector("body").classList.toggle("body--open");
                    document.querySelector("html").classList.toggle("body--open");
                }

            });
        }

    </script>

 
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init({
    // Global settings:
    disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
    startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
    initClassName: 'aos-init', // class applied after initialization
    animatedClassName: 'aos-animate', // class applied on animation
    useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
    disableMutationObserver: false, // disables automatic mutations' detections (advanced)
    debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
    throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)
    

    // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
    offset: 120, // offset (in px) from the original trigger point
    delay: 0, // values from 0 to 3000, with step 50ms
    duration: 600, // values from 0 to 3000, with step 50ms
    easing: 'ease', // default easing for AOS animations
    once: false, // whether animation should happen only once - while scrolling down
    mirror: false, // whether elements should animate out while scrolling past them
    anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

    });
</script>



</body>