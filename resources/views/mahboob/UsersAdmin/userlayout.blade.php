
<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="../style/css/fontawsome/all.min.css">
    <link rel="stylesheet" href="../style/css/style.css">
    <title>سبد خرید</title>
    <link rel="shortcut icon" href="../img/logo-trans.png" type="image/x-icon">
    <link rel="stylesheet" href="../style/css/box-shop.css">
    <link href="{{url('/')}}/admin-style/css/datatables.min.css" rel="stylesheet">

            <?php


        $url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

        $escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
        // echo '<a href="' . $escaped_url . '">' . $escaped_url . '</a>';

        function url_origin( $s, $use_forwarded_host = false )
        {
            $ssl      = ( ! empty( $s['HTTPS'] ) && $s['HTTPS'] == 'on' );
            $sp       = strtolower( $s['SERVER_PROTOCOL'] );
            $protocol = substr( $sp, 0, strpos( $sp, '/' ) ) . ( ( $ssl ) ? 's' : '' );
            $port     = $s['SERVER_PORT'];
            $port     = ( ( ! $ssl && $port=='80' ) || ( $ssl && $port=='443' ) ) ? '' : ':'.$port;
            $host     = ( $use_forwarded_host && isset( $s['HTTP_X_FORWARDED_HOST'] ) ) ? $s['HTTP_X_FORWARDED_HOST'] : ( isset( $s['HTTP_HOST'] ) ? $s['HTTP_HOST'] : null );
            $host     = isset( $host ) ? $host : $s['SERVER_NAME'] . $port;
            return $protocol . '://' . $host;
        }

        function full_url( $s, $use_forwarded_host = false )
        {
            return url_origin( $s, $use_forwarded_host ) . $s['REQUEST_URI'];
        }

        $absolute_url = full_url( $_SERVER );
        // echo $absolute_url;
        ?>  
</head>
<body>
  <header>
    <div id="navbackgroundone">
      <div id="navbackgroundtwo">
        <nav id="supernav">
          <ul id="navbar">
            <li>
              <a href="index.html"><div class="fas fa-home"></div></a>
            </li>
              <li>
                <a href="shop.html">  محصولات </a>
                <ul>
                  <li>
                    <a href="item.html">متن</a>
                  </li>
                  <li>
                    <a href="item.html">متن</a>
                  </li>
                  <li>
                    <a href="item.html">متن</a>
                  </li>
                  <li>
                    <a href="item.html">متن</a>
                  </li>
                  <li>
                    <a href="item.html">متن</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#"> درباره ما </a>
              </li>
              <li>
                <a href="#">ارتباط با ما</a>
            </li>
          </ul>
          <ul id="logoblock" >
              <li class="logo-transform">
                  <h1>
                    <a href="index.html" id="firstlogo"><img src="../img/logo-trans.png" alt="شیرینی محبوب"></a>
                    </h1>
              </li>
          </ul>
          <ul>
              <li><a href="track-orders.html">پیگیری سفارشات</a></li>
              <li><a href="#">راهنمایی </a></li>
              <li class="Search-box"><a href="#"><div class="fas fa-magnifying-glass"></div></a>
                
              </li>
              <li><a href="box-shop.html"><div class="fas fa-basket-shopping"></div></a></li>
              <li id="loginblock">
                <a href="login.html"><div class="fas fa-user-large"></div> ورود/ثبت نام</a>
              </li>
          </ul>
      </nav>
      </div>
    </div>
 </header>


 <main>
  <aside>
    <a href="{{route('dashbord.index')}}"><div class="<?php if(route('dashbord.index') == $absolute_url){echo("on-active");}?>">پیشخوان<div class="fas fa-bars icon-b"></div></div></a>
    <a href="{{route('BoxShop.index')}}"><div class="<?php if(route('BoxShop.index') == $absolute_url){echo("on-active");}?>">سبد خرید   <div class="fas fa-bars icon-b "></div></div></a>
    <a href="{{route('MyOrders.index')}}" ><div class="<?php if(route('MyOrders.index') == $absolute_url){echo("on-active");}?>">سفارشات من <div class="fas fa-bars icon-b "></div></div></a>
    <a href="{{route('MyCommets.index')}}"><div class="<?php if(route('MyCommets.index') == $absolute_url){echo("on-active");}?>">نظرات من   <div class="fas fa-bars icon-b "></div></div></a>
    <a href="{{route('adress.index')}}"><div class="<?php if(route('adress.index') == $absolute_url){echo("on-active");}?>">آدرس ها<div class="fas fa-bars icon-b"></div></div></a>
    <!-- <a href="dachbord-favorits.html"><div>علاقه مندی ها<div class="fas fa-bars icon-b"></div></div></a> -->
    <a href="{{route('mahboob.index')}}"><div>خروج<div class="fas fa-bars icon-b"></div></div></a>
  </aside>


  @yield('boxshop')
  @yield('dash')
  @yield('tables')
  @yield('comments')
  
  

  </main>

      
<footer>
    <div>
      <ul>
        <li><a href="#">
            <h3 class="bold">شیرینی محبوب</h3>
          </a></li>
        <li><a href="#">متن متن متن</a></li>
        <li><a href="#">متن متن متن</a></li>
        <li><a href="#">متن متن متن</a></li>
      </ul>
      <ul>
        <li><a href="#" class="bold"> راهنمای مشتریان </a></li>
        <li><a href="#">متن متن متن</a></li>
        <li><a href="#">متن متن متن</a></li>
        <li><a href="#">متن متن متن</a></li>
      </ul>
    </div>

</footer>
    
        <script src="../style/js/jquery-3.6.0.min.js"></script>
        <script src="../style/js/fontawsome/all.min.js"></script>
        <script src="../style/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
        <script src="../style/js/js.js"></script>
        <script src="../style/js/box-shop.js"></script>
        @yield('extantion')
        
</body>