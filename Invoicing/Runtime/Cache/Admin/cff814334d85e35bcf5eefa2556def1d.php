<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width"/>
    <title>QueryAll</title>
    <link href="/invoicing/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/invoicing/Public/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
</head>
<body class="container-fluid">
<!--<fieldset>
    <form id="modelForm" action="#">
        <legend class="basicInfo">用户基本信息</legend>
        <input type="text" id="SSMC" name="" /><br />

        <input type="text" id="" name="SSYS" /><br />
        住院号　
        <input type="text" id="" name="ZYH" /><br />
        地址　　
        <input type="text" id="DZ" name="DZ" /><br />
        联系电话
        <input type="text" id="LXDH" name="LXDH" /><br />
        <input class="btn btn-success" type="button" value="查询" onclick="queryModel()" /><br />
    </form>
</fieldset>-->
<h2 class="info">汇总查询</h2>
<hr>
<form class="form-inline" action="/invoicing/index.php/Admin/Index/sheet" target="_blank" method="get">
    <h3>月报</h3>
    <div class="form-group mx-sm-1 mb-1">
        <label for="SSRQ">手术日期</label>
        <input type="text" name="SSRQ" class="form-control" id="SSRQ" placeholder="2020-06">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-block">月报</button>
    </div>
</form>
<hr>
<form class="form-inline" action="/invoicing/index.php/Admin/Index/queryAll" method="post">
    <h3>高级查询</h3>
    <div class="form-group mx-sm-1 mb-1" >
            <label for="HZXM">患者姓名</label>
            <input type="text" name="HZXM" class="form-control" id="HZXM">
        </div>
    <div class="form-group mx-sm-1 mb-1">
            <label for="SSMC">手术名称</label>
            <input type="text" name="SSMC" class="form-control" id="SSMC">
        </div>
    </div>
    <div class="form-group mx-sm-1 mb-1">
            <label for="SSYS">手术医师</label>
            <input type="text" name="SSYS" class="form-control" id="SSYS">
    </div>
    <div class="form-group mx-sm-1 mb-1">
            <label for="ZYH">住院号</label>
            <input type="text" name="ZYH" class="form-control" id="ZYH">
    </div>
    <div class="form-group mx-sm-1 mb-1">
            <label for="DZ">地址</label>
            <input type="text" name="DZ" class="form-control" id="DZ">
    </div>
    <div class="form-group mx-sm-1 mb-1">
            <label for="LXDH">联系电话</label>
            <input type="text" name="LXDH" class="form-control" id="LXDH">
        </div>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-success btn-block">查询</button>
    </div>
    </div>
</form>


<br>
<hr>
<h2>查询结果：</h2>
<div id="mainContent">
    <table class="table table-hover">
        <tr>
            <th>
                患者姓名
            </th>
            <th>
                手术名称
            </th>
            <th>
                手术医生
            </th>
            <th>
                手术日期
            </th>
            <th>
                住院号
            </th>
            <th>
                地址
            </th>
            <th>
                联系电话
            </th>
            <th>
                合计金额
            </th>
            <th></th>
        </tr>
        <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
            <td>
                <?php echo ($vo['HZXM']); ?>
            </td>
            <td>
                <?php echo ($vo['SSMC']); ?>
            </td>
            <td>
                <?php echo ($vo['SSYS']); ?>
            </td>
            <td>
                <?php echo ($vo['SSRQ']); ?>
            </td>
            <td>
                <?php echo ($vo['ZYH']); ?>
            </td>
            <td>
                <?php echo ($vo['DZ']); ?>
            </td>
            <td>
                <?php echo ($vo['LXDH']); ?>
            </td>
            <td>
                <?php echo ($vo['HJJE']); ?>
            </td>
            <td>
                <a href="/invoicing/index.php/Admin/Index/ysjlb?pbid=<?php echo ($vo["pbid"]); ?>" target="_blank">验收记录表</a>
                <a href="/invoicing/index.php/Admin/Index/yhdjb?pbid=<?php echo ($vo["pbid"]); ?>" target="_blank">用户登记表</a>
                <a href="/invoicing/index.php/Admin/Index/xsqd?pbid=<?php echo ($vo["pbid"]); ?>" target="_blank">销售清单</a>
            </td>
        </tr><?php endforeach; endif; ?>
    </table>
</div>
</body>
</html>