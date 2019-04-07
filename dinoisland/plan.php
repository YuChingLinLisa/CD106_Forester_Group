<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0,viewport-fit=cover">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>行程規劃</title>
    <style type="text/css">
        *{
            /*outline: 1px solid #f00;*/
        }
        </style>
    <link rel="stylesheet" href="css/plan.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="Shortcut Icon" type="image/x-icon" href="image/logo_eye.png" />
    <!-- <link rel="Shortcut Icon" type="image/x-icon" href="image/EGG_icon.png" /> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.1/TweenMax.min.js"></script>
    <script src="js/common.js"></script>
    <!-- <script src="js/dragDrop.js"></script> -->
</head>
<body>

    <!-- 提示框開始 -->
    <div class="before_start">
        <div class="start_box">
            <p>您可以<span>點擊活動查看詳情及評價</span>，您也可以將<span>右側活動拖拉至左側規劃框內</span>，為您的行程進行規劃，規劃框內的活動也可以<span>上下拖拉交換</span>喔！</p>
            <div class="close_btn">我知道了</div>
        </div>
    </div>

    <div class="after_store">
        <div class="store_box">
            <p>您的行程已新增成功，如需查看或修改，請至會員專區<a href="addMemPageSession.php" id="myPlanPage">我的行程</a>！</p>
            <a href="removeMemPlanSession.php" class="home_btn">回到首頁</a>
            <a href="tickets.php" class="buy_btn">立即購票</a>
        </div>
    </div>

    <!-- 提示框結束 -->
    

   <!-- 導覽列開始 -->
   <nav class="navDesk">
            <div class="navUp">
                <ul>
                    <li>
                        
                        <a href=login.php                        
                        ><img src="image/qr-code.png" alt="" >

                
                            票</a>
                    </li>
                    <li>
                    <a href=login.php                        
                        >收藏</a>
                    </li>
                    <li>
                        <a href=login.php>
                        <img src="image/man-user.png" alt="">
                        訪客</a>
                    </li>
                    <li>
                        <a href=
                        login.php>
                        登入</a>
                    </li>
                </ul>
            </div>
            <div class="navBot">
                <a href="index.php" class="navDeskLogo">
                </a>
                <div class='container'>
                    <div class='eye'></div>
                </div>
                <img src="image/clawLeft.png" alt="" id="clawLeft">
                <img src="image/clawRright.png" alt="" id="clawRight">
                <img src="image/leftStick.png" alt="" id="ropeLeft">
                <img src="image/rightStick.png" alt="" id="ropeRight">
                <img src="image/close_N.png" alt="" id="bigNmouse">
                <img src="image/open_S.png" alt="" id="Smouse">
                <img src="image/open_eye.png" alt="" id="eyeMouse">
                <ul>
                    <li>
                        <a href="plan.php"><img src="image/scratch_left.png" alt="">行程規劃</a>
                    </li>
                    <li>
                        <a href="tickets.php">線上購票</a>
                    </li>
                    <li>
                        <a href="DinoInstro.php">恐龍介紹</a>
                    </li>
                    <li>
                        
                        <a href="game.php">餵食遊戲</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- 導覽列結束 -->
        <!-- 手機導覽列開始 -->
        <nav class="navMob">
            <div class="navMobTop">
                <a href="index.php"><img src="image/logo.png" alt=""></a>
                <div class="navMobBurger">
                    <div class="burgerLine burgerLine1"></div>
                    <div class="burgerLine burgerLine2"></div>
                </div>
            </div>
            <div class="navMobCon">
                <a href="officalPlan.php" class="navMobConDiv navMobConDiv1">
                    <p>官方推薦行程</p>
                </a>
                <a href="tickets.php" class="navMobConDiv navMobConDiv2">
                    <p>線上購票</p>
                </a>
                <a href="DinoInstro.php" class="navMobConDiv navMobConDiv3">
                    <p>恐龍介紹</p>
                </a>
                <a href="game.php" class="navMobConDiv navMobConDiv4">
                    <p>餵食遊戲</p>
                </a>
                <a href="login.php" class="navMobConDiv navMobConDiv5">
                            <p>QRcode驗證</p>
                            </a>
                <a href=
                login.php class="navMobConDiv navMobConDiv6">
                    <p>會員專區</p>
                </a>
            </div>
        </nav>
        <!-- 手機導覽列結束 -->
    <!-- 天空背景開始 -->
    <div class="skyBg">
        <img src="image/headerBg.png" alt="">
    </div>
    <!-- 天空背景結束 -->
    


     <!-- content start -->

    <section class="plan_section">
        <div class="plan_wrap">
            <div class="plan_subwrap">
                <div class="plan_case">
                    <div class="plan_event_title_box">
                        <div class="plan_event_title">活動列表</div>
                        <form action="" method="get" class="plan_select_form">
                            <select name="planList" id="plan_list_select" onchange="getEventList()">
                                <option value="1">官方推薦</option>
                                <option value="2">最受歡迎</option>
                                <option value="3">最多留言</option>
                            </select>
                        </form>
                    </div>
                    <form action="eventToDb.php" method="get" id="plan_form">
                        <div class="plan_title_box">
                             <input type="text" name="planTitle" class="plan_title" id="planTitle" required>
                             <label for="planTitle"><i class="fas fa-pencil-alt"></i></label>
                        </div>
                        <div class="plan_container">
                            <div class="plan_start">規劃你的行程
                                <span class="plan_money">金額：
                                    <span class="plan_number" id="plan_number"></span>
                                    <input type="hidden" name="mPlanPrice" id="plan_price" value="">
                                </span>
                                <span class="plan_dollar">元</span>
                            </div>
                            <div class="plan_container_drop" id="planContainer">
                                <div class="plan_start_btn">
                                    <img src="image/planStartBtn.png">
                                </div>
                                <div id="plan_drop_zone">
                                                                </div>
                            </div>
                        </div>
                        <input type="submit" name="planStoreBtn" value="新增行程" class="plan_btn store_btn" id="plan_store_btn">
                    </form>
                    <div id="plan_list_zone" class="plan_container plan_container_list">
                                                    <div class="event_group" data-wow-offset="-100" id="eventGroup">
                                    <input type="hidden" name="entNo[]" value="1" id="inputEntNo1">
                                    <div class="event_icon">
                                        <img src="image/event_mark.png">
                                    </div>
                                    <div class="plan_pic_group">
                                        <img src="image/event1.jpeg">
                                    </div>
                                    <div class="plan_event_txt">
                                        <h3>恐龍遊行</h3>
                                        <p class="event_p">可愛的恐龍寶寶就在各位眼前列隊前進！</p>
                                        <div class="event_grade">
                    <img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'>                                        </div>
                                        <div class="plan_msg">
                                            <i class="fas fa-comment"></i>
                                            <span>3</span><span>則評論</span>
                                        </div>
                                    </div>
                                    <span class="dollar_mark">$</span>
                                    <span class="event_money">30</span>
                                    <i class="fas fa-trash-alt"></i>
                                </div>

                                                    <div class="event_group" data-wow-offset="-100" id="eventGroup">
                                    <input type="hidden" name="entNo[]" value="3" id="inputEntNo3">
                                    <div class="event_icon">
                                        <img src="image/event_mark.png">
                                    </div>
                                    <div class="plan_pic_group">
                                        <img src="image/event3.jpg">
                                    </div>
                                    <div class="plan_event_txt">
                                        <h3>蒼龍餵食秀</h3>
                                        <p class="event_p">近距離體驗超巨大滄龍進食的震撼吧！</p>
                                        <div class="event_grade">
                    <img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'>                                        </div>
                                        <div class="plan_msg">
                                            <i class="fas fa-comment"></i>
                                            <span>4</span><span>則評論</span>
                                        </div>
                                    </div>
                                    <span class="dollar_mark">$</span>
                                    <span class="event_money">150</span>
                                    <i class="fas fa-trash-alt"></i>
                                </div>

                                                    <div class="event_group" data-wow-offset="-100" id="eventGroup">
                                    <input type="hidden" name="entNo[]" value="4" id="inputEntNo4">
                                    <div class="event_icon">
                                        <img src="image/event_mark.png">
                                    </div>
                                    <div class="plan_pic_group">
                                        <img src="image/event4.jpg">
                                    </div>
                                    <div class="plan_event_txt">
                                        <h3>雷龍遊園</h3>
                                        <p class="event_p">騎著雷龍親自體驗恐龍們的生活模樣！</p>
                                        <div class="event_grade">
                    <img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'>                                        </div>
                                        <div class="plan_msg">
                                            <i class="fas fa-comment"></i>
                                            <span>2</span><span>則評論</span>
                                        </div>
                                    </div>
                                    <span class="dollar_mark">$</span>
                                    <span class="event_money">300</span>
                                    <i class="fas fa-trash-alt"></i>
                                </div>

                                                    <div class="event_group" data-wow-offset="-100" id="eventGroup">
                                    <input type="hidden" name="entNo[]" value="5" id="inputEntNo5">
                                    <div class="event_icon">
                                        <img src="image/event_mark.png">
                                    </div>
                                    <div class="plan_pic_group">
                                        <img src="image/event5.jpg">
                                    </div>
                                    <div class="plan_event_txt">
                                        <h3>攀岩</h3>
                                        <p class="event_p">適合全家大小以一起來體驗的攀岩活動!
