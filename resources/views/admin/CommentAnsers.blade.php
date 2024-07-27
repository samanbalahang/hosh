@extends('admin/layout')

@section('anser')


<div class="form-product">
    <div>
        @if(isset($theComment))
        {{$theComment->discription}}
        @endif
    </div>
<form action="{{route('MyCommets.store')}}" method="post">
 @csrf
 <input type="hidden" value="{{$id}}" name="comment_id">
 <label for="textarea">پاسخ</label>
<textarea id="summernote" name="content"></textarea>
<br>
<input class="sub" type="submit" value="ارسال">
</form>
</div>

@endsection