@extends('layouts.super')

@section('content')
<div class="container">
    <h1>List DPO</h1>
    <a href="{{ route('superadmin.dpo.create') }}" class="btn btn-primary mb-3">Add DPO</a>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>NIK</th>
                <th>Name</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($dpos as $dpo)
                <tr>
                    <td>{{ $dpo->nik }}</td>
                    <td>{{ $dpo->name }}</td>
                    <td>{{ $dpo->status }}</td>
                    <td>
                        <a href="{{ route('superadmin.dpo.edit', $dpo->nik) }}" class="btn btn-warning">Edit</a>
<form action="{{ route('superadmin.dpo.destroy', $dpo->nik) }}" method="POST" style="display:inline;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
