<!-- Fixed navbar -->
<style>
*:focus {
    outline: none;
}
*::-moz-focus-inner {
    border: 0;
}
.notransition * {
    -webkit-transition: none !important;
    -moz-transition: none !important;
    -o-transition: none !important;
    -ms-transition: none !important;
    transition: none !important;
}
.align-left {
    text-align: left !important;
}
.align-right {
    text-align: right !important;
}
.align-center {
    text-align: center !important;
}

/* Buttons */

.btn {
    border-radius: 2px;
    text-decoration: none;
}
.btn-round {
    border-radius: 50px;
}
.btn-o {
    border-width: 1px;
    border-style: solid;
}
.btn-gray {
    background-color: #999;
    color: #fff;
}
.btn-o.btn-gray {
    background-color: transparent;
    color: #999;
    border-color: #999;
}
.no-touch .btn-gray:hover,
.btn-gray:focus,
.btn-gray:active,
.btn-gray.active,
.open > .dropdown-toggle.btn-gray {
    background-color: #333;
    color: #fff;
}
.no-touch .btn-o.btn-gray:hover,
.btn-o.btn-gray:focus,
.btn-o.btn-gray:active,
.btn-o.btn-gray.active,
.open > .dropdown-toggle.btn-o.btn-gray {
    background-color: #999;
    color: #fff;
}
.btn-white {
    background-color: #fff;
    color: #999;
}
.btn-o.btn-white {
    background-color: transparent;
    color: #fff;
    border-color: #fff;
}
.no-touch .btn-white:hover,
.btn-white:focus,
.btn-white:active,
.btn-white.active,
.open > .dropdown-toggle.btn-white {
    background-color: #fff;
    color: #333;
}
.no-touch .btn-o.btn-white:hover,
.btn-o.btn-white:focus,
.btn-o.btn-white:active,
.btn-o.btn-white.active,
.open > .dropdown-toggle.btn-o.btn-white {
    background-color: #fff;
    color: #333;
}
.btn-black {
    background-color: #333;
    color: #fff;
}
.btn-o.btn-black {
    background-color: transparent;
    color: #333;
    border-color: #333;
}
.no-touch .btn-black:hover,
.btn-black:focus,
.btn-black:active,
.btn-black.active,
.open > .dropdown-toggle.btn-black {
    background-color: #000;
    color: #fff;
}
.no-touch .btn-o.btn-black:hover,
.btn-o.btn-black:focus,
.btn-o.btn-black:active,
.btn-o.btn-black.active,
.open > .dropdown-toggle.btn-o.btn-black {
    background-color: #000;
    color: #fff;
}
.btn-green {
    background-color: #0eaaa6;
    color: #fff;
}
.btn-o.btn-green {
    background-color: transparent;
    color: #0eaaa6;
    border-color: #0eaaa6;
}
.no-touch .btn-green:hover,
.btn-green:focus,
.btn-green:active,
.btn-green.active,
.open > .dropdown-toggle.btn-green {
    background-color: #068b85;
    color: #fff;
}
.no-touch .btn-o.btn-green:hover,
.btn-o.btn-green:focus,
.btn-o.btn-green:active,
.btn-o.btn-green.active,
.open > .dropdown-toggle.btn-o.btn-green {
    background-color: #0eaaa6;
    color: #fff;
}
.btn-blue {
    background-color: #1d82aa;
    color: #fff;
}
.btn-o.btn-blue {
    background-color: transparent;
    color: #1d82aa;
    border-color: #1d82aa;
}
.no-touch .btn-blue:hover,
.btn-blue:focus,
.btn-blue:active,
.btn-blue.active,
.open > .dropdown-toggle.btn-blue {
    background-color: #086492;
    color: #fff;
}
.no-touch .btn-o.btn-blue:hover,
.btn-o.btn-blue:focus,
.btn-o.btn-blue:active,
.btn-o.btn-blue.active,
.open > .dropdown-toggle.btn-o.btn-blue {
    background-color: #1d82aa;
    color: #fff;
}
.btn-magenta {
    background-color: #9b156e;
    color: #fff;
}
.btn-o.btn-magenta {
    background-color: transparent;
    color: #9b156e;
    border-color: #9b156e;
}
.no-touch .btn-magenta:hover,
.btn-magenta:focus,
.btn-magenta:active,
.btn-magenta.active,
.open > .dropdown-toggle.btn-magenta {
    background-color: #7e115f;
    color: #fff;
}
.no-touch .btn-o.btn-magenta:hover,
.btn-o.btn-magenta:focus,
.btn-o.btn-magenta:active,
.btn-o.btn-magenta.active,
.open > .dropdown-toggle.btn-o.btn-magenta {
    background-color: #9b156e;
    color: #fff;
}
.btn-yellow {
    background-color: #eab134;
    color: #fff;
}
.btn-o.btn-yellow {
    background-color: transparent;
    color: #eab134;
    border-color: #eab134;
}
.no-touch .btn-yellow:hover,
.btn-yellow:focus,
.btn-yellow:active,
.btn-yellow.active,
.open > .dropdown-toggle.btn-yellow {
    background-color: #dfa412;
    color: #fff;
}
.no-touch .btn-o.btn-yellow:hover,
.btn-o.btn-yellow:focus,
.btn-o.btn-yellow:active,
.btn-o.btn-yellow.active,
.open > .dropdown-toggle.btn-o.btn-yellow {
    background-color: #eab134;
    color: #fff;
}
.btn-red {
    background-color: #ea3d36;
    color: #fff;
}
.btn-o.btn-red {
    background-color: transparent;
    color: #ea3d36;
    border-color: #ea3d36;
}
.no-touch .btn-red:hover,
.btn-red:focus,
.btn-red:active,
.btn-red.active,
.open > .dropdown-toggle.btn-red {
    background-color: #d22a2a;
    color: #fff;
}
.no-touch .btn-o.btn-red:hover,
.btn-o.btn-red:focus,
.btn-o.btn-red:active,
.btn-o.btn-red.active,
.open > .dropdown-toggle.btn-o.btn-red {
    background-color: #ea3d36;
    color: #fff;
}
.btn-facebook {
    background-color: #43609c;
    color: #fff;
}
.btn-o.btn-facebook {
    background-color: transparent;
    color: #43609c;
    border-color: #43609c;
}
.no-touch .btn-facebook:hover,
.btn-facebook:focus,
.btn-facebook:active,
.btn-facebook.active,
.open > .dropdown-toggle.btn-facebook {
    background-color: #395285;
    color: #fff;
}
.no-touch .btn-o.btn-facebook:hover,
.btn-o.btn-facebook:focus,
.btn-o.btn-facebook:active,
.btn-o.btn-facebook.active,
.open > .dropdown-toggle.btn-o.btn-facebook {
    background-color: #43609c;
    color: #fff;
}
.btn-twitter {
    background-color: #55acee;
    color: #fff;
}
.btn-o.btn-twitter {
    background-color: transparent;
    color: #55acee;
    border-color: #55acee;
}
.no-touch .btn-twitter:hover,
.btn-twitter:focus,
.btn-twitter:active,
.btn-twitter.active,
.open > .dropdown-toggle.btn-twitter {
    background-color: #4993cc;
    color: #fff;
}
.no-touch .btn-o.btn-twitter:hover,
.btn-o.btn-twitter:focus,
.btn-o.btn-twitter:active,
.btn-o.btn-twitter.active,
.open > .dropdown-toggle.btn-o.btn-twitter {
    background-color: #55acee;
    color: #fff;
}
.btn-google {
    background-color: #dd4b39;
    color: #fff;
}
.btn-o.btn-google {
    background-color: transparent;
    color: #dd4b39;
    border-color: #dd4b39;
}
.no-touch .btn-google:hover,
.btn-google:focus,
.btn-google:active,
.btn-google.active,
.open > .dropdown-toggle.btn-google {
    background-color: #c44433;
    color: #fff;
}
.no-touch .btn-o.btn-google:hover,
.btn-o.btn-google:focus,
.btn-o.btn-google:active,
.btn-o.btn-google.active,
.open > .dropdown-toggle.btn-o.btn-google {
    background-color: #dd4b39;
    color: #fff;
}
.btn-pinterest {
    background-color: #cb2027;
    color: #fff;
}
.btn-o.btn-pinterest {
    background-color: transparent;
    color: #cb2027;
    border-color: #cb2027;
}
.no-touch .btn-pinterest:hover,
.btn-v:focus,
.btn-pinterest:active,
.btn-pinterest.active,
.open > .dropdown-toggle.btn-pinterest {
    background-color: #b51d22;
    color: #fff;
}
.no-touch .btn-o.btn-pinterest:hover,
.btn-o.btn-pinterest:focus,
.btn-o.btn-pinterest:active,
.btn-o.btn-pinterest.active,
.open > .dropdown-toggle.btn-o.btn-pinterest {
    background-color: #cb2027;
    color: #fff;
}
.btn-icon {
    padding-left: 0 !important;
    padding-right: 0 !important;
    width: 36px;
    text-align: center;
}
.btn-icon.btn-lg {
    width: 41px;
}
.btn-icon.btn-sm {
    width: 31px;
}
.btn-icon.btn-xs {
    width: 22px;
}
.btn-icon.btn-round {
    border-radius: 50%;
}
.btn > .state, .btn.active > .state-active {
    display: inline-block;
}
.btn.active > .state, .btn > .state-active {
    display: none;
}
.text-gray {
  color: #999;
}
.no-touch a.text-gray:hover {
  color: #333;
}
.text-green {
  color: #0eaaa6;
}
.no-touch a.text-green:hover {
  color: #068b85;
}
.text-blue {
  color: #1d82aa;
}
.no-touch a.text-blue:hover {
  color: #086492;
}
.text-magenta {
  color: #9b156e;
}
.no-touch a.text-magenta:hover {
  color: #7e115f;
}
.text-yellow {
  color: #eab134;
}
.no-touch a.text-yellow:hover {
  color: #dfa412;
}
.text-red {
  color: #ea3d36;
}
.no-touch a.text-red:hover {
  color: #d22a2a;
}
.bg-green {
    color: #fff;
    background-color: #0eaaa6;
}
.no-touch a.bg-green:hover {
    background-color: #068b85;
}
.bg-red {
    color: #fff;
    background-color: #ea3d36;
}
.no-touch a.bg-red:hover {
    background-color: #d22a2a;
}
.bg-blue {
    color: #fff;
    background-color: #1d82aa;
}
.no-touch a.bg-blue:hover {
    background-color: #086492;
}
.bg-yellow {
    color: #fff;
    background-color: #eab134;
}
.no-touch a.bg-yellow:hover {
    background-color: #dfa412;
}
.bg-magenta {
    color: #fff;
    background-color: #9b156e;
}
.no-touch a.bg-magenta:hover {
    background-color: #7e115f;
}

/* Header */

