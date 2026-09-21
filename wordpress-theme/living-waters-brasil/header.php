<?php
/**
 * Living Waters Brasil - Header Template
 *
 * @package Living_Waters_Brasil
 * @version 1.0.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class('min-h-screen bg-[#f8f9ff] text-[#121c28] flex flex-col selection:bg-[#fd651e] selection:text-white'); ?>>
<?php wp_body_open(); ?>

<!-- Header Fixo Superior -->
<header id="masthead" class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-[#141c27] text-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 h-20 flex items-center justify-between gap-4">
        
        <!-- Logotipo Oficial -->
        <a href="<?php echo esc_url(home_url('/')); ?>" class="flex items-center gap-3 shrink-0 group" rel="home">
            <img 
                src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>" 
                alt="<?php bloginfo('name'); ?>" 
                class="h-10 sm:h-12 w-auto object-contain transition-transform group-hover:scale-105"
            >
            <div class="flex flex-col">
                <span class="font-extrabold text-base sm:text-lg tracking-wider text-white font-['Montserrat'] uppercase">
                    LIVING WATERS
                </span>
                <span class="text-[10px] sm:text-xs font-semibold tracking-widest text-[#ffb89e] uppercase -mt-1">
                    BRASIL
                </span>
            </div>
        </a>

        <!-- Menu Desktop -->
        <nav id="site-navigation" class="hidden xl:flex items-center gap-6" aria-label="<?php esc_attr_e('Menu Principal', 'living-waters-brasil'); ?>">
            <a href="<?php echo esc_url(home_url('/#escola-online')); ?>" class="text-xs font-bold text-[#e2e8f0] hover:text-[#fd651e] transition-colors py-2 uppercase tracking-wide">
                EQUIPE-SE
            </a>
            <a href="<?php echo esc_url(home_url('/#blogger-section')); ?>" class="text-xs font-bold text-[#fd651e] hover:text-[#ffb89e] transition-colors py-2 uppercase tracking-wide flex items-center gap-1">
                <span>BLOG</span>
                <span class="text-[9px] bg-[#fd651e] text-white px-1.5 py-0.2 rounded font-bold">NOVO</span>
            </a>
            <a href="<?php echo esc_url(home_url('/#videos')); ?>" class="text-xs font-bold text-[#e2e8f0] hover:text-[#fd651e] transition-colors py-2 uppercase tracking-wide">
                VÍDEOS &amp; TV
            </a>
            <a href="<?php echo esc_url(home_url('/#artigos')); ?>" class="text-xs font-bold text-[#e2e8f0] hover:text-[#fd651e] transition-colors py-2 uppercase tracking-wide">
                ARTIGOS
            </a>
            <a href="<?php echo esc_url(home_url('/#ferramentas-folhetos')); ?>" class="text-xs font-bold text-[#e2e8f0] hover:text-[#fd651e] transition-colors py-2 uppercase tracking-wide">
                FOLHETOS &amp; MATERIAIS
            </a>
        </nav>

        <!-- Ações do Cabeçalho (Busca + Doação #2875ab + Mobile Toggle) -->
        <div class="flex items-center gap-3">
            <!-- Botão de Busca Rápida -->
            <button 
                type="button"
                id="lw-open-search-btn"
                aria-label="Abrir pesquisa"
                class="p-2 text-[#dbe3f3] hover:text-white hover:bg-white/10 rounded-lg transition-colors flex items-center justify-center cursor-pointer"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
            </button>

            <!-- Botão Doação em #2875ab (Sem boneco de perfil) -->
            <button 
                type="button"
                id="lw-open-donation-btn"
                aria-label="Fazer uma doação ao ministério"
                class="px-4 py-2 bg-[#2875ab] hover:bg-[#206393] text-white font-bold text-xs tracking-wider rounded-lg transition-all duration-200 flex items-center gap-1.5 shadow-sm hover:shadow-md active:scale-95 cursor-pointer"
            >
                <svg class="w-4 h-4 fill-white text-white" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>
                <span>DOAÇÃO</span>
            </button>

            <!-- Menu Mobile Hamburger Toggle -->
            <button 
                type="button"
                id="lw-mobile-menu-toggle"
                aria-label="Alternar menu mobile"
                class="xl:hidden p-2 text-white hover:bg-white/10 rounded-lg transition-colors cursor-pointer"
            >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>
        </div>
    </div>

    <!-- Drawer Mobile -->
    <div id="lw-mobile-drawer" class="hidden xl:hidden bg-[#182332] border-t border-white/10 px-6 py-6 transition-all">
        <div class="flex flex-col gap-4">
            <a href="<?php echo esc_url(home_url('/#blogger-section')); ?>" class="font-bold text-sm text-[#fd651e] hover:text-white py-1 flex items-center justify-between">
                <span>BLOG &amp; ARTICULISTAS</span>
                <span class="text-[10px] bg-[#fd651e] text-white px-2 py-0.5 rounded">NOVO</span>
            </a>
            <a href="<?php echo esc_url(home_url('/#escola-online')); ?>" class="font-bold text-sm text-[#ffdbce] hover:text-white py-1">
                EQUIPE-SE &amp; ESCOLA ONLINE
            </a>
            <a href="<?php echo esc_url(home_url('/#artigos')); ?>" class="font-bold text-sm text-[#ffdbce] hover:text-white py-1">
                ARTIGOS &amp; ENSINOS
            </a>
            <a href="<?php echo esc_url(home_url('/#videos')); ?>" class="font-bold text-sm text-[#ffdbce] hover:text-white py-1">
                VÍDEOS &amp; TELEVISÃO
            </a>
            <a href="<?php echo esc_url(home_url('/#ferramentas-folhetos')); ?>" class="font-bold text-sm text-[#ffdbce] hover:text-white py-1">
                FOLHETOS DE EVANGELISMO
            </a>
            <button 
                type="button"
                id="lw-mobile-donation-btn"
                class="mt-2 w-full py-3 bg-[#2875ab] hover:bg-[#206393] text-white font-bold text-sm tracking-wide rounded-lg flex items-center justify-center gap-2 shadow transition-colors"
            >
                <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
                <span>APOIAR O MINISTÉRIO COM DOAÇÃO</span>
            </button>
        </div>
    </div>
</header>
<div class="h-20"></div><!-- Espaçador do Header Fixo -->
