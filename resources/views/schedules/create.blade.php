@extends('layout.app')
@section('title', 'Users | FO - Food Ordering System')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="d-flex align-items-center">
            <div class="me-auto">
                <h4 class="page-title">Restaurant Schedule</h4>
                <div class="d-inline-block align-items-center">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                            <li class="breadcrumb-item" aria-current="page">Restaurant Schedule</li>
                            <li class="breadcrumb-item active" aria-current="page">Update Schedule</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <!-- Basic Forms -->
                <div class="box">
                    <div class="box-body">
                        <div class="row">
                            <form action="{{ route('schedules.store') }}" method="post" id="schedule_form" class="form-horizontal needs-validation" role="form" novalidate>
                                @csrf
                                <div class="col-12">

                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-sm-2 col-form-label">Day</label>
                                        <div class="row col-sm-10">
                                            <div class="col-sm-6">
                                                <label for="example-time-input" class="col-form-label">Start Time</label>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="example-time-input" class="col-form-label">End Time</label>
                                            </div>
                                        </div>
                                    </div>
                                    @foreach (['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] as $day)
                                        <div class="form-group row">
                                            <label for="example-time-input" class="col-sm-2 col-form-label">{{ $day }}</label>
                                            <div class="row col-sm-10">
                                                <div class="col-sm-6">
                                                    <input class="form-control" type="time" value="" id="{{ strtolower($day) }}_opening_time" name="{{ strtolower($day) }}_opening_time">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input class="form-control" type="time" value="" id="{{ strtolower($day) }}_closing_time" name="{{ strtolower($day) }}_closing_time">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    
                                    
                                    {{-- <div class="form-group row">
                                        <label for="example-time-input" class="col-sm-2 col-form-label">Tuesday</label>
                                        <div class="row col-sm-10">
                                            <div class="col-sm-6">
                                                <input class="form-control" type="time" value="" id="example-time-input" name="tue_start_time">
                                            </div>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="time" value="" id="example-time-input" name="tue_end_time">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-sm-2 col-form-label">Monday</label>
                                        <div class="row col-sm-10">
                                            <div class="col-sm-6">
                                                <input class="form-control" type="time" value="" id="example-time-input" name="wed_start_time">
                                            </div>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="time" value="" id="example-time-input" name="wed_end_time">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-sm-2 col-form-label">Monday</label>
                                        <div class="row col-sm-10">
                                            <div class="col-sm-6">
                                                <input class="form-control" type="time" value="" id="example-time-input" name="thu_start_time">
                                            </div>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="time" value="" id="example-time-input" name="thu_end_time">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-sm-2 col-form-label">Monday</label>
                                        <div class="row col-sm-10">
                                            <div class="col-sm-6">
                                                <input class="form-control" type="time" value="" id="example-time-input" name="fri_start_time">
                                            </div>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="time" value="" id="example-time-input" name="fri_end_time">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-sm-2 col-form-label">Monday</label>
                                        <div class="row col-sm-10">
                                            <div class="col-sm-6">
                                                <input class="form-control" type="time" value="" id="example-time-input" name="sat_start_time">
                                            </div>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="time" value="" id="example-time-input" name="sat_end_time">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="example-time-input" class="col-sm-2 col-form-label">Monday</label>
                                        <div class="row col-sm-10">
                                            <div class="col-sm-6">
                                                <input class="form-control" type="time" value="" id="example-time-input" name="sun_start_time">
                                            </div>
                                            <div class="col-sm-6">
                                                <input class="form-control" type="time" value="" id="example-time-input" name="sun_end_time">
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="text-xs-right pull-right">
                                        <button type="submit" class="btn btn-info">Save</button>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </form>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->			
            </div>
        </div>
    </section>
@endsection