<?php
/**
 * Living Waters Brasil - Modal: Pesquisa Rápida
 *
 * @package Living_Waters_Brasil
 */
?>
<div id="lw-search-modal" class="fixed inset-0 z-50 hidden items-center justify-center p-4 sm:p-6 bg-black/75 backdrop-blur-sm" role="dialog" aria-modal="true">
    <div class="bg-white rounded-2xl max-w-2xl w-full overflow-hidden shadow-2xl border border-[#dfe9fa] flex flex-col animate-in fade-in zoom-in-95 duration-200">
        
        <!-- Barra de busca no topo do modal -->
        <div class="p-5 border-b border-[#e2e8f0] flex items-center gap-3 bg-[#f8f9ff]">
            <svg class="w-5 h-5 text-[#64748b] shrink-0" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <circle cx="11" cy="11" r="8"></circle>
                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
            </svg>
            <input 
                type="text" 
                id="lw-search-input" 
                placeholder="Pesquise por artigos, temas bíblicos ou autores (ex: Ray Comfort, Inferno, Ateu)..." 
                class="w-full bg-transparent text-sm text-[#0f172a] focus:outline-none placeholder:text-[#94a3b8] font-medium"
                autocomplete="off"
            >
            <button 
                type="button" 
                id="lw-close-search-btn"
                class="w-8 h-8 rounded-full hover:bg-gray-200 text-gray-500 flex items-center justify-center transition-colors cursor-pointer"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>

        <!-- Resultados Rápidos / Sugestões -->
        <div class="p-6 max-h-96 overflow-y-auto space-y-3" id="lw-search-results">
            <div class="text-xs font-bold text-[#64748b] uppercase tracking-wider mb-2">Sugestões em Destaque</div>
            
            <a href="<?php echo esc_url(home_url('/#hero-section')); ?>" class="flex items-center justify-between p-3 rounded-xl hover:bg-[#f1f5f9] transition-colors border border-transparent hover:border-[#e2e8f0]">
                <div>
                    <div class="text-sm font-bold text-[#0f172a]">A Maior Mensagem Sobre o Inferno Já Pregada</div>
                    <div class="text-xs text-[#64748b]">Ray Comfort &bull; Evangelismo de Urgência</div>
                </div>
                <span class="text-xs font-bold text-[#fd651e]">&rarr;</span>
            </a>

            <a href="<?php echo esc_url(home_url('/#blogger-section')); ?>" class="flex items-center justify-between p-3 rounded-xl hover:bg-[#f1f5f9] transition-colors border border-transparent hover:border-[#e2e8f0]">
                <div>
                    <div class="text-sm font-bold text-[#0f172a]">Por que o ateu precisa que você fale dos Dez Mandamentos</div>
                    <div class="text-xs text-[#64748b]">Ray Comfort &bull; Apologética Bíblica</div>
                </div>
                <span class="text-xs font-bold text-[#fd651e]">&rarr;</span>
            </a>

            <a href="<?php echo esc_url(home_url('/#escola-online')); ?>" class="flex items-center justify-between p-3 rounded-xl hover:bg-[#f1f5f9] transition-colors border border-transparent hover:border-[#e2e8f0]">
                <div>
                    <div class="text-sm font-bold text-[#0f172a]">Escola de Evangelismo Bíblico (Curso Gratuito)</div>
                    <div class="text-xs text-[#64748b]">Treinamento &bull; Aulas em Vídeo</div>
                </div>
                <span class="text-xs font-bold text-[#fd651e]">&rarr;</span>
            </a>
        </div>

        <div class="bg-[#fafbfd] border-t border-[#e2e8f0] px-6 py-3 flex items-center justify-between text-xs text-[#64748b]">
            <span>Pressione <kbd class="px-1.5 py-0.5 rounded bg-gray-100 border text-[11px] font-mono">ESC</kbd> para sair</span>
            <span class="text-[#fd651e] font-semibold">Living Waters Brasil</span>
        </div>
    </div>
</div>
