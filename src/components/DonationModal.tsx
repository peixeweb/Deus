import React, { useState } from 'react';
import { X, Heart, Copy, Check, QrCode, Building2, ShieldCheck } from 'lucide-react';

interface DonationModalProps {
  isOpen: boolean;
  onClose: () => void;
}

export const DonationModal: React.FC<DonationModalProps> = ({ isOpen, onClose }) => {
  const [copiedPix, setCopiedPix] = useState(false);
  const pixKey = 'financeiro@livingwatersbrasil.com.br';

  if (!isOpen) return null;

  const handleCopyPix = () => {
    navigator.clipboard?.writeText(pixKey);
    setCopiedPix(true);
    setTimeout(() => setCopiedPix(false), 3000);
  };

  return (
    <div
      className="fixed inset-0 z-50 flex items-center justify-center p-4 sm:p-6 bg-black/75 backdrop-blur-sm"
      onClick={onClose}
    >
      <div
        className="bg-white rounded-2xl max-w-xl w-full max-h-[90vh] overflow-y-auto shadow-2xl border border-[#dfe9fa] flex flex-col relative"
        onClick={(e) => e.stopPropagation()}
      >
        {/* Header */}
        <div className="bg-[#141c27] text-white p-6 rounded-t-2xl flex items-center justify-between">
          <div className="flex items-center gap-3">
            <div className="w-10 h-10 rounded-lg bg-[#cc5500] flex items-center justify-center text-white">
              <Heart className="w-5 h-5 fill-current" />
            </div>
            <div>
              <h3 className="text-xl font-bold font-['Montserrat']">Apoie a Proclamação do Evangelho</h3>
              <p className="text-xs text-[#bfc7d6]">Living Waters Brasil &amp; América Latina</p>
            </div>
          </div>
          <button
            type="button"
            aria-label="Fechar"
            onClick={onClose}
            className="w-8 h-8 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition-colors cursor-pointer"
          >
            <X className="w-4 h-4" />
          </button>
        </div>

        {/* Content */}
        <div className="p-6 sm:p-8 space-y-6">
          <p className="text-sm text-[#45474c] leading-relaxed">
            Sua generosidade financia a impressão e distribuição gratuita de milhões de folhetos evangelísticos, a dublagem de filmes de apologética e a capacitação bíblica de crentes por todo o território nacional.
          </p>

          {/* PIX Section */}
          <div className="bg-[#f8f9ff] border border-[#d9e3f4] rounded-xl p-5">
            <div className="flex items-center justify-between mb-3">
              <div className="flex items-center gap-2">
                <QrCode className="w-5 h-5 text-[#cc5500]" />
                <span className="font-bold text-sm text-[#121c28]">Contribuição Instantânea via PIX</span>
              </div>
              <span className="text-[11px] font-semibold px-2 py-0.5 rounded bg-[#eef4ff] text-[#004881]">
                Chave E-mail
              </span>
            </div>

            <div className="flex items-center justify-between gap-2 p-3 bg-white border border-[#c5c6cc]/40 rounded-lg">
              <code className="text-xs sm:text-sm text-[#121c28] font-mono select-all break-all">
                {pixKey}
              </code>
              <button
                type="button"
                onClick={handleCopyPix}
                className="shrink-0 px-3 py-1.5 bg-[#cc5500] hover:bg-[#b34a00] text-white text-xs font-bold rounded-md flex items-center gap-1.5 transition-colors cursor-pointer"
              >
                {copiedPix ? (
                  <>
                    <Check className="w-3.5 h-3.5" />
                    <span>Copiado!</span>
                  </>
                ) : (
                  <>
                    <Copy className="w-3.5 h-3.5" />
                    <span>Copiar</span>
                  </>
                )}
              </button>
            </div>
            <p className="text-[11px] text-[#75777c] mt-2">
              Favorecido: Associação Missionária Living Waters Brasil • CNPJ: 24.189.542/0001-80
            </p>
          </div>

          {/* Bank Transfer Details */}
          <div className="bg-white border border-[#dfe9fa] rounded-xl p-5">
            <div className="flex items-center gap-2 mb-3">
              <Building2 className="w-5 h-5 text-[#141c27]" />
              <span className="font-bold text-sm text-[#121c28]">Transferência Bancária (TED / DOC)</span>
            </div>
            <div className="grid grid-cols-2 gap-3 text-xs text-[#45474c]">
              <div>
                <span className="block text-[11px] text-[#75777c]">Banco</span>
                <span className="font-semibold text-[#121c28]">Banco do Brasil (001)</span>
              </div>
              <div>
                <span className="block text-[11px] text-[#75777c]">Agência</span>
                <span className="font-semibold text-[#121c28]">3418-2</span>
              </div>
              <div>
                <span className="block text-[11px] text-[#75777c]">Conta Corrente</span>
                <span className="font-semibold text-[#121c28]">109432-8</span>
              </div>
              <div>
                <span className="block text-[11px] text-[#75777c]">Titular</span>
                <span className="font-semibold text-[#121c28]">Living Waters Brasil</span>
              </div>
            </div>
          </div>

          {/* Transparency seal */}
          <div className="flex items-center gap-3 p-3 bg-[#eef4ff] rounded-lg text-xs text-[#004881]">
            <ShieldCheck className="w-5 h-5 text-[#fd651e] shrink-0" />
            <span>
              Prestação de contas auditada e relatórios missionários semestrais disponibilizados publicamente para todos os doadores.
            </span>
          </div>

          <div className="flex justify-end">
            <button
              type="button"
              onClick={onClose}
              className="px-5 py-2.5 bg-[#141c27] hover:bg-[#202a3a] text-white text-xs font-bold rounded-lg transition-colors cursor-pointer"
            >
              Concluir
            </button>
          </div>
        </div>
      </div>
    </div>
  );
};
