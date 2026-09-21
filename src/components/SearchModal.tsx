import React, { useState } from 'react';
import { X, Search, FileText, Video, GraduationCap } from 'lucide-react';
import { FEATURED_ARTICLE, RECENT_ARTICLES, VIDEO_PRODUCTIONS, TRAINING_RESOURCES } from '../data/content';
import { Article, VideoProduction, TrainingResource } from '../types';

interface SearchModalProps {
  isOpen: boolean;
  onClose: () => void;
  onSelectArticle: (article: Article) => void;
  onSelectVideo: (video: VideoProduction) => void;
  onSelectResource: (resource: TrainingResource) => void;
}

export const SearchModal: React.FC<SearchModalProps> = ({
  isOpen,
  onClose,
  onSelectArticle,
  onSelectVideo,
  onSelectResource
}) => {
  const [searchTerm, setSearchTerm] = useState('');

  if (!isOpen) return null;

  const normalized = searchTerm.toLowerCase().trim();

  const allArticles = [FEATURED_ARTICLE, ...RECENT_ARTICLES];

  const matchedArticles = normalized
    ? allArticles.filter(
        (a) =>
          a.title.toLowerCase().includes(normalized) ||
          a.excerpt.toLowerCase().includes(normalized) ||
          a.category.toLowerCase().includes(normalized) ||
          a.tags.some((t) => t.toLowerCase().includes(normalized))
      )
    : [];

  const matchedVideos = normalized
    ? VIDEO_PRODUCTIONS.filter(
        (v) =>
          v.title.toLowerCase().includes(normalized) ||
          v.description.toLowerCase().includes(normalized) ||
          v.category.toLowerCase().includes(normalized)
      )
    : [];

  const matchedResources = normalized
    ? TRAINING_RESOURCES.filter(
        (r) =>
          r.title.toLowerCase().includes(normalized) ||
          r.description.toLowerCase().includes(normalized) ||
          r.category.toLowerCase().includes(normalized)
      )
    : [];

  const hasResults =
    matchedArticles.length > 0 || matchedVideos.length > 0 || matchedResources.length > 0;

  return (
    <div
      className="fixed inset-0 z-50 flex items-start justify-center pt-16 sm:pt-24 px-4 bg-black/75 backdrop-blur-sm"
      onClick={onClose}
    >
      <div
        className="bg-white rounded-2xl max-w-2xl w-full max-h-[80vh] overflow-hidden shadow-2xl border border-[#dfe9fa] flex flex-col"
        onClick={(e) => e.stopPropagation()}
      >
        {/* Search Input Bar */}
        <div className="p-4 border-b border-[#e5eeff] flex items-center gap-3 bg-[#f8f9ff]">
          <Search className="w-5 h-5 text-[#fd651e] shrink-0" />
          <input
            type="text"
            value={searchTerm}
            onChange={(e) => setSearchTerm(e.target.value)}
            placeholder="Pesquisar por título, tema, apologética ou vídeo..."
            autoFocus
            className="flex-1 bg-transparent text-[#121c28] placeholder-[#75777c] text-sm sm:text-base outline-none font-medium"
          />
          {searchTerm && (
            <button
              type="button"
              onClick={() => setSearchTerm('')}
              className="p-1 text-[#75777c] hover:text-[#121c28] text-xs"
            >
              Limpar
            </button>
          )}
          <button
            type="button"
            onClick={onClose}
            className="p-1 text-[#75777c] hover:text-[#121c28] rounded-lg"
          >
            <X className="w-5 h-5" />
          </button>
        </div>

        {/* Results Body */}
        <div className="p-4 sm:p-6 overflow-y-auto max-h-[60vh] space-y-6">
          {!normalized && (
            <div className="text-center py-8">
              <p className="text-xs text-[#75777c]">
                Digite termos como <span className="font-semibold text-[#121c28]">"Bíblia"</span>,{' '}
                <span className="font-semibold text-[#121c28]">"Inferno"</span>,{' '}
                <span className="font-semibold text-[#121c28]">"Folheto"</span> ou{' '}
                <span className="font-semibold text-[#121c28]">"Ray Comfort"</span>.
              </p>
            </div>
          )}

          {normalized && !hasResults && (
            <div className="text-center py-8">
              <p className="text-sm font-semibold text-[#121c28]">
                Nenhum resultado encontrado para "{searchTerm}"
              </p>
              <p className="text-xs text-[#75777c] mt-1">
                Tente palavras-chave mais genéricas como "evangelismo" ou "lei".
              </p>
            </div>
          )}

          {/* Matched Articles */}
          {matchedArticles.length > 0 && (
            <div>
              <div className="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[#a73a00] mb-3">
                <FileText className="w-4 h-4" />
                <span>Artigos e Mensagens ({matchedArticles.length})</span>
              </div>
              <div className="space-y-2">
                {matchedArticles.map((article) => (
                  <div
                    key={article.id}
                    onClick={() => {
                      onClose();
                      onSelectArticle(article);
                    }}
                    className="p-3 rounded-lg hover:bg-[#eef4ff] cursor-pointer transition-colors border border-transparent hover:border-[#dfe9fa]"
                  >
                    <div className="flex items-center justify-between text-xs text-[#75777c] mb-1">
                      <span className="font-semibold text-[#121c28]">{article.author}</span>
                      <span>{article.category}</span>
                    </div>
                    <h4 className="text-sm font-bold text-[#121c28]">{article.title}</h4>
                  </div>
                ))}
              </div>
            </div>
          )}

          {/* Matched Videos */}
          {matchedVideos.length > 0 && (
            <div>
              <div className="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[#a73a00] mb-3">
                <Video className="w-4 h-4" />
                <span>Vídeos e Documentários ({matchedVideos.length})</span>
              </div>
              <div className="space-y-2">
                {matchedVideos.map((video) => (
                  <div
                    key={video.id}
                    onClick={() => {
                      onClose();
                      onSelectVideo(video);
                    }}
                    className="p-3 rounded-lg hover:bg-[#eef4ff] cursor-pointer transition-colors border border-transparent hover:border-[#dfe9fa]"
                  >
                    <div className="flex items-center justify-between text-xs text-[#75777c] mb-1">
                      <span className="font-semibold text-[#121c28]">{video.category}</span>
                      <span>{video.duration}</span>
                    </div>
                    <h4 className="text-sm font-bold text-[#121c28]">{video.title}</h4>
                  </div>
                ))}
              </div>
            </div>
          )}

          {/* Matched Training */}
          {matchedResources.length > 0 && (
            <div>
              <div className="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[#a73a00] mb-3">
                <GraduationCap className="w-4 h-4" />
                <span>Cursos e Folhetos ({matchedResources.length})</span>
              </div>
              <div className="space-y-2">
                {matchedResources.map((res) => (
                  <div
                    key={res.id}
                    onClick={() => {
                      onClose();
                      onSelectResource(res);
                    }}
                    className="p-3 rounded-lg hover:bg-[#eef4ff] cursor-pointer transition-colors border border-transparent hover:border-[#dfe9fa]"
                  >
                    <span className="text-xs text-[#75777c]">{res.category}</span>
                    <h4 className="text-sm font-bold text-[#121c28]">{res.title}</h4>
                  </div>
                ))}
              </div>
            </div>
          )}
        </div>
      </div>
    </div>
  );
};