#header {
    background-color: #fff;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 60px;
    z-index: 1040;
}
.logo {
    background-color: #0eaaa6;
    float: left;
    width: 70px;
    height: 60px;
    overflow: hidden;
}
.logo.expanded {
    width: 200px;
}
.logo a {
    display: block;
    width: 70px;
    height: 60px;
    color: #fff;
    text-decoration: none;
    position: relative;
}
.logo.expanded a {
    width: 200px;
}
.logo a span {
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
.logo.expanded a span {
    -webkit-transition: none;
    -o-transition: none;
    transition: none;
}
.logo a span.marker {
    font-size: 29px;
    position: absolute;
    display: block;
    width: 19px;
    height: 28px;
    top: 15px;
    left: 21px;
}
.logo.expanded a span.marker {
    color: #fff;
    left: 20px;
}
.no-touch .logo a:hover span.marker {
    color: rgba(255, 255, 255, 0);
    top: 10px;
    text-decoration: none;
}
.no-touch .logo.expanded a:hover span.marker {
    color: rgba(255, 255, 255, 1);
    top: 15px;
    text-decoration: none;
}
.logo a span.logoText {
    color: #fff;
    position: absolute;
    font-size: 14px;
    top: -40px;
    left: 13px;
}
.logo.expanded a span.logoText {
    top: 20px;
    left: 54px;
}
.no-touch .logo a:hover span.logoText {
    color: #fff;
    top: 20px;
    text-decoration: none;
}
a.navHandler {
    display: block;
    width: 60px;
    height: 60px;
    float: left;
    text-align: center;
    font-size: 18px;
    padding-top: 17px;
}
.no-touch a.navHandler:hover {
    background-color: #f3f3f3;
    text-decoration: none;
}
a.mapHandler {
    float: right;
    text-align: center;
    font-size: 20px;
    padding-top: 13px;
    height: 50px;
    width: 20px;
    color: #fff;
    display: none;
    margin-right: 15px;
    text-decoration: none;
}
.no-touch a.mapHandler:hover {
    background-color: transparent;
}
a.userHandler {
    position: relative;
    float: right;
    text-align: center;
    font-size: 20px;
    padding-top: 13px;
    height: 50px;
    width: 20px;
    color: #fff;
    display: none;
    margin-right: 15px;
    text-decoration: none;
}
.no-touch a.userHandler:hover {
    background-color: transparent;
}
.search {
    float: left;
}
.searchIcon {
    font-size: 13px;
    float: left;
    color: #999;
    margin-left: 23px;
    display: block;
    padding-top: 23px;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
.searchIcon.active {
    color: #3a3a3a;
}
.search input {
    background-color: #fff;
    color: #3a3a3a;
    border: 0 none;
    font-size: 13px;
    margin: 19px 0 0 5px;
    width: 210px;
    -webkit-appearance: none;
}
.headerNotifyWraper {
    position: relative;
    float: right;
    width: 60px;
    height: 60px;
}
a.headerNotify {
    display: block;
    width: 60px;
    height: 60px;
    text-align: center;
    padding-top: 22px;
    text-decoration: none;
}
.no-touch a.headerNotify:hover, .headerNotifyWraper.open a.headerNotify {
    background-color: #f3f3f3;
    text-decoration: none;
}
.notifyIcon {
    font-size: 17px;
}
.counter {
    background-color: #ea3d36;
    color: #fff;
    position: absolute;
    display: block;
    padding: 2px;
    font-size: 11px;
    line-height: 10px;
    top: 15px;
    left: 30px;
    border-radius: 7px;
    text-align: center;
    min-width: 14px;
    text-decoration: none;
}
.headerNotifyWraper .dropdown-menu {
    border-radius: 3px;
    border: 1px solid #dfdfdf;
}
.notifyMenu, .userMenu {
    width: 300px;
    display: block;
    opacity: 0;
    visibility: hidden;
    margin-top: -20px;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
.notifyMenu, .userMenu a, .notifyMenu, .userMenu a span {
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
.open .notifyMenu, .open .userMenu {
    visibility: visible;
    opacity: 1;
    margin-top: 0;
    background: white;
}
.notifyHeader {
    padding: 10px;
    border-bottom: 1px solid #dfdfdf;
}
.notifyHeader span {
    font-size: 13px;
    line-height: 15px;
    display: block;
    float: left;
}
a.notifySettings {
    display: block;
    float: right;
    text-decoration: none;
    line-height: 11px;
}
.no-touch a.notifySettings:hover {
    text-decoration: none;
}
.notifyList {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.notifyList > li > a {
    padding: 10px;
    display: block;
    position: relative;
}
.no-touch .notifyList > li > a:hover {
    background-color: #f3f3f3;
}
.avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
}
.mobAvatar {
    display: none;
    padding: 20px 0;
    text-align: center;
}
.mobAvatarName {
    padding-top: 5px;
}
.mobAvatarImg {
    width: 100px;
    height: 100px;
    border: 1px solid #e8e8e8;
    padding: 3px;
}
.notify {
    width: 233px;
    margin-left: 5px;
}
.notifyName {
    font-size: 12px;
    color: #333;
    padding-top: 3px;
}
.notifyTime {
    font-size: 11px;
    color: #999;
}
.notifyRound {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    float: left;
    text-align: center;
    padding-top: 11px;
}
.notifyRound-green {
    border: 1px solid #0eaaa6;
    color: #0eaaa6;
}
.notifyRound-blue {
    border: 1px solid #1d82aa;
    color: #1d82aa;
}
.notifyRound-red {
    border: 1px solid #ea3d36;
    color: #ea3d36;
}
.notifyRound-yellow {
    border: 1px solid #eab134;
    color: #eab134;
}
.notifyRound-magenta {
    border: 1px solid #9b156e;
    color: #9b156e;
}
.notifyAll {
    padding: 10px;
    border-top: 1px solid #dfdfdf;
    text-align: center;
    display: block;
    font-size: 12px;
    line-height: 14px;
    color: #0eaaa6;
}
.no-touch .notifyAll:hover {
    color: #0eaaa6;
    text-decoration: underline;
}
@keyframes pulsate {
    0% {
        transform: scale(1.0, 1.0);
        opacity: 0.0;
    }
    50% {
        opacity: 0.5;
    }
    100% {
        transform: scale(1.4, 1.4);
        opacity: 0.0;
    }
}
@-webkit-keyframes pulsate {
    0% {
        -webkit-transform: scale(1.0, 1.0);
        opacity: 0.0;
    }
    50% {
        opacity: 0.5;
    }
    100% {
        -webkit-transform: scale(1.4, 1.4);
        pacity: 0.0;
    }
}
.pulse {
    border-radius: 50%;
    height: 40px;
    width: 40px;
    position: absolute;
    left: 10px;
    top: 10px;
    opacity: 0.0;
}
.border-grey {
    border: 3px solid #ababab;
}
.border-green {
    border: 3px solid #0eaaa6;
}
.border-blue {
    border: 3px solid #1d82aa;
}
.border-red {
    border: 3px solid #ea3d36;
}
.border-yellow {
    border: 3px solid #eab134;
}
.border-magenta {
    border: 3px solid #9b156e;
}
.bg-green {
    background-color: #0eaaa6;
}
.bg-blue {
    background-color: #1d82aa;
}
.bg-red {
    background-color: #ea3d36;
}
.bg-yellow {
    background-color: #eab134;
}
.bg-magenta {
    background-color: #9b156e;
}
.pulsate {
    -webkit-animation: pulsate 0.5s ease-out;
    animation: pulsate 0.5s ease-out;
}
.headerUserWraper {
    float: right;
    height: 60px;
}
a.headerUser {
    display: block;
    height: 60px;
    text-align: center;
    padding: 0 20px;
}

.headerUserWraper .dropdown-menu {
    border-radius: 3px;
    border: 1px solid #dfdfdf;
}
.headerAvatar {
    margin-top: 10px;
}
.userTop {
    margin: 20px 0 0 7px;
    font-size: 13px;
}
.userMenu {
    width: 190px;
}
.userMenu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.userMenu ul > li > a {
    padding: 7px 20px;
    display: block;
    font-size: 13px;
    color: #333;
    text-decoration: none;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
.userMenu ul > li > a > span {
    margin-right: 5px;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
.userMenu ul > li > a > span.badge {
    font-size: 12px;
    font-weight: normal;
    margin-right: 0;
}
.no-touch .userMenu ul > li > a:hover > span.badge, .no-touch .userMenu ul > li > a:focus > span.badge {
    color: #fff;
}
.no-touch .userMenu ul > li > a:hover, .no-touch .userMenu ul > li > a:focus {
    background-color: #f3f3f3;
    text-decoration: none;
}
.no-touch .userMenu ul > li > a:hover > span, .no-touch .userMenu ul > li > a:focus > span {
    color: #0eaaa6;
}
a.userHandler {
    position: relative;
    float: right;
    text-align: center;
    font-size: 20px;
    padding-top: 13px;
    height: 50px;
    width: 20px;
    color: #fff;
    display: none;
    margin-right: 15px;
    text-decoration: none;
}
.no-touch a.userHandler:hover {
    background-color: transparent;
}
a.userHandler .counter {
    top: 10px;
    left: 12px;
}
#leftSide {
    background-color: #213837;
    position: absolute;
    top: 60px;
    left: 0;
    width: 70px;
    z-index: 100;
}
#leftSide.expanded {
    width: 200px;
}
.closeLeftSide {
    display: none;
}
.leftNav .search {
    display: none;
}
.leftNav ul, .leftUserWraper ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.leftNav ul li {
    position: relative;
    width: 70px;
}
.expanded .leftNav ul li {
    width: 200px;
}
.leftNav ul li a {
    display: block;
    font-size: 16px;
    color: #adc8c7;
    width: 70px;
    height: 60px;
    overflow: hidden;
    text-decoration: none;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    text-decoration: none;
}
.expanded .leftNav ul li a {
    width: 200px;
    height: auto;
    padding: 10px 20px;
}
.leftNav ul li a span {
    position: absolute;
    width: 70px;
    display: block;
    text-align: center;
    z-index: 110;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    text-decoration: none;
}
.expanded .leftNav ul li a span {
    position: relative;
    width: auto;
    display: inline-block;
    text-align: left;
}
.no-touch .leftNav ul li:hover a, .leftNav ul li.onTap a {
    background-color: #067670;
    color: #fff;
}
.expanded .leftNav > ul > li.onTap > a {
    background-color: transparent;
    color: #adc8c7;
}
.expanded .leftNav > ul > li.active > a {
    background-color: #067670;
    color: #fff;
}
.leftNav ul li a span.navIcon {
    top: 22px;
}
.expanded .leftNav ul li a span.navIcon {
    top: auto;
    margin-right: 10px;
}
.leftNav ul li a span.navLabel {
    font-size: 12px;
    bottom: 10px;
    left: -70px;
}
.expanded .leftNav ul li a span.navLabel {
    bottom: 2px;
    left: 0;
}
.no-touch .leftNav ul li:hover a span.navIcon, .leftNav ul li.onTap a span.navIcon {
    top: 13px;
    text-decoration: none;
}
.no-touch .expanded .leftNav ul li:hover a span.navIcon, .expanded .leftNav ul li.onTap a span.navIcon {
    top: auto;
    text-decoration: none;
}
.no-touch .leftNav ul li:hover a span.navLabel, .leftNav ul li.onTap a span.navLabel {
    left: 0;
    text-decoration: none;
}
.leftNav > ul > li > a > span.arrowRight {
    display: none;
}
.expanded .leftNav > ul > li > a > span.arrowRight {
    display: inline-block;
    float: right;
    font-size: 12px;
    margin-top: 5px;
}
.leftNav > ul > li > a > span.badge {
    font-size: 11px;
    font-weight: normal;
    width: auto;
    top: 15px;
    left: 38px;
    text-align: center;
    padding: 2px 4px;
    position: absolute;
    line-height: 10px;
    border-radius: 7px;
    text-align: center;
    min-width: 14px;
}
.expanded .leftNav > ul > li > a > span.badge {
    min-width: 10px;
    padding: 3px 7px;
    font-size: 11px;
    line-height: 1;
    white-space: nowrap;
    vertical-align: baseline;
    border-radius: 10px;
    float: right;
    top: auto;
    left: auto;
    position: relative;
    margin-top: 2px;
}
.expanded .leftNav > ul > li.hasSub > a > span.badge {
    display: none;
}
.no-touch .leftNav > ul > li:hover > a > span.badge {
    top: 8px;
}
.no-touch .expanded .leftNav > ul > li:hover > a > span.badge {
    top: auto;
}
.leftNav ul li ul {
    background-color: #132120;
    position: absolute;
    top: 0;
    width: 200px;
    display: none;
    left: 50px;
    z-index: 1100;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
.no-touch .leftNav ul li ul {
    background-color: #132120;
    position: absolute;
    display: block;
    top: 0;
    width: 200px;
    visibility: hidden;
    opacity: 0;
    left: 50px;
    z-index: 1100;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
.expanded .leftNav ul li ul {
    position: relative;
    left: 0;
    display: block;
    max-height: 0;
    z-index: 1;
    top: auto;
    overflow: hidden;
    -webkit-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}
.no-touch .expanded .leftNav ul li ul {
    position: relative;
    left: 0;
    visibility: visible;
    opacity: 1;
    max-height: 0;
    z-index: 1;
    top: auto;
    overflow: hidden;
    -webkit-transition: all .4s ease-in-out;
    -o-transition: all .4s ease-in-out;
    transition: all .4s ease-in-out;
}
.expanded .leftNav ul li ul.bigList {
    max-height: 600px;
}
.no-touch .leftNav ul li:hover ul {
    left: 100%;
    visibility: visible;
    opacity: 1;
}
.leftNav ul li.onTap ul {
    left: 70px;
    display: block;
}
.no-touch .expanded .leftNav ul li:hover ul, .expanded .leftNav ul li.onTap ul {
    left: 0;
}
.leftNav ul li ul li {
    width: 100%;
}
.leftNav ul li ul li a {
    width: 100%;
    font-size: 12px;
    height: auto;
    padding: 7px 20px;
}
.leftNav ul li ul li a span.icon-right {
    font-size: 11px;
    font-weight: normal;
    margin-right: 0;
    position: relative;
    width: auto;
    float: right;
    margin-top: 4px;
}
.no-touch .leftNav ul li:hover ul li a, .leftNav ul li.onTap ul li a {
    color: #96adac;
    background-color: #132120;
    width: 100%;
    font-size: 12px;
    height: auto;
}
.no-touch .leftNav ul li ul li a:hover {
    color: #fff;
    background-color: #05635e;
    padding-left: 30px;
    text-decoration: none;
}
.leftNav > ul > li > ul > li > a > span.badge {
    font-size: 11px;
    font-weight: normal;
    margin-right: 0;
    position: relative;
    width: auto;
}
.no-touch .leftNav > ul > li > ul > li > a:hover > span.badge {
    color: #fff;
}
.leftUserWraper {
    background-color: #213837;
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    z-index: 110;
}
.leftUserWraper a {
    display: block;
    text-align: center;
    width: 70px;
    padding: 10px 0;
    position: relative;
    -webkit-transition: background-color .2s ease-in-out, color .2s ease-in-out;
    -o-transition: background-color .2s ease-in-out, color .2s ease-in-out;
    transition: background-color .2s ease-in-out, color .2s ease-in-out;
}
.expanded .leftUserWraper a {
    width: 100%;
    text-align: left;
    padding: 10px 20px;
}
.expanded .leftUserWraper a > span {
    -webkit-transition: background-color .2s ease-in-out, color .2s ease-in-out;
    -o-transition: background-color .2s ease-in-out, color .2s ease-in-out;
    transition: background-color .2s ease-in-out, color .2s ease-in-out;
}
.expanded .leftUserWraper a .avatar {
    float: left;
}
.userBottom {
    margin: 10px 0 0 7px;
    font-size: 13px;
    color: #adc8c7;
    width: 113px;
    white-space: nowrap;
    display: none;
}
.userBottom .arrowUp {
    margin-top: 3px;
}
.expanded .userBottom {
    display: block;
}
.leftUserWraper a .counter {
    top: 7px;
    left: 45px;
}
.expanded .leftUserWraper a .counter {
    left: 50px;
}
.no-touch .leftUserWraper a:hover {
    background-color: #067670;
}
.no-touch .leftUserWraper a:hover .userBottom, .leftUserWraper.open a .userBottom {
    color: #fff;
}
.leftUserWraper ul {
    background-color: #132120;
    width: 200px;
    display: block;
    opacity: 0;
    visibility: hidden;
    bottom: 0px;
    left: 50px;
    border: 0 none;
    z-index: 1100;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
.expanded .leftUserWraper ul {
    background-color: #fff;
    left: 0;
    bottom: 40px;
}
.leftUserWraper.dropup ul {
    bottom: 0;
    margin-bottom: 0;
}
.leftUserWraper ul .divider {
    background-color: #1d3331;
}
.expanded .leftUserWraper ul .divider {
    background-color: #dfdfdf;
}
.leftUserWraper.open ul {
    visibility: visible;
    opacity: 1;
    margin-left: 0;
    left: 70px;
}
.expanded .leftUserWraper.open ul {
    left: 0;
    bottom: 60px;
}
.leftUserWraper.open .avatarAction {
    background-color: #067670;
}
.leftUserWraper ul li {
    width: 100%;
}
.leftUserWraper ul li a {
    width: 100%;
    font-size: 12px;
    height: auto;
    padding: 7px 20px;
    color: #96adac;
    background-color: #132120;
    width: 100%;
    font-size: 12px;
    text-align: left;
    height: auto;
    text-decoration: none;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
.expanded .leftUserWraper ul li a {
    color: #333;
    background-color: #fff;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
.no-touch .leftUserWraper ul li a:hover, .no-touch .leftUserWraper ul li a:focus {
    color: #fff;
    background-color: #05635e;
}
.no-touch .expanded .leftUserWraper ul li a:hover, .no-touch .expanded .leftUserWraper ul li a:focus {
    background-color: #f3f3f3;
    color: #333;
}
.leftUserWraper ul li a span {
    margin-right: 5px;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
.no-touch .expanded .leftUserWraper ul li a:hover span, .no-touch .expanded .leftUserWraper ul li a:focus span {
    color: #0eaaa6;
}
.leftUserWraper ul li a span.badge {
    font-size: 11px;
    font-weight: normal;
    margin-right: 0;
    position: relative;
    width: auto;
}
.no-touch .leftUserWraper ul li a:hover span.badge, .no-touch .leftUserWraper ul li a:focus span.badge {
    color: #fff;
}
#wrapper {
    left: 70px;
    top: 60px;
    margin: 60px 0 0 70px;
}
#wrapper.full.m-full {
    margin-left: 200px;
}
#mapView {
    width: 50%;
    float: left;
}
#mapView.min {
    width: 0%;
}
.mapPlaceholder {
    text-align: center;
    width: 100%;
    padding-top: 100px;
    float: left;
    overflow: hidden;
}
#mapView.min .mapPlaceholder {
    display: none;
}
.mapPlaceholder span {
    font-size: 16px;
    line-height: 17px;
    width: 20px;
    vertical-align: middle;
    margin: 0;
    display: inline-block;
    text-align: center;
}
.infoW {
    font-family: 'open_sansregular', sans-serif, Arial;
    color: #333;
    padding: 0 1px;
}
.propImg {
    position: relative;
}
.propImg img {
    width: 200px;
    height: 120px;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
}
.propBg {
    position: absolute;
    z-index: 2;
    height: 40px;
    left: 0;
    bottom: 0;
    width: 100%;
    background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0.7) 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.7))); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.7) 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.7) 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.7) 100%); /* IE10+ */
    background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.7) 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#b3000000',GradientType=0 ); /* IE6-9 */
}
.propType {
    background-color: #eab134;
    font-size: 10px;
    line-height: 11px;
    color: #fff;
    padding: 2px 4px;
    border-radius: 2px;
    position: absolute;
    right: 10px;
    bottom: 10px;
    text-transform: uppercase;
    z-index: 3;
}
.paWrapper {
    padding: 10px 10px 0 10px;
}
.propPrice {
    position: absolute;
    left: 10px;
    bottom: 10px;
    color: #fff;
    font-size: 12px;
    line-height: 12px;
    z-index: 3;
}
.propTitle {
    font-weight: bold;
    font-size: 14px;
    line-height: 16px;
    white-space: nowrap;
    overflow: hidden;
}
.propAddress {
    white-space: nowrap;
    overflow: hidden;
    color: #999;
    font-size: 11px;
    line-height: 11px;
}
.propRating {
    padding: 2px 0 5px 10px;
}
.propRating span {
    color: #eab134;
    padding-right: 2px;
    display: inline-block;
    font-size: 12px;
}
ul.propFeat {
    list-style-type: none;
    margin: 0;
    padding: 0 10px 0 10px;
}
ul.propFeat li {
    float: left;
    margin-right: 15px;
    font-size: 11px;
    line-height: 11px;
}
ul.propFeat li span {
    color: #999;
}
.infoButtons {
    padding: 10px;
}
a.btn.viewInfo, a.btn.closeInfo {
    width: 85px;
    padding: 6px 12px;
}
a.btn.viewInfo {
    margin-left: 10px;
}
#content {
    overflow-x: hidden;
    overflow-y: auto;
    background-color: #f3f3f3;
    width: 50%;
    height: 100px;
    border-top: 1px solid #e8e8e8;
    float: right;
    -webkit-overflow-scrolling: touch;
}
#content.max {
    width: 100%;
}
.whiteBg {
    background-color: #fff;
    padding: 20px;
}
.rightContainer {
    padding: 20px;
}
.widgets {
    padding: 20px;
}
.filter {
    background-color: #fff;
    border-bottom: 1px solid #e8e8e8;
}
.filter h1 {
    margin-top: 0;
    margin-bottom: 0;
    font-size: 16px;
    padding: 20px;
    float: left;
}
.rightContainer h1 {
    margin-top: 0;
    margin-bottom: 0;
    font-size: 16px;
    line-height: 16px;
    padding-bottom: 20px;
}
.rightContainer h2 {
    margin-top: 0;
    margin-bottom: 0;
    font-size: 16px;
    padding-bottom: 10px;
    float: left;
}
a.handleFilter {
    float: right;
    display: block;
    padding: 10px;
    margin: 10px 10px 0 0;
    font-size: 18px;
    text-decoration: none;
}
.no-touch a.handleFilter:hover {
    text-decoration: none;
}
.filterForm label {
    display: block;
    font-size: 13px;
    color: #333;
}
.filterForm {
    padding: 0 20px;
}
.formItem {
    padding-bottom: 20px;
}
.formField {
    position: relative;
}
.dropdown-btn {
    width: 100%;
    text-align: left;
}
a.btn.dropdown-btn.btn-gray {
    background-color: #fff;
    border-color: #dfdfdf;
    color: #333;
}
.no-touch a.dropdown-btn.btn-gray:hover, .open a.dropdown-btn.btn-gray {
    color: #333;
    border-color: #999;
}
.dropdown-label {
    float: left;
}
.dsArrow {
    float: right;
    margin-top: 2px;
}
.dropdown-select {
    border-radius: 2px;
    border: 1px solid #dfdfdf;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
.dropdown-select.full {
    width: 100%;
}
.dropdown-select > li > a {
    padding: 7px 20px;
    display: block;
    font-size: 13px;
    color: #333;
    text-decoration: none;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
.no-touch .dropdown-select > li > a:hover, .no-touch .dropdown-select > li > a:focus {
    background-color: #f3f3f3;
}
.dropdown-select input {
    position: absolute;
    left: -9999em;
}
.slider {
    margin: 17px 0;
    position: relative;
}
.slider.priceSlider, .slider.areaSlider {
    margin-top: 37px;
}
.sliderTooltip {
    position: absolute;
    padding: 5px 0;
    margin-top: -3px;
    margin-left: 2px;
    top: -34px;
    z-index: 90;
}
.stLabel {
    background-color: #0eaaa6;
    font-size: 11px;
    line-height: 12px;
    color: #fff;
    padding: 4px 6px;
    border-radius: 2px;
    text-align: center;
    white-space: nowrap;
}
.stArrow {
    border-color: transparent;
    bottom: 0;
    left: 50%;
    margin-left: -5px;
    border-width: 5px 5px 0;
    border-style: solid;
    position: absolute;
    width: 0;
    height: 0;
    border-top-color: #0eaaa6;
}
.ui-slider .ui-slider-range {
    background-color: #0eaaa6;
}
.volume {
    width: 100%;
}
.volume a, .volume input {
    float: left;
}
.volume a.btn {
    background-color: #fff;
    width: 30%;
    height: 37px;
    padding: 10px 3%;
    color: #999;
    border: 1px solid #dfdfdf;
}
.no-touch .volume a.btn:hover {
    background-color: #fff;
    color: #333;
    border-color: #999;
}
.volume a.btn.btn-round-left {
    border-top-left-radius: 50px;
    border-bottom-left-radius: 50px;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.volume a.btn.btn-round-right {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    border-top-right-radius: 50px;
    border-bottom-right-radius: 50px;
}
.volume input.form-control, .volume input.form-control[readonly] {
    width: 40%;
    text-align: center;
    border-radius: 0;
    box-shadow: none;
    border: 0 none;
    border-top: 1px solid #dfdfdf;
    border-bottom: 1px solid #dfdfdf;
    border-left: 0 none;
    border-right: 0 none;
    -webkit-appearance: none;
    background-color: #fff;
    color: #333;
    font-size: 13px;
}
.resultsList {
    padding: 20px 20px 0 20px;
}
a.card, div.card {
    display: block;
    background-color: #fff;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.13);
    margin-bottom: 20px;
    cursor: pointer;
    text-decoration: none;
}
.figure {
    background-color: #000;
    width: 100%;
    overflow: hidden;
    position: relative;
    z-index: 1;
}
.figure img {
    position: relative;
    display: block;
    width: 100%;
    opacity: 1;
}
.no-touch .figure img {
    -webkit-transition: -webkit-transform 0.35s;
    transition: transform 0.35s;
    -webkit-transform: scale(1.15);
    transform: scale(1.15);
}
.no-touch a.card:hover img, .no-touch div.card:hover img {
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 0.8;
}
.figCaption {
    position: absolute;
    z-index: 2;
    top: auto;
    bottom: 0;
    padding: 10px;
    width: 100%;
    color: #fff;
    background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0.5) 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.5)));
    background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.5) 100%);
    background: -o-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.5) 100%);
    background: -ms-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.5) 100%);
    background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.5) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#80000000',GradientType=0 );
}
.no-touch .figCaption {
    -webkit-transition: -webkit-transform 0.35s;
    transition: transform 0.35s;
    -webkit-transform: translate3d(0,100%,0);
    transform: translate3d(0,100%,0);
}
.figView {
    position: absolute;
    top: 50%;
    left: 50%;
    opacity: 0;
    color: #fff;
    font-size: 40px;
    line-height: 40px;
    margin-left: -21px;
    margin-top: -20px;
    font-weight: normal;
    -webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
    transition: opacity 0.35s, transform 0.35s;
    -webkit-transform: scale(3.0);
    transform: scale(3.0);
}
.no-touch a.card:hover .figView, .no-touch div.card:hover .figView {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
}
.figCaption div {
    float: left;
    font-size: 12px;
    line-height: 12px;
    font-weight: normal;
}
.carousel-col .figCaption div {
    float: left;
    font-size: 13px;
    line-height: 14px;
    font-weight: bold;
}
.figCaption > span {
    float: right;
    font-size: 11px;
    line-height: 12px;
    font-weight: normal;
    margin-left: 5px;
}
.carousel-col .figCaption > span {
    display: none;
}
.figCaption > span::before {
    color: rgba(255, 255, 255, 0.70);
}
.no-touch .figCaption div,
.no-touch .figCaption > span {
    -webkit-transition: -webkit-transform 0.35s;
    transition: transform 0.35s;
    -webkit-transform: translate3d(0,200%,0);
    transform: translate3d(0,200%,0);
}
.figCaption div {
    display: inline-block;
}
.no-touch a.card:hover .figure .figCaption,
.no-touch a.card:hover .figure .figCaption div,
.no-touch a.card:hover .figure .figCaption > span,
.no-touch div.card:hover .figure .figCaption,
.no-touch div.card:hover .figure .figCaption div,
.no-touch div.card:hover .figure .figCaption > span {
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
}
.no-touch a.card:hover .figure .figCaption div, .no-touch div.card:hover .figure .figCaption div {
    -webkit-transition-delay: 0.05s;
    transition-delay: 0.05s;
}
.no-touch a.card:hover .figure .figCaption > span:nth-child(4), .no-touch div.card:hover .figure .figCaption > span:nth-child(4) {
    -webkit-transition-delay: 0.1s;
    transition-delay: 0.1s;
}
.no-touch a.card:hover .figure .figCaption > span:nth-child(3), .no-touch div.card:hover .figure .figCaption > span:nth-child(3) {
    -webkit-transition-delay: 0.15s;
    transition-delay: 0.15s;
}
.no-touch a.card:hover .figure .figCaption > span:nth-child(2), .no-touch div.card:hover .figure .figCaption > span:nth-child(2) {
    -webkit-transition-delay: 0.2s;
    transition-delay: 0.2s;
}
.figType {
    background-color: #eab134;
    font-size: 10px;
    line-height: 11px;
    color: #fff;
    padding: 2px 4px;
    border-radius: 2px;
    position: absolute;
    left: 10px;
    top: 10px;
    text-transform: uppercase;
    z-index: 3;
}
.carousel-col .figType {
    top: auto;
    left: auto;
    right: 10px;
    bottom: 10px;
}
a.card h2, div.card h2 {
    font-weight: bold;
    font-size: 14px;
    line-height: 16px;
    margin: 0 10px 0 0;
    padding: 10px 0 3px 10px;
    color: #333;
    text-decoration: none;
    white-space: nowrap;
    overflow: hidden;
    float: none;
}
.no-touch a.card:hover, .no-touch div.card:hover {
    text-decoration: none;
}
.no-touch a.card:hover h2, .no-touch div.card:hover h2 {
    color: #0eaaa6;
    text-decoration: none;
}
a.card .cardAddress, div.card .cardAddress {
    font-size: 11px;
    line-height: 13px;
    color: #999;
    padding: 0 0 10px 10px;
    margin: 0 10px 0 0;
    overflow: hidden;
    white-space: nowrap;
}
a.card .cardAddress span, div.card .cardAddress span {
    font-size: 13px;
    line-height: 13px;
}
a.card .cardRating, div.card .cardRating {
    padding: 0 0 10px 10px;
    font-size: 12px;
    line-height: 12px;
    color: #333;
}
a.card .cardRating span, div.card .cardRating span {
    color: #eab134;
    padding-right: 2px;
    display: inline-block;
    font-size: 12px;
}
a.card ul.cardFeat, div.card ul.cardFeat {
    list-style-type: none;
    margin: 0;
    padding: 0 10px 10px 10px;
}
a.card ul.cardFeat li, div.card ul.cardFeat li {
    display: inline-block;
    margin-right: 10px;
    font-size: 11px;
    line-height: 11px;
    color: #333;
}
a.card ul.cardFeat li span, div.card ul.cardFeat li span {
    color: #999;
}
.carousel-col .carousel-indicators, .carousel-wb .carousel-indicators {
    position: absolute;
    bottom: -26px;
    left: 50%;
    z-index: 15;
    width: 60%;
    padding-left: 0;
    margin-left: -30%;
    text-align: center;
    list-style: none;
}
.carousel-col .carousel-indicators li, .carousel-wb .carousel-indicators li {
    display: inline-block;
    width: 10px;
    height: 10px;
    margin: 0;
    text-indent: -999px;
    cursor: pointer;
    background-color: #000 \9;
    background-color: rgba(0, 0, 0, 0.30);
    border: 0 none;
    border-radius: 10px;
}
.carousel-col .carousel-indicators .active, .carousel-wb .carousel-indicators .active {
    width: 10px;
    height: 10px;
    margin: 0;
    background-color: #333;
}
.carousel-control .fa-chevron-left,
.carousel-control .fa-chevron-right {
    position: absolute;
    top: 50%;
    z-index: 5;
    display: inline-block;
}
.carousel-control .fa-chevron-left {
    left: 50%;
    margin-left: -10px;
}
.carousel-control .fa-chevron-right {
    right: 50%;
    margin-right: -10px;
}
.carousel-col {
    padding: 0 20px;
}
.carousel-col .carousel-control {
    top: 0;
    bottom: 0;
    left: -20px;
    width: 40px;
    font-size: 20px;
    color: #999;
    text-align: center;
    text-shadow: none;
    filter: alpha(opacity=100);
    opacity: 1;
}
.carousel-col .carousel-control.left {
    background-image: none;
    filter: none;
    background-repeat: no-repeat;
}
.carousel-col .carousel-control.right {
    right: -20px;
    left: auto;
    background-image: none;
    filter: none;
    background-repeat: no-repeat;
}
.no-touch .carousel-col .carousel-control:hover,
.carousel-col .carousel-control:focus {
    color: #333;
    text-decoration: none;
    filter: alpha(opacity=100);
    outline: 0;
    opacity: 1;
}
.carousel-col .carousel-control .fa-chevron-left,
.carousel-col .carousel-control .fa-chevron-right {
    position: absolute;
    top: 45%;
    z-index: 5;
    display: inline-block;
}
.carousel-col .carousel-control .fa-chevron-left {
    left: 50%;
    margin-left: -7px;
}
.carousel-col .carousel-control .fa-chevron-right {
    right: 50%;
    margin-right: -7px;
}
.singleTop {
    background-color: #fff;
    border-bottom: 1px solid #e8e8e8;
}
.singleTop .summary {
    padding: 20px 20px 0 20px;
}
.summaryItem {
    margin-bottom: 20px;
}
h1.pageTitle {
    margin: 0;
    padding: 0 0 5px 0;
    font-size: 18px;
    line-height: 19px;
    font-weight: normal;
}
.singleTop .address {
    font-size: 12px;
    line-height: 14px;
    color: #999;
    padding: 0 0 15px 0;
}
.singleTop ul.rating {
    list-style-type: none;
    margin: 0;
    padding: 0;
    padding: 0;
    float: left;
}
.singleTop ul.rating li {
    font-size: 12px;
    line-height: 13px;
    color: #333;
    float: left;
    margin-right: 3px;
}
.singleTop ul.rating li a span {
    color: #eab134;
    font-size: 14px;
}
.singleTop ul.stats {
    float: right;
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.singleTop ul.stats li {
    float: left;
    margin-left: 7px;
    color: #333;
    font-size: 11px;
}
.singleTop ul.stats li span {
    font-size: 11px;
    color: #999;
}
.singleTop ul.features {
    list-style-type: none;
    margin: 0;
    padding: 0;
    margin-top: 20px;
    border: 1px solid #e8e8e8;
    float: left;
    width: 100%;
}
.singleTop ul.features li {
    float: left;
    width: 33.33%;
    text-align: center;
    padding: 15px 0;
    border-right: 1px solid #e8e8e8;
}
.singleTop ul.features li:last-child {
    border-right: 0 none;
}
.singleTop ul.features li span {
    color: #999;
    display: block;
    height: 24px;
    font-size: 24px;
    line-height: 24px;
}
.singleTop ul.features li div {
    font-size: 13px;
}
.agentAvatar {
    text-align: center;
}
.agentAvatarImg {
    width: 40%;
    height: auto;
    border: 1px solid #e8e8e8;
    padding: 3px;
}
.agentName {
    padding: 2px 0 10px 0;
    font-size: 13px;
}
.agentAvatar .contactBtn {
    margin-bottom: 10px;
    width: 100%;
}
.favLink {
    float: left;
    font-size: 13px;
    line-height: 14px;
    margin-left: 10px;
}
.favLink a {
    width: 100%;
    color: #ea3d36;
}
.favLink a span {
    font-size: 14px;
    display: block;
    float: left;
    height: 14px;
    vertical-align: middle;
    line-height: 14px;
    width: 24px;
    text-align: center;
    -webkit-transition: font-size .2s;
    -o-transition: font-size .2s;
    transition: font-size .2s;
}
.no-touch .favLink a:hover span {
    font-size: 20px;
    color: #ea3d36;
}
.contactForm .cfItem {
    margin-bottom: 10px;
}
.contactForm .cfItem:last-child {
    margin-bottom: 0;
}
.description, .amenities, .share, .similar {
    padding: 20px 20px 0 20px;
}
#content h3 {
    font-size: 14px;
    line-height: 16px;
    margin: 0;
    padding: 0 0 10px 0;
    font-weight: bold;
}
.description p {
    font-size: 13px;
}
.amItem {
    font-size: 13px;
    margin-bottom: 10px;
}
.amItem span {
    color: #0eaaa6;
}
.amItem.inactive, .amItem.inactive span {
    color: #b4b4b4;
}
.amItem span {
    width: 20px;
    text-align: center;
}
.shareItem {
    margin-bottom: 10px;
}
.comments {
    padding: 30px 20px 83px 20px;
}
.comment {
    padding-bottom: 20px;
}
.comment.reply {
    padding-left: 54px;
}
.commentAvatar {
    position: relative;
    float: left;
}
.commentArrow {
    position: absolute;
    top: 5px;
    left: 45px;
    width: 16px;
    height: 16px;
    color: #fff;
    font-size: 30px;
    line-height: 30px;
    text-shadow: -1px 1px 2px rgba(0, 0, 0, 0.13);
}
.commentContent {
    background-color: #fff;
    margin-left: 54px;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.13);
    border-radius: 2px;
}
.commentName {
    font-size: 12px;
    font-weight: bold;
    line-height: 12px;
    padding: 10px 10px 5px 10px;
}
.commentBody {
    font-size: 12px;
    color: #333;
    line-height: 16px;
    padding: 0 10px 10px 10px;
    border-bottom: 1px solid #e8e8e8;
}
.commentActions {
    padding: 10px;
}
.commentTime {
    float: left;
    font-size: 11px;
    color: #999;
    float: left;
}
.commentActions ul {
    list-style-type: none;
    margin: 0;
    float: right;
}
.commentActions ul li {
    float: right;
    margin-left: 10px;
    font-size: 11px;
    color: #999;
}
.commentsFormWrapper {
    background-color: #fff;
    position: fixed;
    bottom: -84px;
    right: 0;
    z-index: 20;
    overflow: hidden;
    border-top: 1px solid #e8e8e8;
    -webkit-transition: bottom .2s ease-in-out;
    -o-transition: bottom .2s ease-in-out;
    transition: bottom .2s ease-in-out;
}
.commentsFormWrapper.active {
    bottom: 0;
}
.cfAvatar {
    float: left;
    padding: 20px 10px 20px 20px;
}
.cfInput {
    margin-left: 74px;
    margin-right: 46px;
    float: left;
}
.cfBtn {
    float: right;
}
.commentsForm {
    padding: 20px 20px 0 0;
}
.commentsForm a.btn {
    margin-left: 0 !important;
    line-height: 15px !important;
}
.c-red {
    color: #ea3d36;
}
.c-green {
    color: #0eaaa6;
}
.c-blue {
    color: #1d82aa;
}
.c-yellow {
    color: #eab134;
}
.c-magenta {
    color: #9b156e;
}
.buttonsWrapper > .btn, .buttonsWrapper > .btn-group, .buttonsWrapper > .btn-group-vertical {
    margin-bottom: 5px;
}
.pb20 {
    padding-bottom: 20px;
}
.icons > div {
    font-size: 13px;
    line-height: 40px;
    white-space: nowrap;
    -webkit-transition: font-size .2s;
    transition: font-size .2s;
}
.icons > div > span {
    font-size: 16px;
    line-height: 17px;
    width: 36px;
    vertical-align: middle;
    margin: 0;
    display: inline-block;
    text-align: center;
    -webkit-transition: font-size .2s;
    transition: font-size .2s;
}
.icons > div > span.glyphicon {
    top: 0px;
}
.no-touch .icons > div:hover {
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    cursor: default;
    color: #0eaaa6;
    font-size: 16px;
}
.no-touch .icons > div:hover > span {
    font-size: 24px;
    cursor: default;
}
.iconsAlert > ul > li {
    font-size: 12px;
}
.gridSystem {
    font-size: 12px;
}

