<?php
class Hour {
    private int $day;
    private int $rank;
    private string $group;
    private string $teacher;
    private string $name;
    private string $classroom;

    public function __construct($day, $rank, $group, $teacher, $name, $classroom)
    {
        $this->day = $day;
        $this->rank = $rank;
        $this->group = $group;
        $this->teacher = $teacher;
        $this->name = $name;
        $this->classroom = $classroom;
    }

    public function __get($name){
        if(!array_key_exists($name, get_class_vars(__CLASS__)))
            throw new Exception("Property {$name} does not exit");
        return $this->$name;
    }
    public function __set($name, $value) {
        if (!array_key_exists($name, get_class_vars(__CLASS__))) {
            throw new Exception("Property {$name} does not exit");
        }
        $this->$name = $value;
    }


}
