$(document).ready(function () {

    function search()
    {

        var title = $("#search").val();

        if (title != "")
        {
            //$("#result").html("<img alt="ajax search" src='ajax-loader.gif'/>");
            $.ajax({
                        type: "post",
                        url: "search",
                        data: "title=" + title,
                        dataType : "json",
                        success: function (data)
                        {
                            $("#results").html(data);
                            $("#search").val("");
                        }
                    });
        }
    }

    $("#button").click(function () {
        search();
    });

    $('#search').keyup(function (e) {
        if (e.keyCode == 13) {
            search();
        }
    });

    $(function () {
        $(".datepicker").datepicker();
    });

});
