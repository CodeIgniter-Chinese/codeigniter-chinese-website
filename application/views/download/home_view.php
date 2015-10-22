<?php $this->load->view('header_view', array('html_title' => '下载 CodeIgniter')); ?>

<div class="header">
    <div class="container">
        <h1>下载 CodeIgniter</h1>
    </div>
</div>

<!-- center of the page -->
<div id="content">
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center title">
                    <span class="glyphicon glyphicon-download big-glyph"></span>
                    CodeIgniter 主要有两个版本：CodeIgniter 3.x 和 CodeIgniter 2.x
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="bs-component">
                        <div class="well download">
                            <h3 class="text-center">CodeIgniter 3.0</h3>

                            CodeIgniter 3.0.2 是框架的最新稳定版。<br><br>
                            这个版本对 2.x 版进行了很多改进，尤其是数据库、Session 和加密。目前这个版本正在持续改进中。<br><br>
                            <a href="https://github.com/bcit-ci/CodeIgniter" class="btn btn-warning btn-block"><span class="glyphicons glyphicons-link"></span> 在 Github 上查看源代码</a>
                            <a href="https://github.com/bcit-ci/CodeIgniter/archive/3.0.2.zip" class="btn btn-warning btn-block"><span class="glyphicon glyphicon-save"></span> 下载 Codeigniter 3.0.2</a>
                            <a href="https://github.com/bcit-ci/codeigniter3-translations/archive/3.0.1.zip" class="btn btn-warning btn-block"><span class="glyphicon glyphicon-save"></span> 下载多国语言支持</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="bs-component">
                        <div class="well download">
                            <h3 class="text-center">CodeIgniter 2.x</h3>

                            CodeIgniter 2.2.5 是停止开发的旧版本。<br><br>
                            2.x 的分支最初发布于 2011 年 1 月，下一个主版本（2.1.0）发布于 2011 年的秋天，2.2.0 版问世于 2014 年 7 月，当前 2.2.5 版发布于 2015 年 9 月。<br><br>
                            <a href="https://github.com/bcit-ci/CodeIgniter/tree/2.2-stable" class="btn btn-primary btn-block"><span class="glyphicons glyphicons-link"></span> 在 Github 上查看源代码</a>
                            <a href="https://github.com/bcit-ci/CodeIgniter/archive/2.2.5.zip" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-save"></span> 下载 Codeigniter 2.2.5</a>
                        </div>
                    </div>
                </div>

                <!--
                <div class="col-md-6 col-sm-6">
                    <div class="bs-component">
                        <div class="well download">
                            <h3 class="text-center">CodeIgniter 4?</h3>

                            CodeIgniter 4 is the upcoming version of the framework.<br><br>
                            We have been discussing it on our forum, and recently released
                            a proposed roadmap. Development is just getting underway,
                            and links will be posted here once there is something you
                            can kick the tires of!<br><br>
                            <a href="http://forum.codeigniter.com/forum-27.html" class="btn btn-success btn-block"><span class="glyphicons glyphicons-link"></span> Join the discussion on our forum!</a>
                        </div>
                    </div>
                </div>
                -->

            </div>
        </div>
    </div>
</div>

<?php $this->load->view('footer_view'); ?>