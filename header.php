$(function() {
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': CSRF_TOKEN
                }
            });
            $.ajax({

                type:'POST',

                url:'https://cambo-report.com/checkscreen',

                data:{
                    "_token": "7Pa3rPZjfNuR8MJ6S8FPCnr0381kY8q71P9J1plw",
                    "width":screen.width,
                    "height":screen.height},

                success:function(data){
                    if(data.status==false){
                        location.reload();
                    }

                }

            });
        });
    </script>
    
<link rel="stylesheet" href="https://cambo-report.com/assets/css/modal-video.min.css">

    <title>ទំព័រដើម | Cambo Report</title>