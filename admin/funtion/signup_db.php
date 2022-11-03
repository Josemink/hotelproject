<!-- <?php

session_start();
require_once './admin/db_connect.php';
if (isset($_POST['signup'])) {
    $firstname = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cf_password = $_POST['cfpassword'];
    $urole = 'user';

    if (empty($name)) {
        $_SESSION['error'] = 'กรุณากรอกชื่อ';
        header("location: register.php");
    } else if (empty($lastname)) {
        $_SESSION['error'] = 'กรุณากรอกนามสกุล';
        header("location: register.php");
    } else if (empty($email)) {
        $_SESSION['error'] = 'กรุณากรอกนามอีเมล';
        
        header("location: register.php");
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error'] = 'รูปแบบอีเมลไม่ถูกต้อง';
        header("location: register.php");
    } else if (empty($password)) {
        $_SESSION['error'] = 'กรุณากรอกรหัสผ่าน';
        header("location: register.php");
    } else if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
        $_SESSION['error'] = 'รหัสผ่านต้องมีความยาวมากกว่า 5 ถึง 20 ตัวอักษร';
        header("location: register.php");
    } else if (empty($cfpassword)) {
        $_SESSION['error'] = 'กรุณายืนยันรหัสผ่าน';
        header("location: register.php");
    } else if ( $password != $cfpassword ) {
        $_SESSION [ ' error ' ] = 'รหัสผ่านไม่ตรงกัน';
        header ( " location : register.php" ) ;
    } else {

    try {

<<<<<<< HEAD
        $check_email = $dbconn->prepare("SELECT email FROM users WHERE email = :email");
=======
<<<<<<< HEAD
        $check_email = $dbconn->prepare("SELECT email FROM users WHERE email = :email");
=======
        $check_email = $dbconn->prepare("SELECT email FROM user WHERE email = :email");
>>>>>>> 588029cb47b7371f8cdf196bd4b659f7c3d657c3
>>>>>>> 353f16ee60bc1a4ad760c78d1c229d0196041149
        $check_email->bindParam(":email" , $email);
        $check_email->execute();
        $row = $check_email->fetch(PDO::FETCH_ASSOC);

        if ($row['email'] ==$email){
            $_SESSION['warning'] = "มีอีเมลนี้อยู่ในระบบแล้ว <a href='auth-login.php'>คลิกที่นี่</a>เพื่อเข้าสู่ระบบ";
            header("location: register.php");
        } else if (!isset($_SESSION['error'])){
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
            $stmt = $dbconn->prepare (
<<<<<<< HEAD
                "INSERT INTO users (firstname, lastname, email, password, urole)
=======
<<<<<<< HEAD
                "INSERT INTO users (firstname, lastname, email, password, urole)
=======
                "INSERT INTO user(firstname, lastname, email, password, urole)
>>>>>>> 588029cb47b7371f8cdf196bd4b659f7c3d657c3
>>>>>>> 353f16ee60bc1a4ad760c78d1c229d0196041149
                VALUES(:firstname, :lastname, :email, :password, :urole)");
            $stmt->bindParam(":firstname", $name);
            $stmt->bindParam(":lastname", $lastname);
            $stmt->bindParam(":email", $email);
            $stmt->bindParam(":password", $passwordHash);
            $stmt->bindParam(":urole", $urole);
            $stmt->execute();
            $_SESSION['success'] = "สมัครสมาชิกเรียบร้อยแล้ว <a href='../admin/login.php' class='alert-link'>คลิกที่นี่เพื่อเข้าสู่ระบบ</a>";
            header("location: register.php");
        }else{
            $_SESSION['error'] = "มีบางอย่างผิดพลาด";
            header("location: register.php");
        }

    } catch(PDOException $e) {
        echo $e->getMessage();
    }
}
 
}
?> -->