	<script type="text/javascript">
	window.jQuery || document.write("<script src='assets/js/jquery.min.js'>"+"<"+"/script>");
	


	
	if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
	

	
	jQuery(function($) {
		$(document).on('click', '.toolbar a[data-target]', function(e) {
			e.preventDefault();
			var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			});
	});

	</script>
	
	
	
	
	<style>
/* some elements used in demo only */
.spinner-preview {
	width: 100px;
	height: 100px;
	text-align: center;
	margin-top: 60px;
}

.dropdown-preview {
	margin: 0 5px;
	display: inline-block;
}
.dropdown-preview  > .dropdown-menu {
	display: block;
	position: static;
	margin-bottom: 5px;
}
</style>