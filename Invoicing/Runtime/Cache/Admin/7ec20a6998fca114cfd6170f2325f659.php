<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width" />
    <title>default</title>

</head>
<body>

<table width="100%" border="1" bordercolor="#000000" cellspacing="0" style=" font-size:14px; text-align:center;">
    <caption style=" font-size:16px; padding:20px 0; font-weight:bold;">白银市中心医院植入性医疗器械验收记录表(@Model.SSRQ)</caption>
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
    @foreach (var item in (List<ZXW_Temp.Models.TwoTable>)ViewData["ModelList"]) {
    <tr>
        <td>    @Html.DisplayFor(modelItem => item.GRRQ)</td>
        <td> @Html.DisplayFor(modelItem => item.SPMC)</td>
        <td> @Html.DisplayFor(modelItem => item.GGXH)</td>
        <td> @Html.DisplayFor(modelItem => item.DW)</td>
        <td>@(decimal.ToInt32(item.SL))</td>
        <td> @Html.DisplayFor(modelItem => item.ZCZH)</td>
        <td> @Html.DisplayFor(modelItem => item.SCS)</td>
        <td> @Html.DisplayFor(modelItem => item.GYS)</td>
        <td style=" padding:10px 0;"> @Html.DisplayFor(modelItem => item.SYB)</td>
        <td> @Html.DisplayFor(modelItem => item.SCPH)</td>
        <td> @Html.DisplayFor(modelItem => item.YXQ)</td>
        <td> @Html.DisplayFor(modelItem => item.HGZ)</td>
        <td> @Html.DisplayFor(modelItem => item.BZQK)</td>
        <td> </td>
        <td> @Html.DisplayFor(modelItem => item.SYR)</td>
        <td> @Model.ZYH</td>
    </tr>

    }
    <tr>
        <td colspan="16" align="center" style="padding:20px 0;"><span>验货人：</span><span style="padding:0 200px;">复核人：</span>日期：</td>
    </tr>
</table>

<div>
    <table width="100%" border="0" cellpadding="0" cellspacing="0" >
        <tr>
            <td height="30" colspan="10" align="center" valign="middle" style="font-size:16px;">白银市中心医院</td>
        </tr>
        <tr>
            <td height="30" colspan="10" align="center" valign="middle" style="font-weight:bold; font-size:18px;">白银市中心医院植入性医疗器械用户登记表</td>
        </tr>
        <tr>
            <td height="30" colspan="5" valign="middle">  患者姓名：@Model.HZXM</td>
            <td colspan="5">  手术名称：@Model.SSMC</td>
        </tr>
        <tr>
            <td height="30" colspan="5" valign="middle">  手术医师：@Model.SSYS  </td>
            <td colspan="5">  手术日期：@Model.SSRQ</td>
        </tr>
        <tr>
            <td height="30" colspan="8" valign="middle">  住院号：@Model.ZYH</td>
            <td>  地址：@Model.DZ </td>
            <td>  联系电话：@Model.LXDH</td>
        </tr>
    </table>
    <input type="hidden" id="ID" name="ID" value="@Model.ID" />
</div>
<div id="tbAll">
    <table width="100%" border="1" cellspacing="0">
        <tr>
            <td>序号</td>
            <td>品名</td>
            <td>规格型号</td>
            <!--<td>灭菌批号</td>-->
            <td>效期</td>
            <td>生产商</td>
            <td>供应商</td>
            <td>注册证编号</td>
            <td>生产批号</td>
            <td>数量</td>
        </tr>


        <tr>
            <td> @(i++)</td>
            <td>@Html.DisplayFor(modelItem => item.SPMC)</td>
            <td> @Html.DisplayFor(modelItem => item.GGXH)</td>
            <!--<td> @Html.DisplayFor(modelItem => item.MJBH)</td>-->
            <td>@Html.DisplayFor(modelItem => item.YXQ)</td>
            <td> @Html.DisplayFor(modelItem => item.SCS)</td>
            <td>@Html.DisplayFor(modelItem => item.GYS)</td>
            <td>@Html.DisplayFor(modelItem => item.ZCZH)</td>
            <td> @Html.DisplayFor(modelItem => item.SCPH)</td>
            <td>@(decimal.ToInt32(item.SL))</td>
        </tr>

    </table>
</div>

<table width="100%" cellspacing="0" style="font-size:16px;">
    <tr>
        <td width="721" colspan="9" align="center">江西拓世贸易有限公司销售清单</td>
    </tr>
    <tr>
        <td colspan="3">销往单位:白银市中心医院</td>
        <td colspan="6">开票日期:@Model.SSRQ  使用人:@Model.HZXM      住院号:@Model.ZYH</td>
    </tr>
</table>
<table width="100%" border="1" bordercolor="#000000" cellspacing="0" style="font-size:12px;">
    <tr>
        <td>产品名称</td>
        <td>产品规格</td>
        <td style="width:125px; text-align:center">生产商</td>
        <!--<td>供应商</td>-->
        <td>效期</td>
        <td>数量</td>
        <td>单价</td>
        <td>金额</td>
        <td>批号</td>
        <td>注册证号</td>
    </tr>
    @foreach (var item in (List<ZXW_Temp.Models.TwoTable>)ViewData["ModelList"])
    {
    <tr>
        <td>@Html.DisplayFor(modelItem => item.SPMC)</td>
        <td> @Html.DisplayFor(modelItem => item.GGXH)</td>
        <td>@Html.DisplayFor(modelItem => item.SCS)</td>
        <!--<td>@(item.DW != null && item.DW.Split('-').Length > 1 ? item.DW.Split('-')[0] : item.DW)</td>-->
        <td>@Html.DisplayFor(modelItem => item.YXQ)</td>

        <td>@(decimal.ToInt32(item.SL))</td>
        <td>@Html.DisplayFor(modelItem => item.DJ)</td>
        <td>@Html.DisplayFor(modelItem => item.JE)</td>
        <td>@Html.DisplayFor(modelItem => item.SCPH)</td>
        <td>@Html.DisplayFor(modelItem => item.ZCZH)</td>
    </tr>
    }
</table>
<table width="100%" cellspacing="0" style="font-size:13px;">
    <tr>
        <td colspan="9" width="721">合计金额：@Model.HJJE     合计金额（大写）：@Model.DXJE      售出器械为特殊商品，非质量问题不退货！</td>
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