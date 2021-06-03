<!DOCTYPE html>
<html>

<head>
  <title>News | Maamedia</title>
  <meta charset="utf-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Follow the latest news from Maamedia: what’s happening, where’s happening. The authors are either volunteers or founders Mito and Puma!">
    <link rel="stylesheet" href="https://crm.maamedia.org/drafts/christmas/assets/css/global.css">
<link rel='stylesheet' id='google-font-quicksand-montserrat-poppins-css' href='//fonts.googleapis.com/css?family=Quicksand%3A300%2C400%2C500%2C600%2C700%257CPoppins%3A400%2C400i%2C700%2C700i%257CMontserrat%3A400%2C500%2C600%2C700&#038;subset=latin%2Clatin-ext&#038;display=swap&#038;ver=5.5' media='all'/>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
<style>
.left, .right {
  float: left;
  width: 20%; /* The width is 20%, by default */
}
body {
    font-family: 'Quicksand';
}
.main {
  float: left;
  width: 60%; /* The width is 60%, by default */
}

/* Use a media query to add a breakpoint at 800px: */
@media screen and (max-width: 800px) {
  .left, .main, .right {
    width: 100%; /* The width is 100%, when the viewport is 800px or smaller */
  }
}

.topnav {
  overflow: hidden;
  background-color: #333;
  position: relative;
}

/* Hide the links inside the navigation menu (except for logo/home) */
.topnav #maamediaLinks {
  display: none;
}

/* Style navigation menu links */
.topnav a {
  color: white;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  display: block;
}

/* Style the hamburger menu */
.topnav a.icon {
  background: black;
  display: block;
  position: absolute;
  right: 0;
  top: 0;
}

/* Add a grey background color on mouse-over */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the active link (or home/logo) */
.active {
  background-color: #00000;
  color: white;
}
@charset "UTF-8";
html {
  --color-mode: "lit";
  --light: #fff;
  --dark: rgb(18,20,24);
  --gray: #f5f5f5;
  --bubble: rgb(16,16,18);
  --accent: var(--gray);
  --bg: var(--light);
  --bg-dark: #000;
  --text: var(--dark);
  --font: 'Metropolis', sans-serif;
  --theme: rgb(52,199,89);
  --ease: cubic-bezier(.19,1,.22,1);
}

html[data-mode="dim"] {
  --light: #eee;
  --color-mode: 'dim';
  --bg: var(--bg-dark);
  --text: var(--light);
  --accent: var(--bubble);
  --theme: rgb(48,209,88);
}

html[data-mode="dim"] * {
  box-shadow: none !important;
}

html[data-mode="dim"] main p {
  opacity: 0.9;
}

html[data-mode="dim"] .color_choice::after {
  transform: translateX(1.75rem) scale(1.67);
}

@media (prefers-color-scheme: dark) {
  html:not(.nodarkmode):not([data-mode="lit"]) {
    --light: #eee;
    --color-mode: 'dim';
    --bg: var(--bg-dark);
    --text: var(--light);
    --accent: var(--bubble);
    --theme: rgb(48,209,88);
  }
  html:not(.nodarkmode):not([data-mode="lit"]) * {
    box-shadow: none !important;
  }
  html:not(.nodarkmode):not([data-mode="lit"]) main p {
    opacity: 0.9;
  }
}

@font-face {
  font-family: 'Metropolis';
  font-style: normal;
  font-display: swap;
  font-weight: 400;
  src: local("Metropolis Regular"), local("Metropolis-Regular"), url("../fonts/Metropolis-Regular.woff2") format("woff2"), url("../fonts/Metropolis-Regular.woff") format("woff");
}

@font-face {
  font-family: 'Metropolis';
  font-style: italic;
  font-display: swap;
  font-weight: 400;
  src: local("Metropolis Italic"), local("Metropolis-Italic"), url("../fonts/Metropolis-RegularItalic.woff2") format("woff2"), url("../fonts/Metropolis-RegularItalic.woff") format("woff");
}

@font-face {
  font-family: 'Metropolis';
  font-style: normal;
  font-display: swap;
  font-weight: 300;
  src: local("Metropolis Light"), local("Metropolis-Light"), url("../fonts/Metropolis-Light.woff2") format("woff2"), url("../fonts/Metropolis-Light.woff") format("woff");
}

@font-face {
  font-family: 'Metropolis';
  font-style: italic;
  font-display: swap;
  font-weight: 300;
  src: local("Metropolis Light Italic"), local("Metropolis-LightItalic"), url("../fonts/Metropolis-LightItalic.woff2") format("woff2"), url("../fonts/Metropolis-LightItalic.woff") format("woff");
}

