@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="page-header mb-4">
        <div>
            <p class="section-label">Overview</p>
            <h1 class="page-title">Dashboard</h1>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <p class="stat-label">Total Users</p>
                            <h3 class="stat-number">12,480</h3>
                        </div>
                        <span class="stat-icon icon-primary"><i class="bi bi-people"></i></span>
                    </div>
                    <div class="stat-trend positive mt-3">
                        <i class="bi bi-arrow-up-right"></i> 12.4% from last month
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <p class="stat-label">Active Users</p>
                            <h3 class="stat-number">8,320</h3>
                        </div>
                        <span class="stat-icon icon-success"><i class="bi bi-person-check"></i></span>
                    </div>
                    <div class="stat-trend positive mt-3">
                        <i class="bi bi-arrow-up-right"></i> 8.7% increase
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <p class="stat-label">Pending Users</p>
                            <h3 class="stat-number">486</h3>
                        </div>
                        <span class="stat-icon icon-warning"><i class="bi bi-hourglass-split"></i></span>
                    </div>
                    <div class="stat-trend warning mt-3">
                        <i class="bi bi-arrow-up-right"></i> Needs review
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-xl-3">
            <div class="stat-card card h-100 border-0 shadow-sm">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <p class="stat-label">Today's Visitors</p>
                            <h3 class="stat-number">1,954</h3>
                        </div>
                        <span class="stat-icon icon-info"><i class="bi bi-graph-up-arrow"></i></span>
                    </div>
                    <div class="stat-trend positive mt-3">
                        <i class="bi bi-arrow-up-right"></i> 15.2% compared to yesterday
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row g-4 mt-1">
        <div class="col-12 col-lg-8">
            <div class="card border-0 shadow-sm">
                <div class="card-body p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="card-title mb-0">Performance Overview</h5>
                        <span class="badge bg-light text-dark">This Month</span>
                    </div>

                    <div class="admin-chart" aria-label="Demo chart placeholder">
                        <div class="chart-bars">
                            <span style="height: 45%"></span>
                            <span style="height: 62%"></span>
                            <span style="height: 58%"></span>
                            <span style="height: 72%"></span>
                            <span style="height: 81%"></span>
                            <span style="height: 68%"></span>
                            <span style="height: 88%"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-lg-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body p-4">
                    <h5 class="card-title mb-3">Quick Summary</h5>

                    <div class="summary-list">
                        <div class="summary-item">
                            <span class="summary-text">New Signups</span>
                            <strong>430</strong>
                        </div>
                        <div class="summary-item">
                            <span class="summary-text">Messages</span>
                            <strong>89</strong>
                        </div>
                        <div class="summary-item">
                            <span class="summary-text">Reports</span>
                            <strong>24</strong>
                        </div>
                        <div class="summary-item">
                            <span class="summary-text">Support Tickets</span>
                            <strong>17</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
