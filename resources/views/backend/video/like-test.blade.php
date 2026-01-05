@extends('backend.layouts.main')

@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <h4 class="mb-4">Video Like & Comment Testing (Admin)</h4>

            @foreach($videos as $video)
                <div class="card mb-4">
                    <div class="card-body">

                        <h5 class="mb-3">
                            {{ $video->title }}
                            <small class="text-muted">(ID: {{ $video->id }})</small>
                        </h5>

                        {{-- LIKE SECTION --}}
                        <div class="mb-3">
                            <button type="button"
                                    class="btn btn-danger btn-sm like-btn"
                                    data-id="{{ $video->id }}">
                                ❤️ Like
                            </button>

                            <span class="ms-2">
                                Likes:
                                <strong id="like-count-{{ $video->id }}">
                                    {{ $video->likes()->count() }}
                                </strong>
                            </span>
                        </div>

                        {{-- COMMENT FORM --}}
                        <div class="mb-3">
                            <textarea class="form-control comment-input"
                                      data-video="{{ $video->id }}"
                                      rows="2"
                                      placeholder="Write a comment..."></textarea>

                            <button type="button"
                                    class="btn btn-primary btn-sm mt-2 comment-btn"
                                    data-video="{{ $video->id }}">
                                💬 Add Comment
                            </button>
                        </div>

                        {{-- COMMENT LIST --}}
                        <ul class="list-group" id="comment-list-{{ $video->id }}">
                            @foreach($video->comments()->whereNull('parent_id')->latest()->get() as $comment)
                                <li class="list-group-item">
                                    {{ $comment->comment }}
                                </li>
                            @endforeach
                        </ul>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    // LIKE
    document.querySelectorAll('.like-btn').forEach(btn => {
        btn.addEventListener('click', function () {

            let videoId = this.dataset.id;

            fetch(`/admin/videos/${videoId}/like`, {
                method: 'POST',
               headers: {
    'X-CSRF-TOKEN': '{{ csrf_token() }}',
    'Accept': 'application/json'
}
            })
            .then(res => res.json())
            .then(data => {
                document.getElementById('like-count-' + videoId)
                        .innerText = data.likes_count;
            });
        });
    });

    // COMMENT
    document.querySelectorAll('.comment-btn').forEach(btn => {
        btn.addEventListener('click', function () {

            let videoId = this.dataset.video;
            let textarea = document.querySelector(
                `.comment-input[data-video="${videoId}"]`
            );

            let text = textarea.value.trim();
            if (!text) return;

          fetch(`/admin/comments/store`, {
    method: 'POST',
    headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}',
        'Accept': 'application/json',
        'Content-Type': 'application/json'
    },
    body: JSON.stringify({
        video_id: videoId,
        comment: text
    })
})
.then(res => res.json())
.then(data => {
    if (data.success) {
        let li = document.createElement('li');
        li.className = 'list-group-item';
        li.innerText = data.comment.comment;

        document
            .getElementById('comment-list-' + videoId)
            .prepend(li);

        textarea.value = '';
    }
});

        });
    });

});
</script>
@endpush
