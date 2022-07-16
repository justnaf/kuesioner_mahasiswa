@extends('layouts/main-auth')

@section('container')
<div class="container py-5 d-flex justify-content-center">
			<div class="align-self-center card px-3 py-4" style="width: 80%">
				<h2 class="text-center">KUESIONER MAHASISWA</h2>
				<p class="text-center">
					Isi data diri dan data pertanyaan berikut dengan baik dan benar
				</p>
				<h3>Data Mahasiswaa</h3>
				<hr />
				<div class="row">
					<div class="col">
						<label for="Example">Nama Lengkap</label>
						<input
							type="text"
							class="form-control"
							placeholder="Misal : Harith"
						/>
					</div>
					<div class="col">
						<label for="Example">NPM</label>
						<input
							type="text"
							class="form-control"
							placeholder="Misal : 20.0504.000"
						/>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label for="Example">Program Studi</label>
						<select class="form-select" aria-label="Default select example">
							<option value="">- Pilih program studi</option>
							<option value="1">Teknik Informatika</option>
							<option value="2">Teknologi Informasi</option>
							<option value="3">Teknik Industri</option>
							<option value="4">Teknik Mesin Otomotif</option>
						</select>
					</div>
					<div class="col">
						<label for="Example">Email</label>
						<input
							type="email"
							class="form-control"
							placeholder="Misal :Jhony@jhony.com"
						/>
					</div>
				</div>
				<h3 class="mt-3">Isi Kuesioner</h3>
				<hr />
				<div class="row">
					<p>
						1. Apakah Anda mampu menyelesaikan tugaas yang diberikan dengan
						baik?
					</p>
					<div class="grup ms-3">
						<div class="form-check">
							<input
								class="form-check-input"
								type="radio"
								name="flexRadioDefault"
								id="flexRadioDefault1"
							/>
							<label class="form-check-label" for="flexRadioDefault1">
								Mampu
							</label>
						</div>
						<div class="form-check">
							<input
								class="form-check-input"
								type="radio"
								name="flexRadioDefault"
								id="flexRadioDefault2"
							/>
							<label class="form-check-label" for="flexRadioDefault2">
								Terkadang
							</label>
						</div>
						<div class="form-check">
							<input
								class="form-check-input"
								type="radio"
								name="flexRadioDefault"
								id="flexRadioDefault2"
							/>
							<label class="form-check-label" for="flexRadioDefault2">
								Tidak
							</label>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection
