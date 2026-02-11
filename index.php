<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Vortex Digital | Marketing que Transforma</title>
  <meta name="description" content="Vortex Digital - Agência de marketing digital especializada em performance, SEO e mídia paga." />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet" />


  <script src="https://unpkg.com/lucide@latest"></script>

  <link rel="stylesheet" href="css/style.css" />
</head>
<body>

  <header class="header" id="header">
    <div class="container header__inner">
      <!-- Logo -->
      <a href="#" class="header__logo">
        <div class="header__logo-icon">V</div>
        <span class="header__logo-text">Vortex</span>
      </a>

      <nav class="header__nav" id="nav-desktop">
        <a href="#inicio" class="header__link">Início</a>
        <a href="#sobre" class="header__link">Sobre</a>
        <a href="#servicos" class="header__link">Serviços</a>
        <a href="#faq" class="header__link">FAQ</a>
        <a href="#contato" class="header__link">Contato</a>
      </nav>

      <a href="tel:+5548999999999" class="header__phone">
        <i data-lucide="phone" class="header__phone-icon"></i>
        (48) 9 9999-9999
      </a>

      <!-- Mobile -->
      <button class="header__menu-btn" id="menu-toggle" aria-label="Abrir menu">
        <i data-lucide="menu" id="menu-icon-open"></i>
        <i data-lucide="x" id="menu-icon-close" style="display:none"></i>
      </button>
    </div>

    <nav class="header__mobile-nav" id="mobile-nav">
      <a href="#inicio" class="header__mobile-link">Início</a>
      <a href="#sobre" class="header__mobile-link">Sobre</a>
      <a href="#servicos" class="header__mobile-link">Serviços</a>
      <a href="#faq" class="header__mobile-link">FAQ</a>
      <a href="#contato" class="header__mobile-link">Contato</a>
      <a href="tel:+5548999999999" class="header__mobile-link header__mobile-link--phone">
        <i data-lucide="phone"></i>
        (48) 9 9999-9999
      </a>
    </nav>
  </header>

  <main>
    <section class="hero" id="inicio">
      
      <div class="hero__blob hero__blob--1"></div>
      <div class="hero__blob hero__blob--2"></div>

      <div class="container hero__inner">
        <!-- Left Content -->
        <div class="hero__content scroll-animate">
          <span class="hero__badge">🚀 Marketing Digital que Transforma</span>
          <h1 class="hero__title">
            Leve sua marca para o
            <span class="gradient-text">próximo nível</span>
          </h1>
          <p class="hero__subtitle">
            Estratégias digitais sob medida para acelerar o crescimento do seu negócio.
            Resultados reais com dados, criatividade e performance.
          </p>
          <div class="hero__stats">
            <div class="hero__stat">
              <span class="hero__stat-value">500+</span>
              <span class="hero__stat-label">Clientes ativos</span>
            </div>
            <div class="hero__stat-divider"></div>
            <div class="hero__stat">
              <span class="hero__stat-value">98%</span>
              <span class="hero__stat-label">Satisfação</span>
            </div>
            <div class="hero__stat-divider"></div>
            <div class="hero__stat">
              <span class="hero__stat-value">10x</span>
              <span class="hero__stat-label">ROI médio</span>
            </div>
          </div>
        </div>

        <!-- Right Form -->
        <div class="hero__form-wrapper scroll-animate-right">
          <div class="hero__form-card">
            <h2 class="hero__form-title">Fale com um especialista</h2>
            <p class="hero__form-desc">Preencha o formulário e receba uma análise gratuita</p>

            <?php if (isset($_GET['success'])): ?>
              <div class="form-success">
                Formulário enviado com sucesso! Entraremos em contato em breve.
              </div>
            <?php endif; ?>


            <form id="contact-form" class="hero__form" method="POST" action="backend/submit.php">
              <input type="text" name="nome" placeholder="Seu nome" required class="hero__input" />
              <input type="email" name="email" placeholder="Seu e-mail" required class="hero__input" />
              <input type="tel" name="telefone" placeholder="DDD + Telefone" class="hero__input" />
              <textarea name="mensagem" placeholder="Como podemos te ajudar?" rows="3" class="hero__textarea"></textarea>
              <button type="submit" class="btn btn--accent btn--full pulse-glow">
                Quero minha análise gratuita
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- About -->
    <section class="about" id="sobre">
      <div class="container about__inner">
        <!-- Image -->
        <div class="about__image-wrapper scroll-animate-left">
          <img
            src="assets/about-image.jpg"
            alt="Equipe Vortex Digital trabalhando em projetos de marketing"
            class="about__image"
            loading="lazy"
          />
          <div class="about__image-overlay"></div>
          <div class="about__image-badge">
            <span class="about__badge-label">Desde</span>
            <span class="about__badge-value">2018</span>
          </div>
        </div>

        <div class="about__content scroll-animate-right">
          <span class="section-label">Quem Somos</span>
          <h2 class="section-title">
            Transformamos dados em
            <span class="text-primary">resultados reais</span>
          </h2>
          <p class="about__text">
            A Vortex Digital é uma agência especializada em performance e estratégia digital.
            Combinamos tecnologia de ponta, análise de dados e criatividade para entregar
            campanhas que realmente convertem.
          </p>
          <p class="about__text">
            Nossa equipe multidisciplinar já ajudou mais de 500 empresas a atingirem seus
            objetivos de crescimento, com estratégias personalizadas que vão desde SEO e
            mídia paga até automação de marketing e branding.
          </p>
          <div class="about__stats">
            <div class="about__stat-card">
              <span class="about__stat-value">1.200+</span>
              <span class="about__stat-label">Projetos entregues</span>
            </div>
            <div class="about__stat-card">
              <span class="about__stat-value">45+</span>
              <span class="about__stat-label">Profissionais</span>
            </div>
            <div class="about__stat-card">
              <span class="about__stat-value">8</span>
              <span class="about__stat-label">Países atendidos</span>
            </div>
            <div class="about__stat-card">
              <span class="about__stat-value">23</span>
              <span class="about__stat-label">Prêmios ganhos</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Serviços -->
    <section class="benefits" id="servicos">
      <div class="container">
        
        <div class="benefits__header scroll-animate">
          <span class="section-label">Nossos Diferenciais</span>
          <h2 class="section-title">Com a Vortex você tem:</h2>
          <p class="section-desc">Tudo que você precisa para dominar o digital e superar a concorrência</p>
        </div>

        <div class="benefits__grid stagger-children">
          <div class="benefit-card scroll-animate">
            <div class="benefit-card__icon">
              <i data-lucide="trending-up"></i>
            </div>
            <h3 class="benefit-card__title">Crescimento Acelerado</h3>
            <p class="benefit-card__desc">
              Estratégias orientadas por dados para escalar seu negócio de forma sustentável e previsível.
            </p>
          </div>

          <div class="benefit-card scroll-animate">
            <div class="benefit-card__icon">
              <i data-lucide="target"></i>
            </div>
            <h3 class="benefit-card__title">Tráfego Qualificado</h3>
            <p class="benefit-card__desc">
              Atraia o público certo com campanhas segmentadas que geram leads prontos para converter.
            </p>
          </div>

          <div class="benefit-card scroll-animate">
            <div class="benefit-card__icon">
              <i data-lucide="zap"></i>
            </div>
            <h3 class="benefit-card__title">Resultados Rápidos</h3>
            <p class="benefit-card__desc">
              Implementação ágil com resultados visíveis já nas primeiras semanas de campanha.
            </p>
          </div>

          <div class="benefit-card scroll-animate">
            <div class="benefit-card__icon">
              <i data-lucide="bar-chart-3"></i>
            </div>
            <h3 class="benefit-card__title">Relatórios Transparentes</h3>
            <p class="benefit-card__desc">
              Dashboards em tempo real para acompanhar cada centavo investido e seus retornos.
            </p>
          </div>

          <div class="benefit-card scroll-animate">
            <div class="benefit-card__icon">
              <i data-lucide="users"></i>
            </div>
            <h3 class="benefit-card__title">Suporte Dedicado</h3>
            <p class="benefit-card__desc">
              Equipe exclusiva para seu projeto com reuniões semanais de alinhamento e estratégia.
            </p>
          </div>

          <div class="benefit-card scroll-animate">
            <div class="benefit-card__icon">
              <i data-lucide="shield"></i>
            </div>
            <h3 class="benefit-card__title">Garantia de Resultados</h3>
            <p class="benefit-card__desc">
              Compromisso com metas claras e mensuráveis. Se não entregamos, você não paga.
            </p>
          </div>
        </div>

        <div class="benefits__cta scroll-animate">
          <a href="#contato" class="btn btn--accent">Começar agora →</a>
        </div>
      </div>
    </section>

    <!-- FAQ -->
    <section class="faq" id="faq">
      <div class="container faq__container">
        
        <div class="faq__header scroll-animate">
          <span class="section-label">Dúvidas</span>
          <h2 class="section-title">Perguntas Frequentes</h2>
        </div>

        <div class="faq__list stagger-children">
          <div class="faq__item scroll-animate">
            <button class="faq__question" aria-expanded="false">
              <span>Quando vou começar a ver resultados nas minhas campanhas?</span>
              <i data-lucide="chevron-down" class="faq__chevron"></i>
            </button>
            <div class="faq__answer">
              <p>Os primeiros resultados aparecem entre 2 a 4 semanas após o início das campanhas. Resultados consolidados de SEO podem levar de 3 a 6 meses, enquanto mídia paga gera tráfego imediato.</p>
            </div>
          </div>

          <div class="faq__item scroll-animate">
            <button class="faq__question" aria-expanded="false">
              <span>Qual o investimento mínimo para começar?</span>
              <i data-lucide="chevron-down" class="faq__chevron"></i>
            </button>
            <div class="faq__answer">
              <p>Trabalhamos com planos a partir de R$ 2.000/mês em gestão, mais o investimento em mídia definido conforme seus objetivos. Fazemos uma análise personalizada para recomendar o melhor budget.</p>
            </div>
          </div>

          <div class="faq__item scroll-animate">
            <button class="faq__question" aria-expanded="false">
              <span>Vocês atendem empresas de qualquer segmento?</span>
              <i data-lucide="chevron-down" class="faq__chevron"></i>
            </button>
            <div class="faq__answer">
              <p>Sim! Temos experiência em e-commerce, SaaS, serviços profissionais, educação, saúde e muitos outros. Adaptamos nossas estratégias para cada nicho de mercado.</p>
            </div>
          </div>

          <div class="faq__item scroll-animate">
            <button class="faq__question" aria-expanded="false">
              <span>Como funciona o acompanhamento dos resultados?</span>
              <i data-lucide="chevron-down" class="faq__chevron"></i>
            </button>
            <div class="faq__answer">
              <p>Você terá acesso a dashboards em tempo real, relatórios mensais detalhados e reuniões semanais com seu gestor de conta. Transparência total em cada etapa.</p>
            </div>
          </div>

          <div class="faq__item scroll-animate">
            <button class="faq__question" aria-expanded="false">
              <span>Posso cancelar o contrato a qualquer momento?</span>
              <i data-lucide="chevron-down" class="faq__chevron"></i>
            </button>
            <div class="faq__answer">
              <p>Sim. Não trabalhamos com fidelidade obrigatória. Acreditamos que nossos resultados falam por si. Pedimos apenas 30 dias de aviso prévio para uma transição organizada.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section class="final-cta" id="contato">
      <div class="final-cta__blob final-cta__blob--1"></div>
      <div class="final-cta__blob final-cta__blob--2"></div>

      <div class="container final-cta__inner">
        <!-- Left -->
        <div class="final-cta__content scroll-animate-left">
          <h2 class="final-cta__title">
            Pronto para
            <span class="gradient-text">transformar</span>
            seu negócio?
          </h2>
          <p class="final-cta__text">
            Essa é a sua chance de sair na frente da concorrência. Converse com nossos
            especialistas e descubra o potencial inexplorado do seu negócio digital.
          </p>
        </div>

        <!-- Right Card -->
        <div class="final-cta__card-wrapper scroll-animate-right">
          <div class="final-cta__card">
            <p class="final-cta__card-text">
              Solicite uma análise gratuita e personalizada do seu negócio. Sem compromisso,
              sem pegadinhas. Nossos especialistas vão entrar em contato com você ainda hoje.
            </p>
            <a href="#inicio" class="btn btn--accent btn--full btn--lg">
              Quero minha análise gratuita
            </a>
            <p class="final-cta__card-note">✦ Nossos especialistas respondem em até 2 horas</p>
          </div>
        </div>
      </div>
    </section>
  </main>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="footer__grid">

        <div class="footer__brand">
          <div class="footer__logo">
            <div class="footer__logo-icon">V</div>
            <span class="footer__logo-text">Vortex Digital</span>
          </div>
          <p class="footer__brand-desc">
            Transformando negócios através do marketing digital inteligente desde 2018.
          </p>
        </div>

        <!-- Links -->
        <div class="footer__links">
          <h4 class="footer__heading">Links Rápidos</h4>
          <nav class="footer__nav">
            <a href="#inicio">Início</a>
            <a href="#sobre">Sobre</a>
            <a href="#servicos">Serviços</a>
            <a href="#faq">FAQ</a>
            <a href="#contato">Contato</a>
          </nav>
        </div>

        <!-- Contact Footer -->
        <div class="footer__contact">
          <h4 class="footer__heading">Contato</h4>
          <p>contato@vortexdigital.com.br</p>
          <p>(48) 9 9999-9999</p>
          <p>Florianópolis, SC - Brasil</p>
        </div>
      </div>

      <div class="footer__bottom">
        <p>Vortex Digital &copy; Todos os Direitos Reservados — 2025</p>
        <p>CNPJ 99.999.999/0001-99 · Termos de Uso · Política de Privacidade</p>
      </div>
    </div>
  </footer>

  <!-- JavaScript -->
  <script src="js/main.js"></script>
</body>
</html>
