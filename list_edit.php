<?php
include "demo/init.php";
$sid=$_GET['sid'];//接shop中sid的值，作为查询条件使用
$lid=isset($_GET['lid'])?$_GET['lid']:'';//下拉框提交的lid值
$sql="select * from shop WHERE sid={$sid}";
$list=$ku->getone($sql);
echo "<pre>";
print_r($list);
echo "</pre>";
//查分类-下拉框
$sql="select lname,lid from type";
$typelist=$ku->getall($sql);
?>
<!DOCTYPE html>
<html lang="zh-cn">

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<meta name="renderer" content="webkit">
		<title></title>
		<link rel="stylesheet" href="css/pintuer.css">
		<link rel="stylesheet" href="css/admin.css">
		<script src="js/jquery.js"></script>
		<script src="js/pintuer.js"></script>
	</head>

	<body>
		<div class="panel admin-panel">
			<div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改商品</strong></div>
			<div class="body-content">
				<form method="post" class="form-x" action="">
					<div class="form-group">
						<div class="label">
							<label>商品名称：</label>
						</div>
						<div class="field">
							<input type="text" class="input w50" value="<?echo $list['sname']?>" name="title" data-validate="required:请输入商品名称" />
							<div class="tips"></div>
						</div>
					</div>
					<div class="form-group">
						<div class="label">
							<label>商品图片：</label>
						</div>
						<div class="field">
							<input type="file" class="button bg-blue margin-left" id="image11">
						</div>
					</div>
					<div class="form-group">
						<div class="label">
							<label>商品分类：</label>
						</div>
						<div class="field">
							<select name="cid" class="input w50">
								<option value="">请选择分类</option>
								<?foreach($typelist as $v){?>
                                <option value="<?echo $v['lid']?>" <?echo $_GET['lid']==$v['lid']?'selected':''?>><?echo $v['lname']?></option>
								<?}?>
							</select>
							<div class="tips"></div>
						</div>
					</div>		
					<div class="form-group">
						<div class="label">
							<label>商品价格：</label>
						</div>
						<div class="field">
							<input type="text" class="input w50" value="" name="money"/>
							<div class="tips"></div>
						</div>
					</div>
					<div class="form-group">
						<div class="label">
							<label>上架时间：</label>
						</div>
						<div class="field">
							<script src="js/laydate/laydate.js"></script>
							<input type="date" class="laydate-icon input w50" name="datetime" style="padding:10px!important; height:auto!important;border:1px solid #ddd!important;" />
							<div class="tips"></div>
						</div>
					</div>
					<div class="form-group">
						<div class="label">
							<label>商品介绍：</label>
						</div>
						<div class="field">
							<textarea class="input" name="note" style=" height:90px;"></textarea>
							<div class="tips"></div>
						</div>
					</div>					
					<div class="form-group">
						<div class="label">
							<label></label>
						</div>
						<div class="field">
							<button class="button bg-main icon-check-square-o" type="submit"> 修改</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>

</html>