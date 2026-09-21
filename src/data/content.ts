import { Article, TrainingResource, VideoProduction, NavItem } from '../types';

export const HERO_DATA = {
  badge: 'VÍDEO & MENSAGEM EM DESTAQUE',
  speaker: 'Ray Comfort • Fundador da Living Waters',
  title: 'Isto fará você mudar a sua forma de ver o Inferno',
  description:
    'Para pregar o Evangelho com fidelidade, é necessário ter uma convicção bíblica profunda sobre a realidade do Inferno — pois é isso que desperta o coração dos crentes para a urgência da proclamação da salvação em Cristo.',
  bgImage: import.meta.env.BASE_URL + 'assets/ray-comfort.webp',
  bgAlt:
    'Ray Comfort, fundador da Living Waters, no estúdio oficial com microfone e estantes ao fundo.',
  articleContent: [
    'Quando Charles Spurgeon disse: "Se pecadores forem condenados, que pelo menos tenham que pular por cima de nossos corpos para chegar ao inferno", ele expressou a essência do zelo cristão.',
    'A cultura moderna tenta suavizar ou até banir a doutrina do julgamento eterno, reduzindo o Evangelho a um programa de autoajuda ou melhoria social. Contudo, Jesus falou mais sobre a realidade do inferno do que qualquer outro personagem bíblico.',
    'A visão bíblica do inferno não foi revelada para assustar mentes crédulas, mas para alertar a consciência dos homens e exaltar o valor imensurável da Cruz. Quando compreendemos a gravidade da ira santa de Deus contra o pecado, o amor demonstrado no Calvário torna-se infinitamente glorioso.',
    'Portanto, todo discípulo de Cristo é impelido pelo amor e pelo temor do Senhor a pregar a tempo e fora de tempo, usando a Lei de Deus para mostrar a culpa moral do pecador e a graça graciosa para apontar a redenção em Jesus Cristo.'
  ]
};

export const FEATURED_ARTICLE: Article = {
  id: 'como-responder-cetico-biblia',
  title: 'Como responder a alguém que não crê que a Bíblia seja a Palavra de Deus',
  author: 'Ray Comfort',
  date: '1 de Setembro, 2026',
  category: 'Apologética',
  secondaryCategory: 'Bíblia',
  imageUrl:
    'https://lh3.googleusercontent.com/aida-public/AB6AXuCv4H3m1qEGQOnNsY8vFJCURGGV6dTvKxOFm5A_T1gSJ9_3YXJ-8tsbS_ifRD1UYRmW9lAwoZZ7fmT_evZDs5Pfwe-Y24ORH5APWgLlOnLGjwhCsLnxFyV8Nm5DvQCr8iiZYuRJ5rpj2uERWmW97bWSI4Q0dxrYMLMpoaNanxRd4KbmQlkYUJYZrVtK2dE3_s-56mCAR58HFhvL805L5bNjF43q-pkxngT1EXSoT0MbXsjxcK97lVx_',
  imageAlt:
    'Bíblia histórica encadernada em couro banhada pela suave luz da manhã.',
  excerpt:
    'Para cada argumento razoável que você apresentar, o cético tentará responder apontando supostas atrocidades e injustiças que encontra nas Escrituras. Saiba como desarmar objeções com a Lei moral e a graça de Deus, conduzindo a mente da controvérsia esterilizada direto à consciência pecadora.',
  tags: ['#PerguntasDifíceis', '#Testemunho', '#EvangelismoDeRua'],
  content: [
    'Muitas vezes, ao testemunhar nas ruas ou no ambiente de trabalho, nos deparamos com pessoas que dizem: "A Bíblia foi escrita por homens; por que eu deveria confiar nela?".',
    'O instinto comum de muitos cristãos é entrar em discussões intelectuais complexas sobre arqueologia, datação por carbono ou crítica textual. Embora a evidência histórica seja vasta e irrefutável, a verdadeira raiz do ceticismo não é intelectual — é moral.',
    'Como o apóstolo Paulo escreveu em Romanos 1, os homens retêm a verdade pela injustiça. Eles não rejeitam a Bíblia porque faltam evidências de que Deus existe, mas porque a revelação de Deus exige prestação de contas moral.',
    'A melhor maneira de dialogar com alguém que duvida da autoridade da Bíblia é fazer o que Jesus fez: dirigir a conversa à consciência. Pergunte educadamente: "Você já quebrou os Dez Mandamentos? Você já mentiu, furtou algo, ou usou o nome de Deus em vão?".',
    'A Lei de Deus atua como um espelho espiritual infalível. Quando a pessoa reconhece sua própria condição diante do Criador Justo e Santo, as objeções filosóficas começam a se dissipar, abrindo espaço para a mensagem graciosa do sacrifício redentor de Jesus Cristo na cruz.'
  ]
};

