@extends('layouts.app')
@section('css')

@endsection

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
          <h1 class="display-4">Fluid jumbotron</h1>
          <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        </div>
</div>
@endsection

@section('footer')
<footer>
    <p class='text-center'> @copyright Sugeng Kurniawan </p>
</footer>
@endsection