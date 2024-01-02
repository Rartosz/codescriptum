    <section class="contact" id="contact">
        <div class="contact__cotainer">
            <div class="contact__left">
                <h2 class="contact__h2">Kontakt</h2>
                <p class="contact__p">Masz pytania? Jesteś zainteresowany? Napisz do nas!</p>
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
                    <a href="https://www.linkedin.com/in/bartosz-gromek-80a484184/" class="social">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a href="https://www.facebook.com/codescriptum" class="social">
                        <i class="fa-brands fa-square-facebook"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>