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
                <h1>I am <span>Rosad Andi Pratama</span></h1>
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
                <div class="card-last-project">
                    <div class="image-herro-card">
                        <img src="{{ asset('img/projects/project1.png') }}" alt="project">
                    </div>
                    <div class="text-herro-card">
                        <h2>Project website <span>market place</span></h2>
                        <h6>in project i am a frond end</h6>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        <div class="action">
                            <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layout-text-window" viewBox="0 0 16 16">
                                <path d="M3 6.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z"/>
                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v1H1V2a1 1 0 0 1 1-1zm1 3v10a1 1 0 0 1-1 1h-2V4zm-4 0v11H2a1 1 0 0 1-1-1V4z"/>
                              </svg> View study case</a>
                            <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
                                <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
                              </svg> Visite to website</a>
                        </div>
                    </div>
                </div>
                <div class="card-last-project">
                    <div class="image-herro-card">
                        <img src="{{ asset('img/projects/project2.png') }}" alt="project">
                    </div>
                    <div class="text-herro-card">
                        <h2>Project website <span>market place</span></h2>
                        <h6>in project i am a frond end</h6>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        <div class="action">
                            <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layout-text-window" viewBox="0 0 16 16">
                                <path d="M3 6.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z"/>
                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v1H1V2a1 1 0 0 1 1-1zm1 3v10a1 1 0 0 1-1 1h-2V4zm-4 0v11H2a1 1 0 0 1-1-1V4z"/>
                              </svg> View study case</a>
                            <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
                                <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
                              </svg> Visite to website</a>
                        </div>
                    </div>
                </div>
                <div class="card-last-project">
                    <div class="image-herro-card">
                        <img src="{{ asset('img/projects/project3.png') }}" alt="project">
                    </div>
                    <div class="text-herro-card">
                        <h2>Project website <span>market place</span></h2>
                        <h6>in project i am a frond end</h6>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                        <div class="action">
                            <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layout-text-window" viewBox="0 0 16 16">
                                <path d="M3 6.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0 3a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m.5 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z"/>
                                <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v1H1V2a1 1 0 0 1 1-1zm1 3v10a1 1 0 0 1-1 1h-2V4zm-4 0v11H2a1 1 0 0 1-1-1V4z"/>
                              </svg> View study case</a>
                            <a href="#"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-display" viewBox="0 0 16 16">
                                <path d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302 1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
                              </svg> Visite to website</a>
                        </div>
                    </div>
                </div>
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                      </svg>
                </div>
                <div class="card-description">
                    <h5>Problem Solving</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, fuga.</p>
                </div>
            </div>
            <div class="card-why-me">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 20h9"></path>
                        <path d="M12 4v16"></path>
                        <path d="M21 11l-9-8-9 8"></path>
                      </svg>
                </div>
                <div class="card-description">
                    <h5>Kemampuan belajar yang baik</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, fuga.</p>
                </div>
            </div>
            <div class="card-why-me">
                <div class="card-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="21" y1="12" x2="3" y2="12"></line>
                        <line x1="12" y1="21" x2="12" y2="3"></line>
                        <path d="M21 12a9 9 0 0 0-9-9"></path>
                        <path d="M12 21a9 9 0 0 0 9-9"></path>
                      </svg>
                </div>
                <div class="card-description">
                    <h5>Kemampuan belajar yang baik</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, fuga.</p>
                </div>
            </div>
        </section>
        {{-- section-why-me end --}}
        <script src="{{ asset('js/myjs/home.js') }}">
        </script>
    </body>
</html>
