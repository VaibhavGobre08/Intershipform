<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>YCCE | Intership-form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css" src="style1.css">
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
  </head>
  <body>
   
    <h1 class="heading">Intership Form</h1>
   
    
  <div class="container">

  <div class="col-md-2">
    <label for="inputCity" class="form-label" onload="getDate()" id="date" value="today" >Today Date</label>
    <input type="date" class="form-control" id="inputCity">
  </div>

    <form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Name</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="regnumber" class="form-label">Regiter id</label>
    <input type="number" class="form-control" id="inputPassword4">
  </div>
  
  <div class="col-md-2">
    <label for="inputCity" class="form-label">Starting Date</label>
    <input type="date" class="form-control" id="inputCity">
  </div>
  <div class="col-md-2">
    <label for="inputCity" class="form-label">Ending Date</label>
    <input type="date" class="form-control" id="inputCity">
  </div>
  
  

  <table class="table table-border">
      <thead>
        <tr>
          <th>Name</th>
          <th>Regiter Number</th>
        </tr>
      </thead>
      <tbody id='student_tbody'>
        <tr>
          <td><input type="text" required name='name[]' class='form-control'></td>
          <td><input type="number" required name='register[]'  class='form-control reg'></td>
          <td><input type="button" value="X" id='close' class="btn-row-remove"></td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <td> <input type="button" value="Add Student" id='btn-add-row'> </td>
        </tr>
      <tfoot>
  </table>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Genarate PDF</button>
  </div>

</form>

  </div>
    
    <script>
      
    jQuery(document).ready(function($) {
    $("#btn-add-row").click(function () {
        var row ="<tr> <td><input type='text' required name='name[]' class='form-control'></td> <td><input type='number' required name='register[]'  class='form-control reg'></td> <td><input type='button' value='X' id='close' class='btn-row-remove'></td></tr>";
    $("#student_tbody").append(row);
    });

    $("body").on("click",".btn-row-remove", function () {
      
    if(confirm("Are you Sure!")) {
      $(this).closest("tr").remove();
    }
    });

    function getDate(){
    var today = new Date();
    document.getElementById("date").value = today.getFullYear() + '-' + ('0' + (today.getMonth() + 1)).slice(-2) + '-' + ('0' + today.getDate()).slice(-2);
     }

   });

   
    </script>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>