@font-face {
  font-family: 'Metropolis';
  font-style: normal;
  font-display: swap;
  font-weight: 500;
  src: local("Metropolis Medium"), local("Metropolis-Medium"), url("../fonts/Metropolis-Medium.woff2") format("woff2"), url("../fonts/Metropolis-Medium.woff") format("woff");
}

@font-face {
  font-family: 'Metropolis';
  font-style: italic;
  font-display: swap;
  font-weight: 500;
  src: local("Metropolis Medium Italic"), local("Metropolis-MediumItalic"), url("../fonts/Metropolis-MediumItalic.woff2") format("woff2"), url("../fonts/Metropolis-MediumItalic.woff") format("woff");
}

@font-face {
  font-family: 'Cookie';
  font-style: normal;
  font-display: swap;
  font-weight: 400;
  src: local("Cookie-Regular"), url("../fonts/cookie-v10-latin-regular.woff") format("woff2"), url("../fonts/cookie-v10-latin-regular.woff") format("woff");
}

@keyframes showMenu {
  0% {
    top: -100%;
    opacity: 0;
  }
  100% {
    top: 0;
    opacity: 1;
  }
}

@keyframes hideMenu {
  0% {
    top: 0;
    opacity: 1;
  }
  100% {
    top: -100%;
    opacity: 0;
  }
}

* {
  box-sizing: border-box;
  -webkit-appearance: none;
  margin: 0;
  padding: 0;
}

body, html {
  scroll-behavior: smooth;
  font-kerning: normal;
  -webkit-text-size-adjust: 100%;
}

body {
  font-family: var(--font);
  background-color: var(--bg);
  color: var(--text);
  font-size: 16px;
  line-height: 1.5;
  max-width: 1440px;
  margin: 0 auto;
  position: relative;
  font-kerning: normal;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  min-height: 100vh;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

a {
  text-decoration: none;
  color: inherit;
}

blockquote {
  opacity: 0.8;
  padding: 1rem;
  position: relative;
  quotes: "“" "”" "‘" "’";
  margin: 0.75rem 0;
  display: flex;
  flex-flow: row wrap;
  background-repeat: no-repeat;
  background-size: 5rem;
  background-position: 50% 50%;
  position: relative;
}

blockquote::before {
  content: "";
  padding: 1px;
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  background: var(--theme);
}

blockquote p {
  padding-left: 0.5rem 0 !important;
  font-size: 1.1rem !important;
  width: 100%;
  font-weight: 300;
  font-style: italic;
}

code {
  max-width: 100%;
  overflow-x: auto;
}

h1, h2, h3, h4, h5 {
  font-family: inherit;
  text-transform: capitalize;
  font-weight: 400;
  padding: 0.33rem 0;
  margin: 1rem 0;
  color: inherit;
}

h1 {
  font-size: 200%;
  font-weight: 400;
}

h2 {
  font-size: 175%;
}

h3 {
  font-size: 150%;
}

h4 {
  font-size: 125%;
}

h5 {
  font-size: 120%;
}

img {
  max-width: 100%;
  vertical-align: middle;
  height: auto;
  margin: 1rem auto;
  padding: 0;
}

main {
  padding-bottom: 45px;
  flex: 1;
}

ul {
  list-style: none;
  -webkit-padding-start: 0;
  -moz-padding-start: 0;
}

b, strong, em {
  font-weight: 500;
}

hr {
  border: none;
  padding: 0.5px;
  background: var(--text);
  opacity: 0.09;
  margin: 2rem 0 0.75rem;
}

table {
  width: 100%;
  max-width: 100%;
  overflow-x: scroll;
  border-collapse: collapse;
  margin: 1rem 0;
  background: transparent;
  border-style: hidden;
  box-shadow: 0 1rem 4rem rgba(0, 0, 0, 0.15);
}

table:not(.ln-table) tr {
  background-color: var(--accent);
}

th {
  text-align: left;
  color: var(--light);
}

thead tr {
  background: var(--theme) !important;
}

td, th {
  padding: 0.5rem 1rem;
  border: 2px solid var(--bg);
}

aside h3 {
  position: relative;
  margin: 0 !important;
}

.article {
  box-shadow: 0 0.5rem 2rem rgba(0, 0, 0, 0.12);
  overflow: hidden;
  border-radius: 0.5rem;
}

.article_title {
  margin: 0;
}

.article_excerpt {
  transition: height 0.5s, opacity 0.5s;
}

.article_excerpt:not(.visible) {
  height: 0;
  opacity: 0;
}

.article_excerpt, .article_meta {
  transform-origin: bottom;
}

.article_meta {
  padding: 10px 1.25rem 1.25rem;
  color: var(--text);
  position: relative;
  z-index: 2;
  transition: margin-top 0.5s;
  background: var(--bg);
}

.article_meta.center_y {
  transform-origin: center;
  transition: transform 0.5s;
  display: flex;
  flex-direction: column;
  justify-content: center;
}

@media screen and (min-width: 42rem) {
  .article_meta.center_y {
    left: -2rem;
  }
}

.article_thumb {
  display: grid;
  position: relative;
  z-index: 0;
  overflow: hidden;
  height: 15rem;
  background-size: cover;
  background-position: 50% 50%;
}

@media screen and (min-width: 35rem) {
  .article_thumb {
    height: 22.5rem;
  }
}

.article_thumb img {
  transition: transform 0.5s, opacity 0.5s;
}

.article_thumb::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  bottom: 0;
  z-index: 1;
  background: var(--bg);
  opacity: 0;
  transition: opacity 0.1s ease-out;
}

