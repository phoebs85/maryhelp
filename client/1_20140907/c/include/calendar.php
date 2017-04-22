<script language=javascript>

function tabDiv(obj,num,len,cn,out)
{
 var overname=cn;
 for(var id = 1;id<=len;id++)
 {
  var ss=obj+id;
  var snav =obj+"nav"+id;
  if(id==num){
  try{document.getElementById(ss).style.display="block"}catch(e){};
  try{document.getElementById(snav).className=overname}catch(e){};
 }else{
   try{document.getElementById(ss).style.display="none"}catch(e){};
   try{document.getElementById(snav).className=out}catch(e){};
 }

}  
}function UnTip()
{
	tt_OpReHref();
	if(tt_aV[DURATION] < 0 && (tt_iState & 0x2))
		tt_tDurt.Timer("tt_HideInit()", -tt_aV[DURATION], true);
	else if(!(tt_aV[STICKY] && (tt_iState & 0x2)))
		tt_HideInit();
}

</script>
<style>
body, div, dl, dt, dd, ul, ol, li, h1, h2, h3, h4, h5, h6, form, input, textarea, p, th, td { margin: 0; padding: 0; }
body{ font:12px/1.5em Arial; background:#FFF; background:url(../img/bg.jpg) no-repeat center top; font-size:12px;color:#464646; line-height:20px;}
a { color:#464646; text-decoration:none; cursor:pointer; }
a:hover { color:#de0052;}
li { list-style-type:none; color:#464646;}
.calendar { width:331px; height:225px; float:left; }
.calendar .time { height:36px; color:#FFF; font-weight:bold; line-height:40px; font-size:16px; position:relative; }
.calendar .time span.month { position:absolute; left:111px;}
.calendar .time a.go_top,
.calendar .time a.go_down,
.calendar .time a.go_prev,
.calendar .time a.go_next { display:block; width:13px; height:13px; position:absolute; top:14px; left:43px;}
.calendar .time a.go_down { left:254px;}
.calendar .time a.go_prev,
.calendar .time a.go_next { width:7px; left:75px;}
.calendar .time a.go_next { width:9px; left:226px; }
.calendar table { margin:19px 0 0 4px; padding:0;  font-size:12px;}
.calendar table td { width:42px; height:27px; text-indent:5px; color:#000000;}
.calendar table td.invalid { opacity:0.4;  filter:alpha(opacity=40);}
.calendar table td.weekend { color:#cc0000; }
.calendar table td.on { background:#de0052; color:#FFF; cursor:pointer}
.last_news { width:385px; float:left; height:226px;}
.last_news h4 { padding-top:8px; height:50px; }
.last_news h5 { height:40px; }
.last_news p { padding-bottom:20px; }
.last_news h5 a { font-size:17px; color:#575757; font-weight:bold; }
.last_news h5 a:hover { color:#4199c4;  }
.last_news h5 span { color:#de0052; font-size:12px; margin-left:13px;}
.last_news a.more { padding-left:10px;color:#de0052; }
.last_news a.more:hover { color:#de0052; text-decoration:underline }
</style>

<div class="calendar">
                <div class="time">
                  <a class="go_top"></a><a class="go_prev"></a>
                  <span class="month">2014年3月</span>
                  <a class="go_next"></a><a class="go_down"></a>
                </div>
                <table width="300" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="weekend invalid">23</td>
                    <td class="invalid">24</td>
                    <td class="invalid">25</td>
                    <td class="invalid">26</td>
                    <td class="invalid">27</td>
                    <td class="invalid">28</td>
                    <td class="weekend">1</td>
                  </tr>
                  <tr>
                    <td class="weekend">2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td class="weekend on" onmousemove="javascript:tabDiv('nlt',1,3,'liover','liout')">8</td>
                  </tr>
                  <tr>
                    <td class="weekend">9</td>
                    <td>10</td>
                    <td>11</td>
                    <td class="on" onmousemove="javascript:tabDiv('nlt',2,3,'liover','liout')">12</td>
                    <td>13</td>
                    <td>14</td>
                    <td class="weekend">15</td>
                  </tr>
                  <tr>
                    <td class="weekend">16</td>
                    <td>17</td>
                    <td>18</td>
                    <td>19</td>
                    <td>20</td>
                    <td>21</td>
                    <td class="weekend">22</td>
                  </tr>
                  <tr>
                    <td class="weekend">23</td>
                    <td class="on" onmousemove="javascript:tabDiv('nlt',3,3,'liover','liout')">24</td>
                    <td>25</td>
                    <td>26</td>
                    <td>27</td>
                    <td>28</td>
                    <td class="weekend">29</td>
                  </tr>
                  <tr>
                    <td class="weekend">30</td>
                    <td>31</td>
                    <td class="invalid">1</td>
                    <td class="invalid">2</td>
                    <td class="invalid">3</td>
                    <td class="invalid">4</td>
                    <td class="weekend invalid">5</td>
                  </tr>
                </table>

              </div>
              
              <div class="last_news"  id="nlt1" style="display:block;" onclick="visibility:hidden">
                <h4><img src="../img/last_event_h3.png" width="93" height="20" /></h4>
                <h5><a href="../activities_news_detail.php" target="_parent">60週年校慶晚宴</a><span>2014年3月8日</span></h5>
               
                 <p>聖母進教之佑舊同學會創立於一九零八年，由聖鮑思高神父的第四位繼任人真福李納德神父指導成立。目的是發揚鮑思高神父給當時舊同學的勸勉：「你們要團結起來，互相幫助。」</p>
                 
                 <p><a href="../activities_news_detail.php" class="more" target="_parent">+ 更多</a></p>
           
              </div>
              
              
              <div class="last_news"  id="nlt2" style="display:none;" onclick="visibility:hidden">
                <h4><img src="../img/last_event_h3.png" width="93" height="20" /></h4>
                <h5><a href="../activities_news_detail.php" target="_parent">60週年校慶晚宴</a><span>2014年3月12日</span></h5>
               
                 <p>聖母進教之佑舊同學會創立於一九零八年，由聖鮑思高神父的第四位繼任人真福李納德神父指導成立。</p>
                 
                 <p><a href="../activities_news_detail.php" class="more" target="_parent">+ 更多</a></p>
           
              </div>
              
              <div class="last_news"  id="nlt3" style="display:none;" onclick="visibility:hidden">
                <h4><img src="../img/last_event_h3.png" width="93" height="20" /></h4>
                <h5><a href="../activities_news_detail.php" target="_parent">60週年校慶晚宴</a><span>2014年3月24日</span></h5>
               
                 <p>目的是發揚鮑思高神父給當時舊同學的勸勉：「你們要團結起來，互相幫助。」</p>
                 
                 <p><a href="../activities_news_detail.php" class="more" target="_parent">+ 更多</a></p>
           
              </div>