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
                    <a class="nav-link" href="{{ url('/') }}.#service" >Servicii</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/') }}.#about" >Despre noi</a>
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
        <div class="row justify-content-md-center"> 
        
        @forelse($images as $image)
       
            <!-- Gallery: -->

            <div class="row work-img" id=" mx-auto">
                <div class="col-8 ">
                    <img class="work-img rounded" src="{{ Voyager::image($image->image) }}"  data-toggle="modal" data-slide-to="0" data-target="#photomodal-{{$image->id}}"  alt="no photo">
                </div>
                
            </div>


            <!-- Modal -->
            <div class="modal fade" id="photomodal-{{$image->id}}" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-body">
                        <div id="example" class="carousel" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" >
                                    <img src="{{ Voyager::image($image->image) }}" class="modal-img rounded" alt="no photo">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#example" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#example" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
             @empty
            <div class="mybtn d-flex justify-content-center">
                <h2>No photos yet. Stay tuned!</h2>
            </div>
                
        @endforelse

        </div>
    

{{ $images->links() }}
   
</section>

@endsection