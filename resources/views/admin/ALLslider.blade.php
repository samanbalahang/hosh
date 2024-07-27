@extends('admin/layout')

@section('allslider')

<div class="tables">
    <a href="{{route('sliders.create')}}" class="pro-a">ایجاد محصول</a>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr class="direction-rtl">
                <th>نام محصول</th>
                <th>قیمت</th>
                <th>آدرس</th>
                <th>مدیریت</th>
              
            </tr>
        </thead>
        <tbody>
        @if(isset($ALLslider))
                @foreach($ALLslider as $slide)
                    <tr class="direction-rtl">
                        <td>{{$slide->name}}</td>
                        <td>{{$slide->price}}</td>
                        <td>{{$slide->adress}}</td>
                        <td>
                            <form action="{{route('sliders.destroy', $slide->id)}}" method="post">
                            @method("delete")
                            @csrf    
                        <input class="btn bg-danger fontdelete" type="submit" value="حذف"></form>
                    </td>
                    </tr>
                @endforeach
            @else
            <tr class="direction-rtl">
                <td>داده ای نیست</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @endif
        </tbody>
        <tfoot>
            <tr class="direction-rtl">
                <th>نام محصول</th>
                <th>قیمت</th>
                <th>آدرس</th>
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