
  jQuery(document).ready(function(){
    jQuery(".wpm_6310_member_delete").on('click', function(){
      if (confirm("Do you want to delete this member?")) {
        var id = jQuery(this).attr("data-id");
        if(jQuery(this).hasClass('carousel')){        
          jQuery("span[data-id='"+id+"']").closest(".wpm-6310-owl-item").remove();
        }     
        else{
          jQuery("span[data-id='"+id+"']").closest(".wpm-6310-col-1").remove();
          jQuery("span[data-id='"+id+"']").closest(".wpm-6310-col-2").remove();
          jQuery("span[data-id='"+id+"']").closest(".wpm-6310-col-3").remove();
          jQuery("span[data-id='"+id+"']").closest(".wpm-6310-col-4").remove();
          jQuery("span[data-id='"+id+"']").closest(".wpm-6310-col-5").remove();
          jQuery("span[data-id='"+id+"']").closest(".wpm-6310-col-6").remove();
        } 
        var datas = {
          'action': 'wpm_6310_team_member_delete',
          'ids': id
        };
        jQuery("#wpm_6310_loading").show();
        jQuery("body").css({
          "overflow": "hidden"
        });

        jQuery.getJSON(ajaxurl, datas, function(data) {
          jQuery("#wpm_6310_loading").hide();
          jQuery(".wpm_6310_modal-content-msg").css({
             "animation-name": "wpm-animatetop"
          });
          jQuery("#mywpm_6310_modal_msg").show();
          jQuery("#wpm-msg").html("<b>Congratulations!</b><br />Member delete successfully.<br />");
        });
      }
    });

    jQuery("body").on("click", ".wpm-6310-close", function() {
      jQuery("#mywpm_6310_modal_msg").fadeOut(500);
      jQuery("body").css({
         "overflow": "initial"
      });
   });

   jQuery(window).click(function(event) {
      if (event.target == document.getElementById('mywpm_6310_modal_msg')) {
         jQuery("#mywpm_6310_modal_msg").fadeOut(500);
         jQuery("body").css({
            "overflow": "initial"
         });
      }
   });
  });
