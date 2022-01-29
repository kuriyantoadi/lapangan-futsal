<html>
<head>
	<title>Cetak PDF</title>
	<style>
    .table {
        border-collapse:collapse;
        table-layout:fixed;width: 630px;
    }
    .table th {
        padding: 5px;
    }
    .table td {
        word-wrap:break-word;
        width: 20%;
        padding: 5px;
    }
	</style>
</head>
<body>
    <h4 style="margin-bottom: 5px;">Rekap Data Pemesanan Lapangan Blafut Futsal</h4>
	<?php echo $label ?>

	<table class="table" border="1" width="100%" style="margin-top: 10px;">
		<tr>
			<th>No</th>
			<th>Tanggal
				<br>Pesan
			</th>
			<th>Nama Lengkap</th>
			<th>Nama Club</th>
			<th>Jam Main</th>
			<th>Tanggal Main</th>
			<th>Lama Main</th>
			<th>Harga Sewa</th>
			<th>Pembayaran</th>
			<th>Nama
				<br>Lapangan</th>
			<th>Status
				<br>Pembayaran
			</th>
			<th>Status
				<br>Sewa</th>
			<th>Catatan</th>
		</tr>

		<?php
			$no=1;
        if(empty($rekap_sewa)){ // Jika data tidak ada
					echo "<tr><td colspan='5'>Data tidak ada, silahkan cek tanggal yang dipilih</td></tr>";
        }else{ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
            foreach($rekap_sewa as $data){ // Looping hasil data transaksi
                // $tgl = date('d-m-Y', strtotime($data->tgl)); // Ubah format tanggal jadi dd-mm-yyyy

                echo "<tr>";
								echo "<td style='width: 5px;'>".$no++."</td>";
                echo "<td style='width: 60px;'>".$data->tgl_pesan."</td>";
                echo "<td style='width: 80px;'>".$data->nama_lengkap."</td>";
								echo "<td style='width: 50px;'>".$data->nama_club."</td>";
                echo "<td style='width: 30px;'>".$data->jam_main."</td>";
                echo "<td style='width: 60px;'>".$data->tgl_main."</td>";
								echo "<td style='width: 30px;'>".$data->lama_main."</td>";
								echo "<td style='width: 60px;'>".$data->harga_sewa."</td>";
								echo "<td style='width: 30px;'>".$data->nominal_pembayaran."</td>";
								echo "<td style='width: 60px;'>".$data->nama_lapangan."</td>";
								if ($data->status_pembayaran == 0 ) {
									echo "<td style='width: 60px;'>"."Lunas"."</td>";
								}else {
									echo "<td style='width: 60px;'>".$data->status_pembayaran."</td>";
								}

								echo "<td style='width: 60px;'>".$data->status_sewa."</td>";
								echo "<td style='width: 60px;'>".$data->catatan."</td>";


                echo "</tr>";
            }
        }
		?>
	</table>
</body>
</html>
