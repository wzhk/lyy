<?php 
	header('content-type:text/html;charset=utf-8');
	$name = $_POST['name'];
	$pwd = $_POST['pwd'];
	$pdo = new PDO("mysql:host=127.0.0.1;dbname=zice","root","root");
	$arr = $pdo -> query("select * from login_user where name='$name' and pwd = '$pwd'") -> fetch(PDO::FETCH_ASSOC);
	if($arr){
		setcookie('id',$arr['id']);
		echo "<script>alert('登录成功');location.href='sy.html';</script>";
		die;
	}else{
		echo "<script>alert('登录失败');location.href='login.html';</script>";
		die;
	}
 ?>