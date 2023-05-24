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
                    <a href="{{route('users.create')}}" class="btn btn-primary btn-icon text-white me-2">
                        <span>
                            <i class="fe fe-plus"></i>
                        </span> Add New User
                    </a>
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
                                        <td class="text-center">Name</td>
                                        <td class="text-center">E-Mail</td>
                                        <td class="text-center">Roles</td>
                                        <td class="text-center">Action</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                    <tr>
                                        <td class="text-center align-middle">{{$user->name}}</td>
                                        <td class="text-center align-middle">{{$user->email}}</td>
                                        <td class="text-center align-middle">
                                            <span class="badge bg-primary">{{ucfirst($user->role->name)}}
                                            @if ($user->role->id == 4)
                                                {{$user->fakprodi->nama_jenjang_pendidikan}} - {{$user->fakprodi->nama_program_studi}}
                                            @elseif($user->role->id == 3)
                                                {{ucfirst($user->fakprodi->nama_fakultas)}}
                                            @endif
                                            </span>

                                        </td>
                                        <td class="text-center">
                                            <div class="btn-group align-middle">
                                                <a class="btn btn-primary badge" data-target="#user-form-modal"
                                                    data-bs-toggle="" type="button"
                                                    href="{{route(request()->segment(1).'.edit', $user->id)}}">Edit</a>
                                                <form id="delete-form"
                                                    action="{{ route(request()->segment(1).'.destroy', $user->id) }}"
                                                    method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button class="btn btn-danger badge" type="submit"><i
                                                        class="fa fa-trash text-white"></i></button>
                                                </form>
                                            </div>
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
