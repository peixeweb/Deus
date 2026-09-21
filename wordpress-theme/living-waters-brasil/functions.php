<?php
/**
 * Living Waters Brasil - Theme Functions
 *
 * @package Living_Waters_Brasil
 * @version 2.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Configurações básicas do tema
 */
function living_waters_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1200, 675, true);
    add_image_size('lw-card', 600, 400, true);
    add_image_size('lw-hero', 1920, 1080, true);
    add_image_size('lw-author', 200, 200, true);
    add_image_size('lw-video', 800, 450, true);

    add_theme_support('html5', array(
        'search-form', 'gallery', 'caption', 'style', 'script'
    ));

    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    add_theme_support('custom-background', array(
        'default-color' => 'f8f9ff',
        'default-image' => '',
    ));

    add_theme_support('custom-header', array(
        'default-image'  => '',
        'width'          => 1920,
        'height'         => 800,
        'flex-width'     => true,
        'flex-height'    => true,
    ));

    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');

    register_nav_menus(array(
        'primary_menu' => __('Menu Principal Superior', 'living-waters-brasil'),
        'footer_menu'  => __('Menu do Rodapé', 'living-waters-brasil'),
        'mobile_menu'  => __('Menu Mobile', 'living-waters-brasil'),
    ));
}
add_action('after_setup_theme', 'living_waters_setup');

/**
 * Áreas de Widgets
 */
