@extends('template')
@section('content-wrapper')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Tipe</h1>
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
              @foreach($tipe as $p)
              <form action="/master/tipe/update" method="post">
				{{ csrf_field() }}
				<div class="card-body">
					<div class="form-group">
						<label for="exampleInputText">ID</label>
						<input type="hidden" name="id" value="{{ $p->rowid }}">
						<input type="text" name="tipe_id" class="form-control" id="exampleInputText" value="{{ $p->tipe_id }}">
					</div>
					<div class="form-group">
						<label for="exampleInputText">Nama</label>
						<input type="text" name="nama" class="form-control" id="exampleInputText" value="{{ $p->tipe_nama }}">
					</div>
					<div class="form-group">
						<label for="exampleInputText">User ID</label>
						<input type="text" name="user" class="form-control" id="exampleInputText"  value="{{ $p->user_id }}">
					</div>
				</div>
				<!-- /.card-body -->
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
					<a href="/master/tipe"  class="btn btn-default float-right">Close</a>
				</div>
			</form>
			@endforeach
            </div>
            <!-- /.card -->

            <!-- /.card -->

          </div>
@endsection