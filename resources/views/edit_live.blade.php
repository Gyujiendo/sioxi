@extends('layouts.layout')

@section('title', 'sioxi_bio')

@section('content')

@if(auth()->check())
<div class="container mt-5">
    <div class="card text-white bg-dark">
        <div class="card-body">
            <h5 class="card-title">Editing Live</h5>
            <p class="card-text">
                <form action="{{ route('live.update', ['id' => $live->id]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="location" name="location" value="{{ $live->location }}" required>
                      </div>
                      <div class="mb-3">
                        <label for="live_date" class="form-label">Live Date</label>
                        <input type="datetime-local" class="form-control" id="live_date" name="live_date" value="{{ \Carbon\Carbon::parse($live->live_date)->format('Y-m-d\TH:i') }}" required>
                      </div>
                      <div class="mb-3">
                        <label for="songs_played" class="form-label">Songs Played</label>
                        <textarea class="form-control" id="songs_played" name="songs_played">{{ $live->songs_played }}</textarea>
                      </div>
                      <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description">{{ $live->description }}</textarea>
                      </div>
                
                    <button class="btn btn-primary mx-auto text-center" type="submit">Update</button>
                </form></p>
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
