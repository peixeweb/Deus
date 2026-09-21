import { Blogger, BlogPost } from '../types';

export const BLOGGERS: Blogger[] = [
  {
    id: 'ray-comfort',
    name: 'Ray Comfort',
    role: 'Fundador da Living Waters & Autor',
    bio: 'Autor de mais de 90 livros, co-apresentador do The Way of the Master e evangelista há mais de 45 anos proclamando a Cristo nas ruas e universidades.',
    avatarUrl: import.meta.env.BASE_URL + 'assets/ray-comfort.jpg',
    postsCount: 142,
    featuredQuote: 'Se você ama genuinamente as pessoas, avisará sobre o perigo que se aproxima. O verdadeiro amor bíblico não omite a verdade eterna.',
    tags: ['Evangelismo de Rua', 'Apologética', 'Dez Mandamentos', 'Soteriologia']
  },
  {
    id: 'ez-zwayne',
    name: 'E.Z. Zwayne',
    role: 'Presidente da Living Waters',
    bio: 'Pastor, orador e líder ministerial. Dedica-se a despertar a igreja global para o discipulado bíblico, integridade pastoral e proclamação sem concessões.',
    avatarUrl: import.meta.env.BASE_URL + 'assets/ez-zwayne.jpg',
    postsCount: 68,
    featuredQuote: 'Não pregamos para entreter os ouvidos dos homens, mas para despertar as suas consciências culpadas perante o Deus Santo.',
    tags: ['Liderança Pastoral', 'Vida Cristã', 'Família', 'Doutrina']
  },
  {
    id: 'mark-spence',
    name: 'Mark Spence',
    role: 'Vice-Presidente & Reitor Acadêmico',
    bio: 'Especialista em debates apologéticos, lógica bíblica e diálogo com ateus e céticos. Professor principal da Escola de Evangelismo Bíblico.',
    avatarUrl: import.meta.env.BASE_URL + 'assets/mark-spence.jpg',
    postsCount: 89,
    featuredQuote: 'O ateísmo não é um produto da pura razão humana, mas uma fuga da responsabilidade moral perante o Criador Supremo.',
    tags: ['Debate com Ateus', 'Lógica & Fé', 'Criação vs Evolução', 'Cosmologia']
  },
  {
    id: 'living-waters-brasil',
    name: 'Living Waters Brasil',
    role: 'Equipe de Redação & Campo',
    bio: 'Evangelistas, tradutores e articulistas no Brasil e América Latina dedicados a produzir literaturas, organizar impactos e equipar igrejas locais.',
    avatarUrl: import.meta.env.BASE_URL + 'assets/logo-blue.png',
    postsCount: 115,
    featuredQuote: 'Equipando o povo de Deus no Brasil e nos países de língua portuguesa para buscar e salvar o que se havia perdido.',
    tags: ['Missões no Brasil', 'Impactos Urbanos', 'Folhetos', 'Testemunhos']
  }
];

export const RAY_DAILY_THOUGHT = {
  quote:
    'Você não precisa de um doutorado em teologia para dizer a um homem faminto onde encontrar pão. Se você já experimentou a graça perdoadora de Cristo na cruz, abra sua boca com mansidão e anuncie as virtudes Daquele que te tirou das trevas.',
  verse: '1 Pedro 2:9',
  date: 'Publicado hoje por Ray Comfort'
};

