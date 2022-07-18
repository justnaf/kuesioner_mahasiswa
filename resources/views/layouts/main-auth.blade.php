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
	<body>
        <!-- Navbar -->
        <section>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container-fluid px-5">
                    <a class="navbar-brand" href="/"><b>{{ env('APP_NAME') }}</b></a>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link {{ Route::is('home') ? 'active' : '' }}" aria-current="page" href="{{ url('/') }}">
                                    <i class="fa-solid fa-house"></i>
                                    HOME
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Route::is('survey') ? 'active' : '' }}" href="{{url('/survey')}}">
                                    <i class="fa-solid fa-pen"></i>
                                    SURVEY
                                </a>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="btn btn-light">
                                    <i class="fa-solid fa-lock"></i>
                                    LOGIN ADMIN
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </section>
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
