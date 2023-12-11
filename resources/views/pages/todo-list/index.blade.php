@extends('layouts/_main')
@section('main')
    <div class="col-lg-12">
        <div class="card rounded-0">
            <div class="card-header rounded-0">
            </div>
            <div class="card-body">
                {{-- @if (request()->routeIs('todo-list.edit'))
                    <form action="{{ route('todo-list.update', $todo->id) }}" method="post" enctype="multipart/form-data">
                        <div class="row gy-3">
                            @method('put')
                            @include('pages/todo-list/_form')
                        </div>
                    </form>
                @else --}}
                <form action=" {{ route('todo-list.store') }}" method="post" enctype="multipart/form-data">
                    <div class="row gy-3">
                        @include('pages/todo-list/_form')
                    </div>
                </form>
                {{-- @endif --}}
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="accordion" id="accordionExample">
            <div class="accordion-item rounded-0">
                <h2 class="accordion-header">
                    <button class="accordion-button bg-white text-danger rounded-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#uncheck" aria-expanded="true" aria-controls="uncheck">
                        Uncheck
                    </button>
                </h2>
                <div id="uncheck" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <table id="table" class="table table-responsive" width="100%">
                            <thead>
                                <tr>
                                    <th>Tanggal/Bulan/Tahun</th>
                                    <th>Kegiatan</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_uncheck as $item)
                                    <tr>
                                        <td>{{ $item->tanggal_bulan_tahun }}</td>
                                        <td>{{ $item->kegiatan }}</td>
                                        <td>
                                            <form method="post" action="{{ route('todo-list.update', $item->id) }}">
                                                @method('put')
                                                @csrf
                                                <div class="d-flex">
                                                    <button type="submit" class="btn btn-primary flex-fill rounded-0"
                                                        onclick="return confirm('Apakah {{ $item->kegiatan }} telah selesai?')">Check</button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="accordion-item rounded-0">
                <h2 class="accordion-header">
                    <button class="accordion-button bg-white text-primary rounded-0" type="button"
                        data-bs-toggle="collapse" data-bs-target="#check" aria-expanded="true" aria-controls="check">
                        Check
                    </button>
                </h2>
                <div id="check" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <table id="table" class="table table-responsive" width="100%">
                            <thead>
                                <tr>
                                    <th>Tanggal/Bulan/Tahun</th>
                                    <th>Kegiatan</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_check as $item)
                                    <tr>
                                        <td>{{ $item->tanggal_bulan_tahun }}</td>
                                        <td>{{ $item->kegiatan }}</td>
                                        <td>
                                            <form method="post" action="{{ route('todo-list.destroy', $item->id) }}">
                                                @method('delete')
                                                @csrf
                                                <div class="d-flex">
                                                    <button type="submit" class="btn btn-danger flex-fill rounded-0"
                                                        onclick="return confirm('Apakah {{ $item->kegiatan }} akan dihapus?')">Hapus</button>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
