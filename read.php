<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD Operation on JSON File using PHP</title>
</head>
<body>
<table border="1">
	<thead>
		<th>No</th>
		<th>No Rekening</th>
		<th>Nama Nasabah</th>
		<th>Alamat Nasabah</th>
		<th>Cabang</th>
		<th>Transaksi Tanggal</th>
        <th>Keterangan</th>
        <th>Saldo</th>
	</thead>
	<tbody>
		<?php
			//fetch data from json
			$data = file_get_contents('test.json');
			//decode into php array
			$data = json_decode($data);

			$index = 0;
			foreach($data as $row){
				echo "
					<tr>
						<td>".$row->no."</td>
						<td>".$row->no_rekening."</td>
						<td>".$row->nama_nasabah."</td>
						<td>".$row->alamat_nasabah."</td>
                        <td>".$row->cabang."</td>
                        <td>".$row->transaksi_tanggal."</td>
                        <td>".$row->keterangan."</td>
                        <td>".$row->saldo."</td>
						
					</tr>
				";

				$index++;
			}
		?>
	</tbody>
</table>
</body>
</html>