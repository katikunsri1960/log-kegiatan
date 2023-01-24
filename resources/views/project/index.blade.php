@extends('layouts.app')
@section('content')
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">{{ucfirst(request()->segment(1))}} Page</h1>
                    @include('layouts.partials.breadcrumb')
                </div>
                <div class="ms-auto pageheader-btn">
                    @can('admin')
                    <a href="{{route(request()->segment(1).'.create')}}" class="btn btn-primary btn-icon text-white me-2">
                        <span>
                            <i class="fe fe-plus"></i>
                        </span> Add New Project
                    </a>
                    @endcan

                </div>
            </div>

            <div class="row row-cards">
                <div class="col-lg-12 col-xl-12">
                    <div class="card">
                        @if (session('success'))
                        <div id="notif" class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        <div class="card-header border-bottom-0 p-4">

                        </div>
                        <div class="e-table px-5 pb-5">


                            <table id="basic-datatable" class="table dataTable table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <td class="text-center">No</td>
                                        <td class="text-center">Project Name</td>
                                        <td class="text-center">Status</td>
                                        <td class="text-center">Progress</td>
                                        <td class="text-center">Teams</td>
                                        <td class="text-center">Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projects as $project)
                                    <tr>
                                        <td class="text-center">{{$loop->iteration}}</td>
                                        <td class="text-center">{{$project->name}}</td>
                                        <td class="text-center">
                                            @if ($project->status == 1)
                                            <span class="badge bg-warning">In Progress</span>
                                            @elseif($project->status == 2)
                                            <span class="badge bg-success">Finished</span>
                                            @endif
                                        </td>
                                        <td class="text-center align-middle">
                                            <div class="progress progress-lg">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    style="width: {{$project->progress}}%" aria-valuenow="25"
                                                    aria-valuemin="0" aria-valuemax="100">{{$project->progress}}%</div>
                                            </div>
                                        </td>
                                        <td class="text-center align-middle">
                                            @foreach ($project->users as $user)
                                            <span class="badge bg-primary">{{$user->name}}</span>
                                            @endforeach
                                        </td>
                                        <td class="text-center">
                                            <a href="{{route(request()->segment(1).'.show',$project->id)}}"
                                                class="btn btn-primary btn-sm">View</a>
                                            @can('admin')
                                            <a href="{{route(request()->segment(1).'.edit',$project->id)}}"
                                                class="btn btn-success btn-sm">Edit</a>
                                            <form id="delete-form" action="{{route(request()->segment(1).'.destroy',$project->id)}}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                            @endcan

                                        </td>
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
<script src="{{asset('assets/plugins/notify/js/rainbow.js')}}"></script>
{{-- <script src="{{asset('assets/plugins/notify/js/sample.js')}}"></script> --}}
<script src="{{asset('assets/plugins/notify/js/jquery.growl.js')}}"></script>
<script src="{{asset('assets/plugins/notify/js/notifIt.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/responsive.bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/js/table-data.js')}}"></script>
<script>
    function confirm_delete() {
        return confirm('Are you sure?');
        }

    setTimeout(() => {
            $('#notif').hide();
        }, 3000);

        $(document).on('submit', '#delete-form', function(){
            var result = confirm('Do you want to perform this action?');
            if(!result){
                return false;
            }
        });
</script>
@endpush
