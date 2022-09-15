@extends('layout.main') 
 
@section('content') 
<h1 class="text-center">Kamar</h1> 
 
<a href="/tambahkamar" class="btn btn-success mt-5 mb-4">tambah</a> 
<table class="table table-light table-striped"> 
    <thead> 
        <tr> 
            <th scope="col">jenis kamar</th> 
            <th scope="col">fasilitas kamar</th> 
            <th scope="col">reservasi</th> 
            <th scope="col">harga</th> 
            <th scope="col">Action</th> 
        </tr> 
    </thead> 
    @php 
        $no=1 
    @endphp 
    <tbody> 
        @foreach ($data as $row)             
        <tr> 
            <th scope="row">{{ $loop->iteration  }}</th> 
            <td>{{ $row->jenis_kamar }}</td> 
            <td>{{ $row->fasilitas_kamar }}</td> 
            <td>{{ $row->reservasi }}</td> 
            <td>{{ $row->harga}}</td> 
            <td style="display: flex;"> 
                <a type="button" href="/editjeniskamar/{{ $row->id }}" class="btn btn-warning mr-2">Edit</a> 
                    <form action="/deletejeniskamar/{{ $row->id }}" method="POST" style="margin-right:20px"> 
                      @csrf 
                      @method('delete') 
                      <button type="submit" class="btn btn-danger me-4">Delete</button> 
                    </form>                                                          
            </td> 
        </tr> 
        @endforeach 
    </tbody> 
</table> 
 
@endsection