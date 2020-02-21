<?php $this->need('header.php'); ?>
<!-- Content -->
<section class="container main-load">
    <article class="post_article" itemscope itemtype="https://schema.org/Article">
    <?php $this->content(); ?>
    </article>
</section>
<?php $this->need('footer.php'); ?>