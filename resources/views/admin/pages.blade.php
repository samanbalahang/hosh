@extends('admin/layout')


@section('pages')
<div class="tables">
    <a href="{{route('pages.create')}}" class="pro-a">ایجاد صفحه</a>
<table id="example" class="display" style="width:100%">
        <thead>
            <tr class="direction-rtl">
                <th>نام صفحه</th>
                <th>آدرس</th>
                <th>محتوا</th>
                <th>مدیریت</th>
              
            </tr>
        </thead>
        <tbody>
            <tr class="direction-rtl">
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td><a href="#" class="btn bg-danger fontdelete" >حذف</a></td>
            </tr>
        </tbody>
        <tfoot>
            <tr class="direction-rtl">
                <th>نام صفحه</th>
                <th>آدرس</th>
                <th>محتوا</th>
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