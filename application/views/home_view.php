<?php $this->load->view('header_view'); ?>

<div class="jumbotron">
    <div class="container">
        <div class="hidden-xs hidden-sm col-md-4 col-lg-4 pull-left">
            <img vspace="20" class="jumbotronwidth" alt="" src="<?=base_url('/assets/images/ci-logo-big.png')?>">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <h1>优雅的 CodeIgniter</h1>
            <p>CodeIgniter 是一个小巧但功能强大的 PHP 框架，作为一个简单而“优雅”的工具包，它可以为开发者们建立功能完善的 Web 应用程序。</p>
            <div class="text-left">
                <iframe src="http://ghbtns.com/github-btn.html?user=bcit-ci&repo=CodeIgniter&type=watch&count=true&size=large" allowtransparency="true" frameborder="0" scrolling="0" width="170" height="30"></iframe>
                <iframe src="http://ghbtns.com/github-btn.html?user=bcit-ci&repo=CodeIgniter&type=fork&count=true&size=large" allowtransparency="true" frameborder="0" scrolling="0" width="170" height="30"></iframe>
                <iframe src="http://ghbtns.com/github-btn.html?user=CodeIgniter-Chinese&type=follow&size=large" allowtransparency="true" frameborder="0" scrolling="0" width="280px" height="30px"></iframe>
                <wb:follow-button uid="1416527533" type="red_2" width="136" height="26" ></wb:follow-button>
            </div>
        </div>
    </div>
</div>


