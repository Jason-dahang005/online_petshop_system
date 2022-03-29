<!-- Start Header Area -->
<header class="header navbar-area">
  <!-- Start Topbar -->
  {{-- <div class="topbar">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-4 col-md-4 col-12">
                  <div class="top-left">
                      <ul class="menu-top-link">
                          <li>
                              <div class="select-position">
                                  <select id="select4">
                                      <option value="0" selected>$ USD</option>
                                      <option value="1">€ EURO</option>
                                      <option value="2">$ CAD</option>
                                      <option value="3">₹ INR</option>
                                      <option value="4">¥ CNY</option>
                                      <option value="5">৳ BDT</option>
                                  </select>
                              </div>
                          </li>
                          <li>
                              <div class="select-position">
                                  <select id="select5">
                                      <option value="0" selected>English</option>
                                      <option value="1">Español</option>
                                      <option value="2">Filipino</option>
                                      <option value="3">Français</option>
                                      <option value="4">العربية</option>
                                      <option value="5">हिन्दी</option>
                                      <option value="6">বাংলা</option>
                                  </select>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                  <div class="top-middle">
                      <ul class="useful-links">
                          <li><a href="index.html">Home</a></li>
                          <li><a href="about-us.html">About Us</a></li>
                          <li><a href="contact.html">Contact Us</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-4 col-md-4 col-12">
                  <div class="top-end">
                      <div class="user">
                          <i class="lni lni-user"></i>
                          Hello
                      </div>
                      <ul class="user-login">
                          <li>
                              <a href="login.html">Sign In</a>
                          </li>
                          <li>
                              <a href="register.html">Register</a>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div> --}}
  <!-- End Topbar -->
  <!-- Start Header Middle -->
  <div class="header-middle">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-3 col-md-3 col-7">
                <!-- Start Header Logo -->
                <a class="navbar-brand" href="{{ url('/') }}">
                  <img src="{{ asset('/assets/images/logo.png') }}" alt="Logo" >
                </a>
                <!-- End Header Logo -->
              </div>
              <div class="col-lg-5 col-md-7 d-xs-none">
                  <!-- Start Main Menu Search -->
                  <div class="main-menu-search">
                      <!-- navbar search start -->
                      <div class="navbar-search search-style-5">
                          {{-- <div class="search-select">
                              <div class="select-position">
                                  <select id="select1">
                                      <option selected>All</option>
                                      <option value="1">option 01</option>
                                      <option value="2">option 02</option>
                                      <option value="3">option 03</option>
                                      <option value="4">option 04</option>
                                      <option value="5">option 05</option>
                                  </select>
                              </div>
                          </div> --}}
                          <div class="search-input">
                              <input type="text" placeholder="Search Products Here">
                          </div>
                          <div class="search-btn">
                              <button><i class="lni lni-search-alt"></i></button>
                          </div>
                      </div>
                      <!-- navbar search Ends -->
                  </div>
                  <!-- End Main Menu Search -->
              </div>
              <div class="col-lg-4 col-md-2 col-5">
                <div class="middle-right-area">
                  <div class="nav-hotline">
                      <i class="lni lni-phone"></i>
                      <h3>Hotline:
                          <span>(+100) 123 456 7890</span>
                      </h3>
                  </div>
                  <div class="navbar-cart">
                    <div class="wishlist">
                      <a href="javascript:void(0)">
                        <i class="lni lni-heart"></i>
                        <span class="total-items">0</span>
                      </a>
                    </div>
                    
                    <div class="cart-items">
                      <a href="
                            @guest
                                {{ route('login') }}
                            @endguest
                        " class="main-btn">
                        <i class="lni lni-cart"></i>
                        <span class="total-items">{{ Cart::content()->count() }}</span>
                      </a>
                      <!-- Shopping Item -->
                      @auth
                      <div class="shopping-item">
                        <div class="dropdown-cart-header">
                            @if (Cart::content()->count() > 1)
                                <span>{{ Cart::content()->count() }} Items</span>
                            @else
                            <span>{{ Cart::content()->count() }} Item</span>
                            @endif
                            <a href="{{ url('/cart') }}">View Cart</a>
                        </div>
                        <ul class="shopping-list">
                            @foreach (Cart::content() as $item)
                                <li>
                                    <a href="javascript:void(0)" class="remove" title="Remove this item"><i class="lni lni-close"></i></a>
                                    <div class="cart-img-head">
                                        <a class="cart-img" href="product-details.html"><img src="{{ asset('images') }}/{{ $item->image }}" alt="#"></a>
                                    </div>

                                    <div class="content">
                                        <h4><a href="product-details.html">{{ $item->name }}</a></h4>
                                        <p class="quantity">{{ $item->qty }}x - <span class="amount">₱{{ $item->price }}</span></p>
                                    </div>
                                </li>
                            @endforeach
                            {{-- <li>
                                <a href="javascript:void(0)" class="remove" title="Remove this item"><i
                                        class="lni lni-close"></i></a>
                                <div class="cart-img-head">
                                    <a class="cart-img" href="product-details.html"><img src="assets/images/header/cart-items/item2.jpg" alt="#"></a>
                                </div>
                                <div class="content">
                                    <h4><a href="product-details.html">Product 2</a></h4>
                                    <p class="quantity">1x - <span class="amount">₱35.00</span></p>
                                </div>
                            </li> --}}
                        </ul>
                        <div class="bottom">
                            <div class="total">
                                <span>Total</span>
                                <span class="total-amount">₱{{ Cart::subtotal() }}</span>
                            </div>
                            <div class="button">
                                <a href="{{ url('/checkout') }}" class="btn animate">Checkout</a>
                            </div>
                        </div>
                    </div>
                      @endauth
                      <!--/ End Shopping Item -->
                    </div>
                    <div class="auth-user">
                      <a href="" class="main-btn">
                        @guest
                        <i class="lni lni-user"></i>
                        @endguest

                        @auth
                         {{ Auth::user()->name }}
                        @endauth
                      </a>
                      <div class="auth-user-options">
                        <ul class="option-list">
                          @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                          @endguest

                          @auth
                            <li><a href="">Profile</a></li>
                            <li><a href="">Orders</a></li>
                            <li><a href="">Wishlist</a></li>
                            <li><a href="">Followed Stores</a></li>
                            {{-- <li><a href="{{ route('logout') }}">Logout</a></li> --}}
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >Logout</a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                            </form>
                          @endauth
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
  </div>
  <!-- End Header Middle -->
  <!-- Start Header Bottom -->
  <div class="container">
      <div class="row align-items-center">
          <div class="col-lg-8 col-md-6 col-12">
              <div class="nav-inner">
                  <!-- Start Mega Category Menu -->
                  {{-- <div class="mega-category-menu">
                      <span class="cat-button"><i class="lni lni-menu"></i>All Categories</span>
                      <ul class="sub-category">
                          <li><a href="product-grids.html">Electronics <i class="lni lni-chevron-right"></i></a>
                              <ul class="inner-sub-category">
                                  <li><a href="product-grids.html">Digital Cameras</a></li>
                                  <li><a href="product-grids.html">Camcorders</a></li>
                                  <li><a href="product-grids.html">Camera Drones</a></li>
                                  <li><a href="product-grids.html">Smart Watches</a></li>
                                  <li><a href="product-grids.html">Headphones</a></li>
                                  <li><a href="product-grids.html">MP3 Players</a></li>
                                  <li><a href="product-grids.html">Microphones</a></li>
                                  <li><a href="product-grids.html">Chargers</a></li>
                                  <li><a href="product-grids.html">Batteries</a></li>
                                  <li><a href="product-grids.html">Cables & Adapters</a></li>
                              </ul>
                          </li>
                          <li><a href="product-grids.html">accessories</a></li>
                          <li><a href="product-grids.html">Televisions</a></li>
                          <li><a href="product-grids.html">best selling</a></li>
                          <li><a href="product-grids.html">top 100 offer</a></li>
                          <li><a href="product-grids.html">sunglass</a></li>
                          <li><a href="product-grids.html">watch</a></li>
                          <li><a href="product-grids.html">man’s product</a></li>
                          <li><a href="product-grids.html">Home Audio & Theater</a></li>
                          <li><a href="product-grids.html">Computers & Tablets </a></li>
                          <li><a href="product-grids.html">Video Games </a></li>
                          <li><a href="product-grids.html">Home Appliances </a></li>
                      </ul>
                  </div> --}}
                  <!-- End Mega Category Menu -->
                  <!-- Start Navbar -->
                  <nav class="navbar navbar-expand-lg">
                      <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                          aria-expanded="false" aria-label="Toggle navigation">
                          <span class="toggler-icon"></span>
                          <span class="toggler-icon"></span>
                          <span class="toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                          <ul id="nav" class="navbar-nav ms-auto">
                              <li class="nav-item">
                                  <a href="index.html" class="active" aria-label="Toggle navigation">Home</a>
                              </li>
                              <li class="nav-item">
                                  <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                      data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent"
                                      aria-expanded="false" aria-label="Toggle navigation">Product Category</a>
                                  <ul class="sub-menu collapse" id="submenu-1-2">
                            
                                  </ul>
                              </li>
                              <li class="nav-item">
                                  <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                      data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent"
                                      aria-expanded="false" aria-label="Toggle navigation">Shop</a>
                                  <ul class="sub-menu collapse" id="submenu-1-3">
                                      <li class="nav-item"><a href="product-grids.html">Shop Grid</a></li>
                                      <li class="nav-item"><a href="product-list.html">Shop List</a></li>
                                      <li class="nav-item"><a href="product-details.html">shop Single</a></li>
                                      <li class="nav-item"><a href="cart.html">Cart</a></li>
                                      <li class="nav-item"><a href="checkout.html">Checkout</a></li>
                                  </ul>
                              </li>
                              
                              <li class="nav-item">
                                  <a href="contact.html" aria-label="Toggle navigation">Contact Us</a>
                              </li>
                          </ul>
                      </div> <!-- navbar collapse -->
                  </nav>
                  <!-- End Navbar -->
              </div>
          </div>
          <div class="col-lg-4 col-md-6 col-12">
              <!-- Start Nav Social -->
              <div class="nav-social">
                  <h5 class="title">Follow Us:</h5>
                  <ul>
                      <li>
                          <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                      </li>
                      <li>
                          <a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                      </li>
                      <li>
                          <a href="javascript:void(0)"><i class="lni lni-instagram"></i></a>
                      </li>
                      <li>
                          <a href="javascript:void(0)"><i class="lni lni-skype"></i></a>
                      </li>
                  </ul>
              </div>
              <!-- End Nav Social -->
          </div>
      </div>
  </div>
  <!-- End Header Bottom -->
</header>
<!-- End Header Area -->