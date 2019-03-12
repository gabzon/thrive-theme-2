{{--
Template Name: Homepage
--}}


@php
// WP_Query arguments
$args = array(
  'post_type'       => array( 'tool' ),
  'orderby'         => 'rand',
  'posts_per_page'  => -1,
);

// The Query
$tools = new WP_Query( $args );
@endphp

@extends('layouts.app')

@section('content')

  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')
    @include('partials.content-page')
  @endwhile

  <div id="toolbox"></div>

  @if ( $tools->have_posts() )
    <div class="card-columns">
      @while ( $tools->have_posts() )
        @php $tools->the_post() @endphp
        <div class="card grow">
          <img src="{{ the_post_thumbnail_url('post-thumbnail')}}" class="card-img-top" alt="..." style="background:lightgrey; min-width:180px;">
          <div class="card-body">
            <h5 class="card-title">{!! get_the_title() !!}</h5>
            <p class="card-text">{{ get_the_excerpt() }}</p>
            <a href="{{ get_the_permalink() }}" class="btn btn-primary">More Info</a>
          </div>
        </div>
      @endwhile
    </div>
  @else
  @endif

  <?php wp_reset_postdata(); ?>

@endsection
