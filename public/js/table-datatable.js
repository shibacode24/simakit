$(function() {
	"use strict";
	
	
	    $(document).ready(function() {
			$('#example').DataTable();
			$('#example1').DataTable();
			$('#example3').DataTable();
			$('#example4').DataTable();


		  } );

		 
		  
		  
		  $(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	
	
	});