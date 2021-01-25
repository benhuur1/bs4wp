<?php if( is_single() || is_page() ) : ?>

<div class='blog-comments'>

    <?php if( have_comments() && comments_open()) : ?>

        <h5 id='comments' class='mb-3'>
            <?php comments_number(__('comentários'), __('1 comentário'), '%' . __(' comentários') ); ?>
        </h5>

    <?php endif; ?>

</div>

<?php endif; ?>