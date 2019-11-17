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
			<div class="panel-head"><strong class="icon-reorder"> 用户列表</strong>
				<a href="" style="float:right; display:none;">添加字段</a>
			</div>
			<div class="padding border-bottom">
				<ul class="search" style="padding-left:10px;">
					<li>
						<a class="button border-main icon-plus-square-o" href="user_add.php"> 添加用户</a>
					</li>					
				</ul>
			</div>
			<form method="post" action="" id="listform">
				<table class="table table-hover text-center">
					<tr>
						<th width="100" style="text-align:left; padding-left:20px;">ID</th>
						<th width="25%">用户名</th>
						<th width="20%">权限</th>
						<th width="310">操作</th>
					</tr>
					<tr>
						<td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" /> 1
						</td>
						<td>shangpin</td>
						<td>商品管理员</td>
						<td>
							<div class="button-group">
								<a class="button border-main" href="user_edit.php"><span class="icon-edit"></span> 修改</a>
								<a class="button border-red" href="javascript:del()" ><span class="icon-trash-o"></span> 删除</a>
							</div>
						</td>
					</tr>
					<tr>
						<td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" /> 1
						</td>
						<td>shangpin</td>
						<td>商品管理员</td>
						<td>
							<div class="button-group">
								<a class="button border-main" href="user_edit.php"><span class="icon-edit"></span> 修改</a>
								<a class="button border-red" href="javascript:del()" ><span class="icon-trash-o"></span> 删除</a>
							</div>
						</td>
					</tr>
					<tr>
						<td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" /> 1
						</td>
						<td>shangpin</td>
						<td>商品管理员</td>
						<td>
							<div class="button-group">
								<a class="button border-main" href="user_edit.php"><span class="icon-edit"></span> 修改</a>
								<a class="button border-red" href="javascript:del()" ><span class="icon-trash-o"></span> 删除</a>
							</div>
						</td>
					</tr>
					<tr>
						<td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" /> 1
						</td>
						<td>shangpin</td>
						<td>商品管理员</td>
						<td>
							<div class="button-group">
								<a class="button border-main" href="user_edit.php"><span class="icon-edit"></span> 修改</a>
								<a class="button border-red" href="javascript:del()" ><span class="icon-trash-o"></span> 删除</a>
							</div>
						</td>
					</tr>
					<tr>
						<td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" /> 1
						</td>
						<td>shangpin</td>
						<td>商品管理员</td>
						<td>
							<div class="button-group">
								<a class="button border-main" href="user_edit.php"><span class="icon-edit"></span> 修改</a>
								<a class="button border-red" href="javascript:del()"><span class="icon-trash-o"></span> 删除</a>
							</div>
						</td>
					</tr>
					<tr>
						<td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="" /> 1
						</td>
						<td>shangpin</td>
						<td>商品管理员</td>
						<td>
							<div class="button-group">
								<a class="button border-main" href="user_edit.php"><span class="icon-edit"></span> 修改</a>
								<a class="button border-red" href="javascript:del()" ><span class="icon-trash-o"></span> 删除</a>
							</div>
						</td>
					</tr>
					<tr>
						<td style="text-align:left; padding:19px 0;padding-left:20px;"><input type="checkbox" id="checkall" /> 全选 </td>
						<td colspan="7" style="text-align:left;padding-left:20px;">
							<a href="javascript:DelSelect()" class="button border-red icon-trash-o" style="padding:5px 15px;"> 全删</a>
						</td>
					</tr>
					<tr>
						<td colspan="8">
							<div class="pagelist">
								<a href="">上一页</a> <span class="current">1</span>
								<a href="">2</a>
								<a href="">3</a>
								<a href="">下一页</a>
								<a href="">尾页</a>
							</div>
						</td>
					</tr>
				</table>
			</form>
		</div>
		<script>
			//全选
			$("#checkall").click(function(){ 
			  $("input[name='id[]']").each(function(){
				  if (this.checked) {
					  this.checked = false;
				  }
				  else {
					  this.checked = true;
				  }
			  });
			})
			// 删除
			function del(){
				if(confirm("确认删除吗?")){
					
				}
			}
		</script>
	</body>
</html>