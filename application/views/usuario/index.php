<!----  crud de usuario             ---->

<h1>CRUD CON CODEIGNITER 3	 </h1>

<div>

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Consulta</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Registro</a></li>
   
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home">
<table class="table table-striped-columns">
<thead class="table-dark">
<th>Id</th>
<th>Perfil</th>
<th>Nombres</th>
<th>Apellidos</th>
<th>Correo</th>
<th>Telefono</th>
<th>Acciones</th>
</thead>

<tbody>
<?php foreach ($listar as $value) {
	 ?>
<tr >
	<td><?php echo $value->usu_id;?></td>
	<td><?php echo $value->per_nombre; ?></td>
	<td><?php echo $value->usu_nombres; ?></td>
	<td><?php echo $value->usu_apellidos; ?></td>
	<td><?php echo $value->usu_correo;?></td>
	<td><?php echo $value->usu_telefono; ?></td>
<td>
	<a href="<?php echo base_url('UserController/delete').'/'.$value->usu_id; ?> " ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
  <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
  <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
</svg></a>
	<a href="<?php echo base_url('UserController/edit').'/'.$value->usu_id; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
  <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
</svg></a>
</td>
</tr>

<?php } ?>


</tbody>


</table>


		</div>
    <div role="tabpanel" class="tab-pane" id="profile">
		<form  method="POST" action="<?php echo base_url('UserController/insert') ?>">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">perfil</label>
    <select name="txtIdper" class="form_control">
		<?php foreach ($selPerfil as  $value) { ?>
			  <option value="<?php echo $value->per_id?>"><?php echo $value->per_nombre;?>
			  <?php } ?>
      
      </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nombre</label>
    <input type="texto" name="txtNombres" class="form-control" id="exampleInputPassword1" placeholder="Nombres">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Apellidos</label>
    <input type="text"  name="txtApellidos" class="form-control" id="exampleInputPassword1" placeholder="Apellidos">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email"  name="txtCorreo" class="form-control" id="exampleInputPassword1" placeholder="Correo">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">telefono</label>
    <input type="tel" name="txtTelefono" class="form-control" id="exampleInputPassword1" placeholder="Telefono">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    
  </div>
  <button type="submit" class="btn btn-primary">Registrar Usuario</button>
</form>

		</div>
    
  </div>

</div>










<?php 
//print_r($selPerfil);
//print_r($this->Model_Usuario->selPerfil());
//die();
?>
