<section class="about container">
    <div class="about-grid">

        <div>
            <h2><?php echo get_field('about_title') ?: 'Built for Educators & Creators'; ?></h2>

            <p>
                <?php echo get_field('about_text') ?: 'Our platform helps educators deliver scalable learning experiences with modern tools and automation.'; ?>
            </p>
        </div>

        <div class="about-image">
            <?php
            $image = get_field('about_image');

            if ($image) {
                echo '<img src="' . esc_url($image) . '" alt="About">';
            }
            ?>
        </div>

    </div>
</section>