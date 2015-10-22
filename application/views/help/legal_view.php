<?php $this->load->view('header_view', array('html_title' => '保留条款')); ?>

<div class="header">
    <div class="container">
        <h1>保留条款</h1>
    </div>
</div>

<!-- center of the page -->
<div id="content">
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="lead text-info">商标</div>
                <p>CodeIgniter® 是不列颠哥伦比亚理工学院（BCIT）的注册商标（从 EllisLab 公司转交过来）。</p>
                <div>
                    <img class="pull-left" src="<?=base_url('assets/images/tl-ci.gif')?>" />
                    <p><br/>
                        CodeIgniter LOGO 是 BCIT 的注册商标（从 EllisLab 公司转交过来）。我们提供 <a href="<?=base_url('assets/data/ci-logo.zip')?>">CodeIgniter LOGO 的矢量格式文件</a>用于你的项目，但需遵守下列准则。
                    </p>
                    <br/><br/>
                </div>
                <p>
                    BCIT、BRITISH COLUMBIA INSTITUTE OF TECHNOLOGY 与其独特标记（例如 BCIT 的 LOGO）是不列颠哥伦比亚理工学院的注册商标
                </p>
            </div>

            <div class="row">
                <div class="lead text-info">CodeIgniter LOGO 使用准则</div>
                <p>
                    欢迎在你的项目中使用 CodeIgniter LOGO，只需遵守下列准则...
                </p>
                <ul>
                    <li>
                        不得在未经许可或有歧义的情况下使用 CodeIgniter 商标或与 CodeIgniter 商标近似的标记，包括以此来暗示 BCIT 支持或者认可你的网站、产品或服务。
                    </li>
                    <li>当你使用 CodeIgniter 注册商标的时候需使用 ® 符号。</li>
                    <li>使用大写的粗体或斜体字以区分 CodeIgniter 商标和其它文字。</li>
                    <li>
                        相关方面需在网页、任何文档或销售资料的标题页的显著位置上至少一次标明 CodeIgniter 商标。一个典型标注的举例如下：“CodeIgniter 及其相关标识是 BCIT 的注册商标。”
                    </li>
                    <li>
                        相关方面需在网页、任何文档或销售资料的标题页的显著位置上至少展示一次免责声明。一个典型免责声明的举例如下：“_________是独立的_________，未经 BCIT 授权、赞助或许可。”<br/>
                        [在所有情况下，用你的产品名称和类型填充空白的地方。]
                    </li>
                    <li>
                        不得修改 CodeIgniter 商标的拼写和格式，也不得把 CodeIgniter 商标与任何其他商标、术语或名称组合使用。
                    </li>
                    <li>
                        只在相关方面与 CodeIgniter 或其服务有直接关联的时候使用 CodeIgniter 商标。
                    </li>
                    <li>
                        不得在域名或 URL 中使用 CodeIgniter 商标或与 CodeIgniter 商标近似的标记。
                    </li>
                    <li>
                        不得在自己的产品和服务中使用 CodeIgniter 商标，涉及网络出版、编程框架或相关软件。
                    </li>
                    <li>
                        不得声称自己有 CodeIgniter 商标的所有权。
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="lead text-info">第三方公司和产品</div>
                <p>
                    在本站提及的第三方公司和产品仅供参考，并不代表本站推荐或为其背书。
                </p>
            </div>

            <div class="row">
                <div class="lead text-info">其他网站的链接</div>
                <p>
                    CodeIgniter 中国对于你通过本网站访问的任何其他网站不作任何陈述。当你访问非 CodeIgniter 中国网站时，请了解它是独立于 CodeIgniter 中国的网站，并且 CodeIgniter 中国对这些网站的内容没有控制权。本站中有链接到其他网站的链接，但并不代表 CodeIgniter 中国认可或接受这些网站的内容或为其承担任何责任。
                </p>
            </div>
        </div>

    </div>
</div>

<?php $this->load->view('footer_view'); ?>