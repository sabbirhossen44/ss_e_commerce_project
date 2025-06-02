@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Add WebInfo</h3>
                    <a href="{{route('web.info')}}" class="btn btn-primary">WebInfo List</a>
                </div>
                <div class="card-body">
                    <form action="{{route('webinfo.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Logo</label>
                            <input type="file" name="logo" class="form-control" id="">
                            @error('logo')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Icon</label>
                            <input type="file" name="icon" class="form-control" id="">
                            @error('icon')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Web Title</label>
                            <input type="text" name="title" class="form-control" id="">
                            @error('title')
                                <strong class="text-denger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Number</label>
                            <input type="number" name="number" class="form-control" id="">
                            @error('number')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="">
                            @error('email')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" id="">
                            @error('address')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Facebook</label>
                            <input type="url" name="facebook" class="form-control" id="">
                            @error('facebook')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Twitter</label>
                            <input type="url" name="twitter" class="form-control" id="">
                            @error('twitter')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">YouTube</label>
                            <input type="url" name="youtube" class="form-control" id="">
                            @error('youtube')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Instagram</label>
                            <input type="url" name="instagram" class="form-control" id="">
                            @error('instagram')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Linkedin</label>
                            <input type="url" name="linkedin" class="form-control" id="">
                            @error('linkedin')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_script')
    @if (session('wibinfo_add'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('wibinfo_add') }}",
                showConfirmButton: false,
                timer: 2500
            });
        </script>
    @endif
@endsection