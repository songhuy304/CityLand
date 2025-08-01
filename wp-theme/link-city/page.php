<?php
/**
 * The template for displaying all pages
 *
 * @package Link_City
 */

get_header(); ?>

<div id="fullpage">
    <section class="section section-light fp-section fp-table">
        <div class="fp-tableCell">
            <div class="grid-container add-pt">
                <div class="col-12">
                    <?php
                    while (have_posts()) :
                        the_post();
                        ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <header class="entry-header">
                                <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
                            </header>

                            <div class="entry-content">
                                <?php
                                the_content();

                                wp_link_pages(array(
                                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'link-city'),
                                    'after'  => '</div>',
                                ));
                                ?>
                            </div>
                        </article>
                    <?php
                    endwhile;
                    ?>
                </div>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>
