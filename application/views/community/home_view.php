<?php $this->load->view('header_view', array('html_title' => 'CodeIgniter 中文社区')); ?>

<div class="header">
    <div class="container">
        <h1>CodeIgniter 社区</h1>
    </div>
</div>

<!-- center of the page -->
<div id="content">
    <div class="container">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12 text-center title">
                    <span class="glyphicon glyphicon-user big-glyph"></span>
                    CodeIgniter 是一个社区开发的开源项目，在社区中有各种版块供开发者收集和交换意见。
                </div>

                <div class="col-md-12 col-sm-12">
                    <div class="bs-component">
                        <div class="well download">
                            <h3>论坛</h3>

                            <p>
                                我们的论坛使用 Discuz! 搭建，有 5 个主要部分：
                                <ul>
                                    <li>问答求助</li>
                                    <li>代码共享与下载</li>
                                    <li>进阶讨论</li>
                                    <li>教程发布与分享</li>
                                    <li>其他资源（中文化、招聘和工作、项目展示等）</li>
                                </ul>
                            </p>
                            <p><strong>在论坛里你可以寻求帮助或讨论在框架使用中遇到的问题。</strong></p>
                            <a class="btn btn-primary btn-block" href="<?=base_url('forums')?>"><span class="glyphicon glyphicon-share"></span> 访问论坛</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="bs-component">
                        <div class="well download">
                            <h3>IRC</h3>

                            <p>
                                CodeIgniter 中国开通了 IRC 聊天室，名为 #codeigniter-cn。<br>
                                你可以使用你常用的 IRC 客户端进入聊天室，或使用 <a href="http://webchat.freenode.net/?channels=%23codeigniter-cn&uio=d4%22">webchat</a>。本站的 IRC 页面已内嵌 webchat。
                            </p>
                            <p>
                                如果你是 IRC 新用户，请先阅读 <a href="http://workaround.org/getting-help-on-irc" target="_blank">IRC 入门介绍</a>。
                            </p>
                            <a class="btn btn-default btn-block" href="<?=site_url('irc')?>"><span class="glyphicon glyphicon-share"></span> 访问 IRC 页面</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6">
                    <div class="bs-component">
                        <div class="well download">
                            <h3>Github</h3>

                            <p>
                                所有开发行为都记录在 Github。更多细节请查看贡献页面。
                            </p>
                            <p><strong>你可以在 Github 的 Issue 页面提交 BUG 报告，或者提交 pull 请求为框架添砖加瓦。我们【不在】 Github 上提供框架相关的技术支持和帮助，请使用论坛。</strong></p>
                            <p>我们也使用 Github Issue 页面跟进开发计划和采纳功能增强的建议，这些会合并到特定的发布版本中。</p>
                            <br/>
                            <a class="btn btn-default btn-block" href="https://github.com/bcit-ci/CodeIgniter/"><span class="glyphicon glyphicon-share"></span> 访问 Github</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<?php $this->load->view('footer_view'); ?>