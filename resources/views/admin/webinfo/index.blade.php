@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Web Info</h4>
                    <a href="{{route('add.webinfo')}}" class="btn btn-primary">Add Info</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <tr>
                            <th>Web Logo</th>
                            <th>Web icon</th>
                            <th>Web Number</th>
                            <th>Web Number Link</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($webinfos as $webinfo)
                            <tr>
                                <td><img src="{{asset('uploads/webinfo/' . $webinfo->logo)}}" alt=""></td>
                                <td><img src="{{asset('uploads/webinfo/' . $webinfo->icon)}}" alt=""></td>
                                <td>{{$webinfo->number}}</td>
                                <td>{{$webinfo->number_link}}</td>
                                <td>{{$webinfo->email}}</td>
                                <td>{{$webinfo->address}}</td>
                                <td>
                                    <input type="checkbox" {{$webinfo->status == 1 ? 'checked' : ''}} data-id="{{$webinfo->id}}"
                                        value="{{$webinfo->status}}" class="webinfostatus" data-toggle="toggle">
                                </td>
                                <td>
                                    <a href="{{route('webinfo.view', $webinfo->id)}}" class="btn btn-primary btn-icon ">
                                        <i class="link-icon" data-feather="eye"></i>
                                    </a>
                                    <a href="{{route('webinfo.edit', $webinfo->id)}}" class="btn btn-secondary btn-icon ">
                                        <i class="link-icon" data-feather="edit"></i>
                                    </a>
                                    <a href="" class="btn btn-danger btn-icon delete_btn"
                                        data-link="{{route('webinfo.delete', $webinfo->id)}}">
                                        <i class="link-icon" data-feather="trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('footer_script')
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
    @if (session('webinfo_delete'))
        <script>
            Swal.fire({
                position: "top-end",
                icon: "success",
                title: "{{ session('webinfo_delete') }}",
                showConfirmButton: false,
                timer: 2000
            });
        </script>
    @endif
    <script>
        $('.webinfostatus').change(function () {
            var web_id = $(this).attr('data-id');
            var status = $(this).is(':checked') ? 1 : 0;
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: 'POST',
                url: '/webinfostatus',
                data: {
                    'web_id': web_id,
                    'status': status
                },
                success: function (data) {

                }
            });
        })
    </script>
@endsection