<header>
  <nav>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="logo " id="logo"></div>
        </div>
        <div class="col-xs-12">
          <ul>
            <?php wp_nav_menu([
              'menu'        =>  'main',
              'container'   =>  false,
              'items_wrap'  =>  '%3$s',
              'parent'      =>  'menu-items_parent'
              
              ])?>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</header>