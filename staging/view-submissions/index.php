<?php 
include('../header.html');
include('../connect.php');
?>
<html>
    <script>
        $(document).ready(function(){

        });
    </script>
    
    <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>-->
    
    <!-- Modal -->
    <!--<div id="myModal" class="modal fade" role="dialog">-->
    <!--  <div class="modal-dialog">-->
    
        <!-- Modal content-->
    <!--    <div class="modal-content">-->
    <!--      <div class="modal-header">-->
    <!--        <button type="button" class="close" data-dismiss="modal">&times;</button>-->
    <!--        <h4 class="modal-title">Hey! Looks like someone else was thinking the same thing...</h4>-->
    <!--      </div>-->
    <!--      <div class="modal-body">-->
    <!--        <p>Want to build off of theirs, or continue your own?</p>-->
    <!--      </div>-->
    <!--      <div class="modal-footer">-->
    <!--        <button type="button" class="btn btn-danger" data-dismiss="modal">No thanks, I'll continue my own</button>-->
    <!--        <button type="button" class="btn btn-primary" data-dismiss="modal">Sure! Let's see their idea</button>-->
    <!--      </div>-->
    <!--    </div>-->
    
    <!--  </div>-->
    <!--</div>-->
    <br><br><br><br>
    <div class="container">
  <div class="jumbotron">
    <h2>Search for ideas relating to your idea: </h2> 
    <form class="form" method="POST" action="search.php">
        <input type="text" name="search" placeholder="search..."> <input type="submit" value="Search">
    </form>
  </div>
</div>

</html>