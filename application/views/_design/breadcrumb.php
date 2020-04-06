<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <?php echo ucfirst($title); ?>
        <small><?php echo $sub_title; ?></small>
    </h1>
    <ol class="breadcrumb">
        <?php foreach ($this->uri->segments as $segment): ?>
            <?php
            $url = substr($this->uri->uri_string, 0, strpos($this->uri->uri_string, $segment)) . $segment;
            $is_active = $url == $this->uri->uri_string;
            ?>


            <li class="breadcrumb-item <?php echo $is_active ? 'active' : '' ?>">
                <?php if ($is_active): ?>
                    <?php echo ucfirst(str_replace('_', ' ', $segment)) ?>
                <?php else: ?>
                    <a href="<?php echo site_url($url) ?>"><?php echo ucfirst(str_replace('_', ' ', $segment)) ?></a>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>              
    </ol>
</section>


