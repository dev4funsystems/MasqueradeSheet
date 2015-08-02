<?php

    $talent_array = array("alertness", "athletics", "awareness", "brawl", "empathy", "expression", "intimidation", "leadership", "streetwise", "subterfuge");
    $skill_array = array("animal ken", "crafts", "drive", "etiquette", "firearms", "larceny", "melee", "performance", "stealth", "survival");
    $knowledge_array = array("academics", "computer", "finance", "investigation", "law", "medicine", "occult", "politics", "science", "technology");
?>

<section class="row abilities">
    <div class="row sectionTitle">
        <h2>abilities</h2>
    </div>

    <div class="col-md-4">
        <div class="row groupTitle">
            <h3>talents</h3>
        </div>

        <?php foreach($talent_array as $talent): ?>
            <div class="row">
                <div class="col-xs-5 col-md-6">
                    <label class="abilitiesTitle"><?= $talent ?></label>
                </div>

                <div class="dotPoints">
                    <?php for($i = 1; $i <= 10; $i++): ?>
                        <input type="radio" id="<?= $talent ?>-dot-<?= $i ?>" name="<?= $talent ?>" value="<?= $i ?>" onchange="checkDot(this, false)">
                        <label for="<?= $talent ?>-dot-<?= $i ?>"></label>
                    <?php endfor; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="col-md-4">
        <div class="row groupTitle">
            <h3>skills</h3>
        </div>

        <?php foreach($skill_array as $skill): ?>
            <div class="row">
                <label class="abilitiesTitle col-xs-5 col-md-6"><?= $skill ?></label>

                <div class="dotPoints">
                    <?php for($i = 1; $i <= 10; $i++): ?>
                        <input type="radio" id="<?= $skill ?>-dot-<?= $i ?>" name="<?= $skill ?>" value="<?= $i ?>" onchange="checkDot(this, false)">
                        <label for="<?= $skill ?>-dot-<?= $i ?>"></label>
                    <?php endfor; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="col-md-4">
        <div class="row groupTitle">
            <h3>knowledges</h3>
        </div>

        <?php foreach($knowledge_array as $knowledge): ?>
            <div class="row">
                <label class="abilitiesTitle col-xs-5 col-md-6"><?= $knowledge ?></label>

                <div class="dotPoints">
                    <?php for($i = 1; $i <= 10; $i++): ?>
                        <input type="radio" id="<?= $knowledge ?>-dot-<?= $i ?>" name="<?= $knowledge ?>" value="<?= $i ?>" onchange="checkDot(this, false)">
                        <label for="<?= $knowledge ?>-dot-<?= $i ?>"></label>
                    <?php endfor; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
