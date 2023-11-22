@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-7">
            <div class="card">
                <div class="card-header">
                    Data Item
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <tr>
                            <th>No</th>
                            <th>Nama Item</th>
                            <th>Kategori</th>
                            <th>Harga</th>
                            <th>Stock</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Gergaji</td>
                            <td>Perkakas</td>
                            <td>Rp.10.000,00</td>
                            <td>4</td>
                            <td>
                                <a href="{{ route('category.edit',1) }}" class="btn btn-warning btn-sm">Edit</a>
                                <a href="{{ route('category.destroy',1) }}" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="card">
                <div class="card-header">
                    Tambah Kategori
                </div>
                <div class="card-body">
                    <form action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Nama Item</label>
                            <input class="form-control" type="text" name="name"">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Kategori</label>
                            <input class="form-control" type="text" name="name"">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Harga</label>
                            <input class="form-control" type="text" name="name"">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Stock</label>
                            <input class="form-control mb-3" type="text" name="name"">
                        </div>
                        <div class="d-grid gap-2">
                            <input class="btn btn-success btn-sm" type="submit" value="save">
                            <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection