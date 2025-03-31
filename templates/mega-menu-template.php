<div class="mm-top-bar">
    <ul id="mega-menu-lang-selector">
        <li class="mm-lang-selected">
            <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/gb-flag.png" alt="english-flag">
            <span>ENGLISH</span>
            <i class="fa-solid fa-chevron-down"></i>
        </li>
        <li class="mm-lang-dropdown-container">
            <ul class="mm-lang-dropdown">
                <li value="en">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/gb-flag.png" alt="english-flag">
                    <span>ENGLISH</span>
                </li>
                <li value="fr">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/fr-flag.png" alt="french-flag">
                    <span>FRANÇAIS</span>
                </li>
            </ul>
        </li>
    </ul>
</div>
<div class="mm-resp-menu">
    <div class="mm-resp-menu-cont">
        <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/replublic-logo-resp.png" alt="Replublic-group-logo-responsiveness">
        <span class="mm-btn-menu" onclick="open_mega_menu('menu')">
            <i class="fa-solid fa-bars"></i>
        </span>
        <div class=" mm-contact-us">
            <a href="#">Contact us</a>
        </div>
    </div>
</div>
<nav class="mm-content-section-menu mega-menu">
    <ul class="mega-menu-list">
        <li class="mm-level1 mm-logo-img">
            <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/replublic-logo.png" alt="Replublic-group-logo">
        </li> 
        <li class="mm-level1 mm-sub-1" onclick="toggle_sub_menu('sub-1')">
            <a href="#" class="mm-menu-item">About the Group</a>
        </li>
        <li class="mm-level1 mm-sub-2" onclick="toggle_sub_menu('sub-2')">
            <a href="#" class="mm-menu-item">Distribution Network</a>
        </li>
        <li class="mm-level1 mm-sub-3" onclick="toggle_sub_menu('sub-3')">
            <a href="#" class="mm-menu-item">Our Brands</a>
        </li>
        <li class="mm-level1">
            <a href="#" onclick="close_all_menu()">Production Sites</a>
        </li>
        <li class="mm-level1">
            <a href="#" onclick="close_all_menu()">Our Commitments</a>
        </li>
        <li class="mm-level1 mm-contact-us">
            <a href="#" onclick="close_all_menu()">Contact us</a>
        </li>
    </ul>
    <div class="sub-menu-container">
    <ul class="mm-sub-menu mm-sub-1">
        <li>
            <a href="#">
                <strong>General information</strong>
                <p>Turpis commodo tristique purus non varius cursus dictum id. Amet neque habitant enim diam nam.</p>
            </a>
        </li>
        <li>
            <a href="#"> 
                <strong>History of the Group</strong>
                <p>Turpis commodo tristique purus non varius cursus dictum id. Amet neque habitant enim diam nam.</p>
            </a>
        </li>
    </ul>
    
        <ul class="mm-sub-menu mm-sub-2">
            <span class="mm-section-selector">
                <p class="mm-title-section mm-btn-ryo1 active" onclick="open_sub_menu('.mm-sub-2','ryo1')">
                    RYO - MYO 
                    <i class="fa-solid fa-chevron-right"></i></p>
                <p class="mm-title-section mm-btn-opt1" onclick="open_sub_menu('.mm-sub-2','opt1')">
                    OPTICS 
                    <i class="fa-solid fa-chevron-right"></i></p>
            </span>
            <span class="mm-section-content mm-content-section-ryo1 open">
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/ryo-myo1.png" alt="ryo-nyo-img-content">
                </div>
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/ryo-myo2.png" alt="ryo-nyo-img-content">
                </div>
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/ryo-myo3.png" alt="ryo-nyo-img-content">
                </div>
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/ryo-myo4.png" alt="ryo-nyo-img-content">
                </div>
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/ryo-myo5.png" alt="ryo-nyo-img-content">
                </div>
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/ryo-myo6.png" alt="ryo-nyo-img-content">
                </div>
            </span>
            <span class="mm-section-content mm-content-section-opt1">
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/optics1.png" alt="ryo-nyo-img-content">
                </div>
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/optics2.png" alt="ryo-nyo-img-content">
                </div>
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/optics3.png" alt="ryo-nyo-img-content">
                </div>
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/optics4.png" alt="ryo-nyo-img-content">
                </div>
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/optics5.png" alt="ryo-nyo-img-content">
                </div>
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/optics6.png" alt="ryo-nyo-img-content">
                </div>
            </span>
        </ul>
        <ul class="mm-sub-menu mm-sub-3">
            <span class="mm-section-selector">
                <p class="mm-title-section mm-btn-ryo2 active" onclick="open_sub_menu('.mm-sub-3','ryo2')">
                    RYO - MYO 
                    <i class="fa-solid fa-chevron-right"></i>
                </p>
                <p class="mm-title-section mm-btn-opt2" onclick="open_sub_menu('.mm-sub-3','opt2')">
                    OPTICS 
                    <i class="fa-solid fa-chevron-right"></i>
                </p>
                <p class="mm-title-section mm-btn-vape" onclick="open_sub_menu('.mm-sub-3','vape')">
                    VAPE 
                    <i class="fa-solid fa-chevron-right"></i>
                    </p>
            </span>
            <span class="mm-section-content mm-content-section-ryo2 open">
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/ryo-myo1.png" alt="ryo-nyo-img-content">
                </div>
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/ryo-myo2.png" alt="ryo-nyo-img-content">
                </div>
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/ryo-myo3.png" alt="ryo-nyo-img-content">
                </div>
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/ryo-myo4.png" alt="ryo-nyo-img-content">
                </div>
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/ryo-myo5.png" alt="ryo-nyo-img-content">
                </div>
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/ryo-myo6.png" alt="ryo-nyo-img-content">
                </div>
            </span>
            <span class="mm-section-content mm-content-section-opt2">
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/optics1.png" alt="ryo-nyo-img-content">
                </div>
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/optics2.png" alt="ryo-nyo-img-content">
                </div>
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/optics3.png" alt="ryo-nyo-img-content">
                </div>
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/optics4.png" alt="ryo-nyo-img-content">
                </div>
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/optics5.png" alt="ryo-nyo-img-content">
                </div>
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/optics6.png" alt="ryo-nyo-img-content">
                </div>
            </span>
            <span class="mm-section-content mm-content-section-vape">
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/vape1.png" alt="ryo-nyo-img-content">
                </div>
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/vape2.png" alt="ryo-nyo-img-content">
                </div>
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/vape3.png" alt="ryo-nyo-img-content">
                </div>
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/vape4.png" alt="ryo-nyo-img-content">
                </div>
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/vape5.png" alt="ryo-nyo-img-content">
                </div>
                <div class="mm-col-3">
                    <img src="<?php echo plugin_dir_url(__FILE__); ?>../images/vape6.png" alt="ryo-nyo-img-content">
                </div>
            </span>
        </ul>
    </div>
</nav>