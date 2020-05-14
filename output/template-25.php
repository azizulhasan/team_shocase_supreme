<?php
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
          <img src="<?php echo $value['image'] ?>" class="img-responsive <?php echo $allStyle[1] ?>" alt="<?php echo wpm_6310_replace($value['name']) ?>">

          <div class="wpm_6310_team_style_<?php echo $ids ?>_team_content">
            <div class="wpm_6310_team_style_<?php echo $ids ?>_title"><?php echo wpm_6310_replace($value['name']) ?></div>
            <div class="wpm_6310_team_style_<?php echo $ids ?>_designation"><?php echo wpm_6310_replace($value['designation']) ?></div>
            <?php  wpm_6310_readmore_activation($ids, $value['profile_details_type'], $allSlider[19]); ?>
          </div>
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
              echo "<li><a " . wpm_6310_external_link($iconUrl[$index]) . "  title='{$li['name']}'  id='wpm-social-link-{$ids}-{$value['id']}-{$li['id']}'><i class='" . $li['class_name'] . "'></i></a></li>";
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
         
          ?>
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
          <img src="<?php echo $value['image'] ?>" class="img-responsive <?php echo $allStyle[1] ?>" alt="<?php echo wpm_6310_replace($value['name']) ?>">

          <div class="wpm_6310_team_style_<?php echo $ids ?>_team_content">
            <div class="wpm_6310_team_style_<?php echo $ids ?>_title"><?php echo wpm_6310_replace($value['name']) ?></div>
            <div class="wpm_6310_team_style_<?php echo $ids ?>_designation"><?php echo wpm_6310_replace($value['designation']) ?></div>
            <?php  wpm_6310_readmore_activation($ids, $value['profile_details_type'], $allSlider[19]); ?>
          </div>
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
              echo "<li><a " . wpm_6310_external_link($iconUrl[$index]) . "  title='{$li['name']}'  id='wpm-social-link-{$ids}-{$value['id']}-{$li['id']}'><i class='" . $li['class_name'] . "'></i></a></li>";
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
         
          ?>
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
      <div class="wpm-6310-col-<?php echo "{$allStyle[0]} wpm-6310-category-filter {$value['category']}" ?>">
        <div<?php echo $link_type ?>>
          <img src="<?php echo $value['image'] ?>" class="img-responsive <?php echo $allStyle[1] ?>" alt="<?php echo wpm_6310_replace($value['name']) ?>">

          <div class="wpm_6310_team_style_<?php echo $ids ?>_team_content">
            <div class="wpm_6310_team_style_<?php echo $ids ?>_title"><?php echo wpm_6310_replace($value['name']) ?></div>
            <div class="wpm_6310_team_style_<?php echo $ids ?>_designation"><?php echo wpm_6310_replace($value['designation']) ?></div>
            <?php  wpm_6310_readmore_activation($ids, $value['profile_details_type'], $allSlider[19]); ?>
          </div>
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
              echo "<li><a " . wpm_6310_external_link($iconUrl[$index]) . "  title='{$li['name']}'  id='wpm-social-link-{$ids}-{$value['id']}-{$li['id']}'><i class='" . $li['class_name'] . "'></i></a></li>";
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
          
          ?>
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
    width: 100%;
    float: left;
    position: relative;
    transition: all 0.3s ease 0s;
    background: <?php echo $allStyle[7] ?>;
  }

  .wpm_6310_team_style_<?php echo $ids ?>:hover {
    box-shadow: 0 0 3px <?php echo $allStyle[7] ?>;
  }

  .wpm_6310_team_style_<?php echo $ids ?>img {
    width: 100%;
    float: left;
    height: auto;
    overflow: hidden;
    transition: all 0.3s ease-in-out 0s;
  }

  .wpm_6310_team_style_<?php echo $ids ?>:hover img {
    opacity: 0.5;
  }

  ul.wpm_6310_team_style_<?php echo $ids ?>_social {
    list-style: none;
    padding: 0;
    margin: 0;
    width: <?php echo $allStyle[26] ?>px;
    text-align: center;
    opacity: 0;
    position: absolute;
    bottom: <?php echo $allStyle[26] ?>px;
    transition: all 0.3s ease 0s;
  }

  .wpm_6310_team_style_<?php echo $ids ?>:hover ul.wpm_6310_team_style_<?php echo $ids ?>_social {
    opacity: 1;
  }

  ul.wpm_6310_team_style_<?php echo $ids ?>_social li {
    display: block;
    margin: 0;
    float: left;
  }

  ul.wpm_6310_team_style_<?php echo $ids ?>_social li:last-child {
    margin: 0px;
  }

  ul.wpm_6310_team_style_<?php echo $ids ?>_social li a {
    float: left;
    width: <?php echo $allStyle[26]; ?>px;
    font-size: <?php echo ceil(($allStyle[26] + $allStyle[27]) / 4) ?>px;
    border-radius: <?php echo $allStyle[30] ?>%;
    -moz-border-radius: <?php echo $allStyle[30] ?>%;
    -webkit-border-radius: <?php echo $allStyle[30] ?>%;
    -o-border-radius: <?php echo $allStyle[30] ?>%;
    -ms-border-radius: <?php echo $allStyle[30] ?>%;
    opacity: 0.9;
    display: inline-block;
    position: relative;
    transform: translate(-35px, 35px);
    transition: all 0.3s ease-in-out 0s
  }

  .wpm_6310_team_style_<?php echo $ids ?>:hover ul.wpm_6310_team_style_<?php echo $ids ?>_social li:nth-child(1) a {
    transition-delay: 0.2s;
  }

  .wpm_6310_team_style_<?php echo $ids ?>:hover ul.wpm_6310_team_style_<?php echo $ids ?>_social li:nth-child(2) a {
    transition-delay: 0.15s
  }

  .wpm_6310_team_style_<?php echo $ids ?>:hover ul.wpm_6310_team_style_<?php echo $ids ?>_social li:nth-child(3) a {
    transition-delay: 0.1s;
  }

  .wpm_6310_team_style_<?php echo $ids ?>:hover ul.wpm_6310_team_style_<?php echo $ids ?>_social li:nth-child(4) a {
    transition-delay: 0s;
  }

  .wpm_6310_team_style_<?php echo $ids ?>:hover ul.wpm_6310_team_style_<?php echo $ids ?>_social li a {
    transform: translate(0, 0)
  }

  .wpm_6310_team_style_<?php echo $ids ?>ul.wpm_6310_team_style_<?php echo $ids ?>_social li a:hover {
    width: <?php echo ($allStyle[26] + 5) ?>px;
    background: #f2545b;
    transition-delay: 0s;
  }

  .wpm_6310_team_style_<?php echo $ids ?>_team_content {
    color: #000;
    opacity: 0;
    position: absolute;
    bottom:<?php echo $allStyle[26]?>px;
    left: 40px;
    transform: translate(-10px, 0px);
    transition: all 0.3s ease 0s;
  }

  .wpm_6310_team_style_<?php echo $ids ?>:hover .wpm_6310_team_style_<?php echo $ids ?>_team_content {
    opacity: 1;
    transform: translate(20px, 0px);
    transition-delay: 0.2s;
  }

  .wpm_6310_team_style_<?php echo $ids ?>_title {
    display: block;
    font-size: <?php echo $allStyle[11] ?>px;
    color: <?php echo $allStyle[12] ?>;
    font-weight: <?php echo $allStyle[15] ?>;
    text-transform: <?php echo $allStyle[16]; ?>;
    font-family: <?php echo str_replace("+", " ", $allStyle[17]); ?>;
    line-height: <?php echo $allStyle[18] ?>px;
    text-align:  <?php echo isset($allSlider[41])?$allSlider[41]:'left' ?>;
    margin-top: <?php echo isset($allSlider[42])?$allSlider[42]:'0' ?>px;
    margin-bottom: <?php echo isset($allSlider[43])?$allSlider[43]:'0' ?>px; 
    height: <?php echo $allStyle[18] ?>px;   
  }


  .wpm_6310_team_style_<?php echo $ids ?>_designation {
    display: block;
    font-size: <?php echo $allStyle[19] ?>px;
    color: <?php echo $allStyle[20] ?>;
    font-weight: <?php echo $allStyle[21] ?>;
    text-transform: <?php echo $allStyle[22] ?>;
    font-family: <?php echo str_replace("+", " ", $allStyle[23]); ?>;
    line-height: <?php echo $allStyle[24] ?>px;
    text-align:  <?php echo isset($allSlider[51])?$allSlider[51]:'left' ?>;
    margin-top: <?php echo isset($allSlider[52])?$allSlider[52]:'0' ?>px;
    margin-bottom: <?php echo isset($allSlider[53])?$allSlider[53]:'0' ?>px; 
    height: <?php echo $allStyle[24] ?>px;  
  }
</style>

<?php
include wpm_6310_plugin_url . "output/common-output-file.php";
wpm6310_common_output_css($ids);
?>