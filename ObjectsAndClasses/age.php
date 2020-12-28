<?php

class Person {
    private $name;
    private $id;
    private $age;

    /**
     * Person constructor.
     * @param $name
     * @param $id
     * @param $age
     */
    public function __construct($name, $id, $age)
    {
        $this->name = $name;
        $this->id = $id;
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

}

$people = [];

$input = readline();
while ($input !== "End") {
    $args = explode(" ", $input);
    $name = $args[0];
    $id = $args[1];
    $age = intval($args[2]);
    $person = new Person($name, $id, $age);
    $people [] = $person;

    $input = readline();
}

usort($people, function(Person $p1, Person $p2) {
    $age1 = $p1->getAge();
    $age2 = $p2->getAge();
    return $age1 <=> $age2;

} );

foreach ($people as $person) {
    $name = $person->getName();
    $id = $person->getId();
    $age = $person->getAge();
    echo "$name with ID: $id is $age years old." . PHP_EOL;

}