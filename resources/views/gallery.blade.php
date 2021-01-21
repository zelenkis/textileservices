@extends('layouts.app')

@section('title', 'Galerie |')

@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-white d-flex bd-highlight mb-0 sticky-top shadow-lg">
    <a class="logo navbar-brand mr-auto p-1 bd-highlight" href="{{ url('/') }}">
        <img src="img/logo1.png" width="40" height="40" alt="">MV Textile Service</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="p-2 bd-highlight">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav bg-white mr-auto ">

                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}#service" >Servicii</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}#about" >Despre noi</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#ourwork">Galerie</a>
                </li>

                <li class="nav-item active dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        RO
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                        <a class="dropdown-item bg-white" href="#">RU</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#contactus"><button
                            class="contactus-nav nav-item btn btn-info btn-lg rounded-pill">Contact</button></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section>
    <div class="container-fluid" id="ourwork">
        <h1 class="text-center">Galerie</h1>

        <div class="row justify-content-center"> 
            <!-- Gallery: -->
        
            @forelse($images as $image)
        
            <div class="row mx-1 my-1 " data-target="#photomodal" data-toggle="modal">
                <img class="work-img rounded" src="{{ Voyager::image($image->image) }}" data-slide-to="{{$loop->index}}" alt="no photo" data-target="#myCarousel"> 
            </div>
            @empty
            <div class="mybtn d-flex justify-content-center">
                <h2>No photos yet. Stay tuned!</h2>
            </div>
                    
            @endforelse
            <!-- Modal -->
            <div class="modal fade" id="photomodal" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="galleryImg modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content bg-transparent border-0">
                        <!-- <div class="modal-header border-0 align-self-start">
                            <button type="button" class="close btn-light" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div> -->
                            <div class="modal-body">
                                <div id="myCarousel" class="carousel slide carousel-fade" data-interval="false">
                                    <!-- Carousel -->
                                    <div class="carousel-inner" >
                                    
                                    @foreach($images as $image)
                                    
                                        <div class="carousel-item {{ $loop->first ? 'active' : '' }} " >
                                            <img src="{{ Voyager::image($image->image) }}" class="modalImg" alt="no photo #{{$image->id}}">
                                        </div>
                                    @endforeach
                                        
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div> 
{{ $images->links() }}

</section>

@endsection