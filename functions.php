<?php
register_nav_menus();









//更换avatar地址
	function get_ssl_avatar($avatar) {
	    $avatar = str_replace(array("www.gravatar.com","0.gravatar.com","1.gravatar.com","2.gravatar.com"),"secure.gravatar.com",$avatar);
	    return $avatar;
	}
	add_filter('get_avatar', 'get_ssl_avatar');





?>
