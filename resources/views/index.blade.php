@extends('layouts.app')

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
            <div class="card-img-overlay d-flex align-items-center">

                <div class="card mb-3 bg-transparent">
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
                    <div class="card" style="width: 16rem; padding-bottom:10px;">
                        <img src="img/design2.png" class="card-img-top mx-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Design</h5>
                            <p class="card-text text-center ">
                                Some quick example text to build on the card title and make
                                up the bulk of the card's content.</p>

                        </div>
                        <div class="mybtn d-flex justify-content-center">
                            <button type="button" class="btn btn-outline-info rounded-0" data-toggle="modal"
                                data-target="#designModal">Detalii</button>
                        </div>
                    </div>

                    <!-- Modal DESIGN-->
                    <div class="modal fade" id="designModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog modal-dialog-centered " role="document">
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

                    <div class="card" style="width: 16rem; padding-bottom:10px;">
                        <img src="img/noun_Sewing Machine_1310594.png" class="card-img-top mx-auto" alt="...">
                        <div class="card-body ">
                            <h5 class="card-title text-center">Croitorie</h5>
                            <p class="card-text text-center">Some quick example text to build on the card title and make
                                up
                                the bulk of
                                the card's content.</p>

                        </div>
                        <div class="mybtn d-flex justify-content-center">
                            <button type="button" class="btn btn-outline-info rounded-0" data-toggle="modal"
                                data-target="#tailoringModal">Detalii</button>
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
                    <div class="card " style="width: 16rem; padding-bottom:10px;">
                        <img src="img/install2.png" class="card-img-top mx-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Montare</h5>
                            <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>

                        </div>
                        <div class="mybtn d-flex justify-content-center">
                            <button type="button" class="btn btn-outline-info rounded-0" data-toggle="modal"
                                data-target="#installModal">Detalii</button>
                        </div>
                    </div>

                    <!-- Modal MONTAJ-->
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
                    <div class="card " style="width: 16rem; padding-bottom:10px;">
                        <img src="img/wash.png" class="card-img-top mx-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Curatare</h5>
                            <p class="card-text text-center">Some quick example text to build on the card title and make
                                up
                                the bulk of
                                the card's content.</p>

                        </div>
                        <div class="mybtn d-flex justify-content-center">
                            <button type="button" class="btn btn-outline-info rounded-0" data-toggle="modal"
                                data-target="#cleanModal">Detalii</button>
                        </div>
                    </div>

                    <!-- Modal CURATARE-->
                    <div class="modal fade" id="cleanModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content rounded-0">
                                <div class="modal-header d-flex align-items-center">
                                    <h5 class="modal-title service-modal-title ml-auto" id="exampleModalScrollableTitle">Curatare</h5>
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

                    <div class="card " style="width: 16rem; padding-bottom:10px;">
                        <img src="img/repair.png" class="card-img-top mx-auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Restaurare</h5>
                            <p class="card-text text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>

                        </div>
                        <div class="mybtn d-flex justify-content-center">
                            <button type="button" class="btn btn-outline-info rounded-0" data-toggle="modal"
                                data-target="#repairModal">Detalii</button>
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
                            <p class="about-us-text card-text">Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Nulla in eros ut purus accumsan
                                dapibus. Integer et placerat nisi. Aenean eu tempor libero, a molestie ipsum. In posuere
                                arcu ac cursus viverra. Mauris ut tristique nisi. Donec sed sollicitudin libero, ut
                                mollis
                                felis. Cras accumsan ligula dictum mi volutpat porta. Duis at tempor tortor. Nunc vitae
                                efficitur risus. Sed sagittis elit quis mattis maximus.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
       
        <!-- GALLERY -->
        <section id="ourwork">
            <div class="container-fluid" >
                <h1 class="text-center">Galerie</h1>

               
                <div class="mybtn d-flex justify-content-center">
                    <a href="{{ url('/gallery') }}" ><button" class="btn btn-outline-info rounded-0">Mai multe...</button></a>
                </div>
            </div>


        </section>

    
@endsection
