<?php 
	include 'koneksi.php';

	$query = mysqli_query($koneksi, "SELECT total_kasus FROM tbl_jumlah");
	$rows = array();
	$rows['name'] = 'Total Kasus';
	while($tmp = mysqli_fetch_array($query)){
		$rows['data'][] = $tmp['total_kasus'];
	}

	$query = mysqli_query($koneksi, "SELECT total_kematian FROM tbl_jumlah");
	$rows1 = array();
	$rows1['name'] = 'Total Kematian';
	while($tmp = mysqli_fetch_array($query)){
		$rows1['data'][] = $tmp['total_kematian'];
	}

	$query = mysqli_query($koneksi, "SELECT total_sembuh FROM tbl_jumlah");
	$rows2 = array();
	$rows2['name'] = 'Total Sembuh';
	while($tmp = mysqli_fetch_array($query)){
		$rows2['data'][] = $tmp['total_sembuh'];
	}

	$query = mysqli_query($koneksi, "SELECT kasus_aktif FROM tbl_jumlah");
	$rows3 = array();
	$rows3['name'] = 'Kasus Aktif';
	while($tmp = mysqli_fetch_array($query)){
		$rows3['data'][] = $tmp['kasus_aktif'];
	}

	$query = mysqli_query($koneksi, "SELECT total_tes FROM tbl_jumlah");
	$rows4 = array();
	$rows4['name'] = 'Total Tes';
	while($tmp = mysqli_fetch_array($query)){
		$rows4['data'][] = $tmp['total_tes'];
	}

	$result = array();
	array_push($result,$rows);
	array_push($result,$rows1);
	array_push($result,$rows2);
	array_push($result,$rows3);
	array_push($result,$rows4);

	print json_encode($result, JSON_NUMERIC_CHECK);

	mysqli_close($koneksi);
 ?>