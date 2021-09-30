@extends('layout.dashboard')

@section('content')
<a href="" class="btn btn-primary mb-3">Make New Post</a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Post Name</th>
        <th scope="col">Slug</th>
        <th scope="col">Category</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td scope="row">{{ $loop->iteration }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->slug }}</td>
            <td>{{ $post->category->name }}</td>
            <td>
                <a href="" class="badge bg-primary">Detail</a>
                <a href="" class="badge bg-warning">Edit</a>
                <a href="" class="badge bg-danger">Delete</a>    
            </td>   
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection