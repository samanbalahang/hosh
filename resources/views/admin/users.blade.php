@extends('admin/layout')

@section('users')
<div class="tables">
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>نام کاربری</th>
                <th>رمز عبور</th>
                <th>ادرس ایمیل</th>
                <th>مدیریت</th>
              
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td><a href="#" class="btn bg-danger fontdelete" >حذف</a></td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>نام کاربری</th>
                <th>رمز عبور</th>
                <th>ادرس ایمیل</th>
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