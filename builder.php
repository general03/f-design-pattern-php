<?php

class Director
{
    public function build(Builder $builder)
    {
        $builder->createHouse();
        $builder->addDoor();
        $builder->addRoof();

        return $builder->getHouse();
    }
}

interface Builder
{
    public function createHouse();

    public function addDoor();

    public function addRoof();

    public function getHouse();
}

class Door extends House {}

class Roof extends House {}

abstract class House
{
    public function add(string $key, object $value)
    {
    }
}

class School extends House {}

class SchoolBuilder implements Builder
{
    private House $_house;

    public function addDoor()
    {
        $this->_house->add('enter', new Door());
        $this->_house->add('garden', new Door());
        echo "2 doors added !\r\n";
    }

    public function addRoof()
    {
        $this->_house->add('main', new Roof());
        echo "1 roof added ! \r\n";
    }

    public function createHouse()
    {
        $this->_house = new School();
    }

    public function getHouse()
    {
        return $this->_house;
    }
}