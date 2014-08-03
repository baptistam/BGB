<?php

/**
 * Class Person
 */
class Person
{
    public $firstName;
}

?>

<?php

/**
 * Class Foo
 */
class Foo
{

    public function count($count)
    {
        return "Your count is $count";
    }

    public function greet(Person $person)
    {
        return "Hello $person->firstName";

    }
}