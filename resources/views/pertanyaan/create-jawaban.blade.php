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
                        <div class="row mt-3">
                            <div class="col-3">
                                <table>
                                    <thead> 
                                        <tr>
                                            <th>Jawaban</th>
                                            <th><a href="javascript:void(0)" class="btn btn-success addRow">+</a></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input type="text" name="jawban[]" class="form-control"></td>
                                            <th><a href="javascript:void(0)" class="btn btn-danger deleteRow">-</a></th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
@endsection
