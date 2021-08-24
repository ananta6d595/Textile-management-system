   <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Send Message To Departments</title>  
           <link rel="stylesheet" href="bootstrap.min.css" />  
            <script type = "text/javascript" src="bootstrap.min.js"></script>  
            
            <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>


      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;"> 

                <form id="submit_form" method="post" >  
                     <label>Department:</label>  
                    <select style = "width:200px" name="department" id="dept" class="form-control">
                      <option value ="Administration">Administration</option>
                      <option value ="Sampling">Sampling</option>
                      <option value ="Merchandising">Merchandising</option>
                      <option value ="Sewing">Sewing</option>
                      <option value ="Finishing and Packaging">Finishing and Packaging</option>
                      <option value ="Maintenance">Maintenance</option>
                      <option value ="Finance and Accounting">Finance and Accounting</option>
                      <option value ="Human Resource">Human Resource</option>
                    </select>


                      <br>
                     <br />  
                     <label>Message:</label>  
                     <textarea name="message" id="message" class="form-control"></textarea>  
                     <br />  
                     <!--<input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" /> 
                     -->
                     <button class="btn btn-info" >SEND</button>
                     <br><br>
                     <p id="success_result"></p> 
                     
                </form>  
           </div>

 <script>

$("form").submit(function(e){
 // alert("B_prevent");
  e.preventDefault();
 // alert("A_prevent");

  $.post(  

    "insertmessageMan.php",
    {
          

      department: $("#dept").val(),
      message: $("#message").val()

    },
    function(result){
        if(result == "success"){
          $("#success_result").html("Message sent");
        }
        else{
          $("#success_result").html("Error! Not sent");
        }
      }
    );
});


  
  </script>
      </body>  
 </html>  
 