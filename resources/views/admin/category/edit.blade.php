@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-6 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Category Edit</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('category.update', $category->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Category Name</label>
                            <input type="text" name="category_name" class="form-control" id=""
                                value="{{$category->category_name}}">
                            @error('category_name')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Category Photo</label>
                            <input type="file" name="category_photo" class="form-control" id=""
                                onchange="document.getElementById('photo').src = window.URL.createObjectURL(this.files[0])">
                            <img src="{{asset('uploads/category/' . $category->photo)}}" width="100" height="100"
                                class="object-cover mt-2" id="photo" alt="">
                            @error('category_photo')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update Category</button>
                            <a href="{{route('category')}}" class="btn btn-secondary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_script')
    @if (session('category_update'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('category_update') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
@endsection