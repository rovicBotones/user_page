<?php
 require('./session.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


<!--<link rel="stylesheet" href="style.css">-->

    <title>Home</title>
</head>

<body>
  <!--\
  include ("settings.php");
  $sql = "SELECT id, item_Name, item_Price, date from tbl_purchaseditem";
  $result = $conn-> query($sql);-->


  

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">HONCHO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
     
      <li class="nav-item">
   
        <a class="nav-link" href="#Donation">Donation Table</a>
      </li>
      <li class="nav-item">
   
        <a class="nav-link" href="#partition_fund">Partition of funds</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://mail.google.com/" target="_blank">E-mail</a>
      </li>
      <li class="nav navbar-nav navbar-right">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
     
    </ul>
 
    
</nav>

<div class="page-header header">
  <div class="container">
    <div class="row">
      <div class="col-md-12"> <div id="Donation" class="table-wrapper-scroll-y my-custom-scrollbar"><br><br><br><br>
<table class="table table-dark table-sm table-striped table-bordered">
<p>Donation Table</p>
  
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Week 1</th>
      <th scope="col">Week 2</th>
      <th scope="col">Week 3</th>
      <th scope="col">Week 4</th>
      <th scope="col">Total Donation of the Month</th>
      <th scope="col">Target Donation</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">January</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">February</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">March</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">April</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">May</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">June</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">July</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">August</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">September</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">October</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">November</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th scope="row">December</th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>

  </tbody>
</table>
</div>

    </div>
  </div></div>
   
</div>



<br><br><br>

<div class="section-reco" id="partition_fund">
  <div class="container">
    <div class="row">
      <div class="col-md"><iframe height="500px" width="1100px" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vRRF0PpJccshB3DQv1dFcdHbtuuXGmAZvYngMj_i1OVFBt0Xm1xOj77ixBXGD3x7wyLqBy40KvYQ85u/pubhtml?widget=true&amp;headers=false"></iframe>
        <button type="button" class="btn btn-light"><a href="https://docs.google.com/spreadsheets/d/1nkpvVHJxmP8QnVUNOKsFr3RaoW7nw9o1YLEDZ6W0rck/edit?usp=sharing" target="_blank">Edit Here</a></button>
      </div>
        
    </div>
  </div>
</div>

<br><br><br><br><br><br>
<footer id="sticky-footer" class="flex-shrink-0 py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small>Copyright &copy; Your Website</small>
    </div>
  </footer>



    


</body>
<script src="extensions/resizable/bootstrap-table-resizable.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>