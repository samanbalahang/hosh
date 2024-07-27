@extends('admin/layout')

@section('pagemaker')

    

    <div class="form-product">
        <a href="{{route('pages.index')}}" class="pages-a">تمام صفحات</a>
        <form action="{{route('product.store')}}" metode="post">
            @csrf
            <label for="text" l-ml>نام</label>
            <input type="text" name="name" class="form-control form-w">
            <label for="text" l-ml>آدرس صفحه</label>
            <input type="text" name="adress" class="form-control form-w">
            <br>
            <textarea id="summernote" name="content">محتوا</textarea>
            <label for="file">ارسال عکس</label>
            <input type="file" name="propic" class="form-control form-w">
            <br>
            <input class="sub" type="submit" value="ارسال">
        </form>
    </div>




















@endsection