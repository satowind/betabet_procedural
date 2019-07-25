<?php session_start();

// if user is not logged in
if( !$_SESSION['loggedInAdmin'] ) {
    
    // send them to the login page
    header("Location: index");
}

// get ID sent by GET collection
$clientID = $_GET['id'];

// connect to database
include('includes/connection.php');
global $conn;
// include functions file
include('includes/functions.php');

// query the database with client ID
$query = "SELECT * FROM posttable WHERE b_id='$clientID'";
$result = mysqli_query( $conn, $query );

// if result is returned
if( mysqli_num_rows($result) > 0 ) {
    
    // we have data!
    // set some variables
    while( $row = mysqli_fetch_assoc($result) ) {
        $title     = $row['title'];
        $posts    = mysqli_real_escape_string($conn,$row['post']);
        $image    = $row['images'];
        $category     = $row['PostCategory'];
        $tag    = $row['tag'];
        $status    = $row['status'];
        $id =  $row['b_id'];


       
    }
} else { // no results returned
    $alertMessage = "<div class='alert alert-warning'>Nothing to see here. <a href='branch'>Head back</a>.</div>";
}

// if update button was submitted
if( isset($_POST['update']) ) {
    
    // set variables
   $status = $title = $post = $tag  = $images= "";
    
    // check to see if inputs are empty
    // create variables with form data
    // wrap the data with our function
   
    if( !$_POST["title"] ) {
        $titleError = "Please enter a title <br>";
    } else {
        $title = validateFormData( $_POST["title"] );
    }
     if( !$_POST["posts"] ) {
        $postError = "Please enter content <br>";
    } else {
        $post =mysqli_real_escape_string($conn, $_POST["posts"]);
    }

    if( !$_POST["status"] ) {
        $statusError = "Please choose status <br>";
    } else {
        $status = validateFormData( $_POST["status"] );
    }
//upload post image
//get image
$rawImage =  $_FILES['image'];
if($rawImage['error']===0){

$ext = pathinfo($rawImage['name'], PATHINFO_EXTENSION);
$imgName=null;
$tmpImgName=time().'.'.$ext;
if(move_uploaded_file($rawImage['tmp_name'],'images/posts/'.$tmpImgName)){
	$imgName = $tmpImgName;
}else {
	die('image upload failed');
}

}



  
  
    $tag=validateFormData( $_POST["tag"] );

     

		if(isset($_POST["categories"])) {
			$cat= $_POST["categories"] ;
			$categories;
		
		$i = 0;
		foreach($cat as $ca){
			if($i == 0){
				$categories = $ca;
			}
			$categories .= ",".$ca;
				
			$i++;
		}
		}else {
			$categories = 'uncategorized';
		}
		
	

    
    // new database query & result
    if( $title && $post && $status ) {
    $query = "UPDATE posttable
            SET title='{$title}',
            tag='{$tag}',
            PostCategory='{$categories}',
            post='{$post}',
            status='{$status}',
            images='{$imgName}'
            WHERE b_id='{$clientID}'";

   
    
    $result = mysqli_query( $conn, $query );
    
    if( $result ) {
        
        // redirect to client page with query string
        header("Location: blog?alert=updatesuccess");
    } else {
        echo "Error updating record: " . mysqli_error($conn); 
    }
}
}

// if delete button was submitted
if( isset($_POST['delete']) ) {
    
    $alertMessage = "<div class='alert alert-danger'>
                        <p>Are you sure you want to delete this FAQ? No take backs!</p><br>
                        <form action='". htmlspecialchars( $_SERVER["PHP_SELF"] ) ."?id=$clientID' method='post'>
                            <input type='submit' class='btn btn-danger btn-sm' name='confirm-delete' value='Yes, delete!'>
                            <a type='button' class='btn btn-default btn-sm' data-dismiss='alert'>Oops, no thanks!</a>
                        </form>
                    </div>";
    
}

