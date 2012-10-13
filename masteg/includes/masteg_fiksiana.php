<?php

function masteg_fiksiana_text()
{	
	$uri = 'http://fiksiana.kompasiana.com';
	$html = file_get_html($uri);

	################################################################################
	foreach($html->find('div.sidelefttext') as $element){
		$link[] = GetBetween($element, '<a href="', '">'); 
	}

	$link1 = "";
	if(count($link) >0) $link1 = str_replace("'","",$link[0]);
	//echo $link1."<hr/>";

	$link2 = "";
	if(count($link) >1) $link2 = str_replace("'","",$link[1]);
	//echo $link2."<hr/>";

	$link3 = "";
	if(count($link) >2) $link3 = str_replace("'","",$link[2]);
	//echo $link3."<hr/>";

	$link4 = "";
	if(count($link) >3) $link4 = str_replace("'","",$link[3]);
	//echo $link4."<hr/>";

	$link5 = "";
	if(count($link) >4) $link5 = str_replace("'","",$link[4]);
	//echo $link5."<hr/>";

	$link6 = "";
	if(count($link) >5) $link6 = str_replace("'","",$link[5]);
	//echo $link6."<hr/>";

	$link7 = "";
	if(count($link) >6) $link7 = str_replace("'","",$link[6]);
	//echo $link7."<hr/>";

	$link8 = "";
	if(count($link) >7) $link8 = str_replace("'","",$link[7]);
	//echo $link8."<hr/>";

	################################################################################

	foreach($html->find('div.sidelefttext') as $element){
		$link = GetBetween($element, '<a href=', '</a>');
		$title[] = GetBetween($link, '<h3 >', '</h3>');
	}

	$title1 = "";
	if(count($title) >0) $title1 = str_replace("'","",$title[0]);
	//echo $title1."<hr/>";

	$title2 = "";
	if(count($title) >1) $title2 = str_replace("'","",$title[1]);
	//echo $title2."<hr/>";

	$title3 = "";
	if(count($title) >2) $title3 = str_replace("'","",$title[2]);
	//echo $title3."<hr/>";

	$title4 = "";
	if(count($title) >3) $title4 = str_replace("'","",$title[3]);
	//echo $title4."<hr/>";

	$title5 = "";
	if(count($title) >4) $title5 = str_replace("'","",$title[4]);
	//echo $title5."<hr/>";

	$title6 = "";
	if(count($title) >5) $title6 = str_replace("'","",$title[5]);
	//echo $title6."<hr/>";

	$title7 = "";
	if(count($title) >6) $title7 = str_replace("'","",$title[6]);
	//echo $title7."<hr/>";

	$title8 = "";
	if(count($title) >7) $title8 = str_replace("'","",$title[7]);
	//echo $title8."<hr/>";

	################################################################################

	foreach($html->find('div.sidelefttext') as $element){
		$content[] = GetBetween($element, '<h4 >', '</h4>');
	}

	$content1 = "";
	if(count($content) >0) $content1 = str_replace("'","",$content[0]);
	//echo $content1."<hr/>";

	$content2 = "";
	if(count($content) >1) $content2 = str_replace("'","",$content[1]);
	//echo $content2."<hr/>";

	$content3 = "";
	if(count($content) >2) $content3 = str_replace("'","",$content[2]);
	//echo $content3."<hr/>";

	$content4 = "";
	if(count($content) >3) $content4 = str_replace("'","",$content[3]);
	//echo $content4."<hr/>";

	$content5 = "";
	if(count($content) >4) $content5 = str_replace("'","",$content[4]);
	//echo $content5."<hr/>";

	$content6 = "";
	if(count($content) >5) $content6 = str_replace("'","",$content[5]);
	//echo $content6."<hr/>";

	$content7 = "";
	if(count($content) >6) $content7 = str_replace("'","",$content[6]);
	//echo $content7."<hr/>";

	$content8 = "";
	if(count($content) >7) $content8 = str_replace("'","",$content[7]);
	//echo $content8."<hr/>";

	################################################################################

	foreach($html->find('div.sidelefttext') as $element){
		$ket[] = GetBetween($element, '<h5 >', '</h5>');
	}

	$ket1 = "";
	if(count($ket) >0) $ket1 = str_replace("'","",$ket[0]);
	//echo $ket1."<hr/>";

	$ket2 = "";
	if(count($ket) >1) $ket2 = str_replace("'","",$ket[1]);
	//echo $ket2."<hr/>";

	$ket3 = "";
	if(count($ket) >2) $ket3 = str_replace("'","",$ket[2]);
	//echo $ket3."<hr/>";

	$ket4 = "";
	if(count($ket) >3) $ket4 = str_replace("'","",$ket[3]);
	//echo $ket4."<hr/>";

	$ket5 = "";
	if(count($ket) >4) $ket5 = str_replace("'","",$ket[4]);
	//echo $ket5."<hr/>";

	$ket6 = "";
	if(count($ket) >5) $ket6 = str_replace("'","",$ket[5]);
	//echo $ket6."<hr/>";

	$ket7 = "";
	if(count($ket) >6) $ket7 = str_replace("'","",$ket[6]);
	//echo $ket7."<hr/>";

	$ket8 = "";
	if(count($ket) >7) $ket8 = str_replace("'","",$ket[7]);
	//echo $ket8."<hr/>";

	#################################################################################

	foreach($html->find('div.imgdd') as $element){
		$bio[] = GetBetween($element, '<img src="', '" width');
	}

	$bio1 = "";
	if(count($bio) >0) $bio1 = str_replace("'","",$bio[0]);
	//echo $bio1."<hr/>";

	$bio2 = "";
	if(count($bio) >1) $bio2 = str_replace("'","",$bio[1]);
	//echo $bio2."<hr/>";

	$bio3 = "";
	if(count($bio) >2) $bio3 = str_replace("'","",$bio[2]);
	//echo $bio3."<hr/>";

	$bio4 = "";
	if(count($bio) >3) $bio4 = str_replace("'","",$bio[3]);
	//echo $bio4."<hr/>";

	$bio5 = "";
	if(count($bio) >4) $bio5 = str_replace("'","",$bio[4]);
	//echo $bio5."<hr/>";

	$bio6 = "";
	if(count($bio) >5) $bio6 = str_replace("'","",$bio[5]);
	//echo $bio6."<hr/>";

	$bio7 = "";
	if(count($bio) >6) $bio7 = str_replace("'","",$bio[6]);
	//echo $bio7."<hr/>";

	$bio8 = "";
	if(count($bio) >7) $bio8 = str_replace("'","",$bio[7]);
	//echo $bio8."<hr/>";
	
	foreach($html->find('div.sidelefttext') as $element){
		$ket = GetBetween($element, '</h4><br/>', '</h5>');
		$time[] = GetBetween($ket, '<h5 >', '<a href');
	}
	$time1 = "";
	if(count($time) >0) $time1 = str_replace("|","",$time[0]);
	//echo $time1."<hr/>";

	$time2 = "";
	if(count($time) >1) $time2 = str_replace("|","",$time[1]);
	//echo $time2."<hr/>";

	$time3 = "";
	if(count($time) >2) $time3 = str_replace("|","",$time[2]);
	//echo $time3."<hr/>";

	$time4 = "";
	if(count($time) >3) $time4 = str_replace("|","",$time[3]);
	//echo $time4."<hr/>";

	$time5 = "";
	if(count($time) >4) $time5 = str_replace("|","",$time[4]);
	//echo $time5."<hr/>";

	$time6 = "";
	if(count($time) >5) $time6 = str_replace("|","",$time[5]);
	//echo $time6."<hr/>";

	$time7 = "";
	if(count($time) >6) $time7 = str_replace("|","",$time[6]);
	//echo $time7."<hr/>";

	$time8 = "";
	if(count($time) >7) $time8 = str_replace("|","",$time[7]);
	//echo $time8."<hr/>";	

	foreach($html->find('div.sidelefttext') as $element){
		$ket = GetBetween($element, '</h4><br/>', '</h5>');
		$cat[] = GetBetween($ket, '</a> <a href="', '">');
	}
	$cat1 = "";
	if(count($cat) >0) $cat1 = str_replace("|","",$cat[0]);
	//echo $cat1."<hr/>";

	$cat2 = "";
	if(count($cat) >1) $cat2 = str_replace("|","",$cat[1]);
	//echo $cat2."<hr/>";

	$cat3 = "";
	if(count($cat) >2) $cat3 = str_replace("|","",$cat[2]);
	//echo $cat3."<hr/>";

	$cat4 = "";
	if(count($cat) >3) $cat4 = str_replace("|","",$cat[3]);
	//echo $cat4."<hr/>";

	$cat5 = "";
	if(count($cat) >4) $cat5 = str_replace("|","",$cat[4]);
	//echo $cat5."<hr/>";

	$cat6 = "";
	if(count($cat) >5) $cat6 = str_replace("|","",$cat[5]);
	//echo $cat6."<hr/>";

	$cat7 = "";
	if(count($cat) >6) $cat7 = str_replace("|","",$cat[6]);
	//echo $cat7."<hr/>";

	$cat8 = "";
	if(count($cat) >7) $cat8 = str_replace("|","",$cat[7]);
	//echo $cat8."<hr/>";
	
	#####################################################################################
	
	$isi = "<tr>
				<td><strong><a href='$link1' target='_blank'>$title1</a></strong></td>
				<td>$content1</td>
				<td>$time1</td>
				<td><a href='$cat1' target='_blank'><img src='$bio1'></img></a></td>
			</tr>
			<tr>
				<td><strong><a href='$link2' target='_blank'>$title2</a></strong></td>
				<td>$content2</td>
				<td>$time2</td>
				<td><a href='$cat2' target='_blank'><img src='$bio2'></img></a></td>
			</tr>
			<tr>
				<td><strong><a href='$link3' target='_blank'>$title3</a></strong></td>
				<td>$content3</td>
				<td>$time3</td>
				<td><a href='$cat3' target='_blank'><img src='$bio3'></img></a></td>
			</tr>
			<tr>
				<td><strong><a href='$link4' target='_blank'>$title4</a></strong></td>
				<td>$content4</td>
				<td>$time4</td>
				<td><a href='$cat4' target='_blank'><img src='$bio4'></img></a></td>
			</tr>
			<tr>
				<td><strong><a href='$link5' target='_blank'>$title5</a></strong></td>
				<td>$content5</td>
				<td>$time5</td>
				<td><a href='$cat5' target='_blank'><img src='$bio5'></img></a></td>
			</tr>
			<tr>
				<td><strong><a href='$link6' target='_blank'>$title6</a></strong></td>
				<td>$content6</td>
				<td>$time6</td>
				<td><a href='$cat6' target='_blank'><img src='$bio6'></img></a></td>
			</tr>
			<tr>
				<td><strong><a href='$link7' target='_blank'>$title7</a></strong></td>
				<td>$content7</td>
				<td>$time7</td>
				<td><a href='$cat7' target='_blank'><img src='$bio7'></img></a></td>
			</tr>
			<tr>
				<td><strong><a href='$link8' target='_blank'>$title8</a></strong></td>
				<td>$content8</td>
				<td>$time8</td>
				<td><a href='$cat8' target='_blank'><img src='$bio8'></img></a></td>
			</tr>
			";
	$table ='
			<table rel="" id="" cellspacing="0" class="widefat">
			<thead>
			<tr>
				<th class="manage-column" scope="col">Title</th>
				<th class="manage-column" scope="col">Snippet</th>
				<th class="manage-column" scope="col">Timestamp</th>
				<th class="manage-column" scope="col">Writer</th>
			</tr>
			</thead>
			<tfoot>
			<tr>
				<th class="manage-column" scope="col">Title</th>
				<th class="manage-column" scope="col">Snippet</th>
				<th class="manage-column" scope="col">Timestamp</th>
				<th class="manage-column" scope="col">Writer</th>
			</tr>
			</tfoot>
			<tbody>
			'.$isi.'
			</tbody>
			</table>
			';
	
	echo $table;

}

function GetBetween($content,$start,$end){
    $r = explode($start, $content);
    if (isset($r[1])){
        $r = explode($end, $r[1]);
        return $r[0];
    }
    return '';
}

?>