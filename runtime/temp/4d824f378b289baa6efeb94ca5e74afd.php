<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"E:\WebRoot\PersonalCommunity\public/../application/blog\view\index\index.html";i:1492497008;}*/ ?>
<!doctype html>
<html  xmlns:wb="http://open.weibo.com/wb">
  <head>
  <title><?php echo $title; ?></title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="description" content="<?php echo $desc; ?>">
  <meta name="keywords" content="<?php echo $keywords; ?>">
  <meta name="author" content="<?php echo $author; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="刘强个人博客"/>
  <meta name="msapplication-TileColor" content="#0e90d2">
  <link rel="stylesheet" href="/static/index/css/bootstrap.min.css">
  <link rel="stylesheet" href="/static/blog/assets/css/amazeui.min.css">
  <link rel="stylesheet" href="/static/blog/assets/css/app.css">
  <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
</head>

<body id="blog">
<!-- nav start -->
<nav class="am-g am-g-fixed blog-fixed blog-nav">
  <div class="am-collapse am-topbar-collapse" id="blog-collapse">
    <ul class="am-nav am-nav-pills am-topbar-nav">
      <li class="am-active"><a>博客首页</a></li>
      <?php if(is_array($allCategory) || $allCategory instanceof \think\Collection || $allCategory instanceof \think\Paginator): $i = 0; $__LIST__ = $allCategory;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
      <li>
      <a href="/category-<?php echo $data['cate_id']; ?>.html" target="_blank"><?php echo $data['cate_name']; ?></a>
      </li>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
  </div>
</nav>
<hr>
<!-- nav end -->
<!-- banner start -->
<div class="am-g am-g-fixed blog-fixed am-u-sm-centered blog-article-margin">
    <div data-am-widget="slider" class="am-slider am-slider-b1" data-am-slider='{&quot;controlNav&quot;:false}' >
    <ul class="am-slides">
      <li>
            <img src="/static/blog/assets/i/b1.jpg">
            
      </li>
      <li>
            <img src="/static/blog/assets/i/b2.jpg">
           
      </li>
      <li>
            <img src="/static/blog/assets/i/b3.jpg">
            
      </li>
    </ul>
    </div>
</div>
<!-- banner end -->

<!-- content srart -->
<div class="am-g am-g-fixed blog-fixed">
    <div class="am-u-md-8 am-u-sm-12">
         <?php if(is_array($allArticle) || $allArticle instanceof \think\Collection || $allArticle instanceof \think\Paginator): $i = 0; $__LIST__ = $allArticle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
          <article class="am-g blog-entry-article">
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-img">
                <a href="/readarticle-<?php echo $data['art_id']; ?>.html" target="_blank"><img style="height: 300px;"  src="<?php echo $data['art_cover']; ?>" class="am-u-sm-12"></a>
            </div>
            <div class="am-u-lg-6 am-u-md-12 am-u-sm-12 blog-entry-text">
                <span><a class="blog-color"><?php echo $data['art_editor']; ?> &nbsp;</a></span>
                <span>时间：<?php echo $data['art_time']; ?> &nbsp;</span>
                <span>浏览：<?php echo $data['art_view']; ?> &nbsp;</span>
                <h1><a href="/readarticle-<?php echo $data['art_id']; ?>.html" target="_blank"><?php echo $data['art_title']; ?></a></h1>
                <div style="font-size: 12px;">
                  <a href="/readarticle-<?php echo $data['art_id']; ?>.html" target="_blank"><?php echo $data['art_show']; ?></a>
                </div>
            </div>
          </article>
         <?php endforeach; endif; else: echo "" ;endif; ?>
    <?php echo $allArticle->render(); ?>
    </div>

    <div class="am-u-md-4 am-u-sm-12 blog-sidebar">
        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-text-center blog-title"><span>About ME</span></h2>
            <img src="<?php echo $joker[0]->a_photo; ?>" alt="about me" class="blog-entry-img" >
            <p><?php echo $joker[0]->a_author; ?></p>
          	<p><?php echo $joker[0]->a_introduce; ?></p>
        </div>

        <div class="blog-clear-margin blog-sidebar-widget blog-bor am-g ">
            <h2 class="blog-title"><span>TAG cloud</span></h2>
            <div class="am-u-sm-12 blog-clear-padding">
            <?php if(is_array($allCategory) || $allCategory instanceof \think\Collection || $allCategory instanceof \think\Paginator): $i = 0; $__LIST__ = $allCategory;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
            <a class="blog-tag"><?php echo $data['cate_name']; ?></a>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        </div>

        <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-title"><span>文章推荐</span></h2>
            <ul class="am-list">
            <?php if(is_array($maxView) || $maxView instanceof \think\Collection || $maxView instanceof \think\Paginator): $i = 0; $__LIST__ = $maxView;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
              <li><a href="/readarticle-<?php echo $data['art_id']; ?>.html" target="_blank"><?php echo $data['art_title']; ?></a></li>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
         <div class="blog-sidebar-widget blog-bor">
            <h2 class="blog-text-center blog-title"><span>Contact ME</span></h2>
            <script type="text/javascript">document.write('<iframe width="150" height="239" frameborder="0" scrolling="no" src="http://widget.weibo.com/relationship/bulkfollow.php?language=zh_cn&uids=5230817298&wide=2&color=C2D9F2,FFFFFF,0082CB,666666&showtitle=1&showinfo=1&sense=0&verified=0&count=1&refer='+encodeURIComponent(location.href)+'&dpc=1"></iframe>')</script>
            <p>
                 <a href="tencent://AddContact/?fromId=45&fromSubId=1&subcmd=all&uin=1090035743&website=http://www.joker1996.com" target="_blank"><span class="am-icon-qq am-icon-fw am-primary blog-icon"></span></a>
                <a href="http://www.github.com/g1090035743" target="_blank"><span class="am-icon-github am-icon-fw blog-icon"></span></a>
                <a href="http://www.weibo.com/u/5230817298" target="_blank"><span class="am-icon-weibo am-icon-fw blog-icon"></span></a>
                <a  onmouseover="javascript:showImg('a1');" onmouseout="javascript:hideImg('a1');" ><span class="am-icon-weixin am-icon-fw blog-icon"></span></a>
                <br>
				<a href="http://wpa.qq.com/msgrd?v=3&uin=1090035743&site=qq&menu=yes" target="_blank"><i class="am-icon-qq am-icon-fw"></i> QQ临时会话</a>
				<img  style="display: none; position: absolute;z-index: 100;width: 200px; right: 80px;bottom:135px;" id="a1" src="/static/blog/images/WeChat.png">
            </p>
        </div>
    </div>
    
</div>
<!-- content end -->



  <footer class="blog-footer">
    <div class="blog-text-center"><?php echo $joker[0]->a_copyright; ?></div>    
  </footer>
<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/static/blog/assets/js/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/static/blog/assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="/static/blog/assets/js/amazeui.min.js"></script>
<!-- 显示微信二维码 -->
<script type="text/javascript">
function showImg(imgid){ document.getElementById(imgid).style.display = "block"; } 
function hideImg(imgid){ document.getElementById(imgid).style.display = "none";  } 
</script>
</body>
</html>