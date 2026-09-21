import React, { useRef } from 'react';
import { Play, ChevronLeft, ChevronRight, Clock } from 'lucide-react';
import { VIDEO_PRODUCTIONS } from '../data/content';
import { VideoProduction } from '../types';

interface VideosSectionProps {
  onSelectVideo: (video: VideoProduction) => void;
}

export const VideosSection: React.FC<VideosSectionProps> = ({ onSelectVideo }) => {
  const scrollContainerRef = useRef<HTMLDivElement>(null);

  const scroll = (direction: 'left' | 'right') => {
    if (scrollContainerRef.current) {
      const amount = direction === 'left' ? -320 : 320;
      scrollContainerRef.current.scrollBy({ left: amount, behavior: 'smooth' });
    }
  };

  return (
    <section id="videos-section" className="w-full bg-[#f8f9ff] py-16">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
        {/* Header with Carousel Controls */}
        <div className="flex items-center justify-between mb-8">
          <div>
            <span className="text-xs uppercase tracking-widest text-[#a73a00] font-extrabold block mb-1">
              Produções Oficiais
            </span>
            <h2 className="text-2xl sm:text-3xl lg:text-4xl font-bold text-[#121c28] tracking-tight font-['Montserrat']">
              Vídeos &amp; Produções em Destaque
            </h2>
          </div>

          <div className="flex items-center gap-2">
            <button
              type="button"
              id="prev-video"
              aria-label="Vídeo anterior"
              onClick={() => scroll('left')}
              className="w-10 h-10 rounded-lg bg-white hover:bg-[#dfe9fa] border border-[#bfc7d6]/70 text-[#121c28] flex items-center justify-center transition-colors shadow-sm cursor-pointer active:scale-95"
            >
              <ChevronLeft className="w-5 h-5" />
            </button>
            <button
              type="button"
              id="next-video"
              aria-label="Próximo vídeo"
              onClick={() => scroll('right')}
              className="w-10 h-10 rounded-lg bg-white hover:bg-[#dfe9fa] border border-[#bfc7d6]/70 text-[#121c28] flex items-center justify-center transition-colors shadow-sm cursor-pointer active:scale-95"
            >
              <ChevronRight className="w-5 h-5" />
            </button>
          </div>
        </div>

        {/* Video Cards Grid / Carousel */}
        <div
          ref={scrollContainerRef}
          id="video-grid"
          className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 overflow-x-auto pb-4 scroll-smooth"
        >
          {VIDEO_PRODUCTIONS.map((video) => (
            <div
              key={video.id}
              onClick={() => onSelectVideo(video)}
              className="flex flex-col bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-md border border-[#dfe9fa] transition-all duration-200 group cursor-pointer hover:-translate-y-1"
            >
              {/* Thumbnail Container */}
              <div className="relative w-full aspect-video bg-[#141c27] overflow-hidden">
                <img
                  src={video.imageUrl}
                  alt={video.imageAlt}
                  className="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105"
                  loading="lazy"
                />

                {/* Dark Overlay with Play Icon */}
                <div className="absolute inset-0 bg-black/40 group-hover:bg-black/25 flex items-center justify-center transition-colors">
                  <div className="w-12 h-12 rounded-full bg-white text-[#fd651e] flex items-center justify-center shadow-xl group-hover:scale-110 transition-transform">
                    <Play className="w-6 h-6 fill-current translate-x-0.5" />
                  </div>
                </div>

                {/* Duration Badge */}
                <span className="absolute bottom-2 right-2 px-2 py-0.5 rounded bg-black/80 text-white text-xs font-semibold flex items-center gap-1">
                  <Clock className="w-3 h-3 text-[#ffdbce]" />
                  <span>{video.duration}</span>
                </span>
              </div>

              {/* Text Info */}
              <div className="p-4 flex flex-col flex-1 justify-between">
                <h4 className="text-[15px] text-[#121c28] font-bold line-clamp-2 leading-snug mb-2 group-hover:text-[#fd651e] transition-colors font-['Montserrat']">
                  {video.title}
                </h4>
                <span className="text-xs text-[#a73a00] font-semibold uppercase tracking-wider">
                  {video.category}
                </span>
              </div>
            </div>
          ))}
        </div>
      </div>
    </section>
  );
};
