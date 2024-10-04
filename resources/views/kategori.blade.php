{{-- <!DOCTYPE html>
<html>
    <head>  
        <title>Data Kategori Barang</title>
    </head>
    <body>
        <h1>Data Kategori Barang</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Kode Kategori</th>
                <th>Nama Kategori</th>
            </tr>
            @foreach ($data as $d)
                <tr>
                    <td>{{$d->kategori_id }}</td>
                    <td>{{$d->kategori_kode }}</td>
                    <td>{{$d->kategori_nama }}</td>
                </tr>
            @endforeach
        </table>
    </body>
</html> --}}

<!DOCTYPE html>
<html>
    <head>
        <title>Data Kategori</title>
    </head>
    <body>
        <h1>Data Kategori</h1>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID Kategori</th>
                <th>Kode Kategori</th>
                <th>Nama Kategori</th>
                <th>Action</th>
            </tr>
            @foreach ($data as $d)
                <tr>
                    <td>{{$d->kategori_id }}</td>
                    <td>{{$d->kategori_kode }}</td>
                    <td>{{$d->kategori_nama }}</td>
                    <td>
                        <a href="{{ url('/kategori/' . $d->kategori_id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ url('/kategori/ubah/' . $d->kategori_id) }}" class="btn btn-warning btn-sm">Ubah</a>
                        <form class="d-inline-block" method="POST" action="{{ url('/kategori/' . $d->kategori_id) }}">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </body>
</html>
