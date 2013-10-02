( function( $ ) {
	if($("#main").hasClass("autostart_videos")){
		$(".as_videos").click(function(){
			$video_id = $(this).attr("id");
			$video_id = $video_id.split('as_');
			$v = $video_id[1];
			$(this).hide();
			$("#"+$v).show();
		})
	}
} )( jQuery );