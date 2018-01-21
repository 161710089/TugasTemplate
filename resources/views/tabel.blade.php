
@extends('layouts.master')
@section('konten')
	<h1 class="my-4">Data 
<small>Tabels</small>
</h1>
<hr>
<CENTER>
	<table border="3" class="table table-bordered">
		<th>ID</th>
		<th>NIS</th>
		<th>nama</th>
		<th>tempat Lahir</th>
		<th>tanggal Lahir</th>
		<th>alamat</th>
		<th>citacita</th>
		<th>Hobi</th>
		<th>Foto</th>
@foreach($awe as $key)
	<tr>
		<td>{{ $key->id}}</td>
		<td>{{ $key->NIS}}</td>
		<td>{{ $key->nama}}</td>
		<td>{{ $key->tempat_lahir}}</td>
		<td>{{ $key->tanggal_lahir}}</td>
		<td>{{ $key->alamat}}</td>
		<td>{{ $key->citacita}}</td>
		<td>{{ $key->hobi}}</td>
		<td><img src="{{asset('image/'.$key->gambar)}}" style="max-height:100px;max-width:100px;margin-top:10px"></td>
	</tr>
@endforeach
	</table>
</CENTER>
</div>
@endsection<br>