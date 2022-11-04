<?php
$date_in = isset($_POST['date_in']) ? $_POST['date_in'] : date('Y-m-d');
$date_out = isset($_POST['date_out']) ? $_POST['date_out'] : date('Y-m-d', strtotime(date('Y-m-d') . ' + 3 days'));
// include 'link.php';
?>




<!-- Masthead-->
<header class="masthead">
	<div class="container h-100">
		<div class="row h-100 align-items-center justify-content-center text-center">
			<div class="col-lg-10 align-self-end mb-4" style="background: #0000002e;">
				<h1 class="text-uppercase text-white font-weight-bold">ห้องพัก</h1>
				<hr class="divider my-4" />
			</div>

		</div>
	</div>
</header>

<section class="page-section bg-dark">

	<div class="container">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-body">
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

			<hr>

			<?php

			$cat = $conn->query("SELECT * FROM room_categories");
			$cat_arr = array();
			while ($row = $cat->fetch_assoc()) {
				$cat_arr[$row['id']] = $row;
			}
			$qry = $conn->query("SELECT distinct(category_id),category_id from rooms where id not in (SELECT room_id from checked where '$date_in' BETWEEN date(date_in) and date(date_out) and '$date_out' BETWEEN date(date_in) and date(date_out)  )");
			while ($row = $qry->fetch_assoc()) :

			?>
				<div class="card item-rooms mb-3">
					<div class="card-body">
						<div class="row">
							<div class="col-md-5">
								<img src="assets/img/<?php echo $cat_arr[$row['category_id']]['cover_img'] ?>" alt="">
							</div>
							<div class="col-md-5" height="100%">
								<h3><b><?php echo '$ ' . number_format($cat_arr[$row['category_id']]['price'], 2) ?></b><span> / ต่อวัน</span></h3>
								<h4><b>
										<?php echo $cat_arr[$row['category_id']]['name'] ?>

										<!-- Button trigger modal -->
										<b><button type="button" class="btn btn-link" style="color: #EF774B;" data-bs-toggle="modal" data-bs-target="#exampleModal">
											รายละเอียดเพิ่มเติม
										</button></b>
										
									</h4> 
								<div class="col-md-8">
									<p class="card-t"><i class='bx bx-wifi'></i>ฟรี Wi-Fi</p>
									<p class="card-t"></i><i class='bx bx-x'></i>ห้องปลอดบุหรี่</p>
									<p class="card-t"><i class='bx bxs-bowl-rice'></i>ไม่รวมอาหารเช้า</p>
									<p class="card-t"><i class='bx bxs-dog'></i>ไม่อนุญาตให้นำสัตว์เลี้ยงเข้าห้องพัก</p>
								</div>
								<div class="align-self-end mt-2">
									<button class="btn btn-primary  float-right book_now" type="button" data-id="<?php echo $row['category_id'] ?>">จองห้องนี้</button>
								</div>
							</div>
						</div>

					</div>
				</div>
			<?php endwhile; ?>
		</div>
	</div>



	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-15">
								<!-- รูปห้อง -->
								<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img src="#" class="d-block w-100" alt="...">
										</div>
									</div>
									<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Previous</span>
									</button>
									<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="visually-hidden">Next</span>
									</button>
								</div>
							</div>
							<h6 class="typeroom"><b>ใส่โค้ดประเภทห้อง</b></h6>
							<div class="col-md-5"><br>
								<p><b>ห้องนอน</b></p>
								<ul>ใส่โค้ดเตียง</ul>
								<ul>ใส่ห้องน้ำ</ul><br>
								<div class="col-md-5"><br>
									<p><b>ลักษณะห้อง</b></p>
									<ul>ห้องปลอดบุหรี่</ul>
									<ul>มีพื้นที่นั่งเล่น</ul><br>
								</div>
							</div>

							<div class="col-md-7 ms-auto "><br>
								<p><b>สิ่งอำนวยความสะดวก</b></p>
								<ul>ใส่โค้ดสิ่งอำนวยความสะดวก</ul>
							</div>

							<div class="col-md-3 ms-auto" style="margin-top:-325px ;">
								<p><b>ทิวทัศน์บริเวณที่พัก</b></p>
								<ul>ภูเขา</ul>
								<ul>ทุ่งนา</ul><br>

								<p><b>พื้นที่ส่วนรวม</b></p>
								<ul>ร้านกาแฟ</ul>
								<ul>ร้านอาหาร</ul>
								<ul>คาเฟ่ทุ่งนา</ul>
								<ul>ที่จอดรถ</ul>
							</div>
						</div>
					</div>
				</div>



</section>
<style type="text/css">
	.item-rooms img {
		width: 23vw;
	}
</style>
<script>
	$('.book_now').click(function() {
		uni_modal('Book', 'admin/book.php?in=<?php echo $date_in ?>&out=<?php echo $date_out ?>&cid=' + $(this).attr('data-id'))
	})
</script>
<!-- <?php require './modal/modal-roomdetal.php' ?> -->