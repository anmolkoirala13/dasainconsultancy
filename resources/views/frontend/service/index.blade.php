@extends('frontend.layouts.master')
@section('title') {{ $page_title }} @endsection

@section('content')

    @include($module.'includes.breadcrumb',['breadcrumb_image'=>'image-2.png'])

    <section class="services-page">
        <div class="container">
            <div class="row">
                @foreach( $data['rows']  as $index=>$row)
                      <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="{{$index+1}}00ms">
                        <div class="portfolio-one__single">
                            <div class="portfolio-one__img-box">
                                <div class="portfolio-one__img">
                                    <img class="lazy" data-src="{{ asset(thumbnailImagePath($row->image)) }}" alt="">
                                </div>
                                <div class="portfolio-one__content">
                                    {{--                                        <p class="portfolio-one__sub-title">Business Audit</p>--}}
                                    <h3 class="portfolio-one__title">
                                        <a href="{{ route('frontend.service.show', $row->key) }}">{{ $row->title ?? '' }}</a></h3>
                                </div>
                                <div class="portfolio-one__arrow">
                                    <a href="{{ route('frontend.service.show', $row->key) }}" class=""><span
                                            class="icon-top-right-1"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="portfolio-page__pagination">
                    {{ $data['rows']->links('vendor.pagination.default') }}
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{asset('assets/common/lazyload.js')}}"></script>
@endsection
