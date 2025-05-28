@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3>User Profile</h3>
                </div>
                <div class="card-body">

                    <form action="{{route('user.info.update')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="text" class="form-lable">Profile Name</label>
                            <input type="text" name="name" value="{{Auth::user()->name}}" id="" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-lable">Email</label>
                            <input type="email" name="email" disabled value="{{Auth::user()->email}}" id=""
                                class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Profile Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3>Change Password</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('user.pass.change')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-lable">Old Password</label>
                            <input type="password" name="old_pass" class="form-control" id="">
                            @error('old_pass')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-lable">New Password</label>
                            <input type="password" name="password" class="form-control" id="">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-lable">Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" id="">
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3>Profile Photo</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('profile.photo.update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="">Profile Photo</label>
                            <input type="file" name="photo" id="" class="form-control" onchange="document.getElementById('profilePhoto').src = window.URL.createObjectURL(this.files[0])">
                            @error('photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            <img src="{{ asset('uploads/user/' . Auth::user()->photo) }}" alt="Profile Photo"
                                    class="mt-2" style="width: 100px; height: 100px; border-radius: 50%;" id="profilePhoto">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update Photo</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_script')
    @if (session('success'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif
    @if (session('pass_change'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('pass_change') }}",
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif
    @if (session('password_not_match'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "info",
                title: "{{ session('password_not_match') }}",
                showConfirmButton: false,
                timer: 2500
            });
        </script>
    @endif
    @if (session('photo_update'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('photo_update') }}",
                showConfirmButton: false,
                timer: 2500
            });
        </script>
    @endif
@endsection