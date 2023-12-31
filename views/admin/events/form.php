<fieldset class="form__fieldset"> <legend class="form__legend">Event Information</legend>

    <div class="form__field">
        <label for="name" class="form__label">Name</label>

        <input
            type="text"
            class="form__input"
            id="name"
            name="name"
            placeholder="Event Name"
            value="<?php echo $event->name;?>"
        />
    </div>

    <div class="form__field">
        <label for="description" class="form__label">Description</label>

        <textarea
            class="form__input"
            id="description"
            name="description"
            placeholder="Event Description"
            rows="8"
        /><?php echo $event->description;?></textarea>
    </div>

    <div class="form__field">     <label for="category" class="form__label">Category or Type of Event</label>

        <select class="form__select" id="category" name="category_id">
            <option value="">- Select -</option>
            <?php foreach($categories as $category) { ?>
                <option <?php echo ($event->category_id === $category->id) ? 'selected' : '' ?> value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
            <?php } ?>
        </select>
    </div>

    <div class="form__field">
        <label for="description" class="form__label">Select the day</label>

        <div class="form__radio">
            <?php foreach($days as $day) {?>
                <div>
                    <label for="<?php echo strtolower($day->name); ?>"> <?php echo $day->name; ?></label>

                    <input 
                        type="radio"
                        id="<?php echo strtolower($day->name); ?>"
                        name="day"
                        value="<?php echo $day->id; ?>"
                        <?php echo ($event->day_id === $day->id) ? 'checked' : '';?>
                    />
                </div>
            <?php } ?>
        </div>
            <input type="hidden" name="day_id" value="<?php echo $event->day_id ?>"/>
        </div>

    <div id="hours" class="form__field">
        <label class="form__label">Select Time</label>
        
        <ul id="hours" class="hours"> 
            <?php foreach($hours as $hour) {?>
                <li data-hour-id="<?php echo $hour->id;?>" class="hours__hour hours__hour--disabled"><?php echo $hour->hour; ?></li>
            <?php } ?>
        </ul>

        <input type="hidden" name="hour_id" value="<?php echo $event->hour_id; ?>"/>
    </div>

</fieldset>

<fieldset class="form__fieldset">
    <legend class="form__legend">Extra Information</legend>

    <div class="form__field">
        <label for="speakers" class="form__label">Speaker</label>

        <input
            type="text"
            class="form__input"
            id="speakers"
            placeholder="Search Speaker"
        />

        <ul id="speakers-list" class="speakers-list"></ul>

        <input type="hidden" name="speaker_id" value="<?php echo $event->speaker_id ?>"/> 
    </div>

    <div class="form__field">
        <label for="available" class="form__label">Places Available</label>

        <input
            type="number"
            min="1"
            class="form__input"
            id="available"
            name="available"
            placeholder="Ej. 10"
            value="<?php echo $event->available;?>"
        />
    </div>

</fieldset>