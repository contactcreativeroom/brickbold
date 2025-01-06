@extends('admin.layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container">
            <h2>Meta Details</h2>
            <div class="card-header d-flex align-items-center mb-5">
                <h5 class="card-title mb-0 flex-grow-1">Meta detail List</h5>
                <div><a href="{{route('admin.meta.save')}}" class="btn btn-primary">Add meta details</a></div>
            </div>
            @if($meta_details->isEmpty())
            <div class="alert alert-danger text-center">
                No Records found.
            </div>
            @else
            <table class="table table-hover">
                <thead class="table-primary">
                    <tr>
                        <th scope="col" class="border">#</th>
                        <th scope="col" class="border">Page</th>
                        <th scope="col" class="border">Title</th>
                        <th scope="col" class="border">Description</th>
                        <th scope="col" class="border">Keywords</th>
                        <th scope="col" class="border">Operations</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($meta_details as $meta_detail)
                    <tr>
                        <td>{{$loop->iteration}}.</td>
                        <td>
                            @foreach(array_flip(config('constants.STATIC_PAGES')) as $key=>$value)
                            @if($meta_detail->related_id==$key)
                            {{$value}}
                            @endif
                            @endforeach
                        </td>
                        <td>{{$meta_detail->title}}</td>
                        <td>{{$meta_detail->description}}</td>
                        <td>{{$meta_detail->keywords}}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('admin.meta.update',$meta_detail->id)}}">Edit</a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>


            @endif
        </div>
    </div>
</div>
<!-- / Content -->
@endsection

@push('scripts')


@endpush