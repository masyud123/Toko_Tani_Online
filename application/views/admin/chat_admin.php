<div class="container-fluid">
	<button class="btn btn-primary mb-3"data-toggle="modal" data-target="#chat"><i class="fas fa-plus fa-sm"></i> Tulis Pesan</button>
	<div class="card text-center" >
	  <h5 class="card-header bg-primary text-white">Pesan Kepada Customer</h5>
	  <div class="card-body">
		  	<table class="table table-bordered table-striped table-hover">

		  		<tr>
		  			<th>NO</th>
		  			<th>NAMA</th>
		  			<th>Pesan</th>
		  		</tr>

		  		<?php
		  		$no=1;
		  		foreach($chating as $cht) : ?>
					<tr>
					 	<td><?php echo $no++?></td>
					 	<td><?php echo $cht->nama ?></td>
					 	<td><?php echo $cht->pesan ?></td>
					</tr>
				<?php endforeach; ?>

			</table>
	    </div>		
	   </div>
	</div>
</div>
	  
<div class="modal fade" id="chat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kirim Pesan Ke Customer</h5>
   
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url(). 'admin/chat_admin/tulis_psn'; ?>" method="post" enctype="multipart/form-data" >

          <div class="form-group">
            <label>Masukkan Nama Customer</label>
            <input type="text" name="nama" class="form-control">
            
          </div>

          <div class="form-group">
            <label>Tulis Pesan Anda</label><br>
            <input type="text" name="pesan" class="form-control">
          </div>

      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Kirim</button>
        <?php echo anchor('admin/chat_admin/chat',
          '<div class="btn  btn-success">Batal</div>') ?>
      </div>

      </form>

    </div>
  </div>
</div>