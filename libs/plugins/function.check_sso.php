<?php
/*
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.
 
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

Copyright (C) 2007 Marco Aurélio Graciotto Silva <magsilva@gmail.com>
*/


function smarty_function_check_sso($params, &$smarty)
{
   // call the function
   $url = $params['url'];
   $identity = $params['identity'];
   
   $result = fopen($url, 'r');
	if ($result === FALSE) {
		$result = 'images/error.png';	
	} else {
		$result = $url . '?openid_name=' . $identity;
	}

   // assign template variable
   $smarty->assign('sso_status', $result);
}


?>
<?php
/*
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.
 
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA

Copyright (C) 2007 Marco Aurélio Graciotto Silva <magsilva@gmail.com>
*/


function smarty_function_check_sso($params, &$smarty)
{
   // call the function
   $url = $params['url'];
   $identity = $params['identity'];
   
   $result = fopen($url, 'r');
	if ($result === FALSE) {
		$result = 'images/error.png';	
	} else {
		$result = $url . '?openid_name=' . $identity;
	}

   // assign template variable
   $smarty->assign('sso_status', $result);
}


?>
