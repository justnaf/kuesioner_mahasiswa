<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<!-- Bootstrap CSS -->
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
			crossorigin="anonymous"
		/>

		<!-- Font Awesome -->
		<script
			src="https://kit.fontawesome.com/e8e7ed251c.js"
			crossorigin="anonymous"
		></script>
        <title>@yield('title')</title>
	</head>
	<body style="background-color: rgb(128, 128, 128)">
		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<div class="container-fluid px-5">
				<a class="navbar-brand" href="#"><b>KUESIONER MAHASISWA</b></a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="fa-solid fa-house"></i> Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa-solid fa-graduation-cap"></i>
                            Data Prodi</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link {{ Route::is('input-kuesioner') ? 'active' : '' }}" href="{{url('/kuesioner-input')}}"><i class="fa-solid fa-gear"></i> Pertanyaan & Jawaban</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link {{ Route::is('hasil-kuesioner') ? 'active' : '' }}" href="{{url('/kuesioner-detail')}}"><i class="fa-solid fa-people-group"></i> Hasil Kuesioner</a>
                      </li>
                    </ul>

			</div>
		</nav>
		<!-- End Navbar -->
        		<!-- Content -->
		@yield('container')
		<!-- End Content -->

		<!-- Optional JavaScript; choose one of the two! -->

		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
			crossorigin="anonymous"
		></script>

		<!-- Option 2: Separate Popper and Bootstrap JS -->
		<!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
	</body>
</html>
