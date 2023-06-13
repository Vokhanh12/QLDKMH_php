<?php

    class Subject {
        private $_mamh;
        private $_tenmh;
        private $_tinchi;

        public function __construct($MaMH, $TenMH, $TinChi) {
            $this->_mamh = $MaMH;
            $this->_tenmh = $TenMH;
            $this->_tinchi = $TinChi;
        }

        public function getMaMH() {
            return $this->_mamh;
        }

        public function setMaMH($MaMH) {
            $this->_mamh = $MaMH;
        }

        public function getTenMH() {
            return $this->_tenmh;
        }

        public function setTenMH($TenMH) {
            $this->_tenmh = $TenMH;
        }

        public function getTinChi() {
            return $this->_tinchi;
        }

        public function setTinChi($TinChi) {
            $this->_tinchi = $TinChi;
        }
    }


?>