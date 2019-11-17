<?php
function error($msg){echo "<script>alert('{$msg}');history.back();</script>";exit;}
function success($msg,$url){echo "<script>alert('{$msg}');location.href='{$url}';</script>";exit;}
function top_success($msg,$url){echo "<script>alert('{$msg}');top.location.href='{$url}';</script>";exit;}










