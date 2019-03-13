<br>
<footer class="content-info mt-4 py-4 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-4">
        <a class="navbar-brand brand black" href="{{ home_url('/') }}">
          <i class="fas fa-toolbox"></i>
          {{ get_bloginfo('name', 'display') }}
        </a>
        <br>
        <br>
        <?php _e('A business toolbox to help people lead and manage business projects efficiently','sage'); ?>
      </div>
      <div class="col-8">
          @php dynamic_sidebar('sidebar-footer') @endphp
      </div>
    </div>
  </div>
  <br>
</footer>
