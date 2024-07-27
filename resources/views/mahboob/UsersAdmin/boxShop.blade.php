@extends('mahboob/UsersAdmin/userlayout')

@section('boxshop')
<div class="box-container">
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
            @if(isset($allProducts))
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
            @endif
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

  <div class="finish-shop">
    <p class="discount">وارد کردن کد تخفیف</p>
    <input class="form-control" type="text">
    <input class="discount-ok" type="submit" value="تایید">
    <div class="delivery-cost">
      <p >هزینه ارسال</p>
      <p>0000000</p>
    </div>
    <div class="full-price">
      <p>جمع کل</p>
      <p>0000000</p>
    </div>
    <input class="b-finish-shop" type="submit" value="تکمیل خرید">
  </div>
  </div>
@endsection
@section('extantion')
  <script src="{{url('/')}}/admin-style/js/datatables.min.js"></script>
  <script src="{{url('/')}}/admin-style/js/infodatatable.js"></script>
@endsection