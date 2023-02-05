<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Cetak Laporan</title>
</head>
<body>
	<h3 style="text-align: center">Laporan</h3>
	<p>{{ \Carbon\Carbon::now()->isoFormat('LL') }}</p>
	<div style="margin: 2rem"></div>
	<table style="width: 100%">
		<thead>
			<tr style="background-color: #000; color: #fff">
				<th>No</th>
				<th>Kode</th>
				<th>Nama Alternatif</th>
				<th>Nilai</th>
			</tr>
		</thead>
		<tbody>
			@php $no = 1 @endphp
			@foreach ($data->sortByDesc('nilai') as $alt)
					<tr>
						<td>{{ $no++ }}</td>
						<td>{{ $alt->kode }}</td>
						<td>{{ $alt->name }}</td>
						<td>{{ $alt->nilai }}</td>
					</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>