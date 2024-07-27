@extends('admin/layout')

@section('product')


<div class="form-product">
   <a href="{{route('product.index')}}" class="pro-a inja">تمام محصولات</a>
<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
 @csrf
<label for="text" l-ml>نام</label>
<input type="text" name="name" class="form-control form-w">
<label for="text" l-ml>قیمت</label>

<input type="text" name="price" class="form-control form-w">
<br>
<textarea id="summernote" name="content">Hello Summernote</textarea>
<label for="file">ارسال عکس</label>
<input type="file" name="propic" class="form-control form-w">
<br>
<input class="sub" type="submit" value="ارسال" >
</form>
</div>

@endsection
