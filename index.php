<?php
if (!isset($_GET["menu_id"])) 
{
    $content = '
    <div id="post"></div>';
include ("trybs_template1.php");
}
?>
<script>
$(document).ready(function()
{
$.ajax(
    {
    type: "GET",
    url: "control/select_control2.php",
    dataType: 'json',

    success: function(a) 
    {
    var r="";
    for(var b in a)
        {
            r += 
            "<h2><a href='index.php?menu_id="+a[b].menu_id+"'>"+a[b].name+"</a></h2>"+
	        "<h5>"+a[b].published+"</h5>"+
            "<p>"+a[b].content+"</p>";
        }
    $(r).appendTo("#post");
    }
    });
});

</script>
