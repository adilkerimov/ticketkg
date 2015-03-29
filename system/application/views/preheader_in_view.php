<!DOCTYPE html>
<html lang="ru-RU">
<head>
	<meta charset="UTF-8">
	<title>Get Lucky - получи свой приз бесплатно!</title>
    <script language="javascript" src="<?=base_url();?>js/jquery-1.10.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="<?=base_url();?>js/jquery.scrollbar.min.js"></script>
    <script language="javascript" src="<?=base_url();?>js/jquery.countdown.min.js" type="text/javascript"></script>
    <script language="javascript" src="<?=base_url();?>js/jquery.countdown-ru.js" type="text/javascript"></script>
    
    <script type="text/javascript">

            function initCustomScrollbar(){
                $('.scroll-standard').scrollbar();

                $('.scroll-simple').scrollbar({
                    "type": "simple"
                });

                $('.external-scroll').scrollbar({
                    "autoScrollSize": false,
                    "scrollx": $('.external-scroll_x'),
                    "scrolly": $('.external-scroll_y')
                });

//                $('.content').add('h2').add('.buttons').add('.content-container').hide();
//
//                $('#test-webkit-2, #test-webkit').prev().show().end().show().scrollbar({
//                    "type": "simple"
//                });
            }

            function destroyCustomScrollbar(){
                $('.scroll-content').scrollbar('destroy');
            }

            $(document).ready(function(){
                initCustomScrollbar();

                $('.buttons').each(function(){
                    $(this).find('input.default').attr('checked', true);
                }).find('input:radio').change(function(){
                    $(this).closest('form').next().find('.resizable').css($(this).attr('name'), $(this).val());
                });

            });
        </script>
    <link href="<?=base_url();?>styles/style.css" rel="stylesheet" type="text/css" />
    <link type="text/css" href="<?=base_url();?>styles/jquery.scrollbar.css" rel="stylesheet" media="all" />
    <link href="<?=base_url();?>img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
</head>
<body>