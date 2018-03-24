          <? php 
          $name=$_POST['name'];
          $sql="SELECT id from vehicles where vehicles.VehiclesBrand=:name or vehicles.VehiclesTitle=:name";
          $query = $dbh -> prepare($sql);
          $query -> bindParam(':name',$name, PDO::PARAM_STR);
          $query->execute();
          $results=$query->fetchAll(PDO::FETCH_OBJ);
          $cnt=$query->rowCount();
          ?>
          <p><span><?php echo htmlentities($cnt);?> Listings</span></p>
          </div>
        </div>
        <?php 
        $sql = "SELECT vehicles.*,brands.BrandName,brands.id as bid  from vehicles join brands on brands.id=vehicles.VehiclesBrand where vehicles.VehiclesBrand=:name or vehicles.VehiclesTitle=:name";
        $query = $dbh -> prepare($sql);
        $query -> bindParam(':name',$name, PDO::PARAM_STR);
        $query->execute();
        $results=$query->fetchAll(PDO::FETCH_OBJ);
        $cnt=1;
        if($query->rowCount() > 0)
        {
          foreach($results as $result)
          {  ?>
            <div class="product-listing-m gray-bg">
              <div class="product-listing-img"><img src="admin/img/vehicleimages/<?php echo htmlentities($result->Vimage1);?>" class="img-responsive" alt="Image" /> </a> </div>
              <div class="product-listing-content">
              <h5><a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->BrandName);?> , <?php echo htmlentities($result->VehiclesTitle);?></a></h5>
              <p class="list-price">$<?php echo htmlentities($result->PricePerDay);?> Per Day</p>
              <ul>
                <li><i class="fa fa-user" aria-hidden="true"></i><?php echo htmlentities($result->SeatingCapacity);?> seats</li>
                <li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo htmlentities($result->ModelYear);?> model</li>
                <li><i class="fa fa-car" aria-hidden="true"></i><?php echo htmlentities($result->FuelType);?></li>
              </ul>
              <a href="vehical-details.php?vhid=<?php echo htmlentities($result->id);?>" class="btn">View Details <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a>
              </div>
            </div>
      <?php }} ?>
