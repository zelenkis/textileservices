@extends('layouts.app')

@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-white d-flex bd-highlight mb-0 sticky-top shadow-lg">
    <a class="logo navbar-brand mr-auto p-1 bd-highlight" href="{{ url('/') }}">
        <img src="img/logo1.png" width="40" height="40" alt="">Draperie.MD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="p-2 bd-highlight">
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav bg-white mr-auto ">

                <li class="nav-item active">
                    <a class="nav-link" href="#service" >Servicii</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#about">Despre noi</a>
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
        <!-- INTRO CONTAINER -->

        <div class="card bg-transparent text-white mb-3 ">
            <img src="img/intro1.jpg" style="filter:brightness(83%);" class="intro-img" alt="...">
            <div class="card-img-overlay d-flex align-items-center ">

                <div class="card mb-3 bg-transparent border-0 ">
                    <div class="card-body">
                        <h5 class="intro-title card-text">Pretuim timpul dumneavoastra!</h5>
                        <p class="intro-text card-title">Oferim o gama larga de servicii pentru textil din casa ta sau
                            birou <br> pe intreg teritoriu Republicii Moldova!</p>
                        <a class="intro-btn btn btn-info rounded-pill btn-lg text-uppercase" href="#contactus"
                            role="button">Solicita
                            Consultatie</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- SERVICES SECTION-->
        <section class="services d-flex align-items-center" id="service">
            <div class="container-fluid">
                <h1 class="services-title text-center" >Servicii</h1>
                <div class="row justify-content-around">
                    <!-- CARD DESIGN -->
                    <div class="card border-0" style="width: 16rem; padding-bottom:10px;">
                        <img src="img/design.png" class="card-img-top mx-auto" alt="...">
                        <div class="card-body ">
                            <h5 class="card-title text-center">Design</h5>
                            <p class="card-text text-left">

                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. </li>
                               
                                <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </li>
                            <div class="mybtn d-flex justify-content-center">
                                <button type="button" class="btn btn-outline-info rounded-0" data-toggle="modal"
                                    data-target="#designModal">Detalii</button>
                            </div>
                            </p>
                        </div>

                    </div>

                    <!-- Modal DESIGN-->
                    <div class="modal fade" id="designModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content rounded-0">
                                <div class="modal-header d-flex align-items-center">
                                    <h5 class="service-modal-title modal-title ml-auto " id="exampleModalScrollableTitle">Design
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info rounded-0"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CARD CROITORIE -->

                    <div class="card  border-0" style="width: 16rem; padding-bottom:10px;">
                        <img src="img/sewing-machine.png" class="card-img-top mx-auto" alt="...">
                        <div class="card-body ">
                            <h5 class="card-title text-center">Croitorie</h5>
                            <p class="card-text text-left">

                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. </li>
                                <li> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. </li>
                                <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </li>
                            <div class="mybtn d-flex justify-content-center">
                                <button type="button" class="btn btn-outline-info rounded-0" data-toggle="modal"
                                    data-target="#tailoringModal">Detalii</button>
                            </div>
                            </p>
                        </div>

                    </div>

                    <!-- Modal CROITORIE-->
                    <div class="modal fade" id="tailoringModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content rounded-0">
                                <div class="modal-header d-flex align-items-center">
                                    <h5 class="modal-title service-modal-title ml-auto" id="exampleModalScrollableTitle">Croitorie</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info rounded-0"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CARD MONTARE -->
                    <div class="card  border-0" style="width: 16rem; padding-bottom:10px;">
                        <img src="img/ladder.png" class="card-img-top mx-auto" alt="...">
                        <div class="card-body ">
                            <h5 class="card-title text-center">Montare</h5>
                            <p class="card-text text-left">

                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. </li>
                                <li> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. </li>
                                
                            <div class="mybtn d-flex justify-content-center">
                                <button type="button" class="btn btn-outline-info rounded-0" data-toggle="modal"
                                    data-target="#installModal">Detalii</button>
                            </div>
                            </p>
                        </div>

                    </div>

                    <!-- Modal Montare-->
                    <div class="modal fade" id="installModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content rounded-0">
                                <div class="modal-header d-flex align-items-center">
                                    <h5 class="modal-title service-modal-title ml-auto" id="exampleModalScrollableTitle">Montare</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info rounded-0"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CARD CURATARE -->
                    <div class="card  border-0" style="width: 16rem; padding-bottom:10px;">
                        <img src="img/wash.png" class="card-img-top mx-auto" alt="...">
                        <div class="card-body ">
                            <h5 class="card-title text-center">Curățare</h5>
                            <p class="card-text text-left">

                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. </li>
                                <li> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. </li>
                                <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </li>
                            <div class="mybtn d-flex justify-content-center">
                                <button type="button" class="btn btn-outline-info rounded-0" data-toggle="modal"
                                    data-target="#cleanModal">Detalii</button>
                            </div>
                            </p>
                        </div>

                    </div>

                    <!-- Modal CURATARE-->
                    <div class="modal fade" id="cleanModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content rounded-0">
                                <div class="modal-header d-flex align-items-center">
                                    <h5 class="modal-title service-modal-title ml-auto" id="exampleModalScrollableTitle">Curățare</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info rounded-0"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- Card Restaurare -->
                <div class="card  border-0" style="width: 16rem; padding-bottom:10px;">
                        <img src="img/repair.png" class="card-img-top mx-auto" alt="...">
                        <div class="card-body ">
                            <h5 class="card-title text-center">Restaurare</h5>
                            <p class="card-text text-left">

                                <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. </li>
                                
                                <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                                </li>
                            <div class="mybtn d-flex justify-content-center">
                                <button type="button" class="btn btn-outline-info rounded-0" data-toggle="modal"
                                    data-target="#repairModal">Detalii</button>
                            </div>
                            </p>
                        </div>

                    </div>

                    <!-- Modal RESTAURARE-->
                    <div class="modal fade" id="repairModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content rounded-0">
                                <div class="modal-header d-flex align-items-center">
                                    <h5 class="modal-title service-modal-title ml-auto" id="exampleModalScrollableTitle">Restaurare</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body ">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                                    irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                    deserunt mollit anim id est laborum.
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info rounded-0"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </section>
        <!-- ABOUT -->
        <section class="about-us" id="about">

            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-lg-6">
                        <img src="img/measure.jpg" class="card-img rounded-0" alt="...">
                    </div>
                    <div class="col-lg-6  d-flex align-items-center" style="background-color:#7eaea2">
                        <div class="card-body ">
                            <h1 class="about-us-title">Despre noi</h1>
                            <p class="about-us-text card-text">
                              Draperie.md oferă un spectru larg de servicii de confecționare și îngrijire a textilului din casă sau biroul Dumneavoastră:
                                <ul class="about-us-text"> 
                                    <li>Design clasic sau modern</li>
                                    <li>Cusutul calitativ pe utilaj italian</li>
                                    <li>Curățarea</li>
                                    <li>Reparația și instalarea draperiilor, rulourilor și accesoriilor</li>
                                </ul>
                                                                
                                <p class="about-us-text" >Experiența acumulată pe parcursul a 20 de ani ne ajută să efectuăm lucrările calitativ, rapid și la cele mai avantajoase prețuri. Noi oferim serviciile noastre pe întreg teritoriul Moldovei.</p>
                                
                                <p class="about-us-text">Prețuim timpul și confortul Dumneavoastră!</p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
       
        <!-- GALLERY -->
        <section id="ourwork">
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
         <!-- Button -->
         <div class="mybtn d-flex justify-content-center">
                    <a href="{{ url('/gallery') }}" ><button" class="btn btn-outline-info rounded-0">Mai multe...</button></a>
                </div>
            </div>
    </div> 
              


        </section>

    
@endsection
