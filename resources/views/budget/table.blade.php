@extends('budget/template')
@section('content')
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">DataTable with default features</h3>
					</div>
					<!-- /.card-header -->
					<div class="card-body">
						<table id="example1" class="table table-bordered table-striped">
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
										<a class="btn btn-info btn-sm" href="/pegawai/edit/{{ $p->pegawai_id }}">
											<i class="fas fa-pencil-alt">
											</i>
											Edit
										</a>
										<a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p->pegawai_id }}">
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
</section>
@endsection
