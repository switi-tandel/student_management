@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Dashboard Overview</h5>
                
                <div class="row"> <!-- Start a new row for the cards -->
                    <!-- Student Card -->
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">Students<span></span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$studentCount}}</h6>
                                        <span class="text-success small pt-1 fw-bold"></span>
                                        <span class="text-muted small pt-2 ps-1"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Student Card -->

                    <!-- Teacher Card -->
                    <div class="col-xxl-4 col-md-6 mb-4">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">Teachers<span></span></h5>

                                <div class="d-flex align-items-center">
                                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-person-lines-fill"></i> <!-- Use a relevant icon for teachers -->
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{$teacherCount}}</h6>
                                        <span class="text-success small pt-1 fw-bold"></span>
                                        <span class="text-muted small pt-2 ps-1"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Teacher Card -->
                </div><!-- End row for the cards -->

            </div>
        </div>
    </div>
</div>
@endsection
