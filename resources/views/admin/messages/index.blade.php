@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-item-center">
            <h3>daftar pesan</h3>
            <a href="{{ route('cars.create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>subject</th>
                            <th>Pesan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($messages as $message)
                        <tr>
                            <td> {{ $loop->iteration }} </td>
                            <td> {{ $message->nama }} </td>
                            <td> {{ $message->email }} </td>
                            <td> {{ $message->subject }} </td>
                            <td> {{ $message->pesan }} </td>
                            <td>
                                <form onclick="return confirm('anda yakin data ')" action="{{ route('messages.destroy', $message->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">Data Kosong</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection