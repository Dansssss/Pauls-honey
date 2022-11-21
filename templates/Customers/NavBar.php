<nav class="navbar navbar-expand-lg navbar-light pb_navbar pb_scrolled-light" id="pb-navbar">
    <div class="container">
        <div class="collapse navbar-collapse justify-content-md-center" id="probootstrap-navbar">
            <a class="navbar-nav">
                <a class="active" href=<?=$this->Url->build(['controller'=> 'Customers','action' => 'home']) ?>>Paul's Healthy Honey</a>
                <a href=<?=$this->Url->build(['controller'=> 'Customers','action' => 'about']) ?>>About</a>
                <a href=<?=$this->Url->build(['controller'=> 'Products','action' => 'index2']) ?>>Products</a>
                <?php if (is_null($this->Identity->get('user_role')) ){ ?>
                        <a href=<?=$this->Url->build(['controller'=> 'Customers','action' => 'login'])?>>Log In</a>
                <?php }elseif($this->Identity->get('user_role')==1){?>
                        <a href=<?=$this->Url->build(['controller'=> 'Stocks','action' => 'inventory'])?>>Dashboard</a>
                <?php }elseif (($this->Identity->get('user_role')==0)){ ?>
                        <a href=<?=$this->Url->build(['controller'=> 'Customers','action' => 'view', $this->Identity->get('id')])?>>My Account</a>
                <?php }?>
            </a>

            </ul>
        </div>
    </div>
</nav>
