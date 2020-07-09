<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>default</title>

</head>
<body>

<table width="100%" cellspacing="0" style="font-size:16px;">
    <tr>
        <td width="721" colspan="9" align="center">江西拓世贸易有限公司销售清单</td>
    </tr>
    <tr>
        <td colspan="3">销往单位:白银市中心医院</td>
        <td colspan="6">开票日期:<?php echo ($pbdata['SSRQ']); ?>  使用人:<?php echo ($pbdata['HZXM']); ?>      住院号:<?php echo ($pbdata['ZYH']); ?></td>
    </tr>
</table>
<table width="100%" border="1" bordercolor="#000000" cellspacing="0" style="font-size:12px;">
    <tr style="text-align: center">
        <td colspan="2">产品名称</td>
        <td>产品规格</td>
        <td style="width:125px; text-align:center">生产商</td>
        <td>效期</td>
        <td>数量</td>
        <td>单价</td>
        <td>金额</td>
        <td>批号</td>
        <td>注册证号</td>
    </tr>
    <?php if(is_array($ppdata_independent)): foreach($ppdata_independent as $key=>$vo): ?><tr>
        <td colspan="2"><?php echo ($vo['SPMC']); ?></td>
        <td> <?php echo ($vo['GGXH']); ?></td>
        <td><?php echo ($vo['SCS']); ?></td>
        <td><?php echo ($vo['YXQ']); ?></td>
        <td><?php echo ($vo['SL']); ?></td>
        <td><?php echo ($vo['DJ']); ?></td>
        <td><?php echo ($vo['JE']); ?></td>
        <td><?php echo ($vo['SCPH']); ?></td>
        <td><?php echo ($vo['ZCZH']); ?></td>
    </tr><?php endforeach; endif; ?>

    <?php if(isset($ppdata_dependent)): ?><tr>
        <td rowspan="<?php echo ($pbdata['smallTypeCount']); ?>"><?php echo ($pbdata['greatTypeName']); ?></td>
        <td><?php echo ($ppdata_dependent[0]['SPMC']); ?></td>
        <td><?php echo ($ppdata_dependent[0]['GGXH']); ?></td>
        <td><?php echo ($ppdata_dependent[0]['SCS']); ?></td>
        <td><?php echo ($ppdata_dependent[0]['YXQ']); ?></td>
        <td><?php echo ($ppdata_dependent[0]['SL']); ?></td>
        <td><?php echo ($ppdata_dependent[0]['DJ']); ?></td>
        <td><?php echo ($ppdata_dependent[0]['JE']); ?></td>
        <td><?php echo ($ppdata_dependent[0]['SCPH']); ?></td>
        <td><?php echo ($ppdata_dependent[0]['ZCZH']); ?></td>
    </tr>
    <?php if(is_array($ppdata_dependent)): $i = 0; $__LIST__ = array_slice($ppdata_dependent,1,null,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo['SPMC']); ?></td>
            <td><?php echo ($vo['GGXH']); ?></td>
            <td><?php echo ($vo['SCS']); ?></td>
            <td><?php echo ($vo['YXQ']); ?></td>
            <td><?php echo ($vo['SL']); ?></td>
            <td><?php echo ($vo['DJ']); ?></td>
            <td><?php echo ($vo['JE']); ?></td>
            <td><?php echo ($vo['SCPH']); ?></td>
            <td><?php echo ($vo['ZCZH']); ?></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; endif; ?>
</table>
<table width="100%" cellspacing="0" style="font-size:13px;">
    <tr>
        <td colspan="9" width="721">合计金额：<?php echo ($pbdata['HJJE']); ?>     合计金额（大写）：<?php echo ($pbdata['DXJE']); ?>      售出器械为特殊商品，非质量问题不退货！</td>
    </tr>
    <tr>
        <td colspan="9" width="721">开票人    系统管理员     验收员      复核员     收货人        白联：存根   红联：客户  黄联：财务</td>
    </tr>
    <tr>
        <td colspan="9" width="721">地址：兰州市七里河区硷沟沿270号1812室</td>
    </tr>
</table>


</body>
</html>