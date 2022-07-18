@extends('layouts/main-admin')

@section('container')
<div class="container py-4">
            <div class="row justify-content-center">
                <div class="col">
                    <h3>Hasil Kuesioner</h3>
                    <p>Kelola data hasil kuesioner</p>
                </div>
            </div>
			<div class="row justify-content-center">
                <div class="col" style="width: 80%">
                    <div class="align-self-center card px-3 py-4 row" >
                        <div class="row justify-content-end mb-3">
                            <div class="col-3">
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>
                    </div>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                  <th style="width: 3%;">No</th>
                                  <th>Nama</th>
                                  <th>Prodi</th>
                                  <th style="width: 15%;">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Agus</td>
                                    <td>
                                      Teknik Bolos
                                    </td>
                                  <td>
                                    <a href="{{url('/kuesioner-detail')}}">
                                        <button type="button" class="btn btn-warning"><i class="fa-solid fa-gear"></i></button>
                                    </a>
                                    <button type="button" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </td>
                                </tr>
                              </tbody>
                          </table>
                    </div>
                </div>
            </div>
		</div>
@endsection