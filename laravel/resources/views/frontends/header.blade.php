<header class="main-header">
    <!--  logo  -->
    <div class="logo-holder"><a href="/home"><img src="{{asset('images/logo.svg')}}" alt="Đà Lạt Bất Động Sản"></a></div>
    <!-- logo end  -->
    <!-- nav-button-wrap-->
    <div class="nav-button-wrap color-bg nvminit">
        <div class="nav-button">
            <span></span><span></span><span></span>
        </div>
    </div>
    <!-- nav-button-wrap end-->
    <!-- header-search button  -->
    <div class="header-search-button">
        <i class="fal fa-search"></i>
        <span>Tìm nhanh</span>
    </div>
    <!-- header-search button end  -->
    <!--  add new  btn -->
    {{-- <div class="add-list_wrap">
        <a href="/dang-tin" class="add-list color-bg"><i class="fal fa-plus"></i> <span>Đăng tin</span></a>
    </div> --}}
    <!--  add new  btn end -->
    <!--  header-opt_btn -->
    {{-- <div class="header-opt_btn tolt" data-microtip-position="bottom" data-tooltip="Language / Currency">
        <span><i class="fal fa-globe"></i></span>
    </div> --}}
    <!--  header-opt_btn end -->
    <!--  cart-btn   -->
    {{-- <div class="cart-btn  tolt show-header-modal" data-microtip-position="bottom"
        data-tooltip="Your Wishlist / Compare">
        <i class="fal fa-bell"></i>
        <span class="cart-btn_counter color-bg">5</span>
    </div> --}}
    <!--  cart-btn end -->
    <!--  login btn -->
    <div class="show-reg-form modal-open"><i class="fas fa-user"></i><span>Đăng nhập</span></div>
    <!--  login btn  end -->
    <!--  navigation -->
    <div class="nav-holder main-menu">
        <nav>
            <ul class="no-list-style">
                <li>
                    <a href="/home" class="act-link">Trang chủ <i class="fa"></i></a>
                </li>
                <li>
                    <a href="/nha-ban">Nhà bán <i class="fa "></i></a>
                </li>
                <li>
                    <a href="/dat-ban">Đất bán <i class="fa "></i></a>
                </li>
                {{-- <li>
                    <a href="#">Listings <i class="fa fa-caret-down"></i></a>
                    <!--second level -->
                    <ul>
                        <li><a href="listing.html">Column map</a></li>
                        <li><a href="listing2.html">Column map 2</a></li>
                        <li><a href="listing3.html">Fullwidth Map</a></li>
                        <li><a href="listing4.html">Fullwidth Map 2</a></li>
                        <li><a href="listing5.html">Without Map</a></li>
                        <li><a href="listing6.html">Without Map 2</a></li>
                        <li>
                            <a href="#">Single <i class="fa fa-caret-down"></i></a>
                            <!--third  level  -->
                            <ul>
                                <li><a href="listing-single.html">Style 1</a></li>
                                <li><a href="listing-single2.html">Style 2</a></li>
                                <li><a href="listing-single3.html">Style 3</a></li>
                            </ul>
                            <!--third  level end-->
                        </li>
                    </ul>
                    <!--second level end-->
                </li> --}}
                {{-- <li>
                    <a href="#">Agents<i class="fa fa-caret-down"></i></a>
                    <!--second level -->
                    <ul>
                        <li><a href="agent-list.html">Agent List</a></li>
                        <li><a href="agency-list.html">Agency List</a></li>
                        <li><a href="agent-single.html">Agent Single</a></li>
                        <li><a href="agency-single.html">Agency Single</a></li>
                    </ul>
                    <!--second level end-->
                </li> --}}
                <li>
                    <a href="/tin-tuc">Tin tức</a>
                </li>
                <li>
                    <a href="/wiki">Wiki BĐS</a>
                </li>
                {{-- <li>
                    <a href="#">Pages <i class="fa fa-caret-down"></i></a>
                    <!--second level -->
                    <ul>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contacts.html">Contacts</a></li>
                        <li><a href="help.html">Help FAQ</a></li>
                        <li><a href="pricing.html">Pricing </a></li>
                        <li><a href="dashboard.html">User Dashboard</a></li>
                        <li><a href="blog-single.html">Blog Single</a></li>
                        <li><a href="compare.html">Compare</a></li>
                        <li><a href="coming-soon.html">Coming Soon</a></li>
                        <li><a href="404.html">404</a></li>
                    </ul>
                    <!--second level end-->
                </li> --}}
            </ul>
        </nav>
    </div>
    <!-- navigation  end -->
    <!-- header-search-wrapper -->
    <div class="header-search-wrapper novis_search">
        {{-- <div class="header-serach-menu">
            <div class="custom-switcher fl-wrap">
                <div class="fieldset fl-wrap">
                    <input type="radio" name="duration-1" id="buy_sw" class="tariff-toggle" checked>
                    <label for="buy_sw">Buy</label>
                    <input type="radio" name="duration-1" class="tariff-toggle" id="rent_sw">
                    <label for="rent_sw" class="lss_lb">Rent</label>
                    <span class="switch color-bg"></span>
                </div>
            </div>
        </div> --}}
        <div class="custom-form">
            <form method="post" name="registerform">
                <label>Tìm nhanh </label>
                <input type="text" placeholder="Đường, Phường, Xã" value="" id="123" />
                <label>Loại nhà đất</label>
                <select data-placeholder="Categories" class="chosen-select on-radius no-search-select">
                    <option>Tất cả nhà đất</option>
                        <option>Nhà bán</option>
                        <option>Nhà riêng</option>
                        <option>Nhà biệt thự</option>
                        <option>Đất bán</option>
                        <option>Căn hộ chung cư</option>
                </select>
                <label style="margin-top:10px;">Mức giá</label>
                <div class="price-rage-item fl-wrap">
                    <input type="text" class="price-range" data-min="100" data-max="100000" name="price-range1"
                        data-step="1" value="1" data-prefix="$">
                </div>
                <button onclick="location.href='/nha-ban'" type="button" class="btn float-btn color-bg"><i
                        class="fal fa-search"></i> Tìm kiếm</button>
            </form>
        </div>
    </div>
    <!-- header-search-wrapper end  -->
    <!-- wishlist-wrap-->
    <div class="header-modal novis_wishlist tabs-act">
        <ul class="tabs-menu fl-wrap no-list-style">
            <li class="current"><a href="#tab-wish"> Wishlist <span>- 3</span></a></li>
            <li><a href="#tab-compare"> Compare <span>- 2</span></a></li>
        </ul>
        <!--tabs -->
        <div class="tabs-container">
            <div class="tab">
                <!--tab -->
                <div id="tab-wish" class="tab-content first-tab">
                    <!-- header-modal-container-->
                    <div class="header-modal-container scrollbar-inner fl-wrap" data-simplebar>
                        <!--widget-posts-->
                        <div class="widget-posts  fl-wrap">
                            <ul class="no-list-style">
                                <li>
                                    <div class="widget-posts-img"><a href="listing-single.html"><img
                                                src="{{asset('images/all/small/1.jpg')}} " alt=""></a>
                                    </div>
                                    <div class="widget-posts-descr">
                                        <h4><a href="listing-single.html">Affordable Urban Room</a></h4>
                                        <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                    class="fas fa-map-marker-alt"></i> 40 Journal Square , NJ, USA</a>
                                        </div>
                                        <div class="widget-posts-descr-price"><span>Price: </span> $ 1500 / per month
                                        </div>
                                        <div class="clear-wishlist"><i class="fal fa-trash-alt"></i></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-posts-img"><a href="listing-single.html"><img
                                                src="{{asset('images/all/small/1.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="widget-posts-descr">
                                        <h4><a href="listing-single.html">Family House</a></h4>
                                        <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                    class="fas fa-map-marker-alt"></i> 34-42 Montgomery St , NY, USA</a>
                                        </div>
                                        <div class="widget-posts-descr-price"><span>Price: </span> $ 50.000</div>
                                        <div class="clear-wishlist"><i class="fal fa-trash-alt"></i></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="widget-posts-img"><a href="listing-single.html"><img
                                                src="{{asset('images/all/small/1.jpg')}}" alt=""></a>
                                    </div>
                                    <div class="widget-posts-descr">
                                        <h4><a href="listing-single.html">Apartment to Rent</a></h4>
                                        <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                    class="fas fa-map-marker-alt"></i>75 Prince St, NY, USA</a></div>
                                        <div class="widget-posts-descr-price"><span>Price: </span> $100 / per night
                                        </div>
                                        <div class="clear-wishlist"><i class="fal fa-trash-alt"></i></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- widget-posts end-->
                    </div>
                    <!-- header-modal-container end-->
                    <div class="header-modal-top fl-wrap">
                        <div class="clear_wishlist color-bg"><i class="fal fa-trash-alt"></i> Clear all</div>
                    </div>
                </div>
                <!--tab end -->
                <!--tab -->
                <div class="tab">
                    <div id="tab-compare" class="tab-content">
                        <!-- header-modal-container-->
                        <div class="header-modal-container scrollbar-inner fl-wrap" data-simplebar>
                            <!--widget-posts-->
                            <div class="widget-posts  fl-wrap">
                                <ul class="no-list-style">
                                    <li>
                                        <div class="widget-posts-img"><a href="listing-single.html"><img
                                                    src="{{asset('images/all/small/1.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="widget-posts-descr">
                                            <h4><a href="listing-single.html">Gorgeous house for sale</a></h4>
                                            <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                        class="fas fa-map-marker-alt"></i> 70 Bright St New York, USA
                                                </a></div>
                                            <div class="widget-posts-descr-price"><span>Price: </span> $ 52.100</div>
                                            <div class="clear-wishlist"><i class="fal fa-trash-alt"></i></div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="widget-posts-img"><a href="listing-single.html"><img
                                                    src="{{asset('images/all/small/1.jpg')}}" alt=""></a>
                                        </div>
                                        <div class="widget-posts-descr">
                                            <h4><a href="listing-single.html">Family Apartments</a></h4>
                                            <div class="geodir-category-location fl-wrap"><a href="#"><i
                                                        class="fas fa-map-marker-alt"></i> W 85th St, New York, USA </a>
                                            </div>
                                            <div class="widget-posts-descr-price"><span>Price: </span> $ 72.400</div>
                                            <div class="clear-wishlist"><i class="fal fa-trash-alt"></i></div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- widget-posts end-->
                        </div>
                        <!-- header-modal-container end-->
                        <div class="header-modal-top fl-wrap">
                            <a class="clear_wishlist color-bg" href="compare.html"><i class="fal fa-random"></i>
                                Compare</a>
                        </div>
                    </div>
                </div>
                <!--tab end -->
            </div>
            <!--tabs end -->
        </div>
    </div>
    <!--wishlist-wrap end -->
    <!--header-opt-modal-->
    {{-- <div class="header-opt-modal novis_header-mod">
        <div class="header-opt-modal-container hopmc_init">
            <div class="header-opt-modal-item lang-item fl-wrap">
                <h4>Language: <span>EN</span></h4>
                <div class="header-opt-modal-list fl-wrap">
                    <ul>
                        <li><a href="#" class="current-lan" data-lantext="EN">English</a></li>
                        <li><a href="#" data-lantext="FR">Franais</a></li>
                        <li><a href="#" data-lantext="ES">Espaol</a></li>
                        <li><a href="#" data-lantext="DE">Deutsch</a></li>
                    </ul>
                </div>
            </div>
            <div class="header-opt-modal-item currency-item fl-wrap">
                <h4>Currency: <span>USD</span></h4>
                <div class="header-opt-modal-list fl-wrap">
                    <ul>
                        <li><a href="#" class="current-lan" data-lantext="USD">USD</a></li>
                        <li><a href="#" data-lantext="EUR">EUR</a></li>
                        <li><a href="#" data-lantext="GBP">GBP</a></li>
                        <li><a href="#" data-lantext="RUR">RUR</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> --}}
    <!--header-opt-modal end -->
</header>
