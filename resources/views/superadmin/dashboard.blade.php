<!-- resources/views/superadmin/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Super Admin Dashboard</h4>
                </div>

                <div class="card-body">
                    <p>Welcome, {{ Auth::user()->name }}! You are logged in as <strong>Super Admin</strong>.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
