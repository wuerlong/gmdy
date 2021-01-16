//*******************************************************************************
//　html読み込み完了時の動作
//*******************************************************************************

$(document).ready(function(){
	
	$(".sidebarShopAreaTitle").click(function(){
		
		var id = $(this).attr("id");
		var no = id.replaceAll("sidebarShopArea","");
		var $ul = $("#sidebarShopAreaUl"+no);
		
		// 都道府県画像を制御
		if($(this).hasClass("current")){
			// 閉じる
			$(this).removeClass("current");
			$ul.slideUp(500, function(){
				$ul.addClass("hidden");
			});
		}else{
			// 開く
			$(this).addClass("current");
			$ul.slideDown(500, function(){
				$ul.removeClass("hidden");
			});
		}
		
		
	});
	
});


//*******************************************************************************
//　イベント用関数
//*******************************************************************************

$(function(){
	
	
});


//*******************************************************************************
//　windowスクロール
//*******************************************************************************

$(window).scroll(function(){

});

//*******************************************************************************
//　windowリサイズ
//*******************************************************************************

$(window).resize(function(){

});

