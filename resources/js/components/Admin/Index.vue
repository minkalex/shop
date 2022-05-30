<template>
    <div class="row">
        <div class="col-md-3">
            <div class="small-box bg-gradient-info">
                <div class="inner">
                    <h3>44</h3>
                    <p>Orders</p>
                </div>
                <div class="icon">
                    <i class="fas fa-receipt"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="small-box bg-gradient-success">
                <div class="inner">
                    <h3>44</h3>
                    <p>Products</p>
                </div>
                <div class="icon">
                    <i class="fas fa-barcode"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="small-box bg-gradient-warning">
                <div class="inner">
                    <h3>44</h3>
                    <p>Categories</p>
                </div>
                <div class="icon">
                    <i class="fas fa-list-ul"></i>
                </div>
                <router-link :to="{ name: 'admin.categories.index' }" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </router-link>
            </div>
        </div>
        <div class="col-md-3">
            <div class="small-box bg-gradient-primary">
                <div class="inner">
                    <h3>44</h3>
                    <p>Users</p>
                </div>
                <div class="icon">
                    <i class="fas fa-users"></i>
                </div>
                <a href="#" class="small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "Index"
}
</script>
