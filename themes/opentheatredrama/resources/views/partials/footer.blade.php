@php
  $logo = get_field('scd_logo','option');
  $copyrightsText = get_field('scd_copyrights_text','option');
  $siteBy = get_field('scd_site_by','option');
  $termsAndConditions = get_field('scd_terms_and_conditions','option');
  $privacyPolicy = get_field('scd_privacy_policy','option');
  $contactNumber = get_field('cd_contact_number','option');
  $email = get_field('cd_email','option');
  $address = get_field('cd_address','option');
  $socialMedia = get_field('cd_social_media','option');
@endphp

<footer class="footer">
  <div class="container">
    <div class="footer-container">
      <div class="footer-top-container row">
        <div class="footer-logo col-12 col-lg-3">
          <div class="footer-logo-wrp">
            @if ($logo)
              <img src="{{ $logo['url'] }}" alt="{{ $logo['title'] }}" />
            @endif
          </div>
        </div>
        <div class="footer-menu col-12 col-lg-6">
          <div class="footer-menu-wrp">
            <div class="footer-menu-item"><a href="#about">About</a></div>
            <div class="footer-menu-item"><a href="#operations">Operations</a></div>
            <div class="footer-menu-item"><a href="#investInBeach">Invest In Beach</a></div>
            <div class="footer-menu-item"><a href="#sustainability">Sustainability</a></div>
          </div>
          {{-- @if ($contactNumber)
            <div>@php echo $contactNumber @endphp</div>
          @endif
          @if ($email)
            <div>@php echo $email @endphp</div>
          @endif
          @if ($address)
            @foreach( $address as $addressItem )
              @php
                $adAddress = $addressItem['address'];
                $adPhone = $addressItem['phone'];
                $adEmail = $addressItem['email'];
              @endphp
              <div class="footer-address-item">
                @if ($adAddress)
                  <p>@php echo $adAddress @endphp</p>
                @endif
                @if ($adPhone)
                  <p>@php echo $adPhone @endphp</p>
                @endif
                @if ($adEmail)
                  <p>@php echo $adEmail @endphp</p>
                @endif
              </div>
            @endforeach
          @endif --}}
        </div>
        <div class="footer-social-media col-12 col-lg-3">
          <div class="footer-social-media-wrp">
            @if ($socialMedia)
              @foreach( $socialMedia as $socialMediaItem )
                @php
                  $smIcon = $socialMediaItem['social_media_icon'];
                  $smLink = $socialMediaItem['social_media_link'];
                @endphp
                <div class="footer-social-media-item">
                  @if ($smLink)
                    <a href="{{ $smLink }}">
                      @if ($smIcon)
                        <img src="{{ $smIcon['url'] }}" alt="{{ $smIcon['title'] }}" />
                      @endif
                    </a>
                  @endif
                </div>
              @endforeach
            @endif
          </div>
        </div>
      </div>
      <hr class="footer-hr">
      <div class="footer-bottom-container row">
        <div class="footer-copyright col-12 col-lg-6">
          @if ($copyrightsText)
            <span class="footer-text">@php echo $copyrightsText @endphp</span>
          @endif
          @if ($privacyPolicy)
            <a class="light" href="{{ $privacyPolicy['url'] }}" target="{{ $privacyPolicy['target'] }}">
              @php echo $privacyPolicy['title'] @endphp
            </a>
          @endif
          @if ($termsAndConditions)
            <a class="light" href="{{ $termsAndConditions['url'] }}" target="{{ $termsAndConditions['target'] }}">
              @php echo $termsAndConditions['title'] @endphp
            </a>
          @endif
        </div>
        <div class="footer-site-details col-12 col-lg-6">
          @if ($siteBy)
            <span class="footer-text">Website by </span>
            <a class="light" href="{{ $siteBy['url'] }}" target="{{ $siteBy['target'] }}">
              @php echo $siteBy['title'] @endphp
            </a>
          @endif
        </div>
      </div>
    </div>
  </div>
</footer>
