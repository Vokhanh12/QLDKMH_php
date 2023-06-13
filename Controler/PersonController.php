<?php

include 'Model/Database.php';

class PersonController {
    private $db;
    private $USERNAME = "root";
    private $PASSWORD = "";
    private $SERVER = "localhost";
    private $DBNAME = "db_qldkmh_php";
    private $NAME_TABLE = "nguoidung";

    public function __construct() {
        // Tạo đối tượng Database và kết nối tới cơ sở dữ liệu
        $this->db = new Database($this->SERVER, $this->USERNAME, $this->PASSWORD, $this->DBNAME);
    }

    public function addPerson($person) {
        // Lấy thông tin từ đối tượng Person
        $maND = $person->getMaND();
        $tenND = $person->getTenND();
        $sdt = $person->getSDT();
        $diachi = $person->getDiachi();

        // Dữ liệu cần chèn vào cơ sở dữ liệu
        $data = array(
            "MaND" => $maND,
            "TenND" => $tenND,
            "SDT" => $sdt,
            "DiaChi" => $diachi,
        );

        // Thực hiện thêm dữ liệu vào cơ sở dữ liệu
        $result = $this->db->insert($this->NAME_TABLE, $data);

        // Kiểm tra kết quả và trả về
        if ($result) {
            return "Thêm người dùng thành công";
        } else {
            return "Thêm người dùng thất bại";
        }
    }

    public function updatePerson($person) {
        // Lấy thông tin từ đối tượng Person
        $maND = $person->getMaND();
        $tenND = $person->getTenND();
        $sdt = $person->getSDT();
        $diachi = $person->getDiachi();

        // Dữ liệu cần cập nhật trong cơ sở dữ liệu
        $data = array(
            "TenND" => $tenND,
            "SDT" => $sdt,
            "DiaChi" => $diachi,
        );

        // Điều kiện để xác định người dùng cần cập nhật
        $condition = "MaND = '$maND'";

        // Thực hiện cập nhật dữ liệu trong cơ sở dữ liệu
        $result = $this->db->update($this->NAME_TABLE, $data, $condition);

        // Kiểm tra kết quả và trả về
        if ($result) {
            return "Cập nhật thông tin người dùng thành công";
        } else {
            return "Cập nhật thông tin người dùng thất bại";
        }
    }

    public function deletePerson($maND) {
        // Điều kiện để xác định người dùng cần xóa
        $condition = "MaND = '$maND'";

        // Thực hiện xóa dữ liệu trong cơ sở dữ liệu
        $result = $this->db->delete($this->NAME_TABLE, $condition);

        // Kiểm tra kết quả và trả về
        if ($result) {
            return "Xóa người dùng thành công";
        } else {
            return "Xóa người dùng thất bại";
        }
    }

    public function closeDatabaseConnection() {
        // Đóng kết nối cơ sở dữ liệu
        $this->db->close();
    }
}
?>
