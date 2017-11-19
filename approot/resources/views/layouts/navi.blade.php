<nav class="navbar-default navbar navbar-static-top navbar-mc200">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#patern05" aria-expanded="false">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand">
                <h1><img src="{{$ContetsPatameter->globalMenu()['logo']}}" class="navbar-mc200-logo" alt="{{$ContetsPatameter->globalMenu()['appTitle']}}"></h1>
            </a>
        </div>

        <div id="patern05" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
            <ul class="nav navbar-nav navbar-right navbar-mc200-list">


                <?php
                    foreach($ContetsPatameter->globalMenu()['menu'] as $key=>$menu) {
                        if (isset($menu["childMenu"]) && is_array($menu["childMenu"])) {
                            $cmf=true;
                        } else {
                            $cmf=false;
                        }
                        echo "<li>\n";
                        if ($cmf == true) {
                            echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown' aria-expanded='false'>";
                        } else {
                            echo "<a href='".$menu["path"]."' target='".$menu["target"]."'>\n";
                        }
                        echo "<img src='".$menu["icon"]."' class='navbar-mc200-icon'>\n";
                        echo $menu["text"]."\n";
                        if ($cmf == true) {
                            echo "<b class='caret'></b>";
                        }
                        echo "</a>\n";

                        if ($cmf == true) {
                            echo "<ul class='dropdown-menu'>\n";
                            foreach($menu["childMenu"] as $key => $menuItem) {
                                echo "<li>";
                                echo "<a href='".$menuItem["path"]."' target='".$menuItem["target"]."'>";
                                echo $menuItem["text"];
                                echo "</a>\n";
                                echo "</li>";
                            }
                            echo "</ul>";
                        }
                        echo "</li>\n";
                    }
                ?>

                <li class="">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="/assets/img/ug-menu.png" class="navbar-mc200-icon">
                        Menu<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="/note/">note top</a></li>
                        <li><a href="/regist/">Sign up</a></li>
                        <li><a href="/board_free/1">自由投稿掲示板</a></li>
                        <li><a href="/board00.php">みんなの投稿</a></li>
                        <li><a href="#">みんなの投稿その２</a></li>
                        <li><a href="#">みんなの投稿その３</a></li>
                        <li><a href="/top.php">TOPページデモ</a></li>
                        <li><a href="/template.php">テンプレート</a></li>
                        <li><a href="/template_form.php">フォームテンプレート</a></li>
                        <li><a href="/calendar/calendar.php">カレンダー</a></li>
                    </ul>
                    </li>
                    <li class="">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="/assets/img/ug-archives.png" class="navbar-mc200-icon">
                            Archives
                        <b class="caret"></b>
                    </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">トピック一覧</a></li>
                            <li><a href="#">画像一覧</a></li>
                            <li><a href="#">地域から探す</a></li>
                            <li><a href="#">トピック一覧</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <img src="/assets/img/ug-note.png" class="navbar-mc200-icon">
                        usage
                        <b class="caret"></b>
                    </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">ご利用方法</a></li>
                            <li><a href="#">注意事項</a></li>
                            <li><a href="#">免責</a></li>
                            <li><a href="/contact">お問い合わせ</a></li>
                        </ul>
                    </li>
            </ul>
        </div>
    </div>
    <!--.container-->
</nav>
