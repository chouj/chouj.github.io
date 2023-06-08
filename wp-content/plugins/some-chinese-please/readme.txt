=== Plugin Name ===
Contributors: 冰古
Donate link: http://wanwp.com/plugins/some-chinese-please/
Tags: comments, spam, Chinese
Requires at least: 2.6
Tested up to: 3.0.3
Stable tag: 1.0.7

用中文写作的blog必备的防御spam插件

== Description ==

这是为用为中文写作的朋友准备的一款防御spam插件。
它可以有效地拦截内容中不带有中文字的comment和trackback(pingback)，不写入数据库中，可有效地减小spam对blog服务器的无谓使用。

== Changelog ==

= 1.0.7 =

* 修復文章不開放留言時javascript報錯，修復啟用插件後ctrl+enter不能正常使用的問題。（謝謝 lite3 提出修復方法 http://goo.gl/1ACNe ）
* 可選擇是否對trackback(pingback)進行過濾

= 1.0.6 =

* 修复提交无中文留言时，提示语显示为乱码现象

= 1.0.5 =

* 可选择登录用户是否需要通过测试
* 在出错页添加返回链接

= 1.0.4 =

* 清除多余的wp_enqueue_script('jquery');
* 仅在单篇文章或页面中加入js提示。

= 1.0.3 =

* 通过W3C HTML验证

= 1.0.2 =

* 用小段的JavaScript代替jQuery。
* 提示中可使用WordPress内置的表情丰富提示内容。

= 1.0.1 =

* 增加设置子菜单，用于设置是否在留言框的底部显示一段英文提示，告知留言者要在留言中添加中文才能通过spam测试。

== Installation ==

安装只需下载压缩包，解压后，把`SomeChinesePlease`文件夹上传到`/wp-content/plugins/`文件夹中，最后在后台激活即可使用。