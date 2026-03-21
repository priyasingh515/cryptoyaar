@extends('frontend.layouts.main')
@section('content')

<div class="ms-breadcrumb-wrapper text-center ">
	<div class="container">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<div class="ms-breadcrumb-container">
					<h1>&nbsp;testing</h1> 
					<ul> 
						<li><a href="/">Home</a></li><li>&nbsp;testing</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div> 

<?php 
  $videos = DB::table('videos')->latest()->get();

?>
@foreach ($videos as $item)
    <video class="video-player" 
           data-id="{{ $item->id }}" 
           width="600" controls>
        <source src="{{ asset('storage/'.$item->video_path) }}" type="video/mp4">
    </video>
@endforeach

{{--  --}}


<script>
let sessionIds = {};

document.querySelectorAll('.video-player').forEach(video => {

    let videoId = video.dataset.id;

    // 🔥 ek hi session id (page load pe)
    sessionIds[videoId] = Date.now() + "_" + videoId;

    // ⏸ pause ya stop
    video.addEventListener('pause', function () {
        sendWatchTime(video);
    });

    // ⏹ end
    video.addEventListener('ended', function () {
        sendWatchTime(video);
    });

});

// 📤 API call
function sendWatchTime(video) {

    let videoId = video.dataset.id;
    let watchTime = Math.floor(video.currentTime); // 🔥 exact time

    console.log("Time:", watchTime);

    // ❌ 30 sec se kam ignore
    if (watchTime < 30) return;

    fetch('/api/watch_time', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            video_id: videoId,
            watch_time: watchTime,
            session_id: sessionIds[videoId]
        })
    });
}
</script>
@endsection
