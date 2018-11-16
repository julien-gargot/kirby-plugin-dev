<!-- DEV TOOLS -->
<div id="dev">
  <div class="<?php echo c::get('dev.grid.container.name','container-fluid') ?>">
    <div id="grid" class="row">
      <?php for ($i=1; $i <= c::get('dev.grid.column.count',12); $i++) : ?>
      <div class="col-xs-1 col-1"><div class="in"><?= $i ?></div></div>
      <?php endfor ?>
    </div>
    <div class="row">
      <div class="col-xs-12 col-12">
        <div id="size"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-12">
        <div id="width"></div>
      </div>
    </div>
  </div>
</div>

<script src="/media/plugins/julien-gargot/dev/js/dev.js" charset="utf-8"></script>
