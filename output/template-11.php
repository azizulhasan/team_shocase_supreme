<?php
$styleTemplate = 11;
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
          <div class="">
            <img src="<?php echo $value['image'] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <?php
            if (trim($value['name'])) {
              echo "<div class='wpm_6310_team_style_{$ids}_title'>{$value['name']}</div>";
            }
            ?>
          </div>
          <div class="<?php echo "{$allStyle[1]}_{$ids}" ?>">
            <div class="wpm_6310_team_style_<?php echo $ids ?>_table">
              <div class="wpm_6310_team_style_<?php echo $ids ?>_table_cell">
                <?php
                if (trim($value['name'])) {
                  echo "<div class='wpm_6310_team_style_{$ids}_title_hover'>{$value['name']}</div>";
                }
                if (trim($value['designation'])) {
                  echo "<div class='wpm_6310_team_style_{$ids}_designation_hover'>{$value['designation']}</div>";
                }
                ?>
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
                if ($value['profile_details_type'] == 1) {
                  $target = "";
                  if ($value['open_new_tab']) {
                    $target = "_blank";
                  }
                  echo "<div class='wpm-6310-default-css wpm_6310_team_style_{$ids}_read_more'>
                     <a href='{$value['profile_url']}'  target='{$target}'>VIEW MORE</a>
                     </div>";
                }
                ?>

              </div>

            </div>
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
          <div class="">
            <img src="<?php echo $value['image'] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <?php
            if (trim($value['name'])) {
              echo "<div class='wpm_6310_team_style_{$ids}_title'>{$value['name']}</div>";
            }
            ?>
          </div>
          <div class="<?php echo "{$allStyle[1]}_{$ids}" ?>">
            <div class="wpm_6310_team_style_<?php echo $ids ?>_table">
              <div class="wpm_6310_team_style_<?php echo $ids ?>_table_cell">
                <?php
                if (trim($value['name'])) {
                  echo "<div class='wpm_6310_team_style_{$ids}_title_hover'>{$value['name']}</div>";
                }
                if (trim($value['designation'])) {
                  echo "<div class='wpm_6310_team_style_{$ids}_designation_hover'>{$value['designation']}</div>";
                }
                ?>
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
                if ($value['profile_details_type'] == 1) {
                  $target = "";
                  if ($value['open_new_tab']) {
                    $target = "_blank";
                  }
                  echo "<div class='wpm-6310-default-css wpm_6310_team_style_{$ids}_read_more'>
                     <a href='{$value['profile_url']}'  target='{$target}'>VIEW MORE</a>
                     </div>";
                }
                ?>

              </div>

            </div>
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
      $col++;
      if ($allStyle[0] == 1) {
        echo "<div class='wpm-6310-row'>";
      } else if ($col % $allStyle[0] == 1) {
        echo "<div class='wpm-6310-row'>";
      }
    ?>
      <div class="wpm-6310-col-<?php echo "{$allStyle[0]} wpm-6310-category-filter {$value['category']}" ?>">
        <div<?php echo $link_type; ?>>
          <div class="">
            <img src="<?php echo $value['image'] ?>" class="wpm-image-responsive" alt="Team Showcase">
            <?php
            if (trim($value['name'])) {
              echo "<div class='wpm_6310_team_style_{$ids}_title'>{$value['name']}</div>";
            }
            ?>
          </div>
          <div class="<?php echo "{$allStyle[1]}_{$ids}" ?>">
            <div class="wpm_6310_team_style_<?php echo $id; ?>_table">
              <div class="wpm_6310_team_style_<?php echo $id; ?>_table_cell">
                <?php
                if (trim($value['name'])) {
                  echo "<div class='wpm_6310_team_style_{$ids}_title_hover'>{$value['name']}</div>";
                }
                if (trim($value['designation'])) {
                  echo "<div class='wpm_6310_team_style_{$ids}_designation_hover'>{$value['designation']}</div>";
                }
                ?>
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
                
                if ($value['profile_details_type'] == 1) {
                  $target = "";
                  if ($value['open_new_tab']) {
                    $target = "_blank";
                  }
                  echo "<div class='wpm_6310_team_style_{$ids}_read_more'>
                   <a href='{$value['profile_url']}'  target='{$target}'>VIEW MORE</a>
                   </div>";
                }
                ?>

              </div>

            </div>
          </div>
      </div>
      </div>
