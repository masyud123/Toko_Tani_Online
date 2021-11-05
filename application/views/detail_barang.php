<div class="container-fluid">
	
	<div class="card">
	  <h5 class="card-header bg-primary text-white">Detail Produk</h5>
	  <div class="card-body">

	    <div class="row">
	    	<div class="col-md-3">
	    		<img src="<?php echo base_url().'/uploads/'.$barang->gambar ?>" class="card-img-top">
	    	</div>
	    	<div class="col-md-5">
	    		<table class="table">
	    			<tr>
	    				<td>Nama Produk</td>
	    				<td><strong><?php echo $barang->nama_brg ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Keterangan</td>
	    				<td><strong><?php echo $barang->keterangan ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Kategori</td>
	    				<td><strong><?php echo $barang->kategori ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Stok</td>
	    				<td><strong><?php echo $barang->stok ?></strong></td>
	    			</tr>
	    			<tr>
	    				<td>Harga</td>
	    				<td><strong><div>Rp. <?php echo number_format($barang->harga,0,',','.') ?></div></strong></td>
	    			</tr>
	    		</table>

	    		<?php echo anchor('dashboard/tambah_ke_keranjang/'.$barang->id_brg,'<div class="btn btn-sm btn-primary">Tambah ke Keranjang </div>') ?>
	    		<?php echo anchor('welcome/','<div class="btn btn-sm btn-success">Kembali</div>') ?>
	    	</div>
	    </div>
	
	  	</div>
	  	<div class="card-footer">
	</div>
	
</div>
