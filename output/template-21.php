<?php
$styleTemplate = 21;
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
          <div class="wpm_6310_team_style_<?php echo $ids ?>_pic">
            <img src="<?php echo $value['image'] ?>" class="img-responsive <?php echo $allStyle[1] ?>" alt="<?php echo wpm_6310_replace($value['name']) ?>">
          </div>
          <div class="wpm_6310_team_style_<?php echo $ids ?>_team_content">
            <div class="wpm_6310_team_style_<?php echo $ids ?>_title"><?php echo wpm_6310_replace($value['name']) ?></div>
            <div class="wpm_6310_team_style_<?php echo $ids ?>_designation"><?php echo wpm_6310_replace($value['designation']) ?></div>
            <?php wpm_6310_readmore_activation($ids, $value['profile_details_type'], $allSlider[19]); ?>

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
                echo "<li><a " . wpm_6310_external_link($iconUrl[$index]) . "  title='{$li['name']}'  id='wpm-social-link-{$value['id']}-{$li['id']}'><i class='" . $li['class_name'] . "'></i></a></li>";
                $iconStyles .= "<style>
                ul.wpm_6310_team_style_{$ids}_social li a#wpm-social-link-{$value['id']}-{$li['id']}{
                  color:{$li['color']};
                }
                ul.wpm_6310_team_style_{$ids}_social li a#wpm-social-link-{$value['id']}-{$li['id']}:before{
                  content: '';
                  width: 100%;
                  height: 100%;
                  position: absolute;
                  top: 0;
                  left: 0;
                  transform: rotate(45deg);
                  z-index: -1;
                  transition: all 0.3s ease-in-out 0s;
                  border: {$allStyle[28]}px solid {$li['bgcolor']};
                  background-color: {$li['bgcolor']};

                }
                ul.wpm_6310_team_style_{$ids}_social li:hover a#wpm-social-link-{$value['id']}-{$li['id']}{
                  color: {$li['bgcolor']};
                }
                ul.wpm_6310_team_style_{$ids}_social li:hover a#wpm-social-link-{$value['id']}-{$li['id']}:before{

                  background-color:{$li['color']};
                  transform: rotate(-45deg);
                }

                </style>";

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
          <div class="wpm_6310_team_style_<?php echo $ids ?>_pic">
            <img src="<?php echo $value['image'] ?>" class="img-responsive <?php echo $allStyle[1] ?>" alt="<?php echo wpm_6310_replace($value['name']) ?>">
          </div>
          <div class="wpm_6310_team_style_<?php echo $ids ?>_team_content">
            <div class="wpm_6310_team_style_<?php echo $ids ?>_title"><?php echo wpm_6310_replace($value['name']) ?></div>
            <div class="wpm_6310_team_style_<?php echo $ids ?>_designation"><?php echo wpm_6310_replace($value['designation']) ?></div>
            <?php wpm_6310_readmore_activation($ids, $value['profile_details_type'], $allSlider[19]); ?>

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
                echo "<li><a " . wpm_6310_external_link($iconUrl[$index]) . "  title='{$li['name']}'  id='wpm-social-link-{$value['id']}-{$li['id']}'><i class='" . $li['class_name'] . "'></i></a></li>";
                $iconStyles .= "<style>
                ul.wpm_6310_team_style_{$ids}_social li a#wpm-social-link-{$value['id']}-{$li['id']}{
                  color:{$li['color']};
                }
                ul.wpm_6310_team_style_{$ids}_social li a#wpm-social-link-{$value['id']}-{$li['id']}:before{
                  content: '';
                  width: 100%;
                  height: 100%;
                  position: absolute;
                  top: 0;
                  left: 0;
                  transform: rotate(45deg);
                  z-index: -1;
                  transition: all 0.3s ease-in-out 0s;
                  border: {$allStyle[28]}px solid {$li['bgcolor']};
                  background-color: {$li['bgcolor']};

                }
                ul.wpm_6310_team_style_{$ids}_social li:hover a#wpm-social-link-{$value['id']}-{$li['id']}{
                  color: {$li['bgcolor']};
                }
                ul.wpm_6310_team_style_{$ids}_social li:hover a#wpm-social-link-{$value['id']}-{$li['id']}:before{

                  background-color:{$li['color']};
                  transform: rotate(-45deg);
                }

                </style>";

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
          <div class="wpm_6310_team_style_<?php echo $ids ?>_pic">
            <img src="<?php echo $value['image'] ?>" class="img-responsive <?php echo $allStyle[1] ?>" alt="<?php echo wpm_6310_replace($value['name']) ?>">
          </div>
          <div class="wpm_6310_team_style_<?php echo $ids ?>_team_content">
            <div class="wpm_6310_team_style_<?php echo $ids ?>_title"><?php echo wpm_6310_replace($value['name']) ?></div>
            <div class="wpm_6310_team_style_<?php echo $ids ?>_designation"><?php echo wpm_6310_replace($value['designation']) ?></div>
            <?php wpm_6310_readmore_activation($ids, $value['profile_details_type'], $allSlider[19]); ?>
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
                echo "<li><a " . wpm_6310_external_link($iconUrl[$index]) . "  title='{$li['name']}'  id='wpm-social-link-{$value['id']}-{$li['id']}'><i class='" . $li['class_name'] . "'></i></a></li>";
                $iconStyles .= "<style>
              ul.wpm_6310_team_style_{$ids}_social li a#wpm-social-link-{$value['id']}-{$li['id']}{
                color:{$li['color']};
              }
              ul.wpm_6310_team_style_{$ids}_social li a#wpm-social-link-{$value['id']}-{$li['id']}:before{
                content: '';
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
                transform: rotate(45deg);
                z-index: -1;
                transition: all 0.3s ease-in-out 0s;
                border: {$allStyle[28]}px solid {$li['bgcolor']};
                background-color: {$li['bgcolor']};

              }
              ul.wpm_6310_team_style_{$ids}_social li:hover a#wpm-social-link-{$value['id']}-{$li['id']}{
                color: {$li['bgcolor']};
              }
              ul.wpm_6310_team_style_{$ids}_social li:hover a#wpm-social-link-{$value['id']}-{$li['id']}:before{

                background-color:{$li['color']};
                transform: rotate(-45deg);
              }

              </style>";

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
    transition: all 0.3s ease 0s;
    box-shadow: 0 0 <?php echo $allStyle[9] ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
    -moz-box-shadow: 0 0 <?php echo $allStyle[9] ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
    -o-box-shadow: 0 0 <?php echo $allStyle[9] ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
    -webkit-box-shadow: 0 0 <?php echo $allStyle[9] ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
    -ms-box-shadow: 0 0 <?php echo $allStyle[9] ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
    width: calc(100% - 10px);
    float: left;
    position: relative;
    border-top: 5px #F1F1F1 solid;
    border-right: 5px #F1F1F1 solid;
    border-left: 5px #F1F1F1 solid;
    background: #FFF;
  }

  .wpm_6310_team_style_<?php echo $ids ?>:hover {
    border-top: 5px <?php echo $allStyle[7] ?> solid;
    border-right: 5px <?php echo $allStyle[7] ?> solid;
    border-left: 5px <?php echo $allStyle[7] ?> solid;
  }

  .wpm_6310_team_style_<?php echo $ids ?>_pic {
    padding: 30px 20px 0;
    position: relative;
    border-top: <?php echo $allStyle[3] ?>px solid <?php echo $allStyle[4] ?>;
    border-right: <?php echo $allStyle[3] ?>px solid <?php echo $allStyle[4] ?>;
    border-left: <?php echo $allStyle[3] ?>px solid <?php echo $allStyle[4] ?>;
    display: table;
  }

  .wpm_6310_team_style_<?php echo $ids ?>:hover .wpm_6310_team_style_<?php echo $ids ?>_pic {
    border-top: <?php echo $allStyle[3] ?>px solid #F1F1F1;
    border-right: <?php echo $allStyle[3] ?>px solid #F1F1F1;
    border-left: <?php echo $allStyle[3] ?>px solid #F1F1F1;
  }

  .wpm_6310_team_style_<?php echo $ids ?>_pic img {
    width: 100%;
    height: auto;
  }

  .wpm_6310_team_style_<?php echo $ids ?>_team_content {
     background: <?php echo $allStyle[10] ?>;
    color: #fff;
    position: relative;
    float:left;
    width:100%;

  }

  .wpm_6310_team_style_<?php echo $ids ?>:hover .wpm_6310_team_style_<?php echo $ids ?>_team_content {
    background: <?php echo $allStyle[7] ?>;
  }

  .wpm_6310_team_style_<?php echo $ids ?>_team_content:before {
    content: "+";
    width: 20px;
    height: 20px;
    font-size: 17px;
    color: #fff;
    background: <?php echo $allStyle[10] ?>;
    position: absolute;
    top: -20px;
    right: 0;
    transition: all 0.3s ease 0s;
  }

  .wpm_6310_team_style_<?php echo $ids ?>:hover .wpm_6310_team_style_<?php echo $ids ?>_team_content:before {
    width: 100%;
    background: <?php echo $allStyle[7] ?>;
    color: <?php echo $allStyle[7] ?>;
    text-align: left;
  }

  .wpm_6310_team_style_<?php echo $ids ?>_title {
    font-size: <?php echo $allStyle[11] ?>px;
    color: <?php echo $allStyle[12] ?>;
    font-weight: <?php echo $allStyle[15] ?>;
    text-transform: <?php echo $allStyle[16]; ?>;
    font-family: <?php echo str_replace("+", " ", $allStyle[17]); ?>;
     line-height: <?php echo $allStyle[18] ?>px;
    text-align:  <?php echo isset($allSlider[41])?$allSlider[41]:'center' ?>;
    margin-top: <?php echo isset($allSlider[42])?$allSlider[42]:'20' ?>px;
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
    text-align:  <?php echo isset($allSlider[51])?$allSlider[51]:'center' ?>;
    margin-top: <?php echo isset($allSlider[52])?$allSlider[52]:'0' ?>px;
    margin-bottom: <?php echo isset($allSlider[53])?$allSlider[53]:'5' ?>px; 
    height: <?php echo $allStyle[24] ?>px;  
  }

  ul.wpm_6310_team_style_<?php echo $ids ?>_social {
    padding: 0;
    list-style: none;
    position: absolute;
    top: -<?php echo ($allStyle[26] + 2) ?>px;
    left: 0;
    right: 0;
    margin: auto;
    transform: scale(0);
    transition: all 0.3s ease 0s;
  }

  .wpm_6310_team_style_<?php echo $ids ?>:hover ul.wpm_6310_team_style_<?php echo $ids ?>_social {
    transform: scale(1);
  }

  ul.wpm_6310_team_style_<?php echo $ids ?>_social li {
    display: inline-block;
    margin-right: 0px;
    width: <?php echo ($allStyle[26] * 1.5) - 2 + ($allStyle[28] * 2) ?>px;
  }

  ul.wpm_6310_team_style_<?php echo $ids ?>_social li:last-child {
    margin-right: 0;
  }

  ul.wpm_6310_team_style_<?php echo $ids ?>_social li a {
    display: inline-block;
    width: <?php echo $allStyle[26] ?>px;
    height: <?php echo $allStyle[27] ?>px;
    line-height: <?php echo $allStyle[27] ?>px;
    font-size: 16px;
    position: relative;
    z-index: 1;
    transition: all 0.3s ease-in-out 0s;
  }

  ul.wpm_6310_team_style_<?php echo $ids ?>_social li a:hover {
    color: #fff;
  }

  ul.wpm_6310_team_style_<?php echo $ids ?>_social li a:before {
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    background: #fff;
    transform: rotate(45deg);
    z-index: -1;
    transition: all 0.3s ease-in-out 0s;
  }

  ul.wpm_6310_team_style_<?php echo $ids ?>_social li:hover a:before {
    background: #333;
    color: #fff;
    transform: rotate(-45deg);
  }
</style>

<?php
include wpm_6310_plugin_url . "output/common-output-file.php";
wpm6310_common_output_css($ids);
?>