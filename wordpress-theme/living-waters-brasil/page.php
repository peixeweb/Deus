<?php
/**
 * Living Waters Brasil - Page Template
 *
 * @package Living_Waters_Brasil
 */
get_header();
?>

<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16 flex-1">
    <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class('bg-white rounded-3xl border border-[#e2e8f0] p-6 sm:p-10 lg:p-14 shadow-sm'); ?>>
            <h1 class="text-3xl sm:text-4xl font-black text-[#0f172a] mb-8 font-['Montserrat']">
                <?php the_title(); ?>
            </h1>
            <div class="prose max-w-none text-[#334155] font-editorial leading-relaxed space-y-6">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; ?>
</div>

<?php
get_footer();
