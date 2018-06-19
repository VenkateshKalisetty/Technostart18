<script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script src="assets/css/jquery.min.js"></script>
<script src="assets/dist/js/adminlte.min.js"></script>
<script src="assets/dist/js/pages/dashboard.js"></script>
<script src="assets/dist/js/demo.js"></script>
<script src="assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#example1').DataTable()
   
  })
</script>
  <!-- Main JavaScript file -->
    <script src="js/script.js"></script>
    <script>
    $('.count').each(function () {
	    $(this).prop('Counter',0).animate({
	        Counter: $(this).text()
	    }, {
	        duration: 4000,
	        easing: 'swing',
	        step: function (now) {
	            $(this).text(Math.ceil(now));
	        }
	    });
	});
    </script>
    <script type="text/javascript" src="assets/registration/register.js"></script>
    
   
    <script type="text/javascript">
    	$(document).ready(function() {
		    var table = $('#example').DataTable( {
		        lengthChange: false,
		        //buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
		        buttons: [  'excel', 'pdf']
		    } );
		 
		    table.buttons().container()
		        .appendTo( '#example_wrapper .col-sm-6:eq(0)' );
		} );
    </script>
</body>
</html>
