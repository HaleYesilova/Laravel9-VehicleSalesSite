<div class="col-lg-12 col-md-12 col-sm-12 mix sale">
    <div class="car__item">
        <div class="car__item__pic__slider owl-carousel">
            @foreach($sliderdata as $rs)
                <div class="banner banner-1">
                    <img src="{{Storage::url($rs->image)}}" style="width: 1200px; height: 675px">
                    <div class="banner-caption text-center">
                        <h1>{{$rs->title}}</h1>
                        <h3 class="white-color font-weak"></h3>
                        <button class="primary-btn">Shop Now</button>
                    </div>
                </div>
            @endforeach
                @foreach($sliderdata as $rs)
                <div class="banner banner-2">
                    <img src="{{Storage::url($rs->image)}}" style="width: 1200px; height: 675px">
                    <div class="banner-caption text-center">
                        <h3 class="white-color font-weak"></h3>
                        <button class="primary-btn">Shop Now</button>
                        <h3 class="white-color font-weak">Land,SUV,Pickup</h3>
                    </div>
                </div>
                @endforeach
    </div>
</div>
</div>
