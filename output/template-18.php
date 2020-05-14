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
                    <div class="wpm_6310_team_style_<?php echo $ids ?>_pic">
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
                    </div>
                    <div class="wpm_6310_team_style_<?php echo $ids ?>_team_content">
                        <div class="wpm_6310_team_style_<?php echo $ids ?>_title"><?php echo wpm_6310_replace($value['name']) ?></div>
                        <div class="wpm_6310_team_style_<?php echo $ids ?>_designation"><?php echo wpm_6310_replace($value['designation']) ?></div>
                        <?php wpm_6310_readmore_activation($ids, $value['profile_details_type'], $allSlider[19]); ?>
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
                    </div>
                    <div class="wpm_6310_team_style_<?php echo $ids ?>_team_content">
                        <div class="wpm_6310_team_style_<?php echo $ids ?>_title"><?php echo wpm_6310_replace($value['name']) ?></div>
                        <div class="wpm_6310_team_style_<?php echo $ids ?>_designation"><?php echo wpm_6310_replace($value['designation']) ?></div>
                        <?php wpm_6310_readmore_activation($ids, $value['profile_details_type'], $allSlider[19]); ?>
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
                    </div>
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

    .wpm_6310_team_style_<?php echo $ids ?>_pic {
        position: relative;
        overflow: hidden;
        float: left;
        width: 100%;
        display: table;
    }

    .wpm_6310_team_style_<?php echo $ids ?>_pic:before {
        content: "";
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background: <?php echo $allStyle[7] ?>;
        opacity: 0;
        transition: all 0.3s ease 0s;
    }

    .wpm_6310_team_style_<?php echo $ids ?>_pic:after {
        content: "";
        width: 90%;
        height: 90%;
        position: absolute;
        top: 5%;
        left: 5%;
        border: 1px solid beige;
        background: <?php echo $allStyle[7] ?>;
        opacity: 0;
        transition: all 0.3s ease 0s;
    }

    .wpm_6310_team_style_<?php echo $ids ?>:hover .wpm_6310_team_style_<?php echo $ids ?>_pic:before,
    .wpm_6310_team_style_<?php echo $ids ?>:hover .wpm_6310_team_style_<?php echo $ids ?>_pic:after {
        opacity: .7;
    }

    .wpm_6310_team_style_<?php echo $ids ?>_pic img {
        width: 100%;
        height: auto;
        float: left;
    }

    ul.wpm_6310_team_style_<?php echo $ids ?>_social {
        width: 100%;
        list-style: none;
        padding: 0;
        margin: 0;
        position: absolute;
        bottom: 80px;
        left: 0;
        opacity: 0;
        z-index: 1;
        transition: all 0.3s ease 0s;
    }

    .wpm_6310_team_style_<?php echo $ids ?>:hover ul.wpm_6310_team_style_<?php echo $ids ?>_social {
        opacity: 1;
    }

    ul.wpm_6310_team_style_<?php echo $ids ?>_social li {
        display: inline-block;
        margin-right: 8px;
    }

    ul.wpm_6310_team_style_<?php echo $ids ?>_social li a {
        display: inline-block;
        font-size: <?php echo ceil(($allStyle[26] + $allStyle[27]) / 4) ?>px;
        border-radius: <?php echo $allStyle[30] ?>%;
        -moz-border-radius: <?php echo $allStyle[30] ?>%;
        -webkit-border-radius: <?php echo $allStyle[30] ?>%;
        -o-border-radius: <?php echo $allStyle[30] ?>%;
        -ms-border-radius: <?php echo $allStyle[30] ?>%;
        transition: all 0.5s ease 0s;
    }

    ul.wpm_6310_team_style_<?php echo $ids ?>_social li:last-child {
        margin-right: 0;
    }

    .wpm_6310_team_style_<?php echo $ids ?>_team_content {
        background: <?php echo $allStyle[10] ?>;
        display:block;
        float:left;
        width:100%;
    }

    .wpm_6310_team_style_<?php echo $ids ?>_title {
        margin-bottom: 8px;
        padding-bottom: 10px;
        font-size: <?php echo $allStyle[11] ?>px;
        color: <?php echo $allStyle[12] ?>;
        font-weight: <?php echo $allStyle[15] ?>;
        text-transform: <?php echo $allStyle[16]; ?>;
        font-family: <?php echo str_replace("+", " ", $allStyle[17]); ?>;
        line-height: <?php echo $allStyle[18] ?>px;

        transition: all 0.3s ease 0s;
        text-align:  <?php echo isset($allSlider[41])?$allSlider[41]:'center' ?>;
        margin-top: <?php echo isset($allSlider[42])?$allSlider[42]:'0' ?>px;
        margin-bottom: <?php echo isset($allSlider[43])?$allSlider[43]:'0' ?>px; 
        height: <?php echo $allStyle[18] ?>px;
    }

    .wpm_6310_team_style_<?php echo $ids ?>:hover .wpm_6310_team_style_<?php echo $ids ?>_title {
        background: white;
        color: black;
        border-left: 1px lightseagreen solid;
        border-right: 1px lightseagreen solid;
    }

    .wpm_6310_team_style_<?php echo $ids ?>_designation {
        font-size: <?php echo $allStyle[19] ?>px;
        color: <?php echo $allStyle[20] ?>;
        font-weight: <?php echo $allStyle[21] ?>;
        text-transform: <?php echo $allStyle[22] ?>;
        font-family: <?php echo str_replace("+", " ", $allStyle[23]); ?>;
        line-height: <?php echo $allStyle[24] ?>px;
        text-align:  <?php echo isset($allSlider[51])?$allSlider[51]:'center' ?>;
        margin-top: <?php echo isset($allSlider[52])?$allSlider[52]:'10' ?>px;
        margin-bottom: <?php echo isset($allSlider[53])?$allSlider[53]:'10' ?>px; 
        height: <?php echo $allStyle[24] ?>px; 
    }
</style>

<?php
include wpm_6310_plugin_url . "output/common-output-file.php";
wpm6310_common_output_css($ids);
?>