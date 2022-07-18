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
                  <a href="{{('/pertanyaan-input')}}">
                    <button type="button" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Tambah Pertanyaan Baru</button>
                  </a>
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
                                  <th style="width: 40px;">No</th>
                                  <th>Pertanyaan</th>
                                  <th>Jawaban</th>
                                  <th>Opsi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>Apakah Anda mampu menyelesaikan tugaas yang diberikan dengan
                                        baik?</td>
                                    <td>
                                      <a href="/jawaban-input">
                                        <button type="button" class="btn btn-primary">Atur Jawaban</button>
                                      </a>
                                      <div class="card mt-2" >
                                        <ul class="list-group list-group-flush ">
                                          <li class="list-group-item">An item</li>
                                          <li class="list-group-item">A second item</li>
                                          <li class="list-group-item">A third item</li>
                                        </ul>
                                      </div>
                                    </td>
                                  <td>
                                    <button type="button" class="btn btn-warning"><i class="fa-solid fa-gear"></i></button>
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