.article_showcase .article_thumb {
  height: 15rem;
}

.article_showcase .article_meta {
  padding-top: 1.5rem;
}

.article:hover .article_thumb img {
  transform: scale(1.1);
}

.article:hover .article_thumb::after {
  transition: opacity 0.1s ease-out;
  opacity: 0.5;
}

.article:hover .article_excerpt:not(.visible) {
  height: 75px;
  opacity: 1;
}

.article:hover .article_meta:not(.center_y) {
  margin-top: -75px;
}

@media screen and (min-width: 769px) {
  .article:hover .article_meta.center_y {
    transform: translateX(-3rem);
  }
}

.article:hover {
  box-shadow: 0 1.5rem 6rem rgba(0, 0, 0, 0.17);
}

.article:hover a {
  color: initial !important;
}

.article_hidden {
  display: none;
}

.btn {
  min-width: 150px;
  font-size: 1rem;
  margin: 1rem 0 1.5rem;
  display: inline-block;
  padding: 7.5px 12.5px;
  box-shadow: 0 1rem 4rem rgba(0, 0, 0, 0.5);
  color: var(--light);
  text-align: center;
  cursor: pointer;
  border-radius: 0.25rem;
}

.transparent {
  padding: 25px;
}

.point {
  margin-right: 15px;
  color: var(--theme);
}

@media screen and (min-width: 769px) {
  .nav-menu a {
    display: inline-block;
    height: initial;
    text-align: left;
  }
  .mobile {
    display: none;
  }
}

.video {
  overflow: hidden;
  padding-bottom: 56.25%;
  position: relative;
  height: 0;
  margin: 1.5rem 0;
  border-radius: 1rem;
  background-color: var(--bg);
  box-shadow: 0 1rem 4rem rgba(0, 0, 0, 0.17);
}

.video iframe {
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  position: absolute;
  transform: scale(1.03);
}

.copy {
  position: relative;
  cursor: pointer;
  z-index: 4;
  display: flex;
  align-items: center;
  justify-content: center;
}

.copy {
  width: 1.75rem;
  height: 1.75rem;
}

.copy::before {
  position: absolute;
  background: var(--theme);
  color: var(--light);
  opacity: 0;
  transition: opacity 0.25s ease-in;
}

.copy::before {
  content: attr(data-before);
  font-size: 0.8rem;
  width: 5.4rem;
  padding: 0.25rem;
  border-radius: 0.25rem;
  text-align: center;
  top: -2.25rem;
  right: 0;
}

.copy_done::before {
  content: attr(data-after);
}

.copy:hover::before {
  opacity: 1;
}

.footer {
  padding: 0;
  color: var(--text);
  margin: 0;
  width: 100%;
  font-size: 1.05rem;
  min-height: 75px;
  display: flex;
  justify-content: space-between;
  padding: 1.5rem;
}

@media screen and (max-width: 567px) {
  .footer {
    flex-direction: column;
    padding-bottom: 1.5rem !important;
  }
}

.footer a {
  opacity: 0.8;
  transition: opacity 0.3s ease-in-out;
}

.footer a:hover {
  text-decoration: underline;
  opacity: 1;
}

.color_mode {
  height: 1.5rem;
  display: grid;
  grid-template-columns: 1fr 3rem;
  align-items: center;
  margin: 2rem 1.5rem 0;
}

.color_choice {
  outline: none;
  border: none;
  -webkit-appearance: none;
  height: 1rem;
  position: relative;
}

.color_choice::before, .color_choice::after {
  content: "";
  top: 0;
  bottom: 0;
  left: 0;
  position: absolute;
  height: 1rem;
  background: var(--theme);
}

.color_choice, .color_choice::before {
  width: 2.75rem;
  border-radius: 1rem;
  cursor: pointer;
  transition: transform 0.5s cubic-bezier(0.075, 0.82, 0.165, 1);
  box-shadow: 0 0.25rem 1rem rgba(0, 0, 0, 0.15);
}

.color_choice::before {
  box-shadow: 0 1rem 2rem rgba(0, 0, 0, 0.17);
  z-index: 2;
  right: 0;
  filter: brightness(0.75);
}

.color_choice::after {
  width: 1rem;
  border-radius: 50%;
  z-index: 3;
  transform: scale(1.67);
  transform-origin: 50% 50%;
  transition: transform 0.5s cubic-bezier(0.19, 1, 0.22, 1);
  will-change: transform;
}


.post {
  margin: 0 auto;
  width: 100%;
}

.post p, .post h1, .post h2, .post h3, .post h4, .post h5, .post h6, .post blockquote, .post ol, .post ul {
  max-width: 840px !important;
  margin-left: auto;
  margin-right: auto;
}

@media screen and (min-width: 1025px) {
  .post img:not(.icon) {
    width: 100vw;
    max-width: 1024px;
    margin-left: auto;
    margin-right: auto;
  }
}

.post h2, .post h3, .post h4 {
  margin: 0.5rem auto;
  text-align: left;
  padding: 5px 0 0 0;
}

.post p {
  padding-bottom: 0.5rem;
  padding-top: 0.5rem;
  font-size: 1.05rem;
}

.posts {
  display: flex;
  justify-content: space-between;
  flex-flow: row wrap;
  width: 100%;
  align-items: stretch;
}

.posts:not(.aside) {
  padding: 0 30px;
}

.post ol {
  padding: 1rem 1.25rem;
}

.post_body img {
  width: 100%;
  max-width: 100%;
}

.post_inner a {
  color: var(--theme);
  transition: all 0.3s;
}

.post_inner a:hover {
  opacity: 0.8;
  text-decoration: underline;
}

.post_inner img:not(.icon) {
  margin-bottom: 2rem;
  box-shadow: 0 1.5rem 1rem -1rem rgba(0, 0, 0, 0.25);
}

.post_inner img:not(.icon) ~ h1, .post_inner img:not(.icon) ~ h2, .post_inner img:not(.icon) ~ h3, .post_inner img:not(.icon) ~ h4 {
  margin-top: 0;
  padding-top: 0;
}

.post .icon {
  margin-top: 0;
  margin-bottom: 0;
}

.post_date {
  color: var(--theme);
}

.post_copy {
  opacity: 0;
  transition: opacity 0.3s ease-out;
}

.post_item {
  box-shadow: 0 0 3rem rgba(0, 0, 0, 0.17);
  margin: 1.25rem 0;
  border-radius: 10px;
  overflow: hidden;
  width: 100%;
}

.post_item:hover {
  box-shadow: 0 0 5rem rgba(0, 0, 0, 0.255);
}

@media screen and (min-width: 667px) {
  .post_item {
    width: 47%;
  }
}

.post_item:hover .post_copy {
  opacity: 1;
}

.post_link {
  padding: 2.5px 0;
  font-size: 1.25em;
  margin: 2.5px 0;
  text-align: left;
}

.post_meta {
  overflow: hidden;
  opacity: 0.8;
  font-size: 0.84rem;
  font-weight: 500;
  display: inline-grid;
  grid-template-columns: auto 1fr;
  background-color: var(--light);
  padding: 0;
  align-items: center;
  border-radius: 0.3rem;
  color: var(--dark);
  text-transform: capitalize;
}

.post_meta a:hover {
  color: var(--theme);
  text-decoration: underline;
  opacity: 0.9;
}

.post_extra {
  display: flex;
  justify-content: flex-end;
}

.post_tag {
  font-size: 0.75rem !important;
  font-weight: 500;
  background: var(--theme);
  color: var(--light);
  padding: 0.25rem 0.67rem !important;
  text-transform: uppercase;
  display: inline-flex;
  border-radius: 5px;
}

.post_title {
  margin: -1rem 0 1rem;
}

.post_time {
  background: var(--theme);
  display: inline-grid;
  padding: 0.2rem 0.75rem;
  color: var(--light);
}

.post_thumbnail {
  width: 100%;
  margin: 0;
}

.post_nav {
  padding: 3rem 1.5rem;
  display: grid;
  margin: 2.25rem auto 1rem;
  text-align: center;
  color: var(--theme);
  text-transform: uppercase;
}

.post_nav, .post_nav span {
  position: relative;
  z-index: 3;
}

.post_nav::before {
  content: "";
  position: absolute;
  background: var(--accent);
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  z-index: 1;
  border-radius: 1rem;
}

.post_next {
  display: inline-grid;
  margin: 0 auto;
  width: 10rem;
  grid-template-columns: 1fr 1.33rem;
}

.post_next::after {
  content: "";
  background-image: url("../images/icons/double-arrow.svg");
  background-repeat: repeat no-repeat;
  background-size: 0.8rem;
  background-position: center right;
}

.pager {
  display: grid;
  grid-template-columns: 2.5rem 1fr 2.5rem;
  margin: 2rem auto 0;
  max-width: 12.5rem;
}

.pager, .pager_item {
  justify-content: center;
  align-items: center;
}

.pager_item {
  height: 2.5rem;
  width: 2.5rem;
  display: inline-flex;
  margin-left: 5px;
  margin-right: 5px;
  background-color: var(--accent);
  color: var(--light);
  border-radius: 50%;
}

.pager_item:hover {
  opacity: 0.5;
}

.pager span {
  text-align: center;
}

.excerpt {
  padding: 0 10px 1.5rem 10px;
  position: relative;
  z-index: 1;
}

.excerpt_meta {
  display: flex;
  justify-content: space-between;
  align-items: center;
  transform: translateY(-2.5rem);
  position: relative;
  z-index: 5;
}

.archive_item {
  display: grid;
  padding: 1.5rem 0;
}

.archive_title {
  margin: 0;
}

.pale {
  opacity: 0.7;
}

.hidden {
  display: none;
}

.center {
  text-align: center;
  margin: 5px auto;
}

.left {
  text-align: left;
}

.link {
  display: inline-flex;
  align-items: center;
  width: 2.5rem;
  margin: 0 0.25rem;
  padding: 0 0.25rem;
  opacity: 0;
  transition: opacity 0.3s cubic-bezier(0.39, 0.575, 0.565, 1);
}

.link svg {
  width: 1.5rem;
  height: 1.5rem;
  fill: var(--theme);
}

.link_owner:hover .link {
  opacity: 0.9;
}

.wrap {
  max-width: 1024px;
}

.wrap, .wrap {
  padding: 0 25px;
  margin: 0 auto;
}

.pt-1 {
  padding-top: 1.5rem;
}

.pb-1 {
  padding-bottom: 1.5rem;
}

.mt-1 {
  margin-top: 1.5rem;
}

.mb-1 {
  margin-bottom: 1.5rem;
}

.pt-2 {
  padding-top: 3rem;
}

.pb-2 {
  padding-bottom: 3rem;
}

.mt-2 {
  margin-top: 3rem;
}

.mb-2 {
  margin-bottom: 3rem;
}

.grid-2, .grid-3, .grid-4, .grid-auto, .grid-reverse {
  display: grid;
  grid-template-columns: 1fr;
}

[class*='grid-'] {
  grid-gap: 2rem;
}

@media screen and (min-width: 42rem) {
  .grid-auto {
    grid-template-columns: 1fr 3fr;
  }
  .grid-reverse {
    grid-template-columns: 3fr 1fr;
  }
  .grid-2 {
    grid-template-columns: 1fr 1fr;
  }
  .grid-3 {
    grid-template-columns: repeat(auto-fit, minmax(19rem, 1fr));
  }
  .grid-4 {
    grid-template-columns: repeat(auto-fit, minmax(16rem, 1fr));
  }
}

.upcase {
  text-transform: uppercase;
}

.attribution {
  opacity: 0.33;
  font-size: 0.8rem;
  transition: opacity 0.25 var(--ease);
}

.attribution:hover {
  opacity: 1;
}

.mt {
  margin-top: 5rem;
}

.never {
  min-height: 60vh;
  background: url("../images/sitting.svg");
  background-position: right bottom;
  background-repeat: no-repeat;
  background-size: contain;
  padding: 0 1.5rem;
  margin-top: 6rem;
}

.never_title {
  text-align: left;
}

.icon {
  width: 1.5rem;
  height: 1.5rem;
  fill: var(--theme);
  transform-origin: 50% 50%;
}

.icon_scale {
  transform: scale(0.5);
}

.icon_invert {
  transform: scale(0.5) rotate(180deg);
}

pre {
  display: grid;
  white-space: wrap;
}

.highlight {
  margin: 1.5rem 0 2.5rem;
  padding: 0 !important;
  position: relative;
}

.highlight:not(.sans)::before {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  width: 2px;
  left: 3rem;
  background: var(--bg);
  z-index: 10;
}

.highlight .highlight {
  margin: 0;
}

.highlight pre {
  padding: 1rem;
  background: var(--accent) !important;
  color: var(--text) !important;
  border-radius: 4px;
  max-width: 100%;
  overflow-x: auto;
}

.highlight table {
  display: grid;
}

.highlight .lntd {
  width: 100%;
  border: none;
}

.highlight .lntd:first-child, .highlight .lntd:first-child pre {
  width: 2.5rem !important;
  padding-left: 0;
  padding-right: 0;
  color: var(--light) !important;
  background-color: var(--theme) !important;
  border-radius: 0.25rem 0 0 0.25rem;
}

.highlight .lntd:first-child pre {
  width: 100%;
  display: flex;
  align-items: center;
  flex-direction: column;
}

.highlight .lntd:last-child {
  padding-left: 0;
}

.err {
  color: #a61717;
  background-color: #e3d2d2;
}

.hl {
  display: block;
  width: 100%;
  background-color: #ffffcc;
}

.ln {
  padding: 0 2em 0 0;
  color: var(--theme);
  position: sticky;
  left: 0;
  background: var(--accent);
  z-index: 9;
}

.k, .kc, .kd, .kn, .kp, .kr, .kt, .nt {
  color: #6ab825;
  font-weight: 500;
}

.kn, .kp {
  font-weight: 400;
}

.nb, .no, .nv {
  color: #24909d;
}

.nc, .nf, .nn {
  color: #447fcf;
}

.s, .sa, .sb, .sc, .dl, .sd, .s2, .se, .sh, .si, .sx, .sr, .s1, .ss {
  color: #ed9d13;
}

.m, .mb, .mf, .mh, .mi, .il, .mo {
  color: #3677a9;
}

.ow {
  color: #6ab825;
  font-weight: 500;
}

.c, .ch, .cm, .c1 {
  color: #999;
  font-style: italic;
}

.cs {
  color: #e50808;
  background-color: #520000;
  font-weight: 500;
}

.cp, .cpf {
  color: #cd2828;
  font-weight: 500;
}

.gd, .gr {
  color: #d22323;
}

.ge {
  font-style: italic;
}

.gh, .gu, .nd, .na, .ne {
  color: #ffa500;
  font-weight: 500;
}

.gi {
  color: #589819;
}

.go {
  color: #ccc;
}

.gp {
  color: #aaa;
}

.gs {
  font-weight: 500;
}

.gt {
  color: #d22323;
}

.w {
  color: #666;
}

