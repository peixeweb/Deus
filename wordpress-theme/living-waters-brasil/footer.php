<?php
/**
 * Living Waters Brasil - Footer Template
 *
 * @package Living_Waters_Brasil
 * @version 2.0.0
 */
$footer_bg       = get_theme_mod('lw_color_footer_bg', '#0d131c');
$primary         = get_theme_mod('lw_color_primary', '#fd651e');
$btn_action      = get_theme_mod('lw_color_button_action', '#cc5500');
$footer_desc     = get_theme_mod('lw_footer_description', 'Inspirando e equipando cristãos para cumprir a Grande Comissão através do método bíblico.');
$footer_copyright = get_theme_mod('lw_footer_copyright', 'Todos os direitos reservados.');
$tagline         = get_theme_mod('lw_site_tagline', 'Ministério de Evangelismo Bíblico');

$social_youtube   = get_theme_mod('lw_social_youtube', '#');
$social_facebook  = get_theme_mod('lw_social_facebook', '#');
$social_instagram = get_theme_mod('lw_social_instagram', '#');
$social_twitter   = get_theme_mod('lw_social_twitter', '#');
$social_telegram  = get_theme_mod('lw_social_telegram', '#');
$social_whatsapp  = get_theme_mod('lw_social_whatsapp', '#');
?>
<footer id="colophon" class="w-full text-[#e0e7f1] border-t pt-16 pb-12 mt-auto" style="background-color:<?php echo esc_attr($footer_bg); ?>; border-color:#1e2736;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
            
            <!-- Coluna 1: Identidade (ou Widget) -->
            <?php if (is_active_sidebar('footer-1')) : ?>
                <div class="space-y-4">
                    <?php dynamic_sidebar('footer-1'); ?>
                </div>
            <?php else : ?>
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <?php if (has_custom_logo()) : ?>
                            <?php the_custom_logo(); ?>
                        <?php else : ?>
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" alt="<?php bloginfo('name'); ?>" class="h-10 w-auto object-contain">
                            <div>
                                <span class="font-extrabold text-base tracking-wider text-white uppercase block"><?php bloginfo('name'); ?></span>
                                <span class="text-[10px] font-semibold tracking-widest uppercase block -mt-1" style="color:<?php echo esc_attr($primary); ?>"><?php echo esc_html($tagline); ?></span>
                            </div>
                        <?php endif; ?>
                    </div>
                    <p class="text-xs text-[#a0abbd] leading-relaxed font-editorial"><?php echo esc_html($footer_desc); ?></p>

                    <!-- Redes Sociais -->
                    <div class="flex items-center gap-2 pt-2 text-white">
                        <?php if ($social_youtube) : ?>
                            <a href="<?php echo esc_url($social_youtube); ?>" target="_blank" rel="noopener noreferrer" aria-label="YouTube" class="w-9 h-9 rounded-lg bg-white/5 hover:bg-<?php echo esc_attr(ltrim($primary, '#')); ?> text-[#bfc7d6] hover:text-white flex items-center justify-center transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                            </a>
                        <?php endif; ?>
                        <?php if ($social_facebook) : ?>
                            <a href="<?php echo esc_url($social_facebook); ?>" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="w-9 h-9 rounded-lg bg-white/5 hover:bg-<?php echo esc_attr(ltrim($primary, '#')); ?> text-[#bfc7d6] hover:text-white flex items-center justify-center transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                            </a>
                        <?php endif; ?>
                        <?php if ($social_instagram) : ?>
                            <a href="<?php echo esc_url($social_instagram); ?>" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="w-9 h-9 rounded-lg bg-white/5 hover:bg-<?php echo esc_attr(ltrim($primary, '#')); ?> text-[#bfc7d6] hover:text-white flex items-center justify-center transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                            </a>
                        <?php endif; ?>
                        <?php if ($social_twitter) : ?>
                            <a href="<?php echo esc_url($social_twitter); ?>" target="_blank" rel="noopener noreferrer" aria-label="Twitter" class="w-9 h-9 rounded-lg bg-white/5 hover:bg-<?php echo esc_attr(ltrim($primary, '#')); ?> text-[#bfc7d6] hover:text-white flex items-center justify-center transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                            </a>
                        <?php endif; ?>
                        <?php if ($social_whatsapp) : ?>
                            <a href="https://wa.me/<?php echo esc_attr(preg_replace('/[^0-9]/', '', $social_whatsapp)); ?>" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" class="w-9 h-9 rounded-lg bg-white/5 hover:bg-<?php echo esc_attr(ltrim($primary, '#')); ?> text-[#bfc7d6] hover:text-white flex items-center justify-center transition-colors">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Coluna 2: Equipe-se (ou Widget) -->
            <?php if (is_active_sidebar('footer-2')) : ?>
                <div>
                    <?php dynamic_sidebar('footer-2'); ?>
                </div>
            <?php else : ?>
                <div>
                    <h4 class="text-xs font-bold text-white uppercase tracking-wider mb-4 border-b pb-2" style="border-color:#232e3d;">EQUIPE-SE</h4>
                    <nav class="flex flex-col gap-2.5 text-xs">
                        <a href="<?php echo esc_url(home_url('/#blogger-section')); ?>" class="text-[#bfc7d6] hover:text-white transition-colors">Blog &amp; Articulistas</a>
                        <a href="<?php echo esc_url(home_url('/#escola-online')); ?>" class="text-[#bfc7d6] hover:text-white transition-colors">Escola Online de Evangelismo</a>
                        <a href="<?php echo esc_url(home_url('/#artigos')); ?>" class="text-[#bfc7d6] hover:text-white transition-colors">Artigos &amp; Ensino Bíblico</a>
                        <a href="<?php echo esc_url(home_url('/#ferramentas-folhetos')); ?>" class="text-[#bfc7d6] hover:text-white transition-colors">Folhetos de Evangelismo</a>
                        <a href="<?php echo esc_url(home_url('/#videos')); ?>" class="text-[#bfc7d6] hover:text-white transition-colors">Filmes &amp; Vídeos</a>
                    </nav>
                </div>
            <?php endif; ?>

            <!-- Coluna 3: Articulistas (ou Widget) -->
            <?php if (is_active_sidebar('footer-3')) : ?>
                <div>
                    <?php dynamic_sidebar('footer-3'); ?>
                </div>
            <?php else : ?>
                <div>
                    <h4 class="text-xs font-bold text-white uppercase tracking-wider mb-4 border-b pb-2" style="border-color:#232e3d;">AUTORES &amp; MENSAGENS</h4>
                    <nav class="flex flex-col gap-2.5 text-xs">
                        <a href="<?php echo esc_url(home_url('/#blogger-section')); ?>" class="text-[#bfc7d6] hover:text-white transition-colors">Ray Comfort (Fundador)</a>
                        <a href="<?php echo esc_url(home_url('/#blogger-section')); ?>" class="text-[#bfc7d6] hover:text-white transition-colors">E.Z. Zwayne (Presidente)</a>
                        <a href="<?php echo esc_url(home_url('/#blogger-section')); ?>" class="text-[#bfc7d6] hover:text-white transition-colors">Mark Spence (Vice-Presidente)</a>
                        <a href="<?php echo esc_url(home_url('/#blogger-section')); ?>" class="text-[#bfc7d6] hover:text-white transition-colors">Equipe Living Waters Brasil</a>
                    </nav>
                </div>
            <?php endif; ?>

            <!-- Coluna 4: Doação (ou Widget) -->
            <?php if (is_active_sidebar('footer-4')) : ?>
                <div>
                    <?php dynamic_sidebar('footer-4'); ?>
                </div>
            <?php else : ?>
                <div>
                    <h4 class="text-xs font-bold text-white uppercase tracking-wider mb-4 border-b pb-2" style="border-color:#232e3d;">APOIE ESTA CAUSA</h4>
                    <p class="text-xs text-[#a0abbd] leading-relaxed mb-4">Sua doação viabiliza distribuição de literatura bíblica e capacitação de voluntários no Brasil.</p>
                    <button type="button" id="lw-footer-donation-btn"
                        class="w-full inline-flex items-center justify-center gap-2 px-4 py-3 text-white text-xs font-bold tracking-wide rounded-lg transition-all shadow cursor-pointer active:scale-95" style="background-color:<?php echo esc_attr($btn_action); ?>">
                        <svg class="w-4 h-4 fill-white" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                        <span>Fazer uma Contribuição</span>
                    </button>
                </div>
            <?php endif; ?>
        </div>

        <div class="pt-8 border-t flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-[#717d91]" style="border-color:#1e2736;">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> &bull; <?php echo esc_html($footer_copyright); ?></p>
            <?php if (has_nav_menu('footer_menu')) : ?>
                <nav class="flex items-center gap-4">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'footer_menu',
                        'container'      => false,
                        'items_wrap'     => '%3$s',
                        'depth'          => 1,
                        'link_before'    => '<span class="hover:text-white transition-colors cursor-pointer">',
                        'link_after'     => '</span>',
                    )); ?>
                </nav>
            <?php endif; ?>
        </div>
    </div>
</footer>

<!-- Modais do Tema -->
<?php get_template_part('template-parts/modal-donation'); ?>
<?php get_template_part('template-parts/modal-search'); ?>
<?php get_template_part('template-parts/modal-article'); ?>
<?php get_template_part('template-parts/modal-video'); ?>

<?php wp_footer(); ?>
</body>
</html>
