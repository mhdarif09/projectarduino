@extends('layouts.super')

@section('content')
<div class="container">
    <h1>Edit DPO</h1>

    <form action="{{ route('superadmin.dpo.update', $dpo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" name="nik" id="nik" class="form-control" value="{{ $dpo->nik }}" required>
        </div>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $dpo->name }}" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="{{ App\Models\Dpo::STATUS_DPO }}" {{ $dpo->status == App\Models\Dpo::STATUS_DPO ? 'selected' : '' }}>DPO</option>
                <option value="{{ App\Models\Dpo::STATUS_BUKAN_DPO }}" {{ $dpo->status == App\Models\Dpo::STATUS_BUKAN_DPO ? 'selected' : '' }}>Bukan DPO</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
@endsection
