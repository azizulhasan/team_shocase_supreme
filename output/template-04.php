<?php
$styleTemplate = 4;
if ($allSlider[0]) {
    wpm_6310_category_menu($categoryData, $ids, 'wpm-6310-carousel');
   echo "<div class='wpm-6310-carousel'>
            <div id='wpm-6310-slider-{$ids}' class='wpm-6310-owl-carousel'>";

   if ($members) {
      foreach ($members as $value) {
      $member_readmore_info = (isset($allSlider[18]) && $allSlider[18])?'wpm_6310_team_member_info_readmore':' wpm_6310_team_member_info';
         if ($value['profile_details_type'] == 1) {
            $link_type = " class='wpm_6310_team_style_{$ids} {$member_readmore_info}' link-id='{$value['id']}' link-url='{$value['profile_url']}' target='{$value['open_new_tab']}' team-id='0'";
         } else if ($value['profile_details_type'] == 2) {
            $link_type = " class='wpm_6310_team_style_{$ids} {$member_readmore_info}' link-id='0' team-id='{$value['id']}'";
         } else {
            $link_type = " class='wpm_6310_team_style_{$ids}' link-id='0' team-id='0'";
         }
?>
         <div class="wpm-6310-item-<?php echo $ids; ?> wpm-6310-item wpm-6310-category-filter <?php echo $value['category']; ?>">
            <div <?php echo $link_type ?>>
               <img src="<?php echo $value['image'] ?>" alt="<?php echo wpm_6310_replace($value['name']) ?>">
               <figcaption>
                  <div class="wpm_6310_team_style_<?php echo $ids ?>_caption">
                     <div class="wpm_6310_team_style_<?php echo $ids ?>_designation"><?php echo wpm_6310_replace($value['designation']) ?></div>
                     <div class="wpm_6310_team_style_<?php echo $ids ?>_title"><?php echo wpm_6310_replace($value['name']) ?></div>
                     <?php
                     $icons = $wpdb->get_results("SELECT * FROM $icon_table WHERE id in ({$value['iconids']})", ARRAY_A);
                     if ($icons) {
                        $iconUrl = explode("||||", $value['iconurl']);
                        $iconIds = explode(",", $value['iconids']);
                        $iconStyles = "";
                        $c = 0;
                        foreach ($icons as $li) {
                           $index = array_search($li['id'], $iconIds);
                           if ($c == 0) {
                              echo "<ul class='wpm_6310_team_style_{$ids}_social'>";
                           }
                           $c++;
                           echo "<li><a " . wpm_6310_external_link($iconUrl[$index]) . "  class='open_in_new_tab_class wpm-6310-default-css' title='{$li['name']}'  id='wpm-social-link-{$ids}-{$value['id']}-{$li['id']}'><i class='" . $li['class_name'] . "'></i></a></li>";
                           $iconStyles .= "<style>#wpm-social-link-{$ids}-{$value['id']}-{$li['id']}{border: {$allStyle[28]}px solid {$li['bgcolor']}; background-color: {$li['bgcolor']}; color:{$li['color']};} #wpm-social-link-{$ids}-{$value['id']}-{$li['id']}:hover{color: {$li['bgcolor']}; background-color:{$li['color']};}#wpm-social-link-{$ids}-{$value['id']}-{$li['id']} .fab{color:{$li['color']};} #wpm-social-link-{$ids}-{$value['id']}-{$li['id']}:hover .fab{color: {$li['bgcolor']};}</style>";
                           if ($c == 4) {
                              break;
                           }
                        }

                        if ($c > 0) {
                           echo "</ul>";
                           echo $iconStyles;
                        }
                     }
                     wpm_6310_readmore_activation($ids, $value['profile_details_type'], $allSlider[19]);
                     ?>
                  </div>
               </figcaption>
               <div class="wpm_6310_team_style_<?php echo $ids ?>_overlay"></div>
               <div class="wpm_6310_team_style_<?php echo $ids ?>_icon">
                  <?php
                  if ($value['profile_details_type'] > 0) {
                     echo '<i class="fas fa-plus-circle"></i>';
                  }
                  ?>
               </div>
            </div>
         </div>
      <?php
      }
   }
   echo "</div>
        </div>";
        ?>
         <div class="wpm-carousel-item-clone wpm-carousel-item-clone-<?php echo $ids ?>">
        <?php 
          if ($members) {
      foreach ($members as $value) {
      $member_readmore_info = (isset($allSlider[18]) && $allSlider[18])?'wpm_6310_team_member_info_readmore':' wpm_6310_team_member_info';
         if ($value['profile_details_type'] == 1) {
            $link_type = " class='wpm_6310_team_style_{$ids} {$member_readmore_info}' link-id='{$value['id']}' link-url='{$value['profile_url']}' target='{$value['open_new_tab']}' team-id='0'";
         } else if ($value['profile_details_type'] == 2) {
            $link_type = " class='wpm_6310_team_style_{$ids} {$member_readmore_info}' link-id='0' team-id='{$value['id']}'";
         } else {
            $link_type = " class='wpm_6310_team_style_{$ids}' link-id='0' team-id='0'";
         }
?>
         <div class="wpm-6310-item-<?php echo $ids; ?> wpm-6310-item wpm-6310-category-filter <?php echo $value['category']; ?>">
            <div <?php echo $link_type ?>>
               <img src="<?php echo $value['image'] ?>" alt="<?php echo wpm_6310_replace($value['name']) ?>">
               <figcaption>
                  <div class="wpm_6310_team_style_<?php echo $ids ?>_caption">
                     <div class="wpm_6310_team_style_<?php echo $ids ?>_designation"><?php echo wpm_6310_replace($value['designation']) ?></div>
                     <div class="wpm_6310_team_style_<?php echo $ids ?>_title"><?php echo wpm_6310_replace($value['name']) ?></div>
                     <?php
                     $icons = $wpdb->get_results("SELECT * FROM $icon_table WHERE id in ({$value['iconids']})", ARRAY_A);
                     if ($icons) {
                        $iconUrl = explode("||||", $value['iconurl']);
                        $iconIds = explode(",", $value['iconids']);
                        $iconStyles = "";
                        $c = 0;
                        foreach ($icons as $li) {
                           $index = array_search($li['id'], $iconIds);
                           if ($c == 0) {
                              echo "<ul class='wpm_6310_team_style_{$ids}_social'>";
                           }
                           $c++;
                           echo "<li><a " . wpm_6310_external_link($iconUrl[$index]) . "  class='open_in_new_tab_class wpm-6310-default-css' title='{$li['name']}'  id='wpm-social-link-{$ids}-{$value['id']}-{$li['id']}'><i class='" . $li['class_name'] . "'></i></a></li>";
                           $iconStyles .= "<style>#wpm-social-link-{$ids}-{$value['id']}-{$li['id']}{border: {$allStyle[28]}px solid {$li['bgcolor']}; background-color: {$li['bgcolor']}; color:{$li['color']};} #wpm-social-link-{$ids}-{$value['id']}-{$li['id']}:hover{color: {$li['bgcolor']}; background-color:{$li['color']};}#wpm-social-link-{$ids}-{$value['id']}-{$li['id']} .fab{color:{$li['color']};} #wpm-social-link-{$ids}-{$value['id']}-{$li['id']}:hover .fab{color: {$li['bgcolor']};}</style>";
                           if ($c == 4) {
                              break;
                           }
                        }

                        if ($c > 0) {
                           echo "</ul>";
                           echo $iconStyles;
                        }
                     }
                     wpm_6310_readmore_activation($ids, $value['profile_details_type'], $allSlider[19]);
                     ?>
                  </div>
               </figcaption>
               <div class="wpm_6310_team_style_<?php echo $ids ?>_overlay"></div>
               <div class="wpm_6310_team_style_<?php echo $ids ?>_icon">
                  <?php
                  if ($value['profile_details_type'] > 0) {
                     echo '<i class="fas fa-plus-circle"></i>';
                  }
                  ?>
               </div>
            </div>
         </div>
      <?php
      }
      }
    ?>   
   </div>
 <?php 
} else {
   $col = 0;
    wpm_6310_category_menu($categoryData, $ids);
   if ($members) {
      foreach ($members as $value) {
      $member_readmore_info = (isset($allSlider[18]) && $allSlider[18])?'wpm_6310_team_member_info_readmore':' wpm_6310_team_member_info';
         if ($value['profile_details_type'] == 1) {
            $link_type = " class='wpm_6310_team_style_{$ids} {$member_readmore_info}' link-id='{$value['id']}' link-url='{$value['profile_url']}' target='{$value['open_new_tab']}' team-id='0'";
         } else if ($value['profile_details_type'] == 2) {
            $link_type = " class='wpm_6310_team_style_{$ids} {$member_readmore_info}' link-id='0' team-id='{$value['id']}'";
         } else {
            $link_type = " class='wpm_6310_team_style_{$ids}' link-id='0' team-id='0'";
         }
        
      ?>
         <div class="wpm-6310-item-<?php echo $ids; ?> wpm-6310-item wpm-6310-category-filter <?php echo $value['category']; ?>">
            <div<?php echo $link_type ?>>
               <img src="<?php echo $value['image'] ?>" alt="<?php echo wpm_6310_replace($value['name']) ?>">
               <figcaption>
                  <div class="wpm_6310_team_style_<?php echo $ids ?>_caption">
                     <div class="wpm_6310_team_style_<?php echo $ids ?>_designation"><?php echo wpm_6310_replace($value['designation']) ?></div>
                     <div class="wpm_6310_team_style_<?php echo $ids ?>_title"><?php echo wpm_6310_replace($value['name']) ?></div>
                     <?php
                     $icons = $wpdb->get_results("SELECT * FROM $icon_table WHERE id in ({$value['iconids']})", ARRAY_A);
                     if ($icons) {
                        $iconUrl = explode("||||", $value['iconurl']);
                        $iconIds = explode(",", $value['iconids']);
                        $iconStyles = "";
                        $c = 0;
                        foreach ($icons as $li) {
                           $index = array_search($li['id'], $iconIds);
                           if ($c == 0) {
                              echo "<ul class='wpm_6310_team_style_{$ids}_social'>";
                           }
                           $c++;
                           echo "<li><a " . wpm_6310_external_link($iconUrl[$index]) . "  class='open_in_new_tab_class wpm-6310-default-css' title='{$li['name']}'  id='wpm-social-link-{$ids}-{$value['id']}-{$li['id']}'><i class='" . $li['class_name'] . "'></i></a></li>";
                           $iconStyles .= "<style>#wpm-social-link-{$ids}-{$value['id']}-{$li['id']}{border: {$allStyle[28]}px solid {$li['bgcolor']}; background-color: {$li['bgcolor']}; color:{$li['color']};} #wpm-social-link-{$ids}-{$value['id']}-{$li['id']}:hover{color: {$li['bgcolor']}; background-color:{$li['color']};}#wpm-social-link-{$ids}-{$value['id']}-{$li['id']} .fab{color:{$li['color']};} #wpm-social-link-{$ids}-{$value['id']}-{$li['id']}:hover .fab{color: {$li['bgcolor']};}</style>";
                           if ($c == 4) {
                              break;
                           }
                        }

                        if ($c > 0) {
                           echo "</ul>";
                           echo $iconStyles;
                        }
                     }
                     wpm_6310_readmore_activation($ids, $value['profile_details_type'], $allSlider[19]);
                     ?>
                  </div>
               </figcaption>
               <div class="wpm_6310_team_style_<?php echo $ids ?>_overlay"></div>
               <div class="wpm_6310_team_style_<?php echo $ids ?>_icon">
                  <?php
                  if ($value['profile_details_type'] > 0) {
                     echo '<i class="fas fa-plus-circle"></i>';
                  }
                  ?>
               </div>
         </div>
         </div>
<?php
         
      }
      
   }
}
?>

