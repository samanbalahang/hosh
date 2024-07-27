@extends('admin/layout')

@section('orders')
<div class="tables">
<table id="example" class="display" style="width:100%">
        <thead>
            <tr class="direction-rtl">
                <th>نام محصول</th>
                <th>آدرس</th>
                <th>شماره کاربر</th>
                <th>مدیریت</th>
              
            </tr>
        </thead>
        <tbody>
            <tr class="direction-rtl">
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td><a href="#" class="btn bg-info fontdelete" >برسی</a></td>
            </tr>
        </tbody>
        <tfoot>
            <tr class="direction-rtl">
                <th>نام محصول</th>
                <th>آدرس</th>
                <th>شماره کاربر</th>
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