<!-- center of the page -->
<div id="content">
    <div class="container">
        <!-- Big Links -->
        <div class="row row-md-flex row-md-flex-wrap">
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="well text-center">
                    <div class="stat-icon">
                        <span class="glyphicon glyphicon-download"></span>
                    </div>
                    <div class="stat-number">
                        <a href="https://github.com/bcit-ci/CodeIgniter/archive/3.0.2.zip">下载 CodeIgniter</a>
                    </div>
                    <div>最新版本：<b>3.0.2 版</b></div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="well text-center">
                    <div class="stat-icon">
                        <span class="glyphicon glyphicon-book"></span>
                    </div>
                    <div class="stat-number">
                        <a href="<?=base_url('user_guide')?>">阅读用户手册</a>
                    </div>
                    <div>清晰完善的文档</div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="well text-center">
                    <div class="stat-icon">
                        <span class="glyphicon glyphicon-user"></span>
                    </div>
                    <div class="stat-number">
                        <a href="<?=base_url('forums')?>">到论坛讨论</a>
                    </div>
                    <div>加入我们的社区</div>
                </div>
            </div>

            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="well text-center">
                    <div class="stat-icon">
                        <span class="glyphicon glyphicon-random"></span>
                    </div>
                    <div class="stat-number">
                        <a href="https://github.com/bcit-ci/CodeIgniter">在 GitHub 上</a>
                    </div>
                    <div>帮助修复 BUG 或开发新功能</div>
                </div>
            </div>
        </div>

        <!--<hr/>

        <div class="row">

            <div class="col-md-6">
                <h3>Recent News</h3>

                <div class="newsitem">
                    <div class="date">2015.08.20</div>
                    <p>
                    <a href="http://forum.codeigniter.com/thread-62743.html">
                        CodeIgniter 2.2.4 Released      </a>
                    </p>
                </div>
                <div class="newsitem">
                    <div class="date">2015.07.27</div>
                    <p>
                    <a href="http://forum.codeigniter.com/thread-62548.html">
                        CodeIgniter 3.0.1 Release Candidate     </a>
                    </p>
                </div>
                <div class="newsitem">
                    <div class="date">2015.07.14</div>
                    <p>
                    <a href="http://forum.codeigniter.com/thread-62431.html">
                        CodeIgniter 2.2.3 Released      </a>
                    </p>
                </div>
                <div class="newsitem">
                    <div class="date">2015.04.18</div>
                    <p>
                    <a href="http://forum.codeigniter.com/thread-61475.html">
                        Planned server downtime April 19/20, 2015       </a>
                    </p>
                </div>
                <div class="newsitem">
                    <div class="date">2015.04.15</div>
                    <p>
                    <a href="http://forum.codeigniter.com/thread-61433.html">CodeIgniter 2.2.2 Released</a>
                    </p>
                </div>
            </div>

            <div class="col-md-6">
                <h3>Active Forum Threads</h3>

                <div class="newsitem">
                    <div class="date">2015.09.25</div>
                    <p>
                    <a href="http://forum.codeigniter.com/thread-61284-lastpost.html">
                        Module support?     </a>
                    </p>
                </div>
                <div class="newsitem">
                    <div class="date">2015.09.25</div>
                    <p>
                    <a href="http://forum.codeigniter.com/thread-63075-lastpost.html">
                        deploying codeigniter application       </a>
                    </p>
                </div>
                <div class="newsitem">
                    <div class="date">2015.09.25</div>
                    <p>
                    <a href="http://forum.codeigniter.com/thread-63078-lastpost.html">
                        Simple HMVC     </a>
                    </p>
                </div>
                <div class="newsitem">
                    <div class="date">2015.09.25</div>
                    <p>
                    <a href="http://forum.codeigniter.com/thread-63077-lastpost.html">
                        does codeigniter recognize system proxy settings?       </a>
                    </p>
                </div>
                <div class="newsitem">
                    <div class="date">2015.09.25</div>
                    <p>
                    <a href="http://forum.codeigniter.com/thread-63090-lastpost.html">
                        CodeIgniter Admin Panel Tutorials       </a>
                    </p>
                </div>
            </div>

        </div>
        -->

        <!-- Features -->
        <hr/>

        <div class="row">

            <h2>为什么使用 CodeIgniter？</h2>

            <br/>

            <div class="col-sm-12 col-md-6 features">

                <div class="feature">
                    <div class="feature-icon">
                        <span class="glyphicon glyphicon-star-empty"></span>
                    </div>
                    <h5>小巧的框架</h5>
                    <p>CodeIgniter 3 包括用户手册的安装包仅有 2MB 大小。</p>
                </div>

                <div class="feature">
                    <div class="feature-icon">
                        <span class="glyphicon glyphicon-book"></span>
                    </div>
                    <h5>清晰与完善的文档</h5>
                    <p>
                        CodeIgniter 安装包中包含《用户手册》，手册囊括了入门介绍、教程、“手把手”指导，还包括了框架组件的参考文档。<br />&nbsp;
                    </p>
                </div>

                <div class="feature">
                    <div class="feature-icon">
                        <span class="glyphicon glyphicon-hdd"></span>
                    </div>
                    <h5>广泛兼容各种主机环境</h5>
                    <p>
                        CodeIgniter 3 只需 PHP 5.2.4 版，几乎可以运行在任何虚拟主机或云平台上。对于需要数据库的 Web 应用来说，CodeIgniter 支持包括 MySQL 在内的大多数常见数据库。
                    </p>
                </div>

                <div class="feature">
                    <div class="feature-icon">
                        <span class="glyphicon glyphicon-road"></span>
                    </div>
                    <h5>没有严格的编码规则</h5>
                    <p>
                        只需遵守几个注意事项，你就可以使用自己的编码规范和命名约定。CodeIgniter 是来帮你的，而不是来添乱的。
                    </p>
                </div>

                <div class="feature">
                    <div class="feature-icon">
                        <span class="glyphicon glyphicon-send"></span>
                    </div>
                    <h5>不喜欢复杂，热爱简单</h5>
                    <p>CodeIgniter 允许用户自由选择是否使用 MVC 架构。</p>
                </div>

             </div>

            <div class="col-sm-12 col-md-6 features">

                <div class="feature">
                    <div class="feature-icon">
                        <span class="glyphicon glyphicon-dashboard"></span>
                    </div>
                    <h5>出色的性能</h5>
                    <p>CodeIgniter 的性能始终优于大多数同类框架。</p>
                </div>

                <div class="feature">
                    <div class="feature-icon">
                        <span class="glyphicon glyphicon-ok"></span>
                    </div>
                    <h5>没有大规模集成类库</h5>
                    <p>
                        CodeIgniter 不打算做成一个大而全的框架。在保持简洁的同时提供足够强大的功能来提高你的生产力，在此基础之上也有许多第三方扩展为你提供更多功能。
                    </p>
                </div>

                <div class="feature">
                    <div class="feature-icon">
                        <span class="glyphicon glyphicon-list-alt"></span>
                    </div>
                    <h5>几乎 0 配置</h5>
                    <p>
                        CodeIgniter 奉行约定胜于配置的理念（例如把模型文件放到“models“文件夹中）。当你希望修改配置的时候，在“config“文件夹中有许多配置项供你修改。
                    </p>
                </div>

                <div class="feature">
                    <div class="feature-icon">
                        <span class="glyphicon glyphicon-leaf"></span>
                    </div>
                    <h5>无需学习模板语言</h5>
                    <p>
                        CodeIgniter 自带一个简单的、基于字符串替换的模板工具。如果你有更复杂的需求，可以以第三方扩展的形式引入其他模板引擎。
                    </p>
                </div>

                <div class="feature">
                    <div class="feature-icon">
                        <span class="glyphicon glyphicon-thumbs-up"></span>
                    </div>
                    <h5>有更多的时间远离电脑做你喜欢做的事情</h5>
                    <p>
                        这难道不是我们所希望的吗？CodeIgniter 易学易用，轻而易举你就可以精通他。
                    </p>
                </div>

            </div>

        </div>

    </div>
</div>

<?php $this->load->view('footer_view'); ?>