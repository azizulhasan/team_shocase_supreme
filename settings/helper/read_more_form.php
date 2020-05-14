<div class="wpm_6310_readmore_divider"></div>
<div class="wpm_6310_readmore_settings">Read More Settings</div>
<div class="row wpm_6310_padding_15_px">
  <div class="wpm-col-6">
    <table width="100%">
      <tr height="45">
        <td width="45%">
          <b>Activate Readmore</b>
        </td>
        <td>
          <input type="hidden" name="readmore_activation" id="readmore_activation" value="<?php echo isset($allSlider[18]) ? $allSlider[18] : 0 ?>" />
          <button type="button" value="1" class="wpm-btn-multi activate-readmore <?php if (isset($allSlider[18]) && $allSlider[18] == 1) echo " active" ?>">Yes</button>
          <button type="button" value="0" class="wpm-btn-multi activate-readmore <?php if (!isset($allSlider[18]) || $allSlider[18] == 0) echo " active" ?>">No</button>
        </td>
      </tr>
      <tr height="45" class="readmore_act_field">
        <td><b>Read More Text</b></td>
        <td>
          <input type="text" name="readmore_text" id="readmore_text" class="wpm-form-input" value="<?php echo isset($allSlider[19]) ? $allSlider[19] : 'Read More' ?>" />
        </td>
      </tr>
      <tr height="45" class="readmore_act_field">
        <td width='55%'><b>Read More Height</b></td>
        <td>
          <input type="number" min="0" name="readmore_height" value="<?php echo isset($allSlider[20]) ? $allSlider[20] : 35 ?>" class="wpm-form-input" step="1" id="readmore_height" />
        </td>
      </tr>
      <tr height="45" class="readmore_act_field">
        <td width='55%'><b>Read More Width</b><?php ?></td>
        <td>
          <input type="number" name="readmore_width" class="wpm-form-input" id="readmore_width" value="<?php echo isset($allSlider[21]) ? $allSlider[21] : 180 ?>">
        </td>
      </tr>
      <tr height="45" class="readmore_act_field">
        <td width='55%'><b>Read More Font Size</b></td>
        <td>
          <input type="number" min="0" name="readmore_font_size" value="<?php echo isset($allSlider[22]) ? $allSlider[22] : 20 ?>" class="wpm-form-input" step="1" id="readmore_font_size" />
        </td>
      </tr>
      <tr height="45" class="readmore_act_field">
        <td><b>Read More Font Color</b></td>
        <td>
          <input type="text" name="readmore_font_color" id="readmore_font_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" data-opacity=".8" value="<?php echo isset($allSlider[23]) ? $allSlider[23] : 'rgba(0, 0, 0, 1)' ?>">
        </td>
      </tr>
      <tr height="45" class="readmore_act_field">
        <td><b>Read More Font Hover Color</b></td>
        <td>
          <input type="text" name="readmore_font_hover_color" id="readmore_font_hover_color" data-opacity=".8" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo isset($allSlider[24]) ? $allSlider[24] : 'rgba(255, 255, 255, 1)' ?>">
        </td>
      </tr>
      <tr height="45" class="readmore_act_field">
        <td width='55%'><b>Read More Border Width</b><?php  ?></td>
        <td>
          <select name="readmore_border_width" class="wpm-form-input" id="readmore_border_width">
            <option value="none" <?php if ($allSlider[25] == 'none') echo " selected=''" ?>>None
            </option>
            <option value="1px" <?php if ($allSlider[25] == '1px') echo " selected=''" ?>>1px
            </option>
            <option value="2px" <?php if ($allSlider[25] == '2px') echo " selected=''" ?>>2px
            </option>
            <option value="3px" <?php if ($allSlider[25] == '3px') echo " selected=''" ?>>3px
            </option>
            <option value="4px" <?php if ($allSlider[25] == '4px') echo " selected=''" ?>>4px
            </option>
            <option value="5px" <?php if ($allSlider[25] == '5px') echo " selected=''" ?>>5px
            </option>
          </select>
        </td>
      </tr>
      <tr height="45" class="readmore_act_field">
        <td><b>Read More Border Color</b></td>
        <td>
          <input type="text" name="readmore_border_color" id="readmore_border_color" data-opacity=".8" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo isset($allSlider[26]) ? $allSlider[26] : 'rgba(245, 245, 245, 1)' ?>">
        </td>
      </tr>
    </table>
  </div>
  <div class="twss-col-6">
    <table class="table table-responsive twss_6310_admin_table">
    <tr height="45" class="readmore_act_field">
        <td><b>Read More Border Radius</b></td>
        <td>
          <input type="number" name="readmore_border_radius" id="readmore_border_radius" class="wpm-form-input " value="<?php echo isset($allSlider[27]) ? $allSlider[27] : 2 ?>">
        </td>
      </tr>
      <tr height="45" class="readmore_act_field">
        <td><b>Read More Backgrond Color</b></td>
        <td>
          <input type="text" name="readmore_backbround_color" id="readmore_backbround_color" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" data-opacity=".8" value="<?php echo isset($allSlider[28]) ? $allSlider[28] : 'rgba(62, 224, 208, 0.85)' ?>">
        </td>
      </tr>
      <tr height="45" class="readmore_act_field">
        <td><b>Backgrond Hover Color</b></td>
        <td>
          <input type="text" name="readmore_backbround_hover_color" id="readmore_backbround_hover_color" data-opacity=".8" class="wpm-form-input wpm_6310_color_picker" data-format="rgb" value="<?php echo isset($allSlider[29]) ? $allSlider[29] : 'rgba(89, 230, 185, 1)' ?>">
        </td>
      </tr>
      <tr height="45" class="readmore_act_field">
        <td><b>Read More Font Weight</b><?php ?></td>
        <td>
          <select name="readmore_font_weight" class="wpm-form-input" id="readmore_font_weight">
            <option value="100" <?php if ($allSlider[30] == '100') echo " selected=''" ?>>100
            </option>
            <option value="200" <?php if ($allSlider[30] == '200') echo " selected=''" ?>>200
            </option>
            <option value="300" <?php if ($allSlider[30] == '300') echo " selected=''" ?>>300
            </option>
            <option value="400" <?php if ($allSlider[30] == '400') echo " selected=''" ?>>400
            </option>
            <option value="500" <?php if ($allSlider[30] == '500') echo " selected=''" ?>>500
            </option>
            <option value="600" <?php if ($allSlider[30] == '600') echo " selected=''" ?>>600
            </option>
            <option value="700" <?php if ($allSlider[30] == '700') echo " selected=''" ?>>700
            </option>
            <option value="800" <?php if ($allSlider[30] == '800') echo " selected=''" ?>>800
            </option>
            <option value="900" <?php if ($allSlider[30] == '900') echo " selected=''" ?>>900
            </option>
            <option value="normal" <?php if ($allSlider[30] == 'normal') echo " selected=''" ?>>
              Normal</option>
            <option value="bold" <?php if ($allSlider[30] == 'bold') echo " selected=''" ?>>Bold
            </option>
            <option value="lighter" <?php if ($allSlider[30] == 'lighter') echo " selected=''" ?>>
              Lighter</option>
            <option value="initial" <?php if ($allSlider[30] == 'initial') echo " selected=''" ?>>
              Initial</option>
          </select>
        </td>
      </tr>
      <tr height="45" class="readmore_act_field">
        <td><b>Read More Text Transform</b><?php ?></td>
        <td>
          <select name="readmore_text_transform" class="wpm-form-input" id="readmore_text_transform">
            <option value="capitalize" <?php if ($allSlider[31] == 'capitalize') echo " selected=''" ?>>Capitalize
            </option>
            <option value="uppercase" <?php if ($allSlider[31] == 'uppercase') echo " selected=''" ?>>Uppercase</option>
            <option value="lowercase" <?php if ($allSlider[31] == 'lowercase') echo " selected=''" ?>>Lowercase</option>
            <option value="none" <?php if ($allSlider[31] == 'none') echo " selected=''" ?>>As
              Input</option>
          </select>
        </td>
      </tr>
      <tr height="45" class="readmore_act_field">
        <td><b>Read More Text Align</b><?php  ?></td>
        <td>
          <select name="readmore_text_align" class="wpm-form-input" id="readmore_text_align">
            <option value="center" <?php if ($allSlider[32] == 'center') echo " selected=''" ?>>
              Center</option>
            <option value="left" <?php if ($allSlider[32] == 'left') echo " selected=''" ?>>Left
            </option>
            <option value="right" <?php if ($allSlider[32] == 'right') echo " selected=''" ?>>Right
            </option>
          </select>
        </td>
      </tr>
      <tr height="45" class="readmore_act_field">
        <td><b>Read More Font Family</b><?php ?></td>
        <td>
          <input name="readmore_font_family" class="readmore_font_family" id="wpm_readmore_font_family" type="text" value="<?php echo isset($allSlider[33]) ? $allSlider[33] : 'Allerta' ?>" />
        </td>
      </tr>
      <tr height="45" class="readmore_act_field">
        <td><b>Read More Margin Top</b></td>
        <td>
          <input name="readmore_margin_top" id="readmore_margin_top" type="number" value="<?php echo isset($allSlider[34]) ? $allSlider[34] : '20' ?>" class="wpm-form-input" />
        </td>
      </tr>
      <tr height="45" class="readmore_act_field">
        <td><b>Read More Margin Bottom</b></td>
        <td>
          <input name="readmore_margin_bottom" id="readmore_margin_bottom" type="number" value="<?php echo isset($allSlider[35]) ? $allSlider[35] : '20' ?>" class="wpm-form-input" />
        </td>
      </tr>
    </table>
  </div>
