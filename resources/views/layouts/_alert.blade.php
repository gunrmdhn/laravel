@if (session()->has('gagal') || $errors->any())
    <section class="bg-danger text-center py-1 text-white fs-6">
        @forelse ($errors->all() as $error)
            <em>{{ $error }}</em>
            <br>
        @empty
            <em>{{ session('gagal') }}</em>
        @endforelse
    </section>
@elseif (session()->has('berhasil'))
    <section class="bg-success text-center py-1 text-white fs-6">
        <em>{{ session('berhasil') }}</em>
    </section>
@endif
