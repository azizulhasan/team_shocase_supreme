<style>
  .wpm-carousel-item-clone{
    display: none;
  }
  <?php
  if(isset($allSlider[61]) && $allSlider[61]){
    if($allSlider[0]){
      echo "#wpm-6310-category-{$ids}{display: none}";
    }
    else{
      echo "#wpm-6310-category-carousel-{$ids}{display: none}";
    }
  }
  else{
    echo "#wpm-6310-category-carousel-{$ids}, #wpm-6310-category-{$ids}{display: none}";
  }
 ?>
  #wpm-6310-category-<?php echo $ids ?>,  #wpm-6310-category-carousel-<?php echo $ids ?>{
    width: 100%;
    text-align: <?php echo isset($allSlider[77])?$allSlider[77]:'left' ?>;
    position: relative;
    height: <?php echo isset($allSlider[74])?$allSlider[74]:'40' ?>px;
    line-height: <?php echo isset($allSlider[74])?$allSlider[74]:'40' ?>px;
    margin-bottom: <?php echo isset($allSlider[73])?$allSlider[73]:'30' ?>px;
    margin-left: 15px;
    margin-right: 15px;
    position: relative;
    z-index: 0;
  }
  #wpm-6310-category-<?php echo $ids ?> .wpm_6310_category_list,
  #wpm-6310-category-carousel-<?php echo $ids ?> .wpm_6310_category_list {
    display: inline-block;
    font-size: <?php echo isset($allSlider[62])?$allSlider[62]:'14' ?>px;
    color:  <?php echo isset($allSlider[63])?$allSlider[63]:'rgb(255, 255, 255)' ?>;
    border: <?php echo isset($allSlider[65])?$allSlider[65]:'1' ?>px solid <?php echo isset($allSlider[66])?$allSlider[66]:'rgb(0, 0, 0)' ?>;
    background-color: <?php echo isset($allSlider[67])?$allSlider[67]:'rgba(0, 94, 78, 0.8)' ?>;
    font-weight: <?php echo isset($allSlider[71])?$allSlider[71]:'100' ?>;
    font-family: <?php echo (isset($allSlider[72]) && $allSlider[72])?str_replace("+", " ", $allSlider[72]):'Amarnath' ?>;
    padding: 0 <?php echo isset($allSlider[76])?$allSlider[76]:'20' ?>px;
    position: relative;
    margin-right:  <?php echo isset($allSlider[75])?$allSlider[75]:'9' ?>px;
    border-radius: <?php echo isset($allSlider[78])?$allSlider[78]:'3' ?>px;
    cursor: pointer;
    -webkit-transition: all 0.6s ease 0s;
    -moz-transition: all 0.6s ease 0s;
    -ms-transition: all 0.6s ease 0s;
    -o-transition: all 0.6s ease 0s;
    transition: all 0.6s ease 0s;
  }
  #wpm-6310-category-<?php echo $ids ?> .wpm_6310_category_list_active,  
  #wpm-6310-category-<?php echo $ids ?> .wpm_6310_category_list:hover,
  #wpm-6310-category-carousel-<?php echo $ids ?> .wpm_6310_category_list_active,  
  #wpm-6310-category-carousel-<?php echo $ids ?> .wpm_6310_category_list:hover {
    background-color:  <?php echo isset($allSlider[68])?$allSlider[68]:'rgba(0, 94, 78, 0.8)' ?> !important;
    color:  <?php echo isset($allSlider[69])?$allSlider[69]:'rgb(255, 255, 255)' ?> !important;
    border-color:  <?php echo isset($allSlider[70])?$allSlider[70]:'rgba(255, 0, 0, 0.8)' ?> !important;
  }
  #wpm-6310-category-<?php echo $ids ?> .wpm_6310_category_list:hover{
    color:  <?php echo isset($allSlider[64])?$allSlider[64]:'rgb(255, 255, 255)' ?>;
  }
.wpm-6310-owl-carousel-container{
  width: calc(100% - 30px) !important;
  padding: 0 15px;
}
</style>

<script>
  jQuery(document).ready(function() {  
    jQuery(".wpm_6310_category_list_<?php echo $ids ?>").on('click', function(){
      let attr = jQuery(this).attr('wpm-data-filter');
      let cls = jQuery(this).parent().hasClass('wpm-6310-carousel');
      jQuery(".wpm_6310_category_list_<?php echo $ids ?>").removeClass('wpm_6310_category_list_active');
      jQuery(this).addClass('wpm_6310_category_list_active');
      
      /* Carousel Control */
      if(cls){        
        let items = jQuery(".wpm-carousel-item-clone-<?php echo $ids ?> .wpm-6310-item");
        for(let i = 0; i<items.length; i++){          
          jQuery("#wpm-6310-slider-<?php echo $ids ?>").trigger('remove.owl.carousel', i).trigger('refresh.owl.carousel');
        }
        
        //Append members in Carousel
        jQuery(items).each(function(){
          //console.log(jQuery(this).attr('class'));
          if(jQuery(this).hasClass(attr)){
              let content = this.outerHTML;
              jQuery("#wpm-6310-slider-<?php echo $ids ?>").trigger('add.owl.carousel', [jQuery(this.outerHTML), 0])
              .trigger('refresh.owl.carousel')
              .trigger('to.owl.carousel', [0, 500]);
          }
        });
      }
      else{        
        jQuery(`.wpm_main_template_<?php echo $ids ?> .wpm-6310-category-filter:not(.${attr})`).hide(300);
        jQuery(`.wpm_main_template_<?php echo $ids ?> .${attr}`).show(300);
      }      
    });
  });
</script>