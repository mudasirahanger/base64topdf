<?php

// Defining variables
$base64 = "";
 
// Checking for a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $base64 = $_POST["base64"];
 
}

?>

<html>
    <body>
        <center>
            <h2>BASE64 Decode to PDF</h2>
        
        <?php if(!empty($base64)) { ?>
         <iframe src="data:application/pdf;base64,<?php echo $base64;?>" width="1000" height="600"></iframe>
         <br>
         <br>
        <?php } ?>

        <form action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF "]);?>"  method="POST">
          <textarea type="text" name="base64" placeholder="Paste Base64 String Here" rows="6" cols="50"></textarea> <br><br><br>
           <button type="submit">SUBMIT</button>
        </form>

          <i>
            this is simple base64 decode to pdf generator written in plain php & plain html, no css, no js <br>
            Version 1.0.0 | Author mudasirahanger | php v7.4
          </i>
        </center>

    </body>
</html>