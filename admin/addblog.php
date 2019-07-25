<?php
if( isset( $_POST["publish"] ) ) {
   
   require 'includes/connection.php'; 
   require 'includes/functions.php';
   global $conn;
    // set all variables to empty by default
    $status = $title = $post = $tag  = $images= $tmpImgName= "";
    
    // check to see if inputs are empty
    // create variables with form data
    // wrap the data with our function
   
    if( !$_POST["post_title"] ) {
        $titleError = "Please enter a title <br>";
    } else {
        $title = validateFormData( $_POST["post_title"] );
    }
     if( !$_POST["post_content"] ) {
        $postError = "Please enter content <br>";
    } else {
        $post = mysqli_real_escape_string($conn,$_POST["post_content"] );
    }

    if( !$_POST["test"] ) {
        $statusError = "Please choose status <br>";
    } else {
        $status = validateFormData( $_POST["test"] );
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
  

function generate_postKey() {
	global $conn;
        $qry = "SELECT Nextval('post') as id";
        $result_set = mysqli_query($conn,$qry);
        $result = mysqli_fetch_array($result_set);
        return "post_".$result['id'];

    }

    $post_key = generate_postKey();
  
  
    $tag=validateFormData( $_POST["tag"] );

     $cat= $_POST["categories"] ;

		
		
	$categories = "";
		
		$i = 0;
		foreach($cat as $ca){
			if($i == 0){
				$categories = $ca;
			}
			$categories .= ",".$ca;
				
			$i++;
		}

    // check to see if each variable has data
    if( $title && $post && $status ) {
        $query = "INSERT INTO `posttable` (`postid`,`title`,`post`,`status`,`tag`,`PostCategory`,`images`)
        VALUES ('$post_key',  '$title','$post', '$status','$tag','$categories','$imgName')";

        if( mysqli_query( $conn, $query ) ) {
         header( "Location: blog?alert=success" );
           
        } else {
            echo "Error: ". $query . "<br>" . mysqli_error($conn);
        }
    }
    
}


 include './includes/header.php' ?>
		
		<h1 class="margin-bottom">Add New Post</h1>
					<ol class="breadcrumb 2" >
								<li>
						<a href="index"><i class="fa-home"></i>Home</a>
					</li>
							
						<li class="active">
		
									<strong>Add Blog</strong>
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
		
		<form enctype="multipart/form-data" name="register-form" class="nobottommargin" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post" role="form">
			
			<!-- Title and Publish Buttons -->
			<div class="row">
				<div class="col-sm-2 post-save-changes">
					<button type="submit" class="btn btn-green btn-lg btn-block btn-icon" name="publish">
						Publish
						<i class="entypo-check"></i>
					</button>
				</div>
				
				<div class="col-sm-10">
					<small class="text-danger">* <?php echo isset($titleError) ? $titleError : ''; ?></small>
					<input type="text" class="form-control input-lg" name="post_title" placeholder="Post title" />
				</div>
			</div>
			
			<br />
			
			<!-- WYSIWYG - Content Editor -->
			<div class="row">
				<div class="col-sm-12">
					<small class="text-danger">* <?php echo isset($postError) ? $postError : ''; ?></small>
					<textarea class="form-control wysihtml5" rows="18" data-stylesheet-url="assets/css/wysihtml5-color.css" name="post_content" id="post_content"></textarea>
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
					
							<!-- <p>Publish Date</p>
							<div class="input-group">
								<input type="text" class="form-control datepicker" value="Wed, 04 November 2015" data-format="D, dd MM yyyy">
								
								<div class="input-group-addon">
									<a href="#"><i class="entypo-calendar"></i></a>
								</div>
							</div>
								
							<br /> -->
							
							<p>Post Status</p>
							<small class="text-danger">* <?php echo isset($statusError) ? $statusError : ''; ?></small>
						
							<select style="visibility: inherit;" name="test" class="selectboxit">
								<optgroup label="Post Status">
									<option value="1">Publish</option>
									<option value="2" selected>Private</option>
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
										<input name="image" type="file" name="..." accept="image/*">
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
							<input name="tag" type="text" value="weekend,friday,happy,awesome,chill,healthy" class="form-control tagsinput" />
							
						</div>
					
					</div>
					
				</div>
				
			</div>
			
		</form>
		<?php require 'includes/footer2.php'; ?>