<style type="text/css">
   .wpm_6310_team_style_<?php echo $ids ?> {
      text-align: center;
      overflow: hidden;
      position: relative;
      z-index: 1;
      letter-spacing: .04em;
      -webkit-border-radius: <?php echo $allStyle[2] ?>%;
      -o-border-radius: <?php echo $allStyle[2] ?>%;
      -moz-border-radius: <?php echo $allStyle[2] ?>%;
      -ms-border-radius: <?php echo $allStyle[2] ?>%;
      border-radius: <?php echo $allStyle[2] ?>%;
      border-style: solid;
      border-width: <?php echo $allStyle[3] ?>px;
      border-color: <?php echo $allStyle[4] ?>;
      box-shadow: 0 0 <?php echo ($allStyle[9] * 2) ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
      width: calc(100% - <?php echo ($allStyle[3] * 2) ?>px);
      float: left;
   }

   .wpm_6310_team_style_<?php echo $ids ?>img {
      width: 100%;
      height: auto;
      padding: 0 !important;
      margin: 0 !important;
      float: left;
      border-radius: 0 !important;
   }

   .wpm_6310_team_style_<?php echo $ids ?>_caption {
      padding: 15px 0 10px;
      text-align: center;
      float: left;
      width: 100%;
      position: absolute;
      height: 100%;
   }

   .wpm_6310_team_style_<?php echo $ids ?>_designation {
      text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
      font-size: <?php echo $allStyle[19] ?>px;
      color: <?php echo $allStyle[20] ?>;
      font-weight: <?php echo $allStyle[21] ?>;
      text-transform: <?php echo $allStyle[22] ?>;
      font-family: <?php echo str_replace("+", " ", $allStyle[23]); ?>;
      line-height: <?php echo $allStyle[24] ?>px;
      bottom: 65px;
      padding: 3px 20px 3px 15px;
      background-color: <?php echo $allStyle['14'] ?>;
   }

   .wpm_6310_team_style_<?php echo $ids ?>_title {
      font-size: <?php echo $allStyle[11] ?>px;
      color: <?php echo $allStyle[12] ?>;
      font-weight: <?php echo $allStyle[15] ?>;
      text-transform: <?php echo $allStyle[16]; ?>;
      font-family: <?php echo str_replace("+", " ", $allStyle[17]); ?>;
      line-height: <?php echo $allStyle[18] ?>px;
      bottom: 40px;
      padding: 0 20px 5px 15px;
      background-color: <?php echo $allStyle['13'] ?>;
      text-align:  <?php echo isset($allSlider[41])?$allSlider[41]:'center' ?>;
      margin-top: <?php echo isset($allSlider[42])?$allSlider[42]:'5' ?>px;
      margin-bottom: <?php echo isset($allSlider[43])?$allSlider[43]:'20' ?>px; 
      height: <?php echo $allStyle[18] ?>px; 
   }

   .wpm_6310_team_style_<?php echo $ids ?>_title,
   .wpm_6310_team_style_<?php echo $ids ?>_designation {
      left: 0;
      position: absolute;
   }

   ul.wpm_6310_team_style_<?php echo $ids ?>_social {
      padding: 0 !important;
      margin: 0 !important;
      width: 100%;
      position: absolute;
      bottom: -100%;
      z-index: 999;
   }

   ul.wpm_6310_team_style_<?php echo $ids ?>_social li {
      display: inline-block;
      margin: 0 8px 8px 0 !important;
      padding: 0 !important;
   }

   ul.wpm_6310_team_style_<?php echo $ids ?>_social li:last-child {
      margin-right: 0 !important;
   }

   ul.wpm_6310_team_style_<?php echo $ids ?>_social li:before,
   ul.wpm_6310_team_style_<?php echo $ids ?>_social li:after {
      display: none !important;
   }

   ul.wpm_6310_team_style_<?php echo $ids ?>_social li a {
      display: inline-block;
      font-size: <?php echo ceil(($allStyle[26] + $allStyle[27]) / 4) ?>px;
      transition: all 0.5s ease 0s;
      border-radius: <?php echo $allStyle[30] ?>%;
      -moz-border-radius: <?php echo $allStyle[30] ?>%;
      -webkit-border-radius: <?php echo $allStyle[30] ?>%;
      -o-border-radius: <?php echo $allStyle[30] ?>%;
      -ms-border-radius: <?php echo $allStyle[30] ?>%;
      box-shadow: none;
      text-decoration: none;
      padding: 0 !important;
      margin: 0 !important;
   }

   ul.wpm_6310_team_style_<?php echo $ids ?>_social li a:hover {
      box-shadow: none;
   }

   .wpm_6310_team_style_<?php echo $ids ?>_icon {
      position: absolute;
      font-size: 50px;
      line-height: 50px;
      color: #FFF;
      text-align: center;
      width: 100%;
      top: -100px;
   }

   .wpm_6310_team_style_<?php echo $ids ?>_icon .fa {
      color: #FFF;
   }

   .wpm_6310_team_style_<?php echo $ids ?>_overlay {
      position: absolute;
      width: 100%;
      height: 100%;
      left: 0;
      bottom: 0;
      padding: 0 10px;
      color: #fff;
      background: <?php echo $allStyle[7] ?>;
      opacity: 0;
   }

   .wpm_6310_team_style_<?php echo $ids ?>img,
   .wpm_6310_team_style_<?php echo $ids ?>_title,
   .wpm_6310_team_style_<?php echo $ids ?>_designation,
   ul.wpm_6310_team_style_<?php echo $ids ?>_social,
   ul.wpm_6310_team_style_<?php echo $ids ?>_social li a,
   .wpm_6310_team_style_<?php echo $ids ?>_icon,
   .wpm_6310_team_style_<?php echo $ids ?>_overlay {

      -webkit-transition: all 0.5s ease 0s;
      -moz-transition: all 0.5s ease 0s;
      -ms-transition: all 0.5s ease 0s;
      -o-transition: all 0.5s ease 0s;
      transition: all 0.5s ease 0s
   }

   .wpm_6310_team_style_<?php echo $ids ?>:hover .wpm_6310_team_style_<?php echo $ids ?>_designation,
   .wpm_6310_team_style_<?php echo $ids ?>:hover .wpm_6310_team_style_<?php echo $ids ?>_title {
      left: -100%;
   }
    .wpm_6310_team_style_<?php echo $ids ?> .wpm_6310_team_style_<?php echo $ids ?>_readmore_text {
      position:absolute;
      bottom: 10%;
      z-index: 999;
         <?php if ($allSlider[32] == 'center') {
            echo "margin-left: 15% !important;";
            echo "margin-left: auto;";
            } elseif ($allSlider[32] == 'right') {
               echo "margin-right: 0% !important;";
            } elseif ($allSlider[32] == 'left') {
               echo "margin-left: 0% !important;";
            }
      ?>
      }
  .wpm_6310_team_style_<?php echo $ids ?>:hover .wpm_6310_team_style_<?php echo $ids ?>_readmore_text {
    bottom: -250px;
  }

   .wpm_6310_team_style_<?php echo $ids ?>:hover ul.wpm_6310_team_style_<?php echo $ids ?>_social {
      bottom:<?php echo (isset($allSlider[18]) && $allSlider[18]) ? '30':'20'?>px;
   }
   

   .wpm_6310_team_style_<?php echo $ids ?>:hover img {
      transform: scale(1.05);
      opacity: .8
   }

   .wpm_6310_team_style_<?php echo $ids ?>:hover .wpm_6310_team_style_<?php echo $ids ?>_overlay {
      opacity: 1;
   }

   .wpm_6310_team_style_<?php echo $ids ?>:hover .wpm_6310_team_style_<?php echo $ids ?>_icon {
      top: calc(50% - 25px);
      transform: rotate(720deg);
   }
</style>
<?php
include wpm_6310_plugin_url . "output/common-output-file.php";
wpm6310_common_output_css($ids);
?>