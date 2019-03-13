{{--
Template Name: Homepage
--}}


@extends('layouts.full-width')

@section('content')
  <div class="jumbotron text-center" id="landing-search">
    <h1 class="display-4 white">INNOVATION TOOLBOX</h1>
    <p class="lead">Business tools for today's challenges</p>
    <div class="row justify-content-center">
      <div class="col-8">
        <form role="search" method="get" class="form-group has-search" action="<?= esc_url(home_url('/')); ?>">
          <input type="search" name="s" class="form-control search-field" placeholder="Search" value="<?= get_search_query(); ?>">
        </form>
      </div>
    </div>
  </div>

  <div class="container">
    @while(have_posts()) @php the_post() @endphp
      {{-- @include('partials.page-header') --}}
      @include('partials.content-page')
    @endwhile

    <section class="toolbox my-4 py-4">
      <div id="toolbox"></div>
    </section>

    {{-- @include('tool.toolbox') --}}
  </div>

@endsection
