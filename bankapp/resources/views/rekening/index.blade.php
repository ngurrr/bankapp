@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Rekening Bank</h2>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nama Pemilik</th>
            <th>No Rekening</th>
            <th>Bank</th>
            <th>Saldo</th>
        </tr>
        @foreach($data as $r)
        <tr>
            <td>{{ $r->nama_pemilik }}</td>
            <td>{{ $r->nomor_rekening }}</td>
            <td>{{ $r->bank }}</td>
            <td>Rp {{ number_format($r->saldo, 0, ',', '.') }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection
