<!doctype html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- SEO --}}
    <title>Alexandre Schielke | Desenvolvedor Full-Stack</title>
    <meta name="description" content="Desenvolvedor Full-Stack com experiência desde 2014 em front-end e back-end. Especialista em PHP, Laravel, Vue.js, MySQL e Docker. Disponível para projetos freelance.">
    <meta name="keywords" content="desenvolvedor full-stack, freelancer, PHP, Laravel, Vue.js, MySQL, Docker, Tailwind CSS, desenvolvimento web">
    <meta name="author" content="Alexandre Schielke">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ config('app.url') }}">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ config('app.url') }}">
    <meta property="og:title" content="Alexandre Schielke | Desenvolvedor Full-Stack">
    <meta property="og:description" content="Desenvolvedor Full-Stack com experiência desde 2014. Especialista em PHP, Laravel, Vue.js e MySQL.">
    <meta property="og:image" content="{{ asset('image/fotopng.png') }}">
    <meta property="og:locale" content="pt_BR">

    {{-- Twitter Card --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Alexandre Schielke | Desenvolvedor Full-Stack">
    <meta name="twitter:description" content="Desenvolvedor Full-Stack com experiência desde 2014. Especialista em PHP, Laravel, Vue.js e MySQL.">
    <meta name="twitter:image" content="{{ asset('image/fotopng.png') }}">

    {{-- Schema.org structured data --}}
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Alexandre Schielke",
        "jobTitle": "Desenvolvedor Full-Stack",
        "url": "{{ config('app.url') }}",
        "image": "{{ asset('image/fotopng.png') }}",
        "description": "Desenvolvedor Full-Stack com experiência desde 2014 em front-end e back-end.",
        "knowsAbout": ["PHP", "Laravel", "Vue.js", "MySQL", "Docker", "Tailwind CSS", "HTML", "CSS"]
    }
    </script>

    {{-- Theme --}}
    <meta name="theme-color" content="#171717">

    {{-- Preconnect para recursos externos --}}
    <link rel="preconnect" href="https://kit.fontawesome.com" crossorigin>
    <link rel="preconnect" href="https://ka-f.fontawesome.com" crossorigin>

    {{-- Assets --}}
    @vite('resources/css/app.css')
    <link rel="preload" href="{{ asset('css/style.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ asset('css/style.css') }}"></noscript>
    <script src="https://kit.fontawesome.com/8005c041ac.js" crossorigin="anonymous" defer></script>
    <script src="{{ asset('js/text-animate.js') }}" defer></script>
    <script src="{{ asset('js/animate-scroll.js') }}" defer></script>
    <script src="{{ asset('js/scroll-to-top.js') }}" defer></script>
</head>
<body>

<header class="bg-neutral-900 sticky top-0 z-50 shadow-md" role="banner">
    <div class="container">
        <nav class="flex items-center justify-between py-4" aria-label="Navegação principal">
            <a href="/" class="text-white text-xl font-bold tracking-wide" aria-label="CodeZeus - Página inicial">
                Code<span class="text-yellow-600">Zeus</span>
            </a>
            <ul class="hidden md:flex items-center gap-6 text-sm text-neutral-300" role="list">
                <li><a href="#about" class="hover:text-yellow-600 transition-colors">Sobre</a></li>
                <li><a href="#skill" class="hover:text-yellow-600 transition-colors">Habilidades</a></li>
                <li><a href="#projects" class="hover:text-yellow-600 transition-colors">Projetos</a></li>
                <li><a href="#journey" class="hover:text-yellow-600 transition-colors">Jornada</a></li>
                <li>
                    <a href="#contact" class="bg-yellow-600 text-neutral-900 font-semibold px-4 py-2 rounded-lg hover:bg-yellow-500 transition-colors">
                        Contato
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<main id="conteudo-principal">

    <section id="introduction" aria-labelledby="intro-heading" class="bg-neutral-800 py-16 md:py-24">
        <div class="container">
            <div class="flex justify-between items-center gap-8">
                <div class="w-full sm:w-3/5 md:w-[55%]">
                    <span class="inline-flex items-center gap-2 bg-yellow-600/10 border border-yellow-600/30 text-yellow-500 text-xs font-medium px-3 py-1 rounded-full mb-4">
                        <span class="w-1.5 h-1.5 rounded-full bg-yellow-500 animate-pulse"></span>
                        Disponível para projetos
                    </span>
                    <h1 id="intro-heading" class="text-white text-3xl sm:text-4xl lg:text-6xl font-bold leading-tight">
                        <strong class="text-yellow-600">Desenvolvedor</strong><br>
                        Full-Stack para o seu projeto.
                    </h1>
                    <p id="text" class="mt-4 text-neutral-400 text-lg min-h-[2rem]" aria-live="polite"></p>
                    <div class="flex flex-wrap gap-3 mt-8">
                        <a href="#projects" class="inline-flex items-center gap-2 bg-yellow-600 text-neutral-900 font-semibold px-5 py-2.5 rounded-lg hover:bg-yellow-500 transition-colors">
                            Ver projetos
                            <i class="fa-solid fa-arrow-right text-sm" aria-hidden="true"></i>
                        </a>
                        <a href="#contact" class="inline-flex items-center gap-2 border border-neutral-600 text-neutral-300 px-5 py-2.5 rounded-lg hover:border-yellow-600 hover:text-yellow-600 transition-colors">
                            Entre em contato
                        </a>
                    </div>
                </div>
                <div class="animate profile hidden relative w-[30rem] h-[30rem] rounded-full sm:block sm:w-40 sm:h-40 md:w-60 md:h-60 lg:w-80 lg:h-80 xl:w-96 xl:h-96" aria-hidden="true">
                    <img class="profile-img w-[90%] rounded-full border-4 border-yellow-600"
                         src="{{ asset('image/fotopng.png') }}"
                         alt="Foto de Alexandre Schielke, Desenvolvedor Full-Stack"
                         width="384" height="384"
                         fetchpriority="high" loading="eager">
                    <span class="span-img absolute top-[45%] left-[45%] w-full h-full rounded-full border-t-4 border-t-neutral-800 border-b-4 border-b-neutral-800 border-l-4 border-l-yellow-600 border-r-4 border-r-yellow-600 transform -translate-y-1/2 -translate-x-1/2 rotate-0"></span>
                </div>
            </div>
        </div>
    </section>

    <section id="about" aria-labelledby="about-heading" class="bg-white py-14 md:py-20 xl:py-28">
        <div class="container">
            <div class="flex justify-center items-center mb-8 sm:hidden" aria-hidden="true">
                <div class="profile-about relative w-48 h-48 rounded-full">
                    <img class="profile-img-about w-[89%] rounded-full border-4 border-yellow-600"
                         src="{{ asset('image/fotopng.png') }}"
                         alt="Foto de Alexandre Schielke"
                         width="192" height="192">
                    <span class="span-img-about absolute top-[45%] left-[45%] w-full h-full rounded-full border-t-4 border-t-white border-b-4 border-b-white border-l-4 border-l-yellow-600 border-r-4 border-r-yellow-600 transform -translate-y-1/2 -translate-x-1/2 rotate-0"></span>
                </div>
            </div>

            <div class="max-w-3xl mx-auto text-center">
                <p class="text-yellow-600 text-sm font-semibold uppercase tracking-widest mb-2">Sobre mim</p>
                <h2 id="about-heading" class="text-neutral-800 text-2xl lg:text-4xl font-bold mb-6">
                    Olá, me chamo <span class="text-yellow-600">Alexandre Schielke</span>.
                </h2>
                <p class="text-neutral-600 leading-relaxed lg:text-lg">
                    Desde 2014, venho explorando tanto o front-end quanto o back-end. Minha trajetória inclui experiências em empresas de pequeno, médio e grande porte. Hoje, me considero um desenvolvedor pleno, focado não apenas na qualidade técnica, mas também na comunicação eficaz e no trabalho em equipe.
                </p>
                <p class="text-neutral-600 leading-relaxed lg:text-lg mt-4">
                    Optei por seguir como freelancer e assim conheci o home office. Essa escolha me ensinou lições valiosas sobre responsabilidade, ética e a tomada de decisões em situações críticas. Se você está em busca de alguém que equilibre habilidades técnicas com uma abordagem comunicativa, estou aqui para ajudar.
                </p>

                <div class="grid grid-cols-3 gap-4 mt-10 border-t border-neutral-200 pt-10">
                    <div class="animate">
                        <p class="text-3xl font-bold text-yellow-600">10+</p>
                        <p class="text-sm text-neutral-500 mt-1">Anos de experiência</p>
                    </div>
                    <div class="animate">
                        <p class="text-3xl font-bold text-yellow-600">50+</p>
                        <p class="text-sm text-neutral-500 mt-1">Projetos entregues</p>
                    </div>
                    <div class="animate">
                        <p class="text-3xl font-bold text-yellow-600">100%</p>
                        <p class="text-sm text-neutral-500 mt-1">Dedicação</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="skill" aria-labelledby="skill-heading" class="bg-neutral-800 py-14 md:py-20 xl:py-28" style="content-visibility:auto">
        <div class="container">
            <div class="text-center mb-14">
                <p class="text-yellow-600 text-sm font-semibold uppercase tracking-widest mb-2">Stack</p>
                <h2 id="skill-heading" class="text-white text-2xl lg:text-4xl font-bold">
                    Minhas <span class="text-yellow-600">Habilidades</span>.
                </h2>
            </div>

            <div class="cards-skill grid gap-y-10 sm:gap-y-12 lg:grid-cols-3" role="list">
                <article class="animate relative flex flex-col content-center items-center border border-neutral-700 bg-neutral-900/40 rounded-2xl p-6 lg:mx-1.5 xl:mx-6" role="listitem">
                    <div class="absolute top-0 left-2/4 -translate-x-2/4 -translate-y-2/4 bg-neutral-700 rounded-full w-11 h-11 sm:w-14 sm:h-14 lg:w-24 lg:h-24" aria-hidden="true">
                        <img src="{{ asset('image/code.png') }}" class="w-full p-2 sm:p-3 lg:p-5" alt="" width="96" height="96">
                    </div>
                    <h3 class="py-6 text-yellow-600 font-bold sm:pt-8 lg:text-xl lg:pt-16">Front-end</h3>
                    <ul class="grid grid-cols-2 gap-x-8 gap-y-1 w-full">
                        <li class="text-neutral-300 pb-1 text-sm"><i class="fa-solid fa-check text-yellow-600 mr-2 text-xs" aria-hidden="true"></i>HTML / CSS</li>
                        <li class="text-neutral-300 pb-1 text-sm"><i class="fa-solid fa-check text-yellow-600 mr-2 text-xs" aria-hidden="true"></i>Bootstrap</li>
                        <li class="text-neutral-300 pb-1 text-sm"><i class="fa-solid fa-check text-yellow-600 mr-2 text-xs" aria-hidden="true"></i>Tailwind</li>
                        <li class="text-neutral-300 pb-1 text-sm"><i class="fa-solid fa-check text-yellow-600 mr-2 text-xs" aria-hidden="true"></i>Vue.js</li>
                        <li class="text-neutral-300 pb-1 text-sm"><i class="fa-solid fa-check text-yellow-600 mr-2 text-xs" aria-hidden="true"></i>Vite</li>
                        <li class="text-neutral-300 pb-1 text-sm"><i class="fa-solid fa-check text-yellow-600 mr-2 text-xs" aria-hidden="true"></i>npm / yarn</li>
                    </ul>
                </article>

                <article class="animate relative flex flex-col content-center items-center border border-neutral-700 bg-neutral-900/40 rounded-2xl p-6 lg:mx-1.5 xl:mx-6" role="listitem">
                    <div class="absolute top-0 left-2/4 -translate-x-2/4 -translate-y-2/4 bg-neutral-700 rounded-full w-11 h-11 sm:w-14 sm:h-14 lg:w-24 lg:h-24" aria-hidden="true">
                        <img src="{{ asset('image/database.png') }}" class="w-full p-2 sm:p-3 lg:p-5" alt="" width="96" height="96">
                    </div>
                    <h3 class="py-6 text-yellow-600 font-bold sm:pt-8 lg:text-xl lg:pt-16">Back-end</h3>
                    <ul class="grid grid-cols-2 gap-x-8 gap-y-1 w-full">
                        <li class="text-neutral-300 pb-1 text-sm"><i class="fa-solid fa-check text-yellow-600 mr-2 text-xs" aria-hidden="true"></i>PHP</li>
                        <li class="text-neutral-300 pb-1 text-sm"><i class="fa-solid fa-check text-yellow-600 mr-2 text-xs" aria-hidden="true"></i>Laravel</li>
                        <li class="text-neutral-300 pb-1 text-sm"><i class="fa-solid fa-check text-yellow-600 mr-2 text-xs" aria-hidden="true"></i>MySQL</li>
                        <li class="text-neutral-300 pb-1 text-sm"><i class="fa-solid fa-check text-yellow-600 mr-2 text-xs" aria-hidden="true"></i>API RESTful</li>
                        <li class="text-neutral-300 pb-1 text-sm"><i class="fa-solid fa-check text-yellow-600 mr-2 text-xs" aria-hidden="true"></i>Docker</li>
                        <li class="text-neutral-300 pb-1 text-sm"><i class="fa-solid fa-check text-yellow-600 mr-2 text-xs" aria-hidden="true"></i>Git</li>
                    </ul>
                </article>

                <article class="animate relative flex flex-col content-center items-center border border-neutral-700 bg-neutral-900/40 rounded-2xl p-6 lg:mx-1.5 xl:mx-6" role="listitem">
                    <div class="absolute top-0 left-2/4 -translate-x-2/4 -translate-y-2/4 bg-neutral-700 rounded-full w-11 h-11 sm:w-14 sm:h-14 lg:w-24 lg:h-24" aria-hidden="true">
                        <img src="{{ asset('image/points.png') }}" class="w-full p-2 sm:p-3 lg:p-5" alt="" width="96" height="96">
                    </div>
                    <h3 class="py-6 text-yellow-600 font-bold sm:pt-8 lg:text-xl lg:pt-16">Ferramentas</h3>
                    <ul class="grid grid-cols-2 gap-x-8 gap-y-1 w-full">
                        <li class="text-neutral-300 pb-1 text-sm"><i class="fa-solid fa-check text-yellow-600 mr-2 text-xs" aria-hidden="true"></i>Jira</li>
                        <li class="text-neutral-300 pb-1 text-sm"><i class="fa-solid fa-check text-yellow-600 mr-2 text-xs" aria-hidden="true"></i>Slack</li>
                        <li class="text-neutral-300 pb-1 text-sm"><i class="fa-solid fa-check text-yellow-600 mr-2 text-xs" aria-hidden="true"></i>Discord</li>
                        <li class="text-neutral-300 pb-1 text-sm"><i class="fa-solid fa-check text-yellow-600 mr-2 text-xs" aria-hidden="true"></i>Meet</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <section id="projects" aria-labelledby="projects-heading" class="bg-white py-14 md:py-20 xl:py-28" style="content-visibility:auto">
        <div class="container">
            <div class="text-center mb-14">
                <p class="text-yellow-600 text-sm font-semibold uppercase tracking-widest mb-2">Portfólio</p>
                <h2 id="projects-heading" class="text-neutral-800 text-2xl lg:text-4xl font-bold">
                    Meus <span class="text-yellow-600">Projetos</span>.
                </h2>
            </div>

            <div class="animate from-left cards-projects grid grid-cols-1 items-center gap-8 md:grid-cols-2 lg:grid-cols-3">
                <article class="project-box h-64 flex relative overflow-hidden shadow-lg rounded-2xl group transition-transform transform-gpu hover:-translate-y-1">
                    <img src="{{ asset('image/foto1.jpg') }}"
                         class="w-full object-cover ease-in duration-[.5s] transition-transform transform-gpu group-hover:scale-110"
                         alt="Projeto Lorem ipsum - screenshot"
                         width="400" height="256" loading="lazy">
                    <div class="project-description flex absolute justify-center items-center flex-col text-center px-4 text-white bottom-0 left-0 w-full h-full bg-gradient-to-t from-neutral-900 via-neutral-900/80 to-transparent ease-in duration-[.4s] transition-transform transform-gpu translate-y-full group-hover:translate-y-0">
                        <h3 class="text-xl text-yellow-500 font-bold pb-1">Lorem ipsum</h3>
                        <p class="pb-3 text-sm text-neutral-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="flex gap-2 mb-3">
                            <span class="text-xs bg-neutral-700 text-neutral-300 px-2 py-0.5 rounded">Laravel</span>
                            <span class="text-xs bg-neutral-700 text-neutral-300 px-2 py-0.5 rounded">Vue.js</span>
                        </div>
                        <a href="#" class="inline-flex justify-center items-center gap-2 text-xs font-semibold bg-yellow-600 text-neutral-900 px-4 py-1.5 rounded-full hover:bg-yellow-500 transition-colors" aria-label="Ver projeto Lorem ipsum">
                            Ver projeto <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i>
                        </a>
                    </div>
                </article>

                <article class="project-box h-64 flex relative overflow-hidden shadow-lg rounded-2xl group transition-transform transform-gpu hover:-translate-y-1">
                    <img src="{{ asset('image/foto2.png') }}"
                         class="w-full object-cover ease-in duration-[.5s] transition-transform transform-gpu group-hover:scale-110"
                         alt="Projeto Lorem ipsum 2 - screenshot"
                         width="400" height="256" loading="lazy">
                    <div class="project-description flex absolute justify-center items-center flex-col text-center px-4 text-white bottom-0 left-0 w-full h-full bg-gradient-to-t from-neutral-900 via-neutral-900/80 to-transparent ease-in duration-[.4s] transition-transform transform-gpu translate-y-full group-hover:translate-y-0">
                        <h3 class="text-xl text-yellow-500 font-bold pb-1">Lorem ipsum</h3>
                        <p class="pb-3 text-sm text-neutral-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="flex gap-2 mb-3">
                            <span class="text-xs bg-neutral-700 text-neutral-300 px-2 py-0.5 rounded">PHP</span>
                            <span class="text-xs bg-neutral-700 text-neutral-300 px-2 py-0.5 rounded">MySQL</span>
                        </div>
                        <a href="#" class="inline-flex justify-center items-center gap-2 text-xs font-semibold bg-yellow-600 text-neutral-900 px-4 py-1.5 rounded-full hover:bg-yellow-500 transition-colors" aria-label="Ver projeto Lorem ipsum 2">
                            Ver projeto <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i>
                        </a>
                    </div>
                </article>

                <article class="project-box h-64 flex relative overflow-hidden shadow-lg rounded-2xl group transition-transform transform-gpu hover:-translate-y-1">
                    <img src="{{ asset('image/foto3.png') }}"
                         class="w-full object-cover ease-in duration-[.5s] transition-transform transform-gpu group-hover:scale-110"
                         alt="Projeto Lorem ipsum 3 - screenshot"
                         width="400" height="256" loading="lazy">
                    <div class="project-description flex absolute justify-center items-center flex-col text-center px-4 text-white bottom-0 left-0 w-full h-full bg-gradient-to-t from-neutral-900 via-neutral-900/80 to-transparent ease-in duration-[.4s] transition-transform transform-gpu translate-y-full group-hover:translate-y-0">
                        <h3 class="text-xl text-yellow-500 font-bold pb-1">Lorem ipsum</h3>
                        <p class="pb-3 text-sm text-neutral-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="flex gap-2 mb-3">
                            <span class="text-xs bg-neutral-700 text-neutral-300 px-2 py-0.5 rounded">Tailwind</span>
                            <span class="text-xs bg-neutral-700 text-neutral-300 px-2 py-0.5 rounded">JS</span>
                        </div>
                        <a href="#" class="inline-flex justify-center items-center gap-2 text-xs font-semibold bg-yellow-600 text-neutral-900 px-4 py-1.5 rounded-full hover:bg-yellow-500 transition-colors" aria-label="Ver projeto Lorem ipsum 3">
                            Ver projeto <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i>
                        </a>
                    </div>
                </article>

                <article class="project-box h-64 flex relative overflow-hidden shadow-lg rounded-2xl group transition-transform transform-gpu hover:-translate-y-1">
                    <img src="{{ asset('image/foto4.png') }}"
                         class="w-full object-cover ease-in duration-[.5s] transition-transform transform-gpu group-hover:scale-110"
                         alt="Projeto Lorem ipsum 4 - screenshot"
                         width="400" height="256" loading="lazy">
                    <div class="project-description flex absolute justify-center items-center flex-col text-center px-4 text-white bottom-0 left-0 w-full h-full bg-gradient-to-t from-neutral-900 via-neutral-900/80 to-transparent ease-in duration-[.4s] transition-transform transform-gpu translate-y-full group-hover:translate-y-0">
                        <h3 class="text-xl text-yellow-500 font-bold pb-1">Lorem ipsum</h3>
                        <p class="pb-3 text-sm text-neutral-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <div class="flex gap-2 mb-3">
                            <span class="text-xs bg-neutral-700 text-neutral-300 px-2 py-0.5 rounded">Docker</span>
                            <span class="text-xs bg-neutral-700 text-neutral-300 px-2 py-0.5 rounded">API</span>
                        </div>
                        <a href="#" class="inline-flex justify-center items-center gap-2 text-xs font-semibold bg-yellow-600 text-neutral-900 px-4 py-1.5 rounded-full hover:bg-yellow-500 transition-colors" aria-label="Ver projeto Lorem ipsum 4">
                            Ver projeto <i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section id="journey" aria-labelledby="journey-heading" class="bg-neutral-800 py-14 md:py-20 xl:py-28" style="content-visibility:auto">
        <div class="container">
            <div class="text-center mb-14">
                <p class="text-yellow-600 text-sm font-semibold uppercase tracking-widest mb-2">Trajetória</p>
                <h2 id="journey-heading" class="text-white text-2xl lg:text-4xl font-bold">
                    Minha <span class="text-yellow-600">Jornada</span>.
                </h2>
            </div>

            <div class="grid gap-y-12 gap-x-4 text-white sm:gap-y-24 sm:grid-cols-12 sm:mx-4">
                <div class="col-span-12 sm:col-span-3">
                    <div class="text-center before:block before:w-20 before:h-1 before:mb-2 before:rounded-md before:mx-auto before:bg-yellow-600 sm:before:mb-3 sm:before:w-24 sm:before:h-2 sm:text-left sm:before:mx-0">
                        <h3 class="text-xl font-bold sm:text-2xl md:text-3xl">Estudos</h3>
                    </div>
                </div>

                <div class="relative col-span-12 space-y-6 sm:col-span-9 sm:px-4">
                    <ol class="col-span-12 space-y-8 relative before:bg-yellow-600 sm:px-4 sm:col-span-8 sm:before:absolute sm:before:top-2 sm:before:bottom-0 sm:before:w-0.5 sm:before:-left-3" aria-label="Histórico de estudos">
                        <li class="animate flex flex-col sm:relative border border-white/10 bg-neutral-900/30 rounded-2xl p-5 sm:before:absolute sm:before:top-1 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:-left-10 sm:before:z-[1] before:bg-yellow-600">
                            <h4 class="text-base font-semibold tracking-wide sm:text-lg">Donec porta enim vel</h4>
                            <time datetime="2020-12" class="text-xs text-yellow-600/80 tracking-wide uppercase mt-0.5">Dez 2020</time>
                            <p class="mt-2 text-sm text-neutral-400 leading-relaxed">Pellentesque feugiat ante at nisl efficitur, in mollis orci scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                        </li>
                        <li class="animate flex flex-col sm:relative border border-white/10 bg-neutral-900/30 rounded-2xl p-5 sm:before:absolute sm:before:top-1 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:-left-10 sm:before:z-[1] before:bg-yellow-600">
                            <h4 class="text-base font-semibold tracking-wide sm:text-lg">Aliquam sit amet nunc ut</h4>
                            <time datetime="2019-07" class="text-xs text-yellow-600/80 tracking-wide uppercase mt-0.5">Jul 2019</time>
                            <p class="mt-2 text-sm text-neutral-400 leading-relaxed">Morbi vulputate aliquam libero non dictum. Aliquam sit amet nunc ut diam aliquet tincidunt nec nec dui. Donec mollis turpis eget egestas sodales.</p>
                        </li>
                        <li class="animate flex flex-col sm:relative border border-white/10 bg-neutral-900/30 rounded-2xl p-5 sm:before:absolute sm:before:top-1 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:-left-10 sm:before:z-[1] before:bg-yellow-600">
                            <h4 class="text-base font-semibold tracking-wide sm:text-lg">Pellentesque habitant morbi</h4>
                            <time datetime="2016-01" class="text-xs text-yellow-600/80 tracking-wide uppercase mt-0.5">Jan 2016</time>
                            <p class="mt-2 text-sm text-neutral-400 leading-relaxed">Suspendisse tincidunt, arcu nec faucibus efficitur, justo velit consectetur nisl, sit amet condimentum lacus orci nec purus.</p>
                        </li>
                    </ol>
                </div>

                <div class="col-span-12 sm:col-span-3 text-white">
                    <div class="text-center before:block before:w-20 before:h-1 before:mb-2 before:rounded-md before:mx-auto before:bg-yellow-600 sm:before:mb-3 sm:before:w-24 sm:before:h-2 sm:text-left sm:before:mx-0">
                        <h3 class="text-xl font-bold md:text-2xl lg:text-3xl">Experiências</h3>
                    </div>
                </div>

                <div class="relative col-span-12 space-y-6 sm:col-span-9 sm:px-4">
                    <ol class="col-span-12 space-y-8 relative before:bg-yellow-600 sm:px-4 sm:col-span-8 sm:before:absolute sm:before:top-2 sm:before:bottom-0 sm:before:w-0.5 sm:before:-left-3" aria-label="Histórico de experiências">
                        <li class="animate flex flex-col sm:relative border border-white/10 bg-neutral-900/30 rounded-2xl p-5 sm:before:absolute sm:before:top-1 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:-left-10 sm:before:z-[1] before:bg-yellow-600">
                            <h4 class="text-base font-semibold tracking-wide sm:text-lg">Donec porta enim vel</h4>
                            <time datetime="2020-12" class="text-xs text-yellow-600/80 tracking-wide uppercase mt-0.5">Dez 2020</time>
                            <p class="mt-2 text-sm text-neutral-400 leading-relaxed">Pellentesque feugiat ante at nisl efficitur, in mollis orci scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                        </li>
                        <li class="animate flex flex-col sm:relative border border-white/10 bg-neutral-900/30 rounded-2xl p-5 sm:before:absolute sm:before:top-1 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:-left-10 sm:before:z-[1] before:bg-yellow-600">
                            <h4 class="text-base font-semibold tracking-wide sm:text-lg">Aliquam sit amet nunc ut</h4>
                            <time datetime="2019-07" class="text-xs text-yellow-600/80 tracking-wide uppercase mt-0.5">Jul 2019</time>
                            <p class="mt-2 text-sm text-neutral-400 leading-relaxed">Morbi vulputate aliquam libero non dictum. Aliquam sit amet nunc ut diam aliquet tincidunt nec nec dui. Donec mollis turpis eget egestas sodales.</p>
                        </li>
                        <li class="animate flex flex-col sm:relative border border-white/10 bg-neutral-900/30 rounded-2xl p-5 sm:before:absolute sm:before:top-1 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:-left-10 sm:before:z-[1] before:bg-yellow-600">
                            <h4 class="text-base font-semibold tracking-wide sm:text-lg">Pellentesque habitant morbi</h4>
                            <time datetime="2016-01" class="text-xs text-yellow-600/80 tracking-wide uppercase mt-0.5">Jan 2016</time>
                            <p class="mt-2 text-sm text-neutral-400 leading-relaxed">Suspendisse tincidunt, arcu nec faucibus efficitur, justo velit consectetur nisl, sit amet condimentum lacus orci nec purus.</p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" aria-labelledby="contact-heading" class="bg-white py-14 md:py-20 xl:py-28" style="content-visibility:auto">
        <div class="container">
            <div class="max-w-xl mx-auto text-center">
                <p class="text-yellow-600 text-sm font-semibold uppercase tracking-widest mb-2">Vamos conversar</p>
                <h2 id="contact-heading" class="text-neutral-800 text-2xl lg:text-4xl font-bold mb-3">
                    Pronto para começar um <span class="text-yellow-600">projeto</span>?
                </h2>
                <p class="text-neutral-500 mb-10">Entre em contato pelo canal de sua preferência. Responderei o mais breve possível.</p>

                <nav aria-label="Redes sociais" class="animate flex justify-center flex-wrap gap-4">
                    <a href="#" class="group flex items-center gap-2 px-5 py-3 rounded-xl bg-neutral-100 hover:bg-neutral-800 transition-colors" aria-label="GitHub de Alexandre Schielke">
                        <i class="fa-brands fa-github text-xl text-neutral-700 group-hover:text-white transition-colors" aria-hidden="true"></i>
                        <span class="text-sm font-medium text-neutral-700 group-hover:text-white transition-colors">GitHub</span>
                    </a>
                    <a href="#" class="group flex items-center gap-2 px-5 py-3 rounded-xl bg-neutral-100 hover:bg-blue-600 transition-colors" aria-label="LinkedIn de Alexandre Schielke">
                        <i class="fa-brands fa-linkedin-in text-xl text-neutral-700 group-hover:text-white transition-colors" aria-hidden="true"></i>
                        <span class="text-sm font-medium text-neutral-700 group-hover:text-white transition-colors">LinkedIn</span>
                    </a>
                    <a href="#" class="group flex items-center gap-2 px-5 py-3 rounded-xl bg-neutral-100 hover:bg-red-500 transition-colors" aria-label="Enviar e-mail para Alexandre Schielke">
                        <i class="fa-regular fa-envelope text-xl text-neutral-700 group-hover:text-white transition-colors" aria-hidden="true"></i>
                        <span class="text-sm font-medium text-neutral-700 group-hover:text-white transition-colors">E-mail</span>
                    </a>
                    <a href="#" class="group flex items-center gap-2 px-5 py-3 rounded-xl bg-neutral-100 hover:bg-pink-600 transition-colors" aria-label="Instagram de Alexandre Schielke">
                        <i class="fa-brands fa-instagram text-xl text-neutral-700 group-hover:text-white transition-colors" aria-hidden="true"></i>
                        <span class="text-sm font-medium text-neutral-700 group-hover:text-white transition-colors">Instagram</span>
                    </a>
                    <a href="https://wa.me/5591998284095" target="_blank" rel="noopener noreferrer"
                       class="group flex items-center gap-2 px-5 py-3 rounded-xl bg-neutral-100 hover:bg-green-500 transition-colors"
                       aria-label="WhatsApp de Alexandre Schielke">
                        <i class="fa-brands fa-whatsapp text-xl text-neutral-700 group-hover:text-white transition-colors" aria-hidden="true"></i>
                        <span class="text-sm font-medium text-neutral-700 group-hover:text-white transition-colors">WhatsApp</span>
                    </a>
                </nav>
            </div>
        </div>
    </section>

</main>

<button id="progress"
        class="fixed bottom-12 right-1.5 hidden place-items-center rounded-full cursor-pointer h-14 w-14 sm:right-4 sm:bottom-6 md:h-[56px] md:w-[56px]"
        aria-label="Voltar ao topo">
    <span class="progress-value block bg-neutral-900 rounded-full grid place-items-center text-lg text-white" aria-hidden="true">
        <i class="fa-solid fa-arrow-up"></i>
    </span>
</button>

<footer class="py-6 px-4 text-center bg-neutral-900 border-t border-neutral-800 text-neutral-500" role="contentinfo">
    <p class="text-sm">&copy; {{ date('Y') }} Alexandre Schielke &mdash;
        <a href="https://wa.me/5591998284095" target="_blank" rel="noopener noreferrer"
           class="text-yellow-600 hover:text-yellow-500 transition-colors font-medium"
           aria-label="Contato via WhatsApp">
            Code<i class="fas fa-bolt mx-0.5" aria-hidden="true"></i>Zeus
        </a>
    </p>
</footer>

</body>
</html>
