<div class="external-content">
	<div class="browser">
		<div id="dvContents" class="dvContents">
			<?php
			echo $backup_files;
			?>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$(".recover").click(function() {
			var current_row = $(this).closest('tr').children('td');
			var file_name = current_row.eq(1).text();
			var link="<?php echo base_url().'recover/start_recovery/'?>"
			$.ajax({
				url : link,
				type : 'POST',
				dataType : 'json',
				data : {
					"file_name" : file_name
				},
				success : function(data) {
					alert("Success")
				}
			});
		});
	});

</script>