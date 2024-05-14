<?php

function update_params($key_to_update, $new_value = null)
{
    global $filter, $sort;
    $new_filter = $filter;

    if (is_array($key_to_update)) {
        foreach ($key_to_update as $key) {
            $new_filter[$key] = $new_value;
        }
    } else {
        $new_filter[$key_to_update] = $new_value;
    }

    return "?" . http_build_query($new_filter) . "&sort=$sort";
}

?>
<div class="filter-collection">
    <div class="filter1 filter">
        <h4><span class="material-symbols-outlined">
                expand_more
            </span>Category</h4>
        <a href="<?= update_params("category") ?>" class="category-filter">All</a>
        <?php foreach ($categories as $category) : ?>
            <a href="<?= update_params("category", $category["categoryName"]) ?>" class="category-filter <?= $category['categoryName'] == $filter["category"] ? "active" : "" ?>"><?= $category['categoryName']  ?></a>
        <?php endforeach; ?>
    </div>
    <div class="filter2 filter">
        <h4><span class="material-symbols-outlined">
                expand_more
            </span>Brand</h4>
        <a href="<?= update_params("brand") ?>" class="category-filter">All</a>
        <?php foreach ($brands as $brand) : ?>
            <a href="<?= update_params("brand", $brand["name"]) ?> " class="category-filter <?= $brand["name"] == $filter["brand"] ? "active" : "" ?>"><?= $brand["name"] ?></a>
        <?php endforeach; ?>
    </div>
    <form action="" class="price_range">
        <h4><span class="material-symbols-outlined">
                expand_more
            </span>Price Range</h4>
        <div class="custom-wrapper">
            <div class="price-input-container">
                <div class="price-input">
                    <div class="price-field">
                        <span>From</span>
                        <input type="number" id="minPrice" class="min-input" value="<?= $filter["min"] ?>" name="min">
                    </div>
                    <div class="price-field">
                        <span>To</span>
                        <input type="number" id="maxPrice" class="max-input" value="<?= $filter["max"] ?>" name="max">
                    </div>
                </div>
                <div class="slider-container">
                    <div class="price-slider">
                    </div>
                </div>
            </div>

            <!-- Slider -->
            <div class="range-input">
                <input type="range" id="minRange" class="min-range" min="0" max="10000" value="<?= $filter["min"] ?>"" step=" 1">
                <input type="range" id="maxRange" class="max-range" min="0" max="10000" value="<?= $filter["max"] ?>"" step=" 1">
            </div>
        </div>
        <button class="filter-btn">Filter</button>
        <a href="<?= update_params(["min", "max"]) ?>">Clear</a>

    </form>
</div>