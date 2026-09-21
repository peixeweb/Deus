import React, { useState } from 'react';
import { X, Calendar, User, Share2, BookOpen, Check } from 'lucide-react';
import { Article } from '../types';

interface ArticleModalProps {
  article: Article | null;
  onClose: () => void;
}

export const ArticleModal: React.FC<ArticleModalProps> = ({ article, onClose }) => {
  const [copied, setCopied] = useState(false);

  if (!article) return null;

  const handleCopyLink = () => {
    if (navigator.clipboard) {
      navigator.clipboard.writeText(window.location.href);
      setCopied(true);
      setTimeout(() => setCopied(false), 2500);
    }
  };

  return (
    <div
      className="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-black/70 backdrop-blur-sm animate-fade-in"
      onClick={onClose}
    >
      <div
        className="bg-white rounded-2xl max-w-3xl w-full max-h-[90vh] overflow-y-auto shadow-2xl border border-[#dfe9fa] flex flex-col relative"
        onClick={(e) => e.stopPropagation()}
      >
        {/* Modal Top Header Image */}
        <div className="relative w-full h-64 sm:h-72 bg-[#141c27] overflow-hidden">
          <img
            src={article.imageUrl}
            alt={article.imageAlt}
            className="w-full h-full object-cover"
          />
          <div className="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent" />

          {/* Close button */}
          <button
            type="button"
            aria-label="Fechar artigo"
            onClick={onClose}
            className="absolute top-4 right-4 w-9 h-9 rounded-full bg-black/60 hover:bg-black text-white flex items-center justify-center transition-colors cursor-pointer"
          >
            <X className="w-5 h-5" />
          </button>

          <div className="absolute bottom-4 left-6 right-6 flex items-center justify-between text-white">
            <span className="px-3 py-1 bg-[#fd651e] text-white text-xs font-bold uppercase tracking-wider rounded">
              {article.category}
            </span>
            <div className="flex items-center gap-4 text-xs text-[#dbe3f3]">
              <span className="flex items-center gap-1">
                <User className="w-3.5 h-3.5" />
                {article.author}
              </span>
              <span className="flex items-center gap-1">
                <Calendar className="w-3.5 h-3.5" />
                {article.date}
              </span>
            </div>
          </div>
        </div>

        {/* Modal Content */}
        <div className="p-6 sm:p-10 flex flex-col">
          <h2 className="text-2xl sm:text-3xl font-extrabold text-[#121c28] mb-6 leading-tight font-['Montserrat']">
            {article.title}
          </h2>

          <div className="flex flex-wrap gap-2 mb-8">
            {article.tags.map((t) => (
              <span
                key={t}
                className="px-2.5 py-1 bg-[#eef4ff] text-[#004881] text-xs font-medium rounded"
              >
                {t}
              </span>
            ))}
          </div>

          {/* Article Text */}
          <div className="font-editorial text-[#374151] text-base sm:text-lg leading-relaxed space-y-4 font-normal">
            <p className="font-semibold text-[#121c28] italic border-l-4 border-[#fd651e] pl-4 py-1 bg-[#f8f9ff]">
              "{article.excerpt}"
            </p>

            {article.content ? (
              article.content.map((paragraph, idx) => (
                <p key={idx}>{paragraph}</p>
              ))
            ) : (
              <p>
                A proclamar a verdade da Palavra de Deus com clareza, misericórdia e temor santificado. Continue meditando nas Escrituras e orando pelos perdidos.
              </p>
            )}
          </div>

          {/* Bottom Actions */}
          <div className="mt-10 pt-6 border-t border-[#e5eeff] flex flex-wrap items-center justify-between gap-4">
            <div className="flex items-center gap-2 text-xs text-[#75777c]">
              <BookOpen className="w-4 h-4 text-[#fd651e]" />
              <span>Living Waters Brasil • Fidelidade às Escrituras</span>
            </div>

            <div className="flex items-center gap-3">
              <button
                type="button"
                onClick={handleCopyLink}
                className="inline-flex items-center gap-1.5 px-4 py-2 bg-[#eef4ff] hover:bg-[#dfe9fa] text-[#004881] text-xs font-bold rounded-lg transition-colors cursor-pointer"
              >
                {copied ? (
                  <>
                    <Check className="w-4 h-4 text-emerald-600" />
                    <span className="text-emerald-700">Link Copiado!</span>
                  </>
                ) : (
                  <>
                    <Share2 className="w-4 h-4" />
                    <span>Compartilhar</span>
                  </>
                )}
              </button>
              <button
                type="button"
                onClick={onClose}
                className="px-5 py-2 bg-[#141c27] hover:bg-[#202a3a] text-white text-xs font-bold rounded-lg transition-colors cursor-pointer"
              >
                Fechar Artigo
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};
