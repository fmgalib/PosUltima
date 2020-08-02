<!-- jQuery -->
<script src="resources/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="resources/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="resources/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="resources/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="resources/dist/js/demo.js"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="resources/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="resources/plugins/raphael/raphael.min.js"></script>
<script src="resources/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="resources/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="resources/plugins/chart.js/Chart.min.js"></script>
<!-- DataTables -->
<script src="resources/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="resources/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="resources/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="resources/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="resources/plugins/sweetalert2/sweetalert2.all.min.js"></script>

<!-- PAGE SCRIPTS -->

<script>
	$(document).ready(function(){
		$("#example1").DataTable();

		// Delete User
		$(".deleteUser").click(function(e){
				e.preventDefault();
				var userId = $(this).attr("id");
				var delete_img = $(this).attr("delete_img");
				var action = "delete";
				
			Swal.fire({
			  text: 'Do you really want to delete this user?',
			  icon: 'warning',
			  confirmButtonText: 'Delete',
			  showCancelButton: true,
				}).then((result)=>{
						if (result.value) {
							$.ajax({
								url: "ajax/userAjax.php",
								method: "POST",
								data: {userId:userId, delete_img:delete_img, action:action},
								success:function(response){
									Swal.fire({
									  text: 'User successfully deleted!',
									  icon: 'success',
									  confirmButtonText: 'OK',
										}).then((ok)=>{
											if (ok) {
												window.location = "users";
											}
										});
								}
							});
							
						}
				});
		});

		
	});
</script>

<script>
	
</script>


</body>
</html>