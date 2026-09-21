import React from 'react';
import {
  Tv,
  Users,
  Radio,
  Rss,
  HeartHandshake,
  Download
} from 'lucide-react';

interface FooterProps {
  onOpenDonation: () => void;
  onSelectNav?: (topic: string) => void;
}

export const Footer: React.FC<FooterProps> = ({ onOpenDonation, onSelectNav }) => {
  return (
    <footer id="main-footer" className="w-full bg-[#141c27] text-white pt-16 pb-12">
      <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12">
        {/* 4 Columns Top Grid */}
        <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 pb-12 border-b border-[#27313e]">
          {/* Col 1: Identity */}
          <div className="flex flex-col gap-4">
            <div className="flex items-center gap-3">
              <img
                src={import.meta.env.BASE_URL + "assets/logo.png"}
                alt="Living Waters Brasil"
                className="h-10 sm:h-11 w-auto max-w-[170px] sm:max-w-[210px] object-contain"
                referrerPolicy="no-referrer"
              />
              <span className="text-[11px] text-[#fd651e] tracking-widest uppercase font-bold pl-3 border-l border-white/20">
                Brasil
              </span>
            </div>

            <p className="text-xs text-[#bfc7d6] leading-relaxed">
              Inspirando e capacitando cristãos a cumprirem a Grande Comissão através do ensino bíblico, apologética e proclamação graciosa do Evangelho no Brasil e na América Latina.
            </p>

            {/* Social Channels */}
            <div className="flex items-center gap-2 pt-2 text-white">
              <a
                href="#videos"
                aria-label="Canal de Vídeos"
                className="w-9 h-9 rounded-lg bg-white/5 hover:bg-[#fd651e] text-[#bfc7d6] hover:text-white flex items-center justify-center transition-colors"
              >
                <Tv className="w-4 h-4" />
              </a>
              <a
                href="#comunidade"
                aria-label="Comunidade de Evangelismo"
                className="w-9 h-9 rounded-lg bg-white/5 hover:bg-[#fd651e] text-[#bfc7d6] hover:text-white flex items-center justify-center transition-colors"
              >
                <Users className="w-4 h-4" />
              </a>
              <a
                href="#podcasts"
                aria-label="Transmissões de Rádio e Podcast"
                className="w-9 h-9 rounded-lg bg-white/5 hover:bg-[#fd651e] text-[#bfc7d6] hover:text-white flex items-center justify-center transition-colors"
              >
                <Radio className="w-4 h-4" />
              </a>
              <a
                href="#rss"
                aria-label="Notícias e Atualizações RSS"
                className="w-9 h-9 rounded-lg bg-white/5 hover:bg-[#fd651e] text-[#bfc7d6] hover:text-white flex items-center justify-center transition-colors"
              >
                <Rss className="w-4 h-4" />
              </a>
            </div>
          </div>

          {/* Col 2: Capacitação */}
          <div className="flex flex-col gap-3">
            <h4 className="text-xs uppercase tracking-wider text-[#ffdbce] font-extrabold font-['Montserrat']">
              Capacitação
            </h4>
            <nav className="flex flex-col gap-2 text-xs">
              <a
                href="#blogger-section"
                onClick={() => onSelectNav?.('blogger-section')}
                className="text-[#bfc7d6] hover:text-[#fd651e] transition-colors font-medium flex items-center gap-1.5"
              >
                <span>Blog &amp; Articulistas</span>
                <span className="text-[9px] bg-[#fd651e] text-white px-1.5 py-0.2 rounded font-bold">NOVO</span>
              </a>
              <a
                href="#escola-online"
                onClick={() => onSelectNav?.('escola-online')}
                className="text-[#bfc7d6] hover:text-white transition-colors"
              >
                Escola Bíblica Online
              </a>
              <a
                href="#ferramentas-folhetos"
                onClick={() => onSelectNav?.('ferramentas-folhetos')}
                className="text-[#bfc7d6] hover:text-white transition-colors"
              >
                Folhetos e Tratados
              </a>
              <a
                href="#artigos"
                onClick={() => onSelectNav?.('artigos')}
                className="text-[#bfc7d6] hover:text-white transition-colors"
              >
                Artigos de Apologética
              </a>
              <a
                href="#videos"
                onClick={() => onSelectNav?.('videos')}
                className="text-[#bfc7d6] hover:text-white transition-colors"
              >
                Galeria de Vídeos
              </a>
              <a
                href="#filmes"
                onClick={() => onSelectNav?.('filmes')}
                className="text-[#bfc7d6] hover:text-white transition-colors"
              >
                Cinema Evangelístico
              </a>
            </nav>
          </div>

          {/* Col 3: Ministério */}
          <div className="flex flex-col gap-3">
            <h4 className="text-xs uppercase tracking-wider text-[#ffdbce] font-extrabold font-['Montserrat']">
              Ministério
            </h4>
            <nav className="flex flex-col gap-2 text-xs">
              <a
                href="#quem-somos"
                onClick={() => onSelectNav?.('quem-somos')}
                className="text-[#bfc7d6] hover:text-white transition-colors"
              >
                Quem Somos
              </a>
              <a
                href="#breve-historia"
                onClick={() => onSelectNav?.('breve-historia')}
                className="text-[#bfc7d6] hover:text-white transition-colors"
              >
                Nossa Trajetória
              </a>
              <a
                href="#declaracao-de-fe"
                onClick={() => onSelectNav?.('declaracao-de-fe')}
                className="text-[#bfc7d6] hover:text-white transition-colors"
              >
                Declaração Doutrinária
              </a>
              <a
                href="#embaixadores"
                onClick={() => onSelectNav?.('embaixadores')}
                className="text-[#bfc7d6] hover:text-white transition-colors"
              >
                Rede de Embaixadores
              </a>
              <a
                href="#eventos"
                onClick={() => onSelectNav?.('eventos')}
                className="text-[#bfc7d6] hover:text-white transition-colors"
              >
                Conferências &amp; Eventos
              </a>
            </nav>
          </div>

          {/* Col 4: Apoie a Obra */}
          <div className="flex flex-col gap-3">
            <h4 className="text-xs uppercase tracking-wider text-[#ffdbce] font-extrabold font-['Montserrat']">
              Apoie a Obra
            </h4>
            <p className="text-xs text-[#bfc7d6] leading-relaxed">
              Suas orações e ofertas financiam a distribuição gratuita de literatura bíblica em todo o território nacional.
            </p>
            <button
              type="button"
              onClick={onOpenDonation}
              className="mt-1 inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-[#cc5500] hover:bg-[#b34a00] text-white text-xs font-bold tracking-wide rounded-lg transition-all shadow cursor-pointer active:scale-95"
            >
              <HeartHandshake className="w-4 h-4" />
              <span>Fazer uma Contribuição</span>
            </button>
            <a
              href="/living-waters-brasil.zip"
              download="living-waters-brasil.zip"
              className="mt-1 inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-[#1c2837] hover:bg-[#25364a] text-white text-xs font-bold tracking-wide rounded-lg border border-white/10 transition-all shadow cursor-pointer active:scale-95"
              title="Baixar tema completo empacotado para WordPress"
            >
              <Download className="w-4 h-4 text-[#ffb89e]" />
              <span>Baixar Tema WordPress (.ZIP)</span>
            </a>
            <a
              href="#contato"
              onClick={() => onSelectNav?.('contato')}
              className="text-xs text-[#dbe3f3] hover:text-white transition-colors underline underline-offset-4"
            >
              Precisa de suporte? Fale Conosco
            </a>
          </div>
        </div>

        {/* Bottom copyright bar */}
        <div className="pt-6 flex flex-col md:flex-row items-center justify-between gap-4 text-xs text-[#7c8493]">
          <p>Copyright © 2026 Living Waters Brasil | Todos os direitos reservados</p>
          <div className="flex items-center gap-4">
            <a
              href="#termos-de-uso"
              onClick={() => onSelectNav?.('termos-de-uso')}
              className="hover:text-white transition-colors"
            >
              Termos de Uso
            </a>
            <span>•</span>
            <a
              href="#privacidade"
              onClick={() => onSelectNav?.('privacidade')}
              className="hover:text-white transition-colors"
            >
              Política de Privacidade
            </a>
            <span>•</span>
            <a
              href="#declaracao-de-fe"
              onClick={() => onSelectNav?.('declaracao-de-fe')}
              className="hover:text-white transition-colors"
            >
              Declaração de Fé
            </a>
          </div>
        </div>
      </div>
    </footer>
  );
};
