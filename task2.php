<?php

class Person {
    // attributes
    public $name;
    public $age;

    // constructor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
}

class Student extends Person {
    // additional attribute
    public $mark;

    // constructor
    public function __construct($name, $age, $mark) {
        parent::__construct($name, $age); // Call the parent class constructor
        $this->mark = $mark;
    }

    // method override 
    public function introduce() {
        echo "My name is {$this->name}, I am {$this->age} years old \n";
    }

    //  method
    public function calculate_grade_percentage() {
        $percentage = ($this->mark / 100) * 100;
        return "{$percentage}%";
    }
}

// Example 
$student = new Student("Robert", 18, 85);
$student->introduce(); 
$gradePercentage = $student->calculate_grade_percentage();
echo "My grade percentage is {$gradePercentage}\n";