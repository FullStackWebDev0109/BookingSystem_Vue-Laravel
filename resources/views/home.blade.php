@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="padding-top: 50px;">
                <div class="card-header">Provider List</div>
                <div class="col-md-12" style="max-height: 100%;">
                    <ul class="provider-list" style="max-height: 800px;overflow: auto;">
                        @foreach ($providers as $provider)
                        <li class="provider-list-item">
                            <a href="{{url('appoinment')}}/{{$user_id}}/{{$provider->id}}">
                                <div class="provider-content">
                                    <span>{{$provider->name}}</span>
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
