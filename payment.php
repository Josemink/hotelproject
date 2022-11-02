<?php
$date_in = isset($_POST['date_in']) ? $_POST['date_in'] : date('Y-m-d');
$date_out = isset($_POST['date_out']) ? $_POST['date_out'] : date('Y-m-d', strtotime(date('Y-m-d') . ' + 3 days'));
?>

<!-- Masthead-->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end mb-4" style="background: #0000002e;">
                <h1 class="text-uppercase text-white font-weight-bold">ชำระเงิน</h1>
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
            <div class="card item-rooms mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="col-md-9"><br>
                                <label class="form-label">เลขบัตรประจำตัวประชาชน 13 หลัก</label>
                                <input type="text" name="PM_Idcard" class="form-control">
                            </div>
                            <div class="col-md-9">
                                <label class="form-label">ชื่อ-นามสกุล</label>
                                <input type="text" name="PM_Name" class="form-control">
                            </div>
                            <div class="col-md-9">
                                <label class="form-label">อีเมล</label>
                                <input type="email" name="PM_Email" class="form-control">
                            </div>
                            <div class="col-md-9">
                                <label class="form-label">เบอร์โทรศัพท์</label>
                                <input type="text" name="PM_Tel" class="form-control">
                            </div>
                            <div class="col-md-9">
                                <label class="form-label">วันที่โอนเงิน</label>
                                <input type="date" name="PM_Date" class="form-control">
                            </div>
                            <div class="col-md-9">
                                <label class="form-label">เวลาที่โอนเงิน</label>
                                <input type="time" name="PM_Time" class="form-control">
                            </div>
                            <div class="col-md-9">
                                <label class="form-label">ธนาคารที่ใช้โอนเงิน</label>
                                <input type="text" name="PM_Bank" class="form-control">
                            </div>
                            <div class="col-md-9">
                                <label class="form-label">จำนวนเงินที่โอน</label>
                                <input type="text" name="PM_Total" class="form-control">
                            </div>
                            <div class="col-md-9">
                                <label for="formFile" class="form-label">แนบเอกสารชำระเงิน</label>
                                <input class="form-control" type="file" id="formFile" name="PM_Img">
                            </div>
                            <br>
                            <div class="col-md-9">
                                <button type="submit" name="signup" class="btn btn-success w-100 ">ชำระเงิน</button>
                            </div>
                        </div>
                        <div class="col">
                            <div class="img">
                                <img src="./QRCode.jpg" alt="">
                            </div>
                            <ul>ชื่อบัญชี : VILLA DE PANTA PHU RUEA</ul>
                            <ul>เลขบัญชี : 120-5698-326</ul>
                            <ul>ชื่อธนาคาร : ไทยพาณิชย์</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>