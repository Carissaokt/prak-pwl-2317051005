@extends('layouts.app')

@section('content')

<div class='container'>
    <h1>Buat Mata Kuliah Baru</h1>

    <form action="{{ route('mk.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama_mk" class="form-label">Nama Mata Kuliah</label><br>
            <input type="text" class="form-control" id="nama_mk" name="nama_mk" required><br><br>
        </div>
        <div class="mb-3">
            <label for="sks" class="form-label">SKS:</label><br>
            <input type="number" class="form-control" id="sks" name="sks" required><br><br>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection