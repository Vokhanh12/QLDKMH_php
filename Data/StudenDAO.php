<?php

    interface StudentDao{

        public function createStudent($Student);

        public function deleteStudent($Student);

        public function updateStudent($Student);

        public function getStudentById($id);



    }


?>