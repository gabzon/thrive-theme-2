<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand brand" href="{{ home_url('/') }}">
    <i class="fas fa-toolbox"></i>    
    {{ get_bloginfo('name', 'display') }}
  </a>
  <nav class="nav-primary">
    @if (has_nav_menu('primary_navigation'))
      {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
    @endif
  </nav>
</nav>
