<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

<table class="table table-striped">
    <thead>
        <tr bgcolor="black" style="color: white;">
            <th>No</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Harga</th>
            <th>Tanggal Terbit</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data_buku as $buku)
        <tr>
            <td>{{ $buku->id }}</td>
            <td>{{ $buku->judul }}</td>
            <td>{{ $buku->penulis }}</td>
            <td>{{ "Rp ".number_format($buku->harga, 2, ',', '.') }}</td>
            <td>{{ $buku->tgl_terbit }}</td>
            <td>
                <a class="btn btn-warning" href="{{route('buku.edit', $buku->id)}}">Edit</a>
                <a class="btn btn-danger" href="{{route('buku.destroy', $buku->id)}}">Hapus</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<div class="card ms-3" style="width: 18rem;">
    <div class="card-body">
        <h5 class="mx-5">Jumlah Buku: {{$data_buku->count('id')}}</h5>
        <p class="mx-5">Total Harga Buku: {{"Rp. ".number_format($data_buku->sum('harga'))}}</p>
        <p><a class="btn btn-primary mx-5" href="{{route('buku.create')}}">Tambah Buku</a></p>
    </div>
  </div>

