<?php
/**
 * Created by PhpStorm.
 * User: McGregor
 * Date: 03/02/2020
 * Time: 3:30 AM
 * Project: Gbdev
 * Website: http://www.gb-dev.si
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Gbdev_admin_sign_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    function check_login($username,$pass)
    {
        $this->db->where('username', $username);
        $this->db->where('password', $pass);
        $query = $this->db->get('users');
        return $query;
    }

    function basic_app_settings()
    {
        $this->db->select('company, show_logo, logo, enabled_logo_circle' );
        $this->db->from('setting');
        $query = $this->db->get();
        return $query->result_array();
    }
}
