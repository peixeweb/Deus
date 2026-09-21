<?php
/**
 * Living Waters Brasil - Hero Section (Editável via Customizer)
 *
 * @package Living_Waters_Brasil
 * @version 2.0.0
 */
$theme_uri     = get_template_directory_uri();
$primary       = get_theme_mod('lw_color_primary', '#fd651e');
$btn_action    = get_theme_mod('lw_color_button_action', '#cc5500');

$hero_badge    = get_theme_mod('lw_hero_badge', 'Mensagem de Urgência');
$hero_speaker  = get_theme_mod('lw_hero_speaker', 'Ray Comfort');
$hero_title    = get_theme_mod('lw_hero_title', 'A Maior Mensagem Sobre o Inferno Já Pregada');
$hero_desc     = get_theme_mod('lw_hero_description', 'Descubra por que a realidade da condenação eterna não é um tema para ser silenciado, mas a maior motivação bíblica para o evangelismo sem concessões.');
$hero_bg       = get_theme_mod('lw_hero_bg_image', '');
$hero_btn_text = get_theme_mod('lw_hero_btn_text', 'Ler mais');
$hero_btn_url  = get_theme_mod('lw_hero_btn_url', '#featured-content-section');
$hero_video    = get_theme_mod('lw_hero_video_url', '');

$bg_url = $hero_bg ? $hero_bg : $theme_uri . '/assets/images/ray-comfort.jpg';
?>
<section id="hero-section" aria-label="Destaque Principal" class="relative w-full min-h-[560px] lg:min-h-[640px] flex items-center justify-center overflow-hidden bg-[#0d1520] text-white">
    <!-- Background -->
    <div class="absolute inset-0 z-0">
        <img src="<?php echo esc_url($bg_url); ?>" alt="<?php echo esc_attr($hero_title); ?>"
            class="w-full h-full object-cover object-center filter brightness-[0.38] scale-105">
        <div class="absolute inset-0 bg-gradient-to-t from-[#0d1520] via-black/40 to-transparent"></div>
    </div>

    <!-- Conteúdo -->
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center flex flex-col items-center">
        <!-- Badge -->
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-[#ffb89e] text-xs font-bold uppercase tracking-wider mb-6">
            <span class="w-2 h-2 rounded-full animate-pulse" style="background-color:<?php echo esc_attr($primary); ?>"></span>
            <span><?php echo esc_html($hero_badge); ?> &bull; <?php echo esc_html($hero_speaker); ?></span>
        </div>

        <!-- Título -->
        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-[1.1] max-w-4xl font-['Montserrat']">
            <?php echo esc_html($hero_title); ?>
        </h1>

        <!-- Descrição -->
        <p class="mt-6 text-base sm:text-xl text-[#d5deed] font-editorial max-w-3xl leading-relaxed">
            <?php echo esc_html($hero_desc); ?>
        </p>

        <!-- Botões -->
        <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4 w-full sm:w-auto">
            <a href="<?php echo esc_url($hero_btn_url); ?>"
                class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-lg text-white font-bold text-sm tracking-wide shadow-xl transition-all duration-200 hover:scale-[1.02] active:scale-95" style="background-color:<?php echo esc_attr($btn_action); ?>">
                <span><?php echo esc_html($hero_btn_text); ?></span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </a>
            <?php if ($hero_video) : ?>
            <a href="<?php echo esc_url($hero_video); ?>" target="_blank" rel="noopener noreferrer"
                class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-lg bg-white/10 hover:bg-white/20 backdrop-blur-md text-white font-bold text-sm tracking-wide border border-white/20 transition-all duration-200 active:scale-95">
                <svg class="w-4 h-4 fill-white" viewBox="0 0 24 24">
                    <polygon points="5 3 19 12 5 21 5 3"></polygon>
                </svg>
                <span>Assistir Mensagem</span>
            </a>
            <?php endif; ?>
        </div>
    </div>
</section>
