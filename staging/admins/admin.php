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
                $db_select = my_sql_select
              ?>
          </tbody>
      </table>
   </body>
</html>