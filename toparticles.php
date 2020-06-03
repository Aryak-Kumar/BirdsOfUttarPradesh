<?php
              include("conn.php");
                $sql = "select * from Blogs order by time desc limit 2";
              //to execute the sql query
              $result = mysqli_query($conn,$sql) or die(mysqli_error($conn));

              while($row = mysqli_fetch_array($result))
              {
                
                echo " <div class='block-21 mb-4 d-flex'>
                <a href='blog-single.php?id=".$row[0]."'class='img mr-4 rounded' style='background-image: url(images/".$row[1].");'></a>
                <div class='text'>
                  <h3 class='heading'><a href='blog-single.php?id=".$row[0]."'>".$row[2]."</a></h3>
                  <div class='meta'>
                    <div><a href='blog-single.php?id=".$row[0]."'><span class='icon-calendar'></span> ".$row[7]."</a></div>
                    <div><a href='blog-single.php?id=".$row[0]."'><span class='icon-person'></span>".$row[9]."</a></div>
                    <div><a href='blog-single.php?id=".$row[0]."'><span class='icon-chat'></span>".$row[10]."</a></div>
                  </div>
                </div>
              </div>";
                
              }
              ?>