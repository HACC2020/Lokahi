<?php
if ( !defined('K_COUCH_DIR') ) die(); // cannot be loaded directly

// IFrame shortcode
   // Usage: [iframe src="http://www.somesite.com/" frameborder="0" width="100" height="100" allowtransparency]
   $FUNCS->register_shortcode( 'iframe', 'iframe_handler' );
   function iframe_handler( $params, $content=null ){
      global $FUNCS;

      extract( $FUNCS->get_named_vars(array(
         'src' => '',
         'frameborder' => '0',
         'width' => '400',
         'height' => '300',
         'allowtransparency' => 'allowtransparency'
      ), $params) );

      $html =<<<EOS
      <iframe src="$src" title="" width="$width" height="$height" frameborder="$frameborder" allowtransparency="$allowtransparency">
         <a href="$src" target="_blank">$src</a>
      </iframe>
EOS;
       return $html;
   }
