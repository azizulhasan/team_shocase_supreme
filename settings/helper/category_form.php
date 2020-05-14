<div id="tab-7">
  <div class="row wpm_6310_padding_15_px">
    <div class="wpm-col-6">
      <table width="100%">
        <tr height="45">
          <td width="45%">
            <b>Activate Category</b>
          </td>
          <td>
            <input type="hidden" name="category_activation" id="category_activation" value="<?php echo isset($allSlider[61])?$allSlider[61]:0 ?>" />
            <button type="button" value="1" class="wpm-btn-multi activate-category<?php if ($allSlider[61] == 1) echo " active" ?>">Yes</button>
            <button type="button" value="0" class="wpm-btn-multi activate-category<?php if ($allSlider[61] == 0) echo " active" ?>">No</button>
          </td>
        </tr>
        <tr height="45" class="category_field">
          <td width="45%"><b>Category Position</b></td>
          <td width="55%">
          <select name="category_position" class="wpm-form-input" id="category_position">
              <option value="left" <?php if (isset($allSlider[77]) && $allSlider[77] == 'left') echo " selected=''" ?>>Left</option>
              <option value="right" <?php if (isset($allSlider[77]) && $allSlider[77] == 'right') echo " selected=''" ?>>Right</option>
              <option value="center" <?php if (isset($allSlider[77]) && $allSlider[77] == 'center') echo " selected=''" ?>>Center</option>
            </select>
          </td>
        </tr>
        <tr height="45" class="category_field">
          <td width="45%"><b>Font Size</b></td>
          <td width="55%">
            <input type="number" class="wpm-form-input" name="category_font_size" id="wpm_6310_category_font_size" value="<?php echo (isset($allSlider[62]) && $allSlider[62])?$allSlider[62]:"14" ?>">
          </td>
        </tr>
        <tr height="45" class="category_field">
          <td width="45%"><b>Font Color</b></td>
          <td width="55%">
            <input type="text" name="category_font_color" id="wpm_category_font_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo (isset($allSlider[63]) && $allSlider[63])?$allSlider[63]:"rgb(255, 255, 255)" ?>">
          </td>
        </tr>
        <tr height="45" class="category_field">
          <td width="45%"><b>Font Hover Color</b></td>
          <td width="55%">
            <input type="text" name="category_font_hover_color" id="wpm_category_font_hover_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo (isset($allSlider[64]) && $allSlider[64])?$allSlider[64]:"rgb(255, 255, 255)" ?>">
          </td>
        </tr>
        <tr height="45" class="category_field">
          <td width="45%"><b>Border Width</b></td>
          <td width="55%">
            <input type="number" class="wpm-form-input" name="category_border_width" id="wpm_6310_category_border_width" value="<?php echo (isset($allSlider[65]) && $allSlider[65])?$allSlider[65]:"1" ?>">
          </td>
        </tr>
        <tr height="45" class="category_field">
          <td width="45%"><b>Border Color</b></td>
          <td width="55%">
            <input type="text" name="category_border_color" id="wpm_6310_category_border_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" data-opacity=".8" value="<?php echo (isset($allSlider[66]) && $allSlider[66])?$allSlider[66]:"rgba(0, 0, 0, 0.8)" ?>">
          </td>
        </tr>
        <tr height="45" class="category_field">
          <td width="45%"><b>Background Color</b></td>
          <td width="55%">
            <input type="text" name="category_background_color" id="wpm_6310_category_background_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" data-opacity=".8"value="<?php echo (isset($allSlider[67]) && $allSlider[67])?$allSlider[67]:"rgba(0, 179, 149, 0.8)" ?>">
          </td>
        </tr>

        <tr height="45" class="category_field">
          <td width="45%"><b>Active Background Color</b></td>
          <td width="55%">
            <input type="text" name="category_active_background_color" id="wpm_6310_category_active_background_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" data-opacity=".8" value="<?php echo (isset($allSlider[68]) && $allSlider[68])?$allSlider[68]:"rgba(0, 94, 78, 0.8)" ?>">
          </td>
        </tr>

      </table>
    </div>
    <div class="wpm-col-6">
      <table width="100%" class="wpm_6310_category_field">
        <tr height="45" class="category_field">
          <td width="45%"><b>Active Font Color</b></td>
          <td width="55%">
            <input type="text" name="category_active_font_color" id="wpm_6310_category_active_font_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo (isset($allSlider[69]) && $allSlider[69])?$allSlider[69]:"rgba(255, 255, 255)" ?>">
          </td>
        </tr>
        <tr height="45" class="category_field">
          <td width="45%"><b>Active Border Color</b></td>
          <td width="55%">
            <input type="text" name="category_active_border_color" id="wpm_6310_category_active_border_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" data-opacity=".8" value="<?php echo (isset($allSlider[70]) && $allSlider[70])?$allSlider[70]:"rgba(54, 54, 54, 0.8)" ?>">
          </td>
        </tr>
        <tr height="45" class="category_field">
          <td width='55%'><b>Font Weight</b></td>
          <td>
            <select name="category_font_weight" class="wpm-form-input" id="wpm_6310_category_font_weight">
              <option value="100" <?php if (isset($allSlider[71]) && $allSlider[71] == '100') echo " selected=''" ?>>100</option>
              <option value="200" <?php if (isset($allSlider[71]) && $allSlider[71] == '200') echo " selected=''" ?>>200</option>
              <option value="300" <?php if (isset($allSlider[71]) && $allSlider[71] == '300') echo " selected=''" ?>>300</option>
              <option value="400" <?php if (isset($allSlider[71]) && $allSlider[71] == '400') echo " selected=''" ?>>400</option>
              <option value="500" <?php if (isset($allSlider[71]) && $allSlider[71] == '500') echo " selected=''" ?>>500</option>
              <option value="600" <?php if (isset($allSlider[71]) && $allSlider[71] == '600') echo " selected=''" ?>>600</option>
              <option value="700" <?php if (isset($allSlider[71]) && $allSlider[71] == '700') echo " selected=''" ?>>700</option>
              <option value="800" <?php if (isset($allSlider[71]) && $allSlider[71] == '800') echo " selected=''" ?>>800</option>
              <option value="900" <?php if (isset($allSlider[71]) && $allSlider[71] == '900') echo " selected=''" ?>>900</option>
              <option value="normal" <?php if (isset($allSlider[71]) && $allSlider[71] == 'normal') echo " selected=''" ?>>Normal</option>
              <option value="bold" <?php if (isset($allSlider[71]) && $allSlider[71] == 'bold') echo " selected=''" ?>>Bold</option>
              <option value="lighter" <?php if (isset($allSlider[71]) && $allSlider[71] == 'lighter') echo " selected=''" ?>>Lighter</option>
              <option value="initial" <?php if (isset($allSlider[71]) && $allSlider[71] == 'initial') echo " selected=''" ?>>Initial</option>
            </select>
          </td>
        </tr>
        <tr height="45" class="category_field">
          <td><b>Font Family</b></td>
          <td>
            <input name="category_font_family" class="wpm-form-input" id="wpm_category_font_family" type="text"  value="<?php echo (isset($allSlider[72]) && $allSlider[72])?$allSlider[72]:"Amarnath" ?>">
          </td>
        </tr>
        <tr height="45" class="category_field">
          <td width="45%"><b>Margin Bottom</b></td>
          <td width="55%">
            <input type="text" class="wpm-form-input" name="category_margin_bottom" id="wpm_6310_category_margin_bottom"  value="<?php echo (isset($allSlider[73]) && $allSlider[73])?$allSlider[73]:"30" ?>">
          </td>
        </tr>
        <tr height="45" class="category_field">
          <td width="45%"><b>Menu Height</b></td>
          <td width="55%">
            <input type="text" class="wpm-form-input" name="category_menu_height" id="wpm_6310_category_menu_height"  value="<?php echo (isset($allSlider[74]) && $allSlider[74])?$allSlider[74]:"30" ?>">
          </td>
        </tr>
        <tr height="45" class="category_field">
          <td width="45%"><b>Margin Right</b></td>
          <td width="55%">
            <input type="text" class="wpm-form-input" name="category_margin_right" id="wpm_6310_category_margin_right"  value="<?php echo (isset($allSlider[75]) && $allSlider[75])?$allSlider[75]:"5" ?>">
          </td>
        </tr>
        <tr height="45" class="category_field">
          <td width="45%"><b>Padding </b></td>
          <td width="55%">
            <input type="text" class="wpm-form-input" name="category_padding_right_left" id="wpm_6310_category_padding_right_left" value="<?php echo (isset($allSlider[76]) && $allSlider[76])?$allSlider[76]:"20" ?>">
          </td>
        </tr>
        <tr height="45" class="category_field">
          <td width="45%"><b>Border Redius </b></td>
          <td width="55%">
            <input type="text" class="wpm-form-input" name="category_border_raidus" id="category_border_raidus" value="<?php echo (isset($allSlider[78]) && $allSlider[78])?$allSlider[78]:"3" ?>">
          </td>
        </tr>
      </table>
    </div>
  </div>
</div>

<style>
 <?php
  if(isset($allSlider[61]) && $allSlider[61]){
    if($allSlider[0]){
      echo "#wpm-6310-category-{$styleId}{display: none}";
    }
    else{
      echo "#wpm-6310-category-carousel-{$styleId}{display: none}";
    }
  }
  else{
    echo "#wpm-6310-category-carousel-{$styleId}, #wpm-6310-category-{$styleId}{display: none}";
  }
 ?>
  #wpm-6310-category-<?php echo $styleId ?>,  #wpm-6310-category-carousel-<?php echo $styleId ?>{
    width: 100%;
    text-align: <?php echo isset($allSlider[77])?$allSlider[77]:'left' ?>;
    position: relative;
    height: <?php echo isset($allSlider[74])?$allSlider[74]:'30' ?>px;
    line-height: <?php echo isset($allSlider[74])?$allSlider[74]:'30' ?>px;
    margin-bottom: <?php echo isset($allSlider[73])?$allSlider[73]:'30' ?>px;
    margin-left: 15px;
    margin-right: 15px;
}
#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list,
#wpm-6310-category-carousel-<?php echo $styleId ?> .wpm_6310_category_list {
    display: inline-block;
    font-size: <?php echo isset($allSlider[62])?$allSlider[62]:'14' ?>px;
    color:  <?php echo isset($allSlider[63])?$allSlider[63]:'rgb(255, 255, 255)' ?>;
    border: <?php echo isset($allSlider[65])?$allSlider[65]:'1' ?>px solid <?php echo isset($allSlider[66])?$allSlider[66]:'rgb(0, 0, 0)' ?>;
    background-color: <?php echo isset($allSlider[67])?$allSlider[67]:'rgba(0, 94, 78, 0.8)' ?>;
    font-weight: <?php echo isset($allSlider[71])?$allSlider[71]:'100' ?>;
    font-family: <?php echo (isset($allSlider[72]) && $allSlider[72])?str_replace("+", " ", $allSlider[72]):'Amarnath' ?>;
    padding: 0 <?php echo isset($allSlider[76])?$allSlider[76]:'20' ?>px;
    position: relative;
    margin-right:  <?php echo isset($allSlider[75])?$allSlider[75]:'5' ?>px;
    border-radius: <?php echo isset($allSlider[78])?$allSlider[78]:'3' ?>px;
    cursor: pointer;
    -webkit-transition: all 0.6s ease 0s;
    -moz-transition: all 0.6s ease 0s;
    -ms-transition: all 0.6s ease 0s;
    -o-transition: all 0.6s ease 0s;
    transition: all 0.6s ease 0s;
}
#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list_active,  
#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list:hover,
#wpm-6310-category-carousel-<?php echo $styleId ?> .wpm_6310_category_list_active,  
#wpm-6310-category-carousel-<?php echo $styleId ?> .wpm_6310_category_list:hover {
    background-color:  <?php echo isset($allSlider[68])?$allSlider[68]:'rgba(0, 94, 78, 0.8)' ?> !important;
    color:  <?php echo isset($allSlider[69])?$allSlider[69]:'rgb(255, 255, 255)' ?> !important;
    border-color:  <?php echo isset($allSlider[70])?$allSlider[70]:'rgba(255, 0, 0, 0.8)' ?> !important;
}
#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list:hover{
  color:  <?php echo isset($allSlider[64])?$allSlider[64]:'rgb(255, 255, 255)' ?>;
}
.wpm-6310-owl-carousel-container{
  width: calc(100% - 30px) !important;
  padding: 0 15px;
}
</style>

