<!DOCTYPE HTML>

<html>

    <head>
        <meta charset="utf-8"/>
        <meta name="author" content="Lee Ji Hyuk" />
        <link rel="stylesheet" href="Videos.css" type="text/css"/>
        <link rel="stylesheet" href="General.css" type="text/css"/>
        <link rel="stylesheet" href="comment.css" type="text/css"/>
    </head>

    <body
    background="PlayerUnknown's Battlegrounds.png"
    bgcolor="#272527"
    style="background-repeat: no-repeat;"
    >               

        <header>
            <logo_container>
                <a href="Home.html">
                    <img
                    src="PUBG_logo.png"
                    alt="PUBG logo"
                    width="160px"
                    height="80px"
                    />
                </a> 
            </logo_container>
            <main_menu>
                <div class="menu">
                    <a href="Home.html">
                        Home
                    </a>
                </div>
                <div class="menu">    
                    <a href="Weapons.html">
                        Weapons
                    </a>
                    <sub_menu_Weapons class="sub_menu">
                            <ul>
                                <li><a href="Weapons.html#Assault_Rifle">Assault Rifle</a></li>
                                <li><a href="Weapons.html#Submachine_Gun">Submachine Gun</a></li>
                                <li><a href="Weapons.html#Sniper_Rifle">Sniper Rifle</a></li>
                                <li><a href="Weapons.html#Shotgun">Shotgun</a></li>
                                <li><a href="Weapons.html#Machine_Gun">Machine Gun</a></li>
                            </ul>
                    </sub_menu_Weapons>
                </div>
                <div class="menu">
                    <a href="Map.html">
                        Map
                    </a>
                    <sub_menu_Map class="sub_menu">
                        <ul>
                            <li><a href="Map.html">Erangel</a></li>
                        </ul>
                    </sub_menu_Map>
                </div>
                <div class="menu">
                    <a href="Videos.php">
                    Videos
                    </a>
                </div>
            </main_menu>
        </header>

        <section>
            <article class="main_video_page">
                <div class="gray_opacity_radius" style="width:80%; height:600px; overflow: auto;">
                    <h2 style="margin: 0px;">Video</h2>
                    <iframe width="98%" height="90%"
                    src="https://www.youtube.com/embed/ZTVRMLUcIOM"
                    frameborder="0"
                    gesture="media"
                    allow="encrypted-media"
                    allowfullscreen
                    ></iframe>
                </div>
                
                <div class="comment gray_opacity_radius">
                    <h4 style="margin-top: 10px; margin-left: 10px;">??????</h4>
                    <div style="height:100px;">
                        <form class ="bar" action="Videos_C_3.php">
                            <input type ="text"
                            style="display:inline-block; text-align:center; margin:5px; height:20px; width:10%; font-size:12px;"
                            name="author"
                            placeholder="????????????"
                            />
                            <input type ="text"
                            style="display:inline-block; text-align:left; margin:5px; height: 80px; width:70%; font-size:12px;"
                            name="content"
                            placeholder="????????????"
                            />
                            <button type ="submit" style="width:86px; height:76px; margin-top:10px; padding-left:1px; padding-right:1px;">??????</button>
                        </form>
                        <?php
                            $count = file_get_contents("count/count_3.txt");
                            $author = $_GET['author'];
                            $content = $_GET['content'];
                            if($author!=NULL && $content!=NULL){
                                $list = "list_3/".$count.".txt";
                                file_put_contents($list,'<div class ="author">'.$author.'</div>'.'<div class ="content_">'.$content.'</div>');
                                $count = $count + 1;
                                file_put_contents("count/count_3.txt", $count);
                            }
                        ?>
                    </div>
                    <div class ="bar">
                        <div class ="author" style="font-weight:bold;">?????????</div>
                        <div class ="content_" style="font-weight:bold;">??????</div>
                    </div>
                    <?php
                        $count = file_get_contents("count/count_3.txt");
                        for($i = 1; $i <= $count; $i++){
                            echo '<div class ="bar">'; 
                            echo file_get_contents("list_3/".$i.".txt");
                            echo '</div>';
                        }
                    ?>
                </div>
            </article>
            
            <article class="video_clip gray_opacity_radius">
                    <div>
                        <h2 style="margin-bottom: 0px;">Video Clips</h2>
                        <a href="Videos_C_1.php">
                            <p>1????????? ?????? ????????? ?????? ?????????!</p>
                            <img src="tumbnail_1.png" alt="tumbnail_1"/>
                        </a>
                    </div>
                    <div>
                        <a href="Videos_C_2.php">
                            <p>?????????, ????????????..?</p>
                            <img src="tumbnail_2.png" alt="tumbnail_2"/>
                        </a>
                    </div>
                    <div>
                        <a href="Videos_C_3.php">
                            <p>?????????????????? ??????????????? ????????? #89</p>
                            <img src="tumbnail_3.png" alt="tumbnail_3"/>
                        </a>
                    </div>
                    <div>
                        <a href="Videos_C_4.php">
                            <p>?????????????????? ??????????????? ????????? #91</p>
                            <img src="tumbnail_4.png" alt="tumbnail_4"/>
                        </a>
                    </div>
                    <div>
                        <a href="Videos_C_5.php">
                            <p>????????????(DDDD) - ????????? ??? ????????? ????????? ???????????????!</p>
                            <img src="tumbnail_5.png" alt="tumbnail_5"/>
                        </a>
                    </div>
            </article>
        </section>
    </body>

</html>