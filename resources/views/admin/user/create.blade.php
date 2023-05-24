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
                                                    placeholder="password">
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
                                                    placeholder="password">
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
                                                <select id="role_id" onchange="fakProdi()" class="form-control select2 @error('role_id')
                                                is-invalid
                                            @enderror" name="role_id"
                                                    data-bs-placeholder="Choose One">
                                                    <option label="Choose one"> Pilih Role</option>
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
                                        <div class="row mb-4 mb-0" id="fakultas" hidden>
                                            <label class="col-md-3 form-label">Fakultas</label>
                                            <div class="col-md-9">
                                                <select id="fakultas_id" class="form-control select2 @error('fakultas_id')
                                                is-invalid
                                            @enderror" name="fakultas_id"
                                                    data-bs-placeholder="Choose One">
                                                    <option label="Pilih fakultas">Pilih Fakultas</option>
                                                </select>
                                                @error('fakultas_id')
                                                <span class="invalid-feedback text-danger" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row mb-4 mb-0" id="prodi" hidden>
                                            <label class="col-md-3 form-label">Program Studi</label>
                                            <div class="col-md-9">
                                                <select id="prodi_id" class="form-control select2 @error('prodi_id')
                                                is-invalid
                                            @enderror" name="prodi_id"
                                                    data-bs-placeholder="Choose One">
                                                    <option label="Pilih prodi">Pilih prodi</option>
                                                </select>
                                                @error('prodi_id')
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

<script>


    function fakProdi() {
        var role_id = $('#role_id').val();
        if (role_id == 3) {
            //show fakultas
            $('#fakultas').removeAttr('hidden');
            $('#prodi').attr('hidden', true);

            //ajax get fakultas and insert to select option
            $.ajax({
                url: "{{route('get-fakultas')}}",
                type: "GET",
                dataType: "json",
                success: function (data) {
                    $('#fakultas_id').attr('required', true);
                    $('#fakultas_id').html('');
                    $('#prodi_id').html('');
                    //make it required
                    $('#fakultas_id').append('<option label="Pilih fakultas"></option>');
                    $.each(data, function (key, value) {
                        $('#fakultas_id').append('<option value="' + value.id + '">' + value.nama_fakultas +
                            '</option>');
                    });
                }
            });

        } else if(role_id == 4) {
            //hide fakultas
            $('#fakultas').attr('hidden', true);
            $('#prodi').removeAttr('hidden');

            //ajax get prodi
            $.ajax({
                url: "{{route('get-prodi')}}",
                type: "GET",
                dataType: "json",
                success: function (data) {
                        $('#prodi_id').attr('required', true);
                        $('#prodi_id').html('');

                        //remove all value in fakultas id
                        $('#fakultas_id').html('');

                        $('#prodi_id').append('<option label="Pilih prodi"></option>');
                        $.each(data, function (key, value) {
                            $('#prodi_id').append('<option value="' + value.id + '">'  + value.nama_jenjang_pendidikan + " - " + value.nama_program_studi +
                                '</option>');
                        });
                }
            });
        } else {
           //remove all fakultas and prodi
            $('#fakultas_id').html('');
            $('#prodi_id').html('');
            $('#fakultas').attr('hidden', true);
            $('#prodi').attr('hidden', true);


        }
    }

</script>

@endpush
