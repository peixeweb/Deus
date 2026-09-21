<?php
/**
 * Living Waters Brasil - Single Post Template
 *
 * @package Living_Waters_Brasil
 */
get_header();
?>

<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16 flex-1">
    <?php while (have_posts()) : the_post(); ?>
        <article <?php post_class('bg-white rounded-3xl border border-[#e2e8f0] overflow-hidden shadow-sm p-6 sm:p-10 lg:p-14'); ?>>
            
            <!-- Meta Superior -->
            <div class="flex flex-wrap items-center gap-3 text-xs text-[#64748b] mb-4">
                <span class="px-2.5 py-1 rounded bg-[#fd651e] text-white text-[10px] font-bold uppercase tracking-wider">
                    <?php the_category(', '); ?>
                </span>
                <span>&bull;</span>
                <span class="font-bold text-[#1e293b]">Por <?php the_author(); ?></span>
                <span>&bull;</span>
                <span><?php echo get_the_date('d \d\e F, Y'); ?></span>
                <span>&bull;</span>
                <span class="text-[#004881] font-semibold"><?php echo living_waters_read_time(); ?></span>
            </div>

            <!-- Título Principal -->
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black text-[#0f172a] leading-[1.15] mb-6 font-['Montserrat']">
                <?php the_title(); ?>
            </h1>

            <!-- Imagem Destacada -->
            <?php if (has_post_thumbnail()) : ?>
                <div class="rounded-2xl overflow-hidden max-h-[460px] w-full mb-8 shadow-sm">
                    <?php the_post_thumbnail('full', array('class' => 'w-full h-full object-cover')); ?>
                </div>
            <?php endif; ?>

            <!-- Conteúdo do Artigo -->
            <div class="prose prose-lg max-w-none text-[#334155] font-editorial leading-relaxed space-y-6">
                <?php the_content(); ?>
            </div>

            <!-- Rodapé do Artigo com Botão de Apoio PIX -->
            <div class="mt-12 pt-8 border-t border-[#e2e8f0] flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="text-xs text-[#64748b]">
                    Gostou desta mensagem? Compartilhe e apoie a proclamação do Evangelho.
                </div>
                <button 
                    type="button" 
                    id="single-donation-trigger"
                    class="px-5 py-2.5 bg-[#cc5500] hover:bg-[#b34a00] text-white text-xs font-bold rounded-xl flex items-center gap-2 shadow transition-colors cursor-pointer"
                    onclick="document.getElementById('lw-donation-modal').classList.remove('hidden'); document.getElementById('lw-donation-modal').classList.add('flex');"
                >
                    <svg class="w-4 h-4 fill-white" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                    <span>Fazer uma Contribuição</span>
                </button>
            </div>
        </article>
    <?php endwhile; ?>
</div>

<?php
get_footer();
