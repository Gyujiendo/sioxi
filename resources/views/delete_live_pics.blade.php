@extends('layouts.layout')

@section('title', 'sioxi_bio')

@section('content')

<br><br>

@if(auth()->check())
<div class="container mt-4">
    <form action="{{ route('delete_gallery', ['live_id' => $live->id]) }}" method="POST">
        @csrf
        @method('DELETE')

        <div class="row">
            <h2 class="pb-3 pl-5 text-center">ギャラリー編集</h2>
            <br><br><br>
            @php $count = -1; @endphp
            @foreach ($live->media as $media)
                @if (!$loop->first) <!-- Check if it's not the first iteration -->
                    <div class="col-2 gallery-item">
                        <label>
                            <input type="checkbox" name="selected_pictures[]" value="{{ $media->id }}" style="position: absolute; height: 20px; width: 20px;">
                            <img src="{{ asset('storage/'.$media->file_path) }}" class="card-img-top blur" alt="..." style="object-fit: cover; width: 200px; height: 200px;">
                        </label>
                    </div>
                @endif
                @if (++$count % 6 == 0 || $loop->last)
                    <!-- Close the row after every 12 columns or on the last iteration -->
                    </div><br><div class="row">
                @endif
            @endforeach
        </div>

        <br><br>

        <div class="container">
            <div class="row">
                <div class="col-md-6 mx-auto text-center justify-content-center">
                    <button type="submit" class="btn btn-danger">選択した写真を削除</button></form>
                </div>
                <div class="col-md-6 mx-auto text-center justify-content-center">
                    <div>
                        <form id="pictureForm" action="{{ route('add_pictures', ['live_id' => $live->id]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="file" name="pictures[]" multiple accept="image/*" id="pictureInput">
                            <button type="submit" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="送信する前に写真をアップしてください！">写真をアップロード</button>
                        </form>
                    </div>
                </div>
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

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    document.getElementById('pictureForm').addEventListener('submit', function(event) {
            const pictureInput = document.getElementById('pictureInput');
            if (pictureInput.files.length === 0) {
                // No picture selected, show tooltip
                const tooltip = new bootstrap.Tooltip(document.getElementById('tooltipPicture'));
                tooltip.show();
                event.preventDefault(); // Prevent form submission
            }
        });
</script>

@endsection
