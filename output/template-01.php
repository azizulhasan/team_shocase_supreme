<?php
$styleTemplate = 1;
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
      $col++;
    ?>
      <div class="wpm-6310-col-<?php echo "{$allStyle[0]} wpm-6310-category-filter {$value['category']}" ?>">
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
    border-radius: 0;
  }

  .wpm_6310_team_style_<?php echo $ids ?>_caption {
    background: #FFF;
    padding: 0 10px;
    text-align: center;
    float: left;
    width: 100%;
  }

  .wpm_6310_team_style_<?php echo $ids ?>:hover .wpm_6310_team_style_<?php echo $ids ?>_caption {
    background: <?php echo $allStyle[7] ?>;
  }

  .wpm_6310_team_style_<?php echo $ids ?>_title {
    margin-bottom: 10px;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    font-size: <?php echo $allStyle[11] ?>px;
    color: <?php echo $allStyle[12] ?>;
    font-weight: <?php echo $allStyle[15] ?>;
    text-transform: <?php echo $allStyle[16]; ?>;
    font-family: <?php echo str_replace("+", " ", $allStyle[17]); ?>;
    line-height: <?php echo $allStyle[18] ?>px;
    text-align:  <?php echo isset($allSlider[41])?$allSlider[41]:'center' ?>;
    margin-top: <?php echo isset($allSlider[42])?$allSlider[42]:'5' ?>px;
    margin-bottom: <?php echo isset($allSlider[43])?$allSlider[43]:'20' ?>px; 
    height: <?php echo $allStyle[18] ?>px;  
    float: left;
    width: 100%;
  }

  .wpm_6310_team_style_<?php echo $ids ?>_designation {
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    font-size: <?php echo $allStyle[19] ?>px;
    color: <?php echo $allStyle[20] ?>;
    font-weight: <?php echo $allStyle[21] ?>;
    text-transform: <?php echo $allStyle[22] ?>;
    font-family: <?php echo str_replace("+", " ", $allStyle[23]); ?>;
    line-height: <?php echo $allStyle[24] ?>px;
    float: left;
    width: 100%;
    text-align:  <?php echo isset($allSlider[51])?$allSlider[51]:'center' ?>;
    margin-top: <?php echo isset($allSlider[52])?$allSlider[52]:'5' ?>px;
    margin-bottom: <?php echo isset($allSlider[53])?$allSlider[53]:'20' ?>px; 
    height: <?php echo $allStyle[24] ?>px;  
  }

  .wpm_6310_team_style_<?php echo $ids ?>_title,
  .wpm_6310_team_style_<?php echo $ids ?>_designation,
  .wpm_6310_team_style_<?php echo $ids ?>,
  .wpm_6310_team_style_<?php echo $ids ?>_caption {
    -webkit-transition: all 0.6s ease 0s;
    -moz-transition: all 0.6s ease 0s;
    -ms-transition: all 0.6s ease 0s;
    -o-transition: all 0.6s ease 0s;
    transition: all 0.6s ease 0s;
  }

  .wpm_6310_team_style_<?php echo $ids ?>:hover .wpm_6310_team_style_<?php echo $ids ?>_title {
    color: <?php echo $allStyle[13] ?>;
  }

  .wpm_6310_team_style_<?php echo $ids ?>:hover .wpm_6310_team_style_<?php echo $ids ?>_designation {
    color: <?php echo $allStyle[25] ?>;
  }

  ul.wpm_6310_team_style_<?php echo $ids ?>_social {
    margin: 15px 0 10px !important;
    text-align: center !important;
  }

  ul.wpm_6310_team_style_<?php echo $ids ?>_social li:before,
  ul.wpm_6310_team_style_<?php echo $ids ?>_social li:after {
    display: none !important;
  }

  ul.wpm_6310_team_style_<?php echo $ids ?>_social li {
    margin: 0 8px 8px 0 !important;
  }

  ul.wpm_6310_team_style_<?php echo $ids ?>_social li:last-child {
    margin-right: 0 !important;
  }

  ul.wpm_6310_team_style_<?php echo $ids ?>_social li a {
    font-size: <?php echo ceil(($allStyle[26] + $allStyle[27]) / 4) ?>px;
    -webkit-transition: all 0.5s ease 0s;
    -moz-transition: all 0.5s ease 0s;
    -ms-transition: all 0.5s ease 0s;
    -o-transition: all 0.5s ease 0s;
    transition: all 0.5s ease 0s;
    border-style: solid;
    border-width: <?php echo $allStyle[28] ?>px;
    border-color: <?php echo $allStyle[29] ?>;
    border-radius: <?php echo $allStyle[30] ?>%;
    -moz-border-radius: <?php echo $allStyle[30] ?>%;
    -webkit-border-radius: <?php echo $allStyle[30] ?>%;
    -o-border-radius: <?php echo $allStyle[30] ?>%;
    -ms-border-radius: <?php echo $allStyle[30] ?>%;
  }

  ul.wpm_6310_team_style_<?php echo $ids ?>_social li a:hover {
    background: <?php echo $allStyle[31] ?> !important;
    color: <?php echo $allStyle[32] ?> !important;
  }

  .wpm_6310_team_style_<?php echo $ids ?>:hover {
    margin-top: -10px;
    margin-bottom: 10px;
    box-shadow: 0 7px <?php echo ($allStyle[9] * 5) ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
  }
</style>
<?php
include wpm_6310_plugin_url . "output/common-output-file.php";
wpm6310_common_output_css($ids);
?>