import React from 'react';
import { ArrowRight, PlayCircle } from 'lucide-react';
import { HERO_DATA } from '../data/content';

interface HeroSectionProps {
  onReadMore: () => void;
  onWatchVideo: () => void;
}

export const HeroSection: React.FC<HeroSectionProps> = ({
  onReadMore,
  onWatchVideo
}) => {
  return (
    <section
      id="hero-section"
      className="relative w-full overflow-hidden bg-[#141c27] text-white min-h-[580px] lg:min-h-[620px] flex items-center"
    >
      {/* High-definition, sharp background image */}
      <div className="absolute inset-0 z-0">
        <img
          src={HERO_DATA.bgImage}
          alt={HERO_DATA.bgAlt}
          referrerPolicy="no-referrer"
          className="w-full h-full object-cover object-[center_20%] sm:object-[70%_20%] lg:object-[82%_20%] select-none brightness-105 contrast-105 filter"
          style={{ imageRendering: 'auto' }}
        />
        {/* Directional gradient on the left side to keep text crisp while keeping Ray completely sharp and visible */}
        <div className="absolute inset-0 bg-gradient-to-r from-[#141c27] via-[#141c27]/90 sm:via-[#141c27]/80 to-transparent sm:w-[70%] lg:w-[60%]" />
        
        {/* Subtle bottom fade to blend seamlessly with the section below */}
        <div className="absolute bottom-0 inset-x-0 h-28 bg-gradient-to-t from-[#141c27] to-transparent pointer-events-none" />
        
        {/* Subtle top shade for header readability */}
        <div className="absolute top-0 inset-x-0 h-20 bg-gradient-to-b from-[#141c27]/70 to-transparent pointer-events-none" />
      </div>

      {/* Hero Content Container */}
      <div className="relative z-10 max-w-7xl mx-auto px-6 lg:px-12 py-16 lg:py-24 w-full">
        <div className="max-w-2xl">
          {/* Badge & Speaker indicator */}
          <div className="flex flex-wrap items-center gap-2.5 mb-5">
            <div className="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-[#fd651e] text-white text-xs font-bold tracking-widest uppercase shadow-md">
              <span className="w-2 h-2 rounded-full bg-white animate-pulse" />
              <span>{HERO_DATA.badge}</span>
            </div>
            {HERO_DATA.speaker && (
              <span className="inline-flex items-center px-3 py-1 rounded-full bg-black/40 backdrop-blur-md border border-white/15 text-[#ffdbce] text-xs font-semibold">
                {HERO_DATA.speaker}
              </span>
            )}
          </div>

          {/* Title */}
          <h1 className="text-3xl sm:text-4xl md:text-5xl lg:text-[54px] lg:leading-[1.12] font-extrabold text-white tracking-tight mb-5 drop-shadow-[0_2px_12px_rgba(0,0,0,0.8)] font-['Montserrat']">
            {HERO_DATA.title}
          </h1>

          {/* Paragraph */}
          <p className="font-editorial text-base sm:text-lg lg:text-xl text-[#f0f4fc] leading-relaxed mb-8 drop-shadow-[0_1px_4px_rgba(0,0,0,0.8)]">
            {HERO_DATA.description}
          </p>

          {/* Call to Actions */}
          <div className="flex flex-wrap items-center gap-4">
            <button
              id="hero-read-more-btn"
              type="button"
              onClick={onReadMore}
              className="inline-flex items-center gap-2 px-8 py-3.5 rounded-lg bg-[#cc5500] hover:bg-[#b34a00] text-white font-bold text-sm tracking-wide shadow-xl hover:shadow-[#cc5500]/25 transition-all duration-200 hover:scale-[1.02] active:scale-95 cursor-pointer"
            >
              <span>Ler mais</span>
              <ArrowRight className="w-4 h-4" />
            </button>

            <button
              id="hero-watch-sermon-btn"
              type="button"
              onClick={onWatchVideo}
              className="inline-flex items-center gap-2.5 px-6 py-3.5 rounded-lg bg-black/50 hover:bg-black/70 border border-white/25 text-white font-semibold text-sm transition-all duration-200 active:scale-95 cursor-pointer backdrop-blur-md shadow-lg"
            >
              <PlayCircle className="w-5 h-5 text-[#fd651e]" />
              <span>Assistir Pregação</span>
            </button>
          </div>
        </div>
      </div>
    </section>
  );
};
