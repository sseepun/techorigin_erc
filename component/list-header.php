<div class="list-header">
    <div class="block">
        <div class="text-wrapper">
            <form action="search-result.php" method="GET">
                <input type="text" name="search" placeholder="ค้นหา" required>
                <button type="submit" class="btn">
                    <i class="fas fa-search"></i>
                </button>
            </form>
        </div>
    </div>
    <div class="block">
        <div class="text-wrapper">
            เรียงลำดับข้อมูล 
            <select class="order">
                <option value="newest">ที่มาใหม่</option>
            </select>
        </div>
    </div>
    <div class="block">
        <div class="text-wrapper">
            <div class="options">
                <a href="#" class="btn grid-view" data-grid-view="1">
                    <i class="fas fa-th-large"></i>
                </a>
                <a href="#" class="btn grid-view" data-grid-view="2">
                    <i class="fas fa-th"></i>
                </a>
                <a href="#" class="btn grid-view" data-grid-view="3">
                    <i class="fas fa-list-ul"></i>
                </a>
                <a href="#" class="btn rss">
                    <i class="fas fa-rss"></i>
                </a>
            </div>
        </div>
    </div>
</div>
