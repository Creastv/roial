 <?php
  $copyLeft   =  get_theme_mod('copyright-left');
  $copyRight   =  get_theme_mod('copyright-right');
 ?>
 <div id="info">
     <div class="col">
         <?php if ($copyLeft) { ?>
         <p><?php echo $copyLeft; ?></p>
         <?php } ?>
     </div>
     <div class="col">
         <?php if ($copyRight) { ?>
         <p><?php echo $copyRight; ?></p>
         <?php } ?>
     </div>
 </div>