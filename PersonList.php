<?php
include_once "Person.php";

class PersonList
{
    public $personList;
    public $path;

    public function __construct()
    {
        $this->personList = $this->loadData();
        $this->path = "person.json";
    }

    function saveData($data)
    {
        $dataJson = json_encode($data);
        file_put_contents($this->path, $dataJson);
    }

    function loadData()
    {
        $dataJson = file_get_contents("person.json");
        if (!empty($dataJson)) {
            $data = json_decode($dataJson, true);
            return $this->convertToObj($data);
        } else {
            return [];
        }
    }

    function display()
    {
        return $this->personList;
    }

    function addData($request)
    {
        $persons = $this->loadData();
        $person = new Person($request['name'], $request['age']);
        array_push($persons, $person);
        $this->saveData($persons);
    }


    function sortUp()
    {
        $persons = $this->loadData();
        usort($persons, function ($a, $b) {
            return $a->getAge() > $b->getAge();
        });
        $this->saveData($persons);
    }

    function sortDown()
    {
        $persons = $this->loadData();
        usort($persons, function ($a, $b) {
            return $a->getAge() < $b->getAge();
        });
        $this->saveData($persons);
    }

    function reset() {
        $persons = $this->loadData();
        usort($persons, function ($a, $b) {
            return $a->getName() > $b->getName();
        });
        $this->saveData($persons);
    }

    function searchName($request)
    {
        $name = $request['name'];
        foreach ($this->personList as $person) {
            if ($person->getName() == $name) {
                echo 'Tên: ' . $person->getName() . " - " . 'Tuổi: ' . $person->getAge();
                return true;
            }
        }
        echo "Không tìm thấy đối tượng";
    }

    function convertToObj($arr)
    {
        $persons = [];
        foreach ($arr as $key => $value) {
            $person = new Person($value['name'], $value['age']);
            array_push($persons, $person);
        }
        return $persons;
    }


}