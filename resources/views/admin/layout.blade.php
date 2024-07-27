
<!DOCTYPE html>

<html lang="fa-IR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>mahbob admin panel</title>
  <link rel="Icon" href="{{url('/')}}/admin-style/img/logo-trans.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('/')}}/admin-style/css/all.min.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <link rel="stylesheet" href="{{url('/')}}/admin-style/css/bootstrap.min.css" />
  <link href="{{url('/')}}/admin-style/css/datatables.min.css" rel="stylesheet">

  <!-- MDB -->

  <link rel="stylesheet" href="{{url('/')}}/admin-style/css/mdb.min.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{url('/')}}/admin-style/css/admin.css" />
   <link rel="stylesheet" href="{{url('/')}}/admin-style/css/summernote.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw=="
    crossorigin="anonymous"></script>
    <?php


$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";

$escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
echo '<a href="' . $escaped_url . '">' . $escaped_url . '</a>';

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


    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">


      <div class="position-sticky">
        <div class="list-group list-group-flush mx-3 mt-4">
          <a href="{{route('admin.index')}}" class="list-group-item list-group-item-action py-2 ripple <?php if(route('admin.index') == $absolute_url){echo("active");}?>">
            <i class="fas fa-chart-area fa-fw me-3"></i> <span> داشبرد اصلی</span>
          </a>
          <a href="{{route('product.index')}}" class="list-group-item list-group-item-action py-2 ripple <?php if(route('product.index') == $absolute_url){echo("active");}?>"><i
              class="fas fa-chart-bar fa-fw me-3"></i> <span>محصولات</span></a>
          <a href="{{route('pages.index')}}" class="list-group-item list-group-item-action py-2 ripple <?php if(route('pages.index') == $absolute_url){echo("active");}?>"><i
              class="fas fa-folder fa-fw me-3"></i> <span> صفحه ها </span></a>
          <a href="{{route('sliders.index')}}" class="list-group-item list-group-item-action py-2 ripple <?php if(route('sliders.index') == $absolute_url){echo("active");}?>">
            <i class="fas fa-table-columns fa-fw me-3"></i> <span>اسلایدر</span>
          </a>
          <a href="{{route('orders.index')}}" class="list-group-item list-group-item-action py-2 ripple <?php if(route('orders.index') == $absolute_url){echo("active");}?>"><i
              class="fas fa-truck fa-fw me-3"></i> <span>سفارشات</span></a>
          <a href="{{route('comments.index')}}" class="list-group-item list-group-item-action py-2 ripple <?php if(route('comments.index') == $absolute_url){echo("active");}?>"><i
              class="fas fa-globe fa-fw me-3"></i> <span>نظرات</span></a>
          <a href="{{route('users.index')}}" class="list-group-item list-group-item-action py-2 ripple <?php if(route('users.index') == $absolute_url){echo("active");}?>"><i
              class="fas fa-users fa-fw me-3"></i> <span>کاربران</span></a>

        </div>
      </div>
    </nav>
    <!-- Sidebar -->

    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#sidebarMenu"
          aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="#">
          <img src="{{url('/')}}/img/logo-trans.png" height="50" alt="" loading="lazy" />
        </a>
        <!-- Search form -->
        <form class="d-none d-md-flex input-group w-auto my-auto">
          <input autocomplete="off" type="search" class="form-control rounded"
            placeholder='Search' style="min-width: 225px" />
          <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
        </form>

        <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row">
          <!-- Notification dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink"
              role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-bell"></i>
              <span class="badge rounded-pill badge-notification bg-danger">1</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">اخبار ادمین ها</a></li>
              <li><a class="dropdown-item" href="#">اخبار محصولات</a></li>
              <li>
                <a class="dropdown-item" href="#">اخبار کارکنان</a>
              </li>
            </ul>
          </li>

          <!-- Icon -->
          <li class="nav-item">
            <a class="nav-link me-3 me-lg-0" href="#">
              <i class="fas fa-fill-drip"></i>
            </a>
          </li>
          <!-- Avatar -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#"
              id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
             <div><div class="fas fa-user"></div></div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">پروفایل من</a></li>
              <li><a class="dropdown-item" href="#">تنظیمات</a></li>
              <li><a class="dropdown-item" href="#">خروج</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  </header>

  @yield('info')
  @yield('product')
  @yield('slider')
  @yield('allproduct')
  @yield('anser')
  @yield('comments')
  @yield('orders')
  @yield('pages')
  @yield('users')
  @yield('allslider')
  @yield('pagemaker')

    <!--Main layout-->
  <!-- MDB -->
  <script src="{{url('/')}}/admin-style/js/jquery-3.5.1.min.js"></script>
  <script src="{{url('/')}}/admin-style/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="{{url('/')}}/admin-style/js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript" src="{{url('/')}}/admin-style/js/admin.js"></script>
  <script src="{{url('/')}}/admin-style/js/all.min.js"></script>
  <script src="{{url('/')}}/admin-style/js/summernote.min.js"></script>
  <script src="{{url('/')}}/admin-style/js/summernote-ext-elfinder.js"></script>
  @yield('extantion')



   <script>
        $(document).ready(function() {
                var summernote = document.getElementById("summernote");
               $('#summernote').summernote({
                    height: 800,
                    callbacks: {
                        onImageUpload: function(files, editor, welEditable) {
                            sendFile(files[0], editor, welEditable);                 
                       }  
                    }               
                });

                function sendFile(file, editor, welEditable) {
                    data = new FormData();
                    data.append("file", file);
                    $.ajax({
                    data: data,
                    type: "POST",
                    url: "m.php",
                    cache: false,
                    contentType: false,
                    processData: false,
                    success: function(url) {
                        console.log(url);
                        var imgNode =document.createElement('img');
                        var src= URL.createObjectURL(file);
                        console.log(src);
                        imgNode.setAttribute("src",src);
                        $(summernote).summernote('insertNode', imgNode);
                    }
                    });
                }
                });


    	
    </script>
 
</body>

</html>