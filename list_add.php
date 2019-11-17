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
			<div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加商品</strong></div>
			<div class="body-content">
				<form method="post" class="form-x" action="">
					<div class="form-group">
						<div class="label">
							<label>商品名称：</label>
						</div>
						<div class="field">
							<input type="text" class="input w50" value="" name="title" data-validate="required:请输入商品名称" />
							<div class="tips"></div>
						</div>
					</div>
					<div class="form-group">
						<div class="label">
							<label>商品分类：</label>
						</div>
						<div class="field">
							<select name="cid" class="input w50">
								<option value="">请选择分类</option>
								<option value="">男装</option>
								<option value="">女装</option>
								<option value="">童装</option>
								<option value="">老年装</option>
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
							<button class="button bg-main icon-check-square-o" type="submit"> 添加</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>

</html>