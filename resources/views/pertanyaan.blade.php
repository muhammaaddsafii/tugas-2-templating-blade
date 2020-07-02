@extends('layout/master')

@section('container')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
          <h3>Tabel Pertanyaan</h3>
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Judul</th>
                <th scope="col">Isi</th>
                <th scope="col">Tanggal Dibuat</th>
                <th scope="col">Tanggal Diperbaharui</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($questions as $question)
                <tr>
                <th scope="row">{{$question->id_pertanyaan}}</th>
                    <td>{{$question->judul}}</td>
                    <td>{{$question->isi}}</td>
                    <td>{{$question->created_at}}</td>
                    <td>{{$question->updated_at}}</td>
                  </tr>
                @endforeach
            </tbody>
          </table>
          <a class="btn btn-primary" href="{{url('/pertanyaan/create')}}" role="button">Buat Pertanyaan Baru</a>
        </div>
    </div>
</div>
@endsection
