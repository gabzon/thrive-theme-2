{{-- https://simplesharebuttons.com/html-share-buttons/ --}}

<?php $time = get_post_meta($post->ID, 'tool_duration_group',true); ?>
<br>
<div class="jumbotron jumbotron-fluid bg-blue">
  <div class="row">
    <div class="col-12 col-sm-5 col-md-5 col-lg-5">
      <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'full' ); ?>
        <div class="ui large image">
          <img src="<?php echo $image[0]; ?>" alt="" class="" />
        </div>
      <?php endif; ?>
    </div>
    <div class="col-12 col-sm-7 col-md-7 col-lg-7">
      <div class="pl-3">
        <h1 class="display-4 white">{!! get_the_title() !!}</h1>
        <p class="lead white pr-4">
          {!! get_the_excerpt() !!}
          <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 white lead">
              <i class="fas fa-stopwatch"></i>
              {{ $time['tool_duration_value'] . ' ' . $time['tool_duration_type'] }}
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 white lead">
              <i class="fas fa-users"></i>
              {{ get_post_meta($post->ID, 'tool_participants',true) }}
            </div>
          </div>
        </p>
        <br>
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-4 mb-3">
            <a href="<?php echo wp_get_attachment_url($last_version['tool_version_file'][0]); ?>" class="btn btn-danger btn-lg no-underline" id="download-tool" target="_blank">
              <i class="fas fa-file-download"></i>
              <?php _e('Download','sage') ?>
            </a>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-8">

            <!-- Facebook -->
            <a href="{{ 'http://www.facebook.com/sharer.php?u=' . get_the_permalink()}}" class="btn-social mh0" target="_blank">
              <span class="fa-stack fa-lg grow">
                <i class="fas fa-circle fa-stack-2x" style="color:#3b5998"></i>
                <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
              </span>
            </a>

            <!-- LinkedIn -->
            <a href="{{ 'http://www.linkedin.com/shareArticle?mini=true&amp;url=' . get_the_permalink() }}" class="btn-social" target="_blank">
              <span class="fa-stack fa-lg grow">
                <i class="fas fa-circle fa-stack-2x" style="color:#55acee"></i>
                <i class="fab fa-linkedin fa-stack-1x fa-inverse"></i>
              </span>
            </a>

            <!-- Google+ -->
            <a href="{{ 'https://plus.google.com/share?url=' . get_the_permalink() }}" class="btn-social mh0" target="_blank">
              <span class="fa-stack fa-lg grow">
                <i class="fas fa-circle fa-stack-2x" style="color:#c02b32"></i>
                <i class="fab fa-google-plus fa-stack-1x fa-inverse"></i>
              </span>
            </a>

            <!-- Twitter -->
            <a href="{{ 'https://twitter.com/share?url=' . get_the_permalink() }}" class="btn-social" target="_blank">
              <span class="fa-stack fa-lg grow">
                <i class="fas fa-circle fa-stack-2x" style="color:#55acee"></i>
                <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
              </span>
            </a>            
            @php
              the_favorites_button($post->ID);
            @endphp
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
