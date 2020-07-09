<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width"/>
    <title>患者信息录入</title>
    <script src="/invoicing/Public/js/jquery.js"></script>
    <link href="/invoicing/Public/bootstrap/css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <link href="/invoicing/Public/style/EditAll.css" rel='stylesheet' type='text/css'/>
</head>
<body>

<div class="box">
    <form id="modelForm" method="post" action="/invoicing/index.php/Home/Index/basicInfo">
        <legend class="info">用户基本信息</legend>
        <div class="form-group">
            <label for="HZXM">患者姓名</label>
            <input class="input" type="text" id="HZXM" name="HZXM"/><br/>
        </div>
        <div class="form-group">
            <label for="SSMC">手术名称</label>
            <input class="input" type="text" id="SSMC" name="SSMC"/><br/>
        </div>
        <div class="form-group">
            <label for="SSYS">手术医师</label>
            <input class="input" type="text" id="SSYS" name="SSYS"/><br/>
        </div>
        <div class="form-group">
            <label for="SSRQ">手术日期</label>
            <input class="input" type="text" id="SSRQ" name="SSRQ"/><br/>
        </div>
        <div class="form-group">
            <label for="ZYH">住院号</label>
            <input class="input" type="text" id="ZYH" name="ZYH"/><br/>
        </div>
        <div class="form-group">
            <label for="DZ">地址</label>
            <input class="input" type="text" id="DZ" name="DZ"/><br/>
        </div>
        <div class="form-group">
            <label for="LXDH">联系电话</label>
            <input class="input" type="text" id="LXDH" name="LXDH"/><br/>
        </div>
        <div class="form-group">
            <label>是否包含大类</label>
            <label class="radio-inline">
                <input type="radio" value="1" name="isContainGreatType">包含大类
            </label>
            <label class="radio-inline">
                <input type="radio" value="0" name="isContainGreatType">不包含大类
            </label>
        </div>
        <div class="form-group">
            <label for="greatTypeName">大类名称</label>
            <input class="input" type="text" id="greatTypeName" name="greatTypeName"/><br/>
        </div>
        <div class="form-group">
            <label for="smallTypeCount">大类下包含几个小类</label>
            <input class="input" type="number" id="smallTypeCount" name="smallTypeCount"/><br/>
        </div>
        <div class="form-group">
            <button class="btn btn-success" type="submit">提交</button>
        </div>
    </form>
</div>
</body>
</html>