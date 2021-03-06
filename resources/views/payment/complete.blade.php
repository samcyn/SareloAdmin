<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sarelo</title>
        <!--my icons here -->
        <link rel="stylesheet" type="text/css" href="/assets/icon/font-awesome/css/font-awesome.min.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="/assets/css/bootstrap/bootstrap.min.css">
        <!-- Main CSS here -->
        <link rel="stylesheet" type="text/css" href="/assets/css/styles.css">
        <link rel="stylesheet" type="text/css" href="/assets/css/responsive.css">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    </head>
    <body>

        <!--sidebar menu on the right hand -->
        <aside class="sidebar left_sidebar visible-xs" id="left_sidebar">
            <ul class="nav navbar-nav navbar-right">
                @if(isset(\Auth::user()->first_name))
                                <li role="presentation" class="dropdown">
                                    <a class="dropdown-toggle c-brand-green w-500 f-20 p-t-10" data-toggle="dropdown" href="#">
                                        <span>Account </span>
                                        <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Hi {{\Auth::user()->first_name}}</a></li>
                                        <li><a href="/my-account">Your Account</a></li>
                                        <li><a href="/my-orders">Your Order</a></li>
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                Log Out
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                @endif
            </ul>
        </aside>
        <!--left side bar for mobile ends here-->

        <!-- main contents begins here-->
        <div class="wrapper clearfix bg-white-plain">
            <header class="pos-fx border-bottom">
                <!-- ===Nav bar starts here == -->
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button class="navbar-toggle menu_toggle">
                                <span class="fa fa-bars"></span>
                            </button>
                            <a class="navbar-brand navbar-link hidden-xs" href="/">
                                <img src="/assets/img/logo/sarelo3.svg">
                            </a>
                        </div>
                        <div class="collapse navbar-collapse" id="navcol-1">
                            <ul class="nav navbar-nav navbar-right">
                                 @if(isset(\Auth::user()->first_name))
                                <li role="presentation" class="dropdown">
                                    <a class="dropdown-toggle c-brand-green w-500 f-20 p-t-10" data-toggle="dropdown" href="#">
                                        <span>Account </span>
                                        <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Hi {{\Auth::user()->first_name}}</a></li>
                                        <li><a href="/my-account">Your Account</a></li>
                                        <li><a href="/my-orders">Your Order</a></li>
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                Log Out
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </nav>
            <!-- ===Nav bar ends here == -->
            </header>
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"></div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <main class="">
                <!-- BEGIN CONTAINER -->
                <div class="page-container">
                    <!-- BEGIN SIDEBAR -->
                    <div class="container m-t-75">
                        <div class="card col-md-8 col-md-offset-2 text-center m-t-40">
                            <div class="header">
                            <?php   $count = 0;
                                $order->order_products->each(function ($product) use (&$count){
                                    $count += (int) $product->qty;
                                });
                                ?>
                                <p class="f-24 w-500">We received your order for {{$count}} items</p>
                            </div>
                            <div class="content">
                                <p class="f-24 m-t-0 m-b-10">Delivery time</p>
                                <div class="f-24 w-500 m-b-20">
                                    <time>{{date('l, M d', strtotime($order->orderSlot->delivery_date))}},
                                    {{$order->orderSlot->slot->time_range}}</time>
                                </div>
                                <a href="/my-orders"><button type="button" class="btn btn-md f-16 bg-orange bd-4">View order status</button></a>
                                <p class="f-18 m-t-30 text-justify">We’ll let you know when your order is on the way.
                                  Track and make changes to your order via the link above.
                                  You can also call our Help Line for assistance, 08108924456 or 07033582393.</p>
                            </div>
                        </div>
                    <!-- END CONTENT -->
                    </div>


                </div>
                <!-- END CONTAINER -->
            </main>
        </div>
        <!-- main contents ends here -->

        <!-- jQuery -->
        <script src="/assets/js/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="/assets/js/bootstrap/bootstrap.min.js"></script>
        <!-- Main JS -->
        <script src="/assets/js/main.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
         <script>
             $(document).ready(function(){

             });
         </script>
    </body>
</html>