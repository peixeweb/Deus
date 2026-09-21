<?php
/**
 * Living Waters Brasil - Footer Template
 *
 * @package Living_Waters_Brasil
 * @version 1.0.0
 */
?>
<footer id="colophon" class="w-full bg-[#0d131c] text-[#e0e7f1] border-t border-[#1e2736] pt-16 pb-12 mt-auto">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
            
            <!-- Coluna 1: Missão Living Waters -->
            <div class="space-y-4">
                <div class="flex items-center gap-3">
                    <img 
                        src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" 
                        alt="<?php bloginfo('name'); ?>" 
                        class="h-10 w-auto object-contain"
                    >
                    <div>
                        <span class="font-extrabold text-base tracking-wider text-white uppercase block">
                            LIVING WATERS
                        </span>
                        <span class="text-[10px] font-semibold tracking-widest text-[#fd651e] uppercase block -mt-1">
                            BRASIL
                        </span>
                    </div>
                </div>
                <p class="text-xs text-[#a0abbd] leading-relaxed font-editorial">
                    Inspirando e equipando cristãos para cumprir a Grande Comissão através do método bíblico que Jesus utilizou.
                </p>
                <div class="text-[11px] text-[#717d91]">
                    &copy; <?php echo date('Y'); ?> Living Waters Publications. Todos os direitos reservados.
                </div>
            </div>

            <!-- Coluna 2: Equipe-se -->
            <div>
                <h4 class="text-xs font-bold text-white uppercase tracking-wider mb-4 border-b border-[#232e3d] pb-2">
                    EQUIPE-SE
                </h4>
                <nav class="flex flex-col gap-2.5 text-xs">
                    <a href="<?php echo esc_url(home_url('/#blogger-section')); ?>" class="text-[#bfc7d6] hover:text-[#fd651e] transition-colors font-semibold flex items-center gap-1.5">
                        <span>Blog &amp; Articulistas</span>
                        <span class="text-[9px] bg-[#fd651e] text-white px-1.5 py-0.2 rounded font-bold">NOVO</span>
                    </a>
                    <a href="<?php echo esc_url(home_url('/#escola-online')); ?>" class="text-[#bfc7d6] hover:text-white transition-colors">
                        Escola Online de Evangelismo
                    </a>
                    <a href="<?php echo esc_url(home_url('/#artigos')); ?>" class="text-[#bfc7d6] hover:text-white transition-colors">
                        Artigos &amp; Ensino Bíblico
                    </a>
                    <a href="<?php echo esc_url(home_url('/#ferramentas-folhetos')); ?>" class="text-[#bfc7d6] hover:text-white transition-colors">
                        Folhetos de Evangelismo
                    </a>
                    <a href="<?php echo esc_url(home_url('/#videos')); ?>" class="text-[#bfc7d6] hover:text-white transition-colors">
                        Filmes &amp; Vídeos de Rua
                    </a>
                </nav>
            </div>

            <!-- Coluna 3: Articulistas -->
            <div>
                <h4 class="text-xs font-bold text-white uppercase tracking-wider mb-4 border-b border-[#232e3d] pb-2">
                    AUTORES &amp; MENSAGENS
                </h4>
                <nav class="flex flex-col gap-2.5 text-xs">
                    <a href="<?php echo esc_url(home_url('/#blogger-section')); ?>" class="text-[#bfc7d6] hover:text-white transition-colors">
                        Ray Comfort (Fundador)
                    </a>
                    <a href="<?php echo esc_url(home_url('/#blogger-section')); ?>" class="text-[#bfc7d6] hover:text-white transition-colors">
                        E.Z. Zwayne (Presidente)
                    </a>
                    <a href="<?php echo esc_url(home_url('/#blogger-section')); ?>" class="text-[#bfc7d6] hover:text-white transition-colors">
                        Mark Spence (Vice-Presidente)
                    </a>
                    <a href="<?php echo esc_url(home_url('/#blogger-section')); ?>" class="text-[#bfc7d6] hover:text-white transition-colors">
                        Equipe Living Waters Brasil
                    </a>
                </nav>
            </div>

            <!-- Coluna 4: Apoio ao Ministério (Botão em #cc5500) -->
            <div>
                <h4 class="text-xs font-bold text-white uppercase tracking-wider mb-4 border-b border-[#232e3d] pb-2">
                    APOIE ESTA CAUSA
                </h4>
                <p class="text-xs text-[#a0abbd] leading-relaxed mb-4">
                    Sua doação voluntária viabiliza traduções, distribuição de folhetos em praças públicas e capacitação de voluntários no Brasil.
                </p>
                <button 
                    type="button"
                    id="lw-footer-donation-btn"
                    class="w-full inline-flex items-center justify-center gap-2 px-4 py-3 bg-[#cc5500] hover:bg-[#b34a00] text-white text-xs font-bold tracking-wide rounded-lg transition-all shadow cursor-pointer active:scale-95"
                >
                    <svg class="w-4 h-4 fill-white" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                    <span>Fazer uma Contribuição</span>
                </button>
            </div>
        </div>

        <div class="pt-8 border-t border-[#1e2736] flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-[#717d91]">
            <p>Living Waters Brasil &bull; Ministério de Proclamação do Evangelho Bíblico</p>
            <p>Tema para WordPress 100% livre de formulários invasivos</p>
        </div>
    </div>
</footer>

<!-- Modais do Tema (Doação PIX, Busca Rápida, Leitura de Artigo, Player de Vídeo) -->
<?php get_template_part('template-parts/modal-donation'); ?>
<?php get_template_part('template-parts/modal-search'); ?>
<?php get_template_part('template-parts/modal-article'); ?>
<?php get_template_part('template-parts/modal-video'); ?>

<?php wp_footer(); ?>
</body>
</html>
