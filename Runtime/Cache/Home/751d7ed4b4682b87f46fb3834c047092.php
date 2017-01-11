<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html >
   <head>
      <link href="/TP3.2.3pykj/Public/bt/bootstrap.min.css" rel="stylesheet">
      <link href="/TP3.2.3pykj/Public/bt/font-awesome.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" media="all" href="/TP3.2.3pykj/Public/bt/daterangepicker-bs3.css" />
      <script type="text/javascript" src="/TP3.2.3pykj/Public/bt/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="/TP3.2.3pykj/Public/bt/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="/TP3.2.3pykj/Public/bt/moment.js"></script>
      <script type="text/javascript" src="/TP3.2.3pykj/Public/bt/daterangepicker.js"></script>
   </head>
   <body>


     <form class="form-horizontal">
        <div class="control-group">
          <div class="controls">
           <div class="input-prepend input-group">
             <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span><input type="text" readonly style="width: 200px" name="reservation" id="reservation" class="form-control" value="2014-5-21 - 2014-6-21" /> 
           </div>
          </div>
        </div>
     </form>

     <script type="text/javascript">
     $(document).ready(function() {
        $('#reservation').daterangepicker(null, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
     });
     </script>

   </body>
</html>