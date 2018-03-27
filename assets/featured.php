<div class="featured-items-collection" ng-controller="loginCtrl">
  <div class="container">
    <div class="text-heading col-auto text-center">
      <div class="text-holder">
        <!-- heading -->
        <h2>Featured Products</h2>
        <hr />
      </div>
    </div>
    <div class="row d-flex justify-content-around">
      <div class="image-content one">
        <img src="img/watch/watch-2.jpeg" alt="sample11" />
        <div class="text-holder">
          <div>
            <h2><i class="fas fa-cart-plus"></i></h2></div>
          <div>
            <p>{{info}}</p>
          </div>
          <a href="update-cart.php?action=add&id=2"></a>
        </div>
      </div>
      <div class="image-content two">
        <img src="img/slr/slr-3.jpeg" alt="sample12" />
        <div class="text-holder">
          <div>
            <h2><i class="fas fa-cart-plus"></i></h2></div>
          <div>
            <p>{{info}}</p>
          </div>
          <a href="update-cart.php?action=add&id=9"></a>
        </div>
      </div>
      <div class="image-content three">
        <img src="img/slr/slr-2.jpg" alt="sample13" />
        <div class="text-holder">
          <div>
            <h2><i class="fas fa-cart-plus"></i></h2></div>
          <div>
            <p>{{info}}</p>
          </div>
          <a href="update-cart.php?action=add&id=8"></a>
        </div>
      </div>
    </div>
  </div>
</div>
