"use strict";$(function(){$(".h-shopcar span:eq(0)").click(function(){location.href="./car.html"}),$(".recom-right>ul>li").hover(function(){$(this).siblings().stop().fadeTo(300,.4)},function(){$(this).siblings().stop().fadeTo(300,1)});new Swiper(".swiper-container",{slidesPerView:1,spaceBetween:30,autoplay:{delay:2500,disableOnInteraction:!1},loop:!0,pagination:{el:".swiper-pagination",clickable:!0},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"}});var s=setInterval(function(){var o=new Date,t=new Date("2020-08-31 14:03:00"),e=Math.floor(t-o)/1e3;if(1<e){e-=1;var n=Math.floor(e%60),a=Math.floor(e/60%60),i=Math.floor(e/3600%24);return i=24*Math.floor(e/86400)+i,$(".recom-left span:eq(0)").text(i),$(".recom-left span:eq(2)").text(a),void $(".recom-left span:eq(4)").text(n)}clearInterval(s)},1e3);$("#sidebar").offset();$("#sidebar").css("display","none"),$(window).scroll(function(){300<=$(window).scrollTop()?$("#sidebar").fadeIn():$("#sidebar").fadeOut()}),$("#sidebar>ul>li").click(function(){var o=$(this).index();0==o?$("body, html").stop().animate({scrollTop:$("#guess").offset().top},500):1==o?$("body, html").stop().animate({scrollTop:$("#fun").offset().top},500):2==o?$("body, html").stop().animate({scrollTop:$("#household").offset().top},500):3==o?$("body, html").stop().animate({scrollTop:$(".phone").offset().top},500):4==o&&$("body, html").stop().animate({scrollTop:0},500)})});