export const BLOG_POSTS: BlogPost[] = [
  {
    id: 'blog-dez-mandamentos-ateu',
    title: 'Por que o ateu precisa que você fale dos Dez Mandamentos (e não de física quântica)',
    authorId: 'ray-comfort',
    authorName: 'Ray Comfort',
    authorRole: 'Fundador da Living Waters',
    authorAvatar: import.meta.env.BASE_URL + 'assets/ray-comfort.jpg',
    date: '18 de Set, 2026',
    readTime: '5 min de leitura',
    category: 'Apologética de Rua',
    imageUrl: import.meta.env.BASE_URL + 'assets/ray-comfort.jpg',
    imageAlt: 'Ray Comfort ensinando evangelismo bíblico em podcast.',
    excerpt:
      'Quando você gasta horas debatendo teorias de física cósmica com um cético, ele permanece no conforto seguro do intelecto. Mas quando a Lei moral de Deus é colocada perante sua consciência, o espelho revela sua necessidade real do Salvador.',
    tags: ['#Apologética', '#Evangelismo', '#Consciência', '#RayComfort'],
    likes: 348,
    content: [
      'Durante décadas de conversas nas ruas de Los Angeles, Londres e centenas de universidades, cometi no início o mesmo erro que vejo tantos jovens cristãos cometerem: tentar "provar" a Deus através de debates intelectuais intermináveis.',
      'Não me entenda mal. Há evidências astronômicas, genéticas e históricas exuberantes para a Criação. Contudo, a Bíblia ensina em Romanos 1 que os homens já sabem que Deus existe — eles apenas sufocam essa verdade por causa da sua injustiça.',
      'O problema do ateu moderno não é falta de provas de um Criador inteligente; é o desejo de não ter um Juiz Santo a quem prestar contas.',
      'É por isso que Jesus usou os Dez Mandamentos com o jovem rico em Lucas 18. A Lei funciona como o raio-X da alma: ela não cura, mas expõe o tumor do pecado. Quando uma pessoa reconhece que mentiu, furtou, cobiçou e quebrou os mandamentos de Deus, ela para de zombar e começa a perguntar: "O que devo fazer para ser salvo?".',
      'Nunca troque a espada afiada da Palavra de Deus e a consciência humana por meros silogismos acadêmicos. Use a Lei para conduzir o pecador à graça da Cruz.'
    ]
  },
  {
    id: 'blog-perigo-falso-evangelho',
    title: 'O perigo do evangelho sem arrependimento: curando superficialmente a ferida do pecador',
    authorId: 'ez-zwayne',
    authorName: 'E.Z. Zwayne',
    authorRole: 'Presidente da Living Waters',
    authorAvatar: import.meta.env.BASE_URL + 'assets/ez-zwayne.jpg',
    date: '15 de Set, 2026',
    readTime: '7 min de leitura',
    category: 'Doutrina & Fidelidade',
    imageUrl: 'https://lh3.googleusercontent.com/aida-public/AB6AXuB2e8O1sV0JmBvd-78tV2Fh8wz0C6i9Lp9V3K1M7n6x4B2C8d0F3A1E9z7W',
    imageAlt: 'Bíblia aberta sob luz suave em púlpito pastoral.',
    excerpt:
      'O profeta Jeremias advertiu contra aqueles que curavam superficialmente a ferida do povo, dizendo "Paz, paz", quando não havia paz. Reduzir a conversão a uma oração mecânica sem convicção de pecado gera desilusão espiritual.',
    tags: ['#Arrependimento', '#EvangelhoPuro', '#TeologiaBíblica'],
    likes: 284,
    content: [
      'Em muitas igrejas contemporâneas, o método evangelístico dominante consiste em dizer: "Jesus tem um plano maravilhoso para melhorar sua autoestima, suas finanças e sua vida profissional".',
      'Essa abordagem negligencia deliberadamente o coração do problema humano: a inimizade moral contra um Deus Justo e Santo.',
      'Jesus não morreu no Calvário para que tivéssemos uma vida terrena mais confortável. Ele verteu Seu sangue inocente para nos salvar da ira divina vindoura e nos purificar de toda a iniquidade.',
      'O verdadeiro arrependimento (metanoia) envolve uma mudança de mente radical que resulta em tristeza segundo Deus e abandono sincero do pecado. Sem isso, enchemos bancos com pessoas que pensam ser salvas, mas que continuam escravas de suas paixões.',
      'Precisamos restaurar a urgência profética no púlpito e nas ruas: chamar homens e mulheres ao arrependimento genuíno e à fé viva no Redentor ressurreto.'
    ]
  },
  {
    id: 'blog-tres-falacias-ateus',
    title: '3 falácias que céticos usam ao tentar explicar o ajuste fino do Universo',
    authorId: 'mark-spence',
    authorName: 'Mark Spence',
    authorRole: 'Vice-Presidente & Apologeta',
    authorAvatar: import.meta.env.BASE_URL + 'assets/mark-spence.jpg',
    date: '11 de Set, 2026',
    readTime: '6 min de leitura',
    category: 'Cosmologia & Fé',
    imageUrl: 'https://lh3.googleusercontent.com/aida-public/AB6AXuCFkh97k8o4drdGrYoNqP1b_Oyqv8Z3K03w5x_u0U8_VwkKuWJcSCQ1f0jOuAfgpfFy_cCW4Hy6zZZ-YvyKgRnEfL1ld_i8A0EFtd8dcVrBpGSznKhtyFt8TmxvpU3PoEbUYClb1rrIX6aUuOf2VrVmj4jqQ5U_BNYb2-xhL-McbOGHiKKK7-BJXEKB4N5gH3OWtPkJtOo17rwkbIv1OGSkO4dtsvKxAukdYDhZL6l3ZtsMo-xuv-98',
    imageAlt: 'Visual do cosmos e leis da física em estúdio de astronomia.',
    excerpt:
      'Dizer que "o nada absoluto criou tudo espontaneamente" exige uma fé cega infinitamente maior do que confiar nas palavras de Gênesis 1:1. Aprenda a desconstruir argumentos circulares com clareza e elegância.',
    tags: ['#ApologéticaCientífica', '#DesignInteligente', '#MarkSpence'],
    likes: 412,
    content: [
      'Em nossos debates em faculdades de biologia e física, frequentemente ouvimos a afirmação de que a ciência moderna tornou Deus desnecessário. Mas quando pressionamos as premissas, a fragilidade da tese ateísta vem à tona.',
      'Primeira falácia: Redefinir o conceito de "nada". Alguns cosmólogos alegam que o universo surgiu do vácuo quântico, mas esquecem que o vácuo quântico não é o nada absoluto — ele possui leis, campos de força e flutuações físicas que exigem uma causa primária.',
      'Segunda falácia: A hipótese do Multiverso como fuga. Para escapar da probabilidade matemática astronômica que aponta para o Ajuste Fino das constantes universais (gravidade, constante cosmológica, massa do elétron), invoca-se um número infinito de universos invisíveis sem qualquer evidência empírica.',
      'Terceira falácia: Informação biológica sem mente. O DNA não é apenas química; é uma linguagem codificada com trilhões de instruções funcionais. Em toda a história humana, código e informação só procedem de uma mente consciente.',
      '"Os céus proclamam a glória de Deus, e o firmamento anuncia as obras das suas mãos" (Salmo 19:1). A ciência verdadeira, longe de refutar a fé, corrobora com reverência o Criador Supremo.'
    ]
  },
  {
    id: 'blog-aprendi-10000-conversas',
    title: 'O que aprendi após conversar com mais de 10.000 pessoas nas praças públicas',
    authorId: 'ray-comfort',
    authorName: 'Ray Comfort',
    authorRole: 'Fundador da Living Waters',
    authorAvatar: import.meta.env.BASE_URL + 'assets/ray-comfort.jpg',
    date: '06 de Set, 2026',
    readTime: '8 min de leitura',
    category: 'Evangelismo Pessoal',
    imageUrl: import.meta.env.BASE_URL + 'assets/ray-comfort.jpg',
    imageAlt: 'Ray Comfort evangelizando com atenção e amor ao próximo.',
    excerpt:
      'Não importa se a pessoa usa terno de banqueiro em Wall Street ou roupas rasgadas na praia: o coração humano sem Deus partilha o mesmo vazio existencial e a mesma culpa suprimida.',
    tags: ['#ExperiênciaDeCampo', '#AmorAoPróximo', '#RayComfort'],
    likes: 529,
    content: [
      'Quando me posiciono em Huntington Beach ou na Times Square com uma caixa de madeira e uma placa simples, vejo desfilarem centenas de perfis diferentes: advogados, estudantes de artes, atletas, ateus convictos e religiosos nominais.',
      'Mas com o passar dos minutos de diálogo amoroso e paciente, percebo algo fascinante: por baixo das aparências culturais, todos os seres humanos compartilham os mesmos anseios e os mesmos medos fundamentais.',
      'Todos sabem, em algum lugar profundo de sua consciência, que a morte física não é o fim absoluto. E todos carregam lembranças de coisas que disseram ou fizeram que prefeririam apagar para sempre da sua memória.',
      'Quando você aborda alguém não com superioridade moral, mas como um mendigo que encontrou pão e quer compartilhar o tesouro, as resistências caem. A Bíblia promete que a semente lançada nunca volta vazia.',
      'Não tenha medo da rejeição humana temporária; tema antes o silêncio da igreja enquanto almas caminham desprevenidas para a eternidade.'
    ]
  },
  {
    id: 'blog-relato-campo-metro-sp',
    title: 'Relato de Campo: 15.000 folhetos distribuídos no coração de São Paulo',
    authorId: 'living-waters-brasil',
    authorName: 'Living Waters Brasil',
    authorRole: 'Equipe de Redação & Campo',
    authorAvatar: import.meta.env.BASE_URL + 'assets/logo-blue.png',
    date: '01 de Set, 2026',
    readTime: '4 min de leitura',
    category: 'Missões Urbanas',
    imageUrl: 'https://lh3.googleusercontent.com/aida-public/AB6AXuDKQ3qffdDFBD3q607rfXuQElYQYsFRylrlsdGKrDDvAaOdL-GNPlCpzAcEhEkqBtjrWMtDaXRKXRr2pwRWEXrcaPA8O5X0wxbgUZB4MQW9ZUJ9z3UWAhXKnrfmf3kq5qnpOGvz2cquIwOgOxFWyYsyPZkMcLuhadLOUnCt0kosj5f7rwiHVZ_7641onQ4JkudNZNzuZnqO1M0UHgAQ5cL99iImXtGF980qX06RIX5F15z1QOZlcB1L',
    imageAlt: 'Evangelistas voluntários da Living Waters Brasil nas ruas.',
    excerpt:
      'Veja os testemunhos comoventes de voluntários que saíram às ruas para distribuir os tratados "A Nota de 1 Milhão de Reais" e presenciaram lágrimas de arrependimento em praça pública.',
    tags: ['#EvangelismoUrbano', '#SãoPaulo', '#FolhetosBíblicos'],
    likes: 197,
    content: [
      'No último sábado, uma equipe de 35 voluntários de diversas igrejas locais se reuniu no centro financeiro de São Paulo para uma manhã intensiva de oração e evangelismo bíblico.',
      'Com caixas dos nossos folhetos temáticos em mãos, dividimo-nos em grupos de dois a dois. Em menos de três horas, mais de 15.000 literaturas bíblicas foram entregues em mãos.',
      'Um rapaz chamado Lucas, de 29 anos, nos confessou que estava a caminho de uma decisão drástica para tirar sua própria vida quando recebeu o folheto de um dos nossos irmãos. Ele leu na plataforma do metrô sobre o perdão de Deus e voltou para conversar com lágrimas nos olhos.',
      'Testemunhos como esse nos relembram o poder da página impressa. Um folheto pode entrar em lugares onde pregadores nunca pisarão: carteiras, gavetas, presídios e quartos fechados.',
      'Louvado seja Deus por cada parceiro que torna essas impressões e treinamentos possíveis em todo o território nacional.'
    ]
  },
  {
    id: 'blog-pais-filhos-secularismo',
    title: 'Como treinar seus filhos para perseverarem firmes em uma cultura hostil à fé',
    authorId: 'ez-zwayne',
    authorName: 'E.Z. Zwayne',
    authorRole: 'Presidente da Living Waters',
    authorAvatar: import.meta.env.BASE_URL + 'assets/ez-zwayne.jpg',
    date: '26 de Ago, 2026',
    readTime: '6 min de leitura',
    category: 'Família & Discipulado',
    imageUrl: 'https://lh3.googleusercontent.com/aida-public/AB6AXuAsC1_R60ylckYs66nUE2hYSJaKh1OZBIw1DEPmIk15b-8pvIz8e5SQR64Lyl5fYaxP6_9P42nBvrYx8gvJ89umOOw7XobDagII4BoP8NahVwR7Fz90Drrth1zQceVsEtbpvWmS9DxKNRsYzhZIJEmCU4U447wnprm-JCN8nJ7Ohizk1SsE9MybNv1xZKlppLJ4DMKRxLMw2sy470ujETnzXsm-6utiKbpX8rt4twlskU86t3eGIpAT',
    imageAlt: 'Pai cristão conversando com o filho sobre as Escrituras.',
    excerpt:
      'Não basta isolar seus filhos do mundo secular; é imperativo ensiná-los a responder com inteligência, graça e mansidão às ideologias que encontrarão nas escolas e universidades.',
    tags: ['#PaisEFilhos', '#DiscipuladoFamiliar', '#CosmovisãoBíblica'],
    likes: 310,
    content: [
      'Muitos pais cristãos acreditam equivocadamente que a igreja ou a escola bíblica dominical sozinhas conseguirão imunizar seus filhos contra a enxurrada de relativismo moral da sociedade contemporânea.',
      'Deuteronômio 6 é claríssimo: a responsabilidade primeira e intransferível de discipular a próxima geração pertence aos pais, "ao assentar-se em tua casa, ao andar pelo caminho, ao deitar-se e ao levantar-se".',
      'Quando seus filhos perguntarem sobre evolução, sofrimento ou sexualidade, não responda com desdém ou medo. Sente-se à mesa, abra as Escrituras e mostre por que a cosmovisão cristã é a única que confere significado coerente à existência humana.',
      'Nossos filhos precisam ver em nós não hipocrisia religiosa, mas um amor ardente pelo Salvador e uma vida de oração autêntica.',
      'Crie guerreiros para o Reino, armados com a verdade e revestidos do fruto do Espírito Santo.'
    ]
  }
];
