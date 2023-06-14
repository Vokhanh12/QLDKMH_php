<!DOCTYPE html>
<html>
<head>
    <title>Chuyển trang</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h1 {
            text-align: center;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            gap: 10px;
            margin-top: 20px;
        }

        .button-container button {
            padding: 10px;
            font-size: 18px;
            width: 200px;
        }
    </style>
</head>
<body>
    <h1>Chọn chức năng quản lý</h1>
    
    <div class="button-container">
        <button onclick="window.location.href='quanlysinhvien.php'">Quản lý sinh viên</button>
        <button onclick="window.location.href='quanlygiangvien.php'">Quản lý giảng viên</button>
        <button onclick="window.location.href='quanlydayhoc.php'">Quản lý dạy học</button>
        <button onclick="window.location.href='quanlydangkymonhoc.php'">Quản lý đăng ký môn học</button>
    </div>


    <h1>List View</h1>
    <table>
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>MaND</th>
        </tr>
        <?php

        require_once '../../Model/Database.php';

        // Kết nối đến cơ sở dữ liệu
        $db = new Database();
        $conn = $db->getConnect();

        // Truy vấn dữ liệu từ bảng "taikhoang"
        $sql = "SELECT Username, Password, MaND FROM taikhoang";
        $result = $conn->query($sql);

        // Kiểm tra và hiển thị dữ liệu
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['Username'] . "</td>";
                echo "<td>" . $row['Password'] . "</td>";
                echo "<td>" . $row['MaND'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='3'>No records found</td></tr>";
        }

        // Đóng kết nối cơ sở dữ liệu
        $db->close();
        ?>
    </table>

</body>
</html>