<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <div class="container mx-5">
        <h4>Tambah Buku</h4>
        <form method="POST" action="{{ route('buku.store')}}">
            @csrf
            <div>
                Judul
                <input type="text" name="judul" placeholder="Judul Buku">
            </div>
            <div>
                Penulis
                <input type="text" name="penulis" placeholder="Penulis Buku">
            </div>
            <div>
                Harga
                <input type="text" name="harga" placeholder="Harga Buku">
            </div>
            <div>
                Tanggal Terbit
                <input type="text" name="tgl_terbit" placeholder="YYYY/MM/DD">
            </div>
            <div>
                <button type="submit" class="btn btn-Success mt-3">Simpan</button>
                <a href="/buku" class="btn btn-warning mt-3">Batal</a>
            </div>
        </form>
    </div>


