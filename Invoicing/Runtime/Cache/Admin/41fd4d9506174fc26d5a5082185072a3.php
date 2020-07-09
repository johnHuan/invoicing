<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width"/>
    <title>总表生成</title>
</head>
<body>
<p style="width:100%; text-align:center;">白银市中心医院植入性医疗器械验收记录表（2017年08月 ）</p>

<table class="table table-hover" border="1" bordercolor="#000000" cellspacing="0">
    <tr>
        <td>购入日期</td>
        <td>商品名称</td>
        <td>规格型号</td>
        <td>单位</td>
        <td>数量</td>
        <td>注册证号</td>
        <td>生产商</td>
        <td>供应商</td>
        <td>使用部门</td>
        <td>生产批号</td>
        <td>有效期</td>
        <td>合格证</td>
        <td>包装识别</td>
        <td>包装情况</td>
        <td nowrap="nowrap">保管人</td>
        <td nowrap="nowrap">使用人</td>
        <td>价格</td>
        <td>住院号</td>
    </tr>
    <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr>
        <td>
            <?php echo ($vo['GRRQ']); ?>
        </td>
        <td>
            <?php echo ($vo['SPMC']); ?>
        </td>
        <td>
            <?php echo ($vo['GGXH']); ?>
        </td>
        <td>
            <?php echo ($vo['DW']); ?>
        </td>
        <td>
            <?php echo ($vo['SL']); ?>
        </td>
        <td>
            <?php echo ($vo['ZCZH']); ?>
        </td>
        <td>
            <?php echo ($vo['SCS']); ?>
        </td>
        <td>
            <?php echo ($vo['GYS']); ?>
        </td>
        <td>
            <?php echo ($vo['SYB']); ?>
        </td>
        <td>
            <?php echo ($vo['SCPH']); ?>
        </td>
        <td>
            <?php echo ($vo['YXQ']); ?>
        </td>
        <td>
            <?php echo ($vo['HGZ']); ?>
        </td>
        <td>
            <?php echo ($vo['BZSB']); ?>
        </td>
        <td>
            <?php echo ($vo['BZQK']); ?>
        </td>
        <td>
            <?php echo ($vo['BGR']); ?>
        </td>
        <td>
            <?php echo ($vo['SYR']); ?>
        </td>
        <td>
            <?php echo ($vo['JE']); ?>
        </td>
        <td>
            <?php echo ($vo['ZYH']); ?>
        </td>
    </tr><?php endforeach; endif; ?>
</table>
<div style="width:100%; text-align:right;">共计：<?php echo ($count); ?>条&nbsp;&nbsp;&nbsp;&nbsp;总金额：<?php echo ($sumMoney); ?>元</div>
</body>
</html>