export const TRAINING_RESOURCES: TrainingResource[] = [
  {
    id: 'edeb',
    title: 'Escola de Evangelismo Bíblico Online (EDEB)',
    category: 'Curso Oficial',
    badgeColor: 'tertiary',
    imageUrl:
      'https://lh3.googleusercontent.com/aida-public/AB6AXuDY_dBFAM-aBVBReiInF6vd0ZvLRTSiAIpzckXyiQW54ShSQh9G8OV_Ih1hnKuOBOpxEbLTm85VXF8NXA-l9xsW5Hs5IBS7F6JquVGSaWMGKX-onEuL_Ly-332fZZ_YTvX7z3opcBEkl7SYN-ANMVevqGN2f9hMFMqDPMsFVZfnmo3rOP-XTl5by7E06qhT5UXtXjfbAmiW8XjwDCHEUs5dHD3Gw83VSjd6HBbIx0nMdsxtM5__ANcn',
    imageAlt: 'Ambiente de estudo bíblico digital com cadernos e módulos de ensino.',
    description:
      'Na Escola de Evangelismo Bíblico, você aprenderá de forma dinâmica e prática a compartilhar sua fé e o Evangelho de maneira simples, eficaz e bíblica, exatamente como nosso Senhor Jesus Cristo fez.',
    linkText: 'Aprenda mais',
    features: ['Mais de 40 videoaulas didáticas', 'Certificado oficial de conclusão', 'Material didático em PDF incluso']
  },
  {
    id: 'passos-do-mestre-intermediario',
    title: 'Os Passos do Mestre - Intermediário',
    category: 'Avançado',
    badgeColor: 'secondary',
    imageUrl:
      'https://lh3.googleusercontent.com/aida-public/AB6AXuDZgYSg2x4zfI6nlk6GC-1kF48FGgE_X1EXFmgfptAYw9B6OIG8tVW3jIXS-ZKwVGlLpF2NhKFCtUTOzRTwkKv8cfMpPJ_zYj1b95DRJIyZvPPUKTthArqF9nacmRLah-vhATaN0ZDc489sumb5VNmO0VLhzvBokzRJJsCSe-epMMP8QEqSPunWm-5mvlXIYMsDC9THlTB4kZw1lUi-Ybe_CilOVXVNqg_G_-cxkbMuUfZopaxmWl8v',
    imageAlt: 'Evangelismo prático em praça pública com diálogo bíblico.',
    description:
      'O próximo nível do treinamento bíblico com as melhores mensagens, análises de diálogos e situações reais de evangelismo de impacto nas ruas para formar líderes evangelistas.',
    linkText: 'Aprenda mais',
    features: ['Análise de 50 diálogos reais', 'Vencendo o medo da rejeição', 'Evangelismo em universidades e praças']
  },
  {
    id: 'folheto-nota-1-milhao',
    title: 'Folheto: A Nota de Um Milhão de Dólares',
    category: 'Folheto Clássico',
    badgeColor: 'neutral',
    imageUrl:
      'https://lh3.googleusercontent.com/aida-public/AB6AXuBABokKBr2UQLQQt6wu98P4587oajgZSbLRdyxvz0yrwZpN1DRFWK7Xl4W5AUSa8zwqiAqJWM0GRhpDHHJ6bRsC_H_uqsO5IoyahrjalcaIvbRk-vHQ9tKTwVhQQtlsW0KGJKbS3oXOIUQNWf02VBylyGIXkhC4Rri3mLxqAihBtAY-NOvM3rH1vAwyjAi8kzJPcxlzHrenOdFfa2EdzshEvaxLaYdA2x05o2QfdXWm9qr3xwKXaYyg',
    imageAlt: 'Exposição de folhetos evangelísticos clássicos em alta qualidade.',
    description:
      'O folheto mais popular do ministério que desperta imediata curiosidade e abre portas sem barreiras para conversas profundas e inesquecíveis sobre a vida eterna.',
    linkText: 'Aprenda mais',
    features: ['Mais de 250 milhões distribuídos no mundo', 'Design chamativo de alta qualidade', 'Exposição clara da Lei e da Graça']
  },
  {
    id: 'passos-do-mestre-kids',
    title: 'Passos do Mestre Kids & Albert Brainstein',
    category: 'Infantil',
    badgeColor: 'tertiary',
    imageUrl:
      'https://lh3.googleusercontent.com/aida-public/AB6AXuCkGDpcM8AQG4grcXzxindosHwgETRkap4sERf4dKF93-TZF3b-4UvO_ca03RVJYdsI_xdOlO-JqKwQAF4cUWmQ5co_M-G3YPyISyKUeAL55yO_rRLURxcMF69sBlaLz8R503IV2FMW3G6sh1Ezv1uAcIh7ymgwlJuG0u_w6wykdslIcHpt5zy1y-mjUnnZFGVfU1rYLXoWSxdA0uejhGEi6hM4FShqRINsgIMuBAXuO3Y4p5393BoK',
    imageAlt: 'Livros ilustrados e atividades para ministério infantil.',
    description:
      'Recursos pedagógicos ilustrados criados para ensinar com alegria os Dez Mandamentos e o sacrifício redentor de Cristo para a nova geração em formação.',
    linkText: 'Aprenda mais',
    features: ['Histórias ilustradas divertidas', 'Passatempos bíblicos e memorização', 'Guia para pais e professores da EBD']
  }
];

