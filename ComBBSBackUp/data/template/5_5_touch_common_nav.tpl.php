<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<script>
//�����󵼺��̶�
jQuery(function(){
jQuery(window).scroll(function(){
          height = jQuery(window).scrollTop();
   	  	  if(height > 50){
 jQuery('.header').addClass("header_fixed fadeInDown");
   	  	  }else{
 jQuery('.header').removeClass("header_fixed fadeInDown");
   	  	  };
});
});
</script>

