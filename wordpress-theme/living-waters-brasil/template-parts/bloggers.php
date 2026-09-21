<?php
/**
 * Living Waters Brasil - Template Part: Blogger Section
 *
 * @package Living_Waters_Brasil
 */
$theme_uri = get_template_directory_uri();
$bloggers = living_waters_get_bloggers();
?>
<section id="blogger-section" aria-label="Área do Blog e Articulistas" class="w-full bg-[#f8f9ff] py-16 lg:py-24 border-t border-[#e2e8f0] relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
        
        <!-- Header da Seção -->
        <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
            <div>
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#fd651e]/10 border border-[#fd651e]/25 text-[#fd651e] text-xs font-bold uppercase tracking-wider mb-3">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path>
                        <line x1="16" y1="8" x2="2" y2="22"></line>
                        <line x1="17.5" y1="15" x2="9" y2="15"></line>
                    </svg>
                    <span>ÁREA PARA BLOGGER &amp; ARTICULISTAS</span>
                </div>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-[#121c28] tracking-tight font-['Montserrat']">
                    Blog Living Waters &amp; Ray Comfort
                </h2>
                <p class="mt-2 text-base sm:text-lg text-[#5a6578] font-editorial max-w-2xl leading-relaxed">
                    Reflexões pastorais diretas, bastidores do evangelismo de rua e respostas apologéticas de quem vive o ministério na prática.
                </p>
            </div>

            <div class="flex items-center gap-3 bg-white p-3 sm:p-4 rounded-xl border border-[#dfe5f0] shadow-sm shrink-0">
                <div class="w-10 h-10 rounded-lg bg-[#141c27] text-white flex items-center justify-center font-bold text-sm">
                    LW
                </div>
                <div>
                    <div class="text-xs text-[#717d91] font-medium">Artigos Publicados</div>
                    <div class="text-sm sm:text-base font-extrabold text-[#121c28]">
                        400+ reflexões bíblicas
                    </div>
                </div>
            </div>
        </div>

        <!-- Pílula do Dia do Ray Comfort -->
        <div class="mb-14 p-6 sm:p-8 rounded-2xl bg-gradient-to-br from-[#141c27] to-[#1c2635] text-white shadow-xl relative overflow-hidden">
            <div class="absolute right-0 top-0 translate-x-8 -translate-y-8 w-64 h-64 bg-[#fd651e]/10 rounded-full blur-3xl pointer-events-none"></div>
            <div class="relative z-10 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
                <div class="flex items-start gap-4 sm:gap-5">
                    <img 
                        src="<?php echo esc_url($theme_uri . '/assets/images/ray-comfort.jpg'); ?>" 
                        alt="Ray Comfort" 
                        class="w-14 h-14 sm:w-16 sm:h-16 rounded-full object-cover border-2 border-[#fd651e] shadow-md shrink-0"
                    >
                    <div class="space-y-1.5">
                        <div class="flex items-center gap-2">
                            <span class="px-2.5 py-0.5 rounded-full bg-[#fd651e] text-[11px] font-bold uppercase tracking-wider text-white">
                                Pílula do Dia do Ray Comfort
                            </span>
                            <span class="text-xs text-[#9aa4b8] hidden sm:inline-block">
                                Atualizado Diariamente
                            </span>
                        </div>
                        <p class="text-base sm:text-lg text-[#edf2fb] font-editorial italic leading-relaxed max-w-3xl">
                            &ldquo;Você não precisa de um doutorado em teologia para dizer a um homem faminto onde encontrar pão. Se você já experimentou a graça perdoadora de Cristo na cruz, abra sua boca com mansidão e anuncie as virtudes Daquele que te tirou das trevas.&rdquo;
                        </p>
                        <div class="text-xs text-[#fd651e] font-bold tracking-wide">
                            1 Pedro 2:9
                        </div>
                    </div>
                </div>

                <button 
                    type="button" 
                    id="lw-copy-quote-btn"
                    class="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-white/10 hover:bg-white/20 text-white text-xs font-semibold border border-white/15 transition-all active:scale-95 shrink-0 cursor-pointer"
                >
                    <svg class="w-3.5 h-3.5 text-[#ffb89e]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <circle cx="18" cy="5" r="3"></circle>
                        <circle cx="6" cy="12" r="3"></circle>
                        <circle cx="18" cy="19" r="3"></circle>
                        <line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line>
                        <line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line>
                    </svg>
                    <span>Compartilhar Frase</span>
                </button>
            </div>
        </div>

        <!-- Cards dos Articulistas Oficiais -->
        <div class="mb-10">
            <h3 class="text-sm font-bold text-[#141c27] uppercase tracking-wider mb-4 flex items-center gap-2">
                <svg class="w-4 h-4 text-[#fd651e]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <span>Nossos Blogueiros &amp; Articulistas Oficiais</span>
            </h3>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <?php foreach ($bloggers as $blogger) : ?>
                <div class="lw-author-card p-5 rounded-xl border border-[#e0e7f1] bg-white/80 hover:bg-white hover:shadow-md transition-all cursor-pointer" data-author-id="<?php echo esc_attr($blogger['id']); ?>">
                    <div class="flex items-center gap-3.5 mb-3">
                        <img 
                            src="<?php echo esc_url($blogger['avatar']); ?>" 
                            alt="<?php echo esc_attr($blogger['name']); ?>" 
                            class="w-12 h-12 rounded-full object-cover border border-[#e2e8f0] shadow-sm shrink-0"
                        >
                        <div class="overflow-hidden">
                            <div class="font-bold text-[#121c28] text-sm truncate font-['Montserrat']">
                                <?php echo esc_html($blogger['name']); ?>
                            </div>
                            <div class="text-[11px] text-[#64748b] truncate font-medium">
                                <?php echo esc_html($blogger['role']); ?>
                            </div>
                        </div>
                    </div>
                    <p class="text-xs text-[#475569] leading-relaxed line-clamp-3 mb-3">
                        <?php echo esc_html($blogger['bio']); ?>
                    </p>
                    <div class="pt-3 border-t border-[#f1f5f9] flex items-center justify-between text-xs">
                        <span class="font-bold text-[#fd651e]">
                            <?php echo esc_html($blogger['postsCount']); ?> posts
                        </span>
                        <span class="font-semibold text-[11px] text-[#64748b]">
                            Ver posts &rarr;
                        </span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Grade de Posts do Blog -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="lw-blog-posts-grid">
            
            <!-- Post 1: Ray Comfort -->
            <article class="lw-post-card bg-white rounded-2xl border border-[#e2e8f0] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col justify-between cursor-pointer group" data-author="ray-comfort">
                <div>
                    <div class="relative h-48 w-full bg-[#141c27] overflow-hidden">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/ray-comfort.jpg'); ?>" alt="Ray Comfort" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <div class="absolute top-3 left-3">
                            <span class="px-2.5 py-1 rounded-md bg-[#fd651e] text-white text-[11px] font-bold uppercase tracking-wider shadow-sm">
                                Apologética de Rua
                            </span>
                        </div>
                        <div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-white text-xs">
                            <span class="text-[11px] text-[#e2e8f0]">5 min de leitura</span>
                            <span class="text-[11px] text-[#cbd5e1]">Setembro, 2026</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2.5 mb-3">
                            <img src="<?php echo esc_url($theme_uri . '/assets/images/ray-comfort.jpg'); ?>" alt="Ray Comfort" class="w-7 h-7 rounded-full object-cover border border-[#cbd5e1]">
                            <span class="text-xs font-bold text-[#1e293b]">Ray Comfort</span>
                            <span class="text-[11px] text-[#94a3b8]">&bull; Fundador da Living Waters</span>
                        </div>
                        <h3 class="text-lg font-bold text-[#0f172a] group-hover:text-[#fd651e] transition-colors leading-snug mb-3 font-['Montserrat']">
                            Por que o ateu precisa que você fale dos Dez Mandamentos (e não de física quântica)
                        </h3>
                        <p class="text-xs sm:text-sm text-[#475569] font-editorial leading-relaxed line-clamp-3 mb-4">
                            Quando você gasta horas debatendo teorias de física cósmica com um cético, ele permanece no conforto seguro do intelecto. Mas quando a Lei moral de Deus é colocada perante sua consciência, o espelho revela sua necessidade real do Salvador.
                        </p>
                    </div>
                </div>
                <div class="px-6 py-3.5 bg-[#fafbfd] border-t border-[#f1f5f9] flex items-center justify-between">
                    <span class="text-xs font-semibold text-rose-600 flex items-center gap-1">
                        &hearts; 348 curtidas
                    </span>
                    <span class="inline-flex items-center gap-1 text-xs font-bold text-[#fd651e] group-hover:translate-x-0.5 transition-transform">
                        Ler Post Completo &rarr;
                    </span>
                </div>
            </article>

            <!-- Post 2: E.Z. Zwayne -->
            <article class="lw-post-card bg-white rounded-2xl border border-[#e2e8f0] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col justify-between cursor-pointer group" data-author="ez-zwayne">
                <div>
                    <div class="relative h-48 w-full bg-[#141c27] overflow-hidden">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/ez-zwayne.jpg'); ?>" alt="E.Z. Zwayne" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <div class="absolute top-3 left-3">
                            <span class="px-2.5 py-1 rounded-md bg-[#fd651e] text-white text-[11px] font-bold uppercase tracking-wider shadow-sm">
                                Doutrina &amp; Fidelidade
                            </span>
                        </div>
                        <div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-white text-xs">
                            <span class="text-[11px] text-[#e2e8f0]">7 min de leitura</span>
                            <span class="text-[11px] text-[#cbd5e1]">Setembro, 2026</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2.5 mb-3">
                            <img src="<?php echo esc_url($theme_uri . '/assets/images/ez-zwayne.jpg'); ?>" alt="E.Z. Zwayne" class="w-7 h-7 rounded-full object-cover border border-[#cbd5e1]">
                            <span class="text-xs font-bold text-[#1e293b]">E.Z. Zwayne</span>
                            <span class="text-[11px] text-[#94a3b8]">&bull; Presidente</span>
                        </div>
                        <h3 class="text-lg font-bold text-[#0f172a] group-hover:text-[#fd651e] transition-colors leading-snug mb-3 font-['Montserrat']">
                            O perigo do evangelho sem arrependimento: curando superficialmente a ferida do pecador
                        </h3>
                        <p class="text-xs sm:text-sm text-[#475569] font-editorial leading-relaxed line-clamp-3 mb-4">
                            O profeta Jeremias advertiu contra aqueles que curavam superficialmente a ferida do povo, dizendo "Paz, paz", quando não havia paz. Reduzir a conversão a uma oração mecânica sem convicção de pecado gera desilusão espiritual.
                        </p>
                    </div>
                </div>
                <div class="px-6 py-3.5 bg-[#fafbfd] border-t border-[#f1f5f9] flex items-center justify-between">
                    <span class="text-xs font-semibold text-rose-600 flex items-center gap-1">
                        &hearts; 284 curtidas
                    </span>
                    <span class="inline-flex items-center gap-1 text-xs font-bold text-[#fd651e] group-hover:translate-x-0.5 transition-transform">
                        Ler Post Completo &rarr;
                    </span>
                </div>
            </article>

            <!-- Post 3: Mark Spence -->
            <article class="lw-post-card bg-white rounded-2xl border border-[#e2e8f0] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col justify-between cursor-pointer group" data-author="mark-spence">
                <div>
                    <div class="relative h-48 w-full bg-[#141c27] overflow-hidden">
                        <img src="<?php echo esc_url($theme_uri . '/assets/images/mark-spence.jpg'); ?>" alt="Mark Spence" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <div class="absolute top-3 left-3">
                            <span class="px-2.5 py-1 rounded-md bg-[#fd651e] text-white text-[11px] font-bold uppercase tracking-wider shadow-sm">
                                Cosmologia &amp; Fé
                            </span>
                        </div>
                        <div class="absolute bottom-3 left-3 right-3 flex items-center justify-between text-white text-xs">
                            <span class="text-[11px] text-[#e2e8f0]">6 min de leitura</span>
                            <span class="text-[11px] text-[#cbd5e1]">Setembro, 2026</span>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center gap-2.5 mb-3">
                            <img src="<?php echo esc_url($theme_uri . '/assets/images/mark-spence.jpg'); ?>" alt="Mark Spence" class="w-7 h-7 rounded-full object-cover border border-[#cbd5e1]">
                            <span class="text-xs font-bold text-[#1e293b]">Mark Spence</span>
                            <span class="text-[11px] text-[#94a3b8]">&bull; Vice-Presidente</span>
                        </div>
                        <h3 class="text-lg font-bold text-[#0f172a] group-hover:text-[#fd651e] transition-colors leading-snug mb-3 font-['Montserrat']">
                            3 falácias que céticos usam ao tentar explicar o ajuste fino do Universo
                        </h3>
                        <p class="text-xs sm:text-sm text-[#475569] font-editorial leading-relaxed line-clamp-3 mb-4">
                            Dizer que "o nada absoluto criou tudo espontaneamente" exige uma fé cega infinitamente maior do que confiar nas palavras de Gênesis 1:1. Aprenda a desconstruir argumentos circulares com clareza e elegância.
                        </p>
                    </div>
                </div>
                <div class="px-6 py-3.5 bg-[#fafbfd] border-t border-[#f1f5f9] flex items-center justify-between">
                    <span class="text-xs font-semibold text-rose-600 flex items-center gap-1">
                        &hearts; 412 curtidas
                    </span>
                    <span class="inline-flex items-center gap-1 text-xs font-bold text-[#fd651e] group-hover:translate-x-0.5 transition-transform">
                        Ler Post Completo &rarr;
                    </span>
                </div>
            </article>

        </div>

    </div>
</section>
