@extends('layouts.admin')

@section('title', 'Check DPO Status')

@section('content')
<div class="container">
    <h2>Check DPO Status</h2>
    <form id="checkDpoForm">
        <div class="form-group">
            <label for="nik">Enter NIK</label>
            <input type="text" name="nik" id="nik" class="form-control" placeholder="Enter NIK" required>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Check DPO</button>
    </form>

    <div id="dpoResult" class="mt-4" style="display: none;">
        <h4>Result:</h4>
        <p id="dpoMessage" class="text-danger"></p>
        <ul id="dpoDetails" class="list-unstyled"></ul>
    </div>
</div>

<script>
document.getElementById('checkDpoForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    const nikInput = document.getElementById('nik').value;

    try {
        const response = await fetch("{{ url('admin/check-dpo') }}", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
            },
            body: JSON.stringify({ nik: nikInput }),
        });

        const result = await response.json();

        const dpoResult = document.getElementById('dpoResult');
        const dpoMessage = document.getElementById('dpoMessage');
        const dpoDetails = document.getElementById('dpoDetails');

        if (response.ok) {
            dpoMessage.textContent = result.message;
            dpoMessage.classList.remove('text-danger');
            dpoMessage.classList.add('text-success');
            dpoDetails.innerHTML = `
                <li><strong>NIK:</strong> ${result.data.nik}</li>
                <li><strong>Name:</strong> ${result.data.name}</li>
                <li><strong>Status:</strong> ${result.data.status}</li>
                <li><strong>Created At:</strong> ${result.data.created_at}</li>
                <li><strong>Updated At:</strong> ${result.data.updated_at}</li>
            `;
        } else {
            dpoMessage.textContent = result.message;
            dpoMessage.classList.remove('text-success');
            dpoMessage.classList.add('text-danger');
            dpoDetails.innerHTML = '';
        }

        dpoResult.style.display = 'block';
    } catch (error) {
        alert('An error occurred while checking the DPO. Please try again.');
    }
});
</script>
@endsection
