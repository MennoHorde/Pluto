$(function() {

	// Initiate data table
	$('#aftekenlijsten').DataTable({
		"scrollY": "520px",
		"scrollCollapse": true,
		"paging": false,
		"info": false
	});

	// Datepicker range
	$('.input-daterange').datepicker({
        format: "yyyy/mm/dd",
        startView: 1,
        language: "nl",
		orientation: "top auto"
    });

	// Check all checkboxen button
	$(".checkAll").click(function(){
		$('input:checkbox').not(this).prop('checked', this.checked);
	});

})();
