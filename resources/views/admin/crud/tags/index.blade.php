@extends('admin.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom" style="margin-top: 48px">
        <h1 class="h2">List Tags</h1>
    </div>
  
    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
        </div>
    @endif
  
    <div class="table-responsive col-lg-8">
        <a href="/admin/listtags/create" class="btn btn-primary mb-3">Add New Tags</a>
        <table class="table table-striped table-sm">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tags</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($tag as $index => $obj)
                <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $obj['tag'] }}</td>
                <td>
                    <a href="{{ url('/admin/listtags/edit/'. $index) }}" class="badge btn-warning" style="text-decoration: none">edit</a>
                    <form action="/admin/listtags/{{ $index }}" method="POST">
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