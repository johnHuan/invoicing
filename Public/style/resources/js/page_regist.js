$(document).ready(function(){
	
	//获取JS传递的语言参数
	var utils = new Utils();
	var args = utils.getScriptArgs();	
	
	
	//隐藏Loading/注册失败 DIV
	$(".loading").hide();
	$(".login-error").hide();
	registError = $("<label class='error repeated'></label>");
	
	//加载国际化语言包资源
	utils.loadProperties(args.lang);
	
	//输入框激活焦点、移除焦点
	jQuery.focusblur = function(focusid) {
		var focusblurid = $(focusid);
		var defval = focusblurid.val();
		focusblurid.focus(function(){
			var thisval = $(this).val();
			if(thisval==defval){
				$(this).val("");
			}
		});
		focusblurid.blur(function(){
			var thisval = $(this).val();
			if(thisval==""){
				$(this).val(defval);
			}
		});
	 
	};

	
	//输入框激活焦点、溢出焦点的渐变特效
	if ($("#HZXM").val()) {
	    $("#HZXM").prev().fadeOut();
	};
	$("#HZXM").focus(function () {
		$(this).prev().fadeOut();
	});
	$("#HZXM").blur(function () {
	    if (!$("#HZXM").val()) {
			$(this).prev().fadeIn();
		};		
	});
	if ($("#SSMC").val()) {
	    $("#SSMC").prev().fadeOut();
	};
	$("#SSMC").focus(function () {
		$(this).prev().fadeOut();
	});
	$("#SSMC").blur(function () {
	    if (!$("#SSMC").val()) {
			$(this).prev().fadeIn();
		};		
	});
	if ($("#SSYS").val()) {
	    $("#SSYS").prev().fadeOut();
	};
	$("#SSYS").focus(function () {
		$(this).prev().fadeOut();
	});
	$("#SSYS").blur(function () {
	    if (!$("#SSYS").val()) {
			$(this).prev().fadeIn();
		};		
	});
	if ($("#SSRQ").val()) {
	    $("#SSRQ").prev().fadeOut();
	};
	$("#SSRQ").focus(function () {
		$(this).prev().fadeOut();
	});
	$("#SSRQ").blur(function () {
	    if (!$("#SSRQ").val()) {
			$(this).prev().fadeIn();
		};		
	});
	if ($("#ZYH").val()) {
	    $("#ZYH").prev().fadeOut();
	};
	$("#ZYH").focus(function () {
		$(this).prev().fadeOut();
	});
	$("#ZYH").blur(function () {
	    if (!$("#ZYH").val()) {
			$(this).prev().fadeIn();
		};		
	});
	if ($("#DZ").val()) {
	    $("#DZ").prev().fadeOut();
	};
	$("#DZ").focus(function () {
		$(this).prev().fadeOut();
	});
	$("#DZ").blur(function () {
	    if (!$("#DZ").val()) {
			$(this).prev().fadeIn();
		};		
	});
	if ($("#LXDH").val()) {
	    $("#LXDH").prev().fadeOut();
	};
	$("#LXDH").focus(function () {
		$(this).prev().fadeOut();
	});
	$("#LXDH").blur(function () {
	    if (!$("#LXDH").val()) {
			$(this).prev().fadeIn();
		};		
	});
	
	//ajax提交注册信息
	$("#submit").bind("click", function(){
		regist(validate);
	});
	
	$("body").each(function(){
		$(this).keydown(function(){
			if(event.keyCode == 13){
				regist(validate);
			}
		});
	});
	
});

function regist(validate){	
	//校验Email, password，校验如果失败的话不提交
	if(validate.form()){
		if($("#checkBox").attr("checked")){
			var md5 = new MD5();
			$.ajax({
				url: "./user/regist.do",
				type: "post",
				data: {
					userID: $("#email").val(),
					password: md5.MD5($("#password").val()),
					userName: $("#contact").val(),
					companyName: $("#company").val(),
					tel: $("#tel").val(),
					QQ: $("#qq").val()
					
				},
				dataType: "json",
				beforeSend: function(){
					$('.loading').show();
				},
				success: function(data){
					$('.loading').hide();
					if(data.hasOwnProperty("code")){
						if(data.code == 0){
							//注册成功
							window.location.href = "registOk.jsp?email="+$('#email').val();
						}else if(data.code == 1){
							//数据库链接失败
							$(".login-error").html($.i18n.prop("Error.Exception"));
						}else if(data.code == 2){
							//参数传递失败
							$(".login-error").show();
							$(".login-error").html($.i18n.prop("Error.ParameterError"));
						}else if(data.code == 3){
							//公司已经被注册
							$("#company").addClass("error");
							$("#company").after(registError);						
							$("#company").next("label.repeated").text($.i18n.prop("Error.CompaniesAlreadyExists"));
							registError.show();
						}else if(data.code == 4){
							//邮箱已经被注册
							$("#email").addClass("error");
							$("#email").after(registError);
							$("#email").next("label.repeated").text($.i18n.prop("Error.EmailAlreadyExists"));
							registError.show();
						}else{
							//系统错误
							$(".login-error").html($.i18n.prop("Error.SysError"));
						}
					}
				}
			});
		}else{
			//勾选隐私政策和服务条款
			$(".login-error").show();
			$(".login-error").html($.i18n.prop("Error.ReadAndAgree"));
		}
	}
}

var Utils = function(){};

Utils.prototype.loadProperties = function(lang){
	jQuery.i18n.properties({// 加载资浏览器语言对应的资源文件
		name:'ApplicationResources',
		language: lang,
		path:'resources/i18n/',
		mode:'map',
		callback: function() {// 加载成功后设置显示内容
		} 
	});	
};

Utils.prototype.getScriptArgs = function(){//获取多个参数
    var scripts=document.getElementsByTagName("script"),
    //因为当前dom加载时后面的script标签还未加载，所以最后一个就是当前的script
    script=scripts[scripts.length-1],
    src=script.src,
    reg=/(?:\?|&)(.*?)=(.*?)(?=&|$)/g,
    temp,res={};
    while((temp=reg.exec(src))!=null) res[temp[1]]=decodeURIComponent(temp[2]);
    return res;
};
