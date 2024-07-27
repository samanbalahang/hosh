@extends('mahboob/UsersAdmin/userlayout')

@section('tables')
<div class="t-adress"></div>
<div class="tablesTWO">
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>نام محصول</th>
                <th>قیمت</th>
                <th>توضیح</th>
                <th>مدیریت</th>
              
            </tr>
        </thead>
        <tbody>
            <!-- @if(isset($allProducts))
                @foreach($allProducts as $prod)
                    <tr class="direction-rtl">
                        <td>{{$prod->name}}</td>
                        <td>{{$prod->price}}</td>
                        <td>{{$prod->content}}</td>
                        <td><form action="{{route('product.destroy', $prod->id)}}" method="post">
                        @method("delete")
                        @csrf    
                        <input class="btn bg-danger fontdelete" type="submit" value="حذف"></form></td>
                    </tr>
                @endforeach
            @else
            <tr class="direction-rtl">
                <td>داده ای نیست</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @endif -->
            <tr>
                <td>داده ای نیست</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>نام محصول</th>
                <th>قیمت</th>
                <th>توضیح</th>
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