</div>
<style>
  <?php
  $template_id = substr($styledata['style_name'], 9, 2);
  if (!isset($allSlider[18]) || !$allSlider[18]) {
    echo ".readmore_act_field{display: none}";
  }
  ?>
  .wpm_6310_team_style_<?php echo $template_id; ?>_readmore {
    width: 100%;
    float: left;
    padding: 0;
    position:relative;
    display: <?php echo (isset($allSlider[18]) && $allSlider[18]) ? 'block' : 'none' ?>;
    cursor: pointer;
    z-index:99;
  }
  .wpm_6310_team_style_<?php echo $template_id; ?>_readmore_text {
    color: <?php echo $allSlider[23] ?>;
    font-size: <?php echo $allSlider[22] ?>px;
    width: <?php echo $allSlider[21] ?>px;
    height:<?php echo $allSlider[20] + ($allSlider[25] * 2)?>px;
    font-family: <?php echo str_replace("+", " ", $allSlider[33]) ?>;
    background: <?php echo $allSlider[28] ?>;
    font-weight: <?php echo $allSlider[30] ?>;
    text-transform: <?php echo $allSlider[31] ?>;
    text-align: center;
    margin-top: <?php echo $allSlider[34] ?>px;
    margin-bottom: <?php echo $allSlider[35] ?>px;
    border: <?php echo $allSlider[25] ?> solid <?php echo $allSlider[26] ?>;
    line-height: <?php echo $allSlider[20] ?>px;
    border-radius: <?php echo $allSlider[27] ?>px;
    <?php if ($allSlider[32] == 'center') {
      echo "margin-right: auto;";
      echo "margin-left: auto;";
    } elseif ($allSlider[32] == 'right') {
      echo "margin-left: auto;";
    } elseif ($allSlider[32] == 'left') {
      echo "margin-right: auto;";
    }
    ?>
  }
  .wpm_6310_team_style_<?php echo $template_id; ?>_readmore:hover .wpm_6310_team_style_<?php echo $template_id; ?>_readmore_text {
    color: <?php echo $allSlider[24] ?>;
    background: <?php echo $allSlider[29] ?>;
  }
  .wpm_6310_modal_social a {
    width: <?php echo $allStyle[26] ?>px;
    height: <?php echo $allStyle[27] ?>px;
    line-height: <?php echo $allStyle[27] ?>px;
    display: inline-block;
    text-align: center;
    margin: 0 4px;
    font-size: <?php echo ceil(($allStyle[26] + $allStyle[27]) / 4) ?>px;
    border-radius: 3px;
  }
