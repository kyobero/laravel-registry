<!DOCTYPE html>
<html>

   <head>
      <title>Password Input Control</title>
   </head>
	
   <body>
      <form method="POST" action="/verify_lands" >
      @csrf
         Land_title : <input type = "string" name = "Land_title" />
         <br>
         Land_interest: <input type = "string" name = "Land_interest" />
         <br>
         Allocation_no: <input type = "string" name = "Allocation_no" />
         <input type = "submit" name = "submit" value = "Submit" />
      </form>

      
   </body>
	
</html>