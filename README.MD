<p>
<strong><h2>李凡の主页</h2></strong>
简单的小主页，原来的看够了，重新弄了一个
</p>

# 李凡的主页



---

更新

全新主页+全新搜索引擎

---



本次更新网站源码，占用空间更小，响应更快

网站首页换新，旧版页放二级菜单

更新邮箱功能，支持发送邮箱给我。


更新于 2023-01-05  by李凡

---



我从接触网站开发有好多年了，可是一直是未入门状态，期间陆陆续续搞来七八个网站，本文不谈技术，谈回忆吧。

之前有用Vmware搭服务器的，有搭建本机网站，买过三丰云服务器，腾讯云服务器，阿里云服务器。

我记得最早是在初一或者初二吧，那时候买了一台美国的虚拟主机，后来依稀记得搞了台香港的VPS搭建的科学节点，我记得就一个节点，配置了起码一个月，然后那时候我记得，我用的是微软的Pages 软件，目前我想不起来了，已经好多年了，我记得那时候在里面传一些小游戏啥的，那域名我记得是个三级域名，我那时候慢慢接触网站开发，记得第一次在初二，开发了我的照片墙，emm放的是我喜欢的女生的，其实也不算吧，就是感觉挺漂亮一女生，后来也没有音讯了，这是我的初代照片墙这几年，Wordpress，Zblog ，emlog, hexo，typecho 都使用过。

其实我很早接触了Github Pages ，一直觉得复杂，其实不复杂，很多人止在了第一步，目前我已经相对熟悉了这个技术，就单纯做我的个人引导页了，放静态网页的话，我又不想自己的成果被fork，因此我的笔记放在了notion。目前Github Pages网页有点简单，我计划在近期，在24考研之前吧，完成一个全新自己自主开发的网页。目前在学习Python，C，Html，Css..未来计划学习Java，Javascript，jQuery，数据库，Vue等等吧，目前挺喜欢这方面的，不过理想归理想，估计每个人在刚毕业这两年都喜欢多学习一些技术吧。



更新于2022-11-19  by李凡

---



春华秋实，欢迎期待，谢谢你来观看我的废话。





### Demo

>由于 CDN 缓存原因，查看最新效果可能需要 `Ctrl` + `F5` 强制刷新浏览器缓存

- [x] 载入动画
- [x] 站点简介
- [x] Hitokoto 一言
- [x] 日期及时间
- [x] 实时天气
- [x] 时光进度条
- [x] 音乐播放器
- [x] 移动端适配

* [ ] 去除 jQuery 依赖
* [ ] VUE 重构

### 天气

由于原天气 API 不稳定，已更换天气 API，现需要前往以下网站获取 key

