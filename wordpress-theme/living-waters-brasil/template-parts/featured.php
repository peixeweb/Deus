<?php
/**
 * Living Waters Brasil - Template Part: Featured Section (3/5 + 2/5)
 *
 * @package Living_Waters_Brasil
 */
$theme_uri = get_template_directory_uri();
?>
<section id="featured-content-section" aria-label="Conteúdo em Destaque" class="w-full bg-[#f8f9ff] py-16 lg:py-24 border-b border-[#e2e8f0]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
            
            <!-- Coluna Editorial Principal (3/5 -> 7 colunas) -->
            <div class="lg:col-span-7 bg-white rounded-2xl border border-[#e2e8f0] overflow-hidden shadow-sm hover:shadow-md transition-shadow">
                <div class="relative h-64 sm:h-80 w-full overflow-hidden bg-black/5">
                    <img 
                        src="<?php echo esc_url($theme_uri . '/assets/images/ray-comfort.jpg'); ?>" 
                        alt="Ray Comfort" 
                        class="w-full h-full object-cover"
                    >
                    <div class="absolute top-4 left-4">
                        <span class="px-3 py-1 rounded-md bg-[#fd651e] text-white text-xs font-bold uppercase tracking-wider shadow">
                            Artigo Principal
                        </span>
                    </div>
                </div>

                <div class="p-6 sm:p-8">
                    <div class="flex items-center gap-3 text-xs text-[#64748b] mb-3">
                        <span class="font-bold text-[#1e293b]">Por Ray Comfort</span>
                        <span>&bull;</span>
                        <span>Tempo de Leitura: 6 min</span>
                        <span>&bull;</span>
                        <span class="text-[#fd651e] font-semibold">Evangelismo Bíblico</span>
                    </div>

                    <h2 class="text-2xl sm:text-3xl font-extrabold text-[#0f172a] leading-tight mb-4 font-['Montserrat']">
                        O Segredo Mais Bem Guardado do Inferno: O Evangelho e a Lei Moral
                    </h2>

                    <p class="text-sm sm:text-base text-[#475569] font-editorial leading-relaxed mb-6">
                        Por que Jesus usava os Dez Mandamentos ao abordar os pecadores em vez de prometer-lhes uma vida melhor? Descubra o método esquecido que restaura o verdadeiro temor do Senhor e produz conversões genuínas e duradouras.
                    </p>

                    <button 
                        type="button"
                        class="lw-article-trigger inline-flex items-center gap-2 text-sm font-bold text-[#fd651e] hover:text-[#cc5500] transition-colors cursor-pointer group"
                        data-title="O Segredo Mais Bem Guardado do Inferno: O Evangelho e a Lei Moral"
                        data-author="Ray Comfort"
                        data-category="Evangelismo Bíblico"
                        data-image="<?php echo esc_url($theme_uri . '/assets/images/ray-comfort.jpg'); ?>"
                    >
                        <span>Ler o Artigo Completo</span>
                        <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                            <polyline points="12 5 19 12 12 19"></polyline>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Coluna de Recursos e Treinamento (2/5 -> 5 colunas) -->
            <div class="lg:col-span-5 space-y-6">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-bold text-[#0f172a] font-['Montserrat'] uppercase tracking-wider flex items-center gap-2">
                        <span class="w-2.5 h-2.5 rounded-full bg-[#fd651e]"></span>
                        <span>Ferramentas &amp; Treinamento</span>
                    </h3>
                    <span class="text-xs text-[#64748b] font-medium">Acesso Gratuito</span>
                </div>

                <!-- Card 1: Escola Online -->
                <div id="escola-online" class="p-6 rounded-2xl bg-white border border-[#e2e8f0] shadow-sm hover:shadow-md transition-all hover:border-[#fd651e]/50">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-[#eef4ff] text-[#004881] flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path>
                                <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <span class="text-[10px] font-bold text-[#004881] uppercase tracking-wider bg-[#eef4ff] px-2 py-0.5 rounded">Curso Gratuito</span>
                            <h4 class="text-base font-bold text-[#0f172a] mt-1 mb-1">Escola de Evangelismo Bíblico</h4>
                            <p class="text-xs text-[#64748b] leading-relaxed">
                                Aulas em vídeo com Ray Comfort ensinando a vencer o medo e a proclamar Cristo com intrepidez e mansidão.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Folhetos -->
                <div id="ferramentas-folhetos" class="p-6 rounded-2xl bg-white border border-[#e2e8f0] shadow-sm hover:shadow-md transition-all hover:border-[#fd651e]/50">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-[#fff2ec] text-[#fd651e] flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="7 10 12 15 17 10"></polyline>
                                <line x1="12" y1="15" x2="12" y2="3"></line>
                            </svg>
                        </div>
                        <div>
                            <span class="text-[10px] font-bold text-[#a73a00] uppercase tracking-wider bg-[#fff2ec] px-2 py-0.5 rounded">PDF para Download</span>
                            <h4 class="text-base font-bold text-[#0f172a] mt-1 mb-1">Folheto: A Nota de 1 Milhão de Reais</h4>
                            <p class="text-xs text-[#64748b] leading-relaxed">
                                O tratado evangelístico mais popular e cativante da história ministerial. Baixe o PDF pronto para impressão.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Como Testemunhar a um Ateu -->
                <div class="p-6 rounded-2xl bg-white border border-[#e2e8f0] shadow-sm hover:shadow-md transition-all hover:border-[#fd651e]/50">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 rounded-xl bg-[#f0fdf4] text-emerald-600 flex items-center justify-center shrink-0">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <circle cx="12" cy="12" r="10"></circle>
                                <line x1="12" y1="16" x2="12" y2="12"></line>
                                <line x1="12" y1="8" x2="12.01" y2="8"></line>
                            </svg>
                        </div>
                        <div>
                            <span class="text-[10px] font-bold text-emerald-700 uppercase tracking-wider bg-[#f0fdf4] px-2 py-0.5 rounded">Guia Rápido</span>
                            <h4 class="text-base font-bold text-[#0f172a] mt-1 mb-1">Passo a Passo com Céticos</h4>
                            <p class="text-xs text-[#64748b] leading-relaxed">
                                Aprenda a conduzir conversas da área intelectual diretamente para a consciência moral do ouvinte.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
