import React, { useState, useEffect } from 'react';
import {
  User,
  Calendar,
  ArrowRight,
  GraduationCap,
  ChevronLeft,
  ChevronRight,
  CheckCircle2
} from 'lucide-react';
import { FEATURED_ARTICLE, TRAINING_RESOURCES } from '../data/content';
import { Article, TrainingResource } from '../types';

interface FeaturedContentSectionProps {
  onSelectArticle: (article: Article) => void;
  onSelectResource: (resource: TrainingResource) => void;
}

export const FeaturedContentSection: React.FC<FeaturedContentSectionProps> = ({
  onSelectArticle,
  onSelectResource
}) => {
  const [currentResourceIdx, setCurrentResourceIdx] = useState(0);

  // Auto advance every 8 seconds unless interacted
  useEffect(() => {
    const timer = setInterval(() => {
      setCurrentResourceIdx((prev) => (prev + 1) % TRAINING_RESOURCES.length);
    }, 8000);
    return () => clearInterval(timer);
  }, []);

  const handlePrevResource = () => {
    setCurrentResourceIdx((prev) =>
      prev === 0 ? TRAINING_RESOURCES.length - 1 : prev - 1
    );
  };

  const handleNextResource = () => {
    setCurrentResourceIdx((prev) =>
      (prev + 1) % TRAINING_RESOURCES.length
    );
  };

  const currentResource = TRAINING_RESOURCES[currentResourceIdx];

  return (
    <section
      id="featured-content-section"
      className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 py-12 lg:py-16 w-full"
    >
      <div className="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">
        {/* Left Column: Featured Editorial Article (3/5 -> col-span-7) */}
        <article
          id="featured-lead-article"
          className="lg:col-span-7 flex flex-col bg-white rounded-2xl shadow-sm border border-[#e5eeff] overflow-hidden group hover:shadow-md transition-shadow"
        >
          <div className="relative w-full h-[320px] sm:h-[380px] overflow-hidden bg-[#eef4ff]">
            <img
              src={FEATURED_ARTICLE.imageUrl}
              alt={FEATURED_ARTICLE.imageAlt}
              className="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
              loading="lazy"
            />
            <div className="absolute top-4 left-4 flex flex-wrap gap-2">
              <span className="px-3 py-1 bg-[#141c27] text-white text-xs font-semibold uppercase tracking-wider rounded">
                {FEATURED_ARTICLE.category}
              </span>
              {FEATURED_ARTICLE.secondaryCategory && (
                <span className="px-3 py-1 bg-white/90 backdrop-blur text-[#45474c] text-xs font-semibold uppercase tracking-wider rounded">
                  {FEATURED_ARTICLE.secondaryCategory}
                </span>
              )}
            </div>
          </div>

          <div className="p-6 sm:p-8 flex flex-col">
            <div className="flex items-center gap-2 text-xs text-[#75777c] mb-3">
              <User className="w-4 h-4 text-[#fd651e]" />
              <span className="font-semibold text-[#121c28]">
                {FEATURED_ARTICLE.author}
              </span>
              <span>•</span>
              <Calendar className="w-4 h-4" />
              <span>{FEATURED_ARTICLE.date}</span>
            </div>

            <h2
              onClick={() => onSelectArticle(FEATURED_ARTICLE)}
              className="text-2xl sm:text-3xl font-bold text-[#121c28] mb-4 group-hover:text-[#fd651e] transition-colors cursor-pointer leading-snug font-['Montserrat']"
            >
              {FEATURED_ARTICLE.title}
            </h2>

            <p className="font-editorial text-base sm:text-[17px] text-[#45474c] leading-relaxed mb-6 font-normal">
              {FEATURED_ARTICLE.excerpt}
            </p>

            <div className="flex flex-wrap gap-2 mb-6">
              {FEATURED_ARTICLE.tags.map((tag) => (
                <span
                  key={tag}
                  className="px-2.5 py-1 bg-[#eef4ff] text-[#004881] text-xs font-medium rounded"
                >
                  {tag}
                </span>
              ))}
            </div>

            <div>
              <button
                type="button"
                onClick={() => onSelectArticle(FEATURED_ARTICLE)}
                className="inline-flex items-center gap-2 text-[#a73a00] hover:text-[#fd651e] font-bold text-sm tracking-wide transition-colors group/link cursor-pointer"
              >
                <span>Continuar lendo artigo completo</span>
                <ArrowRight className="w-4 h-4 transition-transform duration-200 group-hover/link:translate-x-1" />
              </button>
            </div>
          </div>
        </article>

        {/* Right Column: Training Resources Slider (2/5 -> col-span-5) */}
        <aside
          id="training-resources-aside"
          className="lg:col-span-5 flex flex-col bg-[#eef4ff] border border-[#d9e3f4] rounded-2xl p-6 sm:p-7 shadow-sm"
        >
          <div className="flex items-center justify-between mb-5">
            <div className="flex items-center gap-2">
              <GraduationCap className="w-6 h-6 text-[#fd651e]" />
              <h3 className="text-xl font-bold text-[#121c28] font-['Montserrat']">
                Capacitação &amp; Treinamento
              </h3>
            </div>

            {/* Prev / Next controls */}
            <div className="flex items-center gap-1.5" id="resource-nav">
              <button
                type="button"
                id="prev-resource"
                aria-label="Recurso anterior"
                onClick={handlePrevResource}
                className="w-8 h-8 rounded-lg bg-white hover:bg-[#dfe9fa] text-[#121c28] border border-[#c5c6cc]/40 flex items-center justify-center transition-colors cursor-pointer active:scale-95"
              >
                <ChevronLeft className="w-4 h-4" />
              </button>
              <button
                type="button"
                id="next-resource"
                aria-label="Próximo recurso"
                onClick={handleNextResource}
                className="w-8 h-8 rounded-lg bg-white hover:bg-[#dfe9fa] text-[#121c28] border border-[#c5c6cc]/40 flex items-center justify-center transition-colors cursor-pointer active:scale-95"
              >
                <ChevronRight className="w-4 h-4" />
              </button>
            </div>
          </div>

          {/* Active Card with smooth display */}
          <div className="relative overflow-hidden w-full">
            <div
              key={currentResource.id}
              className="flex flex-col bg-white rounded-xl p-5 shadow-sm border border-[#e5eeff] transition-all duration-300"
            >
              <div className="w-full h-44 rounded-lg overflow-hidden bg-[#e5eeff] mb-4 relative">
                <img
                  src={currentResource.imageUrl}
                  alt={currentResource.imageAlt}
                  className="w-full h-full object-cover"
                  loading="lazy"
                />
                <span
                  className={`absolute top-2.5 left-2.5 px-2.5 py-1 rounded text-xs font-bold uppercase tracking-wider ${
                    currentResource.badgeColor === 'secondary'
                      ? 'bg-[#fd651e] text-white'
                      : currentResource.badgeColor === 'tertiary'
                      ? 'bg-[#141c27] text-white'
                      : 'bg-[#45474c] text-white'
                  }`}
                >
                  {currentResource.category}
                </span>
              </div>

              <h4 className="text-lg font-bold text-[#121c28] mb-2 leading-tight font-['Montserrat']">
                {currentResource.title}
              </h4>

              <p className="text-sm text-[#45474c] leading-relaxed mb-4">
                {currentResource.description}
              </p>

              {currentResource.features && (
                <div className="mb-5 space-y-1.5 border-t border-[#eef4ff] pt-3">
                  {currentResource.features.map((feat, i) => (
                    <div key={i} className="flex items-center gap-2 text-xs text-[#45474c]">
                      <CheckCircle2 className="w-3.5 h-3.5 text-[#fd651e] shrink-0" />
                      <span>{feat}</span>
                    </div>
                  ))}
                </div>
              )}

              <button
                type="button"
                onClick={() => onSelectResource(currentResource)}
                className="mt-auto inline-flex items-center justify-center gap-2 px-5 py-2.5 rounded-lg bg-[#141c27] hover:bg-[#202a3a] text-white font-semibold text-xs tracking-wider uppercase transition-colors cursor-pointer active:scale-95"
              >
                <span>{currentResource.linkText}</span>
                <ArrowRight className="w-4 h-4 text-[#ffdbce]" />
              </button>
            </div>
          </div>

          {/* Dots Indicator */}
          <div className="flex items-center justify-center gap-1.5 mt-5">
            {TRAINING_RESOURCES.map((res, index) => (
              <button
                key={res.id}
                type="button"
                aria-label={`Ir para recurso ${index + 1}: ${res.title}`}
                onClick={() => setCurrentResourceIdx(index)}
                className={`transition-all duration-300 rounded-full cursor-pointer ${
                  currentResourceIdx === index
                    ? 'w-6 h-2 bg-[#fd651e]'
                    : 'w-2 h-2 bg-[#bfc7d6] hover:bg-[#75777c]'
                }`}
              />
            ))}
          </div>
        </aside>
      </div>
    </section>
  );
};
