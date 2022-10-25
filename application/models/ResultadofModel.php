<?php
class ResultadofModel extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}
    public function resultadofModelo($filtros){
        set_time_limit(0);
        ini_set('memory_limit', '-1');

$this->db->select("v.pk_voto,
        v.punto as voto,
        n.nombre_nominado as nominado,
                a.descripcion as asociacion,
         count(v.punto) as total
         ");
$this->db->from("voto AS v");
$this->db->join("nominado AS n", "n.pk_nominado = v.fk_nominado");
$this->db->join("cat_asociacion AS a", "n.fk_asociacion = a.pk_asociacion");
$this->db->where("v.fk_modalidad = 3");
$this->db->group_by("v.fk_nominado");
$this->db->order_by('total', 'DESC');



if(isset($filtros['sidx'])){
$this->db->order_by($filtros['sidx'] ,$filtros['sord']);
}else{
$this->db->order_by('pk_voto','ASC');
}
if($filtros['tipo'] == 'PARCIAL'){
$this->db->limit($filtros['limit'],$filtros['start']);
}
$query = $this->db->get();
$tmp = $query->num_rows();
$rt = ($tmp > 0) ? $query->result_array() : array();
if($filtros['tipo'] == 'TOTAL'){
return $tmp;
}else if($filtros['tipo'] == 'PARCIAL'){
return $rt;
}
}

public function getReporte($arrayData = array()){
        $this->db->select("v.pk_voto,
        v.punto as voto,
        n.nombre_nominado as nominado,
                a.descripcion as asociacion,
         count(v.punto) as total
         ");
$this->db->from("voto AS v");
$this->db->join("nominado AS n", "n.pk_nominado = v.fk_nominado");
$this->db->join("cat_asociacion AS a", "n.fk_asociacion = a.pk_asociacion");
//$this->db->where("v.fk_modalidad = 3");
$this->db->group_by("v.fk_nominado");
$this->db->order_by('total', 'DESC');
         
        $where = "";

        if($where != ""){
            $this->db->where($where);
        }
        if($arrayData['modalidad'] != '')
        {
            $this->db->where("v.fk_modalidad", $arrayData['modalidad']);
        }
        $query = $this->db->get();
        return ($query->num_rows() > 0) ? $query->result_array() : array();
    }

}