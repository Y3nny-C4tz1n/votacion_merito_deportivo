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

.container{
  padding: 50px;
  display: block;
  justify-content: center;

}

.btn-a{
  color:black;
  font-size:24px;
  background-color:#6495ED;
  border:15px;
  margin-right: 25px; 
  margin-bottom: 30px;
  width:260px;
  height:150px;

}

.btn-b{
  color:black;
  width:260px;
  height:150px;
  font-size:24px;
  background-color:#6495ED;
  border:15px;
 margin-right: 25px; 
 margin-bottom: 30px;
}

.btn-c{
  color:black;
  width:260px;
  height:150px;
  font-size:24px;
  background-color:#6495ED;
  border:15px;
  margin-right: 25px; 
  margin-bottom: 30px;
}

.btn-d{
  color:black;
  width:260px;
  height:150px;
  font-size:24px;
  background-color:#6495ED;
  border:15px;
  margin-right: 25px; 
  margin-bottom: 30px;
  
}

.btn-e{
  color:black;
  width:260px;
  height:150px;
  font-size:24px;
  background-color:#6495ED;
  border:15px;
  margin-right: 25px; 
  margin-bottom: 30px;
}

.btn-f{
  color:black;
  width:260px;
  height:150px;
  font-size:24px;
  background-color:#6495ED;
  border:15px;
  margin-right: 25px; 
  margin-bottom: 30px;
}

.btn-g{
  color:black;
  width:260px;
  height:150px;
  font-size:24px;
  background-color:#6495ED;
  border:15px;
  margin-right: 25px; 
  margin-bottom: 30px;
}

</style>
<main class="col-md-12 ms-sm-auto col-lg-12 px-md-12">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">VOTACIÓN MÉRITO DEPORTIVO YUCATECO <?php echo date('Y');?> </h1>
  </div>

  <div class="container">
      
    <button type="button" class="btn btn-a"  id="btnDeporIndiv" data-bs-toggle="modal" data-bs-target="#modalDeporIndiv" data-id="0">
    <span class="btn-label"><i class=""></i></span>&nbsp;&nbsp;DEPORTISTA DE DEPORTES INDIVIDUALES</button>

    <button type="button" class="btn btn-b"  id="btnEquipoIndiv" data-bs-toggle="modal" data-bs-target="#modalEquipoIndiv" data-id="0">
    <span class="btn-label"><i class=""></i></span>&nbsp;&nbsp;EQUIPO DE DEPORTES INDIVIDUALES</button>

    <button type="button" class="btn btn-c"  id="btnDeporConj" data-bs-toggle="modal" data-bs-target="#modalDeporConj" data-id="0">
    <span class="btn-label"><i class=""></i></span>&nbsp;&nbsp;DEPORTISTA DE DEPORTES DE CONJUNTO</button>

    <button type="button" class="btn btn-d"  id="btnEquipoConj" data-bs-toggle="modal" data-bs-target="#modalEquipoConj" data-id="0">
    <span class="btn-label"><i class=""></i></span>&nbsp;&nbsp;EQUIPO DE DEPORTES DE CONJUNTO</button>
