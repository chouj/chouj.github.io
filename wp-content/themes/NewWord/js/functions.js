//back to top
$(".back2top").hide();$(window).scroll(function(){if($(this).scrollTop()>200){$(".back2top").fadeIn(100)}else{$(".back2top").fadeOut(200)}});$(".back2top").click(function(){$("body,html").animate({scrollTop:0},400);return false});
//Unlimited load
jQuery(document).on("click", "#loadmore", function() {
var _self = jQuery(this),
_postlistWrap = jQuery('.blockGroup'),
_button = jQuery('#loadmore'),
_data = _self.data();
if (_self.hasClass('is-loading')) {
return false
} else {
_button.html('Loading...');
_self.addClass('is-loading');
jQuery.ajax({
url: '/wp-admin/admin-ajax.php',
data: _data,
type: 'post',
dataType: 'json',
success: function(data) {
if (data.code == 500) {
_button.data("paged", data.next).html('Load more');
alert('The service is temporarily unavailable!')
} else if (data.code == 200) {
_postlistWrap.append(data.postlist);
if (data.next) {
_button.data("paged", data.next).html('Load more')
} else {
_button.remove()
}
}
_self.removeClass('is-loading')
}
})
}
});
//Open a new window
function newindow(){
jQuery(document).ready(function(){
  jQuery("a[rel='external'],a[rel='external nofollow'],a[class='comment-edit-link'],.single a").click(
  function(){window.open(this.href);return false})
});
}
newindow();
//PJAX
var pjax_main = '.pjax' , // 容器
pjax_a = 'a[target!=_blank][rel!=nofollow][class!=comment-edit-link][class!=page-numbers][date-ajax!=false]' , // 排除规则
pjax_comtlist = '.commentlist' , // 评论列表id或class  
pjax_comtpagenav = '.pagination' , // 评论分页导航的id或class
pjax_comtpagenav_a = '.pagination a' , // 评论分页导航的a标签
pjax_form = '.search form' , // 搜索表单form
pjax_key = '.search_key' ; // 搜索表单input
function reload_func(){
    // 重载的JS或函数
	newindow();
}
$(function() {    
    a(); //pushState初始化执行一次
});
function body_am(id) { 
    id = isNaN(id) ? $('#' + id).offset().top : id;
    $("body,html").animate({
        scrollTop: id
    }, 0);
    return false;
}
function to_am(url) { 
    var anchor = location.hash.indexOf('#');
    anchor = window.location.hash.substring(anchor + 1);
    body_am(anchor);
}
var home_url = document.location.href.match(/\/\/([^\/]+)\//i)[0]; 
function getFormJson(frm) {
    var o = {};
    var a = $(frm).serializeArray();
    $.each(a,
        function() {
        if (o[this.name] !== undefined) {
            if (!o[this.name].push) {
                o[this.name] = [o[this.name]];
            }
            o[this.name].push(this.value || '');
        } else {
            o[this.name] = this.value || '';
        }
        });
    return o;
}
function l(){
    history.replaceState(
    {    url: window.document.location.href,
        title: window.document.title,
        html: $(document).find(pjax_main).html(),
    }, window.document.title, document.location.href);
}
function a(){
    window.addEventListener( 'popstate', function( e ){
        if( e.state ){
            document.title = e.state.title;
            $(pjax_main).html( e.state.html );
            window.load =  reload_func();// 重载函数
        }
    });    
}
//函数：AJAX核心
function ajax(reqUrl, msg, method, data) {
    if (msg == 'pagelink' || msg == 'search') { // 页面、搜索
        $(pjax_main).fadeTo('slow',0.2);
		$("body,html").animate({scrollTop:0}, 600);
    }else if ( msg == 'comtpagenav' ){ //  评论分页时
        $(pjax_comtlist).fadeTo('slow',0.2);
        $("body,html").animate({scrollTop:$("#comments").offset().top}, 600); 
    }
    $.ajax({
        url: reqUrl, 
        type: method,
        data: data,
        beforeSend : function () {
            l();
        },
        success: function(data) {
            if (msg == 'pagelink' || msg == 'search') {
                $(pjax_main).html($(data).find(pjax_main).html()) ;
                $(pjax_main).fadeTo('normal',1);
            } else if (msg == 'comtpagenav') { // 又如果msg为 评论分页——【3】
                var content = $(data).find(pjax_main).html();
                var pagedstring = $(data).find(pjax_comtpagenav).html();
                $(pjax_main).html(content);
                $(pjax_comtpagenav).html(pagedstring);
                $(pjax_comtlist).fadeTo('normal',1); // 评论列表显示
                $(pjax_comtpagenav).fadeTo('normal',1); // 评论分页显示
            }
            document.title = $(data).filter("title").text();
            if (msg != 'comment') {
                var state = {
                    url: reqUrl,
                    title: $(data).filter("title").text(),
                    html: $(data).find(pjax_main).html(),
                };
                window.history.pushState(state, $(data).filter("title").text(), reqUrl);
            }
        },
        complete: function() {
            if (msg == 'pagelink') {
                to_am(reqUrl) ;
            } 
            window.load =  reload_func();
        },
        timeout: 5000,
        error: function(request) {
            if (msg == msg == 'pagelink' || msg == 'search'){
                location.href = reqUrl;
            }else {
                location.href = reqUrl;
            }
        },
    });
}
//页面ajax
$('body').on("click",pjax_a,
function() {
    ajax($(this).attr("href"), 'pagelink');
    return false;
});
//搜索ajax
$('body').on('submit',pjax_form, 
function() {
    ajax(this.action + '?s=' + $(this).find(pjax_key).val(), 'search'); 
    return false;
});
//评论分页ajax
$('body').on("click",pjax_comtpagenav_a,
function() {
    ajax($(this).attr("href"), 'comtpagenav');
    return false;
});