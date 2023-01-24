<div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="{{('Frontend_extra/assets/img/logo.png')}}" alt="Logo">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <form action="{{route('search')}}" method="get">
                        <div class="search">
                            <input type="text" placeholder="Search" name="search_key">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                        </form>
                    </div>


                    
                    <div class="col-md-3">
                        <div class="user">
                            <a href="wishlist.html" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                            <a href="{{route('cartview')}}" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>({{session()->has('myCart')?count(session()->get('myCart')):0}})</span>

                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>