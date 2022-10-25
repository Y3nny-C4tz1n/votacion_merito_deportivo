<?php include('common/header.php');?>
<style type="text/css">
.ui-jqgrid .ui-jqgrid-htable .ui-th-div {
  height: 30px !important;
}
.ui-jqgrid .form-control {
  width: 100% !important;
}
.ui-jqgrid tr.jqgrow td {
  white-space: normal !important;
}
.chosen-container .chosen-results li.highlighted {
  background-color: #073c77;
  background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(20%, #073c77), color-stop(90%, #073c77));
  background-image: -webkit-linear-gradient(#073c77 20%, #073c77 90%);
  background-image: -moz-linear-gradient(#073c77 20%, #073c77 90%);
  background-image: -o-linear-gradient(#073c77 20%, #073c77 90%);
  background-image: linear-gradient(#073c77 20%, #073c77 90%);
  color: #fff;
}
</style>
<main class="col-md-12 ms-sm-auto col-lg-12 px-md-12">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Usuarios</h1>
  </div>
  <div class="row">
    <div class="col-12">
      <button type="button" class="btn btn-labeled btn-primary" id="btnAgregar" data-bs-toggle="modal" data-bs-target="#modalInventario" data-id="0">
        <span class="btn-label"><i class="bi bi-folder-plus"></i></span>&nbsp;&nbsp;Agregar</button>
    </div>
  </div>
  <br>
  <!-- Modal -->
  <div class="modal fade" id="modalInventario" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="inventarioModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="inventarioModal"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="cerrarModal()"></button>
        </div>
        <div class="modal-body" id="HTMLM"></div>
        <div class="modal-footer">
          <button type="button" class="btn btnOragen" data-bs-dismiss="modal" id="bntFormClose" onclick="cerrarModal()">
            <span class="btn-label"><i class="bi bi-box-arrow-left"></i></span>&nbsp;&nbsp;Cerrar</button>
          <button type="button" class="btn btn-primary"  id="enviar">
            <span class="btn-label"><i class="bi bi-save"></i></span>&nbsp;&nbsp;Guardar</button>
        </div>
      </div>
    </div>
  </div>
  <!--Acordion-->
  <div class="accordion accordion-flush" id="accordionFlushExample">
    <div class="accordion-item">
      <h2 class="accordion-header" id="flush-headingOne" style="background-color: #073c77;">
        <button class="accordion-button collapsed buscador" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
          Buscador
        </button>
      </h2>
      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3">
              <label for="perfilf">Perfil</label>
              <select class="form-select chosen-select" aria-label="perfilf" name="perfilf" id="perfilf">
                <option value="">Seleccionar perfil...</option>
                <?php if(count($PERFILES) > 0){
                foreach($PERFILES as $k => $row){?>
                <option value="<?=$row['pk_perfil']?>"><?=$row['descripcion']?></option>
                <?php }
                }?>
              </select>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
              <label for="usuariof">Usuario</label>
              <input type="text" class="form-control inputFilter" name="usuariof" id="usuariof" autocomplete="off">
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
              <label for="nombref">Nombre</label>
              <input type="text" class="form-control inputFilter" name="nombref" id="nombref" autocomplete="off">
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
              <label for="fechacf">Fecha de creación</label>
              <input type="date" class="form-control inputFilter" name="fechacf" id="fechacf" autocomplete="off">
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
              <label for="estatusf">Estatus</label>
              <select class="form-select chosen-select" aria-label="estatusf" name="estatusf" id="estatusf">
                <option value="">Seleccionar estatus...</option>
                <?php if(count($ESTATUS) > 0){
                foreach($ESTATUS as $k => $row){?>
                <option value="<?=$row['pk_estatus']?>"><?=$row['descripcion']?></option>
                <?php }
                }?>
              </select>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
              <label>&nbsp;</label>
              <button type="button" class="btn btn-primary" id="btnBuscar" style="margin-top:21px;"><i class="bi bi-search"></i>Buscar</button>
              <button type="button" class="btn btn-primary" id="btnLimpiar" style="margin-top:21px;"><i class="bi bi-arrow-clockwise"></i>Limpiar</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div style="clear:both;"></div>
  <br>
  <div class="table-responsive">
    <table class="table" id="grid"></table>
    <div id="jqGridPager"></div>
  </div>
</main>
<?php include('common/footer.php');?>
<style>
.btnOragen {
  background-color: orange;
  color: #fff;
}
</style>
<script type="text/javascript">
$("#grid").jqGrid({
  url:'ajax/listadoUsuario',
  postData: {csrf_directorio_token : function(){ return ($('#token').val() != "") ? $('#token').val() : "";},
    perfil : function(){ return ($.trim($('#perfilf').val()) != "") ? $.trim($('#perfilf').val()) : "";},
    usuario : function(){ return ($.trim($('#usuariof').val()) != "") ? $.trim($('#usuariof').val()) : "";},
    nombre : function(){ return ($.trim($('#nombref').val()) != "") ? $.trim($('#nombref').val()) : "";},
    fecha : function(){ return ($.trim($('#fechacf').val()) != "") ? $.trim($('#fechacf').val()) : "";},
    estatus : function(){ return ($.trim($('#estatusf').val()) != "") ? $.trim($('#estatusf').val()) : "";},
  },
  datatype: 'json',mtype: 'POST',height:'350px', styleUI : 'Bootstrap5',iconSet:  'Bootstrap5',
  colNames:['Editar','Perfil','Usuario','Nombre','Apellido 1','Apellido 2','Correo','Teléfono',
  'Fecha<br> creación','Fecha<br> modificación','Fecha<br> último acceso','Estatus'],
  colModel:[
  {name:'btnEditar',index:'btnEditar',width:'90px',resizable:false,sortable:false,align:'center',title:false},
  {name:'perfil_usuario',index:'perfil_usuario',width:'100px',resizable:false,sortable:true,align:'center',title:false},
  {name:'nombre_usuario',index:'nombre_usuario',width:'100px',resizable:false,sortable:true,align:'center',title:false},
  {name:'nombre',index:'nombre',width:'135px',resizable:false,sortable:true,align:'left',title:false},
  {name:'apellido1',index:'apellido1',width:'135px',resizable:false,sortable:true,align:'left',title:false},
  {name:'apellido2',index:'apellido2',width:'135px',resizable:false,sortable:true,align:'left',title:false},
  {name:'correo_usuario',index:'correo_usuario',width:'175px',resizable:false,sortable:true,align:'left',title:false},
  {name:'telefono_usuario',index:'telefono_usuario',width:'100px',resizable:false,sortable:true,align:'left',title:false},
  {name:'fecha_creacion',index:'fecha_creacion',width:'80px',resizable:false,sortable:true,align:'center',title:false},
  {name:'fecha_modificacion',index:'fecha_modificacion',width:'100px',resizable:false,sortable:true,align:'center',title:false},
  {name:'fechaUltimoAcceso',index:'fechaUltimoAcceso',width:'100px',resizable:false,sortable:true,align:'center',title:false},
  {name:'estatus',index:'estatus',width:'70px',resizable:false,sortable:true,align:'center',title:false},
  ],
  loadComplete: function(data) {
    try {
      if(data.error){
        swal({
          title:"",
          text:data.msg,
          type:"error",
          confirmButtonColor: "#45BFEB",
          confirmButtonText: 'Aceptar'
        });
      }
    }catch(e) {
      swal({
        title:"",
        text:data.msg,
        type:"error",
        confirmButtonColor: "#45BFEB",
        confirmButtonText: 'Aceptar'
      });
    }
  },
  width: null,
  shrinkToFit: false,
  loadtext: 'Cargando...',
  pager: '#jqGridPager',
  rowNum:50,
  altRows:false,
  rowList:[50,100,500,1000],
  viewrecords: true,
  caption: 'Listado de usuarios',
  multiselect: false
}).navGrid('#jqGridPager', { view: false, del: false, add: false, edit: false, refresh:true,search:false});
function cerrarModal(){
  $('#form')[0].reset();
}
function guardarUsuario() {
  const fd = new FormData(document.getElementById("form"));
  fd.append("csrf_directorio_token", $("#token").val());
  if($("#passwordUpdate").is(":hidden")){
    fd.append("contrasena_usuario", $("#contrasena_usuario").val());
  }else if($("#validarCambiarPass").is(":checked")){
    fd.append("contrasena_usuario", $("#contrasena_usuario").val());
  }else{
    fd.append("contrasena_usuario", "nocambia");
  }
  $.ajax({
    type: "POST",
    dataType: "json",
    cache: false,
    contentType: false,
    processData:false,
    url: "ajax/guardarUsuario",
    data:fd,
    beforeSend: function(){
      $.blockUI({ css: {
        border: 'none',
        padding: '15px',
        backgroundColor: '#000',
        '-webkit-border-radius': '10px',
        '-moz-border-radius': '10px',
        opacity: .5,
        color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000 });
    },
    success: function(data){
      $.unblockUI();
      if(data.error){
        $.toast({
          heading: 'Error',
          text: data.msg,
          allowToastClose: true,
          position: 'mid-center',
          loader: true,
          icon: 'error'
        });
        return false;
      }
      $('#grid').trigger( 'reloadGrid' );
      cerrarModal();
      $('#bntFormClose').click();
      $.toast({
        heading: 'Información',
        text: data.msg,
        position: 'mid-center',
        allowToastClose: true,
        icon: 'success',
        loader: true,
        loaderBg: '#9EC600'
      });
    },
    error: function(){
      $.unblockUI();
    }
  });
}
function cargarForm(id){
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "ajax/cargarFormularioUsuarios",
    data:{csrf_directorio_token:$('#token').val(),pk_usuario: id},
    beforeSend: function(){
      $("#HTMLM").html('<div class="text-center"><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div>Cargando...</div>');
      $.blockUI({ css: {
        border: 'none',
        padding: '15px',
        backgroundColor: '#000',
        '-webkit-border-radius': '10px',
        '-moz-border-radius': '10px',
        opacity: .5,
        color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000 });
    },
    success: function(data){
      $.unblockUI();
      if(data.error){
        $.toast({
          heading: 'Error',
          text: data.msg,
          allowToastClose: true,
          position: 'mid-center',
          loader: true,
          icon: 'error'
        });
        return false;
      }
      $("#HTMLM").html(data.HTML);
    },
    error: function(){
      $.unblockUI();
    }
  });
}
$(document).ready(function(){
  $('.chosen-select').chosen({width:"200px", no_results_text: "No hay datos que coincidan con la búsqueda"});
  //////////////////////////////////////////
  $(".inputFilter").keydown(function (e) {
    if(e.keyCode == 13){
      $('#grid').trigger( 'reloadGrid' );
    }
  });
  $("#btnBuscar").click( function(){
    $('#grid').trigger( 'reloadGrid' );
  });
  $("#btnLimpiar").click( function(){
    $("#perfilf").val('').trigger('chosen:updated');
    $("#estatusf").val('').trigger('chosen:updated');
    $('#usuariof,#nombref,#fechacf').val('');
    $('#grid').trigger( 'reloadGrid' );
  });
  $(document).on("click",".btnEditar", function(){
    const id = $(this).data("id");
    $("#inventarioModal").html("Editar");
    cargarForm(id);
  });
  $("#btnAgregar").click( function(){
    const id = $(this).data("id");
    $("#inventarioModal").html("Agregar");
    cargarForm(id);
  });
  $('#enviar').click(function() {
    guardarUsuario();
  });
});
</script>