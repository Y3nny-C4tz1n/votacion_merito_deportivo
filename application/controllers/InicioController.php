<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class InicioController extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('InicioModel');
		$this->load->model('CatalogoModel');
	}
	public function index(){
		$datos = $this->funcionesBasicas('Inicio');
		$datos['menu'] = "inicio";
		$datos['DEPORINDIV'] = $this->CatalogoModel->listDeporIndiv();
		$datos['EQUIPOINDIV'] = $this->CatalogoModel->listEquipoIndiv();
		$datos['DEPORCONJ'] = $this->CatalogoModel->listDeporConj();
		$datos['EQUIPOCONJ'] = $this->CatalogoModel->listEquipoConj();
		$datos['DEPORPP'] = $this->CatalogoModel->listDeporPp();
		$datos['EQUIPOPP'] = $this->CatalogoModel->listEquipoPp();
		$datos['MUNICIPAL'] = $this->CatalogoModel->listMunicipal();
		
		$this->load->view('inicio',$datos);
	}
	public function listVoto(){
		
		$filtros = array('tipo' => 'TOTAL', 'start' => '0', 'limit' => '0');
		$count = $this->VotoModel->VotoModelo($filtros);
		$tmp = $this->input->post('page');
		$page = (!empty($tmp))?$tmp:1;
		$tmp = $this->input->post('rows');
		$limit = $filtros['limit'] = (!empty($tmp))?$tmp:10;
		$start = $limit * $page - $limit;
		$start = $filtros['start'] = ($start < 0) ? 0 : $start;
		$filtros['tipo'] = 'PARCIAL';
		$sidx = (isset($_POST['sidx']) && $_POST['sidx'] != "") ? $_POST['sidx'] : 'pk_voto';
		$sord = (isset($_POST['sidx']) && $_POST['sidx'] != "") ? $_POST['sord'] : 'ASC';
		$filtros['sidx'] = $sidx;
		$filtros['sord'] = $sord;
		$dataControl = $this->InicioModel->InicioModelo($filtros);  //checar//
		if($count > 0){
			$total_pages = ceil($count/$limit);
		}else{
			$total_pages = 0;
		}
		if ($page > $total_pages){
			$page=$total_pages;
		}
		$response = new stdClass();
		$response->page = $page;
		$response->total = $total_pages;
		$response->records = $count;
		if(count($dataControl) == 0){
			echo json_encode(array());
			die();
		}
		$i=0;
		foreach($dataControl as $row){
			$response->rows[$i]['id'] = $row['pk_voto'];
			$response->rows[$i]['cell'] = array('pk_voto' => $row['pk_voto'],
				"btnEditar" => '<button type="button" class="btn btn-labeled btn-primary btn-sm btnEditar" data-bs-toggle="modal" data-bs-target="#modalInventario" data-id="'.$row['pk_voto'].'"><span class="btn-label"><i class="bi bi-pencil"></i></span>  Editar</button>',
				"descripcion" => $row['descripcion'],
				"nombre_nominado" => $row['nombre_nominado'],
				"descripcion" => $row['descripcion'],
				"punto" => $row['punto'],
				"nombre_usuario" => $row['nombre_usuario'],
				"fecha_creacion" => $row['fecha_creacion'],	
				
			);
			$i++;
		}
		echo json_encode($response);die();
	}

	public function guardarVotoDeporIndiv(){
		if(!$this->session->userdata('pb_idUsuario')){
			echo json_encode(array("error" => true,"msg" => 'Favor de actualizar la página, su sesión finalizó.'));die();
		}

		$fk_nominado = $this->input->post('fk_nominado');
		if(trim($fk_nominado) == ""){
			echo json_encode(array("error" => true,"msg" => 'El campo Nominado es obligatorio'));die();
		}
		$punto = $this->input->post('punto');
		if(trim($punto) == ""){
			echo json_encode(array("error" => true,"msg" => ''));die();
		}

		$fk_nominado = $this->input->post('fk_nominado');
		if(trim($fk_nominado) == ""){
			echo json_encode(array("error" => true,"msg" => 'El campo Nominado es obligatorio'));die();
		}
		$punto = $this->input->post('punto');
		if(trim($punto) == ""){
			echo json_encode(array("error" => true,"msg" => ''));die();
		}

		$fk_nominado = $this->input->post('fk_nominado');
		if(trim($fk_nominado) == ""){
			echo json_encode(array("error" => true,"msg" => 'El campo Nominado es obligatorio'));die();
		}
		$punto = $this->input->post('punto');
		if(trim($punto) == ""){
			echo json_encode(array("error" => true,"msg" => ''));die();
		}

		$fk_modalidad = $this->input->post('fk_modalidad');
		
		$res = $this->InicioModel->votoGuardarDeporIndiv($_POST);
		echo json_encode($res);die();
	}

	public function guardarVotoEquipoIndiv(){
		if(!$this->session->userdata('pb_idUsuario')){
			echo json_encode(array("error" => true,"msg" => 'Favor de actualizar la página, su sesión finalizó.'));die();
		}

		$fk_nominado = $this->input->post('fk_nominado');
		if(trim($fk_nominado) == ""){
			echo json_encode(array("error" => true,"msg" => 'El campo Nominado es obligatorio'));die();
		}
		$punto = $this->input->post('punto');
		if(trim($punto) == ""){
			echo json_encode(array("error" => true,"msg" => ''));die();
		}

		$fk_modalidad = $this->input->post('fk_modalidad');
		
		$res = $this->InicioModel->votoGuardarEquipoIndiv($_POST);
		echo json_encode($res);die();
	}

	public function guardarVotoDeporConj(){
		if(!$this->session->userdata('pb_idUsuario')){
			echo json_encode(array("error" => true,"msg" => 'Favor de actualizar la página, su sesión finalizó.'));die();
		}

		$fk_nominado = $this->input->post('fk_nominado');
		if(trim($fk_nominado) == ""){
			echo json_encode(array("error" => true,"msg" => 'El campo Nominado es obligatorio'));die();
		}
		$punto = $this->input->post('punto');
		if(trim($punto) == ""){
			echo json_encode(array("error" => true,"msg" => ''));die();
		}

		$fk_modalidad = $this->input->post('fk_modalidad');
		
		$res = $this->InicioModel->votoGuardarDeporConj($_POST);
		echo json_encode($res);die();
	}

	public function guardarVotoEquipoConj(){
		if(!$this->session->userdata('pb_idUsuario')){
			echo json_encode(array("error" => true,"msg" => 'Favor de actualizar la página, su sesión finalizó.'));die();
		}

		$fk_nominado = $this->input->post('fk_nominado');
		if(trim($fk_nominado) == ""){
			echo json_encode(array("error" => true,"msg" => 'El campo Nominado es obligatorio'));die();
		}
		$punto = $this->input->post('punto');
		if(trim($punto) == ""){
			echo json_encode(array("error" => true,"msg" => ''));die();
		}

		$fk_modalidad = $this->input->post('fk_modalidad');
		
		$res = $this->InicioModel->votoGuardarEquipoConj($_POST);
		echo json_encode($res);die();
	}

	public function guardarVotoDeporPp(){
		if(!$this->session->userdata('pb_idUsuario')){
			echo json_encode(array("error" => true,"msg" => 'Favor de actualizar la página, su sesión finalizó.'));die();
		}

		$fk_nominado = $this->input->post('fk_nominado');
		if(trim($fk_nominado) == ""){
			echo json_encode(array("error" => true,"msg" => 'El campo Nominado es obligatorio'));die();
		}
		$punto = $this->input->post('punto');
		if(trim($punto) == ""){
			echo json_encode(array("error" => true,"msg" => ''));die();
		}

		$fk_modalidad = $this->input->post('fk_modalidad');
		
		$res = $this->InicioModel->votoGuardarDeporPp($_POST);
		echo json_encode($res);die();
	}

	public function guardarVotoEquipoPp(){
		if(!$this->session->userdata('pb_idUsuario')){
			echo json_encode(array("error" => true,"msg" => 'Favor de actualizar la página, su sesión finalizó.'));die();
		}

		$fk_nominado = $this->input->post('fk_nominado');
		if(trim($fk_nominado) == ""){
			echo json_encode(array("error" => true,"msg" => 'El campo Nominado es obligatorio'));die();
		}
		$punto = $this->input->post('punto');
		if(trim($punto) == ""){
			echo json_encode(array("error" => true,"msg" => ''));die();
		}

		$fk_modalidad = $this->input->post('fk_modalidad');
		
		$res = $this->InicioModel->votoGuardarEquipoPp($_POST);
		echo json_encode($res);die();
	}

	public function guardarVotoMunicipal(){
		if(!$this->session->userdata('pb_idUsuario')){
			echo json_encode(array("error" => true,"msg" => 'Favor de actualizar la página, su sesión finalizó.'));die();
		}

		$fk_nominado = $this->input->post('fk_nominado');
		if(trim($fk_nominado) == ""){
			echo json_encode(array("error" => true,"msg" => 'El campo Nominado es obligatorio'));die();
		}
		$punto = $this->input->post('punto');
		if(trim($punto) == ""){
			echo json_encode(array("error" => true,"msg" => ''));die();
		}

		$fk_modalidad = $this->input->post('fk_modalidad');
		
		$res = $this->InicioModel->votoGuardarMunicipal($_POST);
		echo json_encode($res);die();
	}



