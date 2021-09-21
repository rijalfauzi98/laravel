@extends('template')
@section('content-wrapper')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Master Tipe</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <!-- <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
              <li class="breadcrumb-item active">Master Tipe</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
@endsection

@section('content')
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<!-- /.card-header -->
					<div class="card-body">
						<a href="/master/tipe/tambah" class="btn btn-primary mb-2">
                        Tambah Data
                    </a>
						<table id="example3" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>ID Tipe</th>
									<th>Nama</th>
									<th>User </th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($tipe as $p)
								<tr>
									<td>{{ $p->tipe_id }}</td>
									<td>{{ $p->tipe_nama }}</td>
									<td>{{ $p->user_id }}</td>
									<td class="project-actions text-right"><center>
										<a class="btn btn-warning btn-sm" href="/master/tipe/edit/{{ $p->rowid }}">
											<i class="fas fa-pencil-alt">
											</i>
											Edit
										</a>
										<a class="btn btn-danger btn-sm" href="/master/tipe/hapus/{{ $p->rowid }}">
											<i class="fas fa-trash">
											</i>
											Delete
										</a>
									</center></td>

								</tr>
								@endforeach

							</tbody>
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


</section>
@endsection

