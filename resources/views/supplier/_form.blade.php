@csrf

<div>
    <label>Nama Supplier</label><br>
    <input type="text" name="nama"
        class="form-control @error('nama') is-invalid @enderror"
        value="{{ old('nama', $supplier->nama ?? '') }}">
    
    @error('nama')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div>
    <label>Alamat</label><br>
    <input type="text" name="alamat"
        class="form-control @error('alamat') is-invalid @enderror"
        value="{{ old('alamat', $supplier->alamat ?? '') }}">

    @error('alamat')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<div>
    <label>No. Telepon</label><br>
    <input type="text" name="no_telp"
        class="form-control @error('no_telp') is-invalid @enderror"
        value="{{ old('no_telp', $supplier->no_telp ?? '') }}">

    @error('no_telp')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>

<button class="btn btn-success mt-3" type="submit">Simpan</button>
<a href="{{ route('supplier.index') }}" class="btn btn-secondary">Kembali</a>

        value="{{ old('name', $supplier->nama ?? '') }}">
    
    @error('name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>



<button class="btn btn-success mt-3" type="submit">Simpan</button>
<a href="{{ route('supplier.index') }}" class="btn btn-secondary">Kembali</a>

<script>
function previewImage(input) {
    const preview = document.getElementById('preview');
    const file = input.files[0];

    if (file) {
        preview.src = URL.createObjectURL(file);
        preview.style.display = 'block';
    }
}
</script>
