@extends('layouts.main_layout')

@section('content')

    <div class="container mt-3">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner rounded">
                <div class="carousel-item active">
                    <img src="{{ asset('public/images/med-1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Прекрасний сервіс</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('public/images/med-1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Вигідні ціни</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('public/images/med-1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>Висока якість послуг</h3>
                    </div>
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
    </div>

    <div class="container mt-3">
        <div class="card text-center">
            <div class="card-header border-warning">
                Featured
            </div>
            <div class="card-body">
                <h5 class="card-title">Специальный заголовок</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Переход куда-нибудь</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Специальный заголовок</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Переход куда-нибудь</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Специальный заголовок</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <a href="#" class="btn btn-primary">Переход куда-нибудь</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="card">
            <div class="card-header border-warning">
                Відгуки клієнтів
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 justify-">
                        <div class="card border-warning mb-3">
                            <div class="card-body">
                                <div class="media">
                                    <img src="{{ asset('public/images/man.jpg') }}" style="width: 64px" class="mr-3 people-img" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Media heading</h5>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="card border-warning mb-3">
                            <div class="card-body">
                                <div class="media">
                                    <img src="{{ asset('public/images/man.jpg') }}" style="width: 64px" class="mr-3" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Media heading</h5>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="card border-warning mb-3">
                            <div class="card-body">
                                <div class="media">
                                    <img src="{{ asset('public/images/man.jpg') }}" style="width: 64px" class="mr-3" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Media heading</h5>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ">
                        <div class="card border-warning mb-3">
                            <div class="card-body">
                                <div class="media">
                                    <img src="{{ asset('public/images/man.jpg') }}" style="width: 64px" class="mr-3" alt="...">
                                    <div class="media-body">
                                        <h5 class="mt-0">Media heading</h5>
                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
