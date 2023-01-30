<?php
require_once 'inc/header.php';

/**
 * Interface
 */

interface School{
    public function mySchool();
}

interface Collage{
    public function myCollage();
}

class Teacher implements School, Collage{
    public function __construct(){
        $this->mySchool();
        $this->myCollage();
    }

    public function mySchool(){
        echo "I am School Teacher <br>";
    }

    public function myCollage(){
        echo "I am Collage Teacher <br>";
    }
}

class Student implements School, Collage{
    public function __construct(){
        $this->mySchool();
        $this->myCollage();
    }

    public function mySchool(){
        echo "I am School Student <br>";
    }

    public function myCollage(){
        echo "I am Collage Student <br>";
    }
}

$teacher = new Teacher();
$student = new Student();
require_once 'inc/footer.php';