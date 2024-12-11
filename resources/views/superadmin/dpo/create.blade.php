@extends('layouts.super')

@section('content')
<div class="container">
    <h1>Add New DPO</h1>

    <form action="{{ route('superadmin.dpo.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" name="nik" id="nik" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="">-- Select Status --</option>
                <option value="{{ App\Models\Dpo::STATUS_DPO }}" {{ old('status') == App\Models\Dpo::STATUS_DPO ? 'selected' : '' }}>DPO</option>
                <option value="{{ App\Models\Dpo::STATUS_BUKAN_DPO }}" {{ old('status') == App\Models\Dpo::STATUS_BUKAN_DPO ? 'selected' : '' }}>Bukan DPO</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success my-3">Save</button>
    </form>
</div>
@endsection
