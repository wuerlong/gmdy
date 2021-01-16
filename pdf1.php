<?php
/** 
 * 创建(导出)Excel数据表格 
 * @param  array   $list        要导出的数组格式的数据 
 * @param  string  $filename    导出的Excel表格数据表的文件名 
 * @param  array   $indexKey    $list数组中与Excel表格表头$header中每个项目对应的字段的名字(key值) 
 * @param  array   $startRow    第一条数据在Excel表格中起始行 
 * @param  [bool]  $excel2007   是否生成Excel2007(.xlsx)以上兼容的数据表 
 * 比如: $indexKey与$list数组对应关系如下: 
 *     $indexKey = array('id','username','sex','age'); 
 *     $list = array(array('id'=>1,'username'=>'YQJ','sex'=>'男','age'=>24)); 
 */  


ini_set('display_errors', '0');
ini_set('max_execution_time', '60');
require_once ("global.php");

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

//echo $sql;  die;
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


//print_r($list);die;

/**
 * 导出到excel文件(一般导出中文的都会乱码，需要进行编码转换）
 * 使用方法如下
 * $excel = new Excel();
 * $excel->addHeader(array('列1','列2','列3','列4'));
 * $excel->addBody(
            array(
                array('数据1','数据2','数据3','数据4'),
                array('数据1','数据2','数据3','数据4'),
                array('数据1','数据2','数据3','数据4'),
                array('数据1','数据2','数据3','数据4')
            )
        );
 * $excel->downLoad();
 */
$nlist = array();

 
 foreach ( $list as $key=>$al ) {
				
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
	foreach ( $start as $star ) {
		$i++;
		$startatol = $startatol + ($star['list01'] + $star['list02'] + $star['list03'] + $star['list04'] + $star['list05'] + $star['list06'] + $star['list07'] + $star['list08'] + $star['list09'] + $star['list10'] + $star['list11'] + $star['list12'] + $star['list13'] + $star['list14'] + $star['list15'] + $star['list16'] + $star['list17'] + $star['list18'] + $star['list19'] + $star['list20'] + $star['list21'] + $star['list22'] + $star['list23'] + $star['list24'] + $star['list25'] + $star['list26'] + $star['list27'] + $star['list28'] + $star['list29'] + $star['list30'] + $star['list31'] + $star['list32'] + $star['list33'] + $star['list34'] + $star['list35'] + $star['list36'] + $star['list37'] + $star['list38'] + $star['list39'] + $star['list40'])/2 ;
	}
	
	$nlist[$key]['cid']=$al ['cid'];
	$nlist[$key]['title']=$al ['title'];
	$nlist[$key]['sex']=$al ['sex'];
	$nlist[$key]['classroom']=$al ['classroom'];
	
	$nlist[$key]['levelname'] = $levelname;
	$nlist[$key]['ischack'] = $ischack;
	$nlist[$key]['startatol'] = $startatol.'颗星';

}


//利用筛选条件查询订单数据为$list(此处查询的代码就省略了)

$indexKey = array('cid','title','sex','classroom','levelname','ischack','startatol');       
//excel表头内容
$header = array('cid'=>'学籍号','title'=>'姓名','sex'=>'性别','classroom'=>'所在班级','levelname'=>'所在学期','ischack'=>'状态','startatol'=>'星数');
array_unshift($nlist,$header);//将查询到的订单数据和表头内容合并,构造成数组list
//echo '<pre>';print_r($nlist);die; 


toExcel($nlist,$classname.$levelname.'评价表',$indexKey,1,true);


function toExcel($list,$filename,$indexKey,$startRow=1,$excel2007=false){  
    //文件引入  
    include('phpexcel/PHPExcel.php');  
    include('phpexcel/PHPExcel/Writer/Excel2007.php');  
    // require("/include/class/PHPExcel.php");  
    // include("/include/class/PHPExcel/Writer/Excel2007.php");  
    ob_end_clean();
    if(empty($filename)) $filename = time();  
    if( !is_array($indexKey)) return false;  

    $header_arr = array('A','B','C','D','E','F','G','H','I','J','K','L','M', 'N','O','P','Q','R','S','T','U','V','W','X','Y','Z');  
    //初始化PHPExcel()  
    $objPHPExcel = new PHPExcel();  

    //设置保存版本格式  
    if($excel2007){  
        $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);  
        $filename = $filename.'.xlsx';  
    }else{  
        $objWriter = new PHPExcel_Writer_Excel5($objPHPExcel);  
        $filename = $filename.'.xls';  
    }  

    //接下来就是写数据到表格里面去  
    $objActSheet = $objPHPExcel->getActiveSheet();  
    //$startRow = 1;  
    foreach ($list as $row) {  
        foreach ($indexKey as $key => $value){  
            //这里是设置单元格的内容  
            $objActSheet->setCellValue($header_arr[$key].$startRow,$row[$value]);  
        }  
        $startRow++;  
    }  

    // 下载这个表格，在浏览器输出  
    header("Pragma: public");  
    header("Expires: 0");  
    header("Cache-Control:must-revalidate, post-check=0, pre-check=0");  
    header("Content-Type:application/force-download");  
    header("Content-Type:application/vnd.ms-execl");  
    header("Content-Type:application/octet-stream");  
    header("Content-Type:application/download");;  
    header('Content-Disposition:attachment;filename='.$filename.'');  
    header("Content-Transfer-Encoding:binary");  
    $objWriter->save('php://output');  
}



?>