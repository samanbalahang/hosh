@extends('admin/layout')

@section('comments')
<div class="tables">
<table id="example" class="display" style="width:100%">
        <thead>
            <tr class="direction-rtl">
                <th>نام کاربر</th>
                <th>نظر</th>
                <th>مدیریت</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($comments))
            @foreach($comments as $comment)
            <tr class="direction-rtl">
                
                <td>{{$comment->name}}</td>
                <td>{{$comment->discription}}</td>
                <td><a href="{{route('comments.update',$comment->id)}}" class="btn bg-success fontdelete " >پاسخ</a></td>
                
            </tr>
            @endforeach
            @else
            <tr class="direction-rtl">
                <td>نظری نیست</td>
                <td></td>
                <td><a href="{{route('comments.create')}}" class="btn bg-success fontdelete" >پاسخ</a></td>
            </tr>
            @endif
        </tbody>
        <tfoot>
            <tr class="direction-rtl">
                <th>نام کاربر</th>
                <th>نظر</th>
                <th>مدیریت</th>
            </tr>
        </tfoot>
    </table>
    </div>

@endsection
@section('extantion')
  <script src="{{url('/')}}/admin-style/js/datatables.min.js"></script>
  <script src="{{url('/')}}/admin-style/js/infodatatable.js"></script>
@endsection

