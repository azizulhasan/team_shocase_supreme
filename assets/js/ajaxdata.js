jQuery(document).ready(function () {
   jQuery("body").on("click", ".open_in_new_tab_class", function () {
      if (jQuery(".open_in_new_tab_class").attr("target") == "_blank") {
         window.open(jQuery(this).attr("href"), '_blank').focus();
      } else {
         window.open(jQuery(this).attr("href"), '_parent').focus();
      }
      return false;
   });
   jQuery("body").on("click", ".wpm_6310_team_member_info", function () {
      var html = '<div id="mywpm_6310_modal" class="wpm_6310_modal">';
      html += '<div class="wpm_6310_modal-content">';
      html += '<span class="wpm-6310-close">&times;</span>';
      html += '<div class="wpm_6310_modal_body_picture">';
      html += '<img src="" id="wpm_6310_modal_img" />';
      html += '</div>';
      html += '<div class="wpm_6310_modal_body_content">';
      html += '<div id="wpm_6310_modal_designation"></div>';
      html += '<div id="wpm_6310_modal_name"></div>';
      html += '<div id="wpm_6310_modal_details"></div>';
      html += '<br><br>';
      html += '<div class="wpm_6310_modal_social"></div>';
      html += '</div>';
      html += '<br class="wpm_6310_clear" />';
      html += '</div>';
      html += '<br class="wpm-6310-clear" />';
      html += '</div>';
      jQuery("body").prepend(html);
	 
      var modalId = parseInt(jQuery(this).attr("team-id"));
      var linkId = parseInt(jQuery(this).attr("link-id"));
      if (linkId > 0) {
         if (jQuery(this).attr("target") == "1") {
            window.open(jQuery(this).attr("link-url"), '_blank').focus();
         } else {
            window.open(jQuery(this).attr("link-url"), '_parent').focus();
         }
      } else if (modalId > 0) {
         jQuery("#wpm_6310_loading").show();
         jQuery("body").css({
               "overflow": "hidden"
            });
         jQuery.ajax({
            type: "GET",
            dataType: "json",
            url: my_ajax_object.ajax_url,
            data: {action: "wpm_6310_team_member_details", 'ids': modalId},
            success: function (data) {
               jQuery("#wpm_6310_loading").hide();
               jQuery(".wpm_6310_modal-content").css({
                  "animation-name": "wpm-animate" + data['styledata']['effect']
               });
               jQuery("#mywpm_6310_modal").show();
               jQuery("#wpm_6310_modal_img").attr("src", data['styledata']['image']);
               jQuery("#wpm_6310_modal_designation").text(data['styledata']['designation']);
               jQuery("#wpm_6310_modal_name").text(data['styledata']['name']);
               jQuery(".wpm_6310_modal_social").html("");

               jQuery(".wpm_6310_modal_social").append(data['link']);

               jQuery("#wpm_6310_modal_details").html(data['styledata']['profile_details'].replace(/\n/g, "<br>"));
            }
         });
      }
   });

   jQuery("body").on("click", ".wpm_6310_team_style_readmore", function () {
      var html = '<div id="mywpm_6310_modal" class="wpm_6310_modal">';
      html += '<div class="wpm_6310_modal-content">';
      html += '<span class="wpm-6310-close">&times;</span>';
      html += '<div class="wpm_6310_modal_body_picture">';
      html += '<img src="" id="wpm_6310_modal_img" />';
      html += '</div>';
      html += '<div class="wpm_6310_modal_body_content">';
      html += '<div id="wpm_6310_modal_designation"></div>';
      html += '<div id="wpm_6310_modal_name"></div>';
      html += '<div id="wpm_6310_modal_details"></div>';
      html += '<br><br>';
      html += '<div class="wpm_6310_modal_social"></div>';
      html += '</div>';
      html += '<br class="wpm_6310_clear" />';
      html += '</div>';
      html += '<br class="wpm-6310-clear" />';
      html += '</div>';
      jQuery("body").prepend(html);
	 
      var modalId = parseInt(jQuery(this).closest('.wpm_6310_team_member_info_readmore').attr("team-id"));
      var linkId = parseInt(jQuery(this).closest('.wpm_6310_team_member_info_readmore').attr("link-id"));
      var target = parseInt(jQuery(this).closest('.wpm_6310_team_member_info_readmore').attr("target"));
      var linkURL = jQuery(this).closest('.wpm_6310_team_member_info_readmore').attr("link-url");

      if (linkId > 0) {
         if (target == "1") {
            window.open(linkURL, '_blank').focus();
         } else {
            window.open(linkURL, '_parent').focus();
         }
      } else if (modalId > 0) {
         jQuery("#wpm_6310_loading").show();
         jQuery("body").css({
               "overflow": "hidden"
            });
         jQuery.ajax({
            type: "GET",
            dataType: "json",
            url: my_ajax_object.ajax_url,
            data: {action: "wpm_6310_team_member_details", 'ids': modalId},
            success: function (data) {
               jQuery("#wpm_6310_loading").hide();
               jQuery(".wpm_6310_modal-content").css({
                  "animation-name": "wpm-animate" + data['styledata']['effect']
               });
               jQuery("#mywpm_6310_modal").show();
               jQuery("#wpm_6310_modal_img").attr("src", data['styledata']['image']);
               jQuery("#wpm_6310_modal_designation").text(data['styledata']['designation']);
               jQuery("#wpm_6310_modal_name").text(data['styledata']['name']);
               jQuery(".wpm_6310_modal_social").html("");

               jQuery(".wpm_6310_modal_social").append(data['link']);

               jQuery("#wpm_6310_modal_details").html(data['styledata']['profile_details'].replace(/\n/g, "<br>"));
            }
         });
      }
   });
});
