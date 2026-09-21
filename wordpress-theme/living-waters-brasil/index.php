<?php
/**
 * Living Waters Brasil - Main Index Fallback
 *
 * @package Living_Waters_Brasil
 */
get_header();
?>

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 py-16 flex-1">
    <div class="mb-10 text-center max-w-2xl mx-auto">
        <span class="text-xs font-bold text-[#fd651e] uppercase tracking-wider">Living Waters Brasil</span>
        <h1 class="text-3xl sm:text-4xl font-black text-[#0f172a] mt-2 font-['Montserrat']">
            <?php 
            if (is_archive()) {
                the_archive_title();
            } elseif (is_search()) {
                printf(esc_html__('Resultados para: %s', 'living-waters-brasil'), '<span>' . get_search_query() . '</span>');
            } else {
                esc_html_e('Artigos e Ensino Bíblico', 'living-waters-brasil');
            }
            ?>
        </h1>
    </div>

    <?php if (have_posts()) : ?>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class('bg-white rounded-2xl border border-[#e2e8f0] overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between'); ?>>
                    <div>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="h-48 w-full overflow-hidden bg-black/5">
                                <?php the_post_thumbnail('lw-card', array('class' => 'w-full h-full object-cover')); ?>
                            </div>
                        <?php endif; ?>
                        <div class="p-6">
                            <div class="text-[11px] font-bold text-[#fd651e] uppercase tracking-wider mb-2">
                                <?php the_category(', '); ?>
                            </div>
                            <h2 class="text-lg font-bold text-[#0f172a] mb-2 leading-snug">
                                <a href="<?php the_permalink(); ?>" class="hover:text-[#fd651e] transition-colors">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <div class="text-xs text-[#64748b] leading-relaxed line-clamp-3 font-editorial">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 pt-0 flex items-center justify-between text-xs text-[#94a3b8]">
                        <span><?php echo esc_html(get_the_author()); ?></span>
                        <a href="<?php the_permalink(); ?>" class="font-bold text-[#fd651e] hover:text-[#cc5500]">Ler mais &rarr;</a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>

        <div class="mt-12 flex justify-center">
            <?php the_posts_pagination(); ?>
        </div>
    <?php else : ?>
        <div class="bg-white p-12 rounded-2xl border border-[#e2e8f0] text-center max-w-lg mx-auto">
            <h3 class="text-lg font-bold text-[#0f172a] mb-2">Nenhum artigo encontrado</h3>
            <p class="text-sm text-[#64748b] mb-6">Explore nossa página inicial para acessar todos os recursos, vídeos e materiais.</p>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-flex px-6 py-2.5 bg-[#fd651e] text-white text-xs font-bold rounded-lg shadow hover:bg-[#e05413] transition-colors">
                Voltar ao Início
            </a>
        </div>
    <?php endif; ?>
</div>

<?php
get_footer();
