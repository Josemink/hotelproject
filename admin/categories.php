<?php include('db_connect.php'); ?>

<div class="container-fluid">

	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-4">
				<form action="" id="manage-category">
					<div class="card">
						<div class="card-header">
							จัดการห้องพัก
						</div>
						<div class="card-body">
							<input type="hidden" name="id">
							<div class="form-group">
								<label class="control-label">ประเภทห้อง</label>
								<input type="text" class="form-control" name="name">
							</div>
							<div class="mb-3">
								<label for="Bed" class="form-label">ประเภทเตียง</label>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">เตียงคู่</label>
									<input id="number" type="number" value="" class="form-control" id="1" name="Bed" aria-describedby="emailHelp" placeholder="กรุณาระบุจำนวนเตียง">
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
									<label class="form-check-label" for="flexCheckDefault">เตียงเดี่ยว</label>
									<input id="number" type="number" value="" class="form-control" id="2" name="Bed" aria-describedby="emailHelp" placeholder="กรุณาระบุจำนวนเตียง">
								</div>
							</div>
							<div class="mb-1">
								<label for="R_Detail" class="form-label">สิ่งอำนวยความสะดวก</label><br>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" id="facilities-air" value="1" name="RD_Detail	">
									<label class="form-check-label" for="inlineCheckbox1">แอร์</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" id="facilities-tv" value="2" name="RD_Detail	">
									<label class="form-check-label" for="inlineCheckbox2">โทรทัศน์</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="checkbox" id="facilities-water-heater" value="3" name="RD_Detail	">
									<label class="form-check-label" for="inlineCheckbox2">เครื่องทำน้ำอุ่น</label>
								</div>

								<div class="mb-1">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" id="facilities-towel" value="4" name="RD_Detail	">
										<label class="form-check-label" for="inlineCheckbox2">ผ้าเช็ดตัว</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" id="facilities-towel-hair" value="5" name="RD_Detail	">
										<label class="form-check-label" for="inlineCheckbox2">ผ้าเช็ดผม</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" id="facilities-fridge" value="6" name="RD_Detail	">
										<label class="form-check-label" for="inlineCheckbox2">ตู้เย็น</label>
									</div>
								</div>
								<div class="mb-1">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" id="facilities-kettle" value="7" name="RD_Detail	">
										<label class="form-check-label" for="inlineCheckbox2">กาน้ำร้อน</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" id="facilities-water" value="8" name="RD_Detail	">
										<label class="form-check-label" for="inlineCheckbox2">น้ำดื่ม</label>
									</div>
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" id="facilities-pillow" value="9" name="RD_Detail	">
										<label class="form-check-label" for="inlineCheckbox2">หมอน</label>
									</div>
								</div>
								<div class="mb-3">
									<div class="form-check form-check-inline">
										<input class="form-check-input" type="checkbox" id="facilities-blanket" value="10" name="RD_Detail	">
										<label class="form-check-label" for="inlineCheckbox2">ผ้าห่ม</label>
									</div>
								</div>
							</div>
							<div class="mb-3">
                            <label for="R_ guest" class="form-label">จำกัดจำนวนผู้เข้าพัก</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" name="1" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    ผู้ใหญ่
                                </label>
                                <input id="number" type="number" value="" class="form-control" id="bed1" name="1" aria-describedby="emailHelp" placeholder="กรุณากำหนดจำนวนผู้เข้าพัก">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" name="2" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    เด็ก
                                </label>
                                <input id="number" type="number" value="" class="form-control" id="bed2" name="2" aria-describedby="emailHelp" placeholder="กรุณากำหนดจำนวนผู้เข้าพัก">
                            </div>
                        </div>
							<div class="form-group">
								<label class="control-label">ราคา</label>
								<input type="number" class="form-control text-right" name="price" step="any">
							</div>
							<div class="form-group">
								<label for="" class="control-label">รูปภาพ</label>
								<input type="file" class="form-control" name="img" onchange="displayImg(this,$(this))">
							</div>
							<div class="form-group">
								<img src="<?php echo isset($image_path) ? '../assets/img/' . $cover_img : '' ?>" alt="" id="cimg">
							</div>
						</div>

						<div class="card-footer">
							<div class="row">
								<div class="col-md-12">
									<button class="btn btn-sm btn-success col-sm-3 offset-md-3">บันทึก</button>
									<button class="btn btn-sm btn-danger  col-sm-3" type="button" onclick="$('#manage-category').get(0).reset()">ยกเลิก</button>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-8">
				<div class="card">
					<div class="card-body">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">ลำดับ</th>
									<th class="text-center">รูปภาพ</th>
									<th class="text-center">รายละเอียด</th>
									<th class="text-center">จัดการ</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$i = 1;
								$cats = $conn->query("SELECT * FROM room_categories order by id asc");
								while ($row = $cats->fetch_assoc()) :
								?>
									<tr>
										<td class="text-center"><?php echo $i++ ?></td>


										<td class="text-center">
											<img src="<?php echo isset($row['cover_img']) ? '../assets/img/' . $row['cover_img'] : '' ?>" alt="" id="cimg">
										</td>
										<td class="">
											<p>ประเภท: <b><?php echo $row['name'] ?></b></p>
											<p>ประเภทเตียง:<?php echo $row['Bed'] ?></b></p></p>
											<p>สิ่งอำนวยความสะดวก:</b></p>
											<p>จำกัดจำนวนผู้เข้าพัก:  </p>
											<p>ราคา: <b><?php echo "฿" . number_format($row['price'], 2) ?></b></p>
										</td>
										<td class="text-center">
											<button class="btn btn-sm btn-primary edit_cat" type="button" data-id="<?php echo $row['id'] ?>" data-name="<?php echo $row['name'] ?>" data-price="<?php echo $row['price'] ?>" data-cover_img="<?php echo $row['cover_img'] ?>">แก้ไข</button>
											<button class="btn btn-sm btn-danger delete_cat" type="button" data-id="<?php echo $row['id'] ?>">ลบ</button>
										</td>
									</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>

