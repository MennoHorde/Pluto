$(document).ready( function() {
		
	// Initiate data table
	$('#zorgverleners').DataTable({
		"scrollY": "520px",
		"scrollCollapse": true,
		"paging": false,
		"info": false,
		"order": [[ 1, "asc" ]]
	});
	
	// Initiate TinyMCE
	tinymce.init({
            selector: "#mytextarea",
			height: 600,
        });
});