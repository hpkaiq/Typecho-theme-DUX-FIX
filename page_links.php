<?php
/**
 * 友情链接
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

    <div class="container container-no-sidebar">
        <div class="content">
            <header class="article-header">
                <h1 class="article-title"><a href="<?php $this->permalink(); ?>"><?php $this->title() ?></a></h1>
            </header>
            <article class="article-content">
                <?php parseContent($this); ?>
            </article>
<?php $this->need('comments.php'); ?>
        </div>
    </div>
<?php $this->need('footer.php'); ?>