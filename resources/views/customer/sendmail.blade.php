@extends('layouts.app')

@section('content')
<div class="container">
    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <h3>Send Mail</h3>
            <p>send mail to provider</p>
            <form class="m-t" role="form" action="login.html">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="First Name" required="">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Last Name" required="">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" required="">
                </div>
                <a type="button" href="{{ route('home')}}" class="btn btn-primary block full-width m-b">Send Mail</a>
            </form>
        </div>
    </div>
</div>
@endsection