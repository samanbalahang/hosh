<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/logo-trans.png" type="image/x-icon">
    <link rel="stylesheet" href="../style/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/css/login-register.css">
    <link rel="stylesheet" href="../style/css/registerlayout.css">
    
    <title>عضویت</title>
</head>
<body>
    <main>
        <div class="container-f">
            <div class="welcome">
                <p>ایجاد حساب</p>
            </div>
            <div class="form-box">
                <form action="{{route('register.store')}}" method="post">
                    @csrf
                    <label for="text">نام کاربری</label>
                    <br>
                    <input type="text" class="form-control" placeholder="username" name="email" require>
                    <label for="text">شماره</label>
                    <br>
                    <input type="text" class="form-control" placeholder="+98" name="number" require>
                    <br>
                    <label for="text">پسورد</label>
                    <br>
                    <input type="text" class="form-control" placeholder="password" name="password" require>
                    <br>
                    <label for="text">تکرار پسورد</label>
                    <br>
                    <input type="text" class="form-control" placeholder="password" require>
                    <br>
                    <input type="checkbox">
                    <label for="cardbox">
                        مرا به خاطر بسپار
                    </label>
                    <br>
                    <input type="submit" value="ایجاد حساب">
                    <br>
                    <a href="login.html">حساب کاربری دارم </a>
                  
                </form>
            </div>
        </div>
    </main>
    <script src="../style/js/bootstrap.min.js.map"></script>
    
</body>
   