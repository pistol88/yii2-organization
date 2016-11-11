<?php if($organizations) { ?>
    <div class="organizations-widget">
        <form action="<?=$action;?>" method="get">
            <select class="form-control" name="organization" onchange="$(this).parent('form').submit();">
                <option value="table">Организация</option>
                <?php foreach($organizations as $org) { ?>
                    <option <?php if($organization && $organization->id == $org->id) { ?> selected="selected"<?php } ?> value="<?=$org->id;?>"><?=$org->name;?></option>
                <?php } ?>
            </select>
        </form>
    </div>
<?php } ?>