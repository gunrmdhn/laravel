@csrf
<div class="col-lg-2">
    <label for="tanggal_bulan_tahun" class="form-label">Tanggal/Bulan/Tahun</label>
    <input autofocus type="date" value="{{ old('tanggal_bulan_tahun', $todo->tanggal_bulan_tahun) }}"
        @class([
            'form-control',
            'rounded-0',
            'is-invalid' => $errors->has('tanggal_bulan_tahun'),
        ]) id="tanggal_bulan_tahun" name="tanggal_bulan_tahun">
</div>
<div class="col-lg-10">
    <label for="kegiatan" class="form-label">Kegiatan</label>
    <input type="text" value="{{ old('kegiatan', $todo->kegiatan) }}" @class([
        'form-control',
        'rounded-0',
        'is-invalid' => $errors->has('kegiatan'),
    ]) id="kegiatan"
        name="kegiatan">
</div>
<div class="col-lg-12">
    <div class="d-flex">
        @if (request()->routeIs('todo-list.edit'))
            <div class="btn-group flex-fill">
                <a href="{{ route('todo-list.index') }}" class="btn btn-secondary rounded-start-0">Kembali</a>
                <button type="submit" class="btn btn-warning text-white rounded-end-0">Simpan</button>
            </div>
        @else
            <button class="btn btn-success flex-fill rounded-0" type="submit">Tambah</button>
        @endif
    </div>
</div>
