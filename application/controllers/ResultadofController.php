<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ResultadofController extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('ResultadofModel');
		$this->load->model('CatalogoModel');
	}
	public function index(){
		if($this->session->userdata('pb_idPerfil') != 1){
			redirect(base_url().'voto');
		}
		$datos = $this->funcionesBasicas('Resultado Fomento');
		$datos['menu'] = "rfomento";
		$datos['MODALIDAD'] = $this->CatalogoModel->listModalidad();
		$this->load->view('resultado-fomento',$datos);
	}
	public function listRfomento(){
		if(!$this->session->userdata('pb_idUsuario')){
			echo json_encode(array());
			die();
		}
		$filtros = array('tipo' => 'TOTAL', 'start' => '0', 'limit' => '0');
							
		$count = $this->ResultadofModel->ResultadofModelo($filtros);
		$tmp = $this->input->post('page');
		$page = (!empty($tmp))?$tmp:1;
		$tmp = $this->input->post('rows');
		$limit = $filtros['limit'] = (!empty($tmp))?$tmp:10;
		$start = $limit * $page - $limit;
		$start = $filtros['start'] = ($start < 0) ? 0 : $start;
		$filtros['tipo'] = 'PARCIAL';
		$sidx = (isset($_POST['sidx']) && $_POST['sidx'] != "") ? $_POST['sidx'] : 'nominado';
		$sord = (isset($_POST['sidx']) && $_POST['sidx'] != "") ? $_POST['sord'] : 'ASC';
		$filtros['sidx'] = $sidx;
		$filtros['sord'] = $sord;
		$dataControl = $this->ResultadofModel->ResultadofModelo($filtros);
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
				
				 "nominado" => $row['nominado'],
				 "asociacion" => $row['asociacion'],
				  "total" => $row['total'],
			);
			$i++;
		}
		echo json_encode($response);die();
	}

	public function downReportePDF(){
        if($this->input->post('reporte')){
            $_nombre = $this->input->post('reporte');
            if(file_exists('assets/uploads/'.$_nombre)){
                $this->load->helper('download');
                $data = file_get_contents('assets/uploads/'.$_nombre);
                $name = $_nombre;
                @unlink('assets/uploads/'.$_nombre);
                force_download($name, $data);
            }
            echo json_encode(array());
            die();
        }
        set_time_limit(0);
        ini_set('memory_limit', '-1');
        $res = array("error" => true,"msg" => '');
        if($this->input->post('modalidad') == "")
        {
            echo json_encode(array("error" => true,"msg" => 'Seleccione una modalidad, por favor'));die();
        }

        $this->load->library('PdfI');
        $pdf = new PdfI();
        $pdf->AddFont('Panton-Bold','B','Panton-Bold.php');
        $pdf->AddFont('Panton-Regular','', 'Panton-Regular.php');
        $pdf->AliasNbPages();
        $pdf->SetAutoPageBreak(true,'20');
        $flag = false;
        $nombreDoc = "";
            $data["reporte"] = $this->ResultadofModel->getReporte($_POST);
            if(count($data["reporte"]) > 0){
                $flag = true;
                $tot = count($data['reporte']);
                $nombreDoc = $data['reporte'][0]['responsable'];
                $_POST['unidad'] = $data['reporte'][0]['nombre'];
                $_POST['generadora'] = $data['reporte'][0]['nombre_oficial'];
                $pdf->AddPage('L','Letter');
                $titu = $data['reporte'][0]['titular'];
                $tituc = $data['reporte'][0]['ct'];
                $respo = $data['reporte'][0]['responsable'];
                $respoc = $data['reporte'][0]['cr'];
                $ela= $data['reporte'][0]['fecha'];
                $i=1;
                $pdf->Ln(5);
                $pdf->SetFont('Panton-Regular','',10);
                $pdf->SetFillColor(158, 157, 157);
                $pdf->Cell(10, 9,utf8_decode ('No.'), 'L,R,T', '', 'C',1);
                $pdf->Cell(45, 9,utf8_decode ('Nominado'), 'L,T,R', '', 'C',1);
                $pdf->Cell(30, 9,utf8_decode ('Asociación'), 'L,T,R', '', 'C',1);
                $pdf->Cell(35, 9,utf8_decode ('Total'), 'L,T,R', '', 'C',1);
                $pdf->Ln(9);
                $pdf->SetFont('Panton-Regular','',9);
                $pdf->SetWidths(array(10,45,30,35));
                $contador = count($data["reporte"]);

                    foreach ($data["reporte"] as $elemento){
                        $pdf->row(array(utf8_decode($i++),utf8_decode($elemento['codigo']),utf8_decode($elemento["seccion"]),utf8_decode($elemento["serie"]),utf8_decode($elemento["asunto"]),utf8_decode($elemento["usuario_historico"]),utf8_decode($elemento['fecha_caratula'])));
                        if($contador == 0)
                        {
                            $pdf->AddPage('L','Letter');
                        }          
                    }
                //$pdf->Ln(20);
                $pdf->Cell(20, 3, utf8_decode(' '),0,'','C',0);
                $pdf->Cell(66, 3, utf8_decode(' '),0,'','C',0);
                $pdf->Cell(46, 3, utf8_decode(' '),0,'','C',0);
                $pdf->Cell(46, 3, utf8_decode(''),0,'','C',0);
                $pdf->Cell(55, 3, utf8_decode('*AT=Archivo de Trámite; AC=Archivo de Concentración '),0,'','C',0);
                $pdf->Cell(26, 3, utf8_decode(''),0,'','C',0);
                $pdf->Ln(3);
                $pdf->SetFont('Panton-Bold','B',7);
                $pdf->Cell(20, 5, utf8_decode(' '),0,'','C',0);
                $pdf->Cell(66, 5, utf8_decode('Validó'),0,'','C',0);
                //$pdf->Cell(46, 5, utf8_decode(' '),0,'','C',0);
                //$pdf->Cell(46, 5, utf8_decode(' '),0,'','C',0);
                $pdf->Cell(20, 5, utf8_decode(' '),0,'','C',0);
                $pdf->Cell(52, 5, utf8_decode(''),0,'','C',0);
                $pdf->Cell(20, 5, utf8_decode(' '),0,'','C',0);
                $pdf->Cell(55, 5, utf8_decode('Autorizó'),0,'','C',0);
                $pdf->Cell(26, 5, utf8_decode(''),0,'','C',0);
                $pdf->Ln(5);
                $pdf->Cell(20, 5, utf8_decode(' '),0,'','C',0);
                $pdf->Cell(66, 5, utf8_decode('Titular del Área'),0,'','C',0);
                //$pdf->Cell(46, 5, utf8_decode(' '),0,'','C',0);
                //$pdf->Cell(46, 5, utf8_decode(' '),0,'','C',0);
                $pdf->Cell(20, 5, utf8_decode(' '),0,'','C',0);
                $pdf->Cell(52, 5, utf8_decode(''),0,'','C',0);
                $pdf->Cell(20, 5, utf8_decode(' '),0,'','C',0);
                $pdf->Cell(55, 5, utf8_decode('Sistema Institucional de Archivos'),0,'','C',0);
                $pdf->Cell(26, 5, utf8_decode(''),0,'','C',0);
                $pdf->Ln(20);
                $pdf->Cell(20, 5, utf8_decode(' '),0,'','C',0);
                $pdf->Cell(66, 5, utf8_decode($titu),'T','','C',0);
                $pdf->Cell(20, 5, utf8_decode(' '),0,'','C',0);
                $pdf->Cell(52, 5, utf8_decode(''),0,'','C',0);
                $pdf->Cell(20, 5, utf8_decode(' '),0,'','C',0);
                $pdf->Cell(55, 5, utf8_decode('Mtro. Carlos Herodes Jiménez Mata'),'T','','C',0);
                $pdf->Cell(26, 5, utf8_decode(''),0,'','C',0);
                $pdf->Ln(); 
                $pdf->Cell(20, 5, utf8_decode(' '),0,'','C',0);
                $pdf->Cell(66, 5, utf8_decode($tituc),0,'','C',0);
                $pdf->Cell(20, 5, utf8_decode(' '),0,'','C',0);
                $pdf->Cell(52, 5, utf8_decode(''),0,'','C',0);
                $pdf->Cell(20, 5, utf8_decode(' '),0,'','C',0);
                $pdf->Cell(55, 5, utf8_decode('Titular del Área Coordinadora de Archivos'),0,'','C',0);
                $pdf->Cell(26, 5, utf8_decode(''),0,'','C',0);
                $pdf->Ln();
            }else{
                $pdf->AddPage('L','Letter');
                //Controlamos por que no trajo resultados
                $pdf->Ln(15);
                $pdf->SetFont('Panton-Bold','B',18);
                $pdf->SetFillColor(255, 0, 0);
                $pdf->SetTextColor(255,255,255);
                $pdf->Cell(260,7,utf8_decode('El registro no contiene datos para ser mostrados.'),0,'','C',1);
            }
            //nombreDoc
        $name = ($flag) ? "inventario_historico_direccion.pdf" : "inventario_sin_datos.pdf";
        $pdf->Output('assets/uploads/'.$name,'F');

        echo json_encode(array('archivo'=> $name));

    }
	
}