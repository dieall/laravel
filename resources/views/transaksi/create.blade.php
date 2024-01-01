<form method="POST" action="{{ route('transaksi.store') }}">
    @csrf
    <!-- tambahkan input fields sesuai dengan kebutuhan Anda -->
    <input type="date" name="tgl_beli">
    <input type="text" name="id_barang">
    <input type="text" name="kategori_id">
    <div>
        <label for="id_pelanggan">Pelanggan:</label>
        <select name="id_pelanggan" required>
            <option value="" disabled selected>Pilih Pelanggan</option>
            @foreach($pelanggans as $pelanggan)
                <option value="{{ $pelanggan->id_pelanggan }}">{{ $pelanggan->nama_pelanggan }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Submit</button>
</form>
