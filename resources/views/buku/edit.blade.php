@extends('master')

@section('title', 'Edit Buku')

@section('content')
    <h2>Edit buku</h2>
    <form action="{{ route('buku.update', $buku->id) }}" method="POST">
        @csrf
        <table>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judul" value="{{ $buku->judul }}" class="form-control"></td>
            </tr>
            <tr>
                <td>Penulis</td>
                <td><input type="text" name="penulis" value="{{ $buku->penulis }}" class="form-control"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="{{ $buku->harga }}" class="form-control"></td>
            </tr>
            <tr>
                <td>Tgl. Terbit</td>
                <td><input type="text" name="tgl_terbit" value="{{ $buku->tgl_terbit }}" class="date form-control" placeholder="yyyy/mm/dd"></td>
            </tr>
            <tr>
                <td><button type="submit" class="btn btn-primary">Simpan</button></td>
                <td><a href="/toko_buku" class="btn btn-secondary">Batal</a></td>
            </tr>
        </table>
    </form>
@endsection