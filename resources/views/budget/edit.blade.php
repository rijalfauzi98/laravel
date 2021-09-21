
<!-- /.container-fluid -->

			<!-- form start -->
			
			@foreach($pegawai as $p)
			<form action="/budget/update" method="post">
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
			@endforeach


