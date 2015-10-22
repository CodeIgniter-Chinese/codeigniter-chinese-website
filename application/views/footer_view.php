<!-- bottom of the page -->
<div class="footer">
    <div class="footer-menu">
        <div class="container">
            <div class="row bcit50">
                <ul class="nav nav-pills">
                    <li><a href="<?=site_url('help')?>">政策</a></li>
                    <li><a href="<?=site_url('help/legal')?>">保留条款</a></li>
                    <li><a href="<?=site_url('help/about')?>">关于</a></li>
                    <li><a href="https://plus.google.com/118115129823021819308" target="_blank">Google+</a></li>
                    <li><a href="http://www.codeigniter.com" target="_blank">English website</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <p class="text-center">
                    本站由 <a href="http://www.bcit.ca/cas/computing/" target="_blank">BCIT</a> 原创设计，基于 CodeIgniter 框架构建，<a href="http://www.miibeian.gov.cn/" target="_blank">京ICP备15004218号</a>
                </p>
            </div>
        </div>
    </div>
</div>

<script src="<?=base_url('assets/js/jquery-1.11.1.min.js')?>"></script>
<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>
<script type="text/javascript">
/* <![CDATA[ */
(function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName("a"),t=document.createElement("textarea");for(i=0;l.length-i;i++){try{a=l[i].getAttribute("href");if(a&&a.indexOf("/cdn-cgi/l/email-protection") > -1  && (a.length > 28)){s='';j=27+ 1 + a.indexOf("/cdn-cgi/l/email-protection");if (a.length > j) {r=parseInt(a.substr(j,2),16);for(j+=2;a.length>j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);}t.innerHTML=s.replace(/</g,"&lt;").replace(/>/g,"&gt;");l[i].setAttribute("href","mailto:"+t.value);}}catch(e){}}}catch(e){}})();
/* ]]> */
</script>
</body>
</html>