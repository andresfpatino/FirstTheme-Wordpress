  $(document).scroll(function () {
        var y = $(this).scrollTop();
        if (y > 120) {
            $('header nav.menu').addClass( "fix-menu" );
            $('.logo-menu').removeClass("hidden");

        } else {
            $('header nav.menu').removeClass("fix-menu");
             $('.logo-menu').addClass("hidden");
        }

    });

