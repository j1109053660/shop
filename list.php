<?
include "demo/init.php";
//查分类
$sql="select lname,lid from type";
$typelist=$ku->getall($sql);
//1.搜索功能：
$where=" where 1=1 ";
$cid=isset($_GET['cid'])?$_GET['cid']:'';//条件：下拉框-分类搜索
$keywords=isset($_GET['keywords'])?$_GET['keywords']:'';//条件：文本框-模糊搜索
//条件
if($cid!=''){$where.="and leixing='{$_GET['cid']}' ";}
if($keywords!=''){$where.="and sname like '%{$_GET['keywords']}%'";}
//2.分页功能：
$sql="select count(*) from shop";
$fenye=$ku->getvalue($sql);
$page=new Page($fenye,5);
//带条件查所有商品
$sql="select s.sid,s.sname,s.img,s.time,s.price,t.lname from shop as s
 LEFT JOIN type as t on s.leixing=t.lid {$where} order by sid DESC limit ".$page->limit();
$list=$ku->getall($sql);
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
			<div class="panel-head"><strong class="icon-reorder"> 商品列表</strong>
				<a href="" style="float:right; display:none;">添加字段</a>
			</div>
			<div class="padding border-bottom">
				<ul class="search" style="padding-left:10px;">
					<li>
						<a class="button border-main icon-plus-square-o" href="list_add.php"> 添加商品</a>
					</li>
					<li>搜索：</li>
					<form action="" method="get">
						<li>
							<select name="cid" class="input" style="width:200px; line-height:17px;" onchange="changesearch()">
								<option value="">请选择分类</option>
								<?foreach($typelist as $v){?>
                                <option value="<?echo $v['lid']?>" <?echo $_GET['cid']==$v['lid']?'selected':''?>><?echo $v['lname']?></option>
								<?}?>
							</select>
						</li>
						<li>
							<input type="text" placeholder="请输入搜索关键字" name="keywords" value="<?echo $keywords?>" class="input" style="width:250px; line-height:17px;display:inline-block" />
							<input type="submit" value="搜索" class="button border-main icon-search" />
						</li>
					</form>
				</ul>
			</div>
			<form method="post" action="" id="listform">
				<table class="table table-hover text-center">
					<tr>
						<th width="100" style="text-align:left; padding-left:20px;">ID</th>
						<th width="15%">商品名称</th>
						<th width="15%">价格</th>
						<th width="15%">分类</th>
						<th width="15%">上架时间</th>
						<th width="310">操作</th>
					</tr>
                    <?
                    if(empty($list)){//如果查询的数组数据为空输出没有数据；
                        echo '<tr><td colspan="6" style="font-size: 70px;"><span style="color: #00aa00">亲</span><span style="color: #ee3333">，</span><span style="color: darkmagenta">没</span><span style="color: darkgoldenrod">有</span><span style="color: red">数</span><span style="color: yellow">据</span><span style="color: aqua">呦</span><span style="color: black">！</span></td></tr>';
                    }else{
                        foreach($list as $v){
                    ?>
					<tr>
						<td style="text-align:left; padding-left:20px;"><input type="checkbox" name="id[]" value="<?echo $v['sid']?>" class="check"/> <?echo $v['sid']?>
						</td>
						<td><?echo $v['sname']?></td>
						<td>¥<?echo $v['price']?></td>
						<td><?echo $v['lname']?></td>
						<td><?echo date("Y-m-d",$v['time'])?></td>
						<td>
							<div class="button-group">
								<a class="button border-main" href="list_edit.php?sid=<?echo $v['sid'];?>"><span class="icon-edit"></span> 修改</a>
								<a class="button border-red del" href="javascript:DelSelect()" sid="<?echo $v['sid']?>"><span class="icon-trash-o"></span> 删除</a>
							</div>
						</td>
					</tr>
					<?}?>
                    <?}?>
					<tr>
						<td style="text-align:left; padding:19px 0;padding-left:20px;"><input type="checkbox" id="checkall" /> 全选 </td>
						<td colspan="7" style="text-align:left;padding-left:20px;">
							<a href="javascript:DelSelect()" class="button border-red icon-trash-o delAll" style="padding:5px 15px;"> 全删</a>
						</td>
					</tr>
					<tr>
						<td colspan="8">
							<div class="pagelist">
                                <? echo $page->pageBar(5);?>
							</div>
						</td>
					</tr>
				</table>
			</form>
		</div>
        <script src="js/jquery-1.8.3.js"></script>
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
            $(".del").click(function () {
                var sid=$(this).attr("sid");
                if(confirm("确认删除吗?")){
                    location.href="del.php?b=shop&sid="+sid;
                                        //b为当前查询的表名，同sid传给del.php处理页
                }
            })
            $(".delAll").click(function(){
                var arr=[];
                $(".check").each(function(i,o){
                    if($(o).prop("checked")){
                        arr.push($(o).val());
                    }
                })
                if(arr.length!=0){
                    if(confirm("确认删除吗?")){
                        location.href="del.php?b=shop&sid="+arr.join(',');
                    }
                }
            })
		</script>
	</body>
</html>