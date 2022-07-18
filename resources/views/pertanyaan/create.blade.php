@extends('layouts/main-admin')

@section('container')
<div class="container py-4">
            <div class="row justify-content-center">
                <div class="col">
                    <h3>Data Pertanyaan dan Jawaban</h3>
                    <p>Kelola data pertanyaan dan pilihan</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col" style="width: 80%">
                    <div class="align-self-center card px-3 py-4 row" >
                        <div class="row">
                            <div class="form-group">
                                <label for="exampleInputPassword1">Pertanyaan</label>
                                <input type="text" class="form-control" name="pertanyaan" id="pertanyaan" placeholder="Pertanyaan" required>
                            </div>  
                        </div>
                        <div class="row mt-2">
                            <div class="col-2">
                                <button type="button" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
@endsection
