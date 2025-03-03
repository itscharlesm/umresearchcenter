@extends('layouts.themes.main')
@section('content')
    <section class="section bg-grey">
        <div class="container lg-10">
            @include('layouts.partials.alerts')
            <!-- Title -->
            <div class="content-header text-center" data-aos="zoom-in-left" data-aos-duration="1000" data-aos-delay="100"
                data-aos-once="false" style="margin-top: 100px;">
                <x-content-header title="IPO PRESS RELEASE" />
            </div>
            <!-- Breadcrumb -->
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => url('/'), 'active' => false],
                ['label' => 'Publications', 'url' => '#', 'active' => true],
                ['label' => 'IPO', 'url' => '#', 'active' => true],
            ]" />
            <div class="row">
                <!-- Attachments -->
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Stay Updated</h2>
                        @foreach ($ipo_releases as $ipo_release)
                            <br>
                            <div class="card mx-auto" style="max-width: 800px;">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-2">
                                        <img class="rounded-circle" src="{{ asset('images/logo/um-logo.png') }}"
                                            alt="user image" width="40" height="40">
                                        <div class="ml-2">
                                            <span class="font-weight-bold d-block">UM Research and Publication Center</span>
                                            <span
                                                class="text-muted small">{{ \Carbon\Carbon::parse($ipo_release->ipo_date_created)->diffForHumans() }}</span>
                                        </div>
                                    </div>
                                    <br>
                                    <h3 class="timeline-header text-justify">{{ $ipo_release->ipo_title }}</h3>
                                    <div class="timeline-body">
                                        @if ($ipo_release->ipo_image != '')
                                            <div class="thumbnail">
                                                <a href="{{ asset('images/ipo/' . $ipo_release->ipo_image) }}">
                                                    <img src="{{ asset('images/ipo/' . $ipo_release->ipo_image) }}"
                                                        alt="" style="width:100%">
                                                </a>
                                                <hr>
                                                <div class="caption">
                                                    @if (strlen(preg_replace('/\s+/', '', strip_tags($ipo_release->ipo_content))) > 1000)
                                                        <p>{!! substr($ipo_release->ipo_content, 0, 1000) !!}...</p>
                                                    @else
                                                        <p>{!! $ipo_release->ipo_content !!}</p>
                                                    @endif
                                                </div>
                                            </div>
                                        @else
                                            @if (strlen(preg_replace('/\s+/', '', strip_tags($ipo_release->ipo_content))) > 1000)
                                                <p>{!! substr($ipo_release->ipo_content, 0, 1000) !!}...</p>
                                            @else
                                                <p>{!! $ipo_release->ipo_content !!}</p>
                                            @endif
                                        @endif
                                    </div>
                                    @if (strlen(preg_replace('/\s+/', '', strip_tags($ipo_release->ipo_content))) > 1000)
                                        <a class="btn btn-primary" href="javascript:void(0)" data-toggle="modal"
                                            data-target="#ipoModal-{{ $ipo_release->ipo_id }}">
                                            Read More
                                        </a>
                                    @endif
                                </div>
                            </div>
                            <!-- News Modal -->
                            <div class="modal fade" id="ipoModal-{{ $ipo_release->ipo_id }}" tabindex="-1" role="dialog"
                                aria-labelledby="ipoModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ipoModalLabel">Read the Full News</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="d-flex align-items-center mb-2">
                                                <img class="rounded-circle" src="{{ asset('images/logo/um-logo.png') }}"
                                                    alt="user image" width="40" height="40">
                                                <div class="ml-2">
                                                    <span class="font-weight-bold d-block">UM Research and Publication
                                                        Center</span>
                                                    <span
                                                        class="text-muted small">{{ \Carbon\Carbon::parse($ipo_release->ipo_date_created)->diffForHumans() }}</span>
                                                </div>
                                            </div>
                                            <br>
                                            <h3 class="timeline-header text-justify">{{ $ipo_release->ipo_title }}
                                            </h3>
                                            @if ($ipo_release->ipo_image != '')
                                                <div class="text-center">
                                                    <img src="{{ asset('images/ipo/' . $ipo_release->ipo_image) }}"
                                                        class="img-fluid rounded-lg shadow-sm mb-3" alt="News Image"
                                                        style="max-width: 100%; height: auto;">
                                                </div>
                                            @endif
                                            <p>{!! $ipo_release->ipo_content !!}</p>
                                        </div>
                                        <div class="modal-footer justify-content-center bg-light">
                                            <button type="button" class="btn btn-outline-secondary px-4 py-2"
                                                data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection