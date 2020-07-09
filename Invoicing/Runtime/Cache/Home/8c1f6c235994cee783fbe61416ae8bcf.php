<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width"/>
    <title>产品录入</title>
    <link href="/invoicing/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/invoicing/Public/bootstrap/css/bootstrap-theme.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <fieldset>
        <legend>用户基本信息</legend>
        <table class="table table-bordered">
            <tr>
                <th>患者姓名</th>
                <td><?php echo ($pbdata['HZXM']); ?></td>
            </tr>
            <tr>
                <th>手术名称</th>
                <td> <?php echo ($pbdata['SSMC']); ?></td>
            </tr>
            <tr>
                <th>手术医师</th>
                <td><?php echo ($pbdata['SSYS']); ?></td>
            </tr>
            <tr>
                <th>手术日期</th>
                <td> <?php echo ($pbdata['SSRQ']); ?></td>
            </tr>
            <tr>
                <th>住院号</th>
                <td><?php echo ($pbdata['ZYH']); ?></td>
            </tr>
            <tr>
                <th>地址</th>
                <td><?php echo ($pbdata['DZ']); ?></td>
            </tr>
            <tr>
                <th>联系电话</th>
                <td> <?php echo ($pbdata['LXDH']); ?></td>
            </tr>
            <tr>
                <th>合计金额</th>
                <td><span id='money'><?php echo ($pbdata['HJJE']); ?></span></td>
            </tr>
        </table>
    </fieldset>
    <input class="btn btn-success" type="button" id="addProduct" value="新增产品信息"/>
    <form id="modelForm" style="display: none;" action="/invoicing/index.php/Home/Index/advanceInfo/?pbid=<?php echo ($pbdata[pbid]); ?>" method="post">
        <fieldset>
            <legend>产品信息</legend>
            <table class="table table-bordered">
                <tr>
                    <th>购入日期</th>
                    <td><input type="text" id="GRRQ" name="GRRQ"/></td>
                    <th>商品名称</th>
                    <td><input type="text" id="SPMC" name="SPMC"/></td>
                </tr>
                <tr>
                    <th>规格型号</th>
                    <td><input type="text" id="GGXH" name="GGXH"/></td>
                    <th>单位</th>
                    <td><input type="text" id="DW" name="DW"/></td>
                </tr>
                <tr>
                    <th>数量</th>
                    <td><input type="text" id="SL" name="SL"/></td>
                    <th>注册证号</th>
                    <td><input type="text" id="ZCZH" name="ZCZH"/></td>
                </tr>
                <tr>
                    <th>生产商</th>
                    <td><input type="text" id="SCS" name="SCS"/></td>
                    <th>供应商</th>
                    <td><input type="text" id="GYS" name="GYS"/></td>
                </tr>
                <tr>
                    <th>灭菌编号</th>
                    <td><input type="text" id="MJBH" name="MJBH"/></td>
                    <th>使用部门</th>
                    <td>
                        <select id="SYB" name="SYB">
                            <option value="微创骨科">微创骨科</option>
                            <option value="创伤骨科">创伤骨科</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>生成批号</th>
                    <td><input type="text" id="SCPH" name="SCPH"/></td>
                    <th>有效期</th>
                    <td><input type="text" id="YXQ" name="YXQ"/></td>
                </tr>
                <tr>
                    <th>生产日期</th>
                    <td><input type="text" id="SCRQ" name="SCRQ"/></td>
                    <th>合格证</th>
                    <td><input type="text" id="HGZ" name="HGZ"/></td>
                </tr>
                <tr>
                    <th>包装识别</th>
                    <td><input type="text" id="BZSB" name="BZSB"/></td>
                    <th>包装情况</th>
                    <td><input type="text" id="BZQK" name="BZQK"/></td>
                </tr>
                <tr>
                    <th>保管人</th>
                    <td><input type="text" id="BGR" name="BGR"/></td>
                    <th>使用人</th>
                    <td><input type="text" id="SYR" name="SYR"/></td>
                </tr>
                <tr>
                    <th>单价</th>
                    <td><input type="text" id="DJ" name="DJ"/></td>
                    <th>是否所属大类</th>
                    <td>
                        <div class="form-group">
                            <label class="radio-inline">
                                <input type="radio" value="1" name="isBelonged">是
                            </label>
                            <label class="radio-inline">
                                <input type="radio" checked="checked" value="0" name="isBelonged">否
                            </label>
                        </div>
                    </td>
                </tr>
            </table>
        </fieldset>
        <input type="hidden" id="ppid" value="<?php echo ($pbdata[pbid]); ?>" name="pbid"/>
        <input id="submit-advance" class="btn btn-success" type="submit" value="提交"/><br/>
    </form>
</div>
<br>
<div id="tbAll" class="container-fluid">
    <div>
        <table class="table table-hover">
            <tr>
                <th>购入日期</th>
                <th>商品名称</th>
                <th>规格型号</th>
                <th>注册证号</th>
                <th>生产商</th>
                <th>供应商</th>
                <th>使用部</th>
                <th>生产批号</th>
                <th>有效期</th>
                <th>合格证</th>
                <th>包装识别</th>
                <th>包装情况</th>
                <th>保管人</th>
                <th>使用人</th>
                <th>灭菌批号</th>
                <th>单位</th>
                <th>数量</th>
                <th>单价</th>
                <th>金额</th>
                <th></th>
            </tr>
            <?php if(is_array($ppdata)): foreach($ppdata as $key=>$vo): ?><tr>
                <td>
                    <?php echo ($vo["GRRQ"]); ?>
                </td>
                <td>
                    <?php echo ($vo["SPMC"]); ?>
                </td>
                <td>
                    <?php echo ($vo["GGXH"]); ?>
                </td>
                <td>
                    <?php echo ($vo["ZCZH"]); ?>
                </td>
                <td>
                    <?php echo ($vo["SCS"]); ?>
                </td>
                <td>
                    <?php echo ($vo["GYS"]); ?>
                </td>
                <td>
                    <?php echo ($vo["SYB"]); ?>
                </td>
                <td>
                    <?php echo ($vo["SCPH"]); ?>
                </td>
                <td>
                    <?php echo ($vo["YXQ"]); ?>
                </td>
                <td>
                    <?php echo ($vo["HGZ"]); ?>
                </td>
                <td>
                    <?php echo ($vo["BZSB"]); ?>
                </td>
                <td>
                    <?php echo ($vo["BZQK"]); ?>
                </td>
                <td>
                    <?php echo ($vo["BGR"]); ?>
                </td>
                <td>
                    <?php echo ($vo["SYR"]); ?>
                </td>
                <td>
                    <?php echo ($vo["MJBH"]); ?>
                </td>
                <td>
                    <?php echo ($vo["DW"]); ?>
                </td>
                <td>
                    <?php echo ($vo["SL"]); ?>
                </td>
                <td>
                    <?php echo ($vo["DJ"]); ?>
                </td>
                <td>
                    <?php echo ($vo["JE"]); ?>
                </td>
                <td>
                    <a href="/invoicing/index.php/Home/Index/delete?ppid=<?php echo ($vo["ppid"]); ?>&pbid=<?php echo ($vo["pbid"]); ?>">删除</a>
                </td>
            </tr><?php endforeach; endif; ?>
        </table>
    </div>
</div>
<script src="/invoicing/Public/js/jquery.js"></script>
<script src="/invoicing/Public/bootstrap/bootstrap.js"></script>
<script>
    (function () {
        $('#addProduct').on('click', function (e) {
            $('#modelForm').attr('style', 'display: block')
        })
    })();
</script>
</body>
</html>