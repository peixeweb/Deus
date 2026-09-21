<?php
/**
 * Living Waters Brasil - Blogger Section (Dados Dinâmicos)
 *
 * @package Living_Waters_Brasil
 * @version 2.0.0
 */
$theme_uri = get_template_directory_uri();
$primary   = get_theme_mod('lw_color_primary', '#fd651e');
$bloggers  = living_waters_get_bloggers();

$args = array(
    'post_type'      => 'post',
    'posts_per_page' => 6,
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
);
$blog_query = new WP_Query($args);
?>
<section id="blogger-section" aria-label="Área do Blog e Articulistas" class="w-full py-16 lg:py-24 border-t relative" style="background-color:#f8f9ff; border-color:#e2e8f0;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
        
        <!-- Header da Seção -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
            <div>
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider mb-3" style="background-color:<?php echo esc_attr($primary); ?>15; border:1px solid <?php echo esc_attr($primary); ?>40; color:<?php echo esc_attr($primary); ?>;">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path>
                        <line x1="16" y1="8" x2="2" y2="22"></line>
                        <line x1="17.5" y1="15" x2="9" y2="15"></line>
                    </svg>
                    <span>ÁREA PARA BLOGGER &amp; ARTICULISTAS</span>
                </div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#121c28] tracking-tight font-['Montserrat']">
                    Blog Living Waters &amp; Articulistas
                </h2>
                <p class="mt-2 text-base sm:text-lg text-[#5a6578] font-editorial max-w-2xl leading-relaxed">
                    Reflexões pastorais diretas, bastidores do evangelismo de rua e respostas apologéticas de quem vive o ministério na prática.
                </p>
            </div>

            <div class="flex items-center gap-3 bg-white p-3 sm:p-4 rounded-xl border border-[#dfe5f0] shadow-sm shrink-0">
                <div class="w-10 h-10 rounded-lg text-white flex items-center justify-center font-bold text-sm" style="background-color:#141c27;">LW</div>
                <div>
                    <div class="text-xs text-[#717d91] font-medium">Artigos Publicados</div>
                    <div class="text-sm sm:text-base font-extrabold text-[#121c28]"><?php echo $blog_query->found_posts; ?>+ reflexões bíblicas</div>
                </div>
            </div>
        </div>

        <!-- Cards dos Articulistas -->
        <div class="mb-10">
            <h3 class="text-sm font-bold text-[#141c27] uppercase tracking-wider mb-4 flex items-center gap-2">
                <svg class="w-4 h-4" style="color:<?php echo esc_attr($primary); ?>" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle>
                </svg>
                <span>Nossos Blogueiros &amp; Articulistas Oficiais</span>
            </h3>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <?php foreach ($bloggers as $blogger) : ?>
                <div class="lw-author-card p-5 rounded-xl border border-[#e0e7f1] bg-white/80 hover:bg-white hover:shadow-md transition-all cursor-pointer" data-author-id="<?php echo esc_attr($blogger['id']); ?>">
                    <div class="flex items-center gap-3.5 mb-3">
                        <img src="<?php echo esc_url($blogger['avatar']); ?>" alt="<?php echo esc_attr($blogger['name']); ?>"
                            class="w-12 h-12 rounded-full object-cover border border-[#e2e8f0] shadow-sm shrink-0">
                        <div class="overflow-hidden">
                            <div class="font-bold text-[#121c28] text-sm truncate font-['Montserrat']"><?php echo esc_html($blogger['name']); ?></div>
                            <div class="text-[11px] text-[#64748b] truncate font-medium"><?php echo esc_html($blogger['role']); ?></div>
                        </div>
                    </div>
                    <p class="text-xs text-[#475569] leading-relaxed line-clamp-3 mb-3"><?php echo esc_html($blogger['bio']); ?></p>
                    <div class="pt-3 border-t border-[#f1f5f9] flex items-center justify-between text-xs">
                        <span class="font-bold" style="color:<?php echo esc_attr($primary); ?>"><?php echo intval($blogger['postsCount']); ?> posts</span>
                        <span class="font-semibold text-[11px] text-[#64748b]">Ver posts &rarr;</span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Grade de Posts do Blog (Dinâmico) -->
        <?php if ($blog_query->have_posts()) : ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="lw-blog-posts-grid">
            <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
            <article class="lw-post-card bg-white rounded-2xl border border-[#e2e8f0] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col justify-between cursor-pointer group">
                <div>
                    <?php if (has_post_thumbnail()) : ?>
                    <div class="relative h-48 w-full bg-[#141c27] overflow-hidden">
                        <?php the_post_thumbnail('lw-card', array('class' => 'w-full h-full object-cover transition-transform duration-500 group-hover:scale-105')); ?>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <div class="absolute top-3 left-3">
                            <?php the_category_badge(); ?>
                        </div>
                        <div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-white text-xs">
                            <span class="text-[11px] text-[#e2e8f0]"><?php echo living_waters_read_time(); ?></span>
                            <span class="text-[11px] text-[#cbd5e1]"><?php echo get_the_date('M, Y'); ?></span>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="p-6">
                        <div class="flex items-center gap-2.5 mb-3">
                            <?php echo get_avatar(get_the_author_meta('ID'), 28, '', '', array('class' => 'w-7 h-7 rounded-full object-cover border border-[#cbd5e1]')); ?>
                            <span class="text-xs font-bold text-[#1e293b]"><?php the_author(); ?></span>
                        </div>
                        <h3 class="text-lg font-bold text-[#0f172a] group-hover:text-[#fd651e] transition-colors leading-snug mb-3 font-['Montserrat']">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <p class="text-xs sm:text-sm text-[#475569] font-editorial leading-relaxed line-clamp-3 mb-4">
                            <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                        </p>
                    </div>
                </div>
                <div class="px-6 py-3.5 bg-[#fafbfd] border-t border-[#f1f5f9] flex items-center justify-between">
                    <span class="text-xs font-semibold text-[#64748b]"><?php echo get_comments_number(); ?> comentários</span>
                    <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-1 text-xs font-bold transition-transform group-hover:translate-x-0.5" style="color:<?php echo esc_attr($primary); ?>">
                        Ler Post Completo &rarr;
                    </a>
                </div>
            </article>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
        <?php endif; ?>

    </div>
</section>
