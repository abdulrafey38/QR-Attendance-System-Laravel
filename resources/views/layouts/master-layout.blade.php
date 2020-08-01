<html>


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    @-webkit-keyframes swing {
        0%, 30%, 50%, 70%, 100% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg); }
        10% {
            -webkit-transform: rotate(10deg);
            transform: rotate(10deg); }
        40% {
            -webkit-transform: rotate(-10deg);
            transform: rotate(-10deg); }
        60% {
            -webkit-transform: rotate(5deg);
            transform: rotate(5deg); }
        80% {
            -webkit-transform: rotate(-5deg);
            transform: rotate(-5deg); } }

    @keyframes swing {
        0%, 30%, 50%, 70%, 100% {
            -webkit-transform: rotate(0deg);
            transform: rotate(0deg); }
        10% {
            -webkit-transform: rotate(10deg);
            transform: rotate(10deg); }
        40% {
            -webkit-transform: rotate(-10deg);
            transform: rotate(-10deg); }
        60% {
            -webkit-transform: rotate(5deg);
            transform: rotate(5deg); }
        80% {
            -webkit-transform: rotate(-5deg);
            transform: rotate(-5deg); } }

    @-webkit-keyframes sonar {
        0% {
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
            opacity: 1; }
        100% {
            -webkit-transform: scale(2);
            transform: scale(2);
            opacity: 0; } }

    @keyframes sonar {
        0% {
            -webkit-transform: scale(0.9);
            transform: scale(0.9);
            opacity: 1; }
        100% {
            -webkit-transform: scale(2);
            transform: scale(2);
            opacity: 0; } }

    .sidebar-wrapper {
        width: 280px;
        height: 100%;
        max-height: 100%;
        position: fixed;
        top: 0;
        left: -280px;
        z-index: 999;
        -webkit-transition: left .3s ease, width .3s ease;
        transition: left .3s ease, width .3s ease; }
    .sidebar-wrapper ul {
        list-style-type: none;
        padding: 0;
        margin: 0; }
    .sidebar-wrapper a {
        text-decoration: none;
        -webkit-transition: color .3s ease;
        transition: color .3s ease; }
    .sidebar-wrapper .sidebar-item {
        -webkit-transition: all .3s linear;
        transition: all .3s linear; }
    .sidebar-wrapper .sidebar-content {
        max-height: calc(100% -35px);
        height: calc(100% - 35px);
        overflow-y: scroll;
        position: relative; }
    .sidebar-wrapper .sidebar-content.desktop {
        overflow-y: hidden; }
    .sidebar-wrapper .badge {
        border-radius: 0; }

    .sidebar-bg .sidebar-wrapper {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat; }
    .sidebar-bg .sidebar-wrapper:before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0; }

    .sidebar-wrapper .sidebar-brand {
        padding: 1rem 1.2rem;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        height: 55px; }
    .sidebar-wrapper .sidebar-brand > a {
        text-transform: uppercase;
        font-weight: bold;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis; }

    .sidebar-wrapper .sidebar-header {
        padding: 20px;
        overflow: hidden; }
    .sidebar-wrapper .sidebar-header .user-pic {
        width: 60px;
        padding: 2px;
        margin-right: 15px;
        overflow: hidden; }
    .sidebar-wrapper .sidebar-header .user-pic img {
        -o-object-fit: cover;
        object-fit: cover;
        height: 100%;
        width: 100%; }
    .sidebar-wrapper .sidebar-header .user-info {
        overflow: hidden; }
    .sidebar-wrapper .sidebar-header .user-info > span {
        display: block;
        white-space: nowrap;
        text-overflow: ellipsis; }
    .sidebar-wrapper .sidebar-header .user-info .user-role {
        font-size: 12px; }
    .sidebar-wrapper .sidebar-header .user-info .user-status {
        font-size: 11px;
        margin-top: 4px; }
    .sidebar-wrapper .sidebar-header .user-info .user-status i {
        font-size: 8px;
        margin-right: 4px;
        color: #5cb85c; }

    .sidebar-wrapper .sidebar-search > div {
        padding: 1rem 1.2rem; }

    .sidebar-wrapper .sidebar-search input {
        border-radius: 0; }

    .sidebar-wrapper .sidebar-search .input-group {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap; }

    .sidebar-wrapper .sidebar-search .input-group-append .input-group-text {
        border-radius: 0;
        border-left: 0; }

    .sidebar-wrapper .sidebar-menu {
        padding-bottom: 10px; }
    .sidebar-wrapper .sidebar-menu .header-menu span {
        font-weight: bold;
        font-size: 14px;
        padding: 15px 20px 5px 20px;
        display: inline-block; }
    .sidebar-wrapper .sidebar-menu ul li a {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        text-decoration: none;
        position: relative;
        padding: 8px 30px 8px 20px;
        width: 100%; }
    .sidebar-wrapper .sidebar-menu ul li a:hover > i::before {
        display: inline-block;
        -webkit-animation: swing ease-in-out .5s 1 alternate;
        animation: swing ease-in-out .5s 1 alternate; }
    .sidebar-wrapper .sidebar-menu ul li a i {
        margin-right: 10px;
        font-size: 12px;
        width: 35px;
        height: 35px;
        line-height: 35px;
        text-align: center;
        -ms-flex-negative: 0;
        flex-shrink: 0; }
    .sidebar-wrapper .sidebar-menu ul li a .menu-text {
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        white-space: nowrap;
        text-overflow: ellipsis;
        -ms-flex-negative: 1;
        flex-shrink: 1;
        overflow: hidden; }
    .sidebar-wrapper .sidebar-menu .sidebar-dropdown > a:after {
        font-family: "Font Awesome 5 Free";
        font-weight: 900;
        content: "\f105";
        display: inline-block;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-align: center;
        background: 0 0;
        position: absolute;
        right: 15px;
        top: 14px;
        -webkit-transition: -webkit-transform .3s ease;
        transition: -webkit-transform .3s ease;
        transition: transform .3s ease;
        transition: transform .3s ease, -webkit-transform .3s ease; }
    .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu {
        display: none; }
    .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu ul {
        padding: 5px 0; }
    .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li {
        padding-left: 25px;
        font-size: 13px; }
    .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a {
        overflow: hidden;
        white-space: nowrap;
        text-overflow: ellipsis; }
    .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a:before {
        content: "\f111";
        font-family: "Font Awesome 5 Free";
        font-weight: 400;
        font-style: normal;
        display: inline-block;
        text-align: center;
        text-decoration: none;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        margin-right: 10px;
        font-size: 8px; }
    .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a .badge,
    .sidebar-wrapper .sidebar-menu .sidebar-dropdown .sidebar-submenu li a .label {
        margin-left: auto; }
    .sidebar-wrapper .sidebar-menu .sidebar-dropdown.active > a:after {
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
        right: 15px; }

    .sidebar-wrapper .sidebar-footer {
        position: absolute;
        width: 100%;
        bottom: 0;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex; }
    .sidebar-wrapper .sidebar-footer > div {
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        text-align: center;
        height: 35px;
        line-height: 35px;
        position: static;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex; }
    .sidebar-wrapper .sidebar-footer > div > a {
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1; }
    .sidebar-wrapper .sidebar-footer > div a .notification {
        position: absolute;
        top: 0; }
    .sidebar-wrapper .sidebar-footer > div.pinned-footer {
        display: none; }
    .sidebar-wrapper .sidebar-footer .dropdown-menu {
        bottom: 36px;
        left: 0 !important;
        top: initial !important;
        right: 0;
        -webkit-transform: none !important;
        transform: none !important;
        border-radius: 0;
        font-size: .9rem; }
    .sidebar-wrapper .sidebar-footer .messages .dropdown-item {
        padding: .25rem 1rem; }
    .sidebar-wrapper .sidebar-footer .messages .messages-header {
        padding: 0 1rem; }
    .sidebar-wrapper .sidebar-footer .messages .message-content {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex; }
    .sidebar-wrapper .sidebar-footer .messages .message-content .pic {
        width: 40px;
        height: 40px;
        overflow: hidden; }
    .sidebar-wrapper .sidebar-footer .messages .message-content .pic img {
        -o-object-fit: cover;
        object-fit: cover;
        height: 100%; }
    .sidebar-wrapper .sidebar-footer .messages .message-content .content {
        line-height: 1.6;
        padding-left: 5px;
        width: calc(100% - 40px); }
    .sidebar-wrapper .sidebar-footer .messages .message-content .content .message-title {
        font-size: 13px; }
    .sidebar-wrapper .sidebar-footer .messages .message-content .content .message-detail {
        font-size: 12px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis; }
    .sidebar-wrapper .sidebar-footer .notifications .dropdown-item {
        padding: .25rem 1rem; }
    .sidebar-wrapper .sidebar-footer .notifications .notifications-header {
        padding: 0 1rem; }
    .sidebar-wrapper .sidebar-footer .notifications .notification-content {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex; }
    .sidebar-wrapper .sidebar-footer .notifications .notification-content .icon {
        width: 40px;
        height: 40px; }
    .sidebar-wrapper .sidebar-footer .notifications .notification-content .icon i {
        width: 35px;
        height: 35px;
        text-align: center;
        line-height: 35px; }
    .sidebar-wrapper .sidebar-footer .notifications .notification-content .content {
        line-height: 1.6;
        padding-left: 5px;
        width: calc(100% - 40px); }
    .sidebar-wrapper .sidebar-footer .notifications .notification-content .content .notification-time {
        font-size: .7rem;
        color: #828282; }
    .sidebar-wrapper .sidebar-footer .notifications .notification-content .content .notification-detail {
        font-size: 12px;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis; }
    .sidebar-wrapper .sidebar-footer .badge-sonar {
        display: inline-block;
        background: #d86703;
        border-radius: 50%;
        height: 8px;
        width: 8px;
        position: absolute;
        top: 0; }
    .sidebar-wrapper .sidebar-footer .badge-sonar:after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        border: 2px solid #d86703;
        opacity: 0;
        border-radius: 50%;
        width: 100%;
        height: 100%;
        -webkit-animation: sonar 1.5s infinite;
        animation: sonar 1.5s infinite; }

    body {
        font-size: .9rem; }

    /*----------------page-wrapper----------------*/
    .page-wrapper {
        height: 100vh; }
    .page-wrapper .theme {
        width: 40px;
        height: 40px;
        display: inline-block;
        margin: 2px;
        background-size: cover; }
    .page-wrapper .theme.selected {
        border: 2px solid #00c7ff; }
    .page-wrapper .theme.default-theme {
        background: #1d1d1d; }
    .page-wrapper .theme.chiller-theme {
        background: #374140; }
    .page-wrapper .theme.legacy-theme {
        background: #2e333c; }
    .page-wrapper .theme.ice-theme {
        background: #3a4d56; }
    .page-wrapper .theme.cool-theme {
        background: #46454c; }
    .page-wrapper .theme.light-theme {
        background: #ececec; }
    .page-wrapper .page-content {
        display: inline-block;
        width: 100%;
        -webkit-transition: padding-left .3s ease;
        transition: padding-left .3s ease;
        overflow-x: hidden; }
    .page-wrapper .page-content .overlay {
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 998;
        background: #000;
        opacity: .5;
        display: none; }
    .page-wrapper.toggled .sidebar-wrapper {
        left: 0px; }
    @media screen and (min-width: 768px) {
        .page-wrapper.toggled .page-content {
            padding-left: 280px; } }
    @media screen and (max-width: 768px) {
        .page-wrapper.toggled .page-content .overlay {
            display: block; } }
    @media screen and (min-width: 768px) {
        .page-wrapper.toggled.pinned .page-content {
            padding-left: 80px; } }
    .page-wrapper.pinned:not(.sidebar-hovered) .sidebar-wrapper {
        width: 80px; }
    .page-wrapper.pinned:not(.sidebar-hovered) .sidebar-wrapper .sidebar-header {
        padding: 10px; }
    .page-wrapper.pinned:not(.sidebar-hovered) .sidebar-wrapper .sidebar-header .user-pic {
        margin: 0 auto;
        width: 50px;
        float: none; }
    .page-wrapper.pinned:not(.sidebar-hovered) .sidebar-wrapper .sidebar-header .user-pic img {
        margin: auto; }
    .page-wrapper.pinned:not(.sidebar-hovered) .sidebar-wrapper .sidebar-search input,
    .page-wrapper.pinned:not(.sidebar-hovered) .sidebar-wrapper .sidebar-header .user-info,
    .page-wrapper.pinned:not(.sidebar-hovered) .sidebar-wrapper .sidebar-menu .header-menu,
    .page-wrapper.pinned:not(.sidebar-hovered) .sidebar-wrapper .sidebar-menu .sidebar-submenu,
    .page-wrapper.pinned:not(.sidebar-hovered) .sidebar-wrapper .sidebar-menu ul > li > a > span,
    .page-wrapper.pinned:not(.sidebar-hovered) .sidebar-wrapper .sidebar-menu ul > li > a::after,
    .page-wrapper.pinned:not(.sidebar-hovered) .sidebar-wrapper .sidebar-footer > div:not(.pinned-footer) {
        display: none !important; }
    .page-wrapper.pinned:not(.sidebar-hovered) .sidebar-wrapper .sidebar-search .input-group-text {
        height: 35px; }
    .page-wrapper.pinned:not(.sidebar-hovered) .sidebar-wrapper .sidebar-footer > div.pinned-footer {
        display: block; }
    .page-wrapper .mCSB_scrollTools {
        width: 6px; }
    .page-wrapper .mCSB_inside > .mCSB_container {
        margin-right: 0px; }

    /*----------sidebar background images --------------*/
    .sidebar-bg.bg1 .sidebar-wrapper {
        background-image: url("https://lahore.comsats.edu.pk/Images/gallery/Campus/2.jpg"); }

    .sidebar-bg.bg2 .sidebar-wrapper {
        background-image: url("https://lahore.comsats.edu.pk/Images/gallery/Campus/2.jpg"); }

    .sidebar-bg.bg3 .sidebar-wrapper {
        background-image: url("https://lahore.comsats.edu.pk/Images/gallery/Campus/2.jpg"); }

    .sidebar-bg.bg4 .sidebar-wrapper {
        background-image: url("https://lahore.comsats.edu.pk/Images/gallery/Campus/2.jpg"); }

    [data-bg="bg1"] {
        background-image: url("https://lahore.comsats.edu.pk/Images/gallery/Campus/2.jpg"); }

    [data-bg="bg2"] {
        background-image: url("https://lahore.comsats.edu.pk/Images/gallery/Campus/2.jpg"); }

    [data-bg="bg3"] {
        background-image: url("https://lahore.comsats.edu.pk/Images/gallery/Campus/2.jpg"); }

    [data-bg="bg4"] {
        background-image: url("https://lahore.comsats.edu.pk/Images/gallery/Campus/2.jpg"); }

    /*---- border-radius ------*/
    .border-radius-on .sidebar-header .user-pic {
        border-radius: 12px; }

    .border-radius-on .badge {
        border-radius: 8px; }

    .border-radius-on .sidebar-menu ul li i {
        border-radius: 4px; }

    .border-radius-on .sidebar-footer .dropdown-menu {
        border-top-left-radius: 4px;
        border-top-right-radius: 4px; }
    .border-radius-on .sidebar-footer .dropdown-menu .notification-content i,
    .border-radius-on .sidebar-footer .dropdown-menu .message-content .pic {
        border-radius: 4px; }

    .border-radius-on .sidebar-search input {
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px; }

    .border-radius-on .sidebar-search .input-group-append .input-group-text {
        border-top-right-radius: 4px;
        border-bottom-right-radius: 4px; }

    .default-theme .sidebar-wrapper {
        background-color: #1d1d1d; }
    .default-theme .sidebar-wrapper .sidebar-item {
        border-top: 1px solid #2b2b2b; }
    .default-theme .sidebar-wrapper .sidebar-item:first-child {
        border-top: none; }
    .default-theme .sidebar-wrapper a:not(.dropdown-item),
    .default-theme .sidebar-wrapper .sidebar-header,
    .default-theme .sidebar-wrapper .sidebar-search input,
    .default-theme .sidebar-wrapper .sidebar-search i {
        color: #adadad; }
    .default-theme .sidebar-wrapper a:not(.dropdown-item):hover,
    .default-theme .sidebar-wrapper .sidebar-menu li.active > a {
        color: #d8d8d8; }
    .default-theme .sidebar-wrapper .sidebar-search input.search-menu,
    .default-theme .sidebar-wrapper .sidebar-search .input-group-text {
        background-color: #2b2b2b;
        border: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        margin-left: 1px; }
    .default-theme .sidebar-wrapper .sidebar-menu a:hover i,
    .default-theme .sidebar-wrapper .sidebar-menu a:hover:before,
    .default-theme .sidebar-wrapper .sidebar-menu li.active a i {
        color: #22ff16; }
    .default-theme .sidebar-wrapper .sidebar-menu ul li a i {
        background-color: #2b2b2b; }
    .default-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown div {
        background-color: #2b2b2b; }
    .default-theme .sidebar-wrapper .sidebar-menu .header-menu span {
        color: #868686; }
    .default-theme .sidebar-wrapper .sidebar-footer {
        background-color: #2b2b2b;
        -webkit-box-shadow: 0px -1px 5px #1d1d1d;
        box-shadow: 0px -1px 5px #1d1d1d;
        border-top: 1px solid #2b2b2b; }
    .default-theme .sidebar-wrapper .sidebar-footer > div:first-child {
        border-left: none; }
    .default-theme .sidebar-wrapper .sidebar-footer > div:last-child {
        border-right: none; }

    .default-theme.toggled #close-sidebar {
        color: #adadad; }

    .default-theme.toggled #close-sidebar:hover {
        color: #d8d8d8; }

    .default-theme .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
    .default-theme .mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
    .default-theme .mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar {
        background-color: #525965;
        border-radius: 0; }

    .default-theme .mCSB_scrollTools .mCSB_draggerRail {
        background-color: transparent; }

    .default-theme.sidebar-bg .sidebar-wrapper:before {
        background-color: rgba(42, 42, 42, 0.9); }

    .default-theme.sidebar-bg .sidebar-wrapper a:not(.dropdown-item),
    .default-theme.sidebar-bg .sidebar-wrapper .sidebar-header,
    .default-theme.sidebar-bg .sidebar-wrapper .sidebar-search input,
    .default-theme.sidebar-bg .sidebar-wrapper .sidebar-search i {
        color: #c7c7c7; }

    .default-theme.sidebar-bg .sidebar-wrapper a:not(.dropdown-item):hover,
    .default-theme.sidebar-bg .sidebar-wrapper .sidebar-menu li.active > a {
        color: #f2f2f2; }

    .default-theme.sidebar-bg .sidebar-wrapper .sidebar-item {
        border-color: #454545; }

    .default-theme.sidebar-bg .sidebar-wrapper .sidebar-search input.search-menu,
    .default-theme.sidebar-bg .sidebar-wrapper .sidebar-search .input-group-text {
        background-color: rgba(81, 81, 81, 0.5); }

    .default-theme.sidebar-bg .sidebar-wrapper .sidebar-menu .sidebar-dropdown div {
        background-color: rgba(81, 81, 81, 0.5); }

    .default-theme.sidebar-bg .sidebar-wrapper .sidebar-menu ul li a i {
        background-color: rgba(81, 81, 81, 0.5); }

    .default-theme.sidebar-bg .sidebar-wrapper .sidebar-footer {
        background-color: rgba(56, 56, 56, 0.5);
        -webkit-box-shadow: 0px -1px 5px rgba(29, 29, 29, 0.8);
        box-shadow: 0px -1px 5px rgba(29, 29, 29, 0.8);
        border-top: 1px solid #383838; }

    .chiller-theme .sidebar-wrapper {
        background-color: #2A2C2B; }
    .chiller-theme .sidebar-wrapper .sidebar-item {
        border-top: 1px solid #374140; }
    .chiller-theme .sidebar-wrapper .sidebar-item:first-child {
        border-top: none; }
    .chiller-theme .sidebar-wrapper a:not(.dropdown-item),
    .chiller-theme .sidebar-wrapper .sidebar-header,
    .chiller-theme .sidebar-wrapper .sidebar-search input,
    .chiller-theme .sidebar-wrapper .sidebar-search i {
        color: #D9CB9E; }
    .chiller-theme .sidebar-wrapper a:not(.dropdown-item):hover,
    .chiller-theme .sidebar-wrapper .sidebar-menu li.active > a {
        color: #ffe79a; }
    .chiller-theme .sidebar-wrapper .sidebar-search input.search-menu,
    .chiller-theme .sidebar-wrapper .sidebar-search .input-group-text {
        background-color: #374140;
        border: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        margin-left: 1px; }
    .chiller-theme .sidebar-wrapper .sidebar-menu a:hover i,
    .chiller-theme .sidebar-wrapper .sidebar-menu a:hover:before,
    .chiller-theme .sidebar-wrapper .sidebar-menu li.active a i {
        color: #ffbe00; }
    .chiller-theme .sidebar-wrapper .sidebar-menu ul li a i {
        background-color: #374140; }
    .chiller-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown div {
        background-color: #374140; }
    .chiller-theme .sidebar-wrapper .sidebar-menu .header-menu span {
        color: #a29464; }
    .chiller-theme .sidebar-wrapper .sidebar-footer {
        background-color: #374140;
        -webkit-box-shadow: 0px -1px 5px #2A2C2B;
        box-shadow: 0px -1px 5px #2A2C2B;
        border-top: 1px solid #374140; }
    .chiller-theme .sidebar-wrapper .sidebar-footer > div:first-child {
        border-left: none; }
    .chiller-theme .sidebar-wrapper .sidebar-footer > div:last-child {
        border-right: none; }

    .chiller-theme.toggled #close-sidebar {
        color: #D9CB9E; }

    .chiller-theme.toggled #close-sidebar:hover {
        color: #ffe79a; }

    .chiller-theme .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
    .chiller-theme .mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
    .chiller-theme .mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar {
        background-color: #525965;
        border-radius: 0; }

    .chiller-theme .mCSB_scrollTools .mCSB_draggerRail {
        background-color: transparent; }

    .chiller-theme.sidebar-bg .sidebar-wrapper:before {
        background-color: rgba(54, 57, 56, 0.9); }

    .chiller-theme.sidebar-bg .sidebar-wrapper a:not(.dropdown-item),
    .chiller-theme.sidebar-bg .sidebar-wrapper .sidebar-header,
    .chiller-theme.sidebar-bg .sidebar-wrapper .sidebar-search input,
    .chiller-theme.sidebar-bg .sidebar-wrapper .sidebar-search i {
        color: #e7dfc3; }

    .chiller-theme.sidebar-bg .sidebar-wrapper a:not(.dropdown-item):hover,
    .chiller-theme.sidebar-bg .sidebar-wrapper .sidebar-menu li.active > a {
        color: #fff3cd; }

    .chiller-theme.sidebar-bg .sidebar-wrapper .sidebar-item {
        border-color: #4e5d5b; }

    .chiller-theme.sidebar-bg .sidebar-wrapper .sidebar-search input.search-menu,
    .chiller-theme.sidebar-bg .sidebar-wrapper .sidebar-search .input-group-text {
        background-color: rgba(90, 106, 105, 0.5); }

    .chiller-theme.sidebar-bg .sidebar-wrapper .sidebar-menu .sidebar-dropdown div {
        background-color: rgba(90, 106, 105, 0.5); }

    .chiller-theme.sidebar-bg .sidebar-wrapper .sidebar-menu ul li a i {
        background-color: rgba(90, 106, 105, 0.5); }

    .chiller-theme.sidebar-bg .sidebar-wrapper .sidebar-footer {
        background-color: rgba(67, 79, 78, 0.5);
        -webkit-box-shadow: 0px -1px 5px rgba(42, 44, 43, 0.8);
        box-shadow: 0px -1px 5px rgba(42, 44, 43, 0.8);
        border-top: 1px solid #434f4e; }

    .legacy-theme .sidebar-wrapper {
        background-color: #1e2229; }
    .legacy-theme .sidebar-wrapper .sidebar-item {
        border-top: 1px solid #2e333c; }
    .legacy-theme .sidebar-wrapper .sidebar-item:first-child {
        border-top: none; }
    .legacy-theme .sidebar-wrapper a:not(.dropdown-item),
    .legacy-theme .sidebar-wrapper .sidebar-header,
    .legacy-theme .sidebar-wrapper .sidebar-search input,
    .legacy-theme .sidebar-wrapper .sidebar-search i {
        color: #818896; }
    .legacy-theme .sidebar-wrapper a:not(.dropdown-item):hover,
    .legacy-theme .sidebar-wrapper .sidebar-menu li.active > a {
        color: #b8bfce; }
    .legacy-theme .sidebar-wrapper .sidebar-search input.search-menu,
    .legacy-theme .sidebar-wrapper .sidebar-search .input-group-text {
        background-color: #2e333c;
        border: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        margin-left: 1px; }
    .legacy-theme .sidebar-wrapper .sidebar-menu a:hover i,
    .legacy-theme .sidebar-wrapper .sidebar-menu a:hover:before,
    .legacy-theme .sidebar-wrapper .sidebar-menu li.active a i {
        color: #16c7ff; }
    .legacy-theme .sidebar-wrapper .sidebar-menu ul li a i {
        background-color: #2e333c; }
    .legacy-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown div {
        background-color: #2e333c; }
    .legacy-theme .sidebar-wrapper .sidebar-menu .header-menu span {
        color: #646e80; }
    .legacy-theme .sidebar-wrapper .sidebar-footer {
        background-color: #22262d;
        -webkit-box-shadow: 0px -1px 5px #16191f;
        box-shadow: 0px -1px 5px #16191f;
        border-top: 1px solid #2e333c; }
    .legacy-theme .sidebar-wrapper .sidebar-footer > div:first-child {
        border-left: none; }
    .legacy-theme .sidebar-wrapper .sidebar-footer > div:last-child {
        border-right: none; }

    .legacy-theme.toggled #close-sidebar {
        color: #818896; }

    .legacy-theme.toggled #close-sidebar:hover {
        color: #b8bfce; }

    .legacy-theme .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
    .legacy-theme .mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
    .legacy-theme .mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar {
        background-color: #525965;
        border-radius: 0; }

    .legacy-theme .mCSB_scrollTools .mCSB_draggerRail {
        background-color: transparent; }

    .legacy-theme.sidebar-bg .sidebar-wrapper:before {
        background-color: rgba(41, 46, 56, 0.9); }

    .legacy-theme.sidebar-bg .sidebar-wrapper a:not(.dropdown-item),
    .legacy-theme.sidebar-bg .sidebar-wrapper .sidebar-header,
    .legacy-theme.sidebar-bg .sidebar-wrapper .sidebar-search input,
    .legacy-theme.sidebar-bg .sidebar-wrapper .sidebar-search i {
        color: #9da2ad; }

    .legacy-theme.sidebar-bg .sidebar-wrapper a:not(.dropdown-item):hover,
    .legacy-theme.sidebar-bg .sidebar-wrapper .sidebar-menu li.active > a {
        color: #d6dae3; }

    .legacy-theme.sidebar-bg .sidebar-wrapper .sidebar-item {
        border-color: #444c59; }

    .legacy-theme.sidebar-bg .sidebar-wrapper .sidebar-search input.search-menu,
    .legacy-theme.sidebar-bg .sidebar-wrapper .sidebar-search .input-group-text {
        background-color: rgba(79, 88, 103, 0.5); }

    .legacy-theme.sidebar-bg .sidebar-wrapper .sidebar-menu .sidebar-dropdown div {
        background-color: rgba(79, 88, 103, 0.5); }

    .legacy-theme.sidebar-bg .sidebar-wrapper .sidebar-menu ul li a i {
        background-color: rgba(79, 88, 103, 0.5); }

    .legacy-theme.sidebar-bg .sidebar-wrapper .sidebar-footer {
        background-color: rgba(45, 50, 60, 0.5);
        -webkit-box-shadow: 0px -1px 5px rgba(22, 25, 31, 0.8);
        box-shadow: 0px -1px 5px rgba(22, 25, 31, 0.8);
        border-top: 1px solid #393f4a; }

    .cool-theme .sidebar-wrapper {
        background-color: #38373D; }
    .cool-theme .sidebar-wrapper .sidebar-item {
        border-top: 1px solid #46454c; }
    .cool-theme .sidebar-wrapper .sidebar-item:first-child {
        border-top: none; }
    .cool-theme .sidebar-wrapper a:not(.dropdown-item),
    .cool-theme .sidebar-wrapper .sidebar-header,
    .cool-theme .sidebar-wrapper .sidebar-search input,
    .cool-theme .sidebar-wrapper .sidebar-search i {
        color: #918F9E; }
    .cool-theme .sidebar-wrapper a:not(.dropdown-item):hover,
    .cool-theme .sidebar-wrapper .sidebar-menu li.active > a {
        color: #b3b8c1; }
    .cool-theme .sidebar-wrapper .sidebar-search input.search-menu,
    .cool-theme .sidebar-wrapper .sidebar-search .input-group-text {
        background-color: #46454c;
        border: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        margin-left: 1px; }
    .cool-theme .sidebar-wrapper .sidebar-menu a:hover i,
    .cool-theme .sidebar-wrapper .sidebar-menu a:hover:before,
    .cool-theme .sidebar-wrapper .sidebar-menu li.active a i {
        color: #fe6fff; }
    .cool-theme .sidebar-wrapper .sidebar-menu ul li a i {
        background-color: #46454c; }
    .cool-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown div {
        background-color: #46454c; }
    .cool-theme .sidebar-wrapper .sidebar-menu .header-menu span {
        color: #747479; }
    .cool-theme .sidebar-wrapper .sidebar-footer {
        background-color: #414046;
        -webkit-box-shadow: 0px -1px 5px #2a292d;
        box-shadow: 0px -1px 5px #2a292d;
        border-top: 1px solid #46454c; }
    .cool-theme .sidebar-wrapper .sidebar-footer > div:first-child {
        border-left: none; }
    .cool-theme .sidebar-wrapper .sidebar-footer > div:last-child {
        border-right: none; }

    .cool-theme.toggled #close-sidebar {
        color: #918F9E; }

    .cool-theme.toggled #close-sidebar:hover {
        color: #b3b8c1; }

    .cool-theme .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
    .cool-theme .mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
    .cool-theme .mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar {
        background-color: #918F9E;
        border-radius: 0; }

    .cool-theme .mCSB_scrollTools .mCSB_draggerRail {
        background-color: transparent; }

    .cool-theme.sidebar-bg .sidebar-wrapper:before {
        background-color: rgba(68, 67, 74, 0.9); }

    .cool-theme.sidebar-bg .sidebar-wrapper a:not(.dropdown-item),
    .cool-theme.sidebar-bg .sidebar-wrapper .sidebar-header,
    .cool-theme.sidebar-bg .sidebar-wrapper .sidebar-search input,
    .cool-theme.sidebar-bg .sidebar-wrapper .sidebar-search i {
        color: #acaab6; }

    .cool-theme.sidebar-bg .sidebar-wrapper a:not(.dropdown-item):hover,
    .cool-theme.sidebar-bg .sidebar-wrapper .sidebar-menu li.active > a {
        color: #cfd2d8; }

    .cool-theme.sidebar-bg .sidebar-wrapper .sidebar-item {
        border-color: #5f5d67; }

    .cool-theme.sidebar-bg .sidebar-wrapper .sidebar-search input.search-menu,
    .cool-theme.sidebar-bg .sidebar-wrapper .sidebar-search .input-group-text {
        background-color: rgba(107, 105, 116, 0.5); }

    .cool-theme.sidebar-bg .sidebar-wrapper .sidebar-menu .sidebar-dropdown div {
        background-color: rgba(107, 105, 116, 0.5); }

    .cool-theme.sidebar-bg .sidebar-wrapper .sidebar-menu ul li a i {
        background-color: rgba(107, 105, 116, 0.5); }

    .cool-theme.sidebar-bg .sidebar-wrapper .sidebar-footer {
        background-color: rgba(77, 76, 83, 0.5);
        -webkit-box-shadow: 0px -1px 5px rgba(42, 41, 45, 0.8);
        box-shadow: 0px -1px 5px rgba(42, 41, 45, 0.8);
        border-top: 1px solid #525159; }

    .ice-theme .sidebar-wrapper {
        background-color: #2B3A42; }
    .ice-theme .sidebar-wrapper .sidebar-item {
        border-top: 1px solid #3a4d56; }
    .ice-theme .sidebar-wrapper .sidebar-item:first-child {
        border-top: none; }
    .ice-theme .sidebar-wrapper a:not(.dropdown-item),
    .ice-theme .sidebar-wrapper .sidebar-header,
    .ice-theme .sidebar-wrapper .sidebar-search input,
    .ice-theme .sidebar-wrapper .sidebar-search i {
        color: #9eb7c3; }
    .ice-theme .sidebar-wrapper a:not(.dropdown-item):hover,
    .ice-theme .sidebar-wrapper .sidebar-menu li.active > a {
        color: #EFEFEF; }
    .ice-theme .sidebar-wrapper .sidebar-search input.search-menu,
    .ice-theme .sidebar-wrapper .sidebar-search .input-group-text {
        background-color: #3a4d56;
        border: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        margin-left: 1px; }
    .ice-theme .sidebar-wrapper .sidebar-menu a:hover i,
    .ice-theme .sidebar-wrapper .sidebar-menu a:hover:before,
    .ice-theme .sidebar-wrapper .sidebar-menu li.active a i {
        color: #38fbc7; }
    .ice-theme .sidebar-wrapper .sidebar-menu ul li a i {
        background-color: #3a4d56; }
    .ice-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown div {
        background-color: #3a4d56; }
    .ice-theme .sidebar-wrapper .sidebar-menu .header-menu span {
        color: #6c7b88; }
    .ice-theme .sidebar-wrapper .sidebar-footer {
        background-color: #2f3f48;
        -webkit-box-shadow: 0px -1px 5px #2b3a42;
        box-shadow: 0px -1px 5px #2b3a42;
        border-top: 1px solid #3a4d56; }
    .ice-theme .sidebar-wrapper .sidebar-footer > div:first-child {
        border-left: none; }
    .ice-theme .sidebar-wrapper .sidebar-footer > div:last-child {
        border-right: none; }

    .ice-theme.toggled #close-sidebar {
        color: #9eb7c3; }

    .ice-theme.toggled #close-sidebar:hover {
        color: #EFEFEF; }

    .ice-theme .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
    .ice-theme .mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
    .ice-theme .mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar {
        background-color: #8998a5;
        border-radius: 0; }

    .ice-theme .mCSB_scrollTools .mCSB_draggerRail {
        background-color: transparent; }

    .ice-theme.sidebar-bg .sidebar-wrapper:before {
        background-color: rgba(53, 72, 81, 0.9); }

    .ice-theme.sidebar-bg .sidebar-wrapper a:not(.dropdown-item),
    .ice-theme.sidebar-bg .sidebar-wrapper .sidebar-header,
    .ice-theme.sidebar-bg .sidebar-wrapper .sidebar-search input,
    .ice-theme.sidebar-bg .sidebar-wrapper .sidebar-search i {
        color: #beced6; }

    .ice-theme.sidebar-bg .sidebar-wrapper a:not(.dropdown-item):hover,
    .ice-theme.sidebar-bg .sidebar-wrapper .sidebar-menu li.active > a {
        color: white; }

    .ice-theme.sidebar-bg .sidebar-wrapper .sidebar-item {
        border-color: #4f6874; }

    .ice-theme.sidebar-bg .sidebar-wrapper .sidebar-search input.search-menu,
    .ice-theme.sidebar-bg .sidebar-wrapper .sidebar-search .input-group-text {
        background-color: rgba(89, 118, 132, 0.5); }

    .ice-theme.sidebar-bg .sidebar-wrapper .sidebar-menu .sidebar-dropdown div {
        background-color: rgba(89, 118, 132, 0.5); }

    .ice-theme.sidebar-bg .sidebar-wrapper .sidebar-menu ul li a i {
        background-color: rgba(89, 118, 132, 0.5); }

    .ice-theme.sidebar-bg .sidebar-wrapper .sidebar-footer {
        background-color: rgba(57, 77, 87, 0.5);
        -webkit-box-shadow: 0px -1px 5px rgba(43, 58, 66, 0.8);
        box-shadow: 0px -1px 5px rgba(43, 58, 66, 0.8);
        border-top: 1px solid #445b65; }

    .light-theme .sidebar-wrapper {
        background-color: #ececec; }
    .light-theme .sidebar-wrapper .sidebar-item {
        border-top: 1px solid #f9f9f9; }
    .light-theme .sidebar-wrapper .sidebar-item:first-child {
        border-top: none; }
    .light-theme .sidebar-wrapper a:not(.dropdown-item),
    .light-theme .sidebar-wrapper .sidebar-header,
    .light-theme .sidebar-wrapper .sidebar-search input,
    .light-theme .sidebar-wrapper .sidebar-search i {
        color: #74726E; }
    .light-theme .sidebar-wrapper a:not(.dropdown-item):hover,
    .light-theme .sidebar-wrapper .sidebar-menu li.active > a {
        color: #424242; }
    .light-theme .sidebar-wrapper .sidebar-search input.search-menu,
    .light-theme .sidebar-wrapper .sidebar-search .input-group-text {
        background-color: #f9f9f9;
        border: none;
        -webkit-box-shadow: none;
        box-shadow: none;
        margin-left: 1px; }
    .light-theme .sidebar-wrapper .sidebar-menu a:hover i,
    .light-theme .sidebar-wrapper .sidebar-menu a:hover:before,
    .light-theme .sidebar-wrapper .sidebar-menu li.active a i {
        color: #00a9fd; }
    .light-theme .sidebar-wrapper .sidebar-menu ul li a i {
        background-color: #f9f9f9; }
    .light-theme .sidebar-wrapper .sidebar-menu .sidebar-dropdown div {
        background-color: #f9f9f9; }
    .light-theme .sidebar-wrapper .sidebar-menu .header-menu span {
        color: #6c7b88; }
    .light-theme .sidebar-wrapper .sidebar-footer {
        background-color: #f9f9f9;
        -webkit-box-shadow: 0px -1px 5px #ececec;
        box-shadow: 0px -1px 5px #ececec;
        border-top: 1px solid #f9f9f9; }
    .light-theme .sidebar-wrapper .sidebar-footer > div:first-child {
        border-left: none; }
    .light-theme .sidebar-wrapper .sidebar-footer > div:last-child {
        border-right: none; }

    .light-theme.toggled #close-sidebar {
        color: #74726E; }

    .light-theme.toggled #close-sidebar:hover {
        color: #424242; }

    .light-theme .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar,
    .light-theme .mCSB_scrollTools .mCSB_dragger.mCSB_dragger_onDrag .mCSB_dragger_bar,
    .light-theme .mCSB_scrollTools .mCSB_dragger:hover .mCSB_dragger_bar {
        background-color: #A4A29E;
        border-radius: 0; }

    .light-theme .mCSB_scrollTools .mCSB_draggerRail {
        background-color: transparent; }

    .light-theme.sidebar-bg .sidebar-wrapper:before {
        background-color: rgba(249, 249, 249, 0.9); }

    .light-theme.sidebar-bg .sidebar-wrapper a:not(.dropdown-item),
    .light-theme.sidebar-bg .sidebar-wrapper .sidebar-header,
    .light-theme.sidebar-bg .sidebar-wrapper .sidebar-search input,
    .light-theme.sidebar-bg .sidebar-wrapper .sidebar-search i {
        color: #8e8c87; }

    .light-theme.sidebar-bg .sidebar-wrapper a:not(.dropdown-item):hover,
    .light-theme.sidebar-bg .sidebar-wrapper .sidebar-menu li.active > a {
        color: #5c5c5c; }

    .light-theme.sidebar-bg .sidebar-wrapper .sidebar-item {
        border-color: white; }

    .light-theme.sidebar-bg .sidebar-wrapper .sidebar-search input.search-menu,
    .light-theme.sidebar-bg .sidebar-wrapper .sidebar-search .input-group-text {
        background-color: rgba(255, 255, 255, 0.5); }

    .light-theme.sidebar-bg .sidebar-wrapper .sidebar-menu .sidebar-dropdown div {
        background-color: rgba(255, 255, 255, 0.5); }

    .light-theme.sidebar-bg .sidebar-wrapper .sidebar-menu ul li a i {
        background-color: rgba(255, 255, 255, 0.5); }

    .light-theme.sidebar-bg .sidebar-wrapper .sidebar-footer {
        background-color: rgba(255, 255, 255, 0.5);
        -webkit-box-shadow: 0px -1px 5px rgba(236, 236, 236, 0.8);
        box-shadow: 0px -1px 5px rgba(236, 236, 236, 0.8);
        border-top: 1px solid white; }

        body{
            background-image:url("https://images.squarespace-cdn.com/content/v1/58debb3d5016e130b21344df/1493076222125-0IVS64DTPE3P8M0KMEYV/ke17ZwdGBToddI8pDm48kKWuPA1gEhzfHDYA-kj4Cgt7gQa3H78H3Y0txjaiv_0fDoOvxcdMmMKkDsyUqMSsMWxHk725yiiHCCLfrh8O1z5QPOohDIaIeljMHgDF5CVlOqpeNLcJ80NK65_fV7S1USNkZhLiPIepRZNrPMRKosibzKmhad8_dnBLhVdWJYYC3WUfc_ZsVm9Mi1E6FasEnQ/bg-home.png?format=1500w");
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Responsive sidebar template with sliding effect and dropdown menu based on bootstrap 3">

    @auth('instructor')
        <title>Instructor Portal</title>
    @else
        <title>Student Portal</title>
    @endauth
    <!-- using online links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.min.css">



    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontastic.css')}}">
    <link rel="stylesheet" href="{{asset('css/grasp_mobile_progress_circle-1.0.0.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('css/datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">


    <link href="{{asset('assets/css/popstyle.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/flexslider.css')}}" rel="stylesheet"/>
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet"/>
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" rel="stylesheet"/>



@yield('css')
<!-- Font Awesome CSS-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">

    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{asset('css/style.green.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>




</head>



<body>


<div  class="page-wrapper default-theme sidebar-bg bg1 toggled">
    <nav id="sidebar" class="sidebar-wrapper">
        <div class="sidebar-content">
            <!-- sidebar-brand  -->
            <div class="sidebar-item sidebar-brand">
                <a href="#">QR Portal</a>
            </div>
            <!-- sidebar-header  -->
            @auth('instructor')
                <div class="sidebar-item sidebar-header d-flex flex-nowrap">
                    <div class="user-pic">
                        <img class="img-responsive img-rounded"
                             @if(empty(Auth::user()->image)) src="{{asset('https://bootdey.com/img/Content/avatar/avatar1.png')}}"
                             @else src="{{asset(Auth::guard('instructor')->user()->image)}}" @endif alt="User picture">
                    </div>

                    @else

                    <div class="sidebar-item sidebar-header d-flex flex-nowrap">
                        <div class="user-pic">
                            <img class="img-responsive img-rounded"
                                 @if(empty(Auth::user()->image)) src="{{asset('https://bootdey.com/img/Content/avatar/avatar1.png')}}"
                                 @else src="{{asset(Auth::guard()->user()->image)}}" @endif alt="User picture">
                        </div>

                        @endauth

                @auth('instructor')

                <div class="user-info">
                        <span class="user-name">{{Auth::guard('instructor')->user()->name}}</span>
                    <span class="user-role">Instructor</span>
                    <span class="user-status">
                         <span>Online</span>  <br> <i class="fa fa-circle"></i>


                        </span>
                </div>

                @else
                    <div class="user-info">
                        <span class="user-name">{{Auth::guard()->user()->name}}</span>
                        <span class="user-role">Student</span>
                        <span class="user-status">
                         <span>Online</span>  <br> <i class="fa fa-circle"></i>


                        </span>
                    </div>

                @endauth
            </div>


            <!-- sidebar-menu  -->
            <div class=" sidebar-item sidebar-menu">


                @auth('instructor')

                <ul>
                    <li class="header-menu">
                        <span>Menu</span>
                    </li>
                    <li>
                        <a href="{{url('/faculty/dashboard')}}">
                            <i class="fa fa-tachometer"></i>
                            <span class="menu-text">Dashboard</span>
                            <span class="badge badge-pill badge-primary">Beta</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/FacultyPortal')}}">
                            <i class="fa fa-user"></i>
                            <span class="menu-text">Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/ManageCourses')}}">
                            <i class="fa fa-balance-scale"></i>
                            <span class="menu-text">Mark Attendance</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('facultyteachcourse')}}">
                            <i class="fa fa-book"></i>
                            <span class="menu-text">Courses</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/password/change')}}">
                            <i class="fa fa-user-circle"></i>
                            <span class="menu-text">Change Password</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/Contact')}}">
                            <i class="fa fa-envelope"></i>
                            <span class="menu-text">Report Issue</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/faculty/logout')}}">
                            <i class="fa fa-arrow-circle-left"></i>
                            <span class="menu-text">Logout</span>
                        </a>
                    </li>

                </ul>

                @else

                    <ul>
                        <li class="header-menu">
                            <span>Menue</span>
                        </li>
                        <li>
                            <a href="{{url('/faculty/dashboard')}}">
                                <i class="fa fa-tachometer"></i>
                                <span class="menu-text">Dashboard</span>
                                <span class="badge badge-pill badge-primary">Beta</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('StudentPortal')}}">
                                <i class="fa fa-user"></i>
                                <span class="menu-text">Profile</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/manage/course')}}">
                                <i class="fa fa-balance-scale"></i>
                                <span class="menu-text">Attendance View</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/password/change')}}">
                                <i class="fa fa-user-circle"></i>
                                <span class="menu-text">Change Password</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('/Contact')}}">
                                <i class="fa fa-envelope"></i>
                                <span class="menu-text">Report Issue</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{url('/student/logout')}}">
                                <i class="fa fa-arrow-circle-left"></i>
                                <span class="menu-text">Logout</span>
                            </a>
                        </li>

                    </ul>

                @endauth
            </div>
            <!-- sidebar-menu  -->
        </div>



        <!-- sidebar-footer  -->
        <div class="sidebar-footer">
            <div class="dropdown">

                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-bell"></i>
                    <span class="badge badge-pill badge-warning notification">3</span>
                </a>
                <div class="dropdown-menu notifications" aria-labelledby="dropdownMenuMessage">
                    <div class="notifications-header">
                        <i class="fa fa-bell"></i>
                        Notifications
                    </div>
                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="#">
                        <div class="notification-content">
                            <div class="icon">
                                <i class="fas fa-exclamation-triangle text-warning border border-warning"></i>
                            </div>
                            <div class="content">
                                <div class="notification-detail">0 Notificaions</div>
                                <div class="notification-time">
                                    Today
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-center" href="#">View all notifications</a>
                </div>
            </div>
            <div class="dropdown">
                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-envelope"></i>
                    <span class="badge badge-pill badge-success notification">7</span>
                </a>
                <div class="dropdown-menu messages" aria-labelledby="dropdownMenuMessage">
                    <div class="messages-header">
                        <i class="fa fa-envelope"></i>
                        Messages
                    </div>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <div class="message-content">
                            <div class="pic">
                                <img src="https://cdn1.iconfinder.com/data/icons/aami-flat-message-bubbles/64/message-54-512.png" alt="">
                            </div>
                            <div class="content">
                                <div class="message-title">
                                    <strong> No Mesages</strong>
                                </div>
                                <div class="message-detail">No New Messages</div>
                            </div>
                        </div>

                    </a>

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-center" href="#">View all messages</a>

                </div>
            </div>
            <div class="dropdown">
                <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-cog"></i>
                    <span class="badge-sonar"></span>
                </a>
                @auth('instructor')
                <div class="dropdown-menu" aria-labelledby="dropdownMenuMessage">
                    <a class="dropdown-item" href="{{'/FacultyPortal'}}">My profile</a>
                    <a class="dropdown-item" href="{{'/Contact'}}">Help</a>
                </div>

                @else
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuMessage">
                        <a class="dropdown-item" href="{{'/StudentPortal'}}">My profile</a>
                        <a class="dropdown-item" href="#">Help</a>
                    </div>

                @endauth
            </div>
            @auth('instructor')
            <div>
                <a href="{{'/faculty/logout'}}">
                    <i class="fa fa-power-off"></i>
                </a>
            </div>

            @else
                <div>
                    <a href="{{'/student/logout'}}">
                        <i class="fa fa-power-off"></i>
                    </a>
                </div>
            @endauth
            <div class="pinned-footer">
                <a href="#">
                    <i class="fas fa-ellipsis-h"></i>
                </a>
            </div>
        </div>
    </nav>
    <!-- page-content  -->
    <main class="page-content pt-2">
        @yield('content')
    <!-- page-content" -->
    </main>
</div>
<!-- page-wrapper -->

<!-- using online scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
</script>
<script src="//malihu.github.io/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
    jQuery(function ($) {

        // Dropdown menu
        $(".sidebar-dropdown > a").click(function () {
            $(".sidebar-submenu").slideUp(200);
            if ($(this).parent().hasClass("active")) {
                $(".sidebar-dropdown").removeClass("active");
                $(this).parent().removeClass("active");
            } else {
                $(".sidebar-dropdown").removeClass("active");
                $(this).next(".sidebar-submenu").slideDown(200);
                $(this).parent().addClass("active");
            }

        });

        //toggle sidebar
        $("#toggle-sidebar").click(function () {
            $(".page-wrapper").toggleClass("toggled");
        });
        //Pin sidebar
        $("#pin-sidebar").click(function () {
            if ($(".page-wrapper").hasClass("pinned")) {
                // unpin sidebar when hovered
                $(".page-wrapper").removeClass("pinned");
                $("#sidebar").unbind( "hover");
            } else {
                $(".page-wrapper").addClass("pinned");
                $("#sidebar").hover(
                    function () {
                        console.log("mouseenter");
                        $(".page-wrapper").addClass("sidebar-hovered");
                    },
                    function () {
                        console.log("mouseout");
                        $(".page-wrapper").removeClass("sidebar-hovered");
                    }
                )

            }
        });


        //toggle sidebar overlay
        $("#overlay").click(function () {
            $(".page-wrapper").toggleClass("toggled");
        });

        //switch between themes
        var themes = "default-theme legacy-theme chiller-theme ice-theme cool-theme light-theme";
        $('[data-theme]').click(function () {
            $('[data-theme]').removeClass("selected");
            $(this).addClass("selected");
            $('.page-wrapper').removeClass(themes);
            $('.page-wrapper').addClass($(this).attr('data-theme'));
        });

        // switch between background images
        var bgs = "bg1 bg2 bg3 bg4";
        $('[data-bg]').click(function () {
            $('[data-bg]').removeClass("selected");
            $(this).addClass("selected");
            $('.page-wrapper').removeClass(bgs);
            $('.page-wrapper').addClass($(this).attr('data-bg'));
        });

        // toggle background image
        $("#toggle-bg").change(function (e) {
            e.preventDefault();
            $('.page-wrapper').toggleClass("sidebar-bg");
        });

        // toggle border radius
        $("#toggle-border-radius").change(function (e) {
            e.preventDefault();
            $('.page-wrapper').toggleClass("border-radius-on");
        });

        //custom scroll bar is only used on desktop
        if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            $(".sidebar-content").mCustomScrollbar({
                axis: "y",
                autoHideScrollbar: true,
                scrollInertia: 300
            });
            $(".sidebar-content").addClass("desktop");

        }
    });
</script>

@yield('script')


</body>
</html>
