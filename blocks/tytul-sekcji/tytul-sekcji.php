<?php

$title = get_field('title');
$tag = get_field('tag');
$title2 = get_field("title2");

$uid = $block['id'];

$className = 'ra-title-section';
if( !empty($block['className']) ) {
   $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
   $className .= ' align' . $block['align'];
}
?>


<div id="<?php echo $uid; ?>" class=" <?php echo esc_attr($className); ?>">
    <<?php echo $tag; ?> class="title-section-tag">
        <?php echo $title; ?>
        <?php if($title2){ ?>
        <span> <?php echo $title2; ?></span>
        <?php } ?>
    </<?php echo $tag; ?>>
</div>