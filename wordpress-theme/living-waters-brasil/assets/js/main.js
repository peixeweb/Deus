/**
 * Living Waters Brasil - WordPress Theme JavaScript
 * Vanilla JS para interatividade sem dependências externas
 */

document.addEventListener('DOMContentLoaded', function() {
    'use strict';

    // --- 1. MODAL DE DOAÇÃO & PIX ---
    const donationModal = document.getElementById('lw-donation-modal');
    const openDonationButtons = [
        document.getElementById('lw-open-donation-btn'),
        document.getElementById('lw-mobile-donation-btn'),
        document.getElementById('lw-footer-donation-btn'),
        document.getElementById('single-donation-trigger')
    ].filter(Boolean);

    const closeDonationButtons = document.querySelectorAll('.lw-close-donation-btn');

    function openDonation() {
        if (donationModal) {
            donationModal.classList.remove('hidden');
            donationModal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeDonation() {
        if (donationModal) {
            donationModal.classList.add('hidden');
            donationModal.classList.remove('flex');
            document.body.style.overflow = '';
        }
    }

    openDonationButtons.forEach(btn => btn.addEventListener('click', openDonation));
    closeDonationButtons.forEach(btn => btn.addEventListener('click', closeDonation));

    if (donationModal) {
        donationModal.addEventListener('click', function(e) {
            if (e.target === donationModal) closeDonation();
        });
    }

    // Copiar Chave PIX
    const copyPixBtn = document.getElementById('lw-copy-pix-btn');
    const copyPixLabel = document.getElementById('lw-copy-pix-label');
    const pixKeyText = document.getElementById('lw-pix-key-text');

    if (copyPixBtn && pixKeyText) {
        copyPixBtn.addEventListener('click', function() {
            const textToCopy = pixKeyText.innerText.trim();
            navigator.clipboard.writeText(textToCopy).then(() => {
                if (copyPixLabel) copyPixLabel.innerText = 'Copiado com Sucesso!';
                copyPixBtn.classList.remove('bg-[#cc5500]', 'hover:bg-[#b34a00]');
                copyPixBtn.classList.add('bg-emerald-600', 'hover:bg-emerald-700');
                setTimeout(() => {
                    if (copyPixLabel) copyPixLabel.innerText = 'Copiar Chave';
                    copyPixBtn.classList.add('bg-[#cc5500]', 'hover:bg-[#b34a00]');
                    copyPixBtn.classList.remove('bg-emerald-600', 'hover:bg-emerald-700');
                }, 2500);
            }).catch(() => {
                prompt('Copie a chave PIX manualmente:', textToCopy);
            });
        });
    }

    // --- 2. MODAL DE BUSCA ---
    const searchModal = document.getElementById('lw-search-modal');
    const openSearchBtn = document.getElementById('lw-open-search-btn');
    const closeSearchBtn = document.getElementById('lw-close-search-btn');
    const searchInput = document.getElementById('lw-search-input');

    function openSearch() {
        if (searchModal) {
            searchModal.classList.remove('hidden');
            searchModal.classList.add('flex');
            document.body.style.overflow = 'hidden';
            setTimeout(() => { if (searchInput) searchInput.focus(); }, 100);
        }
    }

    function closeSearch() {
        if (searchModal) {
            searchModal.classList.add('hidden');
            searchModal.classList.remove('flex');
            document.body.style.overflow = '';
        }
    }

    if (openSearchBtn) openSearchBtn.addEventListener('click', openSearch);
    if (closeSearchBtn) closeSearchBtn.addEventListener('click', closeSearch);
    if (searchModal) {
        searchModal.addEventListener('click', function(e) {
            if (e.target === searchModal) closeSearch();
        });
    }

    // --- 3. MODAL DE ARTIGO ---
    const articleModal = document.getElementById('lw-article-modal');
    const articleModalTitle = document.getElementById('lw-article-modal-title');
    const articleModalAuthor = document.getElementById('lw-article-modal-author');
    const articleModalCategory = document.getElementById('lw-article-modal-category');
    const articleModalImg = document.getElementById('lw-article-modal-img');
    const closeArticleBtns = document.querySelectorAll('#lw-close-article-btn, .lw-close-article-btn-action');

    function openArticle(title, author, category, image) {
        if (articleModal) {
            if (articleModalTitle) articleModalTitle.innerText = title;
            if (articleModalAuthor) articleModalAuthor.innerText = 'Por ' + author;
            if (articleModalCategory) articleModalCategory.innerText = category;
            if (articleModalImg && image) {
                articleModalImg.src = image;
                articleModalImg.alt = title;
            }
            articleModal.classList.remove('hidden');
            articleModal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeArticle() {
        if (articleModal) {
            articleModal.classList.add('hidden');
            articleModal.classList.remove('flex');
            document.body.style.overflow = '';
        }
    }

    closeArticleBtns.forEach(btn => btn.addEventListener('click', closeArticle));
    if (articleModal) {
        articleModal.addEventListener('click', function(e) {
            if (e.target === articleModal) closeArticle();
        });
    }

    // Triggers de leitura de artigos
    document.querySelectorAll('.lw-article-trigger').forEach(trigger => {
        trigger.addEventListener('click', function() {
            const title = this.dataset.title || 'Mensagem Bíblica';
            const author = this.dataset.author || 'Ray Comfort';
            const category = this.dataset.category || 'Evangelismo';
            const image = this.dataset.image || '';
            openArticle(title, author, category, image);
        });
    });

    document.querySelectorAll('.lw-post-card').forEach(card => {
        card.addEventListener('click', function() {
            const title = this.querySelector('h3') ? this.querySelector('h3').innerText : 'Artigo';
            const authorEl = this.querySelector('.font-bold.text-\\[\\#1e293b\\]');
            const author = authorEl ? authorEl.innerText : 'Living Waters';
            const imgEl = this.querySelector('img');
            const image = imgEl ? imgEl.src : '';
            openArticle(title, author, 'Blog Living Waters', image);
        });
    });

    // Botão "Ler mais" do Hero
    const heroReadMoreBtn = document.getElementById('hero-read-more-btn');
    if (heroReadMoreBtn) {
        heroReadMoreBtn.addEventListener('click', function() {
            openArticle(
                'A Maior Mensagem Sobre o Inferno Já Pregada',
                'Ray Comfort',
                'Mensagem Especial de Urgência',
                (typeof lwThemeData !== 'undefined' ? lwThemeData.themeUri : '') + '/assets/images/ray-comfort.jpg'
            );
        });
    }

    // --- 4. MODAL DE VÍDEO ---
    const videoModal = document.getElementById('lw-video-modal');
    const videoIframe = document.getElementById('lw-video-iframe');
    const videoModalTitle = document.getElementById('lw-video-modal-title');
    const closeVideoBtn = document.getElementById('lw-close-video-btn');

    function openVideo(title, youtubeId) {
        if (videoModal && videoIframe) {
            if (videoModalTitle) videoModalTitle.innerText = title;
            videoIframe.src = 'https://www.youtube-nocookie.com/embed/' + youtubeId + '?autoplay=1';
            videoModal.classList.remove('hidden');
            videoModal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }
    }

    function closeVideo() {
        if (videoModal && videoIframe) {
            videoIframe.src = '';
            videoModal.classList.add('hidden');
            videoModal.classList.remove('flex');
            document.body.style.overflow = '';
        }
    }

    if (closeVideoBtn) closeVideoBtn.addEventListener('click', closeVideo);
    if (videoModal) {
        videoModal.addEventListener('click', function(e) {
            if (e.target === videoModal) closeVideo();
        });
    }

    document.querySelectorAll('.lw-video-card').forEach(card => {
        card.addEventListener('click', function() {
            const title = this.dataset.videoTitle || 'Vídeo Living Waters';
            const youtubeId = this.dataset.youtubeId || '7y2KsU_dhwI';
            openVideo(title, youtubeId);
        });
    });

    const heroWatchBtn = document.getElementById('hero-watch-btn');
    if (heroWatchBtn) {
        heroWatchBtn.addEventListener('click', function() {
            openVideo('A Maior Mensagem Sobre o Inferno Já Pregada - Ray Comfort', '7y2KsU_dhwI');
        });
    }

    // --- 5. DRAWER MOBILE ---
    const mobileMenuToggle = document.getElementById('lw-mobile-menu-toggle');
    const mobileDrawer = document.getElementById('lw-mobile-drawer');

    if (mobileMenuToggle && mobileDrawer) {
        mobileMenuToggle.addEventListener('click', function() {
            mobileDrawer.classList.toggle('hidden');
        });
    }

    // --- 6. FILTRO DE ARTICULISTAS (BLOGGER AREA) ---
    const authorCards = document.querySelectorAll('.lw-author-card');
    const blogPosts = document.querySelectorAll('.lw-post-card');

    authorCards.forEach(card => {
        card.addEventListener('click', function() {
            const authorId = this.dataset.authorId;
            authorCards.forEach(c => c.classList.remove('border-[#fd651e]', 'ring-2', 'ring-[#fd651e]/20'));
            this.classList.add('border-[#fd651e]', 'ring-2', 'ring-[#fd651e]/20');

            blogPosts.forEach(post => {
                if (!authorId || post.dataset.author === authorId) {
                    post.style.display = 'flex';
                } else {
                    post.style.display = 'none';
                }
            });
        });
    });

    // --- 7. COMPARTILHAR FRASE (PÍLULA RAY COMFORT) ---
    const copyQuoteBtn = document.getElementById('lw-copy-quote-btn');
    if (copyQuoteBtn) {
        copyQuoteBtn.addEventListener('click', function() {
            const quoteText = '“Você não precisa de um doutorado em teologia para dizer a um homem faminto onde encontrar pão. Se você já experimentou a graça perdoadora de Cristo na cruz, abra sua boca com mansidão e anuncie as virtudes Daquele que te tirou das trevas.” — Ray Comfort (1 Pedro 2:9)';
            navigator.clipboard.writeText(quoteText).then(() => {
                const label = copyQuoteBtn.querySelector('span');
                if (label) label.innerText = 'Frase Copiada!';
                setTimeout(() => {
                    if (label) label.innerText = 'Compartilhar Frase';
                }, 2000);
            });
        });
    }

    // Atalho de teclado ESC para fechar qualquer modal aberto
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeDonation();
            closeSearch();
            closeArticle();
            closeVideo();
        }
    });
});