export const RECENT_ARTICLES: Article[] = [
  {
    id: 'jesus-condenou-homossexualidade',
    title: 'Jesus condenou a homossexualidade no Novo Testamento?',
    author: 'Living Waters Brasil',
    date: '27 de Ago, 2026',
    category: 'Apologética Bíblica',
    imageUrl:
      'https://lh3.googleusercontent.com/aida-public/AB6AXuALPn8lKv4ucjXQUDa9A23plfC_N1vng9tkprhQPwnDCyUc0HU3M4mUzcwN3Tnm7qd0vp7uLu2vkdAQWryoiICIqqmOaJ_LF5_EVGauWh1af-Q_XnLJLO9Eiqy9FEhcPAA8YLpxduLlwGYV5QX7g-O8SdQC75RXyB_YSzW5Bu9lS8gtgEKBlXatl-8PDzERy9fd_bX_mLveE9-0qTJJ-9ulqp3O6ZpQVxELBgocJBWpdheiDYbldNRJ',
    imageAlt: 'Manuscritos do Novo Testamento grego iluminados sobre mesa de madeira.',
    excerpt:
      'Uma análise bíblica e exegética precisa dos ensinos do Senhor Jesus Cristo sobre casamento, sexualidade e o amoroso chamado à redenção.',
    tags: ['#TeologiaBíblica', '#Família', '#Graça'],
    content: [
      'Frequentemente ouvimos a alegação: "Jesus nunca falou expressamente sobre homossexualidade nos Evangelhos". Essa afirmação ignora o contexto teológico em que Cristo ensinou.',
      'Em Mateus 19:4-6, quando questionado sobre o casamento, Jesus remonta diretamente à criação original em Gênesis: "Não lestes que aquele que os criou no princípio macho e fêmea os fez?". Ele reafirma o matrimônio como aliança sagrada entre um homem e uma mulher.',
      'Além disso, Jesus condenou repetidamente a "porneia" (imoralidade sexual), termo abrangente na lei mosaica que incluía qualquer união fora dos limites do casamento monogâmico bíblico.',
      'Entretanto, a mensagem cristã nunca termina em condenação: em Cristo há perdão, purificação e renovação para qualquer pecador que se arrepende e crê.'
    ]
  },
  {
    id: 'mefibosete-mesa-do-rei',
    title: 'Mefibosete e a mesa do rei: uma imagem viva da graça de Deus',
    author: 'Ray Comfort',
    date: '25 de Ago, 2026',
    category: 'Graça & Redenção',
    imageUrl:
      'https://lh3.googleusercontent.com/aida-public/AB6AXuAynvvuL43jSeqbzY65eeu5AkuucuOkpwE1XfWdEA9U6yYMNm_HkJl3TUeuhtPc7JA67WrgdMhVlAFt9MbgIq5rOE2g06rebTHPSnXAcgZZ1jqt95rMyEyX3Y0rdN7Yh9m0q00IiB7dUugO5pFhc8cAS6Qf1dqhFEmaw-j-y9fDsihD0Zx-7cClrhYLm9zpv6oGwLTmDR6N0-5bd4tjeKFITN4rq65x2thA1fGiyPLOzc2APVgnHfxv',
    imageAlt: 'Mesa de banquete real antiga com cálices e toalha de linho.',
    excerpt:
      'Como homens quebrados e incapacitados pelo pecado são acolhidos no banquete eterno não por méritos próprios, mas por causa do Filho.',
    tags: ['#Graça', '#Aliança', '#Salvação'],
    content: [
      'Em 2 Samuel 9, encontramos uma das mais belas narrativas tipológicas de todo o Antigo Testamento. Davi indaga: "Resta ainda alguém da casa de Saul, para que eu use de bondade para com ele por amor de Jônatas?".',
      'Mefibosete, coxo de ambos os pés, vivia em Lo-Debar, uma terra árida e esquecida. Ele não tinha nada a oferecer ao rei, exceto sua fragilidade e medo.',
      'Contudo, Davi o chama pelo nome, restaura suas terras e diz: "Tu comerás pão sempre à minha mesa". O rei não acolheu Mefibosete por causa da força ou beleza dele, mas pela aliança de amor que havia selado com Jônatas.',
      'Assim fez Deus conosco através de Jesus Cristo: estávamos espiritualmente aleijados pelo pecado, mas fomos feitos filhos e assentados à mesa do Rei Eterno por causa dos méritos do Salvador.'
    ]
  },
  {
    id: 'ela-se-dizia-woke-mas-evangelho',
    title: "Ela se dizia cristã e 'woke', mas o Evangelho abriu seus olhos",
    author: 'Living Waters Brasil',
    date: '20 de Ago, 2026',
    category: 'Testemunho',
    imageUrl:
      'https://lh3.googleusercontent.com/aida-public/AB6AXuDKQ3qffdDFBD3q607rfXuQElYQYsFRylrlsdGKrDDvAaOdL-GNPlCpzAcEhEkqBtjrWMtDaXRKXRr2pwRWEXrcaPA8O5X0wxbgUZB4MQW9ZUJ9z3UWAhXKnrfmf3kq5qnpOGvz2cquIwOgOxFWyYsyPZkMcLuhadLOUnCt0kosj5f7rwiHVZ_7641onQ4JkudNZNzuZnqO1M0UHgAQ5cL99iImXtGF980qX06RIX5F15z1QOZlcB1L',
    imageAlt: 'Jovem estudante universitária ouvindo pensativa em banco de praça.',
    excerpt:
      'O testemunho emocionante de uma conversa nas ruas de São Paulo onde a Lei de Deus dissipou ilusões morais e revelou a necessidade do Salvador.',
    tags: ['#TestemunhoReal', '#Consciência', '#Verdade'],
    content: [
      'Durante uma de nossas ações evangelísticas na Avenida Paulista, nossa equipe conheceu Camila, uma estudante universitária de 23 anos.',
      'Ela se identificava com ideologias seculares de justiça social e considerava o cristianismo tradicional obsoleto. Porém, quando fizemos o teste dos Dez Mandamentos de forma cordial e sincera, a atmosfera mudou.',
      'Ao examinar o 9º Mandamento (mentira), o 7º (pureza do coração) e o 1º (amor a Deus acima de tudo), Camila admitiu em lágrimas que nunca havia percebido sua real culpabilidade diante de Deus.',
      'Naquele dia, o Evangelho da graça tocou seu coração. Ela descobriu que a verdadeira justiça não vem de ativismos humanos, mas da cruz de Cristo.'
    ]
  },
  {
    id: 'por-que-aposentadoria-e-importante',
    title: 'Por que a aposentadoria é mais importante do que imaginamos',
    author: 'Living Waters Brasil',
    date: '2 de Jul, 2026',
    category: 'Vida Cristã',
    imageUrl:
      'https://lh3.googleusercontent.com/aida-public/AB6AXuAsC1_R60ylckYs66nUE2hYSJaKh1OZBIw1DEPmIk15b-8pvIz8e5SQR64Lyl5fYaxP6_9P42nBvrYx8gvJ89umOOw7XobDagII4BoP8NahVwR7Fz90Drrth1zQceVsEtbpvWmS9DxKNRsYzhZIJEmCU4U447wnprm-JCN8nJ7Ohizk1SsE9MybNv1xZKlppLJ4DMKRxLMw2sy470ujETnzXsm-6utiKbpX8rt4twlskU86t3eGIpAT',
    imageAlt: 'Idoso cristão ensinando com ternura e dedicação.',
    excerpt:
      'A terceira idade não é o término do ministério cristão, mas a época ideal para avançar a Grande Comissão com liberdade, maturidade e oração.',
    tags: ['#Maturidade', '#Missões', '#Legado'],
    content: [
      'A sociedade mundana encara a aposentadoria como uma estação de mero descanso passivo e entretenimento trivial. No entanto, o cristão sabe que a missão nunca se encerra nesta vida terrena.',
      'Irmãos idosos possuem aquilo que os mais jovens frequentemente almejam: sabedoria provada pelo tempo, estabilidade de convicções e, muitas vezes, maior flexibilidade de horários para orar, discipular e distribuir literaturas bíblicas.',
      'Grandes avivamentos ao longo da história foram sustentados pela intercessão fervorosa e pelo discipulado pessoal exercido por homens e mulheres maduros na fé.',
      'Incentivamos cada crente na terceira idade a abraçar essa fase como o clímax do seu serviço ao Reino de Deus.'
    ]
  },
  {
    id: 'sodoma-nossos-dias-cultura-secular',
    title: 'A Sodoma dos nossos dias: o desafio da cultura secular',
    author: 'Ray Comfort',
    date: '30 de Jun, 2026',
    category: 'Alerta Bíblico',
    imageUrl:
      'https://lh3.googleusercontent.com/aida-public/AB6AXuBOU0ros6ToXanCNJpBAi46WEj4n8Rms8kAWVp_YRbP7yJojq48hPyqOtDz8kLEhhd5_dbYFgJ9iwIbDGH9tcb-f_n952JOJcAozH3mFal1a47-3MMO_l-sfXUwgXTUsA0-rhbKd2VvBJDtnZu_5IhJjmXSn4IzFntRLo1YErSblMkfA1rtfKETcgj7wTNPILrrj7MJPxEvlTTnHjEGRrQRPJENq9sQtissumk-ekUkedeFB5Ncji_j',
    imageAlt: 'Horizonte metropolitano com nuvens dramáticas e raios de sol penetrando a tempestade.',
    excerpt:
      'Como a Igreja deve responder à normalização da imoralidade sem ódio nem acomodação, proclamando a verdade com graça implacável.',
    tags: ['#Cultura', '#Fidelidade', '#Profético'],
    content: [
      'Em tempos de relativismo agudo, quando o mal é chamado de bem e o bem de mal, os cristãos enfrentam a tentação de se isolar em guetos ou capitular ante a pressão pública.',
      'A cidade de Sodoma não ruiu apenas pela iniquidade generalizada, mas pela indiferença daqueles que poderiam ter sido arautos da justiça.',
      'A postura do crente deve ser idêntica à de Cristo: chorar pela cidade com o coração quebrantado, enquanto proclama sem rodeios a advertência solene do juízo vindouro e a oferta incondicional de perdão.',
      'A verdade bíblica comunicada em mansidão e profundo respeito tem poder divino para resgatar almas aprisionadas nas garras da cultura dominante.'
    ]
  },
  {
    id: 'pergunta-o-horrorizou-levou-salvacao',
    title: 'Esta pergunta o horrorizou, mas o levou à salvação',
    author: 'Living Waters Brasil',
    date: '25 de Jun, 2026',
    category: 'Método Bíblico',
    imageUrl:
      'https://lh3.googleusercontent.com/aida-public/AB6AXuCrCrsjb-eYAkCNQv01SOgY9uU5bVQdn0gos-EYKPwdbOHp8ck_hJZUHnQaI_6nBgyc8lcTB_uPP1RvHhJ-PUH3GMoLLxOZ6xQULMTCNPFjTOmMkOhsblnCN871LpfNGW1kS_dA6fx1blLBX2KEJUmu8EWZgm8kerdJ09UEtHUjMv2uKeywWh0Q7YQpAPPX3wuEFqYoyJJ9woLkNUbXTqEpfe1a-tKKYeBgX9hJXnVc7odSJpnh4saG',
    imageAlt: 'Detalhe em pedra esculpida com os Dez Mandamentos iluminados.',
    excerpt:
      'Descubra por que usar a Lei de Deus como espelho do coração abre a porta para que o homem reconheça sua sede desesperada pelo Salvador.',
    tags: ['#DezMandamentos', '#Consciência', '#Evangelismo'],
    content: [
      'Você já perguntou a alguém: "Se Deus o julgasse pelos Dez Mandamentos hoje, você seria culpado ou inocente?". Essa única pergunta desarma o falso moralismo e a justiça própria.',
      'A maioria das pessoas crê ser "boa", comparando-se a criminosos hediondos. Mas Deus não nos compara com outros homens; Seu padrão é a santidade perfeita.',
      'Quando o jovem rico correu até Jesus, o Senhor não lhe prometeu felicidade mundana imediata; Ele citou os Mandamentos para expor o ídolo oculto no coração do jovem.',
      'A Lei é o aio que nos conduz a Cristo (Gálatas 3:24). Sem a convicção do pecado gerada pela Lei, a graça torna-se barata e o Evangelho perde sua urgência salvífica.'
    ]
  },
  // Additional archive items shown when clicking "Ver mensagens e artigos anteriores"
  {
    id: 'o-papel-da-oracao-no-evangelismo',
    title: 'O papel decisivo da oração antes de pisar nas ruas',
    author: 'Ray Comfort',
    date: '18 de Jun, 2026',
    category: 'Vida de Oração',
    imageUrl:
      'https://lh3.googleusercontent.com/aida-public/AB6AXuAiRXOgDKce0MZPJkPH-q9YrEL_dhutBgNvfiaMKu4UzF42SqOD_5eragBzlOFOxKeAUTU8mYwpjFZ5asol2_q0ARIfiJF0XrpvHANB0AFqCWAbzoNgjFrIQIakbRI5ZYVRvyrRL1NRrYgYUwZtIrW_E0CY3vrLI1HHqCuhkq04O8J8syB3o6Dl-R5DXLIrn33yr5uOlRPcp4OnTsNZYfuxPyWTAi3J-agXrLWDCHYx7M5MGMP-x1mC',
    imageAlt: 'Momento de oração com Bíblia aberta sob iluminação suave.',
    excerpt:
      'Sem o Espírito Santo, até a melhor teologia se torna mero som metálico. Entenda por que todo testemunho vitorioso começa de joelhos no quarto secreto.',
    tags: ['#Oração', '#EspíritoSanto', '#Fervor'],
    content: [
      'Técnicas e argumentos podem convencer o intelecto, mas somente a ação regeneradora do Espírito de Deus pode ressuscitar um coração morto em delitos e pecados.',
      'Antes de sair às praças, ore fervorosamente para que Deus quebre as fortalezas da incredulidade e conceda aos evangelistas palavras cheias de graça e autoridade.'
    ]
  },
  {
    id: 'como-vencer-o-medo-do-homem',
    title: 'Como vencer o medo do homem ao compartilhar a fé',
    author: 'Living Waters Brasil',
    date: '10 de Jun, 2026',
    category: 'Capacitação',
    imageUrl:
      'https://lh3.googleusercontent.com/aida-public/AB6AXuDY_dBFAM-aBVBReiInF6vd0ZvLRTSiAIpzckXyiQW54ShSQh9G8OV_Ih1hnKuOBOpxEbLTm85VXF8NXA-l9xsW5Hs5IBS7F6JquVGSaWMGKX-onEuL_Ly-332fZZ_YTvX7z3opcBEkl7SYN-ANMVevqGN2f9hMFMqDPMsFVZfnmo3rOP-XTl5by7E06qhT5UXtXjfbAmiW8XjwDCHEUs5dHD3Gw83VSjd6HBbIx0nMdsxtM5__ANcn',
    imageAlt: 'Treinamento bíblico e mentoria de evangelistas.',
    excerpt:
      'O temor dos homens arma ciladas, mas quem confia no Senhor está seguro. Dicas práticas e bíblicas para superar o nervosismo inicial ao abordar estranhos.',
    tags: ['#Coragem', '#EvangelismoPrático', '#Fé'],
    content: [
      'O medo de parecer ridículo ou ser rejeitado é a barreira número um que cala a voz dos cristãos modernos.',
      'Quando meditamos na iminência do julgamento final e no amor supremo que Cristo demonstrou por nós ao morrer pelos nossos pecados, nossa timidez é engolida pela compaixão bíblica.'
    ]
  }
];

