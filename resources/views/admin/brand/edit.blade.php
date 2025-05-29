@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Brand</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('brand.update', $brand->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Brand Name</label>
                            <input type="text" name="brand_name" class="form-control" id="" value="{{$brand->brand_name}}">
                            @error('brand_name')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Brand Logo</label>
                            <input type="file" name="brand_logo" class="form-control" id=""
                                onchange="document.getElementById('photo').src = window.URL.createObjectURL(this.files[0]);">
                            <img src="{{asset('uploads/brand/' . $brand->brand_logo)}}" height="100" width="100"
                                class="object-cover mt-2" id="photo" alt="">
                            @error('brand_logo')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update Brand</button>
                            <a href="{{route('brand')}}" class="btn btn-secondary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_script')
    @if (session('brand_update'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('brand_update') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
@endsection