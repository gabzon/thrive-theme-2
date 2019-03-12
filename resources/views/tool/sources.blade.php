<?php
$sources = get_posts( array(
  'post_type'  => 'source',
  'posts_per_page' => -1,
  'post_belongs' => $post->ID,
  'post_status' => 'publish',
  'suppress_filters' => false
));
?>

<div class="row">
  <div class="col-12 col-sm-12 col-md-8 col-lg-8">
    <h4><?php _e('Sources','roots'); ?></h4>
    <hr>
    @if (!empty($sources))
      <div class="list-group">
        @foreach ($sources as $key => $s)
          @include('tool/source-detail')
        @endforeach
      </div>
    @endif
  </div>
  <div class="col-12 col-sm-12 col-md-4 col-lg-4">
    <h4><i class="paste icon"></i> <?php _e('Versions','roots'); ?></h4>
    <hr class="sevinci-hr">
    <ul class="list-group">
      @foreach ($version as $key => $value)
        <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center" target="_blank">
          <div class="d-flex w-100 justify-content-between">
            <small>
              {{ get_the_title() .' ' . $value['tool_version_number']}}
              ({{ $value['tool_version_date'] }})
            </small>
            <a href="{{ wp_get_attachment_url($value['tool_version_file'][0]) }}" target="_blank" class="btn btn-danger btn-sm"><i class="fas fa-file-download"></i></a>
          </div>
        </li>
      @endforeach
    </ul>
  </div>
</div>
