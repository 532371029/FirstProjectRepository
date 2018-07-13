<?php
namespace core\lib;
use Medoo\Medoo;
class model extends Medoo{
    public function __construct()
    {
        $options=conf::all('database');
        parent::__construct($options);

    }
}