- 前往 [ROLL](https://www.mxnzp.com/doc/list) 获取 app_id 和 app_secret，用于获取城市信息
- 前往 [和风天气](https://dev.qweather.com/) 获取 key，用于获取天气信息

也可自行更换其他方式

<!-- ### 配置

本项目采用 `json` 文件来配置站点内容，该配置不受版本更新影响，可将自定义配置写入 `setting.json` 以更改页面内容

<details>
<summary>配置说明</summary>

```json
{
    "title": "网页标题",
    "description": "网页简短介绍",
    "keywords": "网页关键词",
    "author": "网页作者",
    "logo_img": "Logo图片路径",
    "logo_text_1": "域名前缀",
    "logo_text_2": "域名后缀",
    "des_title": [
        "Hello World !", //站点介绍标题
        "一个建立于 21 世纪的小站，存活于互联网的边缘" //站点介绍内容
    ],
    "des_title_change": [
        "Oops !", //站点介绍标题点击后文字
        "哎呀，这都被你发现了 ( 再点击一次可关闭 )" //站点介绍内容点击后文字
    ],
    "github": "imsyy", //Github 用户名
    "qq": "1539250352", //QQ
    "email": "one@imsyy.top", //Email电子邮件
    "telegram": "bottom_user", //Telegram 用户名
    "twitter": "iimmsyy", //Twitter用户名
    "weather_api": "https://www.yiketianqi.com", //天气 API
    "link_1": [
        "https://blog.imsyy.top/", //链接地址
        "fa-solid fa-blog", //图标类名
        "博客" //链接文字
    ],
    "link_2": [
        "https://drive.imsyy.top/",
        "fa-solid fa-cloud",
        "网盘"
    ],
    "wallpaper_api": [
        [
            "每日一图", //壁纸设置项名称
            "https://api.dujin.org/bing/1920.php" //壁纸图片链接
        ]
    ],
    "Copyright_year": "2020", //站点起始年份
    "Copyright_text": "無名" //版权
}
```

</details> -->

### 音乐

>本项目采用了基于 `MetingJS` 的 `Aplayer` 音乐播放器，可实现快速自定义歌单  
>*仅支持 **中国大陆地区**，其他区域请将 [以下内容](https://cdn.jsdelivr.net/gh/imsyy/file/js/music/music-other.js) 替换 `music.js` 以实现音乐播放器的正常使用

更改 `music.js` 的参数即可实现自定义歌单列表

```js
let server = "netease"; //netease: 网易云音乐; tencent: QQ音乐; kugou: 酷狗音乐; xiami: 虾米; kuwo: 酷我
let type = "playlist"; //song: 单曲; playlist: 歌单; album: 唱片
let id = "7452421335"; //封面 ID / 单曲 ID / 歌单 ID
```

### 字体

现采用 `HarmonyOS Sans` 开源字体，采用字体拆分，提升加载速度

>由于本站 `CDN` 已开启防盗链，**非本站域名不可访问**，请将字体引入链接更改为下方内容，否则 **自定义字体将失效**
>
>`https://s1.hdslb.com/bfs/static/jinkela/long/font/regular.css`

<details>
<summary>旧版方式</summary>

>由于本项目引入了中文字体，需要压缩中文字体以提高网页加载速度（ 也可以取消使用中文字体 ）

#### 中文字体去除繁体

- 安装 `Python 3.7` 和 `pip`
- 运行 `pip install fonttools`
- 下载 [sc_unicode.txt](https://gist.githubusercontent.com/imaegoo/d64e5088b723c2e02c40985f55ff12db/raw/5ebd2ce49418c73459a9dfe050483409306a6c1d/sc_unicode.txt)
- 运行 `pyftsubset 字体名称.ttf --unicodes-file=sc_unicode.txt`

#### 字体进一步压缩

- 编译安装 `Google woff2`

```bash
sudo apt-get install -y git g++ make
git clone --recursive https://github.com/google/woff2.git
cd woff2
make clean all
```

- 再压缩字体

```
./woff2_compress ./字体名称.ttf
```

- 最终可对原字体进行缓加载，**先行加载压缩后的字体**

>详细信息可前往 [虹墨空间站](https://www.imaegoo.com/2020/chinese-font-compress/) 查看原文

</details>

### 插件

* [Bootstrap](https://getbootstrap.com/)
* [iziToast](https://izitoast.marcelodolza.com/)
* [Font Awesome](https://fontawesome.com/)
* [jQuery](https://jquery.com/)
* [Aplayer](https://aplayer.js.org/)

### API

* [MetingAPI By 武恩赐](https://api.wuenci.com/meting/api/)
* [小歪 API](https://api.ixiaowai.cn/)
* [和风天气](https://dev.qweather.com/)
* [ROLL](https://www.mxnzp.com/doc/list)
* [Hitokoto 一言](https://hitokoto.cn/)

<a title="SSL" target="_blank" href="https://myssl.com/seal/detail?domain=blog.imsyy.top"><img src="https://img.shields.io/badge/MySSL-安全认证-brightgreen"></a>&nbsp;<a title="CDN" target="_blank" href="https://cdnjs.com/"><img src="https://img.shields.io/badge/CDN-Cloudflare-blue"></a>&nbsp;<a title="Copyright" target="_blank" href="https://imsyy.top/"><img src="https://img.shields.io/badge/Copyright%20%C2%A9%202020--2022-%E7%84%A1%E5%90%8D-red"></a>
