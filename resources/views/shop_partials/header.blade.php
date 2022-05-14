<div class="notice-top-bar bg-primary" data-sticky-start-at="180">
    <button class="hamburguer-btn hamburguer-btn-light notice-top-bar-close m-0 active" data-set-active="false">
					<span class="close">
						<span></span>
						<span></span>
					</span>
    </button>
{{--    алерт сверху шапки сайта, для важных обьявлений, доделать --}}
    @if (false)
    <div class="container">
        <div class="row justify-content-center py-2">
            <div class="col-9 col-md-12 text-center">
                <p class="text-color-light font-weight-semibold mb-0">Get Up to <strong>40% OFF</strong> New-Season
                    Styles <a href="#" class="btn btn-primary-scale-2 btn-modern btn-px-2 btn-py-1 ml-2">MEN</a> <a
                        href="#" class="btn btn-primary-scale-2 btn-modern btn-px-2 btn-py-1 ml-1 mr-2">WOMAN</a> <span
                        class="opacity-6 text-1">* Limited time only.</span></p>
            </div>
        </div>
    </div>
    @endif
</div>
<header id="header"
        data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 135, 'stickySetTop': '-135px', 'stickyChangeLogo': true}">
    <div class="header-body header-body-bottom-border-fixed box-shadow-none border-top-0">
        <div class="header-top header-top-small-minheight header-top-simple-border-bottom">
            <div class="container">
                <div class="header-row justify-content-between">
                    <div class="header-column col-auto px-0">
                        <div class="header-row">
                            <p class="font-weight-semibold text-1 mb-0 d-none d-sm-block d-md-none">Бесплатная доставка при полной предоплате</p>
                            <p class="font-weight-semibold text-1 mb-0 d-none d-md-block">Бесплатная доставка при полной предоплате</p>
                        </div>
                    </div>
                    <div class="header-column justify-content-end col-auto px-0">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills font-weight-semibold text-2">
                                    <li class="nav-item dropdown nav-item-left-border d-lg-none">
                                        <a class="nav-link text-color-default text-color-hover-primary" href="#"
                                           role="button" id="dropdownMobileMore" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            More
                                            <i class="fas fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMobileMore">
                                            <a class="dropdown-item" href="{{route('about')}}">О Нас</a>
                                            <a class="dropdown-item" href="{{route('blog')}}">Blog</a>
                                            <a class="dropdown-item" href="{{route('contacts')}}">Контакты</a>
                                            <a class="dropdown-item" href="{{route('faq')}}">FAQ</a>
                                        </div>
                                    </li>
                                    <li class="nav-item d-none d-lg-inline-block">
                                        <a href="{{route('about')}}"
                                           class="text-decoration-none text-color-default text-color-hover-primary">О Нас</a>
                                    </li>
                                    <li class="nav-item d-none d-lg-inline-block">
                                        <a href="{{route('blog')}}"
                                           class="text-decoration-none text-color-default text-color-hover-primary">Blog</a>
                                    </li>
                                    <li class="nav-item d-none d-lg-inline-block">
                                        <a href="{{route('contacts')}}"
                                           class="text-decoration-none text-color-default text-color-hover-primary">Контакты</a>
                                    </li>
                                    <li class="nav-item d-none d-xl-inline-block">
                                        <a href="{{route('faq')}}"
                                           class="text-decoration-none text-color-default text-color-hover-primary">Help
                                            & FAQs</a>
                                    </li>

                                    <li class="nav-item dropdown nav-item-left-border">
                                        <a class="nav-link text-color-default text-color-hover-primary" href="#"
                                           role="button" id="dropdownCurrency" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            UAH
                                        </a>
                                    </li>
                                    <li class="nav-item dropdown nav-item-right-border">
                                        <a class="nav-link text-color-default text-color-hover-primary" href="#"
                                           role="button" id="dropdownLanguage" data-toggle="dropdown"
                                           aria-haspopup="true" aria-expanded="false">
                                            RU
                                        </a>
                                    </li>
                                </ul>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row py-2">
                <div class="header-column w-100">
                    <div class="header-row justify-content-between">
                        <div class="header-logo z-index-2 col-lg-2 px-0">
                            <a href="{{route('home')}}">
                                <img alt="Bafang" width="250" height="48" data-sticky-width="82" data-sticky-height="40"
                                     data-sticky-top="84" src="img/logo_bafang.png">
                            </a>
                        </div>
                        <ul class="header-extra-info col-lg-3 col-xl-2 pl-2 pl-xl-0 d-none d-lg-block">
                            <li class="d-none d-sm-inline-flex ml-0">
                                <div class="header-extra-info-icon">
                                    <i class="icons icon-phone text-3 text-color-dark position-relative top-1"></i>
                                </div>
                                <div class="header-extra-info-text">
                                    <label class="text-1 font-weight-semibold text-color-default">Отдел продаж\консультации</label>
                                    <strong class="text-4"><a href="tel:+1234567890"
                                                              class="text-color-hover-primary text-decoration-none">+123
                                            4567 890</a></strong>
                                </div>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        </div>
                </div>
            </div>
        </div>
    </div>
</header>
