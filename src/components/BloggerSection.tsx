import React, { useState, useMemo } from 'react';
import {
  Feather,
  Search,
  User,
  Clock,
  Heart,
  ArrowRight,
  Quote,
  Check,
  Share2,
  Sparkles,
  Filter
} from 'lucide-react';
import { BLOGGERS, BLOG_POSTS, RAY_DAILY_THOUGHT } from '../data/blogData';
import { Article, BlogPost } from '../types';

interface BloggerSectionProps {
  onSelectArticle: (article: Article) => void;
}

export const BloggerSection: React.FC<BloggerSectionProps> = ({ onSelectArticle }) => {
  const [selectedAuthorId, setSelectedAuthorId] = useState<string>('all');
  const [selectedCategory, setSelectedCategory] = useState<string>('all');
  const [searchQuery, setSearchQuery] = useState<string>('');
  const [likedPosts, setLikedPosts] = useState<Record<string, boolean>>({});
  const [copiedQuote, setCopiedQuote] = useState(false);

  // Filter categories
  const categories = useMemo(() => {
    const set = new Set<string>();
    BLOG_POSTS.forEach((post) => set.add(post.category));
    return ['all', ...Array.from(set)];
  }, []);

  // Filtered posts
  const filteredPosts = useMemo(() => {
    return BLOG_POSTS.filter((post) => {
      const matchesAuthor = selectedAuthorId === 'all' || post.authorId === selectedAuthorId;
      const matchesCategory = selectedCategory === 'all' || post.category === selectedCategory;
      const matchesSearch =
        searchQuery.trim() === '' ||
        post.title.toLowerCase().includes(searchQuery.toLowerCase()) ||
        post.excerpt.toLowerCase().includes(searchQuery.toLowerCase()) ||
        post.authorName.toLowerCase().includes(searchQuery.toLowerCase()) ||
        post.tags.some((tag) => tag.toLowerCase().includes(searchQuery.toLowerCase()));

      return matchesAuthor && matchesCategory && matchesSearch;
    });
  }, [selectedAuthorId, selectedCategory, searchQuery]);

  const handleLike = (postId: string, e: React.MouseEvent) => {
    e.stopPropagation();
    setLikedPosts((prev) => ({
      ...prev,
      [postId]: !prev[postId]
    }));
  };

  const handleOpenPost = (post: BlogPost) => {
    // Convert BlogPost to Article to reuse rich modal
    const article: Article = {
      id: post.id,
      title: post.title,
      author: post.authorName,
      date: `${post.date} • ${post.readTime}`,
      category: post.category,
      imageUrl: post.imageUrl,
      imageAlt: post.imageAlt,
      excerpt: post.excerpt,
      tags: post.tags,
      content: post.content
    };
    onSelectArticle(article);
  };

  const handleCopyDailyThought = () => {
    if (navigator.clipboard) {
      navigator.clipboard.writeText(
        `"${RAY_DAILY_THOUGHT.quote}" — Ray Comfort (${RAY_DAILY_THOUGHT.verse}) | Living Waters`
      );
      setCopiedQuote(true);
      setTimeout(() => setCopiedQuote(false), 2500);
    }
  };

  return (
    <section
      id="blogger-section"
      aria-label="Área do Blog e Articulistas"
      className="w-full bg-[#f8f9ff] py-16 lg:py-24 border-t border-[#e2e8f0] relative"
    >
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
        {/* Section Header */}
        <div className="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12">
          <div>
            <div className="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-[#fd651e]/10 border border-[#fd651e]/25 text-[#fd651e] text-xs font-bold uppercase tracking-wider mb-3">
              <Feather className="w-3.5 h-3.5" />
              <span>ÁREA PARA BLOGGER &amp; ARTICULISTAS</span>
            </div>
            <h2 className="text-3xl sm:text-4xl font-extrabold text-[#121c28] tracking-tight font-['Montserrat']">
              Blog Living Waters &amp; Ray Comfort
            </h2>
            <p className="mt-2 text-base sm:text-lg text-[#5a6578] font-editorial max-w-2xl leading-relaxed">
              Reflexões pastorais diretas, bastidores do evangelismo de rua e respostas apologéticas de quem vive o ministério na prática.
            </p>
          </div>

          {/* Quick Stats Banner */}
          <div className="flex items-center gap-3 bg-white p-3 sm:p-4 rounded-xl border border-[#dfe5f0] shadow-sm shrink-0">
            <div className="w-10 h-10 rounded-lg bg-[#141c27] text-white flex items-center justify-center font-bold text-sm">
              LW
            </div>
            <div>
              <div className="text-xs text-[#717d91] font-medium">Artigos Publicados</div>
              <div className="text-sm sm:text-base font-extrabold text-[#121c28]">
                400+ reflexões bíblicas
              </div>
            </div>
          </div>
        </div>

        {/* Ray Comfort Daily Thought Pill */}
        <div className="mb-14 p-6 sm:p-8 rounded-2xl bg-gradient-to-br from-[#141c27] to-[#1c2635] text-white shadow-xl relative overflow-hidden">
          <div className="absolute right-0 top-0 translate-x-8 -translate-y-8 w-64 h-64 bg-[#fd651e]/10 rounded-full blur-3xl pointer-events-none" />
          <div className="relative z-10 flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
            <div className="flex items-start gap-4 sm:gap-5">
              <img
                src={import.meta.env.BASE_URL + "assets/ray-comfort.jpg"}
                alt="Ray Comfort"
                referrerPolicy="no-referrer"
                className="w-14 h-14 sm:w-16 sm:h-16 rounded-full object-cover border-2 border-[#fd651e] shadow-md shrink-0"
              />
              <div className="space-y-1.5">
                <div className="flex items-center gap-2">
                  <span className="px-2.5 py-0.5 rounded-full bg-[#fd651e] text-[11px] font-bold uppercase tracking-wider text-white">
                    Pílula do Dia do Ray Comfort
                  </span>
                  <span className="text-xs text-[#9aa4b8] hidden sm:inline-block">
                    {RAY_DAILY_THOUGHT.date}
                  </span>
                </div>
                <p className="text-base sm:text-lg text-[#edf2fb] font-editorial italic leading-relaxed max-w-3xl">
                  &ldquo;{RAY_DAILY_THOUGHT.quote}&rdquo;
                </p>
                <div className="text-xs text-[#fd651e] font-bold tracking-wide">
                  {RAY_DAILY_THOUGHT.verse}
                </div>
              </div>
            </div>

            <button
              type="button"
              onClick={handleCopyDailyThought}
              className="inline-flex items-center gap-2 px-4 py-2.5 rounded-lg bg-white/10 hover:bg-white/20 text-white text-xs font-semibold border border-white/15 transition-all active:scale-95 shrink-0 cursor-pointer"
            >
              {copiedQuote ? (
                <>
                  <Check className="w-3.5 h-3.5 text-emerald-400" />
                  <span>Copiado com Sucesso!</span>
                </>
              ) : (
                <>
                  <Share2 className="w-3.5 h-3.5 text-[#ffb89e]" />
                  <span>Compartilhar Frase</span>
                </>
              )}
            </button>
          </div>
        </div>

        {/* Blogger Profiles Strip: Pick your Author */}
        <div className="mb-10">
          <div className="flex items-center justify-between mb-4">
            <h3 className="text-sm font-bold text-[#141c27] uppercase tracking-wider flex items-center gap-2">
              <User className="w-4 h-4 text-[#fd651e]" />
              <span>Nossos Blogueiros &amp; Articulistas Oficiais</span>
            </h3>
            {selectedAuthorId !== 'all' && (
              <button
                type="button"
                onClick={() => setSelectedAuthorId('all')}
                className="text-xs font-semibold text-[#fd651e] hover:underline cursor-pointer"
              >
                Limpar filtro de autor
              </button>
            )}
          </div>

          <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
            {BLOGGERS.map((blogger) => {
              const isSelected = selectedAuthorId === blogger.id;
              return (
                <div
                  key={blogger.id}
                  onClick={() => setSelectedAuthorId(isSelected ? 'all' : blogger.id)}
                  className={`p-5 rounded-xl border transition-all duration-200 cursor-pointer flex flex-col justify-between ${
                    isSelected
                      ? 'bg-white border-[#fd651e] shadow-lg ring-2 ring-[#fd651e]/30 -translate-y-1'
                      : 'bg-white/80 hover:bg-white border-[#e0e7f1] hover:border-[#cbd5e1] hover:shadow-md'
                  }`}
                >
                  <div>
                    <div className="flex items-center gap-3.5 mb-3">
                      <img
                        src={blogger.avatarUrl}
                        alt={blogger.name}
                        referrerPolicy="no-referrer"
                        className="w-12 h-12 rounded-full object-cover border border-[#e2e8f0] shadow-sm shrink-0"
                      />
                      <div className="overflow-hidden">
                        <div className="font-bold text-[#121c28] text-sm truncate font-['Montserrat']">
                          {blogger.name}
                        </div>
                        <div className="text-[11px] text-[#64748b] truncate font-medium">
                          {blogger.role}
                        </div>
                      </div>
                    </div>
                    <p className="text-xs text-[#475569] leading-relaxed line-clamp-3 mb-3">
                      {blogger.bio}
                    </p>
                  </div>

                  <div className="pt-3 border-t border-[#f1f5f9] flex items-center justify-between text-xs">
                    <span className="font-bold text-[#fd651e]">
                      {blogger.postsCount} posts
                    </span>
                    <span
                      className={`font-semibold text-[11px] ${
                        isSelected ? 'text-[#fd651e]' : 'text-[#64748b]'
                      }`}
                    >
                      {isSelected ? '✓ Filtrando' : 'Ver posts →'}
                    </span>
                  </div>
                </div>
              );
            })}
          </div>
        </div>

        {/* Filter Controls & Search Bar */}
        <div className="bg-white p-4 rounded-xl border border-[#e0e7f1] shadow-sm mb-8 flex flex-col md:flex-row items-center justify-between gap-4">
          {/* Author Pills */}
          <div className="flex items-center gap-2 overflow-x-auto w-full md:w-auto pb-1 md:pb-0 scrollbar-none">
            <span className="text-xs font-bold text-[#64748b] uppercase tracking-wider shrink-0 flex items-center gap-1.5 mr-1">
              <Filter className="w-3.5 h-3.5 text-[#fd651e]" />
              Autor:
            </span>
            <button
              type="button"
              onClick={() => setSelectedAuthorId('all')}
              className={`px-3 py-1.5 rounded-lg text-xs font-bold whitespace-nowrap transition-colors cursor-pointer ${
                selectedAuthorId === 'all'
                  ? 'bg-[#141c27] text-white'
                  : 'bg-[#f1f5f9] text-[#475569] hover:bg-[#e2e8f0]'
              }`}
            >
              Todos ({BLOG_POSTS.length})
            </button>
            {BLOGGERS.map((blogger) => (
              <button
                key={blogger.id}
                type="button"
                onClick={() => setSelectedAuthorId(blogger.id)}
                className={`px-3 py-1.5 rounded-lg text-xs font-semibold whitespace-nowrap transition-colors cursor-pointer ${
                  selectedAuthorId === blogger.id
                    ? 'bg-[#fd651e] text-white font-bold'
                    : 'bg-[#f1f5f9] text-[#475569] hover:bg-[#e2e8f0]'
                }`}
              >
                {blogger.name.split(' ')[0]}
              </button>
            ))}
          </div>

          {/* Quick Search */}
          <div className="relative w-full md:w-72 shrink-0">
            <Search className="w-4 h-4 text-[#94a3b8] absolute left-3 top-1/2 -translate-y-1/2" />
            <input
              type="text"
              placeholder="Pesquisar nos artigos..."
              value={searchQuery}
              onChange={(e) => setSearchQuery(e.target.value)}
              className="w-full pl-9 pr-3 py-1.5 rounded-lg bg-[#f8f9ff] border border-[#cbd5e1] text-xs text-[#121c28] placeholder-[#94a3b8] focus:outline-none focus:border-[#fd651e] focus:bg-white transition-colors"
            />
          </div>
        </div>

        {/* Posts Grid */}
        {filteredPosts.length === 0 ? (
          <div className="bg-white rounded-2xl border border-[#e2e8f0] p-12 text-center my-6">
            <div className="w-12 h-12 rounded-full bg-[#fef2ee] text-[#fd651e] mx-auto flex items-center justify-center mb-3">
              <Search className="w-5 h-5" />
            </div>
            <h4 className="text-base font-bold text-[#141c27]">Nenhum artigo encontrado</h4>
            <p className="text-xs text-[#64748b] mt-1">
              Tente redefinir os filtros de autor ou termos de busca.
            </p>
            <button
              type="button"
              onClick={() => {
                setSelectedAuthorId('all');
                setSelectedCategory('all');
                setSearchQuery('');
              }}
              className="mt-4 px-4 py-2 rounded-lg bg-[#fd651e] text-white text-xs font-bold cursor-pointer"
            >
              Exibir todos os posts
            </button>
          </div>
        ) : (
          <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            {filteredPosts.map((post) => {
              const isLiked = likedPosts[post.id];
              const likesCount = (post.likes || 120) + (isLiked ? 1 : 0);

              return (
                <article
                  key={post.id}
                  onClick={() => handleOpenPost(post)}
                  className="bg-white rounded-2xl border border-[#e2e8f0] overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 flex flex-col justify-between cursor-pointer group"
                >
                  <div>
                    {/* Thumbnail banner */}
                    <div className="relative h-48 w-full bg-[#141c27] overflow-hidden">
                      <img
                        src={post.imageUrl}
                        alt={post.imageAlt}
                        referrerPolicy="no-referrer"
                        className="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                      />
                      <div className="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent" />
                      <div className="absolute top-3 left-3">
                        <span className="px-2.5 py-1 rounded-md bg-[#fd651e] text-white text-[11px] font-bold uppercase tracking-wider shadow-sm">
                          {post.category}
                        </span>
                      </div>
                      <div className="absolute bottom-3 left-3 right-3 flex items-center justify-between text-white text-xs">
                        <span className="flex items-center gap-1 text-[11px] text-[#e2e8f0]">
                          <Clock className="w-3 h-3 text-[#ffb89e]" />
                          {post.readTime}
                        </span>
                        <span className="text-[11px] text-[#cbd5e1]">{post.date}</span>
                      </div>
                    </div>

                    {/* Content */}
                    <div className="p-6">
                      {/* Author row */}
                      <div className="flex items-center gap-2.5 mb-3">
                        <img
                          src={post.authorAvatar}
                          alt={post.authorName}
                          referrerPolicy="no-referrer"
                          className="w-7 h-7 rounded-full object-cover border border-[#cbd5e1]"
                        />
                        <span className="text-xs font-bold text-[#1e293b]">
                          {post.authorName}
                        </span>
                        <span className="text-[11px] text-[#94a3b8]">• {post.authorRole}</span>
                      </div>

                      {/* Title */}
                      <h3 className="text-lg font-bold text-[#0f172a] group-hover:text-[#fd651e] transition-colors leading-snug mb-3 font-['Montserrat']">
                        {post.title}
                      </h3>

                      {/* Excerpt */}
                      <p className="text-xs sm:text-sm text-[#475569] font-editorial leading-relaxed line-clamp-3 mb-4">
                        {post.excerpt}
                      </p>

                      {/* Tags */}
                      <div className="flex flex-wrap gap-1.5">
                        {post.tags.slice(0, 3).map((tag, idx) => (
                          <span
                            key={idx}
                            className="text-[10px] font-medium text-[#64748b] bg-[#f1f5f9] px-2 py-0.5 rounded"
                          >
                            {tag}
                          </span>
                        ))}
                      </div>
                    </div>
                  </div>

                  {/* Card Action Footer */}
                  <div className="px-6 py-3.5 bg-[#fafbfd] border-t border-[#f1f5f9] flex items-center justify-between">
                    <button
                      type="button"
                      onClick={(e) => handleLike(post.id, e)}
                      className={`flex items-center gap-1.5 text-xs font-semibold transition-colors cursor-pointer ${
                        isLiked ? 'text-rose-600 font-bold' : 'text-[#64748b] hover:text-rose-500'
                      }`}
                      aria-label="Curtir post"
                    >
                      <Heart
                        className={`w-3.5 h-3.5 transition-transform active:scale-125 ${
                          isLiked ? 'fill-rose-600 text-rose-600' : ''
                        }`}
                      />
                      <span>{likesCount}</span>
                    </button>

                    <div className="inline-flex items-center gap-1 text-xs font-bold text-[#fd651e] group-hover:translate-x-0.5 transition-transform">
                      <span>Ler Post Completo</span>
                      <ArrowRight className="w-3.5 h-3.5" />
                    </div>
                  </div>
                </article>
              );
            })}
          </div>
        )}
      </div>
    </section>
  );
};
