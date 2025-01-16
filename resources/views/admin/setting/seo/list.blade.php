@extends('admin.layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Seo List</li>
                    </ol>
                </nav>
            </div>
        </div>       

        <!-- Main content -->
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="card card-primary card-outline">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-5 col-sm-3">
                                @include('admin.setting.side')
                            </div>
                            <div class="col-7 col-sm-9">
                                <div class="card1">
                                    <div class="card-header1 d-flex justify-content-between p-0">
                                        <h3 class="card-title py-3">Seo Listing</h3>
                                        <div class="ml-auto py-2"><a class="btn btn-primary"
                                                href="{{ route('admin.settings.seo') }}">Create</a></div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="table-responsive text-nowrap">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px">#</th>
                                                    <th>Page</th>
                                                    <th>Title</th>
                                                    {{-- <th>Description</th> --}}
                                                    <th>Keywords</th>
                                                    <th>Added on</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($rows as $row)
                                                    <tr>
                                                        <td>{{ $row->id }}</td>
                                                        <td>{{ $row->page }}</td>
                                                        <td>{{ $row->seo_title }}</td>
                                                        {{-- <td>{{ $row->seo_description }}</td> --}}
                                                        <td>{{ $row->seo_keywords }}</td>
                                                        <td>{{ $row->created_at?->format(App\Helper\Helper::universalDateTimeFormat()) ?? '' }}
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown"><i class="bx bx-dots-vertical-rounded"></i></button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="{{ route('admin.settings.seo.edit', $row->id) }}"><i class="bx bx-edit-alt me-2"></i> Edit</a>
                                                                    <a class="dropdown-item" href="{{ route('admin.settings.seo.delete', $row->id) }}"><i class="bx bx-trash me-2"></i> Delete</a>
                                                                </div>
                                                            </div> 
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer1 clearfix">

                                        {!! $rows->withQueryString()->links() !!}

                                        <!-- <ul class="pagination pagination-sm m-0 float-right">
                      <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                    </ul> -->

                                    </div>
                                </div>
                                <!-- /.card -->


                            </div>

                        </div>
                        <!-- /.row -->
                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
@endsection


@push('scripts')
    {{-- page specific JS goes here --}}
    <!-- <script src="{{ asset('js/backend_js/jquery.dataTables.min.js') }}"></script> -->

    <script>
        $('ul.pagination').addClass('pagination-sm m-0 float-right')
    </script>
@endpush
