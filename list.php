<?php include("db.php") ?>
<?php include("includes/header.php"); ?>
<div class="col-7 m-auto bg-light p-5 rounded" id="frm-registro">
<table class="table table-bordered">
  <thead>
  <tr>
        <td colspan="5"><a href='index.php' id='regresar'><strong>Regresar</strong></a></td>
    </tr>
    <caption>Registro de programadores</caption>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre Completo</th>
      <th scope="col">Correo</th>
      <th scope="col">Lenguaje</th>
      <th scope="col">Fecha</th>
    </tr>
  </thead>
  <tbody>
      <?php  
        $query = "SELECT * FROM programador";
        $resul = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($resul)){
      
      ?>
    <tr>
      <th scope="row"><?php echo $row['id']?></th>
      <td><?php echo $row['nombre']." ".$row['apellidos']?></td>
      <td><?php echo $row['correo']?></td>
      <td><?php echo $row['lenguaje']?></td>
      <td><?php echo $row['fecha_creacion']?></td>
    </tr>
    <?php } ?>
    
  </tbody>
</table>
        </div>
<?php include("includes/footer.php")?>