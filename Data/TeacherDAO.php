<?php

    interface TeacherDao{

        public function createTeacher($Teacher);

        public function deleteTeacher($Teacher);

        public function updateTeacher($Teacher);

        public function getTeacherById($id);



    }


?>