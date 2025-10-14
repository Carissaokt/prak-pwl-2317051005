@extends('layouts.app')

@section('content')

<style>
    body {
        min-height: 100vh;
        width: 100%;
        position: relative;
        margin: 0;
        font-family: 'Poppins', Georgia, 'Times New Roman', Times, serif;
    }
    .aurora-bg {
        position: fixed;
        inset: 0;
        z-index: 0;
        pointer-events: none;
        background:
            radial-gradient(ellipse 85% 65% at 8% 8%, rgba(175, 109, 255, 0.42), transparent 60%),
            radial-gradient(ellipse 75% 60% at 75% 35%, rgba(255, 235, 170, 0.55), transparent 62%),
            radial-gradient(ellipse 70% 60% at 15% 80%, rgba(255, 100, 180, 0.40), transparent 62%),
            radial-gradient(ellipse 70% 60% at 92% 92%, rgba(120, 190, 255, 0.45), transparent 62%),
            linear-gradient(180deg, #f7eaff 0%, #fde2ea 100%);
    }
    .container {
        max-width: 900px;
        margin: 60px auto;
        background: rgba(255,255,255,0.92);
        border-radius: 16px;
        box-shadow: 0 4px 16px rgba(175, 109, 255, 0.12);
        padding: 32px 24px;
        position: relative;
        z-index: 1;
    }
    h1 {
        text-align: center;
        color: #a56dff;
        margin-bottom: 28px;
        font-size: 1.7rem;
        font-weight: bold;
        letter-spacing: 1px;
    }
    .add-btn {
        display: inline-block;
        background: #0fb646ff;
        color: #fff;
        padding: 8px 18px;
        border-radius: 7px;
        text-decoration: none;
        font-weight: 500;
        margin-bottom: 18px;
        font-size: 1rem;
        box-shadow: 0 2px 8px rgba(175, 109, 255, 0.10);
        transition: background 0.2s;
    }
    .add-btn:hover {
        background: #055a22ff;
    }
    table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(175, 109, 255, 0.08);
    }
    th, td {
        padding: 10px 12px;
        text-align: center;
        border-bottom: 1px solid #ececec;
    }
    th {
        background: #a56dff;
        color: #fff;
        font-weight: bold;
        font-size: 1.05rem;
        border-bottom: 2px solid #eaeaea;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    tr:nth-child(even) {
        background: #f7eaff;
    }
    tr:hover {
        background: #ecd5f9ff;
    }
    td {
        color: #444;
        font-size: 1rem;
    }
    .aksi-group {
        display: flex;
        gap: 8px;
        justify-content: center;
    }
    .aksi-btn-edit {
    background: #5cb8ff;
    color: #fff;
    border: none;
    border-radius: 50px; /* ubah dari 5px ke 50px */
    padding: 6px 22px;   /* biar lebih oval */
    cursor: pointer;
    font-size: 0.95rem;
    font-weight: 500;
    text-decoration: none;
    transition: background 0.2s;
    display: inline-block;
    }
    .aksi-btn-edit:hover {
        background: #0076c9;
    }
    .aksi-btn-hapus {
        background: #ff647c;
        color: #fff;
        border: none;
        border-radius: 50px; /* ubah dari 5px ke 50px */
        padding: 6px 22px;   /* biar lebih oval */
        cursor: pointer;
        font-size: 0.95rem;
        font-weight: 500;
        text-decoration: none;
        transition: background 0.2s;
        display: inline-block;
    }
    .aksi-btn-hapus:hover {
        background: #c9002b;
    }
        form {
        display: inline;
    }
</style>

<div class="aurora-bg"></div>

<div class='container'>
    <h1>Daftar Mata Kuliah</h1>
    <a href="{{ route('mk.create') }}" class="add-btn">Tambah Mata Kuliah</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Mata Kuliah</th>
                <th>SKS</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data['mks'] as $mk)
            <tr>
                <td>{{ $mk->id }}</td>
                <td>{{ $mk->nama_mk }}</td>
                <td>{{ $mk->sks }}</td>
                <td>
                    <div class="aksi-group">
                        <a href="{{ route('mk.edit', $mk->id) }}" class="aksi-btn-edit">Edit</a>
                        <form action="{{ route('mk.destroy', $mk->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="aksi-btn-hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus mata kuliah ini?')">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection