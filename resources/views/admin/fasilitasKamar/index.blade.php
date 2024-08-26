@extends('admin.layout')

@section('content')
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-0">Fasilitas Kamar</h4>
                    <div class="d-flex flex-row-reverse">
                        <a class="btn btn-primary btn-lg mt-0 mb-3" href="/fasilitasKamar/create"><i
                                class="mdi mdi-library-plus"></i> Add New</a>
                    </div>
                    @if (session()->has('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> No. </th>
                                    <th> Tipe Kamar </th>
                                    <th> Fasilitas </th>
                                    <th> Aksi </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fasilitasKamar as $row)
                                    <tr>
                                        <td> {{ $loop->iteration }} </td>
                                        <td> {{ $row->tipe_kamar }} </td>
                                        <td> {{ $row->fasilitas }} </td>
                                        <td>
                                            <button class="badge bg-info border-0"><a
                                                    href="{{ route('fasilitasKamar.edit', $row->id) }}"><i
                                                        class="mdi mdi-pencil"></i></a></button>
                                            &nbsp;
                                            <form action="{{ route('fasilitasKamar.destroy', $row->id) }}" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="badge bg-danger border-0"
                                                    onclick="return confirm('Apakah Anda yakin?')"><i
                                                        class="mdi mdi-popcorn"></i></button>
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
@endsection
