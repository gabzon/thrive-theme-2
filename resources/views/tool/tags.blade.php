@php
  $version = get_post_meta($post->ID, 'tool_version_group',true)
@endphp

<section class="tags my-4">
  <div class="row">
    <div class="col-12 col-sm-3 col-md-3 col-lg-3">
      <h4><i class="tags icon"></i> <?php _e('Tags','roots'); ?></h4>
      <hr class="sevinci-hr-dark">
      <?php
      the_tags('','<br>','');
      $tags = get_the_terms($post->ID,'tags');
      if ( $tags && ! is_wp_error( $tags ) ) :
          foreach ( $tags as $t ) {
              echo $t->name . "<br>";
          }
      endif;
      ?>
    </div>
    <div class="col-12 col-sm-3 col-md-3 col-lg-3">
      <h4><i class="smile icon"></i> <?php _e('Attitudes','roots'); ?></h4>
      <hr class="sevinci-hr-dark">
      <?php
      $attitudes = get_the_terms($post->ID,'attitude');
      if ( $attitudes && ! is_wp_error( $attitudes ) ) :
          foreach ( $attitudes as $a ):
              echo $a->name . "<br>";
          endforeach;
      endif;
      ?>
    </div>
    <div class="col-12 col-sm-3 col-md-3 col-lg-3">
      <h4><i class="doctor icon"></i> <?php _e('Used by','roots'); ?></h4>
      <hr class="sevinci-hr-dark">
      <?php
      $roles = get_the_terms($post->ID,'role');
      if ( $roles && ! is_wp_error( $roles ) ) :
          foreach ( $roles as $r ):
              echo $r->name . "<br>";
          endforeach;
      endif;
      ?>
    </div>
    <div class="col-12 col-sm-3 col-md-3 col-lg-3">
      <h4><i class="fa fa-pencil"></i> <?php _e('Resources','roots'); ?></h4>
      <hr>
      <?php
      $resource = get_the_terms($post->ID,'resource');
      if ( $resource && ! is_wp_error( $resource ) ) :
        foreach ( $resource as $r ):
          echo $r->name . "<br>";
        endforeach;
      endif;
      ?>
    </div>
  </div>
</section>
