<?php
$styleTemplate = 27;
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
                    ?>
                    <div class="wpm_6310_team_style_<?php echo $ids ?>_team_content">
                        <div class="wpm_6310_team_style_<?php echo $ids ?>_title"><?php echo wpm_6310_replace($value['name']) ?></div>
                        <div class="wpm_6310_team_style_<?php echo $ids ?>_designation"><?php echo wpm_6310_replace($value['designation']) ?></div>
                        <?php  wpm_6310_readmore_activation($ids, $value['profile_details_type'], $allSlider[19]); ?>
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
            <div class="wpm-6310-item  wpm-6310-category-filter <?php echo $value['category']; ?>">
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
            if ($col % $allStyle[0] == 1) {
                echo "<div class='wpm-6310-row'>";
            }
        ?>
            <div class="wpm-6310-item-<?php echo $ids; ?> wpm-6310-item wpm-6310-category-filter <?php echo $value['category']; ?>">
                <div<?php echo $link_type ?>>
                    <img src="<?php echo $value['image'] ?>" class="img-responsive <?php echo $allStyle[1] ?>" alt="<?php echo wpm_6310_replace($value['name']) ?>">
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
                    ?>
                    <div class="wpm_6310_team_style_<?php echo $ids ?>_team_content">
                        <div class="wpm_6310_team_style_<?php echo $ids ?>_title"><?php echo wpm_6310_replace($value['name']) ?></div>
                        <div class="wpm_6310_team_style_<?php echo $ids ?>_designation"><?php echo wpm_6310_replace($value['designation']) ?></div>
                        <?php  wpm_6310_readmore_activation($ids, $value['profile_details_type'], $allSlider[19]); ?>
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
    }
    .wpm_6310_team_style_<?php echo $ids ?>img {
        width: 100%;
        height: auto;
        float: left;
        overflow: hidden;
    }
    .wpm_6310_team_style_<?php echo $ids ?>_social {
        width: 100%;
        text-align: center;
        list-style: none;
        padding: 10px 0 5px;
        margin: 0;
        background-color: <?php echo $allStyle[7] ?>;
        position: absolute;
        bottom: 50%;
        left: 0;
        opacity: 0;
        z-index: 1;
        transition: all 1s ease 0s;
    }
    .wpm_6310_team_style_<?php echo $ids ?>:hover .wpm_6310_team_style_<?php echo $ids ?>_social {
        background-color: <?php echo $allStyle[7] ?>;
        opacity: 1;
        bottom: <?php echo (($allStyle[18]+$allStyle[24]+$allSlider[20]+$allSlider[42]+$allSlider[43]+$allSlider[52]+$allSlider[53]+$allSlider[34]+$allSlider[35]+4));?>px;
    }
    .wpm_6310_team_style_<?php echo $ids ?>_social li {
        display: inline-block;
        margin-right: 10px;
    }
    .wpm_6310_team_style_<?php echo $ids ?>_social li:last-child {
        margin-right: 0;
    }
    .wpm_6310_team_style_<?php echo $ids ?>_social li a {
        display: block;
        font-size: <?php echo ceil(($allStyle[26] + $allStyle[27]) / 4) ?>px;
        border-radius: <?php echo $allStyle[30] ?>%;
        -moz-border-radius: <?php echo $allStyle[30] ?>%;
        -webkit-border-radius: <?php echo $allStyle[30] ?>%;
        -o-border-radius: <?php echo $allStyle[30] ?>%;
        -ms-border-radius: <?php echo $allStyle[30] ?>%;
        transition: all 0.5s ease 0s;
    }
    .wpm_6310_team_style_<?php echo $ids ?>_team_content {
        width: 100%;
        background: <?php echo $allStyle[7] ?>;
        color: #fff;
        text-align: center;
        padding: 0;
        position: absolute;
        bottom: 0;
        left: 0;
    }
    .wpm_6310_team_style_<?php echo $ids ?>_title {
        font-size: <?php echo $allStyle[11] ?>px;
        color: <?php echo $allStyle[12] ?>;
        font-weight: <?php echo $allStyle[15] ?>;
        text-transform: <?php echo $allStyle[16]; ?>;
        font-family: <?php echo str_replace("+", " ", $allStyle[17]); ?>;
        line-height: <?php echo $allStyle[18] ?>px;
        text-align:  <?php echo isset($allSlider[41])?$allSlider[41]:'center' ?>;
        margin-top: <?php echo isset($allSlider[42])?$allSlider[42]:'15' ?>px;
        margin-bottom: <?php echo isset($allSlider[43])?$allSlider[43]:'0' ?>px; 
        height: <?php echo $allStyle[18] ?>px;   
    }
    .wpm_6310_team_style_<?php echo $ids ?>_designation {
        display: inline-block;
        font-size: <?php echo $allStyle[19] ?>px;
        color: <?php echo $allStyle[20] ?>;
        font-weight: <?php echo $allStyle[21] ?>;
        text-transform: <?php echo $allStyle[22] ?>;
        font-family: <?php echo str_replace("+", " ", $allStyle[23]); ?>;
        line-height: <?php echo $allStyle[24] ?>px;
        text-align:  <?php echo isset($allSlider[51])?$allSlider[51]:'center' ?>;
        margin-top: <?php echo isset($allSlider[52])?$allSlider[52]:'5' ?>px;
        margin-bottom: <?php echo isset($allSlider[53])?$allSlider[53]:'10' ?>px; 
        height: <?php echo $allStyle[24] ?>px;  
    }
    ul.wpm_6310_team_style_<?php echo $ids ?>_social {
        list-style: none !important;
    }
    ul.wpm_6310_team_style_<?php echo $ids ?>_social li {
        display: inline-block !important;
        padding: 0 !important;
    }
    ul.wpm_6310_team_style_<?php echo $ids ?>_social li a {
        display: inline-block !important;
        box-shadow: none !important;
        text-decoration: none !important;
        padding: 0 !important;
        margin: 0 !important;
    }
    ul.wpm_6310_team_style_<?php echo $ids ?>_social li a:hover {
        box-shadow: none !important;
        text-decoration: none !important;
    }
</style>
<?php
include wpm_6310_plugin_url . "output/common-output-file.php";
?>