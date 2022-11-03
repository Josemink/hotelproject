<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Admin | Villa de Panta Hotel</title>


    <?php include('./header.php'); ?>
    <?php include './admin/db_connect.php'; ?>
    <?php
    session_start();
    if (isset($_SESSION['login_id']))
        header("location:index.php?page=home");

    $query = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
    foreach ($query as $key => $value) {
        if (!is_numeric($key))
            $_SESSION['setting_' . $key] = $value;
    }
    ?>

</head>
<style>
    body {
        width: 100%;
        height: calc(100%);
        /*background: #007bff;*/
    }

    main#main {
        width: 100%;
        height: calc(100%);
        background: white;
    }

    #login-right {
        position: absolute;
        right: 0;
        width: 40%;
        height: calc(100%);
        background: white;
        display: flex;
        align-items: center;
    }

    #login-left {
        position: absolute;
        left: 0;
        width: 60%;
        height: calc(100%);
        background: #00000061;
        display: flex;
        align-items: center;
    }

    #login-right .card {
        margin: auto
    }

    .logo {
        margin: auto;
        font-size: 8rem;
        background: white;
        padding: .5em 0.8em;
        border-radius: 50% 50%;
        color: #000000b3;
    }

    #login-left {
        background: url(../assets/img/<?php echo $_SESSION['setting_cover_img'] ?>);
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>


<body>
    <?php if (isset($_SESSION['error'])) { ?>
        <div class="alert alert-danger g-3" role="alert">
            <?php
            echo $_SESSION['error'];
            unset($_SESSION['error']);
            ?>
        </div>
    <?php } ?>

    <?php if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success" role="alert">
            <?php
            echo $_SESSION['success'];
            unset($_SESSION['success']);
            ?>
        </div>
    <?php } ?>

    <?php if (isset($_SESSION['warning'])) { ?>
        <div class="alert alert-warning" role="alert">
            <?php
            echo $_SESSION['warning'];
            unset($_SESSION['warning']);
            ?>
        </div>
    <?php } ?>

    <main id="main" class=" alert-info">
        <div id="login-left">
        </div>
        <div id="login-right">
            <div class="card col-md-8">
                <div class="card-body">
                    <form id="login-form">
                        <div class="form-group">
                            <label for="fistname" class="control-label">ชื่อ</label>
                            <input type="text" id="name" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="control-label">นามสกุล</label>
                            <input type="text" id="lasttname" name="lastname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="username" class="control-label">Email</label>
                            <input type="email" id="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="username" class="control-label">Username</label>
                            <input type="text" id="username" name="username" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input type="password" id="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Confirm Password</label>
                            <input type="password" id="password" name="cfpassword" class="form-control">
                        </div>
                        <button class="btn-sm btn-block btn-wave col-md-4 btn-primary" style="margin-left:110px; margin-top:20px;">สมัครสมาชิก</button>
                        <center><a href="./admin/login.php">เป็นสมาชิกอยู่แล้ว</a></center>
                    </form>
                </div>
            </div>
        </div>


    </main>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>

</html>