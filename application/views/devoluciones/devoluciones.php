  <div class="panel panel-primary">
    <div class="panel-heading">
          <h3 class="panel-title">Devoluciones</h3>
        </div>
        <div class="panel-body">
<table width='90%' border='1' align='center'>
	<tr>
		<td>
			<center>No</center>
		</td>
		<td>
			<center>Usuario</center>
		</td>
		<td>
			<center>Vehiculo</center>
		</td>
		<td>
			<center>Kilometraje</center>
		</td>
		<td>
			<center>Fecha</center>
		</td>
		<td>
			<center>Hora</center>
		</td>
		<td>
			<center>Estado</center>
		</td>
		<td>
			<center>Observaciones</center>
		</td>
	</tr>

<?php

if($devoluciones){
	
 foreach ($devoluciones->result() as $devolucion) { ?>
		<tr>
			<td>
				<?= $devolucion->idDevolucionRenta;  ?>
			</td>
			<td>
				<?= $devolucion->idUsuario;  ?>
			</td>
			<td>
				<?= $devolucion->idVehiculo;  ?>
			</td>
			<td>
				<?= $devolucion->Kilometraje;  ?>
			</td>
			<td>
				<?= $devolucion->Fecha;  ?>
			</td>
			<td>
				<?= $devolucion->Hora;  ?>
			</td>
			<td>
				<?= $devolucion->estado;  ?>
			</td>
			<td>
				<?= $devolucion->Observaciones;  ?>
			</td>
		</tr>


	<?php }
}
	 ?>

</table>


</div>
</div>
</div>


				</div>
	</div> <!— /container —>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src=<?= base_url('bootstrap/js/bootstrap.min.js'); ?> ></script>
      <script src=<?= base_url('bootstrap/js/bootstrap1.min.js'); ?> ></script>
</body>
</html>