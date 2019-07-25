<?php 
session_start();
    require 'includes/connection.php';
   global $conn;
   $limit = 30; 

if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
$start_from = ($page-1) * $limit;
    $query = "SELECT * FROM `posttable` WHERE status = 1 LIMIT $limit OFFSET $start_from";
       
        $blog = mysqli_query($conn,$query);
        global $blog;

require './includes/header.php'; ?>

        <div class="tm-top-a-box tm-full-width tm-box-bg-1 ">
            <div class="uk-container uk-container-center">
                <section id="tm-top-a" class="tm-top-a uk-grid uk-grid-collapse" data-uk-grid-match="{target:'> div > .uk-panel'}" data-uk-grid-margin="">
                    <div class="uk-width-1-1 uk-row-first">
                        <div class="uk-panel">
                            <div class="uk-cover-background uk-position-relative head-wrap" style="height: 290px; background-image: url('images/head-bg.jpg');">
                                <img class="uk-invisible" src="images/head-bg.jpg" alt="" height="290" width="1920">
                                <div class="uk-position-cover uk-flex uk-flex-center head-title">
                                    <h1>
                                        News
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>


        <div class="uk-container uk-container-center alt">
            <ul class="uk-breadcrumb">
                <li><a href="index">Home</a></li>
                <li class="uk-active"><span>News</span></li>
            </ul>
        </div>

        <div class="uk-container uk-container-center">
            <div id="tm-middle" class="tm-middle uk-grid" data-uk-grid-match="" data-uk-grid-margin="">
                <div style="left: 10px; width: 100%" class="tm-main uk-width-medium-3-4 uk-push-1-4">
                   
                    <div class="contentpaneopen">
                       <main id="tm-content" class="tm-content">
                            <div class="uk-grid" data-uk-grid-match="">

                            <?php 
     
                                if( mysqli_num_rows($blog) > 0 ) {
                                    
                                    // we have data!
                                    // output the data
        
                                  while( $row = mysqli_fetch_assoc($blog) ) {
                                        echo '
                                <div class="uk-width-large-1-3 uk-width-medium-2-4 uk-width-small-2-4 list-article uk-flex uk-flex-column">
                                    <div class="wrapper">
                                        <div class="img-wrap uk-flex-wrap-top">
                                            <a href="news-single?id=' . $row["b_id"] . '">
                                            <img src="admin/images/posts/' . $row["images"] . '" class="img-polaroid" alt="news">
                                            </a>        
                                        </div>
                                        <div class="info uk-flex-wrap-middle">
                                            <div class="date">
                                                ' . $row["time"] . '           
                                            </div>
                                            <div class="name">
                                                <h4>
                                                    <a href="news-single">
                                                    ' . $row["title"] . ' </a>      
                                                </h4>
                                            </div>
                                            <div class="text">
                                                <p>'.html_entity_decode($row["post"] ).'</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="article-actions uk-flex-wrap-bottom">
                                        <div class="count"><i class="uk-icon-calendar"></i><span>' . $row["time"] . '</span></div>
                                        <div class="read-more"><a href="news-single?id=' . $row["b_id"] . '">Read More</a></div>
                                    </div>
                                </div> ';
                                    }
                                 }
                            ?>



</div></main></div></div></div>


<?php  
$page = '';
if(isset($_GET['page'])){
    $page = mysqli_real_escape_string($conn,$_GET['page']);
}

 $pages = '';
$pages=$page;

$sql = "SELECT COUNT(b_id) FROM posttable";  
$rs_result = mysqli_query( $conn,$sql);  
$row = mysqli_fetch_row($rs_result);  
$total_records = $row[0];  
$total_pages = ceil($total_records / $limit);



echo "<br><div class='pagination'><ul class='pagination-list'>";

if($pages <= 1){
    echo "<li class='pagination-prev'><a href='javascript:void(0)'>Prev</a></li>";  
}else{
    echo "<li class='pagination-prev'><a href='news?page=".--$pages."' >Prev</a></li>";  
}

for ($i=1; $i<=$total_pages; $i++) {  
             echo "<li><a href='news?page=".$i."' class='pagenav'>".$i."</a></li>";  
};  

if($page == $total_records){
echo "<li class='pagination-next'><a href='javascript:void(0)'>Next</a></li></ul>";  

}else{
echo "<li class='pagination-next'><a href='news?page=".++$page."'>Next</a></li></ul>";  
}
?>


</div><br>
        </div>
</div>


       <?php require './includes/footer.php'; ?>