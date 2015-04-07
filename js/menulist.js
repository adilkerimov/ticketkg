// JavaScript Document

$(document).ready(function() {
    
$("a").css('cursor', 'pointer');

/*$("#login").hover(
function() {
$(this).find("#sub-login").removeClass("none");
},
function() {
$(this).find("#sub-login").addClass("none");
})*/


$("#login_block").click(
function() {
$(this).find("#sub-login").removeClass("none");
})




$("ul.menus li").mouseover(
function() {
$(this).children("div#menu").removeClass("none");
})

$("ul.menus li").mouseout(
function() {
$(this).children("div#menu").addClass("none");
})



$("div.add_item").click(
function(){
var i = $(".new_item").length;
$(this).siblings(".clear").after("<div class='new_item' id='"+i+"'></div>");
var html = $(this).siblings(".select").html();
$("#"+i).html(html);
$("#"+i).children("select").attr("name","id_specification"+i);
var count = i + 1;
$("#counter").val(count);
})

/*
// берем все необходимые нам картинки
var $img = $('img.imagess');
             
// ждем загрузки картинки браузером
$img.load(function(){
    // удаляем атрибуты width и height
    $(this).removeAttr("width")
           .removeAttr("height")
           .css({ width: "", height: "" });
 
    // получаем заветные цифры
    var   = $(this).width();
    var height = $(this).height();
});
 
// для тех браузеров, которые подгрузку с кеша не считают загрузкой, пишем следующий код
$img.each(function() {
    var src = $(this).attr('src');
    $(this).attr('src', '');
    $(this).attr('src', src);
});
*/
})


$(document).click(function(e) {
  if ($(e.target).filter('#sub-login,#login,#log_block,#login_data,#identity,#password,#login_enter,form,#remember').length != 1) {
    $('#sub-login').addClass("none");
  }
});
