<section class="row attributes">
    <div class="row sectionTitle">
        <span class="arrow-left"></span><h2>attributes</h2><span class="arrow-right"></span>
    </div>

    <div class="attributesGroup col-md-4">
        <div class="row groupTitle">
            <h3>Physical</h3>
        </div>

        <div class="row">
            <div class="col-xs-5 col-md-6">
                <label>strength</label>
            </div>

            <div class="dotPoints">
                <input type="radio" id="strength-dot-1" name="strength" value="1" onchange="checkDot(this, true)"
                       class="checkedDot" checked>
                <label for="strength-dot-1"></label>

                <?php for($i = 2; $i <= 10; $i++): ?>
                    <input type="radio" id="strength-dot-<?= $i ?>" name="strength" value="<?= $i ?>" onchange="checkDot(this, true)">
                    <label for="strength-dot-<?= $i ?>"></label>
                <?php endfor; ?>
            </div>
        </div>

        <div class="row">
            <label class="col-xs-5 col-md-6">dexterity</label>

            <div class="dotPoints">
                <input type="radio" id="dexterity-dot-1" name="dexterity" value="1" onchange="checkDot(this, true)"
                       class="checkedDot" checked>
                <label for="dexterity-dot-1"></label>

                <?php for($i = 2; $i <= 10; $i++): ?>
                    <input type="radio" id="dexterity-dot-<?= $i ?>" name="dexterity" value="<?= $i ?>" onchange="checkDot(this, true)">
                    <label for="dexterity-dot-<?= $i ?>"></label>
                <?php endfor; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-5 col-md-6">
                <label>stamina</label>
            </div>

            <div class="dotPoints">
                <input type="radio" id="stamina-dot-1" name="stamina" value="1" onchange="checkDot(this, true)"
                       class="checkedDot" checked>
                <label for="stamina-dot-1"></label>

                <?php for($i = 2; $i <= 10; $i++): ?>
                    <input type="radio" id="stamina-dot-<?= $i ?>" name="stamina" value="<?= $i ?>" onchange="checkDot(this, true)">
                    <label for="stamina-dot-<?= $i ?>"></label>
                <?php endfor; ?>
            </div>
        </div>
    </div>

    <div class="attributesGroup col-md-4">
        <div class="row groupTitle">
            <h3>Social</h3>
        </div>

        <div class="row">
            <div class="col-xs-5 col-md-6">
                <label>charisma</label>
            </div>

            <div class="dotPoints">
                <input type="radio" id="charisma-dot-1" name="charisma" value="1" onchange="checkDot(this, true)"
                       class="checkedDot" checked>
                <label for="charisma-dot-1"></label>

                <?php for($i = 2; $i <= 10; $i++): ?>
                    <input type="radio" id="charisma-dot-<?= $i ?>" name="charisma" value="<?= $i ?>" onchange="checkDot(this, true)">
                    <label for="charisma-dot-<?= $i ?>"></label>
                <?php endfor; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-5 col-md-6">
                <label>manipulation</label>
            </div>

            <div class="dotPoints">
                <input type="radio" id="manipulation-dot-1" name="manipulation" value="1" onchange="checkDot(this, true)"
                       class="checkedDot" checked>
                <label for="manipulation-dot-1"></label>

                <?php for($i = 2; $i <= 10; $i++): ?>
                    <input type="radio" id="manipulation-dot-<?= $i ?>" name="manipulation" value="<?= $i ?>" onchange="checkDot(this, true)">
                    <label for="manipulation-dot-<?= $i ?>"></label>
                <?php endfor; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-5 col-md-6">
                <label>appearance</label>
            </div>

            <div class="dotPoints">
                <input type="radio" id="appearance-dot-1" name="appearance" value="1" onchange="checkDot(this, true)"
                       class="checkedDot" checked>
                <label for="appearance-dot-1"></label>

                <?php for($i = 2; $i <= 10; $i++): ?>
                    <input type="radio" id="appearance-dot-<?= $i ?>" name="appearance" value="<?= $i ?>" onchange="checkDot(this, true)">
                    <label for="appearance-dot-<?= $i ?>"></label>
                <?php endfor; ?>
            </div>
        </div>
    </div>

    <div class="col-md-4 attributesGroup">
        <div class="row groupTitle">
            <h3>Mental</h3>
        </div>

        <div class="row">
            <div class="col-xs-5 col-md-6">
                <label>perception</label>
            </div>

            <div class="dotPoints">
                <input type="radio" id="perception-dot-1" name="perception" value="1" onchange="checkDot(this, true)"
                       class="checkedDot" checked>
                <label for="perception-dot-1"></label>

                <?php for($i = 2; $i <= 10; $i++): ?>
                    <input type="radio" id="perception-dot-<?= $i ?>" name="perception" value="<?= $i ?>" onchange="checkDot(this, true)">
                    <label for="perception-dot-<?= $i ?>"></label>
                <?php endfor; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-5 col-md-6">
                <label>intelligence</label>
            </div>

            <div class="dotPoints">
                <input type="radio" id="intelligence-dot-1" name="intelligence" value="1" onchange="checkDot(this, true)"
                       class="checkedDot" checked>
                <label for="intelligence-dot-1"></label>

                <?php for($i = 2; $i <= 10; $i++): ?>
                    <input type="radio" id="intelligence-dot-<?= $i ?>" name="intelligence" value="<?= $i ?>" onchange="checkDot(this, true)">
                    <label for="intelligence-dot-<?= $i ?>"></label>
                <?php endfor; ?>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-5 col-md-6">
                <label>wits</label>
            </div>

            <div class="dotPoints">
                <input type="radio" id="wits-dot-1" name="wits" value="1" onchange="checkDot(this, true)" class="checkedDot"
                       checked>
                <label for="wits-dot-1"></label>

                <?php for($i = 2; $i <= 10; $i++): ?>
                    <input type="radio" id="wits-dot-<?= $i ?>" name="wits" value="<?= $i ?>" onchange="checkDot(this, true)">
                    <label for="wits-dot-<?= $i ?>"></label>
                <?php endfor; ?>
            </div>
        </div>
    </div>

</section>

