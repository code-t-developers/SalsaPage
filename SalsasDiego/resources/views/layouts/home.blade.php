@extends('index')
@section('content')

<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        @foreach($sliders as $slider)
        <div class="slider-item" style="background-image: url('frontend/images/sliders/{{$slider->slider}}');">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">
                    <div class="col-md-12 ftco-animate text-center">
                        <h1 class="mb-2">{{$slider->descripcion}}</h1>
                        <h2 class="subheading mb-4">Tlacotalpan, Veracruz</h2>
                        <p><a href="#" class="btn btn-primary">Ver Productos</a></p>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row no-gutters ftco-services">
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-shipped"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Envio Gratis</h3>
                        <span>Al ordernar 100 unidades</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-diet"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Producto Casero</h3>
                        <span>Producto elaborado al dia</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-award"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Calidad Garantizada</h3>
                        <span>Todos nuestros productos tienen control de calidad</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services mb-md-0 mb-4">
                    <div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
                        <span class="flaticon-customer-service"></span>
                    </div>
                    <div class="media-body">
                        <h3 class="heading">Contacto</h3>
                        <span>Atencion de 09:00 am - 18:00 pm (Lun-Vier)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <span class="subheading">Catalogo de Productos</span>
                <h2 class="mb-4">Nuestros Productos</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum, laboriosam.</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
        @foreach($salsas as $salsa)
            <div class="col-md-6 col-lg-3 ftco-animate">
                <div class="product">
                    <a href="#" class="img-prod"><img class="img-fluid" src="{{asset('frontend/images/productos/'.$salsa->imagenPequenia)}}"
                            alt="Colorlib Template">
                        <span class="status">30%</span>
                        <div class="overlay"></div>
                    </a>
                    <div class="text py-3 pb-4 px-3 text-center">
                        <h3><a href="#">Salsa: {{$salsa->nombre}}</a></h3>
                        <div class="d-flex">
                            <div class="pricing">
                                <p class="price"><span class="mr-2 price-dc">$120.00</span><span
                                        class="price-sale">{{$salsa->precioUnitario}}</span></p>
                            </div>
                        </div>
                        <div class="bottom-area d-flex px-3">
                            <div class="m-auto d-flex">
                                <a href="{{route('singleSalsa')}}"
                                    class="add-to-cart d-flex justify-content-center align-items-center text-center">
                                    <span><i class="ion-ios-menu"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     @endforeach       
</section>

<section class="ftco-section img" style="background-image: url('frontend/images/recetasMes/{{$recetaMes->imagenGrande}}');">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
                <span class="subheading">Especialidad del mes</span>
                <h2 class="mb-4">Salsa {{$recetaMes->nombre}}</h2>
                <p>Preparación: {{$recetaMes->preparacion}}</p>
                <h3><a href="#">Ingredientes: {{$recetaMes->ingredientes}}</a></h3>
                <span class="price">Precio (Unitario) <a href="#">{{$recetaMes->precioUnitario}}</a></span>
            </div>
        </div>
    </div>
</section>

<hr>

<section class="ftco-section ftco-partner">
    <div class="container">
        <div class="row">
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="{{asset('frontend/images/codet.png')}}" class="img-fluid"
                        alt="Code-T"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="{{asset('frontend/images/codet.png')}}" class="img-fluid"
                        alt="Code-T"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="{{asset('frontend/images/codet.png')}}" class="img-fluid"
                        alt="Code-T"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="{{asset('frontend/images/codet.png')}}" class="img-fluid"
                        alt="Code-T"></a>
            </div>
            <div class="col-sm ftco-animate">
                <a href="#" class="partner"><img src="{{asset('frontend/images/codet.png')}}" class="img-fluid"
                        alt="Code-T"></a>
            </div>
        </div>
    </div>
</section>

@endsection
