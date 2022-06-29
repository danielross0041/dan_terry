<section class="left-main-sidebar">
    <div class="sidebar-head">
        <div class="main-logo">
            <a href="{{ $user->role_id === 1 ? route('dashboard') : 'javascript:void(0)' }}"><img src="{{asset('web/images/logo.png')}}" alt="logo" class="img-fluid" /></a>
        </div>
    </div>
    <div class="left-sidebar-content">
        <button class="product-name-btn">Product Name</button>
        <ul class="product-name-list nav nav-pills" id="pills-tab" role="tablist">
            @foreach($production_schedule as $key => $product)
            <li class="nav-item" role="presentation">
                <button  onclick="fun('{{$key}}')" class="nav-link {{ $key === 0 ? 'active' : '' }}" id="pills-product{{$key}}-tab" data-bs-toggle="pill" data-bs-target="#pills-product{{$key}}" type="button" role="tab" aria-controls="pills-product{{$key}}" aria-selected="true">
                    <i class="fad fa-boxes"></i>
                    <p>Product Name <span>{{$product->product}}</span></p>
                </button>
            </li>
            @endforeach
            
        </ul>

    </div>
    {!! $production_schedule->render('pagination::bootstrap-4') !!}
    <div class="left-sidebar-logout">
        <button class="logout-btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="far fa-power-off"></i> Logout</button>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
    </form>
</section>