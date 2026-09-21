import React from 'react';
import { X, Play, Clock, Share2, Info } from 'lucide-react';
import { VideoProduction } from '../types';

interface VideoModalProps {
  video: VideoProduction | null;
  onClose: () => void;
}

export const VideoModal: React.FC<VideoModalProps> = ({ video, onClose }) => {
  if (!video) return null;

  return (
    <div
      className="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-black/80 backdrop-blur-sm"
      onClick={onClose}
    >
      <div
        className="bg-[#141c27] text-white rounded-2xl max-w-3xl w-full max-h-[90vh] overflow-y-auto shadow-2xl border border-[#27313e] flex flex-col relative"
        onClick={(e) => e.stopPropagation()}
      >
        {/* Video Player Display */}
        <div className="relative w-full aspect-video bg-black overflow-hidden flex items-center justify-center">
          <img
            src={video.imageUrl}
            alt={video.imageAlt}
            className="w-full h-full object-cover opacity-60"
          />

          {/* Simulated player interface */}
          <div className="absolute inset-0 flex flex-col items-center justify-center p-6 text-center bg-black/40">
            <div className="w-16 h-16 rounded-full bg-[#fd651e] text-white flex items-center justify-center shadow-2xl mb-4 hover:scale-110 transition-transform cursor-pointer">
              <Play className="w-8 h-8 fill-current translate-x-0.5" />
            </div>
            <p className="text-sm font-medium text-[#dbe3f3] max-w-md">
              Reproduzindo transmissão oficial Living Waters Brasil
            </p>
          </div>

          <button
            type="button"
            aria-label="Fechar vídeo"
            onClick={onClose}
            className="absolute top-4 right-4 w-9 h-9 rounded-full bg-black/70 hover:bg-black text-white flex items-center justify-center transition-colors cursor-pointer z-10"
          >
            <X className="w-5 h-5" />
          </button>
        </div>

        {/* Video Information */}
        <div className="p-6 sm:p-8 flex flex-col">
          <div className="flex flex-wrap items-center justify-between gap-2 mb-3">
            <span className="px-3 py-1 bg-[#fd651e] text-white text-xs font-bold uppercase tracking-wider rounded">
              {video.category}
            </span>
            <div className="flex items-center gap-2 text-xs text-[#bfc7d6]">
              <Clock className="w-3.5 h-3.5 text-[#fd651e]" />
              <span>Duração: {video.duration}</span>
            </div>
          </div>

          <h3 className="text-xl sm:text-2xl font-bold text-white mb-4 leading-snug font-['Montserrat']">
            {video.title}
          </h3>

          <p className="text-[#bfc7d6] text-sm sm:text-base leading-relaxed mb-6 font-['Literata']">
            {video.description}
          </p>

          <div className="p-4 bg-white/5 border border-white/10 rounded-xl mb-6">
            <div className="flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[#ffdbce] mb-2">
              <Info className="w-4 h-4" />
              <span>Nota de Ensino e Apologética</span>
            </div>
            <p className="text-xs text-[#dbe3f3] leading-relaxed">
              Todos os nossos vídeos e mensagens são disponibilizados gratuitamente para edificação da Igreja e incentivo ao evangelismo bíblico segundo o método de Cristo: usar a Lei para mostrar o pecado e a graça para salvar o pecador arrependido.
            </p>
          </div>

          <div className="flex items-center justify-between pt-4 border-t border-[#27313e]">
            <button
              type="button"
              onClick={() => {
                navigator.clipboard?.writeText(window.location.href);
                alert('Link do vídeo copiado para a área de transferência!');
              }}
              className="inline-flex items-center gap-1.5 px-4 py-2 bg-white/10 hover:bg-white/15 text-white text-xs font-semibold rounded-lg transition-colors cursor-pointer"
            >
              <Share2 className="w-4 h-4" />
              <span>Compartilhar Vídeo</span>
            </button>

            <button
              type="button"
              onClick={onClose}
              className="px-5 py-2 bg-[#fd651e] hover:bg-[#e05413] text-white text-xs font-bold rounded-lg transition-colors cursor-pointer"
            >
              Fechar
            </button>
          </div>
        </div>
      </div>
    </div>
  );
};
