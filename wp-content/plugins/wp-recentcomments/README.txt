=== WP-RecentComments ===
Contributors: mg12
Donate link: http://www.neoease.com/contact/#donate
Tags: comments, widget, sidebar, AJAX, option
Requires at least: 2.5
Tested up to: 3.4.2
Stable tag: 2.2.7

Display recent comments in your blog sidebar.

== Description ==

Show the recent comments in your WordPress sidebar. You can limit the number of comments, set the maximum length of excerpts, filter out pingbacks/trackbacks. You can also enable or disable the avatars, resize and reposition them. Besides above, it supports WordPress Widget. And now, it's AJAX paged comments, you can turn to the newer or older comments when you clicked on the paging buttons.

在 WordPress 的侧边栏显示最新评论。你可以限制显示评论的数量，设置评论摘要的最大长度，过滤反链接评论。你还可以显示或屏蔽评论者头像，调整头像的尺寸和位置。除此之外，此插件还支持 WordPress Widget 功能。而现在，它支持基于 AJAX 的评论分页，你可以通过点击分页按钮来查看新旧评论。

**Features:**

* Support for East Asian characters
* Avatar support
* Widget support
* AJAX paged comment
* Expend comment contents
* Separating pingbacks/trackbacks from comments
* Support 'Show smilies as graphic icons' option
* Filter quotes
* Support jQuery lib
* SEO friendly

**Supported Languages:**

