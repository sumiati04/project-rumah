@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @include('layouts._flash')
            <div class="card border-secondary">
                <div class="card-header mb-3">Data Tipe
                    <a href="{{ route('tipe.create') }}" class="btn btn-sm btn-primary" style="float: right;">Add Data
                    </a>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table align-middle" id="dataTable">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tipe Rumah</th>
                                    <th>Tipe Rumah</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($tipe as $data)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $data->tipe_rumah }}</td>
                                    <td>{{ $data->slug }}</td>
                                    <td>
                                        <form action="{{ route('tipe.destroy', $data->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <a href="{{ route('tipe.edit', $data->id) }}" class="btn btn-sm btn-outline-warning">Edit
                                            </a> |
                                            <a href="{{ route('tipe.show', $data->id) }}" class="btn btn-sm btn-outline-info">Show
                                            </a>
                                            <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are You Sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection