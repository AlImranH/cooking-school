<section id="home" class="home" style="background: url({{ Storage::url((!$images->isEmpty()) ? $images->where('position', 'home')->first()->image: '') }}) no-repeat 100% 100%">
    <div class="overlay">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 ">
                    <div class="main_home_slider">
                        @foreach ($sliders as $slider)
                        <div class="single_home_slider">
                            
                            <div class="main_home wow fadeInUp" data-wow-duration="700ms">
                                <h1>{{ $slider->title }}</h1>
                                <p class="subtitle">{{ $slider->subtitle }}</p>

                                <div class="home_btn">
                                    <a href="" class="btn btn-primary">LEARN MORE</a>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>