/* Property Widget 1 */

.propWidget-1 {
    display: block;
    background-color: #fff;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.13);
    margin-bottom: 20px;
    cursor: pointer;
    text-decoration: none;
    overflow: hidden;
    border-radius: 3px;
}
.propWidget-1 .fig {
    width: 100%;
    overflow: hidden;
    position: relative;
}
.propWidget-1 .fig img {
    width: 100%;
    position: relative;
    display: block;
}
.propWidget-1 .fig .figCap {
    position: absolute;
    z-index: 2;
    top: auto;
    bottom: 0;
    padding: 10px;
    width: 100%;
    color: #fff;
    background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0.8) 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.8)));
    background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.8) 100%);
    background: -o-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.8) 100%);
    background: -ms-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.8) 100%);
    background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.8) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#cc000000',GradientType=0 );
}
.propWidget-1 .fig .priceCap {
    font-size: 18px;
    padding: 10px;
    position: absolute;
    z-index: 3;
    top: 0;
    left: 0;
    color: #fff;
    font-weight: normal;
    line-height: 22px;
    width: 100%;
    background: -moz-linear-gradient(top,  rgba(0,0,0,0.3) 0%, rgba(0,0,0,0) 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0.3)), color-stop(100%,rgba(0,0,0,0)));
    background: -webkit-linear-gradient(top,  rgba(0,0,0,0.3) 0%,rgba(0,0,0,0) 100%);
    background: -o-linear-gradient(top,  rgba(0,0,0,0.3) 0%,rgba(0,0,0,0) 100%);
    background: -ms-linear-gradient(top,  rgba(0,0,0,0.3) 0%,rgba(0,0,0,0) 100%);
    background: linear-gradient(to bottom,  rgba(0,0,0,0.3) 0%,rgba(0,0,0,0) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#4d000000', endColorstr='#00000000',GradientType=0 );
}
.propWidget-1 .fig .figType {
    background-color: #eab134;
    font-size: 10px;
    line-height: 11px;
    color: #fff;
    padding: 2px 4px;
    border-radius: 2px;
    position: absolute;
    right: 15px;
    top: 15px;
    left: auto;
    text-transform: uppercase;
    z-index: 3;
}
.no-touch .propWidget-1 .fig .figType {
    -webkit-transition: -webkit-transform 0.35s;
    transition: transform 0.35s;
    -webkit-transform: scale(0);
    transform: scale(0);
}
.propWidget-1 .fig .figCap h3 {
    font-size: 18px !important;
    font-weight: normal !important;
    margin: 0;
    padding: 0 !important;
}
.no-touch .propWidget-1 .fig .figCap h3 {
    -webkit-transition: -webkit-transform 0.50s;
    transition: transform 0.50s;
    -webkit-transform: translate3d(0,37px,0);
    transform: translate3d(0,37px,0);
}
.propWidget-1 .fig .priceCap span {
    display: block;
}
.no-touch .propWidget-1 .fig .priceCap {
    -webkit-transition: opacity 0.50s;
    transition: opacity 0.50s;
    opacity: 0;
}
.no-touch .propWidget-1 .fig .priceCap span {
    opacity: 1;
    -webkit-transition: -webkit-transform 0.50s;
    transition: transform 0.50s;
    -webkit-transform: translate3d(0,-100%,0);
    transform: translate3d(0,-100%,0);
}
.propWidget-1 .fig .figCap .address {
    font-size: 11px;
    font-style: italic;
    padding-top: 2px;
}
.no-touch .propWidget-1 .fig .figCap .address {
    -webkit-transition: -webkit-transform 0.35s, opacity 0.35s;
    transition: transform 0.35s, opacity 0.35s;
    -webkit-transform: translate3d(0,150%,0);
    transform: translate3d(0,150%,0);
    opacity: 0;
}
.propWidget-1 .fig .figCap .feat {
    float: left;
    margin-right: 20px;
    font-size: 11px;
    line-height: 12px;
    opacity: 0.8;
    padding: 10px 0 0 0;
}
.no-touch .propWidget-1 .fig .figCap .feat {
    -webkit-transition: -webkit-transform 0.5s;
    transition: transform 0.5s;
    -webkit-transform: translate3d(0,400%,0);
    transform: translate3d(0,400%,0);
}
.no-touch .propWidget-1:hover .fig .figType {
    -webkit-transform: scale(1);
    transform: scale(1);
}
.no-touch .propWidget-1:hover .fig .figCap h3,
.no-touch .propWidget-1:hover .fig .figCap .address,
.no-touch .propWidget-1:hover .fig .figCap .feat {
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
    opacity: 1;
}
.no-touch .propWidget-1:hover .fig .priceCap {
    opacity: 1;
}
.no-touch .propWidget-1:hover .fig .priceCap span {
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
}
.no-touch .propWidget-1:hover .fig .figCap .feat {
    opacity: 0.8;
}
.no-touch .propWidget-1:hover .fig .figCap > .address {
    -webkit-transition-delay: 0.15s;
    transition-delay: 0.15s;
}
.no-touch .propWidget-1:hover .fig .figCap > .feat-1 {
    -webkit-transition-delay: 0.20s;
    transition-delay: 0.20s;
}
.no-touch .propWidget-1:hover .fig .figCap > .feat-2 {
    -webkit-transition-delay: 0.25s;
    transition-delay: 0.25s;
}
.no-touch .propWidget-1:hover .fig .figCap > .feat-3 {
    -webkit-transition-delay: 0.30s;
    transition-delay: 0.30s;
}

