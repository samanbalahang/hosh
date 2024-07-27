<!DOCTYPE html>
<html lang="fa-IR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود</title>
    <link rel="shortcut icon" href="../img/logo-trans.png" type="image/x-icon">
    <link rel="stylesheet" href="../style/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/css/login-register.css">
</head>
<body>
    <main>
        <div class="container-f">
            <div class="welcome">
                <p>خوش آمدید</p>
            </div>
            <div class="form-box">
                <form action="{{route('login.store')}}" method="post">
                    @csrf

                    <label for="text">نام کاربری</label>
                    <br>
                    <input type="text" class="form-control" placeholder="username" name="email">
                    <br>
                    <label for="text">پسورد</label>
                    <br>
                    <input type="text" class="form-control" placeholder="password" name="password">
                    <br>
                    <input type="checkbox">
                    <label for="cardbox">
                        مرا به خاطر بسپار
                    </label>
                    <br>
                    <input type="submit" value="ورود">
                    <br>
                    <a href="passfound.html">رمز خود را فراموش کردید؟</a>
                    <a href="register.html">ایجاد حساب کاربری</a>
                </form>
            </div>
        </div>
    </main>
    <script src="../style/js/bootstrap.min.js.map"></script>
</body>
</html>