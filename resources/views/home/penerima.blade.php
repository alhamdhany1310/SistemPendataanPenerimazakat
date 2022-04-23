<!doctype html>
<html lang="en">
  <head>
  	<title>Table 07</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://system.hamdhany12.repl.co/style.css">
    <script src="https://kit.fontawesome.com/7e15f3fc2d.js" crossorigin="anonymous"></script>

	</head>
	<body>
	<section>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-7 text-center mb-5">
					<h2 class="heading-section">Daftar Nama Penerima Zakat Ramadhan 1443</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
						<a href="{{route('isi')}}" type="button" class="btn btn-primary mb-4">Tambah Penerima Zakat</a>
						<table class="table table-bordered table-dark table-hover">
						  <thead>
						    <tr>
								<th scope="col">Nomor</th>
								<th scope="col">Nama Penerima</th>
								<th scope="col">Usia</th>
								<th scope="col" >Pekerjaan</th>
								<th scope="col" >Stataus</th>
								<th scope="col" >Keterangan</th>
						    </tr>
						  </thead>
						  <tbody>
						    @foreach ($data as $key=> $dt)
                            <tr>
                                <th scope="row">{{ $loop->iteration}}</th>
								<td scope="row">{{ $dt->name_id}}</td>
								<td scope="row">{{ $dt->g_id}}</td>
								<td scope="row">{{ $dt->u_id}}</td>
								<td scope="row">{{ $dt->s_id}}</td>
								<td scope="row">{{ $dt->keterangan}}</td>
                            </tr>
                            @endForeach
						  </tbody>
						</table>
				</div>
			</div>
		</div>
	</section>

  <script src="https://system.hamdhany12.repl.co/jquery.min.js"></script>
  <script src="https://system.hamdhany12.repl.co/popper.js"></script>
  <script src="https://system.hamdhany12.repl.co/bootstrap.min.js"></script>
  <script src="https://system.hamdhany12.repl.co/main.js"></script>

	</body>
</html>

