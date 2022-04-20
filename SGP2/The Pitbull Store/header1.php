<nav class="Beyonsky-nav" role="navigation">
            <div class="top-menu">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-2">
                            <div id="Beyonsky-logo"><a href="index.php" class="logo">BeyonSky</a></div>
                        </div>
                        <div class="col-xs-10 text-right menu-1">
                            <ul>
                                <li class="active"><a class="lang" key="hm1" href="index.php" style="font-size:18px ;">Home</a></li>
                                <li  class="has-dropdown">
                                    <a class="lang" key="hm11"  href="#"style="font-size:18px ;">Services</a>
                                    <ul class="dropdown">
                                        <li><a class="lang" key="hm2"  href="tours.php">Tours</a></li>
                                        <li><a class="lang" key="hm18"  href="freight.php">Freight</a></li>
                                        <li><a class="lang" key="hm7" href="hotels.php">Hotels</a></li>
                                    </ul>
                                </li>
                                
                                <li><a class="lang" key="hm12"href="blog.php"style="font-size:18px ;">Blog</a></li>
                                <li><a class="lang" key="hm13" href="about.php"style="font-size:18px ;">About</a></li>
                                <li><a class="lang" key="hm14" href="contact.php"style="font-size:18px ;">Contact</a></li>
                            
                                    <li class="has-dropdown">
                                    <a class="lang" key="hm15" href="#"style="font-size:18px ;">Languages</a>
                                    <ul class="dropdown">
                                        <li ><button style="  background-color: transparent;
                                            background-repeat:no-repeat;
                                            border: none;
                                            font-size: 1.2em;
                                            font-color: white;
                                            font-weight: 900;
                                            cursor:pointer;
                                            overflow: hidden;
                                            outline:none;" class="translate" id="en">English</button></li>
                                        <li ><button style="  background-color: transparent;
                                                background-repeat:no-repeat;
                                                border: none;
                                                font-color: white;
                                                font-weight: 900;
                                                font-size: 1.2em;
                                                cursor:pointer;
                                                overflow: hidden;
                                                outline:none;" class="translate" id="hi">Hindi</button></li>
                            </ul>
                            <li class="has-dropdown">
                                    <a class="lang" style="cursor:pointer;">
                                    <img src="images/user.png" width="30" height="30"></a>
                                    <ul class="dropdown" style="margin-left: -10px;">
                                        <li ><a href="user.php"><button style="  background-color: transparent;
                                                background-repeat:no-repeat;
                                                border: none;
                                                font-color: white;
                                                text-align: left;
                                                font-weight: 900;
                                                font-size: 1.2em;
                                                cursor:pointer;
                                                overflow: hidden;
                                                outline:none;"><?php echo $user_data['user_name']; ?></button></a></li>
                                        
                                        <li ><a href="logout.php"><button style="  background-color: transparent;
                                                background-repeat:no-repeat;
                                                border: none;
                                                font-color: white;
                                                font-weight: 900;
                                                font-size: 1.2em;
                                                cursor:pointer;
                                                overflow: hidden;
                                                outline:none;">Log Out</button></a>
                            </ul></li>
                        </div>
                    </div>
                </div>
            </div>
        </nav>