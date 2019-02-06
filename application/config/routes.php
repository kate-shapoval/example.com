<?php
	return array(
		'^$'=>'main/view',
		'^events$'=> 'events/index',
		'^events/([0-9]+)$' => 'events/view/$1',
		'^login$' => 'user/login',
		'^account$' => 'account/index',
		'^login/submit$' => 'user/login'	 
 	);
?>