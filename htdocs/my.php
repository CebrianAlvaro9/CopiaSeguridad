In Xampp the default page will redirect you to /Dashboard Folder because it is sending the header Location:http://localhost:80/Dashboard to browser and browser understands that and redirects it.

The answer by @Sumeet Gavhale is correct. And instead of C://Xampp/htdocs folder xampp use to host contents inside /htdocs folder so if you want to find C://Xampp/htdocs/index.php type localhost/index.php (but that will redirect you to /htdocs/Dashboard folder).

If you want to change the hosting folder you should edit the Apache http/https configuration file (but that depends on your OS and file system).

Note : The Default Page Word referred in second line of this answer means the document's name in the default documents in your Server (xampp in your case) (for eg: index.htm ,index.html , index.php etc). Will be loaded in your server and will be different in other's case (if they have done that) (index.php in first case (if not edited)).

Index.php Of Xampp's Source Code
<?php
if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
    $uri = 'https://';
} else {
    $uri = 'http://';
}
$uri .= $_SERVER['HTTP_HOST'];
header('Location: '.$uri.'/dashboard/');
exit; ?>