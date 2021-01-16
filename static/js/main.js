    $(function () {
		
		 
		 
		 
		 
		 $("#foreTab").find("li").each(function(i){//遍历需要切换的标签
			this.index = i;//给其自定义一个属性
			$(this).on('click',function(){//给当前的加一个点击事件
				var self = this;//定义一个self属性等于this
	   
			$(".tabContent").each(function(j){//将需要随着切换而需显示隐藏的元素遍历
				$(this).css('display','none');//先隐藏
				if(j==self.index){//判断当前元素的索引号是否等于当前点击的标签的索引号
					$(this).css("display",'block');//等于就让其显示
				}
				var inputs = $(this).find("input[name^='list']");//找到div里面所有的input
				var val = 0;
				var i = 0;
				var starnum = 0;
				inputs.each(function(){
				  i += 1;
				  val +=  + this.value;//值转换为number，然后相加
				});
				//alert(val);
				//alert(i);
				starnum = Math.ceil(val/i);
				
				var starinfor = '';
				
				if(starnum < 1){starinfor = '<img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" >';}
				if(starnum <= 2&& starnum >= 1){starinfor = '<img src="img/star1.png" ><img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" >';}
				if(starnum <= 4 && starnum >= 3){starinfor = '<img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star.png" ><img src="img/star.png" ><img src="img/star.png" >';}
				if(starnum <= 6 && starnum >= 5){starinfor = '<img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star.png" ><img src="img/star.png" >';}
				if(starnum <= 9 && starnum >= 7){starinfor = '<img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star.png" >';}
				if(starnum > 9){starinfor = '<img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" ><img src="img/star1.png" >';}
				
				//alert(starnum);
				
				if(j==0){
					$("#infolist01").html(starinfor);
				}
				if(j==1){
					$("#infolist02").html(starinfor);
				}
				if(j==2){
					$("#infolist03").html(starinfor);
				}
				if(j==3){
					$("#infolist04").html(starinfor);
				}
				if(j==4){
					$("#infolist05").html(starinfor);
				}
				if(j==5){
					$("#infolist06").html(starinfor);
				}
				if(j==6){
					$("#infolist07").html(starinfor);
				}
				
				
				
				
				
				
			})
		  })
		
		})
		
		document.getElementById("infolist").click();

        //评分
        var starRating = 10;
		
		/**
		$('.photo span').each(function(){
			var index = $(this).index()+1;
            var count = starRating / 2
            if(count == 5) {
                $(this).find('.high').css('z-index',1);
            } else {
                $(this).eq(count).prevAll().find('.high').css('z-index',1);
            }
           $(this).parent('.photo').find("input[name^='list']").val((index*2).toFixed(1)-2)
		 });
		
		$('.photo span').on('mouseenter',function () {
            var index = $(this).index()+1;
            $(this).prevAll().find('.high').css('z-index',1)
            $(this).find('.high').css('z-index',1)
            $(this).nextAll().find('.high').css('z-index',0)
            $(this).parent('.photo').find("input[name^='list']").val((index*2).toFixed(0))
        })
		
		**/
        $('.photo span').on('mouseenter',function () {
            var index = $(this).index()+1;
            $(this).prevAll().find('.high').css('z-index',1)
            $(this).find('.high').css('z-index',1)
            $(this).nextAll().find('.high').css('z-index',0)
            $(this).parent('.photo').find("input[name^='list']").val((index*2).toFixed(0))
        })
		
        $('.photo span').on('mouseleave',function () {
            $(this).find('.high').css('z-index',0)
			var index = $(this).index()+1;
            var count = starRating / 2
            if(count == 5) {
                $(this).find('.high').css('z-index',1);
            } else {
                $(this).eq(count).prevAll().find('.high').css('z-index',1);
            }
           $(this).parent('.photo').find("input[name^='list']").val((index*2).toFixed(0))
        })

        $('.photo span').on('click',function () {
            var index = $(this).index()+1;
            $(this).prevAll().find('.high').css('z-index',1)
            $(this).find('.high').css('z-index',1)
            $(this).nextAll().find('.high').css('z-index',0)
             $(this).parent('.photo').find("input[name^='list']").val((index*2).toFixed(0))
           // alert('评分：'+(starRating.toFixed(1)+'分'))
        })

        //取消评分
        $('.cancleStar').on('click',function () {
            starRating = 0;
            $('.photo span').find('.high').css('z-index',0);
            $('.starNum').html(starRating.toFixed(1)+'分');
        })
        //确定评分
        $('.sureStar').on('click',function () {
            if(starRating===0) {
                alert('最低一颗星！');
            } else {
               alert('评分：'+(starRating.toFixed(1)+'分'))
            }
        })
    })