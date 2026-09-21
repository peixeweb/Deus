<?php
/**
 * Living Waters Brasil - Front Page Template
 *
 * @package Living_Waters_Brasil
 * @version 1.0.0
 */

get_header();
?>

<main id="primary" class="site-main flex-1 flex flex-col">
    <?php
    // 1. Hero Cinematográfico: Chamado de Urgência
    get_template_part('template-parts/hero');

    // 2. Bloco Assimétrico: 3/5 Editorial Lead & 2/5 Recursos de Treinamento
    get_template_part('template-parts/featured');

    // 3. Publicações Recentes & Evangelismo de Rua (Grade em 3 Colunas)
    get_template_part('template-parts/recent-posts');

    // 4. Área Dedicada a Bloggers & Articulistas (Ray Comfort, E.Z. Zwayne, Mark Spence)
    get_template_part('template-parts/bloggers');

    // 5. Carrossel Multimídia: Vídeos & Documentários
    get_template_part('template-parts/videos');
    ?>
</main>

<?php
get_footer();
