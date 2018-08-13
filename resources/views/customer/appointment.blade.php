@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{asset('css/calendar/style.css')}}">
<link href="{{asset('css/mobiscroll.custom-2.6.2.min.css')}}" rel="stylesheet" type="text/css" />
<div class="container">
    <div class="row justify-content-center">
    	<form action="{{ route('appoinment_booking') }}" method="post">
    		@csrf
    		<div class="row"  style="margin-top: 100px;">
	        <div class="col-md-6 col-sm-6">
							<html ng-app='calendarApp' ng-cloak='true'></html>
							  <div class='calendar' ng-controller='calendarController as calendar'>
							    <div class='calendar_left'>
							      <div class='header'>
							        <i class='fa fa-2x fa-chevron-left' ng-click='calendar.prev()'></i>
							        <h2 ng-bind="calendar.month" style="color: white;"></h2>
							        <i class='fa fa-2x fa-chevron-right' ng-click='calendar.next()'></i>
							      </div>
							      <div class='days'>
							        <div class='day_item'>Mon</div>
							        <div class='day_item'>Tue</div>
							        <div class='day_item'>Wed</div>
							        <div class='day_item'>Thu</div>
							        <div class='day_item'>Fri</div>
							        <div class='day_item'>Sat</div>
							        <div class='day_item'>Sun</div>
							      </div>
							      <div class='dates'></div>
							      <input type="hidden" name="appoint_date" class="appointdate">
							      <input type="hidden" name="user_id" value="{{$user_id}}">
	            			<input type="hidden" name="provider_id" value="{{$provider_id}}">
							    </div>
							  </div>
	        </div>
	        <div class="col-md-6 col-sm-6">
	        		<div class="content">
					        <div id="demo_default" class="demos">
					            <input type="hidden" name="appoint_time" id="test_default" value="{{ date('H:i',time()) }}" />
					        </div>
					    </div>
	        </div>
        </div>
        <div style="margin-top: 30px; text-align: center;">
				  <a type="button" href="{{ route('home') }}" class="btn btn-default">Cancel</a>
	    	  <button class="btn btn-primary appointment">Next</button>
    	  </div>
	  	</form>
    </div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://code.angularjs.org/1.3.14/angular-animate.js'></script>
<script src="{{asset('js/calendar/index.js')}}"></script>
<script src="{{asset('js/mobiscroll.custom-2.6.2.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    $(function() {
        var curr = new Date().getFullYear();
        var opt = {

        }

        opt.date = {
            preset: 'date'
        };
        opt.datetime = {
            preset: 'datetime',
            minDate: new Date(2012, 3, 10, 9, 22),
            maxDate: new Date(2014, 7, 30, 15, 44),
            stepMinute: 5
        };
        opt.time = {
            preset: 'time',
            timeFormat:　'HH:ii'
        };
        opt.tree_list = {
            preset: 'list',
            labels: ['Region', 'Country', 'City']
        };
        opt.image_text = {
            preset: 'list',
            labels: ['Cars']
        };
        opt.select = {
            preset: 'select'
        };

        $("#demo_default").show();
        $('#test_default').val('').scroller('destroy').scroller($.extend(opt['time'], {
            theme: 'android-ics light',
            mode: 'scroller',
            display: 'inline',
            lang: ''
        }));

        $('#test_default').trigger('change');
    });
</script>
</div>
@endsection