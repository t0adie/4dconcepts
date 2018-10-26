// JavaScript Document

jQuery(document).ready(function($) {

	var count = 2;
	var total = "<?php echo $wp_query->max_num_pages; ?>";
	$(window).scroll(function(){
		if  ($(window).scrollTop() == $(document).height() - $(window).height()){
			if (count > total){
				return false;
			}else{
				loadArticle(count);
			}
			count++;
		}
	});  

	function loadArticle(pageNumber){    
		$.ajax({
			type:'POST',
			data: "action=infinite_scroll&page_no="+ pageNumber + '&loop_file=content',
			url: "/wp-admin/admin-ajax.php",
			success: function(html){
				$(".entry").append(html);   // This will be the div where our content will be loaded
			}
		});
		
		console.log(pageNumber);
		
		return false;
	}
	
});