<div id="home">
    <div class="container">
        <div class="home-wrap">
            <div id="home-slick">
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
                <div class="banner banner-2">
                    <img src="{{asset('assets')}}/img/banner02.jpg" alt="">
                    <div class="banner-caption text-center">
                        <h3 class="white-color font-weak">Land,SUV,Pickup</h3>
                    </div>
                </div>
                    <div class="banner banner-3">
                        <img src="{{asset('assets')}}/img/banner03.jpg" alt="">
                        <div class="banner-caption text-center">
                            <h3 class="white-color font-weak">Motorcycles</h3>
                        </div>
                    </div>
            </div>

        </div>
    </div>
</div>
