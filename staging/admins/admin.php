<html>
    <head>
        <style>
        body{
            padding: 60px;
            margin: 0 auto;
        }
         
        #menu{
           width: 200px;
           margin: 5;
           padding: 20px;
           text-align: left;
           border-radius: 20px;
           background: #d1d2d4;
           float: none;
        }
        
        #subs{
            width: 500px;
            margin: 5;
        }
           
        </style>
    </head>
   <body>
      <?php
        include('../headerAdmin.html');
      ?>
      <div id="menu">
          <ul>
              <li><a href="#"><font color="black">Users Database</font></a></li>
              <li><a href="#"><font color="black">Submissions Database</font></a></li>
          </ul>
      </div>
      <table id="subs">
          <thead>
              <tr>
                  <td>ID</td>
                  <td>Title</td>
                  <td>Description</td>
                  <td>Suggestions</td>
                  <td>Rating</td>
              </tr>
          </thead>
          <tbody>
              
                
        <?php
            $servername = "localhost";
            $username = "vjoseph2";
            $password = "";
            $dbname = "users";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            
            $sql = "SELECT u_id, username, password FROM users";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "id: " . $row["u_id"]. " - Username: " . $row["username"]. " " . $row["password"]. "<br>";
                }
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
              
          </tbody>
      </table>
   </body>
</html>