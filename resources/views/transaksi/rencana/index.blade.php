@extends('template')
@section('content-wrapper')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Master Rencana</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
              <!-- <li class="breadcrumb-item"><a href="#">Layout</a></li> -->
              <li class="breadcrumb-item active">Master Rencana</li>
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
						<a href="/transaksi/rencana/tambah" class="btn btn-primary mb-2">
                        Tambah Data
                    </a>
						<table id="example5" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>NO</th>
									<th>NO Referensi</th>
									<th>Tanggal Buat</th>
									<th>Tanggal Tempo</th>
									<th>Budget Anggaran</th>
									<th>Tipe</th>
									<th>Klasifikasi</th>
									<th>Deskripsi</th>
									<th>Divisi</th>
									<th>User ID</th>
									<th>Opsi</th>
								</tr>
							</thead>
							<tbody>
								@foreach($rencana as $p)
								<tr>
									<td><center><?=$no++?></center></td>
									<td>{{ $p->no_referensi }}</td>
									<td>{{ \Carbon\Carbon::parse($p->tgl_buat)->format('d-m-Y')}}</td>
									<td>{{ \Carbon\Carbon::parse($p->tgl_tempo)->format('d-m-Y')}}</td>
									<td>{{ $p->budget_anggaran }}</td>
									<td>{{ $p->tipe_anggaran }}</td>
									<td>{{ $p->klasifikasi }}</td>
									<td>{{ $p->deskripsi }}</td>
									<td>{{ $p->divisi }}</td>
									<td>{{ $p->user_id }}</td>

									<td class="project-actions text-right"><center>
										<a class="btn btn-warning btn-sm" href="/transaksi/rencana/edit/{{ $p->rowid }}">
											<i class="fas fa-pencil-alt">
											</i>
											Edit
										</a>

										<a class="btn btn-danger btn-sm" href="/transaksi/rencana/hapus/{{ $p->rowid }}">
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

@push('js')
    <form action="" id="delete-form" method="post">
        @method('delete')
        @csrf
    </form>
    <script>
        $('#example2').DataTable({
            "responsive": true,
        });

        function notificationBeforeDelete(event, el) {
            event.preventDefault();
            if (confirm('Apakah anda yakin akan menghapus data ? ')) {
                $("#delete-form").attr('action', $(el).attr('href'));
                $("#delete-form").submit();
            }
        }

    </script>
@endpush