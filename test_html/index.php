<?php
$conn = mysqli_connect("localhost","root","","atari") or die("connection failed");
$sql = "SELECT * FROM testseriescards";
$data=mysqli_query($conn,$sql) or die("query unsuccessful");
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\atariacademy\fontawesome-free-5.15.4-web\css\all.min.css">
    <link rel="stylesheet" href="\atariacademy\style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="\atariacademy\favicon.svg" type="image/svg">
    <title>test series</title>
</head>
<body>
    <nav>
        <svg width="479" height="127" viewBox="0 0 479 127" fill="none" xmlns="http://www.w3.org/2000/svg">
            <!-- academy -->            <path class="logo_mp_color" d="M178.757 85.2685H183.713L194.864 105.612H190.718L187.859 100.183H174.659L171.752 105.612H167.607L178.757 85.2685ZM186.572 97.7969L181.331 87.6548H181.188L175.898 97.7969H186.572ZM220.957 88.1321C220.163 87.973 219.321 87.8338 218.431 87.7145C217.542 87.5753 216.557 87.4659 215.477 87.3864C214.428 87.2869 213.316 87.2372 212.141 87.2372C210.235 87.2372 208.615 87.4957 207.28 88.0128C205.946 88.5298 204.85 89.196 203.992 90.0114C203.166 90.8068 202.563 91.7017 202.182 92.696C201.8 93.6903 201.61 94.6747 201.61 95.6491C201.61 96.8821 201.88 98.0057 202.42 99.0199C202.992 100.014 203.754 100.869 204.707 101.585C205.692 102.281 206.82 102.818 208.091 103.196C209.393 103.574 210.759 103.763 212.189 103.763C213.523 103.763 214.746 103.723 215.858 103.643C216.97 103.544 217.923 103.445 218.717 103.345C219.638 103.226 220.464 103.087 221.195 102.928L222.005 105.045C221.147 105.224 220.194 105.384 219.146 105.523C218.256 105.642 217.224 105.751 216.049 105.851C214.873 105.95 213.587 106 212.189 106C209.679 106 207.471 105.741 205.565 105.224C203.691 104.707 202.118 103.991 200.847 103.077C199.608 102.142 198.671 101.048 198.036 99.7955C197.4 98.5227 197.083 97.1307 197.083 95.6193C197.083 93.8892 197.464 92.3679 198.226 91.0554C198.989 89.723 200.037 88.6094 201.372 87.7145C202.706 86.8196 204.294 86.1435 206.137 85.6861C207.979 85.2287 209.997 85 212.189 85C213.523 85 214.762 85.0497 215.906 85.1491C217.081 85.2287 218.145 85.3381 219.098 85.4773C220.083 85.6165 220.989 85.7656 221.815 85.9247L220.957 88.1321ZM234.939 85.2685H239.895L251.046 105.612H246.9L244.041 100.183H230.841L227.934 105.612H223.788L234.939 85.2685ZM242.754 97.7969L237.512 87.6548H237.369L232.08 97.7969H242.754ZM259.449 103.315H265.882C267.63 103.315 269.266 103.176 270.791 102.898C272.347 102.619 273.697 102.172 274.841 101.555C276.017 100.919 276.938 100.094 277.605 99.0795C278.272 98.0653 278.606 96.8324 278.606 95.3807C278.606 94.0284 278.304 92.8651 277.7 91.8906C277.097 90.8963 276.239 90.081 275.127 89.4446C274.047 88.8082 272.713 88.3409 271.124 88.0426C269.568 87.7244 267.82 87.5653 265.882 87.5653H259.449V103.315ZM255.447 85.2685H265.882C268.456 85.2685 270.775 85.4673 272.84 85.8651C274.936 86.2628 276.731 86.8793 278.224 87.7145C279.718 88.5497 280.861 89.6037 281.655 90.8764C282.481 92.1491 282.894 93.6506 282.894 95.3807C282.894 97.1307 282.45 98.652 281.56 99.9446C280.671 101.217 279.463 102.281 277.939 103.136C276.414 103.972 274.619 104.598 272.554 105.016C270.489 105.413 268.265 105.612 265.882 105.612H255.447V85.2685ZM288.796 85.2685H308.715V87.5653H292.799V94.0682H307.571V96.3054H292.799V103.315H309.191V105.612H288.796V85.2685ZM315.884 85.2685H320.983L328.322 97.3793C328.735 98.0753 329.116 98.7216 329.466 99.3182C329.815 99.8949 330.117 100.412 330.371 100.869C330.689 101.386 330.959 101.864 331.181 102.301H331.277C331.467 101.864 331.705 101.386 331.991 100.869C332.245 100.412 332.531 99.8949 332.849 99.3182C333.167 98.7216 333.548 98.0753 333.993 97.3793L341.474 85.2685H346.573L348.241 105.612H344.19L343.38 94.4261C343.317 93.4517 343.269 92.6264 343.237 91.9503C343.206 91.2741 343.19 90.7173 343.19 90.2798V89.027H343.094C342.904 89.3253 342.666 89.733 342.38 90.25C342.125 90.6875 341.792 91.2543 341.379 91.9503C340.998 92.6264 340.521 93.4517 339.949 94.4261L333.23 105.612H329.18L322.413 94.4261C321.809 93.4716 321.317 92.6563 320.935 91.9801C320.554 91.2841 320.237 90.7173 319.982 90.2798C319.696 89.7628 319.474 89.3452 319.315 89.027H319.22C319.252 89.3452 319.283 89.7628 319.315 90.2798C319.347 91.1151 319.299 92.4972 319.172 94.4261L318.219 105.612H314.169L315.884 85.2685ZM361.936 98.2145L351.548 85.2685H355.98L363.938 95.142L371.943 85.2685H376.375L365.987 98.2145V105.612H361.936V98.2145Z" fill="#133551"/>
            <!-- ata -->                <path class="logo_mp_color1" d="M199.519 81C199.519 79.4375 199.096 78.5911 198.25 78.4609C197.924 78.3958 197.566 78.3633 197.176 78.3633H194.246L171.199 22.4062H163.972L142.586 78.3633H136.336V81H154.305C154.305 79.4375 153.881 78.5911 153.035 78.4609C152.709 78.3958 152.351 78.3633 151.961 78.3633H146.492L153.523 59.6133H172.957L180.281 78.3633H173.347V81H199.519ZM171.785 56.6836H154.695L163.094 34.2227L171.785 56.6836ZM241.281 81C240.891 79.3724 240.012 78.4935 238.644 78.3633H232.004V25.043H233.664C238.351 25.043 241.672 27.1263 243.625 31.293C244.016 32.2044 244.439 33.2786 244.894 34.5156L247.922 43.3047H250.851L250.461 22.4062H199.875L199.484 43.3047H202.414L205.441 34.5156C206.874 30.349 208.729 27.6146 211.008 26.3125C212.57 25.4661 214.458 25.043 216.672 25.043H218.332V78.3633H209.055V81H241.281ZM314 81C314 79.4375 313.577 78.5911 312.73 78.4609C312.405 78.3958 312.047 78.3633 311.656 78.3633H308.726L285.68 22.4062H278.453L257.066 78.3633H250.816V81H268.785C268.785 79.4375 268.362 78.5911 267.516 78.4609C267.19 78.3958 266.832 78.3633 266.441 78.3633H260.973L268.004 59.6133H287.437L294.762 78.3633H287.828V81H314ZM286.266 56.6836H269.176L277.574 34.2227L286.266 56.6836Z" fill="#133551"/>
            <!-- ri -->                 <path  d="M345.039 81V78.3633H337.227V54.2422H342.012L356.563 81.0977L373.75 81C373.75 79.5677 373.23 78.7539 372.188 78.5586C371.862 78.4935 371.537 78.4609 371.211 78.4609H369.942L354.903 53.0703C361.739 51.1823 365.938 47.4714 367.5 41.9375C367.891 40.5703 368.086 39.1706 368.086 37.7383C368.086 32.9206 365.938 29.0469 361.641 26.1172C357.995 23.6432 353.568 22.4062 348.36 22.4062H315.743V25.043H323.555V78.3633H315.743V81H345.039ZM342.5 25.043C347.839 25.043 351.289 27.6797 352.852 32.9531C353.308 34.6458 353.536 36.4036 353.536 38.2266C353.536 43.8255 351.843 47.6992 348.457 49.8477C346.96 50.8242 345.235 51.3125 343.282 51.3125H337.227V25.043H342.5ZM403.5 81C403.11 79.3724 402.231 78.4935 400.864 78.3633H395.688V25.043H403.5V22.4062H374.204V25.043H382.016V78.3633H374.204V81H403.5Z" fill="#FB7762"/>
            <!-- inverted U of logo --> <path class="logo_mp_color2" d="M56.9153 106.641C60.0743 106.654 63.1098 105.413 65.3548 103.191C67.6003 100.969 68.8729 97.9469 68.8926 94.7879L69.0498 65.1083C69.0276 62.9842 69.4279 60.8772 70.2279 58.9096C71.028 56.9419 72.2112 55.1534 73.7092 53.6474C75.2074 52.1414 76.99 50.9486 78.9535 50.1385C80.9169 49.3283 83.022 48.9169 85.1459 48.9282C87.27 48.9394 89.3705 49.373 91.3252 50.204C93.28 51.0349 95.0499 52.2465 96.5319 53.7683C98.0139 55.2901 99.1783 57.091 99.9574 59.067C100.736 61.043 101.115 63.1541 101.07 65.2779L100.913 94.9575C100.896 98.1174 102.135 101.155 104.358 103.401C106.58 105.647 109.604 106.918 112.764 106.935C115.924 106.952 118.961 105.713 121.207 103.49C123.454 101.267 124.725 98.2436 124.742 95.0837L124.915 62.2615C124.943 57.0299 123.94 51.8437 121.964 46.9996C119.987 42.1555 117.076 37.7483 113.396 34.029C109.716 30.3102 105.34 27.3524 100.517 25.3246C95.6942 23.2972 90.5192 22.2392 85.2874 22.2115C80.0557 22.1838 74.8697 23.1869 70.0255 25.1631C65.1814 27.1397 60.7743 30.051 57.0554 33.7307C53.3361 37.4108 50.3783 41.7868 48.351 46.6098C46.3231 51.4327 45.2651 56.608 45.2374 61.8396L45.0636 94.6617C45.0504 97.8208 46.2904 100.856 48.5122 103.102C50.7341 105.348 53.7563 106.62 56.9153 106.641ZM50.4501 61.8697C50.4987 52.6859 54.1937 43.8982 60.7217 37.4389C67.2497 30.9797 76.0763 27.378 85.2598 27.4267C94.4433 27.4753 103.231 31.1703 109.691 37.6983C116.15 44.2263 119.751 53.0527 119.703 62.2364L119.529 95.0561C119.504 96.8234 118.783 98.5095 117.521 99.7473C116.259 100.985 114.559 101.674 112.792 101.665C111.024 101.656 109.332 100.948 108.084 99.6973C106.835 98.4462 106.131 96.7526 106.125 94.9851L106.282 65.3055C106.312 59.6768 104.105 54.2668 100.146 50.2657C96.1871 46.2645 90.8008 44.0002 85.1722 43.9704C79.5436 43.9406 74.1335 46.1477 70.1324 50.1067C66.1317 54.0657 63.8669 59.452 63.8371 65.0807L63.68 94.7603C63.6706 96.5378 62.9557 98.2387 61.692 99.4888C60.4284 100.739 58.7202 101.436 56.9429 101.427C55.1651 101.417 53.4644 100.702 52.214 99.4386C50.9641 98.1752 50.2668 96.4668 50.2763 94.6893L50.4501 61.8697Z" fill="#133551"/>
            <!-- circle -->             <path  d="M85.1099 87.8226C91.5586 87.8361 96.7971 82.6095 96.8106 76.1483C96.8241 69.6872 91.6076 64.4385 85.1589 64.425C78.7102 64.4115 73.4715 69.6384 73.458 76.0995C73.4445 82.5606 78.6612 87.8091 85.1099 87.8226Z" fill="#FB7762"/>
        </svg>

        <span class="burgermenu" id="burgermenu_menu">
            <!-- &#9776 -->
            ☰  
        </span>

        <div class="navlinkscontainer" id="sidenavbar">  
            <div class="navlinks">  
               
                <a href="" class="fas fa-users">
                    community
                </a>
               
                <a href="" class="fas fa-share-alt">
                    share
                </a>
                <a href="" class="fas fa-headset">
                    support 
                </a>
                <a href="" class="fas fa-star">
                    public reviews 
                </a>
            </div>
            
            <div class="navbuttonscontainer">
               
                <span class="burgermenu" id="burgermenu_cross">
                    <!-- &#10005 -->
                    ✕
                </span>
            </div>
        </div>
    </nav>
    <header>

        <div class="headersectioncontainer">
            
            
            <section style="text-align: center;" class="edu_banner_header">
                <img src="\atariacademy\resources\pictures\atari\des_graphics\svg\test section.svg" alt="">
            </section>

            
            <section class="headersection_L">
                
                <div>
                    <h1>
                        Test Series
                    </h1>
    
                    <p>
                        60+ test series in different types to enhanse your skills and capability.........
                    </p>
                </div>

            </section>

            
        </div>
 
        <!-- <div class="offersSections">

            <div></div>

            <div class="container_offers">
                
                <div class="innercontainer_offers">
                    <h1>Test series</h1>
                    <div class="vector">
                        <img src="/atari_release/atariacademy/resources/pictures/atari/des_graphics/svg/test section.svg" alt="">
                    </div>
                    <p>
                        60+ test series in different types to enhanse your skills and capability.........
                    </p>
                </div>
            </div>

        </div> -->

   </header>
   <main>
