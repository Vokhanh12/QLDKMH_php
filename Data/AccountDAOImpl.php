<?php

    require_once '../Data/AccountDAO.php';
    require_once '../Model/Database.php';

    


    class AccountDAOImpl extends Database implements AccountDAO{

        private $db;
        private $NAME_TABLE = "taikhoang";



        public function __construct(){

            $this->db = new Database();


        }




        public function createAccount($Account){

            // Lấy thông tin từ đối tượng Person
            $username = $Account->getUsername();
            $passwrod = $Account->getPassword();
            $maND = $Account->getMaND();
          
            // Dữ liệu cần chèn vào cơ sở dữ liệu
            $data = array(
                "Username" => $username,
                "Password" => $passwrod,
                "MaND" => $maND,
            
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

        public function deleteAccount($Account){

        }

        public function updateAccount($Account){

        }

        public function getAccountById($id){

        }

        public function getAccountByUsernameAndPassword($Account){


            $Username = $Account->getUsername();
            $Password = $Account->getPassword();

            $db = new Database();

            $conn = $db->getConnect();


           // Chuẩn bị câu truy vấn sử dụng Prepared Statement để tránh lỗi SQL Injection
            $stmt = $conn->prepare("SELECT * FROM $this->NAME_TABLE WHERE username = ? AND password = ?");
            $stmt->bind_param("ss", $Username, $Password); // Ràng buộc giá trị cho các tham số

            $stmt->execute();

            // Lấy kết quả từ truy vấn
            $result = $stmt->get_result();
        
            // Kiểm tra số lượng hàng trả về
            if ($result->num_rows > 0) {
                // Đã tìm thấy người dùng với tên đăng nhập và mật khẩu tương ứng
                return true;
            } else {
                // Không tìm thấy người dùng
                return false;
            }



        }   


    }

?>