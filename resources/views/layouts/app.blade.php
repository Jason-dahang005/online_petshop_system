<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>@yield('title')</title>

	<link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/assets/css/LineIcons.3.0.css') }}">
	<link rel="stylesheet" href="{{ asset('/assets/css/tiny-slider.css') }}">
	<link rel="stylesheet" href="{{ asset('/assets/css/glightbox.min.css') }}">
	<link rel="stylesheet" href="{{ asset('/assets/css/main.css') }}">
</head>
<body>

	@include('header')
	<main>
		@yield('user_content')
	</main>

    @include('footer')

  <script src="{{ asset('/assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/assets/js/tiny-slider.js') }}"></script>
  <script src="{{ asset('/assets/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('/assets/js/main.js') }}"></script>
  <script type="text/javascript">
      //========= Hero Slider 
      tns({
          container: '.hero-slider',
          slideBy: 'page',
          autoplay: true,
          autoplayButtonOutput: false,
          mouseDrag: true,
          gutter: 0,
          items: 1,
          nav: false,
          controls: true,
          controlsText: ['<i class="lni lni-chevron-left"></i>', '<i class="lni lni-chevron-right"></i>'],
      });

      //======== Brand Slider
      tns({
          container: '.brands-logo-carousel',
          autoplay: true,
          autoplayButtonOutput: false,
          mouseDrag: true,
          gutter: 15,
          nav: false,
          controls: false,
          responsive: {
              0: {
                  items: 1,
              },
              540: {
                  items: 3,
              },
              768: {
                  items: 5,
              },
              992: {
                  items: 6,
              }
          }
      });

  </script>
  <script>
		const finaleDate = new Date("February 15, 2023 00:00:00").getTime();

		const timer = () => {
			const now = new Date().getTime();
			let diff = finaleDate - now;
			if (diff < 0) {
					document.querySelector('.alert').style.display = 'block';
					document.querySelector('.container').style.display = 'none';
			}

			let days = Math.floor(diff / (1000 * 60 * 60 * 24));
			let hours = Math.floor(diff % (1000 * 60 * 60 * 24) / (1000 * 60 * 60));
			let minutes = Math.floor(diff % (1000 * 60 * 60) / (1000 * 60));
			let seconds = Math.floor(diff % (1000 * 60) / 1000);

			days <= 99 ? days = `0${days}` : days;
			days <= 9 ? days = `00${days}` : days;
			hours <= 9 ? hours = `0${hours}` : hours;
			minutes <= 9 ? minutes = `0${minutes}` : minutes;
			seconds <= 9 ? seconds = `0${seconds}` : seconds;

			document.querySelector('#days').textContent = days;
			document.querySelector('#hours').textContent = hours;
			document.querySelector('#minutes').textContent = minutes;
			document.querySelector('#seconds').textContent = seconds;
		}
		timer();
		setInterval(timer, 1000);
	</script>
</body>
</html>



{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}