<?php 
if(mysqli_num_rows($data) > 0){

    while($cardData= mysqli_fetch_assoc($data)){
?>
        <a href="test_type1/index.html?<?php echo $cardData['Pkey'];?>">
            <div class="card_container">
                <div class="innercardcontainer">
                    <div class="icon_circle">
                        <div class="inner_circle">
                            <?php
                                if($cardData['icon']!=null)
                                {
                            ?>
                                <span class="fas <?php echo $cardData['icon']; ?>"></span>
                            <?php
                                }
                                else{
                            ?>
                                <span class="fas"><?php echo $cardData['iconAlternative']; ?></span>
                            <?php
                                }
                            ?>
                        </div>
                        <!-- <i class="fas "></i> -->
                    </div>
                    <h3><?php echo $cardData['subject']; ?></h3>
                    <h4><?php echo $cardData['topic'] ?></h4>
                    <p>
                        <span><?php echo $cardData['description'] ?></span>
                    </p>
                </div>
            </div>
        
        </a>
<?php
    }
?>

<?php 
}else{
    echo "no records found";
}
?>
   </main>

  
   <footer>
    <section class="main">
        
        <svg width="479" height="127" viewBox="0 0 479 127" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill="white"d="M178.757 85.2685H183.713L194.864 105.612H190.718L187.859 100.183H174.659L171.752 105.612H167.607L178.757 85.2685ZM186.572 97.7969L181.331 87.6548H181.188L175.898 97.7969H186.572ZM220.957 88.1321C220.163 87.973 219.321 87.8338 218.431 87.7145C217.542 87.5753 216.557 87.4659 215.477 87.3864C214.428 87.2869 213.316 87.2372 212.141 87.2372C210.235 87.2372 208.615 87.4957 207.28 88.0128C205.946 88.5298 204.85 89.196 203.992 90.0114C203.166 90.8068 202.563 91.7017 202.182 92.696C201.8 93.6903 201.61 94.6747 201.61 95.6491C201.61 96.8821 201.88 98.0057 202.42 99.0199C202.992 100.014 203.754 100.869 204.707 101.585C205.692 102.281 206.82 102.818 208.091 103.196C209.393 103.574 210.759 103.763 212.189 103.763C213.523 103.763 214.746 103.723 215.858 103.643C216.97 103.544 217.923 103.445 218.717 103.345C219.638 103.226 220.464 103.087 221.195 102.928L222.005 105.045C221.147 105.224 220.194 105.384 219.146 105.523C218.256 105.642 217.224 105.751 216.049 105.851C214.873 105.95 213.587 106 212.189 106C209.679 106 207.471 105.741 205.565 105.224C203.691 104.707 202.118 103.991 200.847 103.077C199.608 102.142 198.671 101.048 198.036 99.7955C197.4 98.5227 197.083 97.1307 197.083 95.6193C197.083 93.8892 197.464 92.3679 198.226 91.0554C198.989 89.723 200.037 88.6094 201.372 87.7145C202.706 86.8196 204.294 86.1435 206.137 85.6861C207.979 85.2287 209.997 85 212.189 85C213.523 85 214.762 85.0497 215.906 85.1491C217.081 85.2287 218.145 85.3381 219.098 85.4773C220.083 85.6165 220.989 85.7656 221.815 85.9247L220.957 88.1321ZM234.939 85.2685H239.895L251.046 105.612H246.9L244.041 100.183H230.841L227.934 105.612H223.788L234.939 85.2685ZM242.754 97.7969L237.512 87.6548H237.369L232.08 97.7969H242.754ZM259.449 103.315H265.882C267.63 103.315 269.266 103.176 270.791 102.898C272.347 102.619 273.697 102.172 274.841 101.555C276.017 100.919 276.938 100.094 277.605 99.0795C278.272 98.0653 278.606 96.8324 278.606 95.3807C278.606 94.0284 278.304 92.8651 277.7 91.8906C277.097 90.8963 276.239 90.081 275.127 89.4446C274.047 88.8082 272.713 88.3409 271.124 88.0426C269.568 87.7244 267.82 87.5653 265.882 87.5653H259.449V103.315ZM255.447 85.2685H265.882C268.456 85.2685 270.775 85.4673 272.84 85.8651C274.936 86.2628 276.731 86.8793 278.224 87.7145C279.718 88.5497 280.861 89.6037 281.655 90.8764C282.481 92.1491 282.894 93.6506 282.894 95.3807C282.894 97.1307 282.45 98.652 281.56 99.9446C280.671 101.217 279.463 102.281 277.939 103.136C276.414 103.972 274.619 104.598 272.554 105.016C270.489 105.413 268.265 105.612 265.882 105.612H255.447V85.2685ZM288.796 85.2685H308.715V87.5653H292.799V94.0682H307.571V96.3054H292.799V103.315H309.191V105.612H288.796V85.2685ZM315.884 85.2685H320.983L328.322 97.3793C328.735 98.0753 329.116 98.7216 329.466 99.3182C329.815 99.8949 330.117 100.412 330.371 100.869C330.689 101.386 330.959 101.864 331.181 102.301H331.277C331.467 101.864 331.705 101.386 331.991 100.869C332.245 100.412 332.531 99.8949 332.849 99.3182C333.167 98.7216 333.548 98.0753 333.993 97.3793L341.474 85.2685H346.573L348.241 105.612H344.19L343.38 94.4261C343.317 93.4517 343.269 92.6264 343.237 91.9503C343.206 91.2741 343.19 90.7173 343.19 90.2798V89.027H343.094C342.904 89.3253 342.666 89.733 342.38 90.25C342.125 90.6875 341.792 91.2543 341.379 91.9503C340.998 92.6264 340.521 93.4517 339.949 94.4261L333.23 105.612H329.18L322.413 94.4261C321.809 93.4716 321.317 92.6563 320.935 91.9801C320.554 91.2841 320.237 90.7173 319.982 90.2798C319.696 89.7628 319.474 89.3452 319.315 89.027H319.22C319.252 89.3452 319.283 89.7628 319.315 90.2798C319.347 91.1151 319.299 92.4972 319.172 94.4261L318.219 105.612H314.169L315.884 85.2685ZM361.936 98.2145L351.548 85.2685H355.98L363.938 95.142L371.943 85.2685H376.375L365.987 98.2145V105.612H361.936V98.2145Z" fill="#133551"/>
            <path fill="white" d="M199.519 81C199.519 79.4375 199.096 78.5911 198.25 78.4609C197.924 78.3958 197.566 78.3633 197.176 78.3633H194.246L171.199 22.4062H163.972L142.586 78.3633H136.336V81H154.305C154.305 79.4375 153.881 78.5911 153.035 78.4609C152.709 78.3958 152.351 78.3633 151.961 78.3633H146.492L153.523 59.6133H172.957L180.281 78.3633H173.347V81H199.519ZM171.785 56.6836H154.695L163.094 34.2227L171.785 56.6836ZM241.281 81C240.891 79.3724 240.012 78.4935 238.644 78.3633H232.004V25.043H233.664C238.351 25.043 241.672 27.1263 243.625 31.293C244.016 32.2044 244.439 33.2786 244.894 34.5156L247.922 43.3047H250.851L250.461 22.4062H199.875L199.484 43.3047H202.414L205.441 34.5156C206.874 30.349 208.729 27.6146 211.008 26.3125C212.57 25.4661 214.458 25.043 216.672 25.043H218.332V78.3633H209.055V81H241.281ZM314 81C314 79.4375 313.577 78.5911 312.73 78.4609C312.405 78.3958 312.047 78.3633 311.656 78.3633H308.726L285.68 22.4062H278.453L257.066 78.3633H250.816V81H268.785C268.785 79.4375 268.362 78.5911 267.516 78.4609C267.19 78.3958 266.832 78.3633 266.441 78.3633H260.973L268.004 59.6133H287.437L294.762 78.3633H287.828V81H314ZM286.266 56.6836H269.176L277.574 34.2227L286.266 56.6836Z" fill="#133551"/>
            <path d="M345.039 81V78.3633H337.227V54.2422H342.012L356.563 81.0977L373.75 81C373.75 79.5677 373.23 78.7539 372.188 78.5586C371.862 78.4935 371.537 78.4609 371.211 78.4609H369.942L354.903 53.0703C361.739 51.1823 365.938 47.4714 367.5 41.9375C367.891 40.5703 368.086 39.1706 368.086 37.7383C368.086 32.9206 365.938 29.0469 361.641 26.1172C357.995 23.6432 353.568 22.4062 348.36 22.4062H315.743V25.043H323.555V78.3633H315.743V81H345.039ZM342.5 25.043C347.839 25.043 351.289 27.6797 352.852 32.9531C353.308 34.6458 353.536 36.4036 353.536 38.2266C353.536 43.8255 351.843 47.6992 348.457 49.8477C346.96 50.8242 345.235 51.3125 343.282 51.3125H337.227V25.043H342.5ZM403.5 81C403.11 79.3724 402.231 78.4935 400.864 78.3633H395.688V25.043H403.5V22.4062H374.204V25.043H382.016V78.3633H374.204V81H403.5Z" fill="#FB7762"/>
            <path fill="white" d="M56.9153 106.641C60.0743 106.654 63.1098 105.413 65.3548 103.191C67.6003 100.969 68.8729 97.9469 68.8926 94.7879L69.0498 65.1083C69.0276 62.9842 69.4279 60.8772 70.2279 58.9096C71.028 56.9419 72.2112 55.1534 73.7092 53.6474C75.2074 52.1414 76.99 50.9486 78.9535 50.1385C80.9169 49.3283 83.022 48.9169 85.1459 48.9282C87.27 48.9394 89.3705 49.373 91.3252 50.204C93.28 51.0349 95.0499 52.2465 96.5319 53.7683C98.0139 55.2901 99.1783 57.091 99.9574 59.067C100.736 61.043 101.115 63.1541 101.07 65.2779L100.913 94.9575C100.896 98.1174 102.135 101.155 104.358 103.401C106.58 105.647 109.604 106.918 112.764 106.935C115.924 106.952 118.961 105.713 121.207 103.49C123.454 101.267 124.725 98.2436 124.742 95.0837L124.915 62.2615C124.943 57.0299 123.94 51.8437 121.964 46.9996C119.987 42.1555 117.076 37.7483 113.396 34.029C109.716 30.3102 105.34 27.3524 100.517 25.3246C95.6942 23.2972 90.5192 22.2392 85.2874 22.2115C80.0557 22.1838 74.8697 23.1869 70.0255 25.1631C65.1814 27.1397 60.7743 30.051 57.0554 33.7307C53.3361 37.4108 50.3783 41.7868 48.351 46.6098C46.3231 51.4327 45.2651 56.608 45.2374 61.8396L45.0636 94.6617C45.0504 97.8208 46.2904 100.856 48.5122 103.102C50.7341 105.348 53.7563 106.62 56.9153 106.641ZM50.4501 61.8697C50.4987 52.6859 54.1937 43.8982 60.7217 37.4389C67.2497 30.9797 76.0763 27.378 85.2598 27.4267C94.4433 27.4753 103.231 31.1703 109.691 37.6983C116.15 44.2263 119.751 53.0527 119.703 62.2364L119.529 95.0561C119.504 96.8234 118.783 98.5095 117.521 99.7473C116.259 100.985 114.559 101.674 112.792 101.665C111.024 101.656 109.332 100.948 108.084 99.6973C106.835 98.4462 106.131 96.7526 106.125 94.9851L106.282 65.3055C106.312 59.6768 104.105 54.2668 100.146 50.2657C96.1871 46.2645 90.8008 44.0002 85.1722 43.9704C79.5436 43.9406 74.1335 46.1477 70.1324 50.1067C66.1317 54.0657 63.8669 59.452 63.8371 65.0807L63.68 94.7603C63.6706 96.5378 62.9557 98.2387 61.692 99.4888C60.4284 100.739 58.7202 101.436 56.9429 101.427C55.1651 101.417 53.4644 100.702 52.214 99.4386C50.9641 98.1752 50.2668 96.4668 50.2763 94.6893L50.4501 61.8697Z" fill="#133551"/>
            <path d="M85.1099 87.8226C91.5586 87.8361 96.7971 82.6095 96.8106 76.1483C96.8241 69.6872 91.6076 64.4385 85.1589 64.425C78.7102 64.4115 73.4715 69.6384 73.458 76.0995C73.4445 82.5606 78.6612 87.8091 85.1099 87.8226Z" fill="#FB7762"/>
        </svg>

        <div class="social_icnLinks">
            <a href="" class="fab fa-facebook-f" style="font-size: 1.2rem;
                                                        line-height:1.9rem ; ">
            </a>

            <a href="" class="fab fa-linkedin-in">
            </a>

            <a href="" class="fab fa-instagram">
            </a>

            <a href="" class="fab fa-twitter">
            </a>

            <a href="" class="fab fa-youtube">
            </a>
        </div>

        <div class="copyright">
            ©2021 Aatifs Pvt. Ltd.
        </div>
        
    </section>

    <div class="listsOf">
            <section class="company">
                <h4>COMPANY</h4>
                <div>
                    <ul>
                        <li><a href="">Privacy Polocy</a></li>
                        <li><a href="">Terms and Conditions</a></li>
                    </ul>
                </div>
            </section>

            <section class="goals">
                <h4>GOALS</h4>
                <div>
                    <ul>
                        
                        <li><a href="">12th CBSC</a></li>
                        
                    </ul>
                </div>
            </section>

            <section class="links">
                <h4>OTHER LINKS</h4>
                <div>
                    <ul>
                        <li><a href="">communith</a></li>
                        <li><a href="">support</a></li>
                    </ul>
                </div>
            </section>
    </div>

</footer>
<script type="text/javascript" src="\atariacademy\script.js">
   
</script>
</body>
</html>
