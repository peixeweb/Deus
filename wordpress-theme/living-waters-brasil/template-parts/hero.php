<?php
/**
 * Living Waters Brasil - Template Part: Hero Section
 *
 * @package Living_Waters_Brasil
 */
$theme_uri = get_template_directory_uri();
?>
<section id="hero-section" aria-label="Destaque Principal" class="relative w-full min-h-[560px] lg:min-h-[640px] flex items-center justify-center overflow-hidden bg-[#0d1520] text-white">
    <!-- Background cinematográfico -->
    <div class="absolute inset-0 z-0">
        <img 
            src="<?php echo esc_url($theme_uri . '/assets/images/ray-comfort.jpg'); ?>" 
            alt="Ray Comfort ensinando evangelismo bíblico" 
            class="w-full h-full object-cover object-center filter brightness-[0.38] scale-105"
        >
        <div class="absolute inset-0 bg-gradient-to-t from-[#0d1520] via-black/40 to-transparent"></div>
        <div class="absolute inset-0 bg-radial-vignette opacity-70"></div>
    </div>

    <!-- Conteúdo do Hero -->
    <div class="relative z-10 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center flex flex-col items-center">
        <!-- Tag / Categoria -->
        <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-white/20 text-[#ffb89e] text-xs font-bold uppercase tracking-wider mb-6">
            <span class="w-2 h-2 rounded-full bg-[#cc5500] animate-pulse"></span>
            <span>Mensagem de Urgência &bull; Ray Comfort</span>
        </div>

        <!-- Título de Grande Impacto -->
        <h1 class="text-3xl sm:text-5xl lg:text-6xl font-black text-white tracking-tight leading-[1.1] max-w-4xl font-['Montserrat']">
            A Maior Mensagem Sobre o Inferno Já Pregada
        </h1>

        <!-- Subtítulo / Resumo Editorial -->
        <p class="mt-6 text-base sm:text-xl text-[#d5deed] font-editorial max-w-3xl leading-relaxed">
            Descubra por que a realidade da condenação eterna não é um tema para ser silenciado, mas a maior motivação bíblica para o amor genuíno e o evangelismo sem concessões.
        </p>

        <!-- Botões de Ação Principal (Ler mais em #cc5500) -->
        <div class="mt-8 flex flex-col sm:flex-row items-center justify-center gap-4 w-full sm:w-auto">
            <button 
                type="button" 
                id="hero-read-more-btn"
                class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-8 py-3.5 rounded-lg bg-[#cc5500] hover:bg-[#b34a00] text-white font-bold text-sm tracking-wide shadow-xl hover:shadow-[#cc5500]/25 transition-all duration-200 hover:scale-[1.02] active:scale-95 cursor-pointer"
            >
                <span>Ler mais</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                    <polyline points="12 5 19 12 12 19"></polyline>
                </svg>
            </button>
            <button 
                type="button" 
                id="hero-watch-btn"
                class="w-full sm:w-auto inline-flex items-center justify-center gap-2 px-7 py-3.5 rounded-lg bg-white/10 hover:bg-white/20 backdrop-blur-md text-white font-bold text-sm tracking-wide border border-white/20 transition-all duration-200 active:scale-95 cursor-pointer"
            >
                <svg class="w-4 h-4 fill-white" viewBox="0 0 24 24">
                    <polygon points="5 3 19 12 5 21 5 3"></polygon>
                </svg>
                <span>Assistir Mensagem</span>
            </button>
        </div>
    </div>
</section>
