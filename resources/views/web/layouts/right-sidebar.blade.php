<section class="right-main-sidebar">
    <div class="sidebar-head">
        <div class="bell-right-area">
            <div class="notification-alert">
                <button class="bell-btn"><i class="fas fa-bell"></i></button>
                <div class="red-notification"></div>
            </div>
            <div class="profile-notification">
                <img src="{{asset('web/images/profile-thumb.png')}}" alt="thumb-profile" class="img-fluid" />
                <div class="notification-name">
                    <h4>{{$user->name}}</h4>
                    <i class="far fa-angle-down"></i>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Production</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="right-sidebar-content">
        <button class="batch-name-btn">Batch # Start Time & Date</button>
        <ul class="batch-time-list">
            @foreach($production_schedule as $key => $product)
                <li class="batch-list" style="{{ $key === 0 ? '' : 'display:none;' }}" id="right-pills-product{{$key}}">
                    <ul>
                        @foreach($product->time as $k => $time)
                        <li>
                            <p>Batch Start <span>{{date('d-m-Y', strtotime($time->start_date))}}</span></p>
                            ------
                            <p>Batch End <span>{{date('d-m-Y', strtotime($time->finish_date))}}</span></p>
                        </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
</section>