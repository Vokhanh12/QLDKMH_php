<?php
class Database {
    private $username = "root";
    private $password = "";
    private $host = "localhost";
    private $database = "db_qldkmh_php";

    private $conn;        // Đối tượng kết nối cơ sở dữ liệu

    public function __construct() {

        $this->connect();   // Khi khởi tạo lớp Database, tự động kết nối tới cơ sở dữ liệu

    }

    private function connect() {
        // Thực hiện kết nối tới cơ sở dữ liệu
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        // Kiểm tra kết nối
        if ($this->conn->connect_error) {
            die("Kết nối cơ sở dữ liệu thất bại: " . $this->conn->connect_error);
        }
    }

    public function getConnect(){

        return $this->conn;

    }
    public function insert($table, $data) {
        // Tạo chuỗi các cột
        $columns = implode(", ", array_keys($data));
        
        // Tạo chuỗi các giá trị
        $values = "'" . implode("', '", array_values($data)) . "'";

        // Tạo câu truy vấn INSERT
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
        
        // Thực hiện truy vấn
        return $this->conn->query($sql);
    }

    public function update($table, $data, $condition) {
        // Tạo chuỗi phần SET của câu truy vấn UPDATE
        $set = "";
        foreach ($data as $column => $value) {
            $set .= "$column = '$value', ";
        }
        $set = rtrim($set, ", ");

        // Tạo câu truy vấn UPDATE
        $sql = "UPDATE $table SET $set WHERE $condition";

        // Thực hiện truy vấn
        return $this->conn->query($sql);
    }

    public function delete($table, $condition) {
        // Tạo câu truy vấn DELETE
        $sql = "DELETE FROM $table WHERE $condition";

        // Thực hiện truy vấn
        return $this->conn->query($sql);
    }


    // Các phương thức khác như select, executeQuery, ...

    public function close() {
        // Đóng kết nối cơ sở dữ liệu
        $this->conn->close();
    }
}


?>