<br>
    <button type="button" class="btn btn-e"  id="btnDeporPp" data-bs-toggle="modal" data-bs-target="#modalDeporPp" data-id="0">
    <span class="btn-label"><i class=""></i></span>&nbsp;&nbsp;DEPORTISTA PARALÍMPICO</button>

    <button type="button" class="btn btn-f"  id="btnEquipoPp" data-bs-toggle="modal" data-bs-target="#modalEquipoPp" data-id="0">
    <span class="btn-label"><i class=""></i></span>&nbsp;&nbsp;EQUIPO PARALÍMPICO</button>

    <button type="button" class="btn btn-g"  id="btnMunicipal" data-bs-toggle="modal" data-bs-target="#modalMunicipal" data-id="0">
    <span class="btn-label"><i class=""></i></span>&nbsp;&nbsp;MUNICIPAL</button>

    </div>
  </div>
  <br>



  <!--  Deportista de Deportes Individuales-->
  <div class="modal fade" id="modalDeporIndiv" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deporindivModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deporindivModal"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="cerrarModal()"></button>
        </div>
        <div class="modal-body" id="HTMLM"></div>
        <div class="modal-footer">
          <button type="button" class="btn btnOragen"  data-bs-dismiss="modal" id="bntFormClose" onclick="cerrarModal()">
            <span class="btn-label"><i class="bi bi-box-arrow-left"></i></span>&nbsp;&nbsp;Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="enviar()">
            <span class="btn-label"><i class="bi bi-save"></i></span>&nbsp;&nbsp;Guardar</button>
        </div>
      </div>
    </div>
  </div>


    <!--  Equipo de Deportes individuales -->
  <div class="modal fade" id="modalEquipoIndiv" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="equipoindivModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="equipoindivModal"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="cerrarModal()"></button>
        </div>
        <div class="modal-body" id="HTMLMM"></div>
        <div class="modal-footer">
          <button type="button" class="btn btnOragen"  data-bs-dismiss="modal" id="bntFormClose" onclick="cerrarModal()">
            <span class="btn-label"><i class="bi bi-box-arrow-left"></i></span>&nbsp;&nbsp;Cerrar</button>
          <button type="button" class="btn btn-primary"  onclick="enviarA()">
            <span class="btn-label"><i class="bi bi-save"></i></span>&nbsp;&nbsp;Guardar</button>
        </div>
      </div>
    </div>
  </div>


   <!-- Deportista de Deportes de Conjunto -->
  <div class="modal fade" id="modalDeporConj" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deporconjModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deporconjModal"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="cerrarModal()"></button>
        </div>
        <div class="modal-body" id="HTMLMMM"></div>
        <div class="modal-footer">
          <button type="button" class="btn btnOragen"  data-bs-dismiss="modal" id="bntFormClose" onclick="cerrarModal()">
            <span class="btn-label"><i class="bi bi-box-arrow-left"></i></span>&nbsp;&nbsp;Cerrar</button>
          <button type="button" class="btn btn-primary"  onclick="enviarB()">
            <span class="btn-label"><i class="bi bi-save"></i></span>&nbsp;&nbsp;Guardar</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Equipo de Deportes de Conjunto -->
  <div class="modal fade" id="modalEquipoConj" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="equipoconjModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="equipoconjModal"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="cerrarModal()"></button>
        </div>
        <div class="modal-body" id="HTMLM"></div>
        <div class="modal-footer">
          <button type="button" class="btn btnOragen"  data-bs-dismiss="modal" id="bntFormClose" onclick="cerrarModal()">
            <span class="btn-label"><i class="bi bi-box-arrow-left"></i></span>&nbsp;&nbsp;Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="enviarC()">
            <span class="btn-label"><i class="bi bi-save"></i></span>&nbsp;&nbsp;Guardar</button>
        </div>
      </div>
    </div>
  </div>

    <!-- Deportista Paralímpico -->
  <div class="modal fade" id="modalDeporPp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deporppModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="deporppModal"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="cerrarModal()"></button>
        </div>
        <div class="modal-body" id="HTMLMM"></div>
        <div class="modal-footer">
          <button type="button" class="btn btnOragen"  data-bs-dismiss="modal" id="bntFormClose" onclick="cerrarModal()">
            <span class="btn-label"><i class="bi bi-box-arrow-left"></i></span>&nbsp;&nbsp;Cerrar</button>
          <button type="button" class="btn btn-primary"  onclick="enviarD()">
            <span class="btn-label"><i class="bi bi-save"></i></span>&nbsp;&nbsp;Guardar</button>
        </div>
      </div>
    </div>
  </div>

   <!-- Equipo Paralímpico -->
  <div class="modal fade" id="modalEquipoPp" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="equipoppModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="equipoppModal"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="cerrarModal()"></button>
        </div>
        <div class="modal-body" id="HTMLMMM"></div>
        <div class="modal-footer">
          <button type="button" class="btn btnOragen"  data-bs-dismiss="modal" id="bntFormClose" onclick="cerrarModal()">
            <span class="btn-label"><i class="bi bi-box-arrow-left"></i></span>&nbsp;&nbsp;Cerrar</button>
          <button type="button" class="btn btn-primary"  onclick="enviarE()">
            <span class="btn-label"><i class="bi bi-save"></i></span>&nbsp;&nbsp;Guardar</button>
        </div>
      </div>
    </div>
  </div>


  <!-- Municipal -->
  <div class="modal fade" id="modalMunicipal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="municipalModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="municipalModal"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="cerrarModal()"></button>
        </div>
        <div class="modal-body" id="HTMLM"></div>
        <div class="modal-footer">
          <button type="button" class="btn btnOragen"  data-bs-dismiss="modal" id="bntFormClose" onclick="cerrarModal()">
            <span class="btn-label"><i class="bi bi-box-arrow-left"></i></span>&nbsp;&nbsp;Cerrar</button>
          <button type="button" class="btn btn-primary" onclick="enviarF()">
            <span class="btn-label"><i class="bi bi-save"></i></span>&nbsp;&nbsp;Guardar</button>
        </div>
      </div>
    </div>
  </div>
   

  

 </main>
