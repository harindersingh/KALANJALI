<?php

session_destroy();

echo '<html>
<script>
if(confirm("Successfully Registered !! See you at the event :)   Checkout our Gallery ! ^_^ ") )
{
    document.location="gallery.html";
}
else
document.location="index.html";
</script>


</html>
'
?>