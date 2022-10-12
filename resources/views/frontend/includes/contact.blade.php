<section id="contact" class="contact sections">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="head_title text-center">
                    <h2>CONTACT US VERY FAST!</h2>
                    <div class="separator"></div>
                </div>

                <div class="row">
                    <div class="contact_contant">
                        <div class="col-sm-6">
                            <div class="single_contant_left">
                                <form action="{{ route('message.store') }}" id="formid" method="POST">
                                    @csrf
                                    <!--<div class="col-lg-8 col-md-8 col-sm-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-1">-->

                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="first name" required="">
                                    </div>

                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                    </div>

                                    <div class="form-group">
                                        <textarea class="form-control" style="color: black" name="message" rows="8" placeholder="Message"></textarea>
                                    </div>

                                    <div class="text-center">
                                        <input type="submit" value="SEND MESSAGE" class="btn btn-primary">
                                    </div>
                                    <!--</div>--> 
                                </form>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="single_message_right">
                                <h4>About Us</h4>
                                <div class="separator4"></div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                    Ut iaculis et eros a porta. Cras lacinia consequat ante et pulvinar. 
                                </p>
                                <p>Morbi efficitur, arcu ut eleifend viverra, est lorem hendrerit arcu, 
                                    vel finibus lectus quam sit amet mauris.</p>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="single_message_right_info">
                                <h4>Info</h4>
                                <div class="separator4"></div>
                                <ul>
                                    <li><a href=""><i class="fa fa-envelope"></i> {{ $contact->email }}</a></li>
                                    <li><a href=""><i class="fa fa-phone"></i> {{ $contact->phone }}</a></li>
                                    <li><a href=""><i class="fa fa-map-marker"></i> {{ $contact->address }}</a></li>
                                    {{-- <li><a href=""><i class="fa fa-fax"></i> (0012) 654 356 445</a></li> --}}
                                </ul>
                            </div>
                        </div>
                    </div> <!-- End of messsage contant-->
                </div>
            </div>
        </div>
    </div>
</section>