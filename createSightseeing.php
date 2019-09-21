
<!DOCTYPE html>
<html>
  <head>
    <title>Add new Sightseeing Place</title>
    <meta charset='utf-8'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type= "text/css">
       fieldset {
          margin: auto;
          margin-top: 50px;
          width: 50%;
       }
       input {
          width: 400px;
       }
    </style>
  </head>

  <body>

  <fieldset>
    <h1 class="text-info">Add New Sightseeing Place</h1>

    <form action="actions/a_createSightseeing.php" method= "post">
        <table class="table">
          <tr>
               <th>Name</th>
               <td><input  type="text" name="sightseeing_name"  placeholder="Add name" /></td>
           </tr>   
           <tr>
               <th>Image URL</th>
               <td><input  type="url" name="sightseeing_image"  placeholder="Add image as html link" /></td>
           </tr>    
           <tr>
               <th>Type</th>
               <td><input  type="text" name="sightseeing_type"  placeholder="#park #church #museum #..." /></td>
           </tr>
           <tr>
               <th>Description</th>
               <td><input  type="text" name="sightseeing_description"  placeholder="Add description" /></td>
           </tr>
           <tr>
               <th>Address</th>
               <td><input  type="text" name="sightseeing_address"  placeholder="Street 55, 5500 City" /></td>
           </tr>
           <tr>
               <th>Website</th>
               <td><input  type="url" name="sightseeing_web"  placeholder="Add website" /></td>
           </tr>
           <tr>
               <td><button type ="submit" class="btn btn-info m-2" name="insertButton">Create</button></td>
               <td><a href= "home.php"><button type="button" class="btn btn-info m-2">Home</button></a></td>
           </tr>
       </table>
    </form>

  </fieldset>

  </body>
</html>