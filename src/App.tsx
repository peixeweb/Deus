/**
 * @license
 * SPDX-License-Identifier: Apache-2.0
 */

import React, { useState } from 'react';
import { Header } from './components/Header';
import { HeroSection } from './components/HeroSection';
import { FeaturedContentSection } from './components/FeaturedContentSection';
import { RecentPostsSection } from './components/RecentPostsSection';
import { BloggerSection } from './components/BloggerSection';
import { VideosSection } from './components/VideosSection';
import { Footer } from './components/Footer';

import { ArticleModal } from './components/ArticleModal';
import { VideoModal } from './components/VideoModal';
import { TrainingModal } from './components/TrainingModal';
import { DonationModal } from './components/DonationModal';
import { SearchModal } from './components/SearchModal';

import { HERO_DATA, VIDEO_PRODUCTIONS } from './data/content';
import { Article, VideoProduction, TrainingResource } from './types';

export default function App() {
  const [selectedArticle, setSelectedArticle] = useState<Article | null>(null);
  const [selectedVideo, setSelectedVideo] = useState<VideoProduction | null>(null);
  const [selectedResource, setSelectedResource] = useState<TrainingResource | null>(null);

  const [isSearchOpen, setIsSearchOpen] = useState(false);
  const [isDonationOpen, setIsDonationOpen] = useState(false);

  // Hero read more action
  const handleHeroReadMore = () => {
    const heroArticle: Article = {
      id: 'hero-mensagem-inferno',
      title: HERO_DATA.title,
      author: 'Ray Comfort',
      date: 'Mensagem Especial',
      category: 'Doutrina Bíblica',
      secondaryCategory: 'Evangelismo',
      imageUrl: HERO_DATA.bgImage,
      imageAlt: HERO_DATA.bgAlt,
      excerpt: HERO_DATA.description,
      tags: ['#JulgamentoEterno', '#EvangelismoUrgente', '#CruzDeCristo'],
      content: HERO_DATA.articleContent
    };
    setSelectedArticle(heroArticle);
  };

  // Hero watch video action
  const handleHeroWatchVideo = () => {
    const heroVideo = VIDEO_PRODUCTIONS[0] || {
      id: 'pregacao-inferno',
      title: HERO_DATA.title,
      category: 'Pregação Oficial',
      duration: '32:15',
      imageUrl: HERO_DATA.bgImage,
      imageAlt: HERO_DATA.bgAlt,
      description: HERO_DATA.description
    };
    setSelectedVideo(heroVideo);
  };

  const handleNavigateSection = (sectionId: string) => {
    if (sectionId === 'doacao') {
      setIsDonationOpen(true);
      return;
    }
    if (sectionId === 'videos') {
      const el = document.getElementById('videos-section');
      el?.scrollIntoView({ behavior: 'smooth' });
      return;
    }
    if (sectionId === 'artigos') {
      const el = document.getElementById('recent-posts-section');
      el?.scrollIntoView({ behavior: 'smooth' });
      return;
    }
    if (sectionId === 'blog' || sectionId === 'blogger' || sectionId === 'blogger-section') {
      const el = document.getElementById('blogger-section');
      el?.scrollIntoView({ behavior: 'smooth' });
      return;
    }
    if (sectionId === 'escola-online' || sectionId === 'ferramentas-folhetos') {
      const el = document.getElementById('featured-content-section');
      el?.scrollIntoView({ behavior: 'smooth' });
      return;
    }
    window.scrollTo({ top: 0, behavior: 'smooth' });
  };

  return (
    <div className="min-h-screen bg-[#f8f9ff] text-[#121c28] flex flex-col selection:bg-[#fd651e] selection:text-white">
      {/* 1. Header Navigation */}
      <Header
        onOpenSearch={() => setIsSearchOpen(true)}
        onOpenDonation={() => setIsDonationOpen(true)}
        onNavigateSection={handleNavigateSection}
      />

      {/* Main Content Areas */}
      <main className="w-full pt-20 bg-[#f8f9ff] flex-1 flex flex-col">
        {/* 2. Hero Section: Cinematic Call to Urgency */}
        <HeroSection
          onReadMore={handleHeroReadMore}
          onWatchVideo={handleHeroWatchVideo}
        />

        {/* 3. Asymmetric Content Block: 3/5 Editorial Lead & 2/5 Training Resources */}
        <FeaturedContentSection
          onSelectArticle={(article) => setSelectedArticle(article)}
          onSelectResource={(resource) => setSelectedResource(resource)}
        />

        {/* 4. Recent Posts & Street Evangelism (3 Columns Grid) */}
        <RecentPostsSection
          onSelectArticle={(article) => setSelectedArticle(article)}
        />

        {/* 5. Dedicated Blogger & Articulistas Area */}
        <BloggerSection
          onSelectArticle={(article) => setSelectedArticle(article)}
        />

        {/* 6. Multimedia Carousel: Videos & Produções em Destaque */}
        <VideosSection
          onSelectVideo={(video) => setSelectedVideo(video)}
        />
      </main>

      {/* 6. Comprehensive Footer */}
      <Footer
        onOpenDonation={() => setIsDonationOpen(true)}
        onSelectNav={handleNavigateSection}
      />

      {/* Interactive Modals */}
      <ArticleModal
        article={selectedArticle}
        onClose={() => setSelectedArticle(null)}
      />

      <VideoModal
        video={selectedVideo}
        onClose={() => setSelectedVideo(null)}
      />

      <TrainingModal
        resource={selectedResource}
        onClose={() => setSelectedResource(null)}
      />

      <DonationModal
        isOpen={isDonationOpen}
        onClose={() => setIsDonationOpen(false)}
      />

      <SearchModal
        isOpen={isSearchOpen}
        onClose={() => setIsSearchOpen(false)}
        onSelectArticle={(article) => setSelectedArticle(article)}
        onSelectVideo={(video) => setSelectedVideo(video)}
        onSelectResource={(resource) => setSelectedResource(resource)}
      />
    </div>
  );
}
