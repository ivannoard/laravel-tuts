<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.87.0">
    <title>{{ $title }}</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    {{-- Bootstrap Own --}}
    <link href="/css/blog.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">

  </head>
  <body>
    
<div class="container">
  @include('component.navbar')
</div>

<main class="container mt-3">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 fst-italic">{{ $posts[0]->title }}</h1>
      <p class="lead my-3">{{ $posts[0]->excerpt }}</p>
      <p class="lead mb-0"><a href="/blog/{{ $posts[0]->slug }}" class="text-white fw-bold">Continue reading...</a></p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">{{ $posts[1]->category->name }}</strong>
          <h3 class="mb-0">{{ $posts[1]->title }}</h3>
          <div class="mb-1 text-muted">{{ $posts[1]->created_at->format('d/m/Y') }} by <a class="text-decoration-none" href="">{{ $posts[1]->user->name }}</a></div>
          <p class="card-text mb-auto">{{ $posts[1]->excerpt }}</p>
          <a href="/blog/{{ $posts[1]->slug }}" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">{{ $posts[2]->category->name }}</strong>
          <h3 class="mb-0">{{ $posts[2]->title }}</h3>
          <div class="mb-1 text-muted">{{ $posts[2]->created_at->format('d/m/Y') }} by <a class="text-decoration-none" href="">{{ $posts[2]->user->name }}</a></div>
          <p class="mb-auto">{{ $posts[2]->excerpt }}</p>
          <a href="/blog/{{ $posts[2]->slug }}" class="stretched-link">Continue reading</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>

        </div>
      </div>
    </div>
  </div>

  <div class="row g-5">
    <div class="col-md-8">

      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Personal Project's Posts 
      </h3>

      <article class="blog-post">
        @foreach ($posts->skip(3) as $post)
          <h2 class="blog-post-title">{{ $post->title }}</h2>
          
          <p class="blog-post-meta">{{ $post->created_at->format('d/m/Y') }} by <a class="text-decoration-none" href="">{{ $post->user->name }}</a></p>

          <p>{{ $post->excerpt }}</p>
          
          <a href="/blog/{{ $post->slug }}">Read More...</a>
        @endforeach
      </article>

      
      <a class="btn btn-outline-primary" href="/blog/allpost">More Posts</a>
      
    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 5rem;">
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
        <div class="mt-4 p-3 bg-light rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
        </div>

        <div class="mt-4 p-3">
          <h4 class="fst-italic">Archives</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">March 2021</a></li>
            <li><a href="#">February 2021</a></li>
            <li><a href="#">January 2021</a></li>
            <li><a href="#">December 2020</a></li>
            <li><a href="#">November 2020</a></li>
            <li><a href="#">October 2020</a></li>
            <li><a href="#">September 2020</a></li>
            <li><a href="#">August 2020</a></li>
            <li><a href="#">July 2020</a></li>
            <li><a href="#">June 2020</a></li>
            <li><a href="#">May 2020</a></li>
            <li><a href="#">April 2020</a></li>
          </ol>
        </div>

      </div>
    </div>
  </div>

</main>

<footer class="blog-footer mt-5">
  <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>


    
  </body>
</html>