/* Property Widget 2 */

.propWidget-2 {
    display: block;
    background-color: #fff;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.13);
    margin-bottom: 20px;
    cursor: pointer;
    text-decoration: none;
    overflow: hidden;
    border-radius: 3px;
}
.propWidget-2 .fig {
    width: 100%;
    overflow: hidden;
    position: relative;
}
.propWidget-2 .fig img {
    width: 100%;
    position: relative;
    display: block;
}
.propWidget-2 .fig img.blur {
    position: absolute;
    width: 100%;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: 1;
    filter: url('../images/blur.svg#blur');
    filter: blur(2px);
    -webkit-filter: blur(2px);
    -moz-filter: blur(2px);
    display: none;
}
.no-touch .propWidget-2 .fig img.blur {
    display: block;
}
.propWidget-2 .fig .opac {
    display: block;
    background-color: rgba(0,0,0,0.30);
    position: absolute;
    width: 100%;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: 1;
}
.no-touch .propWidget-2 .fig div.opac {
    display: none;
}
.no-touch .propWidget-2 .fig img.blur {
     -webkit-transition: -webkit-transform 0.35s, opacity 0.35s;
    transition: transform 0.35s, opacity 0.35s;
    -webkit-transform: scale(1);
    transform: scale(1);
    opacity: 0;
}
.no-touch .propWidget-2:hover .fig > img.blur {
    -webkit-transform: scale(1.2);
    transform: scale(1.2);
    opacity: 1;
}
.propWidget-2 .fig .figType {
    background-color: #eab134;
    font-size: 10px;
    line-height: 11px;
    color: #fff;
    padding: 2px 4px;
    border-radius: 2px;
    position: absolute;
    top: 15px;
    left: 50%;
    text-transform: uppercase;
    z-index: 3;
    margin-left: -27px;
}
.no-touch .propWidget-2 .fig .figType {
    -webkit-transition: -webkit-transform 0.35s;
    transition: transform 0.35s;
    -webkit-transform: scale(0);
    transform: scale(0);
}
.no-touch .propWidget-2:hover .fig .figType {
    -webkit-transform: scale(1);
    transform: scale(1);
}
.propWidget-2 .fig h3 {
    font-size: 18px !important;
    line-height: 20px !important;
    font-weight: normal !important;
    margin: 0;
    padding: 0 20px 0 20px !important;
    position: absolute;
    z-index: 3;
    top: 48%;
    left: 0;
    color: #fff;
    text-align: center;
    width: 100%;
}
.no-touch .propWidget-2 .fig h3 {
    -webkit-transition: -webkit-transform 0.35s, opacity 0.35s;
    transition: transform 0.35s, opacity 0.35s;
    -webkit-transform: translate3d(0,20px,0);
    transform: translate3d(0,20px,0);
    opacity: 0;
    top: 50%;
}
.no-touch .propWidget-2:hover .fig h3 {
    -webkit-transform: translate3d(0,-10px,0);
    transform: translate3d(0,-10px,0);
    opacity: 1;
}
.propWidget-2 .fig .address {
    font-size: 11px;
    font-style: italic;
    padding-top: 2px;
    position: absolute;
    bottom: 30%;
    left: 0;
    width: 100%;
    text-align: center;
    z-index: 4;
    color: #fff;
}
.no-touch .propWidget-2 .fig .address {
    -webkit-transition: -webkit-transform 0.60s, opacity 0.60s;
    transition: transform 0.60s, opacity 0.60s;
    -webkit-transform: translate3d(0,-30px,0);
    transform: translate3d(0,-30px,0);
    opacity: 0;
    bottom: 50%;
}
.no-touch .propWidget-2:hover .fig .address {
    -webkit-transform: translate3d(0,30px,0);
    transform: translate3d(0,30px,0);
    opacity: 1;
}
.propWidget-2 .fig .priceCap {
    font-size: 30px;
    line-height: 30px;
    position: absolute;
    z-index: 5;
    top: 25%;
    left: 20%;
    right: 20%;
    color: #fff;
    text-align: center;
    width: 60%;
    letter-spacing: -1px;
    border-bottom: 1px solid rgba(255,255,255,0.5);
    overflow: hidden;
    padding-bottom: 5px;
}
.no-touch .propWidget-2 .fig .priceCap {
    -webkit-transition: -webkit-transform 0.70s;
    transition: transform 0.70s;
    -webkit-transform: scale(0, 1);
    transform: scale(0, 1);
}
.no-touch .propWidget-2 .fig .priceCap span {
    -webkit-transition: -webkit-transform 0.35s, opacity 0.15s;
    transition: transform 0.35s, opacity 0.15s;
    -webkit-transform: translate3d(0,50px,0);
    transform: translate3d(0,50px,0);
    opacity: 0;
}
.no-touch .propWidget-2:hover .fig .priceCap {
    -webkit-transform: scale(1, 1);
    transform: scale(1, 1);
}
.no-touch .propWidget-2:hover .fig .priceCap span {
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
    -webkit-transition-delay: 0.35s;
    transition-delay: 0.35s;
    opacity: 1;
}
.propWidget-2 ul.rating {
    list-style-type: none;
    margin: 0 0 0 -44px;
    padding: 0;
    position: absolute;
    z-index: 6;
    bottom: 20px;
    left: 50%;
}
.propWidget-2 ul.rating li {
    font-size: 12px;
    line-height: 13px;
    float: left;
    margin: 0 2px;
}
.propWidget-2 ul.rating li span {
    color: #fff;
    font-size: 14px;
}
.no-touch .propWidget-2 ul.rating li span {
    -webkit-transition: -webkit-transform 0.35s;
    transition: transform 0.35s;
    -webkit-transform: scale(0);
    transform: scale(0);
}
.no-touch .propWidget-2:hover ul.rating li span {
    -webkit-transform: scale(1);
    transform: scale(1);
}
.no-touch .propWidget-2:hover ul.rating li span.star-1 {
    -webkit-transition-delay: 0.05s;
    transition-delay: 0.05s;
}
.no-touch .propWidget-2:hover ul.rating li span.star-2 {
    -webkit-transition-delay: 0.10s;
    transition-delay: 0.10s;
}
.no-touch .propWidget-2:hover ul.rating li span.star-3 {
    -webkit-transition-delay: 0.15s;
    transition-delay: 0.15s;
}
.no-touch .propWidget-2:hover ul.rating li span.star-4 {
    -webkit-transition-delay: 0.20s;
    transition-delay: 0.20s;
}
.no-touch .propWidget-2:hover ul.rating li span.star-5 {
    -webkit-transition-delay: 0.25s;
    transition-delay: 0.25s;
}

/* Property Widget 3 */

.propWidget-3 {
    display: block;
    background-color: #fff;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.13);
    margin-bottom: 20px;
    text-decoration: none;
    overflow: hidden;
    border-radius: 3px;
}
.propWidget-3 .carousel-inner > .item > a > img {
    width: 100%;
}
.propWidget-3 .carousel-indicators {
    bottom: 20px;
    margin-bottom: 0;
}
.propWidget-3 .carousel-indicators {
    line-height: 7px;
    width: 7px;
    height: 7px;
}
.propWidget-3 .carousel-indicators {
    position: absolute;
    bottom: 20px;
    left: 50%;
    z-index: 15;
    width: 60%;
    padding-left: 0;
    margin-left: -30%;
    text-align: center;
    list-style: none;
}
.propWidget-3 .carousel-indicators li {
    display: inline-block;
    width: 10px;
    height: 10px;
    margin: 1px;
    text-indent: -999px;
    cursor: pointer;
    background-color: rgba(255, 255, 255, 0.5);
    border: 0 none;
    border-radius: 10px;
    line-height: 10px;
}
.propWidget-3 .carousel-indicators .active {
    width: 10px;
    height: 10px;
    margin: 1;
    background-color: rgba(255, 255, 255, 1);
    border: 0 none;
}
.propWidget-3 .carousel-caption {
    background-color: rgba(0,0,0,0.30);
    left: 0;
    right: 0;
    top: 0;
    bottom: auto;
    overflow: hidden;
    height: 70px;
    padding: 0;
}
.no-touch .propWidget-3 .carousel-caption {
    background-color: transparent;
}
.propWidget-3 .carousel-caption img {
    width: 100%;
    -webkit-transform: scale(1.02);
    transform: scale(1.02);
    filter: url('../images/blur.svg#blur');
    filter: blur(5px);
    -webkit-filter: blur(5px);
    -moz-filter: blur(5px);
    display: none;
}
.no-touch .propWidget-3 .carousel-caption img {
    display: block;
}
.no-touch .propWidget-3 .carousel-caption img {
    -webkit-transition: opacity 0.25s;
    transition: opacity 0.25s;
    opacity: 0;
}
.no-touch .propWidget-3:hover .carousel-caption img {
    opacity: 1;
}
.propWidget-3 h3 {
    font-size: 18px !important;
    line-height: 20px !important;
    font-weight: normal !important;
    margin: 0;
    padding: 0 !important;
    position: absolute;
    z-index: 50;
    top: 15px;
    left: 15px;
    color: #fff;
    width: 100%;
    overflow: hidden;
}
.no-touch .propWidget-3 h3 {
    -webkit-transition: -webkit-transform 0.35s;
    transition: transform 0.35s;
    -webkit-transform: translate3d(-100%,0,0);
    transform: translate3d(-100%,0,0);
    -webkit-transition-delay: 0.25s;
    transition-delay: 0.25s;
}
.no-touch .propWidget-3:hover h3 {
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
}
.propWidget-3 .address {
    font-size: 11px;
    font-style: italic;
    position: absolute;
    top: 35px;
    left: 15px;
    width: 100%;
    z-index: 51;
    color: #fff;
    overflow: hidden;
}
.no-touch .propWidget-3 .address {
    -webkit-transition: -webkit-transform 0.35s;
    transition: transform 0.35s;
    -webkit-transform: translate3d(-100%,0,0);
    transform: translate3d(-100%,0,0);
    -webkit-transition-delay: 0.45s;
    transition-delay: 0.45s;
}
.no-touch .propWidget-3:hover .address {
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
}
.propWidget-3 .priceCap {
    position: absolute;
    z-index: 55;
    left: 0;
    bottom: 0;
    padding: 15px;
    width: 100%;
    color: #fff;
    background: -moz-linear-gradient(top,  rgba(0,0,0,0) 0%, rgba(0,0,0,0.8) 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.8)));
    background: -webkit-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.8) 100%);
    background: -o-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.8) 100%);
    background: -ms-linear-gradient(top,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.8) 100%);
    background: linear-gradient(to bottom,  rgba(0,0,0,0) 0%,rgba(0,0,0,0.8) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00000000', endColorstr='#cc000000',GradientType=0 );
}
.no-touch .propWidget-3 .priceCap {
    -webkit-transition: -webkit-transform 0.35s;
    transition: transform 0.35s;
    -webkit-transform: translate3d(0,100%,0);
    transform: translate3d(0,100%,0);
}
.no-touch .propWidget-3:hover .priceCap {
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
}
.propWidget-3 .priceCap .price {
    float: left;
    font-size: 16px;
    line-height: 16px;
}
.propWidget-3 .priceCap .type {
    background-color: #eab134;
    font-size: 10px;
    line-height: 11px;
    color: #fff;
    padding: 2px 4px;
    border-radius: 2px;
    text-transform: uppercase;
    float: right;
}

/* User Widget 1 */

.userWidget-1 {
    display: block;
    background-color: #fff;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.13);
    margin-bottom: 20px;
    text-decoration: none;
    overflow: hidden;
    border-radius: 3px;
}
.userWidget-1 .avatar {
    width: 100%;
    height: 80px;
    background-color: #0eaaa6;
    position: relative;
    border-radius: 0;
    position: relative;
}
.userWidget-1 .avatar > img {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    position: absolute;
    z-index: 5;
    top: 40px;
    left: 10px;
    border: 2px solid #fff;
}
.userWidget-1 .avatar .name {
    color: #fff;
    font-size: 16px;
    line-height: 16px;
    position: absolute;
    z-index: 6;
    left: 95px;
    bottom: 5px;
}
.userWidget-1 .avatar .ops {
    position: absolute;
    z-index: 7;
    top: 10px;
    right: 10px;
}
.userWidget-1 .title {
    margin-left: 95px;
    padding-top: 5px;
    font-size: 13px;
    line-height: 13px;
    color: #333;
}
.userWidget-1 .address {
    margin-left: 95px;
    padding-top: 3px;
    font-size: 11px;
    line-height: 11px;
    color: #999;
    font-style: italic;
}
.userWidget-1 .rating {
    width: 45%;
    float: left;
    margin-top: 20px;
    padding: 10px;
    border-top: 1px solid #e8e8e8;
}
.userWidget-1 .rating .number {
    font-size: 30px;
    line-height: 30px;
    float: left;
    letter-spacing: -3px;
}
.userWidget-1 .rating .stars {
    float: left;
    margin-left: 5px;
}
.userWidget-1 .rating .stars ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.userWidget-1 .rating .stars ul li {
    float: left;
    margin-right: 1px;
    line-height: 16px;
}
.userWidget-1 .rating .stars ul li span {
    color: #eab134;
    font-size: 11px;
    line-height: 11px;
}
.userWidget-1 .rating .stars .reviews {
    font-size: 10px;
    color: #999;
    line-height: 10px;
}
.userWidget-1 ul.stats {
    list-style-type: none;
    margin: 20px 0 0 0;
    padding: 0;
    width: 55%;
    float: left;
    border-top: 1px solid #e8e8e8;
}
.userWidget-1 ul.stats li {
    width:33.33333333%;
    float:left;
    text-align: center;
    font-size: 10px;
    line-height: 10px;
    color: #999;
    border-left: 1px solid #e8e8e8;
    padding: 11px 0;
}
.userWidget-1 ul.stats li span {
    display: block;
    font-size: 16px;
    line-height: 18px;
    color: #333;
}

/* User Widget 2 */