function living_waters_widgets_init() {
    register_sidebar(array(
        'name'          => __('Rodapé Coluna 1', 'living-waters-brasil'),
        'id'            => 'footer-1',
        'description'   => __('Widget da primeira coluna do rodapé', 'living-waters-brasil'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title text-xs font-bold text-white uppercase tracking-wider mb-4 border-b border-[#232e3d] pb-2">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Rodapé Coluna 2', 'living-waters-brasil'),
        'id'            => 'footer-2',
        'description'   => __('Widget da segunda coluna do rodapé', 'living-waters-brasil'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title text-xs font-bold text-white uppercase tracking-wider mb-4 border-b border-[#232e3d] pb-2">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Rodapé Coluna 3', 'living-waters-brasil'),
        'id'            => 'footer-3',
        'description'   => __('Widget da terceira coluna do rodapé', 'living-waters-brasil'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title text-xs font-bold text-white uppercase tracking-wider mb-4 border-b border-[#232e3d] pb-2">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Rodapé Coluna 4', 'living-waters-brasil'),
        'id'            => 'footer-4',
        'description'   => __('Widget da quarta coluna do rodapé (Doação)', 'living-waters-brasil'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title text-xs font-bold text-white uppercase tracking-wider mb-4 border-b border-[#232e3d] pb-2">',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Área Hero', 'living-waters-brasil'),
        'id'            => 'hero-area',
        'description'   => __('Widgets da área do Hero (lateral)', 'living-waters-brasil'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="text-lg font-bold text-white mb-2">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'          => __('Barra Lateral', 'living-waters-brasil'),
        'id'            => 'sidebar-main',
        'description'   => __('Widgets da barra lateral do blog', 'living-waters-brasil'),
        'before_widget' => '<div id="%2$s" class="widget %2$s mb-6">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="text-sm font-bold text-[#141c27] uppercase tracking-wider mb-3 border-b border-[#e2e8f0] pb-2">',
        'after_title'   => '</h3>',
    ));
}
add_action('widgets_init', 'living_waters_widgets_init');

/**
 * Enfileirar Scripts e Estilos
 */
function living_waters_scripts() {
    wp_enqueue_style(
        'living-waters-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Merriweather:ital,wght@0,300;0,400;0,700;1,300&display=swap',
        array(),
        null
    );

    wp_enqueue_style(
        'living-waters-main-css',
        get_template_directory_uri() . '/assets/css/main.css',
        array('living-waters-fonts'),
        '2.0.0'
    );

    wp_enqueue_style(
        'living-waters-style',
        get_stylesheet_uri(),
        array('living-waters-main-css'),
        '2.0.0'
    );

    wp_enqueue_script(
        'living-waters-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '2.0.0',
        true
    );

    wp_localize_script('living-waters-main-js', 'lwThemeData', array(
        'ajaxUrl'  => admin_url('admin-ajax.php'),
        'themeUri' => get_template_directory_uri(),
        'siteUrl'  => home_url(),
        'pixKey'   => get_theme_mod('lw_pix_key', 'contato@livingwatersbrasil.com.br'),
    ));
}
add_action('wp_enqueue_scripts', 'living_waters_scripts');

/**
 * Excerpt length
 */
function living_waters_excerpt_length($length) {
    return 24;
}
add_filter('excerpt_length', 'living_waters_excerpt_length');

function living_waters_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'living_waters_excerpt_more');

/**
 * Tempo estimado de leitura
 */
function living_waters_read_time($post_id = null) {
    if (!$post_id) {
        $post_id = get_the_ID();
    }
    $content = get_post_field('post_content', $post_id);
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200);
    return max(1, $reading_time) . ' min de leitura';
}

/**
 * Articulistas oficiais
 */
function living_waters_get_bloggers() {
    $theme_dir = get_template_directory_uri();
    return array(
        array(
            'id'            => 'ray-comfort',
            'name'          => get_theme_mod('lw_blogger_1_name', 'Ray Comfort'),
            'role'          => get_theme_mod('lw_blogger_1_role', 'Fundador da Living Waters & Autor'),
            'bio'           => get_theme_mod('lw_blogger_1_bio', 'Autor de mais de 90 livros, co-apresentador do The Way of the Master e evangelista há mais de 45 anos proclamando a Cristo nas ruas e universidades.'),
            'avatar'        => get_theme_mod('lw_blogger_1_avatar', $theme_dir . '/assets/images/ray-comfort.jpg'),
            'postsCount'    => intval(get_theme_mod('lw_blogger_1_posts', 142)),
            'featuredQuote' => get_theme_mod('lw_blogger_1_quote', 'Se você ama genuinamente as pessoas, avisará sobre o perigo que se aproxima.'),
        ),
        array(
            'id'            => 'ez-zwayne',
            'name'          => get_theme_mod('lw_blogger_2_name', 'E.Z. Zwayne'),
            'role'          => get_theme_mod('lw_blogger_2_role', 'Presidente da Living Waters'),
            'bio'           => get_theme_mod('lw_blogger_2_bio', 'Pastor, orador e líder ministerial. Dedica-se a despertar a igreja global para o discipulado bíblico.'),
            'avatar'        => get_theme_mod('lw_blogger_2_avatar', $theme_dir . '/assets/images/ez-zwayne.jpg'),
            'postsCount'    => intval(get_theme_mod('lw_blogger_2_posts', 68)),
            'featuredQuote' => get_theme_mod('lw_blogger_2_quote', 'Não pregamos para entreter os ouvidos dos homens, mas para despertar as suas consciências.'),
        ),
        array(
            'id'            => 'mark-spence',
            'name'          => get_theme_mod('lw_blogger_3_name', 'Mark Spence'),
            'role'          => get_theme_mod('lw_blogger_3_role', 'Vice-Presidente & Reitor Acadêmico'),
            'bio'           => get_theme_mod('lw_blogger_3_bio', 'Especialista em debates apologéticos, lógica bíblica e diálogo com ateus e céticos.'),
            'avatar'        => get_theme_mod('lw_blogger_3_avatar', $theme_dir . '/assets/images/mark-spence.jpg'),
            'postsCount'    => intval(get_theme_mod('lw_blogger_3_posts', 89)),
            'featuredQuote' => get_theme_mod('lw_blogger_3_quote', 'O ateísmo não é um produto da pura razão humana, mas uma fuga da responsabilidade moral.'),
        ),
        array(
            'id'            => 'living-waters-brasil',
            'name'          => get_theme_mod('lw_blogger_4_name', 'Living Waters Brasil'),
            'role'          => get_theme_mod('lw_blogger_4_role', 'Equipe de Redação & Campo'),
            'bio'           => get_theme_mod('lw_blogger_4_bio', 'Evangelistas, tradutores e articulistas no Brasil e América Latina.'),
            'avatar'        => get_theme_mod('lw_blogger_4_avatar', $theme_dir . '/assets/images/logo-blue.png'),
            'postsCount'    => intval(get_theme_mod('lw_blogger_4_posts', 115)),
            'featuredQuote' => get_theme_mod('lw_blogger_4_quote', 'Equipando o povo de Deus no Brasil para buscar e salvar o que se havia perdido.'),
        ),
    );
}

/**
 * Customizer Settings
 */
function living_waters_customize_register($wp_customize) {

    // === Seção: Identidade do Tema ===
    $wp_customize->add_setting('lw_site_tagline', array(
        'default'           => 'Ministério de Evangelismo Bíblico',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('lw_site_tagline', array(
        'label'   => __('Subtítulo do Site', 'living-waters-brasil'),
        'section' => 'title_tagline',
        'type'    => 'text',
    ));

    // === Seção: Cores do Tema ===
    $wp_customize->add_setting('lw_color_primary', array(
        'default'           => '#fd651e',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lw_color_primary', array(
        'label'   => __('Cor Primária (Destaques)', 'living-waters-brasil'),
        'section' => 'colors',
    )));

    $wp_customize->add_setting('lw_color_header_bg', array(
        'default'           => '#141c27',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lw_color_header_bg', array(
        'label'   => __('Cor de Fundo do Header', 'living-waters-brasil'),
        'section' => 'colors',
    )));

    $wp_customize->add_setting('lw_color_footer_bg', array(
        'default'           => '#0d131c',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lw_color_footer_bg', array(
        'label'   => __('Cor de Fundo do Rodapé', 'living-waters-brasil'),
        'section' => 'colors',
    )));

    $wp_customize->add_setting('lw_color_button_donate', array(
        'default'           => '#2875ab',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lw_color_button_donate', array(
        'label'   => __('Cor do Botão de Doação', 'living-waters-brasil'),
        'section' => 'colors',
    )));

    $wp_customize->add_setting('lw_color_button_action', array(
        'default'           => '#cc5500',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lw_color_button_action', array(
        'label'   => __('Cor do Botão de Ação (CTA)', 'living-waters-brasil'),
        'section' => 'colors',
    )));

    $wp_customize->add_setting('lw_color_background', array(
        'default'           => '#f8f9ff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'lw_color_background', array(
        'label'   => __('Cor de Fundo do Corpo', 'living-waters-brasil'),
        'section' => 'colors',
    )));

    // === Seção: Hero ===
    $wp_customize->add_section('lw_hero_section', array(
        'title'    => __('Seção Hero (Destaque)', 'living-waters-brasil'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('lw_hero_badge', array(
        'default'           => 'Mensagem de Urgência',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('lw_hero_badge', array(
        'label'   => __('Texto do Badge', 'living-waters-brasil'),
        'section' => 'lw_hero_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('lw_hero_speaker', array(
        'default'           => 'Ray Comfort',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('lw_hero_speaker', array(
        'label'   => __('Nome do Palestrante', 'living-waters-brasil'),
        'section' => 'lw_hero_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('lw_hero_title', array(
        'default'           => 'A Maior Mensagem Sobre o Inferno Já Pregada',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('lw_hero_title', array(
        'label'   => __('Título do Hero', 'living-waters-brasil'),
        'section' => 'lw_hero_section',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('lw_hero_description', array(
        'default'           => 'Descubra por que a realidade da condenação eterna não é um tema para ser silenciado, mas a maior motivação bíblica para o evangelismo sem concessões.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('lw_hero_description', array(
        'label'   => __('Descrição do Hero', 'living-waters-brasil'),
        'section' => 'lw_hero_section',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('lw_hero_bg_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'lw_hero_bg_image', array(
        'label'   => __('Imagem de Fundo do Hero', 'living-waters-brasil'),
        'section' => 'lw_hero_section',
    )));

    $wp_customize->add_setting('lw_hero_btn_text', array(
        'default'           => 'Ler mais',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('lw_hero_btn_text', array(
        'label'   => __('Texto Botão Principal', 'living-waters-brasil'),
        'section' => 'lw_hero_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('lw_hero_btn_url', array(
        'default'           => '#featured-content-section',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('lw_hero_btn_url', array(
        'label'   => __('URL Botão Principal', 'living-waters-brasil'),
        'section' => 'lw_hero_section',
        'type'    => 'url',
    ));

    $wp_customize->add_setting('lw_hero_video_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('lw_hero_video_url', array(
        'label'   => __('URL do Vídeo do Hero (YouTube)', 'living-waters-brasil'),
        'section' => 'lw_hero_section',
        'type'    => 'url',
    ));

    // === Seção: Rodapé ===
    $wp_customize->add_section('lw_footer_section', array(
        'title'    => __('Rodapé', 'living-waters-brasil'),
        'priority' => 35,
    ));

    $wp_customize->add_setting('lw_footer_description', array(
        'default'           => 'Inspirando e equipando cristãos para cumprir a Grande Comissão através do método bíblico.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('lw_footer_description', array(
        'label'   => __('Texto de Missão (Coluna 1)', 'living-waters-brasil'),
        'section' => 'lw_footer_section',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('lw_footer_copyright', array(
        'default'           => 'Todos os direitos reservados.',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('lw_footer_copyright', array(
        'label'   => __('Texto de Copyright', 'living-waters-brasil'),
        'section' => 'lw_footer_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('lw_pix_key', array(
        'default'           => 'contato@livingwatersbrasil.com.br',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('lw_pix_key', array(
        'label'       => __('Chave PIX', 'living-waters-brasil'),
        'description' => __('Chave PIX para receber doações', 'living-waters-brasil'),
        'section'     => 'lw_footer_section',
        'type'        => 'text',
    ));

    // === Seção: Redes Sociais ===
    $wp_customize->add_section('lw_social_section', array(
        'title'    => __('Redes Sociais', 'living-waters-brasil'),
        'priority' => 40,
    ));

    $social_platforms = array(
        'youtube'   => 'YouTube',
        'facebook'  => 'Facebook',
        'instagram' => 'Instagram',
        'twitter'   => 'Twitter / X',
        'telegram'  => 'Telegram',
        'whatsapp'  => 'WhatsApp',
    );

    foreach ($social_platforms as $key => $label) {
        $wp_customize->add_setting("lw_social_{$key}", array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control("lw_social_{$key}", array(
            'label'   => $label . ' URL',
            'section' => 'lw_social_section',
            'type'    => 'url',
        ));
    }

    // === Seção: Articulistas ===
    $wp_customize->add_section('lw_bloggers_section', array(
        'title'    => __('Articulistas', 'living-waters-brasil'),
        'priority' => 45,
    ));

    for ($i = 1; $i <= 4; $i++) {
        $wp_customize->add_setting("lw_blogger_{$i}_name", array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("lw_blogger_{$i}_name", array(
            'label'   => sprintf(__('Articulista %d - Nome', 'living-waters-brasil'), $i),
            'section' => 'lw_bloggers_section',
            'type'    => 'text',
        ));

        $wp_customize->add_setting("lw_blogger_{$i}_role", array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("lw_blogger_{$i}_role", array(
            'label'   => sprintf(__('Articulista %d - Cargo', 'living-waters-brasil'), $i),
            'section' => 'lw_bloggers_section',
            'type'    => 'text',
        ));

        $wp_customize->add_setting("lw_blogger_{$i}_bio", array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_textarea_field',
        ));
        $wp_customize->add_control("lw_blogger_{$i}_bio", array(
            'label'   => sprintf(__('Articulista %d - Bio', 'living-waters-brasil'), $i),
            'section' => 'lw_bloggers_section',
            'type'    => 'textarea',
        ));

        $wp_customize->add_setting("lw_blogger_{$i}_avatar", array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "lw_blogger_{$i}_avatar", array(
            'label'   => sprintf(__('Articulista %d - Foto', 'living-waters-brasil'), $i),
            'section' => 'lw_bloggers_section',
        )));

        $wp_customize->add_setting("lw_blogger_{$i}_posts", array(
            'default'           => '0',
            'sanitize_callback' => 'absint',
        ));
        $wp_customize->add_control("lw_blogger_{$i}_posts", array(
            'label'   => sprintf(__('Articulista %d - Nº de Posts', 'living-waters-brasil'), $i),
            'section' => 'lw_bloggers_section',
            'type'    => 'number',
        ));

        $wp_customize->add_setting("lw_blogger_{$i}_quote", array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_textarea_field',
        ));
        $wp_customize->add_control("lw_blogger_{$i}_quote", array(
            'label'   => sprintf(__('Articulista %d - Frase Destaque', 'living-waters-brasil'), $i),
            'section' => 'lw_bloggers_section',
            'type'    => 'textarea',
        ));
    }

    // === Seção: Vídeos em Destaque ===
    $wp_customize->add_section('lw_videos_section', array(
        'title'    => __('Vídeos em Destaque', 'living-waters-brasil'),
        'priority' => 50,
    ));

    for ($i = 1; $i <= 6; $i++) {
        $wp_customize->add_setting("lw_video_{$i}_title", array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("lw_video_{$i}_title", array(
            'label'   => sprintf(__('Vídeo %d - Título', 'living-waters-brasil'), $i),
            'section' => 'lw_videos_section',
            'type'    => 'text',
        ));

        $wp_customize->add_setting("lw_video_{$i}_youtube_id", array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("lw_video_{$i}_youtube_id", array(
            'label'       => sprintf(__('Vídeo %d - YouTube ID', 'living-waters-brasil'), $i),
            'description' => __('Apenas o ID do vídeo (ex: dQw4w9WgXcQ)', 'living-waters-brasil'),
            'section'     => 'lw_videos_section',
            'type'        => 'text',
        ));

        $wp_customize->add_setting("lw_video_{$i}_category", array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("lw_video_{$i}_category", array(
            'label'   => sprintf(__('Vídeo %d - Categoria', 'living-waters-brasil'), $i),
            'section' => 'lw_videos_section',
            'type'    => 'text',
        ));

        $wp_customize->add_setting("lw_video_{$i}_duration", array(
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("lw_video_{$i}_duration", array(
            'label'   => sprintf(__('Vídeo %d - Duração', 'living-waters-brasil'), $i),
            'section' => 'lw_videos_section',
            'type'    => 'text',
        ));

        $wp_customize->add_setting("lw_video_{$i}_thumbnail", array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "lw_video_{$i}_thumbnail", array(
            'label'   => sprintf(__('Vídeo %d - Thumbnail', 'living-waters-brasil'), $i),
            'section' => 'lw_videos_section',
        )));
    }

    // === Seção: Seção Artigos em Destaque ===
    $wp_customize->add_section('lw_featured_section', array(
        'title'    => __('Artigo Destacado', 'living-waters-brasil'),
        'priority' => 55,
    ));

    $wp_customize->add_setting('lw_featured_post_id', array(
        'default'           => 0,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('lw_featured_post_id', array(
        'label'       => __('Post Destacado (ID)', 'living-waters-brasil'),
        'description' => __('ID do post do WordPress a ser exibido como destaque principal', 'living-waters-brasil'),
        'section'     => 'lw_featured_section',
        'type'        => 'number',
    ));

    $wp_customize->add_setting('lw_featured_image_override', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'lw_featured_image_override', array(
        'label'   => __('Imagem Destacada (override)', 'living-waters-brasil'),
        'section' => 'lw_featured_section',
    )));
}
add_action('customize_register', 'living_waters_customize_register');

/**
 * Output CSS customizado do Customizer
 */
function living_waters_customizer_css() {
    $primary     = get_theme_mod('lw_color_primary', '#fd651e');
    $header_bg   = get_theme_mod('lw_color_header_bg', '#141c27');
    $footer_bg   = get_theme_mod('lw_color_footer_bg', '#0d131c');
    $btn_donate  = get_theme_mod('lw_color_button_donate', '#2875ab');
    $btn_action  = get_theme_mod('lw_color_button_action', '#cc5500');
    $bg_color    = get_theme_mod('lw_color_background', '#f8f9ff');

    echo '<style type="text/css">';
    echo ':root {';
    echo '  --lw-primary: ' . esc_attr($primary) . ';';
    echo '  --lw-header-bg: ' . esc_attr($header_bg) . ';';
    echo '  --lw-footer-bg: ' . esc_attr($footer_bg) . ';';
    echo '  --lw-btn-donate: ' . esc_attr($btn_donate) . ';';
    echo '  --lw-btn-action: ' . esc_attr($btn_action) . ';';
    echo '  --lw-bg: ' . esc_attr($bg_color) . ';';
    echo '}';
    echo '</style>';
}
add_action('wp_head', 'living_waters_customizer_css');
