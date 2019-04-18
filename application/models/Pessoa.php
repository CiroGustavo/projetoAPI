<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: ciro gustavo
 * Date: 14/04/2019
 * Time: 14:20
 */

class Pessoa extends CI_Model
{
    public function getPessoa()
    {
        $query = $this->db->get('pessoa_teste');
        return $query->result();
    }
}