@extends('layouts.app')
@section('content')
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">{{(ucfirst(request()->segment(1)))}}</h1>
                    @include('layouts.partials.breadcrumb')
                </div>
                <div class="ms-auto pageheader-btn">
                    {{-- <a href="{{route('users.create')}}" class="btn btn-primary btn-icon text-white me-2">
                        <span>
                            <i class="fe fe-plus"></i>
                        </span> Add New User
                    </a> --}}
                </div>
            </div>

            <div class="row row-cards">
                <div class="col-lg-12 col-xl-12">
                    <div class="card">
                        <div class="card-header border-bottom-0 p-4">
                            <div class="col-lg-12">
                                <form action="{{route('feeder-lulusan')}}" method="get">
                                    <div class="form-group">
                                        <label for="" class="form-label">Filter By Angkatan</label>
                                        <div class="input-group">
                                            <select name="start" id="min" class="input form-control" required>
                                                <option value="">Pilih Angkatan Awal</option>
                                                @foreach ($angkatan as $item)
                                                <option value="{{ $item }}" @if (request()->has('start') &&
                                                    request('start') == $item)
                                                    selected
                                                    @endif>{{ $item }}</option>
                                                @endforeach
                                            </select>
                                            <span class="input-group-text btn btn-primary "> to </span>
                                            <select name="end" id="max" class="input form-control" required>
                                                <option value="">Pilih Angkatan Akhir</option>
                                                @foreach ($angkatan as $item)
                                                <option value="{{ $item }}" @if (request()->has('end') && request('end')
                                                    == $item)
                                                    selected
                                                    @endif>{{ $item }}</option>
                                                @endforeach
                                            </select>
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-primary"> Apply!</button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="e-table px-5 pb-5">
                            <canvas id="keberhasilanLulus"></canvas>
                        </div>
                        <div class="px-5 pb-5 mt-5">
                            <table class="table table-bordered table-hover dataTable table-sm" id="info">
                                <thead>
                                    <tr class="text-center align-middle">
                                        <th scope="col" class="align-middle">Tahun</th>
                                        @foreach ($status as $s)
                                        <th class="text-center">Jumlah {{$s}}</th>
                                        @endforeach
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mahasiswaFix as $tahun => $status)
                                    <tr class="text-center">
                                        <th scope="row" class="text-center align-middle">{{ $tahun }}</th>
                                        <td>{{ $status['AKTIF'] }}</td>
                                        <td>{{ $status['Dikeluarkan'] }}</td>
                                        <td>{{ $status['Hilang'] }}</td>
                                        <td>{{ $status['Lainnya'] }}</td>
                                        <td>{{ $status['Lulus'] }}</td>
                                        <td>{{ $status['Mengundurkan diri'] }}</td>
                                        <td>{{ $status['Mutasi'] }}</td>
                                        <td>{{ $status['Putus Studi'] }}</td>
                                        <td>{{ $status['Selesai Pendidikan Non Gelar'] }}</td>
                                        <td>{{ $status['Wafat'] }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div><!-- COL-END -->
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script src="{{asset('assets/plugins/chart/Chart.bundle.js')}}"></script>
<script src="{{asset('assets/js/chart.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/js/table-data.js')}}"></script>
<script>
    $(document).ready(function () {
        $('#info').DataTable({
            "scrollX": true,
            "scrollY": "500px",
            "scrollCollapse": true,
            "paging": false,
            "searching": true,
            "info": false,
            "ordering": true,
            "columnDefs": [
                { "width": "10%", "targets": 0 }
            ],
            "fixedColumns": true
        });
    });

    const ctx = document.getElementById('keberhasilanLulus');

        const data = {!! $mahasiswaPerStatus !!};

        for (let year in data) {
            for (let key in data[year]) {
                if (key === 'Putus Studi' || key === 'Mengundurkan diri') {
                    data[year][key.replace(" ", "")] = data[year][key];
                    delete data[year][key];
                }
            }
        }

        var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: Object.keys(data),  // mengambil tahun sebagai label sumbu x
            datasets: [
                {
                    label: 'AKTIF',
                    data: Object.values(data).map(year => year.AKTIF),
                    backgroundColor: 'rgba(255,0,0,0.5)',
                    // borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Lulus',
                    data: Object.values(data).map(year => year.Lulus),
                    backgroundColor: 'rgba(0,255,0,0.5)',
                    // borderColor: 'rgba(80, 150, 70, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Dikeluarkan',
                    data: Object.values(data).map(year => year.Dikeluarkan),
                    backgroundColor: 'rgba(0,0,255,0.5)',
                    // borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Mengundurkan Diri',
                    data: Object.values(data).map(year => year.Mengundurkandiri),
                    backgroundColor: 'rgba(255,255,0,0.5)',
                    // borderColor: 'rgba(90, 110, 200, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Wafat',
                    data: Object.values(data).map(year => year.Wafat),
                    backgroundColor: 'rgba(255,0,255,0.5)',
                    // borderColor: 'rgba(1, 20, 30, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Mutasi',
                    data: Object.values(data).map(year => year.Mutasi),
                    backgroundColor: 'rgba(0,255,255,0.5)',
                    // borderColor: 'rgba(54, 70, 100, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Putus Studi',
                    data: Object.values(data).map(year => year.PutusStudi),
                    backgroundColor: 'rgba(255,127,0,0.5)',
                    // borderColor: 'rgba(100, 70, 243, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Hilang',
                    data: Object.values(data).map(year => year.Hilang),
                    backgroundColor: 'rgba(127,0,255,0.5)',
                    // borderColor: 'rgba(255, 206, 86, 1)',
                    borderWidth: 1
                },
                {
                    label: 'Lainnya',
                    data: Object.values(data).map(year => year.Lainnya),
                    backgroundColor: 'rgba(0, 0, 0, 1)',
                    // borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }
            ]},
        options: {
            responsive: true,
            interaction: {
                intersect: false,
            },
            scales: {
                y: {
                    beginAtZero: true,
                    stacked: true

                },
                x: {
                    stacked: true
                }

            }
        }
    });
</script>
@endpush
