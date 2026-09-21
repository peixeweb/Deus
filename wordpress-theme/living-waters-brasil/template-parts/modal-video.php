<?php
/**
 * Living Waters Brasil - Modal: Player de Vídeo
 *
 * @package Living_Waters_Brasil
 */
?>
<div id="lw-video-modal" class="fixed inset-0 z-50 hidden items-center justify-center p-4 sm:p-6 bg-black/85 backdrop-blur-sm" role="dialog" aria-modal="true">
    <div class="bg-[#141c27] text-white rounded-2xl max-w-4xl w-full overflow-hidden shadow-2xl border border-white/10 flex flex-col animate-in fade-in zoom-in-95 duration-200">
        <div class="p-4 sm:p-5 flex items-center justify-between border-b border-white/10">
            <h3 id="lw-video-modal-title" class="text-sm sm:text-base font-bold truncate pr-4">
                Reproduzir Vídeo Living Waters
            </h3>
            <button 
                type="button" 
                id="lw-close-video-btn"
                class="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition-colors cursor-pointer shrink-0"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>
        <div class="relative aspect-video w-full bg-black">
            <iframe 
                id="lw-video-iframe" 
                src="" 
                title="Living Waters Player" 
                class="w-full h-full border-0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen
            ></iframe>
        </div>
    </div>
</div>
