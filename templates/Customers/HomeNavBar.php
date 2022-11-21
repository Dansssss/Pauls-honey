<nav class="navbar navbar-expand-lg navbar-light pb_navbar pb_scrolled-light" id="pb-navbar">
    <div class="container">
        <a class="navbar-brand d-xl-none d-lg-none d-md-block d-sm-block" href="/">
            <img src="../images/restaurant/logo1" alt="Instant Logo" class="light">
            <img src="../images/restaurant/logo1" alt="Instant Logo" class="dark">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#probootstrap-navbar" aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span><i class="ion-navicon"></i></span>
        </button>
        <div class="collapse navbar-collapse justify-content-md-center" id="probootstrap-navbar">
            <ul class="navbar-nav">
                <li class="nav-item logo-center d-xl-block d-lg-block d-md-none d-sm-none d-none">
                    <a class="nav-link text-uppercase pb_letter-spacing-2 " href="#section-home">
                        <img src="../images/restaurant/logo7.png"  class="light">
                        <img src="../images/restaurant/logo7.png"  class="dark">
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2 mr-2 text-secondary" href="home">PAUL'S HEALTHY HONEY</a></li>
                <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2 mr-2 text-secondary" href="#section-about">About</a></li>
                <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2 text-secondary" href="#section-products">Products</a></li>

                <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2 mr-2 text-secondary" href="#section-gallery">Gallery</a></li>

                <li class="nav-item"><a class="nav-link text-uppercase pb_letter-spacing-2 mr-2 text-secondary" href="#section-reviews">Reviews</a></li>
                <?php if (is_null($this->Identity->get('user_role')) ){ ?>

                    <li class="nav-item">

                        <a class="nav-link text-uppercase pb_letter-spacing-2 mr-2 text-secondary" href=<?=$this->Url->build(['controller'=> 'Customers','action' => 'login'])?>>LOG IN</a>

                    </li>

                <?php }elseif($this->Identity->get('user_role')==1){?>
                    <li class="nav-item">

                        <a class="nav-link text-uppercase pb_letter-spacing-2 mr-2 text-secondary" href=<?=$this->Url->build(['controller'=> 'Stocks','action' => 'inventory'])?>>my account</a>

                    </li>
                <?php }elseif ($this->Identity->get('user_role')==0){ ?>

                    <li class="nav-item">

                        <a class="nav-link text-uppercase pb_letter-spacing-2 mr-2 text-secondary" href=<?=$this->Url->build(['controller'=> 'Customers','action' => 'view', $this->Identity->get('id')])?>>my account</a>

                    </li>

                <?php }?>

            </ul>
        </div>
    </div>
</nav>
