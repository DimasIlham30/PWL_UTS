<html>
<head>
	<title>Dimas Barang UTS</title>
</head>
<body>
 
	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>

    {{-- update --}}
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center">
            <div class="card" style="width: 24rem;">
                <div class="card-header">
                    Tambah Barang
                </div>

                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form method="post" action="{{ route('store') }}" id="myForm">
                        @csrf
                        <div class="form-group">
                            <label for="id_barang">ID Barang</label>
                            <input type="text" name="id_barang" class="formcontrol" id="id_barang" aria-describedby="id_barang">  
                        </div>
                        <div class="form-group">
                            <label for="kode_barang">Kode Barang</label>
                            <input type="kode_barang" name="kode_barang" class="formcontrol" id="kode_barang" aria-describedby="kode_barang">
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="nama_barang" name="nama_barang" class="formcontrol" id="nama_barang" aria-describedby="nama_barang">
                        </div>
                        <div class="form-group">
                            <label for="kategori_barang">Kategori Barang</label>
                            <input type="kategori_barang" name="kategori_barang" class="formcontrol" id="kategori_barang" aria-describedby="kategori_barang">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="harga" name="harga" class="formcontrol" id="harga" aria-describedby="harga">
                        </div>
                        <div class="form-group">
                            <label for="qty">QTY</label>
                            <input type="qty" name="qty" class="formcontrol" id="qty" aria-describedby="qty">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lahir">Tanggal_Lahir</label>
                            <input type="tanggal_lahir" name="tanggal_lahir" class="formcontrol" id="tanggal_lahir" aria-describedby="tanggal_lahir">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- end update --}}

	<table border="1">
		<tr>
			<th>Id Barang</th>
            <th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Kategori</th>
			<th>Harga</th>
            <th>QTY</th>
		</tr>
		@foreach($barangs as $p)
		<tr>
			<td>{{ $p->id_barang }}</td>
			<td>{{ $p->kode_barang }}</td>
			<td>{{ $p->nama_barang }}</td>
			<td>{{ $p->kategori_barang }}</td>
            <td>{{ $p->harga }}</td>
            <td>{{ $p->qty }}</td>
		</tr>
		@endforeach
	</table>
 
	<br/>
	Halaman : {{ $barangs->currentPage() }} <br/>
	Jumlah Data : {{ $barangs->total() }} <br/>
	Data Per Halaman : {{ $barangs->perPage() }} <br/>
 
 
	{{ $barangs->links() }}
 
 
</body>
</html>