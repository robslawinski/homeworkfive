<?php
function ifStatements()
{
	$var;
	$str = '<u>'."If Statements".'</u>';
	
	if(!is_null($var))
	{
		$str .=  '<p>' .'variable is not null' . '</p>';
		if(!empty($var))
		{
			$str.= '<p>' . 'variable is not empty'. '</p>';
			if (!isset($var))
			{
				$str.= '<p>'. 'variable is not set' . '</p>';
			}
			else
			{
				$str .= '<p>'. 'variable is set' . '</p>';
			}
		}
		elseif (empty($var))
		{
			$str .= '<p>' . 'variable is empty'. '</p>';
			if (!isset($var))
			{
				$str.= '<p>'. 'variable is not set' . '</p>';
			}
			else
			{
				$str .= '<p>'. 'variable is set' . '</p>';
			}
		}
	}
	elseif(is_null($var)){
		$str .= '<p>' . 'variable is null' . '</p>';
		if(!empty($var))
		{
			$str .= '<p>' . 'variable is not empty'. '</p>';
			if (!isset($var))
			{
				$str .= '<p>'. 'variable is not set' . '</p>';
			}
			else
			{
				$str .= '<p>'. 'variable is set' . '</p>';
			}
		}
		elseif (empty($var))
		{
			$str .= '<p>' . 'variable is empty'. '</p>';
			if (!isset($var))
			{
				$str.= '<p>'. 'variable is not set' . '</p>';
			}
			else
			{
				$str .= '<p>'. 'variable is set' . '</p>';
			}
		}
		
	}
	return $str;
}

function switchStatements()
{
	$var;
	$str = '<u>'."Switch Cases".'</u>';
	
	switch($var)
	{
		case is_null($var): 
			$str .= '<p>' .'variable is not null' . '</p>';
		case empty($var):
			$str .= '<p>' .'variable is not empty' . '</p>';
		case isset($var):
			$str .= '<p>' .'variable is not set' . '</p>';
		case !is_null($var):
			$str .= '<p>' .'variable is null' . '</p>';
		case !empty($var):
			$str .= '<p>' .'variable is empty' . '</p>';
			break;
		case !isset($var):
			$str .= '<p>' .'variable is set' . '</p>';
	} 
	return $str;
}

print_r(switchStatements());
print_r(ifStatements());
?>