<?php include('common/footer.php');?>
<style type="text/css">
.btnOragen{
  background-color: orange;
  color: #fff;
}
</style>
<script type="text/javascript">
function cerrarModal(){
  $('#form')[0].reset();
}

function recargar(){
  window.location.reload()
}

// Enviar datos del formulario Deportista de Deportes Individuales//
function enviar(){
  let nominado = $.trim($("#modalDeporIndiv").find("#fk_nominado option:selected").text());
  if(nominado == ""){
    $.toast({
      heading: 'Error',
      text: "Debe seleccionar una un nominado",
      allowToastClose: true,
      position: 'mid-center',
      loader: true,
      icon: 'error'
    });
    return false;
  }
  const fd = new FormData(document.getElementById("form"));
  fd.append("csrf_directorio_token", $("#token").val());
  Swal.fire({
    title: '¿Está seguro?',
    html: "Asignara el voto en la categoria deportista de deportes individuales a: <h4>"+nominado+"</h4> será guardado, y no podra revertir la selección, ¿desea continuar?.",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, realizar voto'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        dataType: "json",
        cache: false,
        contentType: false,
        processData:false,
        url: "ajax/guardarVotoDeporIndiv",
        data: fd,
        beforeSend: function(){
          $.blockUI({ css: {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
          });
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
          $('#bntFormClose').click();
          Swal.fire({
            title: 'Guardado!',
            html: 'El voto fue realizado con éxito',
            icon: 'success',
            confirmButtonText: 'Aceptar'
          }).then((result) => {
  if (result.isConfirmed) {
    recargar();
  }
})
        },
        error: function(){
          $.unblockUI();
        }
      });
    }
  })
}

// Enviar datos del formulario  Equipo de Deportes individuales//

function enviarA(){
  let nominado = $.trim($("#modalEquipoIndiv").find("#fk_nominado option:selected").text());
  if(nominado == ""){
    $.toast({
      heading: 'Error',
      text: "Debe seleccionar una un nominado",
      allowToastClose: true,
      position: 'mid-center',
      loader: true,
      icon: 'error'
    });
    return false;
  }

  const fd = new FormData(document.getElementById("form"));
  fd.append("csrf_directorio_token", $("#token").val());
  Swal.fire({
    title: '¿Está seguro?',
    html: "Asignara el voto en la categoria equipo de deportes individuales a: <h4>"+nominado+"</h4> será guardado, y no podra revertir la selección, ¿desea continuar?.",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, realizar voto'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        dataType: "json",
        cache: false,
        contentType: false,
        processData:false,
        url: "ajax/guardarVotoEquipoIndiv",
        data: fd,
        beforeSend: function(){
          $.blockUI({ css: {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
          });
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
          $('#bntFormClose').click();
          Swal.fire({
            title: 'Guardado!',
            html: 'El voto fue realizado con éxito',
            icon: 'success',
            confirmButtonText: 'Aceptar'
          }).then((result) => {
  if (result.isConfirmed) {
    recargar();
  }
})
        },
        error: function(){
          $.unblockUI();
        }
      });
    }
  })
}


// Enviar datos del formulario Deportista de Deportes de Conjunto//

function enviarB(){
  let nominado = $.trim($("#modalDeporConj").find("#fk_nominado option:selected").text());
  if(nominado == ""){
    $.toast({
      heading: 'Error',
      text: "Debe seleccionar una un nominado",
      allowToastClose: true,
      position: 'mid-center',
      loader: true,
      icon: 'error'
    });
    return false;
  }
  const fd = new FormData(document.getElementById("form"));
  fd.append("csrf_directorio_token", $("#token").val());
  Swal.fire({
    title: '¿Está seguro?',
    html: "Asignara el voto en la categoria deportista de deportes de conjunto a: <h4>"+nominado+"</h4> será guardado, y no podra revertir la selección, ¿desea continuar?.",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, realizar voto'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        dataType: "json",
        cache: false,
        contentType: false,
        processData:false,
        url: "ajax/guardarVotoDeporConj",
        data: fd,
        beforeSend: function(){
          $.blockUI({ css: {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
          });
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
          $('#bntFormClose').click();
          Swal.fire({
            title: 'Guardado!',
            html: 'El voto fue realizado con éxito',
            icon: 'success',
            confirmButtonText: 'Aceptar'
          }).then((result) => {
  if (result.isConfirmed) {
    recargar();
  }
})
        },
        error: function(){
          $.unblockUI();
        }
      });
    }
  })
}

