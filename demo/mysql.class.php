<?php
class mysql{

    //属性
    protected $host;
    protected $user;
    protected $pwd;
    protected $database;
    protected $charset;
    protected $link;
    protected $sql;


    public function __construct($db,$host="127.0.0.1",$user="admin",$pwd="123456789",$charset="utf8")
    {
        $this->host=$host;
        $this->user=$user;
        $this->pwd=$pwd;
        $this->database=$db;
        $this->charset=$charset;
        //链接数据库
        $this->link=mysqli_connect($this->host,$this->user,$this->pwd,$this->database);
        //设置字符集
        mysqli_set_charset($this->link,$this->charset);
    }

    public function __destruct()
    {
        mysqli_close($this->link);
    }
    //全查询
    public function getall($sql)
    {
        $this->sql=$sql;
        $rt=mysqli_query($this->link,$this->sql);
        if(!$rt){
            $this->geterror();
        }
        return mysqli_fetch_all($rt,true);
    }
    //一组
    public function getone($sql)
    {
        $this->sql=$sql;
        $rt=mysqli_query($this->link,$this->sql);
        if(!$rt){
            $this->geterror();
        }
        return mysqli_fetch_assoc($rt);
    }

    //一个值
    public function getvalue($sql)
    {
        $this->sql=$sql;
        $rt=mysqli_query($this->link,$this->sql);
        if(!$rt){
            $this->geterror();
        }
        $arr=mysqli_fetch_row($rt);
        return $arr[0];
    }

    //删除方法
    public function delete($table,$where="1=1")
    {
        $this->sql="delete from {$table} where {$where}";
        $rt=mysqli_query($this->link,$this->sql);
        if(!$rt){
            $this->geterror();
        }
        return mysqli_affected_rows($this->link);
    }


    //添加
    public function add($table,$arr)
    {
        $key="";
        $val="";
        foreach($arr as $k=>$v){
            $key.=$k.",";
            $val.="'".$v."',";
        }
        $key=rtrim($key,",");
        $val=rtrim($val,",");
        $this->sql="insert into {$table} ({$key}) values ({$val})";
        $rt=mysqli_query($this->link,$this->sql);
        if(!$rt){
            $this->geterror();
        }
        return mysqli_insert_id($this->link);
    }

    //修改
    public function update($table,$arr,$where="1=1")
    {
        $qq="";
        foreach($arr as $k=>$v){
            $qq.=$k."='".$v."',";
        }
        $key=rtrim($qq,",");
        $this->sql="update {$table} set {$key} where {$where}";
        $rt=mysqli_query($this->link,$this->sql);
        if(!$rt){
            $this->geterror();
        }
        return mysqli_affected_rows($this->link);
    }

    public function geterror()
    {
        echo "<h1>你sql语句错了，往下看</h1>";
        echo "你的错误信息是:".mysqli_error($this->link)."<br>";
        echo "你错误的sql语句是: ".$this->sql;
        exit;
    }
}