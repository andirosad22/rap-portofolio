<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>{{ $user->name }}</title>
        <link rel="stylesheet" href="{{ asset('css/mycss/home.css') }}"/>
        {{-- font --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>
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
                    <a href="#project">Project</a>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1z"/>
                    </svg>
                    <a href="#about">About</a>
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
                    <a href="#contact-us">Contact Us</a>
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
        </header>
        {{-- herro start --}}
        <section class="herro-section" id="home">
            <div class="text-content">
                <h4>Hello Guys</h4>
                <h1>I am <span>{{ $user->name }}</span></h1>
                <span class="sub-head">frond end developer</span>
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
                    <img src="{{ asset('img/elements/herro-image.png') }}" alt="herro image">
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
                <div class="social-medias">
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
            </div>
        </section>
        {{-- herro end --}}
        {{-- project start --}}
        <section class="project-section" id="project">
            <div class="text-project">
                <span>What are my projects?</span>
                <h2>Following are the categories of projects I am working on and my last three projects</h2>
            </div>
            <div class="slide-bar-project">
                <div class="card-slide ">
                    <div class="navigation-slide"></div>
                    <img src="{{ asset('img/elements/mobile.png') }}" alt="">
                    <a href="#">
                        <h5>Frond End</h5>
                    </a>
                </div>
                <div class="card-slide active">
                    <div class="navigation-slide active-navigation-slide"></div>
                    <img src="{{ asset('img/elements/mobile.png') }}" alt="">
                    <a href="#">
                        <h5>Full Stack</h5>
                    </a>
                </div>
                <div class="card-slide">
                    <div class="navigation-slide"></div>
                    <img src="{{ asset('img/elements/mobile.png') }}" alt="">
                    <a href="#">
                        <h5>Back End</h5>
                    </a>
                </div>
            </div>
            <div class="last-project">
                @foreach ($projects as $project)
                <div class="card-last-project">
                    <div class="image-herro-card">
                        <img src="{{ asset('img/projects/'.$project->image) }}" alt="project">
                    </div>
                    <div class="text-herro-card">
                        <a href="projects/{{ $project->slug }}">
                            <h2>{{ $project->title }}</h2>
                        </a>
                        <h6>{{ $project->your_task }}</h6>
                        <p>{{ $project->description }}</p>
                        <div class="action">
                            <a href="project/preview/{{ $project->slug }}"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layout-text-window" viewBox="0 0 16 16">
                                <path d="M3 6.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z"/>
                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v1H1V2a1 1 0 0 1 1-1zm1 3v10a1 1 0 0 1-1 1h-2V4zm-4 0v11H2a1 1 0 0 1-1-1V4z"/>
                              </svg> View study case</a>
                            <a href="{{ $project->slug }}.rosadandipratama.com"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
                                <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
                              </svg> Visite to website</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="contact-me-section">
                <div class="text-contact-me">
                    <h5>You are intersted? contact me</h5>
                </div>
                <div class="action">
                    <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                      </svg> Send Email</a>
                    <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-grid-1x2-fill" viewBox="0 0 16 16">
                        <path d="M0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1zm0 9a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1z"/>
                      </svg>  View More</a>
                </div>
            </div>
        </section>
        {{-- project end --}}

        {{-- section-why-me start --}}
        <section id="why-me" class="why-me">
            <div class="card-why-me">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-emoji-heart-eyes" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M11.315 10.014a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434m6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434"/>
                      </svg>
                </div>
                <div class="card-description">
                    <h5>{{ auth()->user()->post_id }}</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, fuga.</p>
                </div>
            </div>
            <div class="card-why-me">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-emoji-kiss" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M12.493 13.368a7 7 0 1 1 2.489-4.858c.344.033.68.147.975.328a8 8 0 1 0-2.654 5.152 8.58 8.58 0 0 1-.81-.622Zm-3.731-3.22a13 13 0 0 0-1.107.318.5.5 0 1 1-.31-.95c.38-.125.802-.254 1.192-.343.37-.086.78-.153 1.103-.108.16.022.394.085.561.286.188.226.187.497.131.705a1.892 1.892 0 0 1-.31.593c-.077.107-.168.22-.275.343.107.124.199.24.276.347.142.197.256.397.31.595.055.208.056.479-.132.706-.168.2-.404.262-.563.284-.323.043-.733-.027-1.102-.113a14.87 14.87 0 0 1-1.191-.345.5.5 0 1 1 .31-.95c.371.12.761.24 1.109.321.176.041.325.069.446.084a5.609 5.609 0 0 0-.502-.584.5.5 0 0 1 .002-.695 5.52 5.52 0 0 0 .5-.577 4.465 4.465 0 0 0-.448.082Zm.766-.087-.003-.001-.003-.001c.004 0 .006.002.006.002Zm.002 1.867-.006.001a.038.038 0 0 1 .006-.002ZM6 8c.552 0 1-.672 1-1.5S6.552 5 6 5s-1 .672-1 1.5S5.448 8 6 8m2.757-.563a.5.5 0 0 0 .68-.194.934.934 0 0 1 .813-.493c.339 0 .645.19.813.493a.5.5 0 0 0 .874-.486A1.934 1.934 0 0 0 10.25 5.75c-.73 0-1.356.412-1.687 1.007a.5.5 0 0 0 .194.68ZM14 9.828c1.11-1.14 3.884.856 0 3.422-3.884-2.566-1.11-4.562 0-3.421Z"/>
                      </svg>
                </div>
                <div class="card-description">
                    <h5>Kemampuan belajar yang baik</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, fuga.</p>
                </div>
            </div>
            <div class="card-why-me">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-emoji-laughing" viewBox="0 0 16 16">
                        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                        <path d="M12.331 9.5a1 1 0 0 1 0 1A4.998 4.998 0 0 1 8 13a4.998 4.998 0 0 1-4.33-2.5A1 1 0 0 1 4.535 9h6.93a1 1 0 0 1 .866.5M7 6.5c0 .828-.448 0-1 0s-1 .828-1 0S5.448 5 6 5s1 .672 1 1.5m4 0c0 .828-.448 0-1 0s-1 .828-1 0S9.448 5 10 5s1 .672 1 1.5"/>
                      </svg>
                </div>
                <div class="card-description">
                    <h5>Kemampuan belajar yang baik</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, fuga.</p>
                </div>
            </div>
        </section>
        {{-- section-why-me end --}}
        {{-- section about me start --}}
        <section class="about">
            <div class="image">
                <img src="{{ asset('img/elements/herro-image.png') }}" alt="">
            </div>
            <div class="description-about">
                <h3>{{ $user->name }}</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque natus ratione illo laborum id similique deleniti nam nisi corrupti repellendus?</p>
                <div class="study">
                    <ul>
                        <li>S1 | Teknik Informatik | 2023</li>
                        <li>SMK | Teknik Mesin | 2019</li>
                    </ul>
                </div>
                <div class="action-about">
                    <a href="#">Contact me</a>
                    <a href="#">Download Resume</a>
                </div>
            </div>
        </section>
        <footer>
            <div class="sosial-media">
                <ul>
                    <li><a href="#">Instagram | <span>rosadandi_pratama</span></a></li>
                    <li><a href="#">Facebook | <span>Rosad Andi Pratama</span></a></li>
                    <li><a href="#">Tiktok | <span>rosadandipratama86</span></a></li>
                    <li><a href="#">Linked in | <span>Rosad Andi Pratama</span></a></li>
                </ul>
                <ul>
                    <li><a href="#">Instagram | <span>rosadandi_pratama</span></a></li>
                    <li><a href="#">Facebook | <span>Rosad Andi Pratama</span></a></li>
                    <li><a href="#">Tiktok | <span>rosadandipratama86</span></a></li>
                    <li><a href="#">Linked in | <span>Rosad Andi Pratama</span></a></li>
                </ul>
            </div>
            <div class="copyright">
                &copy; Rosad Andi Pratama | All Right Reserved.
            </div>
        </footer>
        {{-- section about me end --}}
        <script src="{{ asset('js/myjs/home.js') }}">
        </script>
    </body>
</html>
