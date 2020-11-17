<?php
use yii\helpers\Url;
?>
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.html">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-laptop"></i>
                        <span>Listings</span>
                    </a>
                    <ul class="sub">
                        <li><a href="<?= Url::to(['listing/index'])?>">All listings</a></li>
                        <li><a href="<?= Url::to(['listing/create'])?>">Add listing</a></li>
                        <li><a href="#">All Listing Category</a></li>
                        <li><a href="#">Add Listing Category</a></li>
                    </ul>
                </li>


                <li>
                    <a href="<?= Url::to(['site/logout'])?>">
                        <i class="fa fa-user"></i>
                        <span>Login Out</span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->