@extends('template')
@section('content-wrapper')
<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Tambah Rencana Budget</h1>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section>
@endsection
@section('content')
<div class="col-md-12">
  <!-- general form elements -->
  <div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title">Form Tambah Rencana Budget</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="/transaksi/rencana/store" method="post">
      {{ csrf_field() }}
      <div class="card-body">
        <div class="row">
          <div class="col-sm-4">
            <!-- text input -->
            <div class="form-group">
              <label class="col-form-label" for="inputWarning"><i class=""></i> No Referensi</label>
              <!-- <label>No Referensi</label> -->
              <input type="text" name="noref" class="form-control">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label class="col-form-label" for="inputWarning"><i class=""></i> Tanggal Buat</label>
              <!-- <label>Tanggal Buat</label> -->
              <input type="date" name="tglbuat" value="{{ date('Y-m-d') }}"  class="form-control">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Tangal Tempo</label>
              <!-- <label>Tangal Tempo</label> -->
              <input type="date" name="tgltempo" class="form-control">
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4">
            <!-- text input -->
            <div class="form-group">
              <label>Budget</label>
              <input type="text" name="budget" class="form-control" placeholder="Masukan Anggaran">
            </div>
          </div>
          <div class="col-sm-4">
            <!-- select -->
            <div class="form-group">
              <label>Tipe</label>
             
              <select name="tipe" class="form-control">
                <option>-- Pilih --</option>
                @foreach($tipe as $p)
                <option value="{{ $p->tipe_id }}">{{ $p->tipe_nama }}</option>
                @endforeach
              </select>
              
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              <label>Klasifikasi</label>
              <select name="klas" class="form-control select2" style="width: 100%;">
                <option>-- Pilih --</option>
                @foreach($klas as $p)
                <option value="{{ $p->klasifikasi_id }}">{{ $p->klasifikasi_nama }}</option>
                @endforeach
             </select>
           </div>
         </div>

 <!--          <div class="col-sm-4">
            <div class="form-group">
              <label>Klasifikasi</label>
              <select class="form-control">
                <option>-- Pilih --</option>
                @foreach($klas as $p)
                <option value="{{ $p->klasifikasi_id }}">{{ $p->klasifikasi_nama }}</option>
                @endforeach
              </select>
            </div>
          </div> -->
        </div>

        <div class="row">
          <div class="col-sm-4">
            <!-- textarea -->
            <div class="form-group">
              <label>Deskripsi</label>
              <textarea name="deskripsi" class="form-control" rows="3" placeholder="Masukan Deskripsi"></textarea>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Divisi</label>
              <input name="divisi" type="text" class="form-control">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Yang Mengajukan</label>
              <input name="user" type="text" class="form-control">
              <!-- <input name="user" type="text" class="form-control" disabled> -->
            </div>
          </div>
        </div>
    </div>
    <!-- /.card-body -->
    <div class="card-footer">
     <button type="submit" class="btn btn-primary">Submit</button>
     <a href="/transaksi/rencana"  class="btn btn-default float-right">Close</a>
   </div>
 </form>
</div>
</div>


@endsection