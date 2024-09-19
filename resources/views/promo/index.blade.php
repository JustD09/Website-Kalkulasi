@extends('layouts.app')

@section('content')
     <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">DATA PROMO MERCHANT</h3>
                <div class="table-responsive pt-3">
                    <table class="table table-hover">
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
                                <th class="align-middle text-center">No. </th>
                                <th class="align-middle text-center">Nama Merchant</th>
                                <th class="align-middle text-center">Bobot Nilai Yang Sudah Di Hitung</th>
                                <th class="align-middle text-center">Promo</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($promo->count() > 0)
                                @foreach ($promo as $rs)
                                    <tr>
                                        <td class="align-middle text-center">{{ $loop->iteration }}</td>
                                        <td class="align-middle text-center">{{ $rs->nama_merchant }}</td>
                                        <td class="align-middle text-center">{{ $rs->weight_order }}</td>
                                        <td class="align-middle text-center">{{ $rs->promo }}%</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
