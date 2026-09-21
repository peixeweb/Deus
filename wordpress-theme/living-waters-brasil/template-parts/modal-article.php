<?php
/**
 * Living Waters Brasil - Modal: Leitura Completa de Artigo
 *
 * @package Living_Waters_Brasil
 */
?>
<div id="lw-article-modal" class="fixed inset-0 z-50 hidden items-center justify-center p-4 sm:p-6 bg-black/80 backdrop-blur-sm" role="dialog" aria-modal="true">
    <div class="bg-white rounded-2xl max-w-3xl w-full max-h-[90vh] overflow-hidden shadow-2xl border border-[#dfe9fa] flex flex-col animate-in fade-in zoom-in-95 duration-200">
        
        <!-- Header do Modal de Artigo -->
        <div class="p-6 border-b border-[#e2e8f0] flex items-center justify-between bg-[#f8f9ff]">
            <div class="flex items-center gap-3">
                <span id="lw-article-modal-category" class="px-2.5 py-1 rounded bg-[#fd651e] text-white text-[10px] font-bold uppercase tracking-wider">
                    Artigo
                </span>
                <span id="lw-article-modal-author" class="text-xs font-bold text-[#1e293b]">
                    Por Ray Comfort
                </span>
            </div>
            <button 
                type="button" 
                id="lw-close-article-btn"
                class="w-8 h-8 rounded-full hover:bg-gray-200 text-gray-500 flex items-center justify-center transition-colors cursor-pointer"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>

        <!-- Conteúdo Rolável -->
        <div class="p-6 sm:p-8 overflow-y-auto space-y-6">
            <h2 id="lw-article-modal-title" class="text-2xl sm:text-3xl font-black text-[#0f172a] leading-tight font-['Montserrat']">
                Título do Artigo
            </h2>

            <div id="lw-article-modal-image-container" class="rounded-xl overflow-hidden max-h-72 w-full bg-[#141c27]">
                <img id="lw-article-modal-img" src="" alt="" class="w-full h-full object-cover">
            </div>

            <div class="prose max-w-none text-[#334155] font-editorial text-base leading-relaxed space-y-4">
                <p>
                    O apóstolo Paulo escreveu aos Gálatas: &ldquo;De maneira que a lei nos serviu de aio, para nos conduzir a Cristo, para que pela fé fôssemos justificados&rdquo; (Gálatas 3:24).
                </p>
                <p>
                    Durante décadas, grande parte da igreja moderna tentou atrair o mundo com promessas de prosperidade, autoajuda ou alívio emocional temporário. No entanto, Jesus nunca abordou as pessoas oferecendo um caminho confortável; Ele utilizava os Dez Mandamentos para revelar o diagnóstico do coração humano.
                </p>
                <blockquote class="p-4 border-l-4 border-[#fd651e] bg-[#fff6f2] rounded-r-lg font-italic text-sm text-[#7c2d12] my-4">
                    &ldquo;A Lei de Deus é o espelho moral. Ela não foi dada para nos salvar, mas para calar toda a boca e tornar todo o mundo culpável perante Deus.&rdquo;
                </blockquote>
                <p>
                    Quando uma pessoa compreende a santidade da Lei e reconhece a sua própria transgressão voluntária contra o Criador, o sacrifício de Jesus Cristo na cruz do Calvário deixa de ser uma teoria abstrata e torna-se a única esperança de perdão, redenção e vida eterna.
                </p>
            </div>
        </div>

        <!-- Footer do Modal -->
        <div class="bg-[#fafbfd] border-t border-[#e2e8f0] px-6 py-4 flex items-center justify-between">
            <button 
                type="button" 
                id="lw-article-like-btn"
                class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg border border-rose-200 text-rose-600 hover:bg-rose-50 text-xs font-semibold transition-colors cursor-pointer"
            >
                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
                <span id="lw-article-like-label">Curtir Artigo</span>
            </button>
            <button 
                type="button" 
                class="lw-close-article-btn-action px-4 py-2 bg-[#141c27] hover:bg-black text-white text-xs font-bold rounded-lg transition-colors cursor-pointer"
            >
                Concluir Leitura
            </button>
        </div>
    </div>
</div>
