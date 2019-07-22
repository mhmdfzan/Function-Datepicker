<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Transaksi</title>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>
<body>
  <span>search daftar transaksi by date:</span>
  <form id="form1" action="<?php echo site_url('Control/select_date') ?>" method="post">
    <input id="thedate" type="text" class="date-pick" name="tanggal" placeholder="<?=  $selecttgl; ?>"/>
    <p id="demo"></p>
  </form>
  <?php
  if (isset($tanggal) && !empty($tanggal)) {
  ?>
  <h3>Daftar Transaksi</h3>
  <?php
    foreach ($tanggal as $tgl) {
  ?>
  <p>Id transaksi : <?= $tgl['id_transaksi']; ?>, Nama : <?=  $tgl['nama_customer']; ?>, Total Biaya : Rp<?=  $tgl['total_harga']; ?>,  Tanggal transaksi : <?=  $tgl['tanggal']; ?></p>
  <br>
  <?php
    }
  }elseif (isset($tanggal) && empty($tanggal)){
  ?>
  <h3>Daftar Transaksi</h3>
  <span>No transaction in selected date.</span>
  <?php
  }
  ?>
<script>
$(document).ready(function () {
            $("#thedate").datepicker({
                // dateFormat: 'dd/mm/yy',
                onSelect: function (selectedDate) {
                    // alert(selectedDate);
                    $('#form1').submit();
                }
            });
        });
</script>
</body>
</html>
