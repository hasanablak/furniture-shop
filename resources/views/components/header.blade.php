<header class="header-area header-responsive-padding ">
    <div class="header-bottom sticky-bar">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="logo">
                        <a href="#">
							@if(config('app.logo'))
								<img src="{{ config('app.logo') }}" alt="logo">
							@else
								<span style="font-family: 'Roboto', sans-serif;font-weight:bold; font-size:1.5rem">
									{{config('app.name')}}
								</span>
								
							@endif
						</a>
                    </div>
                </div>
                <div class="col-lg-6 d-none d-lg-block d-flex justify-content-center">
                    <div class="main-menu text-center">
                        <nav>
                            <ul>
                                <li><a href="/">ANASAYFA</a> </li>
                                <li><a href="/shop">MAĞAZA</a> </li>
                                <li><a href="/myorders">SİPARİŞLERİM</a></li>
                                <li><a href="/about">HAKKIMIZDA</a></li>
                                <li><a href="/contact">İLETİŞİM</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="header-action-wrap">
                        <div class="header-action-style header-search-1">
                            <a class="search-toggle" href="#">
                                <i class="pe-7s-search s-open"></i>
                                <i class="pe-7s-close s-close"></i>
                            </a>
                            <div class="search-wrap-1">
                                <form id="search-header-form" action="#" method="GET">
                                    <input placeholder="Search products…" type="text">
                                    <button type="submit" class="button-search"><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                        </div>

                        <div class="header-action-style header-action-cart">
                            <a class="cart-active" href="#"><i class="pe-7s-shopbag"></i>
                                <span class="js-total-cart product-count "></span>
                            </a>
                        </div>
                        @if (Auth::user())
                            <div class="header-action-style header-action-account">
                                <a title="Account">
                                    <img class="avatar-img" src="{{ Auth::user()->avatar }}" alt="avatar">
                                </a>
                                <ul>
                                    <li><a href="{{ route('my_account') }}">HESABIM</a></li>
                                    <li><a href="{{ route('my_orders') }}">SİPARİŞLERİM</a></li>
                                    <li><a href="/logout">ÇIKIŞ YAP</a></li>
                                </ul>
                            </div>
                        @else
                            <a href="/login" class="ms-2">
                                <span> GİRİŞ YAP</span>
                            </a>
                        @endif
                        <div class="header-action-style d-block d-lg-none">
                            <a class="mobile-menu-active-button" href="#"><i class="pe-7s-menu"></i></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


<!-- Mobile Menu start -->
<div class="off-canvas-active">
    <a class="off-canvas-close"><i class=" ti-close "></i></a>
    <div class="off-canvas-wrap">
        <div class="mobile-menu-wrap off-canvas-margin-padding-2">
            <div id="mobile-menu" class="slinky-mobile-menu text-left">
                <ul>
                    <li>
                        <a href="/">ANASAYFA</a>
                    </li>
                    <li>
                        <a href="/shop">MAĞAZA</a>
                    </li>
                    <li>
                        <a href="#">SAYFALAR </a>
                        <ul>
                            <li><a href="#">HAKKIMIZDA </a></li>
                            <li><a href="#">SEPET</a></li>
                            <li><a href="#">ÖDEME </a></li>
                            <li><a href="/account">HESABIM</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/about">HAKKIMIZDA</a>
                    </li>
                    <li>
                        <a href="/contact">İLETİŞİM</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
