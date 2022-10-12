<section id="team" class="team">
    <div class="container">
        <div class="row">
            <div class="main_team sections">
                <div class="head_title text-center">
                    <h2>OUR TEAM</h2>
                    <div class="separator"></div>
                    <p>Suspendisse ac nulla eros. Vestibulum elementum placerat erat ac maximus. 
                        Aliquam quis nisi quis arcu dapibus ornare. Donec vel ex urna. 
                        Ut in odio ultricies mauris fringilla placerat commodo in augue. </p>

                </div>

                
                <div class="col-sm-12">
                    <div class="row">
                        <div class="main_team_content">
                             
                            <div class="single_team">

                                @foreach ($teams as $key => $team)
                                <div class="col-sm-3 col-xs-6">
                                    <div class="single_item">
                                        <img src="{{ Storage::url($team->image) }}" alt="" />
                                        <div class="single_team_overlay">
                                            <h4>{{ $team->name }}</h4>
                                            <p>{{ $team->designation }}</p>
                                            <div class="team_socail">
                                                <a href="{{ $team->facebook }}" target="_blank"><i class="fa fa-facebook"></i></a>
                                                <a href="{{ $team->twitter }}" target="_blank"><i class="fa fa-twitter"></i></a>
                                                <a href="{{ $team->google_plus }}" target="_blank"><i class="fa fa-google-plus"></i></a>
                                            </div>
                                        </div>
                                    </div> 
                                </div>
                                @if($key == 3)
                            </div>
                            <div class="single_team">
                                @php
                                    $key = 0;
                                @endphp
                                @endif
                                @endforeach 
                                
                            </div>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>