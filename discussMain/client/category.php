<select class="form-control" name="category" id="category">
    <option value="">Select A Category</option>
    <?php 
    include("./common/db.php");
    $query="select * from category";
    $result=$conn->query($query);
    foreach($result as $row){
        $name= ($row['name']); //ucfirst tu logaisu capital koribole
         $id= $row['id'];
       echo  "<option value=$id>$name</option>";
    }
    ?>
   
</select>  
