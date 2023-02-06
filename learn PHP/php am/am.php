<?php

trait TraitName1
{
    public function chicken()
    {
        echo "This is chicken.<br>";
    }
}
trait TraitName2
{

    public function cat()
    {
        echo "This is cat.<br>";
    }


}

trait TraitName3
{
    public function dog()
    {
        echo "This is dog. <br>";
    }
}

class Visibility_child
{
    use TraitName1, TraitName2, TraitName3;

}

$new_obj = new Visibility_child();
$new_obj->chicken();
$new_obj->cat();
$new_obj->dog();

?>