// if confirm delete button was submitted
if( isset($_POST['confirm-delete']) ) {
    
    // new database query & result
    $query = "DELETE FROM posttable WHERE b_id='$clientID'";
    $result = mysqli_query( $conn, $query );
    
    if( $result ) {
        
        // redirect to client page with query string
        header("Location: blog?alert=deleted");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
    
}

// close the mysql connection
mysqli_close($conn);

include('includes/header.php');
?>


		
		<h1 class="margin-bottom">Add New Post</h1>
					<ol class="breadcrumb 2" >
								<li>
						<a href="index"><i class="fa-home"></i>Home</a>
					</li>
							
						<li class="active">
		
									<strong>Edit Blog</strong>
							</li>
							</ol>
					
		<br />
		
		<style>
		.ms-container .ms-list {
			width: 135px;
			height: 205px;
		}
		
		.post-save-changes {
			float: right;
		}
		
		@media screen and (max-width: 789px)
		{
			.post-save-changes {
				float: none;
				margin-bottom: 20px;
			}
		}
		</style>
		<?php echo isset($alertMessage) ? $alertMessage : ''; ?>
		<form enctype="multipart/form-data" name="register-form" class="nobottommargin" action="<?php echo  $_SERVER['PHP_SELF']."?id=".$id ; ?>" method="post" role="form">
			
			<!-- Title and Publish Buttons -->
			<div class="row">
				<div class="col-sm-2 post-save-changes">
					<button type="submit" class="btn btn-green btn-lg btn-block btn-icon" name="update">
						Update
						<i class="entypo-check"></i>
					</button>
				</div>
				<div class="col-sm-2 post-save-changes">
					<a href="blog" type="submit" class="btn btn-default btn-lg btn-block btn-icon" name="publish">
						Cancel
						<i class="entypo-check"></i>
					</a>
				</div>
				<div class="col-sm-2 post-save-changes">
					<button type="submit" class="btn btn-danger btn-lg btn-block btn-icon" name="delete">
						Delete
						<i class="entypo-check"></i>
					</button>
				</div>
				
				<div class="col-sm-10">
					<small class="text-danger">* <?php echo isset($titleError) ? $titleError : ''; ?></small>
					<input type="text" class="form-control input-lg" name="title" placeholder="Post title" value="<?php echo $title; ?>" />
				</div>
			</div>
			
			<br />
			
			<!-- WYSIWYG - Content Editor -->
			<div class="row">
				<div class="col-sm-12">
					<small class="text-danger">* <?php echo isset($postError) ? $postError : ''; ?></small>
					<textarea class="form-control wysihtml5" rows="18" data-stylesheet-url="assets/css/wysihtml5-color.css" name="posts" id="post_content" value=""><?php echo $posts; ?></textarea>
				</div>
			</div>
			
			<br />
			
			<!-- Metaboxes -->
			<div class="row">
				
				<!-- Metabox :: Publish Settings -->
				<div class="col-sm-4">
					
					<div class="panel panel-primary" data-collapsed="0">
				
						<div class="panel-heading">
							<div class="panel-title">
								Publish Settings
							</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							</div>
						</div>
						
						<div class="panel-body">
							
						
							<div class="checkbox checkbox-replace">
								<input type="checkbox"  checked name="facebook">
								<label><span style="color: blue; font-size: 30px" class="fa fa-facebook">  </span>Post In Facebook</label>
							</div>
							
							<br />

							<div class="checkbox checkbox-replace">
								<input type="checkbox"  checked name="twitter">
								<label><span style="color: blue; font-size: 30px;" class="fa fa-twitter">  </span>Post In Twitter</label>
							</div>
							
							<br />

							<div class="checkbox checkbox-replace">
								<input type="checkbox"  checked name="instagram">
								<label><span style="color: blue; font-size: 30px" class="fa fa-instagram">  </span>Post In Instagram</label>
							</div>
							
							<br />

							<div class="checkbox checkbox-replace">
								<input type="checkbox"  checked name="youtube">
								<label><span style="color: blue; font-size: 30px" class="fa fa-youtube">  </span>Post In Youtube</label>
							</div>
							
							<br />
							
							<div class="checkbox checkbox-replace">
								<input type="checkbox" id="chk-2" checked>
								<label>Stick this post</label>
							</div>
							
							<br />
					
							
							
							<p>Post Status</p>
							<small class="text-danger">* <?php echo isset($statusError) ? $statusError : ''; ?></small>
						
							<select style="visibility: inherit;" name="status" class="selectboxit">
								<optgroup label="Post Status">
									<option value="1" <?php if($status==1) echo "Selected"; ?>>Public</option>
									<option value="2" <?php if($status==2) echo "Selected"; ?>>Private</option>
								</optgroup>
							</select>
							
						</div>
					
					</div>
					
				</div>
				
				
				<!-- Metabox :: Featured Image -->
				<div class="col-sm-4">
					
					<div class="panel panel-primary" data-collapsed="0">
				
						<div class="panel-heading">
							<div class="panel-title">
								Featured Image
							</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							</div>
						</div>
						
						<div class="panel-body">
							
							<div class="fileinput fileinput-new" data-provides="fileinput">
								<div class="fileinput-new thumbnail" style="max-width: 310px; height: 160px;" data-trigger="fileinput">
									<img src="http://placehold.it/320x160" alt="...">
								</div>
								<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px"></div>
								<div>
									<span class="btn btn-white btn-file">
										<span class="fileinput-new">Select image</span>
										<span class="fileinput-exists">Change</span>
										<input name="image" value="<?php echo $image; ?>" type="file" name="..." accept="image/*">
									</span>
									<a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
								</div>
							</div>
							
						</div>
					
					</div>
					
				</div>
				
				
				<!-- Metabox :: Categories -->
				<div class="col-sm-4">
					
					<div class="panel panel-primary" data-collapsed="0">
				
						<div class="panel-heading">
							<div class="panel-title">
								Categories
							</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							</div>
						</div>
						
						<div class="panel-body">
							
							
							<select name="categories[]" multiple="multiple"  class="form-control multi-select">
								<option value="art">Art</option>
								<option value="entertainment" >Entertainment</option>
								<option value="sports">Sports</option>
								<option value="gaming">Gaming</option>
								<option value="abstraction">Abstraction</option>
								<option value="nature">Nature</option>
								<option value="summer">Summer</option>
								<option value="adventure">Adventures</option>
								<option value="movie">Movies</option>
								<option value="music">Music</option>
								<option value="technology">Technology</option>
							</select>
							
						</div>
					
					</div>
					
				</div>
				
				<div class="clear"></div>
				
				<!-- Metabox :: Tags -->
				<div class="col-sm-12">
					
					<div class="panel panel-primary" data-collapsed="0">
				
						<div class="panel-heading">
							<div class="panel-title">
								Tags
							</div>
							
							<div class="panel-options">
								<a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
							</div>
						</div>
						
						<div class="panel-body">
							
							<p>Add Post Tags</p>
							<input name="tag" type="text" value="<?php echo $tag; ?>" class="form-control tagsinput" />
							
						</div>
					
					</div>
					
				</div>
				
			</div>
			
		</form>
		<?php require 'includes/footer2.php'; ?>