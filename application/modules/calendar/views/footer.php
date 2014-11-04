<script src="<?php echo base_url().'assets/scripts/jquery-1.10.2.min.js'?>" type="text/javascript"></script>
<script src="<?php echo base_url().'assets/scripts/bootstrap/bootstrap.min.js'?>" type="text/javascript"></script>
<script src="<?php echo base_url().'assets/calendario/scripts/jquery.calendario.js'?>"></script>
<script src="<?php echo base_url().'assets/calendario/scripts/data.js'?>"></script>
<script src="<?php echo base_url().'assets/scripts/modernizr.js'?>"></script>
<script>
	$(document).ready(function() {

		var ourEvents;
		var transEndEventName = {
			'WebkitTransition' : 'webkitTransitionEnd',
			'MozTransition' : 'transitionend',
			'OTransition' : 'oTransitionEnd',
			'msTransition' : 'MSTransitionEnd',
			'transition' : 'transitionend'
		};
		$wrapper = $('#custom-inner');
		ourEvents = {
			'11-20-2013' : '<span><i class="fa fa-bullhorn"></i> A Nguru Deh!!</span><div class="calendarItem"><p>cdvdvvdvdvdvvd</p><button class="btn btn-primary editItem">Edit</button></div>'
			
		};
		cal = $('#calendar').calendario({
			onDayClick : function($el, $contentEl, dateProperties) {

				if ($contentEl.length > 0) {
					showEvents($contentEl, dateProperties);
				}

			},
			caldata : ourEvents,
			displayMonthAbbr : true,
		});
		$month = $('#custom-month').html(cal.getMonthName());
		$year = $('#custom-year').html(cal.getYear());
		$('#custom-next').on('click', function() {
			cal.gotoNextMonth(updateMonthYear);
		});
		$('#custom-prev').on('click', function() {
			cal.gotoPreviousMonth(updateMonthYear);
		});

		function updateMonthYear() {
			$month.html(cal.getMonthName());
			$year.html(cal.getYear());
		}

		// just an example..
		function showEvents($contentEl, dateProperties) {

			hideEvents();

			var $events = $('<div id="custom-content-reveal" class="custom-content-reveal"><h4>Events for ' + dateProperties.monthname + ' ' + dateProperties.day + ', ' + dateProperties.year + '</h4><div id="eventList"></div>'), $close = $('<span class="custom-content-close"></span>').on('click', hideEvents);

			$events.append($close).insertAfter($wrapper);
			$("#eventList").append($contentEl.html());
			setTimeout(function() {
				$events.css('top', '0%');
			}, 25);

		}

		function hideEvents() {

			var $events = $('#custom-content-reveal');
			if ($events.length > 0) {

				$events.css('top', '100%');
				Modernizr.csstransitions ? $events.on(transEndEventName, function() {
					$(this).remove();
				}) : $events.remove();

			}

		}
		$(".eventItem").click(function(){
			$('#reportingCountiesModal').modal('show');
		});
		

	}); 
</script>