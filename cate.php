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
			<div class="panel-head"><strong class="icon-reorder"> 分类列表</strong></div>
			<div class="padding border-bottom">
				<a class="button border-yellow" href="t_add.php"><span class="icon-plus-square-o"></span> 添加分类</a>
			</div>
			<table class="table table-hover text-center">
				<tr>
					<th width="5%">ID</th>
					<th width="15%">分类名称</th>
					<th width="10%">操作</th>
				</tr>
				<tr>
					<td>1</td>
					<td>产品分类</td>
					<td>
						<div class="button-group">
							<a class="button border-main" href="t_edit.php"><span class="icon-edit"></span> 修改</a>
							<a class="button border-red" href="javascript: del()"><span class="icon-trash-o"></span> 删除</a>
						</div>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>产品分类</td>
					<td>
						<div class="button-group">
							<a class="button border-main" href="t_edit.php"><span class="icon-edit"></span> 修改</a>
							<a class="button border-red" href="javascript: del()"><span class="icon-trash-o"></span> 删除</a>
						</div>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>产品分类</td>
					<td>
						<div class="button-group">
							<a class="button border-main" href="t_edit.php"><span class="icon-edit"></span> 修改</a>
							<a class="button border-red" href="javascript: del()"><span class="icon-trash-o"></span> 删除</a>
						</div>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>产品分类</td>
					<td>
						<div class="button-group">
							<a class="button border-main" href="t_edit.php"><span class="icon-edit"></span> 修改</a>
							<a class="button border-red" href="javascript: del()"><span class="icon-trash-o"></span> 删除</a>
						</div>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>产品分类</td>
					<td>
						<div class="button-group">
							<a class="button border-main" href="t_edit.php"><span class="icon-edit"></span> 修改</a>
							<a class="button border-red" href="javascript: del()"><span class="icon-trash-o"></span> 删除</a>
						</div>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>产品分类</td>
					<td>
						<div class="button-group">
							<a class="button border-main" href="t_edit.php"><span class="icon-edit"></span> 修改</a>
							<a class="button border-red" href="javascript: del()"><span class="icon-trash-o"></span> 删除</a>
						</div>
					</td>
				</tr>
			</table>
		</div>
		<script type="text/javascript">
			function del() {
				if(confirm("您确定要删除吗?")) {

				}
			}
		</script>
	</body>
</html>