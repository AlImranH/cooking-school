<section id="video" class="video" style="background: url({{ Storage::url((!$images->isEmpty()) ? $images->where('position', 'video')->first()->image: '') }}) no-repeat 100% 100%">
    <div class="home-overlay">
        <div class="container">
            <div class="row">
                <div class="main_video_area sections text-center">
                    <div class="head_title">  
                        <i class="fa fa-film"></i>
                        <h4>CHECK OUR VIDEO TUTORIALS</h4>
                    </div>
                    <div class="main_video_content">
                        @foreach ($videos as $video)
                        <div class="col-sm-4">
                            <div class="single_video">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="{{ $video->url }}"></iframe>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                    </div>

                    <div class="portfolio_btn_area">
                        <a href="" class="btn btn-larg">CHECK OUR CHANNEL</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>