/*# sourceMappingURL=styles.css.map */
</style>
<script>
function navMaamedia() {
  var x = document.getElementById("maamediaLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

</script>
<script>
    (function(){const doc=document.documentElement;const parentURL='https://rooms.netlify.app/';function createEl(element='div'){return document.createElement(element);}
function elem(selector){let elem=document.querySelector(selector);return elem!=false?elem:false;}
function elems(selector,parent=document){let elems=parent.querySelectorAll(selector);return elems.length?elems:false;}
function pushClass(el,targetClass){if(el&&typeof el=='object'&&targetClass){elClass=el.classList;elClass.contains(targetClass)?false:elClass.add(targetClass);}}
function deleteClass(el,targetClass){if(el&&typeof el=='object'&&targetClass){elClass=el.classList;elClass.contains(targetClass)?elClass.remove(targetClass):false;}}
function modifyClass(el,targetClass){if(el&&typeof el=='object'&&targetClass){elClass=el.classList;elClass.contains(targetClass)?elClass.remove(targetClass):elClass.add(targetClass);}}
function containsClass(el,targetClass){if(el&&typeof el=='object'&&targetClass){return el.classList.contains(targetClass)?true:false;}}
function isChild(node,parentClass){let isNode=node&&typeof node=='object';if(isNode){if(Array.isArray(parentClass)){let child=false;parentClass.forEach(function(parent){if(node.closest(parent)!=null){child=true;}});return child?true:false;}else if(typeof parentClass=='string'){return node.closest(parentClass)?true:false;}}}
function isTarget(target,selector,specifity=false){const isIt=containsClass(target,selector);const isInIt=target.closest(`.${selector}`);if(specifity&&isIt){return isIt;}
if(!specifity){return isIt||isInIt;}}
function wrapEl(el,wrapper){el.parentNode.insertBefore(wrapper,el);wrapper.appendChild(el);}
(function updateDate(){const dateElem=elem('.year')
if(dateElem){const date=new Date();const year=date.getFullYear();dateElem.innerHTML=year;}})();(function(){let bar='nav_bar-wrap';let navBar=elem(`.${bar}`);let nav=elem('.nav-body');let open='nav-open';let exit='nav-exit';let drop='nav-drop';let pop='nav-pop';let navDrop=elem(`.${drop}`);let hidden='hidden';function toggleMenu(){modifyClass(navDrop,pop);modifyClass(navBar,hidden);let menuOpen=containsClass(nav,open);let menuPulled=containsClass(nav,exit);let status=menuOpen||menuPulled?true:false;status?modifyClass(nav,exit):modifyClass(nav,open);status?modifyClass(nav,open):modifyClass(nav,exit);}
doc.addEventListener('click',function(event){let target=event.target;console.log(target);const isNavDrop=isTarget(target,'nav-drop',true);const isNavClose=isTarget(target,'nav-close',true);const isNavBar=isTarget(target,'nav_bar-wrap');isNavDrop||isNavClose||isNavBar?toggleMenu():false;});})();(function share(){let share=elem('.share');let open='share-open';let close='share-close';let button=elem('.share-trigger');function showShare(){pushClass(share,open);deleteClass(share,close);}
function hideShare(){pushClass(share,open);deleteClass(share,close);}
if(button){button.addEventListener('click',function(){showShare();setTimeout(hideShare,5000);});}})();function elemAttribute(elem,attr,value=null){if(value){elem.setAttribute(attr,value);}else{value=elem.getAttribute(attr);return value?value:false;}}
(function wrapOrphanedPreElements(){const pres=elems('pre');if(pres){Array.from(pres).forEach(function(pre){const parent=pre.parentNode;const isOrpaned=!containsClass(parent,'highlight');if(isOrpaned){const preWrapper=createEl();pushClass(preWrapper,'highlight');pushClass(preWrapper,'sans');wrapEl(pre,preWrapper);}})}})();(function(){let links=document.querySelectorAll('a');if(links){Array.from(links).forEach(function(link){let target,rel,blank,noopener,attr1,attr2,url,isExternal;url=elemAttribute(link,'href');isExternal=(url&&typeof url=='string'&&url.startsWith('http'))&&!containsClass(link,'nav_item')&&!isChild(link,['.archive','.article','.post_nav','.pager'])?true:false;if(isExternal){target='target';rel='rel';blank='_blank';noopener='noopener';attr1=elemAttribute(link,target);attr2=elemAttribute(link,noopener);attr1?false:elemAttribute(link,target,blank);attr2?false:elemAttribute(link,rel,noopener);}});}})();function loadSvg(file,parent,path='icons/'){const link=`${parentURL}${path}${file}.svg`;fetch(link).then((response)=>{return response.text();}).then((data)=>{parent.innerHTML=data;});}
let headingNodes=[],results,link,icon,current,id,tags=['h2','h3','h4','h5','h6'];current=document.URL;tags.forEach(function(tag){results=document.getElementsByTagName(tag);Array.prototype.push.apply(headingNodes,results);});headingNodes.forEach(function(node){link=createEl('a');link.className='link';id=node.getAttribute('id');loadSvg('link',link,'images/icons/')
if(id){link.href=`${current}#${id}`;node.appendChild(link);pushClass(node,'link_owner');}});const copyToClipboard=str=>{const el=createEl('textarea');el.value=str;el.setAttribute('readonly','');el.style.position='absolute';el.style.left='-9999px';document.body.appendChild(el);const selected=document.getSelection().rangeCount>0?document.getSelection().getRangeAt(0):false;el.select();document.execCommand('copy');document.body.removeChild(el);if(selected){document.getSelection().removeAllRanges();document.getSelection().addRange(selected);}}
(function copyHeadingLink(){let deeplink='link';let deeplinks=document.querySelectorAll(`.${deeplink}`);if(deeplinks){document.body.addEventListener('click',function(event)
{let target=event.target;if(target.classList.contains(deeplink)||target.parentNode.classList.contains(deeplink)){event.preventDefault();let newLink=target.href!=undefined?target.href:target.parentNode.href;copyToClipboard(newLink);}});}})();(function copyLinkToShare(){let copy,copied,excerpt,isCopyIcon,isInExcerpt,link,page,postCopy,postLink,target;copy='copy';copied='copy_done';excerpt='excerpt';postCopy='post_copy';postLink='post_card';doc.addEventListener('click',function(event){target=event.target;const isInCopyIcon=target.closest(`.${copy}`)
isCopyIcon=isTarget(target,copy);isInExcerpt=containsClass(target,postCopy);if(isCopyIcon){event.preventDefault();if(isInExcerpt){link=target.closest(`.${excerpt}`).previousElementSibling;link=containsClass(link,postLink)?elemAttribute(link,'href'):false;}else{link=window.location.href;}
if(link){copyToClipboard(link);isInCopyIcon?pushClass(isInCopyIcon,copied):pushClass(target,copied);}}});})();(function hideAside(){let aside,title,posts;aside=elem('.aside');title=aside?aside.previousElementSibling:null;if(aside&&title.nodeName.toLowerCase()==='h3'){posts=Array.from(aside.children);posts.length<1?title.remove():false;}})();(function goBack(){let backBtn=elem('.btn_back');let history=window.history;if(backBtn){backBtn.addEventListener('click',function(){history.back();});}})();const light='lit';const dark='dim';const storageKey='colorMode';const key='--color-mode';const data='data-mode';const bank=window.localStorage;function currentMode(){let acceptableChars=light+dark;acceptableChars=[...acceptableChars];let mode=getComputedStyle(doc).getPropertyValue(key).replace(/\"/g,'').trim();mode=[...mode].filter(function(letter){return acceptableChars.includes(letter);});return mode.join('');}
function changeMode(isDarkMode){if(isDarkMode){bank.setItem(storageKey,light)
elemAttribute(doc,data,light);}else{bank.setItem(storageKey,dark);elemAttribute(doc,data,dark);}}
(function lazy(){function lazyLoadMedia(element){let mediaItems=elems(element);if(mediaItems){Array.from(mediaItems).forEach(function(item){item.loading="lazy";});}}
lazyLoadMedia('iframe');lazyLoadMedia('img');})();function setUserColorMode(mode=false){const isDarkMode=currentMode()==dark;const storedMode=bank.getItem(storageKey);if(storedMode){if(mode){changeMode(isDarkMode);}else{elemAttribute(doc,data,storedMode);}}else{if(mode===true){changeMode(isDarkMode)}}}
setUserColorMode();doc.addEventListener('click',function(event){let target=event.target;let modeClass='color_choice';let isModeToggle=containsClass(target,modeClass);if(isModeToggle){setUserColorMode(true);}});})();
</script>
<div class="topnav">
  <a href="#home" class="active"><img src="https://commons.maamedia.org/images/1/1a/Maamedia_Logo.png" style="width:50px; height:auto;">Maamedia News Center</a>
  <!-- Navigation links (hidden by default) -->
  <div id="maamediaLinks">
    <a href="/"><span class="fa fa-fw fa-home">Home</a>
    <a href="#ourwork"><span class="fa fa-server"></span>Our work</a>
    <a href="/contact"><span class="fa fa-inbox"></span>Contact</a>
    <a href="/about"><span class="fa fa-info-circle"></span> About us</a>
    <a href="https://meta.maamedia.org/wiki/Special:CreateAccount"><span class="glyphicon glyphicon-user"></span> Create account</a>
    <a href="https://meta.maamedia.org/wiki/Special:UserLogin"><span class="glyphicon glyphicon-log-in"></span> Login</a>
  </div>
  <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
  <a href="javascript:void(0);" class="icon" onclick="navMaamedia()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<header class="text-white text-center">
<!--SITENOTICE -->
<!--SITENOTICE END-->

<h1 class="masthead-heading text-uppercase mb-0">
					Maamedia Newsroom
				</h1>
				
<div style="color:green; font-size:250%; font-weight:bold;">What happening on Maamedia?</div>
<div style="font-weight:bold; font-size:200%">You can read news also in <a href="https://meta.maamedia.org/wiki/Maamedia_News">Maamedia Meta-Wiki</a>.</div>
<br><br><br>
<input type=checkbox class=color_choice id=mode></div></div></div><header class=nav><nav class=nav-menu><div class=nav_bar-wrap><div class=nav_bar></div></div></nav></header><main><div class="wrap pt-2 mt-2"><article class="article mb-2"><a href=https://maamedia.org/news/we-started-advertising-on-Instagram class=grid-reverse><div class=article_thumb style=background-image:url(https://hbr.org/resources/images/article_assets/2021/02/Feb21_19_1218814245.jpg)></div><div class="article_meta center_y"><time class=post_date>June 03, 2021</time><h3 class=article_title>We started adverising on Instagram</h3><div class="article_excerpt visible"><p><p>On May 29, 2021, Maamedia started advertising on Instagram; see results.</p></p></div></div></a></article>

<!--Footer-->
<footer style="height:auto; color:white; background-color:black">
  <h1 style="color:white; background-color:black; padding:40px; margin:0; text-align:center;">Made with 🤍 Maamedia</h1>
<div style="border-radius: 3px; max-width: 800px; padding: 15px; margin:auto;margin-top: 15px;color: #7b7b7b;" align="center">
    <div style="font-size:140%">Legal Information</div>
         <a href="/privacy-policy">Privacy Policy</a><br>
         <a href="/tos">Terms of Use</a><hr style="margin: 8px;">
    <div style="font-size:140%">Contact to Maamedia</div>
    <i class="fa fa-envelope"></i> <a href="mailto:info@maamedia.org">info@maamedia.org</a><hr style="margin: 8px;">
    <div style="font-size:140%">Help</div>
        <a href="/faq">FAQ</a><br>
        <a href="https://crm.maamedia.org/support">Support</a><hr style="margin: 8px;">
    <div style="font-size:140%">Source code</div>
    <i class="fa fa-github"></i> <a href="https://github.com/maamedia">GitHub</a><br>
        <a href="/coding">Coding in Maamedia</a>
    
        </div>
</footer>
</body>
</html>
