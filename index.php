
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=0.1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="7Pa3rPZjfNuR8MJ6S8FPCnr0381kY8q71P9J1plw" />
    <link rel="SHORTCUT ICON" rel="stylesheet" href="https://cambo-report.com/assets/img/cambonew.ico" type="image/x-icon">
        <link rel="stylesheet" href="https://cambo-report.com/assets/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cambo-report.com/assets/font/web-fonts-with-css/css/all.min.css">
    <link rel="stylesheet" href="https://cambo-report.com/assets/css/app.css">
    <link rel="stylesheet" href="https://cambo-report.com/assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.0.0/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.0.0/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cambo-report.com/assets/js/jquery-3.3.1.min.js"></script>
    <script>
 
 <?php require_once('header.php'); ?>
</head>


<body id="main-body">

    <div class="home-header">
        <!-- banner -->
        
            
        
        <!-- nav -->
        <?php require_once('Nav.php'); ?>
        
        <?php require_once('main.php'); ?>

        <?php require_once('footer.php'); ?>




    <a href="#" class="scrollToTop btn" style="display: block;">
        <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script src="https://cambo-report.com/assets/js/popper.min.js"></script>
    <script src="https://cambo-report.com/assets/js/bootstrap.min.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.0.0/js/bootstrap-datetimepicker.min.js"></script>

    <script>
        // var socket = io('https://cambo.kravanh.com:6001',{secure:true,reconnect: true,rejectUnauthorized : false});
        $('#btnsearch').click(function() {
            var compare = document.getElementById('search').value;
            var link = "https://cambo-report.com/search";
            if (compare != null) {
                link += "/" + compare;
            }
            window.location.href = link;
        });
        $('#search').keyup(function(e) {
            if (e.keyCode == 13) {
                var compare = $(this).val();
                var link = "https://cambo-report.com/search";
                if (compare != null) {
                    link += "/" + compare;
                }
                window.location.href = link;
            }
        });
        $(function() {
            var div = $("#sidebar");
            $(window).scroll(function() {
                var scroll = $(window).scrollTop();

                if (scroll >= 200) {
                    div.addClass("sticky-top");
                } else {
                    div.removeClass("sticky-top").addClass('');
                }
            });
        });

        $('#search').focusin(function() {
            document.getElementById('img-cambo').classList.add("d-none");
        });

        $('#search').focusout(function() {
            document.getElementById('img-cambo').className = "";
        });
    </script>
    <script>
        $(document).ready(function() {
            //Check to see if the window is top if not then display button
            $(window).scroll(function() {
                if ($(this).scrollTop() > 200) {
                    $('.scrollToTop').fadeIn(200);
                } else {
                    $('.scrollToTop').fadeOut(200);
                }
            });

            //Click event to scroll to top
            $('.scrollToTop').click(function() {
                $('html, body').animate({
                    scrollTop: 0
                }, 800);
                return false;
            });

            // search remove
            $("#searchbox-close").click(function() {
                $("#navbarSearch").removeClass("show");
            });

            // sticky-menu
            $(function() {
                var div = $(".home-nav");
                $(window).scroll(function() {    
                    var scroll = $(window).scrollTop();
    
                if (scroll >= 200) {
                    div.removeClass('header').addClass("fixed-top");
                } else {
                    div.removeClass("fixed-top").addClass('header');
                }
                });
            });
        });
    </script>

    
        
        
            
            
            
            
                
                
                    
                    
                    
                    
                        
                        
                            
                        
                    
                
            

            
                
                
                    
                        
                        
                        
                        
                            
                            
                                
                                
                            
                            
                            
                            
                        
                    
                
            
        

    
    <script>
        $('input').focus(function (event) {
            $(this).closest('.form-group').addClass('float').addClass('focus');
        })

        $('input').blur(function () {
            $(this).closest('.form-group').removeClass('focus');

            if (!$(this).val()) {
                $(this).closest('.form-group').removeClass('float');
            }
        });
        $("body").on("contextmenu", "img", function(e) {
            return false;
        });
    </script>
        <script src="https://cambo-report.com/assets/js/jquery-modal-video.min.js"></script>
    <script>
        var time=5;
        var limittime=1000;
        var pause=true;
        var first=true;
        $('#modalpopup').modal('show');

        $('#timer_play').click(function(){
            pause=true;
            first=false;
        });

        $('#timer_pause').click(function(){
            pause=false;
            first=false;
        });

        setInterval(function() {
            if(pause || first){
                if(time>0){
                    time--;
                    document.getElementById('timer').innerText=time;
                }
                else
                    $('#modalpopup').modal('hide');
            }
        }, 1000);
    </script>
    <script>
        var page=1;
        $('#btnaddmore').click(function(){
            var link="https://cambo-report.com/api/homepageaddmore";
            link+="/"+page;
            document.getElementById('loader').className="loader";
            document.getElementById('readmore').className="read-more text-center r-hide";
            $.ajax({
                url:link,
                method:"GET",
                data:{},
                success:function(data){
                    page++;
                    document.getElementById('readmore').insertAdjacentHTML('beforebegin',data);
                    document.getElementById('loader').className="";
                    document.getElementById('readmore').className="read-more text-center";
                }
            });
        });

        // Video playlist
        $(".js-video-button").modalVideo({
			youtube:{
				controls:0,
				nocookie: true
			}
		});

        $(".depo-video").click(function(){
            document.body.classList.add("Open");
        });

        $('.cus-play').click(function () {
            $("#main-body").removeClass('close_main');
            $("#main-body").addClass('open_main');
        });

        $('.modal-video-body').click(function () {
            closeModalIndex();
        });

        function closeModalIndex() {
            $("#main-body").removeClass('open_main');
            $("#main-body").addClass('close_main');
        }

    </script>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v4.0"></script>
</body>

</html>