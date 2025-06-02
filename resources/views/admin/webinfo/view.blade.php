@extends('layouts.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h4>Web Info</h4>
                    <a href="{{route('web.info')}}" class="btn btn-primary">WebInfo List</a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <tr>
                            <td>Web Logo</td>
                            <td>
                                <img src="{{asset('uploads/webinfo/' . $webinfo->logo)}}" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td>Web icon</td>
                            <td>
                                <img src="{{asset('uploads/webinfo/' . $webinfo->icon)}}" alt="">
                            </td>
                        </tr>
                        <tr>
                            <td>Web Title</td>
                            <td class="text-wrap">
                                {{$webinfo->title}}
                            </td>
                        </tr>
                        <tr>
                            <td>Web Number</td>
                            <td>
                                {{$webinfo->number}}
                            </td>
                        </tr>
                        <tr>
                            <td>Web Number Link</td>
                            <td>{{$webinfo->number_link}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{$webinfo->email}}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>{{$webinfo->address}}</td>
                        </tr>
                        <tr>
                            <td>Facebook</td>
                            <td>{{$webinfo->facebook}}</td>
                        </tr>
                        <tr>
                            <td>Twitter</td>
                            <td>{{$webinfo->twitter}}</td>
                        </tr>
                        <tr>
                            <td>YouTube</td>
                            <td>{{$webinfo->youtube}}</td>
                        </tr>
                        <tr>
                            <td>Instagram</td>
                            <td>{{$webinfo->instagram}}</td>
                        </tr>
                        <tr>
                            <td>Linkedin</td>
                            <td>{{$webinfo->linkedin}}</td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer text-center">
                    <a href="{{route('webinfo.edit', $webinfo->id)}}" class="btn btn-primary">Eidt</a>
                </div>
            </div>
        </div>
    </div>
@endsection