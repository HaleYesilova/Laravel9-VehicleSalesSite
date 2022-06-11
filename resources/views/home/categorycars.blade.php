@extends('layouts.frontbase')

@section('title', $category->title . ' Cars')

@section('content')
    <div class="breadcrumb-option set-bg" data-setbg="img/breadcrumb-bg.jpg" style="background-image: url(&quot;img/breadcrumb-bg.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Car Listing</h2>
                        <div class="breadcrumb__links">
                            <a href="{{route('home')}}"><i class="fa fa-home"></i> Home</a>
                            <span>{{$category->title}}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="car spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="car__sidebar">
                        <div class="car__search">
                            <h5>Car Search</h5>
                            <form action="#">
                                <input type="text" placeholder="Search...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="car__filter">
                            <h5>Car Filter</h5>
                            <form action="#">
                                <select style="display: none;">
                                    <option data-display="Brand">Select Brand</option>
                                    <option value="">Acura</option>
                                    <option value="">Audi</option>
                                    <option value="">Bentley</option>
                                    &lt;<option value="">BMW</option>
                                    <option value="">Bugatti</option>
                                </select><div class="nice-select" tabindex="0"><span class="current">Brand</span><ul class="list"><li data-value="Select Brand" data-display="Brand" class="option selected">Select Brand</li><li data-value="" class="option">Acura</li><li data-value="" class="option">Audi</li><li data-value="" class="option">Bentley</li><li data-value="" class="option">BMW</li><li data-value="" class="option">Bugatti</li></ul></div>
                                <select style="display: none;">
                                    <option data-display="Model">Select Model</option>
                                    <option value="">Q3</option>
                                    <option value="">A4 </option>
                                    <option value="">AVENTADOR</option>
                                </select><div class="nice-select" tabindex="0"><span class="current">Model</span><ul class="list"><li data-value="Select Model" data-display="Model" class="option selected">Select Model</li><li data-value="" class="option">Q3</li><li data-value="" class="option">A4 </li><li data-value="" class="option">AVENTADOR</li></ul></div>
                                <select style="display: none;">
                                    <option value="">Body Style</option>
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                </select><div class="nice-select" tabindex="0"><span class="current">Body Style</span><ul class="list"><li data-value="" class="option selected">Body Style</li><li data-value="" class="option">Option 1</li><li data-value="" class="option">Option 2</li></ul></div>
                                <select style="display: none;">
                                    <option value="">Condition</option>
                                    <option value="">First Hand</option>
                                    <option value="">Second Hand</option>
                                </select><div class="nice-select" tabindex="0"><span class="current">Condition</span><ul class="list"><li data-value="" class="option selected">Condition</li><li data-value="" class="option">First Hand</li><li data-value="" class="option">Second Hand</li></ul></div>
                                <select style="display: none;">
                                    <option value="">Transmisson</option>
                                    <option value="">Bluetooth</option>
                                    <option value="">WiFi</option>
                                </select><div class="nice-select" tabindex="0"><span class="current">Transmisson</span><ul class="list"><li data-value="" class="option selected">Transmisson</li><li data-value="" class="option">Bluetooth</li><li data-value="" class="option">WiFi</li></ul></div>
                                <select style="display: none;">
                                    <option value="">Mileage</option>
                                    <option value="">27</option>
                                    <option value="">20</option>
                                    <option value="">15</option>
                                    <option value="">10</option>
                                </select><div class="nice-select" tabindex="0"><span class="current">Mileage</span><ul class="list"><li data-value="" class="option selected">Mileage</li><li data-value="" class="option">27</li><li data-value="" class="option">20</li><li data-value="" class="option">15</li><li data-value="" class="option">10</li></ul></div>
                                <select style="display: none;">
                                    <option value="">Engine</option>
                                    <option value="">BS3</option>
                                    <option value="">BS4</option>
                                    <option value="">BS5</option>
                                    <option value="">BS6</option>
                                </select><div class="nice-select" tabindex="0"><span class="current">Engine</span><ul class="list"><li data-value="" class="option selected">Engine</li><li data-value="" class="option">BS3</li><li data-value="" class="option">BS4</li><li data-value="" class="option">BS5</li><li data-value="" class="option">BS6</li></ul></div>
                                <select style="display: none;">
                                    <option value="">Colors</option>
                                    <option value="">Red</option>
                                    <option value="">Blue</option>
                                    <option value="">Black</option>
                                    <option value="">Yellow</option>
                                </select><div class="nice-select" tabindex="0"><span class="current">Colors</span><ul class="list"><li data-value="" class="option selected">Colors</li><li data-value="" class="option">Red</li><li data-value="" class="option">Blue</li><li data-value="" class="option">Black</li><li data-value="" class="option">Yellow</li></ul></div>
                                <div class="filter-price">
                                    <p>Price:</p>
                                    <div class="price-range-wrap">
                                        <div class="filter-price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"><div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 14.9999%; width: 68.3334%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 14.9999%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 83.3333%;"></span></div>
                                        <div class="range-slider">
                                            <div class="price-input">
                                                <input type="text" id="filterAmount">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="car__filter__btn">
                                    <button type="submit" class="site-btn">Reset FIlter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="car__filter__option">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="car__filter__option__item">
                                    <h6>Show On Page</h6>
                                    <select style="display: none;">
                                        <option value="">9 Car</option>
                                        <option value="">15 Car</option>
                                        <option value="">20 Car</option>
                                    </select><div class="nice-select" tabindex="0"><span class="current">9 Car</span><ul class="list"><li data-value="" class="option selected">9 Car</li><li data-value="" class="option">15 Car</li><li data-value="" class="option">20 Car</li></ul></div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="car__filter__option__item car__filter__option__item--right">
                                    <h6>Sort By</h6>
                                    <select style="display: none;">
                                        <option value="">Price: Highest Fist</option>
                                        <option value="">Price: Lowest Fist</option>
                                    </select><div class="nice-select" tabindex="0"><span class="current">Price: Highest Fist</span><ul class="list"><li data-value="" class="option selected">Price: Highest Fist</li><li data-value="" class="option">Price: Lowest Fist</li></ul></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel owl-loaded owl-drag">




                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1040px, 0px, 0px); transition: all 0s ease 0s; width: 4160px;"><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-6.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-3.jpg" alt=""></div><div class="owl-item active" style="width: 520px;"><img src="img/cars/car-1.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-8.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-6.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-3.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-1.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-8.jpg" alt=""></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">2016</div>
                                        <h5><a href="#">Porsche cayenne turbo s</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option">For Rent</span>
                                        <h6>$218<span>/Month</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel owl-loaded owl-drag">




                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1040px, 0px, 0px); transition: all 0s ease 0s; width: 4160px;"><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-6.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-4.jpg" alt=""></div><div class="owl-item active" style="width: 520px;"><img src="img/cars/car-2.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-8.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-6.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-4.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-2.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-8.jpg" alt=""></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">2020</div>
                                        <h5><a href="#">Toyota camry asv50l-jeteku</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option sale">For Sale</span>
                                        <h6>$73,900</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel owl-loaded owl-drag">




                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1040px, 0px, 0px); transition: all 0s ease 0s; width: 4160px;"><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-6.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-5.jpg" alt=""></div><div class="owl-item active" style="width: 520px;"><img src="img/cars/car-3.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-8.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-6.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-5.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-3.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-8.jpg" alt=""></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">2017</div>
                                        <h5><a href="#">Bmw s1000rr 2019 m</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option">For Rent</span>
                                        <h6>$299<span>/Month</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel owl-loaded owl-drag">




                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1040px, 0px, 0px); transition: all 0s ease 0s; width: 4160px;"><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-7.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-2.jpg" alt=""></div><div class="owl-item active" style="width: 520px;"><img src="img/cars/car-5.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-8.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-7.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-2.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-5.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-8.jpg" alt=""></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">2018</div>
                                        <h5><a href="#">Audi q8 2020</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option">For Rent</span>
                                        <h6>$319<span>/Month</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel owl-loaded owl-drag">




                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1040px, 0px, 0px); transition: all 0s ease 0s; width: 4160px;"><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-3.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-1.jpg" alt=""></div><div class="owl-item active" style="width: 520px;"><img src="img/cars/car-6.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-8.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-3.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-1.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-6.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-8.jpg" alt=""></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">2016</div>
                                        <h5><a href="#">Mustang shelby gt500</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option sale">For Sale</span>
                                        <h6>$730,900</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel owl-loaded owl-drag">




                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1040px, 0px, 0px); transition: all 0s ease 0s; width: 4160px;"><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-2.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-1.jpg" alt=""></div><div class="owl-item active" style="width: 520px;"><img src="img/cars/car-4.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-8.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-2.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-1.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-4.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-8.jpg" alt=""></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">2019</div>
                                        <h5><a href="#">Lamborghini huracan evo</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option">For Rent</span>
                                        <h6>$319<span>/Month</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel owl-loaded owl-drag">




                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1040px, 0px, 0px); transition: all 0s ease 0s; width: 4160px;"><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-4.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-1.jpg" alt=""></div><div class="owl-item active" style="width: 520px;"><img src="img/cars/car-7.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-2.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-4.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-1.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-7.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-2.jpg" alt=""></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">2020</div>
                                        <h5><a href="#">Lamborghini huracan evo</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option sale">For Sale</span>
                                        <h6>$120,000</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel owl-loaded owl-drag">




                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1040px, 0px, 0px); transition: all 0s ease 0s; width: 4160px;"><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-5.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-2.jpg" alt=""></div><div class="owl-item active" style="width: 520px;"><img src="img/cars/car-8.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-3.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-5.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-2.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-8.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-3.jpg" alt=""></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">2017</div>
                                        <h5><a href="#">Porsche cayenne turbo s</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option">For Rent</span>
                                        <h6>$319<span>/Month</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="car__item">
                                <div class="car__item__pic__slider owl-carousel owl-loaded owl-drag">




                                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1040px, 0px, 0px); transition: all 0s ease 0s; width: 4160px;"><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-5.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-2.jpg" alt=""></div><div class="owl-item active" style="width: 520px;"><img src="img/cars/car-8.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-3.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-5.jpg" alt=""></div><div class="owl-item" style="width: 520px;"><img src="img/cars/car-2.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-8.jpg" alt=""></div><div class="owl-item cloned" style="width: 520px;"><img src="img/cars/car-3.jpg" alt=""></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
                                <div class="car__item__text">
                                    <div class="car__item__text__inner">
                                        <div class="label-date">2020</div>
                                        <h5><a href="#">Toyota camry asv50l-jeteku</a></h5>
                                        <ul>
                                            <li><span>35,000</span> mi</li>
                                            <li>Auto</li>
                                            <li><span>700</span> hp</li>
                                        </ul>
                                    </div>
                                    <div class="car__item__price">
                                        <span class="car-option sale">For sale</span>
                                        <h6>$73,900</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination__option">
                        <a href="#" class="active">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><span class="arrow_carrot-2right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

