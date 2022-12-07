<!doctype html>
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
    <style>
        * {
  padding: 0;
  margin: 0;
  position: relative;
  box-sizing: border-box;
}

.listing-section, .cart-section {
  width: 100%;
  float: left;
  padding: 1%;
  border-bottom: 0.01em solid #dddbdb;
}

.product {
  float: left;
  width: 23%;
  border-radius: 2%;
  margin: 1%;
}

.product:hover {
  box-shadow: 1.5px 1.5px 2.5px 3px rgba(0, 0, 0, 0.4);
  -webkit-box-shadow: 1.5px 1.5px 2.5px 3px rgba(0, 0, 0, 0.4);  
  -moz-box-shadow:    1.5px 1.5px 2.5px 3px rgba(0, 0, 0, 0.4);
}

.image-box {
  width: 100%;
  overflow: hidden;
  border-radius: 2% 2% 0 0;
}

.images {
  height: 15em;
  background-size: cover; 
  background-position: center center; 
  background-repeat: no-repeat;
  border-radius: 2% 2% 0 0;
  transition: all 1s ease;
  -moz-transition: all 1s ease;
  -ms-transition: all 1s ease;
  -webkit-transition: all 1s ease;
  -o-transition: all 1s ease;
}

.images:hover {
  transform: scale(1.2);
  overflow: hidden;
  border-radius: 2%;
}

/* IMAGES */
#image-1 {background-image: url("https://sc01.alicdn.com/kf/UT8.CaXX2NXXXagOFbXC/fresh-navel-oranges.jpg");}

#image-2 {background-image: url("https://newenglandapples.files.wordpress.com/2014/10/img_5595.jpg")}

#image-3 {background-image: url("https://sc01.alicdn.com/kf/UT8ovSIXQNaXXagOFbXt/Fresh-Passion-Fruit-with-Best-Price-and.jpg")}

#image-4 {background-image: url("http://www.foodmatters.com/media/images/articles/16-powerful-reasons-to-eat-pineapple.jpg")}

#image-5 {background-image: url("http://membrillo.com.au/wp-content/uploads/2016/11/bg-mango-01.jpg")}

#image-6 {background-image: url("http://ell.h-cdn.co/assets/16/27/980x490/landscape-1467750721-gettyimages-146896572.jpg")}

#image-7 {background-image: url("http://www.hesca.org/wp-content/uploads/2016/08/banana.jpg")}

#image-8 {background-image: url("http://www.baag.com.au/pictures/produce/plums2.jpg")}

#image-9 {background-image: url("https://ecowatchroar-img.rbl.ms/simage/https%3A%2F%2Fassets.rbl.ms%2F9458277%2F1200x600.jpg/2000%2C2000/J9vl96eLQCOEy3Xy/img.jpg")}

#image-10 {background-image: url("https://www.parhlo.com/wp-content/uploads/2016/04/Valencia_market_-_lemons-1940x1454.jpg")}

.text-box {
  width: 100%;
  float: left;
  border: 0.01em solid #dddbdb;
  border-radius: 0 0 2% 2%;
  padding: 1em;
}

h2, h3 {
  float: left;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 1em;
  text-transform: uppercase;
  margin: 0.2em auto;
}

.item, .price {
  clear: left;
  width: 100%;
  text-align: center;
}

.price {
  color: Grey;
}

.description, label, button, input {
  float: left;
  clear: left;
  width: 100%;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
  font-size: 1em;
  text-align: center;
  margin: 0.2em auto;
}

input:focus {
  outline-color: #fdf;
}

label {
  width: 60%;
}

.text-box input {
  width: 15%;
  clear: none;
}

.text-box button {
  margin-top: 1em;
}

button {
  padding: 2%;
  background-color: #dfd;
  border: none;
  border-radius: 2%;
}

button:hover {
  bottom: 0.1em;
}

button:focus {
  outline: 0;
}

button:active {
  bottom: 0;
  background-color: #fdf;
}

.table-heading, .table-content {
  width: 75%;
  margin: 1% 12.25%;
  float: left;
  background-color: #dfd;
}

.table-heading h2 {
  padding: 1%;
  margin: 0;
  text-align: center;
}

.cart-product {
  width: 50%;
  float: left;
}

.cart-price {
  width: 15%;
  float: left;
}

.cart-quantity {
  width: 10%;
  float: left;
}

.cart-total {
  width: 25%;
  float: left;
}

.cart-image-box {
  width: 20%;
  overflow: hidden;
  border-radius: 2%;
  float: left;
  margin: 1%;
}

.cart-images {
  height: 7em;
  background-size: cover; 
  background-position: center center; 
  background-repeat: no-repeat;
}

.cart-item {
  width: 20%;
  float: left;
  margin: 3.2em 1%;
  text-align: center;
}
.cart-description {
  width: 53%;
  float: left;
  margin: 3.2em 1%;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
  font-size: 1em;
  text-align: center;
}

.cart-price h3, .cart-total h3 {
  margin: 3.2em 5% 3.2em 20%;
  width: 60%;
}

.cart-quantity input {
  margin: 3.2em 1%;
  border: none;
}

.remove {
  width: 10%;
  margin: 1px;
  float: right;
  clear: right;
}

.coupon {
  width: 20%;
  background-color: #dfd;
  margin: 1% 1% 1% 12.25%;
  float: left;
  height: 6em;
}

.coupon input {
  width: 60%;
  border: none;
  margin: 12.75% 5%;
  padding: 1%;
}

.coupon button {
  width: 25%;
  float: left;
  clear: right;
  margin: 12% 5% 12% 0;
}

.keep-shopping {
  width: 15%;
  height: 6em;
  float: left;
  margin: 1% auto;
  padding: 1%;
  background-color: #dfd;
}

.keep-shopping button {
  text-transform: uppercase;
  margin: 12% auto;
  
}

.checkout {
  width: 37.25%;
  margin: 1% 12.75% 1% 1%;
  float: right;
  background-color: #dfd;
  height: 6em;
}

.checkout button {
  width: 30%;
  clear: none;
  margin: 5.4% 0 5.4% 5.5%;
  text-transform: uppercase;
}

.final-cart-total {
  width: 15%;
  float: right;
  margin: 7%;
  background-color: White;
}

.final-cart-total h3 {
  color: Black;
}  
    </style>
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
                        <form
        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
        <div class="listing-section">
            @foreach($getRoomfiles as $property)
            <div class="product">
                <div class="image-box">
                <div class="images" id="image-1">
                    @foreach($property->getRoomfiles as $prop)
                    <img   src="{{url('/storage/attachments/'.$prop->property_image)}}" alt="Image"/>
                    @endforeach
                </div>
                </div>
                <div class="text-box">
                <h2 class="item">{{$property->room_name}}</h2>
                <h3 class="price">$4.99</h3>
                <p class="description">{{$property->room_description}}</p>
                <button type="button" name="item-1-button" id="item-1-button">Book Room</button>
                </div>
            </div>
            @endforeach
</div>

        </main>
    </div>
</body>
</html>
