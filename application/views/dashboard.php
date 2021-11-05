<div class="container-fluid">
    <div class="row text-center">

        <?php foreach ($barang as $brg) : ?>

            <div class="card ml-3 mb-3" style="width: 16rem;">
              <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title mb-1"><?php echo $brg->nama_brg ?></h5>
                <small><?php echo $brg->keterangan ?></small><br>
                <h5 class="badge badge-pill bg-secondary mb-2 text-white">Rp. <?php echo number_format($brg->harga, 0,',','.') ?></h5><br>
                <h5><?php echo anchor('dashboard/tambah_ke_keranjang/'.$brg->id_brg,'<div class="btn btn-sm btn-success">Tambah ke Keranjang <i class="fas fa-cart-plus"></i></div>') ?></h5>
                <?php echo anchor('dashboard/detail/'.$brg->id_brg,'<div class="btn btn-sm btn-info">Detail <i class="far fa-question-circle"></i></div>') ?>
              </div>
            </div> 

        <?php endforeach; ?> 
    </div>       
</div>