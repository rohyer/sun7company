<footer>
    <div class="container">
        <div class="row">
            <div id="footer-site-map" class="col-3">
                <h6>Mapa do site</h6>
                <?php

                wp_nav_menu( array(
                    'menu' => 'menu',
                    'theme_location' => 'menu'
                ));

                ?>
            </div>
            <ul id="footer-attendance" class="col-3">
                <h6>Atendimento</h6>
                <li>
                    <span id="whatsapp-icon"><i class="fab fa-whatsapp"></i></span>
                    <div id="whatsapp-contact-footer">
                        <span>Whatsapp</span>
                        <span><?php echo get_theme_mod( 'contact_1_section' ) ?></span>
                    </div>
                </li>

                <li>
                    <span id="attendance-icon"><i id="clock" class="fas fa-clock"></i></span>
                    <div id="attendance-contact-footer">
                        <span>Atendimento de</span>
                        <span><?php echo get_theme_mod( 'date_section_name' ) ?></span>
                        <span><?php echo get_theme_mod( 'hour_section_name' ) ?></span>
                    </div>
                </li>
                
            </ul>
            <ul id="footer-my-account" class="col-2">
                <h6>Minha conta</h6>
                <li>Meus pedidos</li>
                <li>Minha conta</li>

                <h6 id="safe-store">Loja segura</h6>
                <a href="https://transparencyreport.google.com/safe-browsing/search?url=https:%2F%2Fwww.sun7company.com.br">
                    <img src="/sun7company/wp-content/themes/sun7company/assets/img/protect3.png">
                </a>
                
            </ul>
            
            <ul id="footer-facebook" class="col-4">
                <div class="fb-page" data-href="https://www.facebook.com/sun7company/" data-tabs="timeline" data-width="" data-height="200" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/sun7company/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/sun7company/">Sun7 Company</a></blockquote></div>
            </ul>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>