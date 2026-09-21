import React, { useState } from 'react';
import { ArrowRight, ChevronDown, ChevronUp, Calendar } from 'lucide-react';
import { RECENT_ARTICLES } from '../data/content';
import { Article } from '../types';

interface RecentPostsSectionProps {
  onSelectArticle: (article: Article) => void;
}

export const RecentPostsSection: React.FC<RecentPostsSectionProps> = ({
  onSelectArticle
}) => {
  const [showAll, setShowAll] = useState(false);
  const initialArticles = RECENT_ARTICLES.slice(0, 6);
  const displayedArticles = showAll ? RECENT_ARTICLES : initialArticles;

  return (
    <section
      id="recent-posts-section"
      className="w-full bg-[#eef4ff] py-16 border-y border-[#d9e3f4]"
    >
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
        {/* Header Block */}
        <div className="flex flex-col md:flex-row md:items-end justify-between mb-12 gap-4">
          <div>
            <span className="text-xs uppercase tracking-widest text-[#a73a00] font-extrabold block mb-1">
              Conteúdo Bíblico Atual
            </span>
            <h2 className="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#121c28] tracking-tight font-['Montserrat']">
              Últimas Publicações &amp; Evangelismo Prático
            </h2>
          </div>
          <p className="text-sm text-[#45474c] max-w-md leading-relaxed">
            Artigos teológicos, análises culturais e relatos de evangelismo nas ruas para inspirar sua caminhada diária com Cristo.
          </p>
        </div>

        {/* 3 Columns Grid */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
          {displayedArticles.map((article) => (
            <article
              key={article.id}
              className="flex flex-col bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md border border-[#dfe9fa] transition-all duration-200 group hover:-translate-y-1"
            >
              <div
                className="relative w-full h-52 overflow-hidden bg-[#e5eeff] cursor-pointer"
                onClick={() => onSelectArticle(article)}
              >
                <img
                  src={article.imageUrl}
                  alt={article.imageAlt}
                  className="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                  loading="lazy"
                />
                <span className="absolute top-3 left-3 px-2.5 py-1 rounded bg-[#141c27] text-white text-xs font-semibold tracking-wide">
                  {article.category}
                </span>
              </div>

              <div className="p-5 flex flex-col flex-1">
                <div className="flex items-center gap-1.5 text-xs text-[#75777c] mb-2">
                  <span className="font-semibold text-[#121c28]">{article.author}</span>
                  <span>•</span>
                  <Calendar className="w-3.5 h-3.5" />
                  <span>{article.date}</span>
                </div>

                <h3
                  onClick={() => onSelectArticle(article)}
                  className="text-lg font-bold text-[#121c28] mb-2 group-hover:text-[#fd651e] transition-colors leading-snug cursor-pointer line-clamp-2 font-['Montserrat']"
                >
                  {article.title}
                </h3>

                <p className="font-editorial text-sm text-[#45474c] leading-relaxed mb-4 flex-1 line-clamp-3">
                  {article.excerpt}
                </p>

                <button
                  type="button"
                  onClick={() => onSelectArticle(article)}
                  className="inline-flex items-center gap-1.5 text-xs font-bold tracking-wide text-[#a73a00] hover:text-[#fd651e] transition-colors mt-auto cursor-pointer"
                >
                  <span>Ler artigo completo</span>
                  <ArrowRight className="w-4 h-4 transition-transform duration-200 group-hover:translate-x-1" />
                </button>
              </div>
            </article>
          ))}
        </div>

        {/* Load More Button */}
        <div className="mt-12 flex justify-center">
          <button
            type="button"
            onClick={() => setShowAll(!showAll)}
            className="inline-flex items-center gap-2 px-8 py-3.5 rounded-lg bg-white hover:bg-[#dfe9fa] border border-[#bfc7d6]/70 text-[#121c28] font-bold text-sm transition-all duration-200 shadow-sm hover:shadow active:scale-95 cursor-pointer"
          >
            {showAll ? (
              <>
                <ChevronUp className="w-4 h-4 text-[#fd651e]" />
                <span>Ocultar artigos anteriores</span>
              </>
            ) : (
              <>
                <ChevronDown className="w-4 h-4 text-[#fd651e]" />
                <span>Ver mensagens e artigos anteriores</span>
              </>
            )}
          </button>
        </div>
      </div>
    </section>
  );
};
