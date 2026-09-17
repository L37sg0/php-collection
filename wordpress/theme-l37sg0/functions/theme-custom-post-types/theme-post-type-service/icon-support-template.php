<?php //$icon_options = array(
//    'fa fa-home' => 'Home',
//    'fa fa-user' => 'User',
//    'fa fa-envelope' => 'Envelope',
//); ?>

<!--<p><label for="l37sg0_service_icon_select">Select an Icon:</label></p>-->
<!--<p><select name="l37sg0_service_icon" id="l37sg0_service_icon_select">-->
<!---->
<?php //foreach ($icon_options as $icon => $label):
//    $selected = '';
//    if ($icon_value === $icon):
//        $selected = 'selected';
//    endif; ?>
<!--    <option value="--><?php //echo esc_attr($icon); ?><!--" --><?php //echo $selected; ?><!-->--><?php //echo esc_html($label); ?><!--</option>-->
<?php //endforeach; ?>
<!--</select></p>-->


<?php
//$icon_options = array(
//'home' => 'Home',
//'briefcase' => 'Briefcase',
//'cog' => 'Cog',
//'globe' => 'Globe',
//'heart' => 'Heart',
//);
//
//?>
<!--<select name="l37sg0_service_icon" id="l37sg0_service_icon">-->
<!--    <option value="">None</option>-->
<!--    --><?php //foreach ($icon_options as $key => $value) { ?>
<!--        <option value="--><?php //echo $key; ?><!--" --><?php //selected($key, $icon_value); ?><!-->--><?php //echo $value; ?><!--</option>-->
<!--    --><?php //} ?>
<!--</select>-->
<!---->
<!--<script>-->
<!--    jQuery(document).ready(function ($) {-->
<!--        var iconSelect = $('#l37sg0_service_icon_select');-->
<!--        var iconPreview = $('#l37sg0_service_icon_preview');-->
<!---->
<!--        iconSelect.change(function () {-->
<!--            var selectedIcon = $(this).val();-->
<!--            console.log(selectedIcon);-->
<!--            if (selectedIcon) {-->
<!--                iconPreview.attr('class', selectedIcon);-->
<!--                // window.FontAwesomeConfig = {autoReplaceSvg: false}-->
<!--                iconPreview.show();-->
<!--            } else {-->
<!--                iconPreview.hide();-->
<!--            }-->
<!--        });-->
<!--    });-->
<!--</script>-->
<!---->
<!--<div class="icon-preview">-->
<!--    --><?php //if (!empty($icon_value)) { ?>
<!--        <i class="fa fa---><?php //echo $icon_value; ?><!--" aria-hidden="true"></i>-->
<!--    --><?php //} ?>
<!--</div>-->


<?php //if ($icon_value): ?>
<!--    <p><label>Selected Icon:</label></p>-->
<!--    <p><i id="l37sg0_service_icon_preview" class="--><?php //echo esc_attr($icon_value); ?><!--"></i></p>-->
<?php //endif; ?>

<select name="l37sg0_service_icon" id="l37sg0_service_icon">
    <?php
    $icon_options = array(
        'fa fa-address-book' => 'Address Book',
        'fa fa-briefcase' => 'Briefcase',
        'fa fa-calendar' => 'Calendar',
        'fa fa-envelope' => 'Envelope',
        'fa fa-home' => 'Home',
    );
    foreach ($icon_options as $icon => $label) {
        printf(
            '<option value="%s"%s>%s</option>',
            esc_attr($icon),
            selected($icon_value, $icon, false),
            esc_html($label)
        );
    }
    ?>
</select>
<p>
    <i id="l37sg0_service_icon_preview" class="<?php echo esc_attr($icon_value); ?>"></i>
</p>
<script>
    jQuery(function ($) {
        $('#l37sg0_service_icon').on('change', function () {
            var iconValue = $(this).val();
            $('#l37sg0_service_icon_preview').removeClass().addClass(iconValue);
        });
    });
</script>
<!---->
<?php
//// List of available icons
//$icon_options = array(
//    'home' => array('icon' => 'fa fa-home', 'name' => 'Home'),
//    'briefcase' => array('icon' => 'fa fa-briefcase', 'name' => 'Briefcase'),
//    'users' => array('icon' => 'fa fa-users', 'name' => 'Users'),
//    'cog' => array('icon' => 'fa fa-cog', 'name' => 'Cog'),
//    'globe' => array('icon' => 'fa fa-globe', 'name' => 'Globe'),
//);
//
//// Get the selected icon value
//$icon_value = get_post_meta($post->ID, '_l37sg0_service_icon', true);
//?>
<!---->
<!--<label for="l37sg0_service_icon">--><?php //esc_html_e('Select an icon', 'l37sg0-service'); ?><!--</label>-->
<!--<select name="l37sg0_service_icon" id="l37sg0_service_icon">-->
<!--    --><?php //foreach ($icon_options as $option_name => $option_data) : ?>
<!--        <option value="--><?php //echo esc_attr($option_name); ?><!--" --><?php //selected($icon_value, $option_name); ?><!-->-->
<!--            --><?php //echo esc_html($option_data['name']); ?>
<!--        </option>-->
<!--    --><?php //endforeach; ?>
<!--</select>-->
<!--<p>-->
<!--    <i id="l37sg0_service_icon_preview" class="fa --><?php //echo esc_attr($icon_options[$icon_value]['icon']); ?><!--"></i>-->
<!--</p>-->
<!--<script>-->
<!--    (function ($) {-->
<!--        $(document).ready(function () {-->
<!--            // Update the preview icon based on the selected option-->
<!--            $('#l37sg0_service_icon').on('change', function () {-->
<!--                var iconValue = $(this).val();-->
<!--                var iconClass = '--><?php //echo esc_attr($icon_options[$icon_value]['icon']); ?>//';
//                $('#l37sg0_service_icon_preview').removeClass().addClass('fa ' + iconClass);
//            });
//        });
//    })(jQuery);
//</script>