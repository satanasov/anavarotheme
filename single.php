<?php get_header(); ?>
    <div class="mainWrap"> 
        <div class="posts" role="main">
            <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="posting">
                                <a href="<?php the_permalink() ?>"><h1 class="postTitle"><?php the_title(); ?></h1></a>
                                <span class="postInfo">от <?php 
                                                if ($anavaro_usegrelauthor == "false") { the_author_posts_link(); }
                                                else { echo '<a rel="author" href="'.get_the_author_meta('user_url').'" target="_blank">'.get_the_author().'</a>';}    
                                                ?> на <?php the_time('M.d, Y') ?>, под <?php the_category(', '); ?></span>
                                <?php the_content('(continue reading...)'); ?>
                                <span class="tagsMain">Под тагове<?php the_tags('<em>: </em>', ', ', ''); ?></span>
                                <!-- Add FB Comment <div> to be over normal comment form -->
                                <!-- <div class="fb-comments" data-href="<?php the_permalink(); ?>" data-num-posts="20" data-width="680" data-colorscheme="dark"></div>-->
                                <div id="comments">
                                    <?php if (function_exists('wp_list_comments')): ?>
                                    <!-- WP 2.7 and above -->
                                    <?php comments_template('', true); ?>

                                    <?php else : ?>
                                    <!-- WP 2.6 and below -->
                                    <?php comments_template(); ?>
                                    <?php endif; ?>
                                </div> <!-- Closes Comment -->
                                <div class="cleared"></div>
                            </div>
                            
                        <?php endwhile; ?>
                        <?php else : ?>
                        <div class="posting">
                            <h1 class="postTitle">Съжалявам, но няма такова нещо ...</h1>
                            <p> Това си е 404 - търсиш нещо което го няма!</p>
                        </div>
                    <?php endif; ?>
        </div>
        <div class="right"><?php get_sidebar(); ?></div>
        </div>
        <div class="cleared"></div>
        <?php get_footer(); ?>
    </body>
</html>