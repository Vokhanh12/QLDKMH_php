<?php

    class Account {
        private $_username;
        private $_password;

        private $_maND;
     

        public function __construct($Username, $Password, $MaND) {
            $this->_username = $Username;
            $this->_password = $Password;
            $this->_maND = $MaND;
        }

        public function getUsername() {
            return $this->_username;
        }

        public function setUsername($Username) {
            $this->_username = $Username;
        }

        public function getPassword() {
            return $this->_password;
        }

        public function setPassword($Password) {
            $this->_password = $Password;
        }

        public function setMaND($MaND){
             $this->_maND = $MaND;
        }

        public function getMaND(){
            return $this->_maND;
        }

      
    }


?>