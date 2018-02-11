@extends('layouts.app')
@section('css')

@endsection
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">FURNITURE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">About</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="/develop">Develop<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            {{--  <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>  --}}
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </div>
      </nav>
@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        {{--  787 X 397  --}}
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="http://www.jordans.com/~/media/jordans%20redesign/category/furniture/living%20room/feature-livingroom.ashx?h=397&la=en&w=787&hash=459E0BF41F8262F530321C9DCD02EC818EEDA5E7" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="http://your-home.us/wp-content/uploads/dining-dining-room-furniture-the-best-of-wood-dining-room-sets-photos-of-wood-dining-room-sets.jpeg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="http://www.jordans.com/~/media/jordans%20redesign/category/furniture/shop%20by%20collection/feature-sunbrella.ashx?h=397&la=en&w=787&hash=076743714104D73B3BCB3E9D47D4492153B16A40" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
</div>
{{--  JUMBOTRON  --}}
<div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Furniture Fluid jumbotron</h1>
          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae, similique id! Assumenda adipisci
                molestias eveniet temporibus maxime. Aperiam perspiciatis amet labore quam, aliquid a atque, 
                praesentium illum hic et, blanditiis.
          </p>
        </div>
</div>
@endsection

@section('footer')

@endsection