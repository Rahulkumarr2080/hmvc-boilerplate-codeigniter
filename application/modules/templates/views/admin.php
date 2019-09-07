<!DOCTYPE html>
<html>
<head>
    <title>Admin Panel</title>
</head>
<body>


    <?php
       if(isset($view_file))
       {
       $this->load->view($view_module.'/'.$view_file);
       }

    ?>
        
</body>
</html>
