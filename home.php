 <!-- Masthead-->
 <header class="masthead">
 	<div class="container h-100">
 		<div class="row h-100 align-items-center justify-content-center text-center">
 			<div class="col-lg-10 align-self-end mb-4">
 				<div class="card" id="filter-book">
 					<div class="card-body">
 						<div class="container-fluid">
 							<form action="index.php?page=list" id="filter" method="POST">
							 <div class="row">
							<div class="col-md-2">
								<label for="">วันที่เช็คอิน</label>
								<input type="date" class="form-control datepicker" name="date_in" autocomplete="off" value="<?php echo isset($date_in) ? date("Y-m-d", strtotime($date_in)) : "" ?>">
							</div>
							<div class="col-md-2">
								<label for="">วันที่เช็คเอ้าท์</label>
								<input type="date" class="form-control datepicker" name="date_out" autocomplete="off" value="<?php echo isset($date_out) ? date("Y-m-d", strtotime($date_out)) : "" ?>">
							</div>
							<div class="col-md-3">
								<label for="">ผู้ใหญ่</label>
								<input type="number" class="form-control">
							</div>
							<div class="col-md-3">
								<label for="">เด็ก</label>
								<input type="number" class="form-control">
							</div>
							<div class="col-md-2">
								<br>
								<button class="btn-btn-block btn-primary mt-3 ">ค้นหา</button>
							</div>

						</div>
 							</form>
 						</div>
 					</div>
 				</div>
 			</div>

 		</div>
 	</div>
 </header>
 <section class="page-section">
 </section>
 <div id="portfolio">
 	<div class="container-fluid p-0">
 		<div class="row no-gutters">
 			<?php
				include 'admin/db_connect.php';
				$qry = $conn->query("SELECT * FROM  room_categories order by rand() ");
				while ($row = $qry->fetch_assoc()) :
				?>
 				<div class="col-lg-4 col-sm-6">
 					<a class="portfolio-box" href="#">
 						<img class="img-fluid" src="assets/img/<?php echo $row['cover_img'] ?>" alt="" />
 						<div class="portfolio-box-caption">
 							<div class="project-category text-white-30"><?php echo "฿" . number_format($row['price'], 2) ?> ต่อวัน</div>
 							<div class="project-name"><?php echo $row['name'] ?></div>
 						</div>
 					</a>
 				</div>
 			<?php endwhile; ?>

 		</div>
 	</div>
 </div>
 