<?php
$page_name = $this->uri->rsegment(1);
$sub_name = $this->uri->rsegment(2);
/*switch ($page_name)
{
    case 'download':
        $html_title = "下载 CodeIgniter - CodeIgniter 中国";
        break;
    case 'docs':
        $html_title = "CodeIgniter 用户手册 - CodeIgniter 中国";
        break;
    case 'community':
        $html_title = "CodeIgniter 中文社区 - CodeIgniter 中国";
        break;
    case 'contribute':
        $html_title = "CodeIgniter 贡献 - CodeIgniter 中国";
        break;
    case 'help':
        if ($sub_name == 'legal')
        {
            $html_title = "保留条款 - CodeIgniter 中国";
        }
        elseif ($sub_name == 'about')
        {
            $html_title = "关于 - CodeIgniter 中国";
        }
        else
        {
            $html_title = "政策 - CodeIgniter 中国";
        }
        break;
    case 'news':
        $html_title = "{$NewsTitle}新闻 - CodeIgniter 中国";
        break;
    case 'tutorials':
        if (isset($TutorialTitle))
        {
            $html_title = $TutorialTitle . ' - ';
        }
        else
        {
            $html_title = '';
        }
        $html_title .= 'CodeIgniter 视频教程 | CodeIgniter 中国';
        break;
    case 'projects':
        $html_title = 'CodeIgniter 应用案例 | CodeIgniter 中国';
        break;
    case 'irc':
        $html_title = "IRC | CodeIgniter 中国";
        break;
    default:
        $html_title = 'CodeIgniter 中国 - PHP 框架 CodeIgniter 中国社区';
}*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:wb="http://open.weibo.com/wb">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title><?=empty($html_title) ? 'CodeIgniter 中国 - PHP 框架 CodeIgniter 中国社区' : $html_title . ' - CodeIgniter 中国'?></title>
        <link rel="icon" type="image/png" href="<?=base_url('/assets/images/ci-icon.png')?>" />
        <link rel="stylesheet" type="text/css" href="<?=base_url('/assets/css/bootstrap.min.css')?>" media="screen"/>
        <link rel="stylesheet" type="text/css" href="<?=base_url('/assets/css/style.css')?>"/>
        <link rel="canonical" href="http://codeigniter.org.cn<?=$_SERVER['REQUEST_URI']?>" />
        <link rel="home" href="<?=site_url();?>" title="首页" />
        <meta name="description" content="CodeIgniter: 帮助你编写 Web 应用程序的敏捷开源 PHP 框架" />
        <meta name="keywords" content="CodeIgniter,PHP,PHP框架,MVC框架,开放源代码,开源,应用程序,快速开发,MVC,framework,web,application" />
        <script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js" type="text/javascript" charset="utf-8"></script>
    </head>
    <body>
        <!-- top of the page -->
        <div class="navbar navbar-default navbar-fixed-top" id="mainnav" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><span>CodeIgniter</span><strong>中国</strong></a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li<?php if ($page_name == 'home'): ?> class="active"<?php endif; ?>><a href="<?=site_url()?>"><span class="glyphicon glyphicon-home"></span></a></li>
                        <li<?php if ($page_name == 'download'): ?> class="active"<?php endif; ?>><a href="<?=site_url('download')?>">下载</a></li>
                        <li<?php if ($page_name == 'docs'): ?> class="active"<?php endif; ?>><a href="<?=site_url('docs')?>">用户手册</a></li>
                        <li<?php if ($page_name == 'community'): ?> class="active"<?php endif; ?>><a href="<?=site_url('community')?>">开发者社区</a></li>
                        <li<?php if ($page_name == 'contribute'): ?> class="active"<?php endif; ?>><a href="<?=site_url('contribute')?>">贡献</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>