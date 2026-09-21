<?php
/**
 * Living Waters Brasil - Template Part: Videos Section
 *
 * @package Living_Waters_Brasil
 */
$theme_uri = get_template_directory_uri();
?>
<section id="videos" aria-label="Produções em Vídeo e TV" class="w-full bg-[#0d131c] text-white py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12">
            <div>
                <span class="text-xs font-bold text-[#ffb89e] uppercase tracking-wider block mb-1">
                    MULTIMÍDIA LIVING WATERS
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-white font-['Montserrat']">
                    Filmes, Documentários e Diálogos de Rua
                </h2>
            </div>
            <a href="https://www.youtube.com/@LivingWatersBrasil" target="_blank" rel="noopener noreferrer" class="text-xs sm:text-sm text-[#fd651e] hover:text-[#ffb89e] font-semibold mt-2 sm:mt-0 flex items-center gap-1">
                <span>Canal no YouTube</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <line x1="7" y1="17" x2="17" y2="7"></line>
                    <polyline points="7 7 17 7 17 17"></polyline>
                </svg>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Vídeo 1 -->
            <div class="lw-video-card bg-[#16202c] rounded-2xl overflow-hidden border border-[#222f3e] hover:border-[#fd651e]/60 transition-all group cursor-pointer" data-video-title="180 Movie: A Mudança Radical de Mentalidade" data-youtube-id="7y2KsU_dhwI">
                <div class="relative h-48 w-full bg-black/40 overflow-hidden">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/ray-comfort.jpg'); ?>" alt="180 Movie" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                        <div class="w-12 h-12 rounded-full bg-[#fd651e] flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5 fill-white ml-0.5" viewBox="0 0 24 24">
                                <polygon points="5 3 19 12 5 21 5 3"></polygon>
                            </svg>
                        </div>
                    </div>
                    <span class="absolute bottom-3 right-3 px-2 py-0.5 rounded bg-black/80 text-[11px] font-bold">33 min</span>
                </div>
                <div class="p-5">
                    <span class="text-[10px] font-bold text-[#fd651e] uppercase tracking-wider">Documentário Premiado</span>
                    <h3 class="text-base font-bold text-white mt-1 mb-2 group-hover:text-[#fd651e] transition-colors">180 Movie: A Mudança Radical de Mentalidade</h3>
                    <p class="text-xs text-[#a0abbd] line-clamp-2">O documentário impactante com mais de 10 milhões de visualizações que transformou o debate pró-vida no mundo.</p>
                </div>
            </div>

            <!-- Vídeo 2 -->
            <div class="lw-video-card bg-[#16202c] rounded-2xl overflow-hidden border border-[#222f3e] hover:border-[#fd651e]/60 transition-all group cursor-pointer" data-video-title="Genius: A Chave da Felicidade e Consciência" data-youtube-id="Zdu2CjX5XwE">
                <div class="relative h-48 w-full bg-black/40 overflow-hidden">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/ez-zwayne.jpg'); ?>" alt="Genius Movie" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                        <div class="w-12 h-12 rounded-full bg-[#fd651e] flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5 fill-white ml-0.5" viewBox="0 0 24 24">
                                <polygon points="5 3 19 12 5 21 5 3"></polygon>
                            </svg>
                        </div>
                    </div>
                    <span class="absolute bottom-3 right-3 px-2 py-0.5 rounded bg-black/80 text-[11px] font-bold">29 min</span>
                </div>
                <div class="p-5">
                    <span class="text-[10px] font-bold text-[#fd651e] uppercase tracking-wider">Música &amp; Razão</span>
                    <h3 class="text-base font-bold text-white mt-1 mb-2 group-hover:text-[#fd651e] transition-colors">Genius: John Lennon e a Busca pelo Sentido</h3>
                    <p class="text-xs text-[#a0abbd] line-clamp-2">Uma análise profunda sobre a fragilidade humana e a resposta para a ansiedade contemporânea através de Cristo.</p>
                </div>
            </div>

            <!-- Vídeo 3 -->
            <div class="lw-video-card bg-[#16202c] rounded-2xl overflow-hidden border border-[#222f3e] hover:border-[#fd651e]/60 transition-all group cursor-pointer" data-video-title="O Ateu que Ficou sem Palavras na Universidade" data-youtube-id="fR0Fp5Y3qD8">
                <div class="relative h-48 w-full bg-black/40 overflow-hidden">
                    <img src="<?php echo esc_url($theme_uri . '/assets/images/mark-spence.jpg'); ?>" alt="Entrevistas de Rua" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                        <div class="w-12 h-12 rounded-full bg-[#fd651e] flex items-center justify-center shadow-lg group-hover:scale-110 transition-transform">
                            <svg class="w-5 h-5 fill-white ml-0.5" viewBox="0 0 24 24">
                                <polygon points="5 3 19 12 5 21 5 3"></polygon>
                            </svg>
                        </div>
                    </div>
                    <span class="absolute bottom-3 right-3 px-2 py-0.5 rounded bg-black/80 text-[11px] font-bold">14 min</span>
                </div>
                <div class="p-5">
                    <span class="text-[10px] font-bold text-[#fd651e] uppercase tracking-wider">Evangelismo ao Vivo</span>
                    <h3 class="text-base font-bold text-white mt-1 mb-2 group-hover:text-[#fd651e] transition-colors">Diálogo de Rua: A Lei Moral em Ação</h3>
                    <p class="text-xs text-[#a0abbd] line-clamp-2">Ray Comfort demonstra na prática como conduzir uma pessoa de maneira amorosa da teoria para a consciência.</p>
                </div>
            </div>
        </div>
    </div>
</section>
