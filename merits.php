<div class="merits">
    <div class="row title">
        <span>merits</span>
    </div>
    <?php for($i = 1; $i <= 10; $i++): ?>
        <div class="row">
            <div class="col-xs-5 col-md-7 meritsInput">
                <input type="text" id="merits-text-<?= $i ?>">
            </div>

            <div class="dotPoints">
                <?php for($j = 1; $j <= 10; $j++): ?>
                    <input type="radio" id="merits-<?= $i ?>-dot-<?= $j ?>" name="merits-<?= $i ?>" value="<?= $j ?>" onclick="checkDot(this, false)">
                    <label for="merits-<?= $i ?>-dot-<?= $j ?>"></label>
                <?php endfor; ?>
            </div>
        </div>
    <?php endfor; ?>
</div>

