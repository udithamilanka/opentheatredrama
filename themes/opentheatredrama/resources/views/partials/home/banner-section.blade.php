@php
  $layout = get_field('bs_layout');
  $image = get_field('bs_image');
  $title = get_field('bs_title');
  $description = get_field('bs_description');
  $button = get_field('bs_button');
  $videoUrl = get_field('bs_video_url');

  if ($layout) {
    $layoutType = '';
  } else {
    $layoutType = 'has-video';
  }
@endphp

<section id="home-banner-section" class="home-banner-section {{ $layoutType }}" style="background-image: url('{{ $image['url'] }}')">
  <div class="container">
    @if ($layout)
      <div class="banner-image-wrp">
        <div class="row">
          <a class="m-1" href="https://i.imgur.com/Oira0tC.jpg" data-rel="lightcase">
            <button type="button" class="btn btn-primary">Lightcase Modal</button>
          </a>
        </div>
        <div class="row">
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleBootstrapModal">
            Bootstrap Modal
          </button>
        </div>
        @if ($title)
          <div class="row">
            <h1>{{ $title }}</h1>
            <h2 class="blue">{{ $title }}</h2>
            <h2 class="yellow">{{ $title }}</h2>
            <h3>{{ $title }}</h3>
            <h4>{{ $title }}</h4>
            <h5 class="blue">{{ $title }}</h5>
            <h5 class="yellow">{{ $title }}</h5>
          </div>
        @endif
        @if ($description)
          <p>@php echo $description @endphp</p>
        @endif
        @if ($button)
          <div class="row">
            <a class="btn btn-primary" href="{{ $button['url'] }}" target="{{ $button['target'] }}">{{ $button['title'] }}</a>
            <a class="btn btn-primary with-icon" href="{{ $button['url'] }}" target="{{ $button['target'] }}">{{ $button['title'] }}</a>
            <a class="btn btn-secondary" href="{{ $button['url'] }}" target="{{ $button['target'] }}">{{ $button['title'] }}</a>
            <a class="btn nav-btn" href="{{ $button['url'] }}" target="{{ $button['target'] }}">{{ $button['title'] }}</a>
            <a class="btn menu-btn" href="{{ $button['url'] }}" target="{{ $button['target'] }}">{{ $button['title'] }}</a>
            <a class="btn form-btn" href="{{ $button['url'] }}" target="{{ $button['target'] }}">{{ $button['title'] }}</a>
            <a class="btn cta-btn with-icon" href="{{ $button['url'] }}" target="{{ $button['target'] }}">{{ $button['title'] }}</a>
            <a class="btn read-more-btn with-icon" href="{{ $button['url'] }}" target="{{ $button['target'] }}">{{ $button['title'] }}</a>
          </div>
        @endif
        <div class="success-msg">*Thank you for your message, it has been sent</div>
        <div class="error-msg">*Thank you for your message, it has been sent</div>
        <a href="http://smashy.design/">Link Dark Background</a>
        <a class="light" href="http://smashy.design/">Link Light Background</a>
        <form>
          <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" id="inputEmail" placeholder="Enter Email">
          </div>
          <div class="form-group">
            <label for="inputText">Text</label>
            <input type="text" id="inputText" placeholder="Enter Text">
          </div>
          <div class="form-group">
            <label for="formControlSelect">Select</label>
            <select id="formControlSelect">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          <div class="form-group">
            <label for="formControlSelect2">Select 2</label>
            <select id="formControlSelect2" class="select2-wrapper">
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
            </select>
          </div>
          <div class="form-group">
            <label for="formControlTextarea">Textarea</label>
            <textarea id="formControlTextarea"></textarea>
          </div>
          <div class="form-group">
            <label class="checkbox" id="defaultCheck1">Checkbox 1
              <input type="checkbox" for="defaultCheck1">
              <span class="checkmark"></span>
            </label>
            <label class="checkbox" id="defaultCheck2">Checkbox 2
              <input type="checkbox" for="defaultCheck2">
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="form-group">
            <label class="radio" id="defaultRadio1">Radio 1
              <input type="radio" name="radio" for="defaultRadio1">
              <span class="checkmark"></span>
            </label>
            <label class="radio" id="defaultRadio2">Radio 2
              <input type="radio" name="radio" for="defaultRadio2">
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="form-group row">
            <div class="col-sm-4 col-12">
              <button type="submit" class="btn form-btn">Submit</button>
            </div>
            <div class="col-sm-8 col-12">
              <div class="success-msg">*Thank you for your message, it has been sent</div>
              <br>
              <div class="error-msg">*Thank you for your message, it has been sent</div>
            </div>
          </div>
        </form>
      </div>
    @else
      <div class="banner-video-wrp">
        @if ($videoUrl)
          <div class="vimeo-wrapper">
            <iframe src="{{ $videoUrl }}?background=1&autoplay=1&loop=1&byline=0&title=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
          </div>
        @endif
      </div>
    @endif
  </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleBootstrapModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-title-wrp">
        <h5 class="modal-title" id="exampleModalLongTitle">Popup Title</h5>
      </div>
      <div class="modal-body">
        <p>Lorem Ipsum Is Simply Dummy Text Of The Printing And Typesetting Industry. Lorem Ipsum Has Been The Industry's Standard Dummy Text Ever Since The 1500S, When An Unknown Printer Took A Galley Of Type And Scrambled It To Make A Type Specimen Book.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn cta-btn with-icon">CLICK HERE</button>
      </div>
    </div>
  </div>
</div>
