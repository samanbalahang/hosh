@extends('mahboob/UsersAdmin/userlayout')
@section('commentscss')
<link rel="stylesheet" href="style/css/mycommetscss.css">
@endsection

@section('comments')
<div class="form-comments">
    <form action="{{route('comments.store')}}" method="post" >
        @csrf
        <p>*نام</p>
        <input type="text" class="form-control newform" name="name"> 
        <p>*ایمیل</p>
        <input type="text" class="form-control newform" name="email">
        <p>*نظرات خود را برای ما ارسال کنید</p>
        <textarea name="comment" id="comment" cols="30" rows="10" class="form-control newform-text"></textarea>
        <input type="submit" class="subbtm" value="ارسال">
    </form>
</div>
<div class="comment-pic">
    <img src="../img/commentpic.jpg" alt="commentpic">
</div>
<div><a href="{{route('MyCommets.show',1)}}">مشاهده پاسخ ها</a></div>
@endsection
