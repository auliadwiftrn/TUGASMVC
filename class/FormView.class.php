<?php 

class FormView {

	public function formInput (){
		?>
<!DOCTYPE html>


<html>

<head>
 <meta charset="UTF-8">
 <title>Solidaritas Filkom</title>
 <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" type="text/css" href="formInput.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body style="background-color: #fcfcfc;">
<div style="margin-top: 5%; margin-bottom: 3%; margin-right: 20%; margin-left: 20%; border-bottom: 5%; border: solid #630505 1px;">	
	<h1 style="color: black; font-size: 40px; text-align: center;">PENDAFTARAN BEASISWA SOLIDARITAS FILKOM</h1>
</div>
<div class="row" style="height: 1200px;border-top: 5px solid #630505; margin:5% ;border-bottom: 2px solid #630505; border-left: 2px solid #630505; border-right: 2px solid #630505; background-image: url(20150922052933.jpg); background-size: cover; background-repeat: no-repeat; background-attachment: fixed; background-position: center;">
	<div style="margin:5% 2% 5% 2%; padding: 10px; background: rgba(234, 237, 242, 0.8)">
		<form action="lat1-page2.php" method="POST" enctype="multipart/form-data">
  			<div class="form-group">
			<label for="fullname">Nama Lengkap</label>
			<input type="fullname" class="form-control" name="nama" id="nama" placeholder="Nama Lengkap...">
		</div>

		<div class="form-group">
			<label for="nickname">NIM</label>
			<input type="nickname" class="form-control" name="NIM" id="NIM" placeholder="NIM...">
		</div>
		<p>Jenis Kelamin</p>
		 <div class="form-group form-cek">
  			<input type="radio" name="radiobutton" value="pria" id="cek-pria" class="cek"><label for="cek-pria">Pria</label>
  			<input type="radio" name="radiobutton" value="wanita" id="cek-wanita" class="cek"><label for="cek-wanita">Wanita</label>
 		</div>
		<br>
		<div class="form-group">
			<label for="phonenumber">No. HP</label>
			<input type="NIM" class="form-control" name="nohp" id="phonenumber" placeholder="No. HP...">
		</div>
		<div class="form-group">
			<label for="EmailPendaftar">Email</label>
			<input type="email" class="form-control" name="email" id="Email" aria-describedby="emailHelp" placeholder="Email...">
		</div>
		<p>Program Studi</p>
		<div class="form-group">
			<select class="form-control" name="programstudi">
				<option value="Teknik Informatika">Teknik Informatika</option>
				<option value="Teknik Komputer">Teknik Komputer</option>
				<option value="Sistem Informasi">Sistem Informasi</option>
				<option value="Teknologi Informasi">Teknologi Informasi</option>
				<option value="Pendidikan Teknologi Informasi">Pendidikan Teknologi Informasi</option>

			</select>
		</div>
		<p>Memiliki keminatan pada...(minimal 1)</p>
		<div class="form-check">
			<input type="checkbox" class="form-check-input" name="minat[]" id="Wherever Needed">
			<label class="form-check-label" for="Whereverneeded">Bisnis</label>
			<br>
			<input type="checkbox" class="form-check-input" name="minat[]"  id="Decoration">
			<label class="form-check-label" for="Decoration">Programmer</label>
			<br>
			<input type="checkbox" class="form-check-input" name="minat[]"  id="Game">
			<label class="form-check-label" for="Game">Design</label>
			<br>
			<input type="checkbox" class="form-check-input" name="minat[]"  id="Food">
			<label class="form-check-label" for="Food">Videografi dan Fotografi</label>
			<br>
			<input type="checkbox" class="form-check-input" name="minat[]"  id="Arts">
			<label class="form-check-label" for="Arts">Sosial</label>
			<br>
			<input type="checkbox" class="form-check-input" name="minat[]"  id="Others">
			<label class="form-check-label" for="others">Others</label>
		</div>
		<br>
		<div class="form-group">
			<label for="offers">Motivasi mengikuti Beasiswa Solidaritas Filkom</label>
			<textarea class="form-control" name="motivasi" id="offers" rows="3" placeholder="Motivasi saya mengikuti beasiswa ini adalah..."></textarea>
		</div>
		<div class="form-group">
			<label for="reasons">Kondisi Keluarga</label>
			<textarea class="form-control" name="keadaankeluarga" id="reasons" rows="3" placeholder="Kondisi keluarga saat ini adalah..."></textarea>
		</div>

		<div class="form-group">
			<label for="picture">Foto Diri</label>
			<input type="file" class="form-control-file" name="fileUpload" id="picture">
		</div>
		 <div class="form-group">
  <button class="btn btn-submit" type="submit">Daftar &nbsp; <i class="fa fa-hand-o-right" aria-hidden="true"></i></button>
 </div>
		</form>
	</div>
</div>

<footer>
  <p style="text-align: center; padding-top: 1%; font-size: 10px">© 2018. Allright (Belum)Reserved. Design by auliadwi~.</p>
</footer>

</body>

</html>


	<?php
	
    public function FormOK ($data){
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
}

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
    ?>s