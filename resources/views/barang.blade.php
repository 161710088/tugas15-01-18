<!DOCTYPE html>
<html>
<head>
	<title>INI DATA BARANG</title>
</head>
<body>
@foreach($a as $data)
{{ $data->Nama_barang }}
RP.{{ $data->Harga }}<br><hr>
@endforeach
</body>
</html>