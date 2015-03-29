    $(document).ready(function(){
        $(".button").hover(
        function()
        {
         $(this).children().html("&nbsp&nbsp&nbspвойти")
        },
        function()
        {
         $(this).children().html("получить");
        }
        );
        /*
        $(".button").hover(
        function()
        {
         $(this).html("<a href='http://getlucky.kg/auth/login/'>&nbsp&nbsp&nbspвойти</a>")
        },
        function()
        {
         $(this).html("<a href='http://getlucky.kg/auth/login/'>получить</a>");
        }
        );*/
        
    });