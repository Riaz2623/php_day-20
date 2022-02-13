<?php


namespace App\classes;
use App\classes\User;
use App\classes\ExampleOne;
use App\classes\ExampleTwo;
use App\classes\Teacher;
use App\classes\Category;

class Student extends Teacher implements ExampleOne, ExampleTwo
{
    use Category;

    protected $country = 'Bangladesh';

    public static $area = 'Farmgate';


    public function __construct()
    {
//        $this->name = 'Riaz';
//        $this->city ='savar';
    }

    public function manage()
    {
        echo self:: $area;
//       echo $this->add();
//       echo "Institute name is $this->name and city is $this->city and country";
    }


    public function one()
    {
       echo "Hello One";
    }

    public function Two()
    {
        echo "Hello Two";
    }

    public function Three()
    {
       echo "Hello Three";
    }

    public function ten()
    {
        echo "ten";
    }

    public function ten1()
    {
       echo "ten1";

    }

    public function test()
    {
        echo "Hello Test";
    }
    public static function demo()
    {
        echo "Hello demo";
    }
}