.userWidget-2 {
    display: block;
    background-color: #fff;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.13);
    margin-bottom: 20px;
    text-decoration: none;
    overflow: hidden;
    border-radius: 3px;
    position: relative;
}
.userWidget-2 .avatar {
    width: auto;
    height: auto;
    border-radius: 0;
    padding: 10px;
    float: left;
}
.userWidget-2 .avatar > img {
    width: 60px;
    height: 60px;
    border-radius: 50%;
}
.userWidget-2 .info {
    float: left;
    padding: 18px 0;
    max-width: 70%;
}
.userWidget-2 .info .name {
    color: #0eaaa6;
    font-size: 14px;
    line-height: 14px;
    font-weight: bold;
    letter-spacing: -1px;
}
.userWidget-2 .info .title {
    font-size: 12px;
}
.userWidget-2 .info .address {
    font-size: 11px;
    line-height: 11px;
    color: #999;
    font-style: italic;
}
.userWidget-2 .ops {
    position: absolute;
    z-index: 7;
    top: 24px;
    right: 10px;
}

/* Tabs Widget 2 */

.tabsWidget {
    display: block;
    background-color: #fff;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.13);
    margin-bottom: 20px;
    text-decoration: none;
    border-radius: 3px;
    height: 283px;
}
.nav-tabs, .nav-tabs.nav-justified {
    border-bottom: none;
    background-color: #e8e8e8;
}
.nav-tabs.nav-justified > .active > a,
.no-touch .nav-tabs.nav-justified > .active > a:hover,
.nav-tabs.nav-justified > .active > a:focus {
    border: 0 none;
}
.nav-tabs > li {
    text-align: center;
    margin-bottom: 0;
}
.tabsWidget .nav-tabs > li {
    width: 50%;
}
.nav-tabs > li.active {
    background-color: #fff;
}
.nav-tabs > li > a {
    margin-right: 2px;
    line-height: 1.42857143;
    border: 0 none;
    border-radius: 0;
    color: #999;
    font-size: 12px;
    padding: 15px 0;
    background-color: #e8e8e8;
    border-bottom: 1px solid #d9d9d9;
}
.no-touch .nav-tabs > li > a:hover {
    border-color: transparent;
    background-color: transparent;
    color: #333;
    border-bottom: 1px solid #d9d9d9;
}
.nav-tabs > li.active > a,
.no-touch .nav-tabs > li.active > a:hover,
.nav-tabs > li.active > a:focus {
    color: #0eaaa6;
    cursor: default;
    background-color: #fff;
    border: 0 none;
    border-bottom: 1px solid #fff;
}
.tabsWidget .tab-pane {
    padding: 0;
}
.tabsWidget ul.propList, .tabsWidget ul.userList {
    list-style-type: none;
    margin: 0;
    padding: 0;
}
.tabsWidget ul.propList li a, .tabsWidget ul.userList li a {
    border-bottom: 1px solid #e8e8e8;
    padding: 15px 0;
    margin: 0 15px;
    display: block;
}
.tabsWidget ul.propList li:last-child a, .tabsWidget ul.userList li:last-child a {
    border-bottom: 0 none;
}
.tabsWidget ul.propList li a .image {
    width: 60px;
    height: 60px;
    border-radius: 3px;
    float: left;
    text-align: center;
    overflow: hidden;
}
.tabsWidget ul.userList li a .image {
    border-radius: 50%;
    width: 60px;
    height: 60px;
    float: left;
}
.tabsWidget ul.propList li a .image img {
    height: 60px;
    width: auto;
}
.tabsWidget ul.userList li a .image img {
    height: 60px;
    width: 60px;
    border-radius: 50%;
}
.tabsWidget ul.propList li a .info, .tabsWidget ul.userList li a .info {
    float: left;
    margin-left: 10px;
    max-width: 70%;
    padding-top: 7px;
    overflow: hidden;
}
.tabsWidget ul.propList li a .info .name, .tabsWidget ul.userList li a .info .name {
    color: #333;
    font-size: 14px;
    line-height: 16px;
    font-weight: bold;
    letter-spacing: -1px;
}
.no-touch .tabsWidget ul.propList li a:hover .info .name, .no-touch .tabsWidget ul.userList li a:hover .info .name {
    color: #0eaaa6;
}
.tabsWidget ul.propList li a .info .price {
    font-size: 14px;
    line-height: 22px;
}
.tabsWidget ul.propList li a .info .price .badge {
    background-color: #eab134;
    font-size: 10px;
    line-height: 11px;
    color: #fff;
    padding: 2px 4px;
    border-radius: 2px;
    text-transform: uppercase;
    font-weight: normal;
}
.tabsWidget ul.propList li a .info .address, .tabsWidget ul.userList li a .info .address {
    font-size: 11px;
    line-height: 13px;
    color: #999;
    font-style: italic;
}
.tabsWidget ul.userList li a .info .title {
    font-size: 12px;
    line-height: 14px;
    color: #333;
}

/* Calendar Widget */

.calendarWidget {
    display: block;
    background-color: #fff;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.13);
    margin-bottom: 20px;
    text-decoration: none;
    border-radius: 3px;
    height: 283px;
}
.cal {
    font-family: 'open_sansregular', sans-serif, Arial;
    font-size: 12px;
}
.cal .clndr .clndr-controls {
    display: inline-block;
    width: 100%;
    position: relative;
    margin-bottom: 10px;
    padding: 15px 0 5px 0;
}
.cal .clndr .clndr-controls .month {
    font-family: 'open_sanslight';
    float: left;
    width: 60%;
    text-align: center;
    font-size: 14px;
    text-transform: uppercase;
    line-height: 22px;
}
.cal .clndr .clndr-controls .clndr-control-button {
    float: left;
    width: 20%;
    padding-left: 6px;
    font-size: 18px;
    line-height: 18px;
    color: #999;
}
.cal .clndr .clndr-controls .clndr-control-button.rightalign {
    text-align: right;
    width: 20%;
    padding-right: 6px;
}
.cal .clndr .clndr-controls .clndr-control-button .clndr-next-button {
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    padding: 0 10px;
}
.no-touch .cal .clndr .clndr-controls .clndr-control-button .clndr-next-button:hover {
    color: #333;
}
.cal .clndr .clndr-controls .clndr-control-button .clndr-next-button.inactive {
    opacity: 0.5;
}
.no-touch .cal .clndr .clndr-controls .clndr-control-button .clndr-next-button.inactive:hover {
    background: none;
    cursor: default;
}
.cal .clndr .clndr-controls .clndr-control-button .clndr-previous-button {
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    padding: 0 10px;
}
.no-touch .cal .clndr .clndr-controls .clndr-control-button .clndr-previous-button:hover {
    color: #333;
}
.cal .clndr .clndr-controls .clndr-control-button .clndr-previous-button.inactive {
    opacity: 0.5;
}
.no-touch .cal .clndr .clndr-controls .clndr-control-button .clndr-previous-button.inactive:hover {
    background: none;
    cursor: default;
}
.cal .clndr .clndr-table {
    table-layout: fixed;
    width: 100%;
}
.cal .clndr .clndr-table .header-days {
    height: 30px;
    font-size: 10px;
    background: #fff;
}
.cal .clndr .clndr-table .header-days .header-day {
    vertical-align: middle;
    text-align: center;
    color: #999;
}
.cal .clndr .clndr-table tr {
    height: 36px;
}
.cal .clndr .clndr-table tr td {
    vertical-align: top;
}
.cal .clndr .clndr-table tr .day {
    height: inherit;
}
.no-touch .cal .clndr .clndr-table tr .day:hover {
    cursor: default;
}
.cal .clndr .clndr-table tr .day.today .day-contents {
    background: #ea3d36;
    color: #fff;
}
.cal .clndr .clndr-table tr .day.event .day-contents {
    cursor: pointer;
}
.cal .clndr .clndr-table tr .day.event .day-contents span {
    display: block;
    position: absolute;
    color: #0eaaa6;
    width: 100%;
    text-align: center;
    line-height: 6px;
    font-size: 6px;
    left: 0;
    bottom: 3px;
}
.cal .clndr .clndr-table tr .day.today.event .day-contents span {
    color: #fff;
}
.cal .clndr .clndr-table tr .day.event .tooltip.top {
    margin-top: 8px;
}
.cal .clndr .clndr-table tr .day.event .tooltip.top .tooltip-arrow {
    border-top-color: #0eaaa6;
}
.cal .clndr .clndr-table tr .day.event .tooltip .tooltip-inner {
    background-color: #0eaaa6;
}
.cal .clndr .clndr-table tr .day .day-contents {
    box-sizing: border-box;
    padding: 10px;
    font-size: 12px;
    text-align: center;
    width: 36px;
    margin: 0 auto;
    height: 36px;
    border-radius: 50%;
    position: relative;
}
.cal .clndr .clndr-table tr .empty,
.cal .clndr .clndr-table tr .adjacent-month {
    width: 100%;
    height: inherit;
    color: #bbbbbb;
}

/* Comments Widget */

.commentsWidget {
    display: block;
    margin-bottom: 20px;
}
.commentsWidget h5 {
    padding-bottom: 5px;
}
.commentsWidget h5 .badge {
    background-color: #0eaaa6;
    font-weight: normal;
}
.commentsWidgetForm .cfAvatar {
    padding: 0;
}
.commentsWidgetForm .commentsForm {
    padding: 1px 0px 0 53px;
}

/* Notifications Widget */

.notificationsWidget {
    display: block;
    margin-bottom: 20px;
}
.notificationsWidget h5 {
    padding-bottom: 5px;
}
.notificationsWidget h5 .badge {
    background-color: #0eaaa6;
    font-weight: normal;
}
.notificationsWidget .notification {

}
.notificationsWidget .notification .time {
    position: relative;
    float: left;
    width: 140px;
}
.notificationsWidget .notification .time .timeBody {
    position: absolute;
    background-color: #333;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.13);
    border-radius: 2px;
    width: 100%;
    text-align: center;
    font-size: 11px;
    padding: 6px 0;
    top: 18px;
    color: #fff;
}
.notificationsWidget .notification .time .timeArrow {
    position: absolute;
    top: 16px;
    left: 139px;
    width: 16px;
    height: 16px;
    color: #333;
    font-size: 30px;
    line-height: 30px;
    text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.13);
}
.notificationsWidget .notification .time .indicator {
    position: absolute;
    top: 24px;
    left: 152px;
    width: 12px;
    height: 16px;
    font-size: 12px;
    line-height: 16px;
    background-color: #f3f3f3;
}
.notificationsWidget .notification .time.green .timeBody {
    background-color: #0eaaa6;
}
.notificationsWidget .notification .time.blue .timeBody {
    background-color: #1d82aa;
}
.notificationsWidget .notification .time.magenta .timeBody {
    background-color: #9b156e;
}
.notificationsWidget .notification .time.red .timeBody {
    background-color: #ea3d36;
}
.notificationsWidget .notification .time.yellow .timeBody {
    background-color: #eab134;
}
.notificationsWidget .notification .time.green .timeArrow,
.notificationsWidget .notification .time.green .indicator {
    color: #0eaaa6;
}
.notificationsWidget .notification .time.blue .timeArrow,
.notificationsWidget .notification .time.blue .indicator {
    color: #1d82aa;
}
.notificationsWidget .notification .time.magenta .timeArrow,
.notificationsWidget .notification .time.magenta .indicator {
    color: #9b156e;
}
.notificationsWidget .notification .time.red .timeArrow,
.notificationsWidget .notification .time.red .indicator {
    color: #ea3d36;
}
.notificationsWidget .notification .time.yellow .timeArrow,
.notificationsWidget .notification .time.yellow .indicator {
    color: #eab134;
}
.notificationsWidget .notification .time .notifyArrow {
    position: absolute;
    top: 16px;
    left: 165px;
    width: 16px;
    height: 16px;
    color: #fff;
    font-size: 30px;
    line-height: 30px;
    text-shadow: -1px 1px 2px rgba(0, 0, 0, 0.13);
}
.notificationsWidget .notification .notifyContent {
    margin-left: 156px;
    padding: 10px 0 10px 17px;
    border-left: 1px solid #999;
}
.notificationsWidget .notification .notifyContent .notifyBody {
    background-color: #fff;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.13);
    border-radius: 2px;
    padding: 10px;
}
.notificationsWidget .notification .notifyContent .notifyBody .notify .name {
    font-size: 12px;
    font-weight: bold;
    line-height: 12px;
    padding-top: 8px;
}
.notificationsWidget .notification .notifyContent .notifyBody .notify .message {
    font-size: 12px;
    color: #333;
    line-height: 16px;
}

/* Components */

