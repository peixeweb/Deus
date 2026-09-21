# Tema Living Waters Brasil para WordPress

Tema WordPress oficial, leve, moderno e 100% responsivo para a **Living Waters Brasil**.

---

## 📦 Como Instalar no WordPress

### Método 1: Pelo Painel do WordPress (Mais Fácil)
1. Baixe o arquivo **`living-waters-brasil.zip`**.
2. Acesse seu painel administrativo WordPress (ex: `seusite.com.br/wp-admin`).
3. No menu lateral esquerdo, vá em **Aparência > Temas**.
4. Clique no botão **Adicionar Novo** (ou **Adicionar Novo Tema**).
5. Clique em **Carregar Tema** no topo da página.
6. Escolha o arquivo `living-waters-brasil.zip` e clique em **Instalar Agora**.
7. Após a instalação, clique em **Ativar**.

---

### Método 2: Via FTP ou Gerenciador de Arquivos (cPanel / Hospedagem)
1. Extraia a pasta `living-waters-brasil`.
2. Conecte-se ao seu servidor via FTP ou abra o Gerenciador de Arquivos do cPanel.
3. Navegue até o diretório: `wp-content/themes/`.
4. Envie a pasta inteira `living-waters-brasil` para dentro de `wp-content/themes/`.
5. Acesse o Painel WordPress > **Aparência > Temas** e clique em **Ativar**.

---

## 🌟 Recursos e Estrutura Incluídos

- **Hero Cinematográfico**: Banner principal com Ray Comfort, título e botões de ação ("Ler mais" em `#cc5500` e "Assistir Mensagem").
- **Design Sem Formulários**: Arquitetura direta focada em proclamar a mensagem, sem barreiras ou formulários desnecessários.
- **Botão de Doação em `#2875ab` no Topo**: Acesso rápido ao modal de contribuição.
- **Botão "Fazer uma Contribuição" em `#cc5500` no Rodapé**: Destaque harmônico com a identidade visual.
- **Modal de Apoio com Chave PIX**: Cópia com um clique e feedback visual imediato.
- **Área para Bloggers & Articulistas**: Perfis com avatar e biografia de **Ray Comfort**, **E.Z. Zwayne**, **Mark Spence** e **Living Waters Brasil**, com filtro interativo por autor.
- **Pílula do Dia de Ray Comfort**: Citação diária inspiradora com botão de copiar/compartilhar.
- **Grade 3 Colunas de Artigos**: Posts sobre Evangelismo de Rua, Doutrina e Apologética.
- **Multimídia & Vídeos**: Miniaturas e player integrado para documentários premiados (ex: *180 Movie*, *Genius*).
- **Busca Rápida**: Modal de pesquisa acessível no topo.
- **Responsividade Total**: Otimizado para smartphones, tablets e telas widescreen.

---

## 📂 Estrutura de Arquivos do Tema

```text
living-waters-brasil/
├── style.css               # Cabeçalho do tema WordPress e estilos gerais
├── functions.php           # Suporte a miniaturas, menus e scripts
├── header.php              # Topo com navegação, busca e doação #2875ab (sem boneco de perfil)
├── footer.php              # Rodapé completo, links e chamada de contribuição #cc5500
├── front-page.php          # Página inicial completa com todas as seções
├── index.php               # Fallback para arquivos e listagens padrão do WP
├── single.php              # Layout de leitura de post individual com botão PIX
├── page.php                # Modelo de páginas institucionais
├── screenshot.png          # Imagem de pré-visualização do tema no WP Admin
├── assets/
│   ├── css/
│   │   └── main.css        # Estilos modernos completos e compilados
│   ├── js/
│   │   └── main.js         # JavaScript puro (modais, filtros, PIX, drawer)
│   └── images/             # Logotipos e fotos dos articulistas
└── template-parts/
    ├── hero.php            # Seção Hero com botão #cc5500
    ├── featured.php        # Bloco assimétrico (3/5 editorial + 2/5 treinamento)
    ├── recent-posts.php    # Artigos de evangelismo de rua
    ├── bloggers.php        # Área exclusiva de articulistas e blog
    ├── videos.php          # Carrossel/grade multimídia
    ├── modal-donation.php  # Modal com PIX e cópia instantânea
    ├── modal-search.php    # Modal de busca rápida
    ├── modal-article.php   # Modal de leitura imediata
    └── modal-video.php     # Player embutido de vídeo
```

---

## ☕ Suporte & Customização
Desenvolvido com carinho para o ministério **Living Waters Brasil**.
Deus abençoe a proclamação da Sua Palavra!
