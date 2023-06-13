<?php

    class Account {
        private $_username;
        private $_password;
     

        public function __construct($Username, $Password) {
            $this->_username = $Username;
            $this->_password = $Password;
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

      
    }


?>