//------------------------Fin de funcion de guardado de votos-------------------------------------------------------//


//inicio de la funcion de formularios--------------------------//

	public function loadFormularioDeporIndiv(){
		$data['pk_voto'] = $this->input->post('pk_voto');
		$data['INFO']['fk_nominado'] = '';
		$data['INFO']['voto'] = '';
		$data['DEPORINDIV'] = $this->CatalogoModel->listDeporIndiv();
		echo json_encode(array("error" => false,"HTML" => $this->load->view("loads/deporindivModal",$data,TRUE),"msg" => ''));die();
	}

	public function loadFormularioEquipoIndiv(){
		$data['pk_voto'] = $this->input->post('pk_voto');
		$data['INFO']['fk_nominado'] = '';
		$data['INFO']['voto'] = '';
		$data['EQUIPOINDIV'] = $this->CatalogoModel->listEquipoIndiv();
		echo json_encode(array("error" => false,"HTML" => $this->load->view("loads/equipoindivModal",$data,TRUE),"msg" => ''));die();
	}
	
	public function loadFormularioDeporConj(){
		$data['pk_voto'] = $this->input->post('pk_voto');
		$data['INFO']['fk_nominado'] = '';
		$data['INFO']['voto'] = '';
		$data['DEPORCONJ'] = $this->CatalogoModel->listDeporConj();
		echo json_encode(array("error" => false,"HTML" => $this->load->view("loads/deporconjModal",$data,TRUE),"msg" => ''));die();
	}

	public function loadFormularioEquipoConj(){
		$data['pk_voto'] = $this->input->post('pk_voto');
		$data['INFO']['fk_nominado'] = '';
		$data['INFO']['voto'] = '';
		$data['EQUIPOCONJ'] = $this->CatalogoModel->listEquipoConj();
		echo json_encode(array("error" => false,"HTML" => $this->load->view("loads/equipoconjModal",$data,TRUE),"msg" => ''));die();
	}

	public function loadFormularioDeporPp(){
		$data['pk_voto'] = $this->input->post('pk_voto');
		$data['INFO']['fk_nominado'] = '';
		$data['INFO']['voto'] = '';
		$data['DEPORPP'] = $this->CatalogoModel->listDeporPp();
		echo json_encode(array("error" => false,"HTML" => $this->load->view("loads/deporppModal",$data,TRUE),"msg" => ''));die();
	}

	public function loadFormularioEquipoPp(){
		$data['pk_voto'] = $this->input->post('pk_voto');
		$data['INFO']['fk_nominado'] = '';
		$data['INFO']['voto'] = '';
		$datos['EQUIPOPP'] = $this->CatalogoModel->listEquipoPp();
		echo json_encode(array("error" => false,"HTML" => $this->load->view("loads/equipoppModal",$data,TRUE),"msg" => ''));die();
	}

	public function loadFormularioMunicipal(){
		$data['pk_voto'] = $this->input->post('pk_voto');
		$data['INFO']['fk_nominado'] = '';
		$data['INFO']['voto'] = '';
		$datos['MUNICIPAL'] = $this->CatalogoModel->listMunicipal();
		echo json_encode(array("error" => false,"HTML" => $this->load->view("loads/municipalModal",$data,TRUE),"msg" => ''));die();
	}
	
}