@extends('layouts.admin')

@section('title', 'Check DPO Status')

@section('content')
<div class="container">
    <h2>Check DPO Status</h2>
    <form id="checkDpoForm" method="POST" action="{{ route('api.checkDpo') }}">
        @csrf
        <div class="form-group">
            <label for="nik">Enter NIK</label>
            <input type="text" name="nik" id="nik" class="form-control" placeholder="Enter NIK" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Check DPO</button>
    </form>

    <div id="dpoResult" class="mt-4" style="display: none;">
        <h4>Result:</h4>
        <p id="dpoMessage"></p>
        <ul id="dpoDetails"></ul>
    </div>
</div>

<script>
document.getElementById('checkDpoForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    const form = e.target;
    const formData = new FormData(form);
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    const nik = formData.get('nik');

    try {
        const response = await fetch("{{ route('api.checkDpo') }}", {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ nik }),
        });

        const result = await response.json();

        const dpoResult = document.getElementById('dpoResult');
        const dpoMessage = document.getElementById('dpoMessage');
        const dpoDetails = document.getElementById('dpoDetails');

        if (result.dpo) {
            dpoMessage.textContent = result.message;
            dpoDetails.innerHTML = `
                <li><strong>NIK:</strong> ${result.dpo.nik}</li>
                <li><strong>Name:</strong> ${result.dpo.name}</li>
                <li><strong>Status:</strong> ${result.status}</li>
            `;
        } else {
            dpoMessage.textContent = result.message;
            dpoDetails.innerHTML = '';
        }

        dpoResult.style.display = 'block';
    } catch (error) {
        alert('An error occurred while checking the DPO. Please try again.');
    }
});
</script>
@endsection
