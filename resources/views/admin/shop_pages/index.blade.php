@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>Shop Page Content List</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Title</th>
                            <th>Photo</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($contents as $sl => $content)
                            <tr>
                                <td>{{$sl + 1}}</td>
                                <td class="text-wrap">{{$content->title}}</td>
                                <td>
                                    @php
                                        $photo = public_path('uploads/shop_page/' . $content->photo);
                                    @endphp
                                    @if ($content->photo && file_exists($photo))
                                        <img src="{{asset('uploads/shop_page/' . $content->photo)}}" alt="">
                                    @endif
                                </td>
                                <td>
                                    <input type="checkbox" {{$content->status}}
                                    data-id="{{$content->id}}"
                                    value="{{$content->status}}"
                                    name="" class="status" data-toggle="toggle" id="">
                                </td>
                                <td>
                                    
                                    <a href="" class="btn btn-secondary btn-icon">
                                        <i data-feather="edit"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-icon delete_btn"
                                        data-link="">
                                        <i data-feather="trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <h4>Add Content</h4>
                </div>
                <div class="card-body">
                    <form action="{{route('shop.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="">
                            @error('title')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Photo</label>
                            <input type="file" name="photo" class="form-control" id="">
                            @error('photo')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add Content</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_script')
    @if (session('shoppage_store'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('shoppage_store') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
@endsection