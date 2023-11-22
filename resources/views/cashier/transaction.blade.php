@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-7">
            <div class="card">
                <div class="card-header">
                    List Item
                </div>
                <div class="card-body">
                    <table class="table table-respomsive">
                        <tr>
                            <th>No</th>
                            <th>Nama Item</th>
                            <th>Kategori</th>
                            <th>Stock</th>
                            <th>Harga</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Gergaji</td>
                            <td>Perkakas</td>
                            <td>4</td>
                            <td>Rp.10.000</td>
                            <td>
                                <a href="{{ route('category.edit',1) }}" class="btn btn-success btn-sm">Add to Cart</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="card mb-3">
                <div class="card-header">
                    Cart
                </div>
                <div class="card-body">
                    <table class="table table-respomsive">
                        <tr>
                            <th>No</th>
                            <th>Item</th>
                            <th class="col-md-5">Qty</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Gergaji</td>
                            <td>40</td>
                            <td>
                                <a href="{{ route('category.destroy',1) }}" class="btn btn-danger btn-sm">Hapus</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    Checkout
                </div>
                <div class="card-body">
                    <form action="{{ route('transaction.store',1) }}" method="POST">
                    @csrf
                        <div class="form-group d-flex mb-3">
                            <label for="exampleFormControlInput1" class="col-3">Grand Total : </label>
                            <input class="form-control" type="text" name="name">
                        </div>
                        <div class="form-group d-flex mb-3">
                            <label for="exampleFormControlInput1" class="col-3">Payment : </label>
                            <input class="form-control" type="text" name="name">
                        </div>
                        <div class="form-group d-flex justify-content-end gap-1">
                            <a href="" class="btn btn-primary">Checkout</a>
                            <input class="btn btn-danger" type="reset" value="reset">
                        </div>  
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection