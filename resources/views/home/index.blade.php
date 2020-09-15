@extends('layouts.main_layout')

@section('content')

    <div class="container mt-3">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('public/med-1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>Надійнсть</h4>
                        <p>Індивідуальний підхід до кожного клієнта</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('public/med-1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>Вигідні ціни</h4>
                        <p>Гнучка цінова політика та система лояльності для постійних клієнтів</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('public/med-1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>Висока якість послуг</h4>
                        <p>Великий досвід роботи гарантує оперативне надання повного комплексу послуг</p>
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
        <div class="row" style="color: white">
            <div class="col-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusamus accusantium amet animi cumque deleniti earum eius impedit ipsa ipsam laborum, molestiae nobis obcaecati odio perferendis porro possimus provident quaerat quam quas qui, quis quod repellat sed sit veniam, veritatis voluptatum. Delectus dicta facilis magni possimus vero. Amet, corporis repudiandae.</div>
            <div class="col-6">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet asperiores at consectetur corporis culpa debitis deleniti dignissimos doloremque dolorum error esse ex explicabo inventore iste itaque laborum laudantium magnam magni minus modi natus nisi nobis numquam obcaecati officia perspiciatis possimus quaerat quibusdam quos ratione repellendus, rerum sed sint tempore tenetur ullam voluptates! Aliquid libero magni obcaecati quae reprehenderit ullam unde vel velit. Eaque nemo, veniam. Accusamus beatae blanditiis dolor dolores hic neque officia porro, possimus quaerat quam! Ab expedita explicabo fugit id laudantium magnam non numquam, praesentium quos sit vitae?</div>
        </div>
    </div>

@endsection
