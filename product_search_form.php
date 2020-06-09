<?php
    $form = '<form role="search" method="get" id="searchform" action="' . esc_url( home_url( '/'  ) ) . '">
    <div>
      <label class="screen-reader-text" for="s">' . __( 'Search for:', 'woocommerce' ) . '</label>
      <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="' . __( 'Digite o que você está procurando', 'woocommerce' ) . '" />
      
      <button type="submit" id="searchsubmit" value="'. esc_attr__( 'Search', 'woocommerce' ) .'">
        <i class="fas fa-search"></i>
      </button>
      <input type="hidden" name="post_type" value="product" />
    </div>
  </form>';
  
  echo $form;
  ?>