$(document).ready(function(){
    /*
    --------------------------------------------
        success alert using ajax after success
    --------------------------------------------
    */
    const loader =  "<div id='demo-loader' style='position:absolute;left:-42px;top:6px;'><div class='spinner-grow spinner-grow-sm text-warning me-1'></div><div class='spinner-grow spinner-grow-sm text-danger'></div> </div>";

    $(".success-alert").on("click toutch", function (event) {
        event.preventDefault();
        var currentTag = $(this);
        var type = currentTag.attr("data-alert");
        var id = currentTag.attr("data-target");
        var action = currentTag.attr("data-action");
        var baseUrl = $(location).attr('origin');
        currentTag.css({
            "position":"relative"
        }).append(loader);

        setTimeout(function(){
            currentTag.children().filter('#demo-loader').remove('#demo-loader');
            if (type == "active") activeVideo(id,action,baseUrl);
            else if (type == "disabled") disabledVideo(id,action,baseUrl);
            else if (type == "delete")
            {
                
                if(confirm("are you sure delete this item"))
                {
                    deleteVideo(id,action,baseUrl);
                }
                    
            } 
            
        },5000);
        
   
        
    });
    function disabledVideo(id,action,baseUrl) {
        if(action == "video")
        {
           $.post(
                baseUrl+"/api/video/disabled",
                {id:id},
                function(res,status,xhr)
                {
                    if(status == 'success')
                        alertFunc('disabled');
                    else
                        alertFunc('warning');
                }
           );
        }
        
        
    }
    function deleteVideo(id,action,baseUrl) {
        if(action == "video")
        {
            $.post(
                baseUrl+"/api/video/delete",
                {id:id},
                function(res,status,xht)
                {
                    if(status == 'success')
                        alertFunc('delete');
                    else
                        alertFunc('warning');
                }

            );
        }
    }
    function activeVideo(id,action,baseUrl) {
        if(action == "video")
        {
            $.post(
                baseUrl+"/api/video/active",
                {id:id},
                function(res,status,xht)
                {
                    if(status == 'success')
                        alertFunc('active');
                    else
                        alertFunc('warning');
                }

            );
        }
        
    }
    function alertFunc(msg)
    {
        if(msg == "active" || msg == "disabled" || msg == "delete")
        {
            swal(msg+" this content",msg+" successfully","success").then(function(){
                setTimeout(function(){
                         loadPage();
                    },1)
            })
        }
        else{
            swal(msg+" ⚠️",msg+"Something is worng please try again","warning").then(function(){
                setTimeout(function(){
                         loadPage();
                    },1)
            })
        }
        
    }
    function loadPage()
    {
        $('body').load($(location).attr('href'));
        clearTimeout(loadPage);
    }
});