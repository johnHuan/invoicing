<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>default</title>

</head>
<body>

<table width="100%" border="1" bordercolor="#000000" cellspacing="0" style=" font-size:14px; text-align:center;">
    <caption style=" font-size:16px; padding:20px 0; font-weight:bold;">白银市中心医院植入性医疗器械验收记录表 (<?php echo ($pbdata["SSRQ"]); ?>)</caption>
    <tr>
        <td style="width:80px; text-align:center">购入日期</td>
        <td>商品名称</td>
        <td>规格型号</td>
        <td style="width:25px; text-align:center">单位</td>
        <td style="width:25px; text-align:center">数量</td>
        <td>注册证号</td>
        <td style="width:95px; text-align:center">生产商</td>
        <td style="width:95px; text-align:center">供应商</td>
        <td style="width:30px; text-align:center">使用部门</td>
        <td>生产批号</td>
        <td style="white-space:nowrap">效期</td>
        <td style="width:25px; text-align:center">合格证</td>
        <td style="width:30px; text-align:center">包装情况</td>
        <td style="white-space:nowrap">保管人</td>
        <td style="white-space:nowrap">使用人</td>
        <td>住院号</td>
    </tr>
    <?php if(is_array($ppdata)): foreach($ppdata as $key=>$vo): ?><tr>
        <td><?php echo ($vo['GRRQ']); ?></td>
        <td><?php echo ($vo['SPMC']); ?></td>
        <td><?php echo ($vo['GGXH']); ?></td>
        <td><?php echo ($vo['DW']); ?></td>
        <td><?php echo ($vo['SL']); ?></td>
        <td><?php echo ($vo['ZCZH']); ?></td>
        <td><?php echo ($vo['SCS']); ?></td>
        <td><?php echo ($vo['GYS']); ?></td>
        <td style="padding:10px 0;"><?php echo ($vo['SYB']); ?></td>
        <td><?php echo ($vo['SCPH']); ?></td>
        <td><?php echo ($vo['YXQ']); ?></td>
        <td><?php echo ($vo['HGZ']); ?></td>
        <td><?php echo ($vo['BZQK']); ?></td>
        <td> </td>
        <td><?php echo ($vo['SYR']); ?></td>
        <td><?php echo ($pbdata['ZYH']); ?></td>
    </tr><?php endforeach; endif; ?>
    <tr>
        <td colspan="16" align="center" style="padding:20px 0;"><span>验货人：</span><span style="padding:0 200px;">复核人：</span>日期：</td>
    </tr>
</table>



</body>
</html>