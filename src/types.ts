export interface Article {
  id: string;
  title: string;
  author: string;
  date: string;
  category: string;
  secondaryCategory?: string;
  imageUrl: string;
  imageAlt: string;
  excerpt: string;
  content?: string[];
  tags: string[];
}

export interface TrainingResource {
  id: string;
  title: string;
  category: string;
  badgeColor: 'tertiary' | 'secondary' | 'neutral';
  imageUrl: string;
  imageAlt: string;
  description: string;
  linkText: string;
  features?: string[];
}

export interface VideoProduction {
  id: string;
  title: string;
  category: string;
  duration: string;
  imageUrl: string;
  imageAlt: string;
  youtubeId?: string;
  description: string;
}

export interface NavDropdownItem {
  label: string;
  href: string;
  description?: string;
}

export interface NavItem {
  label: string;
  href?: string;
  items?: NavDropdownItem[];
}

export interface Blogger {
  id: string;
  name: string;
  role: string;
  bio: string;
  avatarUrl: string;
  postsCount: number;
  featuredQuote?: string;
  tags: string[];
}

export interface BlogPost {
  id: string;
  title: string;
  authorId: string;
  authorName: string;
  authorRole: string;
  authorAvatar: string;
  date: string;
  readTime: string;
  category: string;
  imageUrl: string;
  imageAlt: string;
  excerpt: string;
  content: string[];
  tags: string[];
  likes?: number;
}
