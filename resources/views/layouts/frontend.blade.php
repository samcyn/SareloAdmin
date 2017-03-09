<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>switch</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<style>
   
.loading {
  position: absolute;
  top: 25px;
  right: 10px;
  position: absolute;
  display: none;
}
.loading-bar {
  display: inline-block;
  width: 4px;
  height: 18px;
  border-radius: 4px;
  animation: loading 1s ease-in-out infinite;
}
.loading-bar:nth-child(1) {
  background-color: #3498db;
  animation-delay: 0;
}
.loading-bar:nth-child(2) {
  background-color: #c0392b;
  animation-delay: 0.09s;
}
.loading-bar:nth-child(3) {
  background-color: #f1c40f;
  animation-delay: .18s;
}
.loading-bar:nth-child(4) {
  background-color: #27ae60;
  animation-delay: .27s;
}

@keyframes loading {
  0% {
    transform: scale(1);
  }
  20% {
    transform: scale(1, 2.2);
  }
  40% {
    transform: scale(1);
  }
}
</style>

<body class="clearfix">
    <div class="main clearfix">
        <div class="overlay">
            <!-- ===Nav bar starts here == -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a class="navbar-brand navbar-link" href="index.html">
                            <img src="assets/img/logo/sarelo2.svg">
                        </a>
                        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    </div>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="nav navbar-nav navbar-right">
                            
                            <li role="presentation">
                                <span>Already Have an account</span><br>
                                <a href="/signin" class="c-brand-purple"><span> Sign In</span></a>
                            </li>
                            <li>
                                <div class="divider"></div>
                            </li>
                            <li role="presentation">
                                <span>No Account?</span><br>
                                <a href="/signup">
                                    <span>Sign Up</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- ===Nav bar endss here == -->

            <!-- ===Main contents begins here ==-->
            <div class="container-fluid">
                <div class="contents m-auto m-t-60 m-b-100 width-70p">
                    <h1 class="text-center l-spacing-5 fw-900">We will buy & deliver <span class="c-brand-green">fresh foodstuff!</span><br> from the market to you.</h1>
                    <br><br><br>
                    <form class="query pos-rel">
                        <input class="form-control search p-r-20 p-l-20" type="search" placeholder="What do you want to buy?...." id="querySelector">
                        <div class="loading">
                            <div class="loading-bar"></div>
                            <div class="loading-bar"></div>
                            <div class="loading-bar"></div>
                            <div class="loading-bar"></div>
                        </div>
                        <div class="update"> 
                            <!--<ul class="suggestions">
                                <li class="clearfix">
                                    <div class="clearfix pos-rel">
                                        <span class="pull-left products pos-abs">RICE</span>
                                        <span class="pull-right price">&#8358; 500</span><br>
                                        <small class="pull-right">blah blahdf</small>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="clearfix pos-rel">
                                        <span class="pull-left products pos-abs">RICE</span>
                                        <span class="pull-right price">&#8358; 500</span><br>
                                        <small class="pull-right">blah blahdf</small>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="clearfix pos-rel">
                                        <span class="pull-left products pos-abs">RICE</span>
                                        <span class="pull-right price">&#8358; 500</span><br>
                                        <small class="pull-right">blah blahdf</small>
                                    </div>
                                </li>
                                <li class="clearfix">
                                    <div class="clearfix pos-rel">
                                        <span class="pull-left products pos-abs">RICE</span>
                                        <span class="pull-right price">&#8358; 500</span><br>
                                        <small class="pull-right">blah blahdf</small>
                                    </div>
                                </li>
                            </ul>-->
                        </div>
                    </form>
                </div>
                <!--<button class="btn btn-default btn-sm btn-cart" type="button"><i class="fa fa-shopping-cart"></i> Cart</button>-->
            </div>
            <!-- ===Main contents ends here ==-->

            <!-- ===Page footer begins here == -->
            <!--<div class="footy">
                <ul>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Terms and Condition</a></li>
                    <li><a href="#">Feedbacks</a></li>
                </ul>
            </div>-->
            <!-- ===Page footer ends here == -->
        </div>
    </div>
    <!-- BEGIN RIGHT MENU -->
    <nav id="menu-right" >
        <div class="header">
            <h3>MY FOOD BASKET <span class="pull-right items_container">
                <span id="items">0</span>
                <span class="t-u-c">items</span>
            </h3>
        </div>
        <div class="body" id="basket">
            <ul class="p-l-0 list-type-none" id="basketList">
                <!--<li class="pos-rel animated slideInDown">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="row">
                                <div class="col-xs-6 p-r-0">
                                    <div class="thumbnail">
                                        <img src="assets/img/loaders/map-loader.gif">
                                    </div>
                                </div>
                                <div class="col-xs-6 p-l-0">
                                    <div class="pr-text">
                                        <h4 class="m-b-0 m-t-5">Beans</h4>
                                        <small>Paint bucket</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            m
                        </div>
                        <div class="col-xs-3">
                            m
                        </div>
                    </div>
                    <span class="fa fa-remove pos-abs"></span>
                </li>-->
            </ul>
        </div>
        <div class="footer">
            <ul class="p-l-0">
                <li>
                    <p class="menus">
                        <span>
                            TOTAL
                        </span>
                        <span class="pull-right">&#8358; <span id="totalP">9480</span></span>
                    </p>
                </li>
                <li>
                    <p class="menus">
                        <span>
                            10% Service Charge
                        </span>
                        <span class="pull-right">&#8358; <span id="serviceCharge">9480</span></span>
                    </p>
                     <small>Cost for service & packaging</small>
                </li>
                <li>
                    <p class="menus">
                        <span>
                            Delivery Fee
                        </span>
                        <span class="pull-right">&#8358; <span id="deliveryFee">9480</span></span>
                    </p>
                     <small>Cost for delivering your product</small>
                </li>
                <li>
                    <p class="menus fw-700">
                        <span>
                            TOTAL
                        </span>
                        <span class="pull-right">&#8358; <span id="grandTP">9480</span></span>
                    </p>
                </li>
                <li>
                    <a href="checkout.html" class="btn btn-success btn-block btn-cart btn-larger">Proceed To Checkout</a>
                </li>
            </ul>
        </div>
    </nav>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        
        $(document).ready(function(){
           // app.dataFetcher();
           app.fecther();
           app.cartCtrl();
        

           /* $('.loading').bind('ajaxStart', function(){
                $(this).show();
            }).bind('ajaxStop', function(){
                $(this).hide();
            });*/
            
        });
    </script>
</body>

</html>