@extends('master.front.master')
@section('title')
    Dashboard | Student
@endsection
@section('body')

    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="list-group list-group-flush">
                            <a href="" class="list-group-item bg-dark text-light">My All Course</a>
                            <a href="" class="list-group-item bg-dark text-light">My Profile</a>
                            <a href="" class="list-group-item bg-dark text-light">My Payment</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card bg-dark">
                        <div class="card-header text-light">My All Recent Course</div>
                        <div class="card-body">
                            <p class="text-center text-success"> {{ Session::get('message') }}</p>
                            <table class="table table-bordered table-hover bg-info">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Course Title</th>
                                    <th>Trainer Name</th>
                                    <th>Course Fee</th>
                                    <th>Enroll Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($enrolls as $enroll)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $enroll->subject->title }}</td>
                                    <td>{{ \App\Models\Teacher::find($enroll->subject->teacher_id)->name }}</td>
                                    <td>{{ $enroll->subject->fee }}</td>
                                    <td>{{ $enroll->enroll_status }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
