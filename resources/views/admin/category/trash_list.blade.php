@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-lg-8 m-auto">
            <div class="card">
                <div class="card-header">
                    <h3>Trash List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <td>SL</td>
                            <td>Category Icon</td>
                            <td>Category Name</td>
                            <td>Action</td>
                        </tr>
                        @forelse ($alTrash as $sl => $Trash)
                            <tr>
                                <td>{{$alTrash->firstItem() + $sl}}</td>
                                <td>
                                    <img src="{{asset('uploads/category/' . $Trash->photo)}}" alt="">
                                </td>
                                <td>{{$Trash->category_name}}</td>
                                <td>
                                    <a href="{{route('category.restore', $Trash->id)}}" class="btn btn-primary btn-icon">
                                        <i class="link-icon" data-feather="refresh-ccw"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-icon delete_btn"
                                        data-link="{{route('category.parmarentdelete', $Trash->id)}}">
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
                        {{$alTrash->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_script')
    @if (session('trash_delete'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('trash_delete') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
    @if (session('category_resotr'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('category_resotr') }}",
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