<html>
    <head>
        <style>
        body{
            padding: 60px;
            margin: 0 auto;
        }
         
        #login{
           width: 300px;
           margin: 0 auto;
           padding: 20px;
           text-align:center; /*Text aligns center, if it is aligned left/right, it will not appear to be centered, but it is */
           border-radius: 20px;
           background: #d1d2d4;
           float: none;
        }
        
        #outer{
            width: 100%;
        }
        
        #pad1{
            margin-top: 1em;
            margin-bottom: 2em;
        }
        
        #pad2{
            margin-bottom: 2em;
        }
           
        </style>
    </head>
   <body>
      <?php
        include('../header.html');
        echo "<div id='outer'>
                <div id='login'>
                    <p id='pad1'>
                        <font size=5>
                        Admin Login </font> </p>
                    <p>
                     Username: <input type='text' name='username'> </p>
                    <p id='pad2'>
                     Password: <input type='password' name='password'> </p>
                    <p id='pad2'>
                     <input type='submit' name='Submit'></p>
                </div>
             </div";
      ?>
   </body>
</html>