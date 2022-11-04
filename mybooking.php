<?php
$date_in = isset($_POST['date_in']) ? $_POST['date_in'] : date('Y-m-d');
$date_out = isset($_POST['date_out']) ? $_POST['date_out'] : date('Y-m-d', strtotime(date('Y-m-d') . ' + 3 days'));
?>

<!-- Masthead-->
<header class="masthead">
	<div class="container h-100">
		<div class="row h-100 align-items-center justify-content-center text-center">
			<div class="col-lg-10 align-self-end mb-4" style="background: #0000002e;">
				<h1 class="text-uppercase text-white font-weight-bold">การจองของฉัน</h1>
				<hr class="divider my-4" />
			</div>

		</div>
	</div>
</header>

<section class="page-section bg-dark">

	<div class="container">
		<hr>
		<div class="container-fluid">
			<div class="col-lg-12">
				<div class="row mt-3">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<table class="table table-bordered">
									<thead>
										<th>หมายเลขการจอง</th>
										<th>ชื่อผู้จอง</th>
										<th>รายละเอียดการจอง</th>
										<th>สถานะการจอง</th>
										<th>พิมพ์เอกสารการจอง</th>
									</thead>
									<tbody>
										<?php
												$i = 1;
												$checked = $conn->query("SELECT * FROM checked where status = 0 order by status desc, id asc");
												while ($row = $checked->fetch_assoc()) :
												?>
								
										</tr>
									<?php endwhile; ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script>
			$('table').dataTable()
			$('.check_out').click(function() {
				uni_modal("Check Out", "manage_check_out.php?checkout=1&id=" + $(this).attr("data-id"))
			})
		</script>
	</div>

</section>