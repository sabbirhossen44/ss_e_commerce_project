@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>Category List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td>SL</td>
                            <td>Category Icon</td>
                            <td>Category Name</td>
                            <td>Action</td>
                        </tr>
                        @forelse ($categories as $sl => $category)
                            <tr>
                                <td>{{$categories->firstItem() + $sl}}</td>
                                <td>
                                    <img src="{{asset('uploads/category/' . $category->photo)}}" alt="">
                                </td>
                                <td>{{$category->category_name}}</td>
                                <td>
                                    <a href="" class="btn btn-primary btn-icon">
                                        <i class="link-icon" data-feather="edit"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-icon delete_btn"
                                        data-link="{{route('category.softdelte', $category->id)}}">
                                        <i class="link-icon" data-feather="trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center text-danger">No User Available</td>
                            </tr>
                        @endforelse
                    </table>
                    <div class="mt-2 d-flex justify-content-end">
                        {{$categories->links()}}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3>Category Add</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('category.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Category Name</label>
                            <input type="text" name="category_name" class="form-control" id="">
                            @error('category_name')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Category Photo</label>
                            <input type="file" name="category_photo" class="form-control" id="">
                            @error('category_photo')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add Category</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_script')
    @if (session('category_ad'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('category_ad') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
    @if (session('soft_delete'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('soft_delete') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
    <script>
        $('.delete_btn').click(function (e) {
            e.preventDefault();
            var link = $(this).data('link');
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: "btn btn-danger"
                },
                buttonsStyling: false
            });
            swalWithBootstrapButtons.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    swalWithBootstrapButtons.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    });
                    window.location.href = link;
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire({
                        title: "Cancelled",
                        text: "Your imaginary file is safe :)",
                        icon: "error"
                    });
                }
            });
        })
    </script>
@endsection