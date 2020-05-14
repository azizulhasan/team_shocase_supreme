<?php
$styleTemplate = 7;
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
          <figcaption>
            <div class="wpm_6310_team_style_<?php echo $ids ?>_content">
              <div class="wpm_6310_team_style_<?php echo $ids ?>_title"><?php echo wpm_6310_replace($value['name']) ?></div>
              <div class="wpm_6310_team_style_<?php echo $ids ?>_designation"><?php echo wpm_6310_replace($value['designation']) ?></div>
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
          <img src="<?php echo $value['image'] ?>" class="img-responsive <?php echo $allStyle[1] ?>" alt="<?php echo wpm_6310_replace($value['name']) ?>">
          <figcaption>
            <div class="wpm_6310_team_style_<?php echo $ids ?>_content">
              <div class="wpm_6310_team_style_<?php echo $ids ?>_title"><?php echo wpm_6310_replace($value['name']) ?></div>
              <div class="wpm_6310_team_style_<?php echo $ids ?>_designation"><?php echo wpm_6310_replace($value['designation']) ?></div>
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
          <figcaption>
            <div class="wpm_6310_team_style_<?php echo $ids ?>_content">
              <div class="wpm_6310_team_style_<?php echo $ids ?>_title"><?php echo wpm_6310_replace($value['name']) ?></div>
              <div class="wpm_6310_team_style_<?php echo $ids ?>_designation"><?php echo wpm_6310_replace($value['designation']) ?></div>
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


    function wpm_07_content_position($readmore = '',$overlay ='' ){
      
        if($readmore=='1'){
          if($overlay==100){
            echo 20;
          }else if($overlay==90){
            echo 17;
          }else if($overlay==80){
            echo 12;
          }else if($overlay==70){
            echo 9;
          }else if($overlay==60){
            echo 6;
          }else{
            echo 3;
          }
        }else{
          if($overlay==100){
            echo 30;
          }else if($overlay==90){
            echo 25;
          }else if($overlay==80){
            echo 20;
          }else if($overlay==70){
            echo 18;
          }else if($overlay==60){
            echo 17;
          }else{
            echo 10;
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
    box-shadow: 0 0 <?php echo $allStyle[9] ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
    -moz-box-shadow: 0 0 <?php echo $allStyle[9] ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
    -o-box-shadow: 0 0 <?php echo $allStyle[9] ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
    -webkit-box-shadow: 0 0 <?php echo $allStyle[9] ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
    -ms-box-shadow: 0 0 <?php echo $allStyle[9] ?>px <?php echo $allStyle[8] ?>px <?php echo $allStyle[10] ?>;
    width: calc(100% - <?php echo ($allStyle[3] * 2) ?>px);
    float: left;
  }

  .wpm_6310_team_style_<?php echo $ids ?> img {
    width: 100%;
    height: auto;
    padding: 0 !important;
    margin: 0 !important;
    float: left;
    -webkit-transition: all 0.5s ease-in-out 0s;
    -moz-transition: all 0.5s ease-in-out 0s;
    -ms-transition: all 0.5s ease-in-out 0s;
    -o-transition: all 0.5s ease-in-out 0s;
    transition: all 0.5s ease-in-out 0s;
    border-radius: 0 !important;
  }

  .wpm_6310_team_style_<?php echo $ids ?> figcaption {
    top: 80%;
    height: <?php echo $allStyle[5]?>%;
    left: 15px;
    right: 15px;
    position: absolute;
    color: rgba(31, 31, 31, 1);
    text-align: center;
    overflow: hidden;
    -webkit-transition: height 0.4s;
    -moz-transition: height 0.4s;
    transition: height 0.4s;
    padding: 15px 0;
    -webkit-transition: all 0.5s ease-in-out 0s;
    -moz-transition: all 0.5s ease-in-out 0s;
    -ms-transition: all 0.5s ease-in-out 0s;
    -o-transition: all 0.5s ease-in-out 0s;
    transition: all 0.5s ease-in-out 0s;
    background: <?php echo $allStyle[7] ?>;
  }
  .wpm_6310_team_style_<?php echo $ids ?>:hover figcaption {
      top:<?php echo (100-$allStyle[5]) ?>%;
      height: <?php echo $allStyle[5]?>%;
    }
    .wpm_6310_team_style_<?php echo $ids ?> figcaption .wpm_6310_team_style_<?php echo $ids ?>_content{
      float: left;
      width: 100%;
      position: absolute;
      left: 0;
      opacity: 1;
      -webkit-transition: all 0.5s ease 0.2s;
      -moz-transition: all 0.5s ease 0.2s;
      -ms-transition: all 0.5s ease 0.2s;
      -o-transition: all 0.5s ease 0.2s;
      transition: all 0.5s ease 0.2s;
    }
    .wpm_6310_team_style_<?php echo $ids ?>:hover .wpm_6310_team_style_<?php echo $ids ?>_content{
      top: <?php wpm_07_content_position($allSlider[18] ,$allStyle[5]) ?>%;
    }
  .wpm_6310_team_style_<?php echo $ids ?>_title {
    margin-top: 15px;
    margin-bottom: 10px;
    font-size: <?php echo $allStyle[11] ?>px;
    color: <?php echo $allStyle[12] ?>;
    font-weight: <?php echo $allStyle[15] ?>;
    text-transform: <?php echo $allStyle[16]; ?>;
    font-family: <?php echo str_replace("+", " ", $allStyle[17]); ?>;
    line-height: <?php echo $allStyle[18] ?>px;
    text-align:  <?php echo isset($allSlider[41])?$allSlider[41]:'center' ?>;
    margin-top: <?php echo isset($allSlider[42])?$allSlider[42]:'0' ?>px;
    margin-bottom: <?php echo isset($allSlider[43])?$allSlider[43]:'0' ?>px; 
    height: <?php echo $allStyle[18] ?>px; 



    


     
  }

  .wpm_6310_team_style_<?php echo $ids ?>_designation {
    font-size: <?php echo $allStyle[19] ?>px;
    color: <?php echo $allStyle[20] ?>;
    font-weight: <?php echo $allStyle[21] ?>;
    text-transform: <?php echo $allStyle[22] ?>;
    font-family: <?php echo str_replace("+", " ", $allStyle[23]); ?>;
    line-height: <?php echo ($allStyle[24] + 15) ?>px;
    opacity: 0;
    -moz-transition: all 0.5s ease-in-out 0.2s;
    transition: all 0.5s ease-in-out 0.2s;
    text-align:  <?php echo isset($allSlider[51])?$allSlider[51]:'center' ?>;
    margin-top: <?php echo isset($allSlider[52])?$allSlider[52]:'6' ?>px;
    margin-bottom: <?php echo isset($allSlider[53])?$allSlider[53]:'0' ?>px; 
    height: <?php echo $allStyle[24] ?>px; 
  }
  .wpm_6310_team_style_<?php echo $ids ?>_designation::before,
  .wpm_6310_team_style_<?php echo $ids ?>_designation::after {
    content: "";
    height: 1px;
    position: absolute;
    opacity: 0;
    display: block;
    width: 0;
    border-top: 1px solid <?php echo $allStyle[4] ?>;
    -moz-transition: all 0.5s ease-in-out 0.2s;
    transition: all 0.5s ease-in-out 0.2s;
  }

  .wpm_6310_team_style_<?php echo $ids ?>_designation::after {
    right: 0;
  }

  .wpm_6310_team_style_<?php echo $ids ?>_social {
    height: 35px;
    line-height: 35px;
    font-size: 16px;
    margin: 10px 0;
  }

  .wpm_6310_team_style_<?php echo $ids ?>:hover img {
    transform: scale(1.10);
    -moz-transform: scale(1.10);
    -webkit-transform: scale(1.10);
    -ms-transform: scale(1.10);
    -o-transform: scale(1.10);
    float: left;

  }
  .wpm_6310_team_style_<?php echo $ids ?>:hover figcaption .wpm_6310_team_style_<?php echo $ids ?>_designation::before,
  .wpm_6310_team_style_<?php echo $ids ?>:hover figcaption .wpm_6310_team_style_<?php echo $ids ?>_designation::after,
  .wpm_6310_team_style_<?php echo $ids ?>:hover figcaption .wpm_6310_team_style_<?php echo $ids ?>_designation {
    opacity: 1;
    width: 100%;
  }
  ul.wpm_6310_team_style_<?php echo $ids ?>_social {
    margin: 10px 0 0 !important;
    padding: 0 !important;
    list-style: none;
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
    margin-top: 4px;
    display: inline-block;
    -webkit-transition: all 0.5s ease 0s;
    -moz-transition: all 0.5s ease 0s;
    -ms-transition: all 0.5s ease 0s;
    -o-transition: all 0.5s ease 0s;
    transition: all 0.5s ease 0s;
    font-size: <?php echo ceil(($allStyle[26] + $allStyle[27]) / 4) ?>px;
    border-radius: <?php echo $allStyle[30] ?>%;
    -moz-border-radius: <?php echo $allStyle[30] ?>%;
    -webkit-border-radius: <?php echo $allStyle[30] ?>%;
    -o-border-radius: <?php echo $allStyle[30] ?>%;
    -ms-border-radius: <?php echo $allStyle[30] ?>%;
  }

  ul.wpm_6310_team_style_<?php echo $ids ?>_social li a:hover {
    box-shadow: none;
  }
</style>

<?php
include wpm_6310_plugin_url . "output/common-output-file.php";
wpm6310_common_output_css($ids);
?>