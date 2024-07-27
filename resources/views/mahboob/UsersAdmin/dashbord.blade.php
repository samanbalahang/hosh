@extends('mahboob/UsersAdmin/userlayout')



@section('dash')
  <div class="m-d-container">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
  </div>
  @endsection
 