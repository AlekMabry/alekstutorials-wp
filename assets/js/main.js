$(document).ready(function(){
        $(".navigation-items").mouseenter(function() {
            var $childLinks = $(this).find("a");
            var $hoveredLink = $(this).find("[link-hovered]");
            $childLinks.css("color", "grey");
            $hoveredLink.css("color", "white");
        });

        $(".navigation-items").mouseleave(function() {
            $(".expanded-navigation-links a").css("color", "white");
        });

        $(".expanded-navigation-links li").mouseenter(function() {
            var $childLink = $(this).children("a");
            $childLink.css("color", "white");
            $childLink.attr("link-hovered", true);
            var navlinkUnderline = document.createElement("hr");
            navlinkUnderline.id = "navigation-link-underline";
            $childLink.after(navlinkUnderline);
        });

        $(".expanded-navigation-links li").mouseleave(function() {
            $("#navigation-link-underline").remove();
            var $childLink = $(this).children("a");
            $childLink.css("color", "grey");
            $childLink.removeAttr("link-hovered");
        });

        $(".hamburger-button").click(function() {
            if($(this).attr('hamburger-click-state') == 1) {
                $(this).attr('hamburger-click-state', 0);
                $(".hamburger-navigation-links").css("max-height", "0");
            }
            else {
                $(this).attr('hamburger-click-state', 1);
                var $navlinks = $(".hamburger-navigation-links")
                $navlinks.css("max-height", "calc(3em * "+$navlinks.children().length+")");
                $(this).css("animation", "anim-hamburger-button-dropdown");
            }
            $(this).toggleClass("hamburger-button-activated");
        })
});