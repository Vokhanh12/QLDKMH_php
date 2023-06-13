<?php
include 'Model/Person.php';
include 'Controler/PersonController.php';

// Sử dụng PersonController
$personController = new PersonController();

// Tạo một đối tượng Person mới
$person = new Person("123", "John Doe", "123456789", "123 Main St");
// Thêm người dùng
$result = $personController->addPerson($person);
echo $result;

// Gán giá trị cho biến $nguoiDung
$nguoiDung = $person;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Trang chủ</title>
    <!-- Các thẻ meta, CSS, JS khác -->
</head>
<body>
    <h1>Thông tin người dùng</h1>
    <p>MaND: <?php echo $nguoiDung->getMaND(); ?></p>
    <p>TenND: <?php echo $nguoiDung->getTenND(); ?></p>
    <p>SDT: <?php echo $nguoiDung->getSDT(); ?></p>
    <p>Diachi: <?php echo $nguoiDung->getDiachi(); ?></p>

    <!-- Các phần khác của trang index.php -->
</body>
</html>