<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/jquery.redirect.js"></script>
</head> 

<?php
    $code = $_POST["accessPass"];
    if($code == "moccaxpfn"){
        echo("Redirecting...");
    ?>
        <script>
            $.redirect( "https://pfngames.moccaanimation.com", { 'accesskey': "moccaxpfn"});
        </script>
    <?php
    }
    else {
        echo("Redirecting...");
        header('Location: https://moccaanimation.com');
    }

?>