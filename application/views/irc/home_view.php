<?php $this->load->view('header_view', array('html_title' => 'CodeIgniter 中国 IRC 服务')); ?>

<div class="header">
    <div class="container">
        <h1>CodeIgniter 中国 IRC 服务</h1>
    </div>
</div>

<!-- center of the page -->
<div id="content">
    <div class="container">
        <div class="row">

            <div class="text-center">
                <div class="alert alert-warning">
                    <p>CodeIgniter 中国 IRC 服务，大家可以在 IRC 中畅所欲言！</p>
                    <p>如果使用 IRC 客户端，则服务器地址为 irc.freenode.net，加入的 Channels 为 #codeigniter-cn</p>
                    <p>注意，请勿使用中文昵称。</p>
                </div>
            </div>

            <br/>

            <iframe src="http://webchat.freenode.net?channels=codeigniter-cn" width="850" height="500" style="margin: 0 auto; display: block;"></iframe>
        </div>

    </div>
</div>

<?php $this->load->view('footer_view'); ?>