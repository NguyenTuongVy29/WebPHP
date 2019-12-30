<style>

Như mình đã 
* {
    margin: 0;
    padding: 0;
}
@font-face {
    font-family: 'zocial', sans-serif;
}
[data-icon]:before {
    font-family: 'zocial';
    content: attr(data-icon);
    -webkit-font-smoothing: antialiased;
}
body {
    font-family: 'Verdana', sans-serif;
}
 
a {
    text-decoration: none;
 
    -webkit-transition: all .2s linear;
    -moz-transition: all .2s linear;
    -ms-transition: all .2s linear;
    -o-transition:  all .2s linear;
    transition: all .2s linear;
}
.clear {
    clear: both;
}
#content > ul {
    list-style: none outside none;
    margin: 0 auto;
    max-width: 1200px;
    overflow: hidden;
    position: relative;
    width: 100%;
}
#Content > ul li {
    float: left;
    box-sizing:border-box;
  -webkit-box-sizing:border-box;
    -moz-box-sizing:border-box;
}
#Content > ul li:first-child {
    padding-left: 0;
	width:100%;
}
#Content > ul li:nth-child(2) {
    padding-right: 0;
	width: 100%;
}
#Content > ul li .icon {
    color: #999999;
    float: left;
    font-size: 80px;
    line-height: 80px;
}
#Content > ul li .text1 {
    color:#333;
    font-size: 10px;
    line-height: 20px;
    margin-left: 60px;
    position: relative;
    
}
.text1 h4 {
    color:#69F;
    font-size: 20px;
    font-weight: bold;
    margin-bottom: 10px;
}

.text1 a {
    border-bottom: 1px dotted transparent;
    color:#000;
    font-weight:bold;
}
.text a:hover {
    border-color: #FFDD00;
}
#footer .bar {
    background-color: #1E2629;
    padding: 20px 0;
}
#footer .bar-wrap {
    font-size: 12px;
    margin: 0 auto;
    max-width: 1200px;
    position: relative;
    width: 95%;
}
.links {
    float: left;
    list-style: none outside none;
    position: relative;
}
.links li {
    float: left;
    margin-right: 10px;
}
.links a {
    color: #778888;
}
.links a:hover {
    color: #FFFFFF;
}
.social {
    position: absolute;
    right: 0;
    top: 0;
}
.social a {
    color: #778888;
    margin-left: 20px;
}
.social a:hover {
    color: #FFFFFF;
}
.social .icon {
    display: inline-block;
    font-size: 36px;
    margin-right: 5px;
    vertical-align: middle;
 
    -webkit-transition: -webkit-transform .3s linear;
    -moz-transition: -moz-transform .3s linear;
    -ms-transition: -ms-transform .3s linear;
    -o-transition:  -o-transform .3s linear;
    transition: transform .3s linear;
}
.social a:hover  .icon {
    -webkit-transform: rotate(360deg);
    -moz-transform: rotate(360deg);
    -ms-transform: rotate(360deg);
    -o-transform: rotate(360deg);
    transform: rotate(360deg);
}
.social .info {
    display: inline-block;
    vertical-align: middle;
}
.social .info .follow {
    display: block;
}
.social .info .num {
    display: block;
}
.copyright {
    color: #778888;
    margin-top: 5px;
}
@media screen and (max-width: 1000px){
    .links, .social, .copyright{
        float:none;
        text-align:center;
    }
    .social {
        position:relative;
        margin:10px 0;
    }
    .links li {
        display:inline-block;
        float:none;
    }
    .bar {
        position:relative;
    }
    .bar-wrap {
        margin-bottom:0;
    }
}
 
@media screen and (max-width: 835px)  {
    #Content > ul li {
        float:none;
        width:auto;
    }
}
 
@media screen and (max-width: 768px)  {
    .links li {
        margin-right:5px;
    }
}
</style>