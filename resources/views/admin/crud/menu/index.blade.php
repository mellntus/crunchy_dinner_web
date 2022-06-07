@extends('admin.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" style="margin-top: 48px">
        <h1 class="h2">List Menu</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/admin/listmenu/create" class="btn btn-primary mb-3">Add New Menu</a>
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Picture</th>
                <th scope="col">Nama</th>
                <th scope="col">Price</th>
                <th scope="col">Detail</th>
                <th scope="col">Tags</th>
                <th scope="col">Favorit</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($menu as $index => $obj)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <img src='/storage/{{ $obj['picture'] }}' height='100px' width="100px" alt='{{ $obj['nama'] }}'>
                </td>
                <td>{{ $obj['nama'] }}</td>
                <td>{{ $obj['price'] }}</td>
                <td>{{ $obj['detail'] }}</td>
                <td>
                    <div class="d-flex flex-wrap">
                        @foreach ($obj['tag'] as $tag)
                            <div class="tag-list border border-success p-2 mx-1 mb-1 rounded" height="30px">
                                <p class="m-0"><small>{{ $tag }}</small></p>
                            </div>
                        @endforeach
                    </div>
                </td>
                <td>{{ $obj['favorit'] }}</td>
                <td>
                    <a href="{{ url('/admin/listmenu/edit/'. $index) }}" class="badge btn-warning" style="text-decoration: none">edit</a>
                    <form action="/admin/listmenu/{{ $index }}" method="POST">
                        @method('delete')
                        @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')">del</button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection