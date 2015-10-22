<?php $this->load->view('header_view', array('html_title' => '关于')); ?>

<div class="header">
    <div class="container">
        <h1>关于 CodeIgniter</h1>
    </div>
</div>

<!-- center of the page -->
<div id="content">
    <div class="container">
        <div class="container">

            <div class="lead text-info">理事会</div>
            <div>
                CodeIgniter 项目拥有一个临时理事会，负责监督 CodeIgniter 3 的发布并引领框架更上一层楼。
            </div>
            <br/>

            <div class="row council">
                <img class="pull-left" src="<?=base_url('assets/data/avatars/andrey.jpeg')?>" width="84" height="64"/>
                <strong>Andrey Andreev</strong> - 代码库审核人，理事<br/>

                <a href="http://twitter.com/narfbg"><img src="<?=base_url('assets/icons/twitter.jpg')?>" /></a><a href="http://github.com/narfbg"><img src="<?=base_url('assets/icons/github.jpg')?>" /></a>
            </div>
            <br/>

            <div class="row council">
                <img class="pull-left" src="<?=base_url('assets/data/avatars/ben.jpg')?>" width="84" height="64"/>
                <strong>Ben Edmunds</strong> - 理事<br/>
                一家默默无闻但超棒的公司的 CTO。PHP Town Hall 播客共同主办人。Ion Auth 类库的作者。
                <a href="http://twitter.com/benedmunds"><img src="<?=base_url('assets/icons/twitter.jpg')?>" /></a><a href="http://github.com/benedmunds"><img src="<?=base_url('assets/icons/github.jpg')?>" /></a>
            </div>
            <br/>

            <div class="row council">
                <img class="pull-left" src="<?=base_url('assets/data/avatars/jlp.jpg')?>" width="84" height="64"/>
                <strong>Jim Parry</strong> - 项目负责人，理事，英文官网负责人<br/>
                教育工作者，Web 开发者
                <a href="http://twitter.com/codeigniter"><img src="<?=base_url('assets/icons/twitter.jpg')?>" /></a><a href="http://github.com/jim-parry"><img src="<?=base_url('assets/icons/github.jpg')?>" /></a>
            </div>
            <br/>

            <div class="row council">
                <img class="pull-left" src="<?=base_url('assets/data/avatars/johannes.png')?>" width="84" height="64"/>
                <strong>Johannes Gamperl</strong> - 理事，英文官网论坛版主<br/>
                作家，开发者

            </div>
            <br/>

            <div class="row council">
                <img class="pull-left" src="<?=base_url('assets/data/avatars/lonnie.jpg')?>" width="84" height="64"/>
                <strong>Lonnie Ezell</strong> - 理事<br/>
                Web 开发工程师，作家，音乐家，Bonfire 的作者。
                <a href="http://twitter.com/lonnieezell"><img src="<?=base_url('assets/icons/twitter.jpg')?>" /></a><a href="http://github.com/lonnieezell"><img src="<?=base_url('assets/icons/github.jpg')?>" /></a>
            </div>
            <br/>


        </div>

        <div class="container">
            <div class="lead text-info">网站</div>
            <div>
                我们对网站充满了热爱，不论好坏。
            </div>
            <div>
                我们真诚的感谢来自理事会的 Andreas Pfotenhauer（德国）和 David Wosnitza（德国）的捐赠，帮助 CodeIgniter 回归正轨 :)。
            </div>
            <div>
                我们衷心的感谢 Lonnie Ezell（美国）、Michał Śniatała（波兰）和 Raymond King（美国）对设计和代码方面做出的贡献。
            </div>
            <div>
                感谢你，同时感谢所有为提升网站设计和可用性水平而提出宝贵意见和建议的 CIer 们！
            </div>
            <br/>
        </div>

    </div>
</div>

<?php $this->load->view('footer_view'); ?>