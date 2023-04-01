
<form  method="POST" action="<?php echo base_url('UserController/update') ?>">
<?php 
foreach ($datosUsuario as $value) {
	


?>

<div class="mb-3">
	<input type="hidden" name="txtUsuid" value="<?php echo $value->usu_id; ?>">
    <label for="exampleInputEmail1" class="form-label">perfil</label>
    
		<?php 
		$lista=array();
		foreach ($selPerfil as  $registro) { 
			 $lista[$registro->per_id]=$registro->per_nombre;
			  } 
			  
			 echo form_dropdown('txtPerid',$lista,$value->per_id,'class="form-control"')
			 
			  
			 ?>
      
      
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nombre</label>
    <input type="texto" name="txtNombres" class="form-control" id="exampleInputPassword1" value="<?php echo $value->usu_nombres; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Apellidos</label>
    <input type="text"  name="txtApellidos" class="form-control" id="exampleInputPassword1" value="<?php echo $value->usu_apellidos; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email"  name="txtCorreo" class="form-control" id="exampleInputPassword1" value="<?php echo $value->usu_correo; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">telefono</label>
    <input type="tel" name="txtTelefono" class="form-control" id="exampleInputPassword1" value="<?php echo $value->usu_telefono ; ?>">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    
  </div>
  <?php   }?>
  <button type="submit" class="btn btn-primary">Registrar Usuario</button>
</form>


 