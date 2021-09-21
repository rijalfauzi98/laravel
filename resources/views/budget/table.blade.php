@extends('budget/template')
@section('content')
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">

					<br><div class="box-header">
						<div class="col-md-6" >
							<button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah"></i> Tambah Data</button>
						<!-- 	 <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal1"> <i class='fa fa-plus'></i> Tambah Data</button> -->
						</div>
					</div>

					<div class="card-header">
						<h3 class="card-title">DataTable with default features</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>Nama</th>
									<th>Jabatan</th>
									<th>Umur</th>
									<th>Alamat</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($pegawai as $p)
								<tr>
									<td>{{ $p->pegawai_nama }}</td>
									<td>{{ $p->pegawai_jabatan }}</td>
									<td>{{ $p->pegawai_umur }}</td>
									<td>{{ $p->pegawai_alamat }}</td>

									<td class="project-actions text-right"><center>
										<a href="/budget/edit/{{ $p->pegawai_id }}" class="btn btn-info btn-sm" data-toggle="modal" data-target="#edit">
											<i class="fas fa-pencil-alt">
											</i>
											Edit
										</a>
										
										<a class="btn btn-danger btn-sm" href="/budget/hapus/{{ $p->pegawai_id }}">
											<i class="fas fa-trash">
											</i>
											Delete
										</a>
									</center></td>

								</tr>
								@endforeach

							</tbody>
                  <!-- <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                  </tr>
              </tfoot> -->
          </table>
      </div>
      <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.col -->
</div>
<!-- /.row -->
</div>
<!-- /.container-fluid -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="card-header card-primary">
				<h3 class="card-title">Tambah Data</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<!-- form start -->
			<form action="/budget/tambah" method="post">
				{{ csrf_field() }}
				<div class="card-body">
					<div class="form-group">
						<label for="exampleInputText">Nama</label>
						<input type="text" name="nama" class="form-control" id="exampleInputText" placeholder="Masukan Nama">
					</div>
					<div class="form-group">
						<label for="exampleInputText">Jabatan</label>
						<input type="text" name="jabatan" class="form-control" id="exampleInputText" placeholder="Masukan Nama">
					</div>
					<div class="form-group">
						<label for="exampleInputText">Umur</label>
						<input type="text" name="umur" class="form-control" id="exampleInputText" placeholder="Masukan Nama">
					</div>
					<div class="form-group">
						<label for="exampleInputText">Alamat</label>
						<input type="text" name="alamat" class="form-control" id="exampleInputText" placeholder="Masukan Nama">
					</div>
				</div>
				<!-- /.card-body -->
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
					<button type="button"  class="btn btn-default float-right" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- /.container-fluid -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="card-header card-primary">
				<h3 class="card-title">Edit Data</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			
			<!-- form start -->
						<form action="/budget/update/{{ $p->pegawai_id }}" method="post">
				{{ csrf_field() }}
				<div class="card-body">
					<div class="form-group">
						<label for="exampleInputText">Nama</label>
						<input type="hidden" name="id" value="{{ $p->pegawai_id }}">
						<input type="text" name="nama" value="{{ $p->pegawai_nama }}" class="form-control" id="exampleInputText" placeholder="Masukan Nama">
					</div>
					<div class="form-group">
						<label for="exampleInputText">Jabatan</label>
						<input type="text" name="jabatan" value="{{ $p->pegawai_jabatan }}" class="form-control" id="exampleInputText" placeholder="Masukan Nama">
					</div>
					<div class="form-group">
						<label for="exampleInputText">Umur</label>
						<input type="text" name="umur" value="{{ $p->pegawai_umur }}" class="form-control" id="exampleInputText" placeholder="Masukan Nama">
					</div>
					<div class="form-group">
						<label for="exampleInputText">Alamat</label>
						<textarea required="required" name="alamat" class="form-control" >{{ $p->pegawai_alamat }} </textarea>
					</div>
				</div>
				<!-- /.card-body -->
				<div class="card-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
					<button type="button"  class="btn btn-default float-right" data-dismiss="modal">Close</button>
				</div>
			</form>
			
		</div>
	</div>
</div>

</section>

@endsection

