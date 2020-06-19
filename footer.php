<footer>
    <div class="container">
        <div class="row">
            <div id="footer-site-map" class="footer-content col-12 col-sm-6 col-md-6 col-lg-3">
                <h6>Mapa do site</h6>

                <ul>
                    <li><a href="<?php echo esc_url( get_page_link( 1830 ) ); ?>">Sobre a Sun7 Company</a></li>
                    <li><a href="<?php echo esc_url( get_page_link( 1832 ) ); ?>">Como comprar</a></li>
                    <li><a href="<?php echo esc_url( get_page_link( 1834 ) ); ?>">Segurança</a></li>
                    <li><a href="<?php echo esc_url( get_page_link( 1836 ) ); ?>">Contato</a></li>
                </ul>
            </div>

            <ul id="footer-attendance" class="footer-content col-12 col-sm-6 col-md-6 col-lg-3">
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
            <ul id="footer-my-account" class="footer-content col-12 col-sm-6 col-md-6 col-lg-2">
                <h6>Minha conta</h6>
                <li><a href="<?php echo esc_url( get_page_link(9) ) ?>">Meus pedidos</a></li>
                <li><li><a href="<?php echo esc_url( get_page_link(11) ) ?>">Minha conta</a></li></li>

                <h6 id="safe-store">Loja segura</h6>
                <a href="https://transparencyreport.google.com/safe-browsing/search?url=https:%2F%2Fwww.sun7company.com.br">
                    <img src="/sun7company/wp-content/themes/sun7company/assets/img/protect3.png">
                </a>
                
            </ul>
            
            <ul id="footer-facebook" class="col-12 col-sm-6 col-md-6 col-lg-4">
                <div class="fb-page" data-href="https://www.facebook.com/sun7company/" data-tabs="timeline" data-width="" data-height="200" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/sun7company/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/sun7company/">Sun7 Company</a></blockquote></div>
            </ul>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>