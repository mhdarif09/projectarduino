@extends('layouts.super')

@section('content')
<div class="container">
    <h1>Edit DPO</h1>

    <form action="{{ route('superadmin.dpo.update', $dpo->nik) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" value="{{ $dpo->nik }}" disabled>
        </div>

        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $dpo->name) }}" required>
        </div>

        <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status">
                <option value="DPO" {{ $dpo->status == 'DPO' ? 'selected' : '' }}>DPO</option>
                <option value="Bukan DPO" {{ $dpo->status == 'Bukan DPO' ? 'selected' : '' }}>Bukan DPO</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
