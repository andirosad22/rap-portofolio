<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>Rosad Andi Pratama</title>
        <link rel="stylesheet" href="{{ asset('css/mycss/home.css') }}"/>
        {{-- font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <nav>
            <div class="logo">
                <h4><a href="/"><span>Rosad </span>Andi Pratama</a></h4>
            </div>
            <ul class="list-menu">
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill" viewBox="0 0 16 16">
                        <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293z"/>
                        <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                      </svg>
                    <a href="/"> Home</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-kanban-fill" viewBox="0 0 16 16">
                        <path d="M2.5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h11a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm5 2h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1m-5 1a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1zm9-1h1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1"/>
                      </svg>
                    <a href="#">Project</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
                    </svg>
                    <a href="#">About</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stickies-fill" viewBox="0 0 16 16">
                        <path d="M0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1H1.5A1.5 1.5 0 0 0 0 1.5"/>
                        <path d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2zm6 8.5a1 1 0 0 1 1-1h4.396a.25.25 0 0 1 .177.427l-5.146 5.146a.25.25 0 0 1-.427-.177z"/>
                      </svg>
                    <a href="/posts" class="{{ ($active =="posts") ? 'active' : '' }}">Blog</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-rolodex" viewBox="0 0 16 16">
                    <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                    <path d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1z"/>
                    </svg>
                    <a href="#">Contact Us</a>
                </li>
            </ul>
            {{-- <ul class="list-contact-us">
                <li><a href="#">Contact Us</a></li>
            </ul> --}}
            <div class="menu-toggle">
                <input type="checkbox"/>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
        {{-- herro start --}}
        <section class="herro-section">
            <div class="text-content">
                <h4>Hello Guys</h4>
                <h1>I am <span>Rosad Andi Pratama</span></h1>
                <quote>frond end developer</quote>
                <div class="underline"></div>
                <p>
                    I'm a person who has a keen interest in the design layout. I think presenting an attractive design is a matter of concern in developing a branding of products. To creates a good design,  I focus on proper composition and visual decoration details in order to make it more professional. For the time being, I’m developing the skill for acquiring the UI/UX design for dynamic application and web development.
                </p>
                <div class="bottom">
                    <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                        <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1m-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5M5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1m0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1"/>
                      </svg> Download CV</a>
                    <a href="#">More</a>
                </div>
            </div>
            <div class="image-content">
                <div class="image">
                    <img src="{{ asset('img/elements/herro-image.png') }}">
                </div>
                <div class="element-main">
                    <img src="{{ asset('img/elements/element-main.png') }}" alt="element-main">
                </div>
                <div class="element-submain1">
                    <img src="{{ asset('img/elements/element-submain-1.png') }}" alt="element-submain1">
                </div>
                <div class="element-submain2">
                    <img src="{{ asset('img/elements/element-submain-2.png') }}" alt="element-submain2">
                </div>
                <div class="element-submain3">
                    <img src="{{ asset('img/elements/element-submain-3.png') }}" alt="element-submain3">
                </div>
            </div>
            <div class="social-medias">
                <h5>Find me on</h5>
                <ul>
                    <li>
                        <a href="https://facebook.com/rosadandipratama">
                            <img src="{{ asset('img/icons/bxl_facebook.png') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="https://facebook.com/rosadandipratama">
                            <img src="{{ asset('img/icons/instagram.png') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="https://facebook.com/rosadandipratama">
                            <img src="{{ asset('img/icons/whatsapp.png') }}" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="https://facebook.com/rosadandipratama">
                            <img src="{{ asset('img/icons/akar-icons_linkedin-fill.png') }}" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        {{-- herro end --}}

        {{-- project start --}}
        <section class="project-section">
            <div class="text-project">
                <span>What Do I Offer</span>
                <h2>Creates Professional Design That’s
                    Oriented Towards Client Needs</h2>
            </div>
            <div class="slide-bar-project">
                <div class="card-slide active-card-slide">
                    <div class="navigation-slide active-navigation-slide"></div>
                    <img src="{{ asset('img/elements/mobile.png') }}" alt="">
                    <a href="#">
                        <h5>Programing</h5>
                    </a>
                </div>
                <div class="card-slide">
                    <div class="navigation-slide"></div>
                    <img src="{{ asset('img/elements/mobile.png') }}" alt="">
                    <a href="#">
                        <h5>Web Desain</h5>
                    </a>
                </div>
                <div class="card-slide">
                    <div class="navigation-slide"></div>
                    <img src="{{ asset('img/elements/mobile.png') }}" alt="">
                    <a href="#">
                        <h5>Content Design</h5>
                    </a>
                </div>
            </div>
        </section>
        {{-- project end --}}


        <script src="{{ asset('js/myjs/home.js') }}">
        </script>
    </body>
</html>
