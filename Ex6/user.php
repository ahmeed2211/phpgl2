<?php
include_once("Repositroy.php");

class UserRepository extends Repositroy
{
    public function __construct()
    {
        parent::__construct("user");
    }
}
?>
