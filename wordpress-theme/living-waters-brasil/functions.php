<?php
/**
 * Living Waters Brasil - Theme Functions
 *
 * @package Living_Waters_Brasil
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Configurações básicas do tema
 */
function living_waters_setup() {
    // Suporte para tag de título dinâmico do WordPress
    add_theme_support('title-tag');

    // Imagens destacadas em posts e páginas
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(1200, 675, true);
    add_image_size('lw-card', 600, 400, true);
    add_image_size('lw-author', 200, 200, true);

    // Suporte a HTML5 para formulários e buscas
    add_theme_support('html5', array(
        'search-form',
        'gallery',
        'caption',
        'style',
        'script'
    ));

    // Suporte a logotipo customizado
    add_theme_support('custom-logo', array(
        'height'      => 60,
        'width'       => 240,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    // Suporte a blocos responsivos
    add_theme_support('responsive-embeds');

    // Registro dos Menus de Navegação
    register_nav_menus(array(
        'primary_menu' => __('Menu Principal Superior', 'living-waters-brasil'),
        'footer_menu'  => __('Menu do Rodapé', 'living-waters-brasil'),
    ));
}
add_action('after_setup_theme', 'living_waters_setup');

/**
 * Enfileirar Scripts e Estilos
 */
function living_waters_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'living-waters-fonts',
        'https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Merriweather:ital,wght@0,300;0,400;0,700;1,300&display=swap',
        array(),
        null
    );

    // Tailwind & Estilos Estruturais Compilados
    wp_enqueue_style(
        'living-waters-main-css',
        get_template_directory_uri() . '/assets/css/main.css',
        array('living-waters-fonts'),
        '1.0.0'
    );

    // Estilo Principal do Tema (style.css)
    wp_enqueue_style(
        'living-waters-style',
        get_stylesheet_uri(),
        array('living-waters-main-css'),
        '1.0.0'
    );

    // Script Interativo Vanilla (Modais, Filtros, PIX, Drawer sem dependência pesada)
    wp_enqueue_script(
        'living-waters-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0.0',
        true
    );

    // Dados passados para o JS
    wp_localize_script('living-waters-main-js', 'lwThemeData', array(
        'ajaxUrl'    => admin_url('admin-ajax.php'),
        'themeUri'   => get_template_directory_uri(),
        'siteUrl'    => home_url(),
        'pixKey'     => 'contato@livingwatersbrasil.com.br',
    ));
}
add_action('wp_enqueue_scripts', 'living_waters_scripts');

/**
 * Ajuste no tamanho do resumo (excerpt)
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
 * Retorna tempo estimado de leitura de um post
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
 * Lista padrão de articulistas oficiais da Living Waters
 */
function living_waters_get_bloggers() {
    $theme_dir = get_template_directory_uri();
    return array(
        array(
            'id'             => 'ray-comfort',
            'name'           => 'Ray Comfort',
            'role'           => 'Fundador da Living Waters & Autor',
            'bio'            => 'Autor de mais de 90 livros, co-apresentador do The Way of the Master e evangelista há mais de 45 anos proclamando a Cristo nas ruas e universidades.',
            'avatar'         => $theme_dir . '/assets/images/ray-comfort.jpg',
            'postsCount'     => 142,
            'featuredQuote'  => 'Se você ama genuinamente as pessoas, avisará sobre o perigo que se aproxima. O verdadeiro amor bíblico não omite a verdade eterna.'
        ),
        array(
            'id'             => 'ez-zwayne',
            'name'           => 'E.Z. Zwayne',
            'role'           => 'Presidente da Living Waters',
            'bio'            => 'Pastor, orador e líder ministerial. Dedica-se a despertar a igreja global para o discipulado bíblico, integridade pastoral e proclamação sem concessões.',
            'avatar'         => $theme_dir . '/assets/images/ez-zwayne.jpg',
            'postsCount'     => 68,
            'featuredQuote'  => 'Não pregamos para entreter os ouvidos dos homens, mas para despertar as suas consciências culpadas perante o Deus Santo.'
        ),
        array(
            'id'             => 'mark-spence',
            'name'           => 'Mark Spence',
            'role'           => 'Vice-Presidente & Reitor Acadêmico',
            'bio'            => 'Especialista em debates apologéticos, lógica bíblica e diálogo com ateus e céticos. Professor principal da Escola de Evangelismo Bíblico.',
            'avatar'         => $theme_dir . '/assets/images/mark-spence.jpg',
            'postsCount'     => 89,
            'featuredQuote'  => 'O ateísmo não é um produto da pura razão humana, mas uma fuga da responsabilidade moral perante o Criador Supremo.'
        ),
        array(
            'id'             => 'living-waters-brasil',
            'name'           => 'Living Waters Brasil',
            'role'           => 'Equipe de Redação & Campo',
            'bio'            => 'Evangelistas, tradutores e articulistas no Brasil e América Latina dedicados a produzir literaturas, organizar impactos e equipar igrejas locais.',
            'avatar'         => $theme_dir . '/assets/images/logo-blue.png',
            'postsCount'     => 115,
            'featuredQuote'  => 'Equipando o povo de Deus no Brasil e nos países de língua portuguesa para buscar e salvar o que se havia perdido.'
        ),
    );
}
