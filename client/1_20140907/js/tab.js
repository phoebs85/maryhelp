// JavaScript Document
function show($self, $target, $cls, $style)
{
	$cls = $cls.split('|');
	$class1 = $cls[0] == undefined ? '' : $cls[0];
	$class2 = $cls[1] == undefined ? '' : $cls[1];
	$style = $style != 'id' ? 'class' : 'id';
	$style == 'class' ? $self.className = $class1 : $self.id = $class1;
	
	$targetNames = $target.split('|');
	var $objs = new Array();
	for(i=0; i < $targetNames.length; i++)
	{
		$target = $targetNames[i];
		$t  = document.getElementsByName($target);
		$objs[i] = $t;
		if($objs[i].length == 0)
		{
			$objs[i] = getByNames('div', $target);
			if($objs[i].length == 0)$objs[i] = getByNames('ul', $target);
			if($objs[i].length == 0)$objs[i] = getByNames('span', $target);
		}
	}
	
	for(var i=1; i <= $objs[0].length; i++)
	{
		$tar = $objs[0][i-1]; //目标对象
		$str = $self.getAttribute('name');
		$str = $str.split('_');
		$source = $str[0];
		$index = $str[1];
		$obj = document.getElementsByName($source +'_'+ i); //源对象
		if($obj.length == 0)
		{
			$obj = getByNames($self.tagName, $source +'_'+ i);
		}
		$obj = $obj[0];
		
		for(j=0; j < $objs.length; j++)
		{
			$tar = $objs[j][i-1];
			if(i == $index)
			{
				$tar.style.display = '';
			}
			else
			{
				$style == 'class' ? $obj.className = $class2 : $obj.id = $class2 ;
				$tar.style.display = 'none';
			}//End if
		}
	}//End for
}//End show

//解决IE下GetElementsByName返回空数组的问题
function getByNames(tag,eltname)
{
	var elts = document.getElementsByTagName(tag);
	var count=0;
	var elements=[];
	for(var i=0;i<elts.length;i++)
	{
		if(elts[i].getAttribute("name")==eltname)
		{
			elements[count++]=elts[i];
		}
	}
	return elements;
}