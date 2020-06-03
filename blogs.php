<?php 
    include("conn.php");
  $sql = "select * from Blogs order by time desc";
//to execute the sql query
$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

  while($row = mysqli_fetch_array($result))
{
  
  echo "    <div class='case'>
              <div class='row'>
                <div class='col-md-6 col-lg-6 col-xl-8 d-flex'>
                  <a href='blog-single.php?id=".$row[0]."' class='img mb-4 mb-md-0' style='width: 80%;background-image: url(images/".$row[1].");'></a>
                </div>
                <div class='col-md-6 col-lg-6 col-xl-4 d-flex'>
                  <div class='text w-100 pl-md-3'>
                    <span class='icon-person subheading'> ".$row[9]."</span>
                    <h2><a href='blog-single.php'>".$row[2]."</a></h2>
                    <ul class='media-social list-unstyled'>
                      <li class='ftco-animate'><a href=".$row[4]."><span class='icon-twitter'></span></a></li>
                      <li class='ftco-animate'><a href=".$row[5]."><span class='icon-facebook'></span></a></li>
                      <li class='ftco-animate'><a href=".$row[6]."><span class='icon-instagram'></span></a></li>
                    </ul>
                    <div class='meta'>
                      <p class='mb-0 icon-calendar'><a href='#'> ".$row[7]."</a> | <a href='#'>".$row[8]." min read</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>";
  
}


    ?>