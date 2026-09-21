<?php
/**
 * Living Waters Brasil - Template Part: Recent Posts Grid
 *
 * @package Living_Waters_Brasil
 */
$theme_uri = get_template_directory_uri();
?>
<section id="artigos" aria-label="Artigos Recentes" class="w-full bg-white py-16 lg:py-24 border-b border-[#e2e8f0]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-12">
            <div>
                <span class="text-xs font-bold text-[#fd651e] uppercase tracking-wider block mb-1">
                    PUBLICAÇÕES RECENTES
                </span>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-[#0f172a] font-['Montserrat']">
                    Evangelismo de Rua &bull; Artigos &amp; Ensino
                </h2>
            </div>
            <p class="text-xs sm:text-sm text-[#64748b] max-w-sm mt-2 sm:mt-0 font-editorial">
                Instrução bíblica de campo para equipar cristãos e igrejas no cumprimento da Grande Comissão.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Artigo 1 -->
            <article class="bg-[#f8f9ff] rounded-2xl border border-[#e2e8f0] overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between">
                <div>
                    <div class="h-48 w-full bg-[#141c27] overflow-hidden">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/ray-comfort.jpg'); ?>" alt="Ray Comfort" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="text-[11px] font-bold text-[#fd651e] uppercase tracking-wider mb-2">Prática Evangelística</div>
                        <h3 class="text-lg font-bold text-[#0f172a] mb-2 leading-snug">Como Vencer o Medo de Falar de Jesus com Estranhos</h3>
                        <p class="text-xs text-[#64748b] leading-relaxed line-clamp-3">
                            O medo não é sinal de que você não deve testemunhar; é o sinal de que você precisa confiar inteiramente no Espírito Santo ao dar o primeiro passo.
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <span class="text-xs font-bold text-[#fd651e] flex items-center gap-1">Ler artigo completo &rarr;</span>
                </div>
            </article>

            <!-- Artigo 2 -->
            <article class="bg-[#f8f9ff] rounded-2xl border border-[#e2e8f0] overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between">
                <div>
                    <div class="h-48 w-full bg-[#141c27] overflow-hidden">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/ez-zwayne.jpg'); ?>" alt="E.Z. Zwayne" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="text-[11px] font-bold text-[#fd651e] uppercase tracking-wider mb-2">Doutrina Bíblica</div>
                        <h3 class="text-lg font-bold text-[#0f172a] mb-2 leading-snug">Graça Soberana e a Urgência do Chamado ao Arrependimento</h3>
                        <p class="text-xs text-[#64748b] leading-relaxed line-clamp-3">
                            A salvação pertence ao Senhor, e é exatamente a certeza da soberania de Deus que capacita o evangelista a pregar incansavelmente em qualquer lugar.
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <span class="text-xs font-bold text-[#fd651e] flex items-center gap-1">Ler artigo completo &rarr;</span>
                </div>
            </article>

            <!-- Artigo 3 -->
            <article class="bg-[#f8f9ff] rounded-2xl border border-[#e2e8f0] overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between">
                <div>
                    <div class="h-48 w-full bg-[#141c27] overflow-hidden">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/mark-spence.jpg'); ?>" alt="Mark Spence" class="w-full h-full object-cover">
                    </div>
                    <div class="p-6">
                        <div class="text-[11px] font-bold text-[#fd651e] uppercase tracking-wider mb-2">Apologética Bíblica</div>
                        <h3 class="text-lg font-bold text-[#0f172a] mb-2 leading-snug">Como Responder às Objeções Mais Comuns de Universitários</h3>
                        <p class="text-xs text-[#64748b] leading-relaxed line-clamp-3">
                            Aprenda a desmascarar argumentos relativistas com perguntas perspicazes, trazendo o foco da conversa para a responsabilidade diante de Deus.
                        </p>
                    </div>
                </div>
                <div class="p-6 pt-0">
                    <span class="text-xs font-bold text-[#fd651e] flex items-center gap-1">Ler artigo completo &rarr;</span>
                </div>
            </article>
        </div>
    </div>
</section>
