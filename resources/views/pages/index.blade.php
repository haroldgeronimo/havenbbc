@extends('layouts.app') @section('content')
<section>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="/storage/img/slide3.jpg" alt="">
                <div class="carousel-caption">
                    Make Donation
                </div>
            </div>
            <div class="item">
                <img src="/storage/img/slide2.jpg" alt="">
                <div class="carousel-caption">
                    Be a Donator
                </div>
            </div>
            <div class="item">
                <img src="/storage/img/slide1.jpg" alt="">
                <div class="carousel-caption">
                    Be a volunteer
                </div>
            </div>
            <div class="item">
                <img src="/storage/img/dof2.jpg" alt="">
                <div class="carousel-caption">
                    Hayaan mo Sila
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
<!-- Welcome Message -->
<section>
    <div class="container header-start text-center">
        <div class="heading-icon">
            <i class="fa fa-3x fa-home"></i>
        </div>
        <h1 class="main-text">Welcome to Haven Bible Baptist Church!</h1>
        <p class="text-center sub-text">
            <em class="first-line">Still preaching the old-time gospel and singing the old-time Hymns You are cordially invited to step back in
                time to visit a church that is still preaching the old-time Gospel as it applies to life in today's world.
                </em>
        </p>
        <ul class="list-unstyled list-inline">
            <li>
                <a class="btn btn-primary btn-xl btn-block">History</a>
            </li>
            <li>
                <a class="btn btn-primary btn-xl btn-block">Salvation</a>
            </li>
        </ul>

    </div>

</section>
<!-- Service Times -->
<section>

    <div class="divider col-sm-12 col-xs-12 col-md-12">
        <div class="header-text">
            <span>Service</span> Times
        </div>
    </div>

    <div class="container">
        <h2>Sunday School</h2>
        <table class="table">
            <tr>
                <th>Level</th>
                <th>Time</th>
            </tr>
            <tr>
                <td>All levels</td>
                <td>9:00 AM - 10:00 AM</td>
            </tr>
        </table>
        <h2>Worship Services</h2>
        <table class="table">
            <tr>
                <th>Service</th>
                <th>Time</th>
            </tr>
            <tr>
                <td>Sunday Morning Worship Service</td>
                <td>10:00 AM - 12:00 NN</td>
            </tr>
            <tr>
                <td>Sunday Afternoon Worship Service</td>
                <td>2:00 PM - 4:00 PM</td>
            </tr>
        </table>
        <h2>Prayer Meeting</h2>
        <table class="table">
            <tr>
                <th>Service</th>
                <th>Time</th>
            </tr>
            <tr>
                <td>Wednesday Prayer Meeting</td>
                <td>6:00 PM - 8:00 PM</td>
            </tr>
        </table>


    </div>
</section>
<!-- Events -->
<section>
    <div class="divider col-sm-12 col-xs-12 col-md-12">
        <div class="header-text">
            <span>Events</span> & News</div>
    </div>
    <div class="item col-md-4">
        <div class="blok-read-sm">
            <a href="single1.html" class="hover-image">
                <img src="/storage/img/sea.jpg" alt="image">
                <span class="layer-block"></span>
            </a>
            <div class="content-block">
                <span class="point-caption bg-blue-point"></span>
                <span class="bottom-line bg-blue-point"></span>
                <h4>Discovering OM: A visit back to The Vedas</h4>
                <p>Gregor then turned to look out the window at the dull weather. Drops of rain could pane,which made..</p>
                <a href=""><div class="button-main bg-fio-point">read more</div></a>
               
            </div>
        </div>
    </div>
    <div class="item col-md-4">
        <div class="blok-read-sm">
            <a href="single1.html" class="hover-image">
                <img src="/storage/img/sea.jpg" alt="image">
                <span class="layer-block"></span>
            </a>
            <div class="content-block">
                <span class="point-caption bg-blue-point"></span>
                <span class="bottom-line bg-blue-point"></span>
                <h4>Discovering OM: A visit back to The Vedas</h4>
                <p>Gregor then turned to look out the window at the dull weather. Drops of rain could pane,which made..</p>
                <a href=""><div class="button-main bg-fio-point">read more</div></a>
               
            </div>
        </div>
    </div>
    <div class="item col-md-4">
        <div class="blok-read-sm">
            <a href="single1.html" class="hover-image">
                <img src="/storage/img/sea.jpg" alt="image">
                <span class="layer-block"></span>
            </a>
            <div class="content-block">
                <span class="point-caption bg-blue-point"></span>
                <span class="bottom-line bg-blue-point"></span>
                <h4>Discovering OM: A visit back to The Vedas</h4>
                <p>Gregor then turned to look out the window at the dull weather. Drops of rain could pane,which made..</p>
                <a href=""><div class="button-main bg-fio-point">read more</div></a>
               
            </div>
        </div>
    </div>
  
    <div class="container content-block text-center">
        <ul class="list-unstyled list-inline">
            <li>
                    <a href=""><div class="button-main bg-fio-point"><b>See All</b></div></a>
            </li>
        </ul>
        <h1>No Upcoming Event</h1>
    </div>
</section>
<!--Testimony-->
<section class="testimonial">
    <div class="divider col-sm-12 col-xs-12 col-md-12">
        <div class="header-text">Our
            <span>Testimonials</span>
        </div>
    </div>
    <div class="col-md-7 testimonial-blog">
        <div id="wrapper">
            <!-- DEMO -->
            <div class="testimonials-slider">
                <div class="slide">
                    <div class="testimonials-carousel-thumbnail">
                        <img width="120" alt="" src="/storage/images/team1.jpg">
                    </div>
                    <div class="testimonials-carousel-context">
                        <div class="testimonials-name">
                            Rub elvi
                            <span>shuvohabib.com</span>
                        </div>
                        <div class="testimonials-carousel-content">
                            <p>Sed posuere consectetur est at lobortis. Fusce dapibus, tellus ac cursus commodo.Cras mattis
                                consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis. Fusce dapibus,
                                tellus ac cursus commodo.</p>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="testimonials-carousel-thumbnail">
                        <img width="120" alt="" src="/storage/images/team2.jpg">
                    </div>
                    <div class="testimonials-carousel-context">
                        <div class="testimonials-name">Jewel Jahan
                            <span>technextit.com</span>
                        </div>
                        <div class="testimonials-carousel-content">
                            <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis. Fusce
                                dapibus, tellus ac cursus commodo.</p>
                        </div>
                    </div>
                </div>

                <div class="slide">
                    <div class="testimonials-carousel-thumbnail">
                        <img width="120" alt="" src="/storage/images/team3.jpg">
                    </div>
                    <div class="testimonials-carousel-context">
                        <div class="testimonials-name">Mark Zuckerberg
                            <span>www.Facebook.com</span>
                        </div>
                        <div class="testimonials-carousel-content">
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page
                                when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                                normal..
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END DEMO -->
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="col-md-4 subscribe-form">
        <div class="subscribe">
            <h4>Subscribe to Newsletter</h4>
            <div class="email-field">
                <form action="http://demo.nrgthemes.com/">
                    <div class="email-input">
                        <input type="email" placeholder="Enter your email..." required>
                        <i class="fa fa-check col-green"></i>
                    </div>
                    <button type="submit" class="button-main bg-green">Submit</button>
                </form>
                <span>We never spam :)</span>
            </div>
        </div>
    </div>
</section>


@endsection