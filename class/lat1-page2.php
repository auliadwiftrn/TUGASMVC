<?php
  $nama = $_POST['nama'];
  $NIM = $_POST['NIM'];
  $radiobutton = $_POST['radiobutton'];
  $nohp = $_POST['nohp'];
  $email = $_POST['email'];
  $programstudi = $_POST['programstudi'];
  $minat = $_POST['minat'];
  $motivasi = $_POST['motivasi'];
  $keadaankeluarga = $_POST['keadaankeluarga'];
  $foto = $_FILES['fileUpload']['tmp_name'];

  move_uploaded_file($foto, "profile_picture.jpg");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
 <title>Solidaritas Filkom</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.min.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body style="background-color: #fcfcfc;">
	<div style="margin-top: 5%; margin-bottom: 5%; margin-right: 20%; margin-left: 25%; font-size: 50px; border-bottom: 5%; border: solid #333 1px; text-align: center;">	<h1>Haloo <b>AULIA</b>!</h1>
		<script type="text/javascript">  var today = new Date();  var hour = today.getHours();
		if(hour > 6 && hour < 12){   document.write ("GOOD MORNING")  }
		else if (hour>12 && hour<18){   document.write ("GOOD AFTERNOON")  }
		else {   document.write ("GOOD EVENING")  } 
		</script>
	<br>
	</div>
 <table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Nomor</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">NIM</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">No. HP</th>
        <th scope="col">Email</th>
        <th scope="col">Program Studi</th>
        <th scope="col">Minat</th>
        <th scope="col">Motivasi</th>
        <th scope="col">Keadaan keluarga</th>
        <th scope="col">Picture</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <th scope="row">1</th>
      <td><?php echo $nama;?></td>
      <td><?php echo $NIM;?></td>
      <td><?php echo $radiobutton;?></td>
      <td><?php echo $nohp;?></td>
      <td><?php echo $email;?></td>
      <td><?php echo $programstudi;?></td>
      <td><?php foreach ($minat as $key) {
        echo "-".$key."<br>";
      } ;?></td>
      <td><?php echo $motivasi;?></td>
      <td><?php echo $keadaankeluarga;?></td>
      <td><img src="profile_picture.jpg" style="height: 100px" width="100px"></td>
      </tr>
    </tbody>
  </table>
<ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
    <li class="page-item">
      <a class="page-link" href="#">2 </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</body>
</html>