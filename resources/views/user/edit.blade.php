<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Edit user</h3>

	<a href="/user"> Kembali</a>
	
	<br/>
	<br/>

	@foreach($user as $p)
	<form action="/user/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->user_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->user_nama }}"> <br/> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->user_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->user_alamat }}</textarea> <br/>
		<input type="submit" value="Ubah Data">
	</form>
	@endforeach
		

</body>
</html>