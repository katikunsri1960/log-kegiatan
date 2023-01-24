@extends('layouts.app')
@section('content')
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">{{$project->name}} </h1>
                    @include('layouts.partials.breadcrumb')
                </div>
                <div class="ms-auto pageheader-btn">
                    <a href="{{route(request()->segment(1).'.index')}}"
                        class="btn btn-success btn-icon text-white me-2">
                        <span>
                        </span> {{__('Back')}}
                    </a>
                </div>
            </div>

            <div class="row row-cards">
                <div class="col-lg-12 col-xl-12">

                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12">
                                    <div class=" row mb-4">
                                        <label class="col-md-3 form-label">Project Name</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Project Name" value="{{$project->name}}" disabled>
                                        </div>
                                    </div>
                                    <div class=" row mb-4">
                                        <label class="col-md-3 form-label">Project Status</label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" placeholder="Project Status" value="@if ($project->status == 1){{__('In Progress')}}
                                            @elseif($project->status == 2){{__('Completed')}}@endif" disabled>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header text-center">
                                    <div class="row">
                                        Tasks
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <form action=""></form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div><!-- COL-END -->
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
<!-- SELECT2 JS -->
<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{asset('assets/js/select2.js')}}"></script>
@endpush
