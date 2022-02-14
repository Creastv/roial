 <?php
 $logoFooter   =  get_theme_mod('logo-footer');
 $descFooter   =  get_theme_mod('desc');
 $blog_info    = get_bloginfo( 'name' );
 $description  = get_bloginfo( 'description' );
 ?>
 <div class="brand">
     <?php if (  $logoFooter ) { ?>
     <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
         <img loading="lazy" src="<?php echo esc_html( $logoFooter); ?>" alt="<?php echo esc_html( $blog_info ); ?>">
     </a>
     <?php } else { ?>
     <h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( $blog_info ); ?></a></h3>
     <p><small><?php echo esc_html( $description ); ?></small></p>
     <?php } ?>
 </div>
 <div class="brand-desc">
     <?php if ($descFooter) { ?>
     <p> <?php echo $descFooter; ?></p>
     <?php } ?>
 </div>