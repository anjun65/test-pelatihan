@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <form action="{{ route('to-do-list.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">List</label>
                    <input type="text" name="list" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">Masukkan list anda.</div>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
@endsection