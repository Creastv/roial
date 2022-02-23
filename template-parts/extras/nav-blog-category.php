<div class="futured-cat container-row">
    <span>Kategorie postów</span>
    <ul>
        <?php
            $categories = get_categories();
            foreach ($categories as $category) :
                $cat_class =  ( is_category( $category->name ) ) ? 'active' : '';
                $futured = get_field('wyroznione', $category); ?>
        <?php if($futured): ?>
        <li class="<?php echo $cat_class; ?>"><a
                href="<?php echo get_category_link( $category->term_id ) ?>"><?php echo $category->cat_name; ?></a>
        </li>
        <?php endif; ?>
        <?php endforeach; ?>
    </ul>
</div>