@extends('layouts/main-auth')

@section('container')
<div class="container py-5">
			<div class="row mt-5">
				<div class="col align-self-center">
					<h4>Selamat Datang</h4>
					<h2>
						Sistem Informasi
						<b>KUESIONER</b>
						mahasiswa online
					</h2>
					<p>
						Kuesioner kini bisa dilakukan dimana saja, kapan saja, secara
						online, tanpa perlu kertas.
					</p>
					<a href="{{url('/survey')}}">
						<button type="button" class="btn btn-primary">
							Ikut Kuesioner Sekarang!
						</button>
					</a>
				</div>
				<div class="col align-self-center text-center">
					<img src="{{asset('img/welcom-img.svg')}}" height="300px" />
				</div>
			</div>
		</div>
@endsection
