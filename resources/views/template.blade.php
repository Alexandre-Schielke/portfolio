<!doctype html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

<header class="bg-neutral-900" role="banner">
    <div class="container">
        <nav aria-label="Navegação principal">
            <a href="/" class="text-white text-2xl py-6 block text-center font-bold" aria-label="CodeZeus - Página inicial">CodeZeus</a>
        </nav>
    </div>
</header>

<main id="conteudo-principal">

    <section id="introduction" aria-labelledby="intro-heading" class="bg-neutral-800 md:py-16">
        <div class="container">
            <div class="flex justify-between items-center">
                <div class="w-full h-60 py-10 sm:w-3/5 md:w-[55%] lg:h-80">
                    <h1 id="intro-heading" class="text-white text-3xl sm:text-3xl lg:text-6xl">
                        <strong class="text-yellow-600">Desenvolvedor</strong>
                        Full-Stack para o seu projeto.
                    </h1>
                    <p id="text" class="pt-2 text-white lg:pt-7 lg:text-2xl" aria-live="polite"></p>
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

    <section id="about" aria-labelledby="about-heading" class="bg-white py-10 md:py-16 xl:py-24">
        <div class="container">
            <div class="flex justify-center items-center mb-5 ml-4 sm:hidden" aria-hidden="true">
                <div class="profile-about relative w-48 h-48 rounded-full">
                    <img class="profile-img-about w-[89%] rounded-full border-4 border-yellow-600"
                         src="{{ asset('image/fotopng.png') }}"
                         alt="Foto de Alexandre Schielke"
                         width="192" height="192">
                    <span class="span-img-about absolute top-[45%] left-[45%] w-full h-full rounded-full border-t-4 border-t-white border-b-4 border-b-white border-l-4 border-l-yellow-600 border-r-4 border-r-yellow-600 transform -translate-y-1/2 -translate-x-1/2 rotate-0"></span>
                </div>
            </div>

            <h2 id="about-heading" class="text-neutral-800 text-center text-2xl pb-4 sm:text-2xl lg:text-4xl">
                Olá, me chamo <strong class="text-yellow-600">Alexandre Schielke</strong>.
            </h2>

            <p class="text-justify text-neutral-700 sm:text-center sm:pt-5 lg:pt-10 lg:text-lg">
                Desde 2014, venho explorando tanto o front-end quanto o back-end. Minha trajetória inclui experiências em empresas de pequeno, médio e grande porte. Hoje, me considero um desenvolvedor pleno, focado não apenas na qualidade técnica, mas também na comunicação eficaz e no trabalho em equipe.

                Optei por seguir como freelancer e assim conheci o home office. Essa escolha não só me desafiou profissionalmente, mas também me ensinou lições valiosas sobre responsabilidade, ética e a tomada de decisões em situações críticas. Acredito firmemente no poder do autogerenciamento como uma ferramenta de amadurecimento profissional.

                Adoro compartilhar ideias e experiências, porque acredito que é assim que todos nós crescemos. Se você está em busca de alguém que equilibre habilidades técnicas com uma abordagem comunicativa, estou aqui para ajudar a criar algo incrível juntos.
            </p>
        </div>
    </section>

    <section id="skill" aria-labelledby="skill-heading" class="bg-neutral-800 py-10 md:py-16 xl:py-24" style="content-visibility:auto">
        <div class="container">
            <h2 id="skill-heading" class="text-white text-center text-2xl sm:text-2xl lg:text-4xl lg:pb-10">
                Minhas <strong class="text-yellow-600">Habilidades</strong>.
            </h2>

            <div class="cards-skill grid gap-y-10 pt-16 sm:gap-y-12 lg:grid-cols-3" role="list">
                <article class="animate relative flex flex-col content-center items-center border-4 border-neutral-700 rounded-2xl p-4 lg:mx-1.5 xl:mx-6" role="listitem">
                    <div class="absolute top-0 left-2/4 -translate-x-2/4 -translate-y-2/4 bg-neutral-700 rounded-full w-11 h-11 sm:w-14 sm:h-14 lg:w-24 lg:h-24" aria-hidden="true">
                        <img src="{{ asset('image/code.png') }}" class="w-full p-2 sm:p-3 lg:p-5" alt="" width="96" height="96">
                    </div>
                    <h3 class="py-6 text-yellow-600 font-semibold sm:text-lg sm:pt-8 lg:text-xl lg:pt-16">Front-end</h3>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 sm:gap-x-10 lg:gap-x-8">
                        <li class="text-white pb-1.5 text-sm lg:text-sm"><i class="fa-solid fa-check text-blue-500 mr-2" aria-hidden="true"></i>CSS</li>
                        <li class="text-white pb-1.5 text-sm lg:text-sm"><i class="fa-solid fa-check text-blue-500 mr-2" aria-hidden="true"></i>HTML</li>
                        <li class="text-white pb-1.5 text-sm lg:text-sm"><i class="fa-solid fa-check text-blue-500 mr-2" aria-hidden="true"></i>Bootstrap</li>
                        <li class="text-white pb-1.5 text-sm lg:text-sm"><i class="fa-solid fa-check text-blue-500 mr-2" aria-hidden="true"></i>Tailwind</li>
                        <li class="text-white pb-1.5 text-sm lg:text-sm"><i class="fa-solid fa-check text-blue-500 mr-2" aria-hidden="true"></i>Vue.js</li>
                        <li class="text-white pb-1.5 text-sm lg:text-sm"><i class="fa-solid fa-check text-blue-500 mr-2" aria-hidden="true"></i>npm / yarn</li>
                    </ul>
                </article>

                <article class="animate relative flex flex-col content-center items-center border-4 border-neutral-700 rounded-2xl p-4 lg:mx-1.5 xl:mx-6" role="listitem">
                    <div class="absolute top-0 left-2/4 -translate-x-2/4 -translate-y-2/4 bg-neutral-700 rounded-full w-11 h-11 sm:w-14 sm:h-14 lg:w-24 lg:h-24" aria-hidden="true">
                        <img src="{{ asset('image/database.png') }}" class="w-full p-2 sm:p-3 lg:p-5" alt="" width="96" height="96">
                    </div>
                    <h3 class="py-6 text-yellow-600 font-semibold sm:text-lg sm:pt-8 lg:text-xl lg:pt-16">Back-end</h3>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 sm:gap-x-10 lg:gap-x-8">
                        <li class="text-white pb-1.5 text-sm lg:text-sm"><i class="fa-solid fa-check text-blue-500 mr-2" aria-hidden="true"></i>PHP</li>
                        <li class="text-white pb-1.5 text-sm lg:text-sm"><i class="fa-solid fa-check text-blue-500 mr-2" aria-hidden="true"></i>Laravel</li>
                        <li class="text-white pb-1.5 text-sm lg:text-sm"><i class="fa-solid fa-check text-blue-500 mr-2" aria-hidden="true"></i>MySQL</li>
                        <li class="text-white pb-1.5 text-sm lg:text-sm"><i class="fa-solid fa-check text-blue-500 mr-2" aria-hidden="true"></i>API RESTful</li>
                        <li class="text-white pb-1.5 text-sm lg:text-sm"><i class="fa-solid fa-check text-blue-500 mr-2" aria-hidden="true"></i>Docker</li>
                        <li class="text-white pb-1.5 text-sm lg:text-sm"><i class="fa-solid fa-check text-blue-500 mr-2" aria-hidden="true"></i>Git</li>
                    </ul>
                </article>

                <article class="animate relative flex flex-col content-center items-center border-4 border-neutral-700 rounded-2xl p-4 lg:mx-1.5 xl:mx-6" role="listitem">
                    <div class="absolute top-0 left-2/4 -translate-x-2/4 -translate-y-2/4 bg-neutral-700 rounded-full w-11 h-11 sm:w-14 sm:h-14 lg:w-24 lg:h-24" aria-hidden="true">
                        <img src="{{ asset('image/points.png') }}" class="w-full p-2 sm:p-3 lg:p-5" alt="" width="96" height="96">
                    </div>
                    <h3 class="py-6 text-yellow-600 font-semibold sm:text-lg sm:pt-8 lg:text-xl lg:pt-16">Ferramentas</h3>
                    <ul class="grid grid-cols-1 sm:grid-cols-2 sm:gap-x-10 lg:gap-x-8">
                        <li class="text-white pb-1.5 text-sm lg:text-sm"><i class="fa-solid fa-check text-blue-500 mr-2" aria-hidden="true"></i>Jira</li>
                        <li class="text-white pb-1.5 text-sm lg:text-sm"><i class="fa-solid fa-check text-blue-500 mr-2" aria-hidden="true"></i>Slack</li>
                        <li class="text-white pb-1.5 text-sm lg:text-sm"><i class="fa-solid fa-check text-blue-500 mr-2" aria-hidden="true"></i>Discord</li>
                        <li class="text-white pb-1.5 text-sm lg:text-sm"><i class="fa-solid fa-check text-blue-500 mr-2" aria-hidden="true"></i>Meet</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <section id="projects" aria-labelledby="projects-heading" class="bg-white py-10 md:py-16 xl:py-24" style="content-visibility:auto">
        <div class="container">
            <h2 id="projects-heading" class="text-neutral-800 text-center text-2xl sm:text-2xl lg:text-4xl">
                Meus <strong class="text-yellow-600">Projetos</strong>.
            </h2>

            <div class="animate from-left cards-projects grid grid-cols-1 items-center gap-10 pt-16 md:grid-cols-2 lg:grid-cols-3">
                <article class="project-box h-60 flex relative overflow-hidden shadow-2xl rounded-2xl group transition-transform transform-gpu">
                    <img src="{{ asset('image/foto1.jpg') }}"
                         class="w-full object-cover ease-in duration-[.5s] transition-transform transform-gpu hover:scale-110"
                         alt="Projeto Lorem ipsum - screenshot"
                         width="400" height="240" loading="lazy">
                    <div class="project-description flex absolute justify-center items-center flex-col text-center px-3 text-white bottom-0 left-0 w-full h-full bg-gradient-to-t from-neutral-800/90 to-neutral-800 ease-in duration-[.5s] transition-transform transform-gpu translate-y-full group-hover:translate-y-0">
                        <h3 class="text-2xl text-yellow-600 font-semibold pb-2">Lorem ipsum</h3>
                        <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="inline-flex justify-center items-center w-10 h-10 bg-white rounded-full" aria-label="Ver projeto Lorem ipsum">
                            <i class="fa-solid fa-arrow-up-right-from-square text-blue-600" aria-hidden="true"></i>
                        </a>
                    </div>
                </article>

                <article class="project-box h-60 flex relative overflow-hidden shadow-2xl rounded-2xl group transition-transform transform-gpu">
                    <img src="{{ asset('image/foto2.png') }}"
                         class="w-full object-cover ease-in duration-[.5s] transition-transform transform-gpu hover:scale-110"
                         alt="Projeto Lorem ipsum 2 - screenshot"
                         width="400" height="240" loading="lazy">
                    <div class="project-description flex absolute justify-center items-center flex-col text-center px-3 text-white bottom-0 left-0 w-full h-full bg-gradient-to-t from-neutral-800/90 to-neutral-800 ease-in duration-[.5s] transition-transform transform-gpu translate-y-full group-hover:translate-y-0">
                        <h3 class="text-2xl text-yellow-600 font-semibold pb-2">Lorem ipsum</h3>
                        <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="inline-flex justify-center items-center w-10 h-10 bg-white rounded-full" aria-label="Ver projeto Lorem ipsum 2">
                            <i class="fa-solid fa-arrow-up-right-from-square text-blue-600" aria-hidden="true"></i>
                        </a>
                    </div>
                </article>

                <article class="project-box h-60 flex relative overflow-hidden shadow-2xl rounded-2xl group transition-transform transform-gpu">
                    <img src="{{ asset('image/foto3.png') }}"
                         class="w-full object-cover ease-in duration-[.5s] transition-transform transform-gpu hover:scale-110"
                         alt="Projeto Lorem ipsum 3 - screenshot"
                         width="400" height="240" loading="lazy">
                    <div class="project-description flex absolute justify-center items-center flex-col text-center px-3 text-white bottom-0 left-0 w-full h-full bg-gradient-to-t from-neutral-800/90 to-neutral-800 ease-in duration-[.5s] transition-transform transform-gpu translate-y-full group-hover:translate-y-0">
                        <h3 class="text-2xl text-yellow-600 font-semibold pb-2">Lorem ipsum</h3>
                        <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="inline-flex justify-center items-center w-10 h-10 bg-white rounded-full" aria-label="Ver projeto Lorem ipsum 3">
                            <i class="fa-solid fa-arrow-up-right-from-square text-blue-600" aria-hidden="true"></i>
                        </a>
                    </div>
                </article>

                <article class="project-box h-60 flex relative overflow-hidden shadow-2xl rounded-2xl group transition-transform transform-gpu">
                    <img src="{{ asset('image/foto4.png') }}"
                         class="w-full object-cover ease-in duration-[.5s] transition-transform transform-gpu hover:scale-110"
                         alt="Projeto Lorem ipsum 4 - screenshot"
                         width="400" height="240" loading="lazy">
                    <div class="project-description flex absolute justify-center items-center flex-col text-center px-3 text-white bottom-0 left-0 w-full h-full bg-gradient-to-t from-neutral-800/90 to-neutral-800 ease-in duration-[.5s] transition-transform transform-gpu translate-y-full group-hover:translate-y-0">
                        <h3 class="text-2xl text-yellow-600 font-semibold pb-2">Lorem ipsum</h3>
                        <p class="pb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        <a href="#" class="inline-flex justify-center items-center w-10 h-10 bg-white rounded-full" aria-label="Ver projeto Lorem ipsum 4">
                            <i class="fa-solid fa-arrow-up-right-from-square text-blue-600" aria-hidden="true"></i>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <section id="journey" aria-labelledby="journey-heading" class="bg-neutral-800 py-10 md:py-16 xl:py-24" style="content-visibility:auto">
        <div class="container">
            <h2 id="journey-heading" class="text-white text-center text-2xl sm:text-2xl lg:text-4xl">
                Minha <strong class="text-yellow-600">Jornada</strong>.
            </h2>

            <div class="grid gap-y-12 gap-x-4 pt-8 text-white sm:gap-y-24 sm:grid-cols-12 sm:mx-4 sm:pt-16">
                <div class="col-span-12 sm:col-span-3">
                    <div class="text-center before:block before:w-20 before:h-1 before:mb-2 before:rounded-md before:mx-auto before:bg-yellow-600 sm:before:mb-3 sm:before:w-24 sm:before:h-2 sm:text-left sm:before:mx-0">
                        <h3 class="text-xl font-semibold sm:text-2xl md:text-3xl">Estudos</h3>
                    </div>
                </div>

                <div class="relative col-span-12 space-y-6 sm:col-span-9 sm:px-4">
                    <ol class="col-span-12 space-y-12 relative before:bg-yellow-600 sm:px-4 sm:col-span-8 sm:space-y-8 sm:before:absolute sm:before:top-2 sm:before:bottom-0 sm:before:w-0.5 sm:before:-left-3" aria-label="Histórico de estudos">
                        <li class="animate flex flex-col sm:relative border-4 border-white/10 rounded-2xl p-5 sm:before:absolute sm:before:top-1 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:-left-10 sm:before:z-[1] before:bg-yellow-600">
                            <h4 class="text-lg font-semibold tracking-wide sm:text-xl">Donec porta enim vel</h4>
                            <time datetime="2020-12" class="text-xs text-blue-400 tracking-wide uppercase">Dez 2020</time>
                            <p class="mt-3 text-neutral-300">Pellentesque feugiat ante at nisl efficitur, in mollis orci scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                        </li>
                        <li class="animate flex flex-col sm:relative border-4 border-white/10 rounded-2xl p-5 sm:before:absolute sm:before:top-1 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:-left-10 sm:before:z-[1] before:bg-yellow-600">
                            <h4 class="text-lg font-semibold tracking-wide sm:text-xl">Aliquam sit amet nunc ut</h4>
                            <time datetime="2019-07" class="text-xs text-blue-400 tracking-wide uppercase">Jul 2019</time>
                            <p class="mt-3 text-neutral-300">Morbi vulputate aliquam libero non dictum. Aliquam sit amet nunc ut diam aliquet tincidunt nec nec dui. Donec mollis turpis eget egestas sodales.</p>
                        </li>
                        <li class="animate flex flex-col sm:relative border-4 border-white/10 rounded-2xl p-5 sm:before:absolute sm:before:top-1 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:-left-10 sm:before:z-[1] before:bg-yellow-600">
                            <h4 class="text-lg font-semibold tracking-wide sm:text-xl">Pellentesque habitant morbi</h4>
                            <time datetime="2016-01" class="text-xs text-blue-400 tracking-wide uppercase">Jan 2016</time>
                            <p class="mt-3 text-neutral-300">Suspendisse tincidunt, arcu nec faucibus efficitur, justo velit consectetur nisl, sit amet condimentum lacus orci nec purus. Mauris quis quam suscipit, vehicula felis id, vehicula enim.</p>
                        </li>
                    </ol>
                </div>

                <div class="col-span-12 sm:col-span-3 text-white">
                    <div class="text-center before:block before:w-20 before:h-1 before:mb-2 before:rounded-md before:mx-auto before:bg-yellow-600 sm:before:mb-3 sm:before:w-24 sm:before:h-2 sm:text-left sm:before:mx-0">
                        <h3 class="text-xl font-semibold md:text-2xl lg:text-3xl">Experiências</h3>
                    </div>
                </div>

                <div class="relative col-span-12 space-y-6 sm:col-span-9 sm:px-4">
                    <ol class="col-span-12 space-y-12 relative before:bg-yellow-600 sm:px-4 sm:col-span-8 sm:space-y-8 sm:before:absolute sm:before:top-2 sm:before:bottom-0 sm:before:w-0.5 sm:before:-left-3" aria-label="Histórico de experiências">
                        <li class="animate flex flex-col sm:relative border-4 border-white/10 rounded-2xl p-5 sm:before:absolute sm:before:top-1 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:-left-10 sm:before:z-[1] before:bg-yellow-600">
                            <h4 class="text-lg font-semibold tracking-wide sm:text-xl">Donec porta enim vel</h4>
                            <time datetime="2020-12" class="text-xs text-blue-400 tracking-wide uppercase">Dez 2020</time>
                            <p class="mt-3 text-neutral-300">Pellentesque feugiat ante at nisl efficitur, in mollis orci scelerisque. Interdum et malesuada fames ac ante ipsum primis in faucibus.</p>
                        </li>
                        <li class="animate flex flex-col sm:relative border-4 border-white/10 rounded-2xl p-5 sm:before:absolute sm:before:top-1 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:-left-10 sm:before:z-[1] before:bg-yellow-600">
                            <h4 class="text-lg font-semibold tracking-wide sm:text-xl">Aliquam sit amet nunc ut</h4>
                            <time datetime="2019-07" class="text-xs text-blue-400 tracking-wide uppercase">Jul 2019</time>
                            <p class="mt-3 text-neutral-300">Morbi vulputate aliquam libero non dictum. Aliquam sit amet nunc ut diam aliquet tincidunt nec nec dui. Donec mollis turpis eget egestas sodales.</p>
                        </li>
                        <li class="animate flex flex-col sm:relative border-4 border-white/10 rounded-2xl p-5 sm:before:absolute sm:before:top-1 sm:before:w-4 sm:before:h-4 sm:before:rounded-full sm:before:-left-10 sm:before:z-[1] before:bg-yellow-600">
                            <h4 class="text-lg font-semibold tracking-wide sm:text-xl">Pellentesque habitant morbi</h4>
                            <time datetime="2016-01" class="text-xs text-blue-400 tracking-wide uppercase">Jan 2016</time>
                            <p class="mt-3 text-neutral-300">Suspendisse tincidunt, arcu nec faucibus efficitur, justo velit consectetur nisl, sit amet condimentum lacus orci nec purus. Mauris quis quam suscipit, vehicula felis id, vehicula enim.</p>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" aria-labelledby="contact-heading" class="bg-white py-10 md:py-16 xl:py-24" style="content-visibility:auto">
        <div class="container">
            <h2 id="contact-heading" class="text-neutral-800 text-center text-2xl sm:text-2xl lg:text-4xl">
                <strong class="text-yellow-600">Contatos</strong>.
            </h2>

            <nav aria-label="Redes sociais" class="animate flex justify-center flex-wrap p-2.5 pt-8 gap-6 w-full sm:pt-16">
                <a href="#" class="group text-center p-2 rounded-lg bg-neutral-200 lg:p-3 hover:scale-110 hover:bg-neutral-800" aria-label="GitHub de Alexandre Schielke">
                    <i class="fa-brands fa-github text-2xl text-neutral-700 p-5 group-hover:text-white" aria-hidden="true"></i>
                </a>
                <a href="#" class="group text-center p-2 rounded-lg bg-neutral-200 lg:p-3 hover:scale-110 hover:bg-blue-600" aria-label="LinkedIn de Alexandre Schielke">
                    <i class="fa-brands fa-linkedin-in text-2xl text-neutral-700 rounded-full p-5 group-hover:text-white" aria-hidden="true"></i>
                </a>
                <a href="#" class="group text-center p-2 rounded-lg bg-neutral-200 lg:p-3 group hover:scale-110 hover:bg-red-500" aria-label="Enviar e-mail para Alexandre Schielke">
                    <i class="fa-regular fa-envelope text-2xl text-neutral-700 font-semibold rounded-full p-5 group-hover:text-white" aria-hidden="true"></i>
                </a>
                <a href="#" class="group text-center p-2 rounded-lg bg-neutral-200 lg:p-3 group hover:scale-110 hover:bg-pink-600" aria-label="Instagram de Alexandre Schielke">
                    <i class="fa-brands fa-instagram text-2xl text-neutral-700 font-semibold rounded-full p-5 group-hover:text-white" aria-hidden="true"></i>
                </a>
            </nav>
        </div>
    </section>

</main>

<button id="progress"
        class="fixed bottom-12 right-1.5 hidden place-items-center rounded-full cursor-pointer h-14 w-14 sm:right-2.5 sm:bottom-0 lg:bottom-[60px] md:h-[70px] md:w-[70px]"
        aria-label="Voltar ao topo">
    <span class="progress-value block bg-white rounded-full grid place-items-center text-2xl text-neutral-800" aria-hidden="true">
        <i class="fa-solid fa-arrow-up"></i>
    </span>
</button>

<footer class="p-4 text-center bg-neutral-800 text-white" role="contentinfo">
    <p>&copy; Copyright 2023 &ndash;
        <span class="block lg:inline-block">Desenvolvido por
            <a style="color: #fff" href="https://wa.me/5591998284095" target="_blank" rel="noopener noreferrer" aria-label="Contato via WhatsApp com CodeZeus">
                <b>Code <i class="fas fa-bolt" style="color: #ca8a04" aria-hidden="true"></i> Zeus</b>
            </a>
        </span>
    </p>
</footer>

</body>
</html>
