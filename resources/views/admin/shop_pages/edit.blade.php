@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Shop Page Edit</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('shop.update', $data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="" value="{{$data->title}}">
                            @error('title')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Photo</label>
                            <input type="file" name="photo" class="form-control" id="" onchange="document.getElementById('shop_photo').src = window.URL.createObjectURL(this.files[0])">
                            <div class="mt-3">
                                <img src="{{asset('uploads/shop_page/'.$data->photo)}}" class="" style="width: 100%; height: 464px; object-fit: cover;" alt="" id="shop_photo">
                            </div>
                            @error('photo')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add Content</button>
                            <a href="{{route('shoppage')}}" class="btn btn-secondary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_script')
     @if (session('shoppage_update'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('shoppage_update') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
@endsection