export const VIDEO_PRODUCTIONS: VideoProduction[] = [
  {
    id: 'em-tudo-pense',
    title: 'Livro Devocional "Em Tudo Pense": Mensagem com Ray Comfort',
    category: 'Devocional Diário',
    duration: '14:22',
    imageUrl:
      'https://lh3.googleusercontent.com/aida-public/AB6AXuCOfbqphuBDrrUzal8e-IsxcTE4u_YxrlD4SAo2fSdqs2FIfDIYkwvejFUkkPdwYJb-wAJkpC2uJ5Mp3DcC2AqoE7gMBA75MB_Wwy1NruMkV8Wwz7xNwDDYAFtUQnoRGMDe_oe_nMDcW6zO7-VODJvkE77mNb573WNtYbU8ft8haero7HFGa_FQUQWhhTztRzlNTwohXwIU9w9L5UnP-SJNLx1FDEhyRcXZ2VXwnrNMTLg8220fh6Vj',
    imageAlt: 'Capa do livro devocional cristão Em Tudo Pense ao lado de xícara de café.',
    youtubeId: 'dQw4w9WgXcQ',
    description:
      'Uma reflexão diária profunda com Ray Comfort sobre guardar a mente, meditar nas coisas celestiais e manter o foco do coração firme nas promessas inabaláveis de Deus.'
  },
  {
    id: 'jesus-em-vermelho',
    title: '"Jesus em Vermelho": O Novo Livro de Ray Comfort (Trailer)',
    category: 'Lançamento',
    duration: '03:45',
    imageUrl:
      'https://lh3.googleusercontent.com/aida-public/AB6AXuBuNI368I_L2qO_AJliod3Sz5dAPvF7axWukbE7SF9ZKHqPlAKsxE6rt7H5_S2MDvgFBFKzrNPj7H33t0_GG3LrAX3PLLvWuI--EqXAupIu9_ZDl69YgBrsUq7C3gqkOkeIk9FvWwtJdiYXife4weNKhUeNdycO-EHEWz6YV_CAhjcQqDN_8-hSYtP-djcFiqOd2NSFUqNae4BL_LBkYr6lnwD3Aw7wBL3jja-BG2aYZY99zdXCvrf-',
    imageAlt: 'Trailer do livro Jesus em Vermelho com letras rubras ancestrais em pergaminho.',
    youtubeId: 'dQw4w9WgXcQ',
    description:
      'Trailer oficial do livro que analisa cuidadosamente cada uma das palavras proferidas por Jesus registradas nos Evangelhos, destacando Sua autoridade divina e chamado ao discipulado radical.'
  },
  {
    id: 'fatos-cientificos-na-biblia',
    title: '"Fatos Científicos na Bíblia - O Filme": Investigação Bíblica',
    category: 'Documentário Completo',
    duration: '48:10',
    imageUrl:
      'https://lh3.googleusercontent.com/aida-public/AB6AXuCFkh97k8o4drdGrYoNqP1b_Oyqv8Z3K03w5x_u0U8_VwkKuWJcSCQ1f0jOuAfgpfFy_cCW4Hy6zZZ-YvyKgRnEfL1ld_i8A0EFtd8dcVrBpGSznKhtyFt8TmxvpU3PoEbUYClb1rrIX6aUuOf2VrVmj4jqQ5U_BNYb2-xhL-McbOGHiKKK7-BJXEKB4N5gH3OWtPkJtOo17rwkbIv1OGSkO4dtsvKxAukdYDhZL6l3ZtsMo-xuv-98',
    imageAlt: 'Montagem visual científica sobre astronomia e DNA para documentário bíblico.',
    youtubeId: 'dQw4w9WgXcQ',
    description:
      'Documentário investigativo premiado que demonstra evidências científicas antecipadas nas Escrituras milênios antes das descobertas modernas, provando a infalibilidade da inspiração divina.'
  },
  {
    id: 'living-waters-internacional',
    title: 'Living Waters: Ministério Internacional de Evangelismo Bíblico',
    category: 'Visão Ministerial',
    duration: '08:15',
    imageUrl:
      'https://lh3.googleusercontent.com/aida-public/AB6AXuC7Nvry2qM0XhfdoU58vccnODw7ufKsiO2i6omom2eTIfRLFCz_9AL5GSEBFDpZ3EycOQ5sv-K43eqPEuApNR31Ddx5UQqSEiruzJdYuPI_qwcjR53wpe1qRvUAlxrRML_vV2Ju1gbBqkHibDYAtND3z0xXeDCCH5DcEzu8PdJ15dSDfXeq5rxXYhpmoTSAcB9l7mrc1P67xiVJpjDkDtIepz6FRFAqHvPcDNyEzSXBf8WqJEfnQlaI',
    imageAlt: 'Mapa global sobreposto com pontos de alcance e multidões ouvindo o Evangelho.',
    youtubeId: 'dQw4w9WgXcQ',
    description:
      'Conheça a história e o impacto global do ministério fundado por Ray Comfort, que há mais de 40 anos equipa a Igreja de Jesus Cristo com literaturas, programas televisivos e materiais de apologética.'
  }
];

