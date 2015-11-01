<?php
$params = array();
if (isset($vtParams)) {
    foreach ($vtParams as $key => $value) {
        $params = array_merge(array($key => $value), $params);
    }
}
?>
<?php if ($pager->haveToPaginate()): ?>

        <ul class="pagination">
            <?php if ($pager->getPage() != $pager->getFirstPage()): ?>
            <li><a class="prev" href="<?php echo url_for($redirectUrl, array_merge(array('page' => $pager->getPreviousPage()), $params)); ?>">&laquo;</a></li>
            <?php endif; ?>
            <?php foreach ($pager->getLinks() as $page): ?>
                <?php if ($page == $pager->getPage()): ?>
            <li><a href="#" class="active"><?php echo $page ?></a></li>
                <?php else: ?>
            <li> <a href="<?php echo url_for($redirectUrl, array_merge(array('page' => $page), $params)) ?>"><?php echo $page ?></a></li>
                <?php endif; ?>
            <?php endforeach; ?>
            <?php if ($pager->getPage() != $pager->getLastPage()) : ?>
            <li><a class="prev" href="<?php echo url_for($redirectUrl, array_merge(array('page' => $pager->getNextPage()), $params)); ?>">&raquo;</a></li>
            <?php endif; ?>
        </ul>

<?php endif; ?>
