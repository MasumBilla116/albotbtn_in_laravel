$(document).ready(function(){
    /*
    ------------------------------------
        read more and less more
    ------------------------------------
    */
    $(".btn-learn-more").on("click", function (event) {
        var childrenTag = $(this).siblings().filter("p").children();
        var text = "";
        if($(this).html() == 'Read more')
            text = "Read less";
        else
            text = "Read more";

        childrenTag.filter(".read-more").toggle();
        childrenTag.filter(".read-less").toggle();
        $(this).html(text);
    });
    /*
    ---------------------------------
        Video file reader controller
    ---------------------------------
    */
    $(".reader").on("change toutch", function (event) {
        var reader = new FileReader();
        var view = $(this).attr("data-view");
        reader.onload = function (event) {
            $(view).attr("src", event.target.result);
        };
        reader.readAsDataURL(event.target.files[0]);
    });

     /*
    ------------------------------------
        body and aside bg-color change
    ------------------------------------
    */
   $(".pass-eye").on("click toutch",function(event){
        event.preventDefault();
        var target = $(this).siblings().filter("input[type=password],input[type=text]") ;
        $(this).children().filter("i").toggleClass("fa-eye-slash fa-eye");
        if(target.attr("type") == "password")
        target.attr("type","text");
        else
        target.attr("type",'password');
        
    });
});