// Enviar datos del formulario Equipo de Deportes de Conjunto//

function enviarC(){
  let nominado = $.trim($("#modalEquipoConj").find("#fk_nominado option:selected").text());
  if(nominado == ""){
    $.toast({
      heading: 'Error',
      text: "Debe seleccionar una un nominado",
      allowToastClose: true,
      position: 'mid-center',
      loader: true,
      icon: 'error'
    });
    return false;
  }
  const fd = new FormData(document.getElementById("form"));
  fd.append("csrf_directorio_token", $("#token").val());
  Swal.fire({
    title: '¿Está seguro?',
    html: "Asignara el voto en la categoria equipo de deportes de conjunto a: <h4>"+nominado+"</h4> será guardado, y no podra revertir la selección, ¿desea continuar?.",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, realizar voto'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        dataType: "json",
        cache: false,
        contentType: false,
        processData:false,
        url: "ajax/guardarVotoEquipoConj",
        data: fd,
        beforeSend: function(){
          $.blockUI({ css: {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
          });
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
          $('#bntFormClose').click();
          Swal.fire({
            title: 'Guardado!',
            html: 'El voto fue realizado con éxito',
            icon: 'success',
            confirmButtonText: 'Aceptar'
          }).then((result) => {
  if (result.isConfirmed) {
    recargar();
  }
})
        },
        error: function(){
          $.unblockUI();
        }
      });
    }
  })
}


// Enviar datos del formulario Deportista Paralímpico//

function enviarD(){
  let nominado = $.trim($("#modalDeporPp").find("#fk_nominado option:selected").text());
  if(nominado == ""){
    $.toast({
      heading: 'Error',
      text: "Debe seleccionar una un nominado",
      allowToastClose: true,
      position: 'mid-center',
      loader: true,
      icon: 'error'
    });
    return false;
  }
  const fd = new FormData(document.getElementById("form"));
  fd.append("csrf_directorio_token", $("#token").val());
  Swal.fire({
    title: '¿Está seguro?',
    html: "Asignara el voto en la categoria deportista paralímpico a: <h4>"+nominado+"</h4> será guardado, y no podra revertir la selección, ¿desea continuar?.",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, realizar voto'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        dataType: "json",
        cache: false,
        contentType: false,
        processData:false,
        url: "ajax/guardarVotoDeporPp",
        data: fd,
        beforeSend: function(){
          $.blockUI({ css: {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
          });
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
          $('#bntFormClose').click();
          Swal.fire({
            title: 'Guardado!',
            html: 'El voto fue realizado con éxito',
            icon: 'success',
            confirmButtonText: 'Aceptar'
          }).then((result) => {
  if (result.isConfirmed) {
    recargar();
  }
})
        },
        error: function(){
          $.unblockUI();
        }
      });
    }
  })
}

// Enviar datos del formulario Equipo Paralímpico//

function enviarE(){
  let nominado = $.trim($("#modalEquipoPp").find("#fk_nominado option:selected").text());
  if(nominado == ""){
    $.toast({
      heading: 'Error',
      text: "Debe seleccionar una un nominado",
      allowToastClose: true,
      position: 'mid-center',
      loader: true,
      icon: 'error'
    });
    return false;
  }
  const fd = new FormData(document.getElementById("form"));
  fd.append("csrf_directorio_token", $("#token").val());
  Swal.fire({
    title: '¿Está seguro?',
    html: "Asignara el voto en la categoria equipo paralímpico a: <h4>"+nominado+"</h4> será guardado, y no podra revertir la selección, ¿desea continuar?.",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, realizar voto'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        dataType: "json",
        cache: false,
        contentType: false,
        processData:false,
        url: "ajax/guardarVotoEquipoPp",
        data: fd,
        beforeSend: function(){
          $.blockUI({ css: {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
          });
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
          $('#bntFormClose').click();
          Swal.fire({
            title: 'Guardado!',
            html: 'El voto fue realizado con éxito',
            icon: 'success',
            confirmButtonText: 'Aceptar'
          }).then((result) => {
  if (result.isConfirmed) {
    recargar();
  }
})
        },
        error: function(){
          $.unblockUI();
        }
      });
    }
  })
}


