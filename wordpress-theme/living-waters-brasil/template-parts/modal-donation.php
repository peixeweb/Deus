<?php
/**
 * Living Waters Brasil - Modal: Doação e Apoio via PIX
 *
 * @package Living_Waters_Brasil
 */
?>
<div id="lw-donation-modal" class="fixed inset-0 z-50 hidden items-center justify-center p-4 sm:p-6 bg-black/75 backdrop-blur-sm" role="dialog" aria-modal="true" aria-labelledby="donation-modal-title">
    <div class="bg-white rounded-2xl max-w-lg w-full overflow-hidden shadow-2xl border border-[#dfe9fa] flex flex-col animate-in fade-in zoom-in-95 duration-200">
        
        <!-- Header do Modal -->
        <div class="bg-[#141c27] text-white p-6 rounded-t-2xl flex items-center justify-between">
            <div class="flex items-center gap-3">
                <div class="w-10 h-10 rounded-lg bg-[#cc5500] flex items-center justify-center text-white">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 24 24">
                        <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                    </svg>
                </div>
                <div>
                    <h3 id="donation-modal-title" class="text-base sm:text-lg font-bold font-['Montserrat']">Apoiar o Ministério Living Waters</h3>
                    <p class="text-xs text-[#a0abbd]">Proclamando o Evangelho Bíblico no Brasil</p>
                </div>
            </div>
            <button 
                type="button" 
                class="lw-close-donation-btn w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition-colors cursor-pointer"
                aria-label="Fechar modal"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>

        <!-- Conteúdo do Modal -->
        <div class="p-6 space-y-6">
            <p class="text-xs sm:text-sm text-[#5a6578] font-editorial leading-relaxed">
                A Living Waters Brasil é sustentada pela graça de Deus e pelas doações voluntárias de cristãos e igrejas que compartilham da paixão de ver os perdidos alcançados com fidelidade bíblica.
            </p>

            <!-- Box PIX -->
            <div class="bg-[#f8f9ff] border border-[#d9e3f4] rounded-xl p-5">
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-[#cc5500]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="3" y="3" width="7" height="7"></rect>
                            <rect x="14" y="3" width="7" height="7"></rect>
                            <rect x="14" y="14" width="7" height="7"></rect>
                            <rect x="3" y="14" width="7" height="7"></rect>
                        </svg>
                        <span class="font-bold text-sm text-[#121c28]">Contribuição Instantânea via PIX</span>
                    </div>
                    <span class="text-[11px] font-semibold px-2 py-0.5 rounded bg-[#eef4ff] text-[#004881]">Chave CNPJ / E-mail</span>
                </div>

                <div class="flex items-center gap-2 bg-white border border-[#cbd5e1] rounded-lg p-2.5">
                    <code id="lw-pix-key-text" class="text-xs font-mono font-bold text-[#1e293b] flex-1 truncate">
                        contato@livingwatersbrasil.com.br
                    </code>
                    <button 
                        type="button" 
                        id="lw-copy-pix-btn"
                        class="shrink-0 px-3 py-1.5 bg-[#cc5500] hover:bg-[#b34a00] text-white text-xs font-bold rounded-md flex items-center gap-1.5 transition-colors cursor-pointer"
                    >
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                            <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                            <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                        </svg>
                        <span id="lw-copy-pix-label">Copiar Chave</span>
                    </button>
                </div>
            </div>

            <!-- Como sua oferta é aplicada -->
            <div class="space-y-2 text-xs text-[#5a6578]">
                <div class="font-bold text-[#141c27] uppercase tracking-wider text-[11px]">Destinação dos Recursos:</div>
                <ul class="space-y-1.5 list-disc list-inside">
                    <li>Tradução e dublagem de documentários e pregações de Ray Comfort</li>
                    <li>Impressão e envio de folhetos evangelísticos para evangelistas no Brasil</li>
                    <li>Manutenção de servidores e produção de conteúdo bíblico gratuito</li>
                </ul>
            </div>
        </div>

        <div class="bg-[#fafbfd] border-t border-[#f1f5f9] px-6 py-4 flex justify-end">
            <button 
                type="button" 
                class="lw-close-donation-btn px-4 py-2 bg-gray-200 hover:bg-gray-300 text-[#121c28] text-xs font-bold rounded-lg transition-colors cursor-pointer"
            >
                Fechar Janela
            </button>
        </div>
    </div>
</div>
