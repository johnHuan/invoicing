<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width"/>
    <title>default</title>

</head>
<body>

<div>
    <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr>
            <td height="30" colspan="10" align="center" valign="middle" style="font-size:16px;">白银市中心医院</td>
        </tr>
        <tr>
            <td height="30" colspan="10" align="center" valign="middle" style="font-weight:bold; font-size:18px;">
                白银市中心医院植入性医疗器械用户登记表
            </td>
        </tr>
        <tr>
            <td height="30" colspan="5" valign="middle">  患者姓名：<?php echo ($pbdata['HZXM']); ?></td>
            <td colspan="5">  手术名称：<?php echo ($pbdata['SSMC']); ?></td>
        </tr>
        <tr>
            <td height="30" colspan="5" valign="middle">  手术医师：<?php echo ($pbdata['SSYS']); ?>  </td>
            <td colspan="5">  手术日期：<?php echo ($pbdata['SSRQ']); ?></td>
        </tr>
        <tr>
            <td height="30" colspan="8" valign="middle">  住院号：<?php echo ($pbdata['ZYH']); ?></td>
            <td>  地址：<?php echo ($pbdata['DZ']); ?> </td>
            <td>  联系电话：<?php echo ($pbdata['LXDH']); ?></td>
        </tr>
    </table>
    <input type="hidden" id="ID" name="ID" value="@Model.ID"/>
</div>
<div id="tbAll">
    <table width="100%" border="1" cellspacing="0">
        <tr style="text-align: center">
            <td colspan="2">品名</td>
            <td>规格型号</td>
            <td>效期</td>
            <td>生产商</td>
            <td>供应商</td>
            <td>注册证编号</td>
            <td>生产批号</td>
            <td>数量</td>
        </tr>
        <?php if(is_array($ppdata_independent)): foreach($ppdata_independent as $key=>$vo): ?><tr>
                <td colspan="2"><?php echo ($vo['SPMC']); ?></td>
                <td><?php echo ($vo['GGXH']); ?></td>
                <td><?php echo ($vo['YXQ']); ?></td>
                <td><?php echo ($vo['SCS']); ?></td>
                <td><?php echo ($vo['GYS']); ?></td>
                <td><?php echo ($vo['ZCZH']); ?></td>
                <td><?php echo ($vo['SCPH']); ?></td>
                <td><?php echo ($vo['SL']); ?></td>
            </tr><?php endforeach; endif; ?>
        <?php if(isset($ppdata_dependent)): ?><tr>
                <td rowspan="<?php echo ($pbdata['smallTypeCount']); ?>"><?php echo ($pbdata['greatTypeName']); ?></td>
                <td><?php echo ($ppdata_dependent[0]['SPMC']); ?></td>
                <td><?php echo ($ppdata_dependent[0]['GGXH']); ?></td>
                <td><?php echo ($ppdata_dependent[0]['YXQ']); ?></td>
                <td><?php echo ($ppdata_dependent[0]['SCS']); ?></td>
                <td><?php echo ($ppdata_dependent[0]['GYS']); ?></td>
                <td><?php echo ($ppdata_dependent[0]['ZCZH']); ?></td>
                <td><?php echo ($ppdata_dependent[0]['SCPH']); ?></td>
                <td><?php echo ($ppdata_dependent[0]['SL']); ?></td>
            </tr>
            <?php if(is_array($ppdata_dependent)): $i = 0; $__LIST__ = array_slice($ppdata_dependent,1,null,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($vo['SPMC']); ?></td>
                    <td><?php echo ($vo['GGXH']); ?></td>
                    <td><?php echo ($vo['YXQ']); ?></td>
                    <td><?php echo ($vo['SCS']); ?></td>
                    <td><?php echo ($vo['GYS']); ?></td>
                    <td><?php echo ($vo['ZCZH']); ?></td>
                    <td><?php echo ($vo['SCPH']); ?></td>
                    <td><?php echo ($vo['SL']); ?></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; endif; ?>
    </table>
</div>


</body>
</html>