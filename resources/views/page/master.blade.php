<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    //icon 180 x 180
    <link rel="apple-touch-icon" href="#!">
    //icon 192 x 192
    <link rel="icon" href="#!">
    <title>@yield('judul_halaman')</title>

    <meta name="description" content="" />
    <meta name="robots" content="INDEX,FOLLOW" />

    <link rel="stylesheet" href="{{ asset('/ladun/css/style.css')}}">
    <link rel="stylesheet" href="{{ asset('/ladun/css/home.css')}}">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>

<body class="home">
    <a href="#start-of-content" tabindex="1" class="show-on-focus js-skip-to-content">
        Skip to content
    </a>

    <div class="content-container" id='divHome'>
        <nav class="is-visible" data-nav-status="toggle">
            <div class="region-selector">
                <div class="region-selector__inner">

                    <div class="region-selector__language">
                        <ul class="region-selector__dropdown breadcrumb-dropdown">
                            <li class="label">Language</li>
                            <li>
                                <div class="dropdown-control">
                                    <select role="menu" aria-label="Language select" data-onchange="redirect"
                                        name="language-options" class="news" aria-invalid="false"
                                        title="Language select">
                                        <option role="menuitem" value="/en-gb/global">EN-GB</option>
                                    </select>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="nav-burger-menu">
                <div class="hamburger" id="hamburger-9">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                </div>
                <a href="/"><img class="logo" src="{{asset('/ladun/img/logo_default.png')}}"></a>
                <ul class="nav mobile">
                    <li class="nav-search">
                        <a href="#" class="search">
                            Search
                        </a>
                    </li>
                </ul>
            </div>

            <ul class="nav" id="navigation">
                <!--- current page item should be on the selected page once chosen -->
                <li class="nav-logo">
                    <a href="/en-GB/global"><img class="logo" style="width: 100px;"
                            src="{{asset('/ladun/img/logo_default.png')}}" alt="Logo PartnerIndo"></a>
                </li>
                <li class="" v-for='mh in menuHeader'>
                    <a :href="mh.link" target="" class="">@{{mh.teks}}</a>
                </li>

                <li class="language-mobile mobile-only">
                    <a href="#" class="has-child">Language <span>EN-GB</span></a>
                    <div class="dropdown">
                        <div class="nav-column-container">
                            <div class="nav-column">
                                <a href="/en-gb/global">
                                    <h3 class="nav-heading">EN-GB</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>



                <li class="nav-search">
                    <a href="#" class="search">
                        Search
                    </a>
                </li>
            </ul>
            <div class="search-overlay">
                <a href="#" class="nav-close"></a>

                <div class="search-overlay-container container-padding">
                    <form class="search-overlay-form search-form" action="/en-gb/global/search"
                        data-url="/api/en-GB/AllenOveryGlobal/search-overlay" method="GET">
                        <input type="text" name="search" placeholder="Type search keyword" class="search-input"
                            autocomplete="off" />
                        <button type="submit"></button>
                    </form>

                    <div class="overlay-results">
                        <div class="people-results-container">
                            <script id="search-overlay-people" type="text/x-handlebars-template">
                                <h4>-</h4>
                    
                        <ul>
                     
                        </ul>
                    
                        <p class="people-no-results"></p>
                   
                </script>
                        </div>
                        <div class="content-results-container">
                            <script id="search-overlay-content" type="text/x-handlebars-template">
                                <h4></h4>
                  
                        <ul>
                       
                            <li><a href="" class="content"></a></li>
                      
                        </ul>
                 
                        <p class="search-no-results"></p>
                   
                </script>
                        </div>
                    </div>
                </div>
            </div>

        </nav>

        <div id="start-of-content" class="show-on-focus"></div>

        @yield('body')

    </div>

    <footer>
        <div class="footer" style="margin-top:20px;">
            <div class="footer__logo">
                <a href="#!">
                    <img src="{{asset('/ladun/img/logo_default.png')}}" alt="" />
                </a>
            </div>

            <ul class="footer__social__links">
                <li>Follow us</li>
                <li>
                    <a href="https://www.linkedin.com/company/allen-&amp;-overy" class="linkedin"
                        rel="noopener noreferrer" target="_blank"> <span>
                            Linkedin
                        </span>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/allenovery" class="twitter" rel="noopener noreferrer" target="_blank">
                        <span>
                            Twitter
                        </span>
                    </a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCuXjDxCSVAfT8MAJoAI3joA" class="youtube"
                        rel="noopener noreferrer" target="_blank"> <span>
                            YouTube
                        </span>
                    </a>
                </li>
                <li>
                    <a href="/en-gb/global/wechat" class="wechat" rel="noopener noreferrer" target="_blank"> <span>
                            WeChat
                        </span>
                    </a>
                </li>
                <li>
                    <a href="https://www.xing.com/company/allenovery/updates" class="xing" rel="noopener noreferrer"
                        target="_blank"> <span>
                            Xing
                        </span>
                    </a>
                </li>
            </ul>


            <ul class="footer__links">
                <li>
                    <a href="/en-gb/global/legal-notices/accessibility" class="" target="">Accessibility</a>

                </li>
                <li>
                    <a href="/en-gb/global/sitemap" class="" target="">Site map</a>

                </li>
                <li>
                    <a href="/en-gb/global/legal-notices" class="" target="">Legal notices</a>

                </li>
                <li>
                    <a href="/en-gb/global/legal-notices/cookies" class="" target="">Cookies policy</a>

                </li>
                <li>
                    <a href="/en-gb/global/legal-notices/privacy-policy" class="" target="">Privacy policy</a>

                </li>
                <li>
                    <a href="/global/-/media/allenovery/2_documents/about_us/legal_notices/modern_slavery_statement_2019.pdf"
                        class="" rel="noopener noreferrer" target="_blank" title="Anti slavery state">Anti-slavery and
                        human trafficking statement</a>
                </li>
            </ul>

            <div class="footer__copy">
                <div>2020 &copy; Partnerindo</div>
            </div>

        </div>
    </footer>
    <script src="{{asset('/ladun/js/scripts.min.js')}}"></script>
    <script src="{{asset('/ladun/js/home.js')}}"></script>
</body>

</html>