* US English/en_US (default)
* 简体中文/zh_CN ([mg12](http://www.neoease.com/))
* 繁體中文/zh_TW ([Pseric](http://pseric.com/))
* Albanian/sq_AL ([Romeo Shuka](http://www.romeolab.com/))
* Arabic/ar (Mustafa)
* Belorussian/by_BY (Marcis Gasuns)
* Bulgarian/bg_BG ([Emil Minev](http://www.inspirelearning.net/))
* Czech/cs_CZ (Ladislav Prskavec)
* Danish/da_DK ([Morten L. Johansen](http://www.lystorp.com/))
* Dutch/nl_NL ([Jan Willem Wilmsen](http://directic.nl/))
* Finnish/fi (Christian Hellberg)
* Français/fr_FR (Luc Santeramo)
* German/de_DE ([Sylvia Egger](http://sprungmarker.de/))
* Hungarian/hu_HU (János Csárdi-Braunstein)
* Israel Hebrew/he_IL ([Roy Azrad](http://www.lawtech.co.il/))
* Italian/it_IT (Enrico Flaminios)
* Lithuania/lt_LT ([Mantas Malcius](http://mantas.malcius.lt/))
* Macedonian/mk_MK ([Dimitar Talevski](http://www.solipamet.com/))
* Persian/fa_IR ([Farzad Sagharchi](http://blog.sagharchi.ir/))
* Polish/pl_PL ([Chris Ostrowski](http://www.kierunek-sukces.pl/))
* Russian/ru_RU ([Алексей В.Ч.](http://www.alexnote.ru/))
* Spanish/es_ES (Eugenio Cavero)
* Swedish/sv_SE (Jonas Nordström & Patrik Hultgren)
* Türkçe/tr_TR ([Hamdi Kellecioglu](http://www.tirnakmakasi.com/))
* Ukrainian/uk ([Jurko Chervony](http://pavonine.com.ua/cat/themes/))

**Demo:**

[http://www.neoease.com/](http://www.neoease.com/)

== Installation ==

1. Unzip archive to the '/wp-content/plugins/' directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. (Optional) Go to 'Settings->WP-RecentComments' to change the options.
4. This is two ways to add the WP-RecentComments widget to the sidebar:
    * Go to 'Design->Widgets' and add the WP-RecentComments to your blog.
    * In your 'sidebar.php' file add the following lines:
****

    <h3>Recent Comments</h3>
    <ul><?php wp_recentcomments(); ?></ul>

**Custom CSS:**

* WP-RecentComments will load wp-recentcomments.css from your theme directory if it exists.
* If it doesn't exists, it will load the default style that comes with WP-RecentComments.

== Frequently Asked Questions ==

= That's why it's 'loading...' and never show comment list? =

1. Check footer.php file of your theme, if you cannot find `<?php wp_footer(); ?>`, please add `<?php wp_footer(); ?>` before `</body>`.
2. (If that's okay with step 1, ignore this.) Check the plugin settings on 'Settings -> WP-RecentComments', and reset JavaScript Lib to 1st or 2nd item.

= Comments are messed up after update plugin? =

1. Select 'Use wp-recentcomments.css' in 'Settings -> WP-RecentComments' page.
2. (If that's okay with step 1, ignore this.) Remove wp-recentcomments.css file in theme directory if it exists.

== Screenshots ==

1. Recent comments on sidebar.
2. options of WP-RecentComments plugin.

== Changelog ==

****

    VERSION DATE       TYPE   CHANGES
    2.2.7   2012/11/29 FIX    Compatible with WordPress 3.5 Release Candidate.
    2.2.6   2012/11/27 FIX    Fixed avatars when author leave a comment via thirdparty tools.
    2.2.5   2012/10/09 MODIFY Remove redundant code.
                       FIX    Checks to see if attribute exists on external links.
    2.2.4   2012/09/28 MODIFY Update Ukrainian translation. (Thanks Jurko Chervony)
                       MODIFY Change some function name.
    2.2.3   2012/08/27 FIX    Fixed comments when reviewer name contain '\' character.
    2.2.2   2012/08/22 MODIFY Edit JavaScript with JSHint rules.
                       MODIFY Add notice when submit successfully.
    2.2.1   2012/05/15 MODIFY Optimize SQL.
                       MODIFY Update Swedish translation. (Thanks Patrik Hultgren)
    2.2     2012/04/27 NEW    Add 'Show timestamps' feature.
                       MODIFY Load first page data when page ready.
                       MODIFY Update Traditional Chinese translation.
                       MODIFY Update Simplified Chinese translation.
    2.1.1   2012/04/03 NEW    Security vulnerability fixed and add 'Show post content' feature back. (Thanks MonDad, http://wordpress.org/support/topic/plugin-wp-recentcomments-v21-unnecessarily-removes-feature-when-security-vulnerability-could-be-fixed?replies=2#post-2728043)
                       MODIFY Update Traditional Chinese translation.
                       MODIFY Update Simplified Chinese translation.
    2.1     2012/03/29 DELETE Removed 'Show post content' feture because security vulnerabilities do occur (http://secunia.com/advisories/47870/).
                       MODIFY Update Hungarian translation.
    2.0.7   2011/07/29 FIX    Fixed an XSS vulnerability that uses a bug in AJAX pagings.
    2.0.6   2010/11/29 FIX    Format the post titles of JSON.
    2.0.5   2010/11/28 NEW    Added Traditional Chinese support. (Thanks Pseric)
                       FIX    Do nothing when recent comment list is not exist.
    2.0.4   2010/10/14 NEW    Added 'Open external pages in a new tab/window.' option.
                       FIX    Removed 'rel=external' properties from post links.
    2.0.3   2010/10/09 FIX    Compatible with IE7 & IE8.
                       FIX    Fixed links of pingbacks and trackbacks.
                       FIX    Show smilies in excerpt.
                       FIX    Avatar always there.
    2.0.2   2010/10/08 NEW    For users without a custom avatar of their own, you can either display a generic logo or a generated one on 'Settings -> Discussion Settings' page.
                       FIX    Change class name from 'clearfix' to 'rc-clearfix'.
                       FIX    Fixed the comments of admins, pingbacks and trackback.
                       FIX    Doesn't load CSS and JavaScript on admin pages. (Thanks 臻)
                       FIX    Fixed init JSON. (Thanks 3077994)
    2.0.1   2010/10/08 FIX    Show 'Anonymous' as reviewer name when empty.
                       FIX    Last comment is hidden.
                       FIX    'Show the comments from administrators' option is disabled when $table_prefix isn't 'wp_'.
                       FIX    Show 'undefined' when mouse over reviewer names.
                       FIX    Load comments on document ready.
    2.0     2010/10/07 NEW    It was rewritten, work faster and SEO friendly now.
                       NEW    Added Albanian language support. (Thanks Romeo Shuka)
                       NEW    Added Dutch language support. (Thanks Jan Willem Wilmsen)
                       MODIFY Update Simplified Chinese translation.
                       MODIFY Update Ukrainian translation. (Thanks Jurko Chervony)
                       MODIFY HTML layout was changed.
                       MODIFY Control plugin on setting page, but arguments.
                       DELETE Removed 'default avatar' option.
    1.8.2   2010/06/24 MODIFY Add nofollow to the links to ensure its SEO friendly.
                       REMOVE Remove the HTML comments.
    1.8.1   2009/09/15 NEW    Added Finnish language support. (Thanks C. Hellberg)
                       NEW    Added Czech language support. (Thanks Ladislav Prskavec)
                       FIX    Set JavaScript type to 'normal' as default.
                       FIX    Don't load jQuery lib when custom jQuery lib is null.
                       FIX    Changed content-type of AJAX actions.
    1.8     2009/06/07 NEW    jQuery is now supported. (JavaScript library option)
                       NEW    Added Swedish language support. (Thanks Jonas Nordström)
                       NEW    Added Lithuania language support. (Thanks Mantas Malcius)
                       NEW    Added Belorussian language support. (Thanks Marcis Gasuns)
                       MODIFY Update Simplified Chinese translation.
                       FIX    Block the comments if they doesn't come from publish posts.
                       FIX    Fixed the messy code when changed pages.