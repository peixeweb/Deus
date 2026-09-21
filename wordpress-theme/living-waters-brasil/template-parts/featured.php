<?php
/**
 * Living Waters Brasil - Featured Section (3/5 + 2/5, Dinâmico)
 *
 * @package Living_Waters_Brasil
 * @version 2.0.0
 */
$theme_uri      = get_template_directory_uri();
$primary        = get_theme_mod('lw_color_primary', '#fd651e');
$featured_id    = intval(get_theme_mod('lw_featured_post_id', 0));
$featured_image = get_theme_mod('lw_featured_image_override', '');

if ($featured_id) {
    $featured_post = get_post($featured_id);
} else {
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 1,
        'post_status'    => 'publish',
        'orderby'        => 'date',
        'order'          => 'DESC',
    );
    $q = new WP_Query($args);
    $featured_post = $q->have_posts() ? $q->next_post() : null;
    wp_reset_postdata();
}
?>
<section id="featured-content-section" aria-label="Conteúdo em Destaque" class="w-full py-16 lg:py-24 border-b" style="background-color:#f8f9ff; border-color:#e2e8f0;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
            
            <!-- Coluna Editorial Principal (3/5) -->
            <div class="lg:col-span-7 bg-white rounded-2xl border border-[#e2e8f0] overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <?php if ($featured_post) :
                    $img = $featured_image ? $featured_image : '';
                    if (!$img && has_post_thumbnail($featured_post->ID)) {
                        $img = get_the_post_thumbnail_url($featured_post->ID, 'lw-hero');
                    }
                    if (!$img) {
                        $img = $theme_uri . '/assets/images/ray-comfort.jpg';
                    }
                ?>
                <div class="relative h-64 sm:h-80 w-full overflow-hidden bg-black/5">
                    <img src="<?php echo esc_url($img); ?>" alt="<?php echo esc_attr($featured_post->post_title); ?>" class="w-full h-full object-cover">
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 rounded-md text-white text-xs font-bold uppercase tracking-wider shadow" style="background-color:<?php echo esc_attr($primary); ?>">
                            Artigo Principal
                        </span>
                    </div>
                </div>

                <div class="p-6 sm:p-8">
                    <div class="flex items-center gap-3 text-xs text-[#64748b] mb-3">
                        <span class="font-bold text-[#1e293b]">Por <?php echo esc_html(get_the_author_meta('display_name', $featured_post->post_author)); ?></span>
                        <span>&bull;</span>
                        <span><?php echo living_waters_read_time($featured_post->ID); ?></span>
                        <span>&bull;</span>
                        <span class="font-semibold" style="color:<?php echo esc_attr($primary); ?>"><?php echo get_the_category_list(', ', '', $featured_post->ID); ?></span>
                    </div>

                    <h2 class="text-2xl sm:text-3xl font-extrabold text-[#0f172a] leading-tight mb-4 font-['Montserrat']">
                        <a href="<?php echo get_permalink($featured_post->ID); ?>" class="hover:text-[#fd651e] transition-colors"><?php echo esc_html($featured_post->post_title); ?></a>
                    </h2>

                    <p class="text-sm sm:text-base text-[#475569] font-editorial leading-relaxed mb-6">
                        <?php echo wp_trim_words($featured_post->post_content, 40); ?>
                    </p>

                    <a href="<?php echo get_permalink($featured_post->ID); ?>"
                        class="inline-flex items-center gap-2 text-sm font-bold transition-colors group" style="color:<?php echo esc_attr($primary); ?>">
                        <span>Ler o Artigo Completo</span>
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </a>
                </div>
                <?php else : ?>
                <div class="p-12 text-center text-[#64748b]">
                    <p>Nenhum artigo em destaque. Configure um ID de post no Customizer.</p>
                </div>
                <?php endif; ?>
            </div>

            <!-- Coluna de Treinamento (2/5) -->
            <div class="lg:col-span-5 space-y-6">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-bold text-[#0f172a] font-['Montserrat'] uppercase tracking-wider flex items-center gap-2">
                        <span class="w-2.5 h-2.5 rounded-full" style="background-color:<?php echo esc_attr($primary); ?>"></span>
                        <span>Ferramentas &amp; Treinamento</span>
                    </h3>
                    <span class="text-xs text-[#64748b] font-medium">Acesso Gratuito</span>
                </div>

                <!-- Escola Online -->
                <div id="escola-online" class="p-6 rounded-2xl bg-white border border-[#e2e8f0] shadow-sm hover:shadow-md transition-all hover:border-[#fd651e]/50">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-[#eef4ff] text-[#004881] flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <span class="text-[10px] font-bold text-[#004881] uppercase tracking-wider bg-[#eef4ff] px-2 py-0.5 rounded">Curso Gratuito</span>
                            <h4 class="text-base font-bold text-[#0f172a] mt-1 mb-1">Escola de Evangelismo Bíblico</h4>
                            <p class="text-xs text-[#64748b] leading-relaxed">Aulas em vídeo ensinando a vencer o medo e proclamar Cristo com intrepidez.</p>
                        </div>
                    </div>
                </div>

                <!-- Folhetos -->
                <div id="ferramentas-folhetos" class="p-6 rounded-2xl bg-white border border-[#e2e8f0] shadow-sm hover:shadow-md transition-all hover:border-[#fd651e]/50">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-[#fff2ec] flex items-center justify-center shrink-0" style="color:<?php echo esc_attr($primary); ?>">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" y1="15" x2="12" y2="3"></line>
                            </svg>
                        </div>
                        <div>
                            <span class="text-[10px] font-bold uppercase tracking-wider bg-[#fff2ec] px-2 py-0.5 rounded" style="color:#a73a00;">PDF para Download</span>
                            <h4 class="text-base font-bold text-[#0f172a] mt-1 mb-1">Folheto Evangelístico</h4>
                            <p class="text-xs text-[#64748b] leading-relaxed">O tratado evangelístico mais popular. Baixe o PDF pronto para impressão.</p>
                        </div>
                    </div>
                </div>

                <!-- Apologética -->
                <div class="p-6 rounded-2xl bg-white border border-[#e2e8f0] shadow-sm hover:shadow-md transition-all hover:border-[#fd651e]/50">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-[#f0fdf4] text-emerald-600 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="16" x2="12" y2="12"></line>
                                <line x1="12" y1="8" x2="12.01" y2="8"></line>
                            </svg>
                        </div>
                        <div>
                            <span class="text-[10px] font-bold text-emerald-700 uppercase tracking-wider bg-[#f0fdf4] px-2 py-0.5 rounded">Guia Rápido</span>
                            <h4 class="text-base font-bold text-[#0f172a] mt-1 mb-1">Passo a Passo com Céticos</h4>
                            <p class="text-xs text-[#64748b] leading-relaxed">Conduza conversas da área intelectual para a consciência moral do ouvinte.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
