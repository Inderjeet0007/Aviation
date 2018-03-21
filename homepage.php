<!DOCTYPE html>

<html lang="en-us">
<head>
	<title>Aviation.com</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="icon" type="image/png" href="img/images.png"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/owl.transitions.css"/>
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css"/>
	<link rel="stylesheet" type="text/css" href="css/animate.css"/>
	<link rel="stylesheet" type="text/css" href="css/main.css"/>

	
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/ajaxchimp.js"></script>
	<script type="text/javascript" src="js/scrollTo.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/wow.js"></script>
	<script type="text/javascript" src="js/parallax.js"></script>
	<script type="text/javascript" src="js/nicescroll.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<style>

.active{
	padding: 5px 10px;
	color: #43b779;
	font-family:"open_regular", Helvetica, Arial, sans-serif;
	font-size: 36px;
	text-align: center;
}	

.nav a:hover {
  color: #ddd;
  color: black;
}

.nav {
  overflow: hidden;
  }

.nav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.nav .icon {
display: none;
}
  
@media screen and (max-width: 600px) {
  .nav a:not(:first-child) {display: none;}
  .nav a.icon {
    float: right;
    display: block;
  }
}
@media screen and (max-width: 600px) {
  .nav.responsive {position: relative;}
  .nav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
}
  .nav.responsive a {
    float: none;
    display: block;
	background-color: grey;
    text-align: left;
  }
</style>
<body>
	
	<!--  Header Section  -->
	<header>
		<div class="container">
			<div class="logo pull-left animated fadeInLeft">
				<img src="img/Logo.jpg" height="80px" alt="WS LOGO" title="LOGO FOR AVIATION.COM">
			</div>
			<br><br>
			<div class="nav pull-left" id="AviationNav">
					<a class="animated wow fadeInLeft list-unstyled" data-wow-delay=".0s" href="homepage.php"><strong>Home</strong></a>
					<a class="animated wow fadeInLeft list-unstyled" data-wow-delay=".0s" href="aircraft.php">Aircrafts</a>
					<a class="animated wow fadeInLeft list-unstyled" data-wow-delay=".1s" href="used_inst.php">Instruments</a>
					<a class="animated wow fadeInLeft list-unstyled" data-wow-delay=".1s" href="tech_en.php">Tech Enhancements</a>
					<a class="animated wow fadeInLeft list-unstyled" data-wow-delay=".1s" href="history.php">History</a>
					<a class="animated wow fadeInLeft list-unstyled" data-wow-delay=".2s href="air_acci.php">Accidents Occured</a>
					<a class="animated wow fadeInLeft list-unstyled" data-wow-delay="0s" href="AboutUs.php">About Us</a>
					<a href="javascript:void(0);" style="font-size:30px;" class="icon" onclick="myFunction()">&#9776;</a>
			</div>
			