// Enviar datos del formulario Municipal//
function enviarF(){
  let nominado = $.trim($("#modalMunicipal").find("#fk_nominado option:selected").text());
  if(nominado == ""){
    $.toast({
      heading: 'Error',
      text: "Debe seleccionar una un nominado",
      allowToastClose: true,
      position: 'mid-center',
      loader: true,
      icon: 'error'
    });
    return false;
  }
  const fd = new FormData(document.getElementById("form"));
  fd.append("csrf_directorio_token", $("#token").val());
  Swal.fire({
    title: '¿Está seguro?',
    html: "Asignara el voto en la categoria municipal a: <h4>"+nominado+"</h4> será guardado, y no podra revertir la selección, ¿desea continuar?.",
    icon: 'info',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, realizar voto'
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        type: "POST",
        dataType: "json",
        cache: false,
        contentType: false,
        processData:false,
        url: "ajax/guardarVotoMunicipal",
        data: fd,
        beforeSend: function(){
          $.blockUI({ css: {
            border: 'none',
            padding: '15px',
            backgroundColor: '#000',
            '-webkit-border-radius': '10px',
            '-moz-border-radius': '10px',
            opacity: .5,
            color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
          });
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
          $('#bntFormClose').click();
          Swal.fire({
            title: 'Guardado!',
            html: 'El voto fue realizado con éxito',
            icon: 'success',
            confirmButtonText: 'Aceptar'
          }).then((result) => {
  if (result.isConfirmed) {
    recargar();
  }
})
        },
        error: function(){
          $.unblockUI();
        }
      });
    }
  })
}



//Cargar datos de formulario  Deportista de Deportes Individuales//

function cargarForm(id){
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "ajax/cargarFormularioDeporIndiv",
    data:{csrf_directorio_token:$('#token').val(),pk_voto: id},
    beforeSend: function(){
      $("#HTMLM").html('<div class="text-center"><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div>Cargando...</div>');
      $.blockUI({ css: {
        border: 'none',
        padding: '15px',
        backgroundColor: '#000',
        '-webkit-border-radius': '10px',
        '-moz-border-radius': '10px',
        opacity: .5,
        color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
      });
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


//Cargar datos de formulario Equipo de Deportes individuales//

function cargarFormEquipoIndiv(id){
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "ajax/cargarFormularioEquipoIndiv",
    data:{csrf_directorio_token:$('#token').val(),pk_voto: id},
    beforeSend: function(){
      $("#HTMLMM").html('<div class="text-center"><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div>Cargando...</div>');
      $.blockUI({ css: {
        border: 'none',
        padding: '15px',
        backgroundColor: '#000',
        '-webkit-border-radius': '10px',
        '-moz-border-radius': '10px',
        opacity: .5,
        color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
      });
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
      $("#HTMLMM").html(data.HTML);
    },
    error: function(){
      $.unblockUI();
    }
  });
}

//Cargar datos de formulario Deportista de Deportes de Conjunto//

function cargarFormDeporConj(id){
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "ajax/cargarFormularioDeporConj",
    data:{csrf_directorio_token:$('#token').val(),pk_voto: id},
    beforeSend: function(){
      $("#HTMLMMM").html('<div class="text-center"><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div>Cargando...</div>');
      $.blockUI({ css: {
        border: 'none',
        padding: '15px',
        backgroundColor: '#000',
        '-webkit-border-radius': '10px',
        '-moz-border-radius': '10px',
        opacity: .5,
        color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
      });
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
      $("#HTMLMMM").html(data.HTML);
    },
    error: function(){
      $.unblockUI();
    }
  });
}

//Cargar datos de formulario Equipo de Deportes de Conjunto//
function cargarFormEquipoConj(id){
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "ajax/cargarFormularioEquipoConj",
    data:{csrf_directorio_token:$('#token').val(),pk_voto: id},
    beforeSend: function(){
      $("#HTMLMMM").html('<div class="text-center"><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div>Cargando...</div>');
      $.blockUI({ css: {
        border: 'none',
        padding: '15px',
        backgroundColor: '#000',
        '-webkit-border-radius': '10px',
        '-moz-border-radius': '10px',
        opacity: .5,
        color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
      });
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
      $("#HTMLMMM").html(data.HTML);
    },
    error: function(){
      $.unblockUI();
    }
  });
}


