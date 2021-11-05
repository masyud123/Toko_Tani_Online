<div class="container-fluid">
	<div class="card text-center" style="width: 50rem" >
	  <h5 class="card-header bg-primary text-white">Pesan dari Admin</h5>
	  <div class="card-body">
		  	<table class="table table-bordered table-striped table-hover">

		  		<tr>
		  			<th>NO</th>
		  			<th>Pesan</th>
		  		</tr>

		  		<?php
		  		$no=1;
		  		foreach($chating as $cht) : ?>
					<tr>
					 	<td><?php echo $no++?></td>
					 	<td><?php echo $cht->pesan ?></td>
					</tr>
				<?php endforeach; ?>

			</table>
	    </div>		
	   </div>
	</div>
</div>
	  
	