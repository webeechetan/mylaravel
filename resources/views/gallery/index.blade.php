@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-3 text-center">
            @foreach ($files as $file)
                <div class="col-md-3 ml-2 alert alert-info">
                    <h6>File</h6>
                    <a href="{{ route('folder',$file) }}">{{ $file }}</a>
                </div>
            @endforeach
            @foreach ($folders as $folder)
                <div class="col-md-3 alert alert-success">
                    <h6>Folder</h6>
                    <a href="{{ route('folder',$folder) }}">{{ $folder }}</a>
                </div>
            @endforeach
        </div>
    </div>
@endsection