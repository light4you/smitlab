<p></p>
<?
if(!eregi("Zeroboard",$a_login)) $a_login= str_replace(">","><font class=list_han>",$a_login)."&nbsp;";
if(!eregi("Zeroboard",$a_logout)) $a_logout= str_replace(">","><font class=list_han>",$a_logout)."&nbsp;";
if(!eregi("Zeroboard",$a_setup)) $a_setup= str_replace(">","><font class=list_han>",$a_setup)."&nbsp;";
if(!eregi("Zeroboard",$a_member_join)) $a_member_join= str_replace(">","><font class=list_han>",$a_member_join)."&nbsp;";
if(!eregi("Zeroboard",$a_member_modify)) $a_member_modify= str_replace(">","><font class=list_han>",$a_member_modify)."&nbsp;";
if(!eregi("Zeroboard",$a_member_memo)) $a_member_memo= str_replace(">","><font class=list_han>",$a_member_memo)."&nbsp;";

switch($select_arrange) {
	case "" : 
			if($desc="desc") $arrow1 = "▼"; else $arrow1 = "▲";
			break;
	case "headnum" : 
			if($desc="desc") $arrow1 = "▼"; else $arrow1 = "▲";
			break;
	case "vote" : 
			if($desc="desc") $arrow2 = "▼"; else $arrow2 = "▲";
			break;
	case "hit" : 
			if($desc="desc") $arrow3 = "▼"; else $arrow3 = "▲";
			break;
	case "download1" : 
			if($desc="desc") $arrow4 = "▼"; else $arrow4 = "▲";
			break;
	default :
			if($desc="desc") $arrow1 = "▼"; else $arrow1 = "▲";
			break;
}
?>

<table border=0 cellspacing=0 cellpadding=0 width=<?=$width?>>
<tr>
	<td <?if(!$setup[use_category]) echo"align=right";?>>
		<?=$a_login?>로그인</a>
		<?=$a_member_join?>회원가입</a>
		<?=$a_member_modify?>정보수정</a>
		<?=$a_member_memo?>메모박스</a>
		<?=$a_logout?>로그아웃</a>
		<?=$a_setup?>설정변경</a>
	</td>
	<td align=right><nowrap><font class=list_eng>
		&nbsp;&nbsp;
		<?=$hide_category_start?>
		종류 :</font> <?=$a_category?>
		<?=$hide_category_end?></nowrap>
	</td>
</tr>
</table>
