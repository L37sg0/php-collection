<p>
    <label for="<?php echo $this->get_field_id('title'); ?>">
        <?php _e('Title:'); ?>
        <input
            class="widefat"
            type="text"
            id="<?php echo $this->get_field_id('title'); ?>"
            name="<?php echo $this->get_field_name('title'); ?>"
            value="<?php echo esc_attr($title); ?>"
        />
    </label>

    <label for="<?php echo $this->get_field_id('text'); ?>">
        <?php _e('Text:'); ?>
    </label>
    <textarea
        class="widefat"
        rows="16"
        id="<?php echo $this->get_field_id('text'); ?>"
        name="<?php echo $this->get_field_name('text'); ?>"
        >
        <?php echo esc_attr($text); ?>
    </textarea>
</p>