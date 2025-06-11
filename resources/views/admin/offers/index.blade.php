@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Offers50%</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('offer50')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="" value="{{$offer50->title}}">
                            @error('title')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Offer Title</label>
                            <input type="text" name="off_title" class="form-control" id="" value="{{$offer50->off_title}}">
                            @error('off_title')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Time</label>
                            <input type="date" name="time" class="form-control" id="" value="{{$offer50->time}}">
                            @error('time')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Logo</label>
                                    <input type="file" name="logo" class="form-control" id=""
                                        onchange="document.getElementById('logo').src=window.URL.createObjectURL(this.files[0]);">
                                    <div class="mt-3">
                                        <img src="{{asset('uploads/offers/' . $offer50->logo)}}" class="img-fluid" style="width: 40px"
                                            alt="logo" id="logo">
                                    </div>
                                    @error('logo')
                                        <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Photo</label>
                                    <input type="file" name="photo" class="form-control" id=""
                                        onchange="document.getElementById('img').src=window.URL.createObjectURL(this.files[0]);">
                                    <div class="mt-3">
                                        <img src="{{asset('uploads/offers/' . $offer50->photo)}}" class="img-fluid w-25"
                                            alt="photo" id="img">
                                    </div>
                                    @error('photo')
                                        <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h4>Offers30%</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('offer30')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="" value="{{$offer30->title}}">
                            @error('title')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Offer Title</label>
                            <input type="text" name="off_title" class="form-control" id="" value="{{$offer30->off_title}}">
                            @error('off_title')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Time</label>
                            <input type="date" name="time" class="form-control" id="" value="{{$offer30->time}}">
                            @error('time')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Logo</label>
                                    <input type="file" name="logo" class="form-control" id=""
                                        onchange="document.getElementById('logo1').src=window.URL.createObjectURL(this.files[0]);">
                                    <div class="mt-3">
                                        <img src="{{asset('uploads/offers/' . $offer30->logo)}}" class="img-fluid" style="width: 40px"
                                            alt="logo" id="logo1">
                                    </div>
                                    @error('logo')
                                        <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="" class="form-label">Photo</label>
                                    <input type="file" name="photo" class="form-control" id=""
                                        onchange="document.getElementById('img1').src=window.URL.createObjectURL(this.files[0]);">
                                    <div class="mt-3">
                                        <img src="{{asset('uploads/offers/' . $offer30->photo)}}" class="img-fluid w-25"
                                            alt="photo" id="img1">
                                    </div>
                                    @error('photo')
                                        <strong class="text-danger">{{$message}}</strong>
                                    @enderror
                                </div>
                            </div>
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
    @if (session('offer50_update'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('offer50_update') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
    @if (session('offer30_update'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('offer30_update') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
@endsection