</style>
<script>
  jQuery(document).ready(function() {
    jQuery('body').on("click", ".activate-readmore", function() {
      let val = parseInt(jQuery(this).val());
      jQuery(".activate-readmore").removeClass("active");
      jQuery(this).addClass("active");
      jQuery("#readmore_activation").val(val);
      if (val) {
        jQuery(".readmore_act_field").show();
        jQuery(".wpm_6310_team_style_<?php echo $template_id; ?>_readmore").css({
          'display': 'block'
        });
        jQuery(".wpm_6310_team_member_info").addClass('wpm_6310_team_member_info_readmore');
        jQuery(".wpm_6310_team_member_info").removeClass('wpm_6310_team_member_info');          
        jQuery("<style type='text/css'>.wpm_6310_team_style_07 figcaption {height:<?php echo ($allStyle[18] + $allStyle[24] + $allStyle[26] + 95) ?>px; bottom: -<?php echo ($allStyle[18] + 130) ?>px;} </style>").appendTo(".wpm-preview-box");
      } else {
        jQuery(".readmore_act_field").hide();
        jQuery(".wpm_6310_team_style_<?php echo $template_id; ?>_readmore").css({
          'display': 'none'
        });
        jQuery(".wpm_6310_team_member_info_readmore").addClass('wpm_6310_team_member_info');
        jQuery(".wpm_6310_team_member_info_readmore").removeClass('wpm_6310_team_member_info_readmore');
        jQuery("<style type='text/css'>.wpm_6310_team_style_07 figcaption {height:<?php echo ($allStyle[18] + $allStyle[24] + $allStyle[26] + 50) ?>px; bottom: -<?php echo ($allStyle[18] + 85) ?>px;} </style>").appendTo(".wpm-preview-box");
      }    
    });
    jQuery("#readmore_text").on("input", function() {
      var value = jQuery(this).val();
      jQuery(".wpm_6310_team_style_<?php echo $template_id; ?>_readmore_text").text(value);
    });
    jQuery("#readmore_height").on("change", function() {
      var value = jQuery(this).val();
      jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $template_id; ?> .wpm_6310_team_style_<?php echo $template_id; ?>_readmore_text { height:" + value + "px;line-height:" + value + "px;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#readmore_width").on("change", function() {
      var value = jQuery(this).val();
      jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $template_id; ?> .wpm_6310_team_style_<?php echo $template_id; ?>_readmore_text { width:" + value + "px;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#readmore_font_size").on("change", function() {
      var value = jQuery(this).val();
      jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $template_id; ?> .wpm_6310_team_style_<?php echo $template_id; ?>_readmore_text { font-size:" + value + "px;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#readmore_font_color").on("change", function() {
      var value = jQuery(this).val();
      jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $template_id; ?> .wpm_6310_team_style_<?php echo $template_id; ?>_readmore_text { color:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#readmore_font_hover_color").on("change", function() {
      var value = jQuery(this).val();
      jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $template_id; ?>_readmore:hover .wpm_6310_team_style_<?php echo $template_id; ?>_readmore_text { color:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#readmore_border_width, #readmore_border_color").on("change", function() {
      var border_width = jQuery("#readmore_border_width").val();
      var border_color = jQuery("#readmore_border_color").val();
      jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $template_id; ?> .wpm_6310_team_style_<?php echo $template_id; ?>_readmore_text { border:" + border_width + " solid " + border_color + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#readmore_border_radius").on("change", function() {
      var value = jQuery(this).val();
      jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $template_id; ?> .wpm_6310_team_style_<?php echo $template_id; ?>_readmore_text { border-radius:" + value + "px;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#readmore_backbround_color").on("change", function() {
      var value = jQuery(this).val();
      jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $template_id; ?> .wpm_6310_team_style_<?php echo $template_id; ?>_readmore_text { background:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#readmore_backbround_hover_color").on("change", function() {
      var value = jQuery(this).val();
      jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $template_id; ?>_readmore:hover .wpm_6310_team_style_<?php echo $template_id; ?>_readmore_text { background:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#readmore_font_weight").on("change", function() {
      var value = jQuery(this).val();
      jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $template_id; ?>_readmore:hover .wpm_6310_team_style_<?php echo $template_id; ?>_readmore_text { font-weight:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#readmore_text_transform").on("change", function() {
      var value = jQuery(this).val();
      jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $template_id; ?> .wpm_6310_team_style_<?php echo $template_id; ?>_readmore_text { text-transform:" + value + ";} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#wpm_readmore_font_family").on("change", function() {
      var value = jQuery(this).val().replace(/\+/g, ' ');
      value = value.split(':');
      jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $template_id; ?> .wpm_6310_team_style_<?php echo $template_id; ?>_readmore_text { font-family:" + value + " !important;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#readmore_margin_top").on("change", function() {
      var value = jQuery(this).val();
      jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $template_id; ?> .wpm_6310_team_style_<?php echo $template_id; ?>_readmore_text { margin-top:" + value + "px;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#readmore_margin_bottom").on("change", function() {
      var value = jQuery(this).val();
      jQuery("<style type='text/css'>.wpm_6310_team_style_<?php echo $template_id; ?> .wpm_6310_team_style_<?php echo $template_id; ?>_readmore_text { margin-bottom:" + value + "px;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
    });
    jQuery("#readmore_text_align").on("change", function() {
      var value = jQuery(this).val();
      if (value == 'left') {
        jQuery("<style type='text/css'> .wpm_6310_team_style_<?php echo $template_id; ?>_readmore_text {margin-left:unset; margin-right: auto;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
      } else if (value == 'center') {
        jQuery("<style type='text/css'> .wpm_6310_team_style_<?php echo $template_id; ?>_readmore_text{margin-left:  auto; margin-right:  auto;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
      } else if (value == 'right') {
        jQuery("<style type='text/css'> .wpm_6310_team_style_<?php echo $template_id; ?>_readmore_text{margin-right:unset;margin-left: auto;} </style>").appendTo(".wpm_6310_tabs_panel_preview");
      }
    });
  });
</script>