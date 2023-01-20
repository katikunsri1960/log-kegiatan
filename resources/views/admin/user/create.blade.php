@extends('layouts.app')
@section('content')
<div class="main-content app-content mt-0">
    <div class="side-app">

        <!-- CONTAINER -->
        <div class="main-container container-fluid">

            <!-- PAGE-HEADER -->
            <div class="page-header">
                <div>
                    <h1 class="page-title">{{ucfirst(request()->segment(2))}} User</h1>
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
                                <div class="col-lg-12 col-md-12 p-9 border">
                                    <form class="form-horizontal" method="POST" action="{{route('users.store')}}">
                                        @csrf
                                        <div class=" row mb-4">
                                            <label class="col-md-3 form-label">Name</label>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control @error('name')
                                                    is-invalid
                                                @enderror" name="name" placeholder="Full Name">
                                                @error('name')
                                                <span class="invalid-feedback text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" row mb-4">
                                            <label class="col-md-3 form-label" for="example-email">Email</label>
                                            <div class="col-md-9">
                                                <input type="email" id="example-email" name="email" class="form-control @error('email')
                                                is-invalid
                                            @enderror" placeholder="Email">
                                                @error('name')
                                                <span class="invalid-feedback text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" row mb-4">
                                            <label class="col-md-3 form-label">Password</label>
                                            <div class="col-md-9">
                                                <input type="password" class="form-control @error('password')
                                                is-invalid
                                            @enderror" name="password"
                                                    placeholder="*************">
                                                @error('password')
                                                <span class="invalid-feedback text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" row mb-4">
                                            <label class="col-md-3 form-label">Password Confirmation</label>
                                            <div class="col-md-9">
                                                <input type="password" class="form-control @error('password_confirmation')
                                                is-invalid
                                            @enderror" name="password_confirmation"
                                                    placeholder="*************">
                                                    @error('password_confirmation')
                                                <span class="invalid-feedback text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class=" row mb-4 mb-0">
                                            <label class="col-md-3 form-label">Role User</label>
                                            <div class="col-md-9">
                                                <select class="form-control select2 @error('role_id')
                                                is-invalid
                                            @enderror" name="role_id"
                                                    data-bs-placeholder="Choose One">
                                                    <option label="Choose one"></option>
                                                    @foreach ($roles as $role)
                                                    <option value="{{$role->id}}">{{ucfirst($role->name)}}</option>
                                                    @endforeach

                                                </select>
                                                @error('role_id')
                                                <span class="invalid-feedback text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-footer mt-2 row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-9">
                                                <button type="submit" class="btn btn-success">Submit</button>
                                                <a href="{{route(request()->segment(1).'.index')}}"
                                                    class="btn btn-primary mx-2">Cancel</a>
                                            </div>

                                        </div>

                                    </form>
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
