<?php
/**
 * Living Waters Brasil - Recent Posts Grid (Dinâmico)
 *
 * @package Living_Waters_Brasil
 * @version 2.0.0
 */
$theme_uri = get_template_directory_uri();
$primary   = get_theme_mod('lw_color_primary', '#fd651e');

$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 6,
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
);
$recent_query = new WP_Query($args);
?>
<section id="artigos" aria-label="Artigos Recentes" class="w-full py-16 lg:py-24 border-b" style="background-color:#eef4ff; border-color:#d9e3f4;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12">
            <div>
                <span class="text-xs font-bold uppercase tracking-wider block mb-1" style="color:<?php echo esc_attr($primary); ?>;">PUBLICAÇÕES RECENTES</span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-[#0f172a] font-['Montserrat']">
                    Últimas Publicações &amp; Evangelismo Prático
                </h2>
            </div>
            <p class="text-xs sm:text-sm text-[#64748b] max-w-sm mt-2 sm:mt-0 font-editorial">
                Artigos teológicos, análises culturais e relatos de evangelismo nas ruas.
            </p>
        </div>

        <?php if ($recent_query->have_posts()) : ?>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <?php while ($recent_query->have_posts()) : $recent_query->the_post(); ?>
            <article class="bg-white rounded-2xl border border-[#dfe9fa] overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between group">
                <div>
                    <?php if (has_post_thumbnail()) : ?>
                    <div class="h-48 w-full bg-[#141c27] overflow-hidden">
                        <?php the_post_thumbnail('lw-card', array('class' => 'w-full h-full object-cover group-hover:scale-105 transition-transform duration-500')); ?>
                    </div>
                    <?php else : ?>
                    <div class="h-48 w-full bg-[#141c27] overflow-hidden">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/ray-comfort.jpg'); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover">
                    </div>
                    <?php endif; ?>
                    <div class="p-6">
                        <div class="text-[11px] font-bold uppercase tracking-wider mb-2" style="color:<?php echo esc_attr($primary); ?>;">
                            <?php echo get_the_category_list(', '); ?>
                        </div>
                        <h3 class="text-lg font-bold text-[#0f172a] mb-2 leading-snug group-hover:text-[#fd651e] transition-colors">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <p class="text-xs text-[#64748b] leading-relaxed line-clamp-3">
                            <?php echo wp_trim_words(get_the_excerpt(), 25); ?>
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <a href="<?php the_permalink(); ?>" class="text-xs font-bold flex items-center gap-1 hover:opacity-80 transition-opacity" style="color:<?php echo esc_attr($primary); ?>;">
                        Ler artigo completo &rarr;
                    </a>
                </div>
            </article>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <?php else : ?>
        <p class="text-center text-[#64748b] py-12">Nenhum artigo publicado ainda. Crie posts no painel do WordPress.</p>
        <?php endif; ?>
    </div>
</section>
