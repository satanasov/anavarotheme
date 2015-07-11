<?php get_header(); ?>
        <div class="mainWrap"> 
            <div class="posts" role="main">
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <?php if (function_exists('wp_list_comments')): ?>
                            <div <?php post_class(posting); ?>>
                        <?php else : ?>
                            <div class="posting">
                            
                        <?php endif; ?>
                                <a href="<?php the_permalink() ?>"><h1 class="postTitle"><?php the_title(); ?></h1></a>
                                <span class="postInfo">от <?php 
                                                if ($anavaro_usegrelauthor == "false") { the_author_posts_link(); }
                                                else { echo '<a rel="author" href="'.get_the_author_meta('user_url').'" target="_blank">'.get_the_author().'</a>';}    
                                                ?> на <?php the_time('M.d, Y') ?>, под <?php the_category(', '); ?></span>
                                <?php the_content('(continue reading...)'); ?>
                                <span class="tagsMain">Под тагове<?php the_tags('<em>: </em>', ', ', ''); ?></span>
                                <span class="commentsMain"><?php comments_popup_link('Коментирай ...', '1 коментар', '% коментара'); ?></span>
                                <div class="cleared"></div>
                            </div>
                    <?php endwhile; ?>
                    <?php else : ?>
                        <div class="posting">
                            <h1 class="postTitle">Съжалявам, но няма такова нещо ...</h1>
                            <p> Това си е 404 - търсиш нещо което го няма!</p>
                        </div>
                <?php endif; ?>
                    
                <div class="alignleft"><?php next_posts_link('&laquo; По-стари ...') ?></div>
                <div class="alignright"><?php previous_posts_link('По-нови ... &raquo;') ?></div>
                    
            </div>
            <div class="right"><?php get_sidebar(); ?></div>
            <div class="cleared"></div>
            <?php get_footer(); ?>
        </div>
        
    </body>
</html>