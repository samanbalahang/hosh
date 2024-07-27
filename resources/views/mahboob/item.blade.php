<!DOCTYPE html>
<html lang="fa-IR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" href="../style/css/fontawsome/all.min.css">
  <title>شیرینی محبوب</title>
  <link rel="stylesheet" href="../style/css/bootstrap.min.css">
  <link rel="stylesheet" href="../style/css/layout.css">
  <link rel="shortcut icon" href="../img/logo-trans.png" type="image/x-icon">
  <link rel="stylesheet" href="../style/css/item.css">
</head>

<body>
  <header>
    <div id="navbackgroundone">
      <div id="navbackgroundtwo">
        <nav id="supernav">
          <ul id="navbar">
            <li>
              <a href="#">
                <div class="fas fa-home"></div>
              </a>
            </li>
            <li>
              <a href="shop.html"> محصولات </a>
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
          <ul id="logoblock">
            <li class="logo-transform">
              <h1>
                <a href="index.html" id="firstlogo"><img src="../img/logo-trans.png" alt="شیرینی محبوب"></a>
              </h1>
            </li>
          </ul>
          <ul>
            <li><a href="track-orders.html">پیگیری سفارشات</a></li>
            <li><a href="#">راهنمایی </a></li>
            <li class="Search-box"><a href="#">
                <div class="fas fa-magnifying-glass"></div>
              </a>

            </li>
            <li><a href="box-shop.html">
                <div class="fas fa-basket-shopping"></div>
              </a></li>
            <li id="loginblock">
              <a href="login.html">
                <div class="fas fa-user-large"></div> ورود/ثبت نام
              </a>

            </li>
          </ul>
        </nav>

      </div>
    </div>

  </header>
  <main>
      <div class="container-item">
        <div class="item-img">
            <img src="../img/111.png" alt="">
        </div>
          <div class="item-content">
                   <div class="content">
                   <p>نام محصول</p>
                   <p>توضیحات:</p>
                   <span> قیمت : 130,000 تومان </span>
                   </div>
                   <div class="conter-box">
                    <div class="counter" >
                        <p id="increas" class="nu-change">+</p>
                        <p id="dicreas" class="nu-change">-</p> 
                        <div id="number">
                           1
                        </div>
                    </div>
                    <form action="{{route('item.store')}}">
                      <input type="button" id="add" class="add-basket" value="اضافه کردن به سبد خرید">
                    </form>   
                </div>
          </div>
      </div>

      <div class="alert-add d-none">
        <div class="alert-box">
          <p>محصول به سبد خرید اضافه شد</p>
          <a id="cancel">متوجه شدم</a>
        </div>
      </div>


  </main>



  <script src="../style/js/jquery-3.6.0.min.js"></script>
  <script src="../style/js/fontawsome/all.min.js"></script>
  <script src="../style/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="../style/js/item.js"></script>
</body>
</html>