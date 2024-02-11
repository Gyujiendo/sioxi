@extends('layouts.layout')

@section('title', 'sioxi_bio')

@section('content')

@if(auth()->check())
    <div class="container mt-5">
        <div class="card text-white bg-dark">
            <div class="card-body">
                <h5 class="card-title">Editing Track</h5>
                <p class="card-text"><!-- edit_track.blade.php -->
                    <form action="{{ route('tracks.update', ['id' => $track->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                    
                        <div class="mb-3">
                            <label for="title" class="form-label">Title:</label>
                            <input type="text" id="title" name="title" class="form-control" value="{{ $track->title }}" required>
                        </div>
                    
                        <div class="mb-3">
                            <label for="debut_date" class="form-label">Debut Date:</label>
                            <input type="datetime-local" id="debut_date" name="debut_date" class="form-control" value="{{ \Carbon\Carbon::parse($track->debut_date)->format('Y-m-d\TH:i') }}" required>
                        </div>
                    
                        <div class="mb-3">
                            <label for="lyrics" class="form-label">Lyrics:</label>
                            <textarea id="lyrics" name="lyrics" class="form-control" required>{{ $track->lyrics }}</textarea>
                        </div>
                    
                        <div class="mb-3">
                            <label for="yt_link" class="form-label">YouTube Link:</label>
                            <input id="yt_link" type="text" name="yt_link" class="form-control" value="{{ $track->yt_link }}" required>
                        </div>
                    
                        <button class="btn btn-primary mx-auto text-center" type="submit">Update</button>
                    </form>
                </p>
            </div>
        </div>
    </div>
@else
    <div class="container mt-5">
        <p class="text-center">Fuck off dude, you need to be logged in.</p>
        <p class="text-center">出てけボケ、ログインが必要さ。</p>
    </div>
@endif

<br><br>

@endsection
