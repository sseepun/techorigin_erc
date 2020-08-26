<style>
    .content-stat {padding: .25rem 0 .25rem 3.1875rem; border-color:#b6b6b6;}
    .content-stat .stat {margin: 0 0 0 .375rem;}
    .content-stat .stat .icon{border: .0625rem solid #656565; display:flex; justify-content:center; align-items:center; margin: 0 0 0 .5rem;}
    @media screen and (max-width:576px) {
        .content-stat {padding:0;}
    }

</style>
<div class="content-stat">
    <div class="block">
        <div class="stat">
            <?php echo $contentStat['date']; ?>
            <div class="icon"><i class="fas fa-clock"></i></div>
        </div>
        <div class="stat">
            <?php echo $contentStat['view_count']; ?>
            <div class="icon"><i class="fas fa-eye"></i></div>
        </div>
    </div>
    <div class="block">
        <div class="stat">
            Share 
            <a class="icon icon-share" href="#">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a class="icon icon-share" href="#">
                <i class="fab fa-twitter"></i>
            </a>
        </div>
    </div>
</div>
