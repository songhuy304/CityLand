<?php
/**
 * The template for displaying all pages.
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

                        <div class="swiper-arrow-2 style-2 prev arrow-outer prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-6fa710823ded7e36a">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 4.5L7.5 12L15 19.5" stroke="#326768" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>

                        <div class="swiper-arrow-2 style-2 next arrow-outer next" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-6fa710823ded7e36a"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9 4.5L16.5 12L9 19.5" stroke="#326768" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<!-- ============================ END CONTENT ============================ -->

<?php get_footer(); ?>