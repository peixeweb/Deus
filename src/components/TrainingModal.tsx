import React from 'react';
import { X, CheckCircle2, GraduationCap, ExternalLink, Download } from 'lucide-react';
import { TrainingResource } from '../types';

interface TrainingModalProps {
  resource: TrainingResource | null;
  onClose: () => void;
}

export const TrainingModal: React.FC<TrainingModalProps> = ({ resource, onClose }) => {
  if (!resource) return null;

  return (
    <div
      className="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-black/75 backdrop-blur-sm"
      onClick={onClose}
    >
      <div
        className="bg-white rounded-2xl max-w-2xl w-full max-h-[90vh] overflow-y-auto shadow-2xl border border-[#dfe9fa] flex flex-col relative"
        onClick={(e) => e.stopPropagation()}
      >
        {/* Header Image */}
        <div className="relative w-full h-56 bg-[#141c27] overflow-hidden">
          <img
            src={resource.imageUrl}
            alt={resource.imageAlt}
            className="w-full h-full object-cover"
          />
          <div className="absolute inset-0 bg-gradient-to-t from-black/80 via-black/30 to-transparent" />

          <button
            type="button"
            aria-label="Fechar treinamento"
            onClick={onClose}
            className="absolute top-4 right-4 w-9 h-9 rounded-full bg-black/60 hover:bg-black text-white flex items-center justify-center transition-colors cursor-pointer"
          >
            <X className="w-5 h-5" />
          </button>

          <div className="absolute bottom-4 left-6">
            <span className="px-3 py-1 bg-[#fd651e] text-white text-xs font-bold uppercase tracking-wider rounded">
              {resource.category}
            </span>
          </div>
        </div>

        {/* Content */}
        <div className="p-6 sm:p-8 flex flex-col">
          <div className="flex items-center gap-2 text-[#a73a00] text-xs font-bold uppercase tracking-wider mb-2">
            <GraduationCap className="w-4 h-4" />
            <span>Capacitação e Ferramentas Oficiais</span>
          </div>

          <h3 className="text-2xl font-bold text-[#121c28] mb-4 leading-tight font-['Montserrat']">
            {resource.title}
          </h3>

          <p className="text-[#45474c] text-sm sm:text-base leading-relaxed mb-6 font-['Literata']">
            {resource.description}
          </p>

          <div className="bg-[#eef4ff] border border-[#d9e3f4] rounded-xl p-5 mb-6">
            <h4 className="text-xs font-bold text-[#121c28] uppercase tracking-wider mb-3">
              O que está incluso neste material:
            </h4>
            <div className="space-y-2.5">
              {(resource.features || [
                'Guia bíblico de evangelismo prático',
                'Instruções para abordagem sem confrontos estéreis',
                'Exposição fiel da Lei de Deus e da Graça redentora'
              ]).map((item, idx) => (
                <div key={idx} className="flex items-start gap-2.5 text-xs sm:text-sm text-[#374151]">
                  <CheckCircle2 className="w-4 h-4 text-[#fd651e] shrink-0 mt-0.5" />
                  <span>{item}</span>
                </div>
              ))}
            </div>
          </div>

          <div className="flex flex-wrap items-center justify-between gap-4 pt-4 border-t border-[#e5eeff]">
            <button
              type="button"
              onClick={() => {
                alert('Iniciando download da prévia gratuita em PDF do material.');
              }}
              className="inline-flex items-center gap-2 px-4 py-2.5 bg-[#eef4ff] hover:bg-[#dfe9fa] text-[#004881] text-xs font-bold rounded-lg transition-colors cursor-pointer"
            >
              <Download className="w-4 h-4" />
              <span>Baixar Prévia Gratuita (PDF)</span>
            </button>

            <button
              type="button"
              onClick={() => {
                alert('Redirecionando para a área de alunos / inscrições oficiais.');
              }}
              className="inline-flex items-center gap-2 px-6 py-2.5 bg-[#fd651e] hover:bg-[#e05413] text-white text-xs font-bold tracking-wide uppercase rounded-lg shadow transition-all cursor-pointer"
            >
              <span>Acessar Material Completo</span>
              <ExternalLink className="w-4 h-4" />
            </button>
          </div>
        </div>
      </div>
    </div>
  );
};
