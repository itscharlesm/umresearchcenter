<section class="hero-section overlay bg-cover" data-background="{{ asset('images/bg.webp') }}">
    <div class="container">
        <div class="hero-slider" style="max-height: 400px; display: flex">
            @foreach ($carousel as $cour)
                <div class="hero-slider-item">
                    <div class="row">
                        <div class="col-md-12">
                            <center>
                                <div class="hero-slider-item"
                                    style="display: flex; justify-content: center; align-items: center; width: 100%; height: 400px;">
                                    <div class="image-container"
                                        style="width: 100%; height: 400px; display: flex; justify-content: center; align-items: center; overflow: hidden;">
                                        <img src="{{ asset('images/carousel/' . $cour->cour_image) }}"
                                            alt="carousel-item-1" class="img-fluid"
                                            style="width: 100%; height: 100%; object-fit: cover;">
                                    </div>
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>