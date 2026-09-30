@extends('layouts.admin')

@section('title', 'Users')

@section('content')
    <div class="page-header mb-4">
        <div>
            <p class="section-label">Management</p>
            <h1 class="page-title">Users</h1>
        </div>
    </div>

    <div class="card border-0 shadow-sm">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table align-middle mb-0 admin-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>John Smith</td>
                            <td>john.smith@example.com</td>
                            <td><span class="badge status-badge status-active">Active</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Maria Johnson</td>
                            <td>maria.johnson@example.com</td>
                            <td><span class="badge status-badge status-pending">Pending</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Robert Lee</td>
                            <td>robert.lee@example.com</td>
                            <td><span class="badge status-badge status-inactive">Inactive</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Emily Davis</td>
                            <td>emily.davis@example.com</td>
                            <td><span class="badge status-badge status-active">Active</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">View</button>
                            </td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Daniel Wilson</td>
                            <td>daniel.wilson@example.com</td>
                            <td><span class="badge status-badge status-pending">Pending</span></td>
                            <td>
                                <button class="btn btn-sm btn-outline-primary">View</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
