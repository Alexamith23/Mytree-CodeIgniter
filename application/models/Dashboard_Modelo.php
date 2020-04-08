<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_Modelo extends CI_Model
{

    public function count()
    {
        $builder->selectCount('id');
        $query = $builder->get(); // Produces: SELECT COUNT(age) as age FROM mytable
        return $query;
    }
  
}