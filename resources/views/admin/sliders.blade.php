@extends('admin/layout')


@section('slider')


<div class="form-product">
  <a href="{{route('sliders.index')}}" class="pro-a">تمام محصولات اسلایدر</a>
<form action="{{route('sliders.store')}}" method="post" enctype="multipart/form-data">
@csrf
<label for="text" l-ml>نام</label>
<input type="text" name="name" class="form-control form-w">
<label for="text" l-ml>قیمت</label>
<input type="text" name="price" class="form-control form-w">
<label for="text" l-ml>آدرس</label>
<input type="text" name="adress" class="form-control form-w">
<br>
<label for="file">ارسال عکس</label>
<input type="file" name="propic" class="form-control form-w">
<br>
<input class="sub" type="submit" value="ارسال">
</form>
</div>


@endsection