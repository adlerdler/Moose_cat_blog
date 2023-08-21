<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>

<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle([
                'category' => _t('分类 %s 下的文章'),
                'search'   => _t('包含关键字 %s 的文章'),
                'tag'      => _t('标签 %s 下的文章'),
                'author'   => _t('%s 发布的文章')
            ], '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
    <link rel="stylesheet" href="<?php $this->options->themeUrl('normalize.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('grid.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
<link rel="stylesheet" href="<?php $this->options->themeUrl('prism.css');?>"> 
<script src="<?php $this->options->themeUrl('prism.js');?>"></script>
</head>

<body>

    <header id="header" class="clearfix">
        <div class="container">
            <div class="row">
                <div class="site-name col-mb-12 col-9">
                    <?php if ($this->options->logoUrl) : ?>
                        <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                            <img src="<?php $this->options->logoUrl() ?>" alt="<?php $this->options->title() ?>" />
                        </a>
                    <?php else : ?>
                        <a id="logo" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a>
                        <p class="description"><?php $this->options->description() ?></p>
                    <?php endif; ?>
                </div>
                <div class="site-search col-3 kit-hidden-tb">
                    <form id="search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">
                        <label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
                        <input type="text" id="s" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
                        <button type="submit" class="submit"><?php _e('搜索'); ?></button>
                    </form>
                </div>
                <div class="col-mb-12">
                    <nav id="nav-menu" class="clearfix" role="navigation">
                        <a<?php if ($this->is('index')) : ?> class="current" <?php endif; ?> href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a>
                            <a <?php if ($this->is('0')) : ?> class="current" <?php endif; ?> href="https://blog.csdn.net/qq_54026286" target="_blank"><?php _e('CSDN'); ?></a>
                            <a <?php if ($this->is('0')) : ?> class="current" <?php endif; ?> href="https://www.zhihu.com/people/lni-adler" target="_blank"><?php _e('知乎'); ?></a>
                            <a <?php if ($this->is('0')) : ?> class="current" <?php endif; ?> href="https://juejin.cn/user/3408956178309704" target="_blank"><?php _e('稀土掘金'); ?></a>
<a <?php if ($this->is('0')) : ?> class="current" <?php endif; ?> href="https://v.douyin.com/iJmemC2P/" target="_blank"><?php _e('抖音'); ?></a>
<a <?php if ($this->is('0')) : ?> class="current" <?php endif; ?> href="https://space.bilibili.com/451826931?spm_id_from=333.1007.0.0" target="_blank"><?php _e('BiliBili'); ?></a>
<a <?php if ($this->is('0')) : ?> class="current" <?php endif; ?> href="https://www.jianshu.com/u/ba2c1d9ee912" target="_blank"><?php _e('简书'); ?></a>
<a <?php if ($this->is('0')) : ?> class="current" <?php endif; ?> href="https://github.com/adlerdler" target="_blank"><?php _e('GitHub'); ?></a>
<a <?php if ($this->is('0')) : ?> class="current" <?php endif; ?> href="https://docs.adlerian.xyz/" target="_blank"><?php _e('GitBook'); ?></a>
                            <?php \Widget\Contents\Page\Rows::alloc()->to($pages); ?>
                            <?php while ($pages->next()) : ?>
                                <a<?php if ($this->is('page', $pages->slug)) : ?> class="current" <?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                                <?php endwhile; ?>
                    </nav>
                </div>
            </div><!-- end .row -->
        </div>
    </header><!-- end #header -->
    <div id="body">
        <div class="container">
            <div class="row">