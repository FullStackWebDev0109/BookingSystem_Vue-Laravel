@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
        	<div class="ibox" style="padding-top: 50px;">
        		<div id="calendar"></div>
      		</div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
		        /* initialize the calendar
         -----------------------------------------------------------------*/
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            eventColor: 'green',
            eventLimit: true, // for all non-agenda views
					  views: {
						  	basic: {
						        eventLimit: 1// options apply to basicWeek and basicDay views
						    },
						    agenda: {
						      	eventLimit: 1 // adjust to 6 only for agendaWeek/agendaDay
						    }
					  },
					  eventRender: function(eventObj, $el) {
					      $el.popover({
						        title: eventObj.title,
						        trigger: 'hover',
						        placement: 'top',
						        container: 'body'
					      });
				    },
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar
            drop: function() {
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            },
            events: '/appoinment_event',
        });
});
</script>
@endsection