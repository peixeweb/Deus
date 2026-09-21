import React, { useState, useEffect } from 'react';
import { Search, Heart, ChevronDown, Menu, X } from 'lucide-react';
import { NAV_ITEMS } from '../data/content';

interface HeaderProps {
  onOpenSearch: () => void;
  onOpenDonation: () => void;
  onOpenProfile?: () => void;
  onNavigateSection?: (sectionId: string) => void;
}

export const Header: React.FC<HeaderProps> = ({
  onOpenSearch,
  onOpenDonation,
  onNavigateSection
}) => {
  const [activeDropdown, setActiveDropdown] = useState<string | null>(null);
  const [mobileMenuOpen, setMobileMenuOpen] = useState(false);
  const [scrolled, setScrolled] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      setScrolled(window.scrollY > 20);
    };
    window.addEventListener('scroll', handleScroll);
    return () => window.removeEventListener('scroll', handleScroll);
  }, []);

  const handleLinkClick = (href?: string) => {
    setMobileMenuOpen(false);
    setActiveDropdown(null);
    if (href && onNavigateSection) {
      const cleanId = href.replace('#', '');
      onNavigateSection(cleanId);
    }
  };

  return (
    <header
      id="main-header"
      className={`fixed top-0 left-0 right-0 z-50 transition-all duration-200 ${
        scrolled
          ? 'bg-[#141c27]/98 backdrop-blur-md shadow-lg py-1'
          : 'bg-[#141c27]/95 backdrop-blur-md shadow-[0_1px_8px_rgba(0,0,0,0.15)] py-0'
      }`}
    >
      <div className="h-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 flex items-center justify-between gap-4">
        {/* Brand Logo */}
        <div className="flex items-center gap-4 shrink-0">
          <a
            id="brand-logo-link"
            href="#"
            onClick={(e) => {
              e.preventDefault();
              window.scrollTo({ top: 0, behavior: 'smooth' });
            }}
            className="flex items-center gap-3 group"
          >
            <img
              src={import.meta.env.BASE_URL + "assets/logo.webp"}
              alt="Living Waters Brasil"
              className="h-10 sm:h-11 w-auto max-w-[170px] sm:max-w-[210px] object-contain transition-transform duration-200 group-hover:scale-102"
              referrerPolicy="no-referrer"
            />
            <span className="hidden sm:inline-block text-[11px] text-[#fd651e] tracking-widest uppercase font-bold pl-3 border-l border-white/20">
              Brasil
            </span>
          </a>
        </div>

        {/* Desktop Navigation */}
        <nav
          id="desktop-navigation"
          aria-label="Menu Principal"
          className="hidden xl:flex items-center gap-6"
        >
          {NAV_ITEMS.map((item) => {
            const hasSubmenu = Boolean(item.items && item.items.length > 0);
            const isOpen = activeDropdown === item.label;

            if (hasSubmenu) {
              return (
                <div
                  key={item.label}
                  className="relative py-3 group"
                  onMouseEnter={() => setActiveDropdown(item.label)}
                  onMouseLeave={() => setActiveDropdown(null)}
                >
                  <button
                    type="button"
                    onClick={() => setActiveDropdown(isOpen ? null : item.label)}
                    className="text-[13px] font-bold text-[#dbe3f3] hover:text-white transition-colors flex items-center gap-1 uppercase tracking-wide"
                  >
                    <span>{item.label}</span>
                    <ChevronDown
                      className={`w-4 h-4 transition-transform duration-200 ${
                        isOpen ? 'rotate-180 text-[#fd651e]' : ''
                      }`}
                    />
                  </button>

                  {/* Dropdown Menu */}
                  <div
                    className={`absolute left-0 top-full flex-col min-w-[240px] bg-[#141c27] border border-[#27313e] shadow-[0_12px_28px_-4px_rgba(0,0,0,0.6)] rounded-lg py-2 transition-all duration-200 ${
                      isOpen
                        ? 'opacity-100 visible translate-y-0 flex'
                        : 'opacity-0 invisible -translate-y-2 hidden'
                    }`}
                  >
                    {item.items?.map((subItem) => (
                      <a
                        key={subItem.label}
                        href={subItem.href}
                        onClick={(e) => {
                          e.preventDefault();
                          handleLinkClick(subItem.href);
                        }}
                        className="px-4 py-2 text-[13px] text-[#bfc7d6] hover:bg-[#202a3a] hover:text-white transition-colors flex flex-col"
                      >
                        <span className="font-semibold">{subItem.label}</span>
                        {subItem.description && (
                          <span className="text-[11px] text-[#7c8493] leading-snug">
                            {subItem.description}
                          </span>
                        )}
                      </a>
                    ))}
                  </div>
                </div>
              );
            }

            return (
              <a
                key={item.label}
                href={item.href}
                onClick={(e) => {
                  e.preventDefault();
                  handleLinkClick(item.href);
                }}
                className="text-[13px] font-bold text-[#dbe3f3] hover:text-white transition-colors uppercase tracking-wide"
              >
                {item.label}
              </a>
            );
          })}
        </nav>

        {/* Right CTA Actions */}
        <div className="flex items-center gap-3 shrink-0">
          <button
            id="search-button-trigger"
            aria-label="Pesquisar artigos e vídeos"
            onClick={onOpenSearch}
            className="p-2 text-[#dbe3f3] hover:text-white hover:bg-white/10 rounded-lg transition-colors flex items-center justify-center cursor-pointer"
            type="button"
          >
            <Search className="w-5 h-5" />
          </button>

          <button
            id="donation-header-button"
            aria-label="Fazer uma doação"
            onClick={onOpenDonation}
            className="px-4 py-2 bg-[#2875ab] hover:bg-[#206393] text-white font-bold text-xs tracking-wider rounded-lg transition-all duration-200 flex items-center gap-1.5 shadow-sm hover:shadow-md active:scale-95 cursor-pointer"
            type="button"
          >
            <Heart className="w-4 h-4 fill-white text-white" />
            <span>DOAÇÃO</span>
          </button>

          {/* Mobile Menu Toggle Button */}
          <button
            id="mobile-menu-toggle-btn"
            aria-label="Abrir menu de navegação"
            onClick={() => setMobileMenuOpen(!mobileMenuOpen)}
            className="xl:hidden p-2 text-white hover:bg-white/10 rounded-lg transition-colors cursor-pointer"
            type="button"
          >
            {mobileMenuOpen ? <X className="w-6 h-6" /> : <Menu className="w-6 h-6" />}
          </button>
        </div>
      </div>

      {/* Mobile Drawer Navigation */}
      {mobileMenuOpen && (
        <div className="xl:hidden bg-[#141c27] border-t border-[#27313e] px-6 py-6 shadow-2xl max-h-[calc(100vh-5rem)] overflow-y-auto">
          <div className="flex flex-col gap-4">
            {NAV_ITEMS.map((item) => (
              <div key={item.label} className="border-b border-[#27313e]/60 pb-3">
                {item.items ? (
                  <>
                    <div className="font-bold text-sm text-[#ffdbce] mb-2 uppercase tracking-wide">
                      {item.label}
                    </div>
                    <div className="flex flex-col gap-2 pl-3">
                      {item.items.map((subItem) => (
                        <a
                          key={subItem.label}
                          href={subItem.href}
                          onClick={(e) => {
                            e.preventDefault();
                            handleLinkClick(subItem.href);
                          }}
                          className="text-sm text-[#bfc7d6] hover:text-white py-1 flex items-center justify-between"
                        >
                          <span>{subItem.label}</span>
                        </a>
                      ))}
                    </div>
                  </>
                ) : (
                  <a
                    href={item.href}
                    onClick={(e) => {
                      e.preventDefault();
                      handleLinkClick(item.href);
                    }}
                    className="font-bold text-sm text-[#ffdbce] hover:text-white block py-1 uppercase tracking-wide"
                  >
                    {item.label}
                  </a>
                )}
              </div>
            ))}

            <button
              onClick={() => {
                setMobileMenuOpen(false);
                onOpenDonation();
              }}
              className="mt-2 w-full py-3 bg-[#2875ab] hover:bg-[#206393] text-white font-bold text-sm tracking-wide rounded-lg flex items-center justify-center gap-2 shadow transition-colors"
            >
              <Heart className="w-5 h-5 fill-current" />
              <span>APOIAR O MINISTÉRIO COM DOAÇÃO</span>
            </button>
          </div>
        </div>
      )}
    </header>
  );
};
