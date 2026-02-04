@extends('_layouts.master')

@section('page_title', 'Testimonials')

@section('content')
    <section class="section-3 testimonials-home-b-section">
        <div class="w-layout-blockcontainer main-container-5 w-clearfix w-container">
            <a href="/" class="link-block w-inline-block" style="position:sticky;top:100px;right:48px;z-index:9">
                <div class="icon-closelarge w-embed">
                    <svg viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                         fill="#5a5d5d" stroke-width="2" class="remixicon ">
                        <path d="M10.5859 12L2.79297 4.20706L4.20718 2.79285L12.0001 10.5857L19.793 2.79285L21.2072 4.20706L13.4143 12L21.2072 19.7928L19.793 21.2071L12.0001 13.4142L4.20718 21.2071L2.79297 19.7928L10.5859 12Z"></path>
                    </svg>
                </div>
            </a>
            <div class="headline-testimonial-home-b">
                <div class="label-master bg-2">
                    <div class="label-small">Kind words</div>
                </div>
                <div animate="title" data-w-id="1be4b338-9913-d48e-9180-0fa3042676c2"
                     style="opacity:0;filter:blur(20px)" class="text-h2">What they say about me...
                </div>
            </div>
            <div class="columns w-row">
                @foreach($testimonials->split(3) as $testimonyGroup)
                    <div class="column{{ $loop->first ? '' : '-' . $loop->iteration }} w-col w-col-4">
                        @foreach($testimonyGroup as $testimony)
                            <div class="card-testimonial-home-b">
                                <div class="author-wrap-home home-b">
                                    <div class="avatar-testimonial-home-b">
                                        <img loading="lazy"
                                             src="/assets/images/front3.webp" alt=""
                                             class="image-cover">
                                    </div>
                                    <div class="author-tile-testimonial">
                                        <div class="text-bold">
                                            {{ $testimony['name'] }}
                                        </div>
                                        <div>
                                            {{ $testimony['title'] }}
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-tile-testimonial-home-b">
                                    <div>
                                        {!! nl2br($testimony['testimonial']) !!}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
            <a href="/" class="cta-main bg-2 w-inline-block">
                <div button-text="" class="button-text-mask">
                    <div class="button-text _1">Back To Home</div>
                    <div class="button-text _2">Back To Home</div>
                </div>
                <div button-bg="" class="button-bg bg-2"></div>
            </a>
            <div class="w-slider-mask">
                <div class="w-slide"></div>
            </div>
            <div class="hidden w-slider-arrow-left">
                <div class="icon-slider w-embed">
                    <svg width="100%" height="100%" viewbox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.66797 2L1.66797 10L9.66797 18" stroke="currentColor" stroke-width="1.5"
                              stroke-linecap="square"></path>
                    </svg>
                </div>
            </div>
            <div class="hidden w-slider-arrow-right">
                <div class="icon-slider next w-embed">
                    <svg width="100%" height="100%" viewbox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1.33203 18L9.33203 10L1.33203 2" stroke="currentColor" stroke-width="1.5"
                              stroke-linecap="square"></path>
                    </svg>
                </div>
            </div>
            <div class="slider-navigation-hidden w-slider-nav"></div>
        </div>
    </section>
@endsection
