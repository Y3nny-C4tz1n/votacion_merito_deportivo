<?php
class CatalogoModel extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
    public function listEstatus(){
        try{
			$this->db->select("pk_estatus,descripcion");
			$this->db->from("cat_estatus");
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }

    public function listModalidad(){
        try{
			$this->db->select("pk_modalidad,descripcion");
			$this->db->from("cat_modalidad");
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }

    public function listPerfiles(){
        try{
			$this->db->select("pk_perfil,descripcion");
			$this->db->from("cat_perfil");
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }

    public function listDeporIndiv(){
        try{
			$this->db->select("pk_nominado,nombre_nominado");
			$this->db->from("nominado");
			$this->db->where('fk_modalidad = 1');
			$this->db->where("estatus = 1");
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }

    public function listEquipoIndiv(){
        try{
			$this->db->select("pk_nominado,nombre_nominado");
			$this->db->from("nominado");
			$this->db->where('fk_modalidad = 2');
			$this->db->where("estatus = 1");
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }

    public function listDeporConj(){
        try{
			$this->db->select("pk_nominado,nombre_nominado");
			$this->db->from("nominado");
			$this->db->where('fk_modalidad = 3');
			$this->db->where("estatus = 1");
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }


	public function listEquipoConj(){
        try{
			$this->db->select("pk_nominado,nombre_nominado");
			$this->db->from("nominado");
			$this->db->where('fk_modalidad = 4');
			$this->db->where("estatus = 1");
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }

    public function listDeporPp(){
        try{
			$this->db->select("pk_nominado,nombre_nominado");
			$this->db->from("nominado");
			$this->db->where('fk_modalidad = 5');
			$this->db->where("estatus = 1");
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }

    public function listEquipoPp(){
        try{
			$this->db->select("pk_nominado,nombre_nominado");
			$this->db->from("nominado");
			$this->db->where('fk_modalidad = 6');
			$this->db->where("estatus = 1");
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }


	public function listMunicipal(){
        try{
			$this->db->select("pk_nominado,nombre_nominado");
			$this->db->from("nominado");
			$this->db->where('fk_modalidad = 7');
			$this->db->where("estatus = 1");
			$query = $this->db->get();
		    return ($query->num_rows() > 0) ? $query->result_array() : array();
		}catch(Exception $ex){
			return array();
		}
    }

}