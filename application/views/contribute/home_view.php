<?php $this->load->view('header_view', array('html_title' => '为 CodeIgniter 贡献力量')); ?>

<div class="header">
    <div class="container">
        <h1>为 CodeIgniter 贡献力量</h1>
    </div>
</div>

<!-- center of the page -->
<div id="content">
    <div class="container">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12 text-center title">
                    <span class="glyphicon glyphicon-heart big-glyph"></span>
                    无论你是不是开发人员，你都可以为 CodeIgniter 项目做出自己的贡献。
                </div>

                <div class="col-md-12 col-sm-12">
                    <p>
                        CodeIgniter 是一个社区驱动的项目，社区可以为项目提供代码和文档两方面的帮助。如果想为项目提供帮助，请在 GitHub 上的 <a href="https://github.com/bcit-ci/CodeIgniter" target="_blank">CodeIgniter 代码仓库</a>中以 Issue 或 Pull Request 的形式提交。
                    </p>
                    <p>
                        提交 Issue 是指出 BUG 最好的方式。如果你找到 CodeIgniter 的一个程序 BUG 或文档错误，那么请首先检查下面几件事：
                        <ul>
                            <li>尚未有人提交过相同的 Issue</li>
                            <li>你提交的问题是否已被修复（查看 develop 分支或搜索已关闭的 Issue）</li>
                            <li>你提交的问题是否清楚明确？你可以自己修复它吗？</li>
                            <li>如果你不确认自己是否找到了一个 BUG，那么你可以在论坛的<a href="<?=base_url('forums/forum-answer-1.html')?>" target="_blank">问答求助</a>板块发帖讨论！</li>
                        </ul>
                    </p>
                    <p>
                        提交 Issue 对 CodeIgniter 项目很有帮助，但更好的方法是先 Fork 项目然后在自己的代码库中开发，然后提交 Pull Request。完成这些事情需要你使用 Git 版本控制系统。
                    </p><br>
                </div>

                <div class="col-md-12 col-sm-12">
                    <div class="bs-component">
                        <div class="well download">
                            <h3>非开发人员？</h3>
                            <div class="list-group">
                                <div class="list-group-item">
                                    <h4 class="list-group-item-heading">测试人员</h4>
                                    <p class="list-group-item-text">
                                        我们非常想了解哪些功能正常哪些功能不正常！因为目前 3.x 版的功能开发是最主要的工作，所以测试人员是项目最需要的。如果你确信自己找到了一个 BUG，并且你是 Github 用户，那么请提交一个“Issue“。如果你不是 Github 用户，或者不确信是否找到了 BUG，那么请在论坛的<a href="<?=base_url('forums/forum-answer-1.html')?>" target="_blank">问答求助</a>板块发帖讨论！
                                    </p>
                                </div>
                                <div class="list-group-item">
                                    <h4 class="list-group-item-heading">文字工作者</h4>
                                    <p class="list-group-item-text">
                                        无论什么项目都需要完善的文档！《用户手册》是 <a href="https://github.com/bcit-ci/CodeIgniter" target="_blank">CodeIgniter 项目</a>的一部分，用户永远不会觉得教程太多。
                                    </p>
                                </div>
                                <div class="list-group-item">
                                    <h4 class="list-group-item-heading">布道者</h4>
                                    <p class="list-group-item-text">
                                        我们认为应该让更多的项目使用 CodeIgniter 框架 :) 你可以通过活跃在论坛来帮助解答大家的疑问，也可以在自己的好友或社区中帮助宣传 CodeIgniter 框架。
                                    </p>
                                </div>
                                <div class="list-group-item">
                                    <h4 class="list-group-item-heading">版主</h4>
                                    <p class="list-group-item-text">
                                        版主对于论坛非常重要，他们可以确保论坛的讨论始终围绕主题，也可以把恶意的用户或帖子拒之门外！
                                    </p>
                                </div>
                                <div class="list-group-item">
                                    <h4 class="list-group-item-heading">设计师</h4>
                                    <p class="list-group-item-text">
                                        非常欢迎为官网、《用户手册》或论坛的设计提出宝贵建议和帮助！我们已把官网和《用户手册》等在 Github 上开源，你可以随时帮助修改页面风格。
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12">
                    <div class="bs-component">
                        <div class="well download">
                            <h3>开发人员？</h3>
                            <div class="list-group">
                                <div class="list-group-item">
                                    <h4 class="list-group-item-heading">程序员</h4>
                                    <p class="list-group-item-text">
                                        如果你想参与 CodeIgniter 新版本的开发，请加入我们的<a href="https://github.com/bcit-ci/CodeIgniter" target="_blank">项目</a>！《用户手册》中有详细的如何为 CodeIgniter 贡献力量的<a href="<?=base_url('user_guide/contributing/index.html')?>">指导</a>，但需要注意的是确保你的代码符合我们的<a href="<?=base_url('user_guide/general/styleguide.html')?>">开发规范</a>，也要撰写合适的文档，并请使用 <a href="http://nvie.com/posts/a-successful-git-branching-model/" target="_blank">Git-Flow</a> 分支模型。
                                    </p>
                                </div>
                                <div class="list-group-item">
                                    <h4 class="list-group-item-heading">评审人</h4>
                                    <p class="list-group-item-text">
                                        无论什么项目都需要一个核心开发组，他们熟悉项目的方方面面，所以需要他们来评审提交的新功能或 BUG 修复。我们很幸运的与评审组一路走到今天，并且也想再邀请一些朋友加入。评审人具有代码库的“提交”权限。
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12">
                    <div class="bs-component">
                        <div class="well download">
                            <h3>你善于高屋建瓴？</h3>
                            <div class="list-group">
                                <div class="list-group-item">
                                    <h4 class="list-group-item-heading">远见卓识之士</h4>
                                    <p class="list-group-item-text">
                                        CodeIgniter 未来的发展方向和规划需要我们仔细的评判与明智的选择。我们有一个小组，他们来自社区，他们是框架的狂热粉丝，他们以委员会的形式来讨论和选择框架的未来发展方向！
                                    </p>
                                    <p>为委员会制定适当的管理方式将是未来一年我们的工作之一。</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12">
                    <div class="bs-component">
                        <div class="well download">
                            <h3>我是学术界人士（来自项目负责人 Jim Parry 的说明...）</h3>
                            <p>
                                我的一部分目标是要围绕这个项目建立一个“living 实验室”，教给我的学生如何参与开源项目，并让他们帮助这个项目，使它成为最棒的框架之一！
                            </p>
                            <p>
                                我非常欢迎与其他学术界人士进行各种层面的合作。合作可以是以共享教材的形式，也可以是以参与你的开源项目的形式，甚至只是分享经验。
                            </p>
                            <hr/>
                            <p>如果你有任何疑问，或想了解更多信息，请<a href="/cdn-cgi/l/email-protection#d6bcbfbb89a6b7a4a4aff0b5b9bbbbb7a2edb4b5bfa2f8b5b7">直接联系我</a>！</p>

                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</div>

<?php $this->load->view('footer_view'); ?>