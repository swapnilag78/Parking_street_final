<?php
session_start();
error_reporting(0);
include('config.php');
if(isset($_POST["type"]))
{
 if($_POST["type"] == "sub_sub_category_data")
 {
  
   $_SESSION['var2']= $_POST["sub_sub_category_id"];
 
  
 }

 }

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Dynamic Dependent Searchable Select Box with PHP Ajax jQuery</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css">


<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>







<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>
-->

  </head>
  <body>
    <br />
    
      <h3 align="center">Dynamic Dependent Searchable Select Box with PHP Ajax jQuery</h3>
      <br />
      <div class="card">
        <div class="card-header-title">Select Data</div>
        <div class="card-body">
          <div class="form-group">
            <label>Select Category</label>
            <select name="category_item" id="category_item" class="form-control input-lg" data-live-search="true" title="Select Category">

            </select>
          </div>
          <div class="form-group">
            <label>Select Sub Category</label>
            <select name="sub_category_item" id="sub_category_item" class="form-control input-lg" data-live-search="true" title="Select Sub Category">

            </select>
          </div>
        </div>
      </div>
   


    <a href="cust_parking.php"> <button type="button" class="btn btn-success  pull-right"> Submit </button> </a>





    


    <script>
$(document).ready(function(){

  $('#category_item').selectpicker();

  $('#sub_category_item').selectpicker();

  load_data('category_data');

  function load_data(type, category_id = '')
  {
    $.ajax({
      url:"load_data.php",
      method:"POST",
      data:{type:type, category_id:category_id},
      dataType:"json",
      success:function(data)
      {
        var html = '';
        for(var count = 0; count < data.length; count++)
        {
          html += '<option value="'+data[count].id+'">'+data[count].name+'</option>';
        }
        if(type == 'category_data')
        {
          $('#category_item').html(html);
          $('#category_item').selectpicker('refresh');
        }
        else
        {
          $('#sub_category_item').html(html);
          $('#sub_category_item').selectpicker('refresh');
        }
      }
    })
  }

  function final (type, sub_sub_category_id = '')
  {
    $.ajax({
      url:"search.php",
      method:"POST",
      data:{type:type, sub_sub_category_id:sub_sub_category_id},
      dataType:"json",
     
    })
  }








  $(document).on('change', '#category_item', function(){
    var category_id = $('#category_item').val();
    load_data('sub_category_data', category_id);
  });

  $(document).on('change', '#sub_category_item', function(){
    var sub_sub_category_id = $('#sub_category_item').val();
    final('sub_sub_category_data', sub_sub_category_id);
  });





  
});
</script>












    
  </body>
</html>