export const NAV_ITEMS: NavItem[] = [
  {
    label: 'QUEM SOMOS',
    items: [
      { label: 'Quem Somos', href: '#quem-somos', description: 'Visão, propósito e liderança pastoral' },
      { label: 'Breve História', href: '#breve-historia', description: 'Mais de 4 décadas servindo o Reino' },
      { label: 'Declaração de Fé', href: '#declaracao-de-fe', description: 'Nossa fidelidade doutrinária bíblica' },
      { label: 'Contate-nos', href: '#contato', description: 'Fale com nossa equipe ministerial' }
    ]
  },
  {
    label: 'EQUIPE-SE',
    items: [
      { label: 'Blog & Articulistas', href: '#blogger-section', description: 'Posts de Ray Comfort, E.Z. Zwayne e Mark Spence' },
      { label: 'Escola Online de Evangelismo', href: '#escola-online', description: 'Treinamento bíblico passo a passo' },
      { label: 'Artigos & Ensino', href: '#artigos', description: 'Apologética, teologia e conselhos práticos' },
      { label: 'Vídeos', href: '#videos', description: 'Pregações, diálogos de rua e debates' },
      { label: 'Áudio & Podcasts', href: '#audio-podcasts', description: 'Mensagens edificantes para o seu dia a dia' },
      { label: 'Ferramentas & Folhetos', href: '#ferramentas-folhetos', description: 'Tratados evangelísticos de alto impacto' },
      { label: 'Filmes & Documentários', href: '#filmes', description: 'Produções cinematográficas evangelísticas' }
    ]
  },
  {
    label: 'BRASIL & AMÉRICA LATINA',
    items: [
      { label: 'Agência Latino-Americana', href: '#agencia-latino-americana', description: 'Distribuição e apoio ministerial local' },
      { label: 'Livrarias & Distribuidores', href: '#livrarias-distribuidores', description: 'Onde adquirir livros e folhetos' },
      { label: 'Embaixadores da Mensagem', href: '#embaixadores', description: 'Rede de evangelistas voluntários' }
    ]
  },
  { label: 'BLOG', href: '#blogger-section' },
  { label: 'TELEVISÃO', href: '#televisao' },
  { label: 'EVENTOS', href: '#eventos' },
  { label: 'LOJA', href: '#loja' }
];
