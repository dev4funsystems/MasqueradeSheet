<section class="row advantages">
    <div class="row sectionTitle">
        <h2>advantages</h2>
    </div>

    <div class="col-md-4 advantagesGroup">
        <div class="row groupTitle">
            <h3>disciplines</h3>
        </div>

        <?php for($i = 1; $i <= 6; $i++): ?>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <input type="text" id="discipline-text-<?= $i ?>">
                </div>

                <div class="dotPoints">
                    <?php for($j = 1; $j <= 10; $j++): ?>
                        <input type="radio" id="discipline-<?= $i ?>-dot-<?= $j ?>" name="discipline-<?= $i ?>" value="<?= $j ?>" onclick="checkDot(this, false)">
                        <label for="discipline-<?= $i ?>-dot-<?= $j ?>"></label>
                    <?php endfor; ?>
                </div>
            </div>
        <?php endfor; ?>
    </div>

    <div class="col-md-4 advantagesGroup">
        <div class="row groupTitle">
            <h3>backgrounds</h3>
        </div>

        <?php for($i = 1; $i <= 6; $i++): ?>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <input type="text" id="background-text-<?= $i ?>">
                </div>

                <div class="dotPoints">
                    <?php for($j = 1; $j <= 10; $j++): ?>
                        <input type="radio" id="background-<?= $i ?>-dot-<?= $j ?>" name="background-<?= $i ?>" value="<?= $j ?>" onclick="checkDot(this, false)">
                        <label for="background-<?= $i ?>-dot-<?= $j ?>"></label>
                    <?php endfor; ?>
                </div>
            </div>
        <?php endfor; ?>
    </div>

    <div class="col-md-4 advantagesGroup">
        <div class="row groupTitle">
            <h3>Virtues</h3>
        </div>

        <?php for($i = 1; $i <= 6; $i++): ?>
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <input type="text" id="virtue-text-<?= $i ?>">
                </div>

                <div class="dotPoints">
                    <?php for($j = 1; $j <= 10; $j++): ?>
                        <input type="radio" id="virtue-<?= $i ?>-dot-<?= $j ?>" name="virtue-<?= $i ?>" value="<?= $j ?>" onclick="checkDot(this, false)">
                        <label for="virtue-<?= $i ?>-dot-<?= $j ?>"></label>
                    <?php endfor; ?>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</section>
