<nav class="navbar navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand brand" href="{{ home_url('/') }}">
      <i class="fas fa-toolbox"></i>
      {{ get_bloginfo('name', 'display') }}
    </a>
    <nav class="nav-primary">
      {{-- @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif --}}
    @if (!is_user_logged_in() )
      <a href="{{ get_bloginfo('url') }}/wp-admin"><i class="fas fa-sign-in-alt"></i> Login</a>
    @else
      @if (current_user_can('administrator'))
        <a href="{{ get_bloginfo('url') }}/wp-admin"><i class="fas fa-sign-in-alt"></i> Dashboard</a>
      @endif
    @endif
  </nav>
</div>
</nav>
