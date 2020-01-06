@extends('index')
@section('content')
<div class="hero-wrap hero-bread" style="background-image: url('frontend/images/CB2.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{route('home')}}">Inicio</a></span> <span>Nosotros</span></p>
                <h1 class="mb-0 bread">Sobre Nosotros</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
    <div class="container">
        <div class="row">


            <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                style="background-image: url(frontend/images/salsadiego.jpg);">
                <!--
                <a href="https://vimeo.com/45830194"
                    class="icon popup-vimeo d-flex justify-content-center align-items-center">
                    <span class="icon-play"></span>
                </a>
                -->
            </div>
            <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
                <div class="heading-section-bold mb-4 mt-md-5">
                    <div class="ml-md-0">
                        <h2 class="mb-4">Salsas Diego</h2>
                    </div>
                </div>
                <div class="pb-md-5">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis quidem nobis facilis? Ullam, accusamus dolorem harum illum maiores voluptatibus veritatis.</p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium hic officiis dignissimos excepturi vitae aliquid reprehenderit id earum nam. Unde, ipsam minima? Nostrum aspernatur ullam eos excepturi illum obcaecati autem!</p>
                    <p><a href="#" class="btn btn-primary">Contactanos</a></p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(frontend/images/CB4.jpg);">
    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-5 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="250">0</strong>
                                <span>Clientes Satisfechos</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="100">0</strong>
                                <span>Salsas</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 text-center">
                            <div class="text">
                                <strong class="number" data-number="150">0</strong>
                                <span>Envios</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
