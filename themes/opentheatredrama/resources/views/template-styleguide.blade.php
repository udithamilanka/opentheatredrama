{{--
  Template Name: Styleguide Template
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    {{-- @include('partials.page-header')
    @include('partials.content-page') --}}
    <main id="site-content" role="main">
      <div class="container">
          <div class="row">
              <div class="col">
                  <h1>Heading One</h1>
                  <h2>Heading Two</h2>
                  <h3>Heading Three</h3>
                  <h4>Heading Four</h4>
                  <h5>Heading Five</h5>
                  {{-- <h6>Heading Six</h6> --}}
                  <a href="#">Hyperlink Styling</a>
                  <a href="#" class="dark-bg">Hyperlink Styling</a>
                  <p class="success-msg">This is a success message for testing only</p>
                  <p class="error-msg ">This is a error message for testing only</p>
              </div>
          </div>
          {{-- <div class="row">
              <div class="container">
                  <div class="col">
                      <blockquote>
                        Films that aim to show the effects of environmental factors on the development of character through depictions that emphasise the relationship between location and identity… social realism tend to be associated with an observational style of camerawork that emphasises situations and events and an episodic narrative structure, creating ‘kitchen sink’ dramas and ‘gritty’ character studies of the underbelly of urban life.
                      </blockquote>
                  </div>
              </div>
          </div> --}}
          <div class="row">
            <div class="col col-12 col-lg-6">
              <p>Primary Button</p>
              <a href="#22" class="btn btn-primary">Click Here</a>
              <a href="#22" class="btn btn-primary with-icon">Click Here</a>
            </div>
            <div class="col col-12 col-lg-6">
              <p>Secondary Button</p>
              <a href="#22" class="btn btn-secondary">Click Here</a>
              <a href="#22" class="btn btn-secondary with-icon">Click Here</a>
              <div><br><br></div>
            </div>
            <div class="col col-12 col-lg-6">
              <p>Contact Us form Button</p>
              <a href="#22" class="btn nav-btn">Contact</a>
              <div><br><br></div>
            </div>
            <div class="col col-12 col-lg-6">
              <p>Form Button</p>
              <a href="#22" class="btn form-btn">Contact</a>
              <div><br><br></div>
            </div>
            <div class="col col-12 col-lg-6">
              <p>CTA Button</p>
              <a href="#22" class="btn cta-btn">Click Here</a>
              <a href="#22" class="btn cta-btn with-icon">Click Here</a>
              <div><br><br></div>
            </div>
            <div class="col col-12 col-lg-6">
              <p>Read More Button</p>
              <a href="#22" class="btn read-more-btn">Read More</a>
              <a href="#22" class="btn read-more-btn with-icon">Read More</a>
              <div><br><br></div>
            </div>
          </div>
          <div>
            {{-- <div class="col-12 col-lg-6">
              <ul>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</li>
                <li>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</li>
                <li>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet
                  <ul>
                    <li>Lorem ipsum dolor sit amet</li>
                    <li>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</li>
                    <li>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</li>
                  </ul>
                </li>
                <li>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</li>
                <li>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</li>
              </ul>
            </div> --}}
          </div>
          {{-- <div class="row" style="margin-bottom: 30px">
            <form action="">
              <div class="form-row">
                <input type="submit" placeholder="Submit" class="btn-primary">
              </div>
            </form>
          </div> --}}
      </div>
    </main>
  @endwhile
@endsection
