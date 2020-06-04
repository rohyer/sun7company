<footer>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <h6>Menu</h6>
                <?php

                wp_nav_menu( array(
                    'menu' => 'menu',
                    'theme_location' => 'menu'
                ));

                ?>
            </div>
            <ul class="col-3">
                <h6>Contato</h6>
                <li> <span>Email: </span> <a href="#"><?php echo get_theme_mod( 'email_section' ) ?></a></li>
                <li> <span><?php echo get_theme_mod( 'contact_2_section_name' ) ?> </span> <a href="#"><?php echo get_theme_mod( 'contact_2_section' ) ?></a></li>
                <li> <span>Tel: </span> <a href="#"><?php echo get_theme_mod( 'telefone_section' ) ?></a></li>
                <li> <span> <?php echo get_theme_mod( 'contact_1_section_name' ) ?> </span> <a href="#"><?php echo get_theme_mod( 'contact_1_section' ) ?></a></li>
            </ul>
            <ul class="col-3">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>