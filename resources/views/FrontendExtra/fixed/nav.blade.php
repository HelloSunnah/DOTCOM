        



        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        imshahriasunnah@email.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                          0199715532*          

                      </div>
                </div>
            </div>
            </div>

<div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="{{route('Frontend')}}" class="nav-item nav-link active">Home</a>
                            <a href="{{route('productpage')}}" class="nav-item nav-link">Products</a>
                            <a href="product-detail.html" class="nav-item nav-link">Product Detail</a>
                            <a href="{{route('cartview')}}" class="nav-item nav-link">Cart({{session()->has('myCart')?count(session()->get('myCart')):0}})</a>
                            <a href="checkout.html" class="nav-item nav-link">Checkout</a>
                            <a href="my-account.html" class="nav-item nav-link">My Account</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More Pages</a>
                                <div class="dropdown-menu">
                                    <a href="wishlist.html" class="dropdown-item">Wishlist</a>
                                    <a href="login.html" class="dropdown-item">Login & Register</a>
                                    <a href="contact.html" class="dropdown-item">Contact Us</a>
                                </div>
                            </div>
                        </div>
                      
             @guest
             <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#register">Register
            </button>

            <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#login">Login
            </button>
            @endguest

            
            @auth
            <button class="btn btn-primary">{{auth()->user()->name}}</button>
            <br></br>
            <button class="btn btn-primary"><a href="{{route('Frontend.logout')}}">logout</a></button>
            @endauth              


                    </div>
                </nav>
            </div>
        </div>
        <br>
        <br>
        <br>
        <!-- Nav Bar End -->      
        <x:notify-messages />

        <!-- Bottom Bar Start -->
       
        @include('FrontendExtra.fixed.modal')