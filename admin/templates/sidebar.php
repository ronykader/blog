        <div class="grid_2">
            <div class="box sidemenu">
                <div class="block" id="section-menu">
                    <ul class="section menu">
                       <li><a class="menuitem">Site Option</a>
                            <ul class="submenu">
                                <li><a href="titleslogan.php">Title & Slogan</a></li>
                                <li><a href="social.php">Social Media</a></li>
                                <li><a href="copyright.php">Copyright</a></li>
                                
                            </ul>
                        </li>
						
                         <li><a class="menuitem">Dynamic page</a>
                            <ul class="submenu">
                                <li><a href="page_create.php">add new page</a></li>
                                
                                <?php                                 
                                  $query = "SELECT * FROM `page_table`";
                                  $result = $db->select( $query );
                                  if ( $result ) 
                                  {
                                     while ( $row = $result->fetch_assoc() ) 
                                     {
                                    ?>
                                    <li><a href="page.php?page_id=<?php echo $row['id'];?>"><?php echo $row['title'];?></a></li>
                                    <?php   
                                     }
                                  }

                                 ?>
                            </ul>
                        </li>
                        <li><a class="menuitem">Category Option</a>
                            <ul class="submenu">
                                <li><a href="addcat.php">Add Category</a> </li>
                                <li><a href="catlist.php">Category List</a> </li>
                            </ul>
                        </li>
                        <li><a class="menuitem">Post Option</a>
                            <ul class="submenu">
                                <li><a href="addpost.php">Add Post</a> </li>
                                <li><a href="postlist.php">Post List</a> </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>