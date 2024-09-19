@extends('layouts.app')

@section('content')
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">DATA MERCHANTS</h3>
                <a href="{{ route('merchant.create') }}" class="btn btn-primary"><i class="mdi mdi-plus"> Tambah Data</i></a>
                <div class="row">
                    <div class="col-12">
                        <table class="table-hover" id="order-listing">
                            @if (Session::has('success'))
                                <div class="alert alert-success" role="alert">
                                    {{ Session::get('success') }}
                                </div>
                            @endif
                            @if (session('warning'))
                                <div class="alert alert-warning">
                                    {{ session('warning') }}
                                </div>
                            @endif
                            @if (session('danger'))
                                <div class="alert alert-danger">
                                    {{ session('danger') }}
                                </div>
                            @endif
                            <thead>
                                <tr>
                                    <th class="align-middle text-center text-black">No. </th>
                                    <th class="align-middle text-center text-black">Nama Merchant</th>
                                    <th class="align-middle text-center text-black">Tanggal Data</th>
                                    <th class="align-middle text-center text-black">Jumlah Orderan Mingguan</th>
                                    <th class="align-middle text-center text-black">Rating Outlet Merchant</th>
                                    <th class="align-middle text-center text-black">Rata Rata Harga Jual</th>
                                    <th class="align-middle text-center text-black">Waktu Pengiriman</th>
                                    <th class="align-middle text-center text-black">Bobot Nilai Yang Sudah Di Hitung</th>
                                    <th class="align-middle text-center text-black">Promo</th>
                                    <th class="align-middle text-center text-black">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($merchant->count() > 0)
                                    @foreach ($merchant as $rs)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $rs->nama_merchant }}</td>
                                            <td class="text-center">{{ $rs->tanggal }}</td>
                                            <td class="text-center">{{ $rs->order }}</td>
                                            <td class="text-center">{{ $rs->rating }}</td>
                                            <td class="text-center">{{ $rs->harga_jual }}</td>
                                            <td class="text-center">{{ $rs->delivery }}</td>
                                            <td class="text-center"> {{ $rs->weight_order }} </td>
                                            <td class="text-center"> {{ $rs->promo }}%</td>
                                            <td class="text-center">
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('merchant.show', $rs->id) }}" type="button"
                                                        class="btn-outline-grey"><i class="mdi mdi-eye"></i></a>
                                                </div>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('merchant.edit', $rs->id) }}" type="button"
                                                        class="btn-outline-grey"><i class="mdi mdi-pencil-box"></i></a>
                                                </div>
                                                <div class="btn-group" role="group">
                                                    <form action="{{ route('merchant.destroy', $rs->id) }}" method="POST"
                                                        type="button" class="btn btn-danger p-0"
                                                        onsubmit="return confirm('Delete?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="btn btn-danger p-0"><i
                                                                class="mdi mdi-eraser"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
