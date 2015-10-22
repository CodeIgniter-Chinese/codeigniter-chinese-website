<?php $this->load->view('header_view', array('html_title' => 'CodeIgniter 用户手册')); ?>

<div class="header">
    <div class="container">
        <h1>CodeIgniter 用户手册</h1>
    </div>
</div>

<!-- center of the page -->
<div id="content">
    <div class="container">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12 text-center title">
                    <span class="glyphicon glyphicon-book big-glyph"></span>
                    CodeIgniter 框架的主要文档是《用户手册》，本手册可以离线下载，也可以在线浏览
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="bs-component">
                        <div class="well download">
                            <h3 class="text-center">CodeIgniter 3.x</h3>

                            CodeIgniter 3.x 是框架的最新稳定版，仍在持续开发中。<br><br>

                            《用户手册》包含入门介绍、教程、一些“如何做”的指导，还有一些框架组件的参考文档。<br><br>

                            CodeIgniter 3.x is 遵循 <a href="<?=base_url('user_guide/license.html')?>">MIT 协议</a>。<br><br>
                            <strong>注意：</strong>下列链接指向的《用户手册》是从中文手册项目的“develop”分支定期构建的，可能包含一些未正式发布功能的介绍。与框架发布版对应的《用户手册》在框架的安装包中。<br/><br/>
                            <a href="<?=base_url('user_guide')?>" class="btn btn-warning btn-block"><span class="glyphicon glyphicon-share"></span> 在线浏览《用户手册》（3.x）</a>
                            <a href="http://codeigniter-chinese.github.io/codeigniter-user-guide/codeigniter_user_guide.zip" class="btn btn-warning btn-block"><span class="glyphicon glyphicon-save"></span> 下载用于离线阅读的《用户手册》（3.0.1）</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="bs-component">
                        <div class="well download">
                            <h3 class="text-center">CodeIgniter 2.x</h3>

                            CodeIgniter 2.x 是停止开发的旧版本。<br><br>

                            《用户手册》包含入门介绍、教程、一些“如何做”的指导，还有一些框架组件的参考文档。<br><br>

                            CodeIgniter 2.x 遵循 <a href="<?=base_url('userguide2/license.html')?>">EllisLab 开源协议</a>。<br><br>
                            <a href="<?=base_url('userguide2')?>" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-share"></span> 在线浏览《用户手册》（2.x）</a>
                            <a href="<?=base_url('download_files/CodeIgniter2-stable-user_guide.zip')?>" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-save"></span> 下载用于离线阅读的《用户手册》（2.x）</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<?php $this->load->view('footer_view'); ?>