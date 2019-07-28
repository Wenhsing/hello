<?php
/**
 * @Author: Wenhsing <wenhsing>
 * @Date:   2019-07-29T01:59:45+08:00
 * @Email:  1807926695@qq.com
 * @Filename: Hello.php
 * @Last modified by:   wenhsing
 * @Last modified time: 2019-07-29T03:21:59+08:00
 */
// 这里的命名空间在composer.json配置中的psr-4需要对应，否则无法加载
namespace wenhsing;
/**
 *
 */
class Hello
{
    public function say($v='')
    {
        return $v;
    }
}
