<?php

$current_params = empty(http_build_query($filter)) ? "" : http_build_query($filter) . "&";

?>

<div class="sorting">
    <h5>Sorted By</h5>
    <div class="dropdown">
        <button class="dropbtn">select<span class="material-symbols-outlined">
                expand_more
            </span>
        </button>

        <div class="dropdown-content">
            <a href="?<?= $current_params ?>sort=az" class="sort-by <?= $sort === "az" ? "current-sort" : ""; ?>" data-sort="az">A to Z</a>
            <a href="?<?= $current_params ?>sort=za" class="sort-by  <?= $sort === "za" ? "current-sort" : ""; ?>" data-sort="za">Z to A</a>
            <a href="?<?= $current_params ?>sort=lh" class="sort-by  <?= $sort === "lh" ? "current-sort" : ""; ?>" data-sort="lh">Price Low to High</a>
            <a href="?<?= $current_params ?>sort=hl" class="sort-by  <?= $sort === "hl" ? "current-sort" : ""; ?>" data-sort="hl">Price High to Low</a>
        </div>
    </div>
</div>