</p>
                                        <div class="event_grade">
                    <img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'>                                        </div>
                                        <div class="plan_msg">
                                            <i class="fas fa-comment"></i>
                                            <span>1</span><span>則評論</span>
                                        </div>
                                    </div>
                                    <span class="dollar_mark">$</span>
                                    <span class="event_money">100</span>
                                    <i class="fas fa-trash-alt"></i>
                                </div>

                                                    <div class="event_group" data-wow-offset="-100" id="eventGroup">
                                    <input type="hidden" name="entNo[]" value="6" id="inputEntNo6">
                                    <div class="event_icon">
                                        <img src="image/event_mark.png">
                                    </div>
                                    <div class="plan_pic_group">
                                        <img src="image/event6.jpg">
                                    </div>
                                    <div class="plan_event_txt">
                                        <h3>獨木舟</h3>
                                        <p class="event_p">迪諾島獨木舟奇幻之旅，一覽恐龍秘境</p>
                                        <div class="event_grade">
                    <img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'>                                        </div>
                                        <div class="plan_msg">
                                            <i class="fas fa-comment"></i>
                                            <span>1</span><span>則評論</span>
                                        </div>
                                    </div>
                                    <span class="dollar_mark">$</span>
                                    <span class="event_money">100</span>
                                    <i class="fas fa-trash-alt"></i>
                                </div>

                                                    <div class="event_group" data-wow-offset="-100" id="eventGroup">
                                    <input type="hidden" name="entNo[]" value="7" id="inputEntNo7">
                                    <div class="event_icon">
                                        <img src="image/event_mark.png">
                                    </div>
                                    <div class="plan_pic_group">
                                        <img src="image/event7.jpg">
                                    </div>
                                    <div class="plan_event_txt">
                                        <h3>釣魚</h3>
                                        <p class="event_p">可將剛垂釣上岸的魚於現場用炭火現烤現吃</p>
                                        <div class="event_grade">
                    <img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'>                                        </div>
                                        <div class="plan_msg">
                                            <i class="fas fa-comment"></i>
                                            <span>1</span><span>則評論</span>
                                        </div>
                                    </div>
                                    <span class="dollar_mark">$</span>
                                    <span class="event_money">100</span>
                                    <i class="fas fa-trash-alt"></i>
                                </div>

                                                    <div class="event_group" data-wow-offset="-100" id="eventGroup">
                                    <input type="hidden" name="entNo[]" value="8" id="inputEntNo8">
                                    <div class="event_icon">
                                        <img src="image/event_mark.png">
                                    </div>
                                    <div class="plan_pic_group">
                                        <img src="image/event8.jpg">
                                    </div>
                                    <div class="plan_event_txt">
                                        <h3>挖掘化石</h3>
                                        <p class="event_p">挖恐龍的最佳去處在這！</p>
                                        <div class="event_grade">
                    <img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'>                                        </div>
                                        <div class="plan_msg">
                                            <i class="fas fa-comment"></i>
                                            <span>1</span><span>則評論</span>
                                        </div>
                                    </div>
                                    <span class="dollar_mark">$</span>
                                    <span class="event_money">50</span>
                                    <i class="fas fa-trash-alt"></i>
                                </div>

                                                    <div class="event_group" data-wow-offset="-100" id="eventGroup">
                                    <input type="hidden" name="entNo[]" value="9" id="inputEntNo9">
                                    <div class="event_icon">
                                        <img src="image/event_mark.png">
                                    </div>
                                    <div class="plan_pic_group">
                                        <img src="image/event9.jpg">
                                    </div>
                                    <div class="plan_event_txt">
                                        <h3>求生技能教學</h3>
                                        <p class="event_p">快來跟著教練，學會野外求生的祕訣！</p>
                                        <div class="event_grade">
                    <img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'>                                        </div>
                                        <div class="plan_msg">
                                            <i class="fas fa-comment"></i>
                                            <span>1</span><span>則評論</span>
                                        </div>
                                    </div>
                                    <span class="dollar_mark">$</span>
                                    <span class="event_money">50</span>
                                    <i class="fas fa-trash-alt"></i>
                                </div>

                                                    <div class="event_group" data-wow-offset="-100" id="eventGroup">
                                    <input type="hidden" name="entNo[]" value="10" id="inputEntNo10">
                                    <div class="event_icon">
                                        <img src="image/event_mark.png">
                                    </div>
                                    <div class="plan_pic_group">
                                        <img src="image/event10.jpg">
                                    </div>
                                    <div class="plan_event_txt">
                                        <h3>探索海底浮潛</h3>
                                        <p class="event_p">一覽迪諾島美麗的海底景觀及沿海景緻</p>
                                        <div class="event_grade">
                    <img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'>                                        </div>
                                        <div class="plan_msg">
                                            <i class="fas fa-comment"></i>
                                            <span>1</span><span>則評論</span>
                                        </div>
                                    </div>
                                    <span class="dollar_mark">$</span>
                                    <span class="event_money">300</span>
                                    <i class="fas fa-trash-alt"></i>
                                </div>

                                                    <div class="event_group" data-wow-offset="-100" id="eventGroup">
                                    <input type="hidden" name="entNo[]" value="11" id="inputEntNo11">
                                    <div class="event_icon">
                                        <img src="image/event_mark.png">
                                    </div>
                                    <div class="plan_pic_group">
                                        <img src="image/event11.jpg">
                                    </div>
                                    <div class="plan_event_txt">
                                        <h3>鬥厚頭龍秀</h3>
                                        <p class="event_p">史上頭最硬的生物爭霸戰，讓你熱血沸騰!</p>
                                        <div class="event_grade">
                    <img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'>                                        </div>
                                        <div class="plan_msg">
                                            <i class="fas fa-comment"></i>
                                            <span>1</span><span>則評論</span>
                                        </div>
                                    </div>
                                    <span class="dollar_mark">$</span>
                                    <span class="event_money">300</span>
                                    <i class="fas fa-trash-alt"></i>
                                </div>

                                                    <div class="event_group" data-wow-offset="-100" id="eventGroup">
                                    <input type="hidden" name="entNo[]" value="12" id="inputEntNo12">
                                    <div class="event_icon">
                                        <img src="image/event_mark.png">
                                    </div>
                                    <div class="plan_pic_group">
                                        <img src="image/event12.jpg">
                                    </div>
                                    <div class="plan_event_txt">
                                        <h3>火山歷險</h3>
                                        <p class="event_p">周遭危機四伏，感受熔岩熱度與心跳加速</p>
                                        <div class="event_grade">
                    <img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'>                                        </div>
                                        <div class="plan_msg">
                                            <i class="fas fa-comment"></i>
                                            <span>1</span><span>則評論</span>
                                        </div>
                                    </div>
                                    <span class="dollar_mark">$</span>
                                    <span class="event_money">350</span>
                                    <i class="fas fa-trash-alt"></i>
                                </div>

                                                    <div class="event_group" data-wow-offset="-100" id="eventGroup">
                                    <input type="hidden" name="entNo[]" value="13" id="inputEntNo13">
                                    <div class="event_icon">
                                        <img src="image/event_mark.png">
                                    </div>
                                    <div class="plan_pic_group">
                                        <img src="image/event13.jpg">
                                    </div>
                                    <div class="plan_event_txt">
                                        <h3>恐龍秀</h3>
                                        <p class="event_p">馬戲帳棚已升起，神奇魔幻秀已經來到！</p>
                                        <div class="event_grade">
                    <img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'>                                        </div>
                                        <div class="plan_msg">
                                            <i class="fas fa-comment"></i>
                                            <span>1</span><span>則評論</span>
                                        </div>
                                    </div>
                                    <span class="dollar_mark">$</span>
                                    <span class="event_money">150</span>
                                    <i class="fas fa-trash-alt"></i>
                                </div>

                                                    <div class="event_group" data-wow-offset="-100" id="eventGroup">
                                    <input type="hidden" name="entNo[]" value="14" id="inputEntNo14">
                                    <div class="event_icon">
                                        <img src="image/event_mark.png">
                                    </div>
                                    <div class="plan_pic_group">
                                        <img src="image/event14.jpg">
                                    </div>
                                    <div class="plan_event_txt">
                                        <h3>恐龍碰碰球</h3>
                                        <p class="event_p">零距離互動！讓我們一起穿梭於恐龍之間</p>
                                        <div class="event_grade">
                    <img width='24px' src='image/gradeDino.png'>                                        </div>
                                        <div class="plan_msg">
                                            <i class="fas fa-comment"></i>
                                            <span>1</span><span>則評論</span>
                                        </div>
                                    </div>
                                    <span class="dollar_mark">$</span>
                                    <span class="event_money">250</span>
                                    <i class="fas fa-trash-alt"></i>
                                </div>

                                                    <div class="event_group" data-wow-offset="-100" id="eventGroup">
                                    <input type="hidden" name="entNo[]" value="15" id="inputEntNo15">
                                    <div class="event_icon">
                                        <img src="image/event_mark.png">
                                    </div>
                                    <div class="plan_pic_group">
                                        <img src="image/event15.jpg">
                                    </div>
                                    <div class="plan_event_txt">
                                        <h3>絢爛煙火秀</h3>
                                        <p class="event_p">五彩繽紛的煙花秀，絕對讓您永生難忘！</p>
                                        <div class="event_grade">
                    <img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'>                                        </div>
                                        <div class="plan_msg">
                                            <i class="fas fa-comment"></i>
                                            <span>1</span><span>則評論</span>
                                        </div>
                                    </div>
                                    <span class="dollar_mark">$</span>
                                    <span class="event_money">50</span>
                                    <i class="fas fa-trash-alt"></i>
                                </div>

                                                    <div class="event_group" data-wow-offset="-100" id="eventGroup">
                                    <input type="hidden" name="entNo[]" value="16" id="inputEntNo16">
                                    <div class="event_icon">
                                        <img src="image/event_mark.png">
                                    </div>
                                    <div class="plan_pic_group">
                                        <img src="image/event16.jpg">
                                    </div>
                                    <div class="plan_event_txt">
                                        <h3>恐龍博物館</h3>
                                        <p class="event_p">讓您更了解恐龍知識與演化歷程</p>
                                        <div class="event_grade">
                    <img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'><img width='24px' src='image/gradeDino.png'>                                        </div>
                                        <div class="plan_msg">
                                            <i class="fas fa-comment"></i>
                                            <span>1</span><span>則評論</span>
                                        </div>
                                    </div>
                                    <span class="dollar_mark">$</span>
                                    <span class="event_money">50</span>
                                    <i class="fas fa-trash-alt"></i>
                                </div>

                                                    <div class="event_group" data-wow-offset="-100" id="eventGroup">
                                    <input type="hidden" name="entNo[]" value="17" id="inputEntNo17">
                                    <div class="event_icon">
                                        <img src="image/event_mark.png">
                                    </div>
                                    <div class="plan_pic_group">
                                        <img src="image/event17.jpeg">
                                    </div>
                                    <div class="plan_event_txt">
                                        <h3>在星空下與雷龍共遊</h3>
                                        <p class="event_p">能坐看雲海、擁抱萬點星空</p>
                                        <div class="event_grade">
                                                            </div>
                                        <div class="plan_msg">
                                            <i class="fas fa-comment"></i>
                                            <span>0</span><span>則評論</span>
                                        </div>
                                    </div>
                                    <span class="dollar_mark">$</span>
                                    <span class="event_money">100</span>
                                    <i class="fas fa-trash-alt"></i>
                                </div>

                        
                    </div>
                    <div class="info_container" id="infoContainer"></div> 
                </div>
            </div>
        </div>
    </section>

    <!-- content end -->
    <!-- 測試用填充物DIV,請刪除 -->
    <!-- 各個頁面的內容從這裡結束 -->

    <!--FOOTER開始 -->
    <footer>
        <div class="footWraper">
            <img src="image/footerBg.png" alt="" class="footBg">
            <ul>
                <li><img src="image/footerIcon.png" alt="" class="footIcon"> TEL 39 0994-7765642</li>
                <li><img src="image/footerIcon.png" alt="" class="footIcon"> AM09:30~PM22:30(全年無休)</li>
                <li><img src="image/footerIcon.png" alt="" class="footIcon"> 乘船地點:冰河蘇達帕蒂加雷島(芭芭拉度仲秋M星號)</li>
            </ul>
            <div class="footBot">
                Copyright© Since 2018 DINO ISLAND All Right Reserve 
            </div>
        </div>
    </footer>
    <!--FOOTER結束 -->



    <!-- 提示框消失 -->
    <script>
        $('.close_btn').click(function(){
                $('.before_start').css('display','none');
                
            });
    </script>


    

    <!-- 垃圾桶hover效果 金額加總 移除活動-->

    <script>
        $('.planItem').hover(function(){
                $(this).find('.fas.fa-trash-alt').css('display','block');
            },function(){
                $(this).find('.fas.fa-trash-alt').css('display','none');
        });

        // console.log(chenmoney);
                    var total = 0;
                    var amount = document.querySelectorAll(".planItem .event_money");
                    for( i=0; i < amount.length; i++){
                        var chenmoney = $('.planItem').eq(i).find('span').eq(1).text();
                        total += parseInt( chenmoney);

                    }
                    document.getElementById('plan_number').innerText = total;
                    document.getElementById('plan_price').value = total;

                    $('.planItem .fas.fa-trash-alt').click(function(e){
                        var plan_drop_zone = document.getElementById('plan_drop_zone');
                        var trash = e.target;
                        $(this).parent('.planItem').remove();
                        var entPrice = $(this).prev("span").text();
                        // console.log(entPrice);
                        total -= entPrice;
                        document.getElementById('plan_number').innerText = total;
                        document.getElementById('plan_price').value = total;

                        //remove event session

                        var number = $(this).parent('.planItem').find('input').eq(0).val();
                        // console.log(number);
                        var xhr3 = new XMLHttpRequest();
                        var url3 = "removeEventAction.php?entNo=" + number;
                        xhr3.open("get",url3,true);
                        xhr3.send(null);
                    });
    </script>

    <!-- 未選擇選項前點開詳細內容 -->

    <script>
        $('#plan_list_zone .event_group').click(function(e){
            console.log($(this).children('input').val());
                    
            var xhr1 = new XMLHttpRequest();
            xhr1.onload=function(){
                if(xhr1.status == 200){

                    document.getElementById('infoContainer').innerHTML = xhr1.responseText;

                    $('.report_btn').click(function(e){
                        var xhr4 = new XMLHttpRequest();
                        var url4 = "messageReport.php?msgNo=" + $(this).prev('.report_msg_name').val();
                        xhr4.open("Get", url4, true);
                        xhr4.send(null);
                        $(this).css({
                            backgroundColor:'#fff',
                            border:'1px solid #aaa',
                            color:'#aaa',
                            cursor:'default'
                        }).val('已檢舉').attr('disabled','disabled');

                    });

                    $('.cancel_bar').click(function(){
                        $('.info_container').removeClass('active');
                    });

                }else{
                    alert(xhr1.status);
                }
            }


            var url1 = "getEventContent.php?entNo=" + $(this).children('input').val();
            xhr1.open("Get", url1, true);
            xhr1.send(null);

            $('.info_container').addClass('active');



        });
    </script>

    <!-- 未選擇選項前的拖拉 -->

    <script>
        $(function(){

            $('.event_group').animate({
                top:'0px'
            },1000,'easeInOutQuart');


            
            $('#plan_list_zone #eventGroup').draggable({
                appendTo:"parent",
                helper:"clone",
                
            });


            $('#planContainer #plan_drop_zone').droppable({
                activeClass: "ui-state-default",
                hoverClass: "ui-state-hover",
                accept: ":not(.ui-sortable-helper)",
                drop: function(event, ui){
    
                    
                    $("<div></div>").addClass("planItem").html( ui.draggable.html()).appendTo(this);
                    $('p').remove('.planItem .event_p');
                    $('div').remove('.planItem .event_grade');
                    $('div').remove('.planItem .plan_msg');
                    $('.planItem .event_icon').css('display','inline-block');
                    $('.planItem .dollar_mark').css('visibility','hidden');
                    $('.planItem .event_money').css('visibility','hidden');
                    $('.planItem .plan_pic_group').css({
                        width:'100px',
                        height:'65.75px',
                    });
                    

                    
                    // console.log(chenmoney);
                    var total = 0;
                    var amount = document.querySelectorAll(".planItem .event_money");
                    for( i=0; i < amount.length; i++){
                        var chenmoney = $(this).find('.planItem').eq(i).find('span').eq(1).text();
                        total += parseInt( chenmoney);

                    }
                    document.getElementById('plan_number').innerText = total;
                    document.getElementById('plan_price').value = total;

                    $('.planItem').hover(function(){
                            $(this).find('.fas.fa-trash-alt').css('display','block');
                        },function(){
                            $(this).find('.fas.fa-trash-alt').css('display','none');
                    });

                    $('.planItem .fas.fa-trash-alt').click(function(e){
                        var plan_drop_zone = document.getElementById('plan_drop_zone');
                        var trash = e.target;
                        // plan_drop_zone.removeChild(trash.parentNode);
                        $(this).parent('.planItem').remove();
                        var entPrice = $(this).prev("span").text();
                        // console.log(entPrice);
                        total -= entPrice;
                        document.getElementById('plan_number').innerText = total;
                        document.getElementById('plan_price').value = total;

                        //remove event session

                        var number = $(this).parent('.planItem').find('input').eq(0).val();
                        // console.log(number);
                        var xhr3 = new XMLHttpRequest();
                        var url3 = "removeEventAction.php?entNo=" + number;
                        xhr3.open("get",url3,true);
                        xhr3.send(null);


                        
                    });
                    // var entPrice = $(this).find('span').eq(1).text();
                    // console.log(entPrice);

                    // console.log(ui.draggable.find('input').eq(0).val());
                    var eventNum = ui.draggable.find('input').eq(0).val();
                    // console.log(eventNum);
                    //after drop store session
                    var xhr2 = new XMLHttpRequest();
                    var url2 = "addEventAction.php?entNo=" + eventNum;
                    xhr2.open("get",url2,true);
                    xhr2.send(null);

                
                

                
                }
                
                
            }).sortable({
                sort: function(){
                    $(this).removeClass("ui-state-default");
                }
            });


            // $("#plan_store_btn").click(function(){
            //     $("#buy_btn").attr("disabled") = "";
            // });


            //input placeholder

            $('input[type="text"]').attr('placeholder','請為您的行程命名').focus(function(){
                    $(this).attr('placeholder','');
                }).blur(function(){
                    if($(this).val()==''){
                        $(this).attr('placeholder','請為您的行程命名');
                    }
                });
            



        });
    </script>




    <!-- ajax get event list -->


    <script>

        function getEventList(){


            var xhr = new XMLHttpRequest();
            xhr.onload=function(){
                if(xhr.status == 200){
                    document.getElementById('plan_list_zone').innerHTML = xhr.responseText;


                    $('.event_group').animate({
                        top:'0px'
                    },1000,'easeInOutQuart');

                    $('#plan_list_zone #eventGroup').draggable({
                        appendTo:"parent",
                        helper:"clone"
                    });

                    $('#planContainer #plan_drop_zone').droppable({
                        activeClass: "ui-state-default",
                        hoverClass: "ui-state-hover",
                        accept: ":not(.ui-sortable-helper)",
                        drop: function(event, ui){
                            $("<div></div>").addClass("planItem").html( ui.draggable.html()).appendTo(this);
                            $('p').remove('.planItem .event_p');
                            $('div').remove('.planItem .event_grade');
                            $('div').remove('.planItem .plan_msg');
                            $('.planItem .event_icon').css('display','inline-block');
                            $('.planItem .dollar_mark').css('visibility','hidden');
                            $('.planItem .event_money').css('visibility','hidden');
                            $('.planItem .plan_pic_group').css({
                                width:'100px',
                                height:'65.75px',
                            });

                            
                            // console.log(chenmoney);
                            var total = 0;
                            var amount = document.querySelectorAll(".planItem .event_money");
                            for( i=0; i < amount.length; i++){
                                var chenmoney = $(this).find('.planItem').eq(i).find('span').eq(1).text();
                                total += parseInt( chenmoney);

                            }
                            document.getElementById('plan_number').innerText = total;
                            document.getElementById('plan_price').value = total;

                            $('.planItem').hover(function(){
                                $(this).find('.fas.fa-trash-alt').css('display','block');
                            },function(){
                                $(this).find('.fas.fa-trash-alt').css('display','none');
                            });

                            $('.planItem .fas.fa-trash-alt').click(function(e){
                                var plan_drop_zone = document.getElementById('plan_drop_zone');
                                var trash = e.target;
                                // plan_drop_zone.removeChild(trash.parentNode);
                                $(this).parent('.planItem').remove();
                                var entPrice = $(this).prev("span").text();
                                console.log(entPrice);
                                total -= entPrice;
                                document.getElementById('plan_number').innerText = total;
                                document.getElementById('plan_price').value = total;

                                //remove event session

                                var number = $(this).parent('.planItem').find('input').eq(0).val();
                                // console.log(number);
                                var xhr3 = new XMLHttpRequest();
                                var url3 = "removeEventAction.php?entNo=" + number;
                                xhr3.open("get",url3,true);
                                xhr3.send(null);

                                
                            });
                            // var entPrice = $(this).find('span').eq(1).text();
                            // console.log(entPrice);

                            // console.log(ui.draggable.find('input').eq(0).val());
                            var eventNum = ui.draggable.find('input').eq(0).val();
                            // console.log(eventNum);
                            //after drop store session
                            var xhr2 = new XMLHttpRequest();
                            var url2 = "addEventAction.php?entNo=" + eventNum;
                            xhr2.open("get",url2,true);
                            xhr2.send(null);
            

                        }
                    }).sortable({
                        sort: function(){
                            $(this).removeClass("ui-state-default");
                        }
                    });
                    
                    
                    

                    // click show info pannel

                    $('#plan_list_zone .event_group').click(function(e){
                        console.log($(this).children('input').val());
                    
                        var xhr1 = new XMLHttpRequest();
                        xhr1.onload=function(){
                            if(xhr1.status == 200){

                                document.getElementById('infoContainer').innerHTML = xhr1.responseText;

                                $('.report_btn').click(function(e){
                                    var xhr4 = new XMLHttpRequest();
                                    var url4 = "messageReport.php?msgNo=" + $(this).prev('.report_msg_name').val();
                                    xhr4.open("Get", url4, true);
                                    xhr4.send(null);
                                    $(this).css({
                                        backgroundColor:'#fff',
                                        border:'1px solid #aaa',
                                        color:'#aaa',
                                        cursor:'default'
                                    }).val('已檢舉').attr('disabled','disabled');

                                });

                                $('.cancel_bar').click(function(){
                                    $('.info_container').removeClass('active');
                                });

                            }else{
                                alert(xhr1.status);
                            }
                        }


                        var url1 = "getEventContent.php?entNo=" + $(this).children('input').val();
                        xhr1.open("Get", url1, true);
                        xhr1.send(null);

                        $('.info_container').addClass('active');
                    });


                    // $('.event_group').click(function(){
                    //     let iii = $(this).index();
                        // $('.info_container').removeClass('show');
                    //     $('.info_container').eq(iii).addClass('active');
                    // });





                }else{
                    alert(xhr.status);
                }
            }

            var url = "getEventList.php?planList=" + document.getElementById("plan_list_select").value;
            xhr.open("Get", url, true);
            xhr.send(null);
        }
    </script>

  

</body>
</html>