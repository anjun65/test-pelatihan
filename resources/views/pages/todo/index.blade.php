@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('to-do-list.create') }}" class="btn btn-primary mb-3">+ Create To Do List</a>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">List</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>

                    @foreach ($items as $item)
                        <tbody>
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                
                                <th>{{ $item->list }}</th>

                                <th>
                                    <form action="{{ route('to-do-list.destroy', $item->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </th>
                            </tr>
                        </tbody>
                    @endforeach
                    
                </table>
            </div>
        </div>
    </div>
@endsection