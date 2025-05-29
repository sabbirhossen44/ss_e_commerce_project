@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="card">
                        <div class="card-header">
                            <h5>Tag List</h5>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>SL</th>
                                    <th>Tag Name</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($tags as $sl => $tag)
                                    <tr>
                                        <td>{{$tags->firstItem() + $sl}}</td>
                                        <td>{{$tag->tag_name}}</td>
                                        <td>
                                            <a href="" class="btn btn-danger btn-icon delete_btn"
                                                data-link="{{route('tag.delte', $tag->id)}}">
                                                <i class="link-icon" data-feather="trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            <div class="mt-2 d-flex justify-content-end">
                                {{$tags->links()}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3>Add New Tag</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('tags.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">Tag Name</label>
                            <input type="text" name="tag" class="form-control" id="">
                            @error('tag')
                                <strong class="text-danger">{{$message}}</strong>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Add Tag</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_script')
    @if (session('tag_add'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('tag_add') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
    @if (session('tag_delete'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('tag_delete') }}",
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