@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container">
    <h2>Welcome to Admin Dashboard</h2>
    <p>Manage DPO and check DPO status from this panel.</p>
    <a href="{{ route('admin.checkDpoPage') }}" class="btn btn-primary mt-3">Go to Check DPO</a>
</div>
@endsection
