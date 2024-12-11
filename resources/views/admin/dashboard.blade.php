@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container">

    <h3 class="mt-5 mb-4">DPO Status Overview</h3>

    <div class="row">
        <!-- DPO Chart -->
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5>DPO Chart</h5>
                </div>
                <div class="card-body">
                    <canvas id="dpoChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>

        <!-- Non-DPO Chart -->
        <div class="col-md-6 col-12">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h5>Bukan DPO Chart</h5>
                </div>
                <div class="card-body">
                    <canvas id="nonDpoChart" width="400" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('admin.exportDpo') }}" class="btn btn-success">Export DPO Data to Excel</a>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // DPO Chart
    const dpoCtx = document.getElementById('dpoChart').getContext('2d');
    const dpoChart = new Chart(dpoCtx, {
        type: 'pie',
        data: {
            labels: ['DPO'],
            datasets: [{
                label: 'DPO Status',
                data: [{{ $totalDPO }}], 
                backgroundColor: ['#FF6384'],
                borderColor: ['#FF6384'],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
        }
    });

    // Non-DPO Chart
    const nonDpoCtx = document.getElementById('nonDpoChart').getContext('2d');
    const nonDpoChart = new Chart(nonDpoCtx, {
        type: 'pie',
        data: {
            labels: ['Bukan DPO'],
            datasets: [{
                label: 'Bukan DPO Status',
                data: [{{ $totalNonDPO }}],
                backgroundColor: ['#36A2EB'],
                borderColor: ['#36A2EB'],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
        }
    });
</script>
@endpush