<script>
function myFunction() {
    var x = document.getElementById("AviationNav");
    if (x.className === "nav") {
        x.className += " responsive";
    } else {
        x.className = "nav";
    }
}
</script>
			<div class="social pull-right">
				<ul class="list-unstyled">
					<li class="animated wow fadeInRight" data-wow-delay=".2s"><a href="https://www.facebook.com/aviationbloq/?ref=br_rs"><img src="img/facebook.png" alt="fb link" title=""></a></li>
					<li class="animated wow fadeInRight" data-wow-delay=".1s"><a href="#"><img src="img/twitter.png" alt="twitter link" title=""></a></li>
					<li class="animated wow fadeInRight" data-wow-delay="0s"><a href="#"><img src="img/google.png" alt="g link" title=""></a></li>
					
				</ul>
			</div>

			
		</div>
	</header>
	<!--  End Header Section  -->


	<!--  Hero Section  -->
	<section class="hero" id="hero">
		<div class="container">
			<div class="caption">
				<h1 class="text-uppercase  animated wow fadeInLeft">LOVE Aviation? </h1>
				<h3 class="text-uppercase  animated wow fadeInLeft">If so, Your at right place!! </h3>
				<p class="text-uppercase animated wow fadeInLeft">"A MILE of a road will take you a mile but a mile of runway will take you anywhere."</p>

			</div>			
		</div>
	</section>
	<!--  End Hero Section  -->

	<!--Slider Start -->
	<script type="text/javascript">
	!function(f,i,m,g,d,k,e){new(function(){});var c={E:m.PI,I:m.max,s:m.min,kb:m.ceil,T:m.floor,mb:m.abs,pb:m.sin,Zb:m.cos,Yd:m.tan,sf:m.atan,Xb:m.sqrt,m:m.pow,Y:m.round},h={tf:function(a){return-c.Zb(a*c.E)/2+.5},ic:function(a){return a},uf:function(a){return a*a},Sd:function(a){return-a*(a-2)},vf:function(a){return(a*=2)<1?1/2*a*a:-1/2*(--a*(a-2)-1)},wf:function(a){return a*a*a},xf:function(a){return(a-=1)*a*a+1},yf:function(a){return(a*=2)<1?1/2*a*a*a:1/2*((a-=2)*a*a+2)},zf:function(a){return a*a*a*a},Af:function(a){return-((a-=1)*a*a*a-1)},Bf:function(a){return(a*=2)<1?1/2*a*a*a*a:-1/2*((a-=2)*a*a*a-2)},Cf:function(a){return a*a*a*a*a},Vd:function(a){return(a-=1)*a*a*a*a+1},Df:function(a){return(a*=2)<1?1/2*a*a*a*a*a:1/2*((a-=2)*a*a*a*a+2)},Ef:function(a){return 1-c.Zb(c.E/2*a)},Ff:function(a){return c.pb(c.E/2*a)},Gf:function(a){return-1/2*(c.Zb(c.E*a)-1)},jf:function(a){return a==0?0:c.m(2,10*(a-1))},hf:function(a){return a==1?1:-c.m(2,-10*a)+1},gf:function(a){return a==0||a==1?a:(a*=2)<1?1/2*c.m(2,10*(a-1)):1/2*(-c.m(2,-10*--a)+2)},Te:function(a){return-(c.Xb(1-a*a)-1)},Je:function(a){return c.Xb(1-(a-=1)*a)},Ke:function(a){return(a*=2)<1?-1/2*(c.Xb(1-a*a)-1):1/2*(c.Xb(1-(a-=2)*a)+1)},Le:function(a){if(!a||a==1)return a;var b=.3,d=.075;return-(c.m(2,10*(a-=1))*c.pb((a-d)*2*c.E/b))},Me:function(a){if(!a||a==1)return a;var b=.3,d=.075;return c.m(2,-10*a)*c.pb((a-d)*2*c.E/b)+1},Ne:function(a){if(!a||a==1)return a;var b=.45,d=.1125;return(a*=2)<1?-.5*c.m(2,10*(a-=1))*c.pb((a-d)*2*c.E/b):c.m(2,-10*(a-=1))*c.pb((a-d)*2*c.E/b)*.5+1},Oe:function(a){var b=1.70158;return a*a*((b+1)*a-b)},Pe:function(a){var b=1.70158;return(a-=1)*a*((b+1)*a+b)+1},Qe:function(a){var b=1.70158;return(a*=2)<1?1/2*a*a*(((b*=1.525)+1)*a-b):1/2*((a-=2)*a*(((b*=1.525)+1)*a+b)+2)},Md:function(a){return 1-h.Dc(1-a)},Dc:function(a){return a<1/2.75?7.5625*a*a:a<2/2.75?7.5625*(a-=1.5/2.75)*a+.75:a<2.5/2.75?7.5625*(a-=2.25/2.75)*a+.9375:7.5625*(a-=2.625/2.75)*a+.984375},Re:function(a){return a<1/2?h.Md(a*2)*.5:h.Dc(a*2-1)*.5+.5},Se:c.kb,Ue:c.T};var b=new function(){var j=this,vb=/\S+/g,F=1,ob=2,rb=3,qb=4,ub=5,G,r=0,n=0,A=0,H=navigator,db=H.appName,o=H.userAgent,q=parseFloat;function Eb(){if(!G){G={Pd:"ontouchstart"in f||"createTouch"in i};var a;if(H.pointerEnabled||(a=H.msPointerEnabled))G.Nd=a?"msTouchAction":"touchAction"}return G}function u(h){if(!r){r=-1;if(db=="Microsoft Internet Explorer"&&!!f.attachEvent&&!!f.ActiveXObject){var e=o.indexOf("MSIE");r=F;n=q(o.substring(e+5,o.indexOf(";",e)));/*@cc_on@*/}else if(db=="Netscape"&&!!f.addEventListener){var d=o.indexOf("Firefox"),b=o.indexOf("Safari"),g=o.indexOf("Chrome"),c=o.indexOf("AppleWebKit");if(d>=0){r=ob;n=q(o.substring(d+8))}else if(b>=0){var i=o.substring(0,b).lastIndexOf("/");r=g>=0?qb:rb;n=q(o.substring(i+1,b))}else{var a=/Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(o);if(a){r=F;n=q(a[1])}}if(c>=0)A=q(o.substring(c+12))}else{var a=/(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(o);if(a){r=ub;n=q(a[2])}}}return h==r}function v(){return u(F)}function xb(){return u(ob)}function pb(){return u(rb)}function tb(){return u(ub)}function lb(){return pb()&&A>534&&A<535}function I(){u();return A>537||n>42||r==F&&n>=11}function mb(a){var b,c;return function(g){if(!b){b=d;var f=a.substr(0,1).toUpperCase()+a.substr(1);l([a].concat(["WebKit","ms","Moz","O","webkit"]),function(h,d){var b=a;if(d)b=h+f;if(g.style[b]!=e)return c=b})}return c}}function kb(b){var a;return function(c){a=a||mb(b)(c)||b;return a}}var L=kb("transform");function cb(a){return{}.toString.call(a)}var Z={};l(["Boolean","Number","String","Function","Array","Date","RegExp","Object"],function(a){Z["[object "+a+"]"]=a.toLowerCase()});function l(b,d){var a,c;if(cb(b)=="[object Array]"){for(a=0;a<b.length;a++)if(c=d(b[a],a,b))return c}else for(a in b)if(c=d(b[a],a,b))return c}function E(a){return a==g?String(a):Z[cb(a)]||"object"}function ab(a){for(var b in a)return d}function B(a){try{return E(a)=="object"&&!a.nodeType&&a!=a.window&&(!a.constructor||{}.hasOwnProperty.call(a.constructor.prototype,"isPrototypeOf"))}catch(b){}}function ib(b,a){setTimeout(b,a||0)}function Y(b,d,c){var a=!b||b=="inherit"?"":b;l(d,function(c){var b=c.exec(a);if(b){var d=a.substr(0,b.index),e=a.substr(b.index+b[0].length+1,a.length-1);a=d+e}});a&&(c+=(!a.indexOf(" ")?"":" ")+a);return c}function eb(a,b){if(a===e)a=b;return a}j.Od=Eb;j.Xd=v;j.pg=xb;j.mg=pb;j.jg=I;mb("transform");j.wc=function(){return n};j.bc=ib;j.U=eb;j.V=function(a,b){b.call(a);return z({},a)};function U(a){a.constructor===U.caller&&a.p&&a.p.apply(a,U.caller.arguments)}j.p=U;j.zb=function(a){if(j.Nf(a))a=i.getElementById(a);return a};function t(a){return a||f.event}j.de=t;j.ac=function(b){b=t(b);var a=b.target||b.srcElement||i;if(a.nodeType==3)a=j.tc(a);return a};j.Zd=function(a){a=t(a);return a.which||([0,1,3,0,2])[a.button]||a.charCode||a.keyCode};j.Wd=function(a){a=t(a);return{x:a.pageX||a.clientX||0,y:a.pageY||a.clientY||0}};function w(c,d,a){if(a!==e)c.style[d]=a==e?"":a;else{var b=c.currentStyle||c.style;a=b[d];if(a==""&&f.getComputedStyle){b=c.ownerDocument.defaultView.getComputedStyle(c,g);b&&(a=b.getPropertyValue(d)||b[d])}return a}}function W(b,c,a,d){if(a===e){a=q(w(b,c));isNaN(a)&&(a=g);return a}if(a==g)a="";else d&&(a+="px");w(b,c,a)}function m(c,a){var d=a?W:w,b;if(a&4)b=kb(c);return function(e,f){return d(e,b?b(e):c,f,a&2)}}function zb(a){return q(a.style.opacity||"1")}function Bb(b,a){b.style.opacity=a==1?"":c.Y(a*100)/100}var N={Z:["rotate"],bb:["rotateX"],cb:["rotateY"],hc:["skewX"],ec:["skewY"]};if(!I())N=z(N,{L:["scaleX",2],Q:["scaleY",2],db:["translateZ",1]});function M(c,a){var b="";if(a){if(v()&&n&&n<10){delete a.bb;delete a.cb;delete a.db}l(a,function(d,c){var a=N[c];if(a){var e=a[1]||0;if(O[c]!=d)b+=" "+a[0]+"("+d+(["deg","px",""])[e]+")"}});if(I()){if(a.jb||a.ob||a.db!=e)b+=" translate3d("+(a.jb||0)+"px,"+(a.ob||0)+"px,"+(a.db||0)+"px)";if(a.L==e)a.L=1;if(a.Q==e)a.Q=1;if(a.L!=1||a.Q!=1)b+=" scale3d("+a.L+", "+a.Q+", 1)"}}c.style[L(c)]=b}j.Qf=m("transformOrigin",4);j.Rf=m("backfaceVisibility",4);m("transformStyle",4);j.Sf=m("perspective",6);j.Vf=m("perspectiveOrigin",4);j.fg=function(b,a){if(v()&&n<9)b.style.zoom=a==1?"":a;else{var c=L(b),f=a==1?"":"scale("+a+")",e=b.style[c],g=new RegExp(/[\s]*scale\(.*?\)/g),d=Y(e,[g],f);b.style[c]=d}};j.ib=function(a,d,b,c){a=j.zb(a);if(a.addEventListener){d=="mousewheel"&&a.addEventListener("DOMMouseScroll",b,c);a.addEventListener(d,b,c)}else if(a.attachEvent){a.attachEvent("on"+d,b);c&&a.setCapture&&a.setCapture()}};j.Hb=function(a,c,d,b){a=j.zb(a);if(a.removeEventListener){c=="mousewheel"&&a.removeEventListener("DOMMouseScroll",d,b);a.removeEventListener(c,d,b)}else if(a.detachEvent){a.detachEvent("on"+c,d);b&&a.releaseCapture&&a.releaseCapture()}};j.gc=function(a){a=t(a);a.preventDefault&&a.preventDefault();a.cancel=d;a.returnValue=k};j.Xf=function(a){a=t(a);a.stopPropagation&&a.stopPropagation();a.cancelBubble=d};j.X=function(d,c){var a=[].slice.call(arguments,2),b=function(){var b=a.concat([].slice.call(arguments,0));return c.apply(d,b)};return b};j.Yf=function(a,b){if(b==e)return a.textContent||a.innerText;var c=i.createTextNode(b);j.Qb(a);a.appendChild(c)};j.ag=function(b){var a=b.getBoundingClientRect();return{x:a.left,y:a.top,w:a.right-a.left,h:a.bottom-a.top}};j.Cb=function(d,c){for(var b=[],a=d.firstChild;a;a=a.nextSibling)(c||a.nodeType==1)&&b.push(a);return b};function bb(a,c,e,b){b=b||"u";for(a=a?a.firstChild:g;a;a=a.nextSibling)if(a.nodeType==1){if(C(a,b)==c)return a;if(!e){var d=bb(a,c,e,b);if(d)return d}}}j.hd=bb;function S(a,d,f,b){b=b||"u";var c=[];for(a=a?a.firstChild:g;a;a=a.nextSibling)if(a.nodeType==1){C(a,b)==d&&c.push(a);if(!f){var e=S(a,d,f,b);if(e.length)c=c.concat(e)}}return c}j.cg=function(b,a){return b.getElementsByTagName(a)};j.sb=function(a,f,d){d=d||"u";var e;do{if(a.nodeType==1){var c=C(a,d);if(c&&c==eb(f,c)){e=a;break}}a=b.tc(a)}while(a&&a!=i.body);return e};function z(){var f=arguments,d,c,b,a,h=1&f[0],g=1+h;d=f[g-1]||{};for(;g<f.length;g++)if(c=f[g])for(b in c){a=c[b];if(a!==e){a=c[b];var i=d[b];d[b]=h&&(B(i)||B(a))?z(h,{},i,a):a}}return d}j.ab=z;function V(f,g){var d={},c,a,b;for(c in f){a=f[c];b=g[c];if(a!==b){var e;if(B(a)&&B(b)){a=V(a,b);e=!ab(a)}!e&&(d[c]=a)}}return d}j.nd=function(a){return E(a)=="function"};j.bg=function(a){return E(a)=="array"};j.Nf=function(a){return E(a)=="string"};j.oc=function(a){return!isNaN(q(a))&&isFinite(a)};j.c=l;j.rf=B;function Q(a){return i.createElement(a)}j.Rc=function(){return Q("DIV")};j.Mf=function(){return Q("SPAN")};j.Lf=function(){};function D(b,c,a){if(a==e)return b.getAttribute(c);b.setAttribute(c,a)}function C(a,b){return D(a,b)||D(a,"data-"+b)}j.l=D;j.J=C;j.q=function(d,b,c){var a=j.gd(C(d,b));if(isNaN(a))a=c;return a};function x(b,a){return D(b,"class",a)||""}function hb(b){var a={};l(b,function(b){if(b!=e)a[b]=b});return a}function jb(b,a){return b.match(a||vb)}function P(b,a){return hb(jb(b||"",a))}j.id=hb;j.lg=jb;j.ug=function(a){a&&(a=a.toLowerCase());return a};function X(b,c){var a="";l(c,function(c){a&&(a+=b);a+=c});return a}function J(a,c,b){x(a,X(" ",z(V(P(x(a)),P(c)),P(b))))}j.tc=function(a){return a.parentNode};j.ub=function(a){j.tb(a,"none")};j.yb=function(a,b){j.tb(a,b?"none":"")};j.ng=function(b,a){b.removeAttribute(a)};j.Ie=function(d,a){if(a)d.style.clip="rect("+c.Y(a.i||a.D||0)+"px "+c.Y(a.u)+"px "+c.Y(a.v)+"px "+c.Y(a.g||a.z||0)+"px)";else if(a!==e){var h=d.style.cssText,g=[new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i),new RegExp(/[\s]*cliptop: .*?[;]?/i),new RegExp(/[\s]*clipright: .*?[;]?/i),new RegExp(/[\s]*clipbottom: .*?[;]?/i),new RegExp(/[\s]*clipleft: .*?[;]?/i)],f=Y(h,g,"");b.sd(d,f)}};j.Kb=function(){return+new Date};j.nb=function(b,a){b.appendChild(a)};j.cc=function(b,a,c){(c||a.parentNode).insertBefore(b,a)};j.rb=function(b,a){a=a||b.parentNode;a&&a.removeChild(b)};j.We=function(a,b){l(a,function(a){j.rb(a,b)})};j.Qb=function(a){j.We(j.Cb(a,d),a)};function fb(){l([].slice.call(arguments,0),function(a){if(j.bg(a))fb.apply(g,a);else a&&a.k()})}j.k=fb;j.jd=function(a,b){var c=j.tc(a);if(b&1){j.O(a,(j.A(c)-j.A(a))/2);j.rd(a,g)}if(b&2){j.P(a,(j.C(c)-j.C(a))/2);j.ed(a,g)}};var R={i:g,u:g,v:g,g:g,N:g,R:g};j.le=function(a){var b=j.Rc();s(b,{kd:"block",Pb:j.qb(a),i:0,g:0,N:0,R:0});var d=j.pd(a,R);j.cc(b,a);j.nb(b,a);var e=j.pd(a,R),c={};l(d,function(b,a){if(b==e[a])c[a]=b});s(b,R);s(b,c);s(a,{i:0,g:0});return c};j.gd=q;j.Wf=function(b,a){var c=i.body;while(a&&b!==a&&c!==a)try{a=a.parentNode}catch(d){return k}return b===a};function T(d,c,b){var a=d.cloneNode(!c);!b&&j.ng(a,"id");return a}j.Sb=T;j.Db=function(e,f){var a=new Image;function b(e,d){j.Hb(a,"load",b);j.Hb(a,"abort",c);j.Hb(a,"error",c);f&&f(a,d)}function c(a){b(a,d)}if(tb()&&n<11.6||!e)b(!e);else{j.ib(a,"load",b);j.ib(a,"abort",c);j.ib(a,"error",c);a.src=e}};j.ze=function(d,a,e){var c=d.length+1;function b(b){c--;if(a&&b&&b.src==a.src)a=b;!c&&e&&e(a)}l(d,function(a){j.Db(a.src,b)});b()};j.Fe=function(a,g,i,h){if(h)a=T(a);var c=S(a,g);if(!c.length)c=b.cg(a,g);for(var f=c.length-1;f>-1;f--){var d=c[f],e=T(i);x(e,x(d));b.sd(e,d.style.cssText);b.cc(e,d);b.rb(d)}return a};function Cb(){var a=this;b.V(a,p);var d,q="",s=["av","pv","ds","dn"],g=[],r,n=0,k=0,h=0;function m(){J(d,r,(g[h||k&2||k]||"")+" "+(g[n]||""));j.Vb(d,h?"none":"")}function c(){n=0;a.H(f,"mouseup",c);a.H(i,"mouseup",c);a.H(i,"touchend",c);a.H(i,"touchcancel",c);a.H(f,"blur",c);m()}function o(b){if(h)j.gc(b);else{n=4;m();a.a(f,"mouseup",c);a.a(i,"mouseup",c);a.a(i,"touchend",c);a.a(i,"touchcancel",c);a.a(f,"blur",c)}}a.ue=function(a){if(a===e)return k;k=a&2||a&1;m()};a.sc=function(a){if(a===e)return!h;h=a?0:3;m()};a.p=function(e){a.M=d=j.zb(e);D(d,"data-jssor-button","1");var c=b.lg(x(d));if(c)q=c.shift();l(s,function(a){g.push(q+a)});r=X(" ",g);g.unshift("");a.a(d,"mousedown",o);a.a(d,"touchstart",o)};b.p(a)}j.xc=function(a){return new Cb(a)};j.Jb=w;j.cd=m("overflow");j.Vb=m("pointerEvents");j.P=m("top",2);j.rd=m("right",2);j.ed=m("bottom",2);j.O=m("left",2);j.A=m("width",2);j.C=m("height",2);m("marginLeft",2);m("marginTop",2);j.qb=m("position");j.tb=m("display");j.G=m("zIndex",1);j.pe=function(b,a,c){if(a!=e)Bb(b,a,c);else return zb(b)};j.sd=function(a,b){if(b!=e)a.style.cssText=b;else return a.style.cssText};j.qe=function(b,a){if(a===e){a=w(b,"backgroundImage")||"";var c=/\burl\s*\(\s*["']?([^"'\r\n,]+)["']?\s*\)/gi.exec(a)||[];return c[1]}w(b,"backgroundImage",a?"url('"+a+"')":"")};var K;j.re=K={gb:j.pe,i:j.P,u:j.rd,v:j.ed,g:j.O,N:j.A,R:j.C,Pb:j.qb,kd:j.tb,Ob:j.G};j.pd=function(c,b){var a={};l(b,function(d,b){if(K[b])a[b]=K[b](c)});return a};function s(b,h){var a=I(),d=lb(),f=L(b);function c(l,a){a=a||{};var h=a.db||0,i=(a.bb||0)%360,j=(a.cb||0)%360,k=(a.Z||0)%360,c=a.L,d=a.Q,g=a.Bg;if(c==e)c=1;if(d==e)d=1;if(g==e)g=1;var b=new yb(a.jb,a.ob,h);b.pc(c,d,g);b.se(a.hc,a.ec);b.bb(i);b.cb(j);b.te(k);b.Tb(a.z,a.D);l.style[f]=b.Ge()}s=function(f,b){b=b||{};var i=b.z,k=b.D,h;l(K,function(a,c){h=b[c];h!==e&&a(f,h)});j.Ie(f,b.f);if(!a){i!=e&&j.O(f,(b.ae||0)+i);k!=e&&j.P(f,(b.be||0)+k)}if(b.ve)if(d)ib(j.X(g,M,f,b));else if(a)c(f,b);else M(f,b)};j.S=s;s(b,h)}j.xe=M;j.S=s;function yb(j,k,n){var d=this,b=[1,0,0,0,0,1,0,0,0,0,1,0,j||0,k||0,n||0,1],i=c.pb,h=c.Zb,l=c.Yd;function f(a){return a*c.E/180}function m(c,e,l,m,o,r,t,u,w,z,A,C,E,b,f,k,a,g,i,n,p,q,s,v,x,y,B,D,F,d,h,j){return[c*a+e*p+l*x+m*F,c*g+e*q+l*y+m*d,c*i+e*s+l*B+m*h,c*n+e*v+l*D+m*j,o*a+r*p+t*x+u*F,o*g+r*q+t*y+u*d,o*i+r*s+t*B+u*h,o*n+r*v+t*D+u*j,w*a+z*p+A*x+C*F,w*g+z*q+A*y+C*d,w*i+z*s+A*B+C*h,w*n+z*v+A*D+C*j,E*a+b*p+f*x+k*F,E*g+b*q+f*y+k*d,E*i+b*s+f*B+k*h,E*n+b*v+f*D+k*j]}function e(c,a){return m.apply(g,(a||b).concat(c))}d.pc=function(a,c,d){if(a!=1||c!=1||d!=1)b=e([a,0,0,0,0,c,0,0,0,0,d,0,0,0,0,1])};d.Tb=function(a,c,d){b[12]+=a||0;b[13]+=c||0;b[14]+=d||0};d.bb=function(c){if(c){a=f(c);var d=h(a),g=i(a);b=e([1,0,0,0,0,d,g,0,0,-g,d,0,0,0,0,1])}};d.cb=function(c){if(c){a=f(c);var d=h(a),g=i(a);b=e([d,0,-g,0,0,1,0,0,g,0,d,0,0,0,0,1])}};d.te=function(c){if(c){a=f(c);var d=h(a),g=i(a);b=e([d,g,0,0,-g,d,0,0,0,0,1,0,0,0,0,1])}};d.se=function(a,c){if(a||c){j=f(a);k=f(c);b=e([1,l(k),0,0,l(j),1,0,0,0,0,1,0,0,0,0,1])}};d.Ge=function(){return"matrix3d("+b.join(",")+")"}}var O={ae:0,be:0,z:0,D:0,Eb:1,L:1,Q:1,Z:0,bb:0,cb:0,jb:0,ob:0,db:0,hc:0,ec:0};j.Qd=function(c,d){var a=c||{};if(c)if(b.nd(c))a={U:a};else if(b.nd(c.f))a.f={U:c.f};a.U=a.U||d;if(a.f)a.f.U=a.f.U||d;return a};function gb(c,a){var b={};l(c,function(c,d){var f=c;if(a[d]!=e)if(j.oc(c))f=c+a[d];else f=gb(c,a[d]);b[d]=f});return b}j.ye=gb;j.Ae=function(o,j,s,t,E,F,p){var a=j;if(o){a={};for(var i in j){var G=F[i]||1,B=E[i]||[0,1],f=(s-B[0])/B[1];f=c.s(c.I(f,0),1);f=f*G;var y=c.T(f);if(f!=y)f-=y;var k=t.U||h.ic,m,C=o[i],r=j[i];if(b.oc(r)){k=t[i]||k;var D=k(f);m=C+r*D}else{m=z({Rb:{}},o[i]);var A=t[i]||{};l(r.Rb||r,function(d,a){k=A[a]||A.U||k;var c=k(f),b=d*c;m.Rb[a]=b;m[a]+=b})}a[i]=m}var x=l(j,function(b,a){return O[a]!=e});x&&l(O,function(c,b){if(a[b]==e&&o[b]!==e)a[b]=o[b]});if(x){if(a.Eb)a.L=a.Q=a.Eb;a.Bb=p.Bb;a.Ab=p.Ab;if(v()&&n>=11&&(j.z||j.D)&&s!=0&&s!=1)a.Z=a.Z||1e-8;a.ve=d}}if(j.f&&p.Tb){var q=a.f.Rb,w=(q.i||0)+(q.v||0),u=(q.g||0)+(q.u||0);a.g=(a.g||0)+u;a.i=(a.i||0)+w;a.f.g-=u;a.f.u-=u;a.f.i-=w;a.f.v-=w}if(a.f&&!a.f.i&&!a.f.g&&!a.f.D&&!a.f.z&&a.f.u==p.Bb&&a.f.v==p.Ab)a.f=g;return a}};function p(){var a=this,g,e=[],c=[];function k(a,b){e.push({Gb:a,wb:b})}function j(a,c){b.c(e,function(b,d){b.Gb==a&&b.wb===c&&e.splice(d,1)})}function i(){e=[]}function h(){b.c(c,function(a){b.Hb(a.Ad,a.Gb,a.wb,a.Cd)});c=[]}a.Wc=function(){return g};a.a=function(e,a,d,f){b.ib(e,a,d,f);c.push({Ad:e,Gb:a,wb:d,Cd:f})};a.H=function(e,a,d,f){b.c(c,function(g,h){if(g.Ad===e&&g.Gb==a&&g.wb===d&&g.Cd==f){b.Hb(e,a,d,f);c.splice(h,1)}})};a.ud=h;a.Xc=a.addEventListener=k;a.removeEventListener=j;a.j=function(a){var c=[].slice.call(arguments,1);b.c(e,function(b){b.Gb==a&&b.wb.apply(f,c)})};a.k=function(){if(!g){g=d;h();i()}}}var l=function(C,D,i,m,R,Q){C=C||0;var a=this,p,n,o,s,F=0,O=1,L,M,K,G,B=0,j=0,r=0,A,l,g,h,q,z,u=[],y,I=k,J,H=k;function T(a){g+=a;h+=a;l+=a;j+=a;r+=a;B+=a}function x(x){var k=x;if(q)if(!z&&(k>=h||k<g)||z&&k>=g)k=((k-g)%q+q)%q+g;if(!A||s||j!=k){var f=c.s(k,h);f=c.I(f,g);if(i.bd)f=h-f+g;if(!A||s||f!=r){if(Q){var w=(f-l)/(D||1),o=b.Ae(R,Q,w,L,K,M,i);if(y)b.c(o,function(b,a){y[a]&&y[a](m,b)});else b.S(m,o);var n;if(J){toDisablePointerEventsByAnimation=f>g&&f<h;if(toDisablePointerEventsByAnimation!=H)n=H=toDisablePointerEventsByAnimation}if(!n&&o.gb!=e){var p=o.gb<.001;if(p!=I)n=I=p}if(n!=e){n&&b.Vb(m,"none");!n&&b.Vb(m,b.l(m,"data-events"))}}var v=r,t=r=f;b.c(u,function(b,c){var a=!A&&z||k<=j?u[u.length-c-1]:b;a.F(f-B)});j=k;A=d;a.Zc(v-l,t-l);a.xb(v,t)}}}function E(a,b,d){b&&a.jc(h);if(!d){g=c.s(g,a.kc()+B);h=c.I(h,a.lb()+B)}u.push(a)}var v=f.requestAnimationFrame||f.webkitRequestAnimationFrame||f.mozRequestAnimationFrame||f.msRequestAnimationFrame;if(b.mg()&&b.wc()<7||!v)v=function(a){b.bc(a,i.Hd)};function N(){if(p){var d=b.Kb(),e=c.s(d-F,i.Id),a=j+e*o*O;F=d;if(a*o>=n*o)a=n;x(a);if(!s&&a*o>=n*o)P(G);else v(N)}}function w(e,f,i){if(!p){p=d;s=i;G=f;e=c.I(e,g);e=c.s(e,h);n=e;o=n<j?-1:1;a.ad();F=b.Kb();v(N)}}function P(b){if(p){s=p=G=k;a.Sc();b&&b()}}a.Jd=function(a,b,c){w(a?j+a:h,b,c)};a.mc=w;a.Ce=function(a,b){w(h,a,b)};a.B=P;a.Kd=function(){return j};a.Ld=function(){return n};a.n=function(){return r};a.F=x;a.oe=function(){x(h,d)};a.Bc=function(){return p};a.vd=function(a){O=a};a.jc=T;a.K=function(a,b){E(a,0,b)};a.Ec=function(a){E(a,1)};a.Fc=function(a){h+=a};a.kc=function(){return g};a.lb=function(){return h};a.xb=a.ad=a.Sc=a.Zc=b.Lf;a.Gc=b.Kb();i=b.ab({Hd:16,Id:50},i);m&&(J=b.l(m,"data-inactive"));q=i.Yb;z=i.je;y=i.ee;g=l=C;h=C+D;M=i.Y||{};K=i.ge||{};L=b.Qd(i.fb)};var n={fe:"data-scale",Mb:"data-autocenter",Jc:"data-nofreeze",Td:"data-nodrag"},q=new function(){var a=this;a.Lc=function(c,a,e,d){(d||!b.l(c,a))&&b.l(c,a,e)};a.Mc=function(a){var c=b.q(a,n.Mb);b.jd(a,c)}};new(function(){});var r={Uc:1},u=function(){var a=this,D=b.V(a,p),h,v,C,B,o,m=0,f,s,l,z,A,i,k,u,t,x,j;function y(a){j[a]&&j[a].ue(a==m)}function w(b){a.j(r.Uc,b*s)}a.zc=function(a){if(a!=o){var d=m,b=c.T(a/s);m=b;o=a;y(d);y(b)}};a.rc=function(a){b.yb(h,a)};a.Pc=function(G){b.k(j);o=e;a.ud();x=[];j=[];b.Qb(h);v=c.kb(G/s);m=0;var y=u+z,D=t+A,r=c.kb(v/l)-1;C=u+y*(!i?r:l-1);B=t+D*(i?r:l-1);b.A(h,C);b.C(h,B);for(var n=0;n<v;n++){var E=b.Mf();b.Yf(E,n+1);var p=b.Fe(k,"numbertemplate",E,d);b.qb(p,"absolute");var F=f.Ub&&!i?r-n:n;b.O(p,!i?y*F:n%l*y);b.P(p,i?D*F:c.T(n/(r+1))*D);b.nb(h,p);x[n]=p;f.Oc&1&&a.a(p,"click",b.X(g,w,n));f.Oc&2&&a.a(p,"mouseenter",b.X(g,w,n));j[n]=b.xc(p)}q.Mc(h)};a.p=function(d,c){a.M=h=b.zb(d);a.Nc=f=b.ab({ce:10,wd:10,Oc:1},c);k=b.hd(h,"prototype");u=b.A(k);t=b.C(k);b.rb(k,h);s=f.xd||1;l=f.td||1;z=f.ce;A=f.wd;i=f.me&2;f.eb&&q.Lc(h,n.Mb,f.eb)};a.k=function(){b.k(j,D)};b.p(a)},v=function(){var a=this,v=b.V(a,p),e,c,f,l,s,k,h,m,j,i;function o(b){a.j(r.Uc,b,d)}function u(a){b.yb(e,a);b.yb(c,a)}function t(){j.sc((f.Lb||!l.we(h))&&k>1);i.sc((f.Lb||!l.De(h))&&k>1)}a.zc=function(c,a,b){h=a;!b&&t()};a.rc=u;a.Pc=function(f){k=f;h=0;if(!s){a.a(e,"click",b.X(g,o,-m));a.a(c,"click",b.X(g,o,m));j=b.xc(e);i=b.xc(c);b.l(e,n.Jc,1);b.l(c,n.Jc,1);s=d}};a.p=function(g,d,h,i){a.Nc=f=b.ab({xd:1},h);e=g;c=d;if(f.Ub){e=d;c=g}m=f.xd;l=i;if(f.eb){q.Lc(e,n.Mb,f.eb);q.Lc(c,n.Mb,f.eb)}q.Mc(e);q.Mc(c)};a.k=function(){b.k(j,i,v)};b.p(a)};function o(e,d,c){var a=this;b.V(a,p);l.call(a,0,c.Ib);a.fc=0;a.Yc=c.Ib}o.Tc=21;o.vb=24;var s=function(){var a=this,db=b.V(a,p);l.call(a,0,0);var e,q,cb=[h.ic,h.tf,h.uf,h.Sd,h.vf,h.wf,h.xf,h.yf,h.zf,h.Af,h.Bf,h.Cf,h.Vd,h.Df,h.Ef,h.Ff,h.Gf,h.jf,h.hf,h.gf,h.Te,h.Je,h.Ke,h.Le,h.Me,h.Ne,h.Oe,h.Pe,h.Qe,h.Md,h.Dc,h.Re,h.Se,h.Ue],N={},P,D,t=new l(0,0),G=[],v=[],F,n=0;function H(d,c){var a={};b.c(d,function(d,f){var e=N[f];if(e){if(b.rf(d))d=H(d,c||f=="e");else if(c)if(b.oc(d))d=cb[d];a[e]=d}});return a}function I(e,f){var c=[],d=b.Cb(e);b.c(d,function(d){var h=P[b.q(d,"t")];h&&c.push({M:d,Kc:h});var g=b.q(d,"play");if(g){var e=new s(d,q,{He:g});L.push(e);a.a(e,o.Tc,V);a.a(e,o.vb,R)}else c=c.concat(I(d,f+1))});return c}function M(c,e){var a=G[c];if(a==g){a=G[c]={hb:c,uc:[],od:[]};var d=0;!b.c(v,function(a,b){d=b;return a.hb>c})&&d++;v.splice(d,0,a)}return a}function Z(p,q,f){var a,e;if(D){var k=D[b.q(p,"c")];if(k){a=M(k.r,0);a.dg=k.e||0}}b.c(q,function(h){var g=b.ab(d,{},H(h)),i=b.Qd(g.fb);delete g.fb;if(g.g){g.z=g.g;i.z=i.g;delete g.g}if(g.i){g.D=g.i;i.D=i.i;delete g.i}var m={fb:i,Bb:f.N,Ab:f.R},j=new l(h.b,h.d,m,p,f,g);n=c.I(n,h.b+h.d);if(a){if(!e)e=new l(h.b,0);e.K(j)}else{var k=M(h.b,h.b+h.d);k.uc.push(j)}f=b.ye(f,g)});if(a&&e){e.oe();var h=e,i,j=e.kc(),m=e.lb(),o=c.I(m,a.dg);if(a.hb<m){if(a.hb>j){h=new l(j,a.hb-j);h.K(e,d)}else h=g;i=new l(a.hb,o-j,{Yb:o-a.hb,je:d});i.K(e,d)}h&&a.uc.push(h);i&&a.od.push(i)}return f}function Y(a){b.c(a,function(d){var a=d.M,f=b.A(a),e=b.C(a),c={g:b.O(a),i:b.P(a),z:0,D:0,gb:1,Ob:b.G(a)||0,Z:0,bb:0,cb:0,L:1,Q:1,jb:0,ob:0,db:0,hc:0,ec:0,N:f,R:e,f:{i:0,u:f,v:e,g:0}};c.ae=c.g;c.be=c.i;Z(a,d.Kc,c)})}function bb(f,e,g){var c=f.b-e;if(c){var b=new l(e,c);b.K(t,d);b.jc(g);a.K(b)}a.Fc(f.d);return c}function ab(e){var c=t.kc(),d=0;b.c(e,function(e,f){e=b.ab({d:3e3},e);bb(e,c,d);c=e.b;d+=e.d;if(!f||e.t==2){a.fc=c;a.Yc=c+e.d}})}function B(g,e,d){var f=e.length;if(f>4)for(var j=c.kb(f/4),a=0;a<j;a++){var h=e.slice(a*4,c.s(a*4+4,f)),i=new l(h[0].hb,0);B(i,h,d);g.K(i)}else b.c(e,function(a){b.c(d?a.od:a.uc,function(a){d&&a.Fc(n-a.lb());g.K(a)})})}var m,C,j,x,f,J,z,L=[],w=[],A,E,y;function X(){if(!z){j&8&&a.a(i,"keydown",O);if(j&32){a.a(i,"mousedown",u);a.a(i,"touchstart",u)}z=d}}function U(){a.H(i,"keydown",O);a.H(i,"mousedown",u);a.H(i,"touchstart",u);z=k}function K(b){a.B();b&&a.F(0);a.vd(1);a.Ce();A=d;X();a.j(o.Tc,a)}function r(){if(!E&&(A||a.n())){a.B();a.Kd()>a.fc&&a.F(a.fc);a.vd(f||1);a.mc(0);E=d}}function Q(){!y&&r()}function O(a){j&8&&b.Zd(a)==27&&r()}function T(){y=k;j&4&&b.bc(Q,160)}function u(a){j&32&&!b.Wf(e,b.ac(a))&&r()}function S(c){y=d;if(m&2){var a=b.ag(e);c=b.de(c);c.clientX>=a.x&&c.clientX<=a.x+a.w&&c.clientY>=a.y&&c.clientY<=a.y+a.h&&K()}}function W(){K(d)}function V(b){var a=b.ig();childSlideoPlaying=w[a];childSlideoPlaying!==b&&w[a]&&w[a].Uf();w[a]=b}function R(b,c){a.j(o.vb,b,c)}a.ig=function(){return J||""};a.Uf=r;a.ad=function(){C&&a.j(o.vb,a,1)};a.Sc=function(){A=k;E=k;C&&a.j(o.vb,a,-1);!a.n()&&U()};a.xb=function(){!y&&x&&a.Kd()>a.Yc&&r()};a.p=function(l,h,g){e=l;q=h;m=g.He;F=g.eg;P=q.Ic;D=q.Ag;var k={i:"y",g:"x",v:"m",u:"t",Z:"r",bb:"rX",cb:"rY",L:"sX",Q:"sY",jb:"tX",ob:"tY",db:"tZ",hc:"kX",ec:"kY",gb:"o",fb:"e",Ob:"i",f:"c"};b.c(k,function(b,a){N[b]=a});Y(I(e,1));B(t,v);if(m){a.K(t);F=d;x=b.q(e,"idle");(m&1||m&32&&b.Od().Pd)&&a.a(e,"click",W);if(m&2||x){a.a(e,"mouseenter",S);a.a(e,"mouseleave",T)}j=b.q(e,"rollback");f=b.J(e,"speed")||"";if(f.substr(0,1)=="x")f=f.substr(1);f=b.gd(f);J=b.J(e,"group");C=b.q(e,"pause")}var i=q.wg||[],c=i[b.q(e,"b")]||[];c=c.concat({b:n,d:c.length?0:g.Ib||x||0});ab(c);F&&a.Fc(1e8);n=a.lb();B(a,v,d);a.F(-1)};a.k=function(){b.k(db,L);a.B();a.F(-1)};b.p(a)},j=(f.module||{}).exports=function(){var a=this,xc=b.V(a,p),Jb="data-jssor-slider",Cc="data-jssor-thumb",u,m,R,Gb,eb,sb,Z,M,K,P,Tb,zc=1,qc=1,Gc=1,fc=1,Ic={},x,U,Sb,Zb,Yb,Hb,Fb,Eb,bb,C=[],gc,t=-1,ic,q,I,H,L,kb,lb,F,J,hb,S,z,W,jb,Y=[],lc,nc,cc,s,rb,Bb,nb,ab,X,hc,Ab,Lb,jc,G,ac=0,db=0,Q=Number.MAX_VALUE,N=Number.MIN_VALUE,D,ib,fb,T=1,Xb,mb,B,yb,Nb,Ob,O,wb,xb,A,V,ob,y,Ib,Vb=b.Od(),zb=Vb.Pd,w=[],E,tb,cb,bc,Ac,Hc,ub;function Db(){return!T&&X&12}function Bc(){return Xb||!T&&X&3}function Cb(){return!B&&!Db()&&!y.Bc()}function Sc(){return!Bc()&&Cb()}function Ec(){return z||R}function Lc(){return Ec()&2?lb:kb}function Mb(a,c,d){b.O(a,c);b.P(a,d)}function vc(c,b){var a=Ec(),d=(kb*b+ac)*(a&1),e=(lb*b+ac)*(a&2)/2;Mb(c,d,e)}function sc(b,f){if(B&&!(D&1)){var e=b,d;if(b<N){e=N;d=-1}if(b>Q){e=Q;d=1}if(d){var a=b-e;if(f){a=c.sf(a)*2/c.E;a=c.m(a*d,1.6)}else{a=c.m(a*d,.625);a=c.Yd(a*c.E/2)}b=e+a*d}}return b}function Nc(a){return sc(a,d)}function fd(a){return sc(a)}function vb(a,b){if(!(D&1)){var c=a-Q+(b||0),d=N-a+(b||0);if(c>0&&c>d)a=Q;else if(d>0)a=N}return a}function oc(a){return!(D&1)&&a-N<.0001}function mc(a){return!(D&1)&&Q-a<.0001}function pb(a){return!(D&1)&&(a-N<.0001||Q-a<.0001)}function Pb(c,a,d){!ub&&b.c(Y,function(b){b.zc(c,a,d)})}function uc(b){var a=b,d=pb(b);if(d)a=vb(a);else{b=v(b);a=b}a=c.T(a);a=c.I(a,0);return a}function cd(a){if(a!=t){w[t];gc=t;t=a;ic=w[t]}}function Qc(){z=0;var b=A.n(),d=uc(b);Pb(d,b);if(pb(b)||b==c.T(b)){if(s&2&&(ab>0&&d==q-1||ab<0&&!d))s=0;cd(d);a.j(j.Zf,t,gc)}}function dc(a,b){if(q&&(!b||!y.Bc())){y.B();y.vc(a,a)}}function qb(a){if(q){a=v(a);a=vb(a);dc(a)}else Pb(0,0)}function Vc(){var b=j.Ud||0,a=ib;j.Ud|=a;return W=a&~b}function Rc(){if(W){j.Ud&=~ib;W=0}}function Wc(){var a=b.Rc();b.S(a,bb);return a}function v(b,a){a=a||q||1;return(b%a+a)%a}function wc(c,a,b){s&8&&(s=0);Wb(c,Ab,a,b)}function Qb(){b.c(Y,function(a){a.rc(a.Nc.zg<=T)})}function ed(){if(!T){T=1;Qb();if(!B){X&12&&Dc();w[t]&&w[t].qc()}}a.j(j.Pf)}function dd(){if(T){T=0;Qb();B||!(X&12)||Fc()}a.j(j.Of)}function Kc(){b.c(C,function(a){b.S(a,bb);b.cd(a,"hidden");b.ub(a)});b.S(U,bb)}function Rb(b,a){Wb(b,a,d)}function Wb(g,h,l,p){if(q&&(!B||m.Rd)&&!Db()){var f=A.n(),a=g;if(l){a=f+g;if(D&2){if(oc(f)&&g<0)a=Q;if(mc(f)&&g>0)a=N}}if(!(D&1))if(p)a=v(a);else a=vb(a,.5);if(l&&!pb(a))a=c.Y(a);var j=(a-f)%q;a=f+j;if(h==e)h=Ab;var b=c.mb(j),i=0;if(b){if(b<1)b=c.m(b,.5);if(b>1){var o=Lc(),n=(R&1?Fb:Eb)/o;b=c.s(b,n*1.5)}i=h*b}ub=d;y.B();ub=k;y.vc(f,a,i)}}function Oc(e,h,o){var l=this,i={i:2,u:1,v:2,g:1},m={i:"top",u:"right",v:"bottom",g:"left"},g,a,f,j,k={};l.M=e;l.nc=function(q,l,u){var p,s=q,r=l;if(!f){f=b.le(e);g=e.parentNode;j={pc:b.q(e,n.fe,1),eb:b.q(e,n.Mb)};b.c(m,function(c,a){k[a]=b.q(e,"data-scale-"+c,1)});a=e;if(h){a=b.Sb(g,d);b.S(a,{i:0,g:0});b.nb(a,e);b.nb(g,a)}}if(o){p=c.I(q,l);if(h)if(u>=0&&u<1){var w=c.s(q,l);p=c.s(p/w,1/(1-u))*w}}else s=r=p=c.m(K<P?l:q,j.pc);var x=h?1.001:1,t=p*x;h&&(fc=t);b.fg(a,t);b.A(g,f.N*s);b.C(g,f.R*r);var v=b.Xd()&&b.wc()<9?t:1,y=(s-v)*f.N/2,z=(r-v)*f.R/2;b.O(a,y);b.P(a,z);b.c(f,function(d,a){if(i[a]&&d){var e=(i[a]&1)*c.m(q,k[a])*d+(i[a]&2)*c.m(l,k[a])*d/2;b.re[a](g,e)}});b.jd(g,j.eb)}}function ad(){var a=this;l.call(a,0,0,{Yb:q});b.c(w,function(b){a.Ec(b);b.jc(G/F)})}function Zc(){var a=this,b=Ib.M;l.call(a,-1,2,{fb:h.ic,ee:{Pb:vc},Yb:q,bd:Bb},b,{Pb:1},{Pb:-2})}function bd(){var b=this;l.call(b,-1e8,2e8);b.xb=function(e,b){if(c.mb(b-e)>1e-5){var g=b,f=b;if(c.T(b)!=b&&b>e&&(D&1||b>db))f++;var h=uc(f);Pb(h,g,d);a.j(j.hg,v(g),v(e),b,e)}}}function Pc(o,n){var b=this,f,i,e,c,h;l.call(b,-1e8,2e8,{Id:100});b.ad=function(){mb=d;a.j(j.gg,v(A.n()),V.n())};b.Sc=function(){mb=k;c=k;a.j(j.kg,v(A.n()),V.n());!B&&Qc()};b.xb=function(g,b){var a=b;if(c)a=h;else if(e){var d=b/e;a=m.Cc(d)*(i-f)+f}a=Nc(a);V.F(a)};b.vc=function(a,c,h,g){B=k;e=h||1;f=a;i=c;ub=d;V.F(a);ub=k;b.F(0);b.mc(e,g)};b.og=function(){c=d;c&&b.Jd(g,g,d)};b.qg=function(a){h=a};V=new bd;V.K(o);V.K(n)}function Mc(){var c=this,a=Wc();b.G(a,0);c.M=a;c.dc=function(){b.ub(a);b.Qb(a)}}function Yc(n,h){var f=this,gb=b.V(f,p),x,S,hb=n,B=b.q(hb,"data-fillmode",m.rg),C,r,z=[],R,G,O,N,i,u,y,P;l.call(f,-J,J+1,{Yb:D&1?q:e,bd:Bb});function L(a){x&&x.k();Q(n,a,0);N=d;x=new eb.W(n,eb,{Ib:b.q(n,"idle",hc),eg:!s});x.Xc(o.vb,X);x.F(0)}function W(){x.Gc<eb.Gc&&L()}function X(b,a){if(h==t)Xb+=a}function M(n,p,m){if(!G){G=d;if(r&&m){var e=m.width,c=m.height,l=e,i=c;if(e&&c&&B){if(B&3&&(!(B&4)||e>I||c>H)){var g=k,o=I/H*c/e;if(B&1)g=o>1;else if(B&2)g=o<1;l=g?e*H/c:I;i=g?H:c*I/e}b.A(r,l);b.C(r,i);b.P(r,(H-i)/2);b.O(r,(I-l)/2)}b.qb(r,"absolute");a.j(j.sg,h)}}p.yd(k);n&&n(f)}function V(g,b,c,e){if(e==y&&t==h&&s&&Cb()&&!f.Wc()){var a=v(g);E.ke(a,h,b,f,c,H/I);b.tg();ob.jc(a-ob.kc()-1);ob.F(a);dc(a,d)}}function Z(b){if(b==y&&t==h&&Cb()&&!f.Wc()){if(!i){var a=g;if(E)if(E.Nb==h)a=E.Ee();else E.dc();W();i=new Xc(n,h,a,x);i.Kf(u);Xb=0}!i.Bc()&&i.yc()}}function F(a,d){if(a==h){if(a!=d)w[d]&&w[d].zd();u&&u.sc();y=b.Kb();f.Db(b.X(g,Z,y))}else{var i=c.s(h,a),e=c.I(h,a),k=c.s(e-i,i+q-e),j=J+m.Tf-1;(!O||k<=j)&&f.Db()}}function cb(){if(t==h&&i){i.B();u&&u.If();u&&u.Hf();i.Bd()}}function db(){t==h&&i&&i.B()}function Y(b){!fb&&a.j(j.ef,h,b)}f.yd=function(a){if(P!=a){P=a;a&&b.nb(n,C);!a&&b.rb(C)}};f.Db=function(e,c){c=c||f;if(z.length&&!G){c.yd(d);if(!R){R=d;a.j(j.df,h);b.c(z,function(a){if(!b.l(a,"src")){a.src=b.J(a,"src2")||"";b.tb(a,b.l(a,"data-display"))}})}b.ze(z,r,b.X(g,M,e,c))}else M(e,c)};f.cf=function(){if(Sc())if(q==1){f.zd();F(h,h)}else{var a;if(E)a=E.ie(q);if(a){y=b.Kb();var c=h+ab,d=w[v(c)];return d.Db(b.X(g,V,c,d,a,y),f)}else(D||!pb(A.n())||!pb(A.n()+ab))&&Rb(ab)}};f.qc=function(){F(h,h)};f.zd=function(){u&&u.If();u&&u.Hf();f.Dd();i&&i.bf();i=g;L()};f.tg=function(){b.ub(n)};f.Dd=function(){b.yb(n)};function Q(a,h,c){if(b.l(a,Jb))return;if(!N){b.l(a,"data-events",b.Vb(a));b.l(a,"data-display",b.tb(a));b.Qf(a,b.J(a,"data-to"));b.Rf(a,b.J(a,"data-bf"));b.Sf(a,b.q(a,"data-p"));b.Vf(a,b.J(a,"po"));if(a.tagName=="IMG"){z.push(a);if(!b.l(a,"src")){O=d;b.ub(a)}}var e=b.qe(a);if(e){var f=new Image;b.J(f,"src2",e);z.push(f)}c&&b.G(a,(b.G(a)||0)+1)}var g=b.Cb(a);b.c(g,function(d,e){if(c<2&&!e&&!r)if(b.J(d,"u")=="image"){r=d;r.border=0;b.S(r,bb);b.S(a,bb)}Q(d,h,c+1)})}f.Zc=function(c,b){var a=J-b;vc(S,a)};f.Nb=h;var K=b.hd(n,"thumb",d);if(K){b.Sb(K);b.ub(K)}b.yb(n);C=b.Sb(U);b.G(C,1e3);f.a(n,"click",Y);L(d);S=n;f.a(a,203,F);f.a(a,28,db);f.a(a,24,cb);f.k=function(){b.k(gb,x,i)}}function Xc(F,g,n,q){var c=this,D=b.V(c,p),i=0,u=0,f,r,h,e,m,x,v,y=w[g];l.call(c,0,0);function A(){c.yc()}function C(a){v=a;c.B();c.yc()}function z(){}c.yc=function(){if(!B&&!mb&&!v&&t==g&&!c.Wc()){var k=c.n();if(!k)if(f&&!m){m=d;c.Bd(d);a.j(j.af,g,u,i,u,f,e)}a.j(j.Fd,g,k,i,r,h,e);if(!Db()){var l;if(k==e)s&&b.bc(y.cf,20);else{if(k==h)l=e;else if(!k)l=h;else l=c.Ld();(k!=h||!Bc())&&c.mc(l,A)}}}};c.bf=function(){E&&E.Nb==g&&E.dc();var b=c.n();b<e&&a.j(j.Fd,g,-b-1,i,r,h,e)};c.Bd=function(a){n&&b.cd(S,a&&n.Kc.xg?"":"hidden")};c.Zc=function(c,b){if(m&&b>=f){m=k;y.Dd();E.dc();a.j(j.Ze,g,f,i,u,f,e)}a.j(j.Ye,g,b,i,r,h,e)};c.Kf=function(a){if(a&&!x){x=a;a.Xc($JssorPlayer$.he,C)}};c.a(q,o.Tc,z);n&&c.Ec(n);f=c.lb();c.Ec(q);r=f+q.fc;e=c.lb();h=s?f+q.Yc:e;c.k=function(){D.k();c.B()}}function ec(){bc=mb;Ac=y.Ld();cb=A.n();tb=fd(cb)}function Fc(){ec();if(B||Db()){y.B();a.j(j.Xe)}}function Dc(f){if(Cb()){var b=A.n(),a=tb,e=0;if(f&&c.mb(O)>=m.dd){a=b;e=xb}a=c.kb(a);a=vb(a+e,.5);var d=c.mb(a-b);if(d<1&&m.Cc!=h.ic)d=c.m(d,.5);if((!fb||!f)&&bc)y.mc(Ac);else if(b==a)ic.qc();else y.vc(b,a,d*Ab)}}function yc(a){!b.sb(b.ac(a),e,n.Td)&&b.gc(a)}function pc(b){yb=k;B=d;Fc();if(!bc)z=0;a.j(j.Jf,v(cb),cb,b)}function Uc(a){tc(a,1)}function tc(c,d){O=0;wb=0;xb=0;Gc=fc;if(d){var j=c.touches[0];Nb=j.clientX;Ob=j.clientY}else{var h=b.Wd(c);Nb=h.x;Ob=h.y}var f=b.ac(c),g=b.sb(f,"1",Cc);if((!g||g===u)&&!W&&(!d||c.touches.length==1)){jb=b.sb(f,e,n.Td)||!ib||!Vc();a.a(i,d?"touchmove":"mousemove",Ub);yb=!jb&&b.sb(f,e,n.Jc);!yb&&!jb&&pc(c,d)}}function Ub(a){var e,f;a=b.de(a);if(a.type!="mousemove")if(a.touches.length==1){f=a.touches[0];e={x:f.clientX,y:f.clientY}}else gb();else e=b.Wd(a);if(e){var i=e.x-Nb,j=e.y-Ob,g=c.mb(i),h=c.mb(j);if(z||g>1.5||h>1.5)if(yb)pc(a,f);else{if(c.T(tb)!=tb)z=z||R&W;if((i||j)&&!z){if(W==3)if(h>g)z=2;else z=1;else z=W;if(zb&&z==1&&h>g*2.4)jb=d}var l=i,k=kb;if(z==2){l=j;k=lb}(O-wb)*nb<-1.5&&(xb=0);(O-wb)*nb>1.5&&(xb=-1);wb=O;O=l;Hc=tb-O*nb/k/Gc;if(O&&z&&!jb){b.gc(a);y.og(d);y.qg(Hc)}}}}function gb(){Rc();a.H(i,"mousemove",Ub);a.H(i,"touchmove",Ub);fb=O;if(B){fb&&s&8&&(s=0);y.B();B=k;var b=A.n();a.j(j.Ve,v(b),b,v(cb),cb);X&12&&ec();Dc(d)}}function Jc(c){var a=b.ac(c),d=b.sb(a,"1",Jb);if(u===d)if(fb){b.Xf(c);while(a&&u!==a){(a.tagName=="A"||b.l(a,"data-jssor-button"))&&b.gc(c);a=a.parentNode}}else s&4&&(s=0)}a.Fb=function(a){if(a==e)return s;if(a!=s){s=a;s&&w[t]&&w[t].qc()}};a.Bb=function(){return K};a.Ab=function(){return P};a.ff=function(b){if(b==e)return Tb||K;a.nc(b,b/K*P)};a.nc=function(c,a,d){b.A(u,c);b.C(u,a);zc=c/K;qc=a/P;b.c(Ic,function(a){a.nc(zc,qc,d)});if(!Tb){b.cc(S,x);b.P(S,0);b.O(S,0)}Tb=c};a.we=oc;a.De=mc;a.Jd=function(){a.Fb(s||1)};function Tc(){Vb.Nd&&b.Jb(x,Vb.Nd,([g,"pan-y","pan-x","auto"])[ib]||"");a.a(u,"click",Jc,d);a.a(u,"mouseleave",ed);a.a(u,"mouseenter",dd);a.a(u,"mousedown",tc);a.a(u,"touchstart",Uc);a.a(u,"dragstart",yc);a.a(u,"selectstart",yc);a.a(f,"mouseup",gb);a.a(i,"mouseup",gb);a.a(i,"touchend",gb);a.a(i,"touchcancel",gb);a.a(f,"blur",gb);m.lc&&a.a(i,"keydown",function(c){var a=b.Zd(c);if(a==37||a==39){s&8&&(s=0);wc(m.lc*(a-38)*nb,d)}})}function kc(f){xc.ud();C=[];w=[];var g=b.Cb(x),j=b.id(["DIV","A","LI"]);b.c(g,function(a){j[a.tagName.toUpperCase()]&&!b.J(a,"u")&&C.push(a);b.G(a,(b.G(a)||0)+1)});q=C.length;if(q){var a=R&1?Fb:Eb;Kc();G=m.Ed;if(G==e)G=(a-F+L)/2;hb=a/F;J=c.s(q,m.Wb||q,c.kb(hb));D=J<q?m.Lb:0;if(q*F-L<=a){hb=q-L/F;G=(a-F+L)/2;ac=(a-F*q+L)/2}if(Gb){Lb=Gb.W;jc=!G&&J==1&&q>1&&Lb&&(!b.Xd()||b.wc()>=9)}if(!(D&1)){db=G/F;if(db>q-1){db=q-1;G=db*F}N=db;Q=N+q-hb-L/F}ib=(J>1||G?R:-1)&m.Hc;if(jc)E=new Lb(Ib,I,H,Gb,zb,Mb);for(var d=0;d<C.length;d++){var h=C[d],i=new Yc(h,d);w.push(i)}ob=new Zc;A=new ad;y=new Pc(A,ob);Tc()}b.c(Y,function(a){a.Pc(q,w);f&&a.Xc(r.Uc,wc)})}a.p=function(c,g){a.M=u=b.zb(c);K=b.A(u);P=b.C(u);m=b.ab({rg:0,Tf:1,lc:1,Qc:0,Fb:0,Lb:1,Ac:d,Rd:d,qf:1,qd:3e3,ld:1,Vc:500,Cc:h.Sd,dd:20,fd:0,pf:1,md:1,Hc:1},g);m.Ac=m.Ac&&b.jg();if(m.Ib!=e)m.qd=m.Ib;if(m.of!=e)m.Wb=m.of;if(m.nf!=e)m.Ed=m.nf;s=m.Fb&63;!m.pf;ab=m.qf;X=m.ld;X&=zb?10:5;hc=m.qd;Ab=m.Vc;R=m.md&3;rb=b.ug(b.l(u,"dir"))=="rtl";Bb=rb&&(R==1||m.Hc&1);nb=Bb?-1:1;Gb=m.yg;eb=b.ab({W:o},m.mf);sb=m.lf;Z=m.kf;M=m.Cg;var f=b.Cb(u);b.c(f,function(a,d){var c=b.J(a,"u");if(c=="loading")U=a;else{if(c=="slides"){x=a;b.Jb(x,"margin",0);b.Jb(x,"padding",0)}if(c=="navigator")Sb=a;if(c=="arrowleft")Zb=a;if(c=="arrowright")Yb=a;if(c=="thumbnavigator")Hb=a;if(a.tagName!="STYLE"&&a.tagName!="SCRIPT")Ic[c||d]=new Oc(a,c=="slides",b.id(["slides","thumbnavigator"])[c])}});U&&b.rb(U);U=U||b.Rc(i);Fb=b.A(x);Eb=b.C(x);I=m.ne||Fb;H=m.Be||Eb;bb={N:I,R:H,i:0,g:0,kd:"block",Pb:"absolute"};L=m.fd;kb=I+L;lb=H+L;F=R&1?kb:lb;Ib=new Mc;if(m.Ac&&(!b.pg()||zb))Mb=function(a,c,d){b.xe(a,{jb:c,ob:d})};b.l(u,Jb,"1");b.G(x,b.G(x)||0);b.qb(x,"absolute");S=b.Sb(x,d);b.Jb(S,"pointerEvents","none");b.cc(S,x);b.nb(S,Ib.M);b.cd(x,"hidden");if(Sb&&sb){sb.Ub=rb;lc=new sb.W(Sb,sb,K,P);Y.push(lc)}if(Z&&Zb&&Yb){Z.Ub=rb;Z.Lb=m.Lb;nc=new Z.W(Zb,Yb,Z,a);Y.push(nc)}if(Hb&&M){M.Qc=m.Qc;M.lc=M.lc||0;M.Ub=rb;cc=new M.W(Hb,M,U);!M.vg&&b.l(Hb,Cc,"1");Y.push(cc)}kc(d);a.nc(K,P);Qb();qb(v(m.Qc));b.Jb(u,"visibility","visible")};a.k=function(){s=0;b.k(w,Y,xc);b.Qb(u)};b.p(a)};j.ef=21;j.Jf=22;j.Ve=23;j.gg=24;j.kg=25;j.df=26;j.sg=27;j.Xe=28;j.Of=31;j.Pf=32;j.hg=202;j.Zf=203;j.af=206;j.Ze=207;j.Ye=208;j.Fd=209;jssor_1_slider_init=function(){var d=[[{b:-1,d:1,o:-.7}],[{b:900,d:2e3,x:-379,e:{x:7}}],[{b:900,d:2e3,x:-379,e:{x:7}}],[{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]],e={Fb:1,Vc:800,Cc:h.Vd,Wb:1,Ed:0,mf:{W:s,Ic:d},kf:{W:v},lf:{W:u}},c=new j("jssor_1",e),g=3e3;function a(){var d=c.M.parentNode,b=d.clientWidth;if(b){var e=m.min(g||b,b);c.ff(e)}else f.setTimeout(a,30)}a();b.ib(f,"load",a);b.ib(f,"resize",a);b.ib(f,"orientationchange",a)}}(window,document,Math,null,true,false)
	</script>
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />
	<style>
	.jssorl-009-spin img{animation-name:jssorl-009-spin;animation-duration:1.6s;animation-iteration-count:infinite;animation-timing-function:linear}@keyframes jssorl-009-spin{from{transform:rotate(0);}to{transform:rotate(360deg);}}.jssorb032{position:absolute}.jssorb032 .i{position:absolute;cursor:pointer}.jssorb032 .i .b{fill:#fff;fill-opacity:.7;stroke:#000;stroke-width:1200;stroke-miterlimit:10;stroke-opacity:.25}.jssorb032 .i:hover .b{fill:#000;fill-opacity:.6;stroke:#fff;stroke-opacity:.35}.jssorb032 .iav .b{fill:#000;fill-opacity:1;stroke:#fff;stroke-opacity:.35}.jssorb032 .i.idn{opacity:.3}.jssora051{display:block;position:absolute;cursor:pointer}.jssora051 .a{fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10}.jssora051:hover{opacity:.8}.jssora051.jssora051dn{opacity:.5}.jssora051.jssora051ds{opacity:.3;pointer-events:none}
	</style>
	<div id="navbar">
	  <p class="active" >Commercial Aircrafts across the GLOBE</p>
	</div>

	<div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:500px;overflow:hidden;visibility:hidden;">

	<!-- Loading Screen -->
	<div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:50%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
		<img style="margin-top:-19px;position:relative;top:30%;width:38px;height:38px;" src="img/spin.svg" />
	</div>
	<div data-u="slides" style="cursor:default;position:relative;top:0px;left:90px;width:1100px;height:500px;overflow:hidden;">
		<div data-p="225.00">
			<img data-u="image" src="img/A380.jpg"  alt="Airbus 380"/>
		</div>
		<div data-p="225.00">
			<img data-u="image" src="img/B747.jpg" alt="Boeing 747"/>
		</div>
		<div data-p="225.00">
			<img data-u="image" src="img/B777.jpg" alt="Boeing 777"/>
		</div>
		<div data-p="225.00">
			<img data-u="image" src="img/a330.jpg" alt="Airbus 330"/>
		</div>
		<div data-p="225.00">
			<img data-u="image" src="img/A320.jpg" alt="Airbus 320"/>
		</div>
		<div data-p="225.00">
			<img data-u="image" src="img/a340.jpg" alt="Airbus 340"/>
		</div>
		

	</div>
	<!-- Bullet Navigator -->
	<div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
	<div data-u="prototype" class="i" style="width:16px;height:16px;">
	<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:85%;height:85%;">
	<circle class="b" cx="8000" cy="8000" r="5800"></circle>
	</svg>
	</div>
	</div>
	<!-- Arrow Navigator -->
	<div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:80px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
	<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
	<polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
	</svg>
	</div>
	<div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:110px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
	<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
	<polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
	</svg>
	</div>
	</div>
	<div>
	<script type="text/javascript">
	jssor_1_slider_init();
	</script>
	<!--Slider end -->
	<!--  Testimonials Section  -->
	<section class="testimonials animated wow fadeIn" id="testimonials" data-wow-duration="2s">
		<div class="container">
		
				<h1>What People Got To Say About Our Blog!! </h1>
			<div class="testimonials_list">
				<ul class="list-unstyled text-center slides clearfix" id="tslider">
					<li>
						<blockquote>
							<p>The Website is very informative, provides proper details in every section and UI is very simple and easy to use !! The Airplanes section is designed nicely and different series of commercial aircrafts are mentioned one after the other.</p>
							<span class="author text-uppercase">Rocky Jain</span>
							<span class="job">iOS Developer</span>
							
						</blockquote>
					</li>

					<li>
						<blockquote>
							<p>ABCD</p>
							<span class="author text-uppercase">Alex Fredy</span>
							<span class="job">android developer</span>
							
						</blockquote>
					</li>

					<li>
						<blockquote>
							<p>Integer pharetra tellus varius, dictum erat vel, maximus tellus. Sed vitae auctor ipsum. Aliquam luctus erat nec pulvinar vehicula donec congue tortor eget sem condimentum, ut tempor massa porttitor. Praesent tincidunt mi orci  in sollicitudin mi dapibus dapibus pellentesque habitant morbi tristique senectus et malesuada fames turpis egestas.</p>
							<span class="author text-uppercase">Sara Aliba</span>
							<span class="job">app Designer</span>
							
						</blockquote>
					</li>
				</ul>
				<div id="slider_nav">
					<div id="prev_arrow"></div>
					<div id="next_arrow"></div>
				</div>
			</div>
		</div>
	</section>
	<!--  End Testimonials Section  -->
	
	<!--  Email Subscription Section  -->
	<section class="sub_box">
		<p class="cta_text animated wow fadeInDown">Join Our Group Of Bloggers and stay updated!</p>	
		
		<form action="" metohd="post" class="animated wow fadeIn" data-wow-duration="2s" id="submit_form">
			<input type="email" id="mc-email" placeholder="Enter your email"/>
			<button type="submit" id="mc_submit">
				
				<i class="icon"><a href='mail.php'></i></a>
			</button>
		</form>
		<div class="message" id="error_msg">Please Enter A Valid Email.</div>
		<div class="message" id="success_msg">Thank You For Your Subscription.</div>
		<div class="cta_text animated wow fadeInDown">
			<br><p>Wanna write a review ?? then,<a href='Login/index.php'>Login</a>Now !</p>	
		</div>
		
	</section>
	<!--  End Email Subscription Section  -->
	
	<!--  Footer Section  -->
	<footer>
		<p class="cta_text animated wow fadeInDown">For your easy accessibility Our Site is supported on many platforms so that your experience is not interrupted!!</p>
		<ul class="list-unstyled list-inline app_platform">
			<li class="animated wow fadeInDown" data-wow-delay="0s">
				<a href=""><img src="img/android_icon.png" alt="" title="ANDROID OPTIMZED"></a>
			</li>
			<li class="animated wow fadeInDown" data-wow-delay=".1s">
				<a href=""><img src="img/ios_icon.png" alt="" title="iOS OPTIMZED"></a>
			</li>
			<li class="animated wow fadeInDown" data-wow-delay=".2s">
				<a href=""><img src="img/windows_icon.png" alt="" title="WINDOWS OPTIMZED"></a>
			</li>
		</ul>
		
		<p class="cta_text animated wow fadeInDown">This site is best viewed in <strong>Google Chrome, Mozilla Firefox, Microsoft Edge</strong></p>
		<p class="copyright animated wow fadeIn" data-wow-duration="2s">© 2018 <a href="" target="_blank"><strong>Aviation.com</strong></a>. All Rights Reserved</p>
		<p class="copyright animated wow fadeIn" data-wow-duration="2s" >Created by Inderjeet and Nidhi</p>
	</footer>
	<!--  End Footer Section  -->


</body>
</html>