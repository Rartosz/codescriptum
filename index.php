<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CodeScriptum Outsourcing IT, obsługa firmy w internecie!</title>
    <link rel="icon" type="image/jpg" href="img/icon.jpg">
    <link href="<?php echo get_bloginfo('template_directory') ?>/style.css" rel="stylesheet"/>
    <script src="https://kit.fontawesome.com/434ebfe20d.js" crossorigin="anonymous"></script>
    <meta name="description" content="Zaufaj CodeScriptum - Twojemu biznesowi potrzebna profesjonalna opieka online? Oferujemy kompleksowe usługi wsparcia dla firm w internecie. Skuteczne rozwiązania, ekspercka wiedza i pasja do programowania. Skontaktuj się już dziś!">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>



<?php get_header() ?>

<?php get_template_part('main') ?>

<?php get_template_part('offer') ?>

<?php get_template_part('pricing') ?>

<?php get_template_part('about-us') ?>

<?php get_template_part('portfolio') ?>

<?php get_template_part('contact') ?>

<?php get_footer() ?>


    


    

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