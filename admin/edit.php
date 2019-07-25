
<?php require 'includes/header.php'; ?>

<h1>View Post</h1>



<table class="table table-striped table-bordered">
    <tr>
        <th>Post Id</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Image</th>
        <th>Category</th>
        <th>Tag</th>
         <th>Status</th>
        <th>Edit</th>
    </tr>
    

    
    
           <tr>
            
         <td> 1</td><td>hi there</td><td>Lorem ipsum dolor sit amet...</td><td>wind</td><td>Post</td><td>Birthday</td><td>Public</td>
            
        <td><a href="#" type="button" class="btn btn-primary btn-sm">
                    <span class="glyphicon glyphicon-edit"></span>
                    </a></td>
            
        </tr>
 


    <tr>
        <td colspan="8"><div class="text-center"><a href="#" type="button" class="btn btn-sm btn-success"><span class="glyphicon glyphicon-plus"></span> Add Post</a></div></td>
    </tr>
</table>

<?php require 'includes/footer.php'; ?>