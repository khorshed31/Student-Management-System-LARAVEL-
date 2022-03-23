@extends('master.front.master')

@section('title')
    Course Detail Page
@endsection

@section('body')
    <section class="py-5">
        <div class="container">
            <div class="col-12">
                <p class="text-center text-success"> {{ Session::get('message') }}</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-body bg-info">
                        <img src="{{ asset($subject->image) }}" alt="" class="w-100"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card card-body bg-dark text-white">
                        <h1>{{ $subject->title }}</h1>
                        <p>Course Fee : {{ $subject->fee }}tk</p>
                        <hr/>
                        <h3>Trainer Name: <span class="text-info">{{ $subject->teacher->name }}</span></h3>
                        <div><img src="{{ asset($subject->teacher->image) }}" alt="" width="25%"></div>
                        <hr/>
                        <div>{!! $subject->short_description !!}</div>
                        <a href="{{ route('enroll-now',['id' => $subject->id]) }}" class="btn btn-info mx-auto {{ $check == true ? 'disabled btn-danger' : '' }}">{{ $check == true ? 'Already Enrolled' : 'Enroll Now' }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="card card-body rounded-0 bg-info">
                        <h1>Course Module Detail</h1>
                        <hr/>
                        {!! $subject->long_description !!}
                        <hr/>
                        <a href="" class="btn btn-dark w-25 mx-auto">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
