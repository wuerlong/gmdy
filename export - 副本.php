<?php
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

//��ѯSQL
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
//�ܼ�¼��
$total_nums = $db->getRowsNum ($sql );

//ִ�з�ҳ��ѯ
$list = $db->selectLimit ( $sql, $page_size, ($page - 1) * $page_size );

$levelname = '';
if($level==1){
	$levelname = '��һѧ����';
}else if($level==2){
	$levelname = '��һѧ����';
}else if($level==3){
	$levelname = '�ڶ�ѧ����';
}else if($level==4){
	$levelname = '�ڶ�ѧ����';
}




/**
 * ������excel�ļ�(һ�㵼�����ĵĶ������룬��Ҫ���б���ת����
 * ʹ�÷�������
 * $excel = new Excel();
 * $excel->addHeader(array('��1','��2','��3','��4'));
 * $excel->addBody(
            array(
                array('����1','����2','����3','����4'),
                array('����1','����2','����3','����4'),
                array('����1','����2','����3','����4'),
                array('����1','����2','����3','����4')
            )
        );
 * $excel->downLoad();
 */
$nlist = array();

 
 foreach ( $list as $key=>$al ) {
				
	$star = $db->find ( "select * from phpaadb_starlog where uid=" . $al ['id']." and level = ".$level );
	
	$ischack = 'δ����';
	
	if($star){$ischack = '������';}
	
	
	$startatol = 0 ;
	$star = $db->find ( "select * from phpaadb_starlog where uid=" . $al ['id']." and level = ".$level );
	$startatol = ($star['list01'] + $star['list02'] + $star['list03'] + $star['list04'] + $star['list05'] + $star['list06'] + $star['list07'] + $star['list08'] + $star['list09'] + $star['list10'] + $star['list11'] + $star['list12'] + $star['list13'] + $star['list14'] + $star['list15'] + $star['list16'] + $star['list17'] + $star['list18'] + $star['list19'] + $star['list20'] + $star['list21'] + $star['list22'] + $star['list23'] + $star['list24'] + $star['list25'] + $star['list26'] + $star['list27'] + $star['list28'] + $star['list29'] + $star['list30'] + $star['list31'] + $star['list32'] + $star['list33'] + $star['list34'] + $star['list35'] + $star['list36'] + $star['list37'] + $star['list38'] + $star['list39'] + $star['list40'])/2 ;
	
	$nlist[$key]['cid']=$al ['cid'];
	$nlist[$key]['title']=$al ['title'];
	$nlist[$key]['sex']=$al ['sex'];
	$nlist[$key]['classroom']=$al ['classroom'];
	
	$nlist[$key]['levelname'] = $levelname;
	$nlist[$key]['ischack'] = $ischack;
	$nlist[$key]['startatol'] = $startatol;

}
 
 print_r($nlist);
 
$excel = new Excel();
$header = array('ѧ����','����','�Ա�','���ڰ༶','����ѧ��','״̬','����');
$excel->addHeader($header);
$excel->addBody($nlist);

$excel->downLoad();
		
class Excel{
    private $head;
    private $body;
     
    /**
     * 
     * @param type $arr һά����
     */
    public function addHeader($arr){
        foreach($arr as $headVal){
            $headVal = $headVal;
            $this->head .= "{$headVal}\t ";
        }
        $this->head .= "\n";
    }
     
    /**
     * 
     * @param type $arr ��ά����
     */
    public function addBody($arr){
        foreach($arr as $arrBody){
            foreach($arrBody as $bodyVal){
                $bodyVal = $this->charset($bodyVal);
                $this->body .= "{$bodyVal}\t ";
            }
            $this->body .= "\n";
        }
    }
     
    /**
     * ����excel�ļ�
     */
    public function downLoad($filename=''){
        if(!$filename)
            $filename = date('YmdHis',time()).'.xls';
        header("Content-type:application/vnd.ms-excel");
        header("Content-Disposition:attachment;filename=$filename"); 
        header("Content-Type:charset=gb2312");
        if($this->head)
            echo $this->head;
        echo $this->body;
    }
     
    /**
     * ����ת��
     * @param type $string
     * @return string
     */
    public function charset($string){
        return iconv("utf-8", "gb2312", $string);
    }
}
?>