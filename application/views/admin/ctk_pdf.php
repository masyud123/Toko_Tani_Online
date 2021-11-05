<!DOCTYPE html>
<html><head>
  <title>Laporan</title>
  <style>
        table {
            border-collapse: collapse;
        }
        table td {
            border: 1px solid black;
            background-color: #0000ff66;
        } 
        table tr {
            border: 0px solid black;
            background-color: #0000ff66;
        }

        table th {
            border: 0px solid black;
            background-color: #0000ff66;
        }
        .rowspan {
            border-left-width: 10px;
        }
    </style>
</head><body>

  <img src="uploads/logo_toko.jpg" style="position: absolute; width: 18%; height:auto">
    <table style="width: 100%">
      <tr >
        <td align="center">
          <span style="line-height: 1.6; font-weight: bold;">
            TOKO TANI SUBUR MAKMUR DESA NGLANDUK
            <br> MADIUN JAWA TIMUR
          </span>
        </td>
      </tr>
    </table>

    <hr class="line-tittle">
    <p align="center">
      LAPORAN PENJUALAN
      <br align="center">
        Bulan .... Tahun ....
      </br>
    </p>

    <table>
      <tr>
        <td align="center" colspan="2" style="width: 30">NO</td>
        <td align="center" colspan="2" style="width: 170">NAMA BARANG</td>
        <td align="center" colspan="2" style="width: 60">JUMLAH</td>
        <td align="center" colspan="2" style="width: 110">HARGA</td>
        <td align="center" colspan="2" style="width: 150">SUB-TOTAL</td>
      </tr>

      <?php 
      $no=1;
      $total = 0;
      foreach($pesanan as $psn) : 
        $subtotal = $psn->jumlah * $psn->harga;
        $total += $subtotal;
      ?>

      <tr>
        <td colspan="2" align="center"><?php echo $no++ ?></td><br>
        <td colspan="2" align="center"><?php echo $psn->nama_brg ?></td>
        <td colspan="2" align="center"><?php echo $psn->jumlah ?></td>
        <td colspan="2" align="center"><?php echo number_format($psn->harga,0,',','.') ?></td>
        <td colspan="2" align="center"><?php echo number_format($subtotal,0,',','.') ?></td>
       </tr>

      <?php endforeach ?>

      <tr >
        <th colspan="9" align="right" height="35">Total</th>
        <th align="right" style="text-align: right;">Rp. <?php echo number_format($total,0,',','.') ?></th>
      </tr>
    </table>

</body></html>
