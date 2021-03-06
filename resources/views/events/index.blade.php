@extends('layouts.app')

@section('content')
<div class="divider col-sm-12 col-xs-12 col-md-12">
    <div class="header-text"> Our <span>Events</span></div>
</div>

<div id="exTab2" class="col-md-8 col-lg-7 col-lg-offset-1 col-md-offset-1">
    @include('inc.messages')
  <ul class="nav nav-tabs">
        <li class="active">
          <a  href="#1" data-toggle="tab">Overview</a>
        </li>
        <li><a href="#2" data-toggle="tab">Recent Event</a>
        </li>
        <li><a href="#3" data-toggle="tab">Upcoming Event</a>
        </li>
    </ul>
    @if(!Auth::guest())
    <a href="/events/create" class="btn btn-success pull-right"> Create Event</a>
    @endif
    <div class="tab-content ">
      
      <div class="tab-pane active" id="1">
          @if(count($events)> 0)
          @foreach($events as $event)
        <div class="blog-event">
          <div class="featured-img">
            <img src="/storage/event_images/{{$event->cover_image}}" width="150" alt="">
          </div>
          <div class="featured-blog">
                <a href="events/{{$event->id}}"> <h3>{{$event->title}}</h3></a>
              <p><b>{{$event->start}} to {{$event->end}}</b></p>
              <p>{{$event->description}}</p>
              <a href="events/{{$event->id}}"><button class="button-info">Read More</button></a>
              @if(!Auth::guest())
              <a href="events/{{$event->id}}/edit"><button class="button-info">Edit</button></a>
         @endif
            </div>
        </div>
        @endforeach
        @else
    <h2>No Events</h2>
    @endif
      </div>
      <div class="tab-pane" id="2">
        <div class="blog-event">
            <div class="featured-img">
              <img src="images/clients/2.jpg" width="150" alt="">
            </div>
            <div class="featured-blog">
                <h3>Standard tab panel created on bootstrap using nav-tabs</h3>
                <p> From talks to charity drives to community service, this is where you can find out what’s going on, and sign up!</p>
                <button class="button-info">Read More</button>
                <button class="button-info">Register Now</button>
            </div>
        </div>
        <div class="blog-event">
          <div class="featured-img">
              <img src="images/clients/2.jpg" width="150" alt="">
          </div>
          <div class="featured-blog">
              <h3>Standard tab panel created on bootstrap using nav-tabs</h3>
              <p> From talks to charity drives to community service, this is where you can find out what’s going on, and sign up!</p>

              <button class="button-info">Read More</button>
              <button class="button-info">Register Now</button>
          </div>
        </div>
        <div class="blog-event">
          <div class="featured-img">
            <img src="images/clients/3.jpg" width="150" alt="">
          </div>
          <div class="featured-blog">
            <h3>Standard tab panel created on bootstrap using nav-tabs</h3>
            <p> From talks to charity drives to community service, this is where you can find out what’s going on, and sign up!</p>
            <button class="button-info">Read More</button>
            <button class="button-info">Register Now</button>
          </div>
        </div>
          <div class="blog-event">
        <div class="featured-img">
          <img src="images/clients/3.jpg" width="150" alt="">
        </div>
      <div class="featured-blog">
          <h3>Standard tab panel created on bootstrap using nav-tabs</h3>
          <p> From talks to charity drives to community service, this is where you can find out what’s going on, and sign up!</p>
          <button class="button-info">Read More</button>
          <button class="button-info">Register Now</button>
      </div>
    </div>
        <div class="blog-event">
      <div class="featured-img">
          <img src="images/clients/3.jpg" width="150" alt="">
      </div>
      <div class="featured-blog">
          <h3>Standard tab panel created on bootstrap using nav-tabs</h3>
          <p> From talks to charity drives to community service, this is where you can find out what’s going on, and sign up!</p>
          <button class="button-info">Read More</button>
          <button class="button-info">Register Now</button>
      </div>
        </div>
        </div>
        <div class="tab-pane" id="3">
          <div class="blog-event">
              <div class="featured-img">
                  <img src="images/clients/2.jpg" width="150" alt="">
              </div>
              <div class="featured-blog">
                  <h3>Standard tab panel created on bootstrap using nav-tabs</h3>
                  <p> From talks to charity drives to community service, this is where you can find out what’s going on, and sign up!</p>
                  <button class="button-info">Read More</button>
                  <button class="button-info">Register Now</button>
              </div>
                </div>
                <div class="blog-event">
                  <div class="featured-img">
                      <img src="images/clients/2.jpg" width="150" alt="">
                  </div>
                  <div class="featured-blog">
                      <h3>Standard tab panel created on bootstrap using nav-tabs</h3>
                      <p> From talks to charity drives to community service, this is where you can find out what’s going on, and sign up!</p>

                      <button class="button-info">Read More</button>
                      <button class="button-info">Register Now</button>
                  </div>
                </div>
                <div class="blog-event">
              <div class="featured-img">
                  <img src="images/clients/3.jpg" width="150" alt="">
              </div>
              <div class="featured-blog">
                  <h3>Standard tab panel created on bootstrap using nav-tabs</h3>
                  <p> From talks to charity drives to community service, this is where you can find out what’s going on, and sign up!</p>
                  <button class="button-info">Read More</button>
                  <button class="button-info">Register Now</button>
              </div>
                </div>
                <div class="blog-event">
              <div class="featured-img">
                  <img src="images/clients/3.jpg" width="150" alt="">
              </div>
              <div class="featured-blog">
                  <h3>Standard tab panel created on bootstrap using nav-tabs</h3>
                  <p> From talks to charity drives to community service, this is where you can find out what’s going on, and sign up!</p>
                  <button class="button-info">Read More</button>
                  <button class="button-info">Register Now</button>
              </div>
                </div>
                <div class="blog-event">
              <div class="featured-img">
                  <img src="images/clients/3.jpg" width="150" alt="">
              </div>
              <div class="featured-blog">
                  <h3>Standard tab panel created on bootstrap using nav-tabs</h3>
                  <p> From talks to charity drives to community service, this is where you can find out what’s going on, and sign up!</p>
                  <button class="button-info">Read More</button>
                  <button class="button-info">Register Now</button>
              </div>
                </div>
            </div>
          </div>
        </div>
    <div id="sidebar" class="col-md-3 col-lg-3">
        <img src="images/child.png" width="100%">
        <h4><a href="#">Enrichment Camps</a></h4>
          <p>Nam consequat lacus purus, ac hendrerit ipsum pellentesque ut. Mauris orci ante, sodales ut lorem sed, semper aliquam diam. Sit amet tellus velit.</p>
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
          <span class="sr-only">60% Complete</span>
        </div>
      </div>
        <img src="images/child2.jpg" width="100%">
        <h4><a href="#">Family Engagement</a></h4>
          <p>Nam consequat lacus purus, ac hendrerit ipsum pellentesque ut. Mauris orci ante, sodales ut lorem sed, semper aliquam diam. Sit amet tellus velit.</p>
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
          <span class="sr-only">60% Complete</span>
        </div>
      </div>
      <img src="images/child2.jpg" width="100%">
        <h4><a href="#">Enrichment Camps</a></h4>
          <p>Nam consequat lacus purus, ac hendrerit ipsum pellentesque ut. Mauris orci ante, sodales ut lorem sed, semper aliquam diam. Sit amet tellus velit.</p>
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
          <span class="sr-only">60% Complete</span>
        </div>
      </div>
    </div>


@endsection