<?php
      
    }
    
  }
}
?>

<style type="text/css">
  .wpm_6310_team_style_<?php echo $id; ?> {
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
    box-shadow: 0 0 <?php echo $allStyle[9] ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
    -moz-box-shadow: 0 0 <?php echo $allStyle[9] ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
    -o-box-shadow: 0 0 <?php echo $allStyle[9] ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
    -webkit-box-shadow: 0 0 <?php echo $allStyle[9] ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
    -ms-box-shadow: 0 0 <?php echo $allStyle[9] ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
  }

  .wpm_6310_team_style_<?php echo $id; ?>img {
    width: 100%;
    height: auto;
    padding: 0;
    margin: 0;
    float: left;
  }

  .wpm_6310_team_style_<?php echo $id; ?>_title {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    width: 100%;
    margin: 12px 0;
    background-color: <?php echo $allStyle[7] ?>;
    -webkit-transition: all 0.5s; 
    -o-transition: all 0.5s;
    -moz-transition: all 0.5s;
    transition: all 0.5s;
    text-align: center;
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


    
  }

  .wpm_6310_team_style_hover_animation_top_<?php echo $id; ?>,
  .wpm_6310_team_style_hover_animation_bottom_<?php echo $id; ?>,
  .wpm_6310_team_style_hover_animation_left_<?php echo $id; ?>,
  .wpm_6310_team_style_hover_animation_right_<?php echo $id; ?> {
    position: absolute;
    width: 100%;
    height: 101%;
    padding: 10px;
    background-color: <?php echo $allStyle[7] ?>;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    -moz-transition: all 0.5s;
    transition: all 0.5s;

  }

  .wpm_6310_team_style_hover_animation_top_<?php echo $id; ?> {
    -webkit-transform: translateY(-100%);
    -ms-transform: translateY(-100%);
    transform: translateY(-100%);
    top: 0;
    left: 0;
  }

  .wpm_6310_team_style_hover_animation_bottom_<?php echo $id; ?> {
    -webkit-transform: translateY(100%);
    -ms-transform: translateY(100%);
    transform: translateY(100%);
    bottom: 0;
    left: 0;
  }

  .wpm_6310_team_style_hover_animation_left_<?php echo $id; ?> {
    -webkit-transform: translateX(-100%);
    -ms-transform: translateX(-100%);
    transform: translateX(-100%);
    left: 0;
    top: 0;
  }

  .wpm_6310_team_style_hover_animation_right_<?php echo $id; ?> {
    -webkit-transform: translateX(100%);
    -ms-transform: translateX(100%);
    transform: translateX(100%);
    right: 0;
    top: 0;
  }

  .wpm_6310_team_style_<?php echo $id; ?>:hover .wpm_6310_team_style_<?php echo $id; ?>_title {
    -webkit-transform: translateY(100%);
    -ms-transform: translateY(100%);
    transform: translateY(100%);
  }

  .wpm_6310_team_style_<?php echo $id; ?>:hover .wpm_6310_team_style_hover_animation_top_<?php echo $id; ?> {
    top: 100%;
  }

  .wpm_6310_team_style_<?php echo $id; ?>:hover .wpm_6310_team_style_hover_animation_bottom_<?php echo $id; ?> {
    bottom: 100%;
  }

  .wpm_6310_team_style_<?php echo $id; ?>:hover .wpm_6310_team_style_hover_animation_left_<?php echo $id; ?> {
    left: 100%;
  }

  .wpm_6310_team_style_<?php echo $id; ?>:hover .wpm_6310_team_style_hover_animation_right_<?php echo $id; ?> {
    right: 100%;
  }

  .wpm_6310_team_style_<?php echo $id; ?>_table {
    display: table;
    width: 100%;
    height: 100%;
  }

  .wpm_6310_team_style_<?php echo $id; ?>_table_cell {
    display: table-cell;
    width: 100%;
    vertical-align: middle;
  }

  .wpm_6310_team_style_<?php echo $id; ?>_title_hover,
  .wpm_6310_team_style_<?php echo $id; ?>_designation_hover,
  .wpm_6310_team_style_<?php echo $id; ?>_social,
  .wpm_6310_team_style_<?php echo $id; ?>_read_more {
    text-align: center;
    display: block;
  }

  .wpm_6310_team_style_<?php echo $id; ?>_title_hover {
    font-size: <?php echo $allStyle[11] ?>px;
    color: <?php echo $allStyle[12] ?>;
    font-weight: <?php echo $allStyle[15] ?>;
    text-transform: <?php echo $allStyle[16]; ?>;
    font-family: <?php echo str_replace("+", " ", $allStyle[17]); ?>;
    line-height: <?php echo $allStyle[18] ?>px;
  }

  .wpm_6310_team_style_<?php echo $id; ?>_designation_hover {
    font-size: <?php echo $allStyle[19] ?>px;
    color: <?php echo $allStyle[20] ?>;
    font-weight: <?php echo $allStyle[21] ?>;
    text-transform: <?php echo $allStyle[22] ?>;
    font-family: <?php echo str_replace("+", " ", $allStyle[23]); ?>;
    line-height: <?php echo $allStyle[24] ?>px;
  }

  .wpm_6310_team_style_<?php echo $id; ?>_read_more {
    margin-top: 30px;
  }

  .wpm_6310_team_style_<?php echo $id; ?>_read_more a {
    text-decoration: none !important;
    background-color: #71a298;
    border: 2px solid #71a298;
    -webkit-transition: all 0.5s;
    -o-transition: all 0.5s;
    -moz-transition: all 0.5s;
    transition: all 0.5s;
    color: #FFF;
    margin: 0 !important;
    padding: 10px 20px !important;
    font-weight: 600;
    font-size: <?php echo ($allStyle[11] - 7) ?>px;
  }

  .wpm_6310_team_style_<?php echo $id; ?>_read_more a:hover {
    background: transparent;
    color: #71a298;
  }

  ul.wpm_6310_team_style_<?php echo $id; ?>_social {
    padding: 0;
    margin: 20px 0 0;
    list-style: none;
    text-align: center;
  }

  ul.wpm_6310_team_style_<?php echo $id; ?>_social li {
    display: inline-block;
    margin-right: 8px;
  }

  ul.wpm_6310_team_style_<?php echo $id; ?>_social li:last-child {
    margin-right: 0;
  }

  ul.wpm_6310_team_style_<?php echo $id; ?>_social li a {
    display: inline-block;
    font-size: <?php echo ceil(($allStyle[26] + $allStyle[27]) / 4) ?>px;
    margin: 0;
    -webkit-transition: all 0.5s ease 0s;
    -moz-transition: all 0.5s ease 0s;
    -ms-transition: all 0.5s ease 0s;
    -o-transition: all 0.5s ease 0s;
    transition: all 0.5s ease 0s;
    border-radius: <?php echo $allStyle[30] ?>%;
    -moz-border-radius: <?php echo $allStyle[30] ?>%;
    -webkit-border-radius: <?php echo $allStyle[30] ?>%;
    -o-border-radius: <?php echo $allStyle[30] ?>%;
    -ms-border-radius: <?php echo $allStyle[30] ?>%;
  }

  ul.wpm_6310_team_style_<?php echo $id; ?>_social li a:hover {
    background: #fff;
    color: #d4434d
  }

  .wpm_6310_link_activity {
    display: none;
  }
</style>
<?php
include wpm_6310_plugin_url . "output/common-output-file.php";
wpm6310_common_output_css($ids);
?>