<script>
  jQuery(document).ready(function() {
    /* validation start */
    
    jQuery("#category_position").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?>,  #wpm-6310-category-carousel-<?php echo $styleId ?> { text-align:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#category_position").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?>,  #wpm-6310-category-carousel-<?php echo $styleId ?> { text-align:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_6310_category_font_size").on("change", function () {
            var value = jQuery(this).val() + "px";
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list, #wpm-6310-category-carousel-<?php echo $styleId ?> .wpm_6310_category_list  { font-size:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });

    jQuery("#wpm_category_font_color").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list, #wpm-6310-category-carousel-<?php echo $styleId ?> .wpm_6310_category_list  { color:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_category_font_hover_color").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list:hover  { color:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_6310_category_border_width, #wpm_6310_category_border_color").on("change", function () {
            var width = jQuery("#wpm_6310_category_border_width").val()+"px";
            var color = jQuery("#wpm_6310_category_border_color").val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list, #wpm-6310-category-carousel-<?php echo $styleId ?> .wpm_6310_category_list { border:" + width + " solid "+ color +";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_6310_category_background_color").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list, #wpm-6310-category-carousel-<?php echo $styleId ?> .wpm_6310_category_list  { background:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_6310_category_active_background_color").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list_active,  #wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list:hover,#wpm-6310-category-carousel-<?php echo $styleId ?> .wpm_6310_category_list_active,  #wpm-6310-category-carousel-<?php echo $styleId ?> .wpm_6310_category_list:hover { background-color:" + value + " !important;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });

    jQuery("#wpm_6310_category_active_font_color").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list_active,  #wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list:hover,#wpm-6310-category-carousel-<?php echo $styleId ?> .wpm_6310_category_list_active,  #wpm-6310-category-carousel-<?php echo $styleId ?> .wpm_6310_category_list:hover { color:" + value + " !important ;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_6310_category_active_border_color").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list_active,  #wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list:hover,#wpm-6310-category-carousel-<?php echo $styleId ?> .wpm_6310_category_list_active,  #wpm-6310-category-carousel-<?php echo $styleId ?> .wpm_6310_category_list:hover { border-color:" + value + " !important;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_6310_category_font_weight").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list, #wpm-6310-category-carousel-<?php echo $styleId ?> .wpm_6310_category_list  { font-weight:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_category_font_family").on("change", function () {
      var value = jQuery(this).val().replace(/\+/g, ' ');
            value = value.split(':');
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list, #wpm-6310-category-carousel-<?php echo $styleId ?> .wpm_6310_category_list  { font-family:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_6310_category_margin_bottom").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?>,  #wpm-6310-category-carousel-<?php echo $styleId ?>  { margin-bottom:" + value + "px;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
     jQuery("#wpm_6310_category_menu_height").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?>,  #wpm-6310-category-carousel-<?php echo $styleId ?> { height:" + value + "px; line-height:" + value + "px;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_6310_category_margin_right").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list, #wpm-6310-category-carousel-<?php echo $styleId ?> .wpm_6310_category_list  { margin-right:" + value + "px;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_6310_category_padding_right_left").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list, #wpm-6310-category-carousel-<?php echo $styleId ?> .wpm_6310_category_list  { padding: 0 " + value + "px;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#category_border_raidus").on("change", function () {
            var value = jQuery(this).val();
            jQuery("<style type='text/css'>#wpm-6310-category-<?php echo $styleId ?> .wpm_6310_category_list, #wpm-6310-category-carousel-<?php echo $styleId ?> .wpm_6310_category_list  { border-radius:" + value + "px;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    /* reset all member if click slider active or inactive */
    jQuery(".activate-slider").on('click', function(){
      /* reset non slider */
      jQuery(`.wpm-6310-category-filter`).show();

      /* Reset Slider start */
      let items = jQuery(".wpm-carousel-item-clone-<?php echo $styleId ?> .wpm-6310-item");
      for(let i = 0; i<items.length; i++){
        jQuery("#wpm-6310-slider-<?php echo $styleId ?>").trigger('remove.owl.carousel', i).trigger('refresh.owl.carousel');
      }
    //Append members in Carousel
      jQuery(items).each(function(){
          let content = this.outerHTML;
          jQuery("#wpm-6310-slider-<?php echo $styleId ?>").trigger('add.owl.carousel', [jQuery(this.outerHTML), 0])
          .trigger('refresh.owl.carousel')
          .trigger('to.owl.carousel', [0, 500]);
      });  
      /* Reset slider End */
      
      /* Reset category menu */
      jQuery("#wpm-6310-category-<?php echo $styleId ?>, #wpm-6310-category-carousel-<?php echo $styleId ?>").find(".wpm_6310_category_list:first-child").addClass('wpm_6310_category_list_active');        
    });
   

    //Active or inactive menu
    jQuery("body").on("click", ".activate-category", function() {
      var category = parseInt(jQuery(this).val());
      var slider = parseInt(jQuery("#slider_activation").val());

      jQuery(".activate-category").removeClass("active");
      jQuery(this).addClass("active");
      jQuery("#category_activation").val(category);
      if (category == 1) {
        jQuery("#wpm-6310-category-<?php echo $styleId ?>, #wpm-6310-category-carousel-<?php echo $styleId ?>, .wpm_6310_category_items, .category_field").show();
        if(slider){
          jQuery("#wpm-6310-category-<?php echo $styleId ?>").hide();
        }
        else{
          jQuery("#wpm-6310-category-carousel-<?php echo $styleId ?>").hide();
        }
        //reset menu
        jQuery(".wpm_6310_category_list").removeClass('wpm_6310_category_list_active');
        jQuery("#wpm-6310-category-<?php echo $styleId ?>, #wpm-6310-category-carousel-<?php echo $styleId ?>").find(".wpm_6310_category_list:first-child").addClass('wpm_6310_category_list_active');
      } else {
        jQuery("#wpm-6310-category-<?php echo $styleId ?>, #wpm-6310-category-carousel-<?php echo $styleId ?>, .wpm_6310_category_items, .category_field").hide();
        //reset members
        if(slider == 0){
          jQuery(`.wpm-6310-category-filter`).show();
        }     
        else{
          let items = jQuery(".wpm-carousel-item-clone-<?php echo $styleId ?> .wpm-6310-item");
          for(let i = 0; i<items.length; i++){
            jQuery("#wpm-6310-slider-<?php echo $styleId ?>").trigger('remove.owl.carousel', i).trigger('refresh.owl.carousel');
          }
          //Append members in Carousel
          jQuery(items).each(function(){
              let content = this.outerHTML;
              jQuery("#wpm-6310-slider-<?php echo $styleId ?>").trigger('add.owl.carousel', [jQuery(this.outerHTML), 0])
              .trigger('refresh.owl.carousel')
              .trigger('to.owl.carousel', [0, 500]);
          });
        }   
      }
    });


    jQuery(".wpm_6310_category_list_<?php echo $styleId ?>").on('click', function(){
      let attr = jQuery(this).attr('wpm-data-filter');
      let cls = jQuery(this).parent().hasClass('wpm-6310-carousel');
      jQuery(".wpm_6310_category_list_<?php echo $styleId ?>").removeClass('wpm_6310_category_list_active');
      jQuery(this).addClass('wpm_6310_category_list_active');

      /* Carousel Control */
      if(cls){        
        let items = jQuery(".wpm-carousel-item-clone-<?php echo $styleId ?> .wpm-6310-item");
        for(let i = 0; i<items.length; i++){
          jQuery("#wpm-6310-slider-<?php echo $styleId ?>").trigger('remove.owl.carousel', i).trigger('refresh.owl.carousel');
        }
        
        //Append members in Carousel
        jQuery(items).each(function(){
          if(jQuery(this).hasClass(attr)){
              console.log(attr);
              let content = this.outerHTML;
              jQuery("#wpm-6310-slider-<?php echo $styleId ?>").trigger('add.owl.carousel', [jQuery(this.outerHTML), 0])
              .trigger('refresh.owl.carousel')
              .trigger('to.owl.carousel', [0, 500]);
          }
        });
      }
      else{        
        jQuery(`.wpm-6310-category-filter:not(.${attr})`).hide(300);
        jQuery(`.${attr}`).show(300);
      }      
    });
  });
</script>