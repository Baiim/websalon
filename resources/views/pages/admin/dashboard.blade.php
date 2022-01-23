@extends('layouts.admin')

@section('title')
    Dashboard | Iyaiyoh
@endsection

@section('content')
<!-- Section Content -->
<div
    class="section-content section-dashboard-home"
    data-aos="fade-up"
    >
    <div class="container-fluid">
        <div class="dashboard-heading">
            <h2 class="dashboard-title">Admin Dashboard Iyaiyoh Salon</h2>
        </div>
        <div class="dashboard-content">
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                                Customer
                            </div>
                            <div class="dashboard-card-subtitle">
                                {{ $customer }} Orang / Customer
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-2">
                        <div class="card-body">
                            <div class="dashboard-card-title">
                               Member
                            </div>
                            <div class="dashboard-card-subtitle">
                                {{ $user }} Anggota / Member
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
