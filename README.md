agama 是 wordpress 的免费主题: [https://wordpress.org/themes/agama/](https://wordpress.org/themes/agama/)
为跟随主题发布者版本迭代，现对我个人(zhaofeng-shu33)对 agama及其使用的framework/kirki
的修改情况列出如下：
第一类： 为解决国内服务器无法访问google的cdn。
`./framework/admin/kirki/modules/webfonts/class-kirki-modules-webfonts-async.php`
将对webfont的请求改为对本地一个空文件 `test.js`的请求。

`./framework/class-agama-core.php`
将对google cdn 上的css请求改为对本地空文件 `test.css`的请求。

第二类： 为将基础版的slides数量限制由2个提升为4个，由于agama基础版发行的license 是 gpl，通过发行修改后的源码不会造成版权问题。

* `./framework/class-agama-slider.php`
* `./framework/admin/customizer.php`
* `./assets/css/partial-refresh.css`
* `./admin/modules/pro-features/pro-features.php`
* `./framework/admin/partial-refresh.php`

