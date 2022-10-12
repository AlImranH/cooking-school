<section id="service" class="service">
    <div class="container">
        <div class="row">
            <div class="service_border_raund text-center"></div>
            <div class="main_service_area sections text-center">
                <div class="head_title text-center">
                    <h2>what we do?</h2>
                    <div class="separator"></div>
                </div>
                @foreach ($services as $service)
                <div class="col-sm-4">
                    <div class="single_service">
                        <div class="single_service_icon">
                            <img src="{{ Storage::url($service->icon) }}" alt="" />
                        </div>

                        <h3>{{ $service->title }}</h3>
                        <p>{{ $service->des}}</p>
                    </div>
                </div>
                @endforeach
                

            </div>
        </div>
    </div>
</section>