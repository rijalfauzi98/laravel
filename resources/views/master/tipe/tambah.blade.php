@extends('template')
@section('content-wrapper')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Data Tipe</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
@endsection
@section('content')
<div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="/master/tipe/store" method="post">
				{{ csrf_field() }}
				<div class="card-body">
					<div class="form-group">
						<label for="exampleInputText">ID</label>
						<input type="text" name="tipe_id" class="form-control" id="exampleInputText" placeholder="Masukan Nama">
					</div>
					<div class="form-group">
						<label for="exampleInputText">Nama</label>
						<input type="text" name="nama" class="form-control" id="exampleInputText" placeholder="Masukan Nama">
					</div>
					<div class="form-group">
						<label for="exampleInputText">User ID</label>
						<input type="text" name="user" class="form-control" id="exampleInputText" placeholder="Masukan Nama">
					</div>
				</div>
				<!-- /.card-body -->
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
					<a href="/master/tipe"  class="btn btn-default float-right">Close</a>
				</div>
			</form>
            </div>
            <!-- /.card -->

            <!-- /.card -->

          </div>
@endsection