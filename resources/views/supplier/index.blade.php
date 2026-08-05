@extends('layouts.app')

@section('title', 'Supplier')

@section('content')

    @include('layouts.navbar')

    <div class="container my-4">
        <div class="card border-0 shadow-sm rounded-4 p-3">

            <div
                class="card-body bg-primary text-white rounded-4 p-4 mb-4 d-flex justify-content-between align-items-center flex-wrap gap-3">
                <div>
                    <h3 class="fw-bold mb-1 d-flex align-items-center gap-2">
                        Manajemen Supplier
                    </h3>
                    <p class="mb-0 text-white-50 small">Kelola seluruh data supplier.</p>
                </div>
                <a href="{{ route('supplier.create') }}"
                    class="btn btn-light text-primary fw-bold px-3 py-2 rounded-3 shadow-sm">
                    + Tambah Supplier
                </a>
            </div>

            <div class="px-2">
                <form action="{{ route('supplier.index') }}" method="GET" class="mb-4">
                    <div class="input-group">
                        <input type="text" name="search" value="{{ request('search') }}"
                            class="form-control py-2 ps-3 border-end-0" placeholder="Cari supplier...">
                        <button class="btn btn-primary px-4 fw-bold" type="submit">
                            Search
                        </button>
                    </div>
                </form>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th scope="col" class="fw-bold text-secondary">#</th>
                                <th scope="col" class="fw-bold text-secondary">Nama Supplier</th>
                                <th scope="col" class="fw-bold text-secondary">Alamat</th>
                                <th scope="col" class="fw-bold text-secondary">No. Telepon</th>
                                <th scope="col" class="fw-bold text-secondary">Aksi</th>
                                <th scope="col" class="fw-bold text-secondary text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($suppliers as $supplier)
                            <tr>
                                <th scope="row" class="text-secondary fw-normal">{{ $suppliers->firstItem() + $loop->index }}</th>
                                <td class="fw-semibold text-dark">{{ $supplier->nama }}</td>
                                <td class="text-secondary">{{ $supplier->alamat }}</td>
                                <td class="fw-bold text-success">{{ $supplier->no_telp }}</td>
                                <td class="text-center">
                                    <div class="d-flex justify-content-center gap-1">
                                        <a href="{{ route('supplier.show', $supplier) }}" class="btn btn-info btn-sm text-white rounded-2 px-2 py-1">
                                            Detail
                                        </a>

                                        @can('view', $supplier)
                                            <a href="{{ route('supplier.edit', $supplier) }}" class="btn btn-warning btn-sm text-white rounded-2 px-2 py-1">
                                                Edit
                                            </a>
                                        @endcan

                                        @can('delete', $supplier)
                                            <form action="{{ route('supplier.destroy', $supplier) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin akan menghapus supplier ini?');" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm rounded-2 px-2 py-1">
                                                    Hapus
                                                </button>
                                            </form>
                                        @endcan
                                    </div>
                                </td>
                            <td class="text-center">
                                    <div class="d-flex justify-content-center gap-1">
                                        <a href="{{ route('penjualan.show', $sale) }}" class="btn btn-info btn-sm text-white rounded-2 px-2 py-1">
                                            Detail
                                        </a>

                                        @can('view', $sale)
                                            <a href="{{ route('penjualan.edit', $sale) }}" class="btn btn-warning btn-sm text-white rounded-2 px-2 py-1">
                                                Edit
                                            </a>
                                        @endcan

                                        @can('delete', $sale)
                                            <form action="{{ route('penjualan.destroy', $sale) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin akan menghapus penjualan ini?');" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm rounded-2 px-2 py-1">
                                                    Hapus
                                                </button>
                                            </form>
                                        @endcan
                                    </div>
                            </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center py-5">
                                    <h4 class="fw-bold text-dark mb-0">Data tidak tersedia.</h4>
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>

                {{-- <div class="d-flex justify-content-end mt-3">
                {{ $sales->links() }}
            </div> --}}
            </div>

        </div>
    </div>

@endsection
