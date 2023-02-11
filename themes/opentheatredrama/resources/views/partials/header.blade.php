@php
  $logo = get_field('scd_logo','option');
  $logoAlternative = get_field('scd_logo_alternative','option');
@endphp

<header class="header">
  <div class="container">
    <div class="header-container">
      <div class="logo-wrp">
        @if ($logo)
          <img class="default" src="{{ $logo['url'] }}" alt="{{ $logo['title'] }}" />
        @endif
        @if ($logoAlternative)
          <img class="sticky" src="{{ $logoAlternative['url'] }}" alt="{{ $logoAlternative['title'] }}" />
        @endif
      </div>
      <div class="nav-with-button">
        <nav class="nav-primary">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
          @endif
        </nav>
      </div>
    </div>
  </div>
</header>
