<?php
ini_set('display_errors', '0');
ini_set('max_execution_time', '60');
require ('fpdf17/chinese.php');


include ("global.php");

$id 		= !empty($id) ? intval($id) : 0;
$level 		= !empty($level) ? intval($level) : 1;
$page 		= !empty($page) ? intval($page) : 1;
$page_size 	= 100000;
$keywords 	= trim($keywords);
$mpurl 		= $_SERVER['PHP_SELF']."?id=".$id."&level=".$level."&keywords=".$keywords;


$classid = $id;

$classle = getCategoryById($id);

$classname = $classle['name'];
$classid = $classle['id'];

$chackid = $id;

$pid = $db->find ( "select pid from phpaadb_category where id=" . $id );

if($pid['pid'] > 0){$chackid = $pid['pid'];$classid = $pid['pid'];}
//echo $pid['pid'];

$ddid=''; 
if($chackid==5||$chackid==6||$chackid==7){
	$ddid='01'; 
}
if($chackid==8||$chackid==9||$chackid==10||$chackid==11){
	$ddid='02'; 
}

//查询SQL
$sql = "select *
		from phpaadb_baby
		where delete_session_id is null";

if(!empty($classname)){
	$sql .=  " and classroom like '%".$classname."%'";
}

if(!empty($keywords)){
	$sql.=" and title = '".$keywords."'";
}

//$sql .=	" order by classroom asc";

//echo $sql;
//总记录数
$total_nums = $db->getRowsNum ($sql );

//执行分页查询
$list = $db->selectLimit ( $sql, $page_size, ($page - 1) * $page_size );

$levelname = '';
if($level==1){
	$levelname = '第一学期上';
}else if($level==2){
	$levelname = '第一学期下';
}else if($level==3){
	$levelname = '第二学期上';
}else if($level==4){
	$levelname = '第二学期下';
}else if($level==5){
	$levelname = '综合学年';
}



$pdf = new PDF_Chinese();
$pdf->AddGBFont();
$pdf->Open();
$pdf->AddPage();
$pdf->SetFont('GB', 'B', 10);
$pdf->SetLeftMargin(15.0);
$pdf->Cell(180, 8, iconv("UTF-8", "gbk", "光明学校德育平台 ".$classname." ".$levelname." 评价表"), 1, 0, 'C');
$pdf->Ln();
//以上是表头
$pdf->SetFont('GB', '', 8);
$pdf->SetLeftMargin(15.0);
$pdf->Cell(40, 8, iconv("UTF-8", "gbk", "学籍号"), 1, 0, 'C');
$pdf->Cell(20, 8, iconv("UTF-8", "gbk", "姓名"), 1, 0, 'C');
$pdf->Cell(15, 8, iconv("UTF-8", "gbk", "性别"), 1, 0, 'C');
$pdf->Cell(30, 8, iconv("UTF-8", "gbk", "所在班级"), 1, 0, 'C');
$pdf->Cell(30, 8, iconv("UTF-8", "gbk", "所在学期"), 1, 0, 'C');
$pdf->Cell(25, 8, iconv("UTF-8", "gbk", "状态"), 1, 0, 'C');
$pdf->Cell(20, 8, iconv("UTF-8", "gbk", "星数"), 1, 0, 'C');
$pdf->Ln();

foreach ( $list as $al ) {
				
	if($level==5){
		$star = $db->find ( "select * from phpaadb_starlog where uid=" . $al ['id'] );
	}else{
		$star = $db->find ( "select * from phpaadb_starlog where uid=" . $al ['id']." and level = ".$level );
	}
	
	$ischack = '未评测';
	
	if($star){$ischack = '已评测';}
	
	
	$startatol = 0 ;
	if($level==5){
		$start = $db->findAll ( "select * from phpaadb_starlog where uid=" . $al ['id'] );
	}else{
		$start = $db->findAll ( "select * from phpaadb_starlog where uid=" . $al ['id']." and level = ".$level );
	}
	
	$i = 0;
	foreach ( $start as $key=>$star ) {
		$i++;
		$startatol = $startatol + ($star['list01'] + $star['list02'] + $star['list03'] + $star['list04'] + $star['list05'] + $star['list06'] + $star['list07'] + $star['list08'] + $star['list09'] + $star['list10'] + $star['list11'] + $star['list12'] + $star['list13'] + $star['list14'] + $star['list15'] + $star['list16'] + $star['list17'] + $star['list18'] + $star['list19'] + $star['list20'] + $star['list21'] + $star['list22'] + $star['list23'] + $star['list24'] + $star['list25'] + $star['list26'] + $star['list27'] + $star['list28'] + $star['list29'] + $star['list30'] + $star['list31'] + $star['list32'] + $star['list33'] + $star['list34'] + $star['list35'] + $star['list36'] + $star['list37'] + $star['list38'] + $star['list39'] + $star['list40'])/2 ;
	}

	$pdf->Cell(40, 8, iconv("UTF-8", "gbk", $al ['cid']), 1, 0, 'C');
	$pdf->Cell(20, 8, iconv("UTF-8", "gbk", $al ['title']), 1, 0, 'C');
	$pdf->Cell(15, 8, iconv("UTF-8", "gbk", $al ['sex']), 1, 0, 'C');
	$pdf->Cell(30, 8, iconv("UTF-8", "gbk", $al ['classroom']), 1, 0, 'C');
	$pdf->Cell(30, 8, iconv("UTF-8", "gbk", $levelname), 1, 0, 'C');
	$pdf->Cell(25, 8, iconv("UTF-8", "gbk", $ischack), 1, 0, 'C');
	$pdf->Cell(20, 8, iconv("UTF-8", "gbk", $startatol), 1, 0, 'C');
	$pdf->Ln();
}


$pdf->Output();
?>

