@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>       
        @endif
        <div class="col-7">
            <div class="card">
                <div class="card-header d-flex justify-content-between fs-5">
                    Data Kategori
                    <button onclick="create('{{ route('category.store') }})" class="btn btn-primary"><-</button>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nama Kategori</th>
                              <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $kategori)                                
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $kategori->name }}</td>
                                <td class="d-flex flex-row gap-2">
                                    <button onclick="edit({{ $kategori->id }},'{{ route('category.update',$kategori->id) }}')"
                                        class="btn btn-warning btn-sm">Edit</button>
                                    <form action="{{ route('category.destroy', $kategori->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr colspan="3" class="text-center">
                                Data Kosong
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="card sticky-top" style="">
                <div id="card-header" class="card-header">
                    Tambah Kategori
                </div>
                <div class="card-body">
                    <form id="form-category" action="{{ route('category.store') }}" method="POST">
                        @csrf
                        <input type="hidden" id="form-method" name="_method">
                        <div class="form-group">
                            <label for="exampleFormControlInput1" class="form-label">Nama Kategori</label>
                            <input class="form-control mb-3 @error('name') is-invalid @enderror" type="text" name="name" id="name" placeholder="...">
                            @error('name')
                                    <div class="invalid-feedback">
                                    {{ $message }}
                                    </div>
                                @enderror
                            <button type="submit" class="btn btn-success btn-sm" value="save">Save</button>
                            <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function create(url) {
        $('#card-header').text("Tambah Kategori");
        $('#name').val('');

        console.log();
        $("form-category").attr("action", url);
        $("form-method").val('POST');
    }

    function edit(id, url) {
        $('#card-header').text("Edit Kategori");
        $.get('category/' + id + '/edit', function(data) {
            $('#name').val(data.name);
        })

        $("form-category").attr("action", url);
        $("form-method").val('PUT');
    }
</script>
@endsection