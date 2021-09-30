@extends('layout.dashboard')

@section('content')
<div class="row">
    <div class="col-lg-3">
      <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
        <div class="card-header">Post Count</div>
        <div class="card-body">
          <h5 class="card-title">{{ $post->count() }}</h5>
        </div>
      </div>
    </div>

    <div class="col-lg-3">
      <div class="card text-dark bg-info mb-3" style="max-width: 18rem;">
        <div class="card-header">Post Comments</div>
        <div class="card-body">
          <h5 class="card-title">Info card title</h5>
        </div>
      </div>
    </div>

  </div>

  <h3 class="">
    Your Post
  </h3>

  <div class="row">
    @foreach ($post as $item)
      <div class="col-lg-3">
        <div class="card">
          <img src="https://source.unsplash.com/1600x900/?health" class="card-img-top" alt="...">
          <div class="card-body">
            <p>{{ $item->category->name }}</p>
            <h5 class="card-title">{{ $item->title }}</h5>
            <p class="card-text">{{ $item->excerpt }}</p>
          </div>
        </div>
      </div>
    @endforeach  
  </div>
@endsection