<section class="testimonials">
    <div class="container">
        <h2>What Our Users Say</h2>
        <p class="section-subtext">Trusted by educators worldwide</p>

        <?php 
        $q = new WP_Query([
            'post_type' => 'testimonial',
            'posts_per_page' => 5
        ]);
        ?>

        <div class="testimonial-slider">
            <div class="slides">

                <?php while ($q->have_posts()): $q->the_post(); ?>

                    <div class="slide">
                        <div class="testimonial-card">

                            <p class="quote">
                                “<?php echo wp_trim_words(get_the_content(), 25); ?>”
                            </p>

                            <div class="author">
                                <strong><?php the_title(); ?></strong>

                                <span>
                                    <?php echo get_field('role') ?: 'Verified User'; ?>
                                </span>
                            </div>

                        </div>
                    </div>

                <?php endwhile; wp_reset_postdata(); ?>

            </div>

            <div class="slider-controls">
                <button type="button" id="prev">‹</button>
                <button type="button" id="next">›</button>
            </div>
        </div>
    </div>
</section>