//Cargar datos de formulario Deportista Paralímpico//
function cargarFormDeporPp(id){
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "ajax/cargarFormularioDeporPp",
    data:{csrf_directorio_token:$('#token').val(),pk_voto: id},
    beforeSend: function(){
      $("#HTMLMMM").html('<div class="text-center"><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div>Cargando...</div>');
      $.blockUI({ css: {
        border: 'none',
        padding: '15px',
        backgroundColor: '#000',
        '-webkit-border-radius': '10px',
        '-moz-border-radius': '10px',
        opacity: .5,
        color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
      });
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
      $("#HTMLMMM").html(data.HTML);
    },
    error: function(){
      $.unblockUI();
    }
  });
}

//Cargar datos de formulario Equipo Paralímpico//
function cargarFormEquipoPp(id){
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "ajax/cargarFormularioEquipoPp",
    data:{csrf_directorio_token:$('#token').val(),pk_voto: id},
    beforeSend: function(){
      $("#HTMLMMM").html('<div class="text-center"><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div>Cargando...</div>');
      $.blockUI({ css: {
        border: 'none',
        padding: '15px',
        backgroundColor: '#000',
        '-webkit-border-radius': '10px',
        '-moz-border-radius': '10px',
        opacity: .5,
        color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
      });
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
      $("#HTMLMMM").html(data.HTML);
    },
    error: function(){
      $.unblockUI();
    }
  });
}

//Cargar datos de formulario Municipal//
function cargarFormMunicipal(id){
  $.ajax({
    type: "POST",
    dataType: "json",
    url: "ajax/cargarFormularioMunicipal",
    data:{csrf_directorio_token:$('#token').val(),pk_voto: id},
    beforeSend: function(){
      $("#HTMLMMM").html('<div class="text-center"><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div><div class="spinner-grow text-primary" role="status"><span class="visually-hidden">Cargando...</span></div>Cargando...</div>');
      $.blockUI({ css: {
        border: 'none',
        padding: '15px',
        backgroundColor: '#000',
        '-webkit-border-radius': '10px',
        '-moz-border-radius': '10px',
        opacity: .5,
        color: '#fff' }, message: '<h1>Espera un momento...</h1>', baseZ: 2000
      });
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
      $("#HTMLMMM").html(data.HTML);
    },
    error: function(){
      $.unblockUI();
    }
  });
}

// botones para abrir el modal de la categoria correspondiente

$(document).ready(function() {

  $("#btnDeporIndiv").click( function(){
    const id = $(this).data("id");
    $("#deporindivModal").html("Votar categoria deportista de deportes individuales");
    cargarForm(id);
  });

  $("#btnEquipoIndiv").click( function(){
    const id = $(this).data("id");
    $("#equipoindivModal").html("Votar categoria equipo de deportes individuales");
    cargarFormEquipoIndiv(id);
  });

  $("#btnDeporConj").click( function(){
    const id = $(this).data("id");
    $("#deporconjModal").html("Votar categoria deportista de deportes de conjunto");
    cargarFormDeporConj(id);
  });

  $("#btnEquipoConj").click( function(){
    const id = $(this).data("id");
    $("#equipoconjModal").html("Votar categoria equipo de deportes de conjunto");
    cargarFormEquipoConj(id);
  });

  $("#btnDeporPp").click( function(){
    const id = $(this).data("id");
    $("#deporppModal").html("Votar categoria deportista paralímpico");
    cargarFormDeporPp(id);
  });

  $("#btnEquipoPp").click( function(){
    const id = $(this).data("id");
    $("#equipoppModal").html("Votar categoria equipo paralímpico");
    cargarFormEquipoPp(id);
  });

  $("#btnMunicipal").click( function(){
    const id = $(this).data("id");
    $("#municipalModal").html("Votar categoria municipal");
    cargarFormMunicipal(id);
  });





//-------------------------------------------------------------------------------------------//

  $('#enviar').click(function() {
     guardarVotoDeporIndiv();
  });

  $('#enviarA').click(function() {
    guardarVotoEquipoIndiv();
  });


  $('#enviarB').click(function() {
    guardarVotoDeporConj();
  });

  $('#enviarC').click(function() {
    guardarVotoEquipoConj();
  });

  $('#enviarD').click(function() {
    guardarVotoDeporPp();
  });

  $('#enviarE').click(function() {
    guardarVotoEquipoPp();
  });

  $('#enviarF').click(function() {
    guardarVotoMunicipal();
  });


});
</script>