.components {
    padding: 20px;
}
.panel.dd {
    border: 0 none;
}
.panel.dd .panel-collapse {
    background-color: #fff;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.13);
}
.panel.dd .panel-body {
    font-size: 13px;
}
.tabsContainer {
    background-color: #fff;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.13);
    margin-bottom: 20px;
}
.tab-pane {
    padding: 15px;
    font-size: 13px;
}
.breadcrumb {
    background-color: #fff;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.13);
    font-size: 13px;
    border-radius: 2px;
    padding: 15px;
}
.breadcrumb > li .badge {
    background-color: #999;
}
.breadcrumb > li.active .badge {
    background-color: #333;
}
.pagination {
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.13);
    border-radius: 2px;
}
.pagination > li > a,
.pagination > li > span {
    color: #999;
    background-color: #fff;
    border: 1px solid #fff;
    margin-left: 0;
}
.no-touch .pagination > li > a:hover,
.no-touch .pagination > li > span:hover,
.pagination > li > a:focus,
.pagination > li > span:focus {
    color: #333;
    background-color: #e8e8e8;
    border-color: #e8e8e8;
}
.pagination > .active > a,
.pagination > .active > span,
.no-touch .pagination > .active > a:hover,
.no-touch .pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
    z-index: 2;
    color: #fff;
    cursor: default;
    background-color: #0eaaa6;
    border-color: #0eaaa6;
}
.labelsContainer {
    margin-bottom: 20px;
}
.labelsContainer .label {
    margin-bottom: 5px;
}
.label-green {
    background-color: #0eaaa6;
}
.no-touch .label-green[href]:hover,
.label-green[href]:focus {
    background-color: #068b85;
}
.label-red {
    background-color: #ea3d36;
}
.no-touch .label-red[href]:hover,
.label-red[href]:focus {
    background-color: #d22a2a;
}
.label-blue {
    background-color: #1d82aa;
}
.no-touch .label-blue[href]:hover,
.label-blue[href]:focus {
    background-color: #086492;
}
.label-yellow {
    background-color: #eab134;
}
.no-touch .label-yellow[href]:hover,
.label-yellow[href]:focus {
    background-color: #dfa412;
}
.label-magenta {
    background-color: #9b156e;
}
.no-touch .label-magenta[href]:hover,
.label-magenta[href]:focus {
    background-color: #7e115f;
}
.badgesContainer {
    margin-bottom: 20px;
}
.badgesContainer .badge {
    margin-bottom: 5px;
}
.badge.badge-default {
    background-color: #777;
}
.badge.badge-primary {
    background-color: #428bca;
}
.badge.badge-success {
    background-color: #5cb85c;
}
.badge.badge-info {
    background-color: #5bc0de;
}
.badge.badge-warning {
    background-color: #f0ad4e;
}
.badge.badge-danger {
    background-color: #d9534f;
}
.badge.badge-green {
    background-color: #0eaaa6;
}
.badge.badge-red {
    background-color: #ea3d36;
}
.badge.badge-blue {
    background-color: #1d82aa;
}
.badge.badge-yellow {
    background-color: #eab134;
}
.badge.badge-magenta {
    background-color: #9b156e;
}
.alert {
    padding: 15px 15px 15px 63px;
    margin-bottom: 20px;
    border: 0 none;
    border-radius: 2px;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.13);
    background-color: #fff;
    font-size: 13px;
    position: relative;
}
.alert-dismissable .close, .alert-dismissible .close {
    right: 0;
}
.alert > .icon {
    position: absolute;
    z-index: 1;
    left: 0;
    padding: 15px;
    bottom: 0;
    top: 0;
    border-top-left-radius: 2px;
    border-bottom-left-radius: 2px;
    color: #fff;
    font-size: 16px;
    line-height: 16px;
    min-width: 48px;
    text-align: center;
}
.alert.alert-success > .icon {
    background-color: #5cb85c;
}
.alert.alert-info > .icon {
    background-color: #5bc0de;
}
.alert.alert-warning > .icon {
    background-color: #f0ad4e;
}
.alert.alert-danger > .icon {
    background-color: #d9534f;
}
.progress-bar-green {
  background-color: #0eaaa6;
}
.progress-striped .progress-bar-green {
    background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.progress-bar-red {
    background-color: #ea3d36;
}
.progress-striped .progress-bar-red {
    background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.progress-bar-blue {
    background-color: #1d82aa;
}
.progress-striped .progress-bar-blue {
    background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.progress-bar-yellow {
    background-color: #eab134;
}
.progress-striped .progress-bar-yellow {
    background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.progress-bar-magenta {
    background-color: #9b156e;
}
.progress-striped .progress-bar-magenta {
    background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image:      -o-linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
    background-image:         linear-gradient(45deg, rgba(255, 255, 255, .15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .15) 50%, rgba(255, 255, 255, .15) 75%, transparent 75%, transparent);
}
.tooltipsContainer {
    margin-bottom: 20px;
}
.tooltipsContainer .btn {
    margin-bottom: 5px;
}

/* Lists */

.lists {
    padding: 20px;
}
.icon-fade {
    color: #999;
}
a.list-group-item .arrow {
    float: right;
    font-size: 18px;
    line-height: 19px;
    margin-left: 10px;
}
.list-group.list-group-sortable .list-group-item {
    margin-bottom: 5px;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.13);
    border: 0 none;
    border-radius: 2px;
    cursor: default;
}
.list-group.list-group-sortable .list-group-item.list-group-item-placeholder {
    box-shadow: none;
    border: 1px dotted #bfbfbf;
    background-color: transparent;
    padding: 20px;
}
.list-group.list-group-sortable .list-group-item .icon-fade {
    margin-right: 5px;
    cursor: move;
}
.list-group.list-group-sortable .list-group-item.ui-sortable-helper {
    border-left: 4px solid #999;
    opacity: 0.70;
}
.list-group.list-group-sortable .list-group-item.ui-sortable-helper.helper-green {
    border-left: 4px solid #0eaaa6;
}
.list-group.list-group-sortable .list-group-item.ui-sortable-helper.helper-red {
    border-left: 4px solid #ea3d36;
}
.list-group.list-group-sortable .list-group-item.ui-sortable-helper.helper-blue {
    border-left: 4px solid #1d82aa;
}
.list-group.list-group-sortable .list-group-item.ui-sortable-helper.helper-yellow {
    border-left: 4px solid #eab134;
}
.list-group.list-group-sortable .list-group-item.ui-sortable-helper.helper-magenta {
    border-left: 4px solid #9b156e;
}
.list-group .list-group-item a.icon-action {
    display: block;
    padding: 0 5px;
    text-align: center;
    line-height: 22px;
}
.list-ns-placeholder {
    border: 1px dotted #bfbfbf;
    background-color: transparent;
}
.list-ns-error {
    border: 1px dotted #ea3d36;
    background-color: transparent;
}
ol {
    margin: 0;
    padding: 0;
    padding-left: 30px;
}
ol.list-ns, ol.list-ns ol {
    margin: 0 0 0 25px;
    padding: 0;
    list-style-type: none;
}
ol.list-ns {
    margin: 0;
}
.list-ns li {
    margin: 5px 0 0 0;
    padding: 0;
    border-radius: 2px;
}
.list-ns li div  {
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.13);
    border: 0 none;
    border-radius: 2px;
    cursor: default;
    background-color: #fff;
    padding: 10px 15px;
    margin: 0;
}
.list-ns li.list-ns-branch div {
}
.list-ns li.list-ns-leaf div {
}
li.list-ns-collapsed.list-ns-hovering div {
}
.disclose {
    display: none;
    padding: 0 7px;
    text-align: center;
    line-height: 16px;
    cursor: pointer;
}
.list-ns li.list-ns-collapsed > ol {
    display: none;
}
.list-ns li.list-ns-branch > div > .disclose {
    display: inline-block;
}
.list-ns li.list-ns-collapsed > div > .disclose > span:before {
    font-family: FontAwesome;
    content: "\f105";
}
.list-ns li.list-ns-expanded > div > .disclose > span:before {
    font-family: FontAwesome;
    content: "\f107";
}
.list-ns li.ui-sortable-helper {
    border-left: 4px solid #999;
}
.list-ns li.ui-sortable-helper.helper-green {
    border-left: 4px solid #0eaaa6;
}
.list-ns li.ui-sortable-helper.helper-red {
    border-left: 4px solid #ea3d36;
}
.list-ns li.ui-sortable-helper.helper-blue {
    border-left: 4px solid #1d82aa;
}
.list-ns li.ui-sortable-helper.helper-yellow {
    border-left: 4px solid #eab134;
}
.list-ns li.ui-sortable-helper.helper-magenta {
    border-left: 4px solid #9b156e;
}
.list-ns li div .list-ns-handler {
    font-size: 14px;
    color: #999;
    display: block;
    line-height: 20px;
    padding: 0 5px;
    cursor: move;
}
.no-touch .list-ns li div .list-ns-handler:hover {
    color: #333;
}

/* Tables */

.tables {
    padding: 20px;
}
.table {
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.13);
    border-radius: 2px;
    border-spacing: 0;
}
.table > thead > tr {
    border-top-left-radius: 2px;
    border-top-right-radius: 2px;
}
.table > thead > tr > th {
    background-color: #e8e8e8;
    border-bottom: 1px solid #e8e8e8;
    font-size: 12px;
    font-weight: normal;
    padding: 10px 15px;
}
.table > thead > tr > th:first-child {
    border-top-left-radius: 2px;
}
.table > thead > tr > th:last-child {
    border-top-right-radius: 2px;
}
.table > tbody > tr > td {
    vertical-align: middle;
    padding: 10px 15px;
    border-bottom: 1px solid #e8e8e8;
}
.table > tbody > tr > td:last-child {
    border-bottom: 0 none;
}
.table > tbody > tr:last-child > td:first-child {
    border-bottom-left-radius: 2px;
}
.table > tbody > tr:last-child > td:last-child {
    border-bottom-right-radius: 2px;
}
.table > tbody > tr > td .stars {
    white-space: nowrap;
}
.tableContainer {
    padding: 10px;
}
.mb5 {
    margin-bottom: 5px;
}
.panel .table-overflow {
    margin-bottom: 0;
}
.panel .table {
    margin-bottom: 0;
}
.table > thead > tr > th.tablesorter-headerDesc, .table > thead > tr > th.tablesorter-headerAsc {
    background-color: #333;
    color: #fff;
}
.table > thead > tr > th.tablesorter-headerUnSorted .tablesorter-header-inner .sortIconAsc,
.table > thead > tr > th.tablesorter-headerUnSorted .tablesorter-header-inner .sortIconDesc {
    display: none;
}
.table > thead > tr > th.tablesorter-headerDesc .tablesorter-header-inner .sortIconAsc,
.table > thead > tr > th.tablesorter-headerDesc .tablesorter-header-inner .sortIcon {
    display: none;
}
.table > thead > tr > th.tablesorter-headerAsc .tablesorter-header-inner .sortIconDesc,
.table > thead > tr > th.tablesorter-headerAsc .tablesorter-header-inner .sortIcon {
    display: none;
}

/* Form */

.checkbox.switch  {
    padding-top: 4px;
}
.checkbox.custom-checkbox input[type="checkbox"],
.radio.custom-radio input[type="radio"],
.checkbox.switch input[type="checkbox"] {
    position: absolute;
    left: -9999em;
}
.checkbox.custom-checkbox label,
.radio.custom-radio label,
.checkbox.switch label {
    padding-left: 0;
}
.checkbox.custom-checkbox span,
.radio.custom-radio span {
    background-color: #fff;
    border: 1px solid #999;
    font-size: 10px;
    line-height: 10px;
    padding: 3px;
    border-radius: 2px;
    float: left;
    margin-right: 5px;
    color: #fff;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
.radio.custom-radio span {
    border-radius: 50%;
    line-height: 9px;
}
.checkbox.custom-checkbox input:checked+span,
.radio.custom-radio input:checked+span {
    background-color: #5cb85c;
    border-color: #5cb85c;
}
.checkbox.custom-checkbox input[disabled]+span,
fieldset[disabled] .checkbox.custom-checkbox input+span,
.radio.custom-radio input[disabled]+span,
fieldset[disabled] .radio.custom-radio input+span {
    border-color: #e8e8e8;
}
.checkbox.custom-checkbox input[disabled]:checked+span,
fieldset[disabled] .checkbox.custom-checkbox input:checked+span,
.radio.custom-radio input[disabled]:checked+span,
fieldset[disabled] .radio.custom-radio input:checked+span {
    border-color: #b9ebb9;
    background-color: #b9ebb9;
}
.checkbox.switch span.cs-place {
    position: relative;
    width: 60px;
    height: 30px;
    border-radius: 30px;
    background-color: #fff;
    border: 1px solid #c4c4c4;
    display: inline-block;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
.checkbox.switch span.cs-handler {
    background-color: #fff;
    width: 30px;
    height: 30px;
    position: absolute;
    top: -1px;
    left: -1px;
    border: 1px solid #c4c4c4;
    border-radius: 50%;
    padding: 7px;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
    color: #fff;
}
.checkbox.switch input:checked+span.cs-place {
    background-color: #5cb85c;
    border-color: #5cb85c;
}
.checkbox.switch input:checked+span.cs-place span.cs-handler {
    margin-left: 31px;
    color: #5cb85c;
    border-color: #5cb85c;
}
.checkbox.switch input[disabled]+span.cs-place,
fieldset[disabled] .checkbox.switch input+span.cs-place {
    border-color: #dddddd;
}
.checkbox.switch input[disabled]+span.cs-place span.cs-handler,
fieldset[disabled] .checkbox.switch input+span.cs-place span.cs-handler {
    border-color: #dddddd;
}
.checkbox.switch input:checked[disabled]+span.cs-place,
fieldset[disabled] .checkbox.switch input:checked+span.cs-place {
    border-color: #b9ebb9;
    background-color: #b9ebb9;
}
.checkbox.switch input:checked[disabled]+span.cs-place span.cs-handler,
fieldset[disabled] .checkbox.switch input:checked+span.cs-place span.cs-handler {
    color: #b9ebb9;
    border-color: #b9ebb9;
}
.round {
    border-radius: 100px;
}

/* Sign In | Sign Up */

#page-container {
    height: 100%;
}
body.black {
    background-color: #000;
}
.signLogo {
    color: #fff;
    font-size: 18px;
    text-align: center;
    padding-bottom: 10px;
}
.signLogo span {
    font-size: 32px;
}
.signOr {
    padding-bottom: 10px;
    text-align: center;
}
.signFooter {
    font-size: 11px;
    color: #fff;
    text-align: center;
    padding-top: 10px;
}

/* Profile Page */

.pc-avatar {
    text-align: center;
}
.pc-avatar img {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 1px solid #e8e8e8;
    padding: 3px;
}
.pc-name {
    text-align: center;
    padding-top: 10px;
}
.pc-email {
    text-align: right;
    padding-top: 34px;
}
.pc-fav {
    text-align: left;
    padding-top: 34px;
}
.pc-stats {
    list-style-type: none;
    margin: 20px 0 0 0;
    padding: 0;
    width: 100%;
    float: left;
    border-top: 1px solid #e8e8e8;
    border-bottom: 1px solid #e8e8e8;
}
.pc-stats li {
    width: 33.33333333%;
    float: left;
    text-align: center;
    font-size: 10px;
    line-height: 10px;
    color: #999;
    border-left: 1px solid #e8e8e8;
    padding: 11px 0;
}
.pc-stats li:last-child {
    border-right: 1px solid #e8e8e8;
}
.pc-stats li span {
    display: block;
    font-size: 16px;
    line-height: 18px;
    color: #333;
}
.pc-title {
    font-size: 16px;
    padding-bottom: 15px;
}
.pb10 {
    padding-bottom: 10px;
}
.pc-social {
    padding-top: 15px;
}
.pc-about {
    padding: 0 0 10px 0;
    font-size: 16px;
}
.testim-avatar {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    float: left;
}
.testim {
    margin-left: 70px;
}
.testim-text {
    font-size: 11px;
    color: #999;
    font-style: italic;
    padding-bottom: 5px;
}
.testim-name {
    font-size: 12px;
    font-weight: bold;
}
.mb20 {
    margin-bottom: 20px;
}

/* Homepage */

#hero-container {
    background-color: #000;
    height: 600px;
    position: relative;
}
#hero-container-map {
    background-color: #fff;
    height: 600px;
    position: relative;
}
#hero-container-blog {
    height: 600px;
    position: relative;
}
#home-map {
    width: 100%;
    height: 600px;
}
.home-header {
    position: absolute;
    width: 100%;
    padding: 20px;
    color: #fff;
    top: 0;
    left: 0;
    z-index: 1000;
    background: -moz-linear-gradient(top,  rgba(0,0,0,0.5) 0%, rgba(0,0,0,0) 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0.5)), color-stop(100%,rgba(0,0,0,0))); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  rgba(0,0,0,0.5) 0%,rgba(0,0,0,0) 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  rgba(0,0,0,0.5) 0%,rgba(0,0,0,0) 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  rgba(0,0,0,0.5) 0%,rgba(0,0,0,0) 100%); /* IE10+ */
    background: linear-gradient(to bottom,  rgba(0,0,0,0.5) 0%,rgba(0,0,0,0) 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#80000000', endColorstr='#00000000',GradientType=0 ); /* IE6-9 */
}
.home-header.map {
    background: rgba(0, 0, 0, 0.50);
}
.home-logo {
    color: #fff;
    font-size: 20px;
    float: left;
}
.home-logo span {
    font-size: 34px;
}
.home-nav {
    float: right;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
.home-nav ul {
    margin: 0;
    padding: 0;
    list-style-type: none;
    float: right;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
.home-nav ul li {
    float: left;
    margin-left: 20px;
    padding-top: 9px;
}
.home-nav ul li:last-child {
    padding-top: 0;
}
.home-nav ul li a {
    color: #fff;
}
.no-touch .home-nav ul li a:hover {
    color: #fff;
}
.home-caption {
    position: absolute;
    width: 100%;
    text-align: center;
    top: 200px;
    left: 0;
}
.home-title {
    text-transform: uppercase;
    font-size: 40px;
    color: #fff;
    font-weight: bold;
}
.home-subtitle {
    text-align: center;
    text-transform: uppercase;
    font-size: 14px;
    color: #fff;
    padding-bottom: 20px;
    font-weight: bold;
}
.search-panel {
    background-color: rgba(0, 0, 0, 0.50);
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    color: #fff;
    padding: 20px 20px 0 20px;
}
.search-panel form {
    text-align: center;
}
.search-panel .form-group {
    margin: 0 5px 20px 5px;
    position: relative;
}
.pac-container {
    background-color: #fff;
    position: absolute !important;
    z-index: 1000;
    border-radius: 2px;
    border-top: 1px solid #dfdfdf;
    border: 1px solid #dfdfdf;
    font-family: 'open_sansregular';
    -webkit-box-shadow: 0 2px 6px rgba(0, 0, 0, .1);
          box-shadow: 0 2px 6px rgba(0, 0, 0, .1);
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    overflow: hidden;
    font-size: 13px;
    padding: 5px 0;
    margin: 2px 0 0;
}
.pac-item {
    cursor: pointer;
    padding: 10px 15px;
    text-overflow: ellipsis;
    overflow: hidden;
    white-space: nowrap;
    line-height: 1.42857143;
    text-align: left;
    border-top: 0 none;
    font-size: 13px;
    color: #333;
    font-weight: normal;
}
.no-touch .pac-item:hover {
    color: #333;
    text-decoration: none;
    background-color: #f3f3f3;
}
.pac-icon {
    display: none;
}
.pac-item-query {
    color: #333;
}
.pac-container:after{
    content:"";
    padding:1px 1px 1px 0;
    height:16px;
    text-align:right;
    display:block;
    background: url(https://developers.google.com/maps/documentation/places/images/powered-by-google-on-white.png) no-repeat center right;
}
body.no-hidden {
    overflow: auto;
}
a.home-navHandler {
    display: block;
    float: right;
    text-align: center;
    font-size: 24px;
    line-height: 24px;
    color: #fff;
    padding: 5px;
    -webkit-transition: all .5s ease-in-out;
    -o-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out;
}
a.home-navHandler.active {
    text-shadow: 0 0 10px #fff;
}
.no-touch a.home-navHandler:hover {
    text-decoration: none;
    color: #fff;
}
.highlight {
    background-color: #0eaaa6;
    padding: 30px;
    text-align: center;
}
.h-title {
    color: #fff;
    font-size: 26px;
    line-height: 30px;
    padding-bottom: 10px;
}
.h-text {
    color: #fff;
    font-size: 14px;
    font-style: italic;
    line-height: 18px;
    padding: 0 30%;
}
.home-wrapper {
    width: 1140px;
    margin: 0 auto;
    padding: 40px 20px;
}
.home-content h2 {
    margin: 0;
    padding: 0 0 30px 0;
    font-size: 22px;
    line-height: 22px;
    text-align: center;
}
.home-content h2.h-r {
    text-align: right;
}
.s-menu-item {
    height: 260px;
    overflow: hidden;
    position: relative;
    background: #fff;
    -webkit-transition: all 300ms linear;
    -moz-transition: all 300ms linear;
    -o-transition: all 300ms linear;
    -ms-transition: all 300ms linear;
    transition: all 300ms linear;
    border-radius: 3px;
}
.s-menu-item:last-child {
    margin-right: 0px;
}
.s-menu-item a {
    text-align: left;
    width: 100%;
    height: 100%;
    display: block;
    color: #333;
    position: relative;
}
.s-icon {
    font-size: 60px;
    color: #0eaaa6;
    opacity: 0.8;
    line-height: 150px;
    position: absolute;
    width: 100%;
    height: 50%;
    left: 0px;
    top: 0px;
    text-align: center;
    -webkit-transition: all 400ms linear;
    -moz-transition: all 400ms linear;
    -o-transition: all 400ms linear;
    -ms-transition: all 400ms linear;
    transition: all 400ms linear;
}
.s-content {
    position: absolute;
    left: 0px;
    width: 100%;
    height: 50%;
    top: 50%;
}
h2.s-main {
    color: #0eaaa6;
    font-size: 30px;
    color: 333;
    font-size: 22px;
    line-height: 26px;
    text-align: center;
    -webkit-transition: all 200ms linear;
    -moz-transition: all 200ms linear;
    -o-transition: all 200ms linear;
    -ms-transition: all 200ms linear;
    transition: all 200ms linear;
}
h3.s-sub {
    text-align:center;
    font-size: 13px;
    color: #999;
    position: absolute;
    bottom: 20px;
    line-height: 16px;
    width: 100%;
    left: 0px;
    opacity: 0.8;
    -webkit-transition: all 200ms linear;
    -moz-transition: all 200ms linear;
    -o-transition: all 200ms linear;
    -ms-transition: all 200ms linear;
    transition: all 200ms linear;
}
.no-touch .s-menu-item:hover {
    background-color: #0eaaa6;
    z-index:999;
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -ms-transform: scale(1.1);
    -o-transform: scale(1.1);
    transform: scale(1.1);
}
.no-touch .s-menu-item:hover .s-icon {
    color: #fff;
    font-size: 90px;
    opacity:0.3;
    -webkit-animation: smallToBig 900ms alternate ease;
    -moz-animation: smallToBig 900ms alternate ease;
    -ms-animation: smallToBig 900ms alternate ease;
}
.no-touch .s-menu-item:hover .s-main {
    color: #fff;
    -webkit-animation: smallToBig 300ms ease;
    -moz-animation: smallToBig 300ms ease;
    -ms-animation: smallToBig 300ms ease;
}
.no-touch .s-menu-item:hover .s-sub {
    color: #fff;
    -webkit-animation: moveFromBottom 500ms ease;
    -moz-animation: moveFromBottom 500ms ease;
    -ms-animation: moveFromBottom 500ms ease;
}
@-webkit-keyframes smallToBig {
    from {
        -webkit-transform: scale(0.1);
    }
    to {
        -webkit-transform: scale(1);
    }
}
@-moz-keyframes smallToBig {
    from {
        -moz-transform: scale(0.1);
    }
    to {
        -moz-transform: scale(1);
    }
}
@-ms-keyframes smallToBig {
    from {
        -ms-transform: scale(0.1);
    }
    to {
        -ms-transform: scale(1);
    }
}

@-webkit-keyframes moveFromBottom {
    from {
        -webkit-transform: translateY(200%);
    }
    to {
        -webkit-transform: translateY(0%);
    }
}
@-moz-keyframes moveFromBottom {
    from {
        -moz-transform: translateY(200%);
    }
    to {
        -moz-transform: translateY(0%);
    }
}
@-ms-keyframes moveFromBottom {
    from {
        -ms-transform: translateY(200%);
    }
    to {
        -ms-transform: translateY(0%);
    }
}
.pb40 {
    padding-bottom: 40px;
}
.agent {
    text-align: center;
    margin-bottom: 20px;
}
.agent-avatar {
    display: inline-block;
    overflow: hidden;
    position: relative;
    border-radius: 50%;
}
.agent-avatar img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
}
.agent-avatar .ring {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    position: absolute;
    top: 0;
    left: 0;
    border: 10px solid #fff;
    opacity: 0.50;
    display: none;
}
.no-touch .agent-avatar .ring {
    display: block;
    -webkit-transition: -webkit-transform 0.35s;
    transition: transform 0.35s;
    -webkit-transform: scale(1.25);
    transform: scale(1.25);
}
.no-touch .agent-avatar:hover .ring {
    -webkit-transform: scale(1);
    transform: scale(1);
}
.agent-name {
    font-size: 16px;
    line-height: 16px;
    padding: 10px 0;
}
.agent-contact {
    padding-top: 10px;
}
.carousel-inner > .item > img.home-testim-avatar {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    float: left;
}
.home-testim {
    margin-left: 120px;
    padding-top: 10px;
}
.home-testim-text {
    font-size: 16px;
    color: #999;
    font-style: italic;
    padding-bottom: 5px;
}
.home-testim-name {
    font-size: 16px;
    font-weight: bold;
}
#home-testimonials .carousel-inner {
    width: 70%;
    margin: 0 auto;
}

/* Blog */

.featured.carousel {
    height: 600px;
    background: #000;
}
.featured.carousel .carousel-inner {
    height: 100%;
}
.featured.carousel .carousel-inner .item {
    background-size: cover;
    background-position: 50% 50%;
    background-repeat: no-repeat;
    height: 100%;
}
.featured.carousel .carousel-inner .item .carousel-caption {
    bottom: auto;
    top: 160px;
    padding-top: 0;
}
.featured.carousel .carousel-inner .item .carousel-caption .carousel-title {
    color: #fff;
    text-transform: uppercase;
    font-size: 11px;
    letter-spacing: 2px;
    line-height: 11px;
    padding-bottom: 20px;
}
.featured.carousel .carousel-inner .item .container {
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.25);
}
.featured.carousel .carousel-inner .item .carousel-caption .caption-title {
    font-size: 40px;
    color: #fff;
    font-weight: bold;
    line-height: 46px;
}
.featured.carousel .carousel-inner .item .carousel-caption .caption-subtitle {
    font-size: 13px;
    color: #fff;
    font-weight: normal;
    line-height: 18px;
    padding-top: 20px;
    padding-bottom: 20px;
}
.avatar-caption {
    position: absolute;
    z-index: 10;
    left: 7%;
    bottom: 50px;
}
.avatar-caption img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    float: left;
}
.ac-user {
    float: left;
    margin-left: 7px;
    color: #fff;
}
.ac-name {
    padding-top: 3px;
    font-size: 14px;
}
.ac-title {
    font-size: 9px;
    text-transform: uppercase;
    opacity: 0.80;
    letter-spacing: 1px;
}
.blog-nav {
    float: right;
    margin-right: 5px;
}
.blog-nav ul {
    margin: 0;
    padding: 0;
    list-style-type: none;
    float: right;
}
.blog-nav ul li {
    float: left;
    margin-left: 20px;
    padding-top: 9px;
}
.blog-nav ul li a {
    color: #fff;
}
.no-touch .blog-nav ul li a:hover {
    color: #fff;
}
a.toggle-search {
    color: #fff;
    font-size: 18px;
    float: right;
    padding: 9px;
    line-height: 18px;
    display: block;
}
a.toggle-search.active {
    text-shadow: 0 0 10px #fff;
}
a.toggle-search:hover {
    color: #fff;
}
.blog-search {
    background-color: #333;
    height: 0px;
    -webkit-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    transition: all .2s ease-in-out;
}
.blog-search.active {
    height: 72px;
}
.blog-search input {
    width: 100%;
    text-align: center;
    border: 1px solid #333;
    background-color: #333;
    font-size: 20px;
    color: #fff;
    font-weight: normal;
    margin: 20px 0;
    -webkit-appearance: none;
}
.blog-content {
    background-color: #f3f3f3;
}
.blog-content h2 {
    margin: 0;
    padding: 0 0 30px 0;
    font-size: 22px;
    line-height: 22px;
    text-align: left;
}
.blog-content h2.h-r {
    text-align: right;
}
.article {
    background-color: #fff;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.13);
    margin-bottom: 20px;
    border-radius: 3px;
    overflow: hidden;
    height: 440px;
    position: relative;
}
.article .image {
    display: block;
    width: 100%;
    height: 200px;
    overflow: hidden;
}
.no-touch .article .image img {
    -webkit-transition: -webkit-transform 1.0s;
    transition: transform 1.0s;
    -webkit-transform: scale(1);
    transform: scale(1);
}
.no-touch .article:hover .image img {
    -webkit-transform: scale(1.15);
    transform: scale(1.15);
}
.article .image img {
    width: 100%;
    height: auto;
    margin-top: -10%;
}
.article-category {
    padding: 15px 20px 10px 20px;
}
.article-category a {
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: 2px;
    line-height: 11px;
    font-weight: bold;
}
.article h3 {
    font-size: 20px;
    font-weight: normal;
    margin: 0;
    padding: 0 20px;
    line-height: 26px;
}
.article h3 a {
    color: #333;
}
.no-touch .article h3 a:hover {
    color: #0eaaa6;
}
.article p {
    padding: 10px 20px 20px 20px;
    line-height: 19px;
    color: #999;
}
.article .footer {
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    padding: 15px 20px;
    font-size: 12px;
    background: -moz-linear-gradient(top,  rgba(255,255,255,0.7) 0%, rgba(255,255,255,0.76) 21%, rgba(255,255,255,1) 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,0.7)), color-stop(21%,rgba(255,255,255,0.76)), color-stop(100%,rgba(255,255,255,1))); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(top,  rgba(255,255,255,0.7) 0%,rgba(255,255,255,0.76) 21%,rgba(255,255,255,1) 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(top,  rgba(255,255,255,0.7) 0%,rgba(255,255,255,0.76) 21%,rgba(255,255,255,1) 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(top,  rgba(255,255,255,0.7) 0%,rgba(255,255,255,0.76) 21%,rgba(255,255,255,1) 100%); /* IE10+ */
    background: linear-gradient(to bottom,  rgba(255,255,255,0.7) 0%,rgba(255,255,255,0.76) 21%,rgba(255,255,255,1) 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b3ffffff', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */
}
.blog-r-nav {
    margin: 0;
    padding: 0;
    list-style-type: none;
    padding-bottom: 30px;
    text-align: right;
}
.blog-r-nav li {
    line-height: 14px;
    padding-bottom: 10px;
}
.blog-r-nav li a {
    line-height: 14px;
    font-size: 14px;
}
.blog-tags {
    text-align: right;
}
.blog-tags .label {
    display: inline-block;
    margin-bottom: 5px;
    margin-left: 5px;
}
.blog-pagination {
    padding-bottom: 30px;
}
.post-author {
    float: left;
    padding-top: 7px;
}
.post-author img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    float: left;
}
.pa-user {
    float: left;
    margin-left: 7px;
    color: #333;
}
.pa-name {
    padding-top: 3px;
    font-size: 14px;
}
.pa-title {
    color: #999;
    font-size: 9px;
    text-transform: uppercase;
    opacity: 0.80;
    letter-spacing: 1px;
}
.post-top {
    padding-bottom: 30px;
    margin-bottom: 30px;
    border-bottom: 1px solid #e8e8e8;
}
.post-share {
    float: right;
    text-align: right;
}
.ps-stats {
    font-size: 12px;
    color: #999;
    padding-top: 5px;
}
.ps-stats span {
    font-size: 20px;
    letter-spacing: -1px;
    line-height: 20px;
    color: #333;
}
.post-content {
    margin-bottom: 30px;
}
.post-content h2 {
    margin: 0;
    padding: 0 0 30px 0;
    font-size: 22px;
    line-height: 26px;
    text-align: left;
}
.post-content {
    font-size: 14px;
}
blockquote {
    padding: 10px 20px;
    margin: 20px 0;
    font-size: 14px;
    border-left: 2px solid #0eaaa6;
    color: #999;
    font-style: italic;
}
.image-block {
    position: relative;
    overflow: hidden;
    margin-bottom: 30px;
}
.image-block img {
    width: 100%;
    height: auto;
}
.ib-title {
    width: 60%;
    position: absolute;
    height: 100%;
    color: #fff;
    top: 0;
    bottom: 0;
    left: 0;
    z-index: 2;
    background: -moz-linear-gradient(left,  rgba(0,0,0,0.8) 0%, rgba(0,0,0,0) 100%); /* FF3.6+ */
    background: -webkit-gradient(linear, left top, right top, color-stop(0%,rgba(0,0,0,0.8)), color-stop(100%,rgba(0,0,0,0))); /* Chrome,Safari4+ */
    background: -webkit-linear-gradient(left,  rgba(0,0,0,0.8) 0%,rgba(0,0,0,0) 100%); /* Chrome10+,Safari5.1+ */
    background: -o-linear-gradient(left,  rgba(0,0,0,0.8) 0%,rgba(0,0,0,0) 100%); /* Opera 11.10+ */
    background: -ms-linear-gradient(left,  rgba(0,0,0,0.8) 0%,rgba(0,0,0,0) 100%); /* IE10+ */
    background: linear-gradient(to right,  rgba(0,0,0,0.8) 0%,rgba(0,0,0,0) 100%); /* W3C */
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#cc000000', endColorstr='#00000000',GradientType=1 ); /* IE6-9 */
}
.ib-title span {
    display: block;
    position: absolute;
    padding: 20px;
    left: 0;
    bottom: 0;
    font-size: 18px;
}
.p-n-articles {
    padding-top: 100px;
}
.p-article {
    width: 48%;
    text-align: right;
    float: left;
    margin-right: 2%;
}
.n-article {
    width: 48%;
    text-align: left;
    float: left;
    margin-left: 2%;
}
.pna-title {
    color: #fff;
    text-transform: uppercase;
    font-size: 10px;
    letter-spacing: 2px;
    line-height: 10px;
    padding-bottom: 10px;
}
.p-n-articles a {
    color: #fff;
    font-size: 17px;
}
.no-touch .p-n-articles a:hover {
    color: #fff;
    text-decoration: underline;
}
.f-pn-articles {
    border: 1px solid #e8e8e8;
    margin-bottom: 30px;
}
.f-p-article {
    display: block;
    width: 50%;
    float: left;
    text-align: right;
    padding: 20px;
    border-right: 1px solid #e8e8e8;
    position: relative;
}
.f-n-article {
    display: block;
    width: 50%;
    float: left;
    text-align: left;
    padding: 20px;
    position: relative;
}
.fpna-title {
    text-transform: uppercase;
    font-size: 10px;
    letter-spacing: 2px;
    line-height: 10px;
    padding-bottom: 10px;
}
.fpna-header {
    font-size: 16px;
    line-height: 20px;
    display: block;
    color: #333;
}
.no-touch .f-p-article:hover .fpna-header, .no-touch .f-n-article:hover .fpna-header {
    color: #0eaaa6;
}
.f-p-article .fpna-header {
    margin-left: 30px;
}
.f-n-article .fpna-header {
    margin-right: 30px;
}
.pn-icon {
    position: absolute;
    font-size: 36px;
    line-height: 36px;
    top: 50%;
    margin-top: -18px;
}
.f-p-article .pn-icon {
    left: 20px;
}
.f-n-article .pn-icon {
    right: 20px;
}
.post-comments {
    padding-bottom: 20px;
}
.commentContent.bg-w {
    border: 1px solid #e8e8e8;
    box-shadow: none;
}
.commentArrow.bg-w {
    text-shadow: -1px 1px 2px rgba(0, 0, 0, 0.20);
}
.article.bg-w {
    border: 1px solid #e8e8e8;
    box-shadow: none;
}

/* Footer */

.home-footer {
    background-color: #333;
    color: #fff;
}
.footer-header {
    font-size: 16px;
    line-height: 16px;
    padding-bottom: 20px;
    color: #c6e4e3;
}
.footer-nav {
    margin: 0;
    padding: 0 0 20px 0;
    list-style-type: none;
}
.footer-nav li {
    line-height: 13px;
    padding-bottom: 7px;
}
.footer-nav li a {
    color: #fff;
}
.no-touch .footer-nav li a:hover {
    color: #999;
}
.footer-nav li.footer-phone {
    font-size: 20px;
    line-height: 20px;
    padding-bottom: 15px;
}
.footer-nav li.footer-address {
    padding-bottom: 15px;
}
.footer-nav li.footer-address p {
    line-height: 13px;
    margin: 0 0 5px;
}
.copyright {
    text-align: center;
    color: #999;
    font-size: 12px;
    padding-top: 30px;
}

/* File input */

.file-input {
    border: 1px solid #dfdfdf;
    padding: 10px;
    position: relative;
    width: 100%;
    background-color: #fff;
    border-radius: 2px;
}
.file-input .file-preview {
    border: none;
    padding: 0;
    margin-bottom: 0;
}
.file-preview-frame {
    display: table;
    margin: 0 10px 10px 0;
    height: 150px;
    border: 0 none;
    box-shadow: none;
    padding: 0;
    float: left;
    text-align: center;
}
.no-touch .file-preview-frame:hover {
    box-shadow: none;
    background-color: transparent;
}
.help-block {
    font-size: 11px;
    font-style: italic;
}

/* Media Queries */

@media screen and (max-width: 1199px) {
    .home-wrapper {
        width: 100%;
        margin: 0;
    }
}
@media screen and (max-width: 991px) {
    .agentAvatarImg {
        width: 20%;
    }
    .agentAvatar .contactBtn {
        width: 50%;
    }
    .agentAvatar .favBtn {
        width: 50%;
    }
    .home-title {
        font-size: 34px;
        line-height: 38px;
    }
    .featured.carousel .carousel-inner .item .carousel-caption .caption-title {
        font-size: 34px;
        line-height: 40px;
    }
    .blog-content h2.h-r, .home-content h2.h-r {
        text-align: left;
    }
    .blog-r-nav {
        text-align: left;
    }
    .blog-tags .label {
        margin-left: 0;
        margin-right: 5px;
    }
    .blog-tags {
        text-align: left;
    }
}
@media screen and (max-width: 767px) {  
    a {
        -webkit-transition: none;
        -o-transition: none;
        transition: none;
    }
    #header {
        background-color: #0eaaa6;
        height: 50px;
    }
    .search {
        display: none;
    }
    .logo, .logo.expanded {
        position: absolute;
        top: 0;
        left: 50%;
        width: 80px;
        height: 50px;
        margin-left: -40px;
    }
    .logo a, .logo.expanded a {
        width: 70px;
        height: 50px;
    }
    .logo a span.marker, .logo.expanded a span.marker {
        left: 0;
        top: 10px;
        -webkit-transition: none;
        -o-transition: none;
        transition: none;
    }
    .no-touch .logo a:hover span.marker, .no-touch .logo.expanded a:hover span.marker {
        color: rgba(255, 255, 255, 1);
        top: 10px;
    }
    .logo a span.logoText, .logo.expanded a span.logoText {
        top: 14px;
        left: 34px;
    }
    .no-touch .logo a:hover span.logoText, .no-touch .logo.expanded a:hover span.logoText {
        top: 14px;
    }
    .mobAvatar {
        display: block;
    }
    #leftSide {
        top: 50px;
        visibility: hidden;
        opacity: 0;
        margin-left: -87%;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
    }
    #leftSide.expanded {
        width: 87%;
        opacity: 1;
        visibility: visible;
        margin-left: 0;
    }
    .closeLeftSide {
        width: 13%;
        position: absolute;
        top: 50px;
        right: 0;
        z-index: 100;
    }
    .expanded .leftNav ul li {
        width: 100%;
    }
    .expanded .leftNav ul li a {
        width: 100%;
    }
    .expanded .leftNav > ul > li > ul {
        width: 100%;
    }
    .headerNotifyWraper {
        display: none;
    }
    .headerUserWraper {
        height: 50px;
    }
    a.headerUser {
        display: none;
    }
    a.navHandler {
        font-size: 24px;
        padding-top: 8px;
        height: 50px;
        width: 50px;
        color: #fff;
    }
    a.mapHandler {
        display: block;
    }
    .no-touch a.mapHandler:hover {
        color: #c6e4e3;
        text-decoration: none;
    }
    a.userHandler {
        display: block;
    }
    .no-touch a.userHandler:hover {
        color: #c6e4e3;
        text-decoration: none;
    }
    .no-touch a.navHandler:hover {
        background-color: transparent;
        color: #c6e4e3;
        text-decoration: none;
    }
    .leftUserWraper {
        display: none;
    }
    .headerUserWraper .dropdown-menu {
        border-radius: 0;
        border: 0 none;
    }
    .userMenu {
        width: 100%;
    }
    #wrapper {
        margin: 50px 0 0 0;
    }
    #mapView {
        width: 100%;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
    }
    #content {
        overflow-x: hidden;
        overflow-y: scroll;
        background-color: #f3f3f3;
        width: 0%;
        border-top: 1px solid #e8e8e8;
        float: right;
        -webkit-overflow-scrolling: touch;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
    }
    #mapView.min, #mapView.mob-min {
        width: 0%;
    }
    #content.max, #content.mob-max {
        width: 100%;
    }
    #mapView.mob-max {
        width: 100%;
    }
    #content.mob-min {
        width: 0%;
    }
    #mapView.mob-min .mapPlaceholder {
        display: none;
    }
    .carousel-control .glyphicon-chevron-left,
    .carousel-control .glyphicon-chevron-right {
        width: 30px;
        height: 30px;
        margin-top: -15px;
        font-size: 30px;
        line-height: 30px;
    }
    .carousel-control .fa-chevron-left {
        margin-left: -15px;
    }   
    .carousel-control .glyphicon-chevron-right {
        margin-right: -15px;
    }
    .agentAvatarImg {
        width: 20%;
    }
    .leftNav .search {
        background-color: #132120;
        display: block;
        float: none;
        padding: 10px 20px 10px 20px;
    }
    .searchIcon {
        font-size: 16px;
        color: #adc8c7;
        margin-left: 0;
        padding-top: 0;
        line-height: 42px;
    }
    .searchIcon.active {
        color: #fff;
    }
    .search input {
        background-color: #132120;
        color: #fff;
        border: 0 none;
        font-size: 12px;
        margin: 12px 0 0 10px;
        width: 88%;
        padding: 0;
    }
    .search input::-webkit-input-placeholder {
        color: #adc8c7;
    }
    .search input:-moz-placeholder { /* Firefox 18- */
        color: #adc8c7;
    }
    .search input::-moz-placeholder {  /* Firefox 19+ */
        color: #adc8c7;
    }
    .search input:-ms-input-placeholder {  
        color: #adc8c7;
    }
    .table {
        margin-bottom: 0;
    }
    .table-overflow {
        width: 100%;
        overflow-x: scroll;
        overflow-y: hidden;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: -ms-autohiding-scrollbar;
        margin-bottom: 20px;
    }
    .panel .table-overflow {
        margin-bottom: 0;
    }
    .table > thead > tr > th {
        font-size: 10px;
    }
    .table > tbody > tr > td {
        font-size: 11px;
    }
    #hero-container, #hero-container-map {
        height: 592px;
    }
    #home-map {
        height: 592px;
    }
    .home-caption {
        top: 150px;
    }
    .search-panel form {
        text-align: left;
    }
    .home-title {
        font-size: 26px;
        line-height: 30px;
    }
    .featured.carousel .carousel-inner .item .carousel-caption .caption-title {
        font-size: 26px;
        line-height: 30px;
    }
    .home-nav {
        position: absolute;
        top: 76px;
        width: 100%;
        right: 0;
        overflow: hidden;
        z-index: 1100;
        height: 76px;
        float: none;
        background-color: rgba(0, 0, 0, 0);
    }
    .home-nav ul {
        position: absolute;
        top: 0;
        right: -100%;
        float: right;
        padding: 20px;
        z-index: 1100;
    }
    .home-nav.active {
        background-color: rgba(0, 0, 0, 0.50);
    }
    .home-nav.active ul {
        right: 0;
    }
    .blog-nav {
        position: absolute;
        top: 76px;
        width: 100%;
        right: 0;
        overflow: hidden;
        z-index: 1100;
        float: none;
        max-height: 0;
        background-color: #333;
        margin-right: 0;
        padding: 0;
        -webkit-transition: all .2s ease-in-out;
        -o-transition: all .2s ease-in-out;
        transition: all .2s ease-in-out;
    }
    .blog-nav.active {
        max-height: 200px;
    }
    .blog-nav ul {
        float: none;
        padding: 10px 0;
    }
    .blog-nav.active ul {
        margin-right: 0;
    }
    .blog-nav ul li {
        padding: 10px 20px;
        float: none;
        text-align: right;
    }
    .h-text {
        padding: 0;
    }
    #home-testimonials .carousel-inner {
        width: 100%;
        margin: 0;
    }
    .home-testim-avatar {
        width: 60px;
        height: 60px;
    }
    .home-testim {
        margin-left: 70px;
        padding-top: 0;
    }
    .home-testim-text {
        font-size: 13px;
    }
    .home-testim-name {
        font-size: 13px;
    }
    .featured.carousel .carousel-inner .item .carousel-caption .caption-subtitle {
        font-size: 12px;
    }
    .carousel-caption {
        left: 5%;
        right: 5%;
    }
    .p-n-articles a {
        font-size: 14px;
    }
    .pna-title {
        font-size: 9px;
        line-height: 9px;
        letter-spacing: 1px;
    }
    .post-author {
        float: none;
        margin-bottom: 20px;
    }
    .post-share {
        float: none;
        text-align: left;
    }
    .ib-title {
        width: 90%;
    }
    .ib-title span {
        font-size: 16px;
        line-height: 20px;
        padding: 10px;
    }
    .f-p-article {
        float: none;
        border-right: 0 none;
        border-bottom: 1px solid #e8e8e8;
        width: 100%;
    }
    .f-n-article {
        float: none;
        width: 100%;
    }
    .fpna-header {
        font-size: 14px;
        line-height: 18px;
    }
    .notificationsWidget .notification .time {
        width: 0;
    }
    .notificationsWidget .notification .time .indicator {
        left: -5px;
    }
    .notificationsWidget .notification .time .notifyArrow {
        left: 9px;
    }
    .notificationsWidget .notification .notifyContent {
        margin-left: 0;
    }
    .notificationsWidget .notification .notifyContent .notifyBody .notify .name {
        padding-top: 5px;
    }
    .notificationsWidget .notification .notifyContent .notifyBody .notify .message {
        line-height: 24px;
    }
    .notificationsWidget .notification .notifyContent .notifyBody .notify .name .label {
        display: inline !important;
    }
}
@media screen and (max-width: 480px) {
    .agentAvatarImg {
        width: 30%;
    }
    .home-title {
        font-size: 22px;
        line-height: 26px;
    }
    .featured.carousel .carousel-inner .item .carousel-caption .caption-title {
        font-size: 22px;
        line-height: 28px;
    }
    .home-subtitle {
        font-size: 12px;
    }
    .featured.carousel .carousel-inner .item .carousel-caption .caption-subtitle {
        font-size: 11px;
    }
}
</style>

