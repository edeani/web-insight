<?php

function readintro($filename)
{		
	$path = TEMPLATEPATH . '/' . $filename;
	if ( file_exists( $path ) )		
		print file_get_contents($path);
}

// Widget Settings

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Sidebar',
		'before_widget' => '<div id="%1$s" class="sidebarbox">', 
	'after_widget' => '</div>', 
	'before_title' => '<h3>', 
	'after_title' => '</h3>', 
	));
	
function widget_webdemar_search() {
?>
    	<div class="sidebarbox">
			<h3>Search</h3>
				<div class="searchform">
					<form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
						<input type="text" name="s" id="search" />	
						<input type="hidden" id="search-submit" value="Search" />		
					</form>
				</div>
		</div>
	
<?php
}

if ( function_exists('register_sidebar_widget') )
    register_sidebar_widget(__('Search'), 'widget_webdemar_search');

?>

<?php 
	/**
	 * Additional functionality
	 */

	 /***********Contact Form************/
	 function   send_email_main_account(){
		if(empty($_POST["email"])){

		}else if(empty($_POST["nombres"])){

		}else if(empty($_POST["mensaje"])){

		}else{
			$headers = array('Content-Type: text/html; charset=UTF-8');
			$wpmailStatus= wp_mail( SMTP_FROM  , 'Hola '.$_POST["nombres"].' te ha contactado', 'Datos <br> Nombres:'.$_POST["nombres"].'<br>'.'Email:'.$_POST["email"].'<br> Mensaje: <br>'.$_POST["mensaje"] );
			
			global $statusemail;
			$statusemail = "";
			if($wpmailStatus){
				$statusemail="S";
			}else{
				$statusemail="N";
			}


			wp_redirect( home_url('/contactanos/?statusemail='.$statusemail) ); 
			exit;
			
		}
		
	 }

	 /**
	  * Interceptions external requests
	  */
	  
	add_action('admin_post_send_email_main','send_email_main_account');
	add_action('admin_post_nopriv_send_email_main','send_email_main_account');
?>

