@extends('layout/master')

@section('container')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
          <h3>Form Pertanyaan Baru</h3>

          <form class="needs-validation" action="/pertanyaan" method="POST">
            @csrf 
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom01">Judul</label>
                <input type="text" name="judul" class="form-control" id="validationCustom01" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationCustom02">Isi</label>
                <input type="text" name="isi" class="form-control" id="validationCustom02" required>
              </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationCustom01">Tanggal Dibuat</label>
                  <input type="date" name="created_at" class="form-control" id="validationCustom03" required>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="validationCustom02">Tanggal Diperbaharui</label>
                  <input type="date" name="updated_at" class="form-control" id="validationCustom04" required>
                </div>
              </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
          </form>
        </div>
    </div>
</div>
@endsection
