@extends('layouts/main-admin')

@section('container')
<div class="container py-4">
            <div class="row justify-content-center">
                <div class="col">
                    <h3>Data Pertanyaan dan Jawaban</h3>
                    <p>Kelola data pertanyaan dan pilihan</p>
                </div>
            </div>
            <div class="row justify-content-end">
                <div class="col-3 mb-2 ms-auto">
                    <button type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i>Tambah Pertanyaan Baru</button>
                </div>
            </div>
			<div class="card px-3 py-2">
				<div class="row justify-content-center">
					<div class="col">
						<h5>Data Mahasiswa</h5>
						<table class="table table-bordered table-striped">
							<tbody>
								<tr>
									<td>Nama</td>
									<td>Harith</td>
								</tr>
								<tr>
									<td>NPM</td>
									<td>20.0504.0014</td>
								</tr>
								<tr>
									<td>Prodi</td>
									<td>Prodi</td>
								</tr>
								<tr>
									<td>Email</td>
									<td>naufal@gmail.com</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="col">
						<h5>Data Kuesioner</h5>
						<table class="table table-bordered table-striped">
							<tbody>
								<tr>
									<td>1</td>
									<td>Apakah Anda mampu menyelesaikan tugaas yang diberikan dengan
										baik?</td>
								</tr>
								<tr>
									<td></td>
									<td>Jawaban</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
@endsection