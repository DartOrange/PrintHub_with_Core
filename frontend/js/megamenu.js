$(document).ready(function(){$(".burger-btn").on({click:function(){$(".navMobile").addClass("open")}}),$(".navMobile .close").on({click:function(){$(".navMobile").removeClass("open")}}),$(".js-show-sub-menu").length&&$(".js-show-sub-menu").on("click",function(e){$(this).hasClass("active")?($(this).removeClass("active"),$(this).next(".sub-menu-mobile").slideUp(500)):($(this).addClass("active"),$(this).next(".sub-menu-mobile").slideDown(500))})});