</div>
<style>
	img#cimg,
	.cimg {
		max-height: 10vh;
		max-width: 6vw;
	}

	td {
		vertical-align: middle !important;
	}
</style>
<script>
	function displayImg(input, _this) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#cimg').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}
	$('#manage-category').submit(function(e) {
		e.preventDefault()
		start_load()
		$.ajax({
			url: 'ajax.php?action=save_category',
			data: new FormData($(this)[0]),
			cache: false,
			contentType: false,
			processData: false,
			method: 'POST',
			type: 'POST',
			success: function(resp) {
				if (resp == 1) {
					alert_toast("Data successfully added", 'success')
					setTimeout(function() {
						location.reload()
					}, 1500)

				} else if (resp == 2) {
					alert_toast("Data successfully updated", 'success')
					setTimeout(function() {
						location.reload()
					}, 1500)

				}
			}
		})
	})
	$('.edit_cat').click(function() {
		start_load()
		var cat = $('#manage-category')
		cat.get(0).reset()
		cat.find("[name='id']").val($(this).attr('data-id'))
		cat.find("[name='name']").val($(this).attr('data-name'))
		cat.find("[name='Bed']").val($(this).attr('data-Bed'))
		cat.find("[name='price']").val($(this).attr('data-price'))
		cat.find("#cimg").attr('src', '../assets/img/' + $(this).attr('data-cover_img'))
		end_load()
	})
	$('.delete_cat').click(function() {
		_conf("Are you sure to delete this category?", "delete_cat", [$(this).attr('data-id')])
	})

	function delete_cat($id) {
		start_load()
		$.ajax({
			url: 'ajax.php?action=delete_category',
			method: 'POST',
			data: {
				id: $id
			},
			success: function(resp) {
				if (resp == 1) {
					alert_toast("Data successfully deleted", 'success')
					setTimeout(function() {
						location.reload()
					}, 1500)

				}
			}
		})
	}
</script>