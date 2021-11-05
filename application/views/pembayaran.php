<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php 
				$grand_total = 0;
				if ($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $item)
					{
						$grand_total = $grand_total + $item['subtotal'];
					}
				echo "<h4>Total Belanja Anda: Rp. ".number_format($grand_total,0,',','.');
				 ?>
			</div><br><br>

			<h4>Input Alamat Pengiriman dan Pembayaran</h4>

			<form method="post" action="<?php echo base_url() ?>dashboard/proses_pesanan">

				<div class="form-group">
					<label>Nama Lengkap</label>
					<input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>Alamat Lengkap</label>
					<input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>No. Telepon</label>
					<input type="text" name="tlp" placeholder="Nomor Telepon Anda" class="form-control">
				</div>

				<div class="form-group">
					<label>Jasa Pengiriman</label>
					<select class="form-control" name="jasa">
						<option>JNE</option>
						<option>JNT</option>
						<option>Wahana</option>
						<option>Pos Indonesia</option>
					</select>
				</div>

				<div class="form-group">
					<label>Pilih BANK</label>
					<select class="form-control" name="bank">
						<option>BCA - xxxxxx</option>
						<option>BNI	- xxxxxx</option>
						<option>BRI	- xxxxxx</option>
						<option>Mandiri - xxxxxx</option>
					</select>
				</div>

				<button type="submit" class="btn btn-sm btn-primary mb-3">Pesan</button>

			</form>

			<?php 
		}else
			{
				echo "<h4>Keranjang Belanjaan Anda Masih Kosong";
			} ?>
		</div>

		<div class="col-md-2"></div>
	</div>	
</div>