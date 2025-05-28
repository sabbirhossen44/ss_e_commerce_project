@extends('layouts.admin')
@section('style')
   
@endsection
@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3>User List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>SL</th>
                            <th>Uset Img</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>Action</th>
                        </tr>
                        @forelse ($users as $sl => $user)
                            <tr>
                                <td>{{$users->firstItem() + $sl}}</td>
                                <td>

                                    @if ($user->photo && file_exists('uploads/user/' . $user->photo))
                                        <img src="{{asset('uploads/user/' . $user->photo)}}" alt="">
                                    @else
                                        <img src="{{asset('avatar/avatar.jpg')}}" alt="">
                                    @endif
                                </td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>
                                    <a href="" class="btn btn-danger btn-icon delete_btn"
                                        data-link="{{route('user.delete', $user->id)}}">
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
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h3>Add User</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('newuser.add')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="" class="form-label">User Name</label>
                            <input type="text" name="user_name" class="form-control" id="">
                            @error('user_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">User Email</label>
                            <input type="email" name="user_email" class="form-control" id="">
                            @error('user_email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">User Passwrod</label>
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
                            <button type="submit" class="btn btn-primary">Add User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_script')
    @if (session('user_add'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('user_add') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
    @if (session('user_delete'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('user_delete') }}",
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