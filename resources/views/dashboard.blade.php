@extends('layouts.app')

@section('content')
    <div class="main-panel">
        <div class="row">
            <div class="col-md-12">
                <div class="tab-content tab-transparent-content">
                    <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5 class="mb-2 text-dark font-weight-normal">Total Promo Merchant</h5>
                                        <h2 class="mb-4 text-dark font-weight-bold">{{ $totalPromo }}</h2>
                                        <div
                                            class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent">
                                            <i class="mdi mdi-shopping icon-md absolute-center text-dark"></i>
                                        </div>
                                        <p class="mt-3 mb-0">Promo</p>
                                        <h3 class="mb-0 font-weight-bold mt-2 text-dark">{{ $totalPromo }}</h3>
                                    </div>

                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5 class="mb-2 text-dark font-weight-normal">Total Rating Merchant</h5>
                                        <h2 class="mb-4 text-dark font-weight-bold">{{ $totalRating }}</h2>
                                        <div
                                            class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent">
                                            <i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i>
                                        </div>
                                        <p class="mt-4 mb-0">Rating</p>
                                        <h3 class="mb-0 font-weight-bold mt-2 text-dark">{{ $totalRating }}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5 class="mb-2 text-dark font-weight-normal">Total Merchant</h5>
                                        <h2 class="mb-4 text-dark font-weight-bold">{{ $totalMerchant }}</h2>
                                        <div
                                            class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent">
                                            <i class="mdi mdi-eye icon-md absolute-center text-dark"></i>
                                        </div>
                                        <p class="mt-4 mb-0">Merchant</p>
                                        <h3 class="mb-0 font-weight-bold mt-2 text-dark">{{ $totalMerchant }}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body text-center">
                                        <h5 class="mb-2 text-dark font-weight-normal">Total User</h5>
                                        <h2 class="mb-4 text-dark font-weight-bold">{{ $userCount }}</h2>
                                        <div
                                            class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent">
                                            <i class="mdi mdi-cube icon-md absolute-center text-dark"></i>
                                        </div>
                                        <p class="mt-4 mb-0">User</p>
                                        <h3 class="mb-0 font-weight-bold mt-2 text-dark">{{ $userCount }}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 grid-margin stretch-card">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="card-title">Ranking Merchant</h3>
                                            <button onclick="printTable()" class="btn btn-success"><i class="mdi mdi-printer">Print</i></button>
                                        </div>
                                        <div class="table-responsive pt-5">
                                            <table class="table table-striped" id="order-listing">
                                                <thead>
                                                    <tr>
                                                        <th class="align-middle text-center">No. </th>
                                                        <th class="align-middle text-center">Nama Merchant</th>
                                                        <th class="align-middle text-center">Bobot Nilai Yang Sudah Di Hitung</th>
                                                        <th class="align-middle text-center">Promo</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if ($dataPromo->count() > 0)
                                                        @foreach ($dataPromo as $rs)
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function printTable() {
            var divToPrint = document.getElementById('order-listing');
            var newWin = window.open('', '_blank');
            newWin.document.open();
            newWin.document.write('<html><head><title>Print</title>');
            newWin.document.write('<style>');
            newWin.document.write('table { border-collapse: collapse; width: 100%; }');
            newWin.document.write('table, th, td { border: 1px solid black; }');
            newWin.document.write('th, td { padding: 8px; text-align: center; }');
            newWin.document.write('</style>');
            newWin.document.write('</head><body>');
            newWin.document.write('<h3>Ranking Merchant</h3>');
            newWin.document.write(divToPrint.outerHTML);
            newWin.document.write('</body></html>');
            newWin.document.close();
            newWin.print();
        }
    </script>
@endsection
