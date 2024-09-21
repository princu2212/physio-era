@extends('backend.layout.app')
@section('title')
    Manage Service
@endsection
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Manage Service</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                                <li class="breadcrumb-item active">Manage Service</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable" class="table table-bordered wrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Link</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($service as $item)
                                        <tr>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->link }}</td>
                                            <td class="text-center"><img
                                                    src="{{ !empty($item->image) ? url('upload/service/' . $item->image) : url('upload/no_image.jpg') }}"
                                                    class="rounded" style="width: 40px; height:30px;"></td>
                                            <td>{!! $item->description !!}</td>
                                            <td>
                                                <div class="dropdown text-center">
                                                    <a class="dropdown-button" id="dropdown-menu-{{ $item->id }}"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="fa fa-ellipsis-v"></i>
                                                    </a>
                                                    <div class="dropdown-menu"
                                                        aria-labelledby="dropdown-menu-{{ $item->id }}">
                                                        <a class="dropdown-item"
                                                            href="{{ route('service.edit', $item->id) }}">
                                                            <i class="fa fa-edit"></i>
                                                            {{ trans('Edit') }}
                                                        </a>
                                                        <form id="delete-{{ $item->id }}"
                                                            action="{{ route('service.delete', $item->id) }}"
                                                            method="POST">
                                                            @method('DELETE')
                                                            @csrf
                                                        </form>
                                                        <a class="dropdown-item" href="#"
                                                            onclick="if(confirm('{{ trans('Are you sure to delete?') }}')) document.getElementById('delete-{{ $item->id }}').submit()">
                                                            <i class="fa fa-trash"></i>
                                                            {{ trans('Delete') }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
