@extends('web.layouts.main')
@section('content')

@include('web.layouts.sidebar')
<main>
    <section class="home-main-sec">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="product-details-inner">
                        <div class="tab-content" id="pills-tabContent">
                            @foreach($production_schedule as $key => $product)
                            <div class="tab-pane fade {{ $key === 0 ? 'show active' : '' }} " id="pills-product{{$key}}" role="tabpanel" aria-labelledby="pills-product{{$key}}-tab">
                                <h2>Product Name <span>{{$product->product}}</span></h2>
                                <img src="{{asset('web/images/code.png')}}" alt="qr" class="img-fluid" />
                                <button class="scan-btn"><i class="far fa-barcode-read"></i> Scan Products</button>
                                <p>Product Details <span>{{$product->mrp}} , {{$product->quantity}}</span></p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@include('web.layouts.right-sidebar')
@endsection
