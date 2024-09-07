@extends('layouts.master')

@section('judul')
    Halaman Tampil Kategori
@endsection

@section('content')
    <a href="/category/create" class="btn btn-primary btn-sm">Tambah</a>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Kategori</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($categories as $key=> $item)
            <tr>
                <th scope="row">{{$key + 1}}</th>
                <td>{{$item->name}}</td>
                <td>
                    
                    <form action="/category/{{$item->id}}" method="post">
                        @csrf
                        @method("Delete")

                        <a href="/category/{{$item->id}}" class="btn btn-info">Detail</a>
                        <a href="/category/{{$item->id}}/edit" class="btn btn-secondary">Edit</a>
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </form>
                </td>
            </tr>
            @empty
                <p>Tidak ada kategori</p>
            @endforelse
        </tbody>
      </table>
@endsection