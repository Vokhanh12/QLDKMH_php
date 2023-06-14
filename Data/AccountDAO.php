<?php


    interface AccountDAO{

        public function createAccount($Account);

        public function deleteAccount($Account);

        public function updateAccount($Account);

        public function getAccountById($id);

        public function getAccountByUsernameAndPassword($Account);


    }


?>