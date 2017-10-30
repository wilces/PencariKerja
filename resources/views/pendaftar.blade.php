@extends('template')
@section('contentWebsite')

    <div class="well well-lg">
        <div class="container">
            <h2>Daftar Pencari Kerja</h2>
            <span>Halaman yang berisi para pencari kerja.</span>
        </div>
    </div>
    <div class="container">

        <table class="table table-bordered table-hover">

            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Pekerjaan</th>
                <th width="1">Detail</th>
            </tr>

            @foreach($pendaftar as $pencari)

            <tr>
                <td>
                    <b>{{ $pencari->nama }}</b>
                </td>
                <td>{{ $pencari->email }}</td>
                <td>{{ $pencari->pekerjaan }}</td>
                <td>
                    <a href="{{ url("pendaftarkerja/detail/" . $pencari->id) }}" class="btn btn-block btn-primary btn-sm"><i class="glyphicon glyphicon-search"></i> Detail</a>
                </td>
            </tr>
            @endforeach

        </table>
    </div>
@endsection