<div class="navbar navbar-inverse navbar-fixed-top headroom " >

    <div class="container">

        <div class="navbar-header ">

            <!-- Button for smallest screens -->

           
            <a class="navbar-brand" href="<?php echo site_url();?>"><img src="<?php echo get_site_logo();?>" alt="Logo" style="height:50px"></a>
 
 <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navbar-offcanvas" data-canvas="body">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="headerUserWraper hidden-sm hidden-md hidden-lg">
                <a href="#" class="userHandler dropdown-toggle" data-toggle="dropdown"><span class="fa fa-user"></span><span class="counter">5</span></a>
                <a href="#" class="headerUser dropdown-toggle" data-toggle="dropdown">
                    <img class="avatar headerAvatar pull-left" src="images/avatar-1.png" alt="John Smith">
                    <div class="userTop pull-right">
                        <span class="headerUserName">John Smith</span> <span class="fa fa-angle-down"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
                <div class="dropdown-menu pull-right userMenu" role="menu">
                    <div class="mobAvatar">
                        <img class="avatar mobAvatarImg" src="images/avatar-1.png" alt="John Smith">
                        <div class="mobAvatarName">John Smith</div>
                    </div>
                    <ul>
                        <li><a href="#"><span class="fa fa-settings"></span>Settings</a></li>
                        <li><a href="profile.html"><span class="fa fa-user"></span>Profile</a></li>
                        <li><a href="#"><span class="icon-bell"></span>Notifications <span class="badge pull-right bg-red">5</span></a></li>
                        <li class="divider"></li>
                        <li><a href="#"><span class="icon-power"></span>Logout</a></li>
                    </ul>
                </div>
            </div>


        </div>

        <div class="navbar-offcanvas offcanvas">



            <ul class="nav navbar-nav pull-left">

                <div class="headerNotifyWraper">
                <a href="#" class="headerNotify dropdown-toggle" data-toggle="dropdown">
                    <span class="notifyIcon icon-bell"></span>
                    <span class="counter">5</span>
                </a>
                <div class="dropdown pull-right notifyMenu" role="menu">
                    <div class="notifyHeader">
                        <span>Notifications</span>
                        <a href="#" class="notifySettings icon-settings"></a>
                        <div class="clearfix"></div>
                    </div>
                    <ul class="notifyList">
                        <li>
                            <a href="#">
                                <img class="avatar pull-left" src="images/avatar-1.png" alt="John Smith">
                                <div class="pulse border-grey"></div>
                                <div class="notify pull-left">
                                    <div class="notifyName">Sed ut perspiciatis unde</div>
                                    <div class="notifyTime">5 minutes ago</div>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="notifyRound notifyRound-red fa fa-envelope-o"></div>
                                <div class="pulse border-red"></div>
                                <div class="notify pull-left">
                                    <div class="notifyName">Lorem Ipsum is simply dummy text</div>
                                    <div class="notifyTime">20 minutes ago</div>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="notifyRound notifyRound-yellow fa fa-heart-o"></div>
                                <div class="pulse border-yellow"></div>
                                <div class="notify pull-left">
                                    <div class="notifyName">It is a long established fact</div>
                                    <div class="notifyTime">2 hours ago</div>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="notifyRound notifyRound-magenta fa fa-paper-plane-o"></div>
                                <div class="pulse border-magenta"></div>
                                <div class="notify pull-left">
                                    <div class="notifyName">There are many variations</div>
                                    <div class="notifyTime">1 day ago</div>
                                </div>
                                <div class="clearfix"></div>
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="notifyAll">See All</a>
                </div>
            </div>




                <?php

                $CI = get_instance();

                $CI->load->model('admin/page_model');

                $CI->page_model->init();

                ?>



                <?php 

                $alias = (isset($alias))?$alias:'';

                foreach ($CI->page_model->get_menu() as $li) 

                {

                    if($li->parent==0)

                        $CI->page_model->render_top_menu($li->id,0,$alias);

                }

                ?>



                <li class="dropdown">

                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                        <?php echo lang_key('type');?> <b class="caret"></b>

                    </a>

                    <ul class="dropdown-menu">

                        <?php

                        $filter_options = array();

                        $this->load->config('realcon');
                        $custom_types = $this->config->item('property_types');
                        if(is_array($custom_types)) foreach ($custom_types as $key => $custom_type) {
                            if($custom_type['title']=='DBC_TYPE_APARTMENT')
                                $filter_options[$custom_type['title']] = 'apartment';
                            else if($custom_type['title']=='DBC_TYPE_HOUSE')
                                $filter_options[$custom_type['title']] = 'house';
                            else if($custom_type['title']=='DBC_TYPE_LAND')
                                $filter_options[$custom_type['title']] = 'land';
                            else if($custom_type['title']=='DBC_TYPE_COMSPACE')
                                $filter_options[$custom_type['title']] = 'com_space';
                            else if($custom_type['title']=='DBC_TYPE_CONDO')
                                $filter_options[$custom_type['title']] = 'condo';
                            else if($custom_type['title']=='DBC_TYPE_VILLA')
                                $filter_options[$custom_type['title']] = 'villa';
                            else
                              $filter_options[$custom_type['title']] = urlencode($custom_type['title']);
                      }

                      foreach ($filter_options as $k=>$v) {

                        ?>

                        <li class="<?php echo is_active_menu('show/type/'.$v);?>">

                            <a href="<?php echo site_url('show/type/'.$v);?>">

                            </i>&nbsp;<?php echo lang_key($k);?>

                        </a>

                    </li>

                    <?php

                }

                ?>

                <li style="border-bottom:1px solid #fff;height:0px;"></li>

                <?php

                $filter_options = array('DBC_PURPOSE_SALE'=>'sale',
                    'DBC_PURPOSE_RENT'=>'rent',
                    'DBC_PURPOSE_BOTH'=>'sale_rent');



                foreach ($filter_options as $k=>$v) {

                    ?>

                    <li class="<?php echo is_active_menu('show/purpose/'.$v);?>">

                        <a href="<?php echo site_url('show/purpose/'.$v);?>">

                        </i>&nbsp;<?php echo lang_key($k);?>

                    </a>

                </li>

                <?php

            }

            ?>

        </ul>    

    </li>    

    

    

                   <!--  <li class="active"><a href="#">Home</a></li>

                    <li><a href="<?php echo site_url('show/detail');?>">Detail</a></li>

                    <li><a href="<?php echo site_url('show/search');?>">Advance Search</a></li>

                    <li><a href="<?php echo site_url('show/list_view');?>">List View</a></li> -->

                    <!--li class="dropdown">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>

                        <ul class="dropdown-menu">

                            <li><a href="sidebar-left.html">Left Sidebar</a></li>

                            <li class="active"><a href="sidebar-right.html">Right Sidebar</a></li>

                        </ul>

                    </li-->

                    <!--li><a href="<?php echo site_url('show/contact');?>">Contact</a></li-->

                    <?php if(!is_loggedin()){?>

                    <?php if(get_settings('realestate_settings','enable_signup','Yes')=='Yes'){?>

                    <li><a class="btn" data-toggle="modal" href="#myModal"><?php echo lang_key('sign_in'); ?></a></li>

                    <li><a class="btn" href="<?php echo site_url('account/signup');?>"><?php echo lang_key('sign_up'); ?></a></li>

                    <?php }?>

                    <?php }else{?>

                    

                    <li class="dropdown" id="secondary-nav">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-comment"></i>

                            <?php 

                            $querys = get_notific(user_session_id()); 
                            
                            $notifiche= count($querys);
                           
                             if ($notifiche > 0){?> 
                            <span class="label label-info"><?= $notifiche; ?></span>
                            <?php } ?>
                        </a>
 <?php 
                            if ($notifiche > 0){
?>
                        <ul class="dropdown-menu" id="secondary-nav">
                           
                               <?php
                                foreach ($querys as $notific) {   

                                    

                                    echo '<li class="">

                                    <a href="'.site_url().'/p/'.get_user_name_by_id($notific['user_id_created_by']).'">

                                    </i> '.get_user_fullname_by_id($notific['user_id_created_by']).' '.lang_key($notific['user_notification_type']).'

                                    </a>

                                    </li>';

                                }
                           
                            

                echo'</ul>';
                 }
                            ?>

                <?php 


                

                if(!is_admin()){?>
               
<li><a href="<?php echo site_url('profile/timeline');?>" ><img style="width: 2em;" src="<?php echo get_profile_photo_by_id(user_session_id(),'thumb');?>" alt="Profile" class="img-responsive-mini"></a></li>
 <li class="dropdown" id="secondary-nav">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo get_user_fullname_by_id(user_session_id()); ?><b class="caret"></b></a>
                        <ul class="dropdown-menu" >
                <li><a class="" href="<?php echo site_url('profile');?>"><?php echo lang_key('Profile'); ?></a></li>
                <li><a class="" href="<?php echo site_url('admin/realestate/allestatesagent');?>"><?php echo lang_key('DBC_AGENT_PANEL'); ?></a></li>

                <?php }else{?>
                
<li><a href="<?php echo site_url('profile/timeline');?>" ><img style="width: 2em;" src="<?php echo get_profile_photo_by_id(user_session_id(),'thumb');?>" alt="Profile" class="img-responsive-mini"></a></li>
 <li class="dropdown" id="secondary-nav">

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo get_user_fullname_by_id(user_session_id()); ?><b class="caret"></b></a>
                        <ul class="dropdown-menu" >
                        <li><a class="" href="<?php echo site_url('profile');?>"><?php echo lang_key('Profile'); ?></a></li>
                <li><a class="" href="<?php echo site_url('admin');?>"><?php echo lang_key('DBC_ADMIN_PANEL'); ?></a></li>

                <?php }?>

                <li><a class="" href="<?php echo site_url('account/logout');?>"><?php echo lang_key('logout'); ?></a></li>
</ul>
                <?php }?>

            </ul>

        </div><!--/.nav-collapse -->

    </div>

</div> 

<!-- /.navbar -->


<script>
$(document).ready(function(){
    $("#secondary-nav").click(function(){
        



        $.ajax({
            type: "POST",
            url: "/condivisi/test/index.php/en/ajax/read_notific",